<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $head }} - PPDB SMKN Tugumulyo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f4c81', secondary: '#f59e0b', sidebar: '#1e293b',
                        success: '#10b981', danger: '#ef4444', warning: '#f59e0b'
                    },
                    fontFamily: { sans: ['Poppins', 'sans-serif'] }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 font-sans text-gray-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR -->
        <aside
            class="bg-sidebar text-white w-64 flex-shrink-0 hidden md:flex flex-col transition-all duration-300 z-20 h-full fixed md:relative shadow-xl">
            <div class="h-16 flex items-center justify-center border-b border-gray-700 bg-gray-900/50">
                <div class="flex items-center gap-2 font-bold text-lg">
                    <i class="fa-solid fa-user-shield text-secondary text-2xl"></i>
                    <span>PANITIA <span class="text-secondary">PPDB</span></span>
                </div>
            </div>
            <div class="p-6 border-b border-gray-700 flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-gray-600 overflow-hidden border-2 border-primary">
                    <img src="https://ui-avatars.com/api/?name=Admin+Panitia&background=0f4c81&color=fff" alt="Admin"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-semibold text-sm">{{ Auth::user()->username }}</h4>
                    <p class="text-xs text-green-400 flex items-center gap-1">
                        {{-- <i class="fa-solid fa-circle text-[8px]"></i> Online</p> --}}
                </div>
            </div>
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('petugas.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition group">
                    <i class="fa-solid fa-chart-line w-5"></i> Dashboard
                </a>
                <a href="{{ route('petugas.verif') }}"
                    class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition group">
                    <i class="fa-solid fa-file-circle-check w-5 group-hover:text-secondary transition"></i>
                    <span class="flex-1">Verifikasi Berkas</span>
                </a>
                <a href="{{ route('petugas.siswa') }}"
                    class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition group">
                    <i class="fa-solid fa-users w-5 group-hover:text-secondary transition"></i> Data Siswa
                </a>
                <a href="{{ route('petugas.lapor') }}"
                    class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition group">
                    <i class="fa-solid fa-print w-5 group-hover:text-secondary transition"></i> Laporan
                </a>
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('admin.settings.index') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition group">
                        <i class="fa-solid fa-gear w-5 group-hover:text-secondary transition"></i> Pengaturan
                    </a>
                @endif
            </nav>
            <div class="p-4 border-t border-gray-700">
                <a href="index.html"
                    class="flex items-center gap-3 px-4 py-2 text-red-400 hover:bg-red-900/20 hover:text-red-300 rounded-lg transition w-full">
                    <i class="fa-solid fa-power-off w-5"></i> Logout
                </a>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
            <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 z-10">
                <h2 class="text-xl font-bold text-gray-800">{{ $head }}</h2>
                <div class="flex items-center gap-4">

                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>