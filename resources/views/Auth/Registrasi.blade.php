<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/fontawesome.min.css">
    <title>Form Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        shake: 'shake 0.5s ease-in-out',
                    },
                    keyframes: {
                        shake: {
                            '0%, 100%': {
                                transform: 'translateX(0)'
                            },
                            '25%': {
                                transform: 'translateX(-5px)'
                            },
                            '75%': {
                                transform: 'translateX(5px)'
                            },
                        },
                    },
                },
            },
        };
    </script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your_own_kit_code.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Buat Akun</h2>
        <form id="registrationForm" action="{{ route('registrasiForm') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <div class="relative">
                    <input type="text" id="name" name="name" required
                        class="peer w-full px-4 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <i
                        class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 peer-focus:text-blue-500"></i>
                </div>
                <p id="nameError" class="text-red-500 text-sm mt-1 hidden">Nama wajib diisi.</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" required
                        class="peer w-full px-4 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <i
                        class="fas fa-envelope absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 peer-focus:text-blue-500"></i>
                </div>
                <p id="emailError" class="text-red-500 text-sm mt-1 hidden">Email tidak valid.</p>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required
                        class="peer w-full px-4 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <button type="button" onclick="togglePassword('password', this)"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <p id="passwordError" class="text-red-500 text-sm mt-1 hidden">Password minimal 6 karakter.</p>
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi
                    Password</label>
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="peer w-full px-4 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <button type="button" onclick="togglePassword('password_confirmation', this)"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <p id="passwordConfirmationError" class="text-red-500 text-sm mt-1 hidden">Password tidak cocok.</p>
            </div>

            <!-- Tombol -->
            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Daftar
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Sudah punya akun?
            <a href="{{ route('loginForm') }}" class="text-blue-600 hover:underline">Masuk di sini</a>
        </p>
    </div>

    <!-- JS -->
    <script>
        function togglePassword(id, el) {
            const input = document.getElementById(id);
            const icon = el.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        const form = document.getElementById('registrationForm');
        form.addEventListener('submit', function(e) {
            let valid = true;

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const passwordConfirmationError = document.getElementById('passwordConfirmationError');

            if (!name.value.trim()) {
                nameError.classList.remove('hidden');
                name.classList.add('animate-shake');
                valid = false;
            } else {
                nameError.classList.add('hidden');
                name.classList.remove('animate-shake');
            }

            if (!email.value.includes('@')) {
                emailError.classList.remove('hidden');
                email.classList.add('animate-shake');
                valid = false;
            } else {
                emailError.classList.add('hidden');
                email.classList.remove('animate-shake');
            }

            if (password.value.length < 6) {
                passwordError.classList.remove('hidden');
                password.classList.add('animate-shake');
                valid = false;
            } else {
                passwordError.classList.add('hidden');
                password.classList.remove('animate-shake');
            }

            if (password.value !== passwordConfirmation.value) {
                passwordConfirmationError.classList.remove('hidden');
                passwordConfirmation.classList.add('animate-shake');
                valid = false;
            } else {
                passwordConfirmationError.classList.add('hidden');
                passwordConfirmation.classList.remove('animate-shake');
            }

            if (!valid) e.preventDefault();
        });
    </script>
</body>

</html>
