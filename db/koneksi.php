<?php
// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$name = "toko_online";

// Membuat koneksi ke MySQL
$koneksi = mysqli_connect($host, $user, $pass);

// Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke MySQL gagal: " . mysqli_connect_error());
}

// Memilih database
if (!mysqli_select_db($koneksi, $name)) {
    die("Database '$name' tidak ditemukan! Error: " . mysqli_error($koneksi));
}
?>
