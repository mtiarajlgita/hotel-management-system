-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2024 pada 08.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat_tamu` text NOT NULL,
  `email_tamu` varchar(100) DEFAULT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tamu`
--

INSERT INTO `tb_tamu` (`id_tamu`, `nama_tamu`, `no_identitas`, `no_hp`, `alamat_tamu`, `email_tamu`, `tanggal_checkin`, `tanggal_checkout`) VALUES
(1, 'Mutiara Joni Legita', '13456765', '081378704577', 'Jorong 1 Siguhung, Kecamatan Lubuk Basung, Kabupaten Agam.', NULL, '2006-04-05', '2008-12-16'),
(2, 'Abrar Khan', '2782739232', '09876543726', 'Pekanbaru, Sumatera Barat', NULL, '2021-09-06', '2021-09-24'),
(3, 'Asnuldi Zaitul Muftaul Fikri', '1345278921', '081376787543', 'Pariaman, Sumatera Barat', NULL, '2024-07-09', '2024-07-10'),
(4, 'Rahmatul Wahid', '12776826', '082145427613', 'Aua Birugo Tigo Baleh', NULL, '2025-09-09', '2025-09-25'),
(5, 'Vina Ariska', '1345278921', '082145427613', 'Palembayan', NULL, '2025-01-04', '2025-02-04'),
(6, 'Pak Firdaus', '12378635', '083125243182', 'Aua Birugo Tigo Baleh, Kabupaten Agam', NULL, '2024-12-12', '2024-12-25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
