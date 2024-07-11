<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Filament\Resources\BlogPostResource\RelationManagers;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $modelLabel = 'Posts';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        Group::make()->schema([
                            TextInput::make('title')
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

                            Select::make('Category')
                                ->required()
                                ->relationship('category', 'name'),

                            RichEditor::make('content')
                                ->required()
                                ->columnSpan($span = 2),
                        ]),
                        Group::make()
                            ->schema([
                                Section::make('Image')
                                    ->collapsible()
                                    ->schema([
                                        SpatieMediaLibraryFileUpload::make('Thumbnail')
                                            ->collection('posts')
                                            ->columnSpan($span = 1)
                                            ->disk('public')
                                            ->directory('thumbnails')
                                    ]),
                                ]),
                                Section::make('Meta')
                                    ->schema([
                                        Select::make('tags')
                                            ->label('Tags')
                                            ->columnSpan($span = 1)
                                            ->required()
                                            ->multiple()
                                            ->relationship('tags', 'name'),
                                        Select::make('Author')
                                            ->label('Author')
                                            ->columnSpan($span = 1)
                                            ->required()
                                            ->relationship('author', 'name'),
                                        Toggle::make('is_published')
                                            ->columnSpan($span = 1),
                            ]),

                        ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->limit(50)->sortable(),
                TextColumn::make('category.name')->limit(50)->sortable(),
                TextColumn::make('author.name')->sortable(),
                TextColumn::make('tags.name')->limit(50),
                SpatieMediaLibraryImageColumn::make('Thumbnail')->collection('posts'),
                CheckboxColumn::make('is_published'),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
