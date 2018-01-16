-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 06:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieclub`
--

DELIMITER $$
--
-- Procedures
--
--CREATE DEFINER=`root`@`localhost` PROCEDURE `dispmovie` (IN `cardid` VARCHAR(50))  select * from movie where mov_id=cardid$$

--CREATE DEFINER=`root`@`localhost` PROCEDURE `updatepassword` (IN `username` VARCHAR(60), IN `oldpassword` VARCHAR(60), IN `newpassword` VARCHAR(60))  NO SQL
--update  customer
--set PASSWORD=newpassword
--where username=username and PASSWORD=oldpassword$$

--DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `AGE` int(3) NOT NULL,
  `MOVIE_ID` varchar(50) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`FNAME`, `LNAME`, `AGE`, `MOVIE_ID`, `NAME`) VALUES
('CATE', 'BLANCHETT', 30, '1', 'CATE BLANCHETT'),
('CHRIS', 'HEMMISWORTH', 30, '1', 'CHRIS HEMMISWORTH'),
('ERIS', 'ALBA', 30, '1', 'ERIS ALBA'),
('TOM', 'HIDDLESTONE', 30, '1', 'TOM HIDDLESTONE'),
('BEN', 'AFFLECK', 30, '2', 'BEN AFFLECK'),
('GAL', 'GADOT', 30, '2', 'GAL GADOT'),
('HENRY', 'CAVIL', 30, '2', 'HENRY CAVIL'),
('JASON', 'MOMOA', 30, '2', 'JASON MOMOA'),
('CHRIS', 'EVANS', 35, '3', 'CHRIS EVANS'),
('CHRIS', 'PRATT', 30, '3', 'CHRIS PRATT'),
('ROBERT DOWNY JR', 'HEMMISWORTH', 30, '3', 'ROBERT DOWNY JR HEMMISWORTH'),
('SCARLETT', 'JOHNSSON', 30, '3', 'SCARLETT JOHNSSON'),
('AJAY', 'DEVGAN', 30, '4', 'AJAY DEVGAN'),
('ELIANA', 'D.CRUZ', 30, '4', 'ELIANA D.CRUZ'),
('EMRAAN', 'HASHMI', 30, '4', 'EMRAAN HASHMI'),
('ESHITA', 'GUPTA', 30, '4', 'ESHITA GUPTA'),
('BILL', 'SCARSGAURD', 30, '5', 'BILL SCARSGAURD'),
('FIN', 'HOLFHARD', 30, '5', 'FIN HOLFHARD'),
('SOPHIA', 'LILIES', 30, '5', 'SOPHIA LILIES'),
('AMIR', 'KHAN', 30, '6', 'AMIR KHAN'),
('COLIN', 'HERFHARTH', 30, '6', 'COLIN HERFHARTH'),
('MEHER', 'VIJ', 30, '6', 'MEHER VIJ'),
('TARGON', 'EGRTON', 30, '6', 'TARGON EGRTON'),
('ZAIRA', 'WASIN', 30, '6', 'ZAIRA WASIN'),
('ABEE', 'KHALEEN', 30, '7', 'ABEE KHALEEN'),
('EDRIS', 'ALBA', 30, '7', 'EDRIS ALBA'),
('TOM', 'TAYLOR', 30, '7', 'TOM TAYLOR');

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `video_id` varchar(50) NOT NULL,
  `vendorid` varchar(50) NOT NULL,
  `COPIES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`video_id`, `vendorid`, `COPIES`) VALUES
