-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 03:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `installed_softwares`
--

CREATE TABLE `installed_softwares` (
  `id` int(11) NOT NULL,
  `labinfo_id` int(111) NOT NULL,
  `software_title` varchar(111) NOT NULL,
  `version` varchar(111) NOT NULL,
  `software_type` varchar(111) NOT NULL,
  `is_delete` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installed_softwares`
--

INSERT INTO `installed_softwares` (`id`, `labinfo_id`, `software_title`, `version`, `software_type`, `is_delete`, `created`, `updated`, `deleted`) VALUES
(3, 301, 'NetBeans', '8.0.2', 'free', 0, '0000-00-00 00:00:00', '2016-08-14 09:08:57', '0000-00-00 00:00:00'),
(15, 420, 'SubLime Text', '3', 'free', 0, '2016-08-12 06:08:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 512, 'ZenStudio', '109', 'paid', 1, '0000-00-00 00:00:00', '2016-08-14 10:08:59', '0000-00-00 00:00:00'),
(35, 402, 'ZenStudio', '10', 'free', 1, '2016-08-13 04:08:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 512, 'NetBean', '3', 'free', 0, '2016-08-13 04:08:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 301, 'PhpStorm', '2016', 'free', 1, '2016-08-13 04:08:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 402, 'Notepad++', '2.2', 'free', 0, '2016-08-14 09:08:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `installed_softwares`
--
ALTER TABLE `installed_softwares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `installed_softwares`
--
ALTER TABLE `installed_softwares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
