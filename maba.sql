-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 14.38
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maba`
--

CREATE TABLE `maba` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `motohidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maba`
--

INSERT INTO `maba` (`nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES
('Angel', '401174049', 'Perempuan', 'Ilmu Komunikasi', 'Fakultas Ekonomi dan Bisnis', 'Kuningan', 'TIDAK DITUNDA !!!'),
('Deshinta', '6701174024', 'Perempuan', 'Manajemen Infomatika', 'Fakultas Ilmu Terapan', 'Boyolali', 'LULUS SEGERA !!!'),
('Richard', '6701174072', 'Laki-Laki', 'Manajemen Infomatika', 'Fakultas Ilmu Terapan', 'Blitar', 'AKU MAMPU !!!'),
('tanaya', '6701174148', 'Perempuan', 'Manajemen Infomatika', 'Fakultas Ilmu Terapan', 'Ponorogo', 'SEMANGATTTT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
