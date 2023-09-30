-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 08:39 PM
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
-- Database: `flexifile`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_semester_tb`
--

CREATE TABLE `academic_semester_tb` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_semester_tb`
--

INSERT INTO `academic_semester_tb` (`id`, `title`, `start_date`, `end_date`) VALUES
(1, '2021-2022 1st semester', '2023-09-01', '2023-09-21'),
(2, '2021-2022 2nd semester', '2023-09-21', '2023-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_file_tb`
--

CREATE TABLE `attachment_file_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `folder_path` varchar(250) NOT NULL,
  `time_stamp` date NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `document_type` varchar(250) NOT NULL,
  `other_specification` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attachment_file_tb`
--

INSERT INTO `attachment_file_tb` (`id`, `userid`, `filename`, `folder_path`, `time_stamp`, `fullname`, `title`, `document_type`, `other_specification`) VALUES
(4, 5, 'D1-FLEXIFILE-FINAL-UPDATED-V3.docx', 'uploads/D1-FLEXIFILE-FINAL-UPDATED-V3.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(5, 5, 'ELECTIVE 2_ UNIT 1_MODULE.docx', 'uploads/ELECTIVE 2_ UNIT 1_MODULE.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(13, 5, 'JAWILI_4D_ACTIVITY_1.docx', 'uploads/JAWILI_4D_ACTIVITY_1.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(15, 5, 'D1-FLEXIFILE-FINAL-UPDATED-V3.docx', 'uploads/D1-FLEXIFILE-FINAL-UPDATED-V3.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(22, 5, 'D1-FLEXIFILE-FINAL-UPDATED-V3.docx', '../uploads/D1-FLEXIFILE-FINAL-UPDATED-V3.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(23, 5, '4.-Faculty.pdf', '../uploads/4.-Faculty.pdf', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(24, 5, 'read me.docx', '../uploads/read me.docx', '2023-09-20', 'Naruto Namikaze Uzumaki', 'manual', 'education', 'test'),
(25, 0, 'JAWILI_4D_ACTIVITY_1.docx', '../uploads/JAWILI_4D_ACTIVITY_1.docx', '0000-00-00', '', '', '', ''),
(26, 9, '', '', '2023-09-20', 'rimuru tempest', 'manual', 'education', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `civil_service_tb`
--

CREATE TABLE `civil_service_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `career` varchar(250) NOT NULL,
  `rating` varchar(250) NOT NULL,
  `examination` date NOT NULL,
  `place` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `validity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_service_tb`
--

INSERT INTO `civil_service_tb` (`id`, `userid`, `career`, `rating`, `examination`, `place`, `number`, `validity`) VALUES
(81, 19, 'LICENSURE EXAMINATION FOR TEACHERS, , , , , , ', '0.828, , , , , , ', '0000-00-00', 'LUCENA CITY, , , , , , ', '14667826, , , , , , ', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `education_tb`
--

CREATE TABLE `education_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `level` varchar(250) NOT NULL,
  `schoolName` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `fromDate` varchar(250) NOT NULL,
  `toDate` varchar(250) NOT NULL,
  `units` varchar(250) NOT NULL,
  `graduated` varchar(250) NOT NULL,
  `honors` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_tb`
--

INSERT INTO `education_tb` (`id`, `userid`, `level`, `schoolName`, `degree`, `fromDate`, `toDate`, `units`, `graduated`, `honors`) VALUES
(103, 19, 'ELEMENTARY , SECONDARY , VOCATIONAL / TRADE COURSE , COLLEGE ,  , GRADUATE STUDIES  ,  , ', 'MOGPOG CENTARL SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , ADVANCE TECHNICAL TRAINING CENTER , MARINDUQUE STATE COLLEGE , MARINDUQUE STATE COLLEGE , MARINDUQUE STATE COLLEGE , NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE , MARINDUQUE STATE COLLEGE', 'ELEMENTARY , ACADEMY , COMPUTER TECHNOLOGY , BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY , CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION , MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT , MASTER IN INFORMATION SYSTEMS , MASTER IN INFORMATIO', '2000 , 2006 , 2017 , 2010 , 2014 , 2015 , 2017 , 2022', '2006 , 2010 , 2017 , 2014 , 2015 , 2016 , 2020 , PRESENT', 'N/A , N/A , N/A , N/A , 22 UNITS EARNED , 9 UNITS EARNED ,  , 15 UNITS EARNED', '2006 , 2010 , 2017 , 2014 , N/A , N/A , 2020 , N/A', 'N/A , N/A , 2nd Honor , N/A , N/A , N/A , N/A , N/A');

-- --------------------------------------------------------

--
-- Table structure for table `family_background_tb`
--

CREATE TABLE `family_background_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `spouse_surname` varchar(250) NOT NULL,
  `spouse_firstname` varchar(250) NOT NULL,
  `spouse_midname` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `employer` varchar(250) NOT NULL,
  `business_address` varchar(250) NOT NULL,
  `telephone_no` varchar(250) NOT NULL,
  `spouse_extension` int(250) NOT NULL,
  `father_surname` varchar(250) NOT NULL,
  `father_firstname` varchar(250) NOT NULL,
  `father_midname` varchar(250) NOT NULL,
  `father_extension` varchar(250) NOT NULL,
  `mother_surname` varchar(250) NOT NULL,
  `mother_firstname` varchar(250) NOT NULL,
  `mother_midname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_background_tb`
--

INSERT INTO `family_background_tb` (`id`, `userid`, `spouse_surname`, `spouse_firstname`, `spouse_midname`, `occupation`, `employer`, `business_address`, `telephone_no`, `spouse_extension`, `father_surname`, `father_firstname`, `father_midname`, `father_extension`, `mother_surname`, `mother_firstname`, `mother_midname`) VALUES
(66, 19, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 0, 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', 'DELA', 'CONCHITA', 'JALOS');

-- --------------------------------------------------------

--
-- Table structure for table `family_children_tb`
--

CREATE TABLE `family_children_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `childname` varchar(250) NOT NULL,
  `childbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_children_tb`
--

INSERT INTO `family_children_tb` (`id`, `userid`, `childname`, `childbirth`) VALUES
(53, 19, 'N/A, , , , , , , , , , , ', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tb`
--

CREATE TABLE `notification_tb` (
  `id` int(100) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `faculty_type` varchar(250) NOT NULL,
  `date_upload` date NOT NULL,
  `updated_part` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_tb`
--

INSERT INTO `notification_tb` (`id`, `fullname`, `faculty_type`, `date_upload`, `updated_part`) VALUES
(1, 'Darea Anne Jawili', 'ITE Faculty/GE faculty', '2023-09-19', 'uploaded his/her Personal Data sheet'),
(7, 'naruto uzumaki', 'ITE Faculty/GE faculty', '2023-09-20', 'uploaded his/her Personal Data sheet'),
(9, 'sasuke uchiha', 'ITE Faculty/GE faculty', '2023-09-26', 'uploaded his/her Personal Data sheet');

-- --------------------------------------------------------

--
-- Table structure for table `other_info_tb`
--

CREATE TABLE `other_info_tb` (
  `id` int(100) NOT NULL,
  `userid` int(250) NOT NULL,
  `skills_hobbies` varchar(250) NOT NULL,
  `recognition` varchar(250) NOT NULL,
  `association` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_info_tb`
--

INSERT INTO `other_info_tb` (`id`, `userid`, `skills_hobbies`, `recognition`, `association`) VALUES
(4, 19, 'COMPUTER LITERATE , BASIC TROUBLESHOOTING , DANCING , DRAWING , DESKTOP PUBLISHING', 'N/A ,  ,  ,  , ', 'ROTARACT CLUB OF MARINDUQUE NORTH - MARINDUQUE STATE COLLEGE CHAPTER , SAVE MOTHER EARTH MOVEMENT (SAVE ME MOVEMNENT) , PHILIPPINES - LEAD - PROJECT CHAMP , MARINDUQUE YOUTH VOLUNTERS CORPS , MARINDUQUE NATIONAL HIGH SCHOOL EMPLOYEE ASSOCIATION');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info_tb`
--

CREATE TABLE `personal_info_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `midname` varchar(250) NOT NULL,
  `extension` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `civil_status` varchar(250) NOT NULL,
  `height` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `bloodtype` varchar(250) NOT NULL,
  `gsis` varchar(250) NOT NULL,
  `pagibig` varchar(250) NOT NULL,
  `philhealth` varchar(250) NOT NULL,
  `sss` varchar(250) NOT NULL,
  `tin` varchar(250) NOT NULL,
  `agency_no` varchar(250) NOT NULL,
  `citizenship` varchar(250) NOT NULL,
  `residential_house_no` varchar(250) NOT NULL,
  `residential_street` varchar(250) NOT NULL,
  `residential_subdivision` varchar(250) NOT NULL,
  `residential_barangay` varchar(250) NOT NULL,
  `residential_municipality` varchar(250) NOT NULL,
  `residential_province` varchar(250) NOT NULL,
  `residential_zipcode` varchar(250) NOT NULL,
  `permanent_house_no` varchar(250) NOT NULL,
  `permanent_street` varchar(250) NOT NULL,
  `permanent_subdivision` varchar(250) NOT NULL,
  `permanent_barangay` varchar(250) NOT NULL,
  `permanent_municipality` varchar(250) NOT NULL,
  `permanent_province` varchar(250) NOT NULL,
  `permanent_zipcode` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info_tb`
--

INSERT INTO `personal_info_tb` (`id`, `userid`, `firstname`, `surname`, `midname`, `extension`, `birthday`, `birthplace`, `sex`, `civil_status`, `height`, `weight`, `bloodtype`, `gsis`, `pagibig`, `philhealth`, `sss`, `tin`, `agency_no`, `citizenship`, `residential_house_no`, `residential_street`, `residential_subdivision`, `residential_barangay`, `residential_municipality`, `residential_province`, `residential_zipcode`, `permanent_house_no`, `permanent_street`, `permanent_subdivision`, `permanent_barangay`, `permanent_municipality`, `permanent_province`, `permanent_zipcode`, `telephone`, `email`, `mobile_no`) VALUES
(82, 19, 'Cruz', 'Juan', 'Dela', 'NAME EXTENSION (JR., SR)  N/A            ', '0000-00-00', 'BOAC, MARINDUQUE', '', '', '1.52', '45', 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', '6013112', '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', '4900', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', '4901', 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `training_programs_tb`
--

CREATE TABLE `training_programs_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `training_from_date` date NOT NULL,
  `training_to_date` date NOT NULL,
  `duration` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `sponsor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_programs_tb`
--

INSERT INTO `training_programs_tb` (`id`, `userid`, `title`, `training_from_date`, `training_to_date`, `duration`, `type`, `sponsor`) VALUES
(49, 19, '2021 IN-SERVICE TRAINING , 2020 IN-SERVICE TRAINING , LEARNING DELIVERY MODALITIES COURSE (LMD 2) , ECHO ORIENTATION ON MOST ESSENTIAL LEARNING COMPETENCIES (MELCs), LEARNING MODALITIES AND KNOWLEDGE SOURCE , OFFICE 365 EMPOWERMENT TRAINING - WORKSHO', '0000-00-00', '0000-00-00', '40 , 40 , 40 , 8 , 32 , 16 , 8 , 24 , 36 , 16 , 8 , 16 , 40 , 16 , 8 , 8 , 40 , 8 , 32 , 56 , 8 , 8 , 320 , 16 , 24 , 8 , 8 , 8 , 8', 'TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNI', 'MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , DEPARTMENT OF EDUCATION DIVISION OF MARINDUQUE , MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL DEPARTMENT , MICROSOFT PHILIPPINES - DEPARTMENT OF EDUCATION  , DEPARTMENT OF ED');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(100) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `fullname`, `email`, `password`, `role`, `type`) VALUES
(14, 'carlo blanco', 'blanco@gmail.com', '$2y$10$ldJpdGmX4hXNz5s5FKJZTODd/ZWok.JqMFQPyZC8DDPwRE7qrQ0xS', 'faculty member', 'ITE Faculty'),
(15, 'naruto uzumaki', 'naruto@gmail.com', '$2y$10$x5q2EY/xRLa3lN7aXPLS8OMohurxO2UggpyBq7QSX23sin.tUFILq', 'program head', 'GE Faculty'),
(16, 'rimiru tempest', 'rimuru@gmail.com', '$2y$10$pPPURH2bCONexm8MtUuFQ.3NBGAYmxGpLyQKO2BYV2KBIExPS9GEu', 'dean', 'ITE Faculty'),
(19, 'sasuke uchiha', 'sasuke@gmail.com', '$2y$10$I9rsO2VtVKdbGBxwijSwI.9NSfRPVpcycBniGN6iim42cVOURskBi', 'task force leader', 'ITE Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_work_tb`
--

CREATE TABLE `voluntary_work_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `hours` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voluntary_work_tb`
--

INSERT INTO `voluntary_work_tb` (`id`, `userid`, `organization`, `from_date`, `to_date`, `hours`, `position`) VALUES
(62, 19, 'ROTARACT CLUB OF MARINDUQUE NORTH - MARINDUQUE STATE COLLEGE CHAPTER , SAVE MOTHER EARTH MOVEMENT (SAVE ME MOVEMNENT) , PHILIPPINES - LEAD - PROJECT CHAMP', '0000-00-00', '0000-00-00', '41813 , 41814 , 41433', '680 , 1360 , 680');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience_tb`
--

CREATE TABLE `work_experience_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `work_from_date` date NOT NULL,
  `work_to_date` date NOT NULL,
  `position_title` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `paygrade` varchar(250) NOT NULL,
  `appointment` varchar(250) NOT NULL,
  `gov_service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experience_tb`
--

INSERT INTO `work_experience_tb` (`id`, `userid`, `work_from_date`, `work_to_date`, `position_title`, `department`, `salary`, `paygrade`, `appointment`, `gov_service`) VALUES
(58, 19, '0000-00-00', '0000-00-00', 'INSTRUCTOR 1, INSTRUCTOR 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE, DEPARTMENT OF EDUCATION MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL, DEPARTMENT OF EDUCATION MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL, DEPARTMENT OF EDUCATION MARINDUQUE NATIONA', 'P29,165, P27,608, P25,723, P24,161, P22,600, P21,038, P20,754, P20,179, P19,620, P19,120, P13,660, P13,660, P13,660, P13,660, , , , , , , , , , , , , , , ', '12-1, 12-1, 11-2, 11-2, 11-2, 11-2, 11-1, 11-1, 11-1, 11-1, N/A, N/A, N/A, N/A, , , , , , , , , , , , , , , ', 'REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, TEMPORARY, CONTRACT SERVICE, CONTRACT SERVICE, CONTRACT SERVICE, CONTRACT SERVICE, , , , , , , , , , , , , , , ', 'YES, YES, YES, YES, YES, YES, YES, YES, YES, YES, NO, NO, NO, NO, , , , , , , , , , , , , , , ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_semester_tb`
--
ALTER TABLE `academic_semester_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_file_tb`
--
ALTER TABLE `attachment_file_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_service_tb`
--
ALTER TABLE `civil_service_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_tb`
--
ALTER TABLE `education_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_background_tb`
--
ALTER TABLE `family_background_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_children_tb`
--
ALTER TABLE `family_children_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_tb`
--
ALTER TABLE `notification_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_info_tb`
--
ALTER TABLE `other_info_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info_tb`
--
ALTER TABLE `personal_info_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_programs_tb`
--
ALTER TABLE `training_programs_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voluntary_work_tb`
--
ALTER TABLE `voluntary_work_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience_tb`
--
ALTER TABLE `work_experience_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_semester_tb`
--
ALTER TABLE `academic_semester_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attachment_file_tb`
--
ALTER TABLE `attachment_file_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `civil_service_tb`
--
ALTER TABLE `civil_service_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `education_tb`
--
ALTER TABLE `education_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `family_background_tb`
--
ALTER TABLE `family_background_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `family_children_tb`
--
ALTER TABLE `family_children_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `notification_tb`
--
ALTER TABLE `notification_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `other_info_tb`
--
ALTER TABLE `other_info_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_info_tb`
--
ALTER TABLE `personal_info_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `training_programs_tb`
--
ALTER TABLE `training_programs_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `voluntary_work_tb`
--
ALTER TABLE `voluntary_work_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `work_experience_tb`
--
ALTER TABLE `work_experience_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
