-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 05:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktmquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktmlogin`
--

CREATE TABLE `ktmlogin` (
  `User_id` int(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktmlogin`
--

INSERT INTO `ktmlogin` (`User_id`, `Name`, `Email`, `Password`) VALUES
(7, 'Saugat Poudel', 'xettrisaugat@gmail.com', 'saugat123'),
(8, 'abc', 'abc', 'abc'),
(9, '', '', ''),
(10, 'saugat', 'saugat@gmail.com', 'saugat');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Question`) VALUES
('What is the capital of Nepal?'),
('What is the capital of Nepal?'),
('abce'),
('laskdnjlaskd'),
('abce'),
('laskdnjlaskd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktmlogin`
--
ALTER TABLE `ktmlogin`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ktmlogin`
--
ALTER TABLE `ktmlogin`
  MODIFY `User_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
