<?php

namespace App\Filament\Resources\HomePageSliderResource\Pages;

use App\Filament\Resources\HomePageSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomePageSliders extends ManageRecords
{
    protected static string $resource = HomePageSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
