-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmyfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslog`
--

CREATE TABLE `accesslog` (
  `sr.no` int(15) NOT NULL,
  `userid` int(15) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logouttime` timestamp NULL DEFAULT NULL,
  `ipaddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accesslog`
--

INSERT INTO `accesslog` (`sr.no`, `userid`, `logintime`, `logouttime`, `ipaddress`) VALUES
(1, 11, '2020-05-03 09:28:34', NULL, '::1'),
(2, 8, '2020-05-03 09:39:28', NULL, '::1'),
(3, 8, '2020-05-03 09:41:33', NULL, '::1'),
(4, 17, '2020-05-05 07:10:33', NULL, '::1'),
(5, 17, '2020-05-05 07:13:50', NULL, '::1'),
(6, 18, '2020-05-06 07:13:55', NULL, '::1'),
(7, 17, '2020-05-07 07:46:03', NULL, '::1'),
(8, 17, '2020-05-07 07:47:30', NULL, '::1'),
(9, 17, '2020-05-07 07:51:32', NULL, '::1'),
(10, 17, '2020-05-07 07:58:24', NULL, '::1'),
(11, 17, '2020-05-07 07:59:05', NULL, '::1'),
(12, 17, '2020-05-07 08:00:17', NULL, '::1'),
(13, 17, '2020-05-07 08:02:29', NULL, '::1'),
(14, 17, '2020-05-07 08:03:28', NULL, '::1'),
(15, 17, '2020-05-07 08:04:36', NULL, '::1'),
(16, 18, '2020-05-07 08:05:22', NULL, '::1'),
(17, 15, '2020-05-07 08:06:57', NULL, '::1'),
(18, 17, '2020-05-07 08:18:14', NULL, '::1'),
(19, 17, '2020-05-07 08:21:53', NULL, '::1'),
(20, 17, '2020-05-07 08:22:56', NULL, '::1'),
(21, 17, '2020-05-07 08:35:55', NULL, '::1'),
(22, 17, '2020-05-07 08:36:21', NULL, '::1'),
(23, 17, '2020-05-07 08:36:21', NULL, '::1'),
(24, 17, '2020-05-07 08:36:29', NULL, '::1'),
(25, 17, '2020-05-07 08:37:00', NULL, '::1'),
(26, 17, '2020-05-07 08:56:04', NULL, '::1'),
(27, 17, '2020-05-07 09:05:12', NULL, '::1'),
(28, 17, '2020-05-08 07:10:21', NULL, '::1'),
(29, 17, '2020-05-08 09:25:44', NULL, '::1'),
(30, 17, '2020-05-08 09:58:24', NULL, '::1'),
(31, 17, '2020-05-08 09:59:31', NULL, '::1'),
(32, 19, '2020-05-09 07:07:50', NULL, '::1'),
(33, 17, '2020-05-10 01:13:12', NULL, '::1'),
(34, 17, '2020-05-10 01:13:38', NULL, '::1'),
(35, 17, '2020-05-10 01:15:54', NULL, '::1'),
(36, 17, '2020-05-10 01:18:13', NULL, '::1'),
(37, 17, '2020-05-10 02:00:18', NULL, '::1'),
(38, 17, '2020-05-11 01:17:28', NULL, '::1'),
(39, 18, '2020-05-11 10:34:07', NULL, '::1'),
(40, 17, '2020-05-11 10:50:00', NULL, '::1'),
(41, 17, '2020-05-12 00:22:02', NULL, '::1'),
(42, 17, '2020-05-12 04:14:44', NULL, '::1'),
(43, 18, '2020-05-12 07:52:54', NULL, '::1'),
(44, 17, '2020-05-12 09:26:37', NULL, '::1'),
(45, 17, '2020-05-13 06:30:00', NULL, '::1'),
(46, 17, '2020-05-13 07:00:24', NULL, '::1'),
(47, 17, '2020-05-13 07:41:41', NULL, '::1'),
(48, 17, '2020-05-14 00:34:12', NULL, '::1'),
(49, 17, '2020-05-14 00:38:30', NULL, '::1'),
(50, 17, '2020-05-14 01:24:44', NULL, '::1'),
(51, 18, '2020-05-14 01:24:56', NULL, '::1'),
(52, 17, '2020-05-14 02:19:37', NULL, '::1'),
(53, 17, '2020-05-15 01:58:48', NULL, '::1'),
(54, 17, '2020-05-15 01:58:58', NULL, '::1'),
(55, 17, '2020-05-15 02:01:51', NULL, '::1'),
(56, 17, '2020-05-15 02:04:18', NULL, '::1'),
(57, 17, '2020-05-15 02:05:41', NULL, '::1'),
(58, 17, '2020-05-15 02:05:51', NULL, '::1'),
(59, 17, '2020-05-15 02:05:57', NULL, '::1'),
(60, 17, '2020-05-15 02:13:15', NULL, '::1'),
(61, 17, '2020-05-15 02:21:54', NULL, '::1'),
(62, 17, '2020-05-15 02:22:28', NULL, '::1'),
(63, 17, '2020-05-15 02:24:06', NULL, '::1'),
(64, 17, '2020-05-15 02:29:11', NULL, '::1'),
(65, 17, '2020-05-15 02:36:32', NULL, '::1'),
(66, 17, '2020-05-15 07:11:39', NULL, '::1'),
(67, 17, '2020-05-15 09:30:25', NULL, '::1'),
(68, 17, '2020-05-15 09:33:58', NULL, '::1'),
(69, 17, '2020-05-16 00:50:43', NULL, '::1'),
(70, 17, '2020-05-16 01:02:18', NULL, '::1'),
(71, 17, '2020-05-16 01:12:05', NULL, '::1'),
(72, 17, '2020-05-16 01:14:23', NULL, '::1'),
(73, 17, '2020-05-16 01:17:58', NULL, '::1'),
(74, 17, '2020-05-16 01:22:31', NULL, '::1'),
(75, 17, '2020-05-16 02:54:50', NULL, '::1'),
(76, 17, '2020-05-16 02:54:58', NULL, '::1'),
(77, 18, '2020-05-16 02:55:07', NULL, '::1'),
(78, 17, '2020-05-16 03:21:37', NULL, '::1'),
(79, 17, '2020-05-16 03:21:49', NULL, '::1'),
(80, 18, '2020-05-16 03:22:35', NULL, '::1'),
(81, 18, '2020-05-16 03:22:51', NULL, '::1'),
(82, 17, '2020-05-16 03:24:29', NULL, '::1'),
(83, 18, '2020-05-16 03:24:37', NULL, '::1'),
(84, 18, '2020-05-16 03:25:42', NULL, '::1'),
(85, 17, '2020-05-16 03:26:57', NULL, '::1'),
(86, 18, '2020-05-16 03:27:06', NULL, '::1'),
(87, 19, '2020-05-16 03:27:15', NULL, '::1'),
(88, 17, '2020-05-16 03:28:31', NULL, '::1'),
(89, 18, '2020-05-16 03:31:39', NULL, '::1'),
(90, 18, '2020-05-16 03:42:19', NULL, '::1'),
(91, 30, '2020-05-16 03:51:29', NULL, '::1'),
(92, 36, '2020-05-16 04:10:04', NULL, '::1'),
(93, 36, '2020-05-16 08:23:03', NULL, '::1'),
(94, 17, '2020-05-16 10:25:07', NULL, '::1'),
(95, 18, '2020-05-16 10:25:15', NULL, '::1'),
(96, 36, '2020-05-16 10:25:26', NULL, '::1'),
(97, 17, '2020-05-16 10:26:13', NULL, '::1'),
(98, 17, '2020-05-16 10:27:12', NULL, '::1'),
(99, 17, '2020-05-16 10:27:25', NULL, '::1'),
(100, 17, '2020-05-16 10:28:04', NULL, '::1'),
(101, 17, '2020-05-17 09:17:51', NULL, '::1'),
(102, 17, '2020-05-17 23:57:56', NULL, '::1'),
(103, 18, '2020-05-18 02:00:08', NULL, '::1'),
(104, 18, '2020-05-18 02:07:38', NULL, '::1'),
(105, 36, '2020-05-18 02:50:31', NULL, '::1'),
(106, 17, '2020-05-23 02:40:06', NULL, '::1'),
(107, 38, '2020-05-23 02:47:11', NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` mediumint(8) NOT NULL,
  `userid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  `umobno` bigint(10) NOT NULL,
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Address` text NOT NULL,
  `book_days` smallint(3) NOT NULL,
  `book_night` smallint(2) NOT NULL,
  `total_price` int(7) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `no_room` int(2) NOT NULL,
  `no_adult` int(3) NOT NULL,
  `no_child` int(2) NOT NULL,
  `book_mob` bigint(10) NOT NULL,
  `book_email` varchar(30) NOT NULL,
  `card_num` varchar(18) NOT NULL,
  `card_exp` varchar(8) NOT NULL,
  `card_cvv` int(3) NOT NULL,
  `card_h_name` varchar(30) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `userid`, `uname`, `uemail`, `umobno`, `place_id`, `place_name`, `category`, `status`, `status_time`, `Address`, `book_days`, `book_night`, `total_price`, `checkin`, `checkout`, `no_room`, `no_adult`, `no_child`, `book_mob`, `book_email`, `card_num`, `card_exp`, `card_cvv`, `card_h_name`, `pay_date`) VALUES
(12, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 2, 'Shivan Farm Villas', 'farm', 'booked', '2020-05-18 05:33:08', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-10', '2020-05-11', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:08'),
(13, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 2, 'Shivan Farm Villas', 'farm', 'booked', '2020-05-18 05:33:11', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-15', '2020-05-17', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:11'),
(14, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 1, 'Karamala Place', 'farm', 'booked', '2020-05-18 05:33:17', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-21', '2020-05-22', 1, 2, 2, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:17'),
(15, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 3, 'Tulsi Farm', 'farm', 'booked', '2020-05-18 05:33:25', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-23', '2020-05-25', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:25'),
(16, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 5, 'Shree Farm House', 'farm', 'booked', '2020-05-18 05:33:30', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-19', '2020-05-20', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:30'),
(17, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 6, 'The Farm House Junction', 'farm', 'booked', '2020-05-18 05:33:35', '15 ANANDDHAARA ROW HOUSE SEC3', 0, 0, 0, '2020-05-27', '2020-05-28', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '', '', 0, '', '2020-05-18 05:33:35'),
(41, 18, 'heet', 'heetzadfiya5687@gmail.com', 9712029120, 4, 'Rio Colina', 'farm', 'cancel', '2020-05-18 02:34:17', '15 ANANDDHAARA ROW HOUSE SEC3', 2, 1, 19400, '2020-05-23', '2020-05-24', 2, 3, 2, 9712029129, 'heetzadfiya567@gmail.com', '1234123412341234', '22/34', 123, 'naren', '2020-05-18 06:04:17'),
(44, 18, 'heet', 'heetzadfiya5687@gmail.com', 9712029120, 5, 'Shree Farm House', 'farm', 'booked', '2020-05-18 05:32:55', '15 ANANDDHAARA ROW HOUSE SEC3', 2, 1, 10200, '2020-05-27', '2020-05-28', 1, 1, 1, 9712029129, 'heetzadfiya567@gmail.com', '1234123412345678', '22/34', 123, 'naren', '2020-05-18 05:32:55'),
(49, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 8, 'Seashall Resort', 'resort', 'cancel', '2020-05-18 01:52:49', '15 ANANDDHAARA ROW HOUSE SEC3', 10, 9, 153000, '2020-05-21', '2020-05-30', 2, 4, 3, 9712029129, 'heetzadfiya567@gmail.com', '1234567812345678', '22/34', 123, 'naren', '2020-05-18 05:22:49'),
(50, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 8, 'Seashall Resort', 'resort', '', '2020-05-18 04:28:39', 'E36 PURVI SOC.4', 2, 1, 30600, '2020-05-22', '2020-05-23', 2, 4, 6, 3456454757, 'abc@mail.com', '1234567898765432', '12/22', 123, 'naren', '2020-05-16 12:02:51'),
(52, 17, 'Naren', 'ankit2233@yopmail.com', 9825172172, 7, 'Heritage Resort', 'resort', 'cancel', '2020-05-18 01:55:35', 'E36 PURVI SOC.4', 2, 2, 18800, '2020-05-27', '2020-05-29', 2, 8, 1, 982412934, 'abc@mail.com', '1234567887654321', '12/34', 123, 'naren', '2020-05-18 05:25:35'),
(53, 38, 'sidarth', '18dce141@charusat.edu.in', 9825088250, 9, 'Fariyas Resort', 'resort', 'cancel', '2020-05-23 02:50:58', 'E36 PURVI SOC.4', 3, 3, 31500, '2020-05-24', '2020-05-27', 2, 5, 1, 3456454757, 'abc@mail.com', '1234123412341234', '22/34', 123, 'naren', '2020-05-23 06:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_fname` varchar(20) NOT NULL,
  `f_lname` varchar(20) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_contact` varchar(12) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_fname`, `f_lname`, `f_email`, `f_contact`, `feedback`) VALUES
