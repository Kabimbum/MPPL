<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KtmController extends Controller
{
    public function cetakSemua()
{
    // Get all mahasiswa records
    $mahasiswas = Mahasiswa::all();

    // Return the view and pass the mahasiswa data
    return view('pdf.ktm-semua', compact('mahasiswas'));
}

    public function cetakSatu(Mahasiswa $mahasiswa)
{
    return view('pdf.ktm-satu', compact('mahasiswa'));
}
}
