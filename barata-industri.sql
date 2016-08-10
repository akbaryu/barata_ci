-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2016 at 10:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barata-industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `login_op`
--

CREATE TABLE IF NOT EXISTS `login_op` (
  `username_op` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_op`
--

INSERT INTO `login_op` (`username_op`, `password`) VALUES
('operator', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE IF NOT EXISTS `login_user` (
  `username_user` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`username_user`, `password`) VALUES
('user', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE IF NOT EXISTS `log_activity` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) DEFAULT NULL,
  `predicate` varchar(255) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `object_id` varchar(255) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `subject`, `predicate`, `object`, `object_id`, `create_date`) VALUES
('log00000001', '192.168.1.1', 'love', 'hero', '14514037242271545297', '2015-11-04 01:45:10'),
('log00000002', '192.168.1.1', 'view', 'hero', '14514037242271545297', '2015-11-04 01:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `media_type`
--

CREATE TABLE IF NOT EXISTS `media_type` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_type`
--

INSERT INTO `media_type` (`id`, `name`, `content`, `module`) VALUES
('bootleg', 'Bootleg', NULL, 'video'),
('misc', 'Miscellaneous', NULL, 'all'),
('poster', 'Poster', NULL, 'gallery'),
('promo', 'Promo', NULL, 'video'),
('quotes', 'Quotes', NULL, 'gallery'),
('trailer', 'Trailer', NULL, 'video'),
('wallpaper', 'Wallpaper', NULL, 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumb_img` varchar(255) DEFAULT NULL,
  `full_img` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `konfirmasi` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1301 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `name`, `thumb_img`, `full_img`, `ket`, `konfirmasi`) VALUES
(1217, 'Surat1', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_ico.jpg', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_full.jpg', '14521920446243178012', 0),
(1218, 'Surat3', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_ico.jpg', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_full.jpg', '14521920446243178012', 0),
(1219, 'Surat5', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_ico.jpg', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_full.jpg', '14521920446243178012', 1),
(1220, 'Surat4', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_ico.jpg', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_full.jpg', '14521920446243178012', 1),
(1300, 'Surat pnting11', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_ico.jpg', 'https://raw.githubusercontent.com/akbaryu/si_sayur_web_struktural/master/images/surat_full.jpg', 'ini surat kita', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `social_account` varchar(255) DEFAULT NULL,
  `is_subscribe` int(1) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `mod_date` timestamp NULL DEFAULT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `mod_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `social_account`, `is_subscribe`, `create_date`, `mod_date`, `create_by`, `mod_by`) VALUES
('56c6a9637af69', 'yuri', 'yuripertamax@gmail.com', 'yuri', 0, '2016-02-19 05:34:27', '2016-02-19 05:34:27', 'system', 'system'),
('56d39c156bd97', 'Hakim Islakhan', 'hakim.islakhan@gmail.com', 'Hakim Islakhan', 0, '2016-02-29 01:17:09', '2016-02-29 01:17:09', 'system', 'system'),
('56e9783c75c51', 'Alfi Setyadi Mochtar', 'alfisetyadi@gmail.com', '', 0, '2016-03-16 15:14:04', '2016-03-16 15:14:04', 'system', 'system');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login_op`
--
ALTER TABLE `login_op`
 ADD PRIMARY KEY (`username_op`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
 ADD PRIMARY KEY (`username_user`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1301;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
