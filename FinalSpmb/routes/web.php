<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\VerifController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Siswa\BiodataController;
use App\Http\Controllers\Siswa\DashboardController;
use App\Http\Controllers\Siswa\DokumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::post('/', [App\Http\Controllers\RegisterController::class, 'submit'])->name('register.submit');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/pengaturan', [SettingController::class, 'index'])->name('settings.index');
    // Route::post('/pengaturan', [SettingController::class, 'update'])->name('settings.update');
    // Route::resource('users', UserController::class);
});
Route::middleware(['auth', 'role:admin,petugas'])->prefix('panel')->group(function () {
    Route::get('/petugas/dashboard.html', [AdminController::class, 'index'])->name('petugas.dashboard');
    Route::get('/petugas/verif.html', [VerifController::class, 'index'])->name('petugas.verif');
    Route::get('/petugas/siswa.html', [SiswaController::class, 'index'])->name('petugas.siswa');
    Route::get('/petugas/lapor.html', [LaporanController::class, 'index'])->name('petugas.lapor');
    // Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard'); 
    // Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi.index');
    // Route::post('/verifikasi/{id}', [VerifikasiController::class, 'verify'])->name('verifikasi.action'); // Aksi terima/tolak
    // Route::get('/data-siswa', [AdminDashboard::class, 'siswa'])->name('siswa.index');
    // Route::get('/data-siswa/export', [AdminDashboard::class, 'exportSiswa'])->name('siswa.export');

    // // Laporan
    // Route::get('/laporan', [AdminDashboard::class, 'laporan'])->name('laporan.index');
});
Route::middleware(['auth', 'role:student'])->prefix('siswa')->group(function () {
    Route::get('/student/dashboard.html', [DashboardController::class,'index'])->name('siswa.index');
    Route::get('/student/biodata.html', [BiodataController::class,'index'])->name('siswa.bio');
    Route::get('/student/biodata.html/1', [BiodataController::class,'index1'])->name('siswa.bio1');
    Route::post('/student/biodata.html/1', [BiodataController::class,'post'])->name('siswa.bio1');
    Route::get('/student/biodata.html/2', [BiodataController::class,'index2'])->name('siswa.bio2');
    Route::get('/student/dokumen.html', [DokumenController::class,'index'])->name('siswa.dokumen');
    // Dashboard Siswa
    // Route::get('/dashboard', [StudentDashboard::class, 'index'])->name('dashboard');
    // Route::get('/biodata', [StudentDashboard::class, 'biodata'])->name('biodata');
    // Route::post('/biodata', [StudentDashboard::class, 'updateBiodata'])->name('biodata.update');

    // // Upload Dokumen
    // Route::get('/dokumen', [StudentDashboard::class, 'dokumen'])->name('dokumen');
    // Route::post('/dokumen', [StudentDashboard::class, 'uploadDokumen'])->name('dokumen.upload');

    // // Cetak Kartu Ujian / Bukti Daftar
    // Route::get('/cetak-kartu', [StudentDashboard::class, 'cetakKartu'])->name('cetak.kartu');
});
