-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 11:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'PC'),
(2, 'PS4'),
(3, 'PS5'),
(4, 'XBOX ONE'),
(5, 'XBOX Series X');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'FPS'),
(3, 'Racing'),
(4, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagelink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` date NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `imagelink`, `release_date`, `publisher_id`, `genre_id`, `category_id`, `created_at`, `updated_at`) VALUES
(198, 'Battlefield 2042', '7499', 'Battlefield 2042 is a multiplayer first-person shooter developed by EA DICE. It is another release of one of the most popular shooter game franchises in the whole industry, that gathers millions of players from all over the world, battling each other on virtual battlefields.', 'battlefield2042.png', '2021-11-19', 4, 2, 1, '2022-05-10 13:56:44', '2022-05-10 11:56:44'),
(199, 'FIFA 22', '7499', 'FIFA 22 is the latest installment of the FIFA series developed by EA Canada and published by Electronic Arts. The game takes you back to the world of international football, offering improved visuals and gameplay mechanics, bringing the virtual matches even closer to their real-life counterparts. FIFA 22 was met with positive initial reception thanks to its improved motion systems, mang other features. ', 'fifa22.png', '2021-10-01', 4, 4, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(200, 'Dying Light 2 Stay Human', '7499', 'Dying Light 2 is an upcoming survival horror action role-playing video game developed by Techland and set to be released in 2022 by Techland Publishing. It is the sequel to the Dying Light from 2015 and it takes place 15 years after the story presented in its predecessor. As an infected survivor, you will be tasked with bringing back the order and ensuring peace in the city – you are the last hope of the society being on the brink of the collapse.', 'dyinglight.png', '2022-02-04', 3, 2, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(201, 'Moto GP 21', '3999', 'Take your place on the starting grid and get ready for the most realistic and immersive MotoGP videogame ever. Live the most authentic 2-wheels racing experience with the new MotoGP21.', 'motogp.png', '2021-04-22', 3, 3, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(202, 'Hitman 3', '3999', 'Hitman 3 is the next single-player installment of an excellent game series devoted to the story of the world\'s most iconic paid killer. Developed by IO Interactive studio and released in 2021, the game presents completely new mechanical solutions. As Agent 47, for whom the most important thing is the ability to sneak and stealthily eliminate enemies, you take part in a particularly mature storyline that you will play exactly as you wish. Because in Hitman 3 game, the whole adventure reaches a completely new level in the most open-world so far.', 'hitman.png', '2021-01-20', 5, 1, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(203, 'Tennis World Tour 2', '3999', 'Play as the world\'s top players or create your own player to try and dominate the world rankings. Faster paced, with more animations and more realism: experience the true sensations of tennis, in singles or doubles games, and challenge your friends locally or online.', 'tennis.png', '2020-09-14', 5, 4, 1, '2022-05-10 13:51:13', '2022-05-10 11:51:13'),
(204, 'PCG Football Manager 2021', '3999', 'Sports Interactive once again pleased its fans with the latest version of Football Manager 2021. What will we find in this most famous sports club manager simulator this time?', 'footballmanager.png', '2021-11-24', 2, 4, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(205, 'Iron Harvest', '3999', 'Taking place in an ingenious universe, Iron Harvest introduces the player the realities of the 1920s Europe, enriched by characteristic Steampunk technologies. The world designed by Jakub Różalski drew the attention of many RTS enthusiasts, making Iron Harvest one of the most anticipated titles.', 'ironharvest.png', '2021-01-09', 2, 1, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(206, 'Cyberpunk 2077', '5999', 'Cyberpunk 2077 (PC) is a single-player, first-person perspective action-RPG developed by CD Projekt Red, the developer of The Witcher series. Based on a tabletop game developed by Michael Pondsmith back in the 1980s, CP2077 is steeped in the themes and aesthetics of the cyberpunk genre.', 'cyberpunk.png', '2020-12-10', 3, 1, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(207, 'Battlefield 5', '3999', 'Developed by EA Dice, Battlefield V (BF 5) is the continuation of the classic FPS franchise and a return to its roots thanks to its focus on WWII. Prepare for a compelling solo campaign featuring the most famous battlefields and for a complex multiplayer mode.', 'battlefield5.png', '2018-11-20', 4, 2, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59'),
(208, 'The Witcher 3 - The Wild Hunt', '2999', 'The Witcher 3: Wild Hunt is a story-driven, next-generation open world role-playing game, set in a graphically stunning fantasy universe, full of meaningful choices and impactful consequences. In The Witcher, you play as Geralt of Rivia, one of a dying caste of monster hunters, and embark on an epic journey in a war-ravaged world that will inevitably lead you to confront a foe darker than anything humanity has faced so far—the Wild Hunt.  ', 'witcher3.png', '2016-04-01', 3, 1, 1, '2022-05-09 22:29:40', '2022-05-09 22:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`) VALUES
(1, '2K'),
(2, 'Activision'),
(3, 'Deep Silver'),
(4, 'EA'),
(5, 'Microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Veljko', 'Vulovic', 'user@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', '2022-05-10 19:31:49', '2022-05-10 19:31:49', 1),
(2, 'Veljko', 'Vulovic', 'admin@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', '2022-05-10 19:31:49', '2022-05-10 19:31:49', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher_id` (`publisher_id`,`genre_id`,`category_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
