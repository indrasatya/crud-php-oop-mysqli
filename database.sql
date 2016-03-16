-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 05:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_siswa`
--

CREATE TABLE IF NOT EXISTS `is_siswa` (
  `nis` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_siswa`
--

INSERT INTO `is_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_telepon`) VALUES
('16001', 'Danang Kusuma', 'Bandar Lampung', '1990-02-01', 'Laki-laki', 'Islam', 'Jalan Gatot Subroto No. 10, Bandar Lampung', '085758857775'),
('16002', 'Isyana Sarasvati', 'Jakarta', '1993-05-02', 'Perempuan', 'Islam', 'Jalan Pagar Alam No. 15, Kedaton, Bandar Lampung', '085789892909'),
('16003', 'Indra Styawantoro', 'Purbolinggo', '1991-05-15', 'Laki-laki', 'Islam', 'Perum Griya Gedung Meneng Blok C2 No. 2, Rajabasa, Bandar Lampung', '085669919769'),
('16004', 'Maudy Ayunda', 'Jakarta', '1994-12-19', 'Perempuan', 'Islam', 'Jalan Radin Intan No. 77, Tanjung Karang, Bandar Lampung', '089977955772'),
('16005', 'Valentino Rossi', 'Metro', '1979-03-16', 'Laki-laki', 'Islam', 'Jalan Zaenal Abidin Pagaralam No. 1, Bandar Lampung', '081922919212'),
('16006', 'Raisa Andriana', 'Jakarta', '1990-06-06', 'Perempuan', 'Islam', 'Jalan Yos Sudarso No. 135, Bandar Lampung', '081388955767'),
('16007', 'Cristiano Ronaldo', 'Teluk Betung', '1986-02-25', 'Laki-laki', 'Islam', 'Jalan Teuku Umar No. 52, Kedaton Bandar Lampung', '081269962201');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
