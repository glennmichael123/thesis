-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 04:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
(1, 'Bugs Bunny', 'bugs.bunny', '123456', 'CCS', 'bugs.bunny@gmail.com');

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

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `admin_id`, `content`, `username`, `status`, `date_posted`, `announcement_id`) VALUES
(1, 'bugs.bunny', 'Qwwee', 'arlenejane.abelgas', 0, '2018-02-04 02:08:52', 1),
(2, 'bugs.bunny', 'Qwwee', 'jamesbryan.alarcon', 0, '2018-02-04 02:08:52', 1),
(3, 'bugs.bunny', 'Qwwee', 'edser.caballero', 0, '2018-02-04 02:08:52', 1),
(4, 'bugs.bunny', 'Qwwee', 'michaeljay.caballero', 0, '2018-02-04 02:08:52', 1),
(5, 'bugs.bunny', 'Qwwee', 'carljaysun.cabaluna', 0, '2018-02-04 02:08:53', 1),
(6, 'bugs.bunny', 'Qwwee', 'dariele.cayme', 0, '2018-02-04 02:08:53', 1),
(7, 'bugs.bunny', 'Qwwee', 'rosemarie.de real', 0, '2018-02-04 02:08:53', 1),
(8, 'bugs.bunny', 'Qwwee', 'marcelinoiii.fuentes', 0, '2018-02-04 02:08:53', 1),
(9, 'bugs.bunny', 'Qwwee', 'grace.ganzo', 1, '2018-02-04 02:08:53', 1),
(10, 'bugs.bunny', 'Qwwee', 'windelynjoy.jopia', 0, '2018-02-04 02:08:53', 1),
(11, 'bugs.bunny', 'Qwwee', 'ronnelo.mernilo', 0, '2018-02-04 02:08:53', 1),
(12, 'bugs.bunny', 'Qwwee', 'cedric.nebria', 0, '2018-02-04 02:08:53', 1),
(13, 'bugs.bunny', 'Qwwee', 'norrenlanchpaul.ongcal', 0, '2018-02-04 02:08:53', 1),
(14, 'bugs.bunny', 'Qwwee', 'jonglen.pitas', 0, '2018-02-04 02:08:53', 1),
(15, 'bugs.bunny', 'Qwwee', 'gerald.tan', 0, '2018-02-04 02:08:53', 1),
(16, 'bugs.bunny', 'Qwwee', 'generheybrayan.tanupan', 0, '2018-02-04 02:08:53', 1),
(17, 'bugs.bunny', 'Qwwee', 'rosellemay.yamson', 0, '2018-02-04 02:08:53', 1);

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
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `watchlisted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `watchlisted`) VALUES
(1, 'Stark Industries', 1),
(2, 'Star Labs', 1);

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
  `transitioned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `id_number`, `company_name`, `supervisor_id`, `company_address`, `contact_number`, `fax_number`, `product_lines`, `company_classification`, `number_of_employees`, `watchlisted`, `ojt_program`, `transitioned`) VALUES
(1, 'grace.ganzo', 'Qwee', 'duffy.duck', 'Asd', 223323, 23234, 'qweqasdwads', 'Assembly,Service/Utility,Research and Development', 'Less than 50', 0, 'ojt_one', 0),
(2, 'gerald.tan', 'Stark Industries', '', 'qweqwe', 123132, 123123, 'qweqwe', 'Research and Development,Service/Utility', 'More than 100', 0, 'ojt_one', 0);

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
(1, 'grace.ganzo', 'grace.ganzo@gmail.com', '69a4b1ef1957d441cff1da81e88af526', 1),
(2, 'gerald.tan', 'bondjames1212@gmail.com', '2ba649a11e9d026d642bdbb36277c5d8', 1);

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
(1, 'grace.ganzo', 'Qweasd', 'Asdqwe', 45455544, 'Qwee'),
(2, 'gerald.tan', 'qweqwe', 'qweqwe', 123123, 'qweqweqweqwe');

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
(1, 'grace.ganzo', 'Asd', 'Qwe', 'Qwe', 'Asd', 'QweQwe', 4141414),
(2, 'gerald.tan', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123);

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
(1, 'grace.ganzo', '2017-01-25', '11:00:00', '18:00:00', 'Qwe', 'Qwe', 'qwe', 'saasdasdqweqweqwe', 8, 0, 'duffy.duck', 'ojt_one');

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
  `ojttwo_status` varchar(50) NOT NULL,
  `supervisor_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojt_records`
--

