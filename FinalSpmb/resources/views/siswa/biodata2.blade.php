<x-siswa>
    <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 z-10">
        <div class="flex items-center gap-4">
            <button id="openSidebar" class="md:hidden text-gray-600 text-xl focus:outline-none"><i
                    class="fa-solid fa-bars"></i></button>
            <h2 class="text-xl font-bold text-primary hidden sm:block">Biodata Siswa</h2>
        </div>
    </header>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4 md:p-8">
        <div class="max-w-4xl mx-auto">

            <!-- STEPPER INDICATOR (Sesuai Request Gambar) -->
            <div class="mb-10 px-4">
                <div class="flex items-center justify-between relative max-w-2xl mx-auto">
                    <!-- Garis Penghubung Belakang -->
                    <div
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-1 bg-gray-300 -z-10 rounded">
                    </div>
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 h-1 bg-primary -z-10 rounded transition-all duration-500"
                        id="progress-bar" style="width: 0%"></div>

                    <!-- Step 1 -->
                    <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="goToStep(1)">
                        <div id="step-circle-1"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-primary border-4 border-white shadow-md transition-all duration-300 scale-110">
                            1</div>
                        <span class="text-xs font-semibold mt-2 text-primary absolute -bottom-6 w-32 text-center">Data
                            Diri</span>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="goToStep(2)">
                        <div id="step-circle-2"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-primary border-4 border-white shadow-md transition-all duration-300 scale-110 ring-2 ring-primary ring-offset-2">
                            2</div>
                        <span
                            class="text-xs font-semibold mt-2 text-gray-500 absolute -bottom-6 w-32 text-center">Sekolah
                            Asal</span>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="goToStep(3)">
                        <div id="step-circle-3"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-primary border-4 border-white shadow-md transition-all duration-300 scale-110 ring-2 ring-primary ring-offset-2">
                            3</div>
                        <span class="text-xs font-semibold mt-2 text-gray-500 absolute -bottom-6 w-32 text-center">Orang
                            Tua</span>
                    </div>
                </div>
            </div>

            <!-- FORM CARD -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="p-6 md:p-8">
                    <form onsubmit="saveData(event)" id="mainForm">
                        <div id="step-3" class="step-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                                <i class="fa-solid fa-users text-primary"></i> Data Orang Tua
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Nama Ayah</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Pekerjaan Ayah</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Nama Ibu</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Pekerjaan Ibu</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">No. HP Orang Tua</label>
                                    <input type="tel"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                            </div>


                            <!-- Tombol Navigasi Step 3 -->
                            <div class="flex justify-between mt-8 border-t pt-4">
                                <a href="{{ route('siswa.bio1') }}"
                                    class="text-gray-600 hover:text-gray-800 font-medium px-4 py-2.5 rounded-lg transition flex items-center gap-2">
                                    <i class="fa-solid fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit"
                                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-2.5 rounded-lg font-bold shadow-lg transition flex items-center gap-2">
                                    <i class="fa-solid fa-save"></i> Simpan Data
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
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
</x-siswa>