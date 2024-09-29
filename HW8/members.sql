-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 11:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhw8`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_number` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `agency` varchar(255) DEFAULT NULL,
  `businesstype` varchar(255) DEFAULT NULL,
  `addresscom` text DEFAULT NULL,
  `mobilephone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_number`, `date`, `first_name`, `surname`, `dob`, `age`, `sex`, `nationality`, `agency`, `businesstype`, `addresscom`, `mobilephone`, `email`) VALUES
(2, '12345678', '2024-09-19', 'John', 'Wrick', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(3, '12345684', '2024-09-19', 'John', 'Snow', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(4, '12345684', '2024-09-19', 'John', 'Smith', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(5, '12345684', '2024-09-19', 'John', 'Son', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(6, '12345684', '2024-09-19', 'John', 'Famer', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(7, '12345684', '2024-09-19', 'John', 'Macnus', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(8, '12345684', '2024-09-19', 'John', 'String', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(9, '12345684', '2024-09-19', 'John', 'Marvel', '1997-07-15', 27, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(10, '12345684', '2024-09-19', 'John', 'From', '1998-10-25', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(11, '12345684', '2024-09-19', 'Ben', 'Ten', '1998-10-10', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(12, '12345684', '2024-09-19', 'John', 'Rose', '1998-09-12', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(13, '12345684', '2024-09-19', 'John', 'Wait', '1998-09-08', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(14, '12345684', '2024-09-19', 'John', 'Under', '1998-06-19', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(15, '12345684', '2024-09-19', 'John', 'Upper', '1998-06-04', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '12312312313', 'eeeee@gmail.com'),
(16, '12345684', '2024-09-19', 'John', 'Mango', '1998-06-04', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'asdasd@gmail.com'),
(17, '12345684', '2024-09-19', 'John', 'Bannana', '1998-04-29', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'asdasd@gmail.com'),
(18, '12345684', '2024-09-19', 'John', 'Winyu', '1998-01-22', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'asdasd@gmail.com'),
(19, '12345684', '2024-09-19', 'John', 'Labubu', '1998-01-01', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'asdasd@gmail.com'),
(20, '12345684', '2024-09-19', 'John', 'Age', '1998-04-09', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'asdfasdfasdf@gmail.com'),
(21, '12345684', '2024-09-19', 'John', 'Endos', '1998-06-17', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'qeqwe@gmail.com'),
(22, '12345684', '2024-09-19', 'John', 'Nitro', '1998-06-25', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', 'qeqwe@gmail.com'),
(23, '12345691', '2024-09-19', 'John', 'Nitro', '1998-06-25', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', '312133@gmail.com'),
(24, '99999999', '2024-09-19', 'Johny', 'English', '1998-09-09', 26, '0', 'thai', 'dasdasdas', 'asdasdasd', 'asdasd', '134132423', '99999999@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