('1', 'VENDOR_01', 17),
('1', 'VENDOR_02', 7),
('1', 'VENDOR_03', 7),
('1', 'VENDOR_04', 17),
('2', 'VENDOR_01', 9),
('2', 'VENDOR_03', 19),
('2', 'VENDOR_05', 20),
('4', 'VENDOR_01', 4),
('4', 'VENDOR_04', 20),
('4', 'VENDOR_05', 20),
('4', 'VENDOR_06', 9),
('5', 'VENDOR_08', 10),
('7', 'VENDOR_06', 19),
('8', 'VENDOR_06', 20);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `membership_type` varchar(100) NOT NULL,
  `cust_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `pic` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`membership_type`, `cust_id`, `first_name`, `contact`, `email_id`, `username`, `password`, `pic`) VALUES
('PRIME', 'CUSTOMER_01', 'JOHNEDDARD STARK', 99009900, 'YOUPO@GMAIL.COM', 'Eddard.st', 'oppo1', 'images/eddard'),
('PRIME', 'CUSTOMER_02', 'KATLYN STARK', 99023900, 'YOUPO1@GMAIL.COM', 'kat.stk', 'oppo2', 'images/kat'),
('NON PRIME', 'CUSTOMER_03', 'JOHN', 96009900, 'YOUPO2@GMAIL.COM', 'snow.tg', 'oppoq', 'images/jhon'),
('NON PRIME', 'CUSTOMER_04', 'DANENREAS TARGEREAN', 98009900, 'YOUPO2@GMAIL.COM', 'Dany.tg', 'oppo4', 'images/dany'),
('PRIME', 'CUSTOMER_05', 'SANSA STARK', 9900940, 'YOUPO3@GMAIL.COM', 'sansa.stk', 'oppo5', 'images/sansa'),
('NON PRIME', 'CUSTOMER_06', 'ARYA STARK', 99004500, 'YOUPO4@GMAIL.COM', 'arya.st', 'oppol', 'images/arya'),
('NON PRIME', 'CUSTOMER_07', 'BRANDON STARK', 99002300, 'YOUPO5@GMAIL.COM', 'bran.st', 'oppo7', NULL),
('PRIME', 'CUSTOMER_08', 'CERSIE LANNISTER', 91009900, 'YOUPO6@GMAIL.COM', 'cersie.po', 'oppo8', 'images/cersie'),
('NON PRIME', 'CUSTOMER_09', 'SER JORAH MORMOUNT', 99009900, 'YOUPO7@GMAIL.COM', 'jorah.oi', 'oppo9', 'images/serjorah'),
('NON PRIME', 'CUSTOMER_10', 'KHAL DROGO', 99009900, 'YOUPO8@GMAIL.COM', 'khal.po', 'oppo10', 'images/khal'),
('PRIME', 'CUSTOMER_11', 'RHEAGAR TARGEREAN', 99009900, 'YOUPO9@GMAIL.COM', 'rheager.po', 'oppo11', NULL),
('PRIME', 'CUSTOMER_24', 'JAY KUMAR JAISWAL', 898989898, 'jaytiger@gmail.com', 'jay.t', 'OPPO32', 'images/Richard-Madden'),
('', 'CUSTOMER_25', 'shubham', 9876544, 'shu@eg.com', 'shubh', '123456', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `customer_id` varchar(50) NOT NULL,
  `movie_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favs`
--

INSERT INTO `favs` (`customer_id`, `movie_id`) VALUES
('CUSTOMER_02', '3'),
('CUSTOMER_03', '4'),
('CUSTOMER_04', '5'),
('CUSTOMER_05', '6'),
('CUSTOMER_06', '7'),
('CUSTOMER_07', '8'),
('CUSTOMER_08', '9'),
('CUSTOMER_09', '2'),
('CUSTOMER_10', '3'),
('CUSTOMER_11', '4'),
('CUSTOMER_02', '6'),
('CUSTOMER_03', '7'),
('CUSTOMER_04', '8'),
('CUSTOMER_05', '1'),
('CUSTOMER_06', '1'),
('CUSTOMER_07', '2'),
('CUSTOMER_08', '3'),
('CUSTOMER_09', '4'),
('CUSTOMER_10', '5'),
('CUSTOMER_11', '6'),
('CUSTOMER_11', '7'),
('CUSTOMER_02', '2'),
('CUSTOMER_03', '3'),
('CUSTOMER_04', '2'),
('CUSTOMER_05', '4'),
('CUSTOMER_06', '6');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mov_id` varchar(50) NOT NULL,
  `title` varchar(60) NOT NULL,
  `DURATION` decimal(10,0) NOT NULL,
  `release_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `format` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `picloc` varchar(60) DEFAULT NULL,
  `vidloc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mov_id`, `title`, `DURATION`, `release_date`, `description`, `format`, `cost`, `picloc`, `vidloc`) VALUES
('1', 'THOR:RAGNORAK', '2', '2017-10-15', 'Love triangle with an evil turn', 'MP4', 200, '	\r\nimages/ThorRagnarok', 'video/1'),
('10', 'AVENGERS::INFINITY', '2', '2017-12-22', 'THE BEST MARVEL MOVIES.', 'HD', 500, 'images/home2', '2'),
('11', 'WE ARE THE MILLERS', '2', '2018-12-13', 'THE BEST MARVEL MOVIES TO ENJOY WITH YOUR FAMILY.', '3GP', 700, 'images/home2', '3'),
('12', 'HOBBIT:DESOLATION OF SMAUG', '2', '2018-04-14', 'THE BEST MARVEL MOVIES FOR ADVENTURE AND LIFE.', 'MP4', 600, 'images/home2', '4'),
('13', 'HOBBIT:THE LOST ADVENTURE', '4', '2018-09-18', 'The best movie of 7 dwarfs who came about treasure', 'HD', 200, 'images/home2', '5'),
('14', 'THE FINAL KING', '3', '2018-10-15', 'Monkey king had another war emergigng victorious', 'HD', 400, 'images/home2', '6'),
('2', 'JUSTICE-LEGUE', '2', '2017-10-22', 'A commen household story where vengeance went too far from rude to bloody', 'mp4', 200, 'images/JusticeLeague', 'video/2'),
('3', 'AVENGERS', '3', '2017-10-28', 'Sometimes familys get a reunion where our miller family have a excellent one.', '3GP', 300, 'images/avengers-infinity-war', 'video/30'),
('4', 'BADSHAHO', '2', '2017-10-25', 'The pre-historic family that lived by eating eggs couldn\'t have much fun.', 'MP4', 200, '	\r\nimages/badshaho', 'video/4'),
('5', 'Happy Death Day', '3', '2017-11-15', 'Love effects politics or politics effects Love...', 'HD', 300, 'images/happydeathday', 'video/5'),
('6', 'It', '3', '2017-12-15', 'The undying Love for Jack and Rose still lives today.', 'HD', 200, 'images/it', 'video/6'),
('7', 'Kings-Man', '3', '2018-01-28', 'A dream turning into reality and a reality turning into super reality', '3GP', 200, 'images/Kingsman-Golden-Circle-Trailer', 'video/7'),
('8', ' Secret Superstars', '4', '2018-02-13', 'The travel story 3 men who visited civilization different from world', 'MP4', 300, 'images/secretsuperstar', 'video/8'),
('9', 'The Dark Tower', '5', '2018-06-16', 'A child visited the heaven and came.Do u believe it.', 'HD', 400, 'images/darktower', 'video/9');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `video_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `days` int(11) NOT NULL,
  `cost` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `video_id`, `customer_id`, `days`, `cost`) VALUES
