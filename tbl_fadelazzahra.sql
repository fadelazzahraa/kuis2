-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2023 pada 05.43
-- Versi server: 10.4.22-MariaDB-log
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019101597_kuis2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fadelazzahra`
--

CREATE TABLE `tbl_fadelazzahra` (
  `kode_mk` char(10) NOT NULL,
  `Nama_mk` varchar(50) NOT NULL,
  `Jumlah_sks` int(11) NOT NULL,
  `Deskripsi_mk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fadelazzahra`
--

INSERT INTO `tbl_fadelazzahra` (`kode_mk`, `Nama_mk`, `Jumlah_sks`, `Deskripsi_mk`) VALUES
('A001', 'Bahasa Indonesia', 3, 'Dosen Pengampu Ibu Elizabeth Maria'),
('A002', 'Bahasa Rusia', 2, 'Dosen Pengampu Ibu Anastasiya Putin'),
('A003', 'Agama', 2, 'Dosen Pengampu Bapak Imam Abu Al Maliki'),
('A004', 'Hukum dan Etika Sandi', 2, 'Dosen Pengampu Bapak Christian Hermawan'),
('B001', 'Pemrograman Web', 2, 'Dosen Pengampu Bapak I Komang Setia'),
('B002', 'Pemrograman Berorientasi Objek', 3, 'Dosen Pengampu Bapak Sandhika Galih'),
('B003', 'Komputasi Fisik', 2, 'Dosen Pengampu Bapak I Komang Setia'),
('B004', 'Kriptografi Modern', 3, 'Dosen Pengampu Ibu Bella Aulia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_fadelazzahra`
--
ALTER TABLE `tbl_fadelazzahra`
  ADD PRIMARY KEY (`kode_mk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
