<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Nurul Jadid Al Islami</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f7f9f6; }
        .bg-sage { background-color: #2d5a43; }
        .bg-sage-light { background-color: #eaf1ec; }
        .text-sage { color: #2d5a43; }
    </style>
</head>
<body class="text-slate-800 antialiased">

    <!-- Top Navigation Bar (Gaya Floating Capsule Gambar 1 + Menu Gambar 2) -->
    <div class="max-w-7xl mx-auto px-4 pt-6">
        <header class="bg-white/80 backdrop-blur-md border border-slate-200/60 rounded-full px-8 py-3.5 flex items-center justify-between shadow-sm">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-emerald-700 flex items-center justify-center text-white font-bold text-lg shadow-sm">
                    NJ
                </div>
                <div>
                    <h1 class="text-base font-bold leading-none text-slate-800">PP.NURUL JADID AL ISLAMI</h1>
                    <span class="text-xs text-slate-400 font-medium">Mengaji, Mengabdi dan Membentuk Akhlakul Karimah</span>
                </div>
            </div>

            <!-- Menu Navigasi Sesuai Gambar 2 -->
            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium text-slate-600">
                <a href="#" class="text-emerald-700 font-semibold transition hover:text-emerald-800">Home</a>
                <a href="#" class="hover:text-emerald-700 transition">Profil</a>
                <a href="#" class="hover:text-emerald-700 transition">PSB</a>
                <a href="#" class="hover:text-emerald-700 transition">Keislaman</a>
                <a href="#" class="hover:text-emerald-700 transition">Rubrik</a>
                <a href="#" class="hover:text-emerald-700 transition">Pengasuh</a>
                <a href="#" class="hover:text-emerald-700 transition">Download</a>
                <a href="#" class="hover:text-emerald-700 transition">Kontak</a>
            </nav>

            <div class="flex items-center space-x-3">
                <a href="#psb" class="bg-emerald-800 hover:bg-emerald-900 text-white text-xs font-semibold px-5 py-2.5 rounded-full transition shadow-sm">
                    Daftar Santri
                </a>
            </div>
        </header>
    </div>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Sederhana -->
    <footer class="mt-20 border-t border-slate-200 bg-white py-8 text-center text-xs text-slate-400">
        &copy; {{ date('Y') }} Pondok Pesantren Nurul Jadid Al Islami. Seluruh Hak Cipta Dilindungi.
    </footer>
</body>
</html>