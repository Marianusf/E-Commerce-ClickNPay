<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Buyer</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Buat Akun Buyer</h2>

        <form id="registrationForm" action="{{ route('register') }}" method="POST" class="space-y-5">
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
            </div>

            <!-- Tombol Submit -->
            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Daftar Akun
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Sudah punya akun?
            <a href="{{ route('loginForm') }}" class="text-blue-600 hover:underline">Masuk di sini</a>
        </p>
    </div>

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
    </script>
</body>

</html>
