-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 12:45 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cu_final`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addbooking` (IN `datefrom` DATE, IN `dateto` DATE, IN `userid` INT, IN `coupon` INT, IN `roomid` INT, OUT `bookingid` INT, OUT `paymentid` INT, IN `inmethod` VARCHAR(50), IN `cardno` VARCHAR(50), IN `inamount` DECIMAL, IN `staffid` VARCHAR(50))  NO SQL
BEGIN
  	IF staffid = '' THEN INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`) VALUES (NULL, NOW(),inamount, userid, inmethod, cardno, NULL);
      ELSE INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`) VALUES (NULL, NOW(),inamount, userid, inmethod, cardno, staffid);
      END IF;
      SET paymentid = (SELECT LAST_INSERT_ID());
      IF coupon ='' THEN
      	IF staffid = '' THEN INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, NULL, NULL, paymentid, datefrom, dateto, 'unchecked');
          ELSE INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, NULL, staffid, paymentid, datefrom, dateto, 'unchecked');
          END IF;
       ELSE IF staffid = '' THEN INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, coupon, NULL, paymentid, datefrom, dateto, 'unchecked');
       	ELSE INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, coupon, staffid, paymentid, datefrom, dateto, 'unchecked');
          END IF;
      END IF;
      SET bookingid = (SELECT LAST_INSERT_ID());
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `assignroomtobooking` (IN `datein` DATE, IN `dateout` DATE, IN `type` INT, OUT `roomid` INT)  NO SQL
BEGIN
  	SELECT room.idroom as roomid FROM room WHERE (room.idroom
      NOT IN (
  	SELECT booking.room_idroom FROM booking WHERE (booking.fromdate < datein AND booking.todate > datein) OR (booking.fromdate between datein AND dateout - INTERVAL 1 DAY)) AND room.status = 'open' AND room.roomtype_idroomtype = type) LIMIT 1;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `availableroomtype` (IN `infromdate` DATE, IN `intodate` DATE)  NO SQL
BEGIN
  	SELECT *,COUNT(*) FROM room LEFT JOIN roomtype ON room.roomtype_idroomtype = roomtype.idroomtype
      WHERE (room.idroom
      NOT IN (
  	SELECT booking.room_idroom FROM booking WHERE (booking.fromdate < infromdate AND booking.todate > infromdate) OR (booking.fromdate between infromdate AND intodate - INTERVAL 1 DAY)) AND room.status = 'open')
      GROUP BY roomtype.idroomtype;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `createonlinebooking` (IN `datein` DATE, IN `dateout` DATE, IN `userid` INT, IN `roomid` INT, IN `coupon` VARCHAR(50), IN `paymentid` INT, OUT `bookingid` INT)  NO SQL
BEGIN
  	DECLARE couponid INT;
  	SELECT specialoffer.idspecialoffer as couponid FROM specialoffer WHERE specialoffer.code = coupon;
  	INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, couponid, NULL, paymentid, datein, dateout, 'unchecked');
      SET bookingid = (SELECT LAST_INSERT_ID());
  
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `createonlinepayment` (IN `amount` DECIMAL(10,2), IN `uid` INT, IN `cardno` VARCHAR(50), OUT `paymentid` INT)  NO SQL
BEGIN
  	INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`,`type`) VALUES (NULL, NOW(), amount, uid, 'creditcard', cardno, NULL,'booking');
      SET paymentid = (SELECT LAST_INSERT_ID());
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `newwalkin` (IN `inamount` DECIMAL(10,2), IN `instaffid` INT, IN `incardno` VARCHAR(50), IN `inmethod` VARCHAR(20), OUT `paymentid` INT)  NO SQL
BEGIN
  	
  	INSERT INTO payment VALUES (NULL, NOW(), inamount, NULL, inmethod, incardno, instaffid, 'booking','');
      SET paymentid = (SELECT LAST_INSERT_ID());
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `newwalkinbooking` (IN `infromdate` DATE, IN `intodate` DATE, IN `instaffid` INT, IN `inroomid` INT, IN `offer` VARCHAR(50), IN `paymentid` INT, OUT `bookingid` INT)  NO SQL
BEGIN
  	DECLARE codeid INT;
  	SELECT specialoffer.idspecialoffer AS codeid FROM specialoffer WHERE specialoffer.code = offer;
     	INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, NULL, inroomid, codeid, instaffid, paymentid, infromdate, intodate, 'unchecked');
      SET bookingid = (SELECT LAST_INSERT_ID());
  END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `calc_coupon` (`amount` DECIMAL(10,2), `couponcode` VARCHAR(50)) RETURNS DECIMAL(10,2) UNSIGNED NO SQL
BEGIN
  	DECLARE dsc DECIMAL(10,2);
  	SELECT discount into dsc FROM specialoffer WHERE specialoffer.code = couponcode;
      IF (dsc = NULL) THEN
      	return NULL;
      ELSE
      	SET dsc = amount*(100-dsc)/100;
          return dsc;
      END IF;

  END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `user_iduser` int(11) DEFAULT NULL,
  `room_idroom` int(11) NOT NULL,
  `specialoffer_idspecialoffer` int(11) DEFAULT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `payment_idpayment` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` enum('checked','unchecked') NOT NULL,
  `roomnumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`, `roomnumber`) VALUES
