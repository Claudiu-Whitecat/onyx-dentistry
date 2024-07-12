<?php

namespace App\Filament\Resources\Blog\BlogTagResource\Pages;

use App\Filament\Resources\Blog\BlogTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogTag extends EditRecord
{
    protected static string $resource = BlogTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
