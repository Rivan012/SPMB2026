<x-app-layout head="Dashboard Petugas">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-primary flex justify-between">
            <div>
                <p class="text-xs text-gray-500 font-bold uppercase">Total Pendaftar</p>
                <h3 class="text-2xl font-bold mt-1">{{ $usersiswatotal }}</h3>
            </div>
            <div class="w-12 h-12 bg-blue-100 text-primary rounded-lg flex items-center justify-center text-xl"><i
                    class="fa-solid fa-users"></i></div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-warning flex justify-between">
            <div>
                <p class="text-xs text-gray-500 font-bold uppercase">Menunggu Verifikasi</p>
                <h3 class="text-2xl font-bold mt-1">45</h3>
            </div>
            <div class="w-12 h-12 bg-yellow-100 text-warning rounded-lg flex items-center justify-center text-xl"><i
                    class="fa-solid fa-clock"></i></div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-success flex justify-between">
            <div>
                <p class="text-xs text-gray-500 font-bold uppercase">Terverifikasi</p>
                <h3 class="text-2xl font-bold mt-1">850</h3>
            </div>
            <div class="w-12 h-12 bg-green-100 text-success rounded-lg flex items-center justify-center text-xl"><i
                    class="fa-solid fa-check-circle"></i></div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-danger flex justify-between">
            <div>
                <p class="text-xs text-gray-500 font-bold uppercase">Ditolak</p>
                <h3 class="text-2xl font-bold mt-1">12</h3>
            </div>
            <div class="w-12 h-12 bg-red-100 text-danger rounded-lg flex items-center justify-center text-xl"><i
                    class="fa-solid fa-circle-xmark"></i></div>
        </div>
    </div>

    <!-- Recent Activity Table -->
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <h3 class="font-bold text-lg text-gray-800">Aktivitas Terbaru</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600 text-xs uppercase">
                    <tr>
                        <th class="p-4">Nama Siswa</th>
                        <th class="p-4">NISN</th>
                        <th class="p-4">Jurusan dipilih</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @foreach ($usersiswa as $s)
                        <tr>
                        <td class="p-4 font-bold">{{ $s->student->full_name }}</td>
                        <td class="p-4 text-gray-600">{{ $s->student->nisn ?? 'Belum isi' }}</td>
                        <td class="p-4 text-gray-600">{{ $s->student->major->name }}</td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>