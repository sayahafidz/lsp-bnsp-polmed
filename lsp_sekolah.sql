-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 06 Bulan Mei 2023 pada 19.29
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `nip`, `mata_pelajaran`, `jenis_kelamin`, `tempat_tanggal_lahir`, `alamat`, `no_hp`, `pendidikan_terakhir`, `status`) VALUES
(8, 'tidak mantap', '197305052005011008', 'matuy98', 'Laki-laki', 'Perbaugan, 09-09-2009', 'perbaungan', '98798798', 'asdf', 'Aktif'),
(9, 'tidak mantap', '345324524', '2345234', 'Perempuan', '2345', '2345', '2345', '2435', 'Tidak Aktif'),
(10, 'h89h', '9h88h', 'u9h', 'Laki-laki', '8h9h', '98h9', '8h98', 'h98', 'Aktif'),
(11, 'hg98h98', 'h98h98h', '98h98h', 'Perempuan', 'h98h98', 'ih8h', 'h98h98', 'h9h8', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `nis`, `kelas`, `jenis_kelamin`, `tempat_tanggal_lahir`, `alamat`, `no_hp`, `status`) VALUES
(2, 'hafidz', 'cintaku', 'pagi', 'Laki-laki', 'medan mall', 'perbaunga', 'gatau', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'administrasi', 'admin@gmail.com', 'admin'),
(2, 'mantap', 'mantap@mantap.banget', 'mantap'),
(3, 'tidak', 'tidak@apa.apa', 'mantap'),
(4, '', 'admin@ayosinau.com', 'secret'),
(5, 'mantap', 'mantap@mantap.asdf', 'mantap'),
(6, 'hafidz', 'hafidz@sayahafidz.com', 'hafidz');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
