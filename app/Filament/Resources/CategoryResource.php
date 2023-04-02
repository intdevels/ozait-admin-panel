<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Категории';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\Card::make([
                   Forms\Components\TextInput::make('name')
                       ->label('Название')
                       ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                           if (! $get('is_slug_changed_manually') && filled($state)) {
                               $set('slug', Str::slug($state));
                           }
                       })
                       ->reactive()
                       ->required()
                       ->maxLength(255),
                   Forms\Components\TextInput::make('slug')
                       ->label('Ссылка')
                       ->afterStateUpdated(function (Closure $set) {
                           $set('is_slug_changed_manually', true);
                       })
                       ->required()
                       ->maxLength(255),
                   Forms\Components\FileUpload::make('image')
                       ->label('Изображение')
                       ->image()
                       ->required(),
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Изображение'),
                Tables\Columns\TextColumn::make('name')->label('Название'),
                Tables\Columns\TextColumn::make('slug')->label('Ссылка'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
