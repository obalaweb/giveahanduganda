<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HomePageResource extends Page {
	protected static ?string $navigationIcon = 'heroicon-o-document-text';
	protected static ?string $navigationLabel = 'Home';
	protected static ?int $navigationSort = 1;
	protected static ?string $navigationGroup = 'Pages';
	protected static string $view = 'filament.pages.home-page-resource';
}
