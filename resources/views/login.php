<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: font biar makin modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- KIRI: GAMBAR -->
        <div class="hidden md:flex items-center justify-center bg-gradient-to-br from-indigo-600 to-purple-600">
            <img 
                src="{{ asset('images/login-illustration.svg') }}" 
                alt="Login Illustration"
                class="w-3/4"
            >
        </div>

        <!-- KANAN: FORM LOGIN -->
        <div class="p-8 md:p-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">
                Selamat Datang 👋
            </h2>
            <p class="text-gray-500 mb-8">
                Masuk untuk melanjutkan ke dashboard
            </p>

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Email
                    </label>
                    <input 
                        type="email" 
                        name="email"
                        required
                        autofocus
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="email@example.com"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Password
                    </label>
                    <input 
                        type="password" 
                        name="password"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input type="checkbox" name="remember" class="rounded border-gray-300">
                        Ingat saya
                    </label>

                    <a href="#" class="text-indigo-600 hover:underline">
                        Lupa password?
                    </a>
                </div>

                <!-- Tombol Login -->
                <button 
                    type="submit"
                    class="w-full py-2 bg-indigo-600 text-white rounded-lg font-semibold hover:bg-indigo-700 transition"
                >
                    Masuk
                </button>
            </form>
        </div>
    </div>

</body>
</html>
