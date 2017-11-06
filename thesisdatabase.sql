-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 02:20 AM
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
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `id_number`, `password`, `email`) VALUES
(1, 'James Bond', '007', '123456', 'bondjames1212@gmail.com'),
(2, 'Glenn Michael Torregosa', '14-2649-276', '123456', 'gtorregosa@gmail.com'),
(3, 'Madison Ivy', '6969', '123456', 'madisonIvy@gmail.com'),
(4, 'Laxus Dreyar', '005', '123456', 'laxus.dreyar@gmail.com'),
(9, 'Maria Ozawa', '1010', '123456', 'maria.ozawa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `content`, `username`, `status`, `date_posted`) VALUES
(1, 'the place feels good\n', '14-2649-276', 1, '2017-11-05 09:24:26'),
(2, 'the place feels good\n', '123', 1, '2017-11-05 09:22:51'),
(3, 'the place feels good\n', '1234', 0, '2017-11-05 09:22:51'),
(4, 'Deadline for OJT Requirements: November 11, 2017\n1. NLO Slip\n2. Final Evaluation in a sealed envelope from the company represenatative\n3. Answered Final Google Form (see post below - make sure you copied your Digital Portfolio Link from the address bar)\n4. Confirmation Letter\n5. Waiver\n6. Digital Portfolio\n7. Logbook\n8. Final Admission Slip\n9. Certificate of Completion (with indicated no. of hours rendered)\nPlace the documents in a clear long envelope.\nNOTE: If you can\'t pass it on/before November 11, 2017, you will get INC.', '14-2649-276', 1, '2017-11-05 09:30:16'),
(5, 'Deadline for OJT Requirements: November 11, 2017\n1. NLO Slip\n2. Final Evaluation in a sealed envelope from the company represenatative\n3. Answered Final Google Form (see post below - make sure you copied your Digital Portfolio Link from the address bar)\n4. Confirmation Letter\n5. Waiver\n6. Digital Portfolio\n7. Logbook\n8. Final Admission Slip\n9. Certificate of Completion (with indicated no. of hours rendered)\nPlace the documents in a clear long envelope.\nNOTE: If you can\'t pass it on/before November 11, 2017, you will get INC.', '123', 1, '2017-11-05 09:30:16'),
(6, 'Deadline for OJT Requirements: November 11, 2017\n1. NLO Slip\n2. Final Evaluation in a sealed envelope from the company represenatative\n3. Answered Final Google Form (see post below - make sure you copied your Digital Portfolio Link from the address bar)\n4. Confirmation Letter\n5. Waiver\n6. Digital Portfolio\n7. Logbook\n8. Final Admission Slip\n9. Certificate of Completion (with indicated no. of hours rendered)\nPlace the documents in a clear long envelope.\nNOTE: If you can\'t pass it on/before November 11, 2017, you will get INC.', '1234', 0, '2017-11-05 09:30:17'),
(7, 'welcome comradee', '14-2649-276', 1, '2017-11-05 10:18:43'),
(8, 'welcome comradee', '123', 0, '2017-11-05 10:18:43'),
(9, 'welcome comradee', '1234', 0, '2017-11-05 10:18:43'),
(10, 'To all students enrolled this semester\nMidterm Requirements:\n1. If you have rendered at least 50 hours, ask your direct supervisor to evaluate you using the last page of your OJT logbook and pass the photocopy at the CCS Office\n2. Fill-in the form below\nMidterm Form\ndocs.google.com', '14-2649-276', 1, '2017-11-05 10:29:55'),
(11, 'To all students enrolled this semester\nMidterm Requirements:\n1. If you have rendered at least 50 hours, ask your direct supervisor to evaluate you using the last page of your OJT logbook and pass the photocopy at the CCS Office\n2. Fill-in the form below\nMidterm Form\ndocs.google.com', '123', 0, '2017-11-05 10:29:55'),
(12, 'To all students enrolled this semester\nMidterm Requirements:\n1. If you have rendered at least 50 hours, ask your direct supervisor to evaluate you using the last page of your OJT logbook and pass the photocopy at the CCS Office\n2. Fill-in the form below\nMidterm Form\ndocs.google.com', '1234', 0, '2017-11-05 10:29:55'),
(13, 'Latest entries:\nBaraquil\nPerez\nMonteclaro\nSala\nAbarquez\nCabili\nOnanad\nWong\nRemonde\nAbaya\nYakit\nPabas\nTecson\nCantero\nPilonggo\nAdlawan\nCañada\nPepito\nCansancio\nMartus\nCabarrubias', '14-2649-276', 1, '2017-11-05 10:32:52'),
(14, 'Latest entries:\nBaraquil\nPerez\nMonteclaro\nSala\nAbarquez\nCabili\nOnanad\nWong\nRemonde\nAbaya\nYakit\nPabas\nTecson\nCantero\nPilonggo\nAdlawan\nCañada\nPepito\nCansancio\nMartus\nCabarrubias', '123', 0, '2017-11-05 10:32:52'),
(15, 'Latest entries:\nBaraquil\nPerez\nMonteclaro\nSala\nAbarquez\nCabili\nOnanad\nWong\nRemonde\nAbaya\nYakit\nPabas\nTecson\nCantero\nPilonggo\nAdlawan\nCañada\nPepito\nCansancio\nMartus\nCabarrubias', '1234', 0, '2017-11-05 10:32:52');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `log_id`, `content`, `comment_time`, `supervisor_id`) VALUES
(4, 22, 'sugoi\n', '2017-11-02 02:27:59', '14-111'),
(5, 28, 'wa man moy hands oy\n', '2017-11-03 08:12:23', '009'),
(12, 35, 'hahaha', '2017-11-05 12:36:34', '14-111');

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
  `watchlisted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `id_number`, `company_name`, `supervisor_id`, `company_address`, `contact_number`, `fax_number`, `product_lines`, `company_classification`, `number_of_employees`, `watchlisted`) VALUES
(1, '14-2649-276', 'nettrac', '14-111', 'lagtang', 9211, 0, 'software', 'assembly,manufacturing,maintenance,,,research,,', 'From 50 to 100', 0),
(2, '123', 'innosoft', '009', 'lagtang', 9211, 0, 'software', 'assembly,manufacturing,maintenance,,,research,,', 'From 50 to 100', 0);

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
(1, '14-2649-276', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 0),
(2, '14-2649-276', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 0),
(3, '14-2649-276', 'bondjames1212@gmail.com', '2ba649a11e9d026d642bdbb36277c5d8', 0),
(4, '14-2649-276', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 0),
(5, '14-2649-276', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 0),
(6, '14-2649-276', 'bondjames1212@gmail.com', '2ba649a11e9d026d642bdbb36277c5d8', 0),
(7, '14-2649-276', 'madisonIvy@gmail.com', '5962636683d3c7576548cc41c196ddee', 0),
(8, '14-2649-276', 'mouse.bosston@gmail.com', '1192f4a403ffc2aa710d2db77c32636e', 0),
(9, '14-2649-276', '123456', 'e10adc3949ba59abbe56e057f20f883e', 0),
(10, '14-2649-276', 'maria.ozawa@gmail.com', '2d368ac59dacd2ab27d48750d2dd13b7', 0),
(11, '14-2649-276', 'madisonIvy@gmail.com', '5962636683d3c7576548cc41c196ddee', 0),
(12, '14-2649-276', 'madisonIvy@gmail.com', '5962636683d3c7576548cc41c196ddee', 0),
(13, '14-2649-276', 'maria.ozawa@gmail.com', '2d368ac59dacd2ab27d48750d2dd13b7', 0),
(14, '14-2649-276', 'bondjames1212@gmail.coms', '950c27e622a5779d8fbbfdb17eb4acaa', 0),
(15, '14-2649-276', 'barry.allen@gmail.com', '7e563b7f4fd391e97f6fcf42ec669988', 0);

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
(1, '14-2649-276', 'Glenda', 'Guardian', 9212, 'cebu');

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
(1, '14-2649-276', 'father ', 'father occu ', 'mother ', 'mother occu', 'cebu', 921212);

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
  `supervisor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_number`, `date`, `time_in`, `time_out`, `division`, `department`, `designation`, `log_content`, `hours_rendered`, `verified`, `supervisor_id`) VALUES
(13, '14-2649-276', '2017-09-25', '23:59:00', '12:55:00', 'aa', 'aa', 'cc', 'aab', 8, 1, '14-111'),
(18, '14-2649-276', '2017-09-25', '08:00:00', '17:00:00', 'dd', 'dd', 'dd', 'aaahh', 8, 1, '14-111'),
(20, '1234', '2017-09-25', '17:00:00', '20:00:00', 'y', 'y', 'y', 'y', 8, 1, '14-111'),
(21, '14-2649-276', '2017-09-30', '08:00:00', '17:00:00', 'post', 'post', 'post', 'post', 5, 1, '14-111'),
(22, '14-2649-276', '2017-10-22', '08:00:00', '17:00:00', 'lala', 'lala', 'lala', 'lala', 8, 1, '14-111'),
(24, '14-2649-276', '2017-10-22', '08:00:00', '17:00:00', 'lala2', 'lala2', 'lala2', 'lala2', 8, 1, '14-111'),
(25, '14-2649-276', '2017-10-22', '08:00:00', '17:00:00', 's', 's', 's', 'asasas', 8, 1, '14-111'),
(26, '123', '2017-10-22', '08:00:00', '17:00:00', 'a', 'a', 'a', 'a', 8, 1, '14-111'),
(28, '14-2649-276', '2017-10-22', '08:00:00', '17:00:00', 's', 's', 's', 'asasassasss22222', 8, 1, '009'),
(29, '14-2649-276', '2017-10-22', '08:00:00', '17:00:00', 's', 's', 's', 'asasassasss222', 8, 1, '14-111'),
(31, '123', '2017-11-02', '12:59:00', '12:59:00', 'a', 'a', 'a', 'lagum ko kaayo', 1, 0, '14-111'),
(32, '14-2649-276', '2017-11-03', '12:59:00', '12:59:00', 'AA', 'AA', 'AA', 'HAHAHAHAHAHAHAHAH BOBO KA BA?\n', 1, 1, '14-111'),
(35, '14-2649-276', '2017-11-05', '12:59:00', '12:59:00', 'AA', 'AA', 'AA', 'To all students enrolled this semester\nMidterm Requirements:\n1. If you have rendered at least 50 hours, ask your direct supervisor to evaluate you using the last page of your OJT logbook and pass the photocopy at the CCS Office\n2. Fill-in the form below\nMidterm Form\ndocs.google.com', 1, 0, '14-111');

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
  `allow_value` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midterm_evaluation`
