<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\KtmController;
use App\Http\Controllers\MahasiswaLoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PublicKtmRequestController;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// ADMIN: Cetak KTM routes
Route::get('/admin/mahasiswa/cetak-semua', [KtmController::class, 'cetakSemua'])->name('mahasiswa.cetak.semua');
Route::get('/admin/mahasiswa/{mahasiswa}/cetak', [KtmController::class, 'cetakSatu'])->name('mahasiswa.cetak.ktm');

// MAHASISWA: Login and KTM display
Route::get('/mahasiswa/login', [MahasiswaLoginController::class, 'showLoginForm'])->name('mahasiswa.login.form');
Route::post('/mahasiswa/login', [MahasiswaLoginController::class, 'login'])->name('mahasiswa.login.submit');

// Protected KTM view (only for authenticated mahasiswa)
// REMOVE the 'mahasiswa.auth' middleware from this route
Route::get('/mahasiswa/ktm', [MahasiswaLoginController::class, 'showKTM'])->name('mahasiswa.ktm');

Route::get('/ktmrequest-form', [PublicKtmRequestController::class, 'create'])->name('ktmrequest.form');
Route::post('/ktmrequest-form', [PublicKtmRequestController::class, 'store'])->name('ktmrequest.store');

Route::get('/mahasiswa/logout', function () {
    Session::forget('mahasiswa_id');
    return redirect()->route('mahasiswa.login.form')->with('success', 'Anda berhasil logout.');
})->name('mahasiswa.logout');