<?php

namespace App\Filament\Pengajar\Resources\PendaftarResource\Widgets;

use App\Filament\Pengajar\Resources\PendaftarResource\Pages\ListPendaftars;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class JumlahPendaftar extends BaseWidget
{

    use HasWidgetShield;

    use InteractsWithPageTable;

    protected function getTablePage(): string
    {
        return ListPendaftars::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pendaftar', $this->getPageTableQuery()->where('qism_calon', Auth::user()->mudirqism)->count()),
            Stat::make('Status: Mendaftar', $this->getPageTableQuery()
            ->where('qism_calon', Auth::user()->mudirqism)
            ->where('tahap', 'Mendaftar')
            ->count()),
            Stat::make('Status: Diterima', $this->getPageTableQuery()
            ->where('qism_calon', Auth::user()->mudirqism)
            ->where('tahap', 'Diterima')
            ->count()),
        ];
    }
}
