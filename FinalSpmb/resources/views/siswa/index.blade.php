<x-siswa>
    <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 z-10">
        <div class="flex items-center gap-4">
            <button id="openSidebar" class="md:hidden text-gray-600 text-xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
            <h2 class="text-xl font-bold text-primary hidden sm:block">Panel Siswa</h2>
        </div>

        <div class="flex items-center gap-4">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-semibold text-gray-700">Gelombang 1</p>
                <p class="text-xs text-gray-500">Tahun Ajaran 2025/2026</p>
            </div>
            <div
                class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-primary relative cursor-pointer hover:bg-gray-300 transition">
                <i class="fa-solid fa-bell"></i>
                <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 border-2 border-white rounded-full"></span>
            </div>
        </div>
    </header>

    <!-- SCROLLABLE CONTENT AREA -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4 md:p-8">

        <!-- 1. DASHBOARD VIEW -->
        <div id="dashboard" class="tab-content active max-w-6xl mx-auto">
            <!-- Status Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Status Pendaftaran</p>
                            <h3 class="text-lg font-bold text-yellow-600 mt-1">Verifikasi Berkas</h3>
                            <p class="text-xs text-gray-400 mt-2">Menunggu pengecekan admin</p>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-lg text-yellow-600">
                            <i class="fa-solid fa-file-contract text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Kelengkapan Data</p>
                            <h3 class="text-lg font-bold text-blue-600 mt-1">80% Lengkap</h3>
                            <p class="text-xs text-gray-400 mt-2">Lengkapi dokumen rapor!</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
                            <i class="fa-solid fa-chart-pie text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-wider">Pilihan Jurusan</p>
                            <h3 class="text-lg font-bold text-green-600 mt-1">TKJ</h3>
                            <p class="text-xs text-gray-400 mt-2">Teknik Komputer Jaringan</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-lg text-green-600">
                            <i class="fa-solid fa-network-wired text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Stepper -->
            <div class="bg-white rounded-xl shadow-sm p-8 mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-6">Alur Pendaftaran Saya</h3>
                <div class="relative">
                    <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -translate-y-1/2 z-0 hidden md:block">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative z-10">
                        <!-- Step 1 -->
                        <div class="flex md:flex-col items-center gap-4 md:text-center">
                            <div
                                class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-lg flex-shrink-0">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="text-left md:text-center">
                                <h4 class="font-bold text-sm text-primary">Buat Akun</h4>
                                <p class="text-xs text-gray-500">Selesai</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="flex md:flex-col items-center gap-4 md:text-center">
                            <div
                                class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center font-bold shadow-lg flex-shrink-0 ring-4 ring-yellow-100">
                                2
                            </div>
                            <div class="text-left md:text-center">
                                <h4 class="font-bold text-sm text-gray-800">Lengkapi Berkas</h4>
                                <p class="text-xs text-yellow-600 font-semibold">Sedang Proses</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="flex md:flex-col items-center gap-4 md:text-center opacity-60">
                            <div
                                class="w-10 h-10 bg-gray-300 text-gray-500 rounded-full flex items-center justify-center font-bold shadow flex-shrink-0">
                                3
                            </div>
                            <div class="text-left md:text-center">
                                <h4 class="font-bold text-sm text-gray-600">Tes Seleksi</h4>
                                <p class="text-xs text-gray-400">Belum Mulai</p>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="flex md:flex-col items-center gap-4 md:text-center opacity-60">
                            <div
                                class="w-10 h-10 bg-gray-300 text-gray-500 rounded-full flex items-center justify-center font-bold shadow flex-shrink-0">
                                4
                            </div>
                            <div class="text-left md:text-center">
                                <h4 class="font-bold text-sm text-gray-600">Pengumuman</h4>
                                <p class="text-xs text-gray-400">Menunggu Hasil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alert/Announcement Mini -->
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 flex items-start gap-4">
                <i class="fa-solid fa-circle-info text-blue-500 text-xl mt-1"></i>
                <div>
                    <h4 class="font-bold text-blue-800">Informasi Penting</h4>
                    <p class="text-sm text-blue-600 mt-1">
                        Batas akhir upload berkas adalah tanggal <strong>30 Mei 2025</strong>. Pastikan semua dokumen
                        terupload dengan format PDF/JPG.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. BIODATA VIEW -->
        <div id="biodata" class="tab-content max-w-5xl mx-auto">
            <div class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Formulir Data Diri</h2>

                <form id="biodataForm" onsubmit="saveData(event)">
                    <!-- Section: Data Pribadi -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4 flex items-center gap-2">
                            <i class="fa-regular fa-id-card"></i> Data Pribadi
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" value="Budi Santoso"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NISN</label>
                                <input type="text" value="0012345678"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-gray-50"
                                    readonly>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                                <input type="date"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                                <select
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
                                <select
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                            <textarea rows="3"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none"></textarea>
                        </div>
                    </div>

                    <!-- Section: Data Sekolah Asal -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-school"></i> Data Sekolah Asal
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Sekolah</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none"
                                    placeholder="Contoh: SMPN 1 Tugumulyo">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Lulus</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                        </div>
                    </div>

                    <!-- Section: Data Orang Tua -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-primary mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-users"></i> Data Orang Tua/Wali
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Ayah</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan Ayah</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Ibu</label>
                                <input type="text"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">No. HP Orang Tua</label>
                                <input type="tel"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4 border-t">
                        <button type="submit"
                            class="bg-primary hover:bg-blue-800 text-white px-8 py-3 rounded-lg font-bold shadow-lg transition flex items-center gap-2">
                            <i class="fa-solid fa-save"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 3. DOKUMEN VIEW -->
        <div id="dokumen" class="tab-content max-w-5xl mx-auto">
            <div class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                <div class="flex justify-between items-center mb-6 border-b pb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Upload Dokumen</h2>
                    <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded">Maksimal 2MB / File</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Upload Item: Pas Foto -->
                    <div
                        class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition group bg-gray-50/50">
                        <div
                            class="w-16 h-16 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <h4 class="font-bold text-gray-700 mb-1">Pas Foto (3x4)</h4>
                        <p class="text-xs text-gray-500 mb-4">Format: JPG, PNG. Latar Belakang Merah/Biru.</p>

                        <input type="file" id="file-foto" class="file-input-hidden"
                            onchange="updateFileName(this, 'label-foto')">
                        <label for="file-foto"
                            class="cursor-pointer bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm">
                            Pilih File
                        </label>
                        <p id="label-foto" class="text-xs text-primary mt-3 font-semibold break-all"></p>
                    </div>

                    <!-- Upload Item: Kartu Keluarga -->
                    <div
                        class="border-2 border-dashed border-green-400 bg-green-50 rounded-xl p-6 text-center transition">
                        <div
                            class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-check text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-700 mb-1">Kartu Keluarga</h4>
                        <p class="text-xs text-green-600 font-semibold mb-4">Sudah Terupload</p>
                        <button class="text-xs text-red-500 hover:underline">Hapus & Upload Ulang</button>
                    </div>

                    <!-- Upload Item: Akta Kelahiran -->
                    <div
                        class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition group bg-gray-50/50">
                        <div
                            class="w-16 h-16 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <h4 class="font-bold text-gray-700 mb-1">Akta Kelahiran</h4>
                        <p class="text-xs text-gray-500 mb-4">Format: PDF atau JPG.</p>

                        <input type="file" id="file-akta" class="file-input-hidden"
                            onchange="updateFileName(this, 'label-akta')">
                        <label for="file-akta"
                            class="cursor-pointer bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm">
                            Pilih File
                        </label>
                        <p id="label-akta" class="text-xs text-primary mt-3 font-semibold break-all"></p>
                    </div>

                    <!-- Upload Item: Rapor -->
                    <div
                        class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition group bg-gray-50/50">
                        <div
                            class="w-16 h-16 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fa-solid fa-book"></i>
                        </div>
                        <h4 class="font-bold text-gray-700 mb-1">Scan Rapor (Sem 1-5)</h4>
                        <p class="text-xs text-gray-500 mb-4">Jadikan 1 file PDF.</p>

                        <input type="file" id="file-rapor" class="file-input-hidden"
                            onchange="updateFileName(this, 'label-rapor')">
                        <label for="file-rapor"
                            class="cursor-pointer bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm">
                            Pilih File
                        </label>
                        <p id="label-rapor" class="text-xs text-primary mt-3 font-semibold break-all"></p>
                    </div>

                </div>
            </div>
        </div>

        <!-- 4. PENGUMUMAN VIEW -->
        <div id="pengumuman" class="tab-content max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Papan Pengumuman</h2>

            <div class="space-y-4">
                <!-- Post 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-primary">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="bg-primary text-white text-xs px-2 py-1 rounded">Akademik</span>
                        <span class="text-xs text-gray-500"><i class="fa-regular fa-clock mr-1"></i> 2 Jam yang
                            lalu</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Jadwal Tes Seleksi Akademik</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Diberitahukan kepada seluruh calon siswa bahwa tes seleksi akademik akan dilaksanakan pada
                        tanggal 10 Juni 2025. Harap membawa Kartu Ujian yang dapat dicetak setelah verifikasi berkas
                        selesai.
                    </p>
                </div>

                <!-- Post 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-secondary">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="bg-secondary text-white text-xs px-2 py-1 rounded">Penting</span>
                        <span class="text-xs text-gray-500"><i class="fa-regular fa-clock mr-1"></i> 1 Hari yang
                            lalu</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Perubahan Jadwal Verifikasi Berkas</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Karena adanya libur nasional, jadwal verifikasi berkas fisik diundur menjadi tanggal 2 Juni
                        2025. Mohon diperhatikan.
                    </p>
                </div>
            </div>
        </div>

    </main>
</x-siswa>