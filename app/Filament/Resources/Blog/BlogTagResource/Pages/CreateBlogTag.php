<?php

namespace App\Filament\Resources\Blog\BlogTagResource\Pages;

use App\Filament\Resources\Blog\BlogTagResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogTag extends CreateRecord
{
    protected static string $resource = BlogTagResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
