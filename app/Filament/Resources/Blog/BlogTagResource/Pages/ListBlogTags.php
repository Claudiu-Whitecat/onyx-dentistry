<?php

namespace App\Filament\Resources\Blog\BlogTagResource\Pages;

use App\Filament\Resources\Blog\BlogTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogTags extends ListRecords
{
    protected static string $resource = BlogTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
