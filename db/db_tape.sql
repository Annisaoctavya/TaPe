-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2021 pada 14.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tape`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penerima`
--

CREATE TABLE `data_penerima` (
  `nama_penerima` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `barang_donasi` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penerima`
--

INSERT INTO `data_penerima` (`nama_penerima`, `dusun`, `desa`, `kecamatan`, `barang_donasi`, `jenjang`) VALUES
('Zainal Arifin', 'Merembu Tengah', 'Merembu ', 'Labuapi', 'Kuota 15 GB', 'SD'),
('', '', '', '', '', ''),
('Zainal Arifin', 'Merembu Tengah', 'Merembu ', 'Labuapi', 'Kuota 15 GB', 'SD'),
('', '', '', '', '', ''),
('Zainal Arifin', 'Merembu Tengah', 'Merembu ', 'Labuapi', 'Kuota 15 GB', 'SD'),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `nominal` int(200) NOT NULL,
  `metode_pembayar` varchar(100) NOT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id`, `email_user`, `nominal`, `metode_pembayar`, `bukti_transfer`, `waktu`) VALUES
(36, 'rianajuanita@gmail.com', 1000000, 'go-pay', 'C:/xampp/htdocs/tape/aset/uploads/28373d2169e170c087503b2a2890d926.png', '2021-06-14 03:47:17'),
(37, 'rianajuanita@gmail.com', 1000000, 'go-pay', 'C:/xampp/htdocs/tape/aset/uploads/3dfbeb959439087ed6b9210c483330a3.png', '2021-06-14 03:47:37'),
(38, 'rianajuanita@gmail.com', 1000000, 'go-pay', 'C:/xampp/htdocs/tape/aset/uploads/7ba7f0c711d328d8c553a7e86ae7ccbe.png', '2021-06-14 03:52:13'),
(39, 'rianajuanita@gmail.com', 1000000, 'go-pay', 'C:/xampp/htdocs/tape/aset/uploads/3cb3085b9f508f88264ef7b957c287e3.png', '2021-06-14 03:52:47'),
(40, 'rianajuanita@gmail.com', 1000000, 'go-pay', 'C:/xampp/htdocs/tape/aset/uploads/362c6d576557d40abc8ac30a9f4b4325.png', '2021-06-14 03:53:01'),
(41, 'rianajuanita@gmail.com', 500000, 'ovo', 'C:/xampp/htdocs/tape/aset/uploads/7e9a7f3def9a61c3d325e5144938639d.png', '2021-06-14 04:00:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(150) NOT NULL,
  `jawaban` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`, `status`) VALUES
(17, 'asodasdnasnd', 'aslkdmaklsdm', 1),
(18, 'sadasdasdasd', 'asdasdasd', 1),
(19, 'sadasdasd', 'sadasdasd', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` int(11) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`id`, `email_user`, `isi_pesan`) VALUES
(2, 'asd', 'asdasd'),
(3, 'anwar@unram.ac.id', '123asd'),
(4, 'anwar@unram.ac.id', 'dasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `nominal` int(200) NOT NULL,
  `pengeluaran` int(200) NOT NULL,
  `sisa` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `date`, `nominal`, `pengeluaran`, `sisa`) VALUES
(1, '2021-06-16', 500000, 210000, 290000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `fullname`, `email_user`, `password`, `no_tlp`, `gender`, `image`) VALUES
(2, 'Ridwan Kamil', 'admin@gmail.com', '12345', '0812', 'P', '45a3c050c241bc98857c5ad6df8b24ed.png'),
(4, 'donatur1 donatur1', 'donatur1@gmail.com', '12345', '12345', 'P', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `email_user`, `password`) VALUES
(1, 'admintape@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menjawab`
--

CREATE TABLE `menjawab` (
  `email_user` varchar(30) NOT NULL,
  `isi_pesan` varchar(500) NOT NULL,
  `jawaban` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_akun`
--

CREATE TABLE `pendaftaran_akun` (
  `gambar` varchar(100) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_akun`
--

INSERT INTO `pendaftaran_akun` (`gambar`, `nama_depan`, `nama_belakang`, `email_user`, `no_hp`, `password`, `jenis_kelamin`) VALUES
('', 'Riana', 'Juanita', 'rianajuanita@gmail.com', '0812345678910', '$2y$06$Ul7', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `email_user` varchar(50) NOT NULL,
  `komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`email_user`, `komentar`) VALUES
('', ''),
('', ''),
('rianajuanita@gmail.com', 'keren'),
('donasitape@gmail.com', 'keren'),
('rianajuanita@gmail.com', 'bagus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
