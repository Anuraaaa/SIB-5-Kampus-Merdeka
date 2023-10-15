-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 01:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrental_bus`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_penyewaan_bus_v`
-- (See below for the actual view)
--
CREATE TABLE `daftar_penyewaan_bus_v` (
`merek_nama` varchar(45)
,`nopol` varchar(20)
,`tipe` varchar(20)
,`seat` int(11)
,`fasilitas` text
,`perhari` double
,`tglmulai` date
,`tglselesai` date
,`lamasewa` int(11)
,`total` double
,`sopir_nama` varchar(45)
,`pelanggan_nama` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `idmerek` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `tahunrakit` varchar(5) NOT NULL,
  `seat` int(11) NOT NULL,
  `fasilitas` text NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `status` enum('bebas','jalan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nopol`, `idmerek`, `tipe`, `tahunrakit`, `seat`, `fasilitas`, `foto`, `status`) VALUES
(1, 'ABC123', 1, 'Sedan', '2020', 5, 'AC, Leather seats', 'sedan1.jpg', 'jalan'),
(2, 'XYZ789', 2, 'SUV', '2019', 7, 'Spacious, 4WD', 'suv1.jpg', 'bebas'),
(3, 'DEF456', 3, 'Hatchback', '2021', 4, 'Compact, Fuel-efficient', 'hatch1.jpg', 'jalan'),
(4, 'JKL012', 4, 'Pickup', '2018', 3, 'Cargo bed, V6 engine', 'pickup1.jpg', 'jalan'),
(5, 'VWU345', 5, 'Minivan', '2022', 7, 'Family-friendly, DVD', 'minivan1.jpg', 'bebas');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id`, `nama`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'Nissan'),
(4, 'Ford'),
(5, 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(1, 'Alice Johnson', '111 Park Ave, City', '555-1111', 'alice@example.com'),
(2, 'Bob Smith', '222 Lake Rd, Town', '555-2222', 'bob@example.com'),
(3, 'Carol Williams', '333 Forest St, Village', '555-3333', 'carol@example.com'),
(4, 'Daniel Brown', '444 River Dr, Suburb', '555-4444', 'daniel@example.com'),
(5, 'Emma Davis', '555 Hillside Ln, Countryside', '555-5555', 'emma@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ktp` varchar(30) NOT NULL,
  `sim` varchar(30) NOT NULL,
  `status` enum('bebas','jalan') NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id`, `nama`, `alamat`, `telepon`, `email`, `ktp`, `sim`, `status`, `foto`) VALUES
(1, 'John Doe', '123 Main St, City', '555-1234', 'john@example.com', '1234567890', '0987654321', 'jalan', 'driver1.jpg'),
(2, 'Jane Smith', '456 Elm St, Town', '555-5678', 'jane@example.com', '9876543210', '0123456789', 'bebas', 'driver2.jpg'),
(3, 'David Johnson', '789 Oak St, Village', '555-9876', 'david@example.com', '5432167890', '7654321098', 'jalan', 'driver3.jpg'),
(4, 'Sarah Williams', '101 Pine St, Suburb', '555-3456', 'sarah@example.com', '6543210987', '1234509876', 'bebas', 'driver4.jpg'),
(5, 'Robert Brown', '321 Cedar St, Countryside', '555-6789', 'robert@example.com', '4321098765', '2109876543', 'jalan', 'driver5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `idkendaraan` int(11) NOT NULL,
  `perhari` double NOT NULL,
  `overtime` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `idkendaraan`, `perhari`, `overtime`) VALUES
(1, 1, 120, 15),
(2, 2, 100, 12),
(3, 3, 90, 10),
(4, 4, 80, 9),
(5, 5, 110, 14);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `idsopir` int(11) NOT NULL,
  `idkendaraan` int(11) NOT NULL,
  `tglmulai` date NOT NULL,
  `tglselesai` date NOT NULL,
  `lamasewa` int(11) NOT NULL,
  `tglovertime` date DEFAULT NULL,
  `jmlovertime` int(11) DEFAULT NULL,
  `total` double NOT NULL,
  `status` enum('mulai','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `idpelanggan`, `idsopir`, `idkendaraan`, `tglmulai`, `tglselesai`, `lamasewa`, `tglovertime`, `jmlovertime`, `total`, `status`) VALUES
(1, 1, 1, 1, '2023-10-01', '2023-10-10', 10, '2023-10-11', 2, 1200, 'selesai'),
(2, 2, 2, 3, '2023-10-05', '2023-10-12', 7, NULL, NULL, 980, 'mulai'),
(3, 3, 3, 2, '2023-10-08', '2023-10-14', 6, '2023-10-15', 3, 750, 'selesai'),
(4, 4, 4, 5, '2023-10-10', '2023-10-17', 7, NULL, NULL, 1050, 'mulai'),
(5, 5, 1, 4, '2023-10-12', '2023-10-16', 4, '2023-10-17', 2, 640, 'selesai');

-- --------------------------------------------------------

--
-- Structure for view `daftar_penyewaan_bus_v`
--
DROP TABLE IF EXISTS `daftar_penyewaan_bus_v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_penyewaan_bus_v`  AS SELECT `merek`.`nama` AS `merek_nama`, `kendaraan`.`nopol` AS `nopol`, `kendaraan`.`tipe` AS `tipe`, `kendaraan`.`seat` AS `seat`, `kendaraan`.`fasilitas` AS `fasilitas`, `tarif`.`perhari` AS `perhari`, `transaksi`.`tglmulai` AS `tglmulai`, `transaksi`.`tglselesai` AS `tglselesai`, `transaksi`.`lamasewa` AS `lamasewa`, `transaksi`.`total` AS `total`, `sopir`.`nama` AS `sopir_nama`, `pelanggan`.`nama` AS `pelanggan_nama` FROM (((((`merek` join `kendaraan` on(`kendaraan`.`idmerek` = `merek`.`id`)) join `tarif` on(`tarif`.`idkendaraan` = `kendaraan`.`id`)) join `transaksi` on(`kendaraan`.`id` = `transaksi`.`idkendaraan`)) join `sopir` on(`transaksi`.`idsopir` = `sopir`.`id`)) join `pelanggan` on(`transaksi`.`idpelanggan` = `pelanggan`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  ADD KEY `fk_kendaraan_merek_idx` (`idmerek`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telepon_UNIQUE` (`telepon`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telepon_UNIQUE` (`telepon`),
  ADD UNIQUE KEY `ktp_UNIQUE` (`ktp`),
  ADD UNIQUE KEY `sim_UNIQUE` (`sim`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tarif_kendaraan1_idx` (`idkendaraan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_sopir1_idx` (`idsopir`),
  ADD KEY `fk_transaksi_pelanggan1_idx` (`idpelanggan`),
  ADD KEY `fk_transaksi_kendaraan1_idx` (`idkendaraan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_kendaraan_merek` FOREIGN KEY (`idmerek`) REFERENCES `merek` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `fk_tarif_kendaraan1` FOREIGN KEY (`idkendaraan`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_kendaraan1` FOREIGN KEY (`idkendaraan`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_pelanggan1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_sopir1` FOREIGN KEY (`idsopir`) REFERENCES `sopir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