(1, 2, 1, NULL, NULL, 1, '2017-12-01', '2017-12-03', 'unchecked', 1),
(2, 2, 4, NULL, NULL, 1, '2017-12-01', '2017-12-03', 'unchecked', 2),
(3, 2, 1, NULL, NULL, 2, '2017-12-04', '2017-12-06', 'checked', 3),
(4, 2, 2, NULL, NULL, 2, '2017-12-04', '2017-12-06', 'unchecked', 4),
(5, 2, 1, NULL, NULL, 3, '2017-12-08', '2017-12-10', 'unchecked', 5),
(6, 3, 5, NULL, NULL, 4, '2017-12-01', '2017-12-03', 'unchecked', 6);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `message` text,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`idmessage`, `staff_idstaff`, `message`, `timestamp`) VALUES
(1, 1, 'welcome for my hotel', '2017-12-13 06:47:13'),
(2, 1, 'welcome for my hotel', '2017-12-13 06:47:23'),
(3, 1, 'welcome for my hotel', '2017-12-13 06:47:39'),
(4, 1, 'ddd', '2017-12-14 03:17:43'),
(5, 1, '', '2017-12-14 04:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `user_iduser` int(11) DEFAULT NULL,
  `method` enum('cash','creditcard') NOT NULL,
  `cardno` varchar(45) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `type` enum('booking','service','','') NOT NULL,
  `remark` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`, `type`, `remark`) VALUES
(1, '2017-12-13 06:31:50', '54000.00', 2, 'creditcard', '', NULL, 'booking', NULL),
(2, '2017-12-13 06:36:18', '64000.00', 2, 'creditcard', '', NULL, 'booking', NULL),
(3, '2017-12-13 06:45:10', '40000.00', 2, 'creditcard', '', NULL, 'booking', NULL),
(4, '2017-12-14 15:09:55', '14000.00', 3, 'creditcard', '', NULL, 'booking', NULL),
(5, '2017-12-14 03:19:42', '98.00', 2, 'cash', '', NULL, 'service', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `idrequest` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('open','closed') NOT NULL,
  `replymessage` text,
  `timestamp` datetime DEFAULT NULL,
  `replytimestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`idrequest`, `user_iduser`, `staff_idstaff`, `message`, `status`, `replymessage`, `timestamp`, `replytimestamp`) VALUES
