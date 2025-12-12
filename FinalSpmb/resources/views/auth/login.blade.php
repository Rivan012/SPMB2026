<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PPDB SMKN Tugumulyo</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f4c81',
                        secondary: '#f59e0b',
                        dark: '#1e293b',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .login-image {
            background-image: linear-gradient(rgba(15, 76, 129, 0.85), rgba(30, 41, 59, 0.9)), url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
        }
        
        /* Animasi Shake untuk error */
        .shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-5xl h-auto md:h-[600px] rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
        
        <!-- BAGIAN KIRI: GAMBAR & BRANDING (Hidden on Mobile) -->
        <div class="hidden md:flex md:w-1/2 login-image text-white p-12 flex-col justify-between relative">
            <div>
                <div class="flex items-center gap-3">
                    <div class="bg-white text-primary w-10 h-10 rounded flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <span class="font-bold text-xl tracking-wider">SMKN TUGUMULYO</span>
                </div>
            </div>
            
            <div class="relative z-10">
                <h2 class="text-4xl font-bold mb-4">Selamat Datang <br>Calon Pemimpin!</h2>
                <p class="text-blue-100 text-sm leading-relaxed mb-6">
                    Masuk ke portal PPDB untuk mengelola pendaftaran, melengkapi berkas, dan memantau hasil seleksi secara real-time.
                </p>
                <div class="flex gap-2">
                    <span class="w-12 h-1 bg-secondary rounded-full"></span>
                    <span class="w-3 h-1 bg-white/50 rounded-full"></span>
                    <span class="w-3 h-1 bg-white/50 rounded-full"></span>
                </div>
            </div>

            <!-- Pattern Decoration -->
            <div class="absolute bottom-0 right-0 opacity-10">
                <i class="fa-solid fa-shapes text-9xl"></i>
            </div>
        </div>

        <!-- BAGIAN KANAN: FORM LOGIN -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center relative">
            
            <!-- Mobile Logo (Visible only on Mobile) -->
            <div class="md:hidden text-center mb-8">
                <div class="inline-flex items-center gap-2 text-primary font-bold text-xl">
                    <i class="fa-solid fa-graduation-cap"></i> SMKN TUGUMULYO
                </div>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-800">Login Akun</h3>
                <p class="text-gray-500 text-sm mt-1">Silakan masukkan kredensial Anda.</p>
            </div>

            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Username </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-user text-gray-400"></i>
                        </div>
                        <input name="username" type="text" id="username" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition" placeholder="Masukkan Username" required>
                    </div>
                </div>

                <!-- Input: Password -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-gray-400"></i>
                        </div>
                        <input name="password" type="password" id="password" class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition" placeholder="••••••••" required>
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fa-regular fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                    <div class="flex justify-end mt-2">
                        <a href="#" class="text-xs text-primary font-medium hover:underline">Lupa Password?</a>
                    </div>
                </div>

                <!-- Action Button -->
                <button type="submit" id="btnLogin" class="w-full bg-primary hover:bg-blue-800 text-white font-bold py-3.5 rounded-lg transition shadow-lg shadow-blue-500/30 flex justify-center items-center gap-2">
                    <span>Masuk Sekarang</span>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </form>
            
            <div class="mt-4 text-center">
                 <a href="/" class="text-xs text-gray-400 hover:text-gray-600"><i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <!-- Toast Notification (Error) -->
    <div id="toast" class="fixed top-5 right-5 bg-red-500 text-white px-6 py-4 rounded-lg shadow-xl transform translate-x-full transition-transform duration-300 z-50 flex items-center gap-3">
        <i class="fa-solid fa-circle-exclamation text-xl"></i>
        <div>
            <h4 class="font-bold text-sm">Gagal Login</h4>
            <p class="text-xs text-red-100" id="toastMessage">Username atau password salah.</p>
        </div>
    </div>

    <script>
        // 1. Toggle Password Visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        
        function showError(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMessage').innerText = msg;
            toast.classList.remove('translate-x-full');
            
            setTimeout(() => {
                toast.classList.add('translate-x-full');
            }, 3000);
        }
    </script>
</body>
</html>