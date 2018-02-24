-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 03:42 PM
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
(1, 'bugs.bunny', 'admin', '123456', 'CCS', 'larmie.feliscuzo@gmail.com', 'admin'),
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
(1, 'admin', 'halu', 'arlenejane.abelgas', 1, '2018-02-22 13:01:22', 1),
(2, 'admin', 'halu', 'jamesbryan.alarcon', 0, '2018-02-22 13:01:23', 1),
(3, 'admin', 'halu', 'edser.caballero', 0, '2018-02-22 13:01:24', 1),
(4, 'admin', 'halu', 'michaeljay.caballero', 0, '2018-02-22 13:01:24', 1),
(5, 'admin', 'halu', 'carljaysun.cabaluna', 0, '2018-02-22 13:01:24', 1),
(6, 'admin', 'halu', 'dariele.cayme', 0, '2018-02-22 13:01:24', 1),
(7, 'admin', 'halu', 'rosemarie.de real', 0, '2018-02-22 13:01:24', 1),
(8, 'admin', 'halu', 'marcelinoiii.fuentes', 0, '2018-02-22 13:01:24', 1),
(9, 'admin', 'halu', 'grace.ganzo', 0, '2018-02-22 13:01:24', 1),
(10, 'admin', 'halu', 'windelynjoy.jopia', 0, '2018-02-22 13:01:24', 1),
(11, 'admin', 'halu', 'ronnelo.mernilo', 0, '2018-02-22 13:01:24', 1),
(12, 'admin', 'halu', 'cedric.nebria', 0, '2018-02-22 13:01:24', 1),
(13, 'admin', 'halu', 'norrenlanchpaul.ongcal', 0, '2018-02-22 13:01:24', 1),
(14, 'admin', 'halu', 'jonglen.pitas', 0, '2018-02-22 13:01:24', 1),
(15, 'admin', 'halu', 'gerald.tan', 0, '2018-02-22 13:01:24', 1),
(16, 'admin', 'halu', 'generheybrayan.tanupan', 0, '2018-02-22 13:01:24', 1),
(17, 'admin', 'halu', 'rosellemay.yamson', 0, '2018-02-22 13:01:24', 1),
(18, 'admin', 'halu', 'jodolfh.abarquez', 0, '2018-02-22 13:01:24', 1),
(19, 'admin', 'halu', 'jhyllanthony.alob', 0, '2018-02-22 13:01:25', 1),
(20, 'admin', 'halu', 'karren.ardon', 0, '2018-02-22 13:01:25', 1),
(21, 'admin', 'halu', 'welsey.birao', 0, '2018-02-22 13:01:25', 1),
(22, 'admin', 'halu', 'aladdin.bravo', 0, '2018-02-22 13:01:25', 1),
(23, 'admin', 'halu', 'cliffadrian.buque', 0, '2018-02-22 13:01:25', 1),
(24, 'admin', 'halu', 'gaspar.caraballe', 0, '2018-02-22 13:01:25', 1),
(25, 'admin', 'halu', 'meldred.carrigo', 0, '2018-02-22 13:01:25', 1),
(26, 'admin', 'halu', 'chiangshan.chang', 0, '2018-02-22 13:01:25', 1),
(27, 'admin', 'halu', 'seciniojr..colipano', 0, '2018-02-22 13:01:25', 1),
(28, 'admin', 'halu', 'klydekz.gonzales', 0, '2018-02-22 13:01:25', 1),
(29, 'admin', 'halu', 'arbey.jamili', 0, '2018-02-22 13:01:25', 1),
(30, 'admin', 'halu', 'jayson.librando', 0, '2018-02-22 13:01:25', 1),
(31, 'admin', 'halu', 'zienel.magsayo', 0, '2018-02-22 13:01:25', 1),
(32, 'admin', 'halu', 'markterence.mallari', 1, '2018-02-22 13:01:25', 1),
(33, 'admin', 'halu', 'daryljames.medillo', 0, '2018-02-22 13:01:26', 1),
(34, 'admin', 'halu', 'junrey.natad', 0, '2018-02-22 13:01:26', 1),
(35, 'admin', 'halu', 'leopatrick.navarro', 0, '2018-02-22 13:01:26', 1),
(36, 'admin', 'halu', 'josevirgil.orais', 0, '2018-02-22 13:01:26', 1),
(37, 'admin', 'halu', 'haroldjohn.panugaling', 0, '2018-02-22 13:01:26', 1),
(38, 'admin', 'halu', 'karoljohn.paras', 0, '2018-02-22 13:01:26', 1),
(39, 'admin', 'halu', 'retchel.rumaguera', 0, '2018-02-22 13:01:26', 1),
(40, 'admin', 'halu', 'rexxordee.uy', 0, '2018-02-22 13:01:26', 1),
(41, 'admin', 'halu', 'johnluther.valendez', 0, '2018-02-22 13:01:26', 1),
(42, 'admin', 'halu', 'princeton.valera', 0, '2018-02-22 13:01:26', 1),
(43, 'admin', 'halu', 'walter.ybanez', 0, '2018-02-22 13:01:26', 1),
(44, 'admin', 'halu', 'lysander.zulueta', 0, '2018-02-22 13:01:26', 1);

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
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL DEFAULT 'Not specified',
  `moa` tinyint(1) DEFAULT '0',
  `designated_person` varchar(255) DEFAULT 'Not specified',
  `position` varchar(255) NOT NULL DEFAULT 'Not specified',
  `watchlisted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `address`, `contact_no`, `moa`, `designated_person`, `position`, `watchlisted`) VALUES
(1, 'A.S Enriquez Engineering Consultancy', 'R/302 Rivergate Complex, General Maxilom St., Cebu Cuty', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(2, 'Above the Line Productions', 'Cardoc Bldg., # 5 Mango Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(3, 'Aliw Broadcasting Corporation', 'Jones Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(4, 'Ameeratel Inc.', 'E Office 1,Geonzon St., IT Park Lahug,C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(5, 'APG Engineering', '171 N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(6, 'Asian College of Technology -International Educational Foundation', 'Cor. Leon Kilat & P. Del Rosario, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(7, 'Asian Marine Transport Corp.', '# 38 Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(8, 'Azaza Biz Solutions Inc.', 'Gen. Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(9, 'Aeonprime Land Development Corp.', '15/F TGU Tower IT Park, Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(10, 'Anoba Studio', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(11, 'Air Asia Inc., Cebu', 'Mactan Cebu International Airport, Lapu-Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(12, 'Ankeck Travel & Services', 'Perlacosme Bldg. Arch. Reyes Camputhaw, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(13, 'ASO Philippines Inc.', 'MEZ 1, Lapu-Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(14, 'ADLC Eng\'g Consultancy', 'Unit 616 Mabolo Garden Flats, Tres Borces St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(15, 'Apple Tree Suites Cebu', '22 J. Llorente St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(16, '8 Thumbs Video & Post Production', 'Luib Comp.P. Basubas St., Tipolo Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(17, 'Alliance Software Inc.', '7/F,Pioneer House Cebu, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(18, 'Anilson Packaging Solutions Inc.', '2/F GCH Bldg.,Tres Borces St., Mabolo, C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(19, 'A. Armenion Construction & Supply', 'SB Cabahug St., Ibabao Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(20, '53rd Engineering Brigade Philippine Army', 'Camp Lapu - Lapu  City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(21, '1 & 1 Internet (Phils.) Inc.', '16/F 13 Bldg.,Cebu IT Park,Lahug,C. C. ', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(22, 'AE International Construction & Development Corp.', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(23, 'Allied Project Management Consultants', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(24, 'Arcy Gayatin', 'Banilad Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(25, '180 Degrees Food Corporation', '180 Freedom St., Peace Valley, Lahug,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(26, 'Azia Suites & Residences, Inc.', 'Rhaman Ext. Camputhaw Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(27, 'Arctura Corporation', 'Don Gerardo Ouano St., Ext. Opao Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(28, 'Aboitizland Inc.', 'Aboitiz Corporate Center, Gov. Manuel A. Cuenco Ave., Kasambagan Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(29, 'ABC Development Corp. - TV 5', 'Camp Marina, Brgy. Kalunasan , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(30, 'A & E Consulting, LLC', '5/F TGU Tower IT Park, Lahug,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(31, 'Alviola Surveying and Engineering Services', '3rd St. James Town San Roque Talisay, City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(32, 'Anseca Development Corp.', 'Lower Calajoan,Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(33, 'Author Solutions Phils. Inc.', '6/F TGU Tower, Cebu IT Park, Lahug, C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(34, 'AO Biomed & Industrial Marketing', 'Tres De Abril, Labangon Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(35, 'Accent Micro Technologies Inc.', 'Escario ZBldg., Escario St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(36, 'Asia\'s Best Industrial Sales Corp.', 'N.R.A Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(37, '8S Accounting & Consultancy Services', 'Rm 105& 106 M&D Bldg., P Del Rosario Ext., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(38, 'Asian Grains Corporation', 'Pob., Naga City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(39, 'East Asia Utilities Corp.', 'MEPZ 1, Lapu - Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(40, 'Ace Technical Creations, Inc.', 'Treassure Ville., San Isidro Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(41, 'Althea International Travel & Tours', 'Sango Rd., Tabunok Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(42, 'Asalus Corporation', 'Room 601, 6th /F Metrobank Plaza Bldg., Osmeña Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(43, '3AG Business Solutions, Inc.', '3/F Centro Maximo II Bldg., Jakosalem St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(44, 'Anthill Fabric Gallery', 'Pedro Calomarde St., Cor. Acacia St., Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(45, 'A.R.T Sign Design Services', 'G. Ouano St., Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(46, 'ABC Hotel Cebu', 'Cor. F. Ramos St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(47, 'Asiapro Multi - Purpose Cooperative', '3/F  The River Gate Complex, General Maxilom Ave, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(48, '123 Lending Corporation', '60 Legaspi St., Santo Nino, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(49, 'Asian PDC Properties Development Center', '19-A Deiparine Bldg., Bulacao Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(50, 'Auksilyo Professional, Inc.', 'Suite 1501,15th Floor Appleone Equicom Tower Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(51, 'Archivus Designs', 'P. Del Rosario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(52, 'Aspa Formwork System Phil., Inc.', '#888 V.B Cabahug St., Sitio,Opao Mandaue City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(53, 'Aquarius Human Resource Development Corporation', '1022 M. J Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(55, 'ASL Surveying Office', 'Lot 10, Blk.35 Mt. View Village, Kalunasan, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(56, 'Angel Mary Pawnshop', '342-A Katipunan St., Labangon Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(57, 'Alraya Engineering & Development', 'No. 2 Spring Village, Pakigne Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(58, 'AR OHA Land Corporation', 'Unit Melodina Bldg., Lipata Minglanilla, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(59, 'Ark Innovation - Online Business Solutions', '4338 St., St. Therese Drive Forest Hills,Banawa,Guadalupe Cebu  City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(60, 'Asian College of Technology Integrated School', 'Bulacao Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(61, 'A - List Events, PR & Advertising', '2/F Arcy Gayatin Bldg., A.S Fortuna , St., Banilad, Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(73, 'Bureau of Internal Revenue - Tabunok', '2/F Rosalie Bldg.,Tabunok Talisay City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(74, 'Bureau of Internal Revenue - Mandaue', 'RDO 80 Subangdaku, Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(75, 'BP Deliarte Electrical Work', '41- E Junquera St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(76, 'Belcris Foods (2 times execution of MOA)', 'Plaridel St., Alang - Alang Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(77, 'BL Pangan Construction', '5 C. Maria Cristina St., Capitol Site, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(78, 'BNR Construction & Development Corp.', 'Suico, Tingub Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(79, 'B. C. Hortelano & Co. CPAs', 'D. Jakosalem St., Cogon Ramos Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(80, 'Bureau of Fisheries and Aquatic Resources - Cebu', 'Arellano  Blvd. Pier Area, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(81, 'Bentosa Healing Massage and Spa', 'Rabaya St. South Road Propeties Talisay City Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(82, 'Blue Ocean Holdings, Inc. (Three Sixty Pharmacy)', 'Metrobank Plaza Osmeña Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(83, 'Bureau  of Internal Revenue - South', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(84, 'Business Machine Corp.', 'Carmer Bldg. Legaspi St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(85, 'Beneficial Life Insurance Co., Inc.', 'Unit 303 Cebu Holding Center C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(86, 'BPO 24 Hour. Com', '2290 Cocogrove,Minglanilla Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(87, 'Balagtas & Co. CPA\'S', 'Cor. Lapu-Lapu St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(88, 'Bayfront Hotel', 'N.R.A, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(89, 'Bon - Ace Fashion Tools, Inc.', 'Tungkil, Minglanilla Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(90, 'Bureau of Local Government Finance - BLGF Region VII', '3/F BF Blg., N.Escario St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(91, 'Bright Star Shipmanagement, Inc.', 'MJ Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(92, 'Bureau of Immigration-Mactan Satellite Office', 'Gaisano Mactan Island Mall,Pajo St., Lapu- Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(93, 'AKKA Repair Shop', 'Tabunok Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(94, 'Alexcole Realty Ventures', 'Unit 803 Tower Osmeña Blvd. Sta Cruz, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(95, 'Alphabethsoup Inc.', 'Tandang Sora St., Villa Aurora Subd., Kasambagan Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(96, '7107 Adventure Travel & Tours', 'G/F Colonade Mall, Colon St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(97, 'AD & G Construction', 'Door 12# 1 Tres De Abril Vill. Punta Princesa Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(98, 'Avida Land Corporation', 'Geonzone St., IT Park, Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(99, 'Agila Financial Team General Insurance Agency, Inc.', '9th Fl. Insular  Bldg., Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(100, 'Axis Performance Wear Co.', '17 Nangka St., Punta Princesa, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(101, 'Bureau of Immigration Region 7', 'P. Burgos St., Tribunal Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(102, 'Budget Builders Inc.', '235 N. Bacalso Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(103, 'Biao Builders', '178 3rd B. St.,Abi - Abi Drive Sunvalley Subd.,V. Rama, C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(104, 'Basic Essentials Marketing Inc.', 'FF Cruz NRA,Subangdaku Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(105, 'Bankways Inc.(Rural Bank) Pardo Branch', 'Poblacion Pardo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(106, 'Bachelors Realty & Brokerage, Inc.', 'Causing Feria Bldg., Jones Ave,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(107, 'Betonval Ready Concrete Inc.', 'Pagsabungan Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(108, 'Bigstart Travel & Visa Assistance', '155 Sanciangko St., Kamagayan C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(109, 'Bureau of Customs', 'Mactan - Cebu International Airport Lapu-Lapu City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(111, 'CRM Works Asia Inc.', 'Mabolo ,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(112, 'Cebu Grand Industries Corp.', 'South Poblacion,San Fernando Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(113, 'Cebu Port Authority (PIER 3)', 'CIP Complex Serging Osmeña Blvd., Passenger Terminal 2, Pier 3 NRA Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(114, 'Cebu Sherilin Agro ? Industrial Corp.', 'R. Arcenas St., Banawa C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(115, 'Cebu Normal University', 'Osmeña Blvd. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(116, 'Cebu Metro Psychiatry Inc.', 'Subangdaku Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(117, 'Cebu City Tourism Commission', 'Osmeña Blvd. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(118, 'Cebu Reliance Motor Parts', 'Ibabao, Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(119, 'Charter Ping An insurance Corp.', '4/F Metrobank Plaza, Osmeña Blvd., C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(120, 'Campo Sato Design Studio', 'Unit 1 3/F Coast Pacific Bldg., Sanciangko St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(121, 'Commission on Audit (COA)', 'MJ. Cuenco Ave., V. Sotto St., C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(122, 'Convergys Phil?s Services Corp.', 'R. Arcenas St., Banawa, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(123, 'Costabella Tropical Beach Hotel', 'Mactan Island Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(124, 'Crest Forwarder Incorporated', 'M.J. Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(125, 'Cebu Land Masters Inc.', 'Labangon Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(126, 'ChannelFix Limited Liability Corp.', 'Onael Bldg., Don Gil Garcia St., Capitol Site , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(127, 'CP Kelco Philippines Inc.', 'Abugin, Sibonga Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(128, 'Cebu Grand Hotel', 'Escario Street, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(129, 'Cebu Port Authority', 'S. Osme?a Blvd.NRA, C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(130, 'Cebu Innosoft Solutions Services Inc.', 'Cor. V Rama Ave., & R Duterte St., Guadalupe Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(131, 'Cebu Parklane International Hotel', 'Cor. Escario St. & Archbishop Reyes, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(132, 'Cebu Business Materials Trading Co. Inc.', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(133, 'Cebu Power Testcomm Services Inc.', '16 St. Luke St. Don Bosco Village C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(134, 'Carmen Copper Corporation', 'DAS, Toledo City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(135, 'Central Visayas Conference of the Seventh ? Day Adventist', 'Escario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(136, 'City Sports Club Cebu Inc.', 'Cardinal Rosales Avenue, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(137, 'Commission on Election', 'San Fernando  Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(138, 'Convergys Philippines Inc.', '2/F Jcentre Mall,A.S. Fortuna St. Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(139, 'Clicklabs Incorporated', 'Juan Luna,Mabolo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(140, 'Cebu El Pueblo International Services Corp.', '4B Joelino Bldg.,Sanciangko St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(141, 'Convergys Corp. ?Cebu Phils', 'Asia Town IT Park, Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(142, 'CHY Law & Accounting Office', 'Gorones Bldg., Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(143, 'CK Builders Construction & Development Corp.', 'Lt. 775 ? C Brgy. Tingub Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(144, 'C2 Classic Cuisine ? Summit Circle Cebu', '4/F Summit Circle Hotel, Fuente Osme?a, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(145, 'Cebu City Government Customer  Service ( Cebu City Hall)', 'Magallanes St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(146, 'Cebu Catholic Television Network (CCTN)', 'Cardinal Rosales Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(147, 'Cebu Provincial Capitol', 'Capitol St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(148, 'Cebu Castle Peak Hotel Corp.', 'F. Cabahug Cor. Pres. Quezon St.,Villa Aurora, Mabolo,C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(149, 'Cebu Technological University (CTU)', 'M.J Cuenco St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(150, 'Cebu CFI Community Cooperative', 'CFI Bldg., Capitol Compound, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(151, 'Casino Espa?ol De Cebu', '107 ? 109 V. Ranudo St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(152, 'City state Savings Bank Inc.', 'G/F Fortune Life Bldg. Osme?a Blvd. C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(153, 'City Scape Hotel Cebu', 'Subangdaku, Mandaue City,  Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(154, 'Coco Life Insurance', 'Corner J. Llorente Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(155, 'Canadian Immigration Consultancy Services', 'Golden Peak Hotel, Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(156, 'Catalina Emroideries Inc.', 'Tingub, Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(157, 'Commission on Elections Provincial', 'Baex Bldg., Capitol Compound, N. Escario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(158, 'Commission On Audit ? DBP', 'Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(159, 'Caf? Breeze ? Bayfront Hotel Cebu', 'North Road 7,N.R.A, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(160, 'Campaigns & Grey', 'Escario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(161, 'Call Center Academy, Inc.', '#79 VEG Bldg., General Maxilom, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(162, 'Coredev Solutions Inc', '96 J. Alcantara St., Brgy. Sambag1, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(163, 'Central Command Armed Forces of the Philippines', 'Camp Lapu- Lapu ,Apas Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(164, 'Cebu Private Power Corporation', '(Needs to attached Conform) Old Veco Compound, Ermita Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(165, 'Commercial Reach Inc.', 'Room 315, Ma. Christina Bldg., Fuente Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(166, 'Cebu Merchantrend Engineering', 'D. Jakosalem St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(167, 'Charlz Construction', '0147 General Echavez Cogon, Ramos Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(168, 'Cebu Peoples Multi ? Cooperative', 'T. Aballa St., San Nicolas Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(169, 'Cigin Construction Development Corp.', 'Pinamungajan Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(170, 'Channel Technologies Inc.', 'Gallardo Bldg., Gen. Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(171, 'Cebu 1 Electric Cooperative, Inc.(CEBECO 1)', 'Bitoon Dumanjug Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(172, 'Cebu Landmasters, Inc.', '10/F Park Centrale Tower Jose Ma. Del Mar St., IT Park Brgy. Apas, Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(173, 'CML MOPRO Phils., Inc.', '7/F Park Centrale Bldg., IT Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(174, 'Cebu City Marriott Hotel', 'Cardinal Rosales Ave.,Cebu Business Park, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(175, 'Camel Appliances Manufacturing Corp.', 'Cansojong Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(176, 'Carlotech Cellphone Repair Center', 'E ? Mall Sanciangko St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(177, 'Cebu Velez General Hospital, Inc.', '# 41 F. Ramos St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(178, 'Cebu Suntech Manufacturing Corp.', 'Art Vill San Isidro Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(179, 'Carlos A. Gothong Holdings Inc.', 'Don Alfredo D. Gothonh Centre, S Osme?a Blvd, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(180, 'Crimson Resort & Spa Mactan', 'Seascapes Resort Town Mactan Island, Lapu-Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(181, 'Cosmpass Education', 'Unit 7 Nourelle Plaza, E. Benedicto St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(182, 'Cebu II Electric Cooperative, Inc.', 'Bogo City, Cebu ', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(183, 'Copytech Services', 'D/2 Pardo Apartment M. Dela Victoria St. Pardo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(184, 'Cebu Peoples Multi-Purpose Cooperative', 'San Nicolas Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(185, 'Cuarto Hotel- Cebu', '15 Cor. J Llorente Garcia St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(186, 'Culinary Hotelmaker Corp.', 'Bayfront Hotel Kaoshiong St., N.R.A Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(187, 'Cognizant Technology Solutions', '11/F,12/F & 4/F Skyrise 4 Bldg., Blk 2, Lt 4 IT Park Brgy. Apas Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(188, 'Civil  Aviation Authority of the Philippines- Cebu (CAAP)', 'Mactan International Airport, Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(189, 'Coderamen ? Tech', '7/F The Tide Skyrise 1, Cebu IT Park Apas, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(190, 'Canberry Hotel', 'V. Rama Ave., Guadalupe Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(191, 'Customer Benefits Services Inc.', 'Keppel Tower ,Ayala Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(192, 'Clever Shrimp Creatives', 'UP Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(193, 'Commonwealth Insurance Co.', 'Cebu Holdings Center, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(194, 'Cebu Northwinds Hotel', 'Salinas Drive Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(195, 'Chloue Travel & Tours', '195 Don Mariano Cui Capitol, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(196, 'CKE Electrical System', '2/F Rufuna Arcade N. Bacalso Ave., Mambaling Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(197, 'Countrywide Telecom, Inc.', '2/F Kintanaw Bldg., 33 N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(198, 'Cebu Suntech Manufacturing Corp.', 'Art Vill. San Isidro Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(199, 'Cultural & Historical Affairs Office ?Cebu', 'Rizal Memorial Library,Museum Bldg. Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(200, 'Cebu Business Outsourcing Sols.', 'AVP Bldg., Don Gil Garcia St., Capitol, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(201, 'Celestial Meadows Developer Corp.', '4658 Tiber Minglanilla Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(202, 'CVISNET Foundation Inc.', 'Lahug S & T Complex Sudlon, Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(203, 'Career First Institute & Consultancy, Inc.', '2/ F JY Square Mall, Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(204, 'Coca ? Cola (FEMSA) Philippines, Inc.', 'MC. Briones St., Tipolo Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(205, 'Cebu Beer Factory Corporation', 'Veterans Drive, Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(206, 'Cebu I Electric Cooperative, Inc. (CEBECO I)', 'G/F Patria De Cebu Bldg., P Burgos St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(207, 'Crimson Resort & Spa Mactan', 'Seascape Resort Town Soong, Lapu – Lapu City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(208, 'Cebu Alliance of Tour Operations Specialists, Inc. (CATOS)', 'Mactan Cebu International Airport, Lapu – Lapu City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(209, 'Center for Light Engineering & Metal Working, Inc.', 'RMESC Bldg., DOST 7 Compound, Sudlon Lahug Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(210, 'Cebu City Hall – Commission On Audit', 'Legislative Bldg., Cebu City Hall M.C. Briones Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(211, 'Cebu City Government – Division for the Welafare of the Urban Poor (DWUP)', 'Cebu City Hall, MC Briones   St., Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(212, 'Cebu Advertising Services & Promotions, Inc.', '702-7th Floor Ayala Life FGU Mindanao Ave., Cor. Biliran Road Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(213, 'Department of Agrarian Reform  -7', '2/F WDC Bldg. Osme?a Blvd., C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(214, 'Department of Justice Action Center (DOJAC) Cebu', 'Palace of Justice, Capitol Site C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(215, 'Department of Trade and Industry ? 7', 'MJ Cuenco Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(216, 'Department of the Interior & Local Government ? Cebu Region 7', '2/F Ramos Public Market Bldg., Cogon Ramos C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(217, 'Department of Public Works & Highways 5th District', 'V. Sotto St, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(218, 'DYCD ? Wild FM Cebu', 'Do?a Luisa Bld., Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(219, 'Drawing Board Inc.', '105 Tango,Plaza Queens Road, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(220, 'Dedon Manufacturing Inc.', 'Riverside,Canduman Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(221, 'Dangpanan Center', 'Laray Inayawan Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(222, 'Diamond Suites & Residences', '# 8 Apitong St. Cor., Escario St. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(223, 'Department of Education- Cebu City Scholarship Office', 'New Imus Rd., Brgy. Day-As, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(224, 'DepEd Region 7 ', 'New Imus Rd., Brgy. Day-As, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(225, 'DepEd Regional Office 7 ? Ecotech Center', 'Sudlon Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(226, 'DNA Micro Outsourcing Inc.', '3/F MIT Bldg., Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(227, 'DTI ? Cebu Provincial Office', 'Causing ? Lozada Bldg., Osme?a Blvd. Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(228, 'Department of Environment & Natural Resources ( EMB)', 'Banilad  Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(229, 'Department of Social Welfare & Development Field Office', 'Mabolo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(230, 'Department  of Agrarian ReformLegislative Office ,Cebu (Provincial Office)', 'Provincial Capitol, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(231, 'Department of Science & Technology ? VII', 'Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(232, 'DYLA', '2/F JSU ? PSU Marine Court, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(233, 'Diamond Interior Industry Corporation', 'Humabon, NRA, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(234, 'Dranix Distributor Inc.', 'N. Bacalso Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(235, 'Destination Specialist Cebu Inc.', 'Banilad Town Center Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(236, 'Don Bosco Technology Center', 'Pleasant Homes Subd., Punta Princesa Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(237, 'D?Asian Hills Bank, Inc.', 'Lopena Bldg., N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(238, 'DK2 Construction & Consultancy Corp.', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(239, 'D & G Construction', 'Tres De Abril, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(240, 'D? Omilla Shipping Corp.', '223 D. Jakosalem St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(241, 'Don Bosco Boy?s Home, Inc.', 'Brgy. Cotcot Liloan Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(242, 'DO IT Marketing Philippines Inc.', '162 J. P Rizal St. ,Dumlog Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(243, 'Delonix Marketing Corp.', 'Unit 311 3/F Mango Square Bldg., General Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(244, 'Department of Environment and Natural Resources -7', 'Banilad Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(245, 'Department of Foreign Affairs', '4/F Pacific Mall, Estancia Ibabao Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(246, 'DLV Solutions', 'Macorni St., Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(247, 'DYRC Cebu 648 KHZ', 'R 301-302 Do?a Luisa Bldg. Fuente Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(248, 'Diamond Suites & Residence', 'Capitol Site , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(249, 'Divaishnavi Travel & Tours Inc.', '90 Gen. Maxilom Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(250, 'Devlarn Ventures & Development Corp.', 'R 401 RJ Ouano Bldg. Brgy , Bakilid Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(251, 'DVM Electrical Construction Systems', 'Inayagan, Naga City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(252, 'Department of Public Works & Highway- Cebu City 5th District Engineering Office', 'V. Sotto St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(253, 'Dakay Construction & Development Corp.', 'Sudlon Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(254, 'Duros Development Corp.', 'Duros Complex,Yati Loloan, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(255, 'D.B. Lopez Electrical Works', '2/F Rd Realty Bldg., Colon St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(256, 'Department of Engineering & Public Works', 'D. Jakosalem St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(257, 'Dohera Hotel- Cebu', 'A.C Cortes St., Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(258, 'DNAMICRO Software, Inc.', 'Room 302 MIT Bldg., Gorordo Ave., Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(259, 'Debalucos Travel & Tours Services', '2/F Causing Lozada Bldg., Osmeña Blvd., Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(260, 'Deo Homes and Property Development, Inc.', 'RJ Ouano Bldg., MC Briones St., Mandaue City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(261, 'Freightworks GSA, Inc.', '2/F Freight Bldg., Mactan Cebu International Airport Authority, Lapu – Lapu City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(262, 'Department of Information & Communication Technology', 'Morga St., Port Area, Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(263, 'Department of Education Region 7', 'New Imus Rd., Brgy. Day-As , Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(264, 'Elegant Circle Inn', 'Fuente Osme?a Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(265, 'Express Inn Corp.', 'Mabolo Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(266, 'Eli Global Phil?s Resource Operation Center Inc.', '2nd Level, JY Square Mall, Salinas Drive,Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(267, 'Euphrasia Development Center Inc.', 'Rm 206A. Jessever Bldg., Fuente Osme?a ,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(268, 'Eziconnect Phil. Inc.', 'WT Corporate Tower,Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(269, 'ELJ Builders Inc.', 'San Roque Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(270, 'East West Rural Bank Inc.', 'Yap. Bldg. F. Ramos St., Cebu City( Change of Bank Branch Address)', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(271, 'Excelym IT Solutions, Inc.', '10/F MSY Tower Pescadores Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(272, 'Elomade Realty & Brokerage', 'Suite  301-E3 Medalle Bldg., Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(273, 'EGI Resort & Hotel Cebu, Inc.', 'Looc, Maribago Lapu- Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(274, 'Edanna Construction', 'Zone 4 # 89 Biasong Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(275, 'Fort San Pedro ? Cebu', 'Brgy., San Roque, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(276, 'FCG Builders', 'Cabancalan 1 , Bulacao Pardo Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(277, 'Fast Autoworld Philippines Corp.', 'Maguikay Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(278, 'FVE Electrical Services & Supply Corp.', 'Apas lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(279, 'Fastway Construction and Development Corp.', 'City Time Square, Mandaue City Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(280, 'Fluor Daniel Inc., Philippines', '5/F TGU Tower IT Park, Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(281, 'Fazon Multiframe Construction Development Corp.', 'Ponce Capitol Site, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(282, 'Flaminia Real Estate Centre', 'RE- CJC Bldg., North Road Highway, Basak Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(283, 'Far East Broadcasting Company (Phils.), Inc.', 'Immanuel Bible College Campus, Banawa Hills, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(284, 'Gaisano Main- Cebu', 'Colon St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(285, 'Grand Hope Travel Inc.', 'Fuente Osme?a Circle, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(286, 'GTI Software Developer', '3/F Romulos Bldg., San Isidro Talisay City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(287, 'Golden Peak Hotel & Suites', 'Gorordo Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(288, 'General Milling Corp.', 'ML Quezon Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(289, 'Glocorp IT Solutions Inc.', 'Unit 819 Tower 3 Crown Regency, Fuente Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(290, 'Greenware PC Systems & Digital Solutions', 'Graziane Bldg., Poblacion Argao Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(291, 'Geoditech Phiuls. Co. Inc.', 'South Road Poblacion Pardo , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(292, 'Garods Engineering Works', '2/F Room 202 Manros Plaza, General Maxilom Ave, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(293, 'GMR Megawide Cebu Airport Corp.', 'Mactan Cebu International Airport Bldg., Brgy. Pusok Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(294, 'GANV Business Support Services Corp.', 'C. Padilla St., Duljo Fatima Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(298, 'Erich Rafael Construction', 'Villa Pacita Inayawan Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(299, 'Excel Asia', '424 Wee Bldg., Gorodo Ave., C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(300, 'Excil Construction & Development Corporation', 'A7 IPI, Talamban Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(301, 'Ezware IT Computing Solution', 'JDV Bldg., Pahina Central, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(302, 'Enhance Visa Services, Inc.', '2/F Mango Mall Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(303, 'Equipment Technical Services ? MC', 'N. Bcalso Ave, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(304, 'E. G & I Construction Corp.', 'Salvador Ext., Labangon , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(305, 'Elated Industries', 'Poblacion, Liloan Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(306, 'Eastern Shipping Lines, Inc.', 'MJ Cuenco St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(307, 'East West Rural Bank, Inc.', 'Jones Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(308, 'Eco ? System Technologies, Inc.', '9C President Roxas, Mabolo Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(309, 'Energy & Building Applications Technologies Corp.', 'Sitio Bagakay, Tayud Consolacion, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(310, 'Fuente Oro Business Suites', '173 Gov. M. Roa St., Capitol Site, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(311, 'Freeman Newspaper- Cebu', 'V. Gullas St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(312, 'Fast Cargo Logistics', 'San Roque Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(313, 'Fellowship For Organizing Endeavors Inc.', 'Espina Compound Calamba,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(314, 'Fuentes and Co. Certified Public Accountants', '19/F Cebu IT Tower 2, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(315, 'Fairchild Semiconductors Phils., Inc.', 'MEPZ 1 Lapu-Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(316, 'Fargo Construction', 'La Aldea Del Rio, Calawisan Lapu ? Lpau City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(317, 'Funtastic Travel and Tours', 'Room 222,Raintree Mall, F. Ramos St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(318, 'Forward  BPO', 'FDN bldg. A.S Fortuna St., Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(319, 'Family and Recovery Management Center', 'Sitio Bayong Brgy., Cadulawan Minglanilla Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(320, 'Golden Bee International Inc.', '3T Brezlin St., & F. Cabahug, Mabolo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(321, 'Great Sea Plus Corp.', 'BF Bldg. , pier 4 NRA, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(322, 'Graphic FX Advertising & Studio Inc.', 'Unit 2B Maryville Condominium,Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(323, 'GH Falco Phils. Inc.', 'Atillo Subd., Punta Princesa, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(324, 'Gram Construction and Supply', 'Dueterte St, Banawa Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(325, 'GT Cosmetics Manufacturing Inc.', 'Yati Liloan, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(326, 'Grandhope Ventures Travel & Tours', '4/F Services Ayala Center, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(327, 'Golden Prince Hotel & Suites', 'Acacia St., Cor. Archbishop Reyes Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(328, 'Green Enviro Management Systems, Inc.', 'Bankal Road Lapu- Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(329, 'Garderie Corporation', '202 Sampaguita St., Phase 2, St. Jude Acres , Bulacao Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(330, 'Global Innovation Consulting Philippines, Inc.', '1001B Keppel center, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(331, 'GT  Vertical Realty', '4D B&F Paray Bldg. Capitol Site Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(332, 'Euphrasia Development Center Inc.', 'Rm 206A. Jessever Bldg., Fuente Osme?a ,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(333, 'EJS Multivector Solutions', 'Banawa St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(334, 'Elumba Technologies', 'AS Bldg., Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(335, 'Emery Estates Corporation', 'Rm. 314 M. Diaz Bldg., J. Avila St., Capitol Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(336, 'Exdigita Incorporated', 'Keppel Center, Cebu Business Park, Cebu  City.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(337, 'Escario Central Hotel', 'Escario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(338, 'Exxpert Communications Inc.', '14/F Cebu IT Tower II, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(339, 'Emtek Development Corporation ', 'Dagohoy St., Apas City Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(340, 'ESR Travel & Tours Services & Event Organizer', 'Causing Lazada Bldg., Lapu ?Lapu St., Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(341, 'eLocker IT & Management Services', 'Unit 11 2/F Romulo?s Bldg., San Isidro Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(342, 'E Telecare BPO Services', '2E 3/F Bai Center N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(343, 'Etchworks Digital Hammer, Inc.', '1434 ? B East Capitol Road, Capitol Site Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(344, 'Floijess Watertech Inc.', 'Banilad Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(345, 'Frilou Builders Asia and Trading Corp.', 'Juana Osme?a St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(346, 'FMC Philippines Inc.', 'Ouano Compound, Looc Mandaue City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(347, 'Furtune Powers Electrical Services', 'Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(348, 'Ferds General Engineering Services', 'Pajo, Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(349, 'FDRCON Company Inc.', '1457-V Fortune Plain SRP, Cansojong Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(350, 'Fortune Shipworks, Inc.', 'Sitio Bangkerohan, North Coastal Road, Tayud Consolacion Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(351, 'Frendith Construction', 'G/F JDN Square P. Remedio St., BAnilad Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(352, 'Franco-Moras (Hotel De Mercedes)', '# 7 Pelaez St., Brgy. Kalubihan, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(353, 'Greenwich ? Fresh N? Famous Inc.', 'Pacific Mall Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(354, 'Global Project Inc.', 'Lt 3, Blk. 6 Pescadores St., Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(355, 'Guadalupe Community Multi ? Purpose Cooperative', '170 M. Velez St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(356, 'Gilfer Construction', '26 Guadalupe Vill. , Punta Princesa C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(357, 'Gaisano Capital Corporate', 'Gen. Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(358, 'Grand Land Inc.', 'MJ Cuenco St., Cor. Holyname St., Mabolo Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(359, 'GL ? NAZ Construction', 'D2 Gerra Compound Brgy., Pajo Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(360, 'GT Industrial Development Inc.', 'Lower Calajoan, Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(361, 'GEF Inc.', '1059 Plaridel St., Umapad Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(362, 'Gooutsource Solutions International', '# 3 Jasmine St., Bulacao Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(363, 'Go Fix Digital Printing', 'Unit 202 Maryjoy Bldg., D. Jakosalem St., Brgy. Santo Ni?o, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(366, 'House of Hope Rehabilitation Center', '888 B9 A- Gun ? ob, Lapu- Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(367, 'Home Radio ? Cebu', 'G/F Fortune Bldg. Jones Avenue, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(368, 'Hidden Paradise', 'Ylaya San Fernando, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(369, 'Hotel Elizabeth ? Cebu', 'Arch. Reyes,Camputhaw Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(370, 'Home Development Mutual Fund ( PAG- IBIG)', 'San Roque Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(371, 'Hermosada Balucan Pulvera Co. & CPA?s', '3/F Room 305,GK Chua, MJ Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(372, 'Hotel Fortuna', '26 Boromeo St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(373, 'H.V  Power Concepts', 'Unit 107 the Orient Bldg., Gen. Echavez St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(374, 'Hermosada & Co., CPA?s', 'Room 202 Aurelia Manor Bldg., 177 ? A Gullas St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(375, 'Information & Communications Technology Office(Company Name changed)', 'Morga St., Port Area, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(376, 'Integrated Computer System Inc.', 'Jesa ? ITC Bldg., Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(377, 'Indago Inc.', '11/F Apple One  Tower, Cebu Business Park, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(378, 'Inspiri Graphics Ads', 'Y&F Bldg., Junquera St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(379, 'ICDM Construction and Supply', 'San Fernando Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(380, 'Innoland Development Corp.', '15/F TGU Tower,Cebu IT Park Jose Del Mar St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0);
INSERT INTO `companies` (`id`, `company_name`, `address`, `contact_no`, `moa`, `designated_person`, `position`, `watchlisted`) VALUES
(381, 'IMGDECK, INC.', '10/F MSY Tower, Ayala Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(382, 'Inquirer Publications, Inc. (Cebu Daily News)', 'Cebu Daily News Bldg., N.R.A Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(383, 'JLJ Construction', 'B12, 2/F Rufina Arcade Mambaling, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(384, 'Jam Engineering Services', '49 A Tenaza Apartment F. Gochan St. Mabolo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(385, 'JPIC Construction Services', 'SRP, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(386, 'JBR Electro ? Mechanical Services Inc.', 'Punta Princesa, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(387, 'J.E Abraham C Lee Construction & Development Inc.', '901-D Caimito St., Basak San Nicolas, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(388, 'Junkies Repair Shop', 'G/G Gaisano Fiesta Mall Tabunok Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(389, 'JS? Publications (FREEMAN),Inc.', 'V. Gullas St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(390, 'Jemar Indutrial Supply & Services', '697 ML Quezon St., Casuntingan Mandaue City, Cebu', 'Not specified', 0, 'Not specified', 'Not specified', 0),
(391, 'Kadasig Parents Associations Inc.', 'Brgy. Tisa Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(392, 'Kam Engineering & Electronic Works', 'Guadalupe Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(393, 'Klan Construction and Industrial Services, Inc.', 'Don Gil Garcia, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(398, 'Hotel Asia', 'Don Jose Avila St., Capitol Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(399, 'Hi- Precision Diagnostics ? Cebu', 'WES Bldg., J. Llorente St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(400, 'Hotel Stella', 'Dongil Garcia St., Capitol Site, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(401, 'Harolds Hotel ? Cebu', 'Lahug, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(402, 'Home Development Mutual Fund ( PAG- IBIG)Colon Branch', '5/F Gaisano Capital Colon St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(403, 'Hermosada Lapinid Pulvera and Co., CPAs', 'Room 305 G.K Chua Bldg., M.J Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(404, 'Holiday Spa Hotel', 'Gov., M. Cuenco Banilad,Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(405, 'Hitrust Finance Corp.', '330 N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(406, 'Himu Architectural & Construction Services', 'Salvador Labangon , Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(407, 'Islander Footware Manufacturing Corp.', 'Tungkop Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(408, 'Innodata Knowledge Services Inc.', 'HVG IT Park, Lopez Jaena St., Manaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(409, 'Insular Health Care Inc.', '2/F Insular Bldg., Biliran St., Cor. Mindanao Ave, Cebu Business Park, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(410, 'Isaender Credit and Associated Services Inc.', '2/F Dulcinea Hotel & Suites Mactan, Town Center, ML Quezon National Highway, Pajo, Lapu ? Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(411, 'iTech Global  Business Solutions,Inc.', '3rd Floor Robinson Cybergate, Fuente Osme?a, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(412, 'iTech ? RAR Solutions, Inc.', 'Room 208 Krizia Bldg., Gonzales Compound, Gorordo Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(413, 'Iconic Dealership, Inc. (VOLKSWAGEN) ? Cebu', 'A. Soriano Ave., North Reclamation, Mabolo Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(414, 'Isuzu Cebu Inc.', 'A. Soriano Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(415, 'JLJ Construction', 'Bravo St., Cansojong Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(416, 'JSU ? PSU Mariners Court ? Cebu', 'Pier 7 Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(417, 'JRS Business Corp.', 'M.J Cuenco Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(418, 'Jomacker Photo Editing Co.', '1524 Charity St., Belmont Village, Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(419, 'Journey Wonders Travel & Tour Services', 'San Isidro Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(420, 'JRS Business Corp.- Osme?a Branch', '54 Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(421, 'J810 Construction Corp.', '#10 Bravo St., Kimba Cansojong, Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(422, 'Jomara Earthmoving & Development Corp.', 'Jomara Building Poblacion Ward 3 Minglanilla, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(423, 'Kit Properties Inc.', 'BPI General Maxilom Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(424, 'KEPCO ? SPC Power Corp.', 'Brgy. Colon Naga City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(425, 'KFF Corporation Lending Investors', '038 Legaspi Cor., P. Zamora St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(430, 'Holiday Plaza Hotel', 'F. Ramos St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(431, 'HGM Design and Builders', '3/F Limson Bldg. Lawaan 1 Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(432, 'Hamersons Hotel ? Cebu', 'Don Mariano Cui, St. Capitol Site, C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(433, 'Harbour City Dimsum House Co.', 'Colon St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(434, 'Hap Metal Fabricators', 'L. Jayme St.,  Marfa Bakilid, Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(435, 'HVL Engineering Services ', 'F.  Llamas  St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(436, 'HH Group, Inc.,', 'PEZA 1, Lapu ? Lapu City , Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(437, 'Helpmate Inc.', 'N. Bacalso Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(438, 'Ironwood Property Ventures Corp.', 'P. Larrazabal Ave., NRA, Mandaue City Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(439, 'Infucos Multimedia Business Sols. Inc.', '5/F Crown Bldg. Juan Luna. Mabolo, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(440, 'Inquirer Publications Inc. ? Cebu', 'N.R.A, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(441, 'International Pharmaceutical Inc.', 'Pope John Paul II, Ave., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(442, 'International Travel Mate & Visa Services Inc.', 'Suite Unit 202 Mango Ave. Gen. Maxillom, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(443, 'iTravel,iExplore Tours & Services', 'Door 1, YMCA Arcade Osme?a Blvd., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(444, 'iXbase Inc.', '2 E Capitol Centrum., N. Escario St., Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(445, 'Ideaz Solutions and Advertising', 'A. Del Rosario St., Chua Tiam Bldg., Mandaue City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(446, 'Jegma Construction & Development Corp.', 'N. Bacalso Ave., Mambaling C.C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(447, 'Janeverose Property Management Homes Services', 'Nasispit Talamban Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(448, 'JAA Realty', 'Capitol Site, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(449, 'JARC Construction & Marine Services Corp.', 'Abucayan, Balamban Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(450, 'Joeskyn Builders', '38- B Rizal Ave. Ext.Tabada,Mambaling C. C.', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(451, 'J.P Geonzon Construction Services', '32 Sanson St., Lahug Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(452, 'Jamardon Builders', '571 Hilltop Subd., Casili Consolacion, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(453, 'JB ?January Builders? General Contractors & Construction Supplies', 'San Antonio, Linao Talisay City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(454, 'Klan Construction & Industrial Services Inc.', 'Don Gil Garcia, Cebu City', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(455, 'Kerry Food Ingredients (Philippines), Inc.', 'MEPZ 1 , Lapu-Lapu City, Cebu', 'Not specified', 1, 'Not specified', 'Not specified', 0),
(456, 'Kens General Construction Services', '#1 Montebello Road, Apas Cebu City', 'Not specified', 0, 'Not specified', 'Not specified', 0);

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
  `contact_number` varchar(11) NOT NULL,
  `fax_number` varchar(11) NOT NULL,
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
(1, 'markterence.mallari', 'das', 'supervisor', 'das', '121', '121', 'sadas', 'Assembly,Service/Utility', 'Less than 50', 0, 'ojt_two', 0),
(2, 'edser.caballero', 'CITU', '', 'da', '32131', '2121', '', 'Assembly,Service/Utility', 'Less than 50', 0, 'ojt_one', 0),
(3, 'grace.ganzo', 'CITU', '', 'das', '0312312', '909320190', 'dsa', 'Assembly,Service/Utility', 'From 50 to 100', 0, 'ojt_one', 0),
(4, 'arlenejane.abelgas', 'das', '', '21', '2121', '231', '321', 'Assembly,Service/Utility,Research and Development', 'Less than 50', 0, 'ojt_one', 0);

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
(1, 'markterence.mallari', 'gtorregosa@gmail.com', '8f8e3cac19bc69526d164a93e679685a', 1),
(2, 'edser.caballero', 'glenn@gmail.com', '0c0a6413b52179b09cb835738b903d1b', 0),
(3, 'grace.ganzo', 'dasdsa@dsadsa.com', '673ed8739f855939640150e80fb42fb6', 0),
(4, 'arlenejane.abelgas', 'dsadsa@sdasd.com', 'b6ec5263f1d856b682890804b1974e68', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_details`
--

