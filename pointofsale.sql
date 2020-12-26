-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 08:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brandName`) VALUES
(4, 'Apoint Tech'),
(5, 'Dell'),
(6, 'Logic'),
(7, 'Havit'),
(8, 'Newmen'),
(9, 'A4tech'),
(10, 'Micropack'),
(11, 'Astrum'),
(12, 'Prolink'),
(13, 'China'),
(14, 'Rapoo'),
(15, 'Tp-link'),
(16, 'Toto Link'),
(17, 'Top-Power'),
(18, 'Asus'),
(19, 'Rohs Compliant'),
(20, 'HXS'),
(21, 'Sleeve bearing'),
(22, 'XYCP'),
(23, 'Golden Field'),
(24, 'Intel'),
(25, 'Samsung'),
(26, 'Electronica'),
(27, 'Microkingdom'),
(28, 'Sony'),
(29, 'Golden Sound'),
(30, 'Opula'),
(31, 'Studio'),
(32, 'Cosonic'),
(33, 'Canleen'),
(34, 'Logilily'),
(35, 'Microlab'),
(36, 'Apacer'),
(37, 'Transcend'),
(38, 'Adata'),
(39, 'LB-Link'),
(40, 'Lanjue'),
(41, 'Kaspersky'),
(42, 'Vipre'),
(43, 'Total Security'),
(44, 'Monster'),
(45, 'Amdias'),
(46, 'AMD RADEON'),
(47, 'Dlink'),
(48, 'Mobily'),
(49, 'Remax'),
(50, 'Lithium Cell'),
(51, 'XTREME'),
(52, 'AMD'),
(53, 'Esonic'),
(54, 'Gigabyte'),
(55, 'None'),
(56, 'Corsair'),
(57, 'Toshiba'),
(58, 'WD'),
(59, 'HP'),
(60, 'Canon'),
(61, 'Epson'),
(62, 'DigitalX'),
(63, 'Value Top'),
(64, 'Trust Print'),
(65, 'Real Print'),
(66, 'BK'),
(67, 'Cyan'),
(68, 'Lenovo'),
(69, 'Trust Me'),
(70, 'Circle'),
(71, 'Acer'),
(72, 'Dahua'),
(73, 'Hikvision'),
(76, 'Dlink'),
(77, 'IQRA'),
(78, 'sony');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catName`) VALUES
(1, 'keyboard'),
(7, 'Mouse & Keyboard'),
(8, 'Router'),
(9, 'Power Supply'),
(10, 'Dvd Writer'),
(11, 'HDTV CABLE'),
(12, 'Micro OTG Cable'),
(13, 'MULTIPORT USB HUB'),
(14, 'Card Reader'),
(15, 'SOUND CARD'),
(16, 'Caching Fan'),
(17, 'Adapter'),
(18, 'CPU Fan'),
(19, 'Balun'),
(20, 'Game Stick'),
(21, 'Mouse'),
(22, 'Tv Stick'),
(23, 'Headphone'),
(24, 'Speaker'),
(25, 'Cleaner'),
(26, 'HDD'),
(27, 'Mousepad'),
(28, 'Pendrive'),
(29, 'WIFI Adapter/Reciver'),
(30, ' Bluetooth Dongle'),
(31, 'Splitter'),
(32, 'Anivirus'),
(33, 'Graphics'),
(34, 'Earphone'),
(35, 'Modem'),
(36, 'Portable Hard Drive'),
(37, 'Data Cable'),
(38, 'CMOS BATERY'),
(39, 'Connector'),
(40, 'Processor'),
(41, 'Motherboard'),
(42, 'Ram'),
(43, 'Hard Drive'),
(44, 'SSD'),
(45, 'Monitor'),
(46, 'Printer'),
(47, 'UPS'),
(48, 'Casing'),
(49, 'Toner'),
(50, 'Printer Ink'),
(51, 'Laptop Battery'),
(52, 'Camera'),
(53, 'Xvr'),
(54, 'Power Plug'),
(55, 'cable'),
(56, 'Disk'),
(57, 'HDMI CABLE'),
(58, 'VGA CABLE'),
(59, 'USB Cable'),
(60, 'Screen/Skins'),
(62, 'Laptop'),
(63, 'wallmount'),
(64, 'usb hub');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `mobile`, `address`) VALUES
(34, 'Maidul Bai', '01711342133', 'kazi elias'),
(35, 'no name', '', ''),
(36, '', '01755569119', ''),
(37, 'no name', 'no number', ''),
(38, 'Pragati life insurance', '01723435012', 'uposhohor point'),
(39, 'Md. Sujon', '01712833109', 'chandigaht'),
(40, 'Estern Computer', '01818606966', 'Kazi Mention'),
(41, 'i care technology', '01715643855', 'Kazi Mention'),
(42, 'Md. Ruhul Ahmed', '01710442398', 'jollarpar'),
(43, 'Sunrise Electronics', '01741051655', ''),
(44, 'computer garage', '01711951112', ''),
(45, 'Md Harun', '01670591845', 'B block, upposhohor'),
(46, 'test', '123456', 'sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `customercash`
--

CREATE TABLE `customercash` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customercash`
--

INSERT INTO `customercash` (`id`, `customerId`, `total`, `cash`, `due`) VALUES
(27, 34, 3500, 0, 3500),
(28, 35, 1890, 1890, 0),
(29, 36, 8000, 8000, 0),
(30, 37, 530, 530, 0),
(31, 38, 500, 500, 0),
(32, 40, 2270, 1700, 570),
(33, 41, 320, 320, 0),
(34, 42, 2700, 100, 2600),
(35, 43, 400, 400, 0),
(36, 44, 920, 500, 420),
(37, 45, 39000, 30000, 9000),
(38, 46, 2200, 2100, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `customerinvoice`
--

CREATE TABLE `customerinvoice` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `invoiceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customerinvoice`
--

INSERT INTO `customerinvoice` (`id`, `customerId`, `invoiceId`) VALUES
(44, 34, 48),
(45, 35, 49),
(46, 35, 50),
(47, 36, 51),
(48, 35, 52),
(49, 37, 53),
(50, 37, 54),
(51, 35, 55),
(52, 38, 56),
(53, 40, 57),
(54, 41, 58),
(55, 41, 59),
(56, 42, 60),
(57, 37, 61),
(58, 43, 62),
(59, 44, 63),
(60, 45, 64),
(61, 46, 65),
(62, 46, 66),
(63, 42, 67),
(64, 42, 68),
(65, 42, 69),
(66, 42, 70),
(67, 42, 71),
(68, 42, 72),
(69, 36, 73),
(70, 40, 74),
(71, 40, 75),
(72, 44, 76);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `mobile`, `address`) VALUES
(1, 'Md.Mokbul Hussain', '01315807052', '38/15 nurani, bonkolapara,subidbazar'),
(2, 'Md. Maidul Islam', '01711342133', 'kazi ilias, zindabazar'),
(3, 'Md. Ruhul Amin', '01799207134', 'gonigonj,dirai,sunamgonj.'),
(4, 'Service , Bill', '013152807052', 'kazi ilias');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `expenseUser` int(50) NOT NULL,
  `expenseTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `expenseDate` date NOT NULL,
  `expenseTaka` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `expenseUser`, `expenseTitle`, `expenseDate`, `expenseTaka`) VALUES
