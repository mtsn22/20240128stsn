<?php

namespace App\Filament\Pengajar\Resources\PendaftarResource\Pages;

use App\Filament\Pengajar\Resources\PendaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftar extends EditRecord
{
    protected static string $resource = PendaftarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
