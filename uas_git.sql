-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 09.17
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
-- Database: `uas_git`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_air`
--

CREATE TABLE `hewan_air` (
  `id_hewan` int(11) NOT NULL,
  `id` varchar(111) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `habitat` varchar(111) NOT NULL,
  `pola_makan` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan_air`
--

INSERT INTO `hewan_air` (`id_hewan`, `id`, `nama`, `habitat`, `pola_makan`, `status`, `tgl_entry`) VALUES
(1, '121', 'Hiu', 'Laut', 'Karnivora', 'Terancam', '2024-07-01 14:15:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  ADD PRIMARY KEY (`id_hewan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
