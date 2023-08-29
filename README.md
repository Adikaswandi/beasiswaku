# Pendaftaran Beasiswa - Struktur Folder

Deskripsi:
Ini adalah proyek pendaftaran beasiswa yang menggunakan PHP dan Bootstrap. Proyek ini memiliki tiga halaman utama: Pilihan Beasiswa, Formulir Pendaftaran, dan Hasil Pendaftaran. Setiap halaman memiliki kaitan dengan database MySQL untuk menyimpan data pendaftaran.

## Struktur Folder:

- `index.php`: Halaman utama (Pilihan Beasiswa)
- `tambah.php`: Halaman formulir pendaftaran (Daftar)
- `hasil.php`: Halaman hasil pendaftaran (Hasil)
- `koneksi.php`: Berkas untuk menghubungkan ke database MySQL
- `functions.php`: Berkas untuk yang berisi function
- `uploads` : Folder yang berisi berkas yang telah diunggah
- `README.md`: Berkas penjelasan mengenai struktur dan sumber daya pemrograman

### Penjelasan Berkas:

1. `index.php`: Halaman utama yang menampilkan informasi tentang pilihan beasiswa (Beasiswa Akademik dan Beasiswa Non Akademik). Terdapat pula tautan menu ke halaman formulir pendaftaran dan hasil pendaftaran.

2. `tambah.php`: Halaman formulir pendaftaran. Mahasiswa dapat mengisi data diri dan mengunggah berkas persyaratan. Formulir ini dapat dinonaktifkan berdasarkan nilai IPK. Data yang diisi akan disimpan dalam database setelah dikirim.

3. `hasil.php`: Halaman hasil pendaftaran. Data pendaftar dari database ditampilkan di sini, termasuk status ajuan. Halaman ini memberikan gambaran umum tentang pendaftar dan statusnya.

4. `koneksi.php`: Berkas untuk menghubungkan ke database MySQL. Variabel host, username, password, dan database digunakan untuk mengakses server database. Jika koneksi gagal, pesan kesalahan akan ditampilkan.

5. `functions.php`: Berkas yang berisi definisi fungsi PHP yang dapat digunakan dalam aplikasi pendaftaran beasiswa. Fungsi ini digunakan untuk mengecek nilai IPK dan mengontrol status pengisian formulir berdasarkan nilai IPK yang diberikan.

6. `uploads` : Folder yang berisikan berkas-berkas file yang telah di inputkan dalam aplikasi pendaftaran beasiswa.


### Sumber Daya Pemrograman:

- Bootstrap CSS: Diambil dari CDN Bootstrap untuk tampilan dan gaya yang disediakan oleh Bootstrap.
- Kode PHP: Penggunaan PHP untuk menghubungkan database, mengecek status halaman aktif, dan mengatur tampilan dinamis.
- CSS Khusus: Penambahan gaya CSS khusus (`bg-light-blue`) untuk memberikan tampilan berbeda pada elemen yang ditandai sebagai aktif.
- JavaScript: Penggunaan JavaScript dengan bantuan jQuery untuk memberikan interaktivitas pada halaman, seperti mengatur nilai IPK otomatis berdasarkan email yang diinputkan dan mengubah status tombol dan input berdasarkan kondisi tertentu.
- Chart.js: Penggunaan pustaka Chart.js untuk membuat grafik bar yang menampilkan jumlah pendaftar berdasarkan jenis beasiswa.
- HTML: Struktur dasar halaman web untuk menampilkan elemen-elemen seperti tabel dan formulir pendaftaran.
- MySQL: Penggunaan database MySQL untuk menyimpan data pendaftar dan informasi beasiswa.
- File Upload: Fungsi PHP untuk mengunggah berkas yang diinputkan oleh pengguna ke dalam folder tertentu dan mencatat path-nya dalam database.
- Modal Bootstrap: Penggunaan komponen modal dari Bootstrap untuk menampilkan pesan peringatan atau informasi kepada pengguna.
- Event Handling: Menggunakan jQuery untuk menangani peristiwa seperti perubahan nilai input email dan menyesuaikan perilaku halaman berdasarkan nilai input tersebut.
- Penanganan Form: Penggunaan PHP untuk memproses data yang diinputkan oleh pengguna melalui form pendaftaran dan menyimpannya dalam database.
- CDN (Content Delivery Network): Menggunakan CDN untuk mengambil sumber daya seperti Bootstrap CSS dan jQuery yang disimpan di server terdekat untuk meningkatkan kinerja dan kecepatan pemuatan halaman.


Proyek ini dirancang untuk membantu mahasiswa mendaftar beasiswa dengan mudah melalui platform online. Folder ini mencakup tiga halaman utama dan komponen pendukung yang diperlukan untuk menjalankan sistem pendaftaran beasiswa secara efektif.
