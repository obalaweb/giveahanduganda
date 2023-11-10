<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AboutPageResource extends Page {
	protected static ?string $navigationIcon = 'heroicon-o-document-text';
	protected static ?string $navigationLabel = 'About';
	protected static ?string $navigationGroup = 'Pages';
	protected static ?int $navigationSort = 2;
	protected static string $view = 'filament.pages.about-page-resource';
}
