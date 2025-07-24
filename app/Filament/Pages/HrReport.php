<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HrReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    // protected static ?string $navigationLabel = "Payroll Report";
    // protected static ?string $modelLabel = "Payroll Report";
    // protected static ?string $label = "Payroll Report";
    // protected static ?string $navigationGroup = 'PAYROLL';
    // protected static ?int $navigationSort = 8;

   protected static ?string $navigationLabel = "HR Report";
    protected static ?string $modelLabel = "HR Report";
    protected static ?string $label = "HR Report";
    protected static ?string $navigationGroup = 'HR DATA';
    protected static ?int $navigationSort = 2;

    protected static string $view = 'filament.pages.hrreport';
}
