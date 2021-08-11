-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 12:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `balance` double NOT NULL,
  `profit` double NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `balance`, `profit`, `user_id`) VALUES
(1, 249740350, 3500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `arrivalTime` varchar(30) NOT NULL,
  `departureTime` varchar(30) NOT NULL,
  `pakage` varchar(30) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_parking`
--

CREATE TABLE `car_parking` (
  `id` int(11) NOT NULL,
  `checkIntime` varchar(15) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `confirmation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `check_in_out`
--

CREATE TABLE `check_in_out` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nid` int(30) NOT NULL,
  `checkInTime` varchar(20) NOT NULL,
  `checkOutTime` varchar(15) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cookbook`
--

CREATE TABLE `cookbook` (
  `id` int(11) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `process` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `itemName` varchar(200) NOT NULL,
  `chefId` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookbook`
--

INSERT INTO `cookbook` (`id`, `ingredients`, `process`, `picture`, `itemName`, `chefId`, `status`) VALUES
(4, 'fgggggggggggggg    		', ' seeeeeeeeeee', 'users.PNG', 'awffffff', 9, 'requested'),
(5, 'potato', 'pahihdffhiwfif', 'companies.PNG', 'porota', 0, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `bill` int(10) NOT NULL,
  `empId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL DEFAULT 'New Member' COMMENT '1. Premium, 2. Gold, 3. New',
  `totalBookingAmount` double NOT NULL DEFAULT 0,
  `totalBookedRooms` int(11) NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `position`, `totalBookingAmount`, `totalBookedRooms`, `discount`, `user_id`) VALUES
(1, 'Premium', 25500, 7, 22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `daily_profit`
--

CREATE TABLE `daily_profit` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `profit` double NOT NULL,
  `month_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_profit`
--

INSERT INTO `daily_profit` (`id`, `day`, `profit`, `month_id`, `year_id`) VALUES
(1, 1, 23500, 1, 3),
(2, 2, 24500, 1, 3),
(3, 3, 25500, 1, 3),
(4, 4, 26500, 1, 3),
(5, 5, 29500, 1, 3),
(6, 6, 26500, 1, 3),
(7, 7, 25500, 1, 3),
(8, 8, 20500, 1, 3),
(9, 9, 24500, 1, 3),
(10, 10, 28500, 1, 3),
(11, 11, 29500, 1, 3),
(12, 12, 30000, 1, 3),
(13, 13, 31000, 1, 3),
(14, 14, 33500, 1, 3),
(15, 15, 25500, 1, 3),
(16, 16, 28500, 1, 3),
(17, 17, 33500, 1, 3),
(18, 18, 32500, 1, 3),
(19, 19, 29500, 1, 3),
(20, 20, 20500, 1, 3),
(21, 21, 33500, 1, 3),
(22, 22, 34500, 1, 3),
(23, 23, 39500, 1, 3),
(24, 24, 27500, 1, 3),
(25, 25, 29500, 1, 3),
(26, 26, 23500, 1, 3),
(27, 27, 25500, 1, 3),
(28, 28, 26500, 1, 3),
(29, 29, 33500, 1, 3),
(30, 30, 30500, 1, 3),
(31, 31, 29500, 1, 3),
(32, 1, 23500, 2, 3),
(33, 2, 25500, 2, 3),
(34, 3, 24500, 2, 3),
(35, 4, 23500, 2, 3),
(36, 5, 27500, 2, 3),
(37, 6, 28500, 2, 3),
(38, 7, 20500, 2, 3),
(39, 8, 22500, 2, 3),
(40, 9, 29500, 2, 3),
(41, 10, 33500, 2, 3),
(42, 11, 34500, 2, 3),
(43, 12, 33500, 2, 3),
(44, 13, 30500, 2, 3),
(45, 14, 31500, 2, 3),
(46, 15, 26500, 2, 3),
(47, 16, 24500, 2, 3),
(48, 17, 33500, 2, 3),
(49, 18, 24500, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `empfeedback`
--

CREATE TABLE `empfeedback` (
  `id` int(11) NOT NULL,
  `rating` int(15) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `empId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empfeedback`
--

INSERT INTO `empfeedback` (`id`, `rating`, `comment`, `empId`) VALUES
(1, 8, 'hdgbsfgbd', 12),
(2, 5, 'Well', 3),
(3, 5, 'Good', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(11) NOT NULL,
  `balance` int(30) NOT NULL,
  `bonus` int(30) NOT NULL,
  `rating` int(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `salary` int(30) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `balance`, `bonus`, `rating`, `role`, `salary`, `user_id`) VALUES
(1, 895505, 4500, 3, 'Manager', 25500, 2),
(3, 466200, 50, 4, 'Chef', 15500, 6),
(5, 765000, 0, 0, 'Chef', 25500, 8),
(6, 465000, 0, 0, 'Staff', 15500, 9),
(7, 0, 0, 0, 'Staff', 15800, 10),
(8, 0, 0, 0, 'Chef', 15800, 11);

-- --------------------------------------------------------

--
-- Table structure for table `empschedule`
--

CREATE TABLE `empschedule` (
  `date` varchar(10) NOT NULL,
  `startTime` varchar(6) NOT NULL,
  `endTime` varchar(6) NOT NULL,
  `workingHour` int(15) NOT NULL,
  `id` int(11) NOT NULL,
  `empId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empschedule`
--

INSERT INTO `empschedule` (`date`, `startTime`, `endTime`, `workingHour`, `id`, `empId`) VALUES
('05/05/2019', '07:00 ', '12:00 ', 19, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`id`, `itemName`, `quantity`, `picture`, `price`, `status`) VALUES
(1, 'ttt', 1, 'aff.jpg', 34, 'processing'),
(2, 'tala', 3, 'jash.jpg', 56, 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(30) NOT NULL,
  `ingradients` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `rating` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`id`, `item_no`, `item_name`, `price`, `category`, `ingradients`, `item_image`, `rating`) VALUES
(2, 'FD-1002', 'Rice Bowl', 180, 'Dinner', 'Rice | Oil | Salt | Vegetables', 'OIP.jpg', 0),
(3, 'FD-1003', 'Chicken Burger', 175, 'Fast-Food', 'Chicken | Bread | Cheese', 'Chicken-Burger.jpg', 0),
(4, 'FD-1004', 'Chicken Curry', 235, 'Launch', 'Oil | Salt | Chicken | Spices | Vinegar', 'Chicken_Fry_1259_05.jpg', 0),
(5, 'FD-1005', 'Vegetable Curry', 125, 'Launch', 'Oil | Salt | Spices | Vinegar | Vegetables', 'OIP.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product`, `amount`, `price`, `picture`) VALUES
(1, 'tto', 500, 50, 'gsdaf.jpg'),
(2, 'tgtt', 100, 50, 'final3.jpg'),
(3, 'bfd', 111, 50, 'hotel3.jpg'),
(4, 'fgg', 200, 50, 'hotel3.jpg'),
(5, 'hd', 160, 90, 'final4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `position` varchar(10) NOT NULL,
  `cv_file` varchar(50) NOT NULL,
  `expected_salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_profit`
--

CREATE TABLE `monthly_profit` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `profit` int(11) NOT NULL DEFAULT 0,
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly_profit`
--

INSERT INTO `monthly_profit` (`id`, `month`, `profit`, `year_id`) VALUES
(1, 8, 882500, 3),
(2, 9, 498000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL,
  `facility` text NOT NULL,
  `price` int(11) NOT NULL,
  `package_image` varchar(100) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 Active; 0 Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `type`, `facility`, `price`, `package_image`, `available`) VALUES
(2, 'SImple Package', 'Wedding', '180 Persons', 47800, 'pack-1.jpg', 0),
(3, 'Jumbo Wedding Package', 'Birthday', '250-350 Persons | Dinner Menu | Stage Decoration | Free Wifi | Roof Top', 87000, 'porsche_911_carrera_s_2019_4k_4-HD.jpg', 1),
(4, 'Mini Package', 'Birthday', '25-50 Persons | Dinner Menu | Stage Decoration | Roof Top', 3570, 'corsair-hs35-wired-black-stereo-gaming-11596093192.jpg', 1),
(5, 'Candle Light Dinner', 'Dinner', '25-50 Persons | Dinner Menu | Free Wifi | Roof Top', 87000, 'Capture.PNG', 1),
(6, 'Candle Light Dinner 2', 'Birthday', '25-50 Persons | Dinner Menu | Free Wifi | Roof Top', 3570, '911-turbo-19-1583172084.jpg', 1),
(9, 'Mini Package 34', 'Dinner', 'Dinner Menu | Stage Decoration', 3570, 'porsche_911_carrera_s_2019_4k_4-HD.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `rev_from` date NOT NULL,
  `rev_to` date NOT NULL,
  `total_amount` double NOT NULL,
  `paid_amount` double NOT NULL,
  `due_amount` double NOT NULL,
  `status` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `rev_from`, `rev_to`, `total_amount`, `paid_amount`, `due_amount`, `status`, `user_id`) VALUES
(1, '2020-09-09', '2020-09-12', 5000, 4400, 600, 'Approved', 4),
(2, '2020-09-09', '2020-09-12', 4500, 4400, 100, 'Rejected', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomservice`
--

CREATE TABLE `roomservice` (
  `id` int(10) NOT NULL,
  `roomNumber` int(10) NOT NULL,
  `service` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomservice`
--

INSERT INTO `roomservice` (`id`, `roomNumber`, `service`) VALUES
(1, 1203, 'gvfybeedney fg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `userType` varchar(15) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `userType`, `phone`, `profile_picture`, `dateOfBirth`) VALUES
(2, 'Shahriar_Isha', '1234', 'shahariaresha@gmail.com', 'Manager', '01748292210', 'final1.jpg', '05/05/1999'),
(3, 'shahriar201', '123', 'shahariar@gmail.com', 'Staff', '01521431502', 'final4.jpg', '14/11/1998'),
(10, 'Shahriar', '123', 'shahariaresha@gmail.com', 'Manager', '01521431502', 'hotel3.jpg', '11/12/1950'),
(11, 'Shahriar', '123', 'shahariaresha@gmail.com', 'Manager', '01521431502', 'hotel3.jpg', '11/12/1950');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_profit`
--

CREATE TABLE `yearly_profit` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly_profit`
--

INSERT INTO `yearly_profit` (`id`, `year`, `profit`) VALUES
(1, 2018, 455400),
(2, 2019, 378900),
(3, 2020, 2761000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey` (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_parking`
--
ALTER TABLE `car_parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_in_out`
--
ALTER TABLE `check_in_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookbook`
--
ALTER TABLE `cookbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkeyc` (`user_id`);

--
-- Indexes for table `daily_profit`
--
ALTER TABLE `daily_profit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_id_foreign` (`month_id`),
  ADD KEY `yr_id_foreign` (`year_id`);

--
-- Indexes for table `empfeedback`
--
ALTER TABLE `empfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empschedule`
--
ALTER TABLE `empschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_profit`
--
ALTER TABLE `monthly_profit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `y_id_foreign` (`year_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`user_id`);

--
-- Indexes for table `roomservice`
--
ALTER TABLE `roomservice`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `check_in_out`
--
ALTER TABLE `check_in_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookbook`
--
ALTER TABLE `cookbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empfeedback`
--
ALTER TABLE `empfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `empschedule`
--
ALTER TABLE `empschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomservice`
--
ALTER TABLE `roomservice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
