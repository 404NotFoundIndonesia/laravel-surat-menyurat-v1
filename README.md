<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://avatars.githubusercontent.com/u/87377917?s=200&v=4" width="200" alt="404NFID Logo"></a></p>


## Laravel Surat Menyurat v1

Web app untuk mengelola surat masuk, keluar, serta disposisinya.

## Database Schema / Skema Database
<img src="https://github.com/404NotFoundIndonesia/laravel-surat-menyurat-v1/blob/main/database_schema.png" width="200" alt="database schema">

## Installation / Instalasi
Direkomendasikan menggunakan php > 8.1.0. Pastikan repo ini telah diclone, kemudian buka CLI dan posisikan direktori aktif ke repo ini.
Kemudian jalankan perintah berikut untuk menginstal dependensi php
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

## License / Lisensi

Berlisensi di bawah [MIT license](https://github.com/404NotFoundIndonesia/laravel-surat-menyurat-v1/blob/main/LICENSE).
