-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 08:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan_tenda`
--
CREATE DATABASE IF NOT EXISTS `penyewaan_tenda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `penyewaan_tenda`;

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `No_Penyewa` int(25) NOT NULL,
  `Nama_Penyewa` varchar(50) NOT NULL,
  `No_HP` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`No_Penyewa`, `Nama_Penyewa`, `No_HP`, `Email`, `Alamat`) VALUES
(4, 'Roma', '6546461516', 'Roma@yahoo', 'Bekasi'),
(5, 'Roma2', '6546461516', 'Roma2@yahoo', 'Bekasi2'),
(6, 'Roma3', '6546461516', 'Roma3@yahoo', 'Bekasi3');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_Pesanan` varchar(25) NOT NULL,
  `Nama_Tenda` varchar(50) NOT NULL,
  `Tanggal_Sewa` date NOT NULL,
  `Tanggal_Pengembalian` date NOT NULL,
  `No_Penyewa` int(25) NOT NULL,
  `Harga` int(25) NOT NULL,
  `Status_Pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`ID_Pesanan`, `Nama_Tenda`, `Tanggal_Sewa`, `Tanggal_Pengembalian`, `No_Penyewa`, `Harga`, `Status_Pembayaran`) VALUES
('PSN001', 'Tanda Dengan Terpal', '2021-07-25', '2021-07-27', 4, 40000, 'Belum'),
('PSN002', 'Tanda Dengan Terpal 2', '2021-07-10', '2021-07-20', 5, 10000, 'Lunas'),
('PSN003', 'Tanda Dengan Terpal 3', '2021-07-29', '2021-07-30', 6, 40000, 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`No_Penyewa`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_Pesanan`),
  ADD KEY `No_Penyewa` (`No_Penyewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `No_Penyewa` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`No_Penyewa`) REFERENCES `penyewa` (`No_Penyewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
