# Laravel Blog Dashboard

Sebuah aplikasi dashboard blog sederhana berbasis Laravel. Project ini memungkinkan user yang sudah login untuk membuat, mengedit, dan menghapus postingan, serta mengelola kategori.

## 🚀 Fitur Utama

- Autentikasi user (Login & Register)
- CRUD Postingan (Create, Read, Update, Delete)
- Relasi antar model: Post ↔ Category ↔ Author
- Dashboard user untuk mengelola postingan sendiri
- Validasi form menggunakan Laravel Validator
- Pagination di halaman list postingan
- Templating dengan Blade dan styling Tailwind CSS

## 🛠️ Tech Stack

- PHP 8
- Laravel 11
- MySQL
- Blade Templating
- Tailwind CSS breeze

bash
Copy
Edit

## 🚀 Instalasi

### 1. Clone repository ini:

```bash
git clone https://github.com/username/laravel-blog-dashboard.git
cd laravel-blog-dashboard

2. Install dependensi:
composer install
npm install && npm run dev

3. Buat file .env & generate app key:
cp .env.example .env
php artisan key:generate
Atur koneksi database di .env, lalu jalankan migrasi:

4. Atur koneksi database di .env, lalu jalankan migrasi:
php artisan migrate
Jalankan server lokal:

5. jalankan server local
php artisan serve