--

INSERT INTO `midterm_evaluation` (`id`, `username`, `supervisor_username`, `enthusiasm`, `cooperation`, `adaptability`, `industriousness`, `responsibility`, `attentiveness`, `grooming`, `attendance`, `quality`, `quantity`, `dependability`, `comprehension`, `safety`, `waste`, `remarks`, `allow_value`, `total`) VALUES
(10, '14-2649-276', '14-111', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '444', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ojt_records`
--

CREATE TABLE `ojt_records` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `total_hours` int(11) NOT NULL,
  `rendered_hours` int(11) NOT NULL,
  `total_evaluations` int(11) NOT NULL DEFAULT '2',
  `current_evaluations` int(11) NOT NULL DEFAULT '0',
  `logs` int(11) NOT NULL DEFAULT '0',
  `logs_verified` int(11) NOT NULL DEFAULT '0',
  `supervisor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojt_records`
--

INSERT INTO `ojt_records` (`id`, `id_number`, `total_hours`, `rendered_hours`, `total_evaluations`, `current_evaluations`, `logs`, `logs_verified`, `supervisor_id`) VALUES
(1, '14-2649-276', 200, 62, 2, 1, 10, 9, '14-111'),
(2, '123', 200, 8, 2, 0, 2, 1, '14-111'),
(3, '1234', 200, 8, 2, 0, 1, 1, '14-111');

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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `id_number`, `image_id`, `first_name`, `middle_initial`, `last_name`, `college`, `course`, `year`, `present_address`, `permanent_address`, `contact_number`, `email_address`, `date_of_birth`, `age`, `marital_status`, `blood_type`, `weight`, `height`, `religion`, `citizenship`, `status`) VALUES
(1, '14-2649-276', 'assets/uploads/14-2649-276.jpg?dummy=hZ6BFPMIX9', 'Glenn', 'P. ', 'Torregosa', 'CCS', 'BSIT', 4, 'cebu', 'cebu', 92122, 'gtorregosa@gmail.com', '2015-12-31', 20, 'Single', 'Type B', 20, 20, 'Catholic', 'Filipino', ''),
(2, '123', 'assets/uploads/123.jpg', 'Peter', 'I.', 'Into', 'CCS', 'BSIT', 4, 'Secret', 'secret sad', 1123123123, 'bodnjames1212@gmail.com', '2017-10-02', 19, 'its complicated', 'secret', 50, 170, 'you are my religion ;)', 'senior', ''),
(3, '1234', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Renato', 'A.', 'Manalili', 'CCS', 'BSIT', 4, '50 steps away from CIT', '50 steps away from CIT', 907897862, 'natoy@gmail.com', '2017-10-26', 20, 'In a relationship <3', 'ABCD+-', 50, 170, 'is life <3', 'senior', ''),
(4, 'brian.repuesto', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Brian', 'P.', 'Repuesto', 'CCS', 'BSCS', 4, 'City of Waks', 'City of Waks', 922617262, 'brian@gmail.com', '2017-02-07', 27, 'its complicated', 'QWERTY+-', 120, 170, 'Ambot lang jud', 'Senior', '');

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
(1, 'assets/uploads/14-111.jpg?dummy=ah1RxVVP33', 'assets/uploads/14-111.jpg?dummy=ah1RxVVP33', 'Yehye', 'nettrac', 'president', '14-111', '123456', 'email@email.com'),
(2, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Jack Sparrow', 'nettrac', 'Manager', '1043', '123456', 'jack.sparrow@gmail.com'),
(3, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Peter Andrew', 'Innosoft', 'Technical Support', '14-1893-273', '123456', 'bondjames1212@gmail.com'),
(4, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Glenn Michaels', 'nettrac', 'Web Developer', '14-2649-276', '123456', 'gtorregosa@gmail.com'),
(5, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Razer Mantis', 'nettrac', 'Speed', '009', '123456', 'bondjames1212@gmail.com'),
(6, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Mouse Bosston', 'nettrac', 'Technical Manager', '003', '123456', 'mouse.bosston@gmail.com'),
(7, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'Barry Allen', 'Star Labs', 'The Flash', '6767', '123456', 'barry.allen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `user_image` varchar(256) NOT NULL DEFAULT '<i class="fa fa-user-circle pull-right" style="font-size: 40px; margin-top: -5px;" aria-hidden="true"></i>',
  `first_name` text NOT NULL,
  `middle_initial` text NOT NULL,
  `last_name` text NOT NULL,
  `account_type` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `user_image`, `first_name`, `middle_initial`, `last_name`, `account_type`, `password`) VALUES
(1, '14-2649-276', 'assets/uploads/14-2649-276.jpg?dummy=hZ6BFPMIX9', 'Glenn Michael', 'P.', 'Torregosa', 0, '123456'),
(4, '123', 'assets/uploads/123.jpg', 'Peter', 'I.', 'Into', 0, '123456'),
(5, '1234', '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', 'renato', 'maoy', 'manalili', 0, '123456');

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
(1, 'innosoft', NULL),
(3, 'iTech-Rar', NULL),
(5, 'Real Steel Inc.', NULL),
(6, 'Grimoire Heart ', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `midterm_evaluation`
--
ALTER TABLE `midterm_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ojt_records`
--
ALTER TABLE `ojt_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
