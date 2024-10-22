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
                Forms\Components\TextInput::make('name')
                    ->label('Product Name')
                    ->required(),
                Select::make('category')
                    ->options(CategoryEnum::class),
                Forms\Components\Repeater::make('options')
                    ->label('Options')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Option Name'),
//                            ->required(),
                        Forms\Components\TextInput::make('parameter')
                            ->label('Option Parameter'),
//                            ->required(),
                    ])
                    ->columns(2),
//                    ->required(),
                Forms\Components\FileUpload::make('tds_file')
                    ->label('TDS File')
                    ->disk('public')
                    ->preserveFilenames()
                    ->directory('tds_files'),
//                    ->required(),
                Forms\Components\FileUpload::make('tex_doc_file')
                    ->label('Tex Doc File')
                    ->disk('public')
                    ->preserveFilenames()
                    ->directory('tex_doc_files'),
                Forms\Components\TextInput::make('tds_title')
                    ->label('Tds title'),
                AceEditor::make('tds_content')
                    ->mode('html')
                    ->theme('github')
                    ->darkTheme('dracula')
                    ->columnSpanFull(),
                AceEditor::make('tehcarta_content')
                    ->mode('html')
                    ->theme('github')
                    ->darkTheme('dracula')
                    ->columnSpanFull(),
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



