<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KtmRequest;

class PublicKtmRequestController extends Controller
{
    public function create()
    {
        return view('public.ktmrequest-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20',
            'name' => 'required|string',
            'jurusan' => 'required|string',
            'fakultas' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('ktm_photos', 'public');

        KtmRequest::create([
            'nim' => $validated['nim'],
            'name' => $validated['name'],
            'jurusan' => $validated['jurusan'],
            'fakultas' => $validated['fakultas'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'image' => $path,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Permintaan KTM berhasil dikirim!');
    }
}

