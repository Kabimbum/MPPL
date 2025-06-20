<?php

namespace App\Http\Controllers;

use App\Models\KtmRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('mahasiswa.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $mahasiswa = KtmRequest::where('nim', $request->nim)
            ->where('tanggal_lahir', $request->tanggal_lahir)
            ->first();

        if ($mahasiswa) {
            if ($mahasiswa->status === 'pending') {
                return back()->withErrors(['login' => 'KTM belum disetujui.']);
            }

            if ($mahasiswa->status === 'rejected') {
                return back()->withErrors(['login' => 'Registrasi ditolak.']);
            }

            Session::put('mahasiswa_id', $mahasiswa->id);
            return redirect()->route('mahasiswa.ktm');
        }

        return back()->withErrors(['login' => 'NIM atau Tanggal Lahir salah.']);
    }

    public function showKTM()
    {
        $mahasiswaId = Session::get('mahasiswa_id');

        if (!$mahasiswaId) {
            return redirect()->route('mahasiswa.login.form');
        }

        $mahasiswa = KtmRequest::find($mahasiswaId);

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.login.form');
        }

        if ($mahasiswa->status === 'pending') {
            return back()->withErrors(['status' => 'KTM belum disetujui.']);
        }

        if ($mahasiswa->status === 'rejected') {
            return back()->withErrors(['status' => 'Registrasi ditolak.']);
        }

        return view('pdf.ktm-satu', compact('mahasiswa'));
    }

    public function dashboard()
    {
        $mahasiswa = KtmRequest::find(Session::get('mahasiswa_id'));

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.login.form');
        }

        if ($mahasiswa->status === 'pending') {
            return back()->withErrors(['status' => 'KTM belum disetujui.']);
        }

        if ($mahasiswa->status === 'rejected') {
            return back()->withErrors(['status' => 'Registrasi ditolak.']);
        }

        return view('pdf.ktm-satu', compact('mahasiswa'));
    }
}
