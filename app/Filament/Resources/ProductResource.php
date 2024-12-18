<?php

namespace App\Filament\Resources;

use App\Enums\CategoryEnum;
use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Riodwanto\FilamentAceEditor\AceEditor;

class ProductResource extends Resource
{
  protected static ?string $model = Product::class;

  protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Grid::make(2) // Створення сітки з двома колонками
        ->schema([
          // Колонка для англійської мови
          Forms\Components\Card::make()
            ->schema([
              Forms\Components\Tabs::make('English')
                ->tabs([
                  Forms\Components\Tabs\Tab::make('English')
                    ->schema([
                      Select::make('category')
                        ->options(CategoryEnum::class),
                      Forms\Components\TextInput::make('name.en')
                        ->label('Product Name (EN)')
                        ->required(),
                      Forms\Components\Repeater::make('options.en')
                        ->label('Options (EN)')
                        ->schema([
                          Forms\Components\TextInput::make('name')
                            ->label('Option Name (EN)'),
                          Forms\Components\TextInput::make('parameter')
                            ->label('Option Parameter (EN)'),
                        ])
                        ->columns(2),
                      AceEditor::make('tds_content.en')
                        ->mode('html')
                        ->theme('github')
                        ->darkTheme('dracula')
                        ->columnSpanFull(),
                      AceEditor::make('tehcarta_content.en')
                        ->mode('html')
                        ->theme('github')
                        ->darkTheme('dracula')
                        ->columnSpanFull(),
                    ]),
                ]),
            ])
            ->columnSpan(1), // Колонка займає одну частину з двох

          // Колонка для української мови
          Forms\Components\Card::make()
            ->schema([
              Forms\Components\Tabs::make('Українська')
                ->tabs([
                  Forms\Components\Tabs\Tab::make('Українська')
                    ->schema([
                      Select::make('category')
                        ->options(CategoryEnum::class),
                      Forms\Components\TextInput::make('name.uk')
                        ->label('Назва товару (UA)')
                        ->required(),
                      Forms\Components\Repeater::make('options.uk')
                        ->label('Опції (UA)')
                        ->schema([
                          Forms\Components\TextInput::make('name')
                            ->label('Назва опції (UA)'),
                          Forms\Components\TextInput::make('parameter')
                            ->label('Параметр опції (UA)'),
                        ])
                        ->columns(2),
                      AceEditor::make('tds_content.uk')
                        ->mode('html')
                        ->theme('github')
                        ->darkTheme('dracula')
                        ->columnSpanFull(),
                      AceEditor::make('tehcarta_content.uk')
                        ->mode('html')
                        ->theme('github')
                        ->darkTheme('dracula')
                        ->columnSpanFull(),
                    ]),
                ]),
            ])
            ->columnSpan(1), // Колонка займає одну частину з двох
        ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('name'),
        Tables\Columns\TextColumn::make('category'),
        Tables\Columns\TextColumn::make('created_at')
          ->dateTime(),
        Tables\Columns\TextColumn::make('updated_at')
          ->dateTime(),
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
      'index' => Pages\ListProducts::route('/'),
      'create' => Pages\CreateProduct::route('/create'),
      'edit' => Pages\EditProduct::route('/{record}/edit'),
    ];
  }

}












