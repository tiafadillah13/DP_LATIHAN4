-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 05:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dp_latihan4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `foto_profil` mediumblob DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `no_hp`, `email`, `jurusan`, `foto_profil`, `alamat`) VALUES
(1, 'Septiya', '20SA2151', '083107041162', 'tiafadillah13@gmail.com', 'Sistem Informasi', NULL, 'Purwokerto'),
(2, 'Ansaresi Alfajri', '20SB2080', '089669677790', 'alfajrilaksawukir@gmail.com', 'Ilmu Komunikasi', NULL, 'Purwokerto'),
(3, 'Dewi Anom', '20SA2115', '085801907311', 'dewianom@gmail.com', 'Sistem Informasi', NULL, 'Purwokerto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
