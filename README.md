RSIA AZALIA
Website Rumah Sakit Ibu & Anak

DESKRIPSI
Website RSIA AZALIA adalah website berbasis Laravel yang digunakan sebagai website profil Rumah Sakit Ibu & Anak.
Website ini menampilkan informasi rumah sakit, layanan, dokter, dan menyediakan akses janji temu via WhatsApp.
Ke depannya website ini akan dikembangkan dengan fitur berita, komentar pengunjung, dan halaman admin.

TEKNOLOGI YANG DIGUNAKAN
PHP >= 8.2
Laravel 12
Composer
Laragon (Windows)
MySQL (untuk pengembangan selanjutnya)
Bootstrap / CSS

STRUKTUR PROJECT (RINGKAS)
rsia-azalia/
├── app/                # Logic aplikasi
├── routes/             # Routing web
├── resources/
│   └── views/          # Blade template (HTML)
├── public/             # Aset publik (CSS, JS, images)
├── database/           # Migration & seeder
├── .env.example        # Contoh konfigurasi environment
├── composer.json
└── README.md


CARA MENJALANKAN PROJECT (LOCAL)

Clone Repository
Pastikan Git sudah terinstall, lalu jalankan:

git clone https://github.com/Imnndy9/rsia-azalia.git
cd rsia-azalia

Install Dependency
Pastikan Composer sudah terinstall:

composer install

Konfigurasi Environment
Salin file .env.example menjadi .env
copy .env.example .env

Generate application key:
php artisan key:generate

Jalankan Server
php artisan serve

Buka browser dan akses:
http://127.0.0.1:8000

KONFIGURASI DATABASE (OPSIONAL)
Edit file .env:

DB_DATABASE=rsia_azalia
DB_USERNAME=root
DB_PASSWORD=

Jika sudah ada migration:
php artisan migrate

CATATAN PENTING

File .env tidak ikut ke GitHub
Folder vendor tidak ikut ke GitHub
Setiap developer wajib menjalankan composer install setelah clone

FITUR SAAT INI
Halaman Beranda
Tentang Rumah Sakit
Layanan
Dokter
Kontak
Tombol Janji Temu via WhatsApp

ROADMAP PENGEMBANGAN
Sistem Berita
Komentar Pengunjung
Halaman Admin (CRUD Konten)
Dashboard Admin
Keamanan dan Validasi

DEVELOPER
Nama: Iman
Project: Website RSIA AZALIA
Framework: Laravel

KONTRIBUSI
Project ini masih tahap pengembangan.
Masukan dan kontribusi sangat terbuka.
