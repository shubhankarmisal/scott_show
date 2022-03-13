-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 11:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `movie_name` varchar(200) NOT NULL,
  `release_date` date NOT NULL DEFAULT current_timestamp(),
  `m_description` text NOT NULL,
  `movie_poster` text NOT NULL,
  `remark` varchar(30) NOT NULL,
  `jsondata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jsondata`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_movies`
--

INSERT INTO `add_movies` (`m_id`, `movie_name`, `release_date`, `m_description`, `movie_poster`, `remark`, `jsondata`) VALUES
(19, 'Jurassic World', '2022-03-21', 'lksjdliaji siahdioas hoidhoa isdoia jodiaj osia', '\r\nproduct12032223356.jpg', 'active', '{\"screen_selected\":[{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen1\"},{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen2\"},{\"branch\":\"Dadar\",\"theator\":\"IMAX\",\"screen\":\"Screen2\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen3\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen4\"}],\"release_date\":\"2022-03-21\",\"movie_hr\":\"3\",\"upper_screen\":\"500\",\"middle_screen\":\"400\",\"lower_screen\":\"300\"}'),
(20, 'Pushpa', '2022-03-21', 'kashdkjadshdk alsjd ioas oidaoi', '\r\nproduct12032223513.jpg', 'active', '{\"screen_selected\":[{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen1\"},{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen2\"},{\"branch\":\"Dadar\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen2\"}],\"release_date\":\"2022-03-21\",\"movie_hr\":\"3\",\"upper_screen\":\"500\",\"middle_screen\":\"300\",\"lower_screen\":\"250\"}'),
(21, 'Spider Man', '2022-03-22', 'lksdhfksd', '\r\nproduct12032223733.jpg', 'active', '{\"screen_selected\":[{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen1\"},{\"branch\":\"Dadar\",\"theator\":\"IMAX\",\"screen\":\"Screen2\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen3\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen4\"}],\"release_date\":\"2022-03-22\",\"movie_hr\":\"3\",\"upper_screen\":\"600\",\"middle_screen\":\"400\",\"lower_screen\":\"250\"}'),
(22, 'UnCharted', '2022-03-21', 'asjdhkashdiooa odiohaoi ssaoid aoidoiasho idasoid haos hdoia', '\r\nproduct12032224023.jpg', 'active', '{\"screen_selected\":[{\"branch\":\"Dadar\",\"theator\":\"PVR\",\"screen\":\"Screen1\"},{\"branch\":\"Dadar\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen1\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen2\"},{\"branch\":\"Wadala\",\"theator\":\"IMAX\",\"screen\":\"Screen4\"}],\"release_date\":\"2022-03-21\",\"movie_hr\":\"3\",\"upper_screen\":\"450\",\"middle_screen\":\"300\",\"lower_screen\":\"250\"}');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `remark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `uname`, `password`, `remark`) VALUES
(3, 'admin', 'admin@123', 'admin'),
(4, 'shubhankar', 'shubhankar@123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `b_address` text NOT NULL,
  `screen_txt` text NOT NULL,
  `b_city` varchar(30) NOT NULL,
  `b_state` varchar(30) NOT NULL,
  `b_country` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `t_id`, `branch_name`, `b_address`, `screen_txt`, `b_city`, `b_state`, `b_country`, `zipcode`) VALUES
(10, 15, 'Dadar', 'Motilal Neharu Nagar, S.M. Road, Opp Vijay Nagar, Antop hill', '\n{\n    \"screen\":[\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen1\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen2\"\n        }\n    ]\n}\n', 'Dehradun', 'Maharashtra', 'India', '400037'),
(11, 16, 'Dadar', 'Motilal Neharu Nagar, S.M. Road, Opp Vijay Nagar, Antop hill', '\n{\n    \"screen\":[\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen1\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen2\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen3\"\n        }\n    ]\n}\n', 'Dehradun', 'Maharashtra', 'India', '400037'),
(12, 16, 'Wadala', 'Motilal Neharu Nagar, S.M. Road, Opp Vijay Nagar, Antop hill', '{\n    \"screen\":[\n        {\n            \"lower\":{\n                \"A\":[0,1,0,3,0,4,5,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen1\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen2\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen3\"\n        },\n        {\n            \"lower\":{\n                \"A\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"B\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"C\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"D\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"E\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"middle\":{\n                \"F\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"G\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"H\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"I\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"J\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"K\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"L\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"upper\":{\n                \"M\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"N\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],\n                \"O\":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]\n            },\n            \"screen_name\":\"Screen4\"\n        }\n    ]\n}', 'Mumbai', 'Maharashtra', 'India', '400037');

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `t_id` int(11) NOT NULL,
  `t_date` datetime NOT NULL DEFAULT current_timestamp(),
  `t_name` varchar(30) NOT NULL,
  `t_location` varchar(100) NOT NULL,
  `t_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`t_id`, `t_date`, `t_name`, `t_location`, `t_status`) VALUES
(15, '2022-03-03 16:23:36', 'PVR', 'Dadar', 'active'),
(16, '2022-03-03 16:24:05', 'IMAX', 'Wadala', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movies`
--
ALTER TABLE `add_movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movies`
--
ALTER TABLE `add_movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `theatres`
--
ALTER TABLE `theatres`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