(18, 3, 'Rackshow bara, naorpul to zidabazar.', '2019-07-13', 120),
(19, 1, 'Loan', '2019-07-13', 100),
(20, 3, 'manikpir camera service', '2019-07-13', 50),
(21, 1, 'Loan', '2019-07-14', 30),
(22, 3, 'Camer service fruite market', '2019-07-15', 30),
(23, 1, 'Loan', '2019-07-15', 50),
(24, 1, 'Loan', '2019-07-16', 50),
(25, 4, 'ruhul T- working cc bill', '2019-07-17', 1000),
(26, 3, 'invoice-1016 cc transport', '2019-07-17', 200),
(27, 1, 'Loan', '2019-07-17', 70),
(28, 1, 'loan', '2019-07-18', 60),
(29, 2, 'no title', '2019-07-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `incomeId` int(11) NOT NULL,
  `incomeTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `incomeDate` date NOT NULL,
  `incomeTaka` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomelist`
--

CREATE TABLE `incomelist` (
  `id` int(11) NOT NULL,
  `incomeName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `incomelist`
--

INSERT INTO `incomelist` (`id`, `incomeName`) VALUES
(1, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoiceNo` bigint(20) NOT NULL,
  `invoiceTotal` bigint(20) NOT NULL,
  `invoiceCash` bigint(20) NOT NULL,
  `invoiceDue` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoiceNo`, `invoiceTotal`, `invoiceCash`, `invoiceDue`, `date`, `time`) VALUES
(48, 1000, 3500, 0, 3500, '2019-07-13', '06:29 pm'),
(49, 1001, 1200, 1200, 0, '2019-07-13', '06:40 pm'),
(50, 1002, 500, 500, 0, '2019-07-13', '06:44 pm'),
(51, 1003, 7500, 7500, 0, '2019-07-13', '07:18 pm'),
(52, 1004, 40, 40, 0, '2019-07-13', '08:17 pm'),
(53, 1005, 230, 230, 0, '2019-07-14', '11:01 am'),
(54, 1006, 140, 140, 0, '2019-07-14', '11:37 am'),
(55, 1007, 150, 150, 0, '2019-07-14', '09:33 pm'),
(56, 1008, 500, 500, 0, '2019-07-15', '04:26 pm'),
(57, 1009, 770, 500, 270, '2019-07-15', '06:43 pm'),
(58, 1010, 100, 100, 0, '2019-07-15', '06:45 pm'),
(59, 1011, 220, 0, 220, '2019-07-15', '06:48 pm'),
(60, 1012, 2700, 0, 2700, '2019-07-15', '06:52 pm'),
(61, 1013, 160, 160, 0, '2019-07-15', '08:41 pm'),
(62, 1014, 400, 400, 0, '2019-07-16', '05:12 pm'),
(63, 1015, 20, 0, 20, '2019-07-16', '05:50 pm'),
(64, 1016, 39000, 0, 39000, '2019-07-16', '08:15 pm'),
(65, 1017, 200, 100, 100, '2011-03-08', '12:12 am'),
(66, 1018, 1000, 2000, 1000, '2019-07-20', '07:31 pm'),
(70, 1019, 0, 100, 0, '2019-07-20', '11:48 pm'),
(71, 1020, 0, 0, 0, '2019-07-20', '11:52 pm'),
(72, 1021, 0, 0, 0, '2019-07-20', '11:55 pm'),
(73, 1022, 500, 500, 0, '2020-06-10', '11:06 am'),
(74, 1023, 700, 400, 300, '2020-06-10', '11:07 am'),
(75, 1024, 800, 800, 0, '2020-06-10', '11:12 am'),
(76, 1025, 900, 500, 400, '2020-06-10', '11:20 am');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(11) NOT NULL,
  `itemName` text COLLATE utf8_unicode_ci NOT NULL,
  `itemModel` text COLLATE utf8_unicode_ci NOT NULL,
  `itemBuyPrice` int(11) NOT NULL,
  `itemSellPrice` bigint(20) NOT NULL,
  `itemQuantity` int(11) NOT NULL,
  `itemDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `itemCondition` int(11) NOT NULL DEFAULT 1,
  `itemCatId` int(11) NOT NULL,
  `itemBrandId` int(11) NOT NULL,
  `itemSupplyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `itemModel`, `itemBuyPrice`, `itemSellPrice`, `itemQuantity`, `itemDescription`, `itemCondition`, `itemCatId`, `itemBrandId`, `itemSupplyId`) VALUES
(6, 'USB Standard Keyboard ', 'KB8003', 160, 200, 3, '1 year', 1, 1, 4, 3),
(7, 'Multimedia Keyboard', 'D618', 200, 250, 4, 'no', 1, 1, 5, 11),
(8, 'Multimedia Fashion Keyboard', 'K188', 180, 250, 10, 'no', 1, 1, 6, 11),
(9, 'Super Slim Keyboard', 'HVKB329', 310, 400, 5, '', 1, 1, 7, 2),
(10, 'Mouse & Keyboard Ultra Slim', 'T320', 700, 0, 2, '', 1, 7, 8, 4),
(11, 'Natural Multimeda Keyboard', 'KLS5', 575, 650, 1, 'no', 1, 1, 9, 5),
(12, 'Compact Multimedia Keyboard', '3300N', 0, 0, 1, '', 1, 1, 9, 4),
(13, 'Comfort Keyboard', 'KR83', 475, 600, 1, '', 1, 1, 9, 5),
(14, 'Comfort Keyboard Round', 'KR85', 475, 600, 14, '', 1, 1, 9, 4),
(15, 'Classic Keyboard', 'K203', 210, 0, 0, '', 1, 1, 10, 2),
(16, 'Wireless Keyboard & Mouse', 'KW250', 1000, 0, 1, '', 1, 7, 11, 6),
(18, 'wireless mouse & keyboard', 'KB005', 700, 900, 1, '', 1, 7, 4, 3),
(19, 'Astrum - desktop keyboard', 'KB100', 295, 0, 1, '', 1, 1, 11, 6),
(20, 'wireless mouse & keyboard', '8000', 1400, 1650, 2, '1 year', 1, 7, 14, 5),
(21, 'wireless mouse & keyboard combo', 'RFCOMB001', 560, 800, 5, 'no', 1, 7, 4, 3),
(22, 'AC750 wireless dual band router', 'Archer C20', 2000, 2300, 1, '1 year', 1, 8, 15, 2),
(23, 'AC1200 wireless dual band router', 'Archer C50', 2700, 3050, 1, '1 year', 1, 8, 15, 2),
(24, 'wireless N router 300 mbps', 'TLWR841', 1400, 1550, 2, 'no', 1, 8, 15, 2),
(25, 'wireless N router 300 mbps', 'TLWR840N', 1200, 1450, 2, 'no', 1, 8, 15, 2),
(26, '150mbps wireless router', 'N150RT', 900, 900, 10, 'no', 1, 8, 16, 1),
(27, 'power supply', 'TPATX20', 540, 700, 9, 'no', 1, 9, 4, 3),
(28, 'power supply', 'P5ATX500WUSA', 290, 450, 9, 'no', 1, 9, 17, 7),
(29, 'Dvd Writer', 'DRW24D3ST', 615, 1300, 5, '1 year', 1, 10, 18, 7),
(30, 'HDTV cable platinum series ', '400PPI', 500, 0, 2, '', 1, 11, 19, 11),
(31, 'HDTV 24K GOLD PLUG 1.5m', 'HDTV 1.4a', 100, 200, 9, '', 1, 11, 19, 7),
(32, 'Micro OTG Cable 0.2M', 'OD020', 65, 90, 4, '', 1, 12, 11, 6),
(33, 'multiport usb hub', 'UH040', 250, 400, 2, '', 1, 13, 11, 6),
(34, 'Card Reader 480 Mbps 32 Gb', 'CARD-USB-2.0', 65, 80, 1, '', 1, 14, 13, 11),
(35, 'PCI sound card 3D multimedia', 'SSD-EMI-6CH', 150, 0, 2, '', 1, 15, 13, 3),
(36, 'caching fan', 'C12025B', 90, 150, 5, '', 1, 16, 20, 7),
(37, 'Dc Caching Fan', 'FL8025S', 45, 70, 9, 'no', 1, 16, 21, 7),
(38, 'Caching Fan Dc 12v', 'LY1225M12S', 190, 250, 3, 'no', 1, 16, 22, 7),
(39, 'Adapter Safety Mark', 'T0500602D1', 90, 0, 8, '', 1, 17, 15, 7),
(40, 'Switching power supply', 'GF500', 550, 800, 1, 'no', 1, 9, 23, 5),
(42, 'apoint tech cooling fan or cpu fan', 'LGA775', 145, 250, 13, 'no', 1, 18, 6, 11),
(44, 'cctv adapter', 'ROHS-EP', 100, 200, 15, 'no', 1, 17, 13, 12),
(45, 'Switching Power Supply Adapter', 'ADS11', 60, 120, 3, '', 1, 17, 13, 7),
(46, 'VIDEO BELUN CC Camera', 'BALUN', 65, 200, 52, '', 1, 19, 13, 1),
(47, 'Ac Adapter', 'AP04212UV', 300, 400, 4, '', 1, 17, 25, 7),
(48, 'Adapter Ac to Dc', 'EA00AD', 185, 300, 6, 'no', 1, 17, 26, 7),
(49, 'USB Gamepade with vibration', 'HVG69', 335, 450, 2, 'no', 1, 20, 7, 2),
(50, 'Gamestick', 'USB801S', 100, 0, 3, '', 1, 20, 27, 4),
(51, 'Dualshock 2 Gamepad', 'SCPH1001U/97926', 300, 450, 1, '', 1, 20, 28, 3),
(52, 'Power Souing wireless mouse', 'Q20', 300, 400, 1, 'no', 1, 21, 6, 11),
(53, '3d optical mouse', 'AT202', 110, 0, 0, '', 1, 21, 4, 3),
(54, 'USB Optical Mouse', 'MS111', 95, 150, 2, 'no', 1, 21, 5, 11),
(57, 'Optical Mouse', 'MS116', 120, 0, 0, '', 1, 21, 5, 11),
(58, 'Optical Wired Mouse', 'M101', 220, 450, 1, 'no', 1, 21, 10, 2),
(59, 'Optical Mouse', 'OP1100', 60, 100, 16, 'no', 1, 21, 4, 3),
(60, 'DPI1200 Wired USB Mouse', 'LG302', 200, 250, 3, 'no', 1, 21, 6, 11),
(61, '2.4GHz Wireless Optical Mouse', 'PMW5005', 550, 700, 2, '6 month', 1, 21, 12, 2),
(62, 'USB Optical Mouse', 'PMC1005', 250, 380, 5, 'no', 1, 21, 12, 2),
(63, 'USB Tv Stick', 'UTV383E', 950, 1150, 1, '6 month', 1, 22, 4, 3),
(64, 'Stereo Headphone', 'HVH2106d', 385, 500, 2, 'no', 1, 23, 7, 2),
(65, 'Golden Sound', 'GSU04', 170, 220, 8, 'no', 1, 24, 29, 3),
(66, 'Wireless Speaker', 'HLY666', 300, 400, 1, 'no', 1, 24, 13, 9),
(67, 'Better Sound Quality Multifunction', 'S2028', 990, 1250, 3, 'no', 1, 24, 13, 9),
(68, 'Lcd Cleanser Kit', 'KCL1029', 80, 150, 10, 'no', 1, 25, 30, 11),
(69, ' Hard Disk caching', 'F2', 200, 300, 4, 'no', 1, 26, 13, 3),
(70, 'Expert In Cleaning Screen', '1036', 55, 110, 4, 'no', 1, 25, 13, 11),
(71, 'My Passport Ultra', 'WD', 550, 600, 4, 'no', 1, 26, 58, 11),
(72, 'WD Elements', '063', 400, 500, 1, 'no', 1, 26, 58, 11),
(73, 'Headphone with Bluetooth Function', 'HVH25588T', 950, 1200, 1, 'no', 1, 23, 7, 2),
(74, 'Bluetooth Stereo/mp3/headset', 'TM010', 650, 750, 1, 'no', 1, 23, 31, 11),
(75, 'Comfortfit Stereo Headset', 'HS30', 650, 750, 2, 'no', 1, 23, 9, 5),
(76, 'Frolic Stereo Headset', 'PHC1002E', 750, 900, 2, 'no', 1, 23, 12, 2),
(77, 'Cosonic Headphone', 'CH6099', 360, 500, 1, 'no', 1, 23, 32, 3),
(78, 'Wired Optical Mouse', 'G7', 1200, 1500, 1, '', 1, 21, 8, 4),
(79, 'Canleen Stereo Headphones', 'CT625', 300, 350, 1, 'no', 1, 23, 33, 11),
(80, 'Mousepad Silk-Gliding', 'R7', 27, 50, 1, 'no', 1, 27, 13, 3),
(81, 'Gaming mousepad', 'L11', 35, 60, 9, 'no', 1, 27, 34, 3),
(82, 'Mousepad Silk-Gliding', 'R8', 35, 60, 9, 'no', 1, 27, 13, 3),
(83, 'Super game da pad', 'XCX5', 55, 100, 17, 'no', 1, 27, 13, 3),
(84, 'Microlab just listen', 'M108', 1400, 1500, 1, 'no', 1, 24, 35, 1),
(85, '2.1 Speaker System', 'S300', 2800, 3200, 1, '', 1, 24, 23, 5),
(86, 'USB 3.1 Gen 1 Flash Drive 16 GB', 'AH357', 300, 400, 4, '', 1, 28, 36, 2),
(87, 'USB 3.1 Gen 1 Flash Drive 32 GB', 'AH25B', 400, 0, 1, '', 1, 28, 36, 2),
(88, 'USB 3.1 Gen 1 Flash Drive 64 GB', 'AH25A', 650, 850, 1, '', 1, 28, 36, 2),
(89, 'USB 3.1 Gen 1 Flash Drive 16 GB', '730', 465, 500, 5, '', 1, 28, 37, 8),
(90, 'USB 3.1 Gen 1 Flash Drive 64 GB', '790', 1135, 900, 3, '', 1, 28, 37, 8),
(91, 'USB 3.1 Gen 1 Flash Drive 16 GB', 'UV320', 300, 400, 4, '', 1, 28, 38, 5),
(92, 'USB 3.1 Gen 1 Flash Drive 32 GB', 'UV128', 400, 550, 0, '', 1, 28, 38, 5),
(93, 'Wireless nano adapter 300mbps', 'NA300', 450, 700, 3, '', 1, 29, 11, 6),
(94, '150mbps nano wireless usb adapter', 'BLWN151', 250, 400, 5, '', 1, 29, 39, 7),
(95, 'Bluetooth CSR 4.0 Dongle', '4.0 Dongle', 200, 300, 4, '', 1, 30, 13, 4),
(96, 'Bluetooth CSR 2.0  usb Dongle', '2.0 Dongle', 100, 200, 1, '', 1, 30, 13, 4),
(97, 'Pc wired gamepad', 'AT2021', 340, 450, 1, 'no', 1, 20, 4, 3),
(98, 'Apus Game Pad', 'L4000', 230, 350, 2, '', 1, 20, 40, 11),
(99, 'HDMI Splitter ver 1.4', '1080p', 1000, 1300, 2, 'no', 1, 31, 13, 2),
(100, 'VGA Splitter', 'VGA2004', 500, 800, 2, 'no', 1, 31, 13, 7),
(101, 'Vipre Internet Security', '2145', 0, 0, 2, '', 0, 32, 42, 4),
(102, '360+ Extra Protection Antivirus', '2500', 0, 0, 4, '', 0, 32, 43, 4),
(103, 'Kaspersky Internet Security', 'KASPERSKY', 460, 800, 38, '', 1, 32, 41, 10),
(104, 'Bluetooth Stereo/mp3/headset', 'STN-10', 650, 750, 1, 'no', 1, 23, 44, 11),
(105, 'Optical Gaming Mouse', 'DEMETER E1', 650, 800, 1, 'no', 1, 21, 45, 2),
(107, 'samsung earphone', 'samsung', 20, 30, 8, '', 1, 34, 25, 9),
(108, 'Wireless Data Modem usb Card', 'DWP157', 1200, 1300, 1, '6 month', 1, 35, 47, 11),
(109, '4G LTE', '4G-LTE', 800, 1000, 2, '', 1, 35, 48, 7),
(110, 'Rainbow Optical Mouse', 'MP216', 300, 450, 1, 'no', 1, 21, 10, 2),
(111, 'astrum Wire Optical Mouse', 'MU130', 350, 500, 1, 'no', 1, 21, 11, 6),
(112, 'USB 3.1 Portable Hard Drive 1TB', '25C3N', 4800, 5000, 1, '', 1, 36, 37, 8),
(113, 'USB Data Cable', '9195', 40, 80, 6, '', 1, 37, 49, 9),
(114, 'Micro Usb  OTG Cable Adapter', 'KS05', 30, 50, 2, '', 1, 12, 13, 9),
(115, 'OTG&USB cable', 'USB 2.0', 15, 50, 1, '', 1, 12, 49, 9),
(116, 'Micro USB Cable', 'UD360', 170, 250, 1, '', 1, 37, 11, 6),
(117, 'CMOS BATTRY', 'CR2032', 23, 30, 10, '', 1, 38, 50, 11),
(118, 'Wireless Keyboard', 'BK801', 600, 700, 2, '', 1, 1, 4, 3),
(119, 'rj45 UTP CAT6 CONNECTOR', '8P8C3U', 6, 10, 38, '', 1, 39, 51, 11),
(120, '3d optical mouse', 'AT200', 150, 250, 0, 'no', 1, 21, 4, 3),
(121, '3d optical mouse', 'AT201', 150, 250, 2, 'no', 1, 21, 4, 3),
(122, 'Dual Core 2.5 GHZ', '', 150, 0, 0, '', 1, 40, 24, 1),
(123, 'Dual Core 3.0 GHZ', '', 200, 0, 0, '', 1, 40, 24, 1),
(124, 'Core 2 Duo 3.0 GHZ', '', 300, 0, 0, '', 1, 40, 24, 1),
(125, 'Dual Core 2.7 GHZ 2nd G', '', 450, 0, 0, '', 1, 40, 24, 1),
(126, 'Dual Core 4th Gen 3.0 GHZ', '', 3100, 0, 0, '', 1, 40, 24, 1),
(127, 'Dual Core 6th Gen 2.9 GHZ ', '', 6000, 0, 0, '', 1, 40, 24, 1),
(128, 'Dual Core 7th Gen 3.5 GHZ ', '', 700, 0, 0, '', 1, 40, 24, 1),
(129, 'Dual Core 8th Gen 3.7 GHZ ', '', 7400, 0, 0, '', 1, 40, 24, 1),
(130, 'i3 1st gen 3.06', '', 850, 0, 0, '', 1, 40, 24, 1),
(131, 'i3 2nd gen 3.3', '', 2300, 0, 0, '', 1, 40, 24, 1),
(132, 'i3 3rd gen 3.4', '', 2700, 0, 0, '', 1, 40, 24, 1),
(133, 'i3 4th gen 3.6', '', 5400, 0, 0, '', 1, 40, 24, 1),
(134, 'i3 7th gen 3.9', '', 12500, 0, 0, '', 1, 40, 24, 1),
(135, 'i3 8th gen 3.6', '', 10850, 0, 0, '', 1, 40, 24, 1),
(136, 'i5 2nd gen 3.0', '', 3700, 0, 0, '', 1, 40, 24, 1),
(137, 'i5 2nd gen 3.3', '', 3800, 0, 0, '', 1, 40, 24, 1),
(138, 'i5 3rd gen 2.9', '', 4000, 0, 0, '', 1, 40, 24, 1),
(139, 'i5 3rd gen 3.2', '', 4300, 0, 0, '', 1, 40, 24, 1),
(140, 'i5 4th gen 2.9', '', 6700, 0, 0, '', 1, 40, 24, 1),
(141, 'i5 7th gen 3.0', '', 16200, 0, 0, '', 1, 40, 24, 1),
(142, 'i5 8th gen 2.8', '', 17800, 0, 0, '', 1, 40, 24, 1),
(143, 'i5 9th gen 9600k', '', 23500, 0, 0, '', 1, 40, 24, 1),
(144, 'i7 8th gen 3.2', '', 27700, 0, 0, '', 1, 40, 24, 1),
(145, 'i9 9900k 3.6 GHz', '', 48500, 0, 0, '', 1, 40, 24, 1),
(146, 'Ryzen 3 2200G', '', 9000, 0, 0, '', 1, 40, 52, 1),
(147, 'Ryzen 5 2400G', '', 13200, 0, 0, '', 1, 40, 52, 1),
(148, 'g31', '', 2050, 0, 0, '', 1, 41, 53, 1),
(149, 'g41', '', 2250, 0, 0, '', 1, 41, 53, 1),
(150, 'H55', '', 3200, 0, 0, '', 1, 41, 53, 1),
(151, 'h61', '', 3050, 0, 0, '', 1, 41, 53, 1),
(152, 'H81', '', 3300, 0, 0, '', 1, 41, 53, 1),
(153, 'J1800', '', 4950, 0, 0, '', 1, 41, 54, 1),
(154, 'g41 combo', '', 4800, 0, 0, '', 1, 41, 54, 1),
(155, 'H61M-S', '', 5500, 0, 0, '', 1, 41, 54, 1),
(156, 'H61M-Ds2', '', 5600, 0, 0, '', 1, 41, 54, 1),
(157, 'H81', '', 4900, 0, 0, '', 1, 41, 54, 1),
(158, 'H110', '', 4900, 0, 0, '', 1, 41, 54, 1),
(159, 'B310', '', 6200, 0, 0, '', 1, 41, 54, 1),
(160, 'B310 HDMI', '', 6500, 0, 0, '', 1, 41, 54, 1),
(161, 'B360', '', 7100, 0, 0, '', 1, 41, 54, 1),
(162, 'B360 4ram slot', '', 8200, 0, 0, '', 1, 41, 54, 1),
(163, 'A320 amd', '', 5100, 0, 0, '', 1, 41, 54, 1),
(164, 'B450 Amd g', '', 7300, 0, 0, '', 1, 41, 54, 1),
(165, '1gb ddr2', '', 150, 0, -1, '', 1, 42, 13, 1),
(166, '2gb ddr2', '', 400, 0, 0, '', 1, 42, 13, 1),
(167, ' 2Gb Ddr3', '', 600, 0, 0, '', 1, 42, 13, 1),
(168, '4gb ddr3 1333', '', 1200, 0, 0, '', 1, 42, 13, 1),
(169, '4gb ddr3 1600bus', '', 1550, 0, 0, '', 1, 42, 13, 1),
(170, '8gb 1600', '', 4000, 0, 0, '', 1, 42, 13, 1),
(171, 'Corsair 4G', '', 2450, 0, 0, '', 1, 42, 56, 1),
(172, 'Corsair 8GB', '', 4350, 0, 0, '', 1, 42, 56, 1),
(173, 'Corsair 16gb 3000bus', '', 9500, 0, 0, '', 1, 42, 56, 1),
(174, '4gb ddr4', '', 2000, 0, 0, '', 1, 42, 13, 1),
(175, '8gb ddr4 ', '', 4000, 0, 0, '', 1, 42, 13, 1),
(176, 'Laptop ddr2 2gb', '', 800, 0, 0, '', 1, 42, 13, 1),
(177, 'Laptop  Ddr3 4GB', '', 1500, 0, 0, '', 1, 42, 13, 1),
(178, 'Laptop 8gb ddr3', '', 2700, 0, 0, '', 1, 42, 13, 1),
(179, 'hard drive 160gb', '', 600, 0, 0, '', 1, 43, 13, 1),
(180, 'hard drive 250gb', '', 700, 0, 0, '', 1, 43, 13, 1),
(181, 'hard drive 320gb', '', 800, 0, 0, '', 1, 43, 13, 1),
(182, 'hard drive 500gb', '', 1100, 0, 0, '', 1, 43, 13, 1),
(183, 'hard drive 1TB', '', 2600, 0, 0, '', 1, 43, 13, 1),
(184, 'hard drive 2tb', '', 4000, 0, 0, '', 1, 43, 13, 1),
(185, 'hard drive 1tb', '', 3250, 0, 0, '', 1, 43, 57, 1),
(186, 'hard drive 2tb', '', 4700, 0, 0, '', 1, 43, 57, 1),
(187, 'hard drive 1Tb', '', 3500, 0, 0, '', 1, 43, 58, 1),
(188, 'hard drive 2TB', '', 5400, 0, 0, '', 1, 43, 58, 1),
(189, 'hard drive 4tb Purple', '', 8000, 0, 0, '', 1, 43, 58, 1),
(190, ' hard drive 4tb blue', '', 9200, 0, 0, '', 1, 43, 58, 1),
(191, 'laptop hard drive 320 gb', '', 1300, 0, 0, '', 1, 43, 13, 1),
(192, 'laptop hard drive 500gb', '', 1900, 0, 0, '', 1, 43, 13, 1),
(193, 'Laptop hard drive 500gb HGST 2Y', '', 2900, 0, 0, '', 1, 43, 13, 1),
(194, 'laptop hard drive 1tb 2y', '', 3850, 0, 0, '', 1, 43, 57, 1),
(195, 'USB 3.1 Portable Hard Drive 2TB', '', 7000, 0, 0, '', 1, 36, 37, 1),
(196, 'USB 3.1 Portable Hard Drive 1TB', '', 4500, 0, 0, '', 1, 36, 58, 1),
(197, 'USB 3.1 Portable Hard Drive 2TB', '', 6500, 0, 0, '', 1, 36, 58, 1),
(198, 'SSD 120GB', '', 2000, 0, 0, '', 1, 44, 58, 1),
(199, 'SSD 240GB ', '', 3100, 0, 0, '', 1, 44, 58, 1),
(200, 'SSD 120GB', '', 2100, 0, 0, '', 1, 44, 37, 1),
(201, 'SSD 240GB', '', 3300, 0, 0, '', 1, 44, 37, 1),
(202, 'dvd writer Liteon', '', 900, 0, 0, '', 1, 10, 13, 1),
(203, 'dvd writer Portable', '', 1600, 0, 0, '', 1, 10, 18, 1),
(204, 'dvd writter laptop large', '', 900, 0, 0, '', 1, 10, 13, 1),
(205, 'dvd writter laptop slim', '', 1000, 0, 0, '', 1, 10, 13, 1),
(207, 'monitor 17 inchi', 'ESM17', 3000, 3500, 0, '1 year', 1, 45, 53, 1),
(208, 'monitor 19 inchi', '', 3500, 0, 0, '', 1, 45, 53, 1),
(209, 'monitor 19 inchi', '', 5800, 0, 0, '', 1, 45, 25, 1),
(210, 'monitor 19 inchi', '', 5300, 0, 0, '', 1, 45, 5, 1),
(211, 'monitor 22 inchi', '', 9600, 0, 0, '', 1, 45, 5, 1),
(212, 'monitor 19 inchi', '', 5200, 0, 0, '', 1, 45, 59, 1),
(213, 'monitor 22 fw inchi', '', 10300, 0, 0, '', 1, 45, 59, 1),
(214, 'printer Canon LBP 6030', '', 7800, 0, 0, '', 1, 46, 60, 1),
(215, 'printer Canon 6230dn', '', 11500, 0, 0, '', 1, 46, 60, 1),
(216, 'printer EPSON L130', '', 9200, 0, 0, '', 1, 46, 61, 1),
(217, 'printer EPSON L3110', '', 13500, 0, 0, '', 1, 46, 61, 1),
(218, 'printer EPSON L805', '', 23500, 0, 0, '', 1, 46, 61, 1),
(219, 'printer EPSON L1300A3', '', 33000, 0, 0, '', 1, 46, 61, 1),
(220, 'printer EPSON L1800 A3', '', 43000, 0, 0, '', 1, 46, 61, 1),
(221, 'printer HP 12A', '', 7000, 0, 0, '', 1, 46, 59, 1),
(222, 'Ups 650VA', '', 2200, 0, 0, '', 1, 47, 62, 1),
(223, 'USB 3.1 Gen 1 Flash Drive 32 GB', 'UV350', 400, 600, 8, '', 1, 28, 38, 5),
(224, 'USB 3.1 Gen 1 Flash Drive 64 GB', 'UV128', 650, 850, 2, '', 1, 28, 38, 5),
(225, 'Canleen Stereo Headphones', 'CT770', 350, 450, 1, 'no', 1, 23, 33, 11),
(226, 'Casing', '', 900, 1050, 2, 'no', 1, 48, 53, 1),
(227, 'Cassing', '', 2250, 2500, 1, 'no', 1, 48, 23, 5),
(228, 'Cassing', '', 1700, 2000, 7, 'no', 1, 48, 63, 2),
(229, 'Toner', '49A', 500, 700, 2, 'no', 1, 49, 64, 3),
(230, 'Toner', '05A', 500, 700, 1, 'no', 1, 49, 64, 3),
(231, 'Toner', '85A', 400, 0, 0, '', 1, 49, 65, 3),
(232, 'Toner', 'D104', 800, 1000, 1, 'no', 1, 49, 65, 3),
(233, 'Toner', '108/1043', 0, 0, 2, '', 1, 49, 25, 4),
(234, 'Color Fly Refill Ink', '', 45, 80, 12, 'no', 1, 50, 66, 7),
(235, 'Epson Refill Ink 70ml', 'EPT66(7)X', 70, 120, 41, 'no', 1, 50, 55, 7),
(236, 'Ink Write Premium Ink', '', 80, 100, 3, 'no', 1, 50, 55, 7),
(237, 'Laptop Adapter', 'Lenovo', 300, 400, 6, 'no', 1, 17, 68, 1),
(238, 'Laptop Adapter', 'Dell TGT', 500, 650, 2, '', 1, 17, 5, 13),
(242, 'Laptop Adapter', 'Hp TGT', 450, 600, 1, '', 1, 17, 59, 13),
(244, 'Note Book Battery', 'SHDE1525', 0, 0, 1, '', 1, 51, 69, 1),
(245, 'Note Book Battery', 'SHHPDV2000', 0, 0, 1, '', 1, 51, 69, 1),
(246, 'Note Book Battery', 'HPPCQ42T3S2P', 0, 0, 1, '', 1, 51, 70, 1),
(247, 'laptop Battery', '1525', 0, 0, 1, '', 1, 51, 5, 1),
(248, 'laptop Battery', '3810', 0, 0, 1, '', 0, 51, 71, 1),
(249, 'Laptop Adapter', 'Dell GT', 350, 450, 2, '', 1, 17, 13, 3),
(250, 'Laptop Adapter', 'Hp GT', 300, 400, 1, '', 1, 17, 13, 3),
(251, 'Hikvision Camera 720p', 'DS-2CE16COT-IRPF', 900, 1250, 1, '', 1, 52, 73, 12),
(252, 'Hikvision Camera 1080p', 'DS-2CE16DOT-IT3F', 1900, 2500, 0, '', 1, 52, 73, 12),
(253, 'hikvision', 'CAT 6', 7, 10, 408, 'no', 1, 55, 73, 12),
(254, 'D-link', 'CAT 6', 4, 6, 375, 'no', 1, 55, 47, 1),
(255, 'Iqra it dacoration ', '', 150000, 0, 1, '', 1, 1, 4, 4),
(256, 'Iqra it advanced', '', 80000, 0, 1, '', 1, 1, 4, 4),
(257, 'Iqra it printer', '', 7000, 0, 1, '', 1, 1, 77, 4),
(258, 'Iqra it pc & monitor 22 inchi ', '', 17000, 0, 1, '', 1, 45, 77, 4),
(259, 'Iqra it cctv & monitor', '', 40000, 0, 1, '', 1, 45, 77, 4),
(260, 'dvd software', 'CD', 22, 40, 392, '', 1, 56, 13, 4),
(261, 'hdmi male-male cable 5.0 m', 'HD105', 390, 0, 9, '', 1, 57, 11, 6),
(262, 'svga  cable 30 m', '', 900, 1100, 1, '', 1, 58, 13, 1),
(263, 'vga cable 10m', '', 500, 700, 1, '', 1, 58, 13, 1),
(264, 'vga monitor cable 5m', '', 325, 500, 2, '', 1, 58, 11, 6),
(265, 'vga monitor cable 3m', '', 180, 250, 2, '', 1, 58, 11, 6),
(266, 'vga monitor cable 1.8m', '', 175, 250, 8, '', 1, 58, 11, 6),
(267, 'usb extension cable 5m', '', 150, 300, 3, '', 1, 59, 11, 6),
(268, 'usb extension cable 1.8m', '', 90, 150, 10, '', 1, 59, 11, 6),
(269, 'usb device cable 3.0m', '', 130, 250, 4, '', 1, 59, 11, 6),
(270, 'usb cable high speed', '', 80, 120, 1, '', 1, 59, 13, 11),
(271, 'vga cable m/m 5m', '', 250, 350, 6, '', 1, 58, 13, 3),
(272, 'usb extension cable 3 m', '', 100, 150, 2, '', 1, 59, 11, 6),
(273, 'usb device cable 5.0m', '', 150, 300, 3, '', 1, 59, 11, 6),
(274, 'power cable good', '016583', 100, 200, 22, '', 1, 54, 13, 3),
(275, 'power cable without fuse normal', '', 25, 0, 22, '', 1, 54, 13, 3),
(276, 'power cable with fuse normal', '', 55, 100, 7, '', 1, 54, 13, 3),
(277, 'Iqra it tools accessorise', '', 12000, 0, 1, '', 1, 1, 77, 1),
(278, 'Iqra it monitor and ipc', '', 8000, 0, 1, '', 1, 1, 77, 4),
(279, 'Md Mokbul Hussain ', '01315807052', 234202, 234202, 0, 'Loan Taka', 1, 1, 4, 4),
(280, 'laptop skins', '15.6', 90, 120, 11, 'no', 1, 60, 13, 11),
(281, 'Monitor screen protector', '19 inchi', 190, 350, 10, 'no', 1, 60, 13, 11),
(282, 'laptop screen protector', '14 inchi', 70, 120, 2, 'no', 1, 60, 13, 11),
(284, 'wd 2tb hard drive', 'SCHA500', 5000, 5500, 0, '', 1, 43, 58, 1),
(302, 'dahua camera', 'HFW1200DP', 2510, 3000, 0, '', 1, 52, 72, 12),
(303, 'dahua xvr', 'XVR1A04', 3000, 4500, 0, '', 1, 53, 72, 12),
(305, 'Logitech Keyboard', 'K120', 490, 620, 5, '1 year', 1, 1, 6, 2),
(306, 'Logitech wireless mouse', 'M171', 750, 950, 3, 'no', 1, 21, 6, 2),
(307, 'Havit 2.0 usb speaker', 'SK589', 350, 500, 5, 'no', 1, 24, 7, 2),
(308, 'micropack keyboard and mouse combo', 'KM2003', 470, 0, 5, '', 1, 7, 10, 2),
(309, 'prolink  usb optical mouse', 'PMC1006', 200, 300, 5, 'no', 1, 21, 12, 2),
(310, 'havit vertical microphone', 'M60', 210, 350, 2, '', 1, 24, 7, 2),
(311, 'A4 tech v-trach optical mouse', '0P560NU', 225, 350, 9, '', 1, 21, 9, 5),
(312, 'A4 tech 2.4g wireless v-track mouse', 'G3280N', 460, 600, 2, 'no', 1, 21, 9, 5),
(313, 'Huntkey power strip 2pin plug 3 meter', 'HZM401', 400, 500, 20, '1 year', 1, 54, 13, 5),
(314, 'bluetooth speaker', 'S815', 680, 950, 3, 'no', 1, 24, 13, 9),
(315, 'bluetooth speaker', 'S812', 770, 1000, 3, '', 1, 24, 13, 1),
(316, 'bluetooth speaker', 'HDY003', 340, 450, 5, 'no', 1, 24, 13, 9),
(317, 'bluetooth speaker', 'B28S', 1040, 1500, 0, 'no', 1, 24, 13, 1),
(318, 'bluetooth speaker', 'T20', 280, 380, 2, 'no', 1, 24, 13, 9),
(319, 'usb speaker', 'D10', 280, 400, 3, 'no', 1, 24, 13, 9),
(320, 'ac speaker ', 'D9A', 430, 550, 2, 'no', 1, 24, 13, 9),
(321, 'usb speaker', 'M1', 290, 400, 3, 'no', 1, 24, 13, 9),
(322, 'usb speaker', 'D9', 275, 400, 3, 'no', 1, 24, 13, 9),
(323, 'bluetooth speaker', 'TG113C', 620, 850, 1, 'no', 1, 24, 13, 9),
(324, 'car wireless bluetooth', 'CWS', 180, 300, 2, '', 1, 24, 13, 9),
(325, 'rapoo wireless mouse', 'M10', 500, 700, 0, '1 year', 1, 21, 14, 5),
(326, 'rapoo wireless mouse', '3100', 700, 1200, 1, '1 year', 1, 21, 14, 5),
(327, 'prolink wireless mouse', 'PMW5006', 470, 650, 3, '6 month', 1, 21, 12, 2),
(328, 'apoint tech 3d optical mouse', 'AT202', 150, 250, 1, 'no', 1, 21, 4, 1),
(329, 'coolser', '', 850, 1050, 5, 'no', 1, 48, 4, 1),
(330, 'power inverter', '', 500, 600, 1, 'no', 1, 9, 4, 1),
(331, 'wallmount BIG', 'CP2302', 500, 800, 5, 'no', 1, 63, 4, 7),
(332, 'wallmount small', 'small', 250, 500, 4, 'no', 1, 63, 4, 7),
(333, '2m hdmi cable', '', 160, 250, 4, 'no', 1, 57, 28, 7),
(334, 'astrum wifi adapter 150', 'NA50', 255, 350, 1, '6 month', 1, 17, 11, 8),
(335, 'usb 2.0 wireless adapter', '802', 185, 350, 5, '', 1, 17, 13, 7),
(336, 'sata ide port', '', 200, 300, 1, '', 1, 17, 4, 1),
(337, 'boya microphone', 'BYM1', 800, 1000, 2, '', 1, 23, 4, 7),
(338, 'normal cmos battery', '', 7, 15, 100, '', 1, 38, 4, 1),
(339, 'hdmi cable 10m', '', 500, 700, 1, '', 1, 57, 4, 11),
(340, 'ydd cd', '', 10, 15, 40, '', 1, 56, 4, 4),
(341, 'blank dvd ', 'YDD', 15, 25, 25, '', 1, 56, 13, 11),
(342, 'iqra visiting card 11.07.19', '', 1100, 0, 1, '', 1, 1, 4, 1),
(343, 'dahua camera 2m', ' 	HFW1200RP', 1441, 1800, 1, '', 1, 52, 72, 12),
(344, 'hivision dvr', 'DS7104HGHI-F1', 2542, 4000, 0, '', 1, 53, 73, 12),
(345, 'bna cable 1.5m', '', 60, 100, 2, '', 1, 55, 4, 1),
(346, 'vga cable normal 1.5', '', 55, 150, 2, '', 1, 58, 4, 1),
(347, 'flexible able', '', 5, 7, 250, '', 1, 1, 4, 1),
(348, 'usb hub 3.0 ', '1811', 240, 400, 2, '', 1, 64, 13, 7),
(349, 'usb hub 2.0/0', '', 100, 150, 2, '', 1, 64, 13, 7),
(350, 'high speed usb hub ', '4P', 130, 180, 2, '', 1, 64, 13, 7),
(351, 'hdmi to vga', '', 175, 300, 2, '', 1, 58, 13, 7),
(352, 'caching usb', '', 120, 250, 10, '', 1, 59, 13, 7),
(353, 'caching power switch', '', 15, 50, 8, '', 1, 54, 13, 7),
(354, 'audio jack', '', 15, 30, 20, '', 1, 59, 13, 7),
(355, 'cooling fan paste', '', 60, 100, 2, '', 1, 1, 4, 1),
(356, 'sata power', '', 30, 50, 10, '', 1, 1, 4, 7),
(357, 'audio cable', '', 20, 40, 2, '', 1, 55, 4, 1),
(358, 'tp link 300mbps 4g lte router', 'TLMR6400', 7000, 7500, 0, '1 year', 1, 8, 15, 2),
(359, 'Hikvision camera', 'DS2CE56HOTITPF', 1805, 2500, 0, '', 1, 52, 73, 12),
(360, 'lg monitor', '22MK430H', 8700, 10000, 0, '', 1, 45, 55, 12),
(361, 'hikvision dvr', 'DS7108HQHIK1', 4961, 7500, 0, '', 1, 53, 73, 12),
(362, 'Hikvision Camera 5mp', 'DS2CE16HOTITPF', 1805, 3000, 0, '', 1, 52, 73, 12),
(363, 'camera service', '', 500, 0, 0, '', 1, 52, 55, 4),
(364, '2tb hard drive', 'wd purple', 5000, 5500, 0, '1 year', 1, 26, 58, 1),
(365, 'test product', 'TEST', 500, 0, 0, '', 1, 1, 4, 15),
(366, 'test2', '', 500, 0, -6, '', 1, 1, 4, 1),
(367, 'test3', '', 200, 0, -1, '', 1, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `taka` bigint(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `employeeid`, `taka`, `date`) VALUES
(10, 1, 500, '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `loancash`
--

CREATE TABLE `loancash` (
  `id` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loancash`
--

INSERT INTO `loancash` (`id`, `employeeid`, `total`, `cash`, `due`) VALUES
(5, 1, 500, 200, 300);

-- --------------------------------------------------------

--
-- Table structure for table `loanpayment`
--

CREATE TABLE `loanpayment` (
  `id` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `payment` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loanpayment`
--

INSERT INTO `loanpayment` (`id`, `employeeid`, `payment`, `total`, `cash`, `due`, `date`) VALUES
(1, 1, 100, 500, 100, 400, '2019-07-19'),
(2, 1, 100, 500, 200, 300, '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `paymentcollection`
--

CREATE TABLE `paymentcollection` (
  `id` int(11) NOT NULL,
  `supplyid` int(11) NOT NULL,
  `payment` bigint(20) NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paymentcollection`
--

INSERT INTO `paymentcollection` (`id`, `supplyid`, `payment`, `date`, `total`, `cash`, `due`) VALUES
(3, 1, 3000, '2019-07-15', 8000, 3000, 5000),
(4, 1, 5000, '2019-07-17', 8000, 8000, 0),
(5, 2, 7000, '2019-07-15', 7000, 7000, 0),
(6, 12, 20881, '2019-07-17', 20881, 20881, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `purItem` text COLLATE utf8_unicode_ci NOT NULL,
  `purQty` int(11) NOT NULL,
  `purPrice` bigint(20) NOT NULL,
  `purInvoiceId` int(11) NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `purdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `purItem`, `purQty`, `purPrice`, `purInvoiceId`, `model`, `purdate`) VALUES
(57, 'esonic monitor 17 inchi', 1, 3000, 26, 'ESM17', '2019-07-13'),
(58, 'tp link 300mbps 4g lte router', 1, 7000, 39, 'TLMR6400', '2019-07-13'),
(59, 'Hikvision camera', 3, 1805, 40, 'DS2CE56HOTITPE', '2019-07-16'),
(60, 'lg monitor', 1, 8700, 40, '22MK430H', '2019-07-16'),
(61, 'hikvision dvr', 1, 4961, 40, 'DS7108HQHIK1', '2019-07-16'),
(62, 'Hikvision Camera 5mp', 1, 1805, 40, 'DS2CE16HOTITPF', '2019-07-16'),
(63, '2tb hard drive', 1, 5000, 41, 'wd purple', '2019-07-16'),
(64, 'test product', 1, 500, 42, 'TEST', '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `purinvoice`
--

CREATE TABLE `purinvoice` (
  `id` int(11) NOT NULL,
  `purInvoiceNo` bigint(20) NOT NULL,
  `purInvoiceSupply` int(11) NOT NULL,
  `purInvoiceDate` date NOT NULL,
  `purInvoiceTotal` bigint(20) NOT NULL,
  `purInvoiceCash` bigint(20) NOT NULL,
  `purInvoiceDue` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purinvoice`
--

INSERT INTO `purinvoice` (`id`, `purInvoiceNo`, `purInvoiceSupply`, `purInvoiceDate`, `purInvoiceTotal`, `purInvoiceCash`, `purInvoiceDue`) VALUES
(25, 5000, 0, '0000-00-00', 0, 0, 0),
(26, 5001, 1, '2019-07-13', 3000, 0, 3000),
(39, 5002, 2, '2019-07-13', 7000, 0, 7000),
(40, 5003, 12, '2019-07-16', 20881, 0, 20881),
(41, 5004, 1, '2019-07-16', 5000, 0, 5000),
(42, 5005, 15, '2019-07-19', 500, 0, 500);

-- --------------------------------------------------------

--
-- Table structure for table `purquick`
--

CREATE TABLE `purquick` (
  `id` int(11) NOT NULL,
  `itemName` text COLLATE utf8_unicode_ci NOT NULL,
  `itemQty` int(11) NOT NULL,
  `itemPrice` bigint(20) NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sell` bigint(20) NOT NULL,
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quickqutation`
--

CREATE TABLE `quickqutation` (
  `id` int(11) NOT NULL,
  `itemName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `itemSerial` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `itemWarrenty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `itemPrice` bigint(20) NOT NULL,
  `itemQty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quickqutation`
--

INSERT INTO `quickqutation` (`id`, `itemName`, `itemSerial`, `itemWarrenty`, `itemPrice`, `itemQty`) VALUES
(1, '150mbps nano wireless usb adapter', '', '', 400, 2),
(2, '', '', '', 0, 0),
(3, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qutation`
--

CREATE TABLE `qutation` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `itemName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `itemSerial` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `itemWarrenty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `itemPrice` bigint(20) NOT NULL,
  `itemQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qutationcustomer`
--

CREATE TABLE `qutationcustomer` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerMobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `qutationCat` int(11) NOT NULL,
  `qutationTotal` bigint(20) NOT NULL,
  `customerPrice` bigint(20) NOT NULL,
  `qutationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qutationcustomer`
--

INSERT INTO `qutationcustomer` (`id`, `customerName`, `customerMobile`, `customerAddress`, `qutationCat`, `qutationTotal`, `customerPrice`, `qutationDate`) VALUES
(5, 'oml mohnto', '01755548248', '', 1, 18900, 0, '2019-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `sellcollection`
--

CREATE TABLE `sellcollection` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `collection` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellcollection`
--

INSERT INTO `sellcollection` (`id`, `customerId`, `collection`, `date`, `total`, `cash`, `due`) VALUES
(7, 41, 220, '2019-07-16', 320, 320, 0),
(8, 45, 30000, '2019-07-17', 39000, 30000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `sellcustomer`
--

CREATE TABLE `sellcustomer` (
  `id` int(11) NOT NULL,
  `customerName` text COLLATE utf8_unicode_ci NOT NULL,
  `customerMobile` text COLLATE utf8_unicode_ci NOT NULL,
  `customerAddress` text COLLATE utf8_unicode_ci NOT NULL,
  `invoiceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellitem`
--

CREATE TABLE `sellitem` (
  `id` int(11) NOT NULL,
  `invoiceId` int(11) NOT NULL,
  `sellItemId` int(11) NOT NULL,
  `sellItemQty` int(11) NOT NULL,
  `sellItemPrice` int(100) NOT NULL,
  `serial` text COLLATE utf8_unicode_ci NOT NULL,
  `warrenty` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellitem`
--

INSERT INTO `sellitem` (`id`, `invoiceId`, `sellItemId`, `sellItemQty`, `sellItemPrice`, `serial`, `warrenty`) VALUES
(56, 48, 207, 1, 3500, '', '1 year'),
(57, 49, 317, 1, 1200, '', 'no'),
(58, 50, 92, 1, 500, '', ''),
(59, 51, 358, 1, 7500, '2802', '1 year'),
(60, 52, 356, 1, 40, '', ''),
(61, 53, 333, 1, 230, '', 'no'),
(62, 54, 346, 1, 140, '', ''),
(63, 55, 120, 1, 140, '', 'no'),
(64, 56, 280, 1, 120, '', 'no'),
(65, 56, 52, 1, 350, '', 'no'),
(66, 56, 80, 1, 30, '', 'no'),
(67, 57, 311, 1, 270, '', ''),
(68, 57, 14, 1, 500, '', ''),
(69, 58, 274, 1, 100, '', ''),
(70, 59, 7, 1, 220, '', 'no'),
(71, 60, 344, 1, 2700, '', ''),
(72, 60, 252, 0, 2100, '', ''),
(73, 61, 119, 2, 26, '', ''),
(74, 61, 254, 12, 9, '', 'no'),
(75, 62, 313, 1, 400, '', '1 year'),
(76, 63, 119, 2, 10, '', ''),
(77, 64, 359, 3, 2500, 'c45775992,c45775996,c45776042', '1year'),
(78, 64, 360, 1, 10500, '901ntbkcl509', '1year'),
(79, 64, 361, 1, 7000, 'c91062401', '1year'),
(80, 64, 362, 1, 2500, 'd08509094', '1year'),
(81, 64, 332, 1, 600, 'no', 'no'),
(82, 64, 284, 1, 5100, 'wcc4mory669e', '1year'),
(83, 64, 363, 5, 500, 'no', 'no'),
(84, 64, 46, 4, 300, 'no', 'no'),
(85, 64, 44, 4, 300, 'no', 'no'),
(86, 64, 325, 1, 900, 'no', '1 year'),
(87, 65, 365, 1, 200, '', ''),
(88, 66, 366, 1, 1000, '', ''),
(89, 66, 367, 0, 2000, '', ''),
(94, 70, 366, 0, 200, '', ''),
(95, 71, 366, 0, 100, '', ''),
(96, 72, 366, 0, 100, '', ''),
(97, 73, 165, 1, 500, '', ''),
(98, 74, 94, 1, 700, '', 'no'),
(99, 75, 94, 1, 800, '', 'no'),
(100, 76, 94, 1, 900, '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `sellquike`
--

CREATE TABLE `sellquike` (
  `id` int(11) NOT NULL,
  `sellItemId` int(11) NOT NULL,
  `sellItemQty` int(11) NOT NULL,
  `sellItemPrice` int(11) NOT NULL,
  `serial` text COLLATE utf8_unicode_ci NOT NULL,
  `warrenty` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellreturn`
--

CREATE TABLE `sellreturn` (
  `id` int(11) NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellreturn`
--

INSERT INTO `sellreturn` (`id`, `invoiceid`, `itemid`, `quantity`) VALUES
(1, 66, 89, 1),
(2, 60, 72, 1),
(3, 60, 72, 1),
(4, 60, 72, 1),
(5, 60, 72, 1),
(6, 60, 72, 1),
(7, 60, 72, 1),
(8, 60, 72, 1),
(9, 67, 91, 1),
(10, 67, 90, 1),
(11, 68, 92, 1),
(12, 69, 93, 1),
(13, 70, 94, 1),
(14, 71, 95, 1),
(15, 72, 96, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `productName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `productInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `receiveDate` date NOT NULL,
  `deliveryDate` date NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `invoice` bigint(20) NOT NULL DEFAULT 0,
  `problem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `category`, `customerId`, `productName`, `productInfo`, `receiveDate`, `deliveryDate`, `total`, `cash`, `due`, `status`, `invoice`, `problem`) VALUES
(36, 3, 35, 'camera', '', '2019-07-13', '2019-07-13', 200, 200, 0, 2, 3000, 'camera problem'),
(37, 2, 35, 'Toshiba', '', '2019-07-15', '2019-07-15', 0, 0, 0, 0, 3001, 'Microsoft Word'),
(38, 3, 39, 'cctv', '', '2019-07-15', '2019-07-15', 200, 200, 0, 2, 3002, 'dvr hard disk sound'),
(39, 3, 35, 'hard drive', '', '2019-07-16', '2019-07-16', 100, 100, 0, 2, 3003, 'hard proble');

-- --------------------------------------------------------

--
-- Table structure for table `servicecash`
--

CREATE TABLE `servicecash` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servicecash`
--

INSERT INTO `servicecash` (`id`, `customerId`, `total`, `cash`, `due`) VALUES
(12, 35, 300, 300, 0),
(13, 39, 200, 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `servicecollection`
--

CREATE TABLE `servicecollection` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `collection` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicelist`
--

CREATE TABLE `servicelist` (
  `id` int(11) NOT NULL,
  `serviceName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servicelist`
--

INSERT INTO `servicelist` (`id`, `serviceName`) VALUES
(1, 'pc'),
(2, 'Laptop'),
(3, 'cctv'),
(4, 'ups'),
(5, 'os');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `supplyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `supplyAddress` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `supplyName`, `supplyAddress`) VALUES
(1, 'sumon computer', 'Place : 20 , Hoque super market , East zindabazar \r\nMobile : 01711722030\r\nMail  : scsyl2011@gmail.com'),
(2, 'xeonlink', 'Place : 10/A kumarpara . Sylhet 3100\r\nMobile: 0821719089\r\nMail : ask@xeonlink.com'),
(3, 'Golden Trade International Bd.', 'Place : Korim Ullah Market.\r\nMobile : 01799985564\r\nSupplier Name : Munna Bai'),
(4, 'None', ''),
(5, 'Global Brand Private Limited', 'Phone : 01969633295'),
(6, 'Astrum Technologies', ''),
(7, 'Mozumder International', 'Phone : 01753907250'),
(8, 'UCC', 'TEL : +8809610202020'),
(9, 'SuhaN enterprize', 'Place : 18-19 albela super market, bondorbazar.sylhet.\r\nMobile: 01710775589'),
(10, 'Apsis', 'mobile : 01720800200'),
(11, 'computer solution', 'kazi mation'),
(12, 'Platonic Zone', 'Address : Kaniz Plaza'),
(13, 'Thunder Global', 'Place : Dhaka'),
(14, 'hq dvd', 'dhaka'),
(15, 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `supplycash`
--

CREATE TABLE `supplycash` (
  `id` int(11) NOT NULL,
  `supplyid` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `cash` bigint(20) NOT NULL,
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplycash`
--

INSERT INTO `supplycash` (`id`, `supplyid`, `total`, `cash`, `due`) VALUES
(4, 1, 8000, 8000, 0),
(5, 2, 7000, 7000, 0),
(6, 12, 20881, 20881, 0),
(7, 15, 500, 0, 500);

-- --------------------------------------------------------

--
-- Table structure for table `warrenty`
--

CREATE TABLE `warrenty` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerMobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `problem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `recivedate` date NOT NULL,
  `productinfo` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `companyname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `warrenty`
--

INSERT INTO `warrenty` (`id`, `customerName`, `customerMobile`, `productName`, `problem`, `recivedate`, `productinfo`, `status`, `companyname`) VALUES
(3, 'IQRA IT', '', 'Prolink wirless keyboard ', '1.connection disconnect.\r\n2.keyboard not power.', '2019-07-09', 'Model - pcwm7003 \r\nquantity- 2 set.', 0, 'xiolink'),
(4, 'IQRA IT', '', 'prolink headphone', '1.one side no sound', '2019-07-01', '', 0, 'xiolink'),
(5, 'IQRA IT', '', 'gamepade L4000', 'no power', '2019-06-15', '', 0, 'computer solution');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customercash`
--
ALTER TABLE `customercash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinvoice`
--
ALTER TABLE `customerinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomelist`
--
ALTER TABLE `incomelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loancash`
--
ALTER TABLE `loancash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpayment`
--
ALTER TABLE `loanpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentcollection`
--
ALTER TABLE `paymentcollection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purinvoice`
--
ALTER TABLE `purinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purquick`
--
ALTER TABLE `purquick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickqutation`
--
ALTER TABLE `quickqutation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qutation`
--
ALTER TABLE `qutation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qutationcustomer`
--
ALTER TABLE `qutationcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellcollection`
--
ALTER TABLE `sellcollection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellcustomer`
--
ALTER TABLE `sellcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellitem`
--
ALTER TABLE `sellitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellquike`
--
ALTER TABLE `sellquike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellreturn`
--
ALTER TABLE `sellreturn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecash`
--
ALTER TABLE `servicecash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecollection`
--
ALTER TABLE `servicecollection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicelist`
--
ALTER TABLE `servicelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplycash`
--
ALTER TABLE `supplycash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warrenty`
--
ALTER TABLE `warrenty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customercash`
--
ALTER TABLE `customercash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customerinvoice`
--
ALTER TABLE `customerinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomelist`
--
ALTER TABLE `incomelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loancash`
--
ALTER TABLE `loancash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loanpayment`
--
ALTER TABLE `loanpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymentcollection`
--
ALTER TABLE `paymentcollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `purinvoice`
--
ALTER TABLE `purinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `purquick`
--
ALTER TABLE `purquick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quickqutation`
--
ALTER TABLE `quickqutation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qutation`
--
ALTER TABLE `qutation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qutationcustomer`
--
ALTER TABLE `qutationcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sellcollection`
--
ALTER TABLE `sellcollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sellcustomer`
--
ALTER TABLE `sellcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellitem`
--
ALTER TABLE `sellitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `sellquike`
--
ALTER TABLE `sellquike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellreturn`
--
ALTER TABLE `sellreturn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `servicecash`
--
ALTER TABLE `servicecash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `servicecollection`
--
ALTER TABLE `servicecollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicelist`
--
ALTER TABLE `servicelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `supplycash`
--
ALTER TABLE `supplycash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warrenty`
--
ALTER TABLE `warrenty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
