-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum-web-posttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `qty`, `image`) VALUES
(12, 'Aphrodite', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem explicabo quia molestiae reprehenderit voluptas corporis vero magni ullam illo expedita. Neque ab repellendus, eveniet tenetur consectetur libero nesciunt cumque repellat!', 400, 50, '2023-10-24WhatsApp Image 2023-10-19 at 2.25.22 PM.jpeg.jpeg'),
(13, 'Dionysus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem explicabo quia molestiae reprehenderit voluptas corporis vero magni ullam illo expedita. Neque ab repellendus, eveniet tenetur consectetur libero nesciunt cumque repellat!', 300, 20, '2023-10-24WhatsApp Image 2023-10-19 at 2.25.22 PM (2).jpeg.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'rizka', 'rizka', 'rizkasmt@gmail.com', '$2y$10$OAr9y/W8U9sIRV5kuf6.eOFnFl6T5HwNdp3FUfdNFgsP2X.Zkb4h6'),
(2, 'rizkaa', 'rizkaa', 'rizkasmt@gmail.com', '$2y$10$UP.ggQ2e1MGVaN6U3xji5eXz8KkAmhBjBGhePMvRmtaaBlM/fl.ua'),
(3, 'rizka', 'rizkasmita', 'rizkasmita@gmail.com', '$2y$10$Fwx9CINMqbsP9RTQweVKQe2h2auA2HmM4AfLJ9DOy25ao5zGzDP4q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
