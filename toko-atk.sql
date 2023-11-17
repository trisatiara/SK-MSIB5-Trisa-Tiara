-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 12:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-atk`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `nama_brand`) VALUES
(1, 'Joyko'),
(2, 'Kenko'),
(3, 'Faber Castell'),
(4, 'Deli'),
(5, 'Biola'),
(6, 'Butterfly'),
(7, 'Sinar Dunia');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Alat Tulis'),
(2, 'Alat Ukur'),
(3, 'Buku'),
(4, 'Kertas'),
(5, 'Map'),
(6, 'Pemotong'),
(7, 'Penjepit Kertas'),
(8, 'Pewarna'),
(9, 'Perekat');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `harga`, `stok`, `id_kategori`, `id_brand`) VALUES
(1, 'Gel Pen 0.5 mm', 'img/pena joyko.jpg', 5000, 75, 1, 1),
(2, 'Pensil 2B', 'img/pensil 2b.jpg', 3000, 40, 1, 3),
(3, 'Glue Stick 8 gr', 'img/glue stick.jpg', 2800, 52, 9, 2),
(4, 'Map Kertas', 'img/map kertas.jpg', 2000, 40, 5, 5),
(5, 'Penggaris 30 cm', 'img/penggaris.jpg', 4000, 24, 2, 6),
(6, 'Staples HD-10CL ', 'img/staples.jpg', 9000, 70, 7, 1),
(7, 'Buku Gambar 20 lbr', 'img/buku gambar.jpg', 6000, 45, 3, 4),
(8, 'Cutter L500', 'img/cutter.jpg', 16000, 30, 6, 2),
(9, 'Kertas A4 75 gr ', 'img/kertas a4.jpg', 51000, 15, 4, 7),
(10, 'Crayon 24 Warna ', 'img/crayon.jpg', 32000, 7, 8, 1),
(11, 'Jangka MS-55 ', 'img/jangka.jpg', 11000, 10, 2, 1),
(12, 'Buku Tulis 58 lbr', 'img/buku tulis.jpg', 4500, 90, 3, 7),
(13, 'Selotip 12mm x 45m', 'img/selotip.jpg', 2500, 34, 9, 1),
(14, 'Pensil Warna Isi 24', 'img/pensil warna.jpg', 54000, 20, 8, 3),
(15, 'Gunting Stainless', 'img/gunting.jpg', 6500, 42, 6, 1),
(16, 'Paper Clip 29mm', 'img/paper clip.jpg', 5000, 17, 7, 4),
(17, 'Loose Leaf A5-100', 'img/loose leaf.jpg', 8500, 28, 4, 2),
(18, 'Tip Ex Cair ', 'img/tipex.jpg', 2800, 30, 1, 1),
(19, 'Map Plastik Isi 5', 'img/map plastik.jpg', 13000, 60, 5, 4),
(20, 'Penghapus Pensil ', 'img/penghapus.jpg', 2600, 58, 1, 3),
(24, 'Cat Air 12 Warna', 'img/cat air.jpg', 28000, 7, 8, 1),
(25, 'Binder A5', 'img/binder.jpg', 16000, 34, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`,`id_brand`),
  ADD KEY `id_brand` (`id_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
