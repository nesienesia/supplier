-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 07:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supply_chain`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` char(6) NOT NULL,
  `nama_supplier` varchar(15) NOT NULL,
  `alamat_supplier` varchar(25) NOT NULL,
  `contact_person` varchar(15) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `contact_person`, `no_telp`) VALUES
('axad', 'duma', 'ahadhj', 'shdh', '8675645'),
('B00001', 'PT.Agnesia Corp', 'Jl. Meranti', 'Barbara Palvin', '0821129826'),
('B00002', 'PT.Maryam Corp', 'Jl. Mawar 10', 'Tamara Saqia', '08291298267'),
('B00003', 'PT. Kueku', 'Jl. Melati', 'Tari Sumantri', '086543298'),
('B00004', 'PT. Merah Muda', 'Jl.Tarakan 34', 'Surya Nugroho', '0876756462'),
('B00005', 'PT. Melati', 'Jl. Atrium', 'Poland Tarkin', '0864352445'),
('B00006', 'PT. Malibu', 'Jl. Hijau Kuning', 'Lana Del Rey', '0865645357');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
