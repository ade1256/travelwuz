-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 09:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travelwuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` set('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `address`, `phone`, `gender`) VALUES
(1, 'Ade', 'Jl. Asasdalsdjlkasdasd', '082134751593', 'male'),
(3, 'Joko Susilo', 'Jalan Kauman Lama', '081234567890', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservation`
--

CREATE TABLE `tb_reservation` (
  `id` int(5) NOT NULL,
  `reservation_code` varchar(25) NOT NULL,
  `reservation_at` time NOT NULL,
  `reservation_date` date NOT NULL,
  `customer_id` int(5) NOT NULL,
  `seat_code` varchar(25) NOT NULL,
  `rute_id` int(5) NOT NULL,
  `depart_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `price` int(11) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reservation`
--

INSERT INTO `tb_reservation` (`id`, `reservation_code`, `reservation_at`, `reservation_date`, `customer_id`, `seat_code`, `rute_id`, `depart_at`, `price`, `user_id`) VALUES
(1, 'RSV01', '05:38:00', '2018-01-22', 1, 'ST0001', 1, '2018-01-26 06:49:24', 7000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rute`
--

CREATE TABLE `tb_rute` (
  `id` int(5) NOT NULL,
  `depart_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` text NOT NULL,
  `rute_to` text NOT NULL,
  `price` int(11) NOT NULL,
  `transportation_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rute`
--

INSERT INTO `tb_rute` (`id`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportation_id`) VALUES
(1, '2018-03-09 07:29:00', 'Jakarta', 'Bali', 7000000, 1),
(2, '2018-01-31 03:15:00', 'Bali', 'Jambi', 9000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportation`
--

CREATE TABLE `tb_transportation` (
  `id` int(5) NOT NULL,
  `code` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` int(5) NOT NULL,
  `transportation_type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transportation`
--

INSERT INTO `tb_transportation` (`id`, `code`, `description`, `seat_qty`, `transportation_type_id`) VALUES
(1, 'GRD01', 'Pesawat Garuda Air', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportation_type`
--

CREATE TABLE `tb_transportation_type` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transportation_type`
--

INSERT INTO `tb_transportation_type` (`id`, `description`) VALUES
(1, 'Pesawat Garuda Air');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` set('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'ade1256', 'YWRlMTI1NjEyNTY=', 'Ade Prasetyo', 'admin'),
(5, 'jonor98', 'cG9vcG9rMTIyMjIyMg==', 'John Connor', 'user'),
(6, 'gueganteng', 'YWRlMTI1NjEyNTY=', 'gantengabis', 'user'),
(7, 'asg333', 'MzMzYXNn', 'Amel Surya Gumilang', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reservation`
--
ALTER TABLE `tb_reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indexes for table `tb_transportation`
--
ALTER TABLE `tb_transportation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_type_id` (`transportation_type_id`);

--
-- Indexes for table `tb_transportation_type`
--
ALTER TABLE `tb_transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_reservation`
--
ALTER TABLE `tb_reservation`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `tb_customer` (`id`),
  ADD CONSTRAINT `rute_id` FOREIGN KEY (`rute_id`) REFERENCES `tb_rute` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD CONSTRAINT `transportation_id` FOREIGN KEY (`transportation_id`) REFERENCES `tb_transportation` (`id`);

--
-- Constraints for table `tb_transportation`
--
ALTER TABLE `tb_transportation`
  ADD CONSTRAINT `transportation_type_id` FOREIGN KEY (`transportation_type_id`) REFERENCES `tb_transportation_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
