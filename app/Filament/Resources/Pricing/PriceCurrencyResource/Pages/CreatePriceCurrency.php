<?php

namespace App\Filament\Resources\Pricing\PriceCurrencyResource\Pages;

use App\Filament\Resources\Pricing\PriceCurrencyResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceCurrency extends CreateRecord
{
    protected static string $resource = PriceCurrencyResource::class;

    protected function  getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
