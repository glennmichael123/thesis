-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 18, 2017 at 04:26 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7
=======
-- Generation Time: Dec 19, 2017 at 11:34 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf

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

<<<<<<< HEAD
INSERT INTO `admin` (`id`, `name`, `id_number`, `password`, `college`, `email`) VALUES
(1, 'admin', 'admin', '123456', '', '');
=======
INSERT INTO `admin` (`id`, `name`, `id_number`, `password`, `email`, `college`) VALUES
(1, 'Larmie Feliscuzo', 'admin', '123456', 'larmie.feliscuzo@gmail.com', 'CCS');
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf

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
(1, 'admin', 'Ours is the fury :\")', 'peter.into', 1, '2017-12-13 05:52:02', 1),
(2, 'admin', 'Ours is the fury :\")', 'brian.repuesto', 0, '2017-12-13 05:52:02', 1),
(3, 'admin', 'Ours is the fury :\")', 'kylldave.angcon', 0, '2017-12-13 05:52:02', 1),
(13, 'admin', 'Winter is coming huehue :))', 'peter.into', 1, '2017-12-13 10:07:42', 2),
(14, 'admin', 'Winter is coming huehue :))', 'brian.repuesto', 0, '2017-12-13 10:07:42', 2),
(15, 'admin', 'Winter is coming huehue :))', 'kylldave.angcon', 0, '2017-12-13 10:07:42', 2),
(22, 'admin', 'What is dead may never die', 'peter.into', 1, '2017-12-13 10:58:39', 3),
(23, 'admin', 'What is dead may never die', 'brian.repuesto', 0, '2017-12-13 10:58:39', 3),
(24, 'admin', 'What is dead may never die', 'kylldave.angcon', 0, '2017-12-13 10:58:39', 3);

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

