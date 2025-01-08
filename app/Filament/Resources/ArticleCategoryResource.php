<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleCategoryResource\Pages;
use App\Filament\Resources\ArticleCategoryResource\RelationManagers;
use App\Models\ArticleCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class ArticleCategoryResource extends Resource
{
  protected static ?string $model = ArticleCategory::class;

  protected static ?string $navigationIcon = 'heroicon-o-inbox';
  protected static ?string $navigationLabel = 'Категорії постів';
  protected static ?string $modelLabel = 'Категорії постів';
  protected static ?string $pluralModelLabel = 'Категорії постів';
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
        Forms\Components\TextInput::make('slug')->label('код')
          ->required()
          ->maxLength(255),
        Forms\Components\Toggle::make('active')->label('активність')
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
        Tables\Columns\TextColumn::make('slug')->label('код')
          ->searchable(),
        Tables\Columns\IconColumn::make('active')->label('активність')
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
      'index' => Pages\ListArticleCategories::route('/'),
      'create' => Pages\CreateArticleCategory::route('/create'),
      'edit' => Pages\EditArticleCategory::route('/{record}/edit'),
    ];
  }
}
