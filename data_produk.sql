-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
  `kategori` varchar(100) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`no`, `id_barang`, `produk`, `kategori`, `perusahaan`, `stok`, `harga`) VALUES
(1, 101, 'Bimoli', 'Minyak Goreng', 'PT. Salim Ivomas Pratama Tbk', 15, 'Rp 36.000'),
(2, 102, 'Sanco', 'Minyak Goreng', 'PT. Mikie Oleo Nabati', 20, 'Rp 39.000'),
(3, 103, 'Sania', 'Minyak Goreng', 'PT. Putra Mas Dua Saudara', 10, 'Rp 37.000'),
(4, 104, 'Filma', 'Minyak Goreng', 'PT. Sinar Mas Agro', 18, 'Rp 30.000'),
(5, 105, 'Fortune', 'Minyak Goreng', 'PT. Putra Mas Dua Saudara', 21, 'Rp 39.000'),
(6, 106, 'Tropical', 'Minyak Goreng', 'PT. Bina Karya Prima', 18, 'Rp 37.000'),
(7, 201, 'Segitiga Biru', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 39, 'Rp 12.500'),
(8, 202, 'Cakra Kembar', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 20, 'Rp 10.500'),
(9, 203, 'Lencana Merah', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 14, 'Rp 8.000'),
(10, 204, 'Tulip', 'Tepung', 'PT. Wilmar Nabati Indonesia', 29, 'Rp 9.000'),
(11, 205, 'Golden Angel', 'Tepung', 'PT. Bungasari Flour Mills Indonesia', 10, 'Rp 11.000'),
(12, 301, 'Lemonilo', 'Mie', 'PT. Lemonilo Indonesia Sehat', 34, 'Rp 7.200'),
(13, 302, 'Super Mie', 'Mie', 'PT. Indofood Sukses Makmur Tbk', 11, 'Rp 3.500'),
(14, 303, 'Indomie', 'Mie', 'PT. Indofood Sukses Makmur Tbk.', 40, 'Rp 3.000'),
(15, 304, 'Mie Sedap', 'Mie', 'PT. Wings food', 36, 'Rp 2.500'),
(16, 305, 'Inter Mie', 'Mie', 'PT. Indofood CBP Sukses Makmur Tbk', 19, 'Rp 1.000'),
(17, 401, 'Telur Ayam', 'Telur', 'Pondok Ayam Suka Maju Company', 54, 'Rp 1.500'),
(18, 501, 'Hilo', 'Susu', 'PT. Nutrifood Indonesia', 12, 'Rp 73.500'),
(19, 502, 'Dancow', 'Susu', 'PT. Nestle Indonesia', 15, 'Rp 75.000'),
(20, 503, 'Enfagrow', 'Susu', 'PT. Mead Johnson Indonesia', 8, 'Rp 246.000'),
(21, 504, 'Anlene', 'Susu', 'PT. Fonterra Brands Indonesia', 11, 'Rp 67.000'),
(22, 505, 'Milo', 'Susu', 'PT. Nestle Indonesia', 29, 'Rp 79.000'),
(23, 506, 'Frisian Flag', 'Susu', 'PT. Frisian Flag Indonesia', 26, 'Rp 20.000'),
(24, 601, 'Aqua', 'Air Mineral', 'PT. Aqua Golden Mississippi', 42, 'Rp 5.000'),
(25, 602, 'Le Minerale', 'Air Mineral', 'PT. Tirta Fresindo Jaya', 16, 'Rp 3.000'),
(26, 603, 'Vit', 'Air Mineral', 'PT. Tirta Investama', 9, 'Rp 4.000'),
(27, 604, 'Evian', 'Air Mineral', 'PT. Danone', 18, 'Rp 11.000'),
(28, 605, 'Cleo', 'Air Mineral', 'PT. Sariguna Primatirta Tbk', 20, 'Rp 2.500'),
(29, 701, 'Rinso', 'Detergen', 'PT. Unilever Indonesia', 23, 'Rp 17.000'),
(30, 702, 'Daia', 'Detergen', 'PT. Wings Surya ', 11, 'Rp 18.000'),
(31, 703, 'Attack', 'Detergen', 'PT. Kao Indonesia', 17, 'Rp 18.000'),
(32, 704, 'Boom', 'Detergen', 'PT.  Cipta Segar Harum', 7, 'Rp 5.000'),
(33, 705, 'Jaz 1', 'Detergen', 'PT. Kao indonesia', 23, 'Rp 16.500'),
(34, 706, 'Smart', 'Detergen', 'PT. Wings Surya', 3, 'Rp 23.700'),
(35, 801, 'Gas Elpiji', 'Gas', 'PT. Industri Telekomunikasi Indonesia', 4, 'Rp 300.000'),
(36, 901, 'Nuvo', 'Sabun', 'PT. Jaya Utama', 30, 'Rp 4.000'),
(37, 902, 'Lux', 'Sabun', 'PT. Unilever Indonesia', 8, 'Rp 4.000'),
(38, 903, 'Citra', 'Sabun', 'PT. Unilever Indonesia', 14, 'Rp 2.500'),
(39, 904, 'Giv', 'Sabun', 'PT. Wings Surya', 17, 'Rp 2.500'),
(40, 905, 'Dettol', 'Sabun', 'PT. Reckitt Benckiser', 19, 'Rp 5.000'),
(41, 906, 'Lifebuoy', 'Sabun', 'PT. Unilever', 27, 'Rp 5.000'),
(42, 1001, 'Sunsilk', 'Shampoo', 'PT. Unilever Indonesia', 9, 'Rp 31.500'),
(43, 1002, 'Clear', 'Shampoo', 'PT. Unilever Indonesia', 21, 'Rp 60.000'),
(44, 1003, 'Dove', 'Shampoo', 'PT. Unilever Indonesia', 5, 'Rp 50.000'),
(45, 1004, 'Tresemme', 'Shampoo', 'PT. Unilever Indonesia', 11, 'Rp 50.000'),
(46, 1005, 'Head and Shoulders', 'Shampoo', 'PT. Procter and Gamble', 28, 'Rp 54.300'),
(47, 1006, 'Rejoice', 'Shampoo', 'PT. Procter and Gamble', 29, 'Rp 62.000'),
(48, 1007, 'Pantene', 'Shampoo', 'PT. Procter and Gamble', 13, 'Rp 64.000'),
(49, 1101, 'Chitato', 'Makanan', 'PT. Indofood Sukses Makmur', 12, 'Rp 19.000'),
(50, 1102, 'Salt Cheese', 'Makanan', 'PT. Khong Guan', 15, 'Rp 9.000'),
(51, 1103, 'Bengbeng', 'Makanan', 'PT. Mayora Indah', 31, 'Rp 4.000'),
(52, 1104, 'Lays', 'Makanan', 'PT. Indofood Fritolay Makmur', 21, 'Rp 17.000'),
(53, 1105, 'Nextar', 'Makanan', 'PT. Kaldu Sari Nabati Indonesia', 29, 'Rp 3.000'),
(54, 1106, 'Taro', 'Makanan', 'PT. Tiga Pilar Sejahtera Tbk', 26, 'Rp 4.000'),
(55, 1107, 'Tango', 'Makanan', 'PT. Ultra Prima Abadi', 16, 'Rp 12.000'),
(56, 1108, 'Kitkat', 'Makanan', 'PT. Nestle Indonesia', 18, 'Rp 7.000'),
(57, 1109, 'Tao Kae Noi', 'Makanan', 'Tao Kae Noi Company', 8, 'Rp 15.000'),
(58, 1201, 'Maknyus', 'Beras', 'PT. Tiga Pilar Sejahtera Food Tbk', 10, 'Rp 62.000'),
(59, 1202, 'Hariku', 'Beras', 'PT. Kirana Food', 12, 'Rp 70.000'),
(60, 1203, 'B.M.W', 'Beras', 'PT. Food Station Tjipinang Jaya', 8, 'Rp 275.000'),
(61, 1204, 'Fortune', 'Beras', 'PT. Wilmar Indonesia', 7, 'Rp 61.000'),
(62, 1205, 'Pandan Wangi', 'Beras', 'PT. Karya Baru Indonesia', 3, 'Rp 79.500'),
(63, 1301, 'Sikat Gigi', 'Alat Rumah Tangga', 'PT. Jaya Utama Santikah', 15, 'Rp 8.000'),
(64, 1302, 'Termos Lion Air', 'Alat Rumah Tangga', 'PT. Cahaya Perdana Plastics', 2, 'Rp 75.000'),
(65, 1303, 'Botol Tupperware', 'Alat Rumah Tangga', 'PT. Tupperware Indonesia', 26, 'Rp 110.000'),
(66, 1401, 'Pensil Faber-Castell', 'Peralatan Sekolah', 'PT. A.W. Faber-Castell Indonesia', 43, 'Rp 6.000'),
(67, 1402, 'Pulpen Faster', 'Peralatan Sekolah', 'PT. Standardpen', 28, 'Rp 2.000'),
(68, 1403, 'Buku Tulis', 'Peralatan Sekolah', 'PT. Sinar Dunia', 53, 'Rp 10.000'),
(69, 1404, 'Penghapus Faber-Castell', 'Peralatan Sekolah', 'PT. A.W. Faber-Castell Indonesia', 42, 'Rp 4.000');

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
