<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog;
use App\Filament\Resources\BlogTagResource\Pages;
use App\Filament\Resources\BlogTagResource\RelationManagers;
use App\Models\Blog\BlogTag;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogTagResource extends Resource
{
    protected static ?string $model = BlogTag::class;

    protected static ?string $navigationIcon = 'heroicon-s-tag';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $modelLabel = 'Tags';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                function(Get $get, Set $set, ?string $old, ?string $state) {
                                    if(($get('slug') ?? '') !== Str::slug($old)){
                                        return;
                                    }
                                    $set('slug', Str::slug($state));
                                }
                            ),
                        TextInput::make('slug')
                            ->required()
                            ->live(onBlur: true),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit(50)->sortable(),
                TextColumn::make('slug')->limit(50)->sortable(),
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
            'index' => Blog\BlogTagResource\Pages\ListBlogTags::route('/'),
            'create' => Blog\BlogTagResource\Pages\CreateBlogTag::route('/create'),
            'edit' => Blog\BlogTagResource\Pages\EditBlogTag::route('/{record}/edit'),
        ];
    }
}
