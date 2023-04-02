<?php

namespace App\Filament\Resources\TypingResource\Pages;

use App\Filament\Resources\TypingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypings extends ListRecords
{
    protected static string $resource = TypingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
        ];
    }
}
