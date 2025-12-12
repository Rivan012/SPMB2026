<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa - PPDB SMKN Tugumulyo</title>
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
                        sidebar: '#1e293b',
                        light: '#f3f4f6'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }

        /* Hide generic file input */
        .file-input-hidden {
            display: none;
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.4s ease-out;
        }
        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 antialiased">

    <div class="flex h-screen overflow-hidden">

        <aside id="sidebar" class="bg-sidebar text-white w-64 flex-shrink-0 hidden md:flex flex-col transition-all duration-300 z-20 h-full fixed md:relative">
            <div class="h-16 flex items-center justify-center border-b border-gray-700 bg-gray-900/50">
                <div class="flex items-center gap-2 font-bold text-lg">
                    <i class="fa-solid fa-graduation-cap text-secondary text-2xl"></i>
                    <span>PPDB <span class="text-secondary">SMK</span></span>
                </div>
                <button id="closeSidebar" class="md:hidden absolute right-4 text-gray-400 hover:text-white"><i class="fa-solid fa-times"></i></button>
            </div>
            <div class="p-6 border-b border-gray-700 text-center">
                 <h4 class="font-semibold text-sm text-white">Budi Santoso</h4>
                 <p class="text-xs text-gray-400">No. Pend: 2025001</p>
            </div>
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('siswa.index') }}" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-gauge-high w-5"></i> Dashboard
                </a>
                <a href="{{ route('siswa.bio') }}" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-user-pen w-5"></i> Biodata Siswa
                </a>
                <a href="{{ route('siswa.dokumen') }}" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-folder-open w-5"></i> Upload Dokumen
                </a>
                {{-- <a href="pengumuman.html" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-bullhorn w-5"></i> Pengumuman
                </a> --}}
            </nav>
            <div class="p-4 border-t border-gray-700">
                <a href="{{ route('logout') }}" class="flex items-center gap-3 px-4 py-2 text-red-400 hover:bg-red-900/20 hover:text-red-300 rounded-lg transition w-full">
                    <i class="fa-solid fa-right-from-bracket w-5"></i> Keluar
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
            {{ $slot }}           
        </div>
    </div>
    <div id="toast" class="fixed bottom-5 right-5 bg-gray-800 text-white px-6 py-4 rounded-lg shadow-xl transform translate-y-20 opacity-0 transition-all duration-300 z-50 flex items-center gap-3">
        <i class="fa-solid fa-circle-check text-green-400 text-xl"></i>
        <div>
            <h4 class="font-bold text-sm">Berhasil!</h4>
            <p class="text-xs text-gray-300" id="toast-message">Data berhasil disimpan.</p>
        </div>
    </div>

    <script>
        // 1. Sidebar Toggle Logic for Mobile
        const sidebar = document.getElementById('sidebar');
        const openSidebarBtn = document.getElementById('openSidebar');
        const closeSidebarBtn = document.getElementById('closeSidebar');
        const overlay = document.createElement('div'); // Create overlay dynamically

        // Setup Overlay
        overlay.className = 'fixed inset-0 bg-black bg-opacity-50 z-10 hidden md:hidden glass';
        document.body.appendChild(overlay);

        function toggleSidebar() {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('absolute'); // Make it float on mobile
            sidebar.classList.toggle('h-full');
            
            if (!sidebar.classList.contains('hidden')) {
                overlay.classList.remove('hidden');
            } else {
                overlay.classList.add('hidden');
            }
        }

        openSidebarBtn.addEventListener('click', toggleSidebar);
        closeSidebarBtn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        // 2. Tab/Menu Switching Logic (SPA Feel)
        function switchTab(tabId) {
            // Hide all contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Show selected content
            document.getElementById(tabId).classList.add('active');

            // Update Active Sidebar State
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('bg-primary', 'text-white');
                link.classList.add('text-gray-400', 'hover:bg-gray-800', 'hover:text-white');
            });

            // Set styling for active link
            const activeLink = document.getElementById('link-' + tabId);
            activeLink.classList.remove('text-gray-400', 'hover:bg-gray-800', 'hover:text-white');
            activeLink.classList.add('bg-primary', 'text-white');

            // Close sidebar on mobile after selection
            if(window.innerWidth < 768) {
                toggleSidebar();
            }
        }

        // 3. File Input UI Logic
        function updateFileName(input, labelId) {
            const label = document.getElementById(labelId);
            if(input.files && input.files[0]) {
                label.innerText = "File dipilih: " + input.files[0].name;
                label.classList.add("text-green-600");
                label.classList.remove("text-primary");
            }
        }
        function saveData(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            // Loading State
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Menyimpan...';
            setTimeout(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
                showToast("Data biodata berhasil diperbarui!");
            }, 1500);
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').innerText = message;
            
            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }
    </script>
    <script>
        // Sidebar Logic
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');
        
        function toggleSidebar() {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('absolute');
            sidebar.classList.toggle('h-full');
        }
        openBtn.addEventListener('click', toggleSidebar);
        closeBtn.addEventListener('click', toggleSidebar);

        // STEPPER LOGIC
        let currentStep = 1;
        const totalSteps = 3;

        function changeStep(step) {
            goToStep(step);
        }

        function goToStep(step) {
            // Update Content Visibility
            document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');

            // Update Stepper UI
            const progressBar = document.getElementById('progress-bar');
            
            // Calculate Progress Bar Width (0% for step 1, 50% for step 2, 100% for step 3)
            let progress = 0;
            if(step === 2) progress = 50;
            if(step === 3) progress = 100;
            progressBar.style.width = `${progress}%`;

            // Loop through steps to update colors
            for (let i = 1; i <= totalSteps; i++) {
                const circle = document.getElementById(`step-circle-${i}`);
                const label = circle.nextElementSibling;

                if (i <= step) {
                    // Active or Completed Steps
                    circle.classList.remove('bg-white', 'text-gray-500', 'border-gray-300');
                    circle.classList.add('bg-primary', 'text-white', 'border-white');
                    
                    label.classList.remove('text-gray-500');
                    label.classList.add('text-primary');

                    if(i === step) {
                        circle.classList.add('scale-110', 'ring-2', 'ring-primary', 'ring-offset-2');
                    } else {
                        circle.classList.remove('scale-110', 'ring-2', 'ring-primary', 'ring-offset-2');
                    }
                } else {
                    // Inactive Steps
                    circle.classList.remove('bg-primary', 'text-white', 'border-white', 'scale-110', 'ring-2', 'ring-primary', 'ring-offset-2');
                    circle.classList.add('bg-white', 'text-gray-500', 'border-gray-300');
                    
                    label.classList.remove('text-primary');
                    label.classList.add('text-gray-500');
                }
            }
            
            currentStep = step;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function saveData(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Menyimpan...';
            
            setTimeout(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
                const toast = document.getElementById('toast');
                toast.classList.remove('translate-y-20', 'opacity-0');
                setTimeout(() => { toast.classList.add('translate-y-20', 'opacity-0'); }, 3000);
            }, 1000);
        }
    </script>
</body>
</html>