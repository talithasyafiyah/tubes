-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 02:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `no` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `produk` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`no`, `id_barang`, `produk`, `perusahaan`, `stok`, `harga`) VALUES
(1, 101, 'Bimoli', 'PT. Salim Ivomas Pratama Tbk', 15, 'Rp 36.000'),
(2, 102, 'Sanco', 'PT. Mikie Oleo Nabati', 20, 'Rp 39.000'),
(3, 103, 'Sania', 'PT. Putra Mas Dua Saudara', 10, 'Rp 37.000'),
(4, 104, 'Filma', 'PT. Sinar Mas Agro', 18, 'Rp 30.000'),
(5, 105, 'Fortune', 'PT. Putra Mas Dua Saudara', 21, 'Rp 39.000'),
(6, 106, 'Tropical', 'PT. Bina Karya Prima', 18, 'Rp 37.000'),
(7, 201, 'Segitiga Biru', 'PT. Indofood Sukses Makmur Tbk', 39, 'Rp 12.500'),
(8, 202, 'Cakra Kembar', 'PT. Indofood Sukses Makmur Tbk', 20, 'Rp 10.500'),
(9, 203, 'Lencana Merah', 'PT. Indofood Sukses Makmur Tbk', 14, 'Rp 8.000'),
(10, 204, 'Tulip', 'PT. Wilmar Nabati Indonesia', 29, 'Rp 9.000'),
(11, 205, 'Golden Angel', 'PT. Bungasari Flour Mills Indonesia', 10, 'Rp 11.000'),
(12, 301, 'Lemonilo', 'PT. Lemonilo Indonesia Sehat', 34, 'Rp 7.200'),
(13, 302, 'Super Mie', 'PT. Indofood Sukses Makmur Tbk', 11, 'Rp 3.500'),
(14, 303, 'Indomie', 'PT. Indofood Sukses Makmur Tbk.', 40, 'Rp 3.000'),
(15, 304, 'Mie Sedap', 'PT. Wings food', 36, 'Rp 2.500'),
(16, 305, 'Inter Mie', 'PT. Indofood CBP Sukses Makmur Tbk', 19, 'Rp 1.000'),
(17, 401, 'Telur Ayam', 'Pondok Ayam Suka Maju Company', 200, 'Rp 1.500'),
(18, 501, 'Hilo', 'PT. Nutrifood Indonesia', 12, 'Rp 73.500'),
(19, 502, 'Dancow', 'PT. Nestle Indonesia', 15, 'Rp 75.000'),
(20, 503, 'Enfagrow', 'PT. Mead Johnson Indonesia', 8, 'Rp 246.000'),
(21, 504, 'Anlene', 'PT. Fonterra Brands Indonesia', 11, 'Rp 67.000'),
(22, 505, 'Milo', 'PT. Nestle Indonesia', 29, 'Rp 79.000'),
(23, 506, 'Frisian Flag', 'PT. Frisian Flag Indonesia', 26, 'Rp 20.000'),
(24, 601, 'Aqua', 'PT. Aqua Golden Mississippi', 42, 'Rp 5.000'),
(25, 602, 'Le Minerale', 'PT. Tirta Fresindo Jaya', 16, 'Rp 3.000'),
(26, 603, 'Vit', 'PT. Tirta Investama', 9, 'Rp 4.000'),
(27, 604, 'Evian', 'PT. Danone', 18, 'Rp 11.000'),
(28, 605, 'Cleo', 'PT. Sariguna Primatirta Tbk', 20, 'Rp 2.500'),
(29, 701, 'Rinso', 'PT. Unilever Indonesia', 23, 'Rp 17.000'),
(30, 702, 'Daia', 'PT. Wings Surya ', 11, 'Rp 18.000'),
(31, 703, 'Attack', 'PT. Kao Indonesia', 17, 'Rp 18.000'),
(32, 704, 'Boom', 'PT.  Cipta Segar Harum', 7, 'Rp 5.000'),
(33, 705, 'Jaz 1', 'PT. Kao indonesia', 23, 'Rp 16.500'),
(34, 706, 'Smart', 'PT. Wings Surya', 3, 'Rp 23.700'),
(35, 801, 'Gas Elpiji', 'PT. Industri Telekomunikasi Indonesia', 4, 'Rp 300.000'),
(36, 901, 'Nuvo', 'PT. Jaya Utama', 30, 'Rp 4.000'),
(37, 902, 'Lux', 'PT. Unilever Indonesia', 8, 'Rp 4.000'),
(38, 903, 'Citra', 'PT. Unilever Indonesia', 14, 'Rp 2.500'),
(39, 904, 'Giv', 'PT. Wings Surya', 17, 'Rp 2.500'),
(40, 905, 'Dettol', 'PT. Reckitt Benckiser', 19, 'Rp 5.000'),
(41, 906, 'Lifebuoy', 'PT. Unilever', 27, 'Rp 5.000'),
(42, 1001, 'Sunsilk', 'PT. Unilever Indonesia', 9, 'Rp 31.500'),
(43, 1002, 'Clear', 'PT. Unilever Indonesia', 21, 'Rp 60.000'),
(44, 1003, 'Dove', 'PT. Unilever Indonesia', 5, 'Rp 50.000'),
(45, 1004, 'Tresemme', 'PT. Unilever Indonesia', 11, 'Rp 50.000'),
(46, 1005, 'Head and Shoulders', 'PT. Procter and Gamble', 28, 'Rp 54.300'),
(47, 1006, 'Rejoice', 'PT. Procter and Gamble', 29, 'Rp 62.000'),
(48, 1007, 'Pantene', 'PT. Procter and Gamble', 13, 'Rp 64.000'),
(49, 1101, 'Chitato', 'PT. Indofood Sukses Makmur', 12, 'Rp 19.000'),
(50, 1102, 'Salt Cheese', 'PT. Khong Guan', 15, 'Rp 9.000'),
(51, 1103, 'Bengbeng', 'PT. Mayora Indah', 31, 'Rp 4.000'),
(52, 1104, 'Lays', 'PT. Indofood Fritolay Makmur', 21, 'Rp 17.000'),
(53, 1105, 'Nextar', 'PT. Kaldu Sari Nabati Indonesia', 29, 'Rp 3.000'),
(54, 1106, 'Taro', 'PT. Tiga Pilar Sejahtera Tbk', 26, 'Rp 4.000'),
(55, 1107, 'Tango', 'PT. Ultra Prima Abadi', 16, 'Rp 12.000'),
(56, 1108, 'Kitkat', 'PT. Nestle Indonesia', 18, 'Rp 7.000'),
(57, 1109, 'Tao Kae Noi', 'Tao Kae Noi Company', 8, 'Rp 15.000'),
(58, 1201, 'Maknyus', 'PT. Tiga Pilar Sejahtera Food Tbk', 10, 'Rp 62.000'),
(59, 1202, 'Hariku', 'PT. Kirana Food', 12, 'Rp 70.000'),
(60, 1203, 'B.M.W', 'PT. Food Station Tjipinang Jaya', 8, 'Rp 275.000'),
(61, 1204, 'Fortune', 'PT. Wilmar Indonesia', 7, 'Rp 61.000'),
(62, 1205, 'Pandan Wangi', 'PT. Karya Baru Indonesia', 3, 'Rp 79.500'),
(63, 1301, 'Sikat Gigi', 'PT. Jaya Utama Santikah', 15, 'Rp 8.000'),
(64, 1302, 'Termos Lion Air', 'PT. Cahaya Perdana Plastics', 2, 'Rp 75.000'),
(65, 1303, 'Botol Tupperware', 'PT. Tupperware Indonesia', 26, 'Rp 110.000'),
(66, 1401, 'Pensil Faber-Castell', 'PT. A.W. Faber-Castell Indonesia', 43, 'Rp 6.000'),
(67, 1402, 'Pulpen Faster', 'PT. Standardpen', 28, 'Rp 2.000'),
(68, 1403, 'Buku Tulis', 'PT. Sinar Dunia', 53, 'Rp 10.000'),
(69, 1404, 'Penghapus Faber-Castell', 'PT. A.W. Faber-Castell Indonesia', 42, 'Rp 4.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
