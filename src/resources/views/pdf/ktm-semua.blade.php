<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Semua KTM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('components.styles.ktm-semua-style')
</head>
<body>

<div class="ktm-container">
    <h1 class="text-center mb-4">Daftar Kartu Tanda Mahasiswa</h1>

    <div class="ktm-card-wrapper">
        @foreach ($mahasiswas as $mahasiswa)
        <div class="ktm-card mb-5 p-4 shadow-sm" id="ktm-card-{{ $mahasiswa->id }}">
            <div class="text-center mb-3">
                <h2 class="fw-bold text-primary">Kartu Tanda Mahasiswa</h2>
                <hr>
            </div>

            <!-- Foto profil di atas -->
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . $mahasiswa->image) }}" alt="Foto Mahasiswa" class="rounded-circle border border-primary" style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <!-- Detail Mahasiswa -->
            <div class="ktm-details text-center">
                <p><strong>Nama:</strong> {{ $mahasiswa->name }}</p>
                <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
                <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
                <p><strong>Fakultas:</strong> {{ $mahasiswa->fakultas }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d M Y') }}</p>
            </div>

            <!-- Footer -->
            <div class="ktm-footer text-center mt-3">
                <p><small>Kabimbums's small project made with love</small></p>
            </div>

            <!-- Button Download -->
            <div class="text-center mt-2">
                <button class="btn btn-primary download-btn" onclick="downloadKTM({{ $mahasiswa->id }})">Download KTM</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('components.scripts.ktm-semua-script')

</body>
</html>
