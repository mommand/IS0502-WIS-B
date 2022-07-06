-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 22, 2022 at 02:45 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acc_status` varchar(255) NOT NULL,
  `profile` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Name`, `description`) VALUES
(1, 'Sport', NULL),
(2, 'Tech', NULL),
(3, 'Arts', NULL),
(4, 'Economics', NULL),
(5, 'Political', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `content` text,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `content` text,
  `foto` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `Author_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `status`, `content`, `foto`, `publish_date`, `updated_date`, `Author_id`, `cat_id`) VALUES
(1, 'Afghan Cricket Match with Zebawei', 'unpublished', 'aldfkadf adfafdafd', NULL, NULL, NULL, 1, 2),
(2, 'Afghan Cricket Team won Z', 'inactive', ' 							asdfadfadfdfadfadfadf adfadfa\r\ndfadf adfa df a df ad fasdf adfasdfasdf as df.				', NULL, NULL, NULL, 1, 1),
(3, 'Test Ttitle', 'inactive', ' 							\r\n 						asdfas df asdf as df asd fa sdf asd fa sdf as df', NULL, '2022-06-19', NULL, 1, 2),
(4, 'Bomb blassing at Karta-e-parwan', 'inactive', ' 							adfka adsf asdkfaskdf adf a dfa df a dfasd				', NULL, '2022-06-19', '2022-06-19 09:27:00', 1, 5),
(5, 'Disney loses its Indian Premier League streaming rights', 'inactive', ' 		The indian premier league (ipl) is awash with cash. cvc Capital, a European buy-out firm, paid $750m for the Gujarat Titans, one of the cricket extravaganza’s newest teams. In an auction ahead of this year’s competition, which concluded last month (with the Titans’ victory), the ipl’s ten sides splurged $71m on 204 players, five times the amount spent five years ago (when there were eight of them).\r\n\r\nAnother auction, held between June 12th and 14th, attracted even more serious dosh. Media heavyweights fought for the right to show ipl matches to cricket-mad Indians for the next five years. Disney, which owns the current package, managed to hold on to the tv rights by agreeing to part with $3bn. It lost the online-streaming rights to Viacom18, a joint venture between Paramount Global, a fellow American media firm, and the media unit of Reliance, an Indian conglomerate, which will pay $2.6bn for the privilege. For another $500m or so, Viacom18 also scooped up the international rights for Australia and New Zealand, Britain and South.					\r\n 						', NULL, '2022-06-19', '2022-06-19 09:42:00', 1, 4),
(6, 'ABC', 'inactive', 'dfadfadfadsf', NULL, NULL, NULL, 1, 2),
(7, 'Afghan Cricket won the India', 'inactive', 'dfadfad fadf a fdas df as dfas dfaksldfkasldfk aldsf akd fa f akdlfas dfalsdf asdf', NULL, NULL, NULL, 1, 2),
(8, 'df', 'inactive', ' 							\r\n 						asdfasdfasdfasdf', NULL, '2022-06-21', '2022-06-21 03:52:00', 1, 1),
(9, 'sdfsdfsdf', 'inactive', 'dfddfd				', NULL, '2022-06-21', '2022-06-21 04:12:00', 1, 1),
(10, 'ABC News', 'inactive', 'kdfklasdf adf asd fa df akdfalksdf adf a df asdf akdfllaksdf adf a dfaksdfasdf', NULL, '2022-06-21', '2022-06-21 04:15:00', 1, 3),
(11, 'dfadf', 'inactive', '						Our Chapters in Latin America and the Caribbean form a vibrant and diverse community that is constantly active.\r\n\r\nOn January 25, the Trinidad and Tobago Chapter was part of the Internet Governance Forum in that country. Shernon Osepa, Regional Affairs Manager, participated on behalf of the Regional Bureau for Latin America and the Caribbean.\r\n\r\nOn February 5, the Argentina, Haiti, Honduras, Mexico and Dominican Republic Chapters carried out various activities to celebrate the Safer						', 'uploads/Habib.png', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text,
  `acc_status` varchar(255) NOT NULL,
  `joind_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_approved` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `profile` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
