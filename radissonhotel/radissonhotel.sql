-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 09:37 AM
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
-- Database: `radissonhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestlist`
--

CREATE TABLE `guestlist` (
  `guest_id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestlist`
--

INSERT INTO `guestlist` (`guest_id`, `fullname`, `email`, `phone_number`, `date_created`) VALUES
(1, 'Rezzie Jane Lopez', 'lopezrezziejane@gmail.com', 2147483647, '2024-11-29 14:08:56'),
(2, 'Trinity Fadel', 'camden.simonis@example.net', 784, '2024-04-03 12:03:31'),
(3, 'Koby Medhurst', 'rosamond.doyle@example.com', 2147483647, '1981-07-14 22:30:15'),
(4, 'Teagan Donnelly', 'lubowitz.luna@example.net', 546195, '1996-09-25 20:24:53'),
(5, 'Prof. Luciano Gerhold', 'nsauer@example.com', 0, '1988-12-17 05:04:56'),
(6, 'Ms. Aleen Mante', 'jolie.west@example.com', 0, '2000-08-22 15:17:47'),
(7, 'Leann Goyette', 'jany.robel@example.net', 0, '1979-11-02 06:35:12'),
(8, 'Miss Asha Hilpert IV', 'hermiston.scarlett@example.net', 0, '2015-10-16 02:39:27'),
(9, 'Maude Howell', 'electa.luettgen@example.net', 134007, '2001-07-25 03:39:03'),
(10, 'Rod Hauck', 'travon.o\'conner@example.org', 1, '1988-03-14 19:55:48'),
(11, 'Marlin Russel', 'allene89@example.org', 0, '2009-09-27 05:28:44'),
(12, 'Mr. Jordi Maggio Jr.', 'waylon.boyer@example.net', 878200, '1972-09-07 02:05:43'),
(13, 'Tessie Ledner MD', 'pfannerstill.abby@example.net', 687533, '1987-11-20 23:25:16'),
(14, 'Dr. Patricia Kunze Jr.', 'rohan.leon@example.com', 0, '1970-12-14 09:01:40'),
(15, 'Santina Heaney', 'jaida01@example.com', 2147483647, '1988-12-09 04:42:53'),
(16, 'Lawrence Grimes DDS', 'brice.cummings@example.com', 760846, '2014-08-25 20:10:26'),
(17, 'Prof. Russell Macejkovic V', 'astanton@example.org', 685, '2003-12-26 10:33:33'),
(18, 'Berneice Leuschke Sr.', 'dfeil@example.com', 242263, '2014-06-21 23:52:55'),
(19, 'Alisa Kulas', 'kkreiger@example.net', 9, '2004-05-24 15:14:16'),
(20, 'Amira Brekke', 'karina.rice@example.com', 449675, '2002-12-12 10:16:26'),
(21, 'Dixie Konopelski', 'mitchell.dena@example.net', 65, '1982-08-05 11:30:02'),
(22, 'Hillary Boyle', 'general17@example.com', 326, '1999-11-24 18:40:27'),
(23, 'Destany Emard', 'bashirian.haley@example.com', 845, '2022-07-22 23:25:01'),
(24, 'Aditya Schowalter', 'lennie.brekke@example.org', 988889, '2011-02-11 02:39:05'),
(25, 'Karlee Schaefer', 'trisha46@example.com', 974521, '1997-11-13 20:28:38'),
(26, 'Eda Greenfelder', 'ian.stamm@example.com', 1, '1990-05-26 19:11:19'),
(27, 'Eve Eichmann', 'do\'hara@example.net', 932, '2020-05-21 22:11:17'),
(28, 'Ms. Blanca Tromp Jr.', 'caitlyn.feil@example.net', 1, '2013-01-03 00:07:22'),
(29, 'Mr. Ladarius Wiegand', 'jillian94@example.net', 1, '1973-10-23 15:47:02'),
(30, 'Ms. Piper Kemmer', 'vmaggio@example.com', 58, '2021-01-03 11:48:48'),
(31, 'Savanna Cruickshank', 'aditya.balistreri@example.net', 0, '1983-03-28 10:28:12'),
(32, 'Gabriella Green V', 'flatley.jeremy@example.net', 1, '1974-01-21 15:20:20'),
(33, 'Prof. Bessie Kub Jr.', 'estevan30@example.org', 799454, '1984-02-13 09:29:20'),
(34, 'Mr. Martin Konopelski V', 'miles36@example.net', 1, '2001-04-05 13:19:30'),
(35, 'Ms. Marina Kuhic', 'leatha.wilkinson@example.net', 872, '2021-03-11 01:54:12'),
(36, 'Mr. Javonte Crist', 'chaya.armstrong@example.net', 1, '1982-07-08 10:23:27'),
(37, 'Stanley Walker', 'bernier.letha@example.org', 1, '2001-01-24 11:05:23'),
(38, 'Payton Eichmann', 'hyatt.kavon@example.org', 712, '2014-10-03 02:14:42'),
(39, 'Sydnee Torphy', 'nedra67@example.net', 734749, '1972-03-11 20:05:34'),
(40, 'Felipa Lebsack', 'yhauck@example.org', 1, '2004-02-21 13:15:00'),
(41, 'Mrs. Lavonne Ruecker', 'marion88@example.com', 389, '1976-10-27 02:51:53'),
(42, 'Dr. Jaden Rice', 'freda75@example.org', 1, '1970-08-24 22:26:35'),
(43, 'Vivien Kiehn', 'jerel.stiedemann@example.net', 331830534, '1984-02-25 15:44:52'),
(44, 'Lucile Schowalter', 'shana.wisozk@example.com', 449, '2015-08-13 20:07:40'),
(45, 'Dr. Rosamond Mante', 'yost.victor@example.com', 276963, '1982-03-20 21:26:08'),
(46, 'Mr. Davon O\'Connell', 'lillian.eichmann@example.com', 1, '2000-10-15 13:43:32'),
(47, 'Tomasa Bahringer', 'nkuhic@example.net', 1, '1977-06-21 02:15:33'),
(48, 'Dr. Candido DuBuque', 'lemke.alexandre@example.org', 1, '1971-10-24 17:42:32'),
(49, 'Damon Abshire', 'shaniya.lakin@example.org', 632, '2014-12-19 22:59:34'),
(50, 'Destany Hoeger', 'bbeier@example.net', 1, '2012-09-18 11:39:42'),
(51, 'Dr. Hilma Ward', 'tara.o\'connell@example.net', 0, '2014-09-04 03:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `checkindate` datetime NOT NULL,
  `checkoutdate` datetime NOT NULL,
  `guestnumber` int(100) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `specialrequest` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `fullname`, `email`, `phonenumber`, `checkindate`, `checkoutdate`, `guestnumber`, `roomtype`, `specialrequest`) VALUES
(1, 'Kim Cyrus Gamier', 'cyrusgamier@gmail.com', 2147483647, '2024-12-20 00:00:00', '2024-12-24 00:00:00', 2, 'deluxe', 'Breakfast in bed every morning.'),
(2, 'Shaila May Salcedo', 'salcedoshailanmay@gmail.com', 2147483647, '2025-01-01 00:00:00', '2025-01-05 00:00:00', 2, 'deluxe', 'Dim light.');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomID` int(10) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_rates` int(100) NOT NULL,
  `room_description` varchar(100) NOT NULL,
  `room_amenities` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `registration_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullname`, `email`, `password`, `phone_number`, `registration_Date`) VALUES
(5, 'Rosemarie Dalangin', 'rosemarie12@gmail.com', '$2y$10$bdJ.CP5J7ikVKxohJpcI5.YiJLn9IN6zrnRsYXk.FliB0Tn.vaNzG', 2147483647, '2024-11-25 05:51:24'),
(6, 'admin', 'salcedomarianne81@gmail.com', '$2y$10$KKzIWwvivj.XNgrnWmn8LO7qTrUkopD7n4QK/oMlyMP72VWe7PdyG', 2147483647, '2024-11-25 12:18:05'),
(7, 'Admin', 'admin@admin.com', '12345', 2147483647, '2024-11-28 23:09:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestlist`
--
ALTER TABLE `guestlist`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestlist`
--
ALTER TABLE `guestlist`
  MODIFY `guest_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
