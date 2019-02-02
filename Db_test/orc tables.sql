-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 08:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`, `time`) VALUES
(1, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', '$2y$10$rHQTWlv7bX1zwuZOUBNHtusgUqZLLhcP/wpNmjH4tV3Os6HBcip6O', 'SuperAdmin', '2019-01-04 14:31:14'),
(2, 'Emeto Winner uzoma', 'emetowinner@gmail.com', '$2y$10$YANvCaJIAyGwsc1dND6/V.EBkJD8GHDxQoHiV4D.OpCoNobNHp3Ve', 'NormalAdmin', '2019-01-04 14:32:08'),
(3, 'Onyemenam Ndubuisi', 'prond@gmail.com', '$2y$10$PZ3L4mCOOuaCrag5PZ58EuH5yIoAefsHcjJZwttKNAPOD8njJmc4y', 'NormalAdmin', '2019-01-04 21:47:25'),
(4, 'Amadi Oluchi', 'ladyG@gmail.com', '$2y$10$V3TWdwjVMPm6SqsLDXoOnu3SeGB28lHc51BOsGgdM21KoaXAlEzCq', 'SuperAdmin', '2019-01-04 22:04:41'),
(5, 'Chikere Chidinma', 'chidinma@gmail.com', '$2y$10$7BUxykzIMLxUFcVMey8CPelZaYFJUrISObKrdh.k2UQaxmo2NFzXm', 'NormalAdmin', '2019-01-08 19:33:29'),
(6, 'Sir iyke', 'iyke@gmail.com', '$2y$10$oKp9POLgz3RBc5Phzccta.kPZOKsDkvnbh0D9c.nbVkLIo9ANrsKu', 'NormalAdmin', '2019-01-09 14:58:28'),
(7, 'Atashie Amaka', 'amaka@gmail.com', '$2y$10$iBEjtHm4jZBtpdXVAk2O3uLX0MNAxPx6WjyaYZxhmF8j1pwX4uJga', 'NormalAdmin', '2019-01-15 17:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `firstone` varchar(225) NOT NULL,
  `secondone` varchar(225) NOT NULL,
  `firsttwo` varchar(225) NOT NULL,
  `secondtwo` varchar(225) NOT NULL,
  `firstthree` varchar(225) NOT NULL,
  `secondthree` varchar(225) NOT NULL,
  `firstfour` varchar(225) NOT NULL,
  `secondfour` varchar(225) NOT NULL,
  `firstfive` varchar(225) NOT NULL,
  `secondfive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `matnumber`, `firstone`, `secondone`, `firsttwo`, `secondtwo`, `firstthree`, `secondthree`, `firstfour`, `secondfour`, `firstfive`, `secondfive`) VALUES
