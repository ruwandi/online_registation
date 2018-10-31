-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2018 at 08:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `courase` varchar(200) NOT NULL,
  `name_with_initial` varchar(200) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `nic_no` text NOT NULL,
  `distric` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `index_no` text NOT NULL,
  `zscore` float NOT NULL,
  `genaral_test_marks` int(3) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `grade1` text NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `grade2` text NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `grade3` text NOT NULL,
  `OL_maths_grade` text NOT NULL,
  `OL_maths_examination_year` text NOT NULL,
  `OL_maths_index_no` text NOT NULL,
  `OL_english_grade` text NOT NULL,
  `OL_english_examination_year` text NOT NULL,
  `OL_english_index_no` text NOT NULL,
  `textarea` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`courase`, `name_with_initial`, `full_name`, `email`, `address`, `nic_no`, `distric`, `mobile`, `gender`, `index_no`, `zscore`, `genaral_test_marks`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `OL_maths_grade`, `OL_maths_examination_year`, `OL_maths_index_no`, `OL_english_grade`, `OL_english_examination_year`, `OL_english_index_no`, `textarea`) VALUES
('kjlkjlj', 'UIYUIY', '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B.Sc(Special) Degree in Sport Sciences & Management', 'JHGJGJGJ', '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B.Sc(Special) Degree in Phyaical Education (PED)', 'JHGKJHHJG', '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B.Sc(Special) Degree in Phyaical Education (PED)', 'GFDFH', '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Both SSM & PED', 'JHGJGJHG', '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B.Sc(Special) Degree in Sport Sciences & Management', 'KJHHKHJKH', 'HKJHKJHKHK', 'ruwandi1102@gmail.com', 'jkhkhkj', '987979879', 'khkjkjhkk', 98797709, 'on', '97997978', 1, 78, 'jkhkhkh', 'B', 'jhjgjhghj', 'A', 'jhjgjghj', 'S', 'A', '2016', '89797', 'B', '2018', '89797', ''),
('B.Sc(Special) Degree in Phyaical Education (PED)', 'JGJHGJHG', 'GJHGJHGJG', 'kadjlfjalsj@gmail.com', 'jkhkhkh', '89797787678', 'kjhkhkh', 98080980, 'on', '786786', 1, 87, 'hjgjgjg', 'A', 'jhjgjh', 'B', 'iuiiou', 'A', 'S', '2014', '89798', 'B', '2016', '897897', 'hkjhkjhkjh'),
('B.Sc(Special) Degree in Sport Sciences & Management', 'HBGJHGJHG', 'JGJHGJHGJ', 'jhkhkh@gmail.com', 'hkjkkhk', '89779777', 'jkkkhjhj', 98797979, 'on', '8977', 1, 67, 'hjkjj', 'A', 'hkjhk', 'S', 'jhkhj', 'S', 'A', '2016', '8768', 'A', '2017', '76887', ''),
('B.Sc(Special) Degree in Sport Sciences & Management', 'GFHJGGKH', 'KJKJHKJHK', 'kjhsfdg@gmail.com', 'kjhkhk', '89797987', 'kjkjlkj', 9879797, 'on', '897979', 1, 67, 'kjhkh', 'B', 'jkhkhk', 'B', 'bhjjkg', 'B', 'A', '2017', '7897987', 'A', '2016', '897797', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `nic_no` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nic_no`, `email`, `password`) VALUES
('948070732v', 'geeshani@gmail.com', 'geeshani');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
