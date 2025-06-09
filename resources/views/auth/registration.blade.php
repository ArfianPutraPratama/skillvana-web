<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Custom User Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Adding Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: #F8F9FA;
        }

        .register-container {
            display: flex;
            width: 900px;
            height: 500px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image-section {
            width: 50%;
            background: url('../img/login.jpg') center/cover no-repeat;
        }

        .form-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .card {
            width: 100%;
            max-width: 700px;
            border-radius: 10px;
            padding: 2rem;
        }

        /* Style for error messages */
        .invalid-feedback {
            display: block;
            font-size: 0.875em;
        }

        /* Ensure input-group alignment */
        .input-group .form-control {
            border-right: 0;
        }

        .input-group .input-group-text {
            background-color: #fff;
            border-left: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="card shadow-sm">
                <h2 class="text-center mb-3">Sign up to continue</h2>
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" value="{{ old('name') }}" required aria-describedby="nameError">
                        @error('name')
                            <span class="invalid-feedback" id="nameError">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" value="{{ old('email') }}" required aria-describedby="emailError">
                        @error('email')
                            <span class="invalid-feedback" id="emailError">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" required aria-describedby="passwordError">
                            <span class="input-group-text">
                                <i class="fas fa-eye toggle-password" data-target="password"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" id="passwordError">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" required
                                aria-describedby="passwordConfirmationError">
                            <span class="input-group-text">
                                <i class="fas fa-eye toggle-password" data-target="password_confirmation"></i>
                            </span>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback" id="passwordConfirmationError">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Register</button>

                    <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}"
                            class="text-decoration-none">Log in</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const isPasswordVisible = input.type === 'text';

                // Toggle input type
                input.type = isPasswordVisible ? 'password' : 'text';

                // Toggle icon between eye and eye-slash
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>

</html>
