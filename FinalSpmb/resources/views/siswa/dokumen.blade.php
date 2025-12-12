<x-siswa>
    <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 z-10">
        <div class="flex items-center gap-4">
            <button id="openSidebar" class="md:hidden text-gray-600 text-xl focus:outline-none"><i
                    class="fa-solid fa-bars"></i></button>
            <h2 class="text-xl font-bold text-primary hidden sm:block">Upload Dokumen</h2>
        </div>
    </header>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4 md:p-8">
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm p-6 md:p-8">
            <div class="flex justify-between items-center mb-6 border-b pb-4">
                <h2 class="text-2xl font-bold text-gray-800">Berkas Persyaratan</h2>
                <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded">Max 2MB/File</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Foto -->
                <div
                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition bg-gray-50/50">
                    <div
                        class="w-16 h-16 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-user"></i></div>
                    <h4 class="font-bold text-gray-700 mb-1">Pas Foto (3x4)</h4>
                    <input type="file" id="file-foto" class="hidden" onchange="updateFileName(this, 'label-foto')">
                    <label for="file-foto"
                        class="cursor-pointer bg-white border border-gray-300 px-4 py-2 rounded text-sm hover:bg-gray-100 block w-max mx-auto mt-4">Pilih
                        File</label>
                    <p id="label-foto" class="text-xs text-primary mt-3 font-semibold"></p>
                    <button class="px-3 py-1 text-sm bg-primary text-white rounded hover:bg-blue-800 transition">Upload
                        Foto</button>
                </div>
                <div
                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition bg-gray-50/50">
                    <div
                        class="w-16 h-16 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-user"></i></div>
                    <h4 class="font-bold text-gray-700 mb-1">Kartu Keluarga</h4>
                    <input type="file" id="file-foto" class="hidden" onchange="updateFileName(this, 'label-foto')">
                    <label for="file-foto"
                        class="cursor-pointer bg-white border border-gray-300 px-4 py-2 rounded text-sm hover:bg-gray-100 block w-max mx-auto mt-4">Pilih
                        File</label>
                    <p id="label-foto" class="text-xs text-primary mt-3 font-semibold"></p>
                    <button class="px-3 py-1 text-sm bg-primary text-white rounded hover:bg-blue-800 transition">Upload
                        KK</button>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-12">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Dokumen Yang di Upload</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-medium">No</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium">Nama Dokumen</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium">Jenis File</th>
                                    <th class="px-4 py-3 text-center text-sm font-medium">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-700">1</td>
                                    <td class="px-4 py-3 text-sm text-gray-700">Kartu Keluarga</td>
                                    <td class="px-4 py-3 text-sm text-gray-700">PDF</td>
                                    <td class="px-4 py-3 text-center">
                                        <button
                                            class="px-3 py-1 text-sm bg-primary text-white rounded hover:bg-blue-800 transition">
                                            Preview
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-siswa>