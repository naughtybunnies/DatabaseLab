-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2017 at 12:56 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `newnewcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `payment_idpayment` int(11) NOT NULL,
  `room_idroom` int(11) DEFAULT NULL,
  `couponcode` varchar(45) DEFAULT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_has_guest`
--

CREATE TABLE `booking_has_guest` (
  `booking_idbooking` int(11) NOT NULL,
  `guest_idguest` int(11) NOT NULL,
  `guest_user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `idguest` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `personalid` varchar(45) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`idguest`, `user_iduser`, `name`, `surname`, `email`, `personalid`, `dob`, `address`, `nationality`) VALUES
(1, 7, 'Benyapa', 'Poonlarp', 'Benyapa@mail.com', '5822770269', '0000-00-00', '', ''),
(2, 13, 'Pornphapat', 'Innwon', 'Pornphapat@mail.com', '5822770426', '0000-00-00', '', ''),
(3, 19, 'Apiwat', 'Thaiphakdee', 'Apiwat@mail.com', '5822770467', '0000-00-00', '', ''),
(4, 20, 'Prompat', 'Tipphakdee', 'Prompat@mail.com', '5822771317', '0000-00-00', '', ''),
(5, 20, 'Neeranuch', 'Anupak', 'Neeranuch@mail.com', '5822771325', '0000-00-00', '', ''),
(6, 23, 'Wari', 'Maroengsit', 'Wari@mail.com', '5822771333', '0000-00-00', '', ''),
(7, 23, 'Smith', 'Keeratimethakul', 'Smith@mail.com', '5822771358', '0000-00-00', '', ''),
(8, 1, 'Papsineebhorn', 'Sukchuen', 'Papsineebhorn@mail.com', '5822771366', '0000-00-00', '', ''),
(9, 2, 'Puttita', 'Chuwonglertsakul', 'Puttita@mail.com', '5822771408', '0000-00-00', '', ''),
(10, 3, 'Krittikorn', 'Kramgomut', 'Krittikorn@mail.com', '5822771432', '0000-00-00', '', ''),
(11, 4, 'Nawaphat', 'Khankasikam', 'Nawaphat@mail.com', '5822780169', '0000-00-00', '', ''),
(12, 5, 'Patiphan', 'Pinkeaw', 'Patiphan@mail.com', '5822780185', '0000-00-00', '', ''),
(13, 6, 'Puttiwat', 'Wanna', 'Puttiwat@mail.com', '5822780276', '0000-00-00', '', ''),
(14, 7, 'Kriddanai', 'Roonguthai', 'Kriddanai@mail.com', '5822780334', '0000-00-00', '', ''),
(15, 8, 'Areeya', 'Teeparagsapan', 'Areeya@mail.com', '5822780581', '0000-00-00', '', ''),
(16, 9, 'Punchok', 'Kerdsiri', 'Punchok@mail.com', '5822780607', '0000-00-00', '', ''),
(17, 10, 'Amonnut', 'Petcharat', 'Amonnut@mail.com', '5822780748', '0000-00-00', '', ''),
(18, 11, 'Theerapat', 'Deeprasert', 'Theerapat@mail.com', '5822781191', '0000-00-00', '', ''),
(19, 12, 'Sudshewin', 'Suebvong', 'Sudshewin@mail.com', '5822781621', '0000-00-00', '', ''),
(20, 13, 'Nattaruja', 'Buranaosot', 'Nattaruja@mail.com', '5822781654', '0000-00-00', '', ''),
(21, 14, 'Putthichot', 'Chunjiree', 'Putthichot@mail.com', '5822781704', '0000-00-00', '', ''),
(22, 15, 'Napat', 'Saeung', 'Napat@mail.com', '5822781753', '0000-00-00', '', ''),
(23, 16, 'Sirichai', 'Khomleart', 'Sirichai@mail.com', '5822781910', '0000-00-00', '', ''),
(24, 17, 'Naruson', 'Srivaro', 'Naruson@mail.com', '5822781985', '0000-00-00', '', ''),
(25, 18, 'Smithpong', 'Udommongcolkit', 'Smithpong@mail.com', '5822782173', '0000-00-00', '', ''),
(26, 19, 'Benyapa', 'Ngowjungdee', 'Benyapa@mail.com', '5822782256', '0000-00-00', '', ''),
(27, 20, 'Vatcharat', 'Rattananun', 'Vatcharat@mail.com', '5822782264', '0000-00-00', '', ''),
(28, 21, 'Tanaporn', 'Chanchaipol', 'Tanaporn@mail.com', '5822782322', '0000-00-00', '', ''),
(29, 22, 'Pasin', 'Jiratthiticheep', 'Pasin@mail.com', '5822782421', '0000-00-00', '', ''),
(30, 23, 'Nuttapol', 'Saiboonruen', 'Nuttapol@mail.com', '5822782546', '0000-00-00', '', ''),
(31, 24, 'Tanadol', 'Mahattanawutakorn', 'Tanadol@mail.com', '5822782785', '0000-00-00', '', ''),
(32, 25, 'Sakpat', 'Sirikanerat', 'Sakpat@mail.com', '5822782934', '0000-00-00', '', ''),
(33, 26, 'Natcha', 'Sovipa', 'Natcha@mail.com', '5822783346', '0000-00-00', '', ''),
(34, 27, 'Panjarat', 'Sukonthachartnant', 'Panjarat@mail.com', '5822783411', '0000-00-00', '', ''),
(35, 28, 'Panthakan', 'Maisopa', 'Panthakan@mail.com', '5822783429', '0000-00-00', '', ''),
(36, 29, 'Pimnapa', 'Pongpiyanurat', 'Pimnapa@mail.com', '5822783825', '0000-00-00', '', ''),
(37, 30, 'Pawat', 'Treepoca', 'Pawat@mail.com', '5822784179', '0000-00-00', '', ''),
(38, 31, 'Naiyachat', 'Kiatgamjorn', 'Naiyachat@mail.com', '5822790036', '0000-00-00', '', ''),
(39, 32, 'Thanapong', 'Maleewan', 'Thanapong@mail.com', '5822790275', '0000-00-00', '', ''),
(40, 33, 'Narusorn', 'Soithongsuk', 'Narusorn@mail.com', '5822790374', '0000-00-00', '', ''),
(41, 34, 'Nonwarit', 'Suwanmolee', 'Nonwarit@mail.com', '5822782173', '0000-00-00', '', ''),
(42, 35, 'Ravipas', 'Chaipanich', 'Ravipas@mail.com', '5822782256', '0000-00-00', '', ''),
(43, 36, 'Orraya', 'Samrit', 'Orraya@mail.com', '5822782264', '0000-00-00', '', ''),
(44, 37, 'Kittikom', 'Sangrit', 'Kittikom@mail.com', '5822782322', '0000-00-00', '', ''),
(45, 38, 'Thanarath', 'Piyakulpinyo', 'Thanarath@mail.com', '5822782421', '0000-00-00', '', ''),
(46, 39, 'Dhawin', 'Kritsernvong', 'Dhawin@mail.com', '5822782546', '0000-00-00', '', ''),
(47, 40, 'Natanan', 'Naporapojnat', 'Natanan@mail.com', '5822782785', '0000-00-00', '', ''),
(48, 41, 'Pavit', 'Suwansiri', 'Pavit@mail.com', '5822782934', '0000-00-00', '', ''),
(49, 42, 'Isada', 'Sukprapa', 'Isada@mail.com', '5822783346', '0000-00-00', '', ''),
(50, 43, 'Thanapon', 'Arch-int', 'Thanapon@mail.com', '5822783411', '0000-00-00', '', ''),
(51, 44, 'Chayaphat', 'Nicrothanon', 'Chayaphat@mail.com', '5822783429', '0000-00-00', '', ''),
(52, 45, 'Kamnuan', 'Jompuk', 'Kamnuan@mail.com', '5822783825', '0000-00-00', '', ''),
(53, 46, 'Kasidet', 'Charoensub', 'Kasidet@mail.com', '5822784179', '0000-00-00', '', ''),
(54, 47, 'Mintra', 'Domundee', 'Mintra@mail.com', '5822790036', '0000-00-00', '', ''),
(55, 48, 'Issariyawe', 'Inphaya', 'Issariyawe@mail.com', '5822790275', '0000-00-00', '', ''),
(56, 49, 'Pimwarun', 'Suriyaharn', 'Pimwarun@mail.com', '5822790374', '0000-00-00', '', ''),
(57, 50, 'Korn', 'Chotpitakkul', 'Korn@mail.com', '5822790416', '0000-00-00', '', ''),
(58, 51, 'Natcha', 'Suttiwattana', 'Natcha@mail.com', '5822790648', '0000-00-00', '', ''),
(59, 52, 'Witchaporn', 'Pongsantisuk', 'Witchaporn@mail.com', '5822790705', '0000-00-00', '', ''),
(60, 53, 'Suppakarn', 'Suttirattanaporn', 'Suppakarn@mail.com', '5822790861', '0000-00-00', '', ''),
(61, 54, 'Nandini', 'Guna', 'Nandini@mail.com', '5822790978', '0000-00-00', '', ''),
(62, 55, 'Thidarat', 'Iamsomboonkorn', 'Thidarat@mail.com', '5822791026', '0000-00-00', '', ''),
(63, 56, 'Sutita', 'Osathanugrah', 'Sutita@mail.com', '5822791034', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guest_has_service`
--

CREATE TABLE `guest_has_service` (
  `guest_idguest` int(11) NOT NULL,
  `guest_user_iduser` int(11) NOT NULL,
  `service_idservice` int(11) NOT NULL,
  `payment_idpayment` int(11) NOT NULL,
  `timestamp` timestamp(3) NULL DEFAULT NULL,
  `staff_idstaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `staff_idstaff` int(11) NOT NULL,
  `message` blob NOT NULL,
  `timestamp` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3) ON UPDATE CURRENT_TIMESTAMP(3),
  `status` enum('show','notshow') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `timestamp` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3) ON UPDATE CURRENT_TIMESTAMP(3),
  `method` enum('cash','credit card') NOT NULL,
  `amount` varchar(45) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `cardno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idpayment`, `timestamp`, `method`, `amount`, `staff_idstaff`, `cardno`) VALUES
(2, '0000-00-00 00:00:00.000', 'credit card', '60000', NULL, '4280'),
(3, '0000-00-00 00:00:00.000', 'credit card', '40000', NULL, '4280'),
(4, '0000-00-00 00:00:00.000', 'credit card', '80000', NULL, '4280'),
(5, '0000-00-00 00:00:00.000', 'cash', '20000', NULL, NULL),
(6, '0000-00-00 00:00:00.000', 'credit card', '12000', NULL, '4280'),
(7, '0000-00-00 00:00:00.000', 'credit card', '36000', NULL, '4280'),
(8, '0000-00-00 00:00:00.000', 'cash', '12000', NULL, NULL),
(9, '0000-00-00 00:00:00.000', 'credit card', '48000', NULL, '4280'),
(10, '0000-00-00 00:00:00.000', 'credit card', '24000', NULL, '4280'),
(11, '0000-00-00 00:00:00.000', 'cash', '12000', NULL, NULL),
(12, '0000-00-00 00:00:00.000', 'cash', '24000', NULL, NULL),
(13, '0000-00-00 00:00:00.000', 'credit card', '36000', NULL, '4280'),
(14, '0000-00-00 00:00:00.000', 'credit card', '12000', NULL, '4280'),
(15, '0000-00-00 00:00:00.000', 'credit card', '48000', NULL, '4280'),
(16, '0000-00-00 00:00:00.000', 'credit card', '7000', NULL, '4280'),
(17, '0000-00-00 00:00:00.000', 'credit card', '28000', NULL, '4280'),
(18, '0000-00-00 00:00:00.000', 'credit card', '14000', NULL, '4280'),
(19, '0000-00-00 00:00:00.000', 'cash', '21000', NULL, NULL),
(20, '0000-00-00 00:00:00.000', 'credit card', '7000', NULL, '4280'),
(21, '0000-00-00 00:00:00.000', 'cash', '7000', NULL, NULL),
(22, '0000-00-00 00:00:00.000', 'credit card', '35000', NULL, '4280'),
(23, '0000-00-00 00:00:00.000', 'credit card', '21000', NULL, '4280'),
(24, '0000-00-00 00:00:00.000', 'cash', '14000', NULL, NULL),
(25, '0000-00-00 00:00:00.000', 'credit card', '42000', NULL, '4280'),
(26, '0000-00-00 00:00:00.000', 'cash', '14000', NULL, NULL),
(27, '0000-00-00 00:00:00.000', 'cash', '7000', NULL, NULL),
(28, '0000-00-00 00:00:00.000', 'credit card', '35000', NULL, '4280'),
(29, '0000-00-00 00:00:00.000', 'credit card', '28000', NULL, '4280'),
(30, '0000-00-00 00:00:00.000', 'credit card', '21000', NULL, '4280');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `idrequest` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `staff_idstaff` int(11) DEFAULT NULL,
  `message` blob NOT NULL,
  `status` enum('open','closed') NOT NULL,
  `reply` blob
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
(2, 2, 'Ocean view1', 'open'),
(3, 2, 'Ocean view2', 'open'),
(4, 3, 'Supreme1', 'open'),
(5, 3, 'Supreme2', 'open'),
(6, 4, 'Supreme3', 'open');

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
  `size` decimal(6,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `numguest` int(11) NOT NULL,
  `numchild` int(11) NOT NULL,
  `pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`idroomtype`, `name`, `numdbed`, `numsbed`, `numbath`, `numliving`, `size`, `price`, `numguest`, `numchild`, `pic`) VALUES
(1, 'Deluxe Pool Access', 2, 0, 2, 1, '60.00', '20000.00', 4, 2, 'del1'),
(2, 'Junior Suite', 1, 1, 2, 1, '45.00', '12000.00', 3, 2, 'jus1'),
(3, 'Supreme 1D', 1, 0, 1, 0, '32.00', '7000.00', 2, 1, 'sup1'),
(4, 'Supreme 2S', 0, 2, 1, 0, '32.00', '7000.00', 2, 1, 'sup2');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idservice` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idservice`, `name`, `price`) VALUES
(1, 'Pork steak', '450.00'),
(2, 'Spagetti Cabonara', '350.00'),
(3, 'Beef Burger', '400.00'),
(4, 'Fish and Chips', '600.00'),
(5, 'Seafood  platter', '1200.00'),
(6, 'Beer can', '300.00'),
(7, 'Mojito cocktail', '450.00'),
(8, 'Martini cocktail', '400.00'),
(9, 'Body massage 1hr', '1500.00'),
(10, 'Oil massage 1hr/2', '2200.00');