(1, 2, NULL, 'Want fruit', 'closed', 'Okay', '2017-12-13 06:33:23', '2017-12-13 06:35:26'),
(2, 3, NULL, 'jfhjf', 'closed', 'ooo', '2017-12-14 03:11:41', '2017-12-14 03:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `idroom` int(11) NOT NULL,
  `roomtype_idroomtype` int(11) NOT NULL,
  `roomname` varchar(45) NOT NULL,
  `status` enum('open','closed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`idroom`, `roomtype_idroomtype`, `roomname`, `status`) VALUES
(1, 1, 'Seaside', 'open'),
(2, 2, 'Ocean View1', 'open'),
(3, 2, 'Ocean View2', 'open'),
(4, 3, 'Supreme1', 'open'),
(5, 3, 'Supreme2', 'open'),
(6, 3, 'Supreme3', 'open'),
(7, 2, 'Gold', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `idroomtype` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `numdbed` int(11) NOT NULL,
  `numsbed` int(11) NOT NULL,
  `numbath` int(11) NOT NULL,
  `numliving` int(11) NOT NULL,
  `size` decimal(5,2) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `numadult` int(11) NOT NULL,
  `numchild` int(11) NOT NULL,
  `pic` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`idroomtype`, `name`, `numdbed`, `numsbed`, `numbath`, `numliving`, `size`, `price`, `numadult`, `numchild`, `pic`) VALUES
(1, 'Deluxe Pool Access', 2, 0, 2, 1, '60.00', '20000.00', 4, 2, 'del1'),
(2, 'Junior suite', 1, 1, 2, 1, '45.00', '12000.00', 3, 2, 'jus1'),
(3, 'Supreme1D', 1, 0, 1, 0, '32.00', '7000.00', 2, 1, 'sup1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idservice` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idservice`, `name`, `price`) VALUES
(1, 'Rice', '49.00');

-- --------------------------------------------------------

--
-- Table structure for table `specialoffer`
--

CREATE TABLE `specialoffer` (
  `idspecialoffer` int(11) NOT NULL,
  `staff_idstaff` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `status` enum('active','disabled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialoffer`
--

INSERT INTO `specialoffer` (`idspecialoffer`, `staff_idstaff`, `code`, `discount`, `status`) VALUES
(1, 11, 'god', '25.00', 'active'),
(2, 11, 'NOCODE', '0.00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idstaff` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `position` varchar(45) NOT NULL,
  `status` enum('active','nonactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idstaff`, `user_iduser`, `salary`, `position`, `status`) VALUES
(1, 1, '980000.00', 'Head of Hotel', 'active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewbooking`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewbooking` (
`idbooking` int(11)
,`user_iduser` int(11)
,`roomnumber` int(50)
,`roomname` varchar(45)
,`discountcode` int(11)
,`staff_idstaff` int(11)
,`payment_idpayment` int(11)
,`fromdate` date
,`todate` date
,`status` enum('checked','unchecked')
,`name` varchar(45)
,`fname` varchar(45)
,`lname` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewmessage`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewmessage` (
`message_idmessage` int(11)
,`name` varchar(45)
,`message` text
,`timestamp` datetime
,`fname` varchar(45)
,`lname` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewmessage2`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewmessage2` (
`name` varchar(45)
,`message` text
,`staffid` int(11)
,`timestamp` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewrequest`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewrequest` (
`idrequest` int(11)
,`staff_idstaff` int(11)
,`user_iduser` int(11)
,`status` enum('open','closed')
,`timestamp` datetime
,`replytimestamp` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewroom`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewroom` (
`idroom` int(11)
,`roomname` varchar(45)
,`status` enum('open','closed')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewservice`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewservice` (
`idservice` int(11)
,`name` varchar(45)
,`price` decimal(6,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewstaff`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewstaff` (
`idstaff` int(11)
,`salary` decimal(8,2)
,`position` varchar(45)
,`status` enum('active','nonactive')
,`email` varchar(45)
,`fname` varchar(45)
,`lname` varchar(45)
,`address` varchar(100)
,`dob` date
,`personalid` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewtransaction`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewtransaction` (
`user_iduser` int(11)
,`fname` varchar(45)
,`lname` varchar(45)
,`amount` decimal(10,2)
,`method` enum('cash','creditcard')
,`type` enum('booking','service','','')
,`staff_idstaff` int(11)
,`timestamp` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewuser`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewuser` (
`iduser` int(11)
,`usergroup_idusergroup` int(11)
,`password` varchar(45)
,`email` varchar(45)
,`fname` varchar(45)
,`lname` varchar(45)
,`address` varchar(100)
,`dob` date
,`personalid` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `usergroup_idusergroup` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `personalid` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `password`, `email`, `fname`, `lname`, `address`, `dob`, `personalid`) VALUES
(1, 11, 'staff', 'staff', 'staff', 'staff', '123/36', '1996-11-01', '1150'),
(2, 1, 'user', 'user', 'user', 'user', '123/38', '1997-02-28', '1151'),
(3, 1, 'test', 'test', 'tt', 'tt', '23423', '2017-12-28', '11');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `idusergroup` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`idusergroup`, `name`) VALUES
(1, 'customer'),
(2, 'goldcustomer'),
(3, 'platinumcustomer'),
(11, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_has_message`
--

CREATE TABLE `usergroup_has_message` (
  `usergroup_idusergroup` int(11) NOT NULL,
  `message_idmessage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_has_message`
--

INSERT INTO `usergroup_has_message` (`usergroup_idusergroup`, `message_idmessage`) VALUES
(1, 5),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure for view `staff_viewbooking`
--
DROP TABLE IF EXISTS `staff_viewbooking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewbooking`  AS  select `booking`.`idbooking` AS `idbooking`,`booking`.`user_iduser` AS `user_iduser`,`booking`.`roomnumber` AS `roomnumber`,`room`.`roomname` AS `roomname`,`booking`.`specialoffer_idspecialoffer` AS `discountcode`,`booking`.`staff_idstaff` AS `staff_idstaff`,`booking`.`payment_idpayment` AS `payment_idpayment`,`booking`.`fromdate` AS `fromdate`,`booking`.`todate` AS `todate`,`booking`.`status` AS `status`,`usergroup`.`name` AS `name`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname` from (((`booking` left join `user` on((`user`.`iduser` = `booking`.`user_iduser`))) left join `room` on((`room`.`idroom` = `booking`.`room_idroom`))) left join `usergroup` on((`usergroup`.`idusergroup` = `user`.`usergroup_idusergroup`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewmessage`
--
DROP TABLE IF EXISTS `staff_viewmessage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewmessage`  AS  select `usergroup_has_message`.`message_idmessage` AS `message_idmessage`,`usergroup`.`name` AS `name`,`message`.`message` AS `message`,`message`.`timestamp` AS `timestamp`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname` from ((((`usergroup_has_message` left join `message` on((`usergroup_has_message`.`message_idmessage` = `message`.`idmessage`))) left join `staff` on((`staff`.`idstaff` = `message`.`staff_idstaff`))) left join `usergroup` on((`usergroup_has_message`.`usergroup_idusergroup` = `usergroup`.`idusergroup`))) left join `user` on((`user`.`iduser` = `staff`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewmessage2`
--
DROP TABLE IF EXISTS `staff_viewmessage2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewmessage2`  AS  select `usergroup`.`name` AS `name`,`message`.`message` AS `message`,`message`.`staff_idstaff` AS `staffid`,`message`.`timestamp` AS `timestamp` from ((`usergroup` join `usergroup_has_message`) join `message`) where ((`usergroup_has_message`.`usergroup_idusergroup` = `usergroup`.`idusergroup`) and (`usergroup_has_message`.`message_idmessage` = `message`.`idmessage`)) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewrequest`
--
DROP TABLE IF EXISTS `staff_viewrequest`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewrequest`  AS  select `request`.`idrequest` AS `idrequest`,`request`.`staff_idstaff` AS `staff_idstaff`,`request`.`user_iduser` AS `user_iduser`,`request`.`status` AS `status`,`request`.`timestamp` AS `timestamp`,`request`.`replytimestamp` AS `replytimestamp` from `request` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewroom`
--
DROP TABLE IF EXISTS `staff_viewroom`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewroom`  AS  select `room`.`idroom` AS `idroom`,`room`.`roomname` AS `roomname`,`room`.`status` AS `status` from `room` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewservice`
--
DROP TABLE IF EXISTS `staff_viewservice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewservice`  AS  select `service`.`idservice` AS `idservice`,`service`.`name` AS `name`,`service`.`price` AS `price` from `service` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewstaff`
--
DROP TABLE IF EXISTS `staff_viewstaff`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewstaff`  AS  select `staff`.`idstaff` AS `idstaff`,`staff`.`salary` AS `salary`,`staff`.`position` AS `position`,`staff`.`status` AS `status`,`user`.`email` AS `email`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname`,`user`.`address` AS `address`,`user`.`dob` AS `dob`,`user`.`personalid` AS `personalid` from (`staff` left join `user` on((`user`.`iduser` = `staff`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewtransaction`
--
DROP TABLE IF EXISTS `staff_viewtransaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewtransaction`  AS  select `payment`.`user_iduser` AS `user_iduser`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname`,`payment`.`amount` AS `amount`,`payment`.`method` AS `method`,`payment`.`type` AS `type`,`payment`.`staff_idstaff` AS `staff_idstaff`,`payment`.`timestamp` AS `timestamp` from (`payment` left join `user` on((`user`.`iduser` = `payment`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewuser`
--
DROP TABLE IF EXISTS `staff_viewuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staff_viewuser`  AS  select `user`.`iduser` AS `iduser`,`user`.`usergroup_idusergroup` AS `usergroup_idusergroup`,`user`.`password` AS `password`,`user`.`email` AS `email`,`user`.`fname` AS `fname`,`user`.`lname` AS `lname`,`user`.`address` AS `address`,`user`.`dob` AS `dob`,`user`.`personalid` AS `personalid` from `user` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `fk_booking_user1_idx` (`user_iduser`),
  ADD KEY `fk_booking_room1_idx` (`room_idroom`),
  ADD KEY `fk_booking_specialoffer1_idx` (`specialoffer_idspecialoffer`),
  ADD KEY `fk_booking_staff1_idx` (`staff_idstaff`),
  ADD KEY `fk_booking_payment1_idx` (`payment_idpayment`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_staff1_idx` (`staff_idstaff`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idpayment`),
  ADD KEY `fk_payment_user1_idx` (`user_iduser`),
  ADD KEY `fk_payment_staff1_idx` (`staff_idstaff`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`idrequest`),
  ADD KEY `fk_request_user1_idx` (`user_iduser`),
  ADD KEY `fk_request_staff1_idx` (`staff_idstaff`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idroom`),
  ADD KEY `fk_room_roomtype1_idx` (`roomtype_idroomtype`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`idroomtype`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`);

--
-- Indexes for table `specialoffer`
--
ALTER TABLE `specialoffer`
  ADD PRIMARY KEY (`idspecialoffer`),
  ADD KEY `fk_specialoffer_staff1_idx` (`staff_idstaff`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idstaff`),
  ADD KEY `fk_staff_user1_idx` (`user_iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `fk_user_usergroup1_idx` (`usergroup_idusergroup`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`idusergroup`);

--
-- Indexes for table `usergroup_has_message`
--
ALTER TABLE `usergroup_has_message`
  ADD PRIMARY KEY (`usergroup_idusergroup`,`message_idmessage`),
  ADD KEY `fk_usergroup_has_message_message1_idx` (`message_idmessage`),
  ADD KEY `fk_usergroup_has_message_usergroup1_idx` (`usergroup_idusergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `idroomtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialoffer`
--
ALTER TABLE `specialoffer`
  MODIFY `idspecialoffer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `idusergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_room1` FOREIGN KEY (`room_idroom`) REFERENCES `room` (`idroom`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_specialoffer1` FOREIGN KEY (`specialoffer_idspecialoffer`) REFERENCES `specialoffer` (`idspecialoffer`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_room_roomtype1` FOREIGN KEY (`roomtype_idroomtype`) REFERENCES `roomtype` (`idroomtype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `specialoffer`
--
ALTER TABLE `specialoffer`
  ADD CONSTRAINT `fk_specialoffer_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_staff_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_usergroup1` FOREIGN KEY (`usergroup_idusergroup`) REFERENCES `usergroup` (`idusergroup`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usergroup_has_message`
--
ALTER TABLE `usergroup_has_message`
  ADD CONSTRAINT `fk_usergroup_has_message_message1` FOREIGN KEY (`message_idmessage`) REFERENCES `message` (`idmessage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usergroup_has_message_usergroup1` FOREIGN KEY (`usergroup_idusergroup`) REFERENCES `usergroup` (`idusergroup`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