INSERT INTO `ojt_records` (`id`, `id_number`, `total_hours`, `ojtone_required`, `ojttwo_required`, `ojtone_rendered`, `ojttwo_rendered`, `total_evaluations`, `ojtone_current_evaluations`, `ojttwo_current_evaluations`, `logs_one`, `logs_two`, `logs_one_verified`, `logs_two_verified`, `ojtone_status`, `ojttwo_status`, `supervisor_id`, `admin_id`) VALUES
(1, 'arlenejane.abelgas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(2, 'jamesbryan.alarcon', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(3, 'edser.caballero', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(4, 'michaeljay.caballero', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(5, 'carljaysun.cabaluna', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(6, 'dariele.cayme', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(7, 'rosemarie.de real', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(8, 'marcelinoiii.fuentes', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(9, 'grace.ganzo', 200, 200, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 'ON-GOING', '', 'duffy.duck', ''),
(10, 'windelynjoy.jopia', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(11, 'ronnelo.mernilo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(12, 'cedric.nebria', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(13, 'norrenlanchpaul.ongcal', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(14, 'jonglen.pitas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(15, 'gerald.tan', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(16, 'generheybrayan.tanupan', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(17, 'rosellemay.yamson', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', '');

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
(1, 'grace.ganzo', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'GRACE', 'L. ', 'GANZO', 'CCS', 'BSIT', 4, 'Qwee', 'QweQwe', 41512412, 'grace.ganzo@gmail.com', '2001-08-02', 20, 'Single', 'O+', 123123, 123123, 'QweqweQwe', 'Qweqwe', 'Female'),
(2, 'gerald.tan', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'GERALD', 'M. ', 'TAN', 'CCS', 'BSIT', 4, 'qweqwe', 'qweqweqw', 123123, 'bondjames1212@gmail.com', '2018-01-08', 23, 'Single', 'O-', 123, 123, '123123123', '123123123', 'Female');

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
  `flag` tinyint(1) NOT NULL,
  `verified` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `image_id`, `imageDisplayToChange`, `name`, `company_name`, `designation`, `id_number`, `password`, `email`, `phone_number`, `flag`, `verified`, `hash`) VALUES
(10, 'assets/uploads/duffy.duck.jpg?dummy=Y36UrREIis', 'assets/uploads/duffy.duck.jpg?dummy=Y36UrREIis', 'Duffy Duck', 'Stark Industries', 'Duck', 'duffy.duck', '123456', 'duffy.duck@gmail.com', '09326252552', 0, 0, '653b48a24620245fa001b74edae03332'),
(13, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Tasmanian Devil', 'Stark Industries', 'Devil', 'taz.devil', '123123', 'taz.devil@gmail.com', '0922726626', 0, 0, '567b80eb0736c654522b69d11e9e9b25');

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
(1, 'arlenejane.abelgas', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ARLENE JANE', 'D. ', 'ABELGAS', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(2, 'jamesbryan.alarcon', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JAMES BRYAN', 'J. ', 'ALARCON', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(3, 'edser.caballero', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'EDSER', 'S. ', 'CABALLERO', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(4, 'michaeljay.caballero', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MICHAEL JAY', 'J. ', 'CABALLERO', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(5, 'carljaysun.cabaluna', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CARL JAYSUN', 'M. ', 'CABALUNA', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(6, 'dariele.cayme', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'DARIELE', 'V. ', 'CAYME', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(7, 'rosemarie.de real', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSEMARIE', 'T. ', 'DE REAL', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(8, 'marcelinoiii.fuentes', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MARCELINO III', 'C. ', 'FUENTES', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(9, 'grace.ganzo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GRACE', 'L. ', 'GANZO', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(10, 'windelynjoy.jopia', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WINDELYN JOY', 'V. ', 'JOPIA', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(11, 'ronnelo.mernilo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'RONNELO', 'A. ', 'MERNILO', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(12, 'cedric.nebria', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CEDRIC', 'L. ', 'NEBRIA', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(13, 'norrenlanchpaul.ongcal', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'NORREN LANCH PAUL', 'A. ', 'ONGCAL', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(14, 'jonglen.pitas', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JON GLEN', 'U. ', 'PITAS', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(15, 'gerald.tan', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GERALD', 'M. ', 'TAN', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(16, 'generheybrayan.tanupan', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GENE RHEY BRAYAN', 'P. ', 'TANUPAN', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(17, 'rosellemay.yamson', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSELLE MAY', 'A. ', 'YAMSON', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', '');

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
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emergency_details`
--
ALTER TABLE `emergency_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
