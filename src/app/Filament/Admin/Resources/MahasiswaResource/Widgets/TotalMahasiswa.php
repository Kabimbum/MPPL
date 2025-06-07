<?php

namespace App\Filament\Admin\Resources\MahasiswaResource\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Mahasiswa;

class TotalMahasiswa extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Mahasiswa', Mahasiswa::count()),
        ];
    }
}
