<?php

namespace App\Filament\Resources\Blog\BlogAuthorResource\Pages;

use App\Filament\Resources\Blog\BlogAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogAuthor extends EditRecord
{
    protected static string $resource = BlogAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
