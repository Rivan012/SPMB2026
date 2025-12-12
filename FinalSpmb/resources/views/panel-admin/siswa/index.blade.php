<x-app-layout head="Data Siswa">
    <main class="flex-1 overflow-auto bg-gray-100 p-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 border-b border-gray-100 flex gap-4">
                <input type="text" placeholder="Cari nama, NISN..."
                    class="border rounded-lg px-4 py-2 text-sm w-64 focus:outline-none focus:ring-2 focus:ring-primary">
                <select class="border rounded-lg px-4 py-2 text-sm focus:outline-none">
                    <option>Semua Jurusan</option>
                    <option>TKJ</option>
                    <option>DKV</option>
                    <option>TKR</option>
                </select>
                <select class="border rounded-lg px-4 py-2 text-sm focus:outline-none">
                    <option>Semua Status</option>
                    <option>Terverifikasi</option>
                    <option>Menunggu</option>
                    <option>Ditolak</option>
                </select>
            </div>
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600 text-xs uppercase">
                    <tr>
                        <th class="p-4">No</th>
                        <th class="p-4">NISN</th>
                        <th class="p-4">Nama Siswa</th>
                        <th class="p-4">Jurusan</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 text-gray-500">1</td>
                        <td class="p-4 font-mono">0012345678</td>
                        <td class="p-4 font-bold text-gray-700">Budi Santoso</td>
                        <td class="p-4">TKJ</td>
                        <td class="p-4"><span
                                class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Menunggu</span></td>
                        <td class="p-4 text-center">
                            <button class="text-blue-600 hover:text-blue-800 mx-1"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="text-red-600 hover:text-red-800 mx-1"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 text-gray-500">2</td>
                        <td class="p-4 font-mono">0098765432</td>
                        <td class="p-4 font-bold text-gray-700">Siti Aminah</td>
                        <td class="p-4">DKV</td>
                        <td class="p-4"><span
                                class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Terverifikasi</span></td>
                        <td class="p-4 text-center">
                            <button class="text-blue-600 hover:text-blue-800 mx-1"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="text-red-600 hover:text-red-800 mx-1"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="p-4 text-sm text-gray-500 border-t flex justify-between items-center">
                <span>Menampilkan 2 dari 1245 data</span>
                <div class="flex gap-2">
                    <button class="px-2 py-1 border rounded hover:bg-gray-50">&lt;</button>
                    <button class="px-2 py-1 border rounded hover:bg-gray-50">&gt;</button>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>