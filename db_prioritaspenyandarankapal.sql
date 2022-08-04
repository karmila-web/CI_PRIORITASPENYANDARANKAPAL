-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2022 pada 09.10
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prioritaspenyandarankapal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `status_user` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `status_user`, `jabatan`, `username`, `password`) VALUES
(1, 'ADMIN', 'PETUGAS PPSA', 'karmila-web', '10184047'),
(2, 'ADMIN', 'PETUGAS PPSA', 'sulmiati-web', '10184051'),
(3, 'ADMIN', 'PETUGAS PPSA', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_kapal`
--

CREATE TABLE `tb_data_kapal` (
  `id_kapal` int(10) NOT NULL,
  `nama_kapal` varchar(50) NOT NULL,
  `jenis_kapal` varchar(30) NOT NULL,
  `pengangkutan` varchar(30) NOT NULL,
  `LOA` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_kapal`
--

INSERT INTO `tb_data_kapal` (`id_kapal`, `nama_kapal`, `jenis_kapal`, `pengangkutan`, `LOA`) VALUES
(1, 'KM LAMBELU', 'PEMERINTAH', 'PENUMPANG', 136),
(2, 'KM. ARMADA PERMATA', 'LAINNYA', 'PETIKEMAS', 130),
(3, 'KRI Sura (802)', 'KAPAL PERANG', 'PENUMPANG', 581);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `status_user` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status_user`, `jabatan`, `username`, `password`) VALUES
(1, 'USER', 'AGEN KAPAL', 'user', 'user123'),
(3, 'USER', 'AGEN KAPAL', 'ika', 'ika123'),
(4, 'USER', 'AGEN KAPAL', 'asti', 'asti123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_data_kapal`
--
ALTER TABLE `tb_data_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_kapal`
--
ALTER TABLE `tb_data_kapal`
  MODIFY `id_kapal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
