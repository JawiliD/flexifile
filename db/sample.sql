-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 03:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `backgroundeduc`
--

CREATE TABLE `backgroundeduc` (
  `id` int(11) NOT NULL,
  `name_of_school_elem` varchar(250) NOT NULL,
  `basiceduc_deg_course_elem` varchar(250) NOT NULL,
  `period_of_attendance_elemfrom` year(4) NOT NULL,
  `period_of_attendance_elemto` year(4) NOT NULL,
  `elem_unitearned` varchar(250) NOT NULL,
  `elem_yeargrad` year(4) NOT NULL,
  `elem_scholar_acadhonor_recieved` varchar(250) NOT NULL,
  `name_of_school_secondary` varchar(250) NOT NULL,
  `basiceduc_deg_course_secondary` varchar(250) NOT NULL,
  `period_of_attendance_secondaryfrom` year(4) NOT NULL,
  `period_of_attendance_secondaryto` year(4) NOT NULL,
  `secondary_unitearned` varchar(250) NOT NULL,
  `secondary_yeargrad` year(4) NOT NULL,
  `secondary_scholar_acadhonor_recieved` varchar(250) NOT NULL,
  `name_of_school_voc` varchar(250) NOT NULL,
  `basiceduc_deg_course_voc` varchar(250) NOT NULL,
  `period_of_attendance_vocfrom` year(4) NOT NULL,
  `period_of_attendance_vocto` year(4) NOT NULL,
  `voc_unitearned` varchar(250) NOT NULL,
  `voc_yeargrad` year(4) NOT NULL,
  `voc_scholar_acadhonor_recieved` varchar(250) NOT NULL,
  `name_of_school_college` varchar(250) NOT NULL,
  `basiceduc_deg_course_college` varchar(250) NOT NULL,
  `period_of_attendance_collegefrom` varchar(250) NOT NULL,
  `period_of_attendance_collegeto` varchar(250) NOT NULL,
  `college_unitearned` varchar(250) NOT NULL,
  `college_yeargrad` varchar(250) NOT NULL,
  `college_scholar_acadhonor_recieved` varchar(250) NOT NULL,
  `name_of_school_gradstudies` varchar(250) NOT NULL,
  `basiceduc_deg_course_gradstudies` varchar(250) NOT NULL,
  `period_of_attendance_gradstudiesfrom` varchar(250) NOT NULL,
  `period_of_attendance_gradstudiesto` varchar(250) NOT NULL,
  `gradstudies_unitearned` varchar(250) NOT NULL,
  `gradstudies_yeargrad` varchar(250) NOT NULL,
  `gradstudies_scholar_acadhonor_recieved` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backgroundeduc`
--

INSERT INTO `backgroundeduc` (`id`, `name_of_school_elem`, `basiceduc_deg_course_elem`, `period_of_attendance_elemfrom`, `period_of_attendance_elemto`, `elem_unitearned`, `elem_yeargrad`, `elem_scholar_acadhonor_recieved`, `name_of_school_secondary`, `basiceduc_deg_course_secondary`, `period_of_attendance_secondaryfrom`, `period_of_attendance_secondaryto`, `secondary_unitearned`, `secondary_yeargrad`, `secondary_scholar_acadhonor_recieved`, `name_of_school_voc`, `basiceduc_deg_course_voc`, `period_of_attendance_vocfrom`, `period_of_attendance_vocto`, `voc_unitearned`, `voc_yeargrad`, `voc_scholar_acadhonor_recieved`, `name_of_school_college`, `basiceduc_deg_course_college`, `period_of_attendance_collegefrom`, `period_of_attendance_collegeto`, `college_unitearned`, `college_yeargrad`, `college_scholar_acadhonor_recieved`, `name_of_school_gradstudies`, `basiceduc_deg_course_gradstudies`, `period_of_attendance_gradstudiesfrom`, `period_of_attendance_gradstudiesto`, `gradstudies_unitearned`, `gradstudies_yeargrad`, `gradstudies_scholar_acadhonor_recieved`) VALUES
(9, 'MOGPOG CENTARL SCHOOL', 'ELEMENTARY', '2000', '2006', 'N/A', '2006', 'N/A', 'MARINDUQUE NATIONAL HIGH SCHOOL', 'ACADEMY', '2006', '2010', 'N/A', '2010', 'N/A', 'ADVANCE TECHNICAL TRAINING CENTER', 'COMPUTER TECHNOLOGY', '2017', '2017', 'N/A', '2017', '2nd Honor', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY, CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION', '2010', '2014', 'N/A, 22 UNITS EARNED', '2014', 'N/A, N/A', 'MARINDUQUE STATE COLLEGE, NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE, MARINDUQUE STATE COLLEGE', 'MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT, MASTER IN INFORMATION SYSTEMS, MASTER IN INFORMATION TECHNOLOGY', '2015', '2016', '9 UNITS EARNED, , 15 UNITS EARNED', '0000', 'N/A, N/A, N/A'),
(10, 'MOGPOG CENTARL SCHOOL', 'ELEMENTARY', '2000', '2006', 'N/A', '2006', 'N/A', 'MARINDUQUE NATIONAL HIGH SCHOOL', 'ACADEMY', '2006', '2010', 'N/A', '2010', 'N/A', 'ADVANCE TECHNICAL TRAINING CENTER', 'COMPUTER TECHNOLOGY', '2017', '2017', 'N/A', '2017', '2nd Honor', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY, CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION', '2010', '2014', 'N/A, 22 UNITS EARNED', '2014', 'N/A, N/A', 'MARINDUQUE STATE COLLEGE, NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE, MARINDUQUE STATE COLLEGE', 'MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT, MASTER IN INFORMATION SYSTEMS, MASTER IN INFORMATION TECHNOLOGY', '2023', '2016', '9 UNITS EARNED, , 15 UNITS EARNED', '0000', 'N/A, N/A, N/A'),
(11, 'MOGPOG CENTARL SCHOOL', 'ELEMENTARY', '2000', '2006', 'N/A', '2006', 'N/A', 'MARINDUQUE NATIONAL HIGH SCHOOL', 'ACADEMY', '2006', '2010', 'N/A', '2010', 'N/A', 'ADVANCE TECHNICAL TRAINING CENTER', 'COMPUTER TECHNOLOGY', '2017', '2017', 'N/A', '2017', '2nd Honor', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY, CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION', '2010', '2014', 'N/A, 22 UNITS EARNED', '2014', 'N/A, N/A', 'MARINDUQUE STATE COLLEGE, NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE, MARINDUQUE STATE COLLEGE', 'MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT, MASTER IN INFORMATION SYSTEMS, MASTER IN INFORMATION TECHNOLOGY', '2015', '2016', '9 UNITS EARNED, , 15 UNITS EARNED', '0000', 'N/A, N/A, N/A'),
(12, 'MOGPOG CENTARL SCHOOL', 'ELEMENTARY', '2000', '2006', 'N/A', '2006', 'N/A', 'MARINDUQUE NATIONAL HIGH SCHOOL', 'ACADEMY', '2006', '2010', 'N/A', '2010', 'N/A', 'ADVANCE TECHNICAL TRAINING CENTER', 'COMPUTER TECHNOLOGY', '2017', '2017', 'N/A', '2017', '2nd Honor', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY, CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION', '2010, 2014', '2014, 2015', 'N/A, 22 UNITS EARNED', '2014, N/A', 'N/A, N/A', 'MARINDUQUE STATE COLLEGE, NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE, MARINDUQUE STATE COLLEGE', 'MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT, MASTER IN INFORMATION SYSTEMS, MASTER IN INFORMATION TECHNOLOGY', '2015, 2017, 2022', '2016, 2020, 2023', '9 UNITS EARNED, , 15 UNITS EARNED', 'N/A, 2020, N/A', 'N/A, N/A, N/A');

-- --------------------------------------------------------

--
-- Table structure for table `backgroundfam`
--

CREATE TABLE `backgroundfam` (
  `id` int(11) NOT NULL,
  `spouse_surname` varchar(250) NOT NULL,
  `spouse_firstname` varchar(250) NOT NULL,
  `spouse_middlename` varchar(250) NOT NULL,
  `spouse_occupation` varchar(250) NOT NULL,
  `spouse_empname` varchar(250) NOT NULL,
  `spouse_businessAdd` varchar(250) NOT NULL,
  `spouse_telno` varchar(250) NOT NULL,
  `spouse_extension` varchar(250) NOT NULL,
  `children_name` varchar(250) NOT NULL,
  `date_of_childbirth` varchar(250) NOT NULL,
  `father_surname` varchar(250) NOT NULL,
  `father_firstname` varchar(250) NOT NULL,
  `father_middlename` varchar(250) NOT NULL,
  `father_name_extension` varchar(250) NOT NULL,
  `mother_maiden_name` varchar(250) NOT NULL,
  `mother_surname` varchar(250) NOT NULL,
  `mother_firstname` varchar(250) NOT NULL,
  `mother_middlename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backgroundfam`
--

INSERT INTO `backgroundfam` (`id`, `spouse_surname`, `spouse_firstname`, `spouse_middlename`, `spouse_occupation`, `spouse_empname`, `spouse_businessAdd`, `spouse_telno`, `spouse_extension`, `children_name`, `date_of_childbirth`, `father_surname`, `father_firstname`, `father_middlename`, `father_name_extension`, `mother_maiden_name`, `mother_surname`, `mother_firstname`, `mother_middlename`) VALUES
(1, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(2, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(3, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(4, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(5, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(6, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(7, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(8, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(9, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', '', '', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(10, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(11, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(12, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(13, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(14, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(15, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(16, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(17, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(18, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(19, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(20, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(21, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(22, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(23, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(24, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS'),
(25, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', '', 'DELA', 'CONCHITA', 'JALOS');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name_extension` varchar(250) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(250) NOT NULL,
  `place_of_birth` varchar(250) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `height` float NOT NULL,
  `weight` int(20) NOT NULL,
  `blood_type` varchar(250) NOT NULL,
  `gsis_id_no` varchar(250) NOT NULL,
  `pagibig_id_no` varchar(250) NOT NULL,
  `philhealth_no` varchar(250) NOT NULL,
  `sss_no` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `agency_emp_no` int(20) NOT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `resident_house_no` varchar(255) NOT NULL,
  `resident_street` varchar(250) NOT NULL,
  `resident_sub_vil` varchar(250) NOT NULL,
  `resident_barangay` varchar(250) NOT NULL,
  `resident_city_mul` varchar(250) NOT NULL,
  `resident_province` varchar(250) NOT NULL,
  `resident_zipcode` int(20) NOT NULL,
  `permanent_house_no` varchar(255) NOT NULL,
  `permanent_street` varchar(250) NOT NULL,
  `permanent_sub_vil` varchar(250) NOT NULL,
  `permanent_barangay` varchar(250) NOT NULL,
  `permanent_city_mul` varchar(250) NOT NULL,
  `permanent_province` varchar(250) NOT NULL,
  `permanent_zipcode` int(20) NOT NULL,
  `telephone_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `surname`, `name_extension`, `first_name`, `middle_name`, `date_of_birth`, `place_of_birth`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_emp_no`, `citizenship`, `resident_house_no`, `resident_street`, `resident_sub_vil`, `resident_barangay`, `resident_city_mul`, `resident_province`, `resident_zipcode`, `permanent_house_no`, `permanent_street`, `permanent_sub_vil`, `permanent_barangay`, `permanent_city_mul`, `permanent_province`, `permanent_zipcode`, `telephone_no`, `mobile_no`, `email_address`) VALUES
(62, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(63, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(64, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(65, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(66, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(67, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(68, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(69, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(70, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(71, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(72, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(73, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(74, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(75, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(76, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(77, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(78, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(79, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(80, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(81, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(82, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(83, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(84, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(85, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(86, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com'),
(87, 'Cruz', 'NAME EXTENSION (JR., SR)  N/A            ', 'Juan', 'Dela', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', 6013112, '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backgroundeduc`
--
ALTER TABLE `backgroundeduc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backgroundfam`
--
ALTER TABLE `backgroundfam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backgroundeduc`
--
ALTER TABLE `backgroundeduc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `backgroundfam`
--
ALTER TABLE `backgroundfam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
