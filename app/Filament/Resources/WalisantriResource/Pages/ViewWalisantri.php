<?php

namespace App\Filament\Resources\WalisantriResource\Pages;

use App\Filament\Resources\OrangtuaResource;
use App\Filament\Resources\WalisantriResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWalisantri extends ViewRecord
{
    protected static string $resource = WalisantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
