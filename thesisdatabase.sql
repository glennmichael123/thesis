-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 09:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesisdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `college` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `id_number`, `password`, `college`, `email`) VALUES
(1, 'Larmie Feliscuzo', 'admin', '123456', 'CCS', 'larmie.feliscuzo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `announcement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `supervisor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `company_name` text NOT NULL,
  `supervisor_id` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `contact_number` int(11) NOT NULL,
  `fax_number` int(11) NOT NULL,
  `product_lines` text NOT NULL,
  `company_classification` text NOT NULL,
  `number_of_employees` text NOT NULL,
  `watchlisted` tinyint(1) NOT NULL DEFAULT '0',
  `ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `id_number`, `company_name`, `supervisor_id`, `company_address`, `contact_number`, `fax_number`, `product_lines`, `company_classification`, `number_of_employees`, `watchlisted`, `ojt_program`) VALUES
(1, 'noreenlanchpaul.ongcal', 'CIT', '', '3', 3, 3, '3', 'Assembly,Manufacturing,Maintenance,Service/Utility,Research and Development,IT Related', 'More than 100', 0, 'ojt_one');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email_address` text NOT NULL,
  `hash` text NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `id_number`, `email_address`, `hash`, `status`) VALUES
(1, 'noreenlanchpaul.ongcal', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_details`
--

CREATE TABLE `emergency_details` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `relationship` text NOT NULL,
  `contact_number` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_details`
--

INSERT INTO `emergency_details` (`id`, `id_number`, `name`, `relationship`, `contact_number`, `address`) VALUES
(1, 'noreenlanchpaul.ongcal', 'c', 'c', 2, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `family_details`
--

CREATE TABLE `family_details` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `fathers_name` text NOT NULL,
  `fathers_occupation` text NOT NULL,
  `mothers_name` text NOT NULL,
  `mothers_occupation` text NOT NULL,
  `parents_address` text NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`id`, `id_number`, `fathers_name`, `fathers_occupation`, `mothers_name`, `mothers_occupation`, `parents_address`, `contact_number`) VALUES
(1, 'noreenlanchpaul.ongcal', 'c', 'c', 'c', 'c', 'c', 232);

-- --------------------------------------------------------

--
-- Table structure for table `final_evaluation`
--

CREATE TABLE `final_evaluation` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `supervisor_username` text NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `sex` text NOT NULL,
  `course` text NOT NULL,
  `major` text NOT NULL,
  `school` text NOT NULL,
  `city` text NOT NULL,
  `permanent` text NOT NULL,
  `required` text NOT NULL,
  `company` text NOT NULL,
  `division` text NOT NULL,
  `field` text NOT NULL,
  `dates_from` text NOT NULL,
  `dates_to` text NOT NULL,
  `total_hours` text NOT NULL,
  `quality` text NOT NULL,
  `quality2` text NOT NULL,
  `dependability` text NOT NULL,
  `attendance` text NOT NULL,
  `cooperation` text NOT NULL,
  `judgement` text NOT NULL,
  `personality` text NOT NULL,
  `recommend` text NOT NULL,
  `total` int(11) NOT NULL,
  `allow_view` int(11) NOT NULL,
  `ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `division` text,
  `department` text,
  `designation` text,
  `log_content` text NOT NULL,
  `hours_rendered` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `supervisor_id` varchar(255) NOT NULL,
  `ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_number`, `date`, `time_in`, `time_out`, `division`, `department`, `designation`, `log_content`, `hours_rendered`, `verified`, `supervisor_id`, `ojt_program`) VALUES
(1, 'noreenlanchpaul.ongcal', '2018-01-13', '08:00:00', '17:00:00', 'hehe', 'hehe', 'hehe', 'hehe', 8, 0, '', 'ojt_one'),
(2, 'noreenlanchpaul.ongcal', '2018-01-13', '05:00:00', '20:00:00', 'haha', 'haha', 'haha', 'haha', 8, 0, '', 'ojt_two'),
(3, 'noreenlanchpaul.ongcal', '2018-01-12', '05:00:00', '20:00:00', 'haha', 'haha', 'haha', 'yoyoyoyo', 8, 0, '', 'ojt_one'),
(4, 'noreenlanchpaul.ongcal', '2018-01-12', '05:00:00', '20:00:00', 'haha', 'haha', 'haha', 'haha2', 8, 0, '', 'ojt_two');

-- --------------------------------------------------------

--
-- Table structure for table `midterm_evaluation`
--

CREATE TABLE `midterm_evaluation` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `supervisor_username` varchar(255) NOT NULL,
  `enthusiasm` int(11) NOT NULL,
  `cooperation` int(11) NOT NULL,
  `adaptability` int(11) NOT NULL,
  `industriousness` int(11) NOT NULL,
  `responsibility` int(11) NOT NULL,
  `attentiveness` int(11) NOT NULL,
  `grooming` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dependability` int(11) NOT NULL,
  `comprehension` int(11) NOT NULL,
  `safety` int(11) NOT NULL,
  `waste` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `allow_view` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL,
  `ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ojt_records`
--

CREATE TABLE `ojt_records` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `total_hours` int(11) NOT NULL,
  `ojtone_required` int(11) NOT NULL DEFAULT '0',
  `ojttwo_required` int(11) NOT NULL DEFAULT '0',
  `ojtone_rendered` int(11) NOT NULL DEFAULT '0',
  `ojttwo_rendered` int(11) NOT NULL DEFAULT '0',
  `total_evaluations` int(11) NOT NULL DEFAULT '2',
  `ojtone_current_evaluations` int(11) NOT NULL DEFAULT '0',
  `ojttwo_current_evaluations` int(11) NOT NULL,
  `logs_one` int(11) NOT NULL DEFAULT '0',
  `logs_two` int(11) NOT NULL,
  `logs_one_verified` int(11) NOT NULL DEFAULT '0',
  `logs_two_verified` int(11) NOT NULL,
  `ojtone_status` varchar(50) NOT NULL DEFAULT 'ON-GOING',
  `ojttwo_status` varchar(50) NOT NULL DEFAULT 'ON-GOING',
  `supervisor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojt_records`
--

INSERT INTO `ojt_records` (`id`, `id_number`, `total_hours`, `ojtone_required`, `ojttwo_required`, `ojtone_rendered`, `ojttwo_rendered`, `total_evaluations`, `ojtone_current_evaluations`, `ojttwo_current_evaluations`, `logs_one`, `logs_two`, `logs_one_verified`, `logs_two_verified`, `ojtone_status`, `ojttwo_status`, `supervisor_id`) VALUES
(1, 'arlenejane.abelgas', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(2, 'jamesbryan.alarcon', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(3, 'edser.caballero', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(4, 'michaeljay.caballero', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(5, 'carljaysun.cabaluna', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(6, 'dariele.cayme', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(7, 'rosemarie.dereal', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(8, 'marcelino.fuentes', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(9, 'grace.ganzo', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(10, 'windelynjoy.jopia', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(11, 'ronnelo.mernilo', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(12, 'cedric.nebria', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(13, 'noreenlanchpaul.ongcal', 500, 200, 300, 0, 0, 2, 0, 0, 1, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(14, 'jonglen.pitas', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(15, 'gerald.tan', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(16, 'generheybrayan.tanupan', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(17, 'rosellemay.yamson', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `image_id` varchar(256) NOT NULL DEFAULT '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>',
  `first_name` text NOT NULL,
  `middle_initial` text NOT NULL,
  `last_name` text NOT NULL,
  `college` text NOT NULL,
  `course` text NOT NULL,
  `year` int(11) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `marital_status` text NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `religion` text NOT NULL,
  `citizenship` text NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `id_number`, `image_id`, `first_name`, `middle_initial`, `last_name`, `college`, `course`, `year`, `present_address`, `permanent_address`, `contact_number`, `email_address`, `date_of_birth`, `age`, `marital_status`, `blood_type`, `weight`, `height`, `religion`, `citizenship`, `sex`) VALUES
(1, 'noreenlanchpaul.ongcal', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Noreen Lanch Paul', 'A', 'Ongcal ', 'CCS', 'BSIT', 4, 'c', 'c', 32, 'xxx@xxx.com', '2018-01-19', 20, 'Married', 'B+', 2, 2, 'c', 'c', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `image_id` varchar(256) NOT NULL DEFAULT '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>',
  `imageDisplayToChange` varchar(256) NOT NULL DEFAULT '<i class="fa fa-user-circle fa-5x" style="font-size: 150px;" aria-hidden="true"></i>',
  `name` text NOT NULL,
  `company_name` text NOT NULL,
  `designation` text NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `image_id`, `imageDisplayToChange`, `name`, `company_name`, `designation`, `id_number`, `password`, `email`) VALUES
(5, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Fafa', 'CIT', 'Fafa', 'fafa', '123456', 'gtorregosa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `user_image` varchar(256) NOT NULL DEFAULT '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>',
  `first_name` text NOT NULL,
  `middle_initial` text NOT NULL,
  `last_name` text NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `school_year` varchar(50) NOT NULL,
  `account_type` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ojt_program` varchar(255) NOT NULL DEFAULT 'ojt_one',
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `admin_id`, `user_image`, `first_name`, `middle_initial`, `last_name`, `course`, `year`, `school_year`, `account_type`, `password`, `ojt_program`, `status`) VALUES
(1, 'arlenejane.abelgas', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Arlene Jane', 'D', 'Abelgas', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(2, 'jamesbryan.alarcon', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'James Bryan', 'J', 'Alarcon', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(3, 'edser.caballero', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Edser', 'S', 'Caballero', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(4, 'michaeljay.caballero', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Michael Jay', 'J', 'Caballero', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(5, 'carljaysun.cabaluna', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Carl Jaysun', 'M', 'Cabaluna', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(6, 'dariele.cayme', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Dariele', 'V', 'Cayme', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(7, 'rosemarie.dereal', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Rosemarie', 'T', 'De Real', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(8, 'marcelino.fuentes', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Marcelino', 'C', 'Fuentes', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(9, 'grace.ganzo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Grace', 'L', 'Ganzo', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(10, 'windelynjoy.jopia', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Windelyn Joy', 'V', 'Jopia', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(11, 'ronnelo.mernilo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Ronnelo', 'A', 'Mernilo', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(12, 'cedric.nebria', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Cedric', 'L', 'Nebria', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(13, 'noreenlanchpaul.ongcal', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Noreen Lanch Paul', 'A', 'Ongcal ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(14, 'jonglen.pitas', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Jon Glen ', 'U', 'Pitas', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(15, 'gerald.tan', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Gerald ', 'M', 'Tan', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(16, 'generheybrayan.tanupan', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Gene Rhey Brayan', 'P', 'Tanupan', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(17, 'rosellemay.yamson', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Roselle May', 'A', 'Yamson', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', '');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_details`
--
ALTER TABLE `emergency_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_details`
--
ALTER TABLE `family_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ojt_records`
--
ALTER TABLE `ojt_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emergency_details`
--
ALTER TABLE `emergency_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ojt_records`
--
ALTER TABLE `ojt_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
