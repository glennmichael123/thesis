-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 02:51 PM
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
  `email` text NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `id_number`, `password`, `college`, `email`, `role`) VALUES
(1, 'admin', 'admin', '123456', 'CCS', 'larmie.feliscuzo@gmail.com', 'admin'),
(2, 'nlo admin', 'nloadmin', '123456', '', '', 'nlo');

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
(36, 'bugs.bunny', 'haha', 'arlenejane.abelgas', 0, '2018-02-15 13:04:58', 1),
(37, 'bugs.bunny', 'haha', 'jamesbryan.alarcon', 0, '2018-02-15 13:04:58', 1),
(38, 'bugs.bunny', 'haha', 'edser.caballero', 1, '2018-02-15 13:04:58', 1),
(39, 'bugs.bunny', 'haha', 'michaeljay.caballero', 0, '2018-02-15 13:04:58', 1),
(40, 'bugs.bunny', 'haha', 'carljaysun.cabaluna', 0, '2018-02-15 13:04:58', 1),
(41, 'bugs.bunny', 'haha', 'dariele.cayme', 0, '2018-02-15 13:04:58', 1),
(42, 'bugs.bunny', 'haha', 'rosemarie.de real', 0, '2018-02-15 13:04:58', 1),
(43, 'bugs.bunny', 'haha', 'marcelinoiii.fuentes', 0, '2018-02-15 13:04:58', 1),
(44, 'bugs.bunny', 'haha', 'grace.ganzo', 1, '2018-02-15 13:04:58', 1),
(45, 'bugs.bunny', 'haha', 'windelynjoy.jopia', 0, '2018-02-15 13:04:58', 1),
(46, 'bugs.bunny', 'haha', 'ronnelo.mernilo', 0, '2018-02-15 13:04:58', 1),
(47, 'bugs.bunny', 'haha', 'cedric.nebria', 0, '2018-02-15 13:04:58', 1),
(48, 'bugs.bunny', 'haha', 'norrenlanchpaul.ongcal', 0, '2018-02-15 13:04:58', 1),
(49, 'bugs.bunny', 'haha', 'jonglen.pitas', 0, '2018-02-15 13:04:58', 1),
(50, 'bugs.bunny', 'haha', 'gerald.tan', 0, '2018-02-15 13:04:58', 1),
(51, 'bugs.bunny', 'haha', 'generheybrayan.tanupan', 0, '2018-02-15 13:04:59', 1),
(52, 'bugs.bunny', 'haha', 'rosellemay.yamson', 0, '2018-02-15 13:04:59', 1),
(53, 'bugs.bunny', 'haha', 'a.a', 0, '2018-02-15 13:04:59', 1),
(54, 'bugs.bunny', 'haha', 'jodolfh.abarquez', 0, '2018-02-15 13:04:59', 1),
(55, 'bugs.bunny', 'haha', 'jhyllanthony.alob', 0, '2018-02-15 13:04:59', 1),
(56, 'bugs.bunny', 'haha', 'karren.ardon', 0, '2018-02-15 13:04:59', 1),
(57, 'bugs.bunny', 'haha', 'welsey.birao', 0, '2018-02-15 13:04:59', 1),
(58, 'bugs.bunny', 'haha', 'aladdin.bravo', 0, '2018-02-15 13:04:59', 1),
(59, 'bugs.bunny', 'haha', 'cliffadrian.buque', 0, '2018-02-15 13:04:59', 1),
(60, 'bugs.bunny', 'haha', 'gaspar.caraballe', 0, '2018-02-15 13:04:59', 1),
(61, 'bugs.bunny', 'haha', 'meldred.carrigo', 0, '2018-02-15 13:04:59', 1),
(62, 'bugs.bunny', 'haha', 'chiangshan.chang', 0, '2018-02-15 13:04:59', 1),
(63, 'bugs.bunny', 'haha', 'seciniojr..colipano', 0, '2018-02-15 13:04:59', 1),
(64, 'bugs.bunny', 'haha', 'klydekz.gonzales', 0, '2018-02-15 13:04:59', 1),
(65, 'bugs.bunny', 'haha', 'arbey.jamili', 0, '2018-02-15 13:04:59', 1),
(66, 'bugs.bunny', 'haha', 'jayson.librando', 0, '2018-02-15 13:04:59', 1),
(67, 'bugs.bunny', 'haha', 'zienel.magsayo', 0, '2018-02-15 13:04:59', 1),
(68, 'bugs.bunny', 'haha', 'markterence.mallari', 0, '2018-02-15 13:04:59', 1),
(69, 'bugs.bunny', 'haha', 'daryljames.medillo', 0, '2018-02-15 13:04:59', 1),
(70, 'bugs.bunny', 'haha', 'junrey.natad', 0, '2018-02-15 13:04:59', 1),
(71, 'bugs.bunny', 'haha', 'leopatrick.navarro', 0, '2018-02-15 13:04:59', 1),
(72, 'bugs.bunny', 'haha', 'josevirgil.orais', 0, '2018-02-15 13:04:59', 1),
(73, 'bugs.bunny', 'haha', 'haroldjohn.panugaling', 0, '2018-02-15 13:04:59', 1),
(74, 'bugs.bunny', 'haha', 'karoljohn.paras', 0, '2018-02-15 13:04:59', 1),
(75, 'bugs.bunny', 'haha', 'retchel.rumaguera', 0, '2018-02-15 13:05:00', 1),
(76, 'bugs.bunny', 'haha', 'rexxordee.uy', 0, '2018-02-15 13:05:00', 1),
(77, 'bugs.bunny', 'haha', 'johnluther.valendez', 0, '2018-02-15 13:05:00', 1),
(78, 'bugs.bunny', 'haha', 'princeton.valera', 0, '2018-02-15 13:05:00', 1),
(79, 'bugs.bunny', 'haha', 'walter.ybanez', 0, '2018-02-15 13:05:00', 1),
(80, 'bugs.bunny', 'haha', 'lysander.zulueta', 0, '2018-02-15 13:05:00', 1);

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
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `moa` tinyint(1) DEFAULT '0',
  `designated_person` varchar(255) NOT NULL,
  `watchlisted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `address`, `contact_no`, `moa`, `designated_person`, `watchlisted`) VALUES
(1, 'Stark Industries', '', '', 0, '', 1),
(2, 'Star Labs', '', '', 0, '', 0),
(3, 'xxxs', '', '', 0, '', 0);

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
(1, 'grace.ganzo', 'Qwee', 'duffy.duck', 'Asd', 223323, 23234, 'qweqasdwads', 'Assembly,Manufacturing,Maintenance,Service/Utility,Research and Development', 'Less than 50', 0, 'ojt_one', 1),
(2, 'gerald.tan', 'Stark Industries', '', 'qweqwe', 123132, 123123, 'qweqwe', 'Research and Development,Service/Utility', 'More than 100', 0, 'ojt_one', 0),
(3, 'edser.caballero', 'Stark Industries', '', 'sd', 212, 2121, 'ds', 'Assembly,Service/Utility', 'From 50 to 100', 0, 'ojt_one', 0),
(4, 'karren.ardon', 'gds', 'duffy.duck', 'ds', 21, 21, 'dsa', 'Assembly,Service/Utility', 'From 50 to 100', 0, 'ojt_two', 0),
(5, 'grace.ganzo', 'Qwee', 'duffy.duck', 'Asd', 223323, 23234, 'qweqasdwads', 'Assembly,Manufacturing,Maintenance,Service/Utility,Research and Development', 'Less than 50', 0, 'ojt_two', 0);

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
(2, 'gerald.tan', 'bondjames1212@gmail.com', '2ba649a11e9d026d642bdbb36277c5d8', 1),
(3, 'edser.caballero', 'gtorregosa@gmail.com', '64cd5bced3dc054fc843af5da2332dbb', 0),
(4, 'karren.ardon', 'dsdsaa@gmail.com', '055ef0b5dedf8a7061dfd7ffc32348c1', 0);

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
(2, 'gerald.tan', 'qweqwe', 'qweqwe', 123123, 'qweqweqweqwe'),
(3, 'edser.caballero', 'dsa', 'das', 21, 'd'),
(4, 'karren.ardon', 'sda', 'dsa', 21, 'sd');

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
(2, 'gerald.tan', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 123123),
(3, 'edser.caballero', 'dsa', 'sad', 'dsa', 'dsadas', 'das', 23232),
(4, 'karren.ardon', '21', '21', 'dsa', 'ddas', 'das', 2121);

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

--
-- Dumping data for table `final_evaluation`
--

INSERT INTO `final_evaluation` (`id`, `username`, `supervisor_username`, `name`, `age`, `sex`, `course`, `major`, `school`, `city`, `permanent`, `required`, `company`, `division`, `field`, `dates_from`, `dates_to`, `total_hours`, `quality`, `quality2`, `dependability`, `attendance`, `cooperation`, `judgement`, `personality`, `recommend`, `total`, `allow_view`, `ojt_program`) VALUES
(1, 'grace.ganzo', 'duffy.duck', 'GRACE  L.   GANZO', 20, 'Female ', 'BSIT', 'ds', 'Cebu Institute of Technology-University', 'Qwee', 'QweQwe', '200', 'Qwee', 'ds', 'ds', '23 February, 2018', '28 February, 2018', '200', '20', '20', '15', '15', '10', '10', '10', 'ds', 100, 1, 'ojt_one');

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
(1, 'grace.ganzo', '2017-01-25', '11:00:00', '18:00:00', 'Qwe', 'Qwe', 'qwe', 'saasdasdqweqweqwe', 200, 1, 'duffy.duck', 'ojt_one');

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

--
-- Dumping data for table `midterm_evaluation`
--

INSERT INTO `midterm_evaluation` (`id`, `username`, `supervisor_username`, `enthusiasm`, `cooperation`, `adaptability`, `industriousness`, `responsibility`, `attentiveness`, `grooming`, `attendance`, `quality`, `quantity`, `dependability`, `comprehension`, `safety`, `waste`, `remarks`, `allow_view`, `total`, `ojt_program`) VALUES
(1, 'grace.ganzo', 'duffy.duck', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'd', 1, 40, 'ojt_one');

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
(8, 'marcelinoiii.fuentes', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(9, 'grace.ganzo', 500, 200, 300, 200, 0, 2, 2, 0, 1, 0, 1, 0, 'COMPLETED', '', 'duffy.duck', ''),
(10, 'windelynjoy.jopia', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(11, 'ronnelo.mernilo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(12, 'cedric.nebria', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(13, 'norrenlanchpaul.ongcal', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(14, 'jonglen.pitas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(15, 'gerald.tan', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(16, 'generheybrayan.tanupan', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(17, 'rosellemay.yamson', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(18, 'a.a', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(19, 'jodolfh.abarquez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(20, 'jhyllanthony.alob', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(21, 'karren.ardon', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', 'duffy.duck', ''),
(22, 'welsey.birao', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(23, 'aladdin.bravo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(24, 'cliffadrian.buque', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(25, 'gaspar.caraballe', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(26, 'meldred.carrigo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(27, 'chiangshan.chang', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(28, 'seciniojr..colipano', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(29, 'klydekz.gonzales', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(30, 'arbey.jamili', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(31, 'jayson.librando', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(32, 'zienel.magsayo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(33, 'markterence.mallari', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(34, 'daryljames.medillo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(35, 'junrey.natad', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(36, 'leopatrick.navarro', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(37, 'josevirgil.orais', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(38, 'haroldjohn.panugaling', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(39, 'karoljohn.paras', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(40, 'retchel.rumaguera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(41, 'rexxordee.uy', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(42, 'johnluther.valendez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(43, 'princeton.valera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(44, 'walter.ybanez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(45, 'lysander.zulueta', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(46, 'ganzo.grace', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', '');

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
(2, 'gerald.tan', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'GERALD', 'M. ', 'TAN', 'CCS', 'BSIT', 4, 'qweqwe', 'qweqweqw', 123123, 'bondjames1212@gmail.com', '2018-01-08', 23, 'Single', 'O-', 123, 123, '123123123', '123123123', 'Female'),
(3, 'edser.caballero', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'EDSER', 'S. ', 'CABALLERO', 'CCS', 'BSIT', 4, 'd', 'd', 121420, 'dsds@gmail.com', '2018-02-17', 0, 'Single', 'O-', 3, 3, '3', '3', 'Male'),
(4, 'karren.ardon', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'KARREN', 'V.', 'ARDON', 'CCS', 'BSIT', 4, 'sd', 'ds', 0, 'dsdsaa@gmail.com', '2018-02-10', 0, 'Married', 'O+', 2, 21, '2', '21', 'Male');

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
(10, 'assets/uploads/duffy.duck.png?dummy=bhTJPS25HY', 'assets/uploads/duffy.duck.png?dummy=bhTJPS25HY', 'Duffy Duck', 'Stark Industries', 'Duck', 'duffy.duck', '123', 'duffy.duck@gmail.com', '09326252552', 0, 0, '653b48a24620245fa001b74edae03332'),
(13, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Tasmanian Devil', 'Stark Industries', 'Devil', 'taz.devil', '123123', 'taz.devil@gmail.com', '0922726626', 0, 0, '567b80eb0736c654522b69d11e9e9b25'),
(14, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Blabal', 'xxxs', 'Fsds', 'dsds', '123456', 'gtorregosa@gmail.com', '212121', 1, 0, '8f8e3cac19bc69526d164a93e679685a');

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
(3, 'edser.caballero', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'EDSER', 'S. ', 'CABALLERO', 'BSIT', 4, '2018-2019', 0, '123', 'ojt_one', ''),
(4, 'michaeljay.caballero', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MICHAEL JAY', 'J. ', 'CABALLERO', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(5, 'carljaysun.cabaluna', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CARL JAYSUN', 'M. ', 'CABALUNA', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(6, 'dariele.cayme', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'DARIELE', 'V. ', 'CAYME', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(7, 'rosemarie.de real', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSEMARIE', 'T. ', 'DE REAL', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(8, 'marcelinoiii.fuentes', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MARCELINO III', 'C. ', 'FUENTES', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(9, 'grace.ganzo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GRACE', 'L. ', 'GANZO', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_two', ''),
(10, 'windelynjoy.jopia', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WINDELYN JOY', 'V. ', 'JOPIA', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(11, 'ronnelo.mernilo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'RONNELO', 'A. ', 'MERNILO', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(12, 'cedric.nebria', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CEDRIC', 'L. ', 'NEBRIA', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(13, 'norrenlanchpaul.ongcal', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'NORREN LANCH PAUL', 'A. ', 'ONGCAL', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(14, 'jonglen.pitas', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JON GLEN', 'U. ', 'PITAS', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(15, 'gerald.tan', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GERALD', 'M. ', 'TAN', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(16, 'generheybrayan.tanupan', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GENE RHEY BRAYAN', 'P. ', 'TANUPAN', 'BSIT', 3, '2018-2019', 0, '123456', 'ojt_one', ''),
(17, 'rosellemay.yamson', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ROSELLE MAY', 'A. ', 'YAMSON', 'BSIT', 4, '2018-2019', 0, '123456', 'ojt_one', ''),
(18, 'a.a', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'A', 'A.', 'A', 'A', 3, '2009-2010', 0, '123456', 'ojt_one', ''),
(19, 'jodolfh.abarquez', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JODOLFH', 'N.', 'ABARQUEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(20, 'jhyllanthony.alob', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JHYLL ANTHONY', 'E.', 'ALOB', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(21, 'karren.ardon', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KARREN', 'V.', 'ARDON', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(22, 'welsey.birao', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WELSEY', 'C.', 'BIRAO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(23, 'aladdin.bravo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ALADDIN', 'Y.', 'BRAVO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(24, 'cliffadrian.buque', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CLIFF ADRIAN', 'D.', 'BUQUE', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(25, 'gaspar.caraballe', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'GASPAR', 'M.', 'CARABALLE', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(26, 'meldred.carrigo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MELDRED', 'C.', 'CARRIGO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(27, 'chiangshan.chang', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'CHIANG SHAN', 'Y.', 'CHANG', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(28, 'seciniojr..colipano', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'SECINIO JR.', 'H.', 'COLIPANO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(29, 'klydekz.gonzales', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KLYDEKZ', 'C.', 'GONZALES', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(30, 'arbey.jamili', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ARBEY', 'C.', 'JAMILI', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(31, 'jayson.librando', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JAYSON', 'C.', 'LIBRANDO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(32, 'zienel.magsayo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'ZIENEL', 'B.', 'MAGSAYO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(33, 'markterence.mallari', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'MARK TERENCE', 'M.', 'MALLARI', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(34, 'daryljames.medillo', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'DARYL JAMES', 'A.', 'MEDILLO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(35, 'junrey.natad', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JUNREY', 'L.', 'NATAD', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(36, 'leopatrick.navarro', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'LEO PATRICK', 'D.', 'NAVARRO', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(37, 'josevirgil.orais', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JOSE VIRGIL', 'N.', 'ORAIS', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(38, 'haroldjohn.panugaling', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'HAROLD JOHN', 'V.', 'PANUGALING', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(39, 'karoljohn.paras', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'KAROL JOHN', 'B.', 'PARAS', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(40, 'retchel.rumaguera', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'RETCHEL', 'L.', 'RUMAGUERA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(41, 'rexxordee.uy', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'REXXOR DEE', 'T.', 'UY', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(42, 'johnluther.valendez', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'JOHN LUTHER', 'S.', 'VALENDEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(43, 'princeton.valera', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'PRINCETON', 'B.', 'VALERA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(44, 'walter.ybanez', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'WALTER', 'D.', 'YBANEZ', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
(45, 'lysander.zulueta', 'bugs.bunny', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'LYSANDER', 'B.', 'ZULUETA', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', '');

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
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`id`, `company_name`, `company_id`) VALUES
(1, 'Dofensmirtfz Evil Incorporated', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emergency_details`
--
ALTER TABLE `emergency_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ojt_records`
--
ALTER TABLE `ojt_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
