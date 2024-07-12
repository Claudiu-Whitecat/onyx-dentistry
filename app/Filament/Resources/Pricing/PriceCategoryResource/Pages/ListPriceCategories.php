<?php

namespace App\Filament\Resources\Pricing\PriceCategoryResource\Pages;

use App\Filament\Resources\Pricing\PriceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPriceCategories extends ListRecords
{
    protected static string $resource = PriceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
