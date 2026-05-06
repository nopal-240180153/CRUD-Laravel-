# CRUD To-Do List Laravel 11/12

Aplikasi To-Do List sederhana yang dibangun menggunakan Framework Laravel untuk memenuhi tugas Mata Kuliah WEB 2 (Create, Read, Update, Delete).

## Fitur Utama
- Create: Menambah tugas baru melalui input form.
- Read: Menampilkan daftar tugas yang tersimpan di MySQL.
- Update: Mengubah nama tugas secara langsung (Inline Editing) di dalam tabel.
- Delete: Menghapus tugas yang sudah tidak diperlukan.

## Teknologi yang Digunakan
- Framework : Laravel 12.x
- Database : MySQL
- Environment: Laragon (Apache/Nginx)
- Editor: VS Code

## Prosedur Instalasi & Penggunaan

Berikut langkah-langkah untuk menjalankan project ini di komputer :

### 1. Persiapan Folder & Database
- Pastikan Laragon sudah aktif (Start All).
- Buat database baru di phpMyAdmin dengan nama: `crud_to_do_list`.

### 2. Konfigurasi Environment (`.env`)
Buka file `.env` dan pastikan pengaturan databasenya sudah benar:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_to_do_list
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Instalasi Dependencies & Migration
Jika kamu baru saja mengunduh (clone) project ini, jalankan perintah berikut di terminal:

Mengunduh library vendor yang diperlukan
`composer install`

Membuat kunci aplikasi
`php artisan key:generate`

Membuat tabel database secara otomatis
`php artisan migrate`

### 4. Menjalankan Server
Nyalakan server lokal Laravel dengan perintah:
`php artisan serve`

Setelah itu, buka browser dan akses alamat: http://127.0.0.1:8000