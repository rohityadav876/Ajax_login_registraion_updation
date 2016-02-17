-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 02:16 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saaslabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'ROHIT Yadav', 'rhtdv04@gmacvbcil.con', 'ac8738df9b5fd0871f8493d93302b303'),
(2, 'ROHIT YADAV', 'rhtdv04@gmail.comm', 'ac8738df9b5fd0871f8493d93302b303'),
(3, 'ROHIT YADAV', 'rhtdv04@gm1ail.com', '73932cffc38b7c34be040ddfea62da6f'),
(4, 'mohit', 'mohityadav@gmail.com', 'ac8738df9b5fd0871f8493d93302b303'),
(5, 'ROHIT YADAV', 'rhtdv04@gkjmail.com', 'ac8738df9b5fd0871f8493d93302b303'),
(6, 'ROHIT YADAV', 'rhtdvzfs04@gmail.com', 'ac8738df9b5fd0871f8493d93302b303'),
(7, 'arun jalota', 'arun@gmail.com', '3e0abb2f852d0d57282cda83bd3d9d76'),
(8, 'myname is rohit yadav', 'jobhi@gmail.com', 'cbee14872195216ae6d2c223b1dee998');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
