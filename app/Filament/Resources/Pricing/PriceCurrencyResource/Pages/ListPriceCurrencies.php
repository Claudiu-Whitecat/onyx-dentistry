<?php

namespace App\Filament\Resources\Pricing\PriceCurrencyResource\Pages;

use App\Filament\Resources\Pricing\PriceCurrencyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPriceCurrencies extends ListRecords
{
    protected static string $resource = PriceCurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
