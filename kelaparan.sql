-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 03:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelaparan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(8) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
('52151000', 'Erica', 'asd', 'Erica Maulidina Beni', 'dina@gmail.com'),
('52151001', 'Hanum', 'asd', 'Hilda', 'hanum@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `base_menu`
--

CREATE TABLE `base_menu` (
  `id_nasi` varchar(5) NOT NULL,
  `jenis_menu` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(30) NOT NULL,
  `kategori` int(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `base_menu`
--

INSERT INTO `base_menu` (`id_nasi`, `jenis_menu`, `deskripsi`, `harga`, `kategori`, `image`) VALUES
('nasi0', 'nasi ayam asam manis', 'nasi dengan potongan ayam krispi dan topping saus asam manis', 10000, 0, 'sausasam21.jpg'),
('nasi1', 'nasi ayam keju', 'nasi dengan potongan ayam krispi dan topping saus keju', 10000, 0, 'sauskeju1.jpg'),
('nasi2', 'nasi ayam blackpepper', 'nasi dengan potongan ayam krispi dan topping saus lada hitam', 10000, 0, 'bbq.JPG'),
('nasi4', 'nasi goreng blackpeper', 'nasi goreng dengan topping saus lada hitam', 10000, 0, 'sausasam2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `email` varchar(255) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`email`, `kata_sandi`, `nama_depan`, `nama_belakang`, `telepon`) VALUES
('atitar@gmail.com', '6c654cc7b760f722684bd598909b170d', 'Atitar', 'Aliwa', '098887887'),
('bagas@gmail.com', 'e56317913509f5f2ce2a55e97c19fa70', 'rahadiansyah', 'restu', '0989898'),
('erica@gmail.com', 'asd', 'Erica', ' Maulidina Bening', '08777236429'),
('hanum@gmail.com', 'asd', 'hilda', 'hanum', '0828374034'),
('truno1@gmail.com', 'asd', 'Truno ', 'Joyo', '0855567786');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `ib_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ib_nama` varchar(255) NOT NULL,
  `ib_email` varchar(30) NOT NULL,
  `ib_telfon` varchar(13) NOT NULL,
  `ib_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`ib_time`, `ib_nama`, `ib_email`, `ib_telfon`, `ib_pesan`) VALUES
('2017-05-26 16:44:39', 'maulidina', 'maulidina@gmail.com', '087767898777', 'ini mantap sekali, semoga ada yang rasa jamur ya'),
('2017-05-26 16:44:39', 'bening', 'bening@gmail.com', '089998766554', 'Semangat Er, Num'),
('2017-05-26 16:44:39', 'kumala', 'kumala@gmail.com', '089978765444', 'fp nya kelar, amin'),
('2017-05-26 16:45:20', 'Melisa', 'hilma@gmail.com', '08997876589', 'hehehehe.. baguss. amin\r\n'),
('2017-05-30 15:26:09', 'dddd', 'baggas@gmail.com', '09876543', 'yeyeyeye');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id_detail` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `id_nasi` varchar(255) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id_detail`, `orderid`, `id_nasi`, `hargajual`, `jumlah`) VALUES
(1, 937, 'nasi0', 10000, 10),
(2, 937, 'nasi1', 10000, 10),
(6, 123, 'nasi0', 10000, 19),
(7, 889, 'nasi4', 10000, 40),
(8, 889, 'nasi2', 10000, 10),
(9, 51, 'nasi0', 10000, 10),
(10, 51, 'nasi1', 10000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `emailuser` varchar(255) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `jam_kirim` varchar(255) NOT NULL,
  `alamat_kirim` varchar(255) NOT NULL,
  `status_order` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id`, `emailuser`, `tanggal_pesan`, `tanggal_kirim`, `jam_kirim`, `alamat_kirim`, `status_order`) VALUES
(1, 937, 'hanum@gmail.com', '2017-05-30', '2017-05-31', '19.00', 'Keputih Gang II 17', 'terkirim'),
(2, 123, 'atitar@gmail.com', '2017-05-09', '2017-05-09', '18.00', 'Keputih Gang II/89', 'proses'),
(3, 889, 'erica@gmail.com', '2017-05-16', '2017-05-31', '18.00', 'Gebang', 'proses'),
(4, 51, 'bagas@gmail.com', '2017-05-30', '2017-12-12', '13.00', 'keputih ii', 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `base_menu`
--
ALTER TABLE `base_menu`
  ADD PRIMARY KEY (`id_nasi`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`email`),
  ADD KEY `username` (`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `emailuser` (`emailuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`emailuser`) REFERENCES `datauser` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
