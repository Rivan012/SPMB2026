<x-app-layout head="Laporan">
    <main class="flex-1 overflow-auto bg-gray-100 p-6">
        <!-- Statistik Jurusan -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4">Pendaftar per Jurusan</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1"><span>TKJ</span><span
                                class="font-bold">450</span></div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1"><span>DKV</span><span
                                class="font-bold">320</span></div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 55%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1"><span>TKR</span><span
                                class="font-bold">280</span></div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-red-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1"><span>Akuntansi</span><span
                                class="font-bold">195</span></div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4">Export Data</h3>
                <div class="grid grid-cols-1 gap-4">
                    <button class="flex items-center justify-between p-4 border rounded-lg hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 text-green-600 rounded flex items-center justify-center">
                                <i class="fa-solid fa-file-excel text-xl"></i></div>
                            <div class="text-left">
                                <h4 class="font-bold text-sm">Data Lengkap Siswa</h4>
                                <p class="text-xs text-gray-500">Format .xlsx (Excel)</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-download text-gray-400"></i>
                    </button>
                    <button class="flex items-center justify-between p-4 border rounded-lg hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-red-100 text-red-600 rounded flex items-center justify-center"><i
                                    class="fa-solid fa-file-pdf text-xl"></i></div>
                            <div class="text-left">
                                <h4 class="font-bold text-sm">Laporan Hasil Seleksi</h4>
                                <p class="text-xs text-gray-500">Format .pdf (Siap Cetak)</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-download text-gray-400"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>