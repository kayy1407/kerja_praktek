# Aplikasi PPDB MA Darul Fithrah
Aplikasi berbasis PHP dan MySQL untuk mengelola proses Penerimaan Peserta Didik Baru (PPDB) secara online di MA Darul Fithrah. Sistem ini memungkinkan calon siswa melakukan pendaftaran secara online serta memudahkan admin sekolah dalam mengelola data pendaftar, data siswa, laporan, dan arsip data. Struktur Proyek

# Stuktur Proyek
├── index.php                     # Halaman utama website
├── ma_darul_fithrah/
│
├── admin/                        # Halaman khusus admin
│   ├── login.php                 # Login admin
│   ├── logout.php                # Logout admin
│   ├── dashboard.php             # Dashboard admin
│   ├── data-pendaftar.php        # Data calon siswa
│   ├── data-siswa.php            # Data siswa diterima
│   ├── detail-pendaftar.php      # Detail pendaftar
│   ├── detail-siswa.php          # Detail siswa
│   ├── edit-siswa.php            # Edit data siswa
│   ├── status-penerimaan.php     # Status kelulusan siswa
│   ├── laporan.php               # Laporan data siswa
│   ├── cetak-laporan.php         # Cetak laporan
│   ├── cetak-status.php          # Cetak status penerimaan
│   ├── arsip-data.php            # Arsip data PPDB
│   ├── detail-arsip.php          # Detail arsip
│   ├── ganti-password.php        # Ganti password admin
│   ├── proses.php                # Proses CRUD data
│   └── ajax.php                  # Proses AJAX
│
├── public/                       # Halaman yang dapat diakses pengunjung
│   ├── about.php                 # Halaman tentang sekolah
│   ├── program.php               # Program pendidikan
│   ├── facilities.php            # Fasilitas sekolah
│   ├── pendaftaran.php           # Form pendaftaran siswa
│   └── kelulusan.php             # Cek status kelulusan
│
├── assets/                       # File statis
│   ├── css/                      # File stylesheet
│   ├── img/                      # Gambar
│   └── js/                       # JavaScript
│
└── koneksi.php                   # Koneksi database MySQL
Setup
1. Install Web Server
   - Gunakan XAMPP
   - Pastikan sudah tersedia PHP, MySQL, phpMyAdmin
2. Import Database
   - Jalankan XAMPP
   - Buka phpMyAdmin
   - Buat database baru
     ppdb_darul_fithrah
   - Import file database .sql
3. Konfigurasi Database
   - Buka file koneksi.php
     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "ppdb_darul_fithrah";

     $conn = mysqli_connect($host, $user, $password, $database);
4. Jalankan Aplikasi
   - Letakkan folder proyek di: htdocs (XAMPP)
   - Jalankan browser dan akses: http://localhost/ma_darul_fithrah
  
Fitur
Untuk Pengunjung
✅ Informasi sekolah
✅ Informasi program pendidikan
✅ Informasi fasilitas sekolah
✅ Pendaftaran siswa baru online
✅ Cek status kelulusan

Untuk Admin
✅ Login admin
✅ Dashboard statistik pendaftar
✅ Manajemen data pendaftar
✅ Manajemen data siswa diterima
✅ Edit data siswa
✅ Penentuan status penerimaan
✅ Laporan data siswa
✅ Cetak laporan
✅ Arsip data PPDB
✅ Ganti password admin

Teknologi
PHP Native
MySQL Database
HTML
CSS
JavaScript
AJAX
