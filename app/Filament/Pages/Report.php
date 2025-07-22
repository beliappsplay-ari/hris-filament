<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Report extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = "Payroll Report";
    protected static ?string $modelLabel = "Payroll Report";
    protected static ?string $label = "Payroll Report";
    protected static ?string $navigationGroup = 'PAYROLL';
    protected static ?int $navigationSort = 8;

    protected static string $view = 'filament.pages.report';
}