(4, '16/38170', '5.00', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester`
--

CREATE TABLE `firstsemester` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstsemester`
--

INSERT INTO `firstsemester` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38170', 'MATHS', '', '', 'A', 'English', '', '', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '16/38171', 'gst', '', '', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '181070011', 'MATHS', '', '', 'B', 'chem', '', '', 'B', 'physics', '', '', 'A', 'gst', '', '', 'A', 'bio', '', '', 'C', 'gst22', '', '', 'B', 'gst34', '', '', 'A', 'eng', '', '', 'A', 'eng22', '', '', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester2`
--

CREATE TABLE `firstsemester2` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester3`
--

CREATE TABLE `firstsemester3` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester4`
--

CREATE TABLE `firstsemester4` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester5`
--

CREATE TABLE `firstsemester5` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester`
--

CREATE TABLE `secondsemester` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester2`
--

CREATE TABLE `secondsemester2` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester3`
--

CREATE TABLE `secondsemester3` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester4`
--

CREATE TABLE `secondsemester4` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester5`
--

CREATE TABLE `secondsemester5` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institution` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `institution`, `department`, `matnumber`, `time`, `password`) VALUES
(10, 'Njoku fidelis chukwuezi', 'ericdavis4real@gmail.com', 'futo', 'Arc', '17/1068454', '2018-12-20 11:41:46', '$2y$10$hayF26aigeppBnzIKvZutubu/zZlxW4qhWToOTzK/To4CD3nhKRCK'),
(13, 'Akushie Kaka', 'kaka@gmail.com', 'imsu', 'EduBiology', '15/28675', '2018-12-24 18:46:40', '$2y$10$l.pQPINB.Tzs8BQWjmUTp.y4aJGZdoXSae.e75mHqCx.n3ff58S/y'),
(14, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', 'imsu', 'computer Science', '16/38170', '2018-12-25 06:46:31', '$2y$10$3eizUOkFrGiR35DdM5BcoOaEtfiCqo/CJ0yYNxyhedxsWJ3xxeLP2'),
(15, 'Akushie junior', 'junior@gmail.com', 'AbiaPoly', 'computer Science', '6484', '2018-12-27 11:02:44', '$2y$10$Ap4BKUD7pNxxQhcsshMIzeRmuSLzAOpRZ.HNo1ma99mt49/0NaIPm'),
(16, 'Atashie Amaka', 'amaka@gmail.com', 'imsu', 'microbiology', '14/26013', '2018-12-30 18:27:09', '$2y$10$oLb3MmClqjwAWACC.Wu9R.Vcd0q0DsZNBjzgmgmVosNK.wpj10zP.'),
(17, 'Emeto Winner', 'emetowinner@gmail.com', 'imsu', 'computer Science', '16/35644', '2019-01-01 14:53:37', '$2y$10$dcXWpyhZYZ/bko.KHOOMi.NTh0JeNGRjINx3H816guAfm9z8S5yuW'),
(19, 'Chikere Chidinma', 'chidinma@gmail.com', 'futo', 'Fishery', '181070011', '2019-01-08 19:23:45', '$2y$10$XhnbnMfa3vy7aoad69ck/O/S0RjNn5L6mum1Snw2rGXnSo.Op9nHa'),
(20, 'Amadi Judith', 'judith@gmail.com', 'Alvan', 'EduBiology', '1999888', '2019-01-09 14:09:52', '$2y$10$.Fr2LWDL.zmsYYQiCRNLA.5PRjN6M6K2dZvmdn3WlE2plb.jUgAAS'),
(21, 'Nnodi Paschal', 'agwo@gmail.com', 'Nekede', 'banking and finance', '1999777', '2019-01-09 14:15:26', '$2y$10$3B9YHVRcyba8Q23/z7ITt.GLoC7aQ5dW3mzhLu3pXkFOqxvQriluW'),
(22, 'Amadi Kizito', 'rexsteroxy22@gmail.com', 'futo', 'computer Science', '17864', '2019-01-09 14:41:43', '$2y$10$I8GZhGU/WzNgQx2zzzBzq.kRw7TxobSpqbzFzZZtloDZsCMkUZWQm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester`
--
ALTER TABLE `firstsemester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester2`
--
ALTER TABLE `firstsemester2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester3`
--
ALTER TABLE `firstsemester3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester4`
--
ALTER TABLE `firstsemester4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester5`
--
ALTER TABLE `firstsemester5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester`
--
ALTER TABLE `secondsemester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester2`
--
ALTER TABLE `secondsemester2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester3`
--
ALTER TABLE `secondsemester3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester4`
--
ALTER TABLE `secondsemester4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester5`
--
ALTER TABLE `secondsemester5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `firstsemester`
--
ALTER TABLE `firstsemester`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `firstsemester2`
--
ALTER TABLE `firstsemester2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `firstsemester3`
--
ALTER TABLE `firstsemester3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `firstsemester4`
--
ALTER TABLE `firstsemester4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `firstsemester5`
--
ALTER TABLE `firstsemester5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester`
--
ALTER TABLE `secondsemester`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester2`
--
ALTER TABLE `secondsemester2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester3`
--
ALTER TABLE `secondsemester3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester4`
--
ALTER TABLE `secondsemester4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester5`
--
ALTER TABLE `secondsemester5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
