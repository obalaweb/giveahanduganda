<?php

namespace App\Filament\Pages;

use App\Models\AboutPage;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Guava\FilamentIconPicker\Forms\IconPicker;

class AboutPageResource extends Page {
	protected static ?string $navigationIcon = 'heroicon-o-information-circle';
	protected static ?string $navigationLabel = 'About';

	protected static ?string $title = 'About Page';

	protected static ?string $slug = 'about-page';

	protected static ?string $navigationGroup = 'Pages';
	protected static ?int $navigationSort = 2;
	protected static string $view = 'filament.pages.about-page-resource';

	public ?array $data = [];
	public ?object $settings;

	use InteractsWithForms;

	public function mount($setting = null): void {
		if ($setting === null) {
			$setting = AboutPage::first();
		}

		$this->settings = $setting;

		// dd($this->settings->toArray());

		if ($this->settings) {
			// $this->form->fill($setting->toArray());
			// $this->fillForm();
		}
	}

	public function form(Form $form): Form {
		return $form
			->schema([
				Section::make('About Page Setting')
					->schema([
						TextInput::make('common_title')
							->required(),
						TextArea::make('common_description'),
						TextInput::make('cta_title'),
						FileUpload::make('cta_image'),
						TextInput::make('cta_video'),
						TextInput::make('title'),
						RichEditor::make('description'),
						TextInput::make('achivement'),

						FileUpload::make('image')
							->imageEditor()
							->preserveFilenames()
							->image(),

						TextInput::make('action_title')
							->required(),
						TextInput::make('action_video')
							->required(),
						FileUpload::make('action_image')
							->image()
							->required(),
						Repeater::make('action_items')
							->schema([
								TextInput::make('title'),
								TextInput::make('description'),
								IconPicker::make('icon')
									->label('Icon')
									->sets(['heroicons', 'fontawesome-solid', 'fontawesome-brands'])
									->columns(3),
								TextInput::make('link'),
							]),
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

	public function save() {
		$data = $this->form->getState();

		$this->settings->update($data);

		$this->fillForm();
	}

	private function fillForm() {
		$this->form->fill($this->settings->toArray());
	}
}
