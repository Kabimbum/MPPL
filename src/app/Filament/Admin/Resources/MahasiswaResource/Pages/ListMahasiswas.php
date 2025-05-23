<?php

namespace App\Filament\Admin\Resources\MahasiswaResource\Pages;

use App\Filament\Admin\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMahasiswas extends ListRecords
{
    protected static string $resource = MahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_semua_ktm')
                ->label('Cetak Semua KTM')
                ->icon('heroicon-o-printer')
                ->url(route('mahasiswa.cetak.semua'))
                ->openUrlInNewTab()
                ->color('success'),
        ];
    }
}
