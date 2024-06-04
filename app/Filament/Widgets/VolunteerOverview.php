<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class VolunteerOverview extends ChartWidget
{
    protected static ?string $heading = 'Volunteers';
    protected static ?int $sort = 2;


    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
