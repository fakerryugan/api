## tugas pratikum
## 1. Konsumsi Data dengan GET Request
- Gunakan kode di atas untuk mengambil daftar post dari https://jsonplaceholder.typicode.com/posts.
- Tampilkan 5 data pertama dalam bentuk array PHP.
### jawab
untuk mengambil 5 data pertama dari data api saya menggunakan fungsi php yang array_slice() agar bisa memanggil hanya 5 data saja
<img width="374" alt="image" src="https://github.com/user-attachments/assets/4d2eddfa-07f3-4ed1-a2b0-2c7048f09553">
<img width="959" alt="image" src="https://github.com/user-attachments/assets/47c7a3db-5a3a-48bc-9eed-107bfcdc093b">


## 2. Mengirim Data dengan POST Request
- Gunakan kode POST di atas untuk mengirim data baru ke API yang sama.
- Ganti isi body dengan data lain yang relevan (misalnya judul dan konten berbeda).
### jawab
<img width="467" alt="image" src="https://github.com/user-attachments/assets/bb0a1b86-710d-4542-a467-490c640f4488">

### hasil
<img width="399" alt="image" src="https://github.com/user-attachments/assets/a68066e0-1d7f-4529-8874-adb26f3741fc">


## 3. Menghapus Data dengan DELETE Request
- Gunakan kode DELETE untuk menghapus salah satu post dari API.
- Tampilkan respon yang dikembalikan dari API setelah permintaan DELETE berhasil.
### jawab
ini adalah data yang ada dan saya ingin menghapus data pada id 3 yang berupa nama Tommy Abshire
<img width="953" alt="image" src="https://github.com/user-attachments/assets/ff34ab2d-125b-4ecc-8ecf-f7cc4ffc3814">
### hasil
di delete.php
![Screenshot 2024-10-04 235228](https://github.com/user-attachments/assets/61aac5e7-a3ec-47f4-8f4a-91486df308e3)
di get.php
<img width="954" alt="image" src="https://github.com/user-attachments/assets/1235025b-da5e-4e97-bf83-d31d3d439dca">
### kode
<img width="407" alt="image" src="https://github.com/user-attachments/assets/1c9bb340-289f-481a-86a9-519a1c628545">

## 4. Analisis Metode HTTP
- Jelaskan perbedaan antara metode GET, POST, dan DELETE.
- Diskusikan skenario kapan harus menggunakan masing-masing metode dalam aplikasi nyata.
##
-get adalah mengambil atau melihat data di server tanpa perlu mengubah,menghapus
-post adalah mengubah/menambahkan data di server
-delete adalah menghapus data di server


