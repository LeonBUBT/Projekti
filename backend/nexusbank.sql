-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 12:01 AM
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
(7, 11, 3, '1776947049620108', '2030-12-01', '173', 0.00, NULL),
(12, 16, 3, '8724899955264254', '2027-11-01', '571', 0.00, NULL),
(13, 17, 3, '2830937631706272', '2030-02-01', '508', 0.00, NULL);

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
  `card_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_type`
--

INSERT INTO `card_type` (`card_type_id`, `type_name`, `card_category`, `image_url`, `description`, `card_name`) VALUES
(1, 'classic', 'debit', 'debit-card-test1.png', 'The Nexus Classic Debit Card is simple, secure, and ideal for everyday use. With no annual fees, it provides instant access to your funds and essential features like fraud protection. A perfect choice for practical banking.\r\n', 'Classic Debit Card'),
(2, 'premium', 'debit', 'premium_debit_card.png', 'The Nexus Premium Debit Card offers a sleek design and seamless worldwide transactions. Enjoy cashback rewards, travel perks, and advanced chip security for a secure and reliable experience. Perfect for those seeking premium banking benefits.\r\n', 'Premium Debit Card'),
(3, 'elite', 'debit', 'debit-card-test2.png', 'The Nexus Elite Debit Card delivers luxury and convenience. Enjoy priority services, higher spending limits, and exclusive travel benefits. A card designed to match your ambition and lifestyle.', 'Elite Debit Card'),
(7, 'elite', 'credit', 'leoni.png', 'The Nexus Elite Debit Card delivers luxury and convenience. Enjoy priority services, higher spending limits, and exclusive travel benefits. A card designed to match your ambition and lifestyle.', 'classic');

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
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `loan_type_id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `loan_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `interest` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`loan_type_id`, `name`, `loan_img`, `description`, `interest`) VALUES
(1, 'Personal Loan', 'personal_loan.png', 'Need extra funds for unexpected expenses, home improvements, or debt consolidation? Our Personal Loan offers a flexible solution with competitive interest rates and fixed monthly payments—no collateral required. Get the financial support you need, when you need it, with a hassle-free application process.', 7.50),
(2, 'Home Loan (Mortgage)', 'home_loan-removebg-preview.png', 'Ready to buy your dream home or renovate your current one? Our Home Loan provides affordable financing with structured repayment terms and attractive interest rates. With expert guidance and a smooth approval process, we’ll help you take the next big step toward homeownership.', 4.20),
(3, 'Auto Loan', 'car_loan.png', 'Drive away in your dream car with our Auto Loan! We offer low interest rates, flexible repayment plans, and quick approvals, making financing a new or used vehicle easier than ever. Whether it’s your first car or an upgrade, we’re here to get you on the road faster.', 5.00);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `milestone_id` int(6) NOT NULL,
  `year` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`milestone_id`, `year`, `title`, `description`) VALUES
(1, 2000, 'Founded  Nexus Bank', 'Established with a vision to revolutionize banking through innovation and trust.'),
(2, 2002, 'First Branch Opened', 'Serving thousand of costumers locally.'),
(3, 2005, 'Online Banking Introduced', 'Enabled costumers to manage accounts remotely.'),
(4, 2010, '1 Million Costumers', 'Expanded to multiple locations with a growing costumer base.'),
(5, 2012, 'Mobile Banking Launched', 'Bringing banking services to smartphones.'),
(6, 2015, 'International Expansion', 'Seamless global transactions made possible.'),
(7, 2018, 'AI Financial Advisory', 'Personalized banking enhanced by AI-driven services.'),
(8, 2022, 'Carbon-Neutral Operation', 'Commitment to sustainability and eco-friendly banking.'),
(9, 2024, 'Fully Digital Branches', 'Combining AI, automation, and human experties.'),
(10, 2025, 'Blockchain Banking Solutions', 'Enhanced security and transparency through blockchain.');

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
(11, 'business', 'business@gmail.com', '123 456 456', '2025-01-31 14:26:37', 'business', 0, '$2y$10$hIPDH4gANrKKjJCkuQL.rOW7IF977OXsWfYgA3xFNokQ.E5i1kvia', '0000-00-00', '', NULL),
(16, 'leon', 'leon@gmail.com', '123 132 133', '2025-02-02 19:23:58', 'individ', 0, '$2y$10$8xu15gXHra9eoYtMus5UP.H/p98aiBjTJ.LyKwROr4bowME9vqmp2', '2005-05-05', 'M', 2147483647),
(17, 'Admin', 'admin@gmail.com', '123 132 132', '2025-02-02 19:38:35', 'individ', 1, '$2y$10$dHm8Fg7RqVGTlW/UP0Y1YuapFzLnAOUwNoW6TtCbWuJND387zWovO', '2005-06-29', 'M', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `why_chose_us`
--

CREATE TABLE `why_chose_us` (
  `wcu_id` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_chose_us`
--

INSERT INTO `why_chose_us` (`wcu_id`, `title`, `description`) VALUES
('accordion-item-1', 'Innovative Banking Solutions', 'At Nexus Bank, we are committed to staying at the forefront of financial technology. Our cutting-edge digital tools and AI-powered insights make managing your finances effortless and secure.'),
('accordion-item-2', 'Unmatched Security', 'Your trust is our priority. We use advanced encryption and fraud detection systems to ensure your money and personal information are safe, giving you peace of mind every step of the way.'),
('accordion-item-3', 'Customer-Centric Services', 'We value every customer and provide personalized financial solutions tailored to your goals. With 24/7 customer support, we\'re always here to help you succeed.'),
('accordion-item-4', 'Transparent and Competitive Rates', 'Nexus Bank offers transparent pricing with no hidden fees, competitive loan rates, and high-return savings accounts, ensuring you get the best value for your money.'),
('accordion-item-5', 'Global Reach with Local Expertise', 'Whether you\'re banking locally or internationally, our extensive network and expertise ensure smooth financial operations wherever you are.');

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
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`loan_type_id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`milestone_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `why_chose_us`
--
ALTER TABLE `why_chose_us`
  ADD PRIMARY KEY (`wcu_id`);

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
  MODIFY `card_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `card_type`
--
ALTER TABLE `card_type`
  MODIFY `card_type_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `loan_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `loan_type_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `milestone_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cards_ibfk_2` FOREIGN KEY (`card_type_id`) REFERENCES `card_type` (`card_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
