<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi KTM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e5e5e5 url('https://www.transparenttextures.com/patterns/cartographer.png') repeat;
        }
        .form-box {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 32px;
        }
        .form-title {
            font-size: 20px;
            font-weight: bold;
            color: #0d47a1;
            margin-bottom: 24px;
        }
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333333;
        }
        .form-control {
            font-size: 14px;
        }
        .btn-primary {
            background-color: #0d47a1;
            border-color: #0d47a1;
        }
        .btn-primary:hover {
            background-color: #093a82;
            border-color: #093a82;
        }
        .link {
            font-size: 14px;
            color: #0d47a1;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="form-box">
        <div class="text-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0d47a1" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M13.468 12.37C12.758 11.226 11.479 10.5 10 10.5H6c-1.48 0-2.758.726-3.468 1.87A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-1a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>
            <h5 class="form-title mt-2">Formulir Registrasi KTM</h5>
        </div>

        {{-- Flash Message Success --}}
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Registrasi --}}
        <form action="{{ route('ktmrequest.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" value="{{ old('fakultas') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Foto</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Kirim Permintaan</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <a href="/" class="link">← Kembali ke Halaman Utama</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstr
