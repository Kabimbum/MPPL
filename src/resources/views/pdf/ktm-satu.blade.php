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

<div class="ktm-card-container">
<div id="ktm-card" class="ktm-card">
    <div class="ktm-card-header">
        <h1>Kartu Tanda Mahasiswa</h1>
    </div>

    <!-- FOTO DI ATAS -->
    <div class="ktm-image-container">
        <img src="{{ asset('storage/' . $mahasiswa->image) }}" alt="Foto Mahasiswa" class="ktm-image">
    </div>

    
    <div class="ktm-details text-center">
        <p><strong>Nama:</strong> {{ $mahasiswa->name }}</p>
        <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
        <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
        <p><strong>Fakultas:</strong> {{ $mahasiswa->fakultas }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d M Y') }}</p>
    </div>

    <div class="ktm-footer">
        <p><small>Kabimbums's small project made with love</small></p>
    </div>
</div>


    <!-- Button to trigger download -->
    <button class="btn btn-primary download-btn" onclick="downloadKTM()">Download KTM</button>
</div>

@include('components.scripts.ktm-satu-script')

</body>
</html>
  