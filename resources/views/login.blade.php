<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TimiTimi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #ff6b9d;
            --secondary-color: #ffc2d1;
            --accent-color: #ff8fab;
        }

        body {
            background: linear-gradient(135deg, #fff5f7 0%, #ffe8ee 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        .login-card {
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 2.5rem;
            border-radius: 15px 15px 0 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.3);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 157, 0.25);
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border: none;
            padding: 12px;
            font-size: 1.1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, var(--accent-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 157, 0.4);
        }

        .floating-icon {
            position: absolute;
            font-size: 2rem;
            opacity: 0.1;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .icon-1 {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .icon-2 {
            top: 20%;
            right: 15%;
            animation-delay: 1s;
        }

        .icon-3 {
            bottom: 15%;
            left: 15%;
            animation-delay: 2s;
        }

        .icon-4 {
            bottom: 10%;
            right: 10%;
            animation-delay: 1.5s;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="card">
                <div class="login-header text-center">
                    <i class="bi bi-cake2-fill" style="font-size: 4rem; animation: float 2s ease-in-out infinite;"></i>
                    <h2 class="mt-3 mb-2 fw-bold">TimiTimi</h2>
                    <p class="mb-0 opacity-75">Admin Dashboard Login</p>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">
                                <i class="bi bi-person-fill me-2 text-primary"></i>Username
                            </label>
                            <input type="text"
                                   class="form-control form-control-lg"
                                   id="username"
                                   name="username"
                                   placeholder="Masukkan username Anda"
                                   required
                                   autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">
                                <i class="bi bi-lock-fill me-2 text-primary"></i>Password
                            </label>
                            <input type="password"
                                   class="form-control form-control-lg"
                                   id="password"
                                   name="password"
                                   placeholder="Masukkan password Anda"
                                   required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Login
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            <i class="bi bi-shield-lock-fill me-1"></i>
                            Sistem login aman dan terenkripsi
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-light text-center py-3">
                    <small class="text-muted">&copy; 2025 TimiTimi.</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
