-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2017 at 11:23 AM
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
  `timestamp` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3) ON UPDATE CURRENT_TIMESTAMP(3),
  `amount` decimal(10,2) NOT NULL,
  `couponcode` varchar(45) DEFAULT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `user_iduser`, `staff_idstaff`, `payment_idpayment`, `room_idroom`, `timestamp`, `amount`, `couponcode`, `datefrom`, `dateto`) VALUES
(7, 10, NULL, 7, 44, '2017-11-06 07:57:05.000', '0.00', '1', '2017-11-20', '2017-11-22'),
(8, 10, NULL, 7, 44, '2017-11-06 07:57:05.000', '1.00', NULL, '2017-11-24', '2017-11-25'),
(9, 10, NULL, 7, 45, '2017-11-06 07:57:05.000', '1.00', NULL, '2017-11-18', '2017-11-21'),
(10, 10, NULL, 7, 45, '2017-11-06 07:57:05.000', '1.00', NULL, '2017-11-23', '2017-11-25');

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
(1, 10, 'john', 'doe', NULL, '11007', NULL, NULL, NULL);

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
(7, '2017-11-06 07:54:53.000', 'cash', '1', NULL, NULL);

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
  `roomno` varchar(45) NOT NULL,
  `status` enum('open','closed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`idroom`, `roomtype_idroomtype`, `roomno`, `status`) VALUES
(44, 1, '1', 'open'),
(45, 1, '2', 'open'),
(46, 1, '3', 'open'),
(47, 1, '4', 'open'),
(48, 1, '5', 'open');

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
(1, 'Deluxe Pool Access Room 2D', 2, 0, 2, 1, '53.00', '20000.00', 4, 4, 'r1'),
(2, 'Deluxe Pool Access Room 1D', 1, 2, 2, 1, '53.00', '20000.00', 4, 4, 'r2'),
(3, 'Ocean Pool Villa', 2, 0, 2, 0, '45.00', '15000.00', 4, 4, 'r3'),
(4, 'Garden Pool Villa', 2, 0, 2, 0, '48.00', '12000.00', 4, 4, 'r4'),
(5, 'Supreme 1D', 1, 0, 1, 0, '32.00', '8000.00', 2, 2, 'r5'),
(6, 'Supreme 2S', 0, 2, 1, 0, '32.00', '8000.00', 2, 2, 'r6'),
(7, 'Standard 1D', 1, 0, 1, 0, '28.00', '6000.00', 2, 1, 'r7'),
(8, 'Standard 2S', 0, 2, 1, 0, '28.00', '6000.00', 2, 1, 's1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idservice` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `usergroup_idusergroup` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `password`, `email`, `name`, `surname`) VALUES
(1, 11, 'tonny', 'tonny@tonny.com', 'Kriddanai', 'Roonguthai'),
(2, 2, 'wari', 'wari@wari.com', 'Wari', 'Maroengsit'),
(3, 1, 'tong', 'tong@tong.com', 'Apiwat', 'Thaiphakdee'),
(4, 3, 'kadt', 'kadt@kadt.com', 'Promphat', 'Tippakdee'),
(5, 1, 'test1', 'test1@test1.com', 'Test', 'Naja'),
(6, 1, 'test2', 'test2@test2.com', 'test2', 'test2naja'),
(7, 1, 'tonny', 'ton@yey.com', 'krid', 'roong'),
(8, 1, 'tonny', 'ton@yey.com', 'krid', 'roong'),
(9, 11, 'test', 'test', 'test', 'test'),
(10, 1, 'admin', 'admin', '', ''),
(11, 1, 'admin', 'admin', '', ''),
(12, 1, 'admin', 'adminaa', '', ''),
(13, 1, 'admin', 'admin', '', ''),
(14, 1, 'admin', 'admin', '', '');

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
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `idguest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `idroomtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialoffer`
--
ALTER TABLE `specialoffer`
  MODIFY `idspecialoffer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idstaff` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
