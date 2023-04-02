<?php

namespace App\Filament\Resources\TypingResource\Pages;

use App\Filament\Resources\TypingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTyping extends EditRecord
{
    protected static string $resource = TypingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
