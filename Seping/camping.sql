-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 01:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camping`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `biaya`, `deskripsi`, `foto`, `pemilik`) VALUES
(6, 'Gitar Kecil', '25000', 'Untuk melengkapi malam saat camping', 'music.jpg', 2),
(7, 'Panci', '20000', 'Memudahkan dalam memasak', 'panci-1.jpg', 2),
(10, 'Tenda', '50000', 'Muat untuk 2-3 orang', 'kemah-1.jpg', 2),
(11, 'Tenda', '70000', 'Muat untuk 4-5 orang', 'kemah-3.jpg', 2),
(12, 'Panci', '30000', 'Panci lebih modern', 'panci-3.jpg', 2),
(13, 'Tenda', '60000', 'Muat untuk 3-4 orang', 'kemah-2.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bio_menyewakan`
--

CREATE TABLE `bio_menyewakan` (
  `id_menyewakan` int(11) NOT NULL,
  `nama_menyewakan` varchar(50) NOT NULL,
  `username` varchar(64) NOT NULL,
  `pass_menyewakan` varchar(64) NOT NULL,
  `nama_toko` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `tgl_regist` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bio_menyewakan`
--

INSERT INTO `bio_menyewakan` (`id_menyewakan`, `nama_menyewakan`, `username`, `pass_menyewakan`, `nama_toko`, `email`, `no_hp`, `tgl_regist`, `alamat`, `profil`) VALUES
(2, 'Panji Petualang', 'camping', '123', 'Camping Store', 'camping@gmail.com', '0832145678', '0000-00-00', 'Banjarmasin', 'SEbuah Toko yang meneydiakan peralatan camping baik untuk disewa ataupun dijual');

-- --------------------------------------------------------

--
-- Table structure for table `bio_penyewa`
--

CREATE TABLE `bio_penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `username_penyewa` varchar(64) NOT NULL,
  `pass_penyewa` varchar(64) NOT NULL,
  `email_penyewa` varchar(64) NOT NULL,
  `no_hp_p` varchar(16) NOT NULL,
  `tgl_regist` date NOT NULL,
  `alamat_penyewa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bio_penyewa`
--

INSERT INTO `bio_penyewa` (`id_penyewa`, `nama_penyewa`, `username_penyewa`, `pass_penyewa`, `email_penyewa`, `no_hp_p`, `tgl_regist`, `alamat_penyewa`) VALUES
(3, 'Putri Ananda', 'kelompok4', '1234', 'kelompok4@gmail.com', '0812345678', '0000-00-00', 'Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `tgl_sewa` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pemilik` int(11) NOT NULL,
  `barang` int(11) NOT NULL,
  `penyewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tgl_sewa`, `tgl_kembali`, `jumlah`, `pemilik`, `barang`, `penyewa`) VALUES
(5, '12 Des', '15 Des', 2, 2, 6, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk1` (`pemilik`);

--
-- Indexes for table `bio_menyewakan`
--
ALTER TABLE `bio_menyewakan`
  ADD PRIMARY KEY (`id_menyewakan`);

--
-- Indexes for table `bio_penyewa`
--
ALTER TABLE `bio_penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk2` (`pemilik`),
  ADD KEY `fk3` (`penyewa`),
  ADD KEY `fk4` (`barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bio_menyewakan`
--
ALTER TABLE `bio_menyewakan`
  MODIFY `id_menyewakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bio_penyewa`
--
ALTER TABLE `bio_penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`pemilik`) REFERENCES `bio_menyewakan` (`id_menyewakan`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`pemilik`) REFERENCES `bio_menyewakan` (`id_menyewakan`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`penyewa`) REFERENCES `bio_penyewa` (`id_penyewa`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
