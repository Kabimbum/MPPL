<?php

namespace App\Observers;

use App\Models\KtmRequest;
use App\Models\Mahasiswa;

class KtmRequestObserver
{
    public function updated(KtmRequest $ktmRequest)
    {
        if ($ktmRequest->status === 'approved') {
            // Copy or update data di tabel mahasiswa
            Mahasiswa::updateOrCreate(
                ['nim' => $ktmRequest->nim],
                [
                    'name' => $ktmRequest->name,
                    'jurusan' => $ktmRequest->jurusan,
                    'fakultas' => $ktmRequest->fakultas,
                    'image' => $ktmRequest->image,
                    'tanggal_lahir' => $ktmRequest->tanggal_lahir,
                    'status' => $ktmRequest->status,
                ]
            );
        } elseif ($ktmRequest->status === 'rejected') {
            // Hapus data mahasiswa dengan nim sama
            Mahasiswa::where('nim', $ktmRequest->nim)->delete();
        }
    }
}

