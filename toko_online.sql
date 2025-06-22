-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2025 pada 14.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nama_pembeli` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `produk` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` decimal(15,2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_pembayaran` varchar(50) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `nama_pembeli`, `alamat`, `produk`, `jumlah`, `total_harga`, `foto`, `jenis_pembayaran`, `ukuran`, `harga`, `pesan`, `email`) VALUES
(1, 'Galang Riarulhaq', 'Jl. Merdeka No. 10, Jakarta', 'Laptop Asus ROG', 1, '25000000.00', '1.webp', 'COD', NULL, NULL, NULL, NULL),
(2, 'Galang Riarulhaq', 'Jl. Merdeka No. 10, Jakarta', 'Aerostreet 37-44 Hoops Low 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '250000.00', '2.webp', 'COD', NULL, NULL, NULL, NULL),
(3, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(4, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(5, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(6, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(7, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(8, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(9, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(10, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(11, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(12, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(13, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(14, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(15, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(16, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(17, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(18, 'putra', 'oke', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'putra@gmail.com'),
(19, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(20, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(21, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(22, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(23, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(24, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(25, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(26, 'Rizki', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'oke', 'Robin1307@gmail.com'),
(27, 'Ga', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(28, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(29, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(30, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(31, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(32, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(33, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(34, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(35, 'Ga', 'pesan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(36, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(37, 'galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(38, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'OVO', 0, 179900, 'pesan', 'galang@gmail.com'),
(39, 'Ga', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'OVO', 0, 179900, 'pesan', 'galang@gmail.com'),
(40, 'Ga', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(41, 'Galang', 'jaln', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(42, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(43, 'Galang', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(44, 'galng', 'jalan', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 1, '179900.00', '1.webp', 'COD', 0, 179900, 'pesan', 'galang@gmail.com'),
(45, 'Galang', 'Jl. Garut', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', 2, '359800.00', '1.webp', 'COD', 0, 179900, 'okee', 'Robin1307@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `wa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `gambar`, `nama`, `harga`, `wa`) VALUES
(2, '1.webp', 'Aerostreet 37-44 Hoops High 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', '179900', '+628515522222'),
(3, '2.webp', 'Aerostreet 37-44 Hoops Low 2.0 Putih Hitam Putih - Sepatu Sneakers Casual', '169900', '+628515522222'),
(4, '3.webp', 'Aerostreet 37-44 Ortiz Natural Coklat Abu Muda - Sepatu Sneakers Sport Premium', '199900', '+628515522222'),
(6, 'id-11134207-7r98r-llylse4bt0a3f4.webp', 'Aerostreet 37-44 Brooklyn Putih Putih Abu Muda - Sepatu Sneakers Casual Sport', '179900', '+628515522222'),
(8, '667-92845e5c-bc4c-4692-8900-ff2171406043.jpg', 'Aerostreet X Doraemon 37-44 Doraemon Putih Merah Biru - Sepatu Sneakers Casual Sport Pria Wanita', '249900', '+628515522222'),
(9, '522-723e1dee-8c76-4c5a-acb1-80af64948180.jpg', 'Aerostreet X Doraemon 37-44 Nobita Biru Merah Biru Pastel - Sepatu Sneakers Casual Sport Pria Wanita', '249900', '+628515522222'),
(10, 'id-11134207-7r98r-lzjd5oti64gw07.webp', 'Aerostreet X Doraemon 37-44 Shizuka Pink Putih - Sepatu Sneakers Casual Sport Pria Wanita', '249900', '+628515522222'),
(11, 'id-11134207-7r98o-lzjd5oti64mg9b.webp', 'Aerostreet X Doraemon 37-44 Zayn Orange Biru Cream - Sepatu Sneakers Casual Sport Pria Wanita', '249900', '+628515522222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