CREATE TABLE `emergency_details` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `relationship` text NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_details`
--

INSERT INTO `emergency_details` (`id`, `id_number`, `name`, `relationship`, `contact_number`, `address`) VALUES
(1, 'markterence.mallari', 'dsdas', 'das', '21', 'x'),
(2, 'edser.caballero', 'ds', 'das', '312321', 'ca'),
(3, 'grace.ganzo', '', '', '0', ''),
(4, 'arlenejane.abelgas', 'asd', 'sda', '09219209348', '321');

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
  `contact_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`id`, `id_number`, `fathers_name`, `fathers_occupation`, `mothers_name`, `mothers_occupation`, `parents_address`, `contact_number`) VALUES
(1, 'markterence.mallari', 'dsa', 'dsa', 'das', 'das', 'dsa', '21'),
(2, 'edser.caballero', 'das', 'dsa', 'das', 'das', '312', '921'),
(3, 'grace.ganzo', '', '', '', '', '', '0'),
(4, 'arlenejane.abelgas', 'sad', 'das', 'sadas', 'das', '21', '12312');

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
  `date` varchar(20) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `division` text,
  `department` text,
  `designation` text,
  `log_content` text NOT NULL,
  `hours_rendered` float NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `supervisor_id` varchar(255) NOT NULL,
  `ojt_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_number`, `date`, `time_in`, `time_out`, `division`, `department`, `designation`, `log_content`, `hours_rendered`, `verified`, `supervisor_id`, `ojt_program`) VALUES
