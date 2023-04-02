<?php

namespace App\Filament\Resources\CooperateResource\Pages;

use App\Filament\Resources\CooperateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCooperates extends ListRecords
{
    protected static string $resource = CooperateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
