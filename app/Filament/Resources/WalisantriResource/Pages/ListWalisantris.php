<?php

namespace App\Filament\Resources\WalisantriResource\Pages;

use App\Filament\Resources\OrangtuaResource;
use App\Filament\Resources\WalisantriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWalisantris extends ListRecords
{
    protected static string $resource = WalisantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
