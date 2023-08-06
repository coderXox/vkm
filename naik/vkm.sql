-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 01:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(16) NOT NULL,
  `admin_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `footer_id` int(11) NOT NULL,
  `footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`footer_id`, `footer`) VALUES
(1, '<b>Copyright &copy; 2023 Vighnesh And Deekshit All Right Reserved  </b>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `feedback`, `date`) VALUES
(1, 'manoj naik', 'manunaik@gmail.com', 'best website', '2023-08-05'),
(2, 'manoj naik', 'manunaik@gmail.com', 'best website', '2023-08-05'),
(3, 'ravi', 'abcd@gmail.com', 'rtghehyte', '2023-08-05'),
(5, 'gaurish naik', 'gau@gmail.com', 'good brooo', '2023-08-05'),
(6, 'harishh', 'harish@gmail.com', 'fine..', '2023-08-05'),
(7, 'sujit', 'sujit@gmail.com', 'good', '2023-08-05'),
(8, 'pritham', 'preetu@gmail.com', 'op bash', '2023-08-05'),
(9, 'adarsh', 'adhu@gmail.com', 'good website', '2023-08-06'),
(10, 'adarsh', 'adhu@gmail.com', 'good website', '2023-08-06'),
(11, 'adarsh', 'adhu@gmail.com', 'good website', '2023-08-06'),
(12, 'hanish', 'hanishu@gmail.com', 'good website thank you', '2023-08-06'),
(13, 'hanish', 'hanishu@gmail.com', 'good website thank you', '2023-08-06'),
(14, 'hanish', 'hanishu@gmail.com', 'good website thank you', '2023-08-06'),
(15, 'ravi s', 'ravi22@gamil.com', 'im ravi nice website', '2023-08-06'),
(16, 'dinesh', 'dinu@gmail.com', 'tryt', '2023-08-06'),
(17, 'teja', 'teja@gmail.com', 'tgrwfew', '2023-08-06'),
(18, 'teja', 'teja@gmail.com', 'tgrwfew', '2023-08-06'),
(19, 'teja', 'teja@gmail.com', 'tgrwfew', '2023-08-06'),
(20, 'shree', 'sri@gmail.com', 'very best broo', '2023-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`footer_id`),
  ADD UNIQUE KEY `id` (`footer`(11));

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
