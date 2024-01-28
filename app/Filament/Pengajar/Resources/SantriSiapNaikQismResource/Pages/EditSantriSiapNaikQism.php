<?php

namespace App\Filament\Pengajar\Resources\SantriSiapNaikQismResource\Pages;

use App\Filament\Pengajar\Resources\SantriSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSantriSiapNaikQism extends EditRecord
{
    protected static string $resource = SantriSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
