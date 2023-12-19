<?php

namespace App\Filament\Pages;

use App\Models\HomePage;
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

class HomePageResource extends Page {
	protected static ?string $navigationIcon = 'heroicon-o-home';
	protected static ?string $navigationLabel = 'Home';

	protected static ?string $title = 'Home Page';

	protected static ?string $slug = 'home-page';

	protected static ?int $navigationSort = 1;
	protected static ?string $navigationGroup = 'Pages';

	private static ?string $model = HomePage::class;
	protected static string $view = 'filament.pages.home-page-resource';

	public ?array $data = [];
	public $setting;

	use InteractsWithForms;

	public function mount($settings = null): void {
		if ($settings === null) {
			$settings = HomePage::first();
		}

		$this->settings = $settings;

		if ($this->settings) {
			$this->form->fill($this->settings->toArray());
		}
	}

	public function form(Form $form): Form {
		return $form
			->schema([
				Section::make('Global Setting')
					->schema([
						FileUpload::make('main_image')
							->label('Slider Image')
							->image(),
						TextInput::make('what_we_do_title')
							->required(),
						TextArea::make('what_we_do_description'),
						TextInput::make('about_us_title'),
						RichEditor::make('about_us_description'),
						Repeater::make('items')
							->schema([
								TextInput::make('name')
									->label('Title'),
								TextArea::make('description')
									->label('Description'),
								IconPicker::make('icon')
									->label('Icon')
									->sets(['heroicons', 'fontawesome-solid', 'fontawesome-brands'])
									->columns(3),
							]),
						FileUpload::make('about_us_image')
							->imageEditor()
							->preserveFilenames()
							->image(),

						TextInput::make('become_a_volunteer_title')
							->required(),

						FileUpload::make('become_a_volunteer_images')
							->multiple()
							->maxFiles(2)
							->imageEditor()
							->preserveFilenames()
							->image(),
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

	public function save(): void {
		$data = $this->form->getState();
		$homePage = HomePage::first();
		$homePage->update($data);
	}
}