<<<<<<< HEAD
--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `log_id`, `content`, `comment_time`, `supervisor_id`) VALUES
(1, 1, 'adik ka dong?', '2017-12-02 03:51:07', 'stannis.baratheon'),
(3, 2, 'Tarong ngara haps, wakay snack ron :\")', '2017-12-06 11:15:21', 'stannis.baratheon');

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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
  `current_ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `id_number`, `company_name`, `supervisor_id`, `company_address`, `contact_number`, `fax_number`, `product_lines`, `company_classification`, `number_of_employees`, `watchlisted`) VALUES
(1, 'peter.into', 'Star Labs', 'stannis.baratheon', 'Central City', 777777777, 66666, 'qqweqwe', 'Assembly,Service/Utility,Qweee :))', 'Less than 50', 0),
(2, 'brian.repuesto', 'Stark Industries', 'stannis.baratheon', 'Jw.org', 123456, 123123, 'jw,org is heart', 'Assembly,Service/Utility', 'Less than 50', 1),
(3, 'kylldave.angcon', 'qweqe', '', 'qweq', 12312, 12312, 'qweqwe', 'Assembly,Service/Utility', 'From 50 to 100', 0),
(5, 'jaime.lannister', 'qwe', '', 'qwe', 123, 123, 'qwe', 'Service/Utility,Assembly,Research and Development,IT Related', 'Less than 50', 0);

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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

<<<<<<< HEAD
--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `id_number`, `email_address`, `hash`, `status`) VALUES
(1, 'peter.into', 'bondjames1212@gmail.com', '2ba649a11e9d026d642bdbb36277c5d8', 1),
(2, 'admin', 'wa@wa.com', '3e4fbc62b941361b15a34c40f50c47cc', 0),
(3, 'brian.repuesto', 'repuestobrian@gmail.com', '31e24831a88bfce979ff184a8cf741db', 1),
(4, 'admin', 'lagum@gmail.com', 'e0592da3192d3c0e746af57193c01b6c', 0),
(5, 'admin', 'stannis.baratheon@gmail.com', '8d07098e775d29579b692da2062742fd', 0),
(6, 'admin', 'stannis.baratheon@gmail.com', '8d07098e775d29579b692da2062742fd', 0),
(7, 'admin', 'secret@gmail.com', 'f97a65a54e38b3f402a5dacc6c0be623', 0),
(8, 'admin', 'asdasd@gmail.com', '5811b64ffd2fa7116580dafa02d9bb7b', 0),
(9, 'admin', 'asdasd@gmail.com', '5811b64ffd2fa7116580dafa02d9bb7b', 0),
(10, 'admin', 'admin@gmail.com', '75d23af433e0cea4c0e45a56dba18b30', 0),
(11, 'admin', '123123@gmail.com', 'f208034c35f9df6250fe7acb40892bd4', 0),
(12, 'admin', 'admin@gmail.com', '75d23af433e0cea4c0e45a56dba18b30', 0),
(13, 'admin', 'renly.baratheon@gmail.com', '4c4f4c674e653086ae318fe896a69051', 0),
(14, 'kylldave.angcon', 'qwqe@gmail.com', '91f41b4ba0b63b6cd65d2f3fafd8c270', 0),
(15, 'jaime.lannister', 'jaime@gmail.com', 'a6fa2ff49c6efcee56d5fc943ff6126e', 0),
(16, 'jaime.lannister', 'jaime@gmail.com', 'a6fa2ff49c6efcee56d5fc943ff6126e', 0);

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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

<<<<<<< HEAD
--
-- Dumping data for table `emergency_details`
--

INSERT INTO `emergency_details` (`id`, `id_number`, `name`, `relationship`, `contact_number`, `address`) VALUES
(1, 'peter.into', 'Zxczxc', 'Qwee', 4150250, 'Don Gervacio Quijada Street, Guadalupe'),
(2, 'brian.repuesto', 'Samok', 'Oy', 123123, 'Naga'),
(3, 'kylldave.angcon', 'qweqwe', 'ewqeqwe', 123123, 'qweqwe'),
(4, 'jaime.lannister', 'qweqwe', 'eqweqwe', 123123, 'asd'),
(5, 'jaime.lannister', 'qwe', 'qwe', 123, 'qwe');

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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

<<<<<<< HEAD
--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`id`, `id_number`, `fathers_name`, `fathers_occupation`, `mothers_name`, `mothers_occupation`, `parents_address`, `contact_number`) VALUES
(1, 'peter.into', 'Qweqwe', 'Qweee', 'Asdasd', 'Asdddd', 'Don Gervacio Quijada Street, Guadalupe', 4150250),
(2, 'brian.repuesto', 'Naga', 'Cebu', 'Naga', 'Cebu', 'City', 123456),
(3, 'kylldave.angcon', 'qweqwe', 'ewqeqw', 'qweqwe', 'eqweqwe', 'qweqwe', 123123),
(5, 'jaime.lannister', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 123123);

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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
  `current_ojt_program` varchar(255) NOT NULL
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
  `current_ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_number`, `date`, `time_in`, `time_out`, `division`, `department`, `designation`, `log_content`, `hours_rendered`, `verified`, `supervisor_id`) VALUES
(1, 'peter.into', '2017-12-02', '08:00:00', '17:00:00', 'Central', 'WebDev', 'Secret ra uiest', 'Wa bitaw koy gibuhat noy, huehue. Nag ilis kog tubig ganiha, niana sha, sir pwede pa help sa water :\'> ', 8, 1, 'stannis.baratheon'),
(2, 'peter.into', '2017-12-02', '08:00:00', '17:00:00', 'Central', 'Central', 'Secret ra uiest', 'Wa bitaw koy gibuhat noy, huehue. Nag ilis kog tubig ganiha, niana sha, sir pwede pa help sa water', 50, 1, 'stannis.baratheon'),
(3, 'brian.repuesto', '2017-12-02', '08:00:00', '17:00:00', 'Jw', 'jw', 'jw', 'hehehehe <3', 200, 1, 'stannis.baratheon'),
(4, 'peter.into', '2017-12-09', '08:00:00', '17:00:00', 'Addition', 'Department of Education', 'President', 'Secret ra noy', 8, 0, 'stannis.baratheon'),
(5, 'peter.into', '2017-12-14', '08:00:00', '17:00:00', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqweqwe', 200, 1, 'stannis.baratheon');

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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
  `current_ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `midterm_evaluation`
