<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'FAQ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\Card::make([
                  Forms\Components\RichEditor::make('question')
                      ->label('Вопрос')
                      ->required()
                      ->maxLength(255),
                  Forms\Components\RichEditor::make('answer')
                      ->label('Ответ')
                      ->required()
                      ->maxLength(65535),
                  Forms\Components\TextInput::make('order')
                      ->label('Порядок')
                      ->type('number')
                      ->required(),
              ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->html()->label('Вопрос'),
                Tables\Columns\TextColumn::make('answer')->html()->label('Ответ'),
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
