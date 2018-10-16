-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 12.06
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maba`
--

CREATE TABLE `maba` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `motohidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maba`
--

INSERT INTO `maba` (`nama`, `nim`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES
('ayu', '', '', 'Sistem Infromasi', 'Ilmu Terapan', '', ''),
('dia', '32156486', '', 'Sistem Infromasi', 'Ilmu Terapan', '', ''),
('dff', '554454', 'Perempuan', 'Sistem Infromasi', 'Ilmu Terapan', 'tyty', 'hhh'),
('dian', '670117006', 'female', 'Ilmu Komunikasi', 'Komunikasi dan Bisnis', 'Metro', 'Y'),
('ayu', '678463646', 'Perempuan', 'Sistem Infromasi', 'Ilmu Terapan', 'mana y', 'lupa');

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
