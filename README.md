
# Cyberpunk-Sismul

## Deskripsi
Cyberpunk-Sismul adalah sebuah aplikasi web yang dibangun menggunakan framework CodeIgniter 4. Aplikasi ini merupakan sistem informasi yang memiliki fitur login dan manajemen data mahasiswa dengan tema cyberpunk.

## Fitur Utama
- Sistem Login
- Manajemen Data Mahasiswa (CRUD)
- Tampilan Modern dengan Tema Cyberpunk
- Responsive Design

## Persyaratan Sistem
- PHP 7.4 atau lebih tinggi
- MySQL/MariaDB
- Web Server (Apache/Nginx)
- Composer

## Instalasi

1. Clone repository ini:
```bash
git clone https://github.com/Adikurnianto24/Cyberpunk-Sismul.git
```

2. Masuk ke direktori project:
```bash
cd Cyberpunk-Sismul
```

3. Install dependencies menggunakan Composer:
```bash
composer install
```

4. Buat file `.env` dari `.env.example` dan sesuaikan konfigurasi database:
```bash
cp env .env
```

5. Edit file `.env` dan sesuaikan konfigurasi database:
```
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = username_database
database.default.password = password_database
```

6. Import database menggunakan file SQL yang tersedia di folder `database`

7. Jalankan aplikasi:
```bash
php spark serve
```

## Struktur Folder
```
Cyberpunk-Sismul/
├── app/
│   ├── Config/         # Konfigurasi aplikasi
│   ├── Controllers/    # Controller
│   ├── Models/         # Model
│   ├── Views/          # View
│   └── Filters/        # Filter
├── public/             # File publik (CSS, JS, gambar)
├── system/             # Core system CodeIgniter
└── writable/          # Folder untuk file yang dapat ditulis
```

## Penggunaan

### Login
1. Buka aplikasi di browser
2. Masukkan username dan password
3. Klik tombol login

### Manajemen Data Mahasiswa
1. Setelah login, Anda akan diarahkan ke halaman utama
2. Untuk menambah data mahasiswa:
   - Klik tombol "Tambah Data"
   - Isi form yang tersedia
   - Klik "Simpan"
3. Untuk mengedit data:
   - Klik tombol edit pada data yang ingin diubah
   - Edit data yang diperlukan
   - Klik "Update"
4. Untuk menghapus data:
   - Klik tombol hapus pada data yang ingin dihapus
   - Konfirmasi penghapusan

## Teknologi yang Digunakan
- CodeIgniter 4
- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- Bootstrap

## Kontribusi
Jika Anda ingin berkontribusi pada project ini, silakan:
1. Fork repository
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## Lisensi
Project ini dilisensikan di bawah [MIT License](LICENSE)

## Kontak
- Nama: Muhammad Adi Kurnianto
- GitHub: [Adikurnianto24](https://github.com/Adikurnianto24)

## Screenshot
[Tambahkan screenshot aplikasi di sini]

## Catatan Penting
- Pastikan server web Anda memiliki izin yang tepat untuk folder `writable/`
- Selalu backup database sebelum melakukan perubahan besar
- Gunakan environment development untuk pengembangan dan testing
