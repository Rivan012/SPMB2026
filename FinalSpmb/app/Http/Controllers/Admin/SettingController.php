<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting; // Jangan lupa import Model Setting

class SettingController extends Controller
{
    // 1. Menampilkan Halaman Pengaturan
    public function index()
    {
        // Data settings sudah ada di View via AppServiceProvider
        // Tapi jika ingin pass manual juga bisa
        return view('admin.pengaturan'); 
    }

    // 2. Memproses Simpan Data (DI SINI LETAKNYA)
    public function update(Request $request)
    {
        // Validasi input (opsional tapi disarankan)
        $request->validate([
            'registration_start_date' => 'required|date',
            'registration_end_date'   => 'required|date',
            // dsb...
        ]);

        // --- UPDATE STATUS PENDAFTARAN ---
        // Cek apakah checkbox dicentang? (HTML checkbox tidak kirim value jika uncheck)
        $status = $request->has('registration_open') ? '1' : '0';
        
        // Panggil fungsi setValue yang kita buat di Model
        Setting::setValue('registration_open', $status);


        // --- UPDATE SETTING LAINNYA ---
        // Contoh update tanggal
        Setting::setValue('registration_start_date', $request->registration_start_date);
        Setting::setValue('registration_end_date', $request->registration_end_date);
        
        // Update profil admin, dll (logika user biasa)
        // ...

        return redirect()->back()->with('success', 'Pengaturan berhasil disimpan!');
    }
}