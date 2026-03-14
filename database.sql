-- Reset Database (HATI-HATI: Menghapus semua data lama)
DROP DATABASE IF EXISTS db_ma_darul_fithrah;
CREATE DATABASE db_ma_darul_fithrah;
USE db_ma_darul_fithrah;

-- Tabel Admin
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert data admin default (password: admin123)
INSERT INTO admins (username, password, nama_lengkap, email) VALUES 
('admin', 'admin123', 'Administrator', 'admin@madarulfithrah.sch.id');

-- Tabel Pendaftar
CREATE TABLE pendaftar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nisn VARCHAR(20),
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(20) DEFAULT 'Islam',
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    nama_ayah VARCHAR(100) NOT NULL,
    pekerjaan_ayah VARCHAR(50) NOT NULL,
    nama_ibu VARCHAR(100) NOT NULL,
    pekerjaan_ibu VARCHAR(50) NOT NULL,
    no_hp_ortu VARCHAR(20) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    sumber_info VARCHAR(50) NOT NULL,
    
    -- Dokumen Pendukung
    pas_foto VARCHAR(255),
    kartu_keluarga VARCHAR(255),
    akta_kelahiran VARCHAR(255),
    ijazah VARCHAR(255),
    kartu_bantuan VARCHAR(255),
    ktp_ortu VARCHAR(255), -- Kolom Baru
    surat_sehat VARCHAR(255), -- Kolom Baru
    
    -- Status Penerimaan
    status ENUM('Menunggu', 'Disetujui', 'Ditolak') DEFAULT 'Menunggu',
    tanggal_daftar DATE DEFAULT CURDATE(),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert data dummy pendaftar
INSERT INTO pendaftar (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, no_hp, email, alamat, asal_sekolah, nama_ayah, pekerjaan_ayah, nama_ibu, pekerjaan_ibu, no_hp_ortu, kelas, sumber_info, status, tanggal_daftar) VALUES 
('Ahmad Zaki', 'Laki-laki', 'Bandung', '2008-05-12', '081234567890', 'ahmad@example.com', 'Jl. Merdeka No. 10, Bandung', 'SMPN 1 Bandung', 'Budi Santoso', 'Wiraswasta', 'Siti Rahma', 'Ibu Rumah Tangga', '081298765432', 'X (Sepuluh)', 'Website', 'Menunggu', '2025-12-19'),
('Siti Aminah', 'Perempuan', 'Cimahi', '2008-08-20', '085678901234', 'siti@example.com', 'Jl. Sudirman No. 5, Cimahi', 'MTsN 2 Bandung', 'Agus Salim', 'PNS', 'Dewi Sartika', 'Guru', '085612345678', 'X (Sepuluh)', 'Spanduk/Brosur', 'Disetujui', '2025-12-18'),
('Rizki Pratama', 'Laki-laki', 'Sumedang', '2007-11-05', '087812345678', 'rizki@example.com', 'Jl. Pahlawan No. 3, Sumedang', 'SMPN 3 Cimahi', 'Joko Susilo', 'Buruh', 'Rina Wati', 'Pedagang', '087898765432', 'XI (Sebelas)', 'Teman/Kerabat', 'Ditolak', '2025-12-17');

-- Tabel Siswa
CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nis VARCHAR(20) UNIQUE,
    nisn VARCHAR(20),
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(20),
    status ENUM('Aktif', 'Nonaktif', 'Lulus', 'Keluar') DEFAULT 'Aktif',
    alamat TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Arsip Pendaftar
CREATE TABLE arsip_pendaftar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nisn VARCHAR(20),
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(20) DEFAULT 'Islam',
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    nama_ayah VARCHAR(100) NOT NULL,
    pekerjaan_ayah VARCHAR(50) NOT NULL,
    nama_ibu VARCHAR(100) NOT NULL,
    pekerjaan_ibu VARCHAR(50) NOT NULL,
    no_hp_ortu VARCHAR(20) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    sumber_info VARCHAR(50) NOT NULL,
    
    -- Dokumen Pendukung
    pas_foto VARCHAR(255),
    kartu_keluarga VARCHAR(255),
    akta_kelahiran VARCHAR(255),
    ijazah VARCHAR(255),
    kartu_bantuan VARCHAR(255),
    ktp_ortu VARCHAR(255),
    surat_sehat VARCHAR(255),
    
    -- Status Penerimaan
    status ENUM('Menunggu', 'Disetujui', 'Ditolak') DEFAULT 'Menunggu',
    tanggal_daftar DATE,
    
    -- Archive Specific
    tahun_ajaran VARCHAR(20) NOT NULL,
    tgl_arsip DATE DEFAULT CURDATE(),
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
