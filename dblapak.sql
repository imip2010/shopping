-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 09:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblapak`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_chat`
--

CREATE TABLE `as_chat` (
  `chat_id` int(11) NOT NULL,
  `chat_from` int(11) NOT NULL,
  `chat_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent` datetime NOT NULL,
  `recd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_chat`
--

INSERT INTO `as_chat` (`chat_id`, `chat_from`, `chat_to`, `message`, `sent`, `recd`) VALUES
(7, 3, 2, 'haloo', '2018-08-29 11:15:37', 1),
(8, 2, 3, 'Ok', '2018-08-29 11:16:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `balanceID` int(5) NOT NULL,
  `balanceValue` varchar(20) NOT NULL,
  `balancePrice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balanceID`, `balanceValue`, `balancePrice`) VALUES
(1, '50000', '50000'),
(2, '100000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `balance_order`
--

CREATE TABLE `balance_order` (
  `balanceOrderID` int(5) NOT NULL,
  `memberID` int(50) NOT NULL,
  `balanceID` int(5) NOT NULL,
  `orderInvoice` varchar(30) NOT NULL,
  `statusDeposit` varchar(30) NOT NULL DEFAULT 'Pending',
  `bank` varchar(10) NOT NULL,
  `depoName` varchar(30) NOT NULL,
  `photoD` varchar(100) NOT NULL,
  `paidDate` datetime NOT NULL,
  `finish` char(1) NOT NULL,
  `total1` varchar(20) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance_order`
--

INSERT INTO `balance_order` (`balanceOrderID`, `memberID`, `balanceID`, `orderInvoice`, `statusDeposit`, `bank`, `depoName`, `photoD`, `paidDate`, `finish`, `total1`, `dateCreate`) VALUES
(1, 2, 2, 'ORD00001', 'Selesai', 'mandiri', 'Rudiansyah', 'bukti_transfer_1504016386_068f9e1d.jpg', '2018-05-04 05:26:03', '1', '100000', '2018-05-04 05:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `bankName` varchar(20) NOT NULL,
  `noRek` varchar(20) NOT NULL,
  `atasNama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankID`, `memberID`, `bankName`, `noRek`, `atasNama`) VALUES
(1, 0, 'Mandiri', '112345678', 'Bona'),
(2, 0, 'BRI', '098765432', 'Doni'),
(3, 0, 'BNI', '345672342', 'Siska'),
(4, 0, 'BCA', '234568809', 'Duma'),
(5, 0, 'BTN', '453452343', 'Iwik'),
(6, 0, 'Muamalat', '673452343', 'Lolita');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartID` int(5) NOT NULL,
  `productID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `expedition` varchar(150) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `estimate` varchar(30) DEFAULT NULL,
  `cost` int(20) DEFAULT NULL,
  `stockCart` int(11) NOT NULL,
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(5) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categorySeo` varchar(50) NOT NULL,
  `icons` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categorySeo`, `icons`, `title`, `banner`) VALUES
(29, 'Rumah Tangga', 'rumah-tangga', 'rumah_tangga.png', 'Produk diskon 5%', ''),
(30, 'Komputer Laptop', 'komputer-laptop', 'komputer.png', 'Komputer/Laptop', ''),
(31, 'Smartphone Tablet', 'smartphone-tablet', 'handphone.png', 'Smartphone/Tablet', ''),
(32, 'Elektronik', 'elektronik', 'elektronik.png', 'Elektronik', ''),
(33, 'Fashion Pria', 'fashion-pria', 'fashion_pria.png', 'Fashion Pria', ''),
(34, 'Camera', 'camera', 'kamera.png', 'Kamera', ''),
(35, 'Fashion Wanita', 'fashion-wanita', 'fashion_wanita.png', 'Fashion Wanita', ''),
(36, 'Sepeda', 'sepeda', 'sepeda.png', 'Sepeda/Olahraga', ''),
(37, 'Perlengkapan Bayi', 'perlengkapan-bayi', 'perlengkapan_bayi.png', 'Perlengkapan Bayi', ''),
(38, 'Fashion Anak', 'fashion-anak', 'fashion_anak.png', 'Fashion Anak', ''),
(39, 'Mobil', 'mobil', 'mobil.png', 'Mobil/Aksesoris', 'b1.png'),
(40, 'Makanan', 'makanan', 'food.png', 'Camilan', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_from` int(11) NOT NULL,
  `chat_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent` datetime NOT NULL,
  `recd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_from`, `chat_to`, `message`, `sent`, `recd`) VALUES
(15, 2, 3, 'test', '2017-11-22 03:01:24', 1),
(16, 2, 3, 'sadsad', '2017-11-22 03:03:26', 1),
(17, 3, 2, 'oo', '2017-11-22 03:04:29', 1),
(18, 2, 3, 'Hai', '2017-11-22 03:44:13', 1),
(19, 2, 3, 'test', '2017-11-25 01:42:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `compareID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `productID` int(5) NOT NULL,
  `compareDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`compareID`, `memberID`, `productID`, `compareDate`) VALUES
(1, 3, 1, '2018-01-09 09:01:34'),
(2, 3, 5, '2018-01-10 04:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courierID` int(5) NOT NULL,
  `courierName` varchar(100) NOT NULL,
  `courierType` char(1) NOT NULL,
  `courierDesc` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `cost_kg` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courierID`, `courierName`, `courierType`, `courierDesc`, `status`, `cost_kg`) VALUES
(1, 'pos', '', '', 'Y', 0),
(2, 'jne', '', '', 'Y', 0),
(3, 'tiki', 'U', '', 'Y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favoriteID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `productID` int(5) NOT NULL,
  `favoriteDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header1`
--

CREATE TABLE `header1` (
  `headerSatuID` int(5) NOT NULL,
  `satuImage` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y',
  `createDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header1`
--

INSERT INTO `header1` (`headerSatuID`, `satuImage`, `status`, `createDate`) VALUES
(1, 'header1.png', 'Y', '2018-02-01 04:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `header2`
--

CREATE TABLE `header2` (
  `headerDuaID` int(5) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `createDate` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header2`
--

INSERT INTO `header2` (`headerDuaID`, `icon`, `createDate`, `status`) VALUES
(14, '89nHBfsgAAHAAAABYAH05kXAADKVw.jpg!q70.jpg', '2018-05-04 09:04:16', 'Y'),
(16, '721v.jpg', '2018-05-04 09:09:18', 'Y'),
(17, 'Banner_Ads-03.jpg', '0000-00-00 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `header3`
--

CREATE TABLE `header3` (
  `headerTigaID` int(5) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y',
  `createDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header3`
--

INSERT INTO `header3` (`headerTigaID`, `icon`, `status`, `createDate`) VALUES
(2, 'banner3.jpg', 'Y', '2018-02-01 07:50:57'),
(3, 'banner1.jpg', 'Y', '2018-02-01 08:02:24'),
(4, 'banner2.jpg', 'Y', '2018-02-01 08:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten_kota`
--

CREATE TABLE `kabupaten_kota` (
  `id_kabupaten_kota` int(4) NOT NULL,
  `id_propinsi` int(4) NOT NULL,
  `type` varchar(200) NOT NULL,
  `nama_kabupaten_kota` varchar(200) NOT NULL,
  `kode_pos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten_kota`
--

INSERT INTO `kabupaten_kota` (`id_kabupaten_kota`, `id_propinsi`, `type`, `nama_kabupaten_kota`, `kode_pos`) VALUES
(1, 21, 'Kabupaten', 'Aceh Barat', 23681),
(2, 21, 'Kabupaten', 'Aceh Barat Daya', 23764),
(3, 21, 'Kabupaten', 'Aceh Besar', 23951),
(4, 21, 'Kabupaten', 'Aceh Jaya', 23654),
(5, 21, 'Kabupaten', 'Aceh Selatan', 23719),
(6, 21, 'Kabupaten', 'Aceh Singkil', 24785),
(7, 21, 'Kabupaten', 'Aceh Tamiang', 24476),
(8, 21, 'Kabupaten', 'Aceh Tengah', 24511),
(9, 21, 'Kabupaten', 'Aceh Tenggara', 24611),
(10, 21, 'Kabupaten', 'Aceh Timur', 24454),
(11, 21, 'Kabupaten', 'Aceh Utara', 24382),
(12, 32, 'Kabupaten', 'Agam', 26411),
(13, 23, 'Kabupaten', 'Alor', 85811),
(14, 19, 'Kota', 'Ambon', 97222),
(15, 34, 'Kabupaten', 'Asahan', 21214),
(16, 24, 'Kabupaten', 'Asmat', 99777),
(17, 1, 'Kabupaten', 'Badung', 80351),
(18, 13, 'Kabupaten', 'Balangan', 71611),
(19, 15, 'Kota', 'Balikpapan', 76111),
(20, 21, 'Kota', 'Banda Aceh', 23238),
(21, 18, 'Kota', 'Bandar Lampung', 35139),
(22, 9, 'Kabupaten', 'Bandung', 40311),
(23, 9, 'Kota', 'Bandung', 40111),
(24, 9, 'Kabupaten', 'Bandung Barat', 40721),
(25, 29, 'Kabupaten', 'Banggai', 94711),
(26, 29, 'Kabupaten', 'Banggai Kepulauan', 94881),
(27, 2, 'Kabupaten', 'Bangka', 33212),
(28, 2, 'Kabupaten', 'Bangka Barat', 33315),
(29, 2, 'Kabupaten', 'Bangka Selatan', 33719),
(30, 2, 'Kabupaten', 'Bangka Tengah', 33613),
(31, 11, 'Kabupaten', 'Bangkalan', 69118),
(32, 1, 'Kabupaten', 'Bangli', 80619),
(33, 13, 'Kabupaten', 'Banjar', 70619),
(34, 9, 'Kota', 'Banjar', 46311),
(35, 13, 'Kota', 'Banjarbaru', 70712),
(36, 13, 'Kota', 'Banjarmasin', 70117),
(37, 10, 'Kabupaten', 'Banjarnegara', 53419),
(38, 28, 'Kabupaten', 'Bantaeng', 92411),
(39, 5, 'Kabupaten', 'Bantul', 55715),
(40, 33, 'Kabupaten', 'Banyuasin', 30911),
(41, 10, 'Kabupaten', 'Banyumas', 53114),
(42, 11, 'Kabupaten', 'Banyuwangi', 68416),
(43, 13, 'Kabupaten', 'Barito Kuala', 70511),
(44, 14, 'Kabupaten', 'Barito Selatan', 73711),
(45, 14, 'Kabupaten', 'Barito Timur', 73671),
(46, 14, 'Kabupaten', 'Barito Utara', 73881),
(47, 28, 'Kabupaten', 'Barru', 90719),
(48, 17, 'Kota', 'Batam', 29413),
(49, 10, 'Kabupaten', 'Batang', 51211),
(50, 8, 'Kabupaten', 'Batang Hari', 36613),
(51, 11, 'Kota', 'Batu', 65311),
(52, 34, 'Kabupaten', 'Batu Bara', 21655),
(53, 30, 'Kota', 'Bau-Bau', 93719),
(54, 9, 'Kabupaten', 'Bekasi', 17837),
(55, 9, 'Kota', 'Bekasi', 17121),
(56, 2, 'Kabupaten', 'Belitung', 33419),
(57, 2, 'Kabupaten', 'Belitung Timur', 33519),
(58, 23, 'Kabupaten', 'Belu', 85711),
(59, 21, 'Kabupaten', 'Bener Meriah', 24581),
(60, 26, 'Kabupaten', 'Bengkalis', 28719),
(61, 12, 'Kabupaten', 'Bengkayang', 79213),
(62, 4, 'Kota', 'Bengkulu', 38229),
(63, 4, 'Kabupaten', 'Bengkulu Selatan', 38519),
(64, 4, 'Kabupaten', 'Bengkulu Tengah', 38319),
(65, 4, 'Kabupaten', 'Bengkulu Utara', 38619),
(66, 15, 'Kabupaten', 'Berau', 77311),
(67, 24, 'Kabupaten', 'Biak Numfor', 98119),
(68, 22, 'Kabupaten', 'Bima', 84171),
(69, 22, 'Kota', 'Bima', 84139),
(70, 34, 'Kota', 'Binjai', 20712),
(71, 17, 'Kabupaten', 'Bintan', 29135),
(72, 21, 'Kabupaten', 'Bireuen', 24219),
(73, 31, 'Kota', 'Bitung', 95512),
(74, 11, 'Kabupaten', 'Blitar', 66171),
(75, 11, 'Kota', 'Blitar', 66124),
(76, 10, 'Kabupaten', 'Blora', 58219),
(77, 7, 'Kabupaten', 'Boalemo', 96319),
(78, 9, 'Kabupaten', 'Bogor', 16911),
(79, 9, 'Kota', 'Bogor', 16119),
(80, 11, 'Kabupaten', 'Bojonegoro', 62119),
(81, 31, 'Kabupaten', 'Bolaang Mongondow (Bolmong)', 95755),
(82, 31, 'Kabupaten', 'Bolaang Mongondow Selatan', 95774),
(83, 31, 'Kabupaten', 'Bolaang Mongondow Timur', 95783),
(84, 31, 'Kabupaten', 'Bolaang Mongondow Utara', 95765),
(85, 30, 'Kabupaten', 'Bombana', 93771),
(86, 11, 'Kabupaten', 'Bondowoso', 68219),
(87, 28, 'Kabupaten', 'Bone', 92713),
(88, 7, 'Kabupaten', 'Bone Bolango', 96511),
(89, 15, 'Kota', 'Bontang', 75313),
(90, 24, 'Kabupaten', 'Boven Digoel', 99662),
(91, 10, 'Kabupaten', 'Boyolali', 57312),
(92, 10, 'Kabupaten', 'Brebes', 52212),
(93, 32, 'Kota', 'Bukittinggi', 26115),
(94, 1, 'Kabupaten', 'Buleleng', 81111),
(95, 28, 'Kabupaten', 'Bulukumba', 92511),
(96, 16, 'Kabupaten', 'Bulungan (Bulongan)', 77211),
(97, 8, 'Kabupaten', 'Bungo', 37216),
(98, 29, 'Kabupaten', 'Buol', 94564),
(99, 19, 'Kabupaten', 'Buru', 97371),
(100, 19, 'Kabupaten', 'Buru Selatan', 97351),
(101, 30, 'Kabupaten', 'Buton', 93754),
(102, 30, 'Kabupaten', 'Buton Utara', 93745),
(103, 9, 'Kabupaten', 'Ciamis', 46211),
(104, 9, 'Kabupaten', 'Cianjur', 43217),
(105, 10, 'Kabupaten', 'Cilacap', 53211),
(106, 3, 'Kota', 'Cilegon', 42417),
(107, 9, 'Kota', 'Cimahi', 40512),
(108, 9, 'Kabupaten', 'Cirebon', 45611),
(109, 9, 'Kota', 'Cirebon', 45116),
(110, 34, 'Kabupaten', 'Dairi', 22211),
(111, 24, 'Kabupaten', 'Deiyai (Deliyai)', 98784),
(112, 34, 'Kabupaten', 'Deli Serdang', 20511),
(113, 10, 'Kabupaten', 'Demak', 59519),
(114, 1, 'Kota', 'Denpasar', 80227),
(115, 9, 'Kota', 'Depok', 16416),
(116, 32, 'Kabupaten', 'Dharmasraya', 27612),
(117, 24, 'Kabupaten', 'Dogiyai', 98866),
(118, 22, 'Kabupaten', 'Dompu', 84217),
(119, 29, 'Kabupaten', 'Donggala', 94341),
(120, 26, 'Kota', 'Dumai', 28811),
(121, 33, 'Kabupaten', 'Empat Lawang', 31811),
(122, 23, 'Kabupaten', 'Ende', 86351),
(123, 28, 'Kabupaten', 'Enrekang', 91719),
(124, 25, 'Kabupaten', 'Fakfak', 98651),
(125, 23, 'Kabupaten', 'Flores Timur', 86213),
(126, 9, 'Kabupaten', 'Garut', 44126),
(127, 21, 'Kabupaten', 'Gayo Lues', 24653),
(128, 1, 'Kabupaten', 'Gianyar', 80519),
(129, 7, 'Kabupaten', 'Gorontalo', 96218),
(130, 7, 'Kota', 'Gorontalo', 96115),
(131, 7, 'Kabupaten', 'Gorontalo Utara', 96611),
(132, 28, 'Kabupaten', 'Gowa', 92111),
(133, 11, 'Kabupaten', 'Gresik', 61115),
(134, 10, 'Kabupaten', 'Grobogan', 58111),
(135, 5, 'Kabupaten', 'Gunung Kidul', 55812),
(136, 14, 'Kabupaten', 'Gunung Mas', 74511),
(137, 34, 'Kota', 'Gunungsitoli', 22813),
(138, 20, 'Kabupaten', 'Halmahera Barat', 97757),
(139, 20, 'Kabupaten', 'Halmahera Selatan', 97911),
(140, 20, 'Kabupaten', 'Halmahera Tengah', 97853),
(141, 20, 'Kabupaten', 'Halmahera Timur', 97862),
(142, 20, 'Kabupaten', 'Halmahera Utara', 97762),
(143, 13, 'Kabupaten', 'Hulu Sungai Selatan', 71212),
(144, 13, 'Kabupaten', 'Hulu Sungai Tengah', 71313),
(145, 13, 'Kabupaten', 'Hulu Sungai Utara', 71419),
(146, 34, 'Kabupaten', 'Humbang Hasundutan', 22457),
(147, 26, 'Kabupaten', 'Indragiri Hilir', 29212),
(148, 26, 'Kabupaten', 'Indragiri Hulu', 29319),
(149, 9, 'Kabupaten', 'Indramayu', 45214),
(150, 24, 'Kabupaten', 'Intan Jaya', 98771),
(151, 6, 'Kota', 'Jakarta Barat', 11220),
(152, 6, 'Kota', 'Jakarta Pusat', 10540),
(153, 6, 'Kota', 'Jakarta Selatan', 12230),
(154, 6, 'Kota', 'Jakarta Timur', 13330),
(155, 6, 'Kota', 'Jakarta Utara', 14140),
(156, 8, 'Kota', 'Jambi', 36111),
(157, 24, 'Kabupaten', 'Jayapura', 99352),
(158, 24, 'Kota', 'Jayapura', 99114),
(159, 24, 'Kabupaten', 'Jayawijaya', 99511),
(160, 11, 'Kabupaten', 'Jember', 68113),
(161, 1, 'Kabupaten', 'Jembrana', 82251),
(162, 28, 'Kabupaten', 'Jeneponto', 92319),
(163, 10, 'Kabupaten', 'Jepara', 59419),
(164, 11, 'Kabupaten', 'Jombang', 61415),
(165, 25, 'Kabupaten', 'Kaimana', 98671),
(166, 26, 'Kabupaten', 'Kampar', 28411),
(167, 14, 'Kabupaten', 'Kapuas', 73583),
(168, 12, 'Kabupaten', 'Kapuas Hulu', 78719),
(169, 10, 'Kabupaten', 'Karanganyar', 57718),
(170, 1, 'Kabupaten', 'Karangasem', 80819),
(171, 9, 'Kabupaten', 'Karawang', 41311),
(172, 17, 'Kabupaten', 'Karimun', 29611),
(173, 34, 'Kabupaten', 'Karo', 22119),
(174, 14, 'Kabupaten', 'Katingan', 74411),
(175, 4, 'Kabupaten', 'Kaur', 38911),
(176, 12, 'Kabupaten', 'Kayong Utara', 78852),
(177, 10, 'Kabupaten', 'Kebumen', 54319),
(178, 11, 'Kabupaten', 'Kediri', 64184),
(179, 11, 'Kota', 'Kediri', 64125),
(180, 24, 'Kabupaten', 'Keerom', 99461),
(181, 10, 'Kabupaten', 'Kendal', 51314),
(182, 30, 'Kota', 'Kendari', 93126),
(183, 4, 'Kabupaten', 'Kepahiang', 39319),
(184, 17, 'Kabupaten', 'Kepulauan Anambas', 29991),
(185, 19, 'Kabupaten', 'Kepulauan Aru', 97681),
(186, 32, 'Kabupaten', 'Kepulauan Mentawai', 25771),
(187, 26, 'Kabupaten', 'Kepulauan Meranti', 28791),
(188, 31, 'Kabupaten', 'Kepulauan Sangihe', 95819),
(189, 6, 'Kabupaten', 'Kepulauan Seribu', 14550),
(190, 31, 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', 95862),
(191, 20, 'Kabupaten', 'Kepulauan Sula', 97995),
(192, 31, 'Kabupaten', 'Kepulauan Talaud', 95885),
(193, 24, 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', 98211),
(194, 8, 'Kabupaten', 'Kerinci', 37167),
(195, 12, 'Kabupaten', 'Ketapang', 78874),
(196, 10, 'Kabupaten', 'Klaten', 57411),
(197, 1, 'Kabupaten', 'Klungkung', 80719),
(198, 30, 'Kabupaten', 'Kolaka', 93511),
(199, 30, 'Kabupaten', 'Kolaka Utara', 93911),
(200, 30, 'Kabupaten', 'Konawe', 93411),
(201, 30, 'Kabupaten', 'Konawe Selatan', 93811),
(202, 30, 'Kabupaten', 'Konawe Utara', 93311),
(203, 13, 'Kabupaten', 'Kotabaru', 72119),
(204, 31, 'Kota', 'Kotamobagu', 95711),
(205, 14, 'Kabupaten', 'Kotawaringin Barat', 74119),
(206, 14, 'Kabupaten', 'Kotawaringin Timur', 74364),
(207, 26, 'Kabupaten', 'Kuantan Singingi', 29519),
(208, 12, 'Kabupaten', 'Kubu Raya', 78311),
(209, 10, 'Kabupaten', 'Kudus', 59311),
(210, 5, 'Kabupaten', 'Kulon Progo', 55611),
(211, 9, 'Kabupaten', 'Kuningan', 45511),
(212, 23, 'Kabupaten', 'Kupang', 85362),
(213, 23, 'Kota', 'Kupang', 85119),
(214, 15, 'Kabupaten', 'Kutai Barat', 75711),
(215, 15, 'Kabupaten', 'Kutai Kartanegara', 75511),
(216, 15, 'Kabupaten', 'Kutai Timur', 75611),
(217, 34, 'Kabupaten', 'Labuhan Batu', 21412),
(218, 34, 'Kabupaten', 'Labuhan Batu Selatan', 21511),
(219, 34, 'Kabupaten', 'Labuhan Batu Utara', 21711),
(220, 33, 'Kabupaten', 'Lahat', 31419),
(221, 14, 'Kabupaten', 'Lamandau', 74611),
(222, 11, 'Kabupaten', 'Lamongan', 64125),
(223, 18, 'Kabupaten', 'Lampung Barat', 34814),
(224, 18, 'Kabupaten', 'Lampung Selatan', 35511),
(225, 18, 'Kabupaten', 'Lampung Tengah', 34212),
(226, 18, 'Kabupaten', 'Lampung Timur', 34319),
(227, 18, 'Kabupaten', 'Lampung Utara', 34516),
(228, 12, 'Kabupaten', 'Landak', 78319),
(229, 34, 'Kabupaten', 'Langkat', 20811),
(230, 21, 'Kota', 'Langsa', 24412),
(231, 24, 'Kabupaten', 'Lanny Jaya', 99531),
(232, 3, 'Kabupaten', 'Lebak', 42319),
(233, 4, 'Kabupaten', 'Lebong', 39264),
(234, 23, 'Kabupaten', 'Lembata', 86611),
(235, 21, 'Kota', 'Lhokseumawe', 24352),
(236, 32, 'Kabupaten', 'Lima Puluh Koto/Kota', 26671),
(237, 17, 'Kabupaten', 'Lingga', 29811),
(238, 22, 'Kabupaten', 'Lombok Barat', 83311),
(239, 22, 'Kabupaten', 'Lombok Tengah', 83511),
(240, 22, 'Kabupaten', 'Lombok Timur', 83612),
(241, 22, 'Kabupaten', 'Lombok Utara', 83711),
(242, 33, 'Kota', 'Lubuk Linggau', 31614),
(243, 11, 'Kabupaten', 'Lumajang', 67319),
(244, 28, 'Kabupaten', 'Luwu', 91994),
(245, 28, 'Kabupaten', 'Luwu Timur', 92981),
(246, 28, 'Kabupaten', 'Luwu Utara', 92911),
(247, 11, 'Kabupaten', 'Madiun', 63153),
(248, 11, 'Kota', 'Madiun', 63122),
(249, 10, 'Kabupaten', 'Magelang', 56519),
(250, 10, 'Kota', 'Magelang', 56133),
(251, 11, 'Kabupaten', 'Magetan', 63314),
(252, 9, 'Kabupaten', 'Majalengka', 45412),
(253, 27, 'Kabupaten', 'Majene', 91411),
(254, 28, 'Kota', 'Makassar', 90111),
(255, 11, 'Kabupaten', 'Malang', 65163),
(256, 11, 'Kota', 'Malang', 65112),
(257, 16, 'Kabupaten', 'Malinau', 77511),
(258, 19, 'Kabupaten', 'Maluku Barat Daya', 97451),
(259, 19, 'Kabupaten', 'Maluku Tengah', 97513),
(260, 19, 'Kabupaten', 'Maluku Tenggara', 97651),
(261, 19, 'Kabupaten', 'Maluku Tenggara Barat', 97465),
(262, 27, 'Kabupaten', 'Mamasa', 91362),
(263, 24, 'Kabupaten', 'Mamberamo Raya', 99381),
(264, 24, 'Kabupaten', 'Mamberamo Tengah', 99553),
(265, 27, 'Kabupaten', 'Mamuju', 91519),
(266, 27, 'Kabupaten', 'Mamuju Utara', 91571),
(267, 31, 'Kota', 'Manado', 95247),
(268, 34, 'Kabupaten', 'Mandailing Natal', 22916),
(269, 23, 'Kabupaten', 'Manggarai', 86551),
(270, 23, 'Kabupaten', 'Manggarai Barat', 86711),
(271, 23, 'Kabupaten', 'Manggarai Timur', 86811),
(272, 25, 'Kabupaten', 'Manokwari', 98311),
(273, 25, 'Kabupaten', 'Manokwari Selatan', 98355),
(274, 24, 'Kabupaten', 'Mappi', 99853),
(275, 28, 'Kabupaten', 'Maros', 90511),
(276, 22, 'Kota', 'Mataram', 83131),
(277, 25, 'Kabupaten', 'Maybrat', 98051),
(278, 34, 'Kota', 'Medan', 20228),
(279, 12, 'Kabupaten', 'Melawi', 78619),
(280, 8, 'Kabupaten', 'Merangin', 37319),
(281, 24, 'Kabupaten', 'Merauke', 99613),
(282, 18, 'Kabupaten', 'Mesuji', 34911),
(283, 18, 'Kota', 'Metro', 34111),
(284, 24, 'Kabupaten', 'Mimika', 99962),
(285, 31, 'Kabupaten', 'Minahasa', 95614),
(286, 31, 'Kabupaten', 'Minahasa Selatan', 95914),
(287, 31, 'Kabupaten', 'Minahasa Tenggara', 95995),
(288, 31, 'Kabupaten', 'Minahasa Utara', 95316),
(289, 11, 'Kabupaten', 'Mojokerto', 61382),
(290, 11, 'Kota', 'Mojokerto', 61316),
(291, 29, 'Kabupaten', 'Morowali', 94911),
(292, 33, 'Kabupaten', 'Muara Enim', 31315),
(293, 8, 'Kabupaten', 'Muaro Jambi', 36311),
(294, 4, 'Kabupaten', 'Muko Muko', 38715),
(295, 30, 'Kabupaten', 'Muna', 93611),
(296, 14, 'Kabupaten', 'Murung Raya', 73911),
(297, 33, 'Kabupaten', 'Musi Banyuasin', 30719),
(298, 33, 'Kabupaten', 'Musi Rawas', 31661),
(299, 24, 'Kabupaten', 'Nabire', 98816),
(300, 21, 'Kabupaten', 'Nagan Raya', 23674),
(301, 23, 'Kabupaten', 'Nagekeo', 86911),
(302, 17, 'Kabupaten', 'Natuna', 29711),
(303, 24, 'Kabupaten', 'Nduga', 99541),
(304, 23, 'Kabupaten', 'Ngada', 86413),
(305, 11, 'Kabupaten', 'Nganjuk', 64414),
(306, 11, 'Kabupaten', 'Ngawi', 63219),
(307, 34, 'Kabupaten', 'Nias', 22876),
(308, 34, 'Kabupaten', 'Nias Barat', 22895),
(309, 34, 'Kabupaten', 'Nias Selatan', 22865),
(310, 34, 'Kabupaten', 'Nias Utara', 22856),
(311, 16, 'Kabupaten', 'Nunukan', 77421),
(312, 33, 'Kabupaten', 'Ogan Ilir', 30811),
(313, 33, 'Kabupaten', 'Ogan Komering Ilir', 30618),
(314, 33, 'Kabupaten', 'Ogan Komering Ulu', 32112),
(315, 33, 'Kabupaten', 'Ogan Komering Ulu Selatan', 32211),
(316, 33, 'Kabupaten', 'Ogan Komering Ulu Timur', 32312),
(317, 11, 'Kabupaten', 'Pacitan', 63512),
(318, 32, 'Kota', 'Padang', 25112),
(319, 34, 'Kabupaten', 'Padang Lawas', 22763),
(320, 34, 'Kabupaten', 'Padang Lawas Utara', 22753),
(321, 32, 'Kota', 'Padang Panjang', 27122),
(322, 32, 'Kabupaten', 'Padang Pariaman', 25583),
(323, 34, 'Kota', 'Padang Sidempuan', 22727),
(324, 33, 'Kota', 'Pagar Alam', 31512),
(325, 34, 'Kabupaten', 'Pakpak Bharat', 22272),
(326, 14, 'Kota', 'Palangka Raya', 73112),
(327, 33, 'Kota', 'Palembang', 31512),
(328, 28, 'Kota', 'Palopo', 91911),
(329, 29, 'Kota', 'Palu', 94111),
(330, 11, 'Kabupaten', 'Pamekasan', 69319),
(331, 3, 'Kabupaten', 'Pandeglang', 42212),
(332, 9, 'Kabupaten', 'Pangandaran', 46511),
(333, 28, 'Kabupaten', 'Pangkajene Kepulauan', 90611),
(334, 2, 'Kota', 'Pangkal Pinang', 33115),
(335, 24, 'Kabupaten', 'Paniai', 98765),
(336, 28, 'Kota', 'Parepare', 91123),
(337, 32, 'Kota', 'Pariaman', 25511),
(338, 29, 'Kabupaten', 'Parigi Moutong', 94411),
(339, 32, 'Kabupaten', 'Pasaman', 26318),
(340, 32, 'Kabupaten', 'Pasaman Barat', 26511),
(341, 15, 'Kabupaten', 'Paser', 76211),
(342, 11, 'Kabupaten', 'Pasuruan', 67153),
(343, 11, 'Kota', 'Pasuruan', 67118),
(344, 10, 'Kabupaten', 'Pati', 59114),
(345, 32, 'Kota', 'Payakumbuh', 26213),
(346, 25, 'Kabupaten', 'Pegunungan Arfak', 98354),
(347, 24, 'Kabupaten', 'Pegunungan Bintang', 99573),
(348, 10, 'Kabupaten', 'Pekalongan', 51161),
(349, 10, 'Kota', 'Pekalongan', 51122),
(350, 26, 'Kota', 'Pekanbaru', 28112),
(351, 26, 'Kabupaten', 'Pelalawan', 28311),
(352, 10, 'Kabupaten', 'Pemalang', 52319),
(353, 34, 'Kota', 'Pematang Siantar', 21126),
(354, 15, 'Kabupaten', 'Penajam Paser Utara', 76311),
(355, 18, 'Kabupaten', 'Pesawaran', 35312),
(356, 18, 'Kabupaten', 'Pesisir Barat', 35974),
(357, 32, 'Kabupaten', 'Pesisir Selatan', 25611),
(358, 21, 'Kabupaten', 'Pidie', 24116),
(359, 21, 'Kabupaten', 'Pidie Jaya', 24186),
(360, 28, 'Kabupaten', 'Pinrang', 91251),
(361, 7, 'Kabupaten', 'Pohuwato', 96419),
(362, 27, 'Kabupaten', 'Polewali Mandar', 91311),
(363, 11, 'Kabupaten', 'Ponorogo', 63411),
(364, 12, 'Kabupaten', 'Pontianak', 78971),
(365, 12, 'Kota', 'Pontianak', 78112),
(366, 29, 'Kabupaten', 'Poso', 94615),
(367, 33, 'Kota', 'Prabumulih', 31121),
(368, 18, 'Kabupaten', 'Pringsewu', 35719),
(369, 11, 'Kabupaten', 'Probolinggo', 67282),
(370, 11, 'Kota', 'Probolinggo', 67215),
(371, 14, 'Kabupaten', 'Pulang Pisau', 74811),
(372, 20, 'Kabupaten', 'Pulau Morotai', 97771),
(373, 24, 'Kabupaten', 'Puncak', 98981),
(374, 24, 'Kabupaten', 'Puncak Jaya', 98979),
(375, 10, 'Kabupaten', 'Purbalingga', 53312),
(376, 9, 'Kabupaten', 'Purwakarta', 41119),
(377, 10, 'Kabupaten', 'Purworejo', 54111),
(378, 25, 'Kabupaten', 'Raja Ampat', 98489),
(379, 4, 'Kabupaten', 'Rejang Lebong', 39112),
(380, 10, 'Kabupaten', 'Rembang', 59219),
(381, 26, 'Kabupaten', 'Rokan Hilir', 28992),
(382, 26, 'Kabupaten', 'Rokan Hulu', 28511),
(383, 23, 'Kabupaten', 'Rote Ndao', 85982),
(384, 21, 'Kota', 'Sabang', 23512),
(385, 23, 'Kabupaten', 'Sabu Raijua', 85391),
(386, 10, 'Kota', 'Salatiga', 50711),
(387, 15, 'Kota', 'Samarinda', 75133),
(388, 12, 'Kabupaten', 'Sambas', 79453),
(389, 34, 'Kabupaten', 'Samosir', 22392),
(390, 11, 'Kabupaten', 'Sampang', 69219),
(391, 12, 'Kabupaten', 'Sanggau', 78557),
(392, 24, 'Kabupaten', 'Sarmi', 99373),
(393, 8, 'Kabupaten', 'Sarolangun', 37419),
(394, 32, 'Kota', 'Sawah Lunto', 27416),
(395, 12, 'Kabupaten', 'Sekadau', 79583),
(396, 28, 'Kabupaten', 'Selayar (Kepulauan Selayar)', 92812),
(397, 4, 'Kabupaten', 'Seluma', 38811),
(398, 10, 'Kabupaten', 'Semarang', 50511),
(399, 10, 'Kota', 'Semarang', 50135),
(400, 19, 'Kabupaten', 'Seram Bagian Barat', 97561),
(401, 19, 'Kabupaten', 'Seram Bagian Timur', 97581),
(402, 3, 'Kabupaten', 'Serang', 42182),
(403, 3, 'Kota', 'Serang', 42111),
(404, 34, 'Kabupaten', 'Serdang Bedagai', 20915),
(405, 14, 'Kabupaten', 'Seruyan', 74211),
(406, 26, 'Kabupaten', 'Siak', 28623),
(407, 34, 'Kota', 'Sibolga', 22522),
(408, 28, 'Kabupaten', 'Sidenreng Rappang/Rapang', 91613),
(409, 11, 'Kabupaten', 'Sidoarjo', 61219),
(410, 29, 'Kabupaten', 'Sigi', 94364),
(411, 32, 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', 27511),
(412, 23, 'Kabupaten', 'Sikka', 86121),
(413, 34, 'Kabupaten', 'Simalungun', 21162),
(414, 21, 'Kabupaten', 'Simeulue', 23891),
(415, 12, 'Kota', 'Singkawang', 79117),
(416, 28, 'Kabupaten', 'Sinjai', 92615),
(417, 12, 'Kabupaten', 'Sintang', 78619),
(418, 11, 'Kabupaten', 'Situbondo', 68316),
(419, 5, 'Kabupaten', 'Sleman', 55513),
(420, 32, 'Kabupaten', 'Solok', 27365),
(421, 32, 'Kota', 'Solok', 27315),
(422, 32, 'Kabupaten', 'Solok Selatan', 27779),
(423, 28, 'Kabupaten', 'Soppeng', 90812),
(424, 25, 'Kabupaten', 'Sorong', 98431),
(425, 25, 'Kota', 'Sorong', 98411),
(426, 25, 'Kabupaten', 'Sorong Selatan', 98454),
(427, 10, 'Kabupaten', 'Sragen', 57211),
(428, 9, 'Kabupaten', 'Subang', 41215),
(429, 21, 'Kota', 'Subulussalam', 24882),
(430, 9, 'Kabupaten', 'Sukabumi', 43311),
(431, 9, 'Kota', 'Sukabumi', 43114),
(432, 14, 'Kabupaten', 'Sukamara', 74712),
(433, 10, 'Kabupaten', 'Sukoharjo', 57514),
(434, 23, 'Kabupaten', 'Sumba Barat', 87219),
(435, 23, 'Kabupaten', 'Sumba Barat Daya', 87453),
(436, 23, 'Kabupaten', 'Sumba Tengah', 87358),
(437, 23, 'Kabupaten', 'Sumba Timur', 87112),
(438, 22, 'Kabupaten', 'Sumbawa', 84315),
(439, 22, 'Kabupaten', 'Sumbawa Barat', 84419),
(440, 9, 'Kabupaten', 'Sumedang', 45326),
(441, 11, 'Kabupaten', 'Sumenep', 69413),
(442, 8, 'Kota', 'Sungaipenuh', 37113),
(443, 24, 'Kabupaten', 'Supiori', 98164),
(444, 11, 'Kota', 'Surabaya', 60119),
(445, 10, 'Kota', 'Surakarta (Solo)', 57113),
(446, 13, 'Kabupaten', 'Tabalong', 71513),
(447, 1, 'Kabupaten', 'Tabanan', 82119),
(448, 28, 'Kabupaten', 'Takalar', 92212),
(449, 25, 'Kabupaten', 'Tambrauw', 98475),
(450, 16, 'Kabupaten', 'Tana Tidung', 77611),
(451, 28, 'Kabupaten', 'Tana Toraja', 91819),
(452, 13, 'Kabupaten', 'Tanah Bumbu', 72211),
(453, 32, 'Kabupaten', 'Tanah Datar', 27211),
(454, 13, 'Kabupaten', 'Tanah Laut', 70811),
(455, 3, 'Kabupaten', 'Tangerang', 15914),
(456, 3, 'Kota', 'Tangerang', 15111),
(457, 3, 'Kota', 'Tangerang Selatan', 15332),
(458, 18, 'Kabupaten', 'Tanggamus', 35619),
(459, 34, 'Kota', 'Tanjung Balai', 21321),
(460, 8, 'Kabupaten', 'Tanjung Jabung Barat', 36513),
(461, 8, 'Kabupaten', 'Tanjung Jabung Timur', 36719),
(462, 17, 'Kota', 'Tanjung Pinang', 29111),
(463, 34, 'Kabupaten', 'Tapanuli Selatan', 22742),
(464, 34, 'Kabupaten', 'Tapanuli Tengah', 22611),
(465, 34, 'Kabupaten', 'Tapanuli Utara', 22414),
(466, 13, 'Kabupaten', 'Tapin', 71119),
(467, 16, 'Kota', 'Tarakan', 77114),
(468, 9, 'Kabupaten', 'Tasikmalaya', 46411),
(469, 9, 'Kota', 'Tasikmalaya', 46116),
(470, 34, 'Kota', 'Tebing Tinggi', 20632),
(471, 8, 'Kabupaten', 'Tebo', 37519),
(472, 10, 'Kabupaten', 'Tegal', 52419),
(473, 10, 'Kota', 'Tegal', 52114),
(474, 25, 'Kabupaten', 'Teluk Bintuni', 98551),
(475, 25, 'Kabupaten', 'Teluk Wondama', 98591),
(476, 10, 'Kabupaten', 'Temanggung', 56212),
(477, 20, 'Kota', 'Ternate', 97714),
(478, 20, 'Kota', 'Tidore Kepulauan', 97815),
(479, 23, 'Kabupaten', 'Timor Tengah Selatan', 85562),
(480, 23, 'Kabupaten', 'Timor Tengah Utara', 85612),
(481, 34, 'Kabupaten', 'Toba Samosir', 22316),
(482, 29, 'Kabupaten', 'Tojo Una-Una', 94683),
(483, 29, 'Kabupaten', 'Toli-Toli', 94542),
(484, 24, 'Kabupaten', 'Tolikara', 99411),
(485, 31, 'Kota', 'Tomohon', 95416),
(486, 28, 'Kabupaten', 'Toraja Utara', 91831),
(487, 11, 'Kabupaten', 'Trenggalek', 66312),
(488, 19, 'Kota', 'Tual', 97612),
(489, 11, 'Kabupaten', 'Tuban', 62319),
(490, 18, 'Kabupaten', 'Tulang Bawang', 34613),
(491, 18, 'Kabupaten', 'Tulang Bawang Barat', 34419),
(492, 11, 'Kabupaten', 'Tulungagung', 66212),
(493, 28, 'Kabupaten', 'Wajo', 90911),
(494, 30, 'Kabupaten', 'Wakatobi', 93791),
(495, 24, 'Kabupaten', 'Waropen', 98269),
(496, 18, 'Kabupaten', 'Way Kanan', 34711),
(497, 10, 'Kabupaten', 'Wonogiri', 57619),
(498, 10, 'Kabupaten', 'Wonosobo', 56311),
(499, 24, 'Kabupaten', 'Yahukimo', 99041),
(500, 24, 'Kabupaten', 'Yalimo', 99481),
(501, 5, 'Kota', 'Yogyakarta', 55222);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `memberName` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `id_kabupaten_kota` bigint(10) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `status_alamat` enum('0','1') DEFAULT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `memberID`, `memberName`, `phone`, `id_kabupaten_kota`, `locationName`, `status_alamat`, `status`) VALUES
(31, 2, 'Agus', '081231992632', 155, 'JL. TELUK GONG KAVLING BLOK A20, Pejagalan, Kec. Penjaringan', '1', ''),
(32, 6, 'Satpam Kantor', '081231992632', 419, 'Sleman Kota', '1', ''),
(33, 4, 'Winda ', '081231992632', 128, 'JL. DANAU BAYAN 4 NO 15, SANUR KAJA, Kec. Denpasar Selatan', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(5) NOT NULL,
  `memberName` varchar(100) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rekening` varchar(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `codeVerication` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `lasLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `memberName`, `tmp_lahir`, `tgl_lahir`, `gender`, `phone`, `rekening`, `username`, `email`, `password`, `codeVerication`, `photo`, `status`, `createdDate`, `lasLogin`) VALUES
(2, 'Agus balabala', 'bogor', '2018-09-29', '1', '081217109583', '2033121212', 'Agus_s', 'agus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'pVWFxtYvlF', '2.jpg', 'Y', '2017-11-08 05:16:01', '2019-03-15 12:04:48'),
(3, 'Ahmad Rudiantoro', 'yogyakarta', '1995-01-31', '1', '087788298912', '00902902012', 'rudi', 'rudi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kxTaOyjsBa', '1as.jpg', 'Y', '2017-11-21 02:46:18', '2019-03-15 12:31:41'),
(4, 'Windas', 'Yogyakarta', '1996-06-12', '2', '08778289823', '', 'winda', 'winda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'XwmpYsJjKK', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', 'Y', '2018-04-28 09:29:46', '2019-03-18 13:33:09'),
(6, 'Harri', '', '0000-00-00', '', '086456782812', '', 'hari', 'hari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'MUVbsMVLKw', '', 'Y', '2018-04-28 19:32:09', '2019-03-15 12:43:41'),
(13, 'febriyan yoga pratama', '', '0000-00-00', '', '081217109583', '', 'febriyanyoga', 'febriyanyoga@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'RRlLUWlXkW', '', 'Y', '2018-09-18 11:50:27', '2019-03-15 12:34:45'),
(14, 'miftahul jannah', '', '0000-00-00', '', '0895320288615', '', 'imip', 'miftahuljannah483@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'agUcjtHGba', '', 'N', '2018-11-19 15:51:58', '2018-11-27 16:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `bankID` int(5) NOT NULL,
  `member_shipping_address_id` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `statusOrder` enum('Unpaid','Paid','Reject') NOT NULL DEFAULT 'Unpaid',
  `dateOrder` datetime NOT NULL,
  `datePaid` datetime NOT NULL,
  `dateFinish` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `dibaca` char(1) NOT NULL DEFAULT 'N',
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `memberID`, `bankID`, `member_shipping_address_id`, `invoice`, `statusOrder`, `dateOrder`, `datePaid`, `dateFinish`, `photo`, `dibaca`, `catatan`) VALUES
(74, 6, 4, 72, 'AN651409322803976', 'Unpaid', '2019-03-15 13:20:33', '2019-03-15 13:20:33', '2019-03-15 13:20:33', 'xxxxxxxx.jpg', 'N', ''),
(75, 4, 1, 73, 'AN603844160875599', 'Unpaid', '2019-03-18 14:22:11', '2019-03-18 14:22:11', '2019-03-18 14:22:11', 'xxxxxxxx.jpg', 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `ordersDetailID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `sellerID` int(11) NOT NULL,
  `seller_shipment_address_id` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `expedition` varchar(150) NOT NULL,
  `service` varchar(255) NOT NULL,
  `estimasi` varchar(20) NOT NULL,
  `biaya_ongkir` int(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `discount` varchar(12) NOT NULL DEFAULT '0',
  `price` int(12) NOT NULL,
  `dateSend` date DEFAULT NULL,
  `stat` enum('Packing','Send','Done') DEFAULT NULL,
  `trackingCode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`ordersDetailID`, `orderID`, `productID`, `sellerID`, `seller_shipment_address_id`, `memberID`, `expedition`, `service`, `estimasi`, `biaya_ongkir`, `quantity`, `discount`, `price`, `dateSend`, `stat`, `trackingCode`) VALUES
(85, 74, 18, 3, 79, 6, 'POS Indonesia (POS)', 'Paket Kilat Khusus', '1-2 HARI', 17000, 1, '1', 5692500, NULL, NULL, NULL),
(86, 75, 17, 2, 80, 4, 'POS Indonesia (POS)', 'Paket Kilat Khusus', '2-4 HARI', 29500, 1, '5', 142500, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(5) NOT NULL,
  `categoryID` int(5) NOT NULL,
  `subCategoryID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `productCode` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productSeo` varchar(100) NOT NULL,
  `salePrice` varchar(20) NOT NULL,
  `conditions` char(1) NOT NULL,
  `qty` char(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `discount` varchar(5) NOT NULL DEFAULT '0',
  `sold` int(5) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Y',
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `photo5` varchar(100) NOT NULL,
  `photo6` varchar(100) NOT NULL,
  `photo7` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `ad_type` int(5) NOT NULL DEFAULT '1',
  `hits` int(5) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `subCategoryID`, `memberID`, `productCode`, `productName`, `productSeo`, `salePrice`, `conditions`, `qty`, `weight`, `discount`, `sold`, `status`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `description`, `ad_type`, `hits`, `createDate`, `updateDate`) VALUES
(17, 33, 45, 2, '190315123121', 'Rips Jacket', 'rips-jacket', '150000', '1', '114', '1', '5', 1, 'Y', 'd9882ac89067c3fafa40a0e0de767a54.jpg', '8e49569aa22d27fed41f11dd3176ec91.jpg', '983b3c3e7220012a7ad1b5709709b9f3.jpg', 'a7391f9f551f3912af82a8ace7c3d03e.jpg', '8ffa89f8594b34c532c36654eb14bb67.jpg', '88679a840c65f336bbea41e99ee6fcc3.jpg', '5a5630fa51d0f342f9ee819f27c1c7d7.jpg', '<p>\r\n	Kodisi sangat bagus dengan tampilan menawan\r\n</p>\r\n', 1, 8, '0000-00-00 00:00:00', NULL),
(18, 30, 36, 3, '190315123417', 'Laptop Asus Terbaru', 'laptop-asus-terbaru', '5750000', '1', '24', '2', '1', 1, 'Y', 'b68301e410c956467c50b7db2712c12e.jpg', 'dabf0a3f09d351241efcfd3012ff8ee0.jpg', '35266a9a796c995e037ce801319f8580.jpg', 'f5ea36249110dac2a51469e234afa931.jpg', '3c8a650495109c7a094cb0430a0a6652.jpg', '295bcace95417f17189cc2583d8fba57.jpg', '481bcab881ade994eb2b7a88c7995b3a.jpg', '<p>\r\n	Laptop Asus terbaru lebih trendi\r\n</p>\r\n', 1, 14, '0000-00-00 00:00:00', NULL),
(19, 31, 37, 13, '190315123653', 'Google Phone 2019', 'google-phone-2019', '3250000', '1', '14', '1', '0', 1, 'Y', 'fd1e8d9a7efe5398827809b5132c9a4d.jpg', 'fbe94288799a35c67533f85618b320b0.jpg', 'dfcfb348fa672b598ff8fb9d8c4e3490.jpg', 'c6afc2b9eb0f972dbe95f5a7881cab14.jpg', '75abf6bc8351d3a169235bdf33bfe553.jpg', 'ff5a97fcdb0b82069dbbe2049792fa1e.jpg', 'd3c26b21f4cbce82952686eb53518f93.jpg', '<p>\r\n	bagus\r\n</p>\r\n', 1, 2, '0000-00-00 00:00:00', NULL),
(20, 34, 52, 13, '190315123811', 'Camera Canon Yahut', 'camera-canon-yahut', '4250000', '1', '25', '3', '2', 0, 'Y', '48a5a6c22f5eeb7398ff80847c9888a2.jpg', 'ef2b81e517c489ea6e84823c250882d4.jpg', 'a2760acc76529ff7fdf52482ed92b9ce.jpg', '21cf67f3a134f0292fddce49bfdab628.jpg', 'ccc1f4020f8666fac08fd3192df263be.jpg', '37bd4e31b58f5b1bf735e69c85476114.jpg', 'b156316856549cde58fdf5cb62307499.jpg', '<p>\r\n	Kondisi masih baru dengan lensa wide\r\n</p>\r\n', 1, 1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE `propinsi` (
  `id_propinsi` int(4) NOT NULL,
  `nama_propinsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`id_propinsi`, `nama_propinsi`) VALUES
(1, 'Bali'),
(2, 'Bangka Belitung'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'DI Yogyakarta'),
(6, 'DKI Jakarta'),
(7, 'Gorontalo'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nanggroe Aceh Darussalam (NAD)'),
(22, 'Nusa Tenggara Barat (NTB)'),
(23, 'Nusa Tenggara Timur (NTT)'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(5) NOT NULL,
  `rate` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `memberID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rate`, `user`, `memberID`) VALUES
(6, 3, '', 0),
(7, 3, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_address`
--

CREATE TABLE `shipment_address` (
  `shipment_addressID` int(11) NOT NULL,
  `sellerID` int(11) NOT NULL,
  `id_kabupaten_kota` int(11) NOT NULL,
  `shipping_address_name` varchar(255) NOT NULL,
  `seller_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment_address`
--

INSERT INTO `shipment_address` (`shipment_addressID`, `sellerID`, `id_kabupaten_kota`, `shipping_address_name`, `seller_name`) VALUES
(79, 3, 152, 'Jl. KH Agus Salim 16, Sabang, Menteng', 'Ahmad Rudiantoro'),
(80, 2, 155, 'JL. TELUK GONG KAVLING BLOK A20, Pejagalan, Kec. Penjaringan', 'Agus balabala');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_addressID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `id_kabupaten_kota` int(11) NOT NULL,
  `shipping_address_name` varchar(255) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_addressID`, `memberID`, `id_kabupaten_kota`, `shipping_address_name`, `nama_penerima`) VALUES
(72, 6, 419, 'Sleman Kota', 'Harri'),
(73, 4, 128, 'JL. DANAU BAYAN 4 NO 15, SANUR KAJA, Kec. Denpasar Selatan', 'Windas');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shopID` int(11) NOT NULL,
  `memberID` int(10) NOT NULL,
  `id_kabupaten_kota` int(10) NOT NULL,
  `shop_address` varchar(500) NOT NULL,
  `shop_header` varchar(100) DEFAULT NULL,
  `shop_description` text,
  `shop_service_time` varchar(10) DEFAULT NULL,
  `shop_phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopID`, `memberID`, `id_kabupaten_kota`, `shop_address`, `shop_header`, `shop_description`, `shop_service_time`, `shop_phone`) VALUES
(4, 2, 155, 'JL. TELUK GONG KAVLING BLOK A20, Pejagalan, Kec. Penjaringan', '9d9e521eb9b5afdd24d0ca8614877fdf.jpg', 'Toko Murah Meriah', '17.00', '081231992632'),
(5, 3, 152, 'Jl. KH Agus Salim 16, Sabang, Menteng', 'a7eba6c817aaaa40e7d5e052a85cb771.jpg', 'Toko Rudi Jos', '18.00', '083869281843'),
(6, 13, 153, 'Jl. Taman Margasatwa No. 12, Warung Buncit', '80563e3c1736ec19f11f05ffacc3a892.jpg', 'Jauhari TOSERBA', '17.00', '081231992632');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `subCategoryID` int(5) NOT NULL,
  `categoryID` int(5) NOT NULL,
  `subCategoryName` varchar(50) NOT NULL,
  `subCategorySeo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`subCategoryID`, `categoryID`, `subCategoryName`, `subCategorySeo`) VALUES
(36, 30, 'Laptop Asus', 'laptop-asus'),
(37, 31, 'Smartphone Samsung', 'smartphone-samsung'),
(38, 31, 'Smartphone iPhone ', 'smartphone-iphone-'),
(39, 30, 'Macbook', 'macbook'),
(40, 31, 'Smartphone Asus', 'smartphone-asus'),
(41, 31, 'Samsung Tab S', 'samsung-tab-s'),
(42, 35, 'Hijab', 'hijab'),
(43, 35, 'Jaket', 'jaket'),
(44, 35, 'Jaket', 'jaket'),
(45, 33, 'Kemeja', 'kemeja'),
(46, 31, 'Lainnya', 'lainnya'),
(47, 40, 'Snack', 'snack'),
(48, 36, 'MTB', 'mtb'),
(49, 38, 'pakaian', 'pakaian'),
(50, 29, 'perlengkapan dapur', 'perlengkapan-dapur'),
(51, 32, 'televisi', 'televisi'),
(52, 34, 'canon dslr', 'canon-dslr'),
(53, 37, 'popok', 'popok'),
(54, 39, 'aksesoris mobil', 'aksesoris-mobil');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierID` int(5) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contactPerson` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `supplierName`, `phone`, `contactPerson`, `address`) VALUES
(1, 'CV. Aditama Persero', '02789938792', 'Edi Santosa', 'JL. Diponegoro No.2 Jakarta Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `rekening` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `lastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `fullName`, `rekening`, `contact`, `lastLogin`) VALUES
(1, 'support@arnintech.co.id', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'BRI - 123456', '+62 21 27514022', '2017-11-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdrawID` int(5) NOT NULL,
  `tagihanID` varchar(20) NOT NULL,
  `orderID` int(5) NOT NULL,
  `customerID` int(5) NOT NULL,
  `incomeDraw` int(30) NOT NULL,
  `tagDraw` varchar(20) NOT NULL,
  `totalDraw` varchar(20) NOT NULL,
  `sisaDraw` varchar(20) NOT NULL,
  `statusDraw` varchar(20) NOT NULL DEFAULT 'Pending',
  `dateFinish` datetime NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_chat`
--
ALTER TABLE `as_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`balanceID`);

--
-- Indexes for table `balance_order`
--
ALTER TABLE `balance_order`
  ADD PRIMARY KEY (`balanceOrderID`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankID`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`compareID`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courierID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favoriteID`);

--
-- Indexes for table `header1`
--
ALTER TABLE `header1`
  ADD PRIMARY KEY (`headerSatuID`);

--
-- Indexes for table `header2`
--
ALTER TABLE `header2`
  ADD PRIMARY KEY (`headerDuaID`);

--
-- Indexes for table `header3`
--
ALTER TABLE `header3`
  ADD PRIMARY KEY (`headerTigaID`);

--
-- Indexes for table `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  ADD PRIMARY KEY (`id_kabupaten_kota`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`ordersDetailID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `propinsi`
--
ALTER TABLE `propinsi`
  ADD PRIMARY KEY (`id_propinsi`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_address`
--
ALTER TABLE `shipment_address`
  ADD PRIMARY KEY (`shipment_addressID`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_addressID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shopID`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`subCategoryID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdrawID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_chat`
--
ALTER TABLE `as_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `balanceID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `balance_order`
--
ALTER TABLE `balance_order`
  MODIFY `balanceOrderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bankID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `compareID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courierID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favoriteID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header1`
--
ALTER TABLE `header1`
  MODIFY `headerSatuID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header2`
--
ALTER TABLE `header2`
  MODIFY `headerDuaID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `header3`
--
ALTER TABLE `header3`
  MODIFY `headerTigaID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  MODIFY `id_kabupaten_kota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `ordersDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `propinsi`
--
ALTER TABLE `propinsi`
  MODIFY `id_propinsi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shipment_address`
--
ALTER TABLE `shipment_address`
  MODIFY `shipment_addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `subCategoryID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdrawID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
