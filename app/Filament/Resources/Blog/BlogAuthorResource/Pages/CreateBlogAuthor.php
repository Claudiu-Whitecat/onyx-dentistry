<?php

namespace App\Filament\Resources\Blog\BlogAuthorResource\Pages;

use App\Filament\Resources\Blog\BlogAuthorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogAuthor extends CreateRecord
{
    protected static string $resource = BlogAuthorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
