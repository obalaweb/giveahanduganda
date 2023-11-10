<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageSliderResource\Pages;
use App\Models\HomePageSlider;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomePageSliderResource extends Resource {
	protected static ?string $model = HomePageSlider::class;
	protected static ?string $navigationGroup = 'Settings';
	protected static ?string $navigationLabel = 'Sliders';
	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Form $form): Form {
		return $form
			->schema([
				TextInput::make('title'),
				TextInput::make('slogan'),
				TextArea::make('description'),
				FileUpload::make('image'),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				TextColumn::make('title'),
				TextColumn::make('slogan'),
				ImageColumn::make('image')
					->circular(),
			])
			->filters([
				//
			])
			->actions([
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make(),
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

	public static function getPages(): array {
		return [
			'index' => Pages\ManageHomePageSliders::route('/'),
		];
	}
}
