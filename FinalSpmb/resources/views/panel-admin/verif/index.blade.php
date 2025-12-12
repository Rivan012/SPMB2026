<x-app-layout head="Verifikasi Berkas">
    <main class="flex-1 overflow-auto bg-gray-100 p-6">
        <!-- Filter Tabs -->
        <div class="flex gap-4 mb-6">
            <button
                class="px-4 py-2 bg-white rounded-lg shadow-sm text-primary font-bold border-b-2 border-primary">Menunggu
                (12)</button>
            <button class="px-4 py-2 bg-white rounded-lg shadow-sm text-gray-500 hover:text-gray-700">Perbaikan
                (5)</button>
        </div>

        <div class="space-y-4">
            <!-- Item 1 -->
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-500"><i
                            class="fa-solid fa-user"></i></div>
                    <div>
                        <h4 class="font-bold text-lg">Budi Santoso</h4>
                        <p class="text-sm text-gray-500">TKJ | SMPN 1 Tugumulyo</p>
                        <div class="flex gap-2 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded border"><i
                                    class="fa-solid fa-file-pdf mr-1 text-red-500"></i> KK.pdf</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded border"><i
                                    class="fa-solid fa-file-pdf mr-1 text-red-500"></i> Rapor.pdf</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded hover:bg-gray-200"><i
                            class="fa-solid fa-eye"></i> Cek Detail</button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"><i
                            class="fa-solid fa-check"></i> Terima</button>
                </div>
            </div>

            <!-- Item 2 -->
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-500"><i
                            class="fa-solid fa-user"></i></div>
                    <div>
                        <h4 class="font-bold text-lg">Rina Wati</h4>
                        <p class="text-sm text-gray-500">Akuntansi | MTs N 1</p>
                        <div class="flex gap-2 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded border"><i
                                    class="fa-solid fa-file-pdf mr-1 text-red-500"></i> KK.pdf</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded hover:bg-gray-200"><i
                            class="fa-solid fa-eye"></i> Cek Detail</button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"><i
                            class="fa-solid fa-check"></i> Terima</button>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>