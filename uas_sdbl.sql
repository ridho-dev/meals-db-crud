-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 02:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_sdbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals_data`
--

CREATE TABLE `meals_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals_data`
--

INSERT INTO `meals_data` (`id`, `name`, `category`, `country`) VALUES
(52764, 'Garides Saganaki', 'Seafood', 'Greek'),
(52765, 'Chicken Enchilada Casserole', 'Chicken', 'Mexican'),
(52767, 'Bakewell tart', 'Dessert', 'British'),
(52768, 'Apple Frangipan Tart', 'Dessert', 'British'),
(52769, 'Kapsalon', 'Lamb', 'Dutch'),
(52770, 'Spaghetti Bolognese', 'Beef', 'Italian'),
(52771, 'Spicy Arrabiata Penne', 'Vegetarian', 'Italian'),
(52772, 'Teriyaki Chicken Casserole', 'Chicken', 'Japanese'),
(52773, 'Honey Teriyaki Salmon', 'Seafood', 'Japanese'),
(52774, 'Pad See Ew', 'Chicken', 'Thai'),
(52775, 'Vegan Lasagna', 'Vegan', 'Italian'),
(52776, 'Chocolate Gateau', 'Dessert', 'French'),
(52777, 'Mediterranean Pasta Salad', 'Seafood', 'Italian'),
(52779, 'Cream Cheese Tart', 'Starter', 'Unknown'),
(52781, 'Irish stew', 'Beef', 'Irish'),
(52783, 'Rigatoni with fennel sausage s', 'Lamb', 'Moroccan'),
(52784, 'Smoky Lentil Chili with Squash', 'Vegetarian', 'British'),
(52785, 'Dal fry', 'Vegetarian', 'Indian'),
(52786, 'Rocky Road Fudge', 'Dessert', 'American'),
(52787, 'Hot Chocolate Fudge', 'Dessert', 'American'),
(52791, 'Eton Mess', 'Dessert', 'British'),
(52792, 'Bread and Butter Pudding', 'Dessert', 'British'),
(52793, 'Sticky Toffee Pudding Ultimate', 'Dessert', 'British'),
(52794, 'Vegan Chocolate Cake', 'Vegan', 'American'),
(52796, 'Chicken Alfredo Primavera', 'Chicken', 'Italian'),
(52802, 'Fish pie', 'Seafood', 'British'),
(52803, 'Beef Wellington', 'Beef', 'British'),
(52804, 'Poutine', 'Miscellane', 'Canadian'),
(52806, 'Tandoori chicken', 'Chicken', 'Indian'),
(52807, 'Baingan Bharta', 'Vegetarian', 'Indian'),
(52809, 'Recheado Masala Fish', 'Seafood', 'Indian'),
(52810, 'Osso Buco alla Milanese', 'Miscellane', 'Italian'),
(52811, 'Ribollita', 'Vegetarian', 'Italian'),
(52813, 'Kentucky Fried Chicken', 'Chicken', 'American'),
(52814, 'Thai Green Curry', 'Chicken', 'Thai'),
(52815, 'French Lentils With Garlic and', 'Miscellane', 'French'),
(52820, 'Katsu Chicken curry', 'Chicken', 'Japanese'),
(52822, 'Toad In The Hole', 'Pork', 'British'),
(52827, 'Massaman Beef curry', 'Beef', 'Thai'),
(52829, 'Grilled Mac and Cheese Sandwic', 'Pasta', 'American'),
(52835, 'Fettucine alfredo', 'Pasta', 'Italian'),
(52837, 'Pilchard puttanesca', 'Pasta', 'Italian'),
(52838, 'Venetian Duck Ragu', 'Pasta', 'Italian'),
(52845, 'Turkey Meatloaf', 'Miscellane', 'British'),
(52847, 'Pork Cassoulet', 'Pork', 'French'),
(52851, 'Nutty Chicken Curry', 'Chicken', 'Indian'),
(52858, 'New York cheesecake', 'Dessert', 'American'),
(52859, 'Key Lime Pie', 'Dessert', 'American'),
(52863, 'Vegetarian Casserole', 'Vegetarian', 'British'),
(52864, 'Mushroom & Chestnut Rotolo', 'Vegetarian', 'British'),
(52865, 'Matar Paneer', 'Vegetarian', 'Indian'),
(52868, 'Kidney Bean Curry', 'Vegetarian', 'Indian'),
(52876, 'Minced Beef Pie', 'Beef', 'British'),
(52880, 'McSinghs Scotch pie', 'Lamb', 'British'),
(52887, 'Kedgeree', 'Seafood', 'British'),
(52888, 'Eccles Cakes', 'Dessert', 'British'),
(52890, 'Jam Roly-Poly', 'Dessert', 'British'),
(52893, 'Apple & Blackberry Crumble', 'Dessert', 'British'),
(52896, 'Full English Breakfast', 'Breakfast', 'British'),
(52899, 'Dundee cake', 'Dessert', 'British'),
(52900, 'Madeira Cake', 'Dessert', 'British'),
(52901, 'Rock Cakes', 'Dessert', 'British'),
(52903, 'French Onion Soup', 'Side', 'French'),
(52906, 'Flamiche', 'Vegetarian', 'French'),
(52907, 'Duck Confit', 'Miscellane', 'French'),
(52908, 'Ratatouille', 'Vegetarian', 'French'),
(52915, 'French Omelette', 'Miscellane', 'French'),
(52924, 'Nanaimo Bars', 'Dessert', 'Canadian'),
(52927, 'Montreal Smoked Meat', 'Beef', 'Canadian'),
(52933, 'Rappie Pie', 'Chicken', 'Canadian'),
(52937, 'Jerk chicken with rice & peas', 'Chicken', 'Jamaican'),
(52938, 'Jamaican Beef Patties', 'Beef', 'Jamaican'),
(52941, 'Red Peas Soup', 'Beef', 'Jamaican'),
(52943, 'Oxtail with broad beans', 'Beef', 'Jamaican'),
(52944, 'Escovitch Fish', 'Seafood', 'Jamaican'),
(52945, 'Kung Pao Chicken', 'Chicken', 'Chinese'),
(52946, 'Kung Po Prawns', 'Seafood', 'Chinese'),
(52947, 'Ma Po Tofu', 'Beef', 'Chinese'),
(52951, 'General Tso Chicken', 'Chicken', 'Chinese'),
(52954, 'Hot and Sour Soup', 'Pork', 'Chinese'),
(52955, 'Egg Drop Soup', 'Vegetarian', 'Chinese'),
(52957, 'Fruit and Cream Cheese Breakfa', 'Breakfast', 'American'),
(52967, 'Home-made Mandazi', 'Breakfast', 'Kenyan'),
(52968, 'Mbuzi Choma (Roasted Goat)', 'Goat', 'Kenyan'),
(52971, 'Kafteji', 'Vegetarian', 'Tunisian'),
(52974, 'Keleya Zaara', 'Lamb', 'Tunisian'),
(52978, 'Kumpir', 'Side', 'Turkish'),
(52991, 'Mince Pies', 'Dessert', 'British'),
(53006, 'Moussaka', 'Beef', 'Greek'),
(53007, 'Honey Yogurt Cheesecake', 'Dessert', 'Greek'),
(53012, 'Gigantes Plaki', 'Vegetarian', 'Greek'),
(53015, 'Krispy Kreme Donut', 'Dessert', 'American'),
(53021, 'Gołąbki (cabbage roll)', 'Beef', 'Polish'),
(53025, 'Ful Medames', 'Vegetarian', 'Egyptian'),
(53027, 'Koshari', 'Vegetarian', 'Egyptian'),
(53031, 'Egyptian Fatteh', 'Beef', 'Egyptian'),
(53033, 'Japanese gohan rice', 'Side', 'Japanese'),
(53034, 'Japanese Katsudon', 'Pork', 'Japanese'),
(53035, 'Ham hock colcannon', 'Pork', 'Irish'),
(53041, 'Grilled Portuguese sardines', 'Seafood', 'Portuguese'),
(53049, 'Apam balik', 'Dessert', 'Malaysian'),
(53050, 'Ayam Percik', 'Chicken', 'Malaysian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'user1', 'user123', 'user'),
(2, 'admin1', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals_data`
--
ALTER TABLE `meals_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
