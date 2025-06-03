<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Semua KTM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('components.styles.ktm-semua-style') <!-- dipisahkan ke file terpisah -->
</head>
<body>

<div class="container">
    <h1 class="text-center my-4">Daftar Kartu Tanda Mahasiswa</h1>


    <div class="download-btn">
  <button onclick="downloadAllKTMs()">Download Semua KTM</button>
</div>


    <div class="ktm-card-container">
        @foreach ($mahasiswas as $mahasiswa)
        <div class="ktm-card-wrapper">
            <div class="ktm-card" id="ktm-card-{{ $mahasiswa->id }}">
                <div class="ktm-card-header">
                    <h2>Kartu Tanda Mahasiswa</h2>
                </div>

                <img src="{{ asset('storage/' . $mahasiswa->image) }}" alt="Foto Mahasiswa" class="ktm-image">

                <div class="ktm-details">
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

            <!-- Tombol di luar padding -->
            <div class="download-btn">
                <button onclick="downloadKTM({{ $mahasiswa->id }})">Download KTM</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('components.scripts.ktm-semua-script')

</body>
</html>
