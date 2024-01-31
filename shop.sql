-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 06:54 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `product-id` int(11) NOT NULL,
  `product-name` varchar(50) NOT NULL,
  `product-image` varchar(200) NOT NULL,
  `product-price` int(11) NOT NULL,
  `product-quantity` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`product-id`, `product-name`, `product-image`, `product-price`, `product-quantity`, `username`) VALUES
(14, 'Chocolate Cake', 'https://images.deliveryhero.io/image/talabat/Menuitems/mmw_638117097920918386?width=172&height=172', 4, 1, 'yara');

-- --------------------------------------------------------

--
-- Table structure for table `client1`
--

CREATE TABLE `client1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client1`
--

INSERT INTO `client1` (`id`, `name`, `email`, `password`) VALUES
(0, 'shahad', 'sjjs@gmail.com', 123),
(0, 'yara', 'yara@gmail.com', 1234),
(0, 'falafel', 'falafel@gmail.com', 123),
(0, 'falafel', 'falafel@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `deserts1`
--

CREATE TABLE `deserts1` (
  `product-id` int(11) NOT NULL,
  `product-name` varchar(50) NOT NULL,
  `product-image` varchar(200) NOT NULL,
  `product-price` int(11) NOT NULL,
  `product-desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deserts1`
--

INSERT INTO `deserts1` (`product-id`, `product-name`, `product-image`, `product-price`, `product-desc`) VALUES
(1, 'San Sebastian Cheesecake', 'https://images.deliveryhero.io/image/talabat/Menuitems/mmw_638117074950561731?width=172&amp;height=172', 5, 'San Sebastian Cheesecake entices with its burnt caramelized crust and velvety interior, delivering a harmonious blend of textures and rich flavors.'),
(2, 'Apple Cinnamon Loaf Cake', 'https://images.deliveryhero.io/image/talabat/Menuitems/mmw_638117074602741129?width=172&amp;height=172', 3, 'Apple Cinnamon Loaf Cake delights with the perfect balance of sweet apples and warm cinnamon, creating a comforting and flavorful treat.'),
(3, 'Chocolate Cake', 'https://images.deliveryhero.io/image/talabat/Menuitems/mmw_638117097920918386?width=172&amp;height=172', 4, 'Decadent and moist, chocolate cake indulges the senses with rich cocoa flavors and a luscious, melt-in-your-mouth texture.'),
(4, 'Carrot Loaf Cake', 'https://images.deliveryhero.io/image/talabat/Menuitems/mmw_638117074776485918?width=172&amp;height=172', 3, 'Carrot Loaf Cake offers a moist and spiced delight, combining the sweetness of carrots with a hint of warmth in every delicious slice.'),
(5, 'Vanilla-Strawberry Cake', 'https://projectveganbaking.com/wp-content/uploads/2021/08/IMG_1682-2.jpeg', 3, 'Vanilla-Strawberry Cake harmonizes the classic sweetness of vanilla with the vibrant and fruity essence of fresh strawberries, creating a delightful confection.'),
(6, 'Apple Cake', 'https://sugargeekshow.com/wp-content/uploads/2019/10/apple-cake-featured.jpg', 3, 'Apple Cake combines the comforting aroma of baked apples with a moist, cinnamon-infused crumb, embodying the essence of fall in every delicious bite.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`product-id`);

--
-- Indexes for table `deserts1`
--
ALTER TABLE `deserts1`
  ADD PRIMARY KEY (`product-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `product-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `deserts1`
--
ALTER TABLE `deserts1`
  MODIFY `product-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
