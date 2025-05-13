<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers;


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
    
        $mahasiswa = Mahasiswa::where('nim', $request->nim)
            ->where('tanggal_lahir', $request->tanggal_lahir)
            ->first();
    
        if ($mahasiswa) {
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

    $mahasiswa = Mahasiswa::find($mahasiswaId);

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.login.form');
        }

        return view('pdf.ktm-satu', compact('mahasiswa'));
    }


    public function dashboard()
    {
        $mahasiswa = Mahasiswa::find(Session::get('mahasiswa_id'));
        return view('pdf.ktm-satu', compact('mahasiswa'));
    }
}

