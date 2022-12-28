-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 08.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Direktur Perusahaan'),
(2, 'Sekretaris'),
(3, 'Manajer'),
(4, 'Pemegang Saham'),
(5, 'Anggota'),
(6, 'Peserta Magang'),
(7, 'Direktur Cabang'),
(8, 'Pekerja Paruh Waktu'),
(9, 'Pensiunan'),
(10, 'Staff IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE `pekerja` (
  `id_pekerja` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `umur` int(10) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`id_pekerja`, `nama`, `jenis_kelamin`, `umur`, `jabatan`, `tanggal_lahir`, `keterangan`, `foto`) VALUES
(1, 'Alam', 'Laki-laki', 50, 'Direktur Perusahaan', '1982-12-16', 'Bos Utama', 'L4.jpg'),
(7, 'Minthi Tilore', 'Perempuan', 36, 'Sekretaris', '1979-02-15', 'Utama', 'P3.jpg'),
(8, 'Cecilion', 'Perempuan', 28, 'Manajer', '2022-12-08', 'Accounting - Cabang Medan', 'P2.jpg'),
(9, 'Dira Sain', 'Perempuan', 59, 'Pemegang Saham', '2022-12-07', '10,42% Saham', 'P1.jpg'),
(10, 'Ertigo Vertigo', 'Laki-laki', 42, 'Anggota', '2022-12-17', 'Bagian Pergudangan', 'L2.jpg'),
(11, 'Fernando', 'Laki-laki', 22, 'Peserta Magang', '2022-12-16', 'Kampus Merdeka - USU', 'L3.jpg'),
(12, 'Gerald Hudson', 'Laki-laki', 60, 'Direktur Cabang', '2022-12-14', 'Kota Bandung', 'L.jpg'),
(13, 'Hilda Sunmori', 'Perempuan', 29, 'Pekerja Paruh Waktu', '2022-12-23', 'Shift Malam', 'P4.jpg'),
(14, 'Ilsana Kirana', 'Perempuan', 70, 'Pensiunan', '2022-12-17', 'Mantan Sekretaris Cabang Medan', 'P5.jpg'),
(15, 'Jeremy Python', 'Laki-laki', 37, 'Staff IT', '2022-12-08', 'Bagian Jakarta', 'L5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('login', 'login'),
('test', 'test'),
('user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id_pekerja` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