(1, '1', 'CUSTOMER_01', 0, '200'),
(10, '1', 'CUSTOMER_06', 6, '1200'),
(11, '4', 'CUSTOMER_01', 2, '400'),
(12, '1', 'CUSTOMER_24', 8, '1600'),
(13, '1', 'CUSTOMER_25', 3, '600'),
(14, '1', 'CUSTOMER_06', 8, '1600'),
(15, '7', 'CUSTOMER_06', 6, '1200');

--
-- Triggers `transaction`
--
DELIMITER $$
CREATE TRIGGER `trigone` AFTER INSERT ON `transaction` FOR EACH ROW BEGIN
UPDATE available SET copies=copies-1 where video_id=new.video_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `phno` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `email_id`, `phno`, `discount`, `rate`) VALUES
('VENDOR_01', 'TORRENTZ-U1', 'TORRENTZ.EU', 2133454390, 10, 50),
('VENDOR_02', 'TORRENTZ', 'TORRENTZ.EU', 2133432390, 2, 35),
('VENDOR_03', 'HOLLLYPUNCH', 'TORRENTZ.GS', 21, 3, 43),
('VENDOR_04', 'GOODSATURDAY', 'TORRENTZ.NY', 2147483647, 8, 23),
('VENDOR_05', 'FILMYONLINE', 'TORRENTZ.IN', 2133254390, 12, 68),
('VENDOR_06', 'TRANSFORMORS', 'TORRENTZ.AU', 2134554390, 11, 43),
('VENDOR_07', 'GETVID', 'TORRENTZ.BN', 2145454390, 4, 90),
('VENDOR_08', 'BUCKYBOTS', 'TORRENTZ.CT', 2133453240, 2, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`MOVIE_ID`,`FNAME`,`LNAME`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`video_id`,`vendorid`),
  ADD KEY `FKBB` (`vendorid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available`
--
ALTER TABLE `available`
  ADD CONSTRAINT `FKBB` FOREIGN KEY (`vendorid`) REFERENCES `vendor` (`vendor_id`),
  ADD CONSTRAINT `FKBC` FOREIGN KEY (`video_id`) REFERENCES `movie` (`mov_id`) ON DELETE CASCADE;

--
-- Constraints for table `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `favs_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`mov_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `movie` (`mov_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
