<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog;
use App\Filament\Resources\BlogPostResource\Pages;
use App\Filament\Resources\BlogPostResource\RelationManagers;
use App\Models\Blog\BlogPost;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Mail\Markdown;
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

                            Select::make('Category')
                                ->label('Category')
                                ->required()
                                ->relationship('category', 'name'),

                            MarkdownEditor::make('content')
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
                                            ->disk('public')
                                            ->directory('thumbnails')
                                    ]),
                                ]),
                                Section::make('Meta')
                                    ->schema([
                                        Select::make('tags')
                                            ->label('Tags')
                                            ->required()
                                            ->multiple()
                                            ->relationship('tags', 'name'),
                                        Select::make('Author')
                                            ->label('Author')
                                            ->options(BlogPost::all()->pluck('name', 'id'))
                                            ->multiple()
                                            ->required()
                                            ->relationship('author', 'name'),
                                        Toggle::make('is_published')
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
            'index' => Blog\BlogPostResource\Pages\ListBlogPosts::route('/'),
            'create' => Blog\BlogPostResource\Pages\CreateBlogPost::route('/create'),
            'edit' => Blog\BlogPostResource\Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
