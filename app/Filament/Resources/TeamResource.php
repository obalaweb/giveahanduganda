<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamResource extends Resource {
	protected static ?string $model = Team::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Select::make('user_id')
					->label('Volunteer')
					->options(User::all()->pluck('name', 'id'))
					->searchable(),
				FileUpload::make('profile'),
				MarkdownEditor::make('about'),
				TextInput::make('expertise'),
				TextInput::make('fb_link'),
				TextInput::make('twitter_link'),
				TextInput::make('whatsapp_no'),
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
			'index' => Pages\ListTeams::route('/'),
			'create' => Pages\CreateTeam::route('/create'),
			'edit' => Pages\EditTeam::route('/{record}/edit'),
		];
	}
}
