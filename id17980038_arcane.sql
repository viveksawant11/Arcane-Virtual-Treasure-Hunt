-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 11:15 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17980038_arcane`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_srno` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `answer` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_srno`, `question_no`, `answer`) VALUES
(1, 1, 'belgium'),
(2, 2, 'buckin hum palace'),
(3, 3, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `queno` int(3) NOT NULL,
  `ans` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`queno`, `ans`) VALUES
(1, 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `lead_no` int(11) NOT NULL,
  `que1` time DEFAULT NULL,
  `que2` time DEFAULT NULL,
  `que3` time DEFAULT NULL,
  `que4` time DEFAULT NULL,
  `que5` time DEFAULT NULL,
  `user_srno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`lead_no`, `que1`, `que2`, `que3`, `que4`, `que5`, `user_srno`) VALUES
(1, NULL, '23:24:17', NULL, NULL, NULL, 1),
(2, NULL, '23:24:17', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questionare`
--

CREATE TABLE `questionare` (
  `que_srno` int(11) NOT NULL,
  `question` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `user_srno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionare`
--

INSERT INTO `questionare` (`que_srno`, `question`, `score`, `user_srno`) VALUES
(1, 2, 0, 1),
(2, 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_srno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_srno`, `username`, `password`, `name`) VALUES
(1, 'vidya', 'vidya', 'vidya'),
(2, 'yash', 'yash', 'yash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_srno`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`lead_no`),
  ADD KEY `user_srno` (`user_srno`);

--
-- Indexes for table `questionare`
--
ALTER TABLE `questionare`
  ADD PRIMARY KEY (`que_srno`),
  ADD KEY `user_srno` (`user_srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_srno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`user_srno`) REFERENCES `users` (`user_srno`);

--
-- Constraints for table `questionare`
--
ALTER TABLE `questionare`
  ADD CONSTRAINT `questionare_ibfk_1` FOREIGN KEY (`user_srno`) REFERENCES `users` (`user_srno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
