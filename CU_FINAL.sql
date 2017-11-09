-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2017 at 02:52 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
(29, 20, 6, NULL, NULL, 29, '2017-11-16', '2017-11-20', 'unchecked'),
(30, 22, 6, NULL, NULL, 30, '2017-11-23', '2017-11-26', 'unchecked');

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

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `method` enum('cash','creditcard') NOT NULL,
  `cardno` varchar(45) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`) VALUES
(1, '2017-11-09 00:57:26', '20000.00', 23, 'creditcard', '4283', NULL),
(2, '2017-11-09 01:00:44', '60000.00', 1, 'creditcard', '4283', NULL),
(3, '2017-11-09 01:03:28', '40000.00', 20, 'cash', '', NULL),
(4, '2017-11-09 01:06:59', '80000.00', 13, 'creditcard', '4283', NULL),
(5, '2017-11-09 01:09:54', '20000.00', 2, 'cash', '', NULL),
(6, '2017-11-09 01:12:52', '12000.00', 19, 'cash', '', NULL),
(7, '2017-11-09 01:16:28', '36000.00', 23, 'creditcard', '4283', NULL),
(8, '2017-11-09 01:18:23', '12000.00', 7, 'cash', '', NULL),
(9, '2017-11-09 01:22:23', '48000.00', 3, 'creditcard', '4283', NULL),
(10, '2017-11-09 01:25:00', '24000.00', 4, 'cash', '', NULL),
(11, '2017-11-09 01:30:12', '12000.00', 19, 'creditcard', '4283', NULL),
(12, '2017-11-09 01:33:35', '24000.00', 8, 'creditcard', '4283', NULL),
(13, '2017-11-09 01:35:51', '36000.00', 10, 'creditcard', '4283', NULL),
(14, '2017-11-09 01:39:11', '12000.00', 20, 'cash', '', NULL),
(15, '2017-11-09 01:41:10', '48000.00', 5, 'creditcard', '4283', NULL),
(16, '2017-11-09 01:44:23', '7000.00', 13, 'cash', '', NULL),
(17, '2017-11-09 01:46:53', '28000.00', 6, 'creditcard', '4283', NULL),
(18, '2017-11-09 01:48:58', '14000.00', 7, 'cash', '', NULL),
(19, '2017-11-09 01:51:08', '21000.00', 9, 'creditcard', '4283', NULL),
(20, '2017-11-09 01:54:25', '7000.00', 15, 'cash', '', NULL),
(21, '2017-11-09 01:56:16', '7000.00', 16, 'cash', '', NULL),
(22, '2017-11-09 01:58:28', '35000.00', 11, 'creditcard', '4283', NULL),
(23, '2017-11-09 02:00:35', '21000.00', 12, 'creditcard', '4283', NULL),
(24, '2017-11-09 02:03:12', '14000.00', 17, 'cash', '', NULL),
(25, '2017-11-09 02:05:56', '42000.00', 23, 'creditcard', '4283', NULL),
(26, '2017-11-09 02:08:09', '14000.00', 18, 'cash', '', NULL),
(27, '2017-11-09 02:10:09', '7000.00', 21, 'cash', '', NULL),
(28, '2017-11-09 02:12:14', '35000.00', 14, 'creditcard', '4283', NULL),
(29, '2017-11-09 02:14:45', '28000.00', 20, 'creditcard', '4283', NULL),
(30, '2017-11-09 02:17:05', '21000.00', 22, 'creditcard', '4283', NULL);

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
(10, 33, '12000.00', 'Reception', 'active');

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
(34, 1, 'admin', 'admin', 'Kriddanai', 'Roonguthai', '', '0000-00-00', ''),
(35, 1, 'tonny', 'ton_kriddanai@hotmail.com', 'Kriddanai', 'Roonguthai', '2/40', '1996-08-16', '11007'),
(36, 1, 'tonny', 'ton_kriddanai@hotmail.com', 'Kriddanai', 'Roonguthai', '2/40', '1996-08-16', '11007');

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
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idspecialoffer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;