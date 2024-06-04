<?php

namespace App\Filament\Widgets;

use App\Enums\UserStatusEnum;
use App\Models\User;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class UserOverview extends ChartWidget
{
    protected static ?string $heading = 'Users';

    protected static ?int $sort = 2;


    protected function getData(): array
    {
        $data = User::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Users',
                    'data' => array_values($data)
                ]
            ],
            'labels' => UserStatusEnum::cases(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
