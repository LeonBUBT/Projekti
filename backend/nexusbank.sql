-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 02:24 PM
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
-- Database: `nexusbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `image`, `name`, `position`, `description`) VALUES
(1, 'albini.webp', 'Albin Aliu', 'CEO', 'We love that guy'),
(2, 'leoni.png', 'Leon Berisha', 'CEO', 'The genius we all look up to'),
(3, 'loresi.jpg', 'Lores Gashi', 'CEO', 'Someone we all trust and respect');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `card_type_id` int(9) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `expiry_date` date NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `credit_limit` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `user_id`, `card_type_id`, `card_number`, `expiry_date`, `cvv`, `balance`, `credit_limit`) VALUES
(2, 6, 3, '6738997603578276', '0000-00-00', '875', 0.00, NULL),
(3, 7, 2, '1509579090214754', '0000-00-00', '307', 0.00, NULL),
(4, 8, 1, '6574694804209143', '2027-04-01', '745', 0.00, NULL),
(5, 9, 2, '3187028694034455', '2027-06-01', '159', 0.00, NULL),
(6, 10, 1, '7000274037277000', '2029-02-01', '292', 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_type`
--

CREATE TABLE `card_type` (
  `card_type_id` int(9) NOT NULL,
  `type_name` enum('classic','premium','elite') NOT NULL,
  `card_category` enum('debit','credit') NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `benefits` text NOT NULL,
  `card_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_type`
--

INSERT INTO `card_type` (`card_type_id`, `type_name`, `card_category`, `image_url`, `description`, `benefits`, `card_name`) VALUES
(1, 'classic', 'debit', 'debit-card-test1.png', 'The Nexus Classic Debit Card is simple, secure, and ideal for everyday use. With no annual fees, it provides instant access to your funds and essential features like fraud protection. A perfect choice for practical banking.\r\n', 'testtest', 'Classic Debit Card'),
(2, 'premium', 'debit', 'premium_debit_card.png', 'The Nexus Premium Debit Card offers a sleek design and seamless worldwide transactions. Enjoy cashback rewards, travel perks, and advanced chip security for a secure and reliable experience. Perfect for those seeking premium banking benefits.\r\n', 'testtest', 'Premium Debit Card'),
(3, 'elite', 'debit', 'debit-card-test2.png', 'The Nexus Elite Debit Card delivers luxury and convenience. Enjoy priority services, higher spending limits, and exclusive travel benefits. A card designed to match your ambition and lifestyle.', 'testtest', 'Elite Debit Card');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loan_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `loan_type` enum('personal','home','auto') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `interest_rate` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('ongoing','paid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pikat`
--

CREATE TABLE `pikat` (
  `pikat_id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `services` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pikat`
--

INSERT INTO `pikat` (`pikat_id`, `name`, `address`, `shift`, `contact`, `services`) VALUES
(1, 'Dega Kryesore', 'Ndertesa e Dukagjinit, Prishtine', 'E Hene - E Premte: 8:00 - 16:00', 'Tel: +1235 42 22 333', 'ATM, Llogari, Kredi, Depozita'),
(2, 'Dega Qender Qytetit', 'Sheshi Skenderbeu, Prishtine', 'E Hene - E Shtune: 9:00 - 18:00', 'Tel: +355 42 55 444', 'ATM, Konsultime, Depozita'),
(3, 'Dega e Aeroportit', 'Aeroporti Adem Jashari , Sllatine', 'E Hene - E Diel: 7:00 - 22:00', 'Tel: +355 42 11 555', 'ATM, Exchange, Informacion');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(9) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `raiting` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_name`, `description`, `raiting`) VALUES
(1, 'Arbër Krasniqi', 'Kam përfituar shumë nga shërbimet e Nexus Bank. Stafi është gjithmonë i gatshëm për të ndihmuar dhe proceset janë të shpejta dhe të lehta.', NULL),
(2, 'Lea Gashi', 'Nexus Bank më ka ndihmuar shumë në menaxhimin e financave të mia personale dhe të biznesit. E rekomandoj shumë!', NULL),
(3, 'Fatmir Beqiri', 'Shërbimi është i shkëlqyer dhe gjithmonë i përgjegjshëm. ATM-të janë gjithmonë të disponueshme dhe të lehta për t\'u përdorur.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `card_id` int(9) DEFAULT NULL,
  `loan_id` int(9) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` enum('debit','credit','loan') NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` enum('individ','business') NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `personal_number` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `created_at`, `type`, `admin`, `password`, `birthday`, `gender`, `personal_number`) VALUES
(1, 'leon', 'lonilee29@gmail.com', '123 456 789', '2025-01-30 15:35:49', 'individ', 0, '$2y$10$bkB7Nl7LSC9pO3stmBj89ux24LetdT6SxkNoMCHy3Tup98UW/unt6', '2005-06-29', 'M', 0),
(2, 'albin', 'albin@gmail.com', '456 789 123', '2025-01-30 15:43:46', 'individ', 0, '$2y$10$uBqbGmt1xa3wflE/cwi3BOiEwkaeabEMHsJvQHO7itN2qQvfll5K6', '2005-01-26', 'M', 0),
(3, 'albini', 'albin@gmail.com', '456 789 123', '2025-01-30 15:46:00', 'individ', 0, '$2y$10$Q0/fS8IwgWaW4jDZrT2iuu84YGKJQjrrmhCQfBwnXUJHcO9JjKNCq', '2005-01-26', 'M', 0),
(5, 'test', 'test@gmail.com', '123 456 789', '2025-01-30 22:42:39', 'individ', 0, '$2y$10$Fc2pjnN2UN5ifRnFTi2LrenZFfqvwan8fEMVk1dse0C/Mv7PgYdZa', '2005-06-29', 'F', 0),
(6, 'test', 'blabla@gmail.com', '123 456 789', '2025-01-30 22:46:18', 'individ', 0, '$2y$10$VB/0C2zI6Ek3gFtVktqkBenWbpje4/wTLf0wYVSKAOAatkMPjIMvC', '2005-06-29', 'F', 0),
(7, 'test', 'shefqet@gmail.com', '123 456 789', '2025-01-30 22:47:33', 'individ', 0, '$2y$10$KP/xPhVF.PwHOofhAFtcsOh9IWhq1OhZkOpPXeKLhgO5R8SzMrnd6', '2005-06-29', 'F', 0),
(8, 'tyrion', 'tyrion@gmail.com', '753 789 753', '2025-01-30 23:08:47', 'individ', 0, '$2y$10$F7zV8gkAzNaNZvfkSG/l.uo5aYdoAWvu2bNd38Jx/3EYGyZ1IjWIS', '1980-05-05', 'O', 0),
(9, 'leon', 'lb70655@ubt-uni.net', '123 123 123', '2025-01-31 00:44:20', 'individ', 0, '$2y$10$saJDgaSLUSqIaEaqxNFFPufvJ1vqhtyFSnzIv7JHCJnY/PhlySoHi', '2005-06-29', 'M', 1111111111),
(10, 'leon', 'lb7655@ubt-uni.net', '555 555 555', '2025-01-31 00:53:21', 'individ', 0, '$2y$10$P7/wj68YP4ECoOQd4tF2Zu234W/4E2m5kNtXA4C9KllkfPvv.9.uq', '5555-05-04', 'M', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `card_type_id` (`card_type_id`);

--
-- Indexes for table `card_type`
--
ALTER TABLE `card_type`
  ADD PRIMARY KEY (`card_type_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `pikat`
--
ALTER TABLE `pikat`
  ADD PRIMARY KEY (`pikat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `card_id` (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `card_type`
--
ALTER TABLE `card_type`
  MODIFY `card_type_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `loan_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pikat`
--
ALTER TABLE `pikat`
  MODIFY `pikat_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cards_ibfk_2` FOREIGN KEY (`card_type_id`) REFERENCES `card_type` (`card_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `cards` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`loan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
