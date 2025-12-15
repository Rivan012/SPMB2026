    # 🎓 SPMB 2026 - Sistem Penerimaan Mahasiswa Baru

![App Version](https://img.shields.io/badge/version-1.0.0-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![Status](https://img.shields.io/badge/status-development-orange)

**SPMB2026** adalah aplikasi berbasis web yang dirancang untuk mempermudah proses pendaftaran, seleksi, dan pengumuman penerimaan mahasiswa/siswa baru tahun ajaran 2026/2027. Aplikasi ini mencakup manajemen data pendaftar, validasi berkas oleh petugas, dan pengelolaan sistem oleh administrator.

---


---

## ✨ Fitur Utama

Aplikasi ini menggunakan **Multi-Level Authentication** (Middleware) yang membagi akses menjadi tiga role utama:

### 1. 👨‍🎓 Calon Siswa (User)
* **Registrasi & Login:** Membuat akun pendaftaran.
* **Isi Biodata:** Melengkapi data diri, data orang tua, dan asal sekolah.
* **Upload Berkas:** Mengunggah dokumen (Ijazah, SKHUN, KK, Foto, dll).
* **Cetak Kartu:** Mencetak kartu bukti pendaftaran.
* **Cek Kelulusan:** Melihat status penerimaan secara real-time.

### 2. 🧑‍💼 Petugas (Staff)
* **Verifikasi Berkas:** Memeriksa validitas dokumen yang diunggah siswa.
* **Validasi Data:** Menyetujui atau menolak data pendaftaran.
* **Input Nilai:** Memasukkan nilai tes/seleksi (jika ada jalur tes).

### 3. 👮 Admin (Superuser)
* **Manajemen User:** Mengelola akun (Admin, Petugas, Siswa).
* **Konfigurasi Sistem:** Mengatur gelombang pendaftaran, jalur masuk, dan prodi/jurusan.
* **Laporan:** Export data pendaftar ke Excel/PDF.
* **Pengumuman:** Mempublikasikan hasil seleksi.

---

## 🛠️ Teknologi yang Digunakan

* **Bahasa Pemrograman:** PHP >= 8.1
* **Framework:** Laravel 10 / 11 *(Sesuaikan)*
* **Database:** MySQL / MariaDB
* **Frontend:** Blade Templates, Bootstrap 5 / Tailwind CSS
* **JavaScript:** jQuery / Alpine.js

---

## 🚀 Instalasi & Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan project di komputer lokal:

### Prasyarat
* PHP & Composer
* Web Server (Apache/Nginx/Laragon/XAMPP)
* MySQL

### Langkah Instalasi

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/Rivan012/SPMB2026.git
    cd spmb2026
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install && npm run build
    ```

3.  **Setup Environment**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan sesuaikan konfigurasi database:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_spmb2026
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Key**
    ```bash
    php artisan key:generate
    ```

5.  **Migrasi & Seeding Database**
    Jalankan perintah ini untuk membuat tabel dan data dummy (akun default):
    ```bash
    php artisan migrate --seed
    ```

6.  **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Buka browser dan akses: `http://localhost:8000`

---

## 🔐 Akun Default (Seeder)

Gunakan akun berikut untuk pengujian setelah menjalankan `migrate --seed`:

| Role | Email | Password |
| :--- | :--- | :--- |
| **Admin** | `admin@spmb.com` | `password` |
| **Petugas** | `petugas@spmb.com` | `password` |
| **Siswa** | `siswa@spmb.com` | `password` |

---

## 🤝 Kontribusi

Kontribusi sangat terbuka! Jika ingin menambahkan fitur:
1.  Fork repositori ini.
2.  Buat branch fitur baru (`git checkout -b fitur-keren`).
3.  Commit perubahan (`git commit -m 'Menambahkan fitur keren'`).
4.  Push ke branch (`git push origin fitur-keren`).
5.  Buat Pull Request.

---

## 📝 Lisensi

Project ini open source yah. pakai aja kalo mau

---

**Dibuat dengan ❤️ oleh Van Project's**
