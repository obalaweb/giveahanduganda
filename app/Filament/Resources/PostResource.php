<?php

namespace App\Filament\Resources;

use App\Enums\PostStatusEnum;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-c-newspaper';
    protected static ?string $navigationGroup = 'Modules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('New Post')
                    ->schema([
                        TextInput::make('title')
                            ->live()
                            ->afterStateUpdated(
                                fn (Set $set, ?string $state) => $set('slug', Str::slug($state))
                            )->columnSpanFull(),
                        RichEditor::make('body'),
                        FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->imageEditor(),
                        TextInput::make('slug'),
                        TagsInput::make('tags'),
                        Select::make('category_id')
                            ->native(false)
                            ->relationship(name: 'category', titleAttribute: 'name')
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('slug')
                                    ->required(),
                            ]),
                        Select::make('isPublished')
                            ->label('Status')
                            ->options([
                                0 => 'Draft',
                                1 => 'Publish'
                            ])->required()
                            ->searchable(),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('tags')
                    ->badge()
                    ->separator(','),
                TextColumn::make('isPublished')
                    ->label('Status')
                    ->color('primary'),
                // TextColumn::make('isPublished')
                // 	->badge()
                // 	->color(fn(int $state): string => match ($state) {
                // 		Post::DRAFT => 'Draft',
                // 		Post::PUBLISHED => 'Published',
                // 	}),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    function getPostStatusLabels(): array
    {
        return [
            PostStatusEnum::DRAFT => 'Draft',
            PostStatusEnum::PUBLISHED => 'Published',
        ];
    }
}
