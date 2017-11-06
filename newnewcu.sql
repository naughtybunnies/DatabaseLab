{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.7.2\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:3306\
-- Generation Time: Nov 05, 2017 at 10:49 AM\
-- Server version: 5.6.35\
-- PHP Version: 7.1.6\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `newnewcu`\
--\
\
-- -------------------------------------------------------- \
\
--\
-- Table structure for table `request`\
--\
\
CREATE TABLE `request` (\
  `idrequest` int(11) NOT NULL,\
  `user_iduser` int(11) NOT NULL,\
  `staff_idstaff` int(11) DEFAULT NULL,\
  `message` blob NOT NULL,\
  `status` enum('open','closed') NOT NULL,\
  `reply` blob\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `request`\
--\
ALTER TABLE `request`\
  ADD PRIMARY KEY (`idrequest`),\
  ADD KEY `fk_request_user1_idx` (`user_iduser`),\
  ADD KEY `fk_request_staff1_idx` (`staff_idstaff`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `request`\
--\
ALTER TABLE `request`\
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT;\
--\
-- Constraints for dumped tables\
--\
\
--\
-- Constraints for table `request`\
--\
ALTER TABLE `request`\
  ADD CONSTRAINT `fk_request_staff1` FOREIGN KEY (`staff_idstaff`) REFERENCES `staff` (`idstaff`) ON DELETE NO ACTION ON UPDATE NO ACTION,\
  ADD CONSTRAINT `fk_request_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;\
