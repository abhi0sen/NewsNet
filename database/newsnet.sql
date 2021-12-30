-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 04:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsnet`
--
CREATE DATABASE IF NOT EXISTS `newsnet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `newsnet`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `getdata`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getdata` (IN `p_typ` VARCHAR(30), IN `pap_name` VARCHAR(50))  BEGIN 
                         SELECT p.paper_name, p.user_id, p.post_id, p.type FROM post p, newspaper n where p.paper_name = n.paper_name and p.type = p_typ and p.paper_name = pap_name;
                          end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE `advertisement` (
  `post_id` int(11) DEFAULT NULL,
  `ad_type` varchar(100) NOT NULL,
  `file_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`post_id`, `ad_type`, `file_desc`) VALUES
(NULL, 'dfsdbhdbs', 'dbnsvbf'),
(NULL, '', 'db.png'),
(NULL, 'Matrimonial', 'Screenshot (1).png'),
(22, 'jhdbfdsjkhf', 'Screenshot (3).png'),
(22, 'jhdbfdsjkhf', 'Screenshot (3).png'),
(24, 'jai shri mahakaal', 'Array'),
(24, 'jai shri mahakaal', 'Array'),
(25, 'dbffd', 'bbfdsk'),
(25, 'dbffd', 'bbfdsk'),
(27, 'Criminal', 'jsbkjfksdnfdsn'),
(27, 'Criminal', 'jsbkjfksdnfdsn'),
(28, 'jjsdbfds', 'img/1640771648.png'),
(28, 'jjsdbfds', 'img/1640771648.png'),
(29, 'mnbdfdnfn', 'img/1640771660.png'),
(29, 'mnbdfdnfn', 'img/1640771660.png');

-- --------------------------------------------------------

--
-- Table structure for table `apply_for`
--

