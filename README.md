# Web II CRUD

Aplikasi CRUD sederhana menggunakan Laravel dan MySQL.

---

## Fitur

- Tambah Data
- Edit Data
- Hapus Data
- Validasi Form
- Tampilan Bootstrap

---

## Teknologi yang Digunakan

- PHP
- Laravel
- MySQL
- Bootstrap

---

## Requirement

Pastikan sudah terinstall:

- PHP >= 8.x
- Composer
- MySQL / MariaDB
- Git

---

## Cara Install Project

### 1. Clone Repository

```bash
git clone https://github.com/lanz8665/web-II-crud.git
```

---

### 2. Masuk ke Folder Project

```bash
cd web-II-crud
```

---

### 3. Install Dependency Laravel

```bash
composer install
```

---

### 4. Copy File Environment

#### Windows

```bash
copy .env.example .env
```

#### Linux / MacOS

```bash
cp .env.example .env
```

---

### 5. Generate Application Key

```bash
php artisan key:generate
```

---

### 6. Buat Database

Buat database baru di MySQL, contoh:

```sql
CREATE DATABASE webcrud;
```

---

### 7. Atur File `.env`

Edit bagian database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webcrud
DB_USERNAME=root
DB_PASSWORD=
```

---

### 8. Jalankan Migration

```bash
php artisan migrate:fresh --seed
```

---

### 9. Jalankan Server Laravel

```bash
php artisan serve
```

---

## Akses Aplikasi

Buka browser:

```text
http://127.0.0.1:8000
```

---

## Struktur Folder Penting

| Folder          | Fungsi               |
| --------------- | -------------------- |
| app             | Logic aplikasi       |
| routes          | Routing Laravel      |
| resources/views | File tampilan        |
| database        | Migration dan seeder |
| public          | File publik          |

---

## Author

Dibuat oleh Lalan Jaelani

GitHub:
https://github.com/lanz8665
