<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $employees = Employee::all();
        return [
            Stat::make('Employees', $employees->count())
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        Stat::make('Job Placements', '21%')
            ->description('7% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        Stat::make('Clients', '12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
