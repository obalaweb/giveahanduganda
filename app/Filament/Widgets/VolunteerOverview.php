<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class VolunteerOverview extends ChartWidget
{
    protected static ?string $heading = 'Events';
    protected static ?int $sort = 2;


    protected function getData(): array
    {
        $data = $this->getEventsPerMonth();

        return [
            'datasets' => [
                [
                    'label' => 'Events Monthly',
                    'data' => $data['eventsPerMonth']
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }


    private function getEventsPerMonth(): array
    {
        $now = Carbon::now();

        $eventsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use ($now, &$eventsPerMonth) {
            $count = Event::whereMonth('created_at', Carbon::parse($now->month($month)->format('Y-m')))->count();
            $eventsPerMonth[] = $count;

            return $now->month($month)->format('M');
        })->toArray();

        return [
            'eventsPerMonth' => $eventsPerMonth,
            'months' => $months,
        ];
    }
}
