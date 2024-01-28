<?php

namespace App\Filament\Pengajar\Resources\SantriSiapNaikQismResource\Pages;

use App\Filament\Pengajar\Resources\SantriSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSantriSiapNaikQisms extends ListRecords
{
    protected static string $resource = SantriSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
