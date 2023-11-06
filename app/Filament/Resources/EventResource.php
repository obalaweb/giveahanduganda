<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EventResource extends Resource {
	protected static ?string $model = Event::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Form $form): Form {
		return $form
			->schema([
				TextInput::make('name'),
				TextInput::make('category'),
				FileUpload::make('thumbnail'),
				TextArea::make('venue')
					->autosize(),
				DateTimePicker::make('date')
					->native(false),
				MarkdownEditor::make('about'),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				//
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

	public static function getRelations(): array {
		return [
			//
		];
	}

	public static function getPages(): array {
		return [
			'index' => Pages\ListEvents::route('/'),
			'create' => Pages\CreateEvent::route('/create'),
			'edit' => Pages\EditEvent::route('/{record}/edit'),
		];
	}
}
