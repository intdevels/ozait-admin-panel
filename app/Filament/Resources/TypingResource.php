<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypingResource\Pages;
use App\Filament\Resources\TypingResource\RelationManagers;
use App\Models\Typing;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypingResource extends Resource
{
    protected static ?string $model = Typing::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Типография';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\Card::make([
                   Forms\Components\MarkdownEditor::make('title')
                       ->label('Заголовок')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\RichEditor::make('text')
                       ->label('Текст')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\TextInput::make('button_text')
                       ->label('Текст кнопки')
                       ->required()
                       ->maxLength(255),
                   Forms\Components\FileUpload::make('image')
                       ->label('Изображение')
                       ->image()
                       ->required(),

                   Repeater::make('texts')
                       ->relationship()
                       ->label('Тексты')
                       ->schema([
                           Forms\Components\TextInput::make('text')
                               ->label('Текст')
                               ->required()
                               ->maxLength(255),
                            Forms\Components\TextInput::make('order')
                                ->label('Порядок')
                                ->type('number')
                                ->required()
                       ])
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Изображение'),
                Tables\Columns\TextColumn::make('title')->html()->label('Заголовок'),
                Tables\Columns\TextColumn::make('button_text')->label('Текст кнопки'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
               // Tables\Actions\DeleteBulkAction::make(),
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
        $action =  [
            'index' => Pages\ListTypings::route('/'),
            'create' => Pages\CreateTyping::route('/create'),
            'edit' => Pages\EditTyping::route('/{record}/edit'),
        ];

//        if(!self::$model->first()){
//             $action['create'] = Pages\CreateTyping::route('/create');
//        }

        return $action;
    }
}
