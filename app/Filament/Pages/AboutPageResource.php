<?php

namespace App\Filament\Pages;

use App\Models\AboutPage;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class AboutPageResource extends Page {
	protected static ?string $navigationIcon = 'heroicon-o-document-text';
	protected static ?string $navigationLabel = 'About';

	protected static ?string $title = 'About Page';

	protected static ?string $slug = 'about-page';

	protected static ?string $navigationGroup = 'Pages';
	protected static ?int $navigationSort = 2;
	protected static string $view = 'filament.pages.about-page-resource';

	public ?array $data = [];
	public $setting;

	use InteractsWithForms;

	public function mount($settings = null): void {
		if ($settings === null) {
			$settings = AboutPage::first();
		}

		$this->settings = $settings;

		if ($this->settings) {
			$this->form->fill($this->settings->toArray());
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
