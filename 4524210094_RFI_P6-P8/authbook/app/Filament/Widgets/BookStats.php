<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->icon('heroicon-o-book-open')
                ->color('primary'),
            Stat::make('Total Authors', Author::count())
                ->icon('heroicon-o-user-group')
                ->color('info'),
            Stat::make('Available', Book::where('status', 'available')->count())
                ->description('Books ready to borrow')
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('Borrowed', Book::where('status', 'borrowed')->count())
                ->description('Books currently borrowed')
                ->icon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}
