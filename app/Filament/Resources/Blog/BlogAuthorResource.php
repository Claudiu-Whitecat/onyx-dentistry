<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog;
use App\Filament\Resources\BlogAuthorResource\Pages;
use App\Filament\Resources\BlogAuthorResource\RelationManagers;
use App\Models\Blog\BlogAuthor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogAuthorResource extends Resource
{
    protected static ?string $model = BlogAuthor::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-circle';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $modelLabel = 'Author';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit(50)->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Blog\BlogAuthorResource\Pages\ListBlogAuthors::route('/'),
            'create' => Blog\BlogAuthorResource\Pages\CreateBlogAuthor::route('/create'),
            'edit' => Blog\BlogAuthorResource\Pages\EditBlogAuthor::route('/{record}/edit'),
        ];
    }
}
