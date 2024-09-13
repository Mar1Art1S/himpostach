<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\ArticleCategory;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;



class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = 'Стаття';
    protected static ?string $modelLabel = 'Стаття';
    protected static ?string $pluralModelLabel = 'Стаття';
    protected static ?string $navigationGroup = 'Контент';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')->label('Назва')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')->label('Код')
                    ->required(),
                Forms\Components\FileUpload::make('preview_image')->label('Детальне зображення')
                    ->image()
                    ->disk('public')
                    ->preserveFilenames()
                    ->directory('articles'),

                Forms\Components\FileUpload::make('detail_image')->label('Детальне зображення')
                    ->image()
                    ->disk('public')
                    ->preserveFilenames()
                    ->directory('articles'),

                Forms\Components\Textarea::make('preview_text')->label('Анонс')
                    ->required()
                    ->columnSpanFull(),
                TinyEditor::make('detail_text')->label('Стаття')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('tags')->label('Тег')
                    ->columnSpanFull(),
                Forms\Components\Select::make('category_id')->label('Категорія')
                    ->options(static::categoryOptions())
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')->label('Дата публікації')
                    ->default(Carbon::now())
                    ->required(),
                Forms\Components\Toggle::make('active')->label('Активне')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')->label('Назва')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')->label('Код')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.title')->label('Категорія')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('preview_image')->label(''),
                Tables\Columns\TextColumn::make('published_at')->label('Дата публікації')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')->label('Активність')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }

    public static function categoryOptions() {
        return ArticleCategory::pluck('title', 'id');
    }
}
