-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 02:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `nid` int(11) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `dept`, `name`, `nid`, `birth`, `address`) VALUES
(1, 'CSE', 'Wanda M. Ledbetter', 24587, '2013-10-02', '2905 Villa Drive Goshen, IN 46526'),
(2, 'Biology', 'Larry', 74854, '2012-10-12', '408 Edington Drive Decatur'),
(3, 'EEE', 'Linda', 32678, '2016-10-28', '3459 Poe Lane Lenexa'),
(4, 'English', 'Shayne', 69741, '2017-10-17', '609 Tully Street Detroit'),
(6, 'Psychology', 'Millat Hossain', 12345, '2013-10-02', 'Bangladesh'),
(8, 'Music', 'Luca Modric', 44422, '1990-10-02', 'Croatia ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
