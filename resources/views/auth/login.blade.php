<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Login - School News Portal</title>

    <style>
        body {
            background: linear-gradient(135deg, #f5f7f5 0%, #ffffff 100%);
            color: #000000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            padding: 20px;
        }

        .card-container {
            display: flex;
            align-items: stretch;
            justify-content: center;
            max-width: 1000px;
            width: 100%;
            border-radius: 15px;
            overflow: hidden;
        }

        .card {
            display: flex;
            max-width: 1000px;
            width: 100%;
            border-radius: 15px;
            background-color: rgba(248, 249, 250, 0.95);
            padding: 25px;
            box-shadow: none;
            border: none;
            flex-direction: row;
        }

        .side-image {
            width: 50%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px 0 0 15px;
        }

        .card-content {
            width: 50%;
            padding-left: 30px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dde1e5;
        }

        .input-group-text {
            border-radius: 0 8px 8px 0;
            cursor: pointer;
        }

        .btn-success {
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-weight: 500;
        }

        .school-logo {
            max-height: 100px;
            object-fit: contain;
        }

        @media (max-width: 992px) {
            .card-container {
                flex-direction: column;
                align-items: center;
            }

            .side-image {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }

            .card-content {
                width: 100%;
                padding-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="card">
            <img src="lgin/login-vector.png" alt="Side Photo" class="side-image">
            <div class="card-content">
                <div class="text-center mb-4">
                    <img src="{{ asset('logo/smkAlazhar.jpeg') }}" alt="Logo Sekolah" class="school-logo mb-3">
                    <h2 class="login-title">School News Portal Login</h2>
                    <p class="login-subtitle text-muted">Masuk untuk mengakses berita dan informasi terkini dari
                        sekolah.</p>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $errors->first() }} <!-- Pesan kesalahan dari backend -->
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">
                            <i class="fas fa-envelope"></i> {{ __('Email') }}
                        </label>
                        <input id="email" type="email" class="form-control" name="email"
                            value="{{ old('email') }}" placeholder="Masukkan email Anda" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">
                            <i class="fas fa-lock"></i> {{ __('Password') }}
                        </label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password"
                                placeholder="Masukkan kata sandi Anda" required>
                            <span class="input-group-text" onclick="togglePassword()">
                                <i id="togglePasswordIcon" class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-sign-in-alt me-2"></i>{{ __('Login') }}
                    </button>
                </form>

                <div class="text-center mt-4">
                    <a href="{{ route('register') }}" class="text-decoration-none me-3">
                        <i class="fas fa-user-plus"></i> {{ __('Register') }}
                    </a>
                    <a href="{{ route('password.request') }}" class="text-decoration-none">
                        <i class="fas fa-key"></i> {{ __('Forgot Password?') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.getElementById("togglePasswordIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
