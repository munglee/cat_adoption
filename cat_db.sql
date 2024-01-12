-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 03:45 PM
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
-- Database: `cat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `catappointment`
--

CREATE TABLE `catappointment` (
  `appointment_id` int(11) NOT NULL,
  `person_name` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catappointment`
--

INSERT INTO `catappointment` (`appointment_id`, `person_name`, `cat_id`, `appointment_date`, `contact_phone`, `email`) VALUES
(1001, 'John Doe', 1, '2024-01-15', '+1 123-456-7890', 'john.doe@example.com'),
(1002, 'Jane Smith', 2, '2024-01-16', '+1 234-567-8901', 'jane.smith@example.com'),
(1003, 'Bob Johnson', 3, '2024-01-17', '+1 345-678-9012', 'bob.johnson@example.com'),
(1004, 'Alice Brown', 4, '2024-01-18', '+1 456-789-0123', 'alice.brown@example.com'),
(1005, 'Charlie Davis', 5, '2024-01-19', '+1 567-890-1234', 'charlie.davis@example.com'),
(1006, 'Eva White', 6, '2024-01-20', '+1 678-901-2345', 'eva.white@example.com'),
(1007, 'Frank Miller', 7, '2024-01-21', '+1 789-012-3456', 'frank.miller@example.com'),
(1008, 'Grace Wilson', 8, '2024-01-22', '+1 890-123-4567', 'grace.wilson@example.com'),
(1009, 'Henry Taylor', 9, '2024-01-23', '+1 901-234-5678', 'henry.taylor@example.com'),
(1010, 'Ivy Lee', 10, '2024-01-24', '+1 012-345-6789', 'ivy.lee@example.com'),
(1011, 'Jack Adams', 11, '2024-01-25', '+1 123-456-7890', 'jack.adams@example.com'),
(1012, 'Kelly Hall', 12, '2024-01-26', '+1 234-567-8901', 'kelly.hall@example.com'),
(1013, 'Leo Turner', 13, '2024-01-27', '+1 345-678-9012', 'leo.turner@example.com'),
(1014, 'Mia Garcia', 3, '2024-01-28', '+1 456-789-0123', 'mia.garcia@example.com'),
(1015, 'Nathan Clark', 1, '2024-01-29', '+1 567-890-1234', 'nathan.clark@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`, `sex`, `age`, `color`, `description`, `image`) VALUES
(1, 'Fluffy', 'Female', 3, 'White', 'Adorable white cat with blue eyes.', 'images/cats/1.jpg'),
(2, 'Whiskers', 'Male', 2, 'Tabby', 'Playful tabby cat with a long tail.', 'images/cats/2.jpg'),
(3, 'Mittens', 'Female', 5, 'Black', 'Cuddly black cat with white paws.', 'images/cats/3.jpg'),
(4, 'Simba', 'Male', 1, 'Orange', 'Energetic orange kitten with a playful personality.', 'images/cats/4.jpg'),
(5, 'Luna', 'Female', 4, 'Calico', 'Graceful calico cat with a sweet demeanor.', 'images/cats/5.jpg'),
(6, 'Oreo', 'Male', 2, 'Black and White', 'Adorable black and white cat with distinct markings.', 'images/cats/6.jpg'),
(7, 'Cleo', 'Female', 6, 'Siamese', 'Beautiful Siamese cat with striking blue eyes.', 'images/cats/7.jpg'),
(8, 'Max', 'Male', 3, 'Gray', 'Charming gray cat known for its friendly nature.', 'images/cats/8.jpg'),
(9, 'Sasha', 'Female', 2, 'Brown Tabby', 'Playful brown tabby cat with a mischievous streak.', 'images/cats/9.jpg'),
(10, 'Charlie', 'Male', 4, 'Spotted', 'Spotted cat with a curious and adventurous personality.', 'images/cats/10.jpg'),
(11, 'Mocha', 'Female', 1, 'Chocolate', 'Sweet chocolate-colored kitten that loves to cuddle.', 'images/cats/11.jpg'),
(12, 'Leo', 'Male', 5, 'Bengal', 'Strikingly patterned Bengal cat with a bold presence.', 'images/cats/12.jpg'),
(13, 'Misty', 'Female', 3, 'Gray', 'Gentle gray and white cat that enjoys napping.', 'images/cats/13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catappointment`
--
ALTER TABLE `catappointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catappointment`
--
ALTER TABLE `catappointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
