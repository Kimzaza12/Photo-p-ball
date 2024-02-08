<?php

namespace App\Filament\Resources\RandomResource\Pages;

use App\Filament\Resources\RandomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRandoms extends ListRecords
{
    protected static string $resource = RandomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
