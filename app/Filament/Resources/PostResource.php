<?php

namespace App\Filament\Resources;

use App\Enums\PostStatus;
use App\Enums\PostStatusEnum;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
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
                        Radio::make('status')
                            ->options(PostStatus::class),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->wrap(),
                TextColumn::make('tags')
                    ->badge()
                    ->color('info')
                    ->separator(','),
                TextColumn::make('status')
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
}
