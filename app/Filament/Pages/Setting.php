<?php

namespace App\Filament\Pages;

use App\Models\Settings;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class Setting extends Page implements HasForms {
	
    if(Settings::first()) {
        public ?array $data = Settings::first()->toArray();
    }else {
        public ?array $data = [];
    }

	private static ?string $model = Settings::class;

	protected static ?string $navigationIcon = 'heroicon-o-document-text';

	protected static string $view = 'filament.pages.setting';

	use InteractsWithForms;

	public function mount(): void {
		$this->form->fill($data);
	}

	public function save(): void {
		try {
			$data = $this->form->getState();

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

						TextInput::make('phone')
							->required(),

						TextInput::make('email')
							->required(),

						Textarea::make('address'),

						RichEditor::make('about'),

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
