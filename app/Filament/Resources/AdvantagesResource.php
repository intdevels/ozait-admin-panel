<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantagesResource\Pages;
use App\Filament\Resources\AdvantagesResource\RelationManagers;
use App\Models\Advantages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvantagesResource extends Resource
{
    protected static ?string $model = Advantages::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Преимущества';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\Card::make([
                   Forms\Components\TextInput::make('name')
                       ->label('Название')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\RichEditor::make('description')
                       ->label('Описание')
                       ->required()
                       ->maxLength(65535),
                   Forms\Components\TextInput::make('order')
                       ->label('Порядок')
                       ->required(),
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
                Tables\Columns\TextColumn::make('description')->html()->words(10)->label('Описание'),
                Tables\Columns\TextColumn::make('order')->label('Порядок'),
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
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantages::route('/create'),
            'edit' => Pages\EditAdvantages::route('/{record}/edit'),
        ];
    }
}
