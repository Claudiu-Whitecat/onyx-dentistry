<?php

namespace App\Filament\Resources\Pricing\PriceResource\Pages;

use App\Filament\Resources\Pricing\PriceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrices extends ListRecords
{
    protected static string $resource = PriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
