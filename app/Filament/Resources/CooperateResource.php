<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CooperateResource\Pages;
use App\Filament\Resources\CooperateResource\RelationManagers;
use App\Models\Cooperate;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CooperateResource extends Resource
{
    protected static ?string $model = Cooperate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Сотрудничество';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->label('Название')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('info')
                        ->label('Информация')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('description')
                        ->label('Описание')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('order')
                        ->label('Порядок')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('image')
                        ->label('Изображение')
                        ->image()
                        ->maxSize(2048)
                        ->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Изображение'),
                Tables\Columns\TextColumn::make('title')->label('Название'),
                Tables\Columns\TextColumn::make('info')->label('Информация'),
                Tables\Columns\TextColumn::make('description')->label('Описание'),
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
            'index' => Pages\ListCooperates::route('/'),
            'create' => Pages\CreateCooperate::route('/create'),
            'edit' => Pages\EditCooperate::route('/{record}/edit'),
        ];
    }
}
