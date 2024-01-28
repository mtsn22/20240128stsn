<?php

namespace App\Filament\Pengajar\Resources\SantriSiapNaikQismResource\Pages;

use App\Filament\Pengajar\Resources\SantriSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSantriSiapNaikQism extends ViewRecord
{
    protected static string $resource = SantriSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
