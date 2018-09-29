-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2018 pada 01.30
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(64) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `hobi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nim`, `nama`, `tgl`, `alamat`, `jenis_kelamin`, `agama`, `hobi`) VALUES
(2, 'rangga bimantara', 'Jl.nuansahijau', '0000-00-00', 'Kristen', 'smk ti', '', ''),
(5, 'ranggas', 'gfsfs', '0000-00-00', 'Islam', '', '', ''),
(10, '1519551021', 'ranggas bimantara', '2018-09-06', 'hahahah', 'laki-laki', 'Islam', 'hobi'),
(15, '9393939', 'bons', '2018-09-01', 'sasasa', 'laki-laki', 'Islam', 'Array');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
