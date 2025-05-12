<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\KtmController;


/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/mahasiswa/cetak-semua', [KtmController::class, 'cetakSemua'])->name('mahasiswa.cetak.semua');
Route::get('/admin/mahasiswa/{mahasiswa}/cetak', [KtmController::class, 'cetakSatu'])->name('mahasiswa.cetak.ktm');



