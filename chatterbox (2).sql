-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 09:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatterbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `s_id` int(15) NOT NULL,
  `com_id` int(15) NOT NULL,
  `com_text` varchar(500) NOT NULL,
  `likes` int(20) NOT NULL,
  `u_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`s_id`, `com_id`, `com_text`, `likes`, `u_id`) VALUES
(14, 12030, 'Thanks Sowndhi...', 0, 'Priya K'),
(10, 2, 'Enjoyyy well Priya', 3, 'Sowndhi K');

-- --------------------------------------------------------

--
-- Table structure for table `status_table`
--

CREATE TABLE `status_table` (
  `u_id` varchar(35) NOT NULL,
  `status_id` int(20) NOT NULL,
  `status_text` varchar(600) NOT NULL,
  `image` blob NOT NULL,
  `p_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_table`
--

INSERT INTO `status_table` (`u_id`, `status_id`, `status_text`, `image`, `p_time`, `likes`) VALUES
('Sowndhi K', 9, 'maruvarthai pesathey....', '', '2017-06-02 18:46:26', 0),
('Priya K', 10, 'I feel great pleasure in irritating sowdhi...', '', '2017-06-02 18:46:26', 0),
('Priya K', 14, 'Feeling hungry.Somebody take me to Junior Kuppanna plsss.........', '', '2017-06-02 18:46:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pro_pic` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `user_id`, `pass`, `email`, `phone`, `pro_pic`) VALUES
(1003, 'kousalya K', 'kousi@123', 'kousi@gmail.com', '9095959088', NULL),
(1002, 'Priya K', 'priya@123', 'kpriyak@gmail.com', '9942270952', NULL),
(1001, 'Sowndhi K', 'sowndhi@123', 'sowndhi1@gmail.com', '8883228694', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `com_id` (`com_id`);

--
-- Indexes for table `status_table`
--
ALTER TABLE `status_table`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `com_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12031;
--
-- AUTO_INCREMENT for table `status_table`
--
ALTER TABLE `status_table`
  MODIFY `status_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
