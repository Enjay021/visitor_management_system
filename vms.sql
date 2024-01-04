-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 04:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_emp_name` varchar(100) NOT NULL,
  `dep_emp_phone` int(8) NOT NULL,
  `dep_emp_pos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `dep_name`, `dep_emp_name`, `dep_emp_phone`, `dep_emp_pos`) VALUES
(1, 'IT Department', 'Neljayson Antonio', 85969718, 'Web Developer'),
(2, 'Engineering Department', 'Joanalene Antonio', 94854671, 'Quantity Surveyor'),
(3, 'Marketing Department', 'Jasmin Clarisse', 919234567, 'Teller'),
(4, 'Logistic Department', 'Nel Daruin Antonio', 923245565, 'Quality Assurance'),
(6, 'Police Department', 'Nel Christopher Antonio', 889930498, 'Police Officer');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tbl`
--

CREATE TABLE `visitor_tbl` (
  `id` int(11) NOT NULL,
  `visitor_name` varchar(100) NOT NULL,
  `visitor_phone` int(8) NOT NULL,
  `visitor_ic` varchar(100) NOT NULL,
  `visitor_address` varchar(100) NOT NULL,
  `dep_emp_name` varchar(100) NOT NULL,
  `dep_emp_phone` int(8) NOT NULL,
  `visitor_purpose` varchar(200) NOT NULL,
  `visitor_time_in` datetime NOT NULL,
  `visitor_time_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_tbl`
--

INSERT INTO `visitor_tbl` (`id`, `visitor_name`, `visitor_phone`, `visitor_ic`, `visitor_address`, `dep_emp_name`, `dep_emp_phone`, `visitor_purpose`, `visitor_time_in`, `visitor_time_out`) VALUES
(1, 'Arnold Swa', 9876789, 'L98765678', 'Somewhere Down The road', 'Neljayson Antonio', 0, 'Deliver Food and stuffs', '2024-01-02 13:38:00', '0000-00-00 00:00:00'),
(2, 'Dan', 7890987, 'J87898', 'Yishun 229', 'Neljayson Antonio', 0, 'Tutor', '2024-01-03 12:09:00', '0000-00-00 00:00:00'),
(3, 'Edz', 8767989, 'H878098', 'Yishun 229', 'Joanalene Antonio', 0, 'Deliver food', '2024-01-03 12:11:00', '0000-00-00 00:00:00'),
(4, 'chareles', 2147483647, 'lkhjkgfgh567', 'manila', 'Neljayson Antonio', 0, 'games', '2024-01-03 13:17:00', '0000-00-00 00:00:00'),
(5, 'Leo', 567, 'a9878', 'Philippines', 'Joanalene Antonio', 0, 'Delivery', '2024-01-03 13:33:00', '0000-00-00 00:00:00'),
(6, 'CJ Antonio', 9876789, 'L09876567', 'Manila', 'Neljayson Antonio', 0, 'Play Games', '2024-01-03 13:52:00', '0000-00-00 00:00:00'),
(7, 'Nel Daruin', 876789098, 'L9879', 'Nueva Ecija', 'Neljayson Antonio', 0, 'Play Basketball', '2024-01-03 13:56:00', '0000-00-00 00:00:00'),
(8, 'Daniel', 987890, 'F09889', 'Yishun 229', 'Neljayson Antonio', 0, 'Tutor Java', '2024-01-03 14:02:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_tbl`
--
ALTER TABLE `visitor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor_tbl`
--
ALTER TABLE `visitor_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
