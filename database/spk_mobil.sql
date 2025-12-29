-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2025 at 08:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int NOT NULL,
  `nama_kriteria` varchar(50) DEFAULT NULL,
  `tipe` enum('benefit','cost') DEFAULT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
(1, 'kenyamanan', 'benefit', 10.5),
(2, 'performa', 'cost', 2.5),
(3, 'kenyamanan', 'benefit', 0.25),
(4, 'keamanan', 'benefit', 0.25),
(5, 'performa', 'benefit', 0.2),
(6, 'irit_bbm', 'benefit', 0.15),
(7, 'harga', 'cost', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `ml_dataset`
--

CREATE TABLE `ml_dataset` (
  `id` int NOT NULL,
  `id_mobil` int DEFAULT NULL,
  `kenyamanan` int DEFAULT NULL,
  `keamanan` int DEFAULT NULL,
  `performa` int DEFAULT NULL,
  `irit_bbm` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `target` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ml_dataset`
--

INSERT INTO `ml_dataset` (`id`, `id_mobil`, `kenyamanan`, `keamanan`, `performa`, `irit_bbm`, `harga`, `target`) VALUES
(1, 2, 10, 10, 10, 4, 1200000000, 0.807692),
(2, 3, 4, 4, 4, 2, 1000000, 0.192308),
(3, 1, 4, 4, 3, 4, 3, 0.78),
(4, 2, 4, 4, 3, 4, 3, 0.77),
(5, 3, 3, 4, 3, 5, 3, 0.75),
(6, 4, 4, 4, 4, 4, 3, 0.8),
(7, 5, 5, 5, 4, 3, 4, 0.88),
(8, 6, 5, 5, 5, 3, 4, 0.92),
(9, 7, 5, 5, 5, 2, 5, 0.9),
(10, 8, 5, 5, 5, 2, 5, 0.89),
(11, 9, 4, 4, 3, 4, 3, 0.76),
(12, 10, 4, 5, 4, 4, 4, 0.83),
(13, 11, 5, 5, 5, 2, 5, 0.559238),
(14, 13, 4, 5, 4, 4, 4, 0.536607),
(15, 12, 4, 4, 3, 4, 3, 0.509112);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int NOT NULL,
  `nama_mobil` varchar(50) DEFAULT NULL,
  `kenyamanan` int DEFAULT NULL,
  `keamanan` int DEFAULT NULL,
  `performa` int DEFAULT NULL,
  `irit_bbm` int DEFAULT NULL,
  `harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `kenyamanan`, `keamanan`, `performa`, `irit_bbm`, `harga`) VALUES
(4, 'Toyota Avanza', 4, 4, 3, 4, 3),
(5, 'Daihatsu Xenia', 4, 4, 3, 4, 3),
(6, 'Honda Brio', 3, 4, 3, 5, 3),
(7, 'Suzuki Ertiga', 4, 4, 4, 4, 3),
(8, 'Toyota Innova', 5, 5, 4, 3, 4),
(9, 'Honda CR-V', 5, 5, 5, 3, 4),
(10, 'Mitsubishi Pajero', 5, 5, 5, 2, 5),
(11, 'Toyota Fortuner', 5, 5, 5, 2, 5),
(12, 'Wuling Alvez', 4, 4, 3, 4, 3),
(13, 'Hyundai Creta', 4, 5, 4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ml_dataset`
--
ALTER TABLE `ml_dataset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ml_dataset`
--
ALTER TABLE `ml_dataset`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
