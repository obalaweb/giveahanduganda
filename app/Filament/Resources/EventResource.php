<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'iconpark-plan';
    protected static ?string $navigationGroup = 'Modules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('New Event')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->maxFiles(1)
                            ->columnSpanFull(),
                        TextInput::make('name'),
                        TextInput::make('category'),
                        RichEditor::make('about')
                            ->columnSpanFull(),
                        Textarea::make('venue'),
                        DatePicker::make('date'),
                        TimePicker::make('from'),
                        TimePicker::make('to'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('category'),
                TextColumn::make('date'),
                TextColumn::make('from')->badge()->color('info'),
                TextColumn::make('to')->badge()->color('success')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
