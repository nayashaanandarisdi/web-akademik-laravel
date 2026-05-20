# Sistem Informasi Mahasiswa

Aplikasi web sederhana untuk pengelolaan data Mahasiswa dan Dosen menggunakan Laravel 13.

## Deskripsi

Proyek ini adalah sistem informasi berbasis Laravel untuk jurusan Teknologi Informasi yang menyediakan:
- CRUD Mahasiswa (create, read, update, delete)
- CRUD Dosen (create, read, update, delete)
- Validasi input pada form
- Pagination data Mahasiswa dan Dosen
- Antarmuka dengan Blade + Bootstrap

## Fitur Utama

- Halaman utama dengan navigasi ke data Mahasiswa
- Daftar Mahasiswa lengkap dengan aksi lihat, edit, dan hapus
- Halaman detail Mahasiswa
- Form tambah dan edit Mahasiswa
- Daftar Dosen lengkap dengan aksi lihat, edit, dan hapus
- Halaman detail Dosen
- Form tambah dan edit Dosen

## Struktur Data

### Mahasiswa
- `nim` (10 karakter)
- `nama_lengkap`
- `tempat_lahir`
- `tgl_lahir`
- `email`
- `prodi`
- `alamat`

### Dosen
- `nik` (15 karakter)
- `nama`
- `email`
- `notelp`
- `prodi`
- `alamat`

## Instalasi

1. Install dependensi PHP:
   ```bash
   composer install
   ```
2. Salin file lingkungan:
   ```bash
   copy .env.example .env
   ```
3. Buat aplikasi key:
   ```bash
   php artisan key:generate
   ```
4. Konfigurasi database di file `.env`.
5. Jalankan migrasi:
   ```bash
   php artisan migrate
   ```
6. Jika menggunakan asset frontend, jalankan:
   ```bash
   npm install
   npm run build
   ```

## Penggunaan

Jalankan server lokal:
```bash
php artisan serve
```

Akses aplikasi di browser pada alamat default `http://127.0.0.1:8000`.

### Route Utama
- `/` : Halaman home
- `/mahasiswa` : Daftar Mahasiswa
- `/mahasiswa/create` : Tambah Mahasiswa
- `/mahasiswa/{id}` : Detail Mahasiswa
- `/dosen` : Daftar Dosen
- `/dosen/create` : Tambah Dosen
- `/dosen/{id}` : Detail Dosen

## Testing

Jalankan test dengan:
```bash
php artisan test
```

## Teknologi

- PHP 8.3
- Laravel 13
- Blade Templating
- Bootstrap 5
- MySQL / SQLite

## Catatan

Struktur proyek mengikuti standar Laravel dengan direktori utama:
- `app/` : Model dan Controller
- `database/migrations/` : Skema tabel
- `resources/views/` : Blade views
- `routes/web.php` : Routing aplikasi

## Lisensi

Proyek ini menggunakan lisensi MIT.
