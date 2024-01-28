<?php

namespace App\Filament\Pengajar\Resources\SantriResource\Pages;

use App\Filament\Pengajar\Resources\SantriResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSantri extends ViewRecord
{
    protected static string $resource = SantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
