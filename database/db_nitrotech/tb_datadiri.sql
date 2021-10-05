-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 12:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nitrotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datadiri`
--

CREATE TABLE `tb_datadiri` (
  `id` int(11) NOT NULL,
  `username` varchar(9) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datadiri`
--

INSERT INTO `tb_datadiri` (`id`, `username`, `nama_lengkap`, `jenis_kelamin`, `no_telepon`, `email`, `tanggal_lahir`) VALUES
(11, 'ntroxyda', 'alvina', 'Perempuan', '08986420001', 'alvina@gmail.com', '2015-04-01'),
(14, 'aldilan', 'Aldilan', 'Laki-laki', '0895330019905', 'aldilan108@gmail.com', '2005-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
