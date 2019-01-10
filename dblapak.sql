-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:48 AM
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
  `service` varchar(255) DEFAULT NULL,
  `estimate` varchar(30) DEFAULT NULL,
  `cost` int(20) DEFAULT NULL,
  `stockCart` int(11) NOT NULL,
  `createDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cartID`, `productID`, `memberID`, `quantity`, `price`, `service`, `estimate`, `cost`, `stockCart`, `createDate`) VALUES
(1, 1, 14, 1, 111111, NULL, NULL, NULL, 0, '2018-11-19'),
(2, 13, 14, 4, 150000, NULL, NULL, NULL, 0, '2018-11-21');

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

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favoriteID`, `memberID`, `productID`, `favoriteDate`) VALUES
(1, 2, 2, '2017-11-21 07:21:14'),
(2, 2, 5, '2018-09-18 06:53:34');

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
(9, 2, 'Agus balabala', '081217109583', 3, 'JL. Simpang Lima No. 67 A', '1', 'Y'),
(10, 3, 'Ahmad Rudiantoro', '087788298912', 4, 'JL. Sukarno No. 1 A Solo', '1', 'Y'),
(11, 2, 'Agus', '081217109555', 9, 'JL. Diponegoro No. 40 Blok A', '0', 'Y'),
(12, 4, 'Winda', '08778289823', 14, 'JL. Patimura No. 10 A', '1', 'Y'),
(13, 6, 'Harri', '086456782812', 10, 'JL. Kemerdekaan Pusat No. 10 ', '1', 'Y'),
(14, 7, 'Donna', '086456782777', 11, 'JL. Linggar Jati No. 19 ', '1', 'Y'),
(15, 7, 'Donnas', '086456782551', 1101010001, 'jalan in aja dulu', '0', ''),
(17, 7, 'Don Dona', '086456782676', 5103050015, 'jalan jalan ke pasar minggu beli ikan asin\r\n', '0', ''),
(18, 12, 'lelelelele', '086456888990', 3171060001, 'blablabkla', '1', ''),
(28, 4, 'evotehore', '', 135, 'Jalan Kenari no. 12', '0', '');

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
(2, 'Agus balabala', 'bogor', '2018-09-29', '1', '081217109583', '2033121212', 'Agus_s', 'agus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'pVWFxtYvlF', '12936032_A1_V1.jpg', 'Y', '2017-11-08 05:16:01', '2018-11-27 16:19:02'),
(3, 'Ahmad Rudiantoro', 'yogyakarta', '1995-01-31', '1', '087788298912', '00902902012', 'rudi', 'rudi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kxTaOyjsBa', '1as.jpg', 'Y', '2017-11-21 02:46:18', '2018-12-03 10:59:31'),
(4, 'Windas', 'Yogyakarta', '1996-06-12', '2', '08778289823', '', 'winda', 'winda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'XwmpYsJjKK', '', 'Y', '2018-04-28 09:29:46', '2019-01-07 13:21:51'),
(6, 'Harri', '', '0000-00-00', '', '086456782812', '', 'hari', 'hari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'MUVbsMVLKw', '', 'N', '2018-04-28 19:32:09', '0000-00-00 00:00:00'),
(7, 'Donna', '', '0000-00-00', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'YQAytMZTVr', '', 'N', '2018-09-10 09:32:19', '0000-00-00 00:00:00'),
(8, 'ada', '', '0000-00-00', '', '812171095830', '', 'da', 'kepala_departemen@tedi.com', '202cb962ac59075b964b07152d234b70', 'RnrJpnfDJm', '', 'N', '2018-09-10 10:00:02', '0000-00-00 00:00:00'),
(12, 'lelelelele', '', '0000-00-00', '', '081217109583', '', 'lelele', 'lele@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ZfCTXMzVpF', '', 'N', '2018-09-18 11:43:55', '0000-00-00 00:00:00'),
(13, 'febriyan yoga pratama', '', '0000-00-00', '', '081217109583', '', 'febriyanyoga', 'febriyanyoga@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'RRlLUWlXkW', '', 'Y', '2018-09-18 11:50:27', '2018-09-26 15:21:17'),
(14, 'miftahul jannah', '', '0000-00-00', '', '0895320288615', '', 'imip', 'miftahuljannah483@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'agUcjtHGba', '', 'N', '2018-11-19 15:51:58', '2018-11-27 16:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(5) NOT NULL,
  `memberID` int(5) NOT NULL,
  `courierID` int(5) NOT NULL,
  `bankID` int(5) NOT NULL,
  `member_shipping_address_id` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `statusOrder` varchar(30) NOT NULL DEFAULT 'Pending',
  `dateOrder` datetime NOT NULL,
  `pendingOrder` char(1) NOT NULL,
  `paidOrder` char(1) NOT NULL,
  `sendOrder` char(1) NOT NULL,
  `acceptOrder` char(1) NOT NULL,
  `rejectOrder` int(2) NOT NULL,
  `datePaid` datetime NOT NULL,
  `dateSend` datetime NOT NULL,
  `dateFinish` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `dibaca` char(1) NOT NULL DEFAULT 'N',
  `rate` int(11) NOT NULL,
  `catatan` text,
  `resi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `memberID`, `courierID`, `bankID`, `member_shipping_address_id`, `invoice`, `statusOrder`, `dateOrder`, `pendingOrder`, `paidOrder`, `sendOrder`, `acceptOrder`, `rejectOrder`, `datePaid`, `dateSend`, `dateFinish`, `photo`, `dibaca`, `rate`, `catatan`, `resi`) VALUES
