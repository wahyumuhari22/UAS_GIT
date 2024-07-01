-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 11.03
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_amfibi`
--

CREATE TABLE `hewan_amfibi` (
  `id_hewan` int(11) NOT NULL,
  `id` varchar(111) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `habitat` varchar(111) NOT NULL,
  `pola_makan` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_darat`
--

CREATE TABLE `hewan_darat` (
  `id_hewan` int(30) NOT NULL,
  `id` varchar(90) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `habitat` varchar(45) NOT NULL,
  `pola_makan` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan_darat`
--

INSERT INTO `hewan_darat` (`id_hewan`, `id`, `nama`, `habitat`, `pola_makan`, `status`, `tgl_entry`) VALUES
(2, '1', 'samuel & jordan', 'darat', 'Omnivora', 'Terancam', '2024-07-01 15:06:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `hewan_amfibi`
--
ALTER TABLE `hewan_amfibi`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `hewan_darat`
--
ALTER TABLE `hewan_darat`
  ADD PRIMARY KEY (`id_hewan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hewan_amfibi`
--
ALTER TABLE `hewan_amfibi`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hewan_darat`
--
ALTER TABLE `hewan_darat`
  MODIFY `id_hewan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