(11, 'markterence.mallari', '02/10/2018', '12:23:00', '12:23:00', '', '', '', 'hhjhj', 0, 0, 'supervisor', 'ojt_two'),
(12, 'markterence.mallari', '02/17/2018', '12:23:00', '12:23:00', '', '', '', 'hhjhj', 0, 0, 'supervisor', 'ojt_two');

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
(8, 'marcelinoiii.fuentes', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(9, 'grace.ganzo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(10, 'windelynjoy.jopia', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(11, 'ronnelo.mernilo', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(12, 'cedric.nebria', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(13, 'norrenlanchpaul.ongcal', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(14, 'jonglen.pitas', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(15, 'gerald.tan', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(16, 'generheybrayan.tanupan', 200, 200, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(17, 'rosellemay.yamson', 500, 200, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(18, 'jodolfh.abarquez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(19, 'jhyllanthony.alob', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(20, 'karren.ardon', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(21, 'welsey.birao', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(22, 'aladdin.bravo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(23, 'cliffadrian.buque', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(24, 'gaspar.caraballe', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(25, 'meldred.carrigo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(26, 'chiangshan.chang', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(27, 'seciniojr..colipano', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(28, 'klydekz.gonzales', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(29, 'arbey.jamili', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(30, 'jayson.librando', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(31, 'zienel.magsayo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(32, 'markterence.mallari', 300, 0, 300, 0, 0, 2, 0, 0, 0, 2, 0, 0, 'ON-GOING', '', 'supervisor', ''),
(33, 'daryljames.medillo', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(34, 'junrey.natad', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(35, 'leopatrick.navarro', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(36, 'josevirgil.orais', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(37, 'haroldjohn.panugaling', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(38, 'karoljohn.paras', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(39, 'retchel.rumaguera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(40, 'rexxordee.uy', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(41, 'johnluther.valendez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(42, 'princeton.valera', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(43, 'walter.ybanez', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', ''),
(44, 'lysander.zulueta', 300, 0, 300, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'ON-GOING', '', '', '');

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
  `contact_number` varchar(50) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `marital_status` text NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `height` varchar(11) NOT NULL,
  `religion` text NOT NULL,
  `citizenship` text NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `id_number`, `image_id`, `first_name`, `middle_initial`, `last_name`, `college`, `course`, `year`, `present_address`, `permanent_address`, `contact_number`, `email_address`, `date_of_birth`, `age`, `marital_status`, `blood_type`, `weight`, `height`, `religion`, `citizenship`, `sex`) VALUES
(1, 'markterence.mallari', 'assets/uploads/markterence.mallari.jpg?dummy=t9CoQVyjEb', 'MARK TERENCE', 'M.', 'MALLARI', 'CCS', 'BSIT', 4, 'x', 'x', '2121', 'gtorregosa@gmail.com', '1970-01-01', 0, 'Married', 'O-', '21', '21', '21', '2', 'Male'),
(2, 'edser.caballero', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'EDSER', 'S. ', 'CABALLERO', 'CCS', 'BSIT', 4, 'ca', 'dsa', '312312', 'glenn@gmail.com', '2018-02-23', 0, 'Single', 'O-', '20', '20', 'dsada', 'filipino', ''),
(3, 'grace.ganzo', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'GRACE', 'L. ', 'GANZO', 'CEA', 'BSIT', 4, '', '', '0', 'dasdsa@dsadsa.com', '1970-01-01', 0, '', '', '0', '0', '', '', ''),
(4, 'arlenejane.abelgas', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'ARLENE JANE', 'D. ', 'ABELGAS', 'CCS', 'BSIT', 4, '321', 'dsa', '902121', 'dsadsa@sdasd.com', '2018-02-15', 0, 'Married', 'A-', '20', '20', 'dsa', 'sda', 'Male');

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
(2, '<i class=\"fa fa-user-circle pull-right\" style=\"font-size: 40px; margin-top: -5px;\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-user-circle fa-5x\" style=\"font-size: 150px;\" aria-hidden=\"true\"></i>', 'supervisor', 'dasdas', 'supervisor', 'supervisor', '123456', 'das', '21', 1, 0, '1');

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
(32, 'markterence.mallari', 'admin', 'assets/uploads/markterence.mallari.jpg?dummy=t9CoQVyjEb', 'MARK TERENCE', 'M.', 'MALLARI', 'BSIT', 4, '2017-2018', 0, '123456', 'ojt_two', ''),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
