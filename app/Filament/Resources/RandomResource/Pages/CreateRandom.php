<?php

namespace App\Filament\Resources\RandomResource\Pages;

use App\Filament\Resources\RandomResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRandom extends CreateRecord
{
    protected static string $resource = RandomResource::class;
}
