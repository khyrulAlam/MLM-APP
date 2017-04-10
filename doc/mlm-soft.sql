-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:27 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm-soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `level_eight`
--

CREATE TABLE IF NOT EXISTS `level_eight` (
  `pe_id` int(13) NOT NULL,
  `level_eight_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_five`
--

CREATE TABLE IF NOT EXISTS `level_five` (
  `pfi_id` int(13) NOT NULL,
  `level_five_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_four`
--

CREATE TABLE IF NOT EXISTS `level_four` (
  `pf_id` int(13) NOT NULL,
  `level_four_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_nine`
--

CREATE TABLE IF NOT EXISTS `level_nine` (
  `pn_id` int(13) NOT NULL,
  `level_nine_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0',
  `u_value2` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_one`
--

CREATE TABLE IF NOT EXISTS `level_one` (
  `po_id` int(13) NOT NULL,
  `level_one_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0',
  `u_name` varchar(100) NOT NULL,
  `r_per` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_one`
--

INSERT INTO `level_one` (`po_id`, `level_one_pin`, `owner_id`, `owner_name`, `u_value`, `u_name`, `r_per`) VALUES
(1, 'L1M44M100420171G2', 1, 'Company', 0, '', 0),
(2, 'L1M50M100420171K6', 1, 'Company', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `level_seven`
--

CREATE TABLE IF NOT EXISTS `level_seven` (
  `ps_id` int(13) NOT NULL,
  `level_seven_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_six`
--

CREATE TABLE IF NOT EXISTS `level_six` (
  `psi_id` int(13) NOT NULL,
  `level_six_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_ten`
--

CREATE TABLE IF NOT EXISTS `level_ten` (
  `pt_id` int(13) NOT NULL,
  `level_ten_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0',
  `u_value2` tinyint(1) NOT NULL DEFAULT '0',
  `u_value3` tinyint(1) NOT NULL DEFAULT '0',
  `u_value4` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_three`
--

CREATE TABLE IF NOT EXISTS `level_three` (
  `pth_id` int(13) NOT NULL,
  `level_three_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_two`
--

CREATE TABLE IF NOT EXISTS `level_two` (
  `pt_id` int(13) NOT NULL,
  `level_two_pin` varchar(100) NOT NULL,
  `owner_id` int(13) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_value` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `u_id` int(12) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_father_name` varchar(100) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `u_nid` varchar(35) NOT NULL,
  `u_birth` varchar(15) NOT NULL,
  `u_mobile` varchar(18) NOT NULL,
  `u_gender` varchar(8) NOT NULL,
  `u_address` text NOT NULL,
  `u_country` varchar(10) NOT NULL,
  `u_password` varchar(32) NOT NULL,
  `level_one_pin` varchar(100) NOT NULL,
  `senior_id` int(13) NOT NULL,
  `senior_name` varchar(100) NOT NULL,
  `u_entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_level` tinyint(10) NOT NULL DEFAULT '0',
  `u_access` tinyint(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `u_name`, `u_father_name`, `u_email`, `u_nid`, `u_birth`, `u_mobile`, `u_gender`, `u_address`, `u_country`, `u_password`, `level_one_pin`, `senior_id`, `senior_name`, `u_entry_date`, `u_level`, `u_access`) VALUES
(1, 'Company ', '', 'company@admin.com', '', '', '', '', '', 'USA', '7607ca33cb7cb69bdb61fdb58ded69c8', '', 0, '', '2017-04-10 21:25:42', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level_eight`
--
ALTER TABLE `level_eight`
  ADD PRIMARY KEY (`pe_id`);

--
-- Indexes for table `level_five`
--
ALTER TABLE `level_five`
  ADD PRIMARY KEY (`pfi_id`);

--
-- Indexes for table `level_four`
--
ALTER TABLE `level_four`
  ADD PRIMARY KEY (`pf_id`);

--
-- Indexes for table `level_nine`
--
ALTER TABLE `level_nine`
  ADD PRIMARY KEY (`pn_id`);

--
-- Indexes for table `level_one`
--
ALTER TABLE `level_one`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `level_seven`
--
ALTER TABLE `level_seven`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `level_six`
--
ALTER TABLE `level_six`
  ADD PRIMARY KEY (`psi_id`);

--
-- Indexes for table `level_ten`
--
ALTER TABLE `level_ten`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `level_three`
--
ALTER TABLE `level_three`
  ADD PRIMARY KEY (`pth_id`);

--
-- Indexes for table `level_two`
--
ALTER TABLE `level_two`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level_eight`
--
ALTER TABLE `level_eight`
  MODIFY `pe_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_five`
--
ALTER TABLE `level_five`
  MODIFY `pfi_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_four`
--
ALTER TABLE `level_four`
  MODIFY `pf_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_nine`
--
ALTER TABLE `level_nine`
  MODIFY `pn_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_one`
--
ALTER TABLE `level_one`
  MODIFY `po_id` int(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `level_seven`
--
ALTER TABLE `level_seven`
  MODIFY `ps_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_six`
--
ALTER TABLE `level_six`
  MODIFY `psi_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_ten`
--
ALTER TABLE `level_ten`
  MODIFY `pt_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_three`
--
ALTER TABLE `level_three`
  MODIFY `pth_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_two`
--
ALTER TABLE `level_two`
  MODIFY `pt_id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
