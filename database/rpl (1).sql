-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL,
  `hak_akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nik`, `nama`, `password`, `hak_akses`) VALUES
(4, '123', 'jokowe', '$2y$10$aY1.0uY7.Bg2T4iW2rOfaOhBSdizbmWCUgqFpi5Vj6OesrCquJXrq', 'admin'),
(5, '321', 'adi', '$2y$10$49k17PC1RppJW7mqpN7/QefAM2bWR7q87w7b.tKyfXS1upog2P8.i', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pengingat`
--

CREATE TABLE `pengingat` (
  `id` int(11) NOT NULL,
  `bulan` date DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengingat`
--

INSERT INTO `pengingat` (`id`, `bulan`, `kegiatan`, `status`) VALUES
(2, '1991-01-01', 'membersihkan parit', 'selesai'),
(4, '2021-06-23', 'Pembersihan Taman', 'selesai'),
(6, '2021-07-08', 'membersihkan jalan', 'belum dimulai'),
(7, '2021-07-09', 'nyapu', 'belum dimulai'),
(8, '2021-01-01', 'membersihkan parit', 'selesai'),
(9, '2021-08-09', 'menambal ban', 'belum dimulai');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `Nama` text NOT NULL,
  `No_Hp` text NOT NULL,
  `Saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`Nama`, `No_Hp`, `Saran`) VALUES
('adi', '', 'sarannnnnn'),
('adi', '082277731116', 'sarannnnnn'),
('Amara', '082277731116', ' Masukkan Saran'),
('joko', '098098', 'Anu'),
('joko', '098098', 'Anu'),
('Amara', '098098', 'asfffffffffffffafsviuasvbivbisdvbiuBviubsviSBvisbvisbvifsbvisvbisbvsivbfibvfihbvdhbvsihbvisbisbvisbvisbvisvbisbvsivbsdivbsdivbsdihvbishvbsihvbsihvbshvbsivbsiv'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('sokol', '0000', 'Masukkan Sarann hiuy');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`tanggapan`) VALUES
(' Masukkan Tanggapan'),
('vdavadvavd'),
(''),
(''),
(''),
('selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengingat`
--
ALTER TABLE `pengingat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengingat`
--
ALTER TABLE `pengingat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
