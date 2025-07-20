# Kalkulator BMI Laravel

Aplikasi web Kalkulator BMI (Body Mass Index) berbasis Laravel.  
User dapat mendaftar, login, menghitung BMI, dan melihat riwayat perhitungan BMI masing-masing.

## Fitur

- **Registrasi & Login User**
- **Kalkulator BMI** (input berat, tinggi, usia, jenis kelamin)
- **Riwayat BMI**: Setiap user dapat melihat dan menghapus riwayat BMI miliknya sendiri
- **SweetAlert** untuk konfirmasi hapus riwayat
- **Proteksi halaman**: Hanya user login yang bisa mengakses kalkulator dan riwayat

## Instalasi

1. **Clone repository**
   ```
   git clone https://github.com/
   cd kalkulator-bmi
   ```

2. **Install dependency**
   ```
   composer install
   npm install && npm run build
   ```

3. **Copy file environment**
   ```
   cp .env.example .env
   ```

4. **Atur database di file `.env`**

5. **Generate key**
   ```
   php artisan key:generate
   ```

6. **Migrate database**
   ```
   php artisan migrate
   ```

7. **Jalankan server**
   ```
   php artisan serve
   ```

## Penggunaan

- **Register**: Daftar akun baru
- **Login**: Masuk ke aplikasi
- **Kalkulator BMI**: Isi form berat, tinggi, usia, jenis kelamin lalu submit
- **Riwayat BMI**: Lihat hasil perhitungan sebelumnya, hapus jika perlu

## Struktur Utama

- `app/Http/Controllers/AuthController.php` — Login & register
- `app/Http/Controllers/BMIController.php` — Kalkulator & riwayat BMI
- `app/Models/BMIHistory.php` — Model riwayat BMI
- `resources/views/user/penghitung.blade.php` — Halaman kalkulator
- `resources/views/user/history.blade.php` — Halaman riwayat

## Kontribusi

Pull request dan issue sangat diterima!