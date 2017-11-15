-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2017 at 02:05 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CU_FINAL`
--

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
  `status` enum('checked','unchecked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES
(1, 23, 1, NULL, NULL, 1, '2017-11-03', '2017-11-04', 'unchecked'),
(2, 1, 1, NULL, NULL, 2, '2017-11-09', '2017-11-12', 'unchecked'),
(3, 20, 1, NULL, NULL, 3, '2017-11-17', '2017-11-19', 'unchecked'),
(4, 13, 1, NULL, NULL, 4, '2017-11-20', '2017-11-24', 'unchecked'),
(5, 2, 1, NULL, NULL, 5, '2017-11-25', '2017-11-26', 'unchecked'),
(6, 19, 2, NULL, NULL, 6, '2017-11-04', '2017-11-05', 'unchecked'),
(7, 23, 2, NULL, NULL, 7, '2017-11-09', '2017-11-12', 'unchecked'),
(8, 7, 2, NULL, NULL, 8, '2017-11-17', '2017-11-18', 'unchecked'),
(9, 3, 2, NULL, NULL, 9, '2017-11-19', '2017-11-23', 'unchecked'),
(10, 4, 2, NULL, NULL, 10, '2017-11-24', '2017-11-26', 'unchecked'),
(11, 19, 3, NULL, NULL, 11, '2017-11-04', '2017-11-05', 'unchecked'),
(12, 8, 3, NULL, NULL, 12, '2017-11-10', '2017-11-12', 'unchecked'),
(13, 10, 3, NULL, NULL, 13, '2017-11-16', '2017-11-19', 'unchecked'),
(14, 20, 3, NULL, NULL, 14, '2017-11-24', '2017-11-25', 'unchecked'),
(15, 5, 3, NULL, NULL, 15, '2017-11-26', '2017-11-30', 'unchecked'),
(16, 13, 4, NULL, NULL, 16, '2017-11-04', '2017-11-05', 'unchecked'),
(17, 6, 4, NULL, NULL, 17, '2017-11-09', '2017-11-13', 'unchecked'),
(18, 7, 4, NULL, NULL, 18, '2017-11-17', '2017-11-19', 'unchecked'),
(19, 9, 4, NULL, NULL, 19, '2017-11-23', '2017-11-26', 'unchecked'),
(20, 15, 5, NULL, NULL, 20, '2017-11-04', '2017-11-05', 'unchecked'),
(21, 16, 5, NULL, NULL, 21, '2017-11-07', '2017-11-08', 'unchecked'),
(22, 11, 5, NULL, NULL, 22, '2017-11-10', '2017-11-15', 'unchecked'),
(23, 12, 5, NULL, NULL, 23, '2017-11-16', '2017-11-19', 'unchecked'),
(24, 17, 5, NULL, NULL, 24, '2017-11-21', '2017-11-23', 'unchecked'),
(25, 23, 5, NULL, NULL, 25, '2017-11-24', '2017-11-30', 'unchecked'),
(26, 18, 6, NULL, NULL, 26, '2017-11-03', '2017-11-05', 'unchecked'),
(27, 21, 6, NULL, NULL, 27, '2017-11-06', '2017-11-07', 'unchecked'),
(28, 14, 6, NULL, NULL, 28, '2017-11-10', '2017-11-15', 'unchecked'),
(29, 20, 6, NULL, NULL, 29, '2017-11-16', '2017-11-20', 'checked'),
(100, NULL, 4, NULL, 12, 121, '2017-12-13', '2017-12-14', 'checked');

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
(1, 11, 'dear all customer we love you', '2017-11-14 21:49:05');

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
(1, '2017-11-09 00:57:26', '20000.00', 23, 'creditcard', '4283', NULL, 'booking', ''),
(2, '2017-11-09 01:00:44', '60000.00', 1, 'creditcard', '4283', NULL, 'booking', ''),
(3, '2017-11-09 01:03:28', '40000.00', 20, 'cash', '', NULL, 'booking', ''),
(4, '2017-11-09 01:06:59', '80000.00', 13, 'creditcard', '4283', NULL, 'booking', ''),
(5, '2017-11-09 01:09:54', '20000.00', 2, 'cash', '', NULL, 'booking', ''),
(6, '2017-11-09 01:12:52', '12000.00', 19, 'cash', '', NULL, 'booking', ''),
(7, '2017-11-09 01:16:28', '36000.00', 23, 'creditcard', '4283', NULL, 'booking', ''),
(8, '2017-11-09 01:18:23', '12000.00', 7, 'cash', '', NULL, 'booking', ''),
(9, '2017-11-09 01:22:23', '48000.00', 3, 'creditcard', '4283', NULL, 'booking', ''),
(10, '2017-11-09 01:25:00', '24000.00', 4, 'cash', '', NULL, 'booking', ''),
(11, '2017-11-09 01:30:12', '12000.00', 19, 'creditcard', '4283', NULL, 'booking', ''),
(12, '2017-11-09 01:33:35', '24000.00', 8, 'creditcard', '4283', NULL, 'booking', ''),
(13, '2017-11-09 01:35:51', '36000.00', 10, 'creditcard', '4283', NULL, 'booking', ''),
(14, '2017-11-09 01:39:11', '12000.00', 20, 'cash', '', NULL, 'booking', ''),
(15, '2017-11-09 01:41:10', '48000.00', 5, 'creditcard', '4283', NULL, 'booking', ''),
(16, '2017-11-09 01:44:23', '7000.00', 13, 'cash', '', NULL, 'booking', ''),
(17, '2017-11-09 01:46:53', '28000.00', 6, 'creditcard', '4283', NULL, 'booking', ''),
(18, '2017-11-09 01:48:58', '14000.00', 7, 'cash', '', NULL, 'booking', ''),
(19, '2017-11-09 01:51:08', '21000.00', 9, 'creditcard', '4283', NULL, 'booking', ''),
(20, '2017-11-09 01:54:25', '7000.00', 15, 'cash', '', NULL, 'booking', ''),
(21, '2017-11-09 01:56:16', '7000.00', 16, 'cash', '', NULL, 'booking', ''),
(22, '2017-11-09 01:58:28', '35000.00', 11, 'creditcard', '4283', NULL, 'booking', ''),
(23, '2017-11-09 02:00:35', '21000.00', 12, 'creditcard', '4283', NULL, 'booking', ''),
(24, '2017-11-09 02:03:12', '14000.00', 17, 'cash', '', NULL, 'booking', ''),
(25, '2017-11-09 02:05:56', '42000.00', 23, 'creditcard', '4283', NULL, 'booking', ''),
(26, '2017-11-09 02:08:09', '14000.00', 18, 'cash', '', NULL, 'booking', ''),
(27, '2017-11-09 02:10:09', '7000.00', 21, 'cash', '', NULL, 'booking', ''),
(28, '2017-11-09 02:12:14', '35000.00', 14, 'creditcard', '4283', NULL, 'booking', ''),
(29, '2017-11-09 02:14:45', '28000.00', 20, 'creditcard', '4283', NULL, 'booking', ''),
(30, '2017-11-09 02:17:05', '21000.00', 22, 'creditcard', '4283', NULL, 'booking', ''),
(85, '2017-11-13 22:44:46', '29250.00', 34, 'creditcard', '8888', NULL, 'booking', ''),
(86, '2017-11-15 17:44:01', '5000.00', NULL, 'cash', '', 11, 'booking', ''),
(87, '2017-11-15 18:19:55', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(88, '2017-11-15 18:23:55', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(89, '2017-11-15 18:25:54', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(90, '2017-11-15 18:29:33', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(91, '2017-11-15 18:31:55', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(92, '2017-11-15 18:32:06', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(93, '2017-11-15 18:32:22', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(94, '2017-11-15 18:32:43', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(95, '2017-11-15 18:33:12', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(96, '2017-11-15 18:33:34', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(97, '2017-11-15 18:34:40', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(98, '2017-11-15 18:35:08', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(99, '2017-11-15 18:39:45', '9000.00', NULL, 'cash', '', 12, 'booking', ''),
(103, '2017-11-15 19:08:47', '12000.00', NULL, 'cash', '', 12, 'booking', ''),
(107, '2017-11-15 19:12:35', '200.00', NULL, 'cash', '', 11, 'booking', ''),
(121, '2017-11-15 19:26:16', '7000.00', NULL, 'cash', '', 12, 'booking', '');

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
(1, 34, NULL, '', 'open', NULL, '2017-11-14 04:44:08', NULL),
(2, 34, NULL, 'kwai tong', 'open', NULL, '2017-11-14 04:45:30', NULL),
(3, 34, 11, 'kwai tong', 'closed', 'yes kwai', '2017-11-14 04:45:30', '2017-11-14 17:09:59'),
(4, 34, 11, 'kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong kwai tong ', 'closed', 'I tong mang hua kuay', '2017-11-14 04:47:39', '2017-11-14 17:04:57'),
(5, 34, 11, 'aoitip naruk', 'closed', 'i agree', '2017-11-14 05:08:27', '2017-11-14 17:09:24'),
(6, 34, NULL, 'sss', 'open', NULL, '2017-11-14 10:19:04', NULL);

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
(6, 3, 'Supreme3', 'open');

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
(1, 'Pork Steak', '450.00'),
(2, 'Spagetti Cabonara', '350.00'),
(3, 'Beef Burger', '400.00'),
(4, 'Fish and Chips', '600.00'),
(5, 'Seafood platter', '1200.00'),
(6, 'Beer can', '300.00'),
(7, 'Mojito cocktail', '450.00'),
(8, 'Martini cocktail', '400.00'),
(9, 'Body massage 1hr', '1500.00'),
(10, 'Oil massage 30min', '2200.00');

-- --------------------------------------------------------

--
-- Table structure for table `service_receipt`
--

CREATE TABLE `service_receipt` (
  `receiptid` int(11) NOT NULL,
  `booking_idbooking` int(11) NOT NULL,
  `service_idservice` int(11) NOT NULL,
  `payment_idpayment` int(11) NOT NULL,
  `staff_idstaff` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 24, '74000.00', 'Managing Director', 'active'),
(2, 25, '69000.00', 'General Manager', 'active'),
(3, 26, '66000.00', 'Resident Manager', 'active'),
(4, 27, '62000.00', 'Executive Assistant Manager', 'active'),
(5, 28, '57000.00', 'Personnel Manager', 'active'),
(6, 29, '34000.00', 'Accountant', 'active'),
(7, 30, '27000.00', 'Chef', 'active'),
(8, 31, '27000.00', 'Chef', 'active'),
(9, 32, '9000.00', 'Housekeeper', 'active'),
(10, 33, '12000.00', 'Reception', 'active'),
(11, 34, '20.00', 'inw', 'active'),
(12, 35, '20.00', 'staff', 'active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `staff_viewbooking`
-- (See below for the actual view)
--
CREATE TABLE `staff_viewbooking` (
`idbooking` int(11)
,`user_iduser` int(11)
,`roomname` varchar(45)
,`specialoffer_idspecialoffer` int(11)
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
,`cardno` varchar(45)
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
(1, 1, '1234', 'Benyapa@mail.com', 'Benyapa', 'Poonlarp', '', '0000-00-00', ''),
(2, 1, '1234', 'Pornphapat@mail.com', 'Pornphapat', 'Innwon', '', '0000-00-00', ''),
(3, 1, '1234', 'Naruson@mail.com', 'Naruson', 'Srivaro', '', '0000-00-00', ''),
(4, 1, '1234', 'Smithpong@mail.com', 'Smithpong', 'Udommongcolkit', '', '0000-00-00', ''),
(5, 1, '1234', 'Neeranuch@mail.com', 'Neeranuch', 'Anupak', '', '0000-00-00', ''),
(6, 1, '1234', 'Benyapa@mail.com', 'Benyapa', 'Ngowjungdee', '', '0000-00-00', ''),
(7, 1, '1234', 'Smith@mail.com', 'Smith', 'Keeratimethakul', '', '0000-00-00', ''),
(8, 1, '1234', 'Papsineebhorn@mail.com', 'Papsineebhorn', 'Sukchuen', '', '0000-00-00', ''),
(9, 1, '1234', 'Puttita@mail.com', 'Puttita', 'Chuwonglertsakul', '', '0000-00-00', ''),
(10, 1, '1234', 'Krittikorn@mail.com', 'Krittikorn', 'Kramgomut', '', '0000-00-00', ''),
(11, 1, '1234', 'Nawaphat@mail.com', 'Nawaphat', 'Khankasikam', '', '0000-00-00', ''),
(12, 1, '1234', 'Patiphan@mail.com', 'Patiphan', 'Pinkeaw', '', '0000-00-00', ''),
(13, 1, '1234', 'Puttiwat@mail.com', 'Puttiwat', 'Wanna', '', '0000-00-00', ''),
(14, 1, '1234', 'Vatcharat@mail.com', 'Vatcharat', 'Rattananun', '', '0000-00-00', ''),
(15, 1, '1234', 'Areeya@mail.com', 'Areeya', 'Teeparagsapan', '', '0000-00-00', ''),
(16, 1, '1234', 'Punchok@mail.com', 'Punchok', 'Kerdsiri', '', '0000-00-00', ''),
(17, 1, '1234', 'Amonnut@mail.com', 'Amonnut', 'Petcharat', '', '0000-00-00', ''),
(18, 1, '1234', 'Theerapat@mail.com', 'Theerapat', 'Deeprasert', '', '0000-00-00', ''),
(19, 2, '1234', 'Sudshewin@mail.com', 'Sudshewin', 'Suebvong', '', '0000-00-00', ''),
(20, 2, '1234', 'Nattaruja@mail.com', 'Nattaruja', 'Buranaosot', '', '0000-00-00', ''),
(21, 2, '1234', 'Putthichot@mail.com', 'Putthichot', 'Chunjiree', '', '0000-00-00', ''),
(22, 3, '1234', 'Napat@mail.com', 'Napat', 'Saeung', '', '0000-00-00', ''),
(23, 3, '1234', 'Sirichai@mail.com', 'Sirichai', 'Khomleart', '', '0000-00-00', ''),
(24, 11, '9999', 'Apiwat@mail.com', 'Apiwat', 'Thaiphakdee', '', '0000-00-00', ''),
(25, 11, '9999', 'Prompat@mail.com', 'Prompat', 'Tipphakdee', '', '0000-00-00', ''),
(26, 11, '9999', 'Wari@mail.com', 'Wari', 'Maroengsit', '', '0000-00-00', ''),
(27, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(28, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(29, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(30, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(31, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(32, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(33, 11, '9999', 'dumdum', 'dumdum', 'dumdum', '', '0000-00-00', ''),
(34, 1, 'admin', 'admin', 'Kriddanai55', 'Roonguthai3', 'sdsd', '0000-00-00', ''),
(35, 11, 'staff', 'staff', 'inwnaja', 'godnaja', '', NULL, NULL);

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
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Structure for view `staff_viewbooking`
--
DROP TABLE IF EXISTS `staff_viewbooking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewbooking`  AS  select `cu_final`.`booking`.`idbooking` AS `idbooking`,`cu_final`.`booking`.`user_iduser` AS `user_iduser`,`cu_final`.`room`.`roomname` AS `roomname`,`cu_final`.`booking`.`specialoffer_idspecialoffer` AS `specialoffer_idspecialoffer`,`cu_final`.`booking`.`staff_idstaff` AS `staff_idstaff`,`cu_final`.`booking`.`payment_idpayment` AS `payment_idpayment`,`cu_final`.`booking`.`fromdate` AS `fromdate`,`cu_final`.`booking`.`todate` AS `todate`,`cu_final`.`booking`.`status` AS `status`,`cu_final`.`usergroup`.`name` AS `name`,`cu_final`.`user`.`fname` AS `fname`,`cu_final`.`user`.`lname` AS `lname` from (((`cu_final`.`booking` left join `cu_final`.`user` on((`cu_final`.`user`.`iduser` = `cu_final`.`booking`.`user_iduser`))) left join `cu_final`.`room` on((`cu_final`.`room`.`idroom` = `cu_final`.`booking`.`room_idroom`))) left join `cu_final`.`usergroup` on((`cu_final`.`usergroup`.`idusergroup` = `cu_final`.`user`.`usergroup_idusergroup`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewmessage`
--
DROP TABLE IF EXISTS `staff_viewmessage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewmessage`  AS  select `cu_final`.`usergroup_has_message`.`message_idmessage` AS `message_idmessage`,`cu_final`.`usergroup`.`name` AS `name`,`cu_final`.`message`.`message` AS `message`,`cu_final`.`message`.`timestamp` AS `timestamp`,`cu_final`.`user`.`fname` AS `fname`,`cu_final`.`user`.`lname` AS `lname` from ((((`cu_final`.`usergroup_has_message` left join `cu_final`.`message` on((`cu_final`.`usergroup_has_message`.`message_idmessage` = `cu_final`.`message`.`idmessage`))) left join `cu_final`.`staff` on((`cu_final`.`staff`.`idstaff` = `cu_final`.`message`.`staff_idstaff`))) left join `cu_final`.`usergroup` on((`cu_final`.`usergroup_has_message`.`usergroup_idusergroup` = `cu_final`.`usergroup`.`idusergroup`))) left join `cu_final`.`user` on((`cu_final`.`user`.`iduser` = `cu_final`.`staff`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewrequest`
--
DROP TABLE IF EXISTS `staff_viewrequest`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewrequest`  AS  select `cu_final`.`request`.`idrequest` AS `idrequest`,`cu_final`.`request`.`staff_idstaff` AS `staff_idstaff`,`cu_final`.`request`.`user_iduser` AS `user_iduser`,`cu_final`.`request`.`status` AS `status`,`cu_final`.`request`.`timestamp` AS `timestamp`,`cu_final`.`request`.`replytimestamp` AS `replytimestamp` from `cu_final`.`request` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewroom`
--
DROP TABLE IF EXISTS `staff_viewroom`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewroom`  AS  select `cu_final`.`room`.`idroom` AS `idroom`,`cu_final`.`room`.`roomname` AS `roomname`,`cu_final`.`room`.`status` AS `status` from `cu_final`.`room` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewservice`
--
DROP TABLE IF EXISTS `staff_viewservice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewservice`  AS  select `cu_final`.`service`.`idservice` AS `idservice`,`cu_final`.`service`.`name` AS `name`,`cu_final`.`service`.`price` AS `price` from `cu_final`.`service` ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewstaff`
--
DROP TABLE IF EXISTS `staff_viewstaff`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewstaff`  AS  select `cu_final`.`staff`.`idstaff` AS `idstaff`,`cu_final`.`staff`.`salary` AS `salary`,`cu_final`.`staff`.`position` AS `position`,`cu_final`.`staff`.`status` AS `status`,`cu_final`.`user`.`email` AS `email`,`cu_final`.`user`.`fname` AS `fname`,`cu_final`.`user`.`lname` AS `lname`,`cu_final`.`user`.`address` AS `address`,`cu_final`.`user`.`dob` AS `dob`,`cu_final`.`user`.`personalid` AS `personalid` from (`cu_final`.`staff` left join `cu_final`.`user` on((`cu_final`.`user`.`iduser` = `cu_final`.`staff`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewtransaction`
--
DROP TABLE IF EXISTS `staff_viewtransaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewtransaction`  AS  select `cu_final`.`payment`.`user_iduser` AS `user_iduser`,`cu_final`.`user`.`fname` AS `fname`,`cu_final`.`user`.`lname` AS `lname`,`cu_final`.`payment`.`amount` AS `amount`,`cu_final`.`payment`.`method` AS `method`,`cu_final`.`payment`.`cardno` AS `cardno`,`cu_final`.`payment`.`type` AS `type`,`cu_final`.`payment`.`staff_idstaff` AS `staff_idstaff`,`cu_final`.`payment`.`timestamp` AS `timestamp` from (`cu_final`.`payment` left join `cu_final`.`user` on((`cu_final`.`user`.`iduser` = `cu_final`.`payment`.`user_iduser`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staff_viewuser`
--
DROP TABLE IF EXISTS `staff_viewuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cu_final`.`staff_viewuser`  AS  select `cu_final`.`user`.`iduser` AS `iduser`,`cu_final`.`user`.`usergroup_idusergroup` AS `usergroup_idusergroup`,`cu_final`.`user`.`password` AS `password`,`cu_final`.`user`.`email` AS `email`,`cu_final`.`user`.`fname` AS `fname`,`cu_final`.`user`.`lname` AS `lname`,`cu_final`.`user`.`address` AS `address`,`cu_final`.`user`.`dob` AS `dob`,`cu_final`.`user`.`personalid` AS `personalid` from `cu_final`.`user` ;

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
-- Indexes for table `service_receipt`
--
ALTER TABLE `service_receipt`
  ADD PRIMARY KEY (`receiptid`,`booking_idbooking`,`service_idservice`),
  ADD KEY `fk_booking_has_service_service1_idx` (`service_idservice`),
  ADD KEY `fk_booking_has_service_booking1_idx` (`booking_idbooking`),
  ADD KEY `fk_service_receipt_payment1_idx` (`payment_idpayment`),
  ADD KEY `fk_service_receipt_staff1_idx` (`staff_idstaff`);

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
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `idroomtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `service_receipt`
--
ALTER TABLE `service_receipt`
  MODIFY `receiptid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialoffer`
--
ALTER TABLE `specialoffer`
  MODIFY `idspecialoffer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
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
  ADD CONSTRAINT `fk_booking_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_room1` FOREIGN KEY (`room_idroom`) REFERENCES `room` (`idroom`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_specialoffer1` FOREIGN KEY (`specialoffer_idspecialoffer`) REFERENCES `specialoffer` (`idspecialoffer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `service_receipt`
--
ALTER TABLE `service_receipt`
  ADD CONSTRAINT `fk_booking_has_service_booking1` FOREIGN KEY (`booking_idbooking`) REFERENCES `booking` (`idbooking`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_has_service_service1` FOREIGN KEY (`service_idservice`) REFERENCES `service` (`idservice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_service_receipt_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_service_receipt_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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


  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` FUNCTION `calc_coupon`(`amount` DECIMAL(10,2), `couponcode` VARCHAR(50)) RETURNS decimal(10,2) unsigned
      NO SQL
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

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` FUNCTION `return_ten`(`dummy` INT) RETURNS int(11)
      NO SQL
  BEGIN
  	return 10;
  END$$
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `addbooking`(IN `datefrom` DATE, IN `dateto` DATE, IN `userid` INT, IN `coupon` INT, IN `roomid` INT, OUT `bookingid` INT, OUT `paymentid` INT, IN `inmethod` VARCHAR(50), IN `cardno` VARCHAR(50), IN `inamount` DECIMAL, IN `staffid` VARCHAR(50))
      NO SQL
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
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `availableroomtype`(IN `infromdate` DATE, IN `intodate` DATE)
      NO SQL
  BEGIN
  	SELECT *,COUNT(*) FROM room LEFT JOIN roomtype ON room.roomtype_idroomtype = roomtype.idroomtype
      WHERE (room.idroom
      NOT IN (
  	SELECT booking.room_idroom FROM booking WHERE (booking.fromdate < infromdate AND booking.todate > infromdate) OR (booking.fromdate between infromdate AND intodate - INTERVAL 1 DAY)) AND room.status = 'open')
      GROUP BY roomtype.idroomtype;
  END$$
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `assignroomtobooking`(IN `datein` DATE, IN `dateout` DATE, IN `type` INT, OUT `roomid` INT)
      NO SQL
  BEGIN
  	SELECT room.idroom as roomid FROM room WHERE (room.idroom
      NOT IN (
  	SELECT booking.room_idroom FROM booking WHERE (booking.fromdate < datein AND booking.todate > datein) OR (booking.fromdate between datein AND dateout - INTERVAL 1 DAY)) AND room.status = 'open' AND room.roomtype_idroomtype = type) LIMIT 1;
  END$$
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `createonlinebooking`(IN `datein` DATE, IN `dateout` DATE, IN `userid` INT, IN `roomid` INT, IN `coupon` VARCHAR(50), IN `paymentid` INT, OUT `bookingid` INT)
      NO SQL
  BEGIN
  	DECLARE couponid INT;
  	SELECT specialoffer.idspecialoffer as couponid FROM specialoffer WHERE specialoffer.code = coupon;
  	INSERT INTO `booking` (`idbooking`, `user_iduser`, `room_idroom`, `specialoffer_idspecialoffer`, `staff_idstaff`, `payment_idpayment`, `fromdate`, `todate`, `status`) VALUES (NULL, userid, roomid, couponid, NULL, paymentid, datein, dateout, 'unchecked');
      SET bookingid = (SELECT LAST_INSERT_ID());
  END$$
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `newwalkin`(OUT `paymentid` INT, OUT `bookingid` INT, IN `inamount` DECIMAL, IN `inmethod` VARCHAR(20), IN `incardno` VARCHAR(20), IN `instaffid` INT, IN `inroomid` INT, IN `offer` INT, IN `infromdate` DATE, IN `intodate` DATE)
      NO SQL
  BEGIN
  	DECLARE codeid INT;
  	SELECT specialoffer.idspecialoffer AS codeid FROM specialoffer WHERE specialoffer.code = offer;
  	INSERT INTO payment VALUES (NULL, NOW(), inamount, NULL, inmethod, incardno, instaffid, 'booking','');
      SET paymentid = (SELECT LAST_INSERT_ID());
      INSERT INTO booking VALUES (NULL, NULL, inroomid, codeid, instaffid, paymentid, infromdate, intodate, 'unchecked');
      SET bookingid = (SELECT LAST_INSERT_ID());
  END$$
  DELIMITER ;

  DELIMITER $$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `createonlinepayment`(IN `amount` DECIMAL(10,2), IN `uid` INT, IN `cardno` VARCHAR(50), OUT `paymentid` INT)
      NO SQL
  BEGIN
  	INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`,`type`) VALUES (NULL, NOW(), amount, uid, 'creditcard', cardno, NULL,'booking');
      SET paymentid = (SELECT LAST_INSERT_ID());
  END$$
  DELIMITER ;
