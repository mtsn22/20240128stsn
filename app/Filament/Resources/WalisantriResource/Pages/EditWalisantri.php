<?php

namespace App\Filament\Resources\WalisantriResource\Pages;

use App\Filament\Resources\OrangtuaResource;
use App\Filament\Resources\WalisantriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWalisantri extends EditRecord
{
    protected static string $resource = WalisantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
