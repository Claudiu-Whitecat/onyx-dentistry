<?php

namespace App\Filament\Resources\Pricing;

use App\Filament\Resources\Pricing\PriceResource\Pages;
use App\Filament\Resources\Pricing\PriceResource\RelationManagers;
use App\Filament\Resources\Pricing;
use App\Models\Price\Price;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $navigationIcon = 'heroicon-s-ticket';
    protected static ?string $navigationGroup = 'Pricing list';
    protected static ?string $modelLabel = 'Price';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->placeholder('Ex: Plombă'),
                    TextInput::make('value')
                        ->required(),
                    Select::make('Category')
                        ->label('Category')
                        ->required()
                        ->relationship('priceCategories', 'name'),
                    Select::make('Currency')
                        ->label('Currency')
                        ->required()
                        ->relationship('priceCurrencies', 'name'),
                    TextInput::make('quantifier')
                        ->placeholder('Ex: Per Arcadă'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit(50)->sortable(),
                TextColumn::make('value')->limit(50)->sortable(),
                TextColumn::make('priceCategories.name')->label('Category')->limit(50)->sortable(),
                TextColumn::make('priceCurrencies.name')->label('Currency')->limit(50)->sortable(),
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
            'index' => Pricing\PriceResource\Pages\ListPrices::route('/'),
            'create' => Pricing\PriceResource\Pages\CreatePrice::route('/create'),
            'edit' => Pricing\PriceResource\Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
