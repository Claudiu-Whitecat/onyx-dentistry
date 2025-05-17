<?php

namespace App\Filament\Resources\Pricing\PriceCategoryResource\Pages;

use App\Filament\Resources\Pricing\PriceCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceCategory extends CreateRecord
{
    protected static string $resource = PriceCategoryResource::class;
    protected function  getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
