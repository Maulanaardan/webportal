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

- PHP 8.x
- Laravel 10.x
- MySQL / SQLite (bisa disesuaikan)
- Blade Templating
- Tailwind CSS (via Laravel Breeze atau manual)

## 📂 Struktur Project (Singkat)

routes/web.php # Routing utama
app/Http/Controllers/ # DashboardPostController, ProfileController
resources/views/ # Halaman: home, post, dashboard, form, dll
app/Models/ # Model: Post, Category, User

bash
Copy
Edit

## 📦 Instalasi

1. **Clone repository ini**:

```bash
git clone https://github.com/username/laravel-blog-dashboard.git
cd laravel-blog-dashboard
Install dependensi:

bash
Copy
Edit
composer install
npm install && npm run dev
Buat file .env & generate app key:

bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Atur koneksi database di .env, lalu jalankan migrasi:

bash
Copy
Edit
php artisan migrate
Jalankan server lokal:

bash
Copy
Edit
php artisan serve
