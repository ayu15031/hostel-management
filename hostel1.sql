-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 11:13 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img_src` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `img_src`) VALUES
(1, 'sneha_chauhan', '123456', 'upload/5b535abec58f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `girls_details`
--

CREATE TABLE `girls_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enrollment_no` varchar(50) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `book_status` int(11) NOT NULL DEFAULT '0',
  `room_no` int(11) DEFAULT NULL,
  `seat_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `girls_details`
--

INSERT INTO `girls_details` (`id`, `name`, `enrollment_no`, `roll_no`, `book_status`, `room_no`, `seat_no`) VALUES
(1, 'Ayushi Agarwal', 'ID20160049', 'BT16CSE050', 1, 202, 3),
(2, 'Snigdha Agarwal', 'ID20160057', 'BT16CSE054', 1, 201, 2),
(3, 'Shreya Kumari', 'ID20160130', 'BT16CSE051', 1, 201, 5),
(4, 'Ishita', 'ID20160099', 'BT16EEE016', 0, NULL, NULL),
(5, 'Ananya Sisodia', 'ID20160082', 'BT16EEE012', 1, 203, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_girls`
--

CREATE TABLE `hostel_girls` (
  `room_no` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `book_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_girls`
--

INSERT INTO `hostel_girls` (`room_no`, `seat_no`, `book_status`) VALUES
(201, 1, 1),
(201, 2, 1),
(201, 3, 1),
(201, 4, 1),
(201, 5, 1),
(201, 6, 1),
(202, 1, 0),
(202, 2, 0),
(202, 3, 1),
(202, 4, 0),
(202, 5, 0),
(202, 6, 0),
(203, 1, 0),
(203, 2, 1),
(203, 3, 0),
(203, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `enrollment_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `room_no` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`enrollment_no`, `name`, `email`, `address`, `contact_no`, `amount`, `room_no`, `seat_no`) VALUES
('0', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '2147483647', 'Rs. 2000', 201, 1),
('0', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '2147483647', 'Rs. 2000', 201, 1),
('ID20160057', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 201, 1),
('ID20160057', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 201, 1),
('ID20160057', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 202, 1),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 202, 2),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 213, 1),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 210, 2),
('ID20160057', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 202, 5),
('ID20160057', 'Snigdha Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 202, 4),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 213, 2),
('ID20160057', 'Snigdha Agarwal', 'cliffesto.sponsorship@gmail.com', 'bgjytrkijlj', '8686776588', 'Rs. 2000', 204, 2),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 202, 2),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 212, 2),
('ID20160049', 'Ayushi Agarwal', 'cliffesto.sponsorship@gmail.com', 'm;k', '8686776588', 'Rs. 2000', 212, 1),
('ID20160057', 'Snigdha Agarwal', 'cliffesto.sponsorship@gmail.com', 'dgfdd', '8686776588', 'Rs. 2000', 209, 1),
('ID20160049', 'Ayushi Agarwal', 'cliffesto.sponsorship@gmail.com', 'ohiuh', '8686776588', 'Rs. 2000', 212, 5),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 201, 6),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 201, 4),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 201, 6),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '9997973377', 'Rs. 2000', 201, 1),
('ID20160049', 'Ayushi Agarwal', 'drkkanatomy@gmail.com', 'Ganga Vihar Gaujajali Bichali Bareilly Road', '09997973377', 'Rs. 2000', 202, 3),
('ID20160082', 'Ananya Sisodia', 'sisodiaananya2@gmail.com', '113/11 Pratap Nagar Sanganer Jaipur Rajasthan', '7568962646', 'Rs. 2000', 203, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girls_details`
--
ALTER TABLE `girls_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `girls_details`
--
ALTER TABLE `girls_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
