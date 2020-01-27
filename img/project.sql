-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 05:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mno` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fname`, `lname`, `email`, `pass`, `mno`, `address`) VALUES
(1, 'Manoj', 'EN', 'manojennamboodri@gmail.com', '$2y$10$OColXi9.P6k0fCuR4u8EYuKk8PpRhE.eJ12Z0Weu9cHvPU7BgMGPy', 2147483647, '  '),
(2, 'Jkr', 'Br', 'en.manoj.com@gmail.com', '$2y$10$Cj1WwHGA8hfq/NjXDkljbOWFHVCQAobaBqIUGa3XE2OLJIIl5Z9Wa', 2147483647, ''),
(3, 'Pr', 'V', 'prv@gmail.com', '$2y$10$mySmXUIO9vmYCwnZySpIou41udYx5JkRsXrQwLn0fuSvzqu0RJeCO', 2147483647, ''),
(4, 'Pranesh', 'P', 'pranesh.vimal5@gmail.com', '$2y$10$wbLJfiQXLWx3e5.X0sG4qu7J/hjH0By73LuT6SzV/wFfQi1QwdHSi', 2147483647, ''),
(5, 'Maraagatham', 'T', 'tmaragatham@gmail.com', '$2y$10$tYIdK3foZ9h2MlyqpotVl.chANcY65cKWhzhWtxBZca73xO2xvcc.', 2147483647, ''),
(6, 'Oviya', 'M', 'kavya6872@gmail.com', '$2y$10$IY2nuuFxFsPWydL7n5Bh/u9IstGLC8pDLHOKXTt6kAX8qDIAkkzdK', 2147483647, ''),
(7, 'White', 'Pig', 'whitepig@gmail.com', '$2y$10$sVfos5/rQb9KdZuMptr3G.eSeUa/Y3Z0ZMhI0I5DKYsDQviGUaaCC', 2147483647, ''),
(8, 'Varshaa', 'M', 'varshaacutesmile333@gmail.com', '$2y$10$M4eMaoHjj6FODs6kh7Quq.i5zz3f7cQybKnKr6PnYKLWeXRbC19a6', 2147483647, ''),
(9, 'E.N.Vidhya', 'EN', 'manoj@gmail.com', '$2y$10$74MXUwMYOuSkTTvzcO0UE.bv0r/SWvB3kQhLwvSjlbqrOck0jkpMO', 2147483647, ''),
(10, 'Usha', 'Kumari', 'ushakumari@gmail.com', '$2y$10$6TcOcyNrfoynO/75nPDmLOLMmrppB09fnmivhFlsGq0WhrLkSGZW6', 2147483647, ''),
(11, 'Mohan', 'Namboodri', 'mohan123@gmail.com', '$2y$10$uJU88tFNy3tju8ejIx5Nhujyd6qHhObiEGR3Ja6AeLvBBPTe6Z1Xi', 2147483647, 'erode');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `q` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `pid`, `q`) VALUES
(1, 3, 1),
(3, 4, 1),
(11, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `msg`) VALUES
(1, 'en.manoj.com@gmail.com', ' hi'),
(2, 'prv@gmail.com', ' so sweet taste'),
(3, 'en.manoj.com@gmail.com', ' hi completed'),
(4, 'en.manoj.com@gmail.com', ' hillllll');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pcat` text NOT NULL,
  `pimg` text NOT NULL,
  `code` text NOT NULL,
  `HSN` text NOT NULL,
  `pack` text NOT NULL,
  `Quantity` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `pname`, `pcat`, `pimg`, `code`, `HSN`, `pack`, `Quantity`, `price`) VALUES
(1, 'Copper nitrate', 'Chemistry', 'cn.jpg', 'A84229', '2915.21.00', 'gb', '250ml  $250\r\n500ml  $500', 200),
(2, 'Chlorine Powder', 'Chemistry', 'cp.jpg', 'A85225', '2933.59.5', 'gb', '250ml $250\r\n500ml $500', 250),
(3, 'Glacial Acetic Acid', 'Chemistry', 'AA.jpg', 'A10089', '1241.22.1', 'gb', '250ml  $200\r\n500ml  $300', 200),
(4, 'Nitric Acid', 'Chemistry', 'na.jpg', 'A50021', '1246.22.10', 'gb', '250ml $300\r\n500ml $600', 300),
(5, 'Hydrochloric Acid', 'Chemistry', 'hcl.jpg', 'A51220', '1234.00.11', 'gb', '250ml $150\r\n500ml $300', 150),
(6, 'Copper Chloride', 'Chemistry', 'img2.jpg', 'A500123', '124.239.123', 'gb', '250ml $200\r\n500ml $450', 200),
(7, 'China Dish', 'Chemistry', 'china-dish.jpg', 'A79008', '1245.09.89', 'pb', '2inches $30\r\n3inches $36\r\n4inches $58\r\n5inches $120', 30),
(8, 'Bioling Tube', 'Chemistry', 'bioling tube.jpg', 'A890045', '129.60.86', 'gb', 'small $15\r\nmedium $30\r\nlarge $60', 15),
(9, 'BLow Pipe', 'Chemistry', 'bp.jpg', 'A23902', 'A112301', 'gb', 'normal $25', 25),
(10, 'Conical Flask', 'Chemistry', 'cf.jpg', 'A450011', '112.456.11', 'gb', '100ml $86\r\n150ml $92\r\n250ml $108\r\n500ml $162\r\n1000ml $270', 86),
(11, 'Charcoal Borer', 'Chemistry', 'cb.jpg', 'A19002', '193.00.34', 'wood', 'normal $22', 22),
(12, 'Funnel', 'Chemistry', 'funneljpg.jpg', 'A50906', '234.90.80', 'gb', '50mm $32\r\n100mm $84\r\n125mm $120\r\n150mm $150', 32),
(13, 'Glass beaker', 'Chemistry', 'gb.jpg', 'A70089', '168.900.56', 'gb', '100ml $50\r\n250ml $74\r\n500ml $130\r\n1000ml $260\r\n', 50),
(14, 'Test Tube', 'Chemistry', 'test.jpg', 'A450098', '123.457.90', 'gb', '25ml $9\r\n50ml $15', 9),
(15, 'Pippete', 'Chemistry', 'pp.jpg', 'A670098', '123.60.89', 'gb', '25ml 68\r\n50ml 126', 68),
(16, 'Platinum Wire', 'Chemistry', 'pw.jpg', 'A23780', '124.90.988', '-', '100gms $270', 270),
(17, 'PN-Junction', 'Physics', 'pn.jpg', 'A82280', '22145.23', 'pb', 'normal $3200', 3200),
(18, 'Potentiometer', 'Physics', 'pm.jpg', 'A89006', '123.56.908', 'wood', 'normal $1800', 1800),
(19, 'Rheosat', 'Physics', 'rheosat.jpg', 'A78907', '123.98.88', 'wood', '8inches  $770\r\n12inches $970', 770),
(20, 'Sonometer', 'Physics', 'sonometer.jpg', 'A78900', '123.87.66', 'teakwood', 'normal $1200', 1200),
(21, 'Spring Balance', 'Physics', 'springbalance.jpg', 'A34809', '123.89.77', '-', '100gms $42\r\n25gms  $44\r\n500gms $48\r\n1000gms $50\r\n5kg     $70\r\n10kg    $160', 42),
(22, 'Stand Filter Funnel', 'Physics', 'sf.jpeg', 'A60884', '125.46.98', 'wood', 'normal $260', 260),
(23, 'Voltmeter', 'Physics', 'vm.jpg', 'A790086', '125.90.77', '-', 'normal $330', 330),
(24, 'Wire Guage', 'Physics', 'wireguage.jpg', 'A67899', '124.87.00', '-', '6inches $15', 15),
(25, 'Tripod Stand', 'Physics', 'tripod-stand.jpg', 'A67890', '123.67.99', '-', '6inchesX4inches $80\r\n8inchesX5inches $110', 80),
(26, 'Vernier Califer', 'Physics', 'vc.jpg', 'A56908', '124.67.89', '-', 'normal $110', 110),
(27, 'Volumentric Flask', 'Physics', 'vf.jpg', 'A89067', '124.67.90', '-', '100ml $124\r\n250ml $186\r\n500ml $76\r\n1000ml $144', 124),
(28, 'Resonance Tube', 'Physics', 'res.jpg', 'A67908', '124.67.90', '-', 'normal $1180', 1180),
(29, 'Microscope', 'Biology', 'mc.jpg', 'A49004', '1234.900', 'gb', '160mx160m $4160', 4160),
(30, 'Filter Paper', 'Biology', 'fp.jpg', '', 'A78097', '-', '24X24inches $2450\r\n18.5X22.5inches $2000\r\n18X18inches $1900', 2450),
(31, 'Cover Glass', 'Biology', 'cg.jpg', 'A890067', '123.56.90', '-', '18X18mm $36\r\n22X22mm $50', 36),
(32, 'Bursen Burner', 'Biology', 'bbjpg.jpg', 'A67780', '345.78.90', '-', 'normal $290', 290),
(33, 'Slide box', 'Biology', 'slides.jpg', 'A67908', '124500.66', 'gb', '1slide  $60\r\n25slides $430\r\n10slides $288', 60),
(34, 'Rubber Tube', 'Biology', 'rub.jpg', 'A68904', '123.90.56', '-', '6mm $400\r\n8mm $540\r\n10mm $750\r\n9mm  $690', 400),
(35, 'Petri Dish', 'Biology', 'pd.jpg', 'A56972', '123.56.44', 'gb', '75mm $74\r\n100mm $92\r\n150mm $160', 74),
(36, 'Corked Tube', 'Biology', 'cork.jpg', 'A675890', '123.566.78', 'gb', '3mm $5\r\n10mm $18\r\n15mm $42\r\n20mm $92\r\n', 5),
(37, 'Glycerine', 'Biology', 'gy.jpg', 'A78503', '123.67.89', 'pb', '500ml $320\r\n2.5L  $1178', 320),
(38, 'Ethanol', 'Biology', 'eth.jpg', 'A78590', '123.67.98', 'gb', '500ml $280\r\n', 280),
(39, 'Measuring Cylinder', 'Biology', 'meas.jpg', 'A6894', '123.56.78', '-', '100ml $190\r\n250ml $380\r\n500ml $484', 190),
(40, 'Water Mensis', 'Biology', 'water.jpg', '', '', '', '1ml-10ml $54\r\n20ml     $64', 54);

-- --------------------------------------------------------

--
-- Table structure for table `productview`
--

CREATE TABLE `productview` (
  `uid` int(11) NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `6` int(11) NOT NULL,
  `7` int(11) NOT NULL,
  `8` int(11) NOT NULL,
  `9` int(11) NOT NULL,
  `10` int(11) NOT NULL,
  `11` int(11) NOT NULL,
  `12` int(11) NOT NULL,
  `13` int(11) NOT NULL,
  `14` int(11) NOT NULL,
  `15` int(11) NOT NULL,
  `16` int(11) NOT NULL,
  `17` int(11) NOT NULL,
  `18` int(11) NOT NULL,
  `19` int(11) NOT NULL,
  `20` int(11) NOT NULL,
  `21` int(11) NOT NULL,
  `22` int(11) NOT NULL,
  `23` int(11) NOT NULL,
  `24` int(11) NOT NULL,
  `25` int(11) NOT NULL,
  `26` int(11) NOT NULL,
  `27` int(11) NOT NULL,
  `28` int(11) NOT NULL,
  `29` int(11) NOT NULL,
  `30` int(11) NOT NULL,
  `31` int(11) NOT NULL,
  `32` int(11) NOT NULL,
  `33` int(11) NOT NULL,
  `34` int(11) NOT NULL,
  `35` int(11) NOT NULL,
  `36` int(11) NOT NULL,
  `37` int(11) NOT NULL,
  `38` int(11) NOT NULL,
  `39` int(11) NOT NULL,
  `40` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`no`, `id`, `fname`, `lname`) VALUES
(119, 1, 'Mohan', 'Namboodri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productview`
--
ALTER TABLE `productview`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
