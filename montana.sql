-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 06:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montana`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(12) NOT NULL,
  `namapelanggan_antrian` varchar(50) NOT NULL,
  `nohp_antrian` varchar(12) NOT NULL,
  `mobil_antrian` varchar(50) NOT NULL,
  `platnomor_antrian` varchar(50) NOT NULL,
  `jeniscuci_antrian` enum('Hidrolik','Normal','Bodi') NOT NULL,
  `member_antrian` enum('Tidak Member','Member') NOT NULL,
  `status_antrian` enum('Menunggu','Berjalan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `namapelanggan_antrian`, `nohp_antrian`, `mobil_antrian`, `platnomor_antrian`, `jeniscuci_antrian`, `member_antrian`, `status_antrian`) VALUES
(1, 'Jody', '089910209019', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 'Selesai'),
(2, 'Aceng', '089910209019', 'Toyota Avanza', 'B1234CB', 'Hidrolik', 'Member', 'Selesai'),
(4, 'Lea', '0812887759', 'Toyota Fortuner', 'B2288WBB', 'Hidrolik', 'Member', 'Berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `nohp_member` varchar(12) NOT NULL,
  `jenis_member` enum('Normal','Hidrolik','Admin') NOT NULL,
  `mobil1_member` varchar(50) NOT NULL,
  `platnomor1_member` varchar(50) NOT NULL,
  `mobil2_member` varchar(50) NOT NULL,
  `platnomor2_member` varchar(50) NOT NULL,
  `tanggalpembuatan_member` date NOT NULL,
  `status_member` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `password`, `nama_member`, `nohp_member`, `jenis_member`, `mobil1_member`, `platnomor1_member`, `mobil2_member`, `platnomor2_member`, `tanggalpembuatan_member`, `status_member`) VALUES
(2607, '123', 'Admin', '21', 'Admin', '', '', '', '', '0000-00-00', 'Aktif'),
(2611, 'lea123', 'Lea', '0812887759', 'Hidrolik', 'Toyota Fortuner', 'B2288WBB', '', '', '2022-06-13', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `id_member` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `nohp_member` varchar(12) NOT NULL,
  `jenis_member` enum('Normal','Hidrolik','Admin') NOT NULL,
  `tanggalpembuatan_member` date NOT NULL,
  `status_member` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_mobil`
--

CREATE TABLE `member_mobil` (
  `id_member` int(12) NOT NULL,
  `mobil1_member` varchar(50) NOT NULL,
  `platnomor1_member` varchar(50) NOT NULL,
  `mobil2_member` varchar(50) NOT NULL,
  `platnomor2_member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `nohp_transaksi` varchar(50) NOT NULL,
  `namapelanggan_transaksi` varchar(50) NOT NULL,
  `mobil_transaksi` varchar(50) NOT NULL,
  `platnomor_transaksi` varchar(50) NOT NULL,
  `jeniscuci_transaksi` enum('Hidrolik','Bodi','Normal') NOT NULL,
  `member_transaksi` enum('Hidrolik','Normal','Tidak Member') NOT NULL,
  `harga` int(12) NOT NULL,
  `jenispembayaran_transaksi` enum('Cash','Debit','QR','Gopay','Membership') NOT NULL,
  `idmember_transaksi` varchar(12) NOT NULL,
  `statuspembayaran_transaksi` enum('Gagal','Berhasil','Menunggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nohp_transaksi`, `namapelanggan_transaksi`, `mobil_transaksi`, `platnomor_transaksi`, `jeniscuci_transaksi`, `member_transaksi`, `harga`, `jenispembayaran_transaksi`, `idmember_transaksi`, `statuspembayaran_transaksi`) VALUES
(1, '2022-05-25 10:48:46', '0812887759', 'Lea', 'dsdsd', 'B1297CB', 'Bodi', 'Tidak Member', 0, 'Cash', '2609', 'Berhasil'),
(2, '2022-05-25 10:50:38', '0812887759', 'Lea', 'Toyota Avanza', 'B89CEN', 'Bodi', 'Tidak Member', 0, 'Cash', '2609', 'Berhasil'),
(3, '2022-06-10 12:44:39', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 25000, 'Debit', '-', 'Berhasil'),
(4, '2022-06-11 17:55:10', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 0, 'Cash', '', 'Berhasil'),
(5, '2022-06-11 17:59:47', '', '', '', '', '', '', 1, 'Cash', '222', 'Berhasil'),
(6, '2022-06-11 18:01:21', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 30000, 'Gopay', '-', 'Berhasil'),
(7, '2022-06-13 10:08:37', '0812887759', 'Lea', 'Toyota Fortuner', 'B2288WBB', 'Hidrolik', '', 50000, 'Cash', '-', 'Berhasil'),
(8, '2022-06-13 10:23:54', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 0, 'Cash', '', 'Berhasil'),
(9, '2022-08-08 23:06:52', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 0, 'Cash', '', 'Berhasil'),
(25, '2022-08-21 04:11:01', '', '', '', '', 'Bodi', 'Tidak Member', 25000, 'Cash', '', 'Berhasil'),
(26, '2022-08-21 04:11:07', '', '', '', '', 'Normal', 'Tidak Member', 30000, 'Cash', '', 'Berhasil'),
(27, '2022-08-21 04:11:15', '', '', '', '', 'Hidrolik', 'Tidak Member', 50000, 'Cash', '', 'Berhasil'),
(28, '2022-08-21 04:12:43', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 25000, 'Cash', '', 'Berhasil'),
(29, '2022-08-21 04:13:18', '089910209019', 'Aceng', 'Toyota Avanza', 'B1234CB', 'Hidrolik', '', 0, 'Membership', '', 'Berhasil'),
(30, '2022-08-21 04:26:27', '', '', '', '', 'Bodi', 'Tidak Member', 25000, 'Cash', '', 'Berhasil'),
(31, '2022-08-21 04:26:31', '', '', '', '', 'Normal', 'Tidak Member', 30000, 'Cash', '', 'Berhasil'),
(32, '2022-08-21 04:26:36', '', '', '', '', 'Hidrolik', 'Tidak Member', 50000, 'Cash', '', 'Berhasil'),
(33, '2022-08-21 04:26:59', '089910209019', 'Jody', 'Toyota Camry', 'B1234KJX', 'Bodi', 'Tidak Member', 25000, 'Debit', '-', 'Berhasil'),
(34, '2022-08-21 04:29:42', '0812887759', 'Lea', 'Toyota Fortuner', 'B2288WBB', 'Hidrolik', '', 0, 'Cash', '', 'Berhasil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `member_mobil`
--
ALTER TABLE `member_mobil`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2612;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_mobil`
--
ALTER TABLE `member_mobil`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
