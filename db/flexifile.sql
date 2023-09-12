-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 07:05 AM
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
(1, 4, 'rsdsd', '', '0000-00-00', '', '', '0000-00-00'),
(2, 4, 'dfggfd', '80%', '2023-09-04', 'dwee', '432442', '2023-09-20'),
(3, 4, 'test', '', '0000-00-00', '', '', '0000-00-00'),
(4, 4, 'test', '', '0000-00-00', '', '', '0000-00-00'),
(5, 4, 'test3', '', '0000-00-00', '', '', '0000-00-00'),
(6, 4, '', '423', '0000-00-00', '', '', '0000-00-00'),
(7, 4, 'test3', '', '0000-00-00', '', '', '0000-00-00'),
(8, 4, '', '423', '0000-00-00', '', '', '0000-00-00'),
(9, 4, 'success', '43', '2023-09-05', 'success', '4334', '2023-09-18'),
(10, 4, 'success', '43', '2023-09-05', 'success', '4334', '2023-09-18'),
(11, 4, 'success', '43', '2023-09-05', 'success', '4334', '2023-09-18'),
(12, 4, 'tes4', 'test4', '0000-00-00', '', '', '0000-00-00'),
(13, 4, 'tes4', 'test4', '0000-00-00', '', '', '0000-00-00'),
(14, 4, 'tes4', 'test4', '0000-00-00', '', '', '0000-00-00'),
(15, 4, 'tes4', 'test4', '0000-00-00', '', '', '0000-00-00'),
(16, 4, 'tes4', 'test4', '0000-00-00', '', '', '0000-00-00'),
(17, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(18, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(19, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(20, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(21, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(22, 4, 'eqeq', '3123', '2023-09-05', 'weew', '232', '2023-09-11'),
(23, 4, 'xzc', '', '0000-00-00', '', '', '0000-00-00'),
(24, 4, 'xzc', '', '0000-00-00', '', '', '0000-00-00'),
(25, 4, 'testing', '', '0000-00-00', '', '', '0000-00-00'),
(26, 4, 'testing', '', '0000-00-00', '', '', '0000-00-00'),
(27, 4, 'success', '', '0000-00-00', '', '', '0000-00-00'),
(28, 4, 'success', '', '0000-00-00', '', '', '0000-00-00'),
(29, 4, 'success', '', '0000-00-00', '', '', '0000-00-00'),
(30, 4, 'success', '', '0000-00-00', '', '', '0000-00-00'),
(31, 4, 'success', '', '0000-00-00', '', '', '0000-00-00');

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
(1, 1, 'elementary', '', '', '', '', '', '', ''),
(2, 1, 'secondary', '', '', '', '', '', '', ''),
(3, 4, 'vocational', '', '', '', '', '', '', ''),
(4, 4, 'vocational', '', '', '', '', '', '', ''),
(5, 4, 'graduate', '', '', '', '', '', '', ''),
(6, 4, 'graduate', '', '', '', '', '', '', ''),
(7, 4, 'graduate', '', '', '', '', '', '', ''),
(8, 4, 'graduate', '', '', '', '', '', '', ''),
(9, 4, 'college', '', '', '', '', '', '', ''),
(10, 4, 'elementary', '', '', '', '', '', '', ''),
(11, 4, 'elementary', '', '', '', '', '', '', ''),
(12, 4, 'elementary', '', '', '', '', '', '', ''),
(13, 4, 'secondary', '', '', '', '', '', '', ''),
(14, 4, 'secondary', '', '', '', '', '', '', ''),
(15, 4, 'elementary', '', '', '', '', '', '', ''),
(16, 4, 'elementary', '', '', '', '', '', '', ''),
(17, 4, 'elementary', 'Darea Anne Jawili', 'fssd', '2344', '3444', '', 'fsfsdf', 'fsd'),
(18, 4, 'vocational', 'darea tetsu', 'dada', '2333', '2333', 'fds', 'fsds', 'fsdsf'),
(19, 4, 'vocational', 'fssfssf', 'fssfs', '7676', '7557', 'n/a', '64656', 'ggd'),
(20, 4, 'vocational', 'fssfssf', 'fssfs', '7676', '7557', 'n/a', '64656', 'ggd'),
(21, 4, 'graduate', 'sfsd', 'sfsd', '5354', '53435', 'rrer', '3432', 'rwer'),
(22, 4, 'graduate', 'jhgh', 'ggfd', '343', '2423', 'gdf', '3432', 'gfgf'),
(23, 4, 'elementary', '', '', '', '', '', '', ''),
(24, 4, 'elementary', '', '', '', '', '', '', ''),
(25, 4, 'vocational', '', '', '', '', '', '', ''),
(26, 4, 'vocational', '', '', '', '', '', '', ''),
(27, 4, 'elementary', 'test', '', '', '', '', '', ''),
(28, 4, 'elementary', 'test', '', '', '', '', '', ''),
(29, 4, 'elementary', 'test', '', '', '', '', '', ''),
(30, 4, 'elementary', 'test', '', '', '', '', '', ''),
(31, 4, 'elementary', 'success', 'success', '3232', '1313', 'success', '231', 'success'),
(32, 4, 'elementary', 'success', 'success', '3232', '1313', 'success', '231', 'success'),
(33, 4, 'elementary', 'success', 'success', '3232', '1313', 'success', '231', 'success'),
(34, 4, 'secondary', 'test3', '', '', '', '', '', ''),
(35, 4, 'secondary', 'test3', '', '', '', '', '', ''),
(36, 4, 'secondary', 'test3', '', '', '', '', '', ''),
(37, 4, 'secondary', 'test3', '', '', '', '', '', ''),
(38, 4, 'secondary', 'test3', '', '', '', '', '', ''),
(39, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(40, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(41, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(42, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(43, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(44, 4, 'elementary', 'dada', 'dad', '32321', '31312', 'ww', '12312', 'weqw'),
(45, 4, 'graduate', 'zcv', '', '', '', '', '', ''),
(46, 4, 'graduate', 'zcv', '', '', '', '', '', ''),
(47, 4, 'elementary', 'testing', '', '', '', '', '', ''),
(48, 4, 'elementary', 'testing', '', '', '', '', '', ''),
(49, 4, 'college', 'success', '', '', '', '', '', ''),
(50, 4, 'college', 'success', '', '', '', '', '', ''),
(51, 4, 'college', 'success', '', '', '', '', '', ''),
(52, 4, 'college', 'success', '', '', '', '', '', ''),
(53, 4, 'college', 'success', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `family_background_tb`
--

CREATE TABLE `family_background_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `childname` varchar(250) NOT NULL,
  `childbirth` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_background_tb`
--

INSERT INTO `family_background_tb` (`id`, `userid`, `childname`, `childbirth`) VALUES
(1, 4, '', ''),
(2, 4, 'Darea Anne M. Jawili', '2023-09-08'),
(3, 4, 'darea jawili', '2023-09-01'),
(4, 4, 'Naruto Namikaze Uzumaki', '2023-09-27');

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
(1, 4, 'fsffas', '2023-09-01', '2023-09-16', '32', 'fs', 'fssd'),
(2, 4, 'success', '0000-00-00', '0000-00-00', '', '', ''),
(3, 4, 'success', '0000-00-00', '0000-00-00', '', '', ''),
(4, 4, 'success', '0000-00-00', '0000-00-00', '', '', ''),
(5, 4, 'success', '0000-00-00', '0000-00-00', '', '', ''),
(6, 4, 'success', '0000-00-00', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `firstname`, `surname`, `email`, `password`, `role`) VALUES
(1, 'Darea Anne', 'Jawili', 'xaiverdragneel@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'faculty_member'),
(3, 'Darea', 'Jawili', 'dareajawili@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'faculty_leader'),
(4, 'Darea Anne', 'Jawili', 'jcreatives028@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Dean'),
(5, 'Naruto', 'Uzumaki', 'naruto@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'program_head');

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
(1, 4, '', '0000-00-00', '0000-00-00', '', ''),
(2, 4, 'sdffds', '0000-00-00', '0000-00-00', '', ''),
(3, 4, 'sdffds', '0000-00-00', '0000-00-00', '', ''),
(4, 4, 'sdffds', '0000-00-00', '0000-00-00', '', ''),
(5, 4, 'dada', '0000-00-00', '0000-00-00', '', ''),
(6, 4, 'dada', '0000-00-00', '0000-00-00', '', ''),
(7, 4, 'dada', '0000-00-00', '0000-00-00', '', ''),
(8, 4, 'ffa', '2023-09-01', '2023-09-13', '223', 'dada'),
(9, 4, 'ffa', '2023-09-01', '2023-09-13', '223', 'dada'),
(10, 4, 'jckj', '2023-09-03', '2023-09-01', 'daa', 'dad'),
(11, 4, 'test', '2023-09-01', '2023-09-01', '21', 'dasd'),
(12, 4, 'testing', '0000-00-00', '0000-00-00', '', ''),
(13, 4, 'sfs', '2023-09-02', '2023-09-04', '3223', 'fssd'),
(14, 4, 'testing', '0000-00-00', '0000-00-00', '', ''),
(15, 4, 'success', '0000-00-00', '0000-00-00', '', ''),
(16, 4, 'success', '0000-00-00', '0000-00-00', '', ''),
(17, 4, 'success', '0000-00-00', '0000-00-00', '', ''),
(18, 4, 'success', '0000-00-00', '0000-00-00', '', ''),
(19, 4, 'success', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience_tb`
--

CREATE TABLE `work_experience_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `work_from_date` date NOT NULL,
  `work_to_date` date NOT NULL,
  `department` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `paygrade` varchar(250) NOT NULL,
  `appointment` varchar(250) NOT NULL,
  `gov_service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experience_tb`
--

INSERT INTO `work_experience_tb` (`id`, `userid`, `work_from_date`, `work_to_date`, `department`, `salary`, `paygrade`, `appointment`, `gov_service`) VALUES
(1, 4, '0000-00-00', '0000-00-00', '', '', '', '', ''),
(2, 4, '0000-00-00', '0000-00-00', 'vdf', '', '', '', ''),
(3, 4, '0000-00-00', '0000-00-00', 'vdf', '', '', '', ''),
(4, 4, '0000-00-00', '0000-00-00', 'vdf', '', '', '', ''),
(5, 4, '2023-09-03', '2023-09-14', 'fsfs', '21311', '3131', 'wew', 'y'),
(6, 4, '0000-00-00', '0000-00-00', 'dada', '', '', '', ''),
(7, 4, '0000-00-00', '0000-00-00', 'xcv', '', '', '', ''),
(8, 4, '0000-00-00', '0000-00-00', 'xcv', '', '', '', ''),
(9, 4, '0000-00-00', '0000-00-00', 'testing', '', '', '', ''),
(10, 4, '0000-00-00', '0000-00-00', 'testing', '', '', '', ''),
(11, 4, '0000-00-00', '0000-00-00', 'success', '', '', '', ''),
(12, 4, '0000-00-00', '0000-00-00', 'success', '', '', '', ''),
(13, 4, '0000-00-00', '0000-00-00', 'success', '', '', '', ''),
(14, 4, '0000-00-00', '0000-00-00', 'success', '', '', '', ''),
(15, 4, '0000-00-00', '0000-00-00', 'success', '', '', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `civil_service_tb`
--
ALTER TABLE `civil_service_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `education_tb`
--
ALTER TABLE `education_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `family_background_tb`
--
ALTER TABLE `family_background_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_programs_tb`
--
ALTER TABLE `training_programs_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voluntary_work_tb`
--
ALTER TABLE `voluntary_work_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `work_experience_tb`
--
ALTER TABLE `work_experience_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
