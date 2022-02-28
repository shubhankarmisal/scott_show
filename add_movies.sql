-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 03:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movies`
--

CREATE TABLE `add_movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(30) NOT NULL,
  `actors` varchar(30) NOT NULL,
  `movie_poster` text NOT NULL,
  `m_description` text NOT NULL,
  `m_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_movies`
--

INSERT INTO `add_movies` (`m_id`, `m_name`, `release_date`, `director`, `actors`, `movie_poster`, `m_description`, `m_date`) VALUES
(13, 'spider-man', '2022-02-09', 'john snow', 'Tom &  Zandiya', 'spider_man.jpg', 'fafef', '2022-02-28 18:33:39'),
(14, 'Uncharted', '2022-02-04', 'jonas', 'martha', 'uncharted.jpg', 'beat movie', '2022-02-28 18:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movies`
--
ALTER TABLE `add_movies`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movies`
--
ALTER TABLE `add_movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
