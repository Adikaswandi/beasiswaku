# Pendaftaran Beasiswa - Struktur Folder

Deskripsi:
Ini adalah proyek pendaftaran beasiswa yang menggunakan PHP dan Bootstrap. Proyek ini memiliki tiga halaman utama: Pilihan Beasiswa, Formulir Pendaftaran, dan Hasil Pendaftaran. Setiap halaman memiliki kaitan dengan database MySQL untuk menyimpan data pendaftaran.

## Struktur Folder:

- `index.php`: Halaman utama (Pilihan Beasiswa)
- `tambah.php`: Halaman formulir pendaftaran (Daftar)
- `hasil.php`: Halaman hasil pendaftaran (Hasil)
- `koneksi.php`: Berkas untuk menghubungkan ke database MySQL
- `README.md`: Berkas penjelasan mengenai struktur dan sumber daya pemrograman

### Penjelasan Berkas:

1. `index.php`: Halaman utama yang menampilkan informasi tentang pilihan beasiswa (Beasiswa Akademik dan Beasiswa Non Akademik). Terdapat pula tautan menu ke halaman formulir pendaftaran dan hasil pendaftaran.

2. `tambah.php`: Halaman formulir pendaftaran. Mahasiswa dapat mengisi data diri dan mengunggah berkas persyaratan. Formulir ini dapat dinonaktifkan berdasarkan nilai IPK. Data yang diisi akan disimpan dalam database setelah dikirim.

3. `hasil.php`: Halaman hasil pendaftaran. Data pendaftar dari database ditampilkan di sini, termasuk status ajuan. Halaman ini memberikan gambaran umum tentang pendaftar dan statusnya.

4. `koneksi.php`: Berkas untuk menghubungkan ke database MySQL. Variabel host, username, password, dan database digunakan untuk mengakses server database. Jika koneksi gagal, pesan kesalahan akan ditampilkan.


### Sumber Daya Pemrograman:

- Bootstrap CSS: Diambil dari CDN Bootstrap untuk tampilan dan gaya yang disediakan oleh Bootstrap.
- Kode PHP: Penggunaan PHP untuk menghubungkan database, mengecek status halaman aktif, dan mengatur tampilan dinamis.
- CSS Khusus: Penambahan gaya CSS khusus (`bg-light-blue`) untuk memberikan tampilan berbeda pada elemen yang ditandai sebagai aktif.

Proyek ini dirancang untuk membantu mahasiswa mendaftar beasiswa dengan mudah melalui platform online. Folder ini mencakup tiga halaman utama dan komponen pendukung yang diperlukan untuk menjalankan sistem pendaftaran beasiswa secara efektif.
