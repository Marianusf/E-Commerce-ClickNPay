<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Registrasi</h2>
        <form action="{{ route('registrasiForm') }}" method="POST" class="space-y-4" id="registrationForm">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="relative">
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 peer">
                    <span class="absolute inset-y-0 right-3 flex items-center text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <p class="text-sm text-red-500 mt-1 hidden" id="nameError">Nama wajib diisi.</p>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 peer">
                    <span class="absolute inset-y-0 right-3 flex items-center text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <p class="text-sm text-red-500 mt-1 hidden" id="emailError">Email tidak valid.</p>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 peer">
                    <span class="absolute inset-y-0 right-3 flex items-center text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <p class="text-sm text-red-500 mt-1 hidden" id="passwordError">Password minimal 6 karakter.</p>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                    Password</label>
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 peer">
                    <span class="absolute inset-y-0 right-3 flex items-center text-gray-400 peer-focus:text-blue-500">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <p class="text-sm text-red-500 mt-1 hidden" id="passwordConfirmationError">Password tidak cocok.</p>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-transform transform hover:scale-105">
                Daftar
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">
            Sudah punya akun? <a href="{{ route('loginForm') }}" class="text-blue-500 hover:underline">Masuk</a>
        </p>
    </div>

    <script>
        const form = document.getElementById('registrationForm');
        form.addEventListener('submit', (e) => {
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

            if (!valid) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
