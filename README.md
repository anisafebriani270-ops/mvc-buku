# Aplikasi Manajemen Data Buku

## Deskripsi
Aplikasi ini merupakan proyek CRUD sederhana menggunakan PHP Native,
arsitektur Model-View-Controller (MVC), dan database MySQL.

Aplikasi ini dibuat untuk memenuhi tugas praktikum pemrograman web.

## Teknologi
- PHP Native
- MySQL
- PDO
- HTML
- Git

## Fitur
- Menampilkan daftar buku
- Menambahkan data buku
- Mengedit data buku
- Menghapus data buku
- Validasi input
- Pesan keberhasilan dan kegagalan

## Struktur Folder
- app/controllers: Mengatur alur aplikasi
- app/models: Mengelola data buku
- app/views: Menampilkan halaman aplikasi
- config: Konfigurasi database
- database: File SQL database
- public: Halaman utama aplikasi

## Cara Menjalankan
1. Jalankan Apache dan MySQL melalui XAMPP.
2. Import file database/buku.sql melalui phpMyAdmin.
3. Pastikan konfigurasi database sesuai dengan komputer.
4. Buka aplikasi melalui browser:
   http://localhost/mvc-buku/public/

## Entitas Buku
Data buku memiliki atribut:
- ID
- Judul
- Penulis
- Penerbit
- Tahun Terbit
- Kategori