<?php

namespace App\Filament\Resources\Pricing;

use App\Filament\Resources\Pricing;
use App\Filament\Resources\Pricing\PriceCategoryResource\RelationManagers;
use App\Models\Price\PriceCategory;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PriceCategoryResource extends Resource
{
    protected static ?string $model = PriceCategory::class;

    protected static ?string $navigationIcon = 'heroicon-s-square-3-stack-3d';
    protected static ?string $navigationGroup = 'Pricing list';
    protected static ?string $modelLabel = 'Category';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('New Category')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit(50)->sortable(),
                TextColumn::make('slug')->limit(50),
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
            'index' => Pricing\PriceCategoryResource\Pages\ListPriceCategories::route('/'),
            'create' => Pricing\PriceCategoryResource\Pages\CreatePriceCategory::route('/create'),
            'edit' => Pricing\PriceCategoryResource\Pages\EditPriceCategory::route('/{record}/edit'),
        ];
    }
}
