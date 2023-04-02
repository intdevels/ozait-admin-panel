<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Отзывы';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->label('Имя')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('position')
                        ->label('Должность')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('description')
                        ->label('Описание')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('stars')
                        ->label('Звезды')
                        ->type('number')
                        ->step(0.5)
                        ->maxValue(5)
                        ->minValue(0)
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('order')
                        ->label('Порядок')
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
                Tables\Columns\TextColumn::make('name')->label('Имя'),
                Tables\Columns\TextColumn::make('position')->label('Должность'),
                Tables\Columns\TextColumn::make('description')->label('Описание'),
                Tables\Columns\TextColumn::make('stars')->label('Звезды'),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
