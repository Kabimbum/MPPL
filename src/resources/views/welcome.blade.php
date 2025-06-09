<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome - IDENTIKA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            background-image: url('https://www.transparenttextures.com/patterns/cartographer.png');
            background-repeat: repeat;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-[#f0f4f8] px-4">

    <div class="max-w-4xl w-full bg-white shadow-xl rounded-2xl p-10 relative overflow-hidden">
        
        <!-- Logo & Badge -->
        <div class="flex items-center justify-between mb-6">
        <img src="{{ asset('image/IDENTIKAFIX.png') }}" alt="Logo Sistem" class="img-fluid" style="max-height: 110px;">
            <span class="inline-flex items-center gap-2 px-4 py-1 text-sm font-semibold text-[#004aad] bg-[#f2f6ff] border border-[#004aad] rounded-full">
                <svg class="w-4 h-4 text-[#004aad]" fill="currentColor" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/></svg>
                Sistem KTM
            </span>
        </div>

        <!-- Judul dan Informasi -->
        <div class="text-left">
            <h1 class="text-5xl font-bold text-[#004aad] mb-2">IDENTIKA </h1>
            <p class="text-xl text-gray-700 font-medium mb-4">Identitas Akademika</p>
            <p class="text-gray-500 text-lg">
                Sistem Identitas Digital Akademik &bull; 
                <span class="font-semibold text-[#004aad]">MPPL</span> 
                <span class="font-semibold text-[#004aad]">2025</span> &bull; 
                <span class="text-gray-700">Pengembang: DIGIDA</span>
            </p>
        </div>

        <!-- Tombol Login -->
        <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <!-- Tombol Login Mahasiswa -->
            <a href="{{ route('mahasiswa.login.form') }}"
               class="w-full sm:w-auto px-6 py-3 text-white bg-[#004aad] hover:bg-[#00398a] rounded-lg text-center font-semibold shadow-md transition">
                Login Mahasiswa
            </a>

            <a href="{{ route('ktmrequest.form') }}"
               class="w-full sm:w-auto px-6 py-3 text-[#004aad] border border-[#004aad] hover:bg-[#f2f6ff] rounded-lg text-center font-semibold shadow-md transition">
                Registrasi KTM
            </a>


            <!-- Tombol Login Admin Disembunyikan tapi masih aktif -->
            @if (Route::has('filament.admin.auth.login'))
                @auth
                    <a href="{{ route('filament.admin.pages.dashboard') }}" id="adminLink" class="hidden">Dashboard Admin</a>
                @else
                    <a href="{{ route('filament.admin.auth.login') }}" id="adminLink" class="hidden">Login Admin</a>
                @endauth
            @endif
        </div>

</div>

    </div>

    <!-- Shortcut ALT + A -->
    <script>
        document.addEventListener('keydown', function(e) {
            if (e.altKey && e.key.toLowerCase() === 'a') {
                const adminLink = document.getElementById('adminLink');
                if (adminLink) {
                    window.location.href = adminLink.href;
                }
            }
        });
    </script>

</body>
</html>
