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
## Cara Menjalankan Aplikasi

1. Jalankan Apache dan MySQL melalui XAMPP.
2. Buka phpMyAdmin.
3. Import file database/buku.sql.
4. Pastikan konfigurasi database sesuai di config/database.php.
5. Buka http://localhost/mvc-buku/public/ di browser.

## Pengujian Fitur

- Menampilkan daftar buku.
- Menambahkan buku baru.
- Mengedit data buku.
- Menghapus data buku dengan konfirmasi.
- Mencari buku berdasarkan judul atau penulis.
- Memvalidasi input agar kolom wajib diisi dan tahun terbit berupa bilangan bulat positif.
- Menampilkan pesan keberhasilan atau kegagalan.

## Teknologi

- PHP Native
- MySQL
- PDO
- HTML
- Git