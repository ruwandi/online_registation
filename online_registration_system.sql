-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2019 at 07:24 AM
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
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `nic_no` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`nic_no`, `email`, `password`) VALUES
('8768657867v', 'giga@gmail.com', '00d8c86d80f51dc38b694de6172f96b4ffbc571b'),
('948070723v', 'ruwandi1102@gmail.com', 'b2c007aa1d3368edd8ef8dd1e94f41a7ee77cc9b');

-- --------------------------------------------------------

--
-- Table structure for table `ped`
--

DROP TABLE IF EXISTS `ped`;
CREATE TABLE IF NOT EXISTS `ped` (
  `id_ped` int(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` text NOT NULL,
  `distric` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ped`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ped`
--

INSERT INTO `ped` (`id_ped`, `fullname`, `mobile`, `email`, `distric`) VALUES
(1, 'JKHDSKJFSDH', 987987, 'jkh@gmail.com', 'hkjhkh'),
(2, 'LAKMINI GEESHANI', 746598476, 'jkh@gmail.com', 'Kagalle'),
(5, 'JKHDSKJFSDH', 987987, 'skldfjk@gmail.com', 'hkjhkh'),
(6, 'LAKMINI GEESHANI', 746598476, 'geeshani@gmail.com', 'Kagalle'),
(7, 'JKHDSKJFSDH', 987987, 'skldfjk@gmail.com', 'hkjhkh'),
(8, 'HHJGJGJ', 87687687, 'hashan6611800@gmail.com', 'gjhgjgj');

-- --------------------------------------------------------

--
-- Table structure for table `reject_student`
--

DROP TABLE IF EXISTS `reject_student`;
CREATE TABLE IF NOT EXISTS `reject_student` (
  `id_rej` int(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `distric` varchar(20) NOT NULL,
  `commit` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_rej`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reject_student`
--

INSERT INTO `reject_student` (`id_rej`, `fullname`, `mobile`, `email`, `distric`, `commit`) VALUES
(1, 'JGJHGJHJJ', 89787979, 'jkh@gmail.com', 'mmbmbm', ''),
(5, 'JGJHGJHJJ', 89787979, 'gjgdfjg@gmail.com', 'mmbmbm', ''),
(6, 'JGJHGJHGJ', 87687686, 'kjdhfkgs@gmail.com', 'kjgjhkjhk', ''),
(7, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'ruwandi1102@gmail.com', 'Galle', '1.Certificate copy of G.C.E(A/L) Certificate - is not satisfy'),
(8, 'JGJJHGJJGJ', 876876876, 'jgxdjfg@gmail.com', 'jhgjgjg', ''),
(9, 'JGJHGJHJJ', 89787979, 'gjgdfjg@gmail.com', 'mmbmbm', ''),
(10, 'JGJHGJHJJ', 89787979, 'gjgdfjg@gmail.com', 'mmbmbm', ''),
(11, 'JGJHGJHJJ', 89787979, 'gjgdfjg@gmail.com', 'mmbmbm', '');

-- --------------------------------------------------------

--
-- Table structure for table `smpe`
--

DROP TABLE IF EXISTS `smpe`;
CREATE TABLE IF NOT EXISTS `smpe` (
  `id_smpe` int(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `mobile` int(200) NOT NULL,
  `email` text NOT NULL,
  `distric` varchar(20) NOT NULL,
  PRIMARY KEY (`id_smpe`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smpe`
--

INSERT INTO `smpe` (`id_smpe`, `fullname`, `mobile`, `email`, `distric`) VALUES
(11, 'JGJJHGJJGJ', 876876876, 'jgxdjfg@gmail.com', 'jhgjgjg'),
(10, 'JGJJHGJJGJ', 876876876, 'jgxdjfg@gmail.com', 'jhgjgjg'),
(9, 'JGJJHGJJGJ', 876876876, 'jgxdjfg@gmail.com', 'jhgjgjg'),
(8, 'JGJJHGJJGJ', 876876876, 'jkh@gmail.com', 'jhgjgjg');

-- --------------------------------------------------------

--
-- Table structure for table `ssm`
--

DROP TABLE IF EXISTS `ssm`;
CREATE TABLE IF NOT EXISTS `ssm` (
  `id_ssm` int(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` text NOT NULL,
  `distric` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ssm`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssm`
--

INSERT INTO `ssm` (`id_ssm`, `fullname`, `mobile`, `email`, `distric`) VALUES
(1, 'HJKHKHKJH', 8979879, 'jkh@gmail.com', 'jkh'),
(2, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'jkh@gmail.com', 'Galle'),
(7, 'JGJHGJHJJ', 89787979, 'gjgdfjg@gmail.com', 'mmbmbm'),
(4, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'ruwandi1102@gmail.com', 'Galle'),
(5, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'ruwandi1102@gmail.com', 'Galle'),
(6, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'ruwandi1102@gmail.com', 'Galle'),
(8, 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 702279385, 'ruwandi1102@gmail.com', 'Galle');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `textarea` text NOT NULL,
  `name1` varchar(200) NOT NULL,
  `name2` varchar(200) NOT NULL,
  `name3` varchar(200) NOT NULL,
  `name4` varchar(200) NOT NULL,
  `name5` varchar(200) NOT NULL,
  `name6` varchar(200) NOT NULL,
  `name7` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `courase`, `name_with_initial`, `full_name`, `email`, `address`, `nic_no`, `distric`, `mobile`, `gender`, `index_no`, `zscore`, `genaral_test_marks`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `OL_maths_grade`, `OL_maths_examination_year`, `OL_maths_index_no`, `OL_english_grade`, `OL_english_examination_year`, `OL_english_index_no`, `textarea`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`) VALUES
(46, 'B.Sc(Special) Degree in Sport Sciences & Management', 'JHGJGJHGJG', 'JGJHGJHJJ', 'gjgdfjg@gmail.com', 'kljljl', '9879869', 'mmbmbm', 89787979, 'on', '90808', 0.9, 78, 'jhgjgj', 'B', 'kdhgksjf', 'B', 'hkhjh', 'B', 'B', '2016', '79879', 'B', '2017', '908098', '', '310994-1366x768.jpg', '317222-1366x768.jpg', '316759-1366x768.jpg', '457079-1366x768.jpg', '549158-1366x768.jpg', '547230-1366x768.jpg', '505802-1366x768.jpg'),
(47, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'HJGJGJGJG', 'JGJHGJHGJ', 'kjdhfkgs@gmail.com', 'kljlkj', '89789797', 'kjgjhkjhk', 87687686, 'on', '786868', 0.9, 67, 'jgkgk', 'A', 'jhgjhg', 'B', 'hjgjhg', 'A', 'A', '2016', '876868', 'B', '2015', '987897', '', '330933-1366x768.jpg', '548687-1366x768.jpg', '455977-1366x768.jpg', '494759-1366x768.jpg', '490605-1366x768.jpg', '505802-1366x768.jpg', '521714-1366x768.jpg'),
(48, 'Both SSM & PED', 'GJHGJGJGJ', 'JGJJHGJJGJ', 'jgxdjfg@gmail.com', 'jhgjgjg', '897977', 'jhgjgjg', 876876876, 'on', '987979', 0.9, 78, 'hfhfhg', 'A', 'hjgjg', 'B', 'hjgj', 'A', 'B', '2014', '87987', 'A', '2018', '897979', 'success', '3d Abstract HD 1 (2).jpg', '3d Abstract HD 1 (1).jpg', '489375-1366x768.jpg', 'HD Wallpaper (56).jpg', '581185-1366x768.jpg', '3d Abstract HD 1 (29).jpg', '563955-1366x768.jpg'),
(49, 'B.Sc(Special) Degree in Sport Sciences & Management', 'P.M.N.R.MADHUNAMALI', 'PODDIVILA MARAGE NIMASHA RUWANDI MADHUNAMALI', 'ruwandi1102@gmail.com', 'Talawawatta polgahavila agaliya baddegama', '948070732v', 'Galle', 702279385, 'on', '877978', 0.8, 89, 'mathas', 'A', 'chemistry', 'B', 'physics', 'B', 'B', '2011', '98798', 'B', '2014', '798798', '', '3d Abstract HD 1 (1).jpg', '3d Abstract HD 1 (12).jpg', '3d Abstract HD 1 (11).jpg', '3d Abstract HD 1 (10).jpg', '3d Abstract HD 1 (6).jpg', '', ''),
(50, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'GEESHANI', 'LAKMINI GEESHANI', 'geeshani@gmail.com', 'kuliyapitiya', '789678784v', 'Kagalle', 746598476, 'on', '879779', 0.6, 78, 'maths', 'B', 'science', 'B', 'phycics', 'C', 'B', '2016', '897977', 'B', '2013', '980808', 'Good ', '06. SAD Providing Services.pdf', '3.jpg', '01264_leaf40_1920x1080.jpg', '11.jpg', '623960_94945798.jpg', '623960_94945798.jpg', '509826_78089966.jpg'),
(51, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'KJDFLKSJ', 'JKHDSKJFSDH', 'skldfjk@gmail.com', 'kjflkdjfg', '908080', 'hkjhkh', 987987, '', '987', 0.9, 98, 'jhkjh', 'A', 'jkhkh', 'B', 'mjhkh', 'B', 'C', '2015', '98798', 'S', '2015', '786897', '', '357933_6557.jpg', '623960_94945798.jpg', '11.jpg', '01264_leaf40_1920x1080.jpg', '3.jpg', '236859_7121.jpg', '631641_45495267.jpg'),
(53, 'B.Sc(Special) Degree in Sport Sciences & Management', 'JGJHGHKJG', 'JHGHJGK', 'hkjh@gmail.com', 'jhghjg', '76786869', 'khkjhkn', 89787, 'female', '87987', 0.9, 79, 'bmnjkhk', 'A', 'hjgjh', 'B', 'hgjhgjh', 'B', 'B', '2015', '879879', 'C', '2014', '789798', 'success', '1142.jpg', '18ec6ed7291a341fa3710fe1e333fe95-1.jpg', '14bca3af4f551ce54b13b4b80b31c950.jpg', '3ce007121d6ce7b64cd7ae914a7b3d2d.jpg', '957bee356fbec2f667fbd05a7cb07228.jpg', 'FB_IMG_1435922969392.jpg', '3ce007121d6ce7b64cd7ae914a7b3d2d.jpg'),
(54, 'B.Sc(Special) Degree in Sport Sciences & Management', 'SAJITHA', 'SAJITHA DAUPADI', 'daupadi@gmail.com', 'gampaha,colombo', '677997564v', 'Gampaha', 743676890, 'female', '8797987', 0.8, 78, 'maths', 'B', 'fkajsl', 'B', 'hjkj', 'B', 'C', '2012', '897987', 'S', '2014', '98797', 'success', '349143.jpg', '6602_berserk_hd_wallpapers_sword.jpg', '142.jpg', '2016_yamaha_mt_09-HD.jpg', '2016-01-28Cruise-Ship-Wallpapers-HD.jpg', '142.jpg', '8DiKyGs.jpg'),
(55, 'Both SSM & PED', 'JHGJH', 'HKJGJHG', 'pmnrmadhunamali@std.appsc.sab.ac.lk', 'uhkjhkhk', '87777689', 'jhgjh', 87669, 'female', '9879', 0.9, 98, 'jhgjg', 'B', 'jhgjg', 'A', 'jhgjh', 'B', 'B', '2015', '89798', 'B', '2010', '87987', 'success', 'Toyota Jeep Models Wallpapers.jpg', '2013_toyota_land_cruiser_3_1920x1080.jpg', '1920x1200.jpg', 'AvaniSeychelles_Shisha_property_banner.jpg', '1971373.jpg', '47628783001_2710194473001_MP-lex-unilever.jpg', ''),
(56, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'GFJHGJGJH', 'HHJGJGJ', 'hashan6611800@gmail.com', 'jhgjgjg', '87687686', 'gjhgjgj', 87687687, 'male', '809808', 0.8, 67, 'hjg', 'A', 'hjgj', 'B', 'hjgj', 'A', 'A', '2011', '8979', 'B', '2013', '7888', '', 'Windows-8-Full-Hd-Wallpapers.png', '2016_January_black.jpg', '349143.jpg', '6602_berserk_hd_wallpapers_sword.jpg', 'beaches-nature-photo-gallery.jpg', 'AvaniSeychelles_Shisha_property_banner.jpg', '427408.jpg'),
(57, 'B.Sc(Special) Degree in Sport Sciences & Management', 'GEESHANI', 'LAKMINI GEESHANI', 'geeshani@gmail.com', 'kurunagala', '674578573v', 'Kurunagala', 985646342, 'female', '8979798', 0.9, 89, 'hgfhgfh', 'A', 'hjgj', 'B', 'jhghj', 'C', 'C', '2014', '8768768', 'B', '2012', '8768987', 'hfkjdhf', 'windows-10-in-the-misty-morning-47576-2560x1440.jpg', '2013_toyota_land_cruiser_3_1920x1080.jpg', '142.jpg', 'Lamborghini_logo-hd-wallpapers-1080p.jpg', '7040911-after-earth-2013-movie-wallpaper-hd.jpg', '1440_900_20091218090749308794.jpg', 'Hawaii-Beach-Wallpaper-HD.jpg'),
(58, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'GHFGHFH', 'HFHFGH', 'ma@gmail.com', 'ghfhff', '678686', 'hfh', 786868, 'female', '56464', 0.8, 78, 'gfdgfd', 'B', 'trytry', 'B', 'gffhf', 'B', 'B', '2013', '6575', 'B', '2011', '65765', '', '2013_toyota_land_cruiser_3_1920x1080.jpg', '2016_yamaha_mt_09-HD.jpg', '142.jpg', '1440_900_20091218090749308794.jpg', '2016-01-28Cruise-Ship-Wallpapers-HD.jpg', '2013_toyota_land_cruiser_3_1920x1080.jpg', ''),
(59, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'HGJFHGFJ', 'JHJHGJGJH', 'pmnrmadhunamali@std.appsc.sab.ac.lk', 'kjlahdjf', '97987979', 'jhkhk', 98798798, 'male', '8978979', 0.8, 76, 'hkjhkh', 'C', 'jhgjg', 'B', 'hjgjhgj', 'B', 'C', '2013', '897987', 'C', '2013', '87987', 'ok', '2013-Toyota-Land-Cruiser-wallpaper-3.jpg', '8DiKyGs.jpg', '8DiKyGs.jpg', 'CRUISE_ship_oceanliner_liner_boat__15__1920x1080.jpg', '2016_yamaha_mt_09-HD.jpg', 'collection-of-pics-with-my-5500-area51_f3a344e6dcd0f4c98027f4d2319086a6.jpg', 'AvaniSeychelles_Shisha_property_banner.jpg'),
(60, 'Both SSM & PED', 'KLJLKJLKJLKJ', 'LKJLKJLJLJ', 'sdaupadie@gmail.com', 'kjhlkjhhjkh', '8979797', 'khkjhkhk', 89798798, 'male', '8978979', 0.9, 89, 'jkkjhjk', 'S', 'jhghj', 'C', 'hbhjhhk', 'S', 'B', '2015', '789797', 'S', '2014', '787987', '', 'windows-10-over-the-forest-creek-47244-1920x1080.jpg', 'cruise-ship-oriana-1920x1080.jpg', 'tasmaniaaustraliawallpaperhd-l-40e424939827384e.jpg', '6925097-landscape-wallpaper-hd-desktop.jpg', 'Dark-Sniper-Ghost-Warrior-2-wallpaper.jpg', 'Constance Halaveli Maldives UHD.jpg', 'Buddha-wallpaper-8658842.jpg'),
(61, 'B.Sc(Special) Degree in Sport Sciences & Management', 'GJHGJGH', 'JHGJGJHJ', 'pmnrmadhunamali@std.appsc.sab.ac.lk', 'hjhkhkh', '9879879798', 'hgjgjhg', 767868687, 'male', '8768768', 0.9, 67, 'hgjgj', 'B', 'ghjh', 'A', 'hjgj', 'C', 'C', '2017', '6786', 'C', '2014', '76876', '', '2006_dead_mans_chest_pirates_of_the_caribbean-wallpaper-1366x768.jpg', '13457-1366x768.jpg', '13457-1366x768.jpg', '543380-1366x768.jpg', '305019-1366x768.jpg', '174587-1366x768.jpg', ''),
(62, 'B.Sc(Special) Degree in Phyaical Education (PED)', 'UYTUYTU', 'UYTUTUI', 'flkjsl@gmail.com', 'jkhkjhk', '878797', 'kljlkj', 987797, 'female', '768', 0.9, 78, 'jkhkjh', 'B', 'hghj', 'B', 'ghjgj', 'A', 'C', '2015', '8979', 'C', '2015', '7889', '', '45605-1366x768.jpg', '30513-1366x768.jpg', '412892-1366x768.jpg', 'the_shire_2-wallpaper-1920x1080.jpg', 'Die_Hard_5-wallpaper-9794662.jpg', '', '');

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
('948070732v', 'geeshani@gmail.com', 'geeshani'),
('14/As/CI/065', 'ruwandi@gmail.com', 'ruwandi'),
('948070723v', 'madhunamali@gmial.com', 'madhunamali'),
('789078567v', 'chathura@gmail.com', 'chatura'),
('6745344673v', 'gayan@gmail.com', '134b20fff068bebd6014c15d1bf2f3bec3fdc8a6'),
('785634897v', 'ravisankha@gmail.com', 'aa153b5d1fcb55096034df7a27565f4297f195d2'),
('6789567586v', 'nilmini@gmail.com', 'de1284b08f5d1a920660d793ba7c1fb5311307c0'),
('879798708v', 'nimasha@gmail.com', '9e03e89257e90ad9cdb97a377fd1eb236b954ce9'),
('45489767v', 'madhu@gmail.com', 'd22477479bbf55ba62bd822f4112c80f292c7805'),
('865667789v', 'sumith@gmail.com', '16b902a2057d7c7ebc697e0865dec75100deaa06'),
('675678890v', 'priyanthika@gmail.com', 'f26b3df8c5a140b550f5b0547bdf7836f8b7e962'),
('948070523v', 'daupadi@gmail.com', 'cea97280f607b77a764b9aa0d64818563145c6a8'),
('785645345v', 'pmnrmadhunamali@std.appsc.sab.ac.lk', 'bebdc0d17acc4141a526b944170a2f39ccdac928'),
('7687687687687', 'hashan6611800@gmail.com', '11e249988bc5d9bf3c5203264a25db77896f7a69');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