(0, 'BHIMJIBHAI', 'ZADAFIYA', 'heetzadfiya567@gmail.com', '97120120120', 'nwjd,mnsm,nlwjdhjdkmk Naren');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobno` int(10) NOT NULL,
  `card_num` varchar(18) NOT NULL,
  `card_exp` varchar(8) NOT NULL,
  `card_cvv` int(3) NOT NULL,
  `card_h_name` varchar(30) NOT NULL,
  `place` int(11) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `dis_price` int(5) DEFAULT NULL,
  `save` int(5) DEFAULT NULL,
  `contact` varchar(15) NOT NULL,
  `office_addr` text DEFAULT NULL,
  `img` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `Address`, `category`, `price`, `dis_price`, `save`, `contact`, `office_addr`, `img`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'Karamala Place', 'Karamala Place Near Kosam Gam,NH no.8,Surat', 'farm', 7600, 5300, 2300, '9988766459', 'Gurukul Circle,Dabholi Road,surat.', 'farm details photos\\karamala card.jpg', '..\\farm details photos\\karamala3.jpeg', '..\\farm details photos\\karamala4.jpeg', '..\\farm details photos\\karamala6.jpeg', '..\\farm details photos\\karamala8.jpeg', '..\\farm details photos\\karamala9.jpeg'),
(2, 'Shivan Farm Villas', 'Shivan Farm Near Iscon Temple,Jahangirpura,Surat', 'farm', 8300, 7000, 1300, '8126435836', 'A-903 Silver Stone Arcade Near Singanpor Char Rasta,katargam,surat', 'farm details photos\\shivan card.jpg', '', '', '', '', ''),
(3, 'Tulsi Farm', 'Farm Address :- WonderLand Farm House,Olpad road,Surat', 'farm', 5100, 3900, 1200, '9942385647', '508/Iron-1,Sarathana,surat', 'farm details photos\\tulsi card.jpg', '', '', '', '', ''),
(4, 'Rio Colina', 'Hajira Near Surat International Airport,Surat', 'farm', 10600, 9700, 900, '6344236464', 'B-504 Shree complex near VR Mall,surat.', 'farm details photos\\riocolina card.jpg', '', '', '', '', ''),
(5, 'Shree Farm House', 'Near Shevani Gam,Surat', 'farm', 6450, 5100, 1350, '9823544745', 'C-290,Laxmi Enclave Near National Park,surat', 'farm details photos\\shree card.png', '', '', '', '', ''),
(6, 'The Farm House Junction', 'Near Raghuvir Shall,Hajira,Surat', 'farm', 9900, 8850, 1150, '9426867456', 'Yogi Plazza Near Adajan Patiya,Adajan,surat', 'farm details photos\\junction card.jpg', '', '', '', '', ''),
(7, 'Heritage Resort', 'Arossim Beach Road, Cansaulim, Arossim, Goa 403712', 'resort', 11400, 9400, 2000, '8326694444', 'Arossim Beach Road, Cansaulim, Arossim, Goa 403712', 'farm details photos\\heritage resort1.jpg', '', '', '', '', ''),
(8, 'Seashall Resort', 'Narapad Beach,Dahanu West,Dahanu,Maharashtra 401601', 'resort', 17600, 15300, 2300, '09890387487  ', 'Narapad Beach,Dahanu West,Dahanu,Maharashtra 401601', 'farm details photos\\seashall1.jpg', '', '', '', '', ''),
(9, 'Fariyas Resort', 'Frichley Hill Rd, Frichley Hills, Tungarli, Lonavla, Maharashtra 410401', 'resort', 13100, 10500, 2600, '02114 668 333', 'Frichley Hill Rd, Frichley Hills, Tungarli, Lonavla, Maharashtra 410401', 'farm details photos\\fariyas1.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` smallint(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobno` bigint(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lname`, `address`, `email`, `password`, `mobno`, `token`, `status`) VALUES
(15, 'BHIMJIBHAI JERAMBHAI ZADAFIYA', '', '', 'heetzadfiya567@gmail.com', '1234', 9712029129, '', ''),
(17, 'Naren', 'Zadfiya', '15 ANANDDHAARA ROW HOUSE SEC3\r\nMOTA VARACHHA', 'ankit2233@yopmail.com', '123456', 9825172172, '', 'active'),
(18, 'heet', '', '', 'heetzadfiya5687@gmail.com', '123456', 9712029120, '', 'active'),
(19, 'Meet', '', '', 'meet567@yopmail.com', '123456', 9384234512, '', ''),
(21, 'BHIMJIBHAI JERAMBHAI', 'zadfiya', '', 'test1@mail.com', '123456', 12345670, '', ''),
(22, 'BHIMJIBHAI JERAMBHAI ZADAFIYA', '', '', 'test3@gmail.com', '123456789', 1234567890, '', ''),
(28, 'narenz', '', '', 'test5@mail.com', '123456', 9823982398, '', ''),
(38, 'sidarth', '', '', '18dce141@charusat.edu.in', '123456', 9825088250, '244c46698e61b9117e98af95601943', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslog`
--
ALTER TABLE `accesslog`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place_id` (`place_id`,`place_name`,`checkin`,`checkout`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`Address`,`category`) USING HASH;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `mobno` (`mobno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslog`
--
ALTER TABLE `accesslog`
  MODIFY `sr.no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` smallint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
