<?php

namespace App\Filament\Resources\Pricing\PriceCurrencyResource\Pages;

use App\Filament\Resources\Pricing\PriceCurrencyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriceCurrency extends EditRecord
{
    protected static string $resource = PriceCurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
