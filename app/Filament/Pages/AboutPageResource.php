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

class AboutPageResource extends Page
{
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

    public function mount($setting = null): void
    {
        if ($setting === null) {
            $setting = AboutPage::first();
        }

        $this->settings = $setting;

        if ($this->settings) {
            $this->fillForm();
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('About Page Setting')
                    ->schema([
                        TextInput::make('common_title')
                            ->required(),
                        TextArea::make('common_description')
                            ->required(),
                        TextInput::make('cta_title')
                            ->required(),
                        FileUpload::make('cta_image')
                            ->imageEditor()
                            ->image()
                            ->required(),
                        TextInput::make('cta_video')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        RichEditor::make('description'),
                        TextInput::make('achivement')
                            ->required(),

                        FileUpload::make('image')
                            ->required()
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
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('description')
                                    ->required(),
                                IconPicker::make('icon')
                                    ->required()
                                    ->label('Icon')
                                    ->sets(['heroicons', 'fontawesome-solid', 'fontawesome-brands'])
                                    ->columns(3),
                                TextInput::make('link')
                                    ->required(),
                            ]),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save()
    {
        $data = $this->form->getState();
        if (!$data['description']) {
            $data['description'] = "default description";
        }
        $this->settings->update($data);

        $this->fillForm();
    }

    private function fillForm()
    {
        $data = $this->settings->toArray();
        if (gettype($data['action_items']) == 'string')
            $data['action_items'] = json_decode($data['action_items'], true);

        $this->form->fill($data);
    }
}
