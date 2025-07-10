<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use Filament\Widgets\ChartWidget;

class JobPlacementChart extends ChartWidget
{
    protected static ?string $heading = 'Job PLacements';

    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Employee Job Placements',
                    'data' => [500, 495, 555, 522, 645, 457, 756, 764, 655, 485, 777, 699],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
