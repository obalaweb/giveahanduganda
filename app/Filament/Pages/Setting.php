<?php

namespace App\Filament\Pages;

use App\Models\Settings;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class Setting extends Page implements HasForms {

	public ?array $data = [];
	public $settings;

	private static ?string $model = Settings::class;
	protected static ?string $navigationGroup = 'Settings';
	protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
	protected static ?int $navigationSort = 3;
	protected static string $view = 'filament.pages.setting';

	use InteractsWithForms;

	public function mount($settings = null): void {
		if ($settings === null) {
			$settings = Settings::first();
		}

		$this->settings = $settings;

		if ($this->settings) {
			$this->form->fill($this->settings->toArray());
		}
	}

	public function save(): void {

		$data = $this->form->getState();

		try {

			if ($this->settings) {

				$this->settings->update($data);

			} else {

				Settings::create($data);

			}

		} catch (Halt $exception) {

			return;
		}
	}

	public function form(Form $form): Form {
		return $form
			->schema([
				Section::make('Global Setting')
					->schema([
						TextInput::make('name')
							->required(),

						FileUpload::make('logo')
							->imageEditor()
							->imageEditorAspectRatios([
								'3.43:1',
							])
							->preserveFilenames()
							->image(),

						TextInput::make('phone')
							->required(),

						TextInput::make('email')
							->required(),

						Textarea::make('address'),

						RichEditor::make('about')
							->required(),

						TextInput::make('fb_link')
							->required(),

						TextInput::make('twitter_link')
							->required(),

						TextInput::make('whatsapp_no')
							->required(),
					]),
			])
			->statePath('data');
	}

	protected function getFormActions(): array {
		return [
			Action::make('save')
				->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
				->submit('save'),
		];
	}
}
