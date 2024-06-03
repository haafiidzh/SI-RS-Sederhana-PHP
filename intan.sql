-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 09:16 AM
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
-- Database: `intan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `p_jawab` varchar(30) NOT NULL,
  `s_pjawab` varchar(8) NOT NULL,
  `no_hp2` varchar(13) NOT NULL,
  `alamat2` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `dokter` varchar(10) NOT NULL,
  `rujukan` varchar(6) NOT NULL,
  `pembiayaan` varchar(7) NOT NULL,
  `dirawatke` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `agama`, `alamat`, `tgl_masuk`, `no_hp`, `p_jawab`, `s_pjawab`, `no_hp2`, `alamat2`, `kelas`, `kamar`, `dokter`, `rujukan`, `pembiayaan`, `dirawatke`) VALUES
('RM002', '3309091204779001', 'Bagas', 'sfdb', '2024-05-03', 'Perempuan', 'Kristen', 'svs', '2024-05-23', '2342', 'sf', 'Ayah', 'fs', 'fs', 'VVIP', 'Flamboyan', 'dr. Rudi', 'UGD', 'Umum', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
