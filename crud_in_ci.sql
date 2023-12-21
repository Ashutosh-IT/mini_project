-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 06:49 AM
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
-- Database: `crud_in_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `urn` int(11) NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`urn`, `name`, `branch`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2104372, 'Ashutosh Kumar', 'D3IT', NULL, '2023-12-19 16:21:23', NULL),
(2104408, 'Prashant Singh Yadav', 'D3IT', NULL, '2023-12-19 16:22:56', NULL),
(2104572, 'Shivam', 'D3IT', NULL, '2023-12-19 16:22:19', '2023-12-19 11:44:25'),
(2114372, 'John Doe', 'Computer Science', '2023-12-19 11:43:06', '2023-12-19 16:38:03', '2023-12-19 11:43:06'),
(2114373, 'James Bond', 'Electrical Engineering', NULL, '2023-12-19 16:38:03', '2023-12-19 11:08:27'),
(2114477, 'Alice Johnson', 'Mathematics', '2023-12-19 11:43:04', '2023-12-19 16:38:03', '2023-12-19 11:43:04'),
(2137898, 'Random', 'PE', '2023-12-19 11:09:54', '2023-12-19 11:09:49', '2023-12-19 11:09:54'),
(2145678, 'Bob William', 'Physics', '2023-12-19 11:43:12', '2023-12-19 16:38:03', '2023-12-19 11:43:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`urn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