--

INSERT INTO `midterm_evaluation` (`id`, `username`, `supervisor_username`, `enthusiasm`, `cooperation`, `adaptability`, `industriousness`, `responsibility`, `attentiveness`, `grooming`, `attendance`, `quality`, `quantity`, `dependability`, `comprehension`, `safety`, `waste`, `remarks`, `allow_view`, `total`) VALUES
(10, 'peter.into', 'stannis.baratheon', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Ugh yahaya dzae', 0, 100),
(11, 'brian.repuesto', 'stannis.baratheon', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'qweqwe', 1, 100);

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
-- --------------------------------------------------------

--
-- Table structure for table `ojt_records`
--

CREATE TABLE `ojt_records` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `total_hours` int(11) NOT NULL,
  `ojtone_required` int(11) NOT NULL,
  `ojttwo_required` int(11) NOT NULL,
  `ojtone_rendered` int(11) NOT NULL,
  `ojttwo_rendered` int(11) NOT NULL,
  `total_evaluations` int(11) NOT NULL DEFAULT '2',
  `ojtone_current_evaluations` int(11) NOT NULL DEFAULT '0',
  `ojttwo_current_evaluations` int(11) NOT NULL,
  `logs` int(11) NOT NULL DEFAULT '0',
  `logs_verified` int(11) NOT NULL DEFAULT '0',
<<<<<<< HEAD
  `ojtone_status` varchar(50) NOT NULL DEFAULT 'ON-GOING',
  `ojttwo_status` varchar(50) NOT NULL DEFAULT 'ON-GOING',
  `supervisor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojt_records`
--

INSERT INTO `ojt_records` (`id`, `id_number`, `total_hours`, `ojtone_required`, `ojttwo_required`, `ojtone_rendered`, `ojttwo_rendered`, `total_evaluations`, `ojtone_current_evaluations`, `ojttwo_current_evaluations`, `logs`, `logs_verified`, `ojtone_status`, `ojttwo_status`, `supervisor_id`) VALUES
(1, 'peter.into', 500, 200, 300, 258, 0, 2, 2, 0, 4, 3, 'COMPLETED', 'ON-GOING', 'stannis.baratheon'),
(2, 'brian.repuesto', 500, 200, 300, 200, 0, 2, 1, 0, 1, 1, 'ON-GOING', 'ON-GOING', 'stannis.baratheon'),
(9, 'kylldave.angcon', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(10, 'jaime.lannister', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(11, 'bugs.bunny', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(12, 'mavis.vermillion', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', ''),
(13, 'urdu.forest', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 'ON-GOING', 'ON-GOING', '');

=======
  `supervisor_id` varchar(255) NOT NULL,
  `ojtone_status` varchar(255) NOT NULL DEFAULT 'ON-GOING',
  `ojttwo_status` varchar(255) NOT NULL DEFAULT 'ON-GOING',
  `current_ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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

<<<<<<< HEAD
--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `id_number`, `image_id`, `first_name`, `middle_initial`, `last_name`, `college`, `course`, `year`, `present_address`, `permanent_address`, `contact_number`, `email_address`, `date_of_birth`, `age`, `marital_status`, `blood_type`, `weight`, `height`, `religion`, `citizenship`, `sex`) VALUES
(1, 'peter.into', 'assets/uploads/peter.into.JPG?dummy=BcmDeYPhbM', 'Peter', 'I.', 'Into', 'CCS', 'BSCS', 1, 'Don Gervacio Quijada Street, Guadalupe', 'Modesta Street', 4150250, 'bondjames1212@gmail.com', '1997-02-02', 20, 'Separated', 'AB+', 50, 170, 'Catholic :>', 'Senior', ''),
(2, 'brian.repuesto', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Brian', 'P.', 'Repuesto', 'CCS', 'BSIT', 1, 'Naga', 'City', 12345, 'repuestobrian@gmail.com', '1998-01-01', 18, 'Single', 'AB+', 80, 180, 'Jehova', 'Concerned', ''),
(3, 'kylldave.angcon', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Kyll Dave', 'A.', 'Angcon', 'CCS', 'BSIT', 1, 'qweqwe', 'qweqwe', 1231, 'qwqe@gmail.com', '2017-12-14', 23, 'Single', 'O-', 123, 123, 'qweqwe', '123123', 'Male'),
(5, 'jaime.lannister', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Jaime', 'K.', 'Lannister', 'CCS', 'BSIT', 4, 'qwe', 'qwe', 123, 'jaime@gmail.com', '1998-01-02', 23, 'Separated', 'O-', 123, 123, 'qwe', 'qwe', 'Male');

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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

<<<<<<< HEAD
--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `image_id`, `imageDisplayToChange`, `name`, `company_name`, `designation`, `id_number`, `password`, `email`) VALUES
(1, 'assets/uploads/stannis.baratheon.JPG?dummy=sc9Orq1qGQ', 'assets/uploads/stannis.baratheon.JPG?dummy=sc9Orq1qGQ', 'Stannis Baratheon', 'Star Labs', 'Atekk', 'stannis.baratheon', '123456', 'wa@wa.com'),
(2, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Pete', 'Star Labs', 'Lags', 'lags', '123456', 'lagum@gmail.com'),
(6, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Renly Baratheon', 'Star Labs', 'King', 'renly.baratheon', '123456', 'renly.baratheon@gmail.com');

=======
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

<<<<<<< HEAD
INSERT INTO `users` (`id`, `id_number`, `admin_id`, `user_image`, `first_name`, `middle_initial`, `last_name`, `course`, `year`, `school_year`, `account_type`, `password`, `status`) VALUES
(1, 'peter.into', 'admin', 'assets/uploads/peter.into.JPG?dummy=BcmDeYPhbM', 'Peter', 'I.', 'Into', 'BSCS', 4, '2017-2018', 0, '123456', ''),
(2, 'brian.repuesto', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Brian', 'P.', 'Repuesto', 'BSIT', 4, '2017-2018', 0, '123456', ''),
(9, 'kylldave.angcon', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Kyll Dave', 'A.', 'Angcon', 'BSIT', 1, '2016-2017', 0, '123456', ''),
(10, 'jaime.lannister', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Jaime', 'K.', 'Lannister', 'BSIT', 4, '2016-2017', 0, '123456', ''),
(11, 'bugs.bunny', 'admin', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Bugs', 'D.', 'Bunny', 'BSIT', 4, '2018-2019', 0, '123456', ''),
(12, 'mavis.vermillion', 'admin2', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Mavis', 'F', 'Vermillion', 'BSIT', 4, '2020-2021', 0, '123456', ''),
(13, 'urdu.forest', 'admin2', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'Urdu', 'F', 'Forest', 'BSIT', 4, '2020-2021', 0, '123456', '');
=======
INSERT INTO `users` (`id`, `id_number`, `user_image`, `first_name`, `middle_initial`, `last_name`, `course`, `year`, `school_year`, `account_type`, `password`, `status`) VALUES
(1, 'glenn.torregosa', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'glenn', 'c', 'torregosa', '', 0, '', 0, NULL, ''),
(2, '', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '', '', '', '', 0, '', 0, '123456', '');
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf

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
(1, 'Grimmiore Heart', NULL),
(3, 'Stark Industries', NULL);

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
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `emergency_details`
--
ALTER TABLE `emergency_details`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `final_evaluation`
--
ALTER TABLE `final_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
<<<<<<< HEAD
=======

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `ojt_records`
--
ALTER TABLE `ojt_records`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf
--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
>>>>>>> d9dd175e4fecddb741dbd90849457bc5e8b569bf

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
