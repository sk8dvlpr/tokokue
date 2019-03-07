-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 02:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_kue`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_admin`
--

CREATE TABLE `ms_admin` (
  `id_admin` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_aktif` tinyint(1) NOT NULL,
  `status_hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_admin`
--

INSERT INTO `ms_admin` (`id_admin`, `nama`, `email`, `username`, `password`, `status_aktif`, `status_hapus`) VALUES
('19a89666-e24d-411e-b836-09506d6b32c1', 'muhammad faturrahman', 'admin@toko-kue.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
('b927b66b-332a-4a45-96b8-3d069384455d', 'salast putri ramadhani', 'marketing@toko-kue.com', 'marketing', 'a286075043d42dcdce8d6668944e827f7a64024f', 1, 1),
('c18718f1-f5cf-4322-8e63-cc09966a5e0a', 'rahmat', 'sales@toko-kue.com', 'sales', '59248c4dae276a021cb296d2ee0e6a0c962a8d7f', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_kue`
--

CREATE TABLE `ms_kue` (
  `id_kue` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(150) NOT NULL,
  `status_kue` tinyint(1) NOT NULL,
  `status_hapus` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kue`
--

INSERT INTO `ms_kue` (`id_kue`, `nama`, `kategori`, `harga`, `keterangan`, `foto`, `status_kue`, `status_hapus`, `created_date`) VALUES
('203ce1fa-ec68-4547-9a23-c87f85543193', 'chocolate amber', 'kue coklat', 462000, 'Chocolate Amber', 'http://localhost/toko-kue/assets/images/cake/494190-CHOCOLATE-AMBER2_1800x1800.jpg', 1, 1, '2018-11-28 07:26:00'),
('22818b5d-b9f3-4398-a01e-8c5d9bc8e902', 'Chocolate Sunday', 'Kue Coklat', 352000, 'Chocolate Sunday', 'http://localhost/toko-kue/assets/images/cake/245515-CHOCOLATE-SUNDAY1_1800x1800.jpg', 1, 1, '2018-11-28 07:23:01'),
('26ae066e-d338-4ddd-bee8-e26efff174ec', 'Lychee Rose', 'kue ulang tahun', 385000, 'Lychee Rose', 'http://localhost/toko-kue/assets/images/cake/878668-LYCHEE-ROSE_1800x1800.jpg', 1, 1, '2018-12-17 02:15:57'),
('2f07bcbf-bf8e-4ead-97a4-49bebc11381c', 'Popcorn Caramello', 'kue ulang tahun', 462000, 'Popcorn Caramello', 'http://localhost/toko-kue/assets/images/cake/740386-CARAMELLO_POPCORN1_1800x1800.jpg', 1, 1, '2018-12-17 02:16:56'),
('3a1d6f44-791f-4b02-b430-2b5f8aae9c5d', 'Lady Grey', 'kue pesta', 385000, 'Lady Grey', 'http://localhost/toko-kue/assets/images/cake/248408-LADY-GREY_1800x1800.jpg', 1, 1, '2018-12-17 02:14:00'),
('3d7803bb-0e27-493c-b956-da6283f75682', 'Cookie Monster', 'Kue Ulang Tahun', 418000, 'Cookie Monster', 'http://localhost/toko-kue/assets/images/cake/375892-COOKIE-MONSTER1_1800x1800.jpg', 1, 1, '2018-11-28 07:21:57'),
('469de112-9adc-48aa-8ba8-fc1bfe85a645', 'ovo milo', 'kue coklat', 385000, 'Ovo Milo', 'http://localhost/toko-kue/assets/images/cake/158713-OVOMILO-BARU-2_1800x1800.jpg', 1, 1, '2018-11-28 07:25:14'),
('6277dc48-24da-43b4-830e-1c9b5d18a3e8', 'lola signature', 'kue coklat', 385000, 'Lola Signature', 'http://localhost/toko-kue/assets/images/cake/487710-LOLA-BAR-_ROUND_1800x1800.jpg', 1, 1, '2018-12-05 09:47:30'),
('6ae8008b-8d91-4285-9b43-1dbca0804e65', 'Chocolate Madness', 'Kue Coklat', 385000, 'Chocolate Madness', 'http://localhost/toko-kue/assets/images/cake/638362-CHOCOLATE-MADNESS_1800x1800.jpg', 1, 1, '2018-11-28 07:24:26'),
('6ca4abf1-5d90-4b2f-b912-a0afe27f1916', 'Banana Split', 'kue pesta', 385000, 'Banana Split', 'http://localhost/toko-kue/assets/images/cake/29208-BANANA-SPLIT1_1800x1800.jpg', 1, 1, '2018-12-17 02:13:08'),
('78e95c57-8f09-4df4-bca5-a64bceb8a524', 'Mango Magic', 'kue pesta', 385000, 'Mango Magic', 'http://localhost/toko-kue/assets/images/cake/903683-MANGO-CAKE_1800x1800.jpg', 1, 1, '2018-12-17 02:09:13'),
('a0eb8944-0f2f-4edc-ad4e-87a15422c619', 'Rainbow Pinata', 'kue pesta', 462000, 'Rainbow Pinata', 'http://localhost/toko-kue/assets/images/cake/932689-PINATA-CAKE_1800x1800.jpg', 1, 1, '2018-12-17 02:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `ms_transaksi`
--

CREATE TABLE `ms_transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_kue` varchar(50) NOT NULL,
  `tanggal_pesanan` datetime NOT NULL,
  `status_keranjang` tinyint(1) NOT NULL,
  `status_deal` tinyint(1) NOT NULL,
  `status_pemesanan` tinyint(1) NOT NULL,
  `status_pengiriman` tinyint(1) NOT NULL,
  `status_batal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_transaksi`
--

INSERT INTO `ms_transaksi` (`id_transaksi`, `id_user`, `id_kue`, `tanggal_pesanan`, `status_keranjang`, `status_deal`, `status_pemesanan`, `status_pengiriman`, `status_batal`) VALUES
('084324dd-00d5-4ee2-b8de-1d9a9faf7d86', '7a5fe52d-fcd8-48f4-a421-69606ad80aa5', '22818b5d-b9f3-4398-a01e-8c5d9bc8e902', '2018-12-06 01:29:58', 1, 0, 0, 0, 0),
('1bf9db95-fd25-4306-bd27-c46b2a193fe7', '14382e04-f714-4fc7-849b-d3f308d564ac', '22818b5d-b9f3-4398-a01e-8c5d9bc8e902', '2018-12-06 10:06:53', 1, 1, 1, 1, 0),
('23a8831f-c244-4997-b132-b4fe37d2cab6', '14382e04-f714-4fc7-849b-d3f308d564ac', '203ce1fa-ec68-4547-9a23-c87f85543193', '2018-12-06 12:27:19', 1, 0, 0, 0, 0),
('28900806-2f3f-4f4d-9366-12089a5bc96a', '33ec9568-bb12-4669-bb97-da1b4b45606d', '203ce1fa-ec68-4547-9a23-c87f85543193', '2018-12-10 03:34:48', 1, 1, 1, 1, 0),
('2c49ea35-c2f1-45ef-b24b-b12976ab5dcc', '14382e04-f714-4fc7-849b-d3f308d564ac', '203ce1fa-ec68-4547-9a23-c87f85543193', '2018-12-06 10:06:36', 1, 0, 0, 0, 1),
('5c7d5aea-b029-4e46-bb7a-240744c9adbd', '14382e04-f714-4fc7-849b-d3f308d564ac', '203ce1fa-ec68-4547-9a23-c87f85543193', '2018-12-06 12:26:39', 1, 0, 0, 0, 1),
('764455a9-0ae1-4824-808e-bd78b11e19ed', '8e4a2efc-c6b4-4b5e-b2bd-735bfcbb7402', '3d7803bb-0e27-493c-b956-da6283f75682', '2018-12-17 04:12:33', 1, 1, 0, 0, 0),
('76ecbf7f-cb47-46af-afec-12facf8b629f', '33ec9568-bb12-4669-bb97-da1b4b45606d', '22818b5d-b9f3-4398-a01e-8c5d9bc8e902', '2018-12-10 03:34:32', 1, 0, 0, 0, 0),
('79229c07-91a7-4744-8625-7b2d0479b9a8', '8e4a2efc-c6b4-4b5e-b2bd-735bfcbb7402', '469de112-9adc-48aa-8ba8-fc1bfe85a645', '2018-12-17 04:13:55', 1, 0, 0, 0, 0),
('a9002141-5a3d-4a18-a5ae-41fa708c9954', '14382e04-f714-4fc7-849b-d3f308d564ac', '3d7803bb-0e27-493c-b956-da6283f75682', '2018-12-06 01:19:58', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `status_hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`id_user`, `nama_lengkap`, `alamat`, `email`, `password`, `tanggal_daftar`, `status_user`, `status_hapus`) VALUES
('14382e04-f714-4fc7-849b-d3f308d564ac', 'Salast Putri Ramadhani', 'Bekasi Kota', 'salastputri@gmail.com', '36112ba0a7259f1d6776d85e122fdff687495cfb', '2018-12-05 10:41:26', 1, 1),
('33ec9568-bb12-4669-bb97-da1b4b45606d', 'Rahmat', 'Bekasi', 'rahmat@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2018-12-10 03:33:27', 1, 0),
('7a5fe52d-fcd8-48f4-a421-69606ad80aa5', 'Muhammad Faturrahman', 'Jl.Batara Wisnu Blok D14 No.3. Perum Bekasi Timur Permai.', 'fr62190@gmail.com', '36112ba0a7259f1d6776d85e122fdff687495cfb', '2018-12-05 10:39:46', 0, 1),
('8e4a2efc-c6b4-4b5e-b2bd-735bfcbb7402', 'Rachmat Nofriyanto', 'Tambun', 'rachmat33@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2018-12-17 04:10:16', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_admin`
--
ALTER TABLE `ms_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ms_kue`
--
ALTER TABLE `ms_kue`
  ADD PRIMARY KEY (`id_kue`);

--
-- Indexes for table `ms_transaksi`
--
ALTER TABLE `ms_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`,`id_kue`),
  ADD KEY `id_kue` (`id_kue`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ms_transaksi`
--
ALTER TABLE `ms_transaksi`
  ADD CONSTRAINT `ms_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `ms_user` (`id_user`),
  ADD CONSTRAINT `ms_transaksi_ibfk_2` FOREIGN KEY (`id_kue`) REFERENCES `ms_kue` (`id_kue`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
