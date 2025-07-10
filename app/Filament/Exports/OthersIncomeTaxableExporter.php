<?php

namespace App\Filament\Exports;

use App\Models\OthersIncomeTaxable;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Database\Eloquent\Model;

class OthersIncomeTaxableExporter extends Exporter
{
    protected static ?string $model = OthersIncomeTaxable::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('employee.personalData.first_name')
                ->label('Employee Name'),
            ExportColumn::make('employee.empno'),
            ExportColumn::make('period')
                ->formatStateUsing(function(Model $record){ 
                    return $record->period->format('Y-m');
                }),
            ExportColumn::make('type'),
            ExportColumn::make('amount')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your others income taxable export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
