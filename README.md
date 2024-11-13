# Website Rekam Medis (UTS Biomedis)

Tujuan Aplikasi Rekam Medis
Aplikasi rekam medis dirancang dengan tujuan utama untuk meningkatkan efisiensi, akurasi, dan keamanan dalam pengelolaan data kesehatan pasien. Dengan adanya aplikasi ini, berbagai proses yang sebelumnya dilakukan secara manual kini dapat dilakukan secara digital, sehingga lebih cepat, lebih mudah, dan lebih terorganisir.

---

## Anggota Kelompok

| NIM         | Nama Lengkap            | Github                                     |
| ----------- | ----------------------- | ------------------------------------------ |
| 32602200053 | David Dimas Santana     | [@dadisan](https://github.com/dadisan)     |
| 32602200071 | Hadana Maulana          | [@hadanaM](https://github.com/hadanaM)     |
| 32602200077 | Ibra Adnan Faiz Sempana | [@Sempana22](https://github.com/Sempana22) |

---

## Panduan Instalasi Aplikasi

Pertama `clone/download` dulu repository ini:

```bash
git clone https://github.com/dadisan/aplikasiBiomedis.git
```

Note: Pastikan anda sudah `menginstall git` pada komputer anda:

---

Setelah itu mengatur database:

Buka [PHPMyAdmin](http://localhost/phpmyadmin/) untuk membuat database `rekam_medis`.
untuk database.sql sudah tersedia di folder `database`

## Panduan Penggunaan Aplikasi

### Login (Masuk sebagai Admin)

Login menggunakan `username` dan `password` sesuai dengan table `users` yang sudah dimasukan menggunakan kode sql:

```sql
-- menambahkan/memasukan/insert/input users
INSERT INTO
    users (username, `password`)
VALUES
    ("admin", "1234"),
```

| username | password |
| -------- | -------- |
| admin    | 1234     |

# Demonya :

---

![App Demo](admin/img/rmedis.gif)

---
