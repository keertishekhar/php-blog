-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 09:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE `post_data` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(13) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `gender` enum('male','female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES
(1, 'keerti', 'bisht', 'kbisht142@gmail.com', 'jkj', 'female'),
(3, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'jkj', 'female'),
(4, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'jkj', 'female'),
(5, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'djdjd', 'male'),
(6, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'ssssss', 'male'),
(7, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'sssss', 'male'),
(8, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'sssss', 'male'),
(9, 'keerti shekhar', 'bisht', 'kbisht142@gmail.com', 'sssss', 'male'),
(11, 'Manoj', NULL, 'manoj@yopmail.com', 'secret', 'male'),
(12, 'Sonu', NULL, 'sony@yopmail.com', 'secret', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_data`
--
ALTER TABLE `post_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
