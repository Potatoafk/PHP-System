-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 08:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `username`, `password`) VALUES
(1, 'admin01', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_table`
--

CREATE TABLE `candidates_table` (
  `candidate_id` int(11) NOT NULL,
  `candidate_first_name` varchar(100) DEFAULT NULL,
  `candidate_last_name` varchar(100) DEFAULT NULL,
  `candidate_position` varchar(100) DEFAULT NULL,
  `election_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates_table`
--

INSERT INTO `candidates_table` (`candidate_id`, `candidate_first_name`, `candidate_last_name`, `candidate_position`, `election_id`) VALUES
(1, 'John ', 'Smith', 'President', 1),
(2, 'Jane', 'Doe', 'President', 1),
(3, 'Michael ', 'Brown', 'Vice-President', 1),
(4, 'Sarah', 'Wilson', 'Vice-President', 1),
(5, 'Thomas ', 'Anderson', 'Secretary', 1),
(6, 'Emily ', 'Taylor', 'Secretary', 1),
(7, 'Richard', 'Davis', 'Treasurer', 1),
(8, 'Elizabeth ', 'Miller', 'Treasurer', 1),
(9, 'Charles', 'Wilson', 'Auditor', 1),
(10, 'Susan', 'Martin', 'Auditor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `election_table`
--

CREATE TABLE `election_table` (
  `election_id` int(11) NOT NULL,
  `election_title` varchar(255) NOT NULL,
  `election_description` text NOT NULL,
  `election_created` date NOT NULL DEFAULT current_timestamp(),
  `election_status` enum('Ongoing','Ended') NOT NULL DEFAULT 'Ongoing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `election_table`
--

INSERT INTO `election_table` (`election_id`, `election_title`, `election_description`, `election_created`, `election_status`) VALUES
(1, 'Presidential Election 2025', 'Select representatives for your city council. Choose up to 3 candidates from your district.', '2025-06-03', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_no`, `date_of_birth`, `password`) VALUES
(1, 'John', 'Doe', 'johndoe@gmail.com', '09123456789', '2025-06-03', 'johndoe'),
(2, 'samplefirstname', 'samplelastname', 'sample@gmail.com', '09987654321', '2025-06-03', '$2y$10$e4h.K3jdR9ePKwUH/Nuxhe4u6nzWhZnLiaZaYyOhS8zBhQTs20dQ6');

-- --------------------------------------------------------

--
-- Table structure for table `votes_table`
--

CREATE TABLE `votes_table` (
  `vote_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `election_id` int(11) DEFAULT NULL,
  `vote_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes_table`
--

INSERT INTO `votes_table` (`vote_id`, `user_id`, `candidate_id`, `election_id`, `vote_time`) VALUES
(1, 2, NULL, NULL, '2025-06-04 01:53:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidates_table`
--
ALTER TABLE `candidates_table`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `election_id` (`election_id`);

--
-- Indexes for table `election_table`
--
ALTER TABLE `election_table`
  ADD PRIMARY KEY (`election_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `votes_table`
--
ALTER TABLE `votes_table`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `election_id` (`election_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates_table`
--
ALTER TABLE `candidates_table`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `election_table`
--
ALTER TABLE `election_table`
  MODIFY `election_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votes_table`
--
ALTER TABLE `votes_table`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates_table`
--
ALTER TABLE `candidates_table`
  ADD CONSTRAINT `candidates_table_ibfk_1` FOREIGN KEY (`election_id`) REFERENCES `election_table` (`election_id`);

--
-- Constraints for table `votes_table`
--
ALTER TABLE `votes_table`
  ADD CONSTRAINT `votes_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `votes_table_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidates_table` (`candidate_id`),
  ADD CONSTRAINT `votes_table_ibfk_3` FOREIGN KEY (`election_id`) REFERENCES `election_table` (`election_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
