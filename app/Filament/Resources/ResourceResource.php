<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResourceResource\Pages;
use App\Filament\Resources\ResourceResource\RelationManagers;

use App\Models\Resource as ResourceModel;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ResourceResource extends Resource
{
    protected static ?string $model = ResourceModel::class;

    protected static ?string $navigationIcon = 'heroicon-c-wrench';

    protected static ?string $navigationGroup = 'Medical Services';
    protected static ?string $modelLabel = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->placeholder('Ex: Importanța igienei bucale')
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
                ]),
                TextInput::make('weight')
                    ->integer()
                    ->required(),
                MarkdownEditor::make('body'),
                FileUpload::make('imagePath'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->limit(50)->sortable(),
                TextColumn::make('slug')->limit(50)->sortable(),
                TextColumn::make('weight')->limit(50),
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
            'index' => Pages\ListResources::route('/'),
            'create' => Pages\CreateResource::route('/create'),
            'edit' => Pages\EditResource::route('/{record}/edit'),
        ];
    }
}
