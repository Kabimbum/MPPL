<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
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
<body class="min-h-screen flex items-center justify-center px-4 bg-[#f0f4f8]">

    <!-- Login Card -->
    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">
        <div class="text-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-[#004aad]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0112 15c2.09 0 4.064.48 5.879 1.335M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h2 class="text-2xl font-bold text-[#004aad] mt-2">Cetak KTM</h2>
        </div>

        {{-- Error Messages --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 text-sm p-3 rounded mb-4 text-center">
            {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 text-sm p-3 rounded mb-4">
                @foreach($errors->all() as $error)
                    <div class="text-center">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        {{-- Form Login --}}
        <form method="POST" action="{{ route('mahasiswa.login.submit') }}" class="space-y-4">
            @csrf

            <!-- NIM -->
            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" name="nim" id="nim" required
                       value="{{ old('nim') }}"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#004aad] focus:border-[#004aad]"
                       placeholder="Masukkan NIM">
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#004aad] focus:border-[#004aad]"
                       placeholder="YYYY-MM-DD">
                <p class="text-xs text-gray-500 mt-1">Gunakan format YYYY-MM-DD sebagai password.</p>
            </div>

            <!-- Tombol Masuk -->
            <button type="submit"
                    class="w-full bg-[#004aad] hover:bg-[#003a94] text-white font-semibold py-2 rounded-lg shadow-sm transition duration-300">
                Masuk
            </button>
        </form>

        <!-- Tombol Kembali -->
        <div class="mt-6 text-center">
            <a href="{{ url('/') }}"
               class="inline-block text-[#004aad] font-medium hover:underline transition">
                &larr; Kembali ke Halaman Utama
            </a>
        </div>
    </div>

</body>
</html>
