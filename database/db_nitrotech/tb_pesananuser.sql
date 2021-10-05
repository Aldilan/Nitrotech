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
-- Table structure for table `tb_pesananuser`
--

CREATE TABLE `tb_pesananuser` (
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(9) NOT NULL,
  `stok_barang` int(7) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `kategori_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `status` varchar(16) NOT NULL,
  `username` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesananuser`
--

INSERT INTO `tb_pesananuser` (`nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `kategori_barang`, `deskripsi_barang`, `id_barang`, `status`, `username`) VALUES
('SL X TS', 5999000, 50, '60c86a41d49d0.jpg', 'Kursi', 'Secretlab Full-Metal 4D Armrest (2020)\r\nDirancang secara ekslusif untuk memanjakan pergelangan tangan serta sikumu demi menunjang permainan maksimalmu. Bersama New Secretlab 4D armrest-updated yang me', 15, 'sudah dibayar', 'ntroxygen'),
('Armageddon HNS', 24000, 575, '60c86ea604125.jpg', 'Mousepad', 'Moderate surface friction.\r\nImproves mouse control with just the right amount of friction for sudden starts and stops\r\nPerfect for Office or Home Use\r\nMade of pure Natural rubbercloth\r\nVARIATION: -221', 17, 'belum dibayar', 'aldilan'),
('ROG Spartha', 2099000, 175, '60c89eadc34bd.jpg', 'Mouse', 'Programmable 12-button design optimized for MMO gaming\r\nIncreased flexibility play in wired or wireless modes\r\nEasy-swap switchable socket design for customizable click resistance\r\nCustomizable RGB li', 18, 'sudah dibayar', 'aldilan'),
('Armageddon HNS', 24000, 575, '60c86ea604125.jpg', 'Mousepad', 'Moderate surface friction.\r\nImproves mouse control with just the right amount of friction for sudden starts and stops\r\nPerfect for Office or Home Use\r\nMade of pure Natural rubbercloth\r\nVARIATION: -221', 19, 'sudah dibayar', 'aldilan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pesananuser`
--
ALTER TABLE `tb_pesananuser`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesananuser`
--
ALTER TABLE `tb_pesananuser`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
