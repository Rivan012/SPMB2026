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
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-primary border-4 border-white shadow-md transition-all duration-300 scale-110 ring-2 ring-primary ring-offset-2">
                            1</div>
                        <span class="text-xs font-semibold mt-2 text-primary absolute -bottom-6 w-32 text-center">Data
                            Diri</span>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="goToStep(2)">
                        <div id="step-circle-2"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-gray-500 bg-white border-4 border-gray-300 shadow-md transition-all duration-300">
                            2</div>
                        <span
                            class="text-xs font-semibold mt-2 text-gray-500 absolute -bottom-6 w-32 text-center">Sekolah
                            Asal</span>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="goToStep(3)">
                        <div id="step-circle-3"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-gray-500 bg-white border-4 border-gray-300 shadow-md transition-all duration-300">
                            3</div>
                        <span class="text-xs font-semibold mt-2 text-gray-500 absolute -bottom-6 w-32 text-center">Orang
                            Tua</span>
                    </div>
                </div>
            </div>

            <!-- FORM CARD -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="p-6 md:p-8">
                    <form onsubmit="saveData(event)" method="post" action="{{ route('siswa.bio1') }}" id="mainForm">
                        @csrf
                        <!-- STEP 1: DATA DIRI -->
                        <div id="step-1" class="step-content active">
                            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                                <i class="fa-regular fa-id-card text-primary"></i> Data Pribadi
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Nama Lengkap</label>
                                    <input type="text" name="name" value="{{ $data->student->full_name }}"
                                        class="w-full  border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">NISN</label>
                                    <input type="text" value="{{ $data->student->nisn }}" name="nisn"
                                        class="w-full border border-gray-200 bg-gray-50 rounded-lg px-4 py-2 text-gray-500 cursor-not-allowed">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Tempat Lahir</label>
                                    <input type="text" name="tmpt_lhr" value="{{ $data->student->birth_place }}"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lhr" value="{{ $data->student->birth_date }}"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">No WA/HP</label>
                                    <input type="number" name="no_wa" value="{{ $data->student->phone_number }}"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                        <option @if($data->student->gender == 'L') selected @endif>Laki-laki</option>
                                        <option @if($data->student->gender == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1 text-gray-700">Agama</label>
                                    <select name="agama"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                        <option @if($data->student->religion == 'Islam') selected @endif value="Islam">
                                            Islam</option>
                                        <option @if($data->student->religion == 'Kristen') selected @endif
                                            value="Kristen">Kristen</option>
                                        <option @if($data->student->religion == 'Katolik') selected @endif
                                            value="Katolik">Katolik</option>
                                        <option @if($data->student->religion == 'Hindu') selected @endif value="Hindu">
                                            Hindu</option>
                                        <option @if($data->student->religion == 'Buddha') selected @endif value="Buddha">
                                            Buddha</option>
                                        <option @if($data->student->religion == 'Konghucu') selected @endif
                                            value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-sm font-medium mb-1 text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" rows="3"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">{{ $data->student->address }}</textarea>
                            </div>

                            <!-- Tombol Navigasi Step 1 -->
                            <div class="flex justify-end mt-8 border-t pt-4">
                                <button type="submit"
                                    class="bg-primary hover:bg-blue-800 text-white px-6 py-2.5 rounded-lg font-medium shadow-md transition flex items-center gap-2">
                                    Selanjutnya <i class="fa-solid fa-arrow-right"></i>
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


        function saveData(e) {
            e.preventDefault(); // cegah submit dulu

            const form = e.target;
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;

            // Tombol loading
            btn.disabled = true;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Menyimpan...';

            // Tampilkan toast
            const toast = document.getElementById('toast');
            toast.classList.remove('translate-y-20', 'opacity-0');

            // Setelah 1 detik → sembunyikan toast → submit form
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');

                // Submit form beneran 👇
                form.submit();

            }, 1200);
        }

    </script>
</x-siswa>