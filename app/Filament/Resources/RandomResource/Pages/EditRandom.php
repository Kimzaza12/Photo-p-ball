<?php

namespace App\Filament\Resources\RandomResource\Pages;

use App\Filament\Resources\RandomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRandom extends EditRecord
{
    protected static string $resource = RandomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
