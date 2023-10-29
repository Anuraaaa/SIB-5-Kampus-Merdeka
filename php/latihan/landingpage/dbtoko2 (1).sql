-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(1, 'Elektronik'),
(2, 'Furniture'),
(3, 'Makanan'),
(4, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(40) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Nasrul', 'nasrul99@gmail.com', 'nasrul', '7db99588d82ab7cdaec9470afb23fb7b900d58e0', 'admin', NULL),
(2, 'Budi Santoso', 'budi@gmail.com', 'budi', 'e9124cb8c35adccc0f946539bd16f769e5160280', 'manager', NULL),
(3, 'Ahmad Mulyawan', 'ahmad@gmail.com', 'ahmad', 'c8bd2f598dcb1074fa556cb448554c2a3bca1fc6', 'staff', NULL),
(4, 'Dewi Maharani', 'dewi@gmail.com', 'dewi', '3a5cd1a1e83375e3853007337510cbec0fe5ef65', 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` char(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kondisi` enum('Baru','Second') NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `idjenis` int(11) NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `kondisi`, `harga`, `stok`, `idjenis`, `foto`) VALUES
(1, 'KL2', 'Kulkas 2 Pintu', 'Second', 4500000, 4, 1, 'kulkas.jpg'),
(4, 'mj1', 'Meja Belajar', 'Baru', 1650000, 5, 2, NULL),
(5, 'mj2', 'Meja Makan', 'Baru', 2750000, 3, 2, NULL),
(6, 'bk1', 'Bangku Belajar', 'Baru', 550000, 6, 2, NULL),
(7, 'bk2', 'Bangku Rapat', 'Second', 600000, 4, 2, 'bangku.jpg'),
(8, 'SF1', 'Sofa', 'Baru', 7000000, 2, 2, 'sofa.png'),
(9, 'AC1', 'AC', 'Baru', 2000000, 3, 1, 'ac.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
