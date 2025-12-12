<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        // dd(date('YmdHis'));
        // Validasi input
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'smp_asal' => 'required|string|max:20',
            'no_wa' => 'required|string|max:20',
            'jurusan' => 'required|exists:majors,id',
            'password' => 'required',
        ]);
        $fullName = $request->nama_siswa; // contoh: "Rivan Alfatoni"

        // ubah string menjadi array kata-kata
        $parts = explode(' ', strtolower(trim($fullName)));

        // kalau cuma 1 kata → username = kata tsb
        if (count($parts) == 1) {
            $username = $parts[0];
        } else {
            // ambil kata pertama + terakhir
            $username = $parts[0] . '.' . end($parts);
        }

        // pastikan hanya huruf & angka (hilangkan simbol)
        $username = preg_replace('/[^a-z0-9.]/', '', $username);

        // cek apakah username sudah ada di database
        $original = $username;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $original . $counter;
            $counter++;
        }
        User::create([
            'username' => $username,
            'password_hash' => bcrypt($validatedData['password']),
        ]);
        $user = User::where('username', $username)->first();
        $user_id = $user->id;
        Student::create([
            'user_id' => $user_id,
            'major_id' => $validatedData['jurusan'],
            'nisn' => null,
            'full_name' => $validatedData['nama_siswa'],
            'birth_place' => null,
            'birth_date' => null
        ]);
        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }
}
