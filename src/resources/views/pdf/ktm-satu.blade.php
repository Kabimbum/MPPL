<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Tanda Mahasiswa</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('components.styles.ktm-satu-style')
</head>
<body>

<!-- Header: Halo + Logout -->
<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <span class="fw-semibold text-dark">Halo, {{ $mahasiswa->name }}</span>
        <a href="{{ route('mahasiswa.logout') }}" class="btn btn-primary btn-sm">
            Logout
        </a>
    </div>
</div>

<!-- KTM Card -->
<div class="ktm-card-container text-center mt-4">
    <div id="ktm-card" class="ktm-card mx-auto">
        <div class="ktm-card-header">
            <h1>Kartu Tanda Mahasiswa</h1>
        </div>

        <!-- Foto -->
        <div class="ktm-image-container">
            <img src="{{ asset('storage/' . $mahasiswa->image) }}" alt="Foto Mahasiswa" class="ktm-image">
        </div>

        <!-- Detail -->
        <div class="ktm-details text-center">
            <p><strong>Nama:</strong> {{ $mahasiswa->name }}</p>
            <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
            <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
            <p><strong>Fakultas:</strong> {{ $mahasiswa->fakultas }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d M Y') }}</p>
        </div>

        <div class="ktm-footer">
            <p><small>identika</small></p>
        </div>
    </div>

    <!-- Download Button -->
    <button class="btn btn-primary mt-4" onclick="downloadKTM()">Download KTM</button>
</div>

@include('components.scripts.ktm-satu-script')

</body>
</html>
