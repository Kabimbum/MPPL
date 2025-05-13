<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('mahasiswa_id')) {
            return redirect()->route('mahasiswa.login.form');
        }

        return $next($request);
    }
}
