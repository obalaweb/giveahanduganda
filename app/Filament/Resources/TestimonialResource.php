<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource {
	protected static ?string $model = Testimonial::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Form $form): Form {
		return $form
			->schema([
				TextInput::make('name'),
				TextInput::make('profession'),
				FileUpload::make('thumbnail'),
				TextInput::make('rate')
					->numeric()
					->minValue(1)
					->maxValue(5),
				TextArea::make('content'),

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
			'index' => Pages\ListTestimonials::route('/'),
			'create' => Pages\CreateTestimonial::route('/create'),
			'edit' => Pages\EditTestimonial::route('/{record}/edit'),
		];
	}
}
