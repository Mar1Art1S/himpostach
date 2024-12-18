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
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use RalphJSmit\Filament\SEO\SEO;



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
                    })
                    ->helperText(function (?string $state): string {
                        return (string) Str::of(strlen($state))
                            ->append(' / ')
                            ->append(255 . ' ')
                            ->append(Str::of(__('Назва'))->lower());
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
                    ->columnSpanFull()
                    ->helperText(function (?string $state): string {
                        return (string) Str::of(strlen($state))
                            ->append(' / ')
                            ->append(500 . ' ')
                            ->append(Str::of(__('SEO Опис блог'))->lower());
                    }),
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
                SEO::make()
                    ->columnSpanFull(),
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


//namespace App\Filament\Resources;
//
//use App\Filament\Resources\ArticleResource\Pages;
//use App\Models\Article;
//use App\Models\ArticleCategory;
//use Carbon\Carbon;
//use Filament\Forms;
//use Filament\Forms\Form;
//use Filament\Forms\Set;
//use Filament\Resources\Resource;
//use Filament\Tables;
//use Filament\Tables\Table;
//use Illuminate\Support\Str;
//use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
//use RalphJSmit\Filament\SEO\SEO;
//
//class ArticleResource extends Resource
//{
//  protected static ?string $model = Article::class;
//
//  protected static ?string $navigationIcon = 'heroicon-o-document';
//  protected static ?string $navigationLabel = 'Стаття';
//  protected static ?string $modelLabel = 'Стаття';
//  protected static ?string $pluralModelLabel = 'Статті';
//  protected static ?string $navigationGroup = 'Контент';
//
//  public static function form(Form $form): Form
//  {
//    return $form
//      ->schema([
//        Forms\Components\Grid::make(2)
//          ->schema([
//            Forms\Components\TextInput::make('title_uk')->label('Назва (укр)')
//              ->required()
//              ->maxLength(255)
//              ->live(onBlur: true)
//              ->afterStateUpdated(function (Set $set, $state) {
//                $set('slug', Str::slug($state));
//              }),
//            Forms\Components\TextInput::make('title_en')->label('Title (en)')
//              ->required()
//              ->maxLength(255),
//          ]),
//
//        Forms\Components\Grid::make(2)
//          ->schema([
//            Forms\Components\TextInput::make('slug')->label('Код')
//              ->required(),
//
//            Forms\Components\Select::make('category_id')->label('Категорія')
//              ->options(static::categoryOptions())
//              ->required(),
//          ]),
//
//        Forms\Components\FileUpload::make('preview_image')->label('Попереднє зображення')
//          ->image()
//          ->disk('public')
//          ->preserveFilenames()
//          ->directory('articles'),
//
//        Forms\Components\FileUpload::make('detail_image')->label('Детальне зображення')
//          ->image()
//          ->disk('public')
//          ->preserveFilenames()
//          ->directory('articles'),
//
//        Forms\Components\Grid::make(2)
//          ->schema([
//            Forms\Components\Textarea::make('preview_text_uk')->label('Анонс (укр)')
//              ->required()
//              ->helperText('Максимум 500 символів'),
//
//            Forms\Components\Textarea::make('preview_text_en')->label('Preview Text (en)')
//              ->required()
//              ->helperText('Maximum 500 characters'),
//          ]),
//
//        TinyEditor::make('detail_text_uk')->label('Стаття (укр)')
//          ->required()
//          ->columnSpanFull(),
//
//        TinyEditor::make('detail_text_en')->label('Article (en)')
//          ->required()
//          ->columnSpanFull(),
//        Forms\Components\TagsInput::make('tags')->label('Теги')
//          ->columnSpanFull(),
//
//        Forms\Components\DateTimePicker::make('published_at')->label('Дата публікації')
//          ->default(Carbon::now())
//          ->required(),
//
//        Forms\Components\Toggle::make('active')->label('Активне')
//          ->default(true)
//          ->required(),
//
//        SEO::make()
//          ->schema([
//            Forms\Components\Select::make('robots')->label('Meta Robots')
//              ->options([
//                'index, follow' => 'Індексувати, слідкувати',
//                'noindex, follow' => 'Не індексувати, слідкувати',
//                'index, nofollow' => 'Індексувати, не слідкувати',
//                'noindex, nofollow' => 'Не індексувати, не слідкувати',
//              ])
//              ->default('index, follow')
//              ->helperText('Налаштуйте директиву robots для пошукових систем.'),
//          ])
//          ->columnSpanFull(),
//      ]);
//  }
//
//  public static function table(Table $table): Table
//  {
//    return $table
//      ->columns([
//        Tables\Columns\TextColumn::make('title_uk')->label('Назва (укр)')
//          ->searchable(),
//        Tables\Columns\TextColumn::make('title_en')->label('Title (en)')
//          ->searchable(),
//        Tables\Columns\TextColumn::make('category.title')->label('Категорія')
//          ->sortable(),
//        Tables\Columns\ImageColumn::make('preview_image')->label(''),
//        Tables\Columns\TextColumn::make('published_at')->label('Дата публікації')
//          ->dateTime()
//          ->sortable(),
//        Tables\Columns\IconColumn::make('active')->label('Активність')
//          ->boolean(),
//        Tables\Columns\TextColumn::make('created_at')->label('Створено')
//          ->dateTime()
//          ->sortable(),
//        Tables\Columns\TextColumn::make('updated_at')->label('Оновлено')
//          ->dateTime()
//          ->sortable(),
//      ])
//      ->actions([
//        Tables\Actions\EditAction::make(),
//      ])
//      ->bulkActions([
//        Tables\Actions\DeleteBulkAction::make(),
//      ]);
//  }
//
//  public static function getRelations(): array
//  {
//    return [];
//  }
//
//  public static function getPages(): array
//  {
//    return [
//      'index' => Pages\ListArticles::route('/'),
//      'create' => Pages\CreateArticle::route('/create'),
//      'edit' => Pages\EditArticle::route('/{record}/edit'),
//    ];
//  }
//
//  public static function categoryOptions()
//  {
//    return ArticleCategory::pluck('title', 'id');
//  }
//}







