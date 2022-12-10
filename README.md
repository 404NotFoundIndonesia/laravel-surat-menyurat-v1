<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://avatars.githubusercontent.com/u/87377917?s=200&v=4" width="200" alt="404NFID Logo"></a></p>


## Laravel Surat Menyurat v1

Web app untuk mengelola surat masuk, keluar, serta disposisinya.

## Features / Fitur

- Autentikasi/login-logout
- Level hak akses (admin, staff)
- Menu Beranda
  - Data jumlah surat masuk hari ini
  - Data jumlah surat keluar hari ini
  - Data jumlah surat disposisi hari ini
  - Data jumlah transaksi surat hari ini
  - Data jumlah pengguna aktif
  - Data persentase kenaikan/penurunan surat masuk hari ini
  - Data persentase kenaikan/penurunan surat keluar hari ini
  - Data persentase kenaikan/penurunan surat disposisi hari ini
  - Data persentase kenaikan/penurunan transaksi surat hari ini
- Menu Transaksi Surat Masuk
  - Menambahkan surat masuk
  - Mengedit surat masuk
  - Menghapus surat masuk
  - Melihat detail surat masuk
  - Pencarian surat masuk berdasarkan pengirim, nomor surat, atau nomor agenda
  - Menambahkan lampiran surat masuk
  - Menghapus lampiran surat masuk
  - Menambahkan disposisi surat
  - Menghapus disposisi surat
- Menu Transaksi Surat Keluar
  - Menambahkan surat keluar
  - Mengedit surat keluar
  - Menghapus surat keluar
  - Melihat detail surat keluar
  - Pencarian surat keluar berdasarkan pengirim, nomor surat, atau nomor agenda
  - Menambahkan lampiran surat keluar
  - Menghapus lampiran surat keluar
- Menu Agenda Surat Masuk
  - Pencarian surat masuk berdasarkan tanggal dibuat
  - Pencarian surat masuk berdasarkan tanggal surat 
  - Pencarian surat masuk berdasarkan tanggal surat diterima
  - Mencetak agenda surat masuk berdasarkan pencarian
- Menu Agenda Surat Keluar
  - Pencarian surat keluar berdasarkan tanggal dibuat
  - Pencarian surat keluar berdasarkan tanggal surat
  - Mencetak agenda surat keluar berdasarkan pencarian
- Menu Galeri Surat Masuk
  - Menampilkan semua lampiran surat masuk
  - Mengunduh lampiran surat masuk
- Menu Galeri Surat Keluar
  - Menampilkan semua lampiran surat keluar
  - Mengunduh lampiran surat keluar
- Menu Referensi Klasifikasi Surat
  - Menambahkan klasifikasi surat
  - Mengedit klasifikasi surat
  - Menghapus klasifikasi surat
- Menu Referensi Status Sifat Surat
  - Menambahkan status sifat surat
  - Mengedit status sifat surat
  - Menghapus status sifat surat
- Menu Kelola Pengguna **[khusus admin]**
  - Menambahkan pengguna
  - Mengedit pengguna
  - Menonaktifkan pengguna
  - Menghapus pengguna
  - Menyetel ulang kata sandi pengguna
- Halaman Profil
  - Mengubah nama, email, dan nomor telepon
  - Mengubah foto profil
  - Menonaktifkan akun **[khusus staff]**
- Halaman Pengaturan **[khusus admin]**
  - Mengatur kata sandi bawaan (saat membuat pengguna baru/setel ulang kata sandi)
  - Mengatur jumlah data per halaman
  - Mengatur nama aplikasi
  - Mengatur nama lembaga/institusi
  - Mengatur alamat lembaga/institusi
  - Mengatur nomor telepon lembaga/institusi
  - Mengatur surel lembaga/institusi
  - Mengatur nama penanggungjawab

## Database Schema / Skema Database
<img src="https://github.com/404NotFoundIndonesia/laravel-surat-menyurat-v1/blob/main/database_schema.png" alt="database schema">

## Installation / Instalasi
Direkomendasikan menggunakan php > 8.1.0. Pastikan repo ini telah diclone, kemudian buka CLI dan posisikan direktori aktif ke repo ini.
Silakan pilih salah satu dari dua cara di bawah ini.

### Makefile Setup
Jalankan perintah berikut untuk setup awal
```
make setup
```
Pastikan Anda telah membuat database baru di MySQL dan silakan sesuaikan file `.env` dengan database Anda.
Jalankan perintah berikut untuk setup database 
```
make setup-db
```
Atau jalankan perintah berikut untuk setup database beserta data _dummy_
```
make setup-dummy
```
Terakhir, jalankan perintah berikut untuk menjalankan web app
```
make run
```

### Manual Setup
Jalankan perintah berikut untuk menginstal dependensi php
```
composer install
```
Jalankan perintah berikut untuk mengatur _environment variable_
```
cp .env.example .env
```
Pastikan Anda telah membuat database baru di MySQL dan silakan sesuaikan file `.env` dengan database Anda.
Jalankan perintah berikut untuk membuat _key_ untuk web app Anda
```
php artisan key:generate
```
Jalankan perintah berikut untuk menghubungkan folder public Anda dengan storage
```
php artisan storage:link
```
Jalankan perintah berikut untuk membuat skema database
```
php artisan migrate
```
Jalankan perintah berikut untuk menambahkan akun (administrator)
```
php artisan db:seed --class=UserSeeder
```
Jalankan perintah berikut untuk menambahkan konfigurasi web app
```
php artisan db:seed --class=ConfigSeeder
```
(Opsional) Jalankan perintah berikut untuk menambahkan data-data _dummy_
```
php artisan db:seed
```
Terakhir, jalankan perintah berikut untuk menyalakan web server bawaan laravel 
```
php artisan serve
```
Setelah perintah di atas dijalankan, web app Anda bisa sudah bisa diakses

## Login
Untuk login aplikasi silakan masukkan surel dan kata sandi berikut

| Surel      | admin@admin.com |
|------------|-----------------|
| Kata Sandi | admin           |

## Language / Bahasa
Tersedia 2 pilihan bahasa untuk web app ini, bahasa Indonesia dan Inggris.
Untuk menggantinya, buka file `config/app.php` kemudian ganti nilai pada `locale` menjadi `id` atau `en`.

## Timezone / Zona Waktu
Untuk mengganti zona waktu silakan buka file `config/app.php`
dan ganti nilai pada `timezone` sesuai dengan keinginan Anda.
Silakan merujuk ke [dokumentasi php](https://www.php.net/manual/en/timezones.php) untuk nilai zona waktu yang bisa digunakan.

## Demonstration / Demo
Link video untuk proyek ini bisa dilihat di [YouTube](https://www.youtube.com/watch?v=dyatVEGavxo).

## Other / Lainnya
Proyek ini menggunakan admin template [Sneat](https://github.com/themeselection/sneat-html-admin-template-free)

## License / Lisensi

Berlisensi di bawah [MIT license](https://github.com/404NotFoundIndonesia/laravel-surat-menyurat-v1/blob/main/LICENSE).
