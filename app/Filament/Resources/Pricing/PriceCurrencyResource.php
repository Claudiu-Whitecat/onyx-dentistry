<?php

namespace App\Filament\Resources\Pricing;

use App\Filament\Resources\Pricing;
use App\Filament\Resources\Pricing\PriceCurrencyResource\RelationManagers;
use App\Models\Price\PriceCurrency;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PriceCurrencyResource extends Resource
{
    protected static ?string $model = PriceCurrency::class;

    protected static ?string $navigationIcon = 'heroicon-c-currency-euro';
    protected static ?string $navigationGroup = 'Pricing list';
    protected static ?string $modelLabel = 'Currency';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('New currency')
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
            'index' => Pricing\PriceCurrencyResource\Pages\ListPriceCurrencies::route('/'),
            'create' => Pricing\PriceCurrencyResource\Pages\CreatePriceCurrency::route('/create'),
            'edit' => Pricing\PriceCurrencyResource\Pages\EditPriceCurrency::route('/{record}/edit'),
        ];
    }
}
