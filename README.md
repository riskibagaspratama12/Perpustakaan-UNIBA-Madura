# 📚 Sistem Informasi Perpustakaan Sekolah
### Ujian Akhir Semester (UAS)

Aplikasi **Sistem Informasi Perpustakaan Sekolah berbasis web** yang dibangun menggunakan **Laravel**.  
Aplikasi ini digunakan untuk mengelola proses **peminjaman** dan **pengembalian buku** secara online.

Project ini dikembangkan untuk memenuhi **tugas Ujian Akhir Semester (UAS)** dengan ketentuan khusus untuk **NIM ganjil**.

---

## 👥 Anggota Kelompok

1. **Nama** : _Riski Bagas Pratama_ 
   **NIM** : _2402510085_
   **Mata Kuliah** : _Web Based Programming_
   **Program Studi** : _Sistem Informasi C'24_

2. **Nama** : _Ulul Azmi_
   **NIM** : _2402510083_
   **Mata Kuliah** : _Web Based Programming_
   **Program Studi** : _Sistem Informasi C'24_

---

## ✨ Fitur Aplikasi

- 🔐 Autentikasi pengguna  
  - Login  
  - Register  
  - Logout  

- 📚 Manajemen Buku  
- 📖 Peminjaman Buku  
- 🔄 Pengembalian Buku  
- 🕘 Riwayat Peminjaman  
- 📂 Halaman **Buku-ku**  
- 👥 Role Pengguna:
  - Admin
  - Pustakawan
  - User

---

## 🔒 Ketentuan Khusus (NIM Ganjil)

Berdasarkan ketentuan soal UAS:

- User **maksimal hanya boleh meminjam 3 buku**
- Jika jumlah peminjaman sudah mencapai batas:
  - 🚫 Sistem akan menampilkan **alert peringatan**
  - ❌ User **tidak dapat meminjam buku baru**
  - ✅ User **harus mengembalikan buku terlebih dahulu**

Fitur ini dibuat sebagai bentuk **validasi logika peminjaman** sesuai dengan ketentuan UAS.

---

## 📌 Catatan

Aplikasi ini dibuat untuk **keperluan akademik** dan telah disesuaikan dengan **soal UAS**, khususnya untuk mahasiswa dengan **NIM ganjil**.

---

## 👥 Akun Dummy (Untuk Pengujian)

Gunakan akun berikut untuk mencoba fitur aplikasi tanpa harus membuat akun baru.

### 🔑 Admin
- **Nomor** : 6969
- **Password** : password

### 📚 Pustakawan
- **Nomor** : 9999
- **Password** : password

### 👤 User
- **Nomor** : 9696
- **Password** : password

> Akun dummy tersedia jika database dijalankan menggunakan **seeder**.

---

## 🛠️ Tech Stack

- **Laravel 12**
- **Bootstrap 5.3**
- Blade Template
- MySQL

---

## 📋 Prerequisites

- PHP ^8.2
- Composer ^2
- NPM
- MySQL

---

## ⚙️ Setup Guide

## 🖥️ Menjalankan Server Lokal

Aplikasi ini dijalankan secara lokal menggunakan XAMPP.

Pastikan:
- Apache aktif
- MySQL aktif


### Clone project
```bash
git clone https://github.com/riskibagaspratama12/Perpustakaan-UNIBA-Madura.git

```

- Salin file `.env.example` menjadi `.env`.
```
copy .env.example .env
```

- Setup database pada komputer anda, lalu masukkan kredensial-kredensialnya ke file `.env`.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpustakaan_sekolah
DB_USERNAME=root
DB_PASSWORD=
```

- Install dependency.
```bash
composer install
npm install
```
- Generate app key.
```bash
php artisan key:generate
```
- Link storage untuk file upload.
```bash
php artisan storage:link
```
- Migrate database.
```bash
# Tanpa seeder
php artisan migrate

# Dengan seeder (data dummy)
php artisan migrate:fresh --seed
```
- Jalankan aplikasi.
```bash
php artisan serve
```
> Buka terminal baru, lalu jalankan.
```bash
npm run dev
```