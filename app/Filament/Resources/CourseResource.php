<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CourseResource extends Resource {
	protected static ?string $model = Course::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	protected static ?string $navigationGroup = 'Modules';

	public static function form(Form $form): Form {
		return $form
			->schema([
				TextInput::make('title')
					->live()
					->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
				Hidden::make('slug'),
				TextInput::make('total')
					->numeric(),
				TextInput::make('raised')
					->numeric(),
				FileUpload::make('thumbnail'),
				RichEditor::make('about')
					->toolbarButtons([
						'bold',
						'bulletList',
						'h2',
						'h3',
						'italic',
						'link',
						'orderedList',
						'redo',
						'underline',
						'undo',
					]),
				TextInput::make('donate_link')
					->url(),
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
			'index' => Pages\ListCourses::route('/'),
			'create' => Pages\CreateCourse::route('/create'),
			'edit' => Pages\EditCourse::route('/{record}/edit'),
		];
	}
}
