<?php

namespace App\Filament\Resources\AdvantagesResource\Pages;

use App\Filament\Resources\AdvantagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvantages extends EditRecord
{
    protected static string $resource = AdvantagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
