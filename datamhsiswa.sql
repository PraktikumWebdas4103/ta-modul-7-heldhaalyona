-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 06:36 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhsiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputmhs`
--

CREATE TABLE `inputmhs` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(40) NOT NULL,
  `mottohidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputmhs`
--

INSERT INTO `inputmhs` (`nama`, `nim`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `mottohidup`) VALUES
('Yona', '6701174028', 'Perempuan', 'Managemen Informatika', 'FIT', 'Jogja', 'Menari tanpa batas'),
('Melanie', '6701174030', 'Perempuan', 'Desain Komunikasi Visual', 'FIK', 'Jakarta', 'Ingin ke atas tanpa batas'),
('LOLA', '7701174056', 'Laki-Laki', 'Teknik Informatika', 'FIF', 'Purwakarta', 'Makan terus tanpa batas'),
('Jungkook', '7701176012', 'Laki-Laki', 'Akuntansi', 'FEB', 'Busan', 'Olahraga itu sehat'),
('popo', '7701176050', 'Laki-Laki', 'Sistem Informasi', 'FRI', 'Surabaya', 'Makann');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputmhs`
--
ALTER TABLE `inputmhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
