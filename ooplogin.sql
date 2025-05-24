-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 24.Máj 2025, 23:52
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `ooplogin`
--
CREATE DATABASE IF NOT EXISTS `ooplogin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ooplogin`;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Chair Optimus', 100.00, 'images/slider-img.png'),
(2, 'Chair Deluxe', 202.00, 'images/slider-img.png'),
(5, 'Chair Super', 45.00, 'images/t-2.jpg'),
(6, 'Chair X', 23.00, 'images/t-1.jpg'),
(7, 'MegaChair', 69.00, 'images/t-2.jpg'),
(8, 'x', 2.00, 'images/t-2.jpg'),
(9, 'x', 2.00, 'images/slider-img.png'),
(10, 'x', 2.00, 'images/slider-img.png'),
(11, 'x', 2.00, 'images/slider-img.png'),
(12, 'x', 23.00, 'images/slider-img.png'),
(13, 'x', 23.00, 'images/slider-img.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `role`, `message`, `image_path`) VALUES
(1, 'Magna', 'Consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing elit', 'images/client-1.png'),
(2, 'Aliqua', 'Consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...dolor sit amet, consectetur adipiscing elit...dolor sit amet, consectetur adipiscing elit...', 'images/client-2.png'),
(8, 'James Walker', 'Interior Designer', 'Excellent quality fittings and accessories! I’ve been using your furniture hardware for several of my interior projects, and the durability and design never disappoint. The installation process is smooth, and my clients are always satisfied with the final result.', 'images/avatar-png.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL,
  `users_role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`, `users_role`) VALUES
(1, 'zxc', '$2y$10$QsF4khOgkqkKLF/hK2lxLetymbT8AHaQ3yx6mLidkR1bowwfZ8.QW', 'zxc@gma.cp', 'user'),
(2, 'zxc', '$2y$10$Hb0thEFdaNhHea3N4YEWvOzXU8ZvNnuHLwoY5v592TQ1vrhHe6Aty', 'ASd@l.as', 'user'),
(3, 'qwe', '$2y$10$SAsmCQTTqdQH32oboOVuDOza1kB30VYz/6CWqHkoN/oYJznLnro2S', 'qwe@gmail.om', 'user'),
(4, 'asd', '$2y$10$QvYjazqsQa04/0xDkdAccOvCZ6lMPWDbCsm9gQ9oENNLeTO3.ZZBa', 'asd@asd.asd', 'admin');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pre tabuľku `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
