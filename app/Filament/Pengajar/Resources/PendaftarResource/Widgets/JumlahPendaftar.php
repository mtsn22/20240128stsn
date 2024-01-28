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
            Stat::make('Total Pendaftar', $this->getPageTableQuery()->where('ps_qism', Auth::user()->mudirqism)->count()),
            Stat::make('Status: Mendaftar', $this->getPageTableQuery()
            ->where('ps_qism', Auth::user()->mudirqism)
            ->where('ps_tahap', 'Tahap 1')
            ->count()),
            Stat::make('Status: Lolos Tahap 1', $this->getPageTableQuery()
            ->where('ps_qism', Auth::user()->mudirqism)
            ->where('ps_tahap', 'Tahap 2')
            ->count()),
        ];
    }
}
