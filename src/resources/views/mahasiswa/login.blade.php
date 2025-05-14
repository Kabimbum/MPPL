<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom style to center the form vertically and horizontally */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            width: 100%;
            max-width: 400px; /* Adjust the width */
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #fff;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2 class="form-title">Login Mahasiswa</h2>

        @if($errors->has('login_error'))
            <div class="error-message">
                {{ $errors->first('login_error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('mahasiswa.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM (Username):</label>
                <input type="text" name="nim" id="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir (Password):</label>
                <input type="password" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                <small class="form-text text-muted">Enter your birthdate as password (YYYY-MM-DD).</small>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