(1, 0, 0, 0, 0, 'BL320180430075956', 'Diterima', '2018-04-30 07:59:56', '1', '1', '1', '1', 0, '2018-04-30 09:06:40', '0000-00-00 00:00:00', '2018-05-02 07:06:28', 'bukti_transfer_1504016386_068f9e1d.jpg', 'Y', 5, '', 'JD002092312'),
(2, 0, 0, 0, 0, 'BL320180505063904', 'Pending', '2018-05-05 06:39:04', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'Y', 0, '', ''),
(3, 0, 0, 0, 0, 'BL220180918091413', 'Pending', '2018-09-18 09:14:13', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'Y', 0, '', ''),
(4, 0, 0, 0, 0, 'BL220180918093058', 'Pending', '2018-09-18 09:30:58', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'N', 0, '', ''),
(5, 0, 0, 0, 0, 'BL320180924062621', 'Pending', '2018-09-24 06:26:21', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'Y', 0, '', ''),
(6, 0, 0, 0, 0, 'BL320180924092141', 'Pending', '2018-09-24 09:21:41', '1', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'N', 0, '', ''),
(43, 4, 0, 6, 41, 'AN700425351716893', 'Pending', '2018-12-27 12:24:49', '1', '0', '0', '0', 0, '2018-12-27 12:24:49', '2018-12-27 12:24:49', '2018-12-27 12:24:49', 'xxxxxxxx.jpg', 'N', 0, '', 'JNE12312312312312312');

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
  `service` varchar(255) NOT NULL,
  `estimasi` varchar(20) NOT NULL,
  `biaya_ongkir` int(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `discount` varchar(12) NOT NULL DEFAULT '0',
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`ordersDetailID`, `orderID`, `productID`, `sellerID`, `seller_shipment_address_id`, `memberID`, `service`, `estimasi`, `biaya_ongkir`, `quantity`, `discount`, `price`) VALUES
(1, 1, 1, 0, 0, 0, '', '0', 0, 1, '0', 0),
(2, 2, 2, 0, 0, 0, '', '0', 0, 1, '0', 0),
(3, 3, 4, 0, 0, 0, '', '0', 0, 1, '0', 0),
(4, 4, 4, 0, 0, 0, '', '0', 0, 1, '0', 0),
(5, 5, 2, 0, 0, 0, '', '0', 0, 1, '0', 0),
(6, 6, 2, 0, 0, 0, '', '0', 0, 1, '0', 0),
(7, 6, 5, 0, 0, 0, '', '0', 0, 1, '0', 0),
(70, 43, 15, 3, 61, 4, 'REG', '2-3', 265000, 5, '3', 48500),
(71, 43, 16, 2, 62, 4, 'Paket Kilat Khusus', '2-4 HARI', 141000, 2, '1', 13860000);

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
(2, 38, 49, 12, '181121102150', 'blus baby pinky', 'blus-baby-pinky', '150000', '1', '12', '500', '0', 0, 'Y', 'a66c7a11b419b45a91efd53fc77c3130.jpg', '8da554408a51903ee1a4997e2f8057e7.jpg', '0d1b794f670463101d0735615087e618.jpg', 'c0fb280a182efa62a56bcead9ee3bf4d.jpg', 'c992e59e188978209cc9395a35a770ec.jpg', '00cdd1f01da9b08778049ff6d82adc0e.jpg', '3293f89983bcf5bc51b88770d20d7344.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:21:51', '2018-11-21 10:33:20'),
(3, 29, 50, 4, '181121104338', 'furniture RK', 'furniture-rk', '12500000', '1', '12', '12000', '0', 0, 'Y', '5db4c4a66a333cc89684ff607b0f6ec5.jpg', 'ebef276243473ab0c1a490ab6f4968f2.jpg', '59f66bcb467d25a9066ff08e42b99b21.jpg', '95a8b6d4e471889d8f6c555104cc0ad4.jpg', '53e8df9b53276df2dbbf0f497bdfc055.jpg', 'ba8632207cc2e2f683138786a596dd98.jpg', 'cff867a9e74dd2e1408dc8ac5d28a511.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:43:39', '2018-11-21 10:43:39'),
(4, 30, 36, 3, '181121104433', 'laptop', 'laptop', '5000000', '1', '12', '5000', '0', 0, 'Y', '7071db532405ce6bc226dc23239d1cb2.jpg', '7b44749eb11dfa243f0e0fc18dab15b5.jpg', '4b373a22f0f60204e81bd218e9bea5bb.jpg', 'eec016e41b25a4e6e7c37a675a015bb5.jpg', '249eb9582b887370d546490f3dd4f5a1.jpg', '342f3817b30e4f5961787fbc80bad6ee.jpg', '366739410a1f0962dc5f0ee660e23abb.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:44:34', '2018-11-21 10:44:34'),
(5, 31, 38, 3, '181121104610', 'hp  layar sentuh', 'hp--layar-sentuh', '5000000', '1', '12', '500', '0', 0, 'Y', '5f8107bb6dcc209ad8a42c8bdf0d7772.jpg', 'e8430f43bf385204b819fee589ff44ba.jpg', 'd0678cb72429a56062ca749ccfc7e011.jpg', '09080ed82892d1a0c1a1d582391a1af3.jpg', '0949ce9874bb15ea5f17d1654bed156c.jpg', '7ad4c7be7b562873af5941fed7f6e119.jpg', '039d04d84b27aec20276cdef51cdf68c.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:46:11', '2018-11-21 10:46:11'),
(6, 32, 51, 2, '181121104734', 'tv masa kini', 'tv-masa-kini', '12500000', '1', '12', '12000', '0', 0, 'Y', '2189ce1fc89c024afaafca61de78d4e3.jpg', '5d9d3954ab58facc0ac75c0d342a9fd3.jpg', '443a94db3f82c7e5845063351089da4d.jpg', '1fec02208d1e9b6d3886d2df522baa3b.jpg', 'dae2931ae7cf90a5737efc1de3649f3e.jpg', '62c89fccd60e80e89018251a566f2cfe.jpg', '5cc2fa3a1468c791aa54c0d0c0b05648.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:47:35', '2018-11-21 10:47:35'),
(7, 33, 45, 2, '181121104914', 'jaket baby blue jeans', 'jaket-baby-blue-jeans', '150000', '1', '12', '500', '0', 0, 'Y', '1d216b2ca5f1616b627d6ee27fe10a77.jpg', 'a2b149cd1cf9714a9ab737319ea53a4f.jpg', '3d99b89d95369763cd1a0a902833a51b.jpg', '039d65e98a1e48c9f0496071650d938b.jpg', '499ced07859c2b99a90312a4034521ed.jpg', 'ed45424deff5978a0b2033ae2e9b04da.jpg', 'a41695606949a73727278bee18724ec5.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:49:14', '2018-11-21 10:49:14'),
(8, 34, 52, 7, '181121104957', 'kamera', 'kamera', '5000000', '1', '12', '5000', '0', 0, 'Y', '2edba6f19a3d60525976f895aff9d374.jpg', 'ebc2078986aaacd7e8ad26764390ba82.jpg', 'f70f1b207f353885d9230beb0ee9e04d.jpg', 'c4163079764baac20c3d0d71e2b2cf00.jpg', '0f6e687d82dff86e1bab18588e618e46.jpg', '57f653ea37652a5fd4c0b859fbbe434b.jpg', 'e38086fa56d8d969ec8889e72a12879a.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:49:58', '2018-11-21 10:49:58'),
(9, 35, 43, 14, '181121105058', 'rajut bulu', 'rajut-bulu', '150000', '1', '12', '0.5', '0', 0, 'Y', 'd361ab0e84601890a9e0af2526792e8e.jpeg', '4be91461434cf485aad842a5d7ca3878.jpeg', '2ec3167a5a1d06bdc1fa7f8fa85ed22d.jpeg', 'a5ac3cdf851e4f37a814bab821e942cb.jpeg', '830702f511f531ab7d8b660baad5bafe.jpeg', '5706c85aaf16d966ba5be427a2a99726.jpeg', '903320efcd77fe7ee7aaab0556f4ef3e.jpeg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:50:59', '2018-11-21 10:50:59'),
(10, 36, 48, 13, '181121105139', 'sepeda gunung', 'sepeda-gunung', '5000000', '1', '12', '5', '0', 0, 'Y', '2031d7c3bf56d9b863bd9a4226d9c0ad.jpg', 'edcecb19774cbcc7007a1ad6d01dba8d.jpg', '2926ae9ba11e4f0a2600a332016befcf.jpg', '82e83936f8c7b009c69125968a486f25.jpg', 'd5a9e729e1b20a9abf1da438e1ad61c4.jpg', 'a28ab2982ee291129c5932ca77e55064.jpg', '86c9220a4f1dd8d231be3104859c27ed.jpg', '<p>bagus</p>\r\n', 1, 0, '2018-11-21 10:51:40', '2018-11-21 10:51:40'),
(11, 37, 53, 12, '181121105253', 'perlengkapan bayi', 'perlengkapan-bayi', '5000000', '1', '12', '5', '0', 0, 'Y', '8647d7323f87cd795372efa31f4fe806.jpg', '831e3aa06d2f8d6d4ffdfc33c73d2fcc.jpg', 'ee4d665da3b9d6210f6fe2381c627097.jpg', 'e87bbd717df6cff4d54d40520f65dcfe.jpg', '57c69e3e50bcbf4c625e6104c1394dfd.jpg', '1f60f2a29bcc76d75d474c322cc46878.jpg', '12bad98c58fbc04f4892eaa39c1b399e.jpg', '<p>bagus</p>\r\n', 1, 1, '2018-11-21 10:52:55', '2018-11-21 10:52:55'),
(12, 39, 54, 7, '181121105407', 'perkakas', 'perkakas', '150000', '1', '12', '0.5', '0', 0, 'Y', '711b9c364afe914d42e0b9c0e64ce479.jpg', '212f8f63e5d03dc4346e3865d74bad2d.jpg', 'eb750d1b2e5b2f1f7f1defe24eb80ac5.jpg', '750e6dbe352b6446526f2a0757ab9e10.jpg', 'ab71c7da49e062745d54e3ed819c85ce.jpg', 'd60e5993699d4c3fa4fe0362a6a0d7b6.jpg', '5026f8fbd36f75d5a73d0faf92c9f8be.jpg', '<p>bagus</p>\r\n', 1, 1, '2018-11-21 10:54:07', '2018-11-21 10:54:07'),
(13, 40, 47, 6, '181121105455', 'jajanan', 'jajanan', '150000', '1', '12', '5', '0', 0, 'Y', 'af5e9f45b85fbd298bc4d8f53bef3248.jpg', '727b791a991db3fea9e66c74b1fadc1e.jpg', '8c596d9c29210e71a1fa399a5ad0c9a6.jpg', 'c0fae22f46d3f033ea007a87cb08ff1c.jpg', '45f76103db2bdbe0b26f5f2bd84bd544.jpg', '73e74a88bdc8469f9021505b23de6866.jpg', '5912ebfe9b28c174f0927e4aad4fe634.jpg', '<p>bagus</p>\r\n', 1, 25, '2018-11-21 10:54:56', '2018-11-26 16:37:41'),
(14, 38, 49, 4, '181127043304', 'blus baby pinky', 'blus-baby-pinky', '150000', '1', '12', '500', '0', 0, 'Y', '4c21ae332b0bcdedcfc9731e989aceb1.jpg', '7c36cada421298b768bacff692f26cc5.jpg', 'a77abeb70362e43599ee536becc473a3.jpg', '5d103f151ed5ba6e4125fd0dda83911c.jpg', '1138a6ff8a0905f2305b7f1eaf70451a.jpg', 'f1cf48ce264370ca1acc8bffdfd7bb25.jpg', '45ca16aa75ffb871788924ef2bbb7e26.jpg', '<p>bagus</p>\r\n', 1, 55, '2018-11-27 16:33:06', '2018-11-27 16:33:06'),
(15, 40, 47, 3, '181129114112', 'LELE', 'lele', '10000', '1', '6', '1000', '3', 5, 'Y', 'b83c38df1ea3906fc999b702316fa3ee.png', '1c532a058acc3519caca03f7944671ea.png', '9604db1fdeaee5527ad6d7bb2ec9ebb5.png', '06635f601b7c225ee427e18dd9dcbb80.png', 'eaeb759f2f04fd6d5f5cadd80e567380.png', '55ceacbebd43bca6ca51b975e34b4996.png', '152b5a24be6f3b98b11424d5b4e69bfd.png', '<p>bagus</p>\r\n', 1, 269, '0000-00-00 00:00:00', NULL),
(16, 31, 38, 2, '181130103828', 'Ipad', 'ipad', '7000000', '1', '23', '1200', '1', 2, 'Y', 'bf1ced49f00e012a283a9b285cfd15cd.png', '572c45595bc0a00711c8e5fcf451ef4d.png', '0276e21e8c38fa9614d30bcbb8d3fc81.png', '9e1ad0bd9cd5c68aa45e121d4dcc0bd1.png', '1322348a3b3d7723c0403bcfff6171f5.png', '1a72c4d774b93892b7fd42d0e73a66b5.png', '442f1a16630958a0784201ac98b1b79d.png', '<p>\r\n	bagus mantab kondisi\r\n</p>\r\n', 1, 24, '0000-00-00 00:00:00', NULL);

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
(61, 3, 4, 'JL. Sukarno No. 1 A Solo', 'Ahmad Rudiantoro'),
(62, 2, 3, 'JL. Simpang Lima No. 67 A', 'Agus balabala');

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
(1, 2, 17, 'alamat rumah', 'agus nugroho wibowo'),
(3, 3, 17, 'alamat rumah', 'rudi'),
(4, 14, 18, 'Alamat Kantor', 'imip cantik'),
(41, 4, 14, 'JL. Patimura No. 10 A', 'Winda');

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
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`withdrawID`, `tagihanID`, `orderID`, `customerID`, `incomeDraw`, `tagDraw`, `totalDraw`, `sisaDraw`, `statusDraw`, `dateFinish`, `dateCreate`) VALUES
(8, 'BL220180405031031', 15, 2, 1060077, '1060077', '0', '', 'Selesai', '2018-04-09 17:06:54', '2018-04-05 15:10:31'),
(9, 'BL320180405040005', 16, 3, 10040080, '10040080', '0', '', 'Selesai', '2018-04-09 17:07:07', '2018-04-05 16:00:05'),
(10, 'BL320180419093121', 17, 3, 10000072, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-04-19 09:31:21'),
(11, 'BL320180419105650', 18, 3, 10000072, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-04-19 10:56:50'),
(12, 'BL220180420081019', 19, 2, 6000066, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-04-20 08:10:19'),
(13, 'BL220180420081125', 20, 2, 6020058, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-04-20 08:11:25'),
(14, 'BL320180430075956', 1, 3, 5000095, '5000095', '0', '', 'Waiting', '2018-05-02 12:39:43', '2018-04-30 07:59:56'),
(15, 'BL320180505063904', 2, 3, 9030092, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-05-05 06:39:04'),
(16, 'BL220180918091413', 3, 2, 8000039, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-09-18 09:14:13'),
(17, 'BL220180918093058', 4, 2, 8000023, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-09-18 09:30:58'),
(18, 'BL320180924062621', 5, 3, 8130079, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-09-24 06:26:21'),
(19, 'BL320180924092141', 6, 3, 8190066, '', '', '', 'Pending', '0000-00-00 00:00:00', '2018-09-24 09:21:41');

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
  MODIFY `cartID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `favoriteID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `locationID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `ordersDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `shipment_addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `withdrawID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
