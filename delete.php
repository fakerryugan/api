<?php

// URL API tujuan (dengan ID data yang ingin dihapus)
$url = 'https://66f16ce8415379191550da12.mockapi.io/user/3';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode DELETE
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server
echo $response;
?>
