<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOveriew extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Post', Post::count())
                ->description('Increase in Posts')
                ->descriptionIcon("heroicon-m-arrow-trending-up")
                ->descriptionColor('success')
                ->chart([1, 3, 4, 5, 6, 3, 5, 9]),
            Stat::make('Users', User::count())
                ->description('New Users')
                ->descriptionIcon("heroicon-m-arrow-trending-down")
                ->descriptionColor('danger')
                ->chart([9, 3, 4, 12, 6, 3, 5, 3]),
            Stat::make('Events', Event::count())
                ->description('Events')
                ->descriptionIcon("heroicon-m-arrow-trending-down")
                ->descriptionColor('danger')
                ->chart([9, 3, 4, 12, 6, 3, 5, 3]),
        ];
    }
}
