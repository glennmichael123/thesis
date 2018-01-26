-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 11:59 AM
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
  `ojt_program` varchar(255) NOT NULL,
  `transitioned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `supervisor_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojt_records`
--

INSERT INTO `ojt_records` (`id`, `id_number`, `total_hours`, `ojtone_required`, `ojttwo_required`, `ojtone_rendered`, `ojttwo_rendered`, `total_evaluations`, `ojtone_current_evaluations`, `ojttwo_current_evaluations`, `logs_one`, `logs_two`, `logs_one_verified`, `logs_two_verified`, `ojtone_status`, `ojttwo_status`, `supervisor_id`, `admin_id`) VALUES
(1, 'arlenejane.abelgas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(2, 'jamesbryan.alarcon', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(3, 'edser.caballero', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(4, 'michaeljay.caballero', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(5, 'carljaysun.cabaluna', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(6, 'dariele.cayme', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(7, 'rosemarie.de real', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(8, 'marcelinoiii.fuentes', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(9, 'grace.ganzo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(10, 'windelynjoy.jopia', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(11, 'ronnelo.mernilo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(12, 'cedric.nebria', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(13, 'norrenlanchpaul.ongcal', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(14, 'jonglen.pitas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(15, 'gerald.tan', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(16, 'generheybrayan.tanupan', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(17, 'rosellemay.yamson', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(18, 'jodolfh.abarquez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(19, 'jhyllanthony.alob', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(20, 'karren.ardon', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(21, 'welsey.birao', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(22, 'aladdin.bravo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(23, 'cliffadrian.buque', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(24, 'gaspar.caraballe', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(25, 'meldred.carrigo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(26, 'chiangshan.chang', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(27, 'seciniojr..colipano', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(28, 'klydekz.gonzales', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(29, 'arbey.jamili', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(30, 'jayson.librando', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(31, 'zienel.magsayo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(32, 'markterence.mallari', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(33, 'daryljames.medillo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(34, 'junrey.natad', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(35, 'leopatrick.navarro', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(36, 'josevirgil.orais', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(37, 'haroldjohn.panugaling', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(38, 'karoljohn.paras', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(39, 'retchel.rumaguera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(40, 'rexxordee.uy', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(41, 'johnluther.valendez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(42, 'princeton.valera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(43, 'walter.ybanez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', ''),
(44, 'lysander.zulueta', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '', '');

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
  `email` text NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'arlenejane.abelgas', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ARLENE JANE', 'D. ', 'ABELGAS', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(2, 'jamesbryan.alarcon', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JAMES BRYAN', 'J. ', 'ALARCON', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(3, 'edser.caballero', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'EDSER', 'S. ', 'CABALLERO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(4, 'michaeljay.caballero', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MICHAEL JAY', 'J. ', 'CABALLERO', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(5, 'carljaysun.cabaluna', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CARL JAYSUN', 'M. ', 'CABALUNA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(6, 'dariele.cayme', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'DARIELE', 'V. ', 'CAYME', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(7, 'rosemarie.de real', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSEMARIE', 'T. ', 'DE REAL', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(8, 'marcelinoiii.fuentes', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MARCELINO III', 'C. ', 'FUENTES', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(9, 'grace.ganzo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GRACE', 'L. ', 'GANZO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(10, 'windelynjoy.jopia', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WINDELYN JOY', 'V. ', 'JOPIA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(11, 'ronnelo.mernilo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'RONNELO', 'A. ', 'MERNILO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(12, 'cedric.nebria', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CEDRIC', 'L. ', 'NEBRIA', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(13, 'norrenlanchpaul.ongcal', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'NORREN LANCH PAUL', 'A. ', 'ONGCAL', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(14, 'jonglen.pitas', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JON GLEN', 'U. ', 'PITAS', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(15, 'gerald.tan', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GERALD', 'M. ', 'TAN', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(16, 'generheybrayan.tanupan', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GENE RHEY BRAYAN', 'P. ', 'TANUPAN', 'BSIT', 3, '2017-2018', 0, '123456', 'ojt_one', ''),
(17, 'rosellemay.yamson', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSELLE MAY', 'A. ', 'YAMSON', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_one', ''),
(18, 'jodolfh.abarquez', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JODOLFH', 'N.', 'ABARQUEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(19, 'jhyllanthony.alob', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JHYLL ANTHONY', 'E.', 'ALOB', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(20, 'karren.ardon', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KARREN', 'V.', 'ARDON', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(21, 'welsey.birao', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WELSEY', 'C.', 'BIRAO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(22, 'aladdin.bravo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ALADDIN', 'Y.', 'BRAVO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(23, 'cliffadrian.buque', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CLIFF ADRIAN', 'D.', 'BUQUE', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(24, 'gaspar.caraballe', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GASPAR', 'M.', 'CARABALLE', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(25, 'meldred.carrigo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MELDRED', 'C.', 'CARRIGO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(26, 'chiangshan.chang', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CHIANG SHAN', 'Y.', 'CHANG', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(27, 'seciniojr..colipano', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'SECINIO JR.', 'H.', 'COLIPANO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(28, 'klydekz.gonzales', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KLYDEKZ', 'C.', 'GONZALES', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(29, 'arbey.jamili', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ARBEY', 'C.', 'JAMILI', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(30, 'jayson.librando', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JAYSON', 'C.', 'LIBRANDO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(31, 'zienel.magsayo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ZIENEL', 'B.', 'MAGSAYO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(32, 'markterence.mallari', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MARK TERENCE', 'M.', 'MALLARI', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(33, 'daryljames.medillo', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'DARYL JAMES', 'A.', 'MEDILLO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(34, 'junrey.natad', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JUNREY', 'L.', 'NATAD', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(35, 'leopatrick.navarro', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'LEO PATRICK', 'D.', 'NAVARRO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(36, 'josevirgil.orais', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JOSE VIRGIL', 'N.', 'ORAIS', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(37, 'haroldjohn.panugaling', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'HAROLD JOHN', 'V.', 'PANUGALING', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(38, 'karoljohn.paras', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KAROL JOHN', 'B.', 'PARAS', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(39, 'retchel.rumaguera', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'RETCHEL', 'L.', 'RUMAGUERA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(40, 'rexxordee.uy', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'REXXOR DEE', 'T.', 'UY', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(41, 'johnluther.valendez', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JOHN LUTHER', 'S.', 'VALENDEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(42, 'princeton.valera', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'PRINCETON', 'B.', 'VALERA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(43, 'walter.ybanez', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WALTER', 'D.', 'YBANEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(44, 'lysander.zulueta', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'LYSANDER', 'B.', 'ZULUETA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_details`
--
ALTER TABLE `emergency_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ojt_records`
--
ALTER TABLE `ojt_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
