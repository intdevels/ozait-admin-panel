<?php

namespace App\Filament\Resources\CooperateResource\Pages;

use App\Filament\Resources\CooperateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCooperate extends EditRecord
{
    protected static string $resource = CooperateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
