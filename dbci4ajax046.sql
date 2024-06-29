-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2024 pada 11.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

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
-- Struktur dari tabel `hewan_air`
--

CREATE TABLE `hewan_air` (
  `id_hewan` int(11) NOT NULL,
  `id` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `habitat` varchar(99) NOT NULL,
  `pola_makan` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan_air`
--

INSERT INTO `hewan_air` (`id_hewan`, `id`, `nama`, `habitat`, `pola_makan`, `status`, `tgl_entry`) VALUES
(1, '33', 'Anaconda', 'Amazon', 'Karnivora', 'Terancam', '2024-06-29 16:54:08'),
(2, '344', 'Buaya', 'Air tawar/asin', 'Karnivora', 'Terancam', '2024-06-29 16:54:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_darat`
--

CREATE TABLE `hewan_darat` (
  `id_hewan` int(11) NOT NULL,
  `id` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `habitat` varchar(99) NOT NULL,
  `pola_makan` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan_darat`
--

INSERT INTO `hewan_darat` (`id_hewan`, `id`, `nama`, `habitat`, `pola_makan`, `status`, `tgl_entry`) VALUES
(1, '44', 'Serigala', 'Rusia', 'Karnivora', 'Aman', '2024-06-29 16:56:05'),
(2, '646', 'Singa', 'Hutan', 'Karnivora', 'Terancam', '2024-06-29 16:56:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_udara`
--

CREATE TABLE `hewan_udara` (
  `id_hewan` int(11) NOT NULL,
  `id` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `habitat` varchar(99) NOT NULL,
  `pola_makan` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan_udara`
--

INSERT INTO `hewan_udara` (`id_hewan`, `id`, `nama`, `habitat`, `pola_makan`, `status`, `tgl_entry`) VALUES
(3, '23435', 'Elang', 'Pegunungan', 'Karnivora', 'Aman', '2024-06-29 16:57:18');

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
-- Indeks untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `hewan_darat`
--
ALTER TABLE `hewan_darat`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `hewan_udara`
--
ALTER TABLE `hewan_udara`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `mahasiswa046`
--
ALTER TABLE `mahasiswa046`
  ADD PRIMARY KEY (`id_mahasiswa046`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hewan_air`
--
ALTER TABLE `hewan_air`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hewan_darat`
--
ALTER TABLE `hewan_darat`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hewan_udara`
--
ALTER TABLE `hewan_udara`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa046`
--
ALTER TABLE `mahasiswa046`
  MODIFY `id_mahasiswa046` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
