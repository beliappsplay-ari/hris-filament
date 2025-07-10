<?php

namespace App\Filament\Resources\LastPaymentResource\Pages;

use App\Filament\Resources\LastPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLastPayment extends CreateRecord
{
    protected static string $resource = LastPaymentResource::class;
}
