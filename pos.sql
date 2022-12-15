-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(200) NOT NULL,
  `norek` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `norek`, `nama`) VALUES
(1, 'Mandiri', '3378290009', 'Halim Indra Kusuma'),
(2, 'Bank Jateng', '2234590009', 'Dimas Indra Kusuma');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `ket_barang` text NOT NULL,
  `stok` int(11) NOT NULL,
  `hrg_jual` double NOT NULL,
  `hrg_beli` double NOT NULL,
  `hrg_normal` double NOT NULL,
  `hrg_reseller` double NOT NULL,
  `hrg_grosir` double NOT NULL,
  `tanggal` date NOT NULL,
  `brg_id_kategori` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `ket_barang`, `stok`, `hrg_jual`, `hrg_beli`, `hrg_normal`, `hrg_reseller`, `hrg_grosir`, `tanggal`, `brg_id_kategori`, `status`) VALUES
(1, 'Baju Adidas', 'Baju semua jenis kelamin', 50, 50000, 40000, 45000, 48000, 52000, '2022-07-21', 1, 'Ready'),
(2, 'Baju Nike', 'baju semua jenis', 200, 50000, 40000, 55000, 48000, 52000, '2022-07-26', 2, 'Ready'),
(3, 'Baju Tidur', 'ahfhghwogpowje', 40, 54000, 40000, 50000, 48000, 52000, '2022-07-26', 1, 'Ready'),
(4, 'Baju Bangun', 'Lanang Punya', 40, 54000, 40000, 50000, 48000, 52000, '2022-07-26', 2, 'Ready'),
(5, 'Celana kotak', 'dsadasds', 50, 50000, 40000, 52000, 48000, 52000, '2022-07-26', 1, 'Habis');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `level_cust` varchar(200) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `level_cust`, `nama_customer`, `kota`, `kode_pos`, `telp`, `email`, `alamat`) VALUES
(1, 'Dropshiper', 'Rudi Habibi', 'Semarang City', 57099, '08788855995', 'rudihabibi@gmail.com', 'Jalan Tawangsari Selatan No.104\r\nBanyamanik, Tawangsari, Semarang'),
(2, 'Reseller', 'Andrean Kento', 'Jakarta Selatan', 10092, '088986996668', 'andreankento@gmail.com', 'Jalan Kapuas No.10\r\nRawa Jati, Jatinagor, Jakarta Selatan\r\n(Selatan Alfamood)'),
(3, 'Pribadi', 'Reno Vovilar', 'Pontianak', 60098, '085889889778', 'renovilar@gmail.com', 'Jalan Raya Timuran 90\r\nRawa Besar, Pontianak, Kalimantan Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `resi` varchar(50) NOT NULL,
  `det_id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_brg`
--

CREATE TABLE `kategori_brg` (
  `id_kategori` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `kategori_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_brg`
--

INSERT INTO `kategori_brg` (`id_kategori`, `kode_barang`, `kategori_barang`) VALUES
(1, 'A001', 'Contoh Kategori 1'),
(2, 'A002', 'Contoh Kategori 2');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `agen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `agen`) VALUES
(1, 'JNE'),
(2, 'JNT'),
(3, 'Tiki'),
(4, 'Wahana'),
(5, 'Lion Parcel'),
(6, 'Pos Indonesia'),
(7, 'KAI');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `tipe` enum('produsen','owner','distributor') NOT NULL,
  `telp` varchar(200) NOT NULL,
  `alamat_toko` text NOT NULL,
  `deskripsi_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_order` int(11) NOT NULL,
  `order_id_toko` int(11) NOT NULL,
  `order_id_barang` int(11) NOT NULL,
  `order_id_cust` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` text NOT NULL,
  `chanel` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `ongkir` double NOT NULL,
  `status` varchar(200) NOT NULL,
  `order_id_bank` int(11) NOT NULL,
  `order_id_kurir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `brg_id_kategori` (`brg_id_kategori`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `det_id_order` (`det_id_order`);

--
-- Indexes for table `kategori_brg`
--
ALTER TABLE `kategori_brg`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_id_cust` (`order_id_cust`),
  ADD KEY `order_id_barang` (`order_id_barang`),
  ADD KEY `order_id_toko` (`order_id_toko`),
  ADD KEY `order_id_bank` (`order_id_bank`),
  ADD KEY `order_id_kurir` (`order_id_kurir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_brg`
--
ALTER TABLE `kategori_brg`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`brg_id_kategori`) REFERENCES `kategori_brg` (`id_kategori`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`det_id_order`) REFERENCES `transaksi` (`id_order`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`order_id_bank`) REFERENCES `bank` (`id_bank`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`order_id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`order_id_toko`) REFERENCES `toko` (`id_toko`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`order_id_cust`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`order_id_kurir`) REFERENCES `kurir` (`id_kurir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
