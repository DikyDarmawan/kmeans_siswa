-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2019 pada 22.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmeans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'kang dadang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid`
--

CREATE TABLE `centroid` (
  `id_centroid` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `papb` double NOT NULL,
  `ppkn` double NOT NULL,
  `bind` double NOT NULL,
  `bing` double NOT NULL,
  `mtk` double NOT NULL,
  `ipa` double NOT NULL,
  `ips` double NOT NULL,
  `seni` double NOT NULL,
  `penjaskes` double NOT NULL,
  `prakarya` double NOT NULL,
  `bjawa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid`
--

INSERT INTO `centroid` (`id_centroid`, `siswa`, `papb`, `ppkn`, `bind`, `bing`, `mtk`, `ipa`, `ips`, `seni`, `penjaskes`, `prakarya`, `bjawa`) VALUES
(11, 2, 78, 64, 76, 45, 52, 79, 79, 79, 76, 83, 75),
(12, 11, 82, 64, 50, 53, 26, 71, 85, 68, 79, 81, 70),
(13, 28, 73, 63, 53, 53, 38, 72, 55, 68, 77, 74, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'PAPB'),
(2, 'PPKN'),
(3, 'BAHASA INDONESIA'),
(4, 'BAHASA INGGRIS'),
(5, 'MATEMATIKA'),
(6, 'IPA'),
(7, 'IPS'),
(8, 'SENIBUDAYA'),
(9, 'PENJASKES'),
(10, 'PRAKARYA'),
(11, 'BAHASA JAWA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `papb` double NOT NULL,
  `ppkn` double NOT NULL,
  `bind` double NOT NULL,
  `bing` double NOT NULL,
  `mtk` double NOT NULL,
  `ipa` double NOT NULL,
  `ips` double NOT NULL,
  `seni` double NOT NULL,
  `penjaskes` double NOT NULL,
  `prakarya` double NOT NULL,
  `bjawa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `siswa`, `papb`, `ppkn`, `bind`, `bing`, `mtk`, `ipa`, `ips`, `seni`, `penjaskes`, `prakarya`, `bjawa`) VALUES
(1, 1, 72, 66, 58, 50, 41, 61, 67, 67, 77, 64, 75),
(2, 2, 78, 64, 76, 45, 52, 79, 79, 79, 76, 83, 75),
(3, 3, 63, 60, 49, 40, 30, 65, 57, 61, 74, 84, 60),
(4, 4, 73, 57, 60, 48, 34, 64, 58, 68, 82, 83, 65),
(5, 5, 79, 69, 66, 38, 32, 76, 75, 84, 78, 82, 85),
(6, 6, 60, 62, 55, 53, 19, 66, 64, 74, 81, 73, 65),
(7, 7, 78, 64, 55, 53, 28, 62, 69, 70, 83, 72, 75),
(8, 8, 90, 73, 79, 70, 71, 87, 84, 78, 82, 87, 85),
(9, 9, 96, 91, 88, 78, 88, 97, 94, 88, 82, 97, 94),
(10, 10, 67, 64, 62, 48, 26, 59, 63, 60, 80, 72, 60),
(11, 11, 82, 64, 50, 53, 26, 71, 85, 68, 79, 81, 70),
(12, 12, 75, 64, 52, 40, 32, 67, 78, 72, 78, 83, 68),
(13, 13, 72, 63, 46, 40, 22, 66, 76, 69, 78, 81, 65),
(14, 14, 82, 74, 86, 53, 43, 86, 87, 87, 78, 88, 88),
(15, 15, 75, 64, 52, 43, 30, 72, 58, 57, 75, 79, 70),
(16, 16, 71, 70, 59, 30, 32, 62, 67, 53, 78, 77, 68),
(17, 17, 78, 67, 60, 40, 30, 62, 64, 61, 79, 74, 69),
(18, 18, 82, 66, 68, 55, 42, 71, 77, 58, 82, 71, 75),
(19, 19, 78, 66, 63, 68, 58, 81, 68, 76, 79, 79, 75),
(20, 20, 78, 63, 68, 48, 45, 72, 40, 69, 79, 83, 55),
(21, 21, 73, 61, 66, 48, 60, 78, 55, 58, 77, 75, 70),
(22, 22, 78, 64, 72, 38, 62, 77, 64, 67, 74, 80, 88),
(23, 23, 82, 63, 62, 40, 52, 72, 66, 79, 78, 80, 50),
(24, 24, 81, 66, 62, 48, 40, 73, 52, 73, 78, 73, 68),
(25, 25, 65, 63, 56, 55, 19, 59, 49, 60, 83, 72, 50),
(26, 26, 79, 66, 78, 50, 45, 85, 76, 83, 86, 84, 75),
(27, 27, 85, 70, 78, 38, 34, 81, 63, 87, 80, 93, 76),
(28, 28, 73, 63, 53, 53, 38, 72, 55, 68, 77, 74, 60),
(29, 29, 53, 61, 55, 40, 32, 74, 31, 57, 69, 66, 55),
(30, 30, 88, 74, 70, 68, 70, 82, 64, 80, 80, 84, 80),
(31, 31, 76, 61, 63, 50, 34, 74, 59, 74, 76, 76, 45),
(32, 32, 87, 64, 70, 83, 51, 84, 76, 84, 80, 84, 90),
(33, 33, 93, 66, 79, 88, 76, 87, 78, 88, 83, 90, 92),
(34, 34, 87, 71, 70, 70, 64, 88, 78, 78, 82, 89, 92);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nm_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nm_siswa`) VALUES
(1, 'Achmad Aadiyat S'),
(2, 'Anggi Purnamasari'),
(3, 'Anna Apriliyani'),
(4, 'Arya Aji Pangestu'),
(5, 'Azri Dian Nuswatunta'),
(6, 'Bagus Irawan'),
(7, 'Dandi Rosikin'),
(8, 'Dian Renita'),
(9, 'Dicky Mustofa'),
(10, 'Ezza Ayu Kartika Ind'),
(11, 'Fikrizal Azmi'),
(12, 'Hengki Fernando'),
(13, 'Ikhlasul Amal'),
(14, 'Intan Permatasari'),
(15, 'M. Taat Manupan'),
(16, 'Muhammad Amiqul F'),
(17, 'Muhammad Lutfi Z'),
(18, 'Niky Alisia'),
(19, 'Nurlaeli'),
(20, 'Panca Ramadani'),
(21, 'Pingkan Andreyana'),
(22, 'Rahma Fauziah'),
(23, 'Rahmadini Risda F.'),
(24, 'Rendy Antonio'),
(25, 'Rio Irawan'),
(26, 'Riswanto Adi Putra'),
(27, 'Rokhmiyati Rokhmi'),
(28, 'Rosa Liyanah'),
(29, 'Rosiana Yuniar'),
(30, 'Sabrina Evelyn Crist'),
(31, 'Sandy Bilal Akbar'),
(32, 'Tiara Hadiyatun Utam'),
(33, 'Wulan Melinda Sari'),
(34, 'Zakhrifa Septina Q.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `centroid`
--
ALTER TABLE `centroid`
  ADD PRIMARY KEY (`id_centroid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid`
--
ALTER TABLE `centroid`
  MODIFY `id_centroid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
