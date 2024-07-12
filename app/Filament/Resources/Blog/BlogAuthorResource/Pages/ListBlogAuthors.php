<?php

namespace App\Filament\Resources\Blog\BlogAuthorResource\Pages;

use App\Filament\Resources\Blog\BlogAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogAuthors extends ListRecords
{
    protected static string $resource = BlogAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
