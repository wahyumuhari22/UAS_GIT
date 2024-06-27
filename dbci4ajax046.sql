-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2024 pada 08.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbci4ajax046`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa046`
--

CREATE TABLE `mahasiswa046` (
  `id_mahasiswa046` int(11) NOT NULL,
  `nim046` varchar(77) NOT NULL,
  `nama046` varchar(77) NOT NULL,
  `tmplahir046` varchar(77) NOT NULL,
  `tgllahir046` date NOT NULL,
  `jenkel046` char(77) NOT NULL,
  `tgl_entry046` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa046`
--

INSERT INTO `mahasiswa046` (`id_mahasiswa046`, `nim046`, `nama046`, `tmplahir046`, `tgllahir046`, `jenkel046`, `tgl_entry046`) VALUES
(1124, '22110046', 'Wahyu Muhari Muhammad', 'Pekanbaru', '2002-04-04', 'Laki-Laki', '2024-06-19 12:21:31'),
(1126, '22110045', 'Dewi Fitriyani', 'Riau, Rohil, Pujud, Kampung Tiga', '2024-05-30', 'Perempuan', '2024-06-19 13:05:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa046`
--
ALTER TABLE `mahasiswa046`
  ADD PRIMARY KEY (`id_mahasiswa046`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa046`
--
ALTER TABLE `mahasiswa046`
  MODIFY `id_mahasiswa046` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
