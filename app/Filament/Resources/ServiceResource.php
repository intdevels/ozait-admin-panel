<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Услуги';

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
                       ->maxLength(255),
                   Forms\Components\TextInput::make('price')
                       ->label('Цена')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\TextInput::make('url')
                       ->label('Ссылка')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\TextInput::make('order')
                       ->label('Порядок')
                       ->type('number')
                       ->required(),
                   Forms\Components\FileUpload::make('image')
                       ->label('Изображение')
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
                Tables\Columns\TextColumn::make('price')->label('Цена'),
                Tables\Columns\TextColumn::make('url')->label('Ссылка'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
