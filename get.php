<?php

// URL API publik
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL untuk mengambil URL dengan metode GET
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL dan simpan respon
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Ubah respon dari JSON menjadi array PHP
$data = json_decode($response, true);

$lima = array_slice($data, 0, 5);

// Tampilkan hasil data
print_r($lima);
?>
