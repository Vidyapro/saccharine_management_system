-- phpMyAdmin SQL Dump
-- 
version 4.9.0.1

--
https://www.phpmyadmin.net/

--
-- 
Host: 127.0.0.1

-- 
Generation Time: Nov 29, 2019 at 05:59 AM

-- 
Server version: 10.3.16-MariaDB

-- 
PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;


--
-- 
Database: `saccharine`

--

CREATE DATABASE IF NOT EXISTS `saccharine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `saccharine`;


DELIMITER $$

--
-- 
Procedures

--

DROP PROCEDURE IF EXISTS `discount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `discount` (IN `pno` INT, IN `per` FLOAT)  NO SQL
UPDATE payment SET pamt= (pamt/per) WHERE payno=pno$$

DELIMITER ;


-- 
--------------------------------------------------------

--
-- 
Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) DEFAULT NULL,
  `admin` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `admin`

--


INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'vidya', 'vidya'),
(2, 'sindhu', 'sindhu');


-- 
--------------------------------------------------------

--
-- 
Table structure for table `branch`
--


DROP TABLE IF EXISTS `branch`;

CREATE TABLE IF NOT EXISTS `branch` (
  `bid` int(11) NOT NULL,
  `blocation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `branch`
--


INSERT INTO `branch` (`bid`, `blocation`) VALUES
(1000, 'vijaynagar'),
(1001, 'nr mohalla'),
(1002, 'gokulam'),
(1003, 'hebbal'),
(1004, 'jayanagara'),
(1005, 'belawadi');


-- --------------------------------------------------------

--
-- 
Table structure for table `customer`

--


DROP TABLE IF EXISTS `customer`;

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `bid` (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `customer`

--


INSERT INTO `customer` (`cid`, `cname`, `phone`, `address`, `bid`) VALUES
(92, 'sindhu', 9632541258, 'hebbal', 1003),
(100, 'varshini', 9636568696, 'gokulam', 1002),
(101, 'yukthi', 9685221784, 'belawadi', 1005),
(102, 'vishnu', 9645123636, 'vijaynagar', 1000),
(103, 'sonali', 9865326541, 'vijaynagar', 1000);


-- --------------------------------------------------------

--
--
 Table structure for table `delivery`

--


DROP TABLE IF EXISTS `delivery`;

CREATE TABLE IF NOT EXISTS `delivery` (
  `dno` int(11) NOT NULL AUTO_INCREMENT,
  `dplace` varchar(20) DEFAULT NULL,
  `deldate` date DEFAULT NULL,
  `payno` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`dno`),
  KEY `payno` (`payno`),
  KEY `delivery_ibfk_1` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `delivery`

--


INSERT INTO `delivery` (`dno`, `dplace`, `deldate`, `payno`, `cid`, `status`) VALUES
(300, 'gokulam', '2019-11-14', 1, 100, 'delivered'),
(301, 'belawadi', '2019-11-19', 2, 101, 'delivered'),
(302, 'vijaynagar', '2019-11-29', 3, 102, 'preparing'),
(303, 'vijaynagar', '2019-10-24', 4, 103, 'preparing'),
(304, 'vijaynagar', '2019-11-29', 5, 103, 'waiting'),
(305, 'belawadi', '2019-10-24', 16, 101, 'preparing'),
(306, 'hebbal', '2019-10-24', 17, 92, 'preparing');


--
--
Triggers `delivery`
--
DROP TRIGGER IF EXISTS `deliver`;

DELIMITER $$
CREATE TRIGGER `deliver` BEFORE INSERT ON `delivery` FOR EACH ROW BEGIN
set NEW.dplace = (select address from customer c,orders o,payment p where p.oid=o.oid and o.cid=c.cid and payno = NEW.payno);
set NEW.cid = (select o.cid from orders o,payment p where p.oid=o.oid and payno = NEW.payno);
END
$$
DELIMITER ;


--
--------------------------------------------------------

--
-- 
Table structure for table `feedback`

--


DROP TABLE IF EXISTS `feedback`;

CREATE TABLE IF NOT EXISTS `feedback` (
  `cid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cid`,`oid`),
  KEY `oid` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `feedback`

--


INSERT INTO `feedback` (`cid`, `oid`, `rating`, `description`) VALUES
(100, 501, 4, 'nice');


-- 
--------------------------------------------------------

--
-- 
Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `odate` timestamp NOT NULL DEFAULT current_timestamp(),
  `cid` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `sid` (`sid`),
  KEY `orders_ibfk_1` (`cid`),
  KEY `orders_ibfk_2` (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=513 DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `odate`, `cid`, `bid`, `sid`, `quantity`) VALUES
(501, '2019-11-12 05:45:22', 100, 1002, 10, 1),
(502, '2019-11-12 06:26:18', 101, 1005, 12, 2),
(503, '2019-11-20 07:32:42', 102, 1000, 15, 3),
(506, '2019-11-20 07:36:16', 103, 1000, 16, 2),
(507, '2019-11-20 07:40:07', 103, 1000, 15, 3),
(509, '2019-11-21 08:49:57', 102, 1000, 10, 2),
(510, '2019-11-21 08:49:57', 102, 1000, 10, 2),
(511, '2019-11-21 13:06:51', 101, 1004, 17, 3),
(512, '2019-11-21 13:41:25', 92, 1003, 15, 2);


-- 
--------------------------------------------------------

--
-- 
Table structure for table `payment`

--


DROP TABLE IF EXISTS `payment`;

CREATE TABLE IF NOT EXISTS `payment` (
  `payno` int(11) NOT NULL AUTO_INCREMENT,
  `ptype` varchar(10) DEFAULT NULL,
  `pamt` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  PRIMARY KEY (`payno`),
  KEY `oid` (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `payment`

--


INSERT INTO `payment` (`payno`, `ptype`, `pamt`, `oid`) VALUES
(1, 'cash', 187, 501),
(2, 'cash', 525, 502),
(3, 'cash', 766, 503),
(4, 'cash', 601, 506),
(5, 'cash', 527, 507),
(12, 'cash', 455, 509),
(13, 'cash', 417, 509),
(14, 'cash', 500, 510),
(15, 'cash', 455, 510),
(16, 'cash', 1200, 511),
(17, 'cash', 567, 512);


--
-- 
Triggers `payment`

--

DROP TRIGGER IF EXISTS `payt`;

DELIMITER $$
CREATE TRIGGER `payt` BEFORE INSERT ON `payment` FOR EACH ROW BEGIN
set NEW.oid = (select oid from orders o order by oid desc limit 1);
set NEW.pamt = (select (sprice*o.quantity) as pay from orders o,sweet s where s.sid=o.sid order by oid desc limit 1);
END
$$
DELIMITER ;


-- 
--------------------------------------------------------

--
-- 
Table structure for table `sweet`

--


DROP TABLE IF EXISTS `sweet`;

CREATE TABLE IF NOT EXISTS `sweet` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) DEFAULT NULL,
  `stype` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sprice` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;


--
-- 
Dumping data for table `sweet`

--


INSERT INTO `sweet` (`sid`, `sname`, `stype`, `quantity`, `sprice`) VALUES
(10, 'Rasgulla', 'sugar', 50, 250),
(11, 'Rasgulla', 'sugar less', 50, 350),
(12, 'Gulab Jamun', 'sugar', 25, 350),
(13, 'Gulab Jamun', 'sugar less', 20, 400),
(14, 'peda', 'sugar', 25, 280),
(15, 'peda', 'sugar less', 25, 340),
(16, 'kaju barfi', 'sugar', 30, 400),
(17, 'kaju barfi', 'sugar less', 22, 480),
(18, 'Mysore pak', 'sugar', 123, 290);


--
-- 
Constraints for dumped tables

--

--
-- 
Constraints for table `customer`

--

ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `branch` (`bid`);


--
-- 
Constraints for table `delivery`

--

ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`payno`) REFERENCES `payment` (`payno`);


--
-- 
Constraints for table `feedback`

--

ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`);


--
-- 
Constraints for table `orders`

--

ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `branch` (`bid`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `sweet` (`sid`);


--
-- 
Constraints for table `payment`

--

ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`);

COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