-- --------------------------------------------------------

--
-- Table structure for table `specialoffer`
--

CREATE TABLE `specialoffer` (
  `idspecialoffer` int(11) NOT NULL,
  `couponcode` varchar(45) NOT NULL,
  `status` enum('usable','nonusable') NOT NULL,
  `percent` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialoffer`
--

INSERT INTO `specialoffer` (`idspecialoffer`, `couponcode`, `status`, `percent`) VALUES
(1, 'NOV10', 'usable', '10');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idstaff` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `personalid` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `status` enum('active','nonactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idstaff`, `user_iduser`, `name`, `surname`, `personalid`, `position`, `salary`, `address`, `dob`, `status`) VALUES
(1, 34, 'Kriddanai', 'Roonguthai', '123', 'CEO', '630000.00', '123', '2017-11-07', 'active'),
(2, 25, 'Prompat', 'Tipphakdee', '123', 'Manager', '310000.00', '123', '2017-11-01', 'active'),
(3, 26, 'Wari', 'Maroengsit', '123', 'Vice CEO', '400000.00', '123', '1996-06-17', 'active'),
(4, 27, 'Apiwat', 'Thaiphakdee', '123', 'Chief of cleaning', '35000.00', '123', '2014-11-18', 'active'),
(5, 28, 'Thanapong', 'Jetson', '12345', 'Chef', '100000.00', '123', '2017-11-05', 'active'),
(6, 29, 'Neeranuch', 'Anuphak', '1232', 'Electrician', '60000.00', '156', '2017-10-02', 'active'),
(7, 30, 'Papsineebhorn', 'Sukchuen', '123', 'Accountant', '200000.00', '456', '2017-11-12', 'active'),
(8, 31, 'Oithip', 'Thaiphakdee', '123', 'Chief of security', '100000.00', '123', '2017-09-11', 'active'),
(9, 32, 'Reception', 'Nakub', '234', 'Reception', '100000.00', '123', '1097-11-19', 'active'),
(10, 33, 'Cashier', 'Naja', '123', 'Cashier', '100000.00', '123', '2017-08-03', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `usergroup_idusergroup` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `username`, `password`, `email`, `name`, `surname`) VALUES
(1, 1, 'user1', '1234', '', '', ''),
(2, 1, 'user2', '1234', '', '', ''),
(3, 1, 'user3', '1234', '', '', ''),
(4, 1, 'user4', '1234', '', '', ''),
(5, 1, 'user5', '1234', '', '', ''),
(6, 1, 'user6', '1234', '', '', ''),
(7, 1, 'user7', '1234', '', '', ''),
(8, 1, 'user8', '1234', '', '', ''),
(9, 1, 'user9', '1234', '', '', ''),
(10, 1, 'user10', '1234', '', '', ''),
(11, 1, 'user11', '1234', '', '', ''),
(12, 1, 'user12', '1234', '', '', ''),
(13, 1, 'user13', '1234', '', '', ''),
(14, 1, 'user14', '1234', '', '', ''),
(15, 1, 'user15', '1234', '', '', ''),
(16, 1, 'user16', '1234', '', '', ''),
(17, 1, 'user17', '1234', '', '', ''),
(18, 1, 'user18', '1234', '', '', ''),
(19, 2, 'user19', '1234', '', '', ''),
(20, 2, 'user20', '1234', '', '', ''),
(21, 2, 'user21', '1234', '', '', ''),
(22, 3, 'user22', '1234', '', '', ''),
(23, 3, 'user23', '1234', '', '', ''),
(24, 11, 'staff1', '9999', '', '', ''),
(25, 11, 'staff2', '9999', '', '', ''),
(26, 11, 'staff3', '9999', '', '', ''),
(27, 11, 'staff4', '9999', '', '', ''),
(28, 11, 'staff5', '9999', '', '', ''),
(29, 11, 'staff6', '9999', '', '', ''),
(30, 11, 'staff7', '9999', '', '', ''),
(31, 11, 'staff8', '9999', '', '', ''),
(32, 11, 'staff9', '9999', '', '', ''),
(33, 11, 'staff10', '9999', '', '', ''),
(34, 1, 'admin', 'admin', 'admin', 'admin', 'admin');

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
  ADD KEY `fk_booking_staff1_idx` (`staff_idstaff`),
  ADD KEY `fk_booking_payment1_idx` (`payment_idpayment`),
  ADD KEY `fk_booking_room1_idx` (`room_idroom`);

--
-- Indexes for table `booking_has_guest`
--
ALTER TABLE `booking_has_guest`
  ADD PRIMARY KEY (`booking_idbooking`,`guest_idguest`,`guest_user_iduser`),
  ADD KEY `fk_booking_has_guest_guest1_idx` (`guest_idguest`,`guest_user_iduser`),
  ADD KEY `fk_booking_has_guest_booking1_idx` (`booking_idbooking`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`idguest`,`user_iduser`),
  ADD KEY `fk_guest_user1_idx` (`user_iduser`);

--
-- Indexes for table `guest_has_service`
--
ALTER TABLE `guest_has_service`
  ADD PRIMARY KEY (`guest_idguest`,`guest_user_iduser`,`service_idservice`),
  ADD KEY `fk_guest_has_service_service1_idx` (`service_idservice`),
  ADD KEY `fk_guest_has_service_guest1_idx` (`guest_idguest`,`guest_user_iduser`),
  ADD KEY `fk_guest_has_service_payment1_idx` (`payment_idpayment`),
  ADD KEY `fk_guest_has_service_staff1_idx` (`staff_idstaff`);

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
  ADD PRIMARY KEY (`idspecialoffer`);

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
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `idguest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
  MODIFY `idroomtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `specialoffer`
--
ALTER TABLE `specialoffer`
  MODIFY `idspecialoffer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
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
  ADD CONSTRAINT `fk_booking_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking_has_guest`
--
ALTER TABLE `booking_has_guest`
  ADD CONSTRAINT `fk_booking_has_guest_booking1` FOREIGN KEY (`booking_idbooking`) REFERENCES `booking` (`idbooking`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_has_guest_guest1` FOREIGN KEY (`guest_idguest`,`guest_user_iduser`) REFERENCES `guest` (`idguest`, `user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `fk_guest_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `guest_has_service`
--
ALTER TABLE `guest_has_service`
  ADD CONSTRAINT `fk_guest_has_service_guest1` FOREIGN KEY (`guest_idguest`,`guest_user_iduser`) REFERENCES `guest` (`idguest`, `user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_guest_has_service_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_guest_has_service_service1` FOREIGN KEY (`service_idservice`) REFERENCES `service` (`idservice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_guest_has_service_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
