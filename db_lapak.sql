-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 16.43
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(5) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lapak`
--

CREATE TABLE `tbl_lapak` (
  `kode_lapak` varchar(100) NOT NULL,
  `lokasi_lapak` varchar(50) NOT NULL,
  `harga_lapak` int(15) NOT NULL,
  `tersedia` int(2) NOT NULL DEFAULT '0',
  `kode_pedagang` int(50) NOT NULL DEFAULT '0',
  `qrcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_lapak`
--

INSERT INTO `tbl_lapak` (`kode_lapak`, `lokasi_lapak`, `harga_lapak`, `tersedia`, `kode_pedagang`, `qrcode`) VALUES
('123456789', 'Cidahu', 100000, 1, 97, 'MTIzNDU2Nzg5.png'),
('3', 'BSD', 12000, 1, 97, 'Mw==.png'),
('4', 'Cikijing', 100000, 0, 0, 'NA==.png'),
('5', 'Cidahu Kuningan', 100000, 1, 96, 'NQ==.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pedagang`
--

CREATE TABLE `tbl_pedagang` (
  `kode_pedagang` int(50) NOT NULL,
  `nama_pedagang` varchar(30) NOT NULL,
  `alamat_pedagang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pedagang`
--

INSERT INTO `tbl_pedagang` (`kode_pedagang`, `nama_pedagang`, `alamat_pedagang`) VALUES
(96, 'Kumbank', 'Kuningan'),
(97, 'Fajar', 'Kuningan'),
(98, 'Fajar nanda gustiawan', 'Kuningan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tagihan`
--

CREATE TABLE `tbl_tagihan` (
  `id` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_lapak` int(50) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tagihan`
--

INSERT INTO `tbl_tagihan` (`id`, `tanggal`, `kode_lapak`, `jumlah`) VALUES
(1, '2019-11-22', 1, 12000),
(2, '2019-11-22', 1, 12000),
(3, '2019-11-25', 22, 100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_lapak`
--
ALTER TABLE `tbl_lapak`
  ADD PRIMARY KEY (`kode_lapak`);

--
-- Indeks untuk tabel `tbl_pedagang`
--
ALTER TABLE `tbl_pedagang`
  ADD PRIMARY KEY (`kode_pedagang`);

--
-- Indeks untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pedagang`
--
ALTER TABLE `tbl_pedagang`
  MODIFY `kode_pedagang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
