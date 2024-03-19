-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 05:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hadiy_aqiqah`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`) VALUES
(1, 'Paket Anak Perempuan'),
(2, 'Paket Anak Laki-Laki'),
(3, 'Olahan Kambing + Nasi Box'),
(4, 'Tambahan Menu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `qty`, `harga`, `bukti_tf`, `status`) VALUES
(1, 6, 2, 2, '5420000', '../assets/img/order/20230619174852_3487464.jpg', 'sudah_di_verifikasi'),
(2, 6, 6, 2, '8400000', '../assets/img/order/20230619175417_3487491.jpg', 'sudah_di_verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `porsi` int(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `category_id`, `porsi`, `harga`) VALUES
(1, 'Kambing Betina', 1, 60, '2380000'),
(2, 'Kambing Betina', 1, 70, '2710000'),
(3, 'Kambing Betina', 1, 80, '3040000'),
(4, 'Kambing Betina', 1, 90, '3370000'),
(5, 'Kambing Betina', 1, 100, '3700000'),
(6, 'Kambing Betina', 1, 120, '4200000'),
(7, 'Kambing Jantan', 1, 60, '3130000'),
(8, 'Kambing Jantan', 1, 70, '3510000'),
(9, 'Kambing Jantan', 1, 80, '3890000'),
(10, 'Kambing Jantan', 1, 90, '4270000'),
(11, 'Kambing Jantan', 1, 100, '4900000'),
(12, 'Kambing Jantan', 1, 120, '5200000'),
(13, 'Kambing Betina', 2, 60, '4000000'),
(14, 'Kambing Betina', 2, 70, '4300000'),
(15, 'Kambing Betina', 2, 80, '4500000'),
(16, 'Kambing Betina', 2, 90, '4800000'),
(17, 'Kambing Betina', 2, 100, '5000000'),
(18, 'Kambing Betina', 2, 120, '5500000'),
(19, 'Kambing Jantan', 2, 60, '4500000'),
(20, 'Kambing Jantan', 2, 70, '4800000'),
(21, 'Kambing Jantan', 2, 80, '5000000'),
(22, 'Kambing Jantan', 2, 90, '5500000'),
(23, 'Kambing Jantan', 2, 100, '6000000'),
(24, 'Kambing Jantan', 2, 120, '6500000'),
(25, 'Paket A Kambing Jantan', 3, 60, '2350000'),
(26, 'Paket B Kambing Jantan', 3, 70, '2600000'),
(27, 'Paket C Kambing Jantan', 3, 80, '2850000'),
(28, 'Paket D Kambing Jantan', 3, 90, '3100000'),
(29, 'Paket E Kambing Jantan', 3, 120, '3600000'),
(30, 'Paket A Kambing Betina', 3, 60, '1600000'),
(31, 'Paket B Kambing Betina', 3, 70, '1800000'),
(32, 'Paket C Kambing Betina', 3, 80, '2000000'),
(33, 'Paket D Kambing Betina', 3, 90, '2200000'),
(34, 'Paket E Kambing Betina', 3, 120, '2400000'),
(35, 'Mie / Bihun Goreng', 4, 1, '3000'),
(36, 'Telur Rebus / Balado', 4, 1, '5000'),
(37, 'Sambal Ati Kentang', 4, 1, '4000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `alamat`, `no_hp`, `password`, `role`) VALUES
(1, 'admin@admin.com', 'admin', 'jalan surabaya', '082121211212', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(6, 'customer2@gmail.com', 'customer2', 'jalan surabaya', '082121211212', '5f4dcc3b5aa765d61d8327deb882cf99', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