DROP TABLE IF EXISTS `apply_for`;
CREATE TABLE `apply_for` (
  `user_id` int(11) DEFAULT NULL,
  `apply_date` date NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_for`
--

INSERT INTO `apply_for` (`user_id`, `apply_date`, `post_id`) VALUES
(1, '2021-12-28', 23),
(1, '2021-12-29', 24),
(1, '2021-12-29', 25),
(1, '2021-12-29', 26),
(1, '2021-12-29', 27),
(1, '2021-12-29', 28),
(1, '2021-12-29', 29),
(1, '2021-12-30', 30),
(1, '2021-12-30', 31),
(1, '2021-12-30', 32);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `post_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`post_id`, `title`, `description`, `author_name`) VALUES
(NULL, 'jhegjrkehrergjwe', 'jkewhrhur', 'erhewjkh'),
(NULL, 'sadhsah', 'dsnfgdsgfn', 'sdfhhsdk'),
(NULL, 'mnbdfnmsbf', 'mdbsbfmbdsmf', 'sdmggdsf'),
(NULL, 'nsdvbfbmdsbf', 'dmbfmbsbdf', 'gdgfjsdfh'),
(NULL, 'mbfjsdfn', 'mdnbfsdhf', 'dfgdfgd'),
(NULL, 'crimina justice', 'hfhsdkhfhdsfhjk', 'abhisar sen'),
(21, 'jahfksdh', 'nhddfdshf', 'msdbbhdsfh'),
(23, 'djfhsd', 'jbsdkjfhdsf', 'msdhfhsdj'),
(26, 'jhhjkckjgkdjfd', 'ndfndjknd', 'mdfgjdfjkg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `history`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `history`;
CREATE TABLE `history` (
`user_id` int(11)
,`post_id` int(11)
,`apply_date` date
,`paper_name` varchar(70)
,`type` varchar(50)
,`approval_status` varchar(30)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `post_id` int(11) DEFAULT NULL,
  `news_type` varchar(56) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `news_desc` varchar(1000) NOT NULL,
  `incident_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`post_id`, `news_type`, `headline`, `news_desc`, `incident_city`) VALUES
(NULL, 'Criminal', 'golimaari m 4 logo ki maut', 'ghatna freeganj ki h jaha achanak 3 gundo ne police pr golimari shuru krdi jisme 5 police vale maare gai', 'Ujjain'),
(NULL, 'sbdfhsdf', 'mdsvbfbdsjf', 'jfhdsh', 'mdsbhdfjdsg'),
(19, 'hhasdfhs', 'sahgdashdh', 'sadhasgd', 'anshgghdsa'),
(30, 'Criminal', 'mumbai Khel Diwas ki shuruaat ', 'somwaar subh 6 baje se mumbai shuru hone jaa rha h Khel utsav. Aap sabhi aamantrit h. Aaiye or is utsaah bhare khel m shaamil hoiye', 'Mumbai'),
(31, 'jyotishi', 'indore m Jyotish mela', 'Jaaniye apna bhavishya baba hansraj k sath', 'Indore'),
(32, 'yoga', 'Ramdev baba yoga shivir ', 'Sikhiye yoga or rahe swasth, ramdev baba k sath ujjain m', 'ujjain');

-- --------------------------------------------------------

--
-- Table structure for table `newspaper`
--

DROP TABLE IF EXISTS `newspaper`;
CREATE TABLE `newspaper` (
  `paper_name` varchar(70) NOT NULL,
  `price` int(11) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `filepath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newspaper`
--

INSERT INTO `newspaper` (`paper_name`, `price`, `contact_no`, `mail_id`, `password`, `filepath`) VALUES
('Dainik Bhaskar', 12, '0734689445', 'dainikbhaskar@gmail.com', 'abc123', 'img/1640781992.png'),
('The Hindu', 34, '0734654665', 'hindu@gamil.com', '123412', 'img/1640757101.png'),
('Times Of India', 23, '0734545454', 'timesindia@gmail.com', '123451', 'img/1640716985.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `p_date` date DEFAULT NULL,
  `p_time` time DEFAULT NULL,
  `paper_name` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `paper_name` varchar(50) NOT NULL,
  `approval_status` varchar(30) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `type`, `paper_name`, `approval_status`) VALUES
(1, 1, 'article', 'The hindu', 'Pending'),
(2, 19, 'article', 'Sakal', 'Pending'),
(3, 19, 'Advertisement', 'The hindu', 'Accepted'),
(4, 19, 'Advertisement', 'Sakal', 'Pending'),
(15, 1, 'article', 'Sakal', 'Pending'),
(17, 1, 'News', 'Sakal', 'Pending'),
(18, 1, 'News', 'Sakal', 'Pending'),
(19, 1, 'News', 'Sakal', 'Pending'),
(20, 1, 'Advertisement', 'Sakal', 'Pending'),
(21, 1, 'article', 'Sakal', 'Pending'),
(22, 1, 'Advertisement', 'Sakal', 'Pending'),
(23, 1, 'article', 'Sakal', 'Pending'),
(24, 1, 'Advertisement', 'The Hindu', 'Pending'),
(25, 1, 'Advertisement', 'Times Of India', 'Accepted'),
(26, 1, 'article', '', 'Pending'),
(27, 1, 'Advertisement', 'The Hindu', 'Accepted'),
(28, 1, 'Advertisement', 'The Hindu', 'Pending'),
(29, 1, 'Advertisement', 'Times Of India', 'Rejected'),
(30, 1, 'News', 'Times Of India', 'Pending'),
(31, 1, 'News', 'Dainik Bhaskar', 'Pending'),
(32, 1, 'News', 'Dainik Bhaskar', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `contact_no`, `address`, `email`, `password`) VALUES
(1, 'abhi0sen', '8989998040', 'Ujjain', 'senabha21@gmail.com', '123456'),
(19, 'ajay0sen', '7346349837', 'hdgsf', 'hhdggsf', 'abc123');

-- --------------------------------------------------------

--
-- Structure for view `history` exported as a table
--
DROP TABLE IF EXISTS `history`;
CREATE TABLE`history`(
    `user_id` int(11) DEFAULT NULL,
    `post_id` int(11) DEFAULT NULL,
    `apply_date` date NOT NULL,
    `paper_name` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
    `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
    `approval_status` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
    `price` int(11) NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`paper_name`),
  ADD UNIQUE KEY `contact_no` (`contact_no`,`mail_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `foreign key` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`,`contact_no`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
