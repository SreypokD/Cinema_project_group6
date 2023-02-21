-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 02:29 AM
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
-- Database: `cinema_g6`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `number_seat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `release_date` varchar(100) DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `language`, `release_date`, `duration`, `picture`, `start_date`, `end_date`, `sub_title`) VALUES
(18, 'Phearom', 'Paul Rudd, Evangeline Lilly, Michael Douglas, Michelle Pfeiffer, Jonathan Majors', 'english', '01/31/2023', '01:30:00', 'https://lumiere-a.akamaihd.net/v1/images/image_b1c09a80.jpeg?region=0,0,540,810&width=320', '02/22/2023', '03/31/2023', 'English'),
(19, 'Avatar', 'Zoe Saldaña, Sam Worthington, Sigourney Weaver, Stephen Lang, Cliff Curtis, Joel David Moore, Joel David Moore, CCH Pounder, Edie Falco, Jemaine Clement, Kate Winslet', 'english', '01/19/2023', '03:50:00', 'https://lumiere-a.akamaihd.net/v1/images/image_ab4b216d.jpeg?region=0%2C0%2C540%2C810', '03/01/2023', '05/01/2023', 'English'),
(20, 'La Petite Sirène', 'Halle Bailey, Daveed Diggs, Jacob Tremblay, Awkwafina, Jonah Hauer-King, Art Malik, Noma Dumezweni, Javier Bardem, Melissa McCarthy', 'english', '01/31/2023', '02:30:00', 'https://lumiere-a.akamaihd.net/v1/images/image_0240ae6a.jpeg?region=0%2C0%2C540%2C810', '03/01/2023', '03/18/2023', 'English'),
(21, 'Doctor Strange', 'Benedict Cumberbatch, Elizabeth Olsen, Benedict Wong, Rachel McAdams, Chiwetel Ejiofor, Xochitl Gomez', 'english', '01/31/2023', '03:50:00', 'https://lumiere-a.akamaihd.net/v1/images/image_b342b03e.jpeg?region=0%2C0%2C540%2C810', '02/25/2023', '04/08/2023', 'English'),
(22, 'Buzz l’Éclair', 'Annie Awards et vétéran de Pixar, Angus MacLane, qui a co-réalisé en 2016 \"Le Monde de Dory\", est aux commandes de \"Buzz l’Éclair\". Le film est produit par Galyn Susman (le court-métrage “Toy Story : ', 'english', '03/01/2023', '01:30:00', 'https://lumiere-a.akamaihd.net/v1/images/image_7338a114.jpeg?region=0%2C0%2C540%2C810', '03/11/2023', '04/08/2023', 'English'),
(24, 'Élémentaire', 'Dans la ville d’Element City, le feu, l’eau, la terre et l’air vivent dans la plus parfaite harmonie. C’est ici que résident Flam, une jeune femme intrépide et vive d’esprit, au caractère bien trempé,', 'english', '01/29/2023', '01:50:00', 'https://lumiere-a.akamaihd.net/v1/images/image_968ab1e0.jpeg?region=0%2C0%2C540%2C810', '02/25/2023', '04/01/2023', 'English'),
(25, 'Avalonia', 'Avalonia, l’étrange voyage, la comédie d’aventure bourrée d’action des studios Walt Disney Animation, nous emmène à la rencontre de trois générations de la légendaire famille Clade, alors qu’elles ten', 'english', '02/05/2023', '02:00:00', 'https://lumiere-a.akamaihd.net/v1/images/image_539d613c.jpeg?region=0%2C0%2C540%2C810', '03/04/2023', '03/11/2023', 'English'),
(26, 'Black Panther', 'Letitia Wright, Lupita Nyong\'o, Danai Gurira, Angela Bassett, Tenoch Huerta Mejía, Winston Duke, Martin Freeman, Dominique Thorne, Florence Kasumba, Michaela Coel, Alex Livanalli, Mabel Cadena', 'english', '02/13/2023', '03:00:00', 'https://lumiere-a.akamaihd.net/v1/images/image_5257a54c.jpeg?region=0%2C0%2C540%2C810', '03/11/2023', '05/06/2023', 'English'),
(27, 'Ron débloque', '\"Ron Débloque\" présenté par 20th Century Studios et Locksmith Animation raconte l\'histoire de Barney, un collégien mal à l\'aise en société, et de Ron, son nouvel appareil connecté capable de marcher e', 'english', '02/04/2023', '01:30:00', 'https://lumiere-a.akamaihd.net/v1/images/image_2e5aeba1.jpeg?region=0%2C0%2C540%2C810', '03/11/2023', '04/20/2023', 'English'),
(28, 'Encanto', 'Encanto, nouveau film des studios d’animation Disney, raconte l’histoire d’une famille extraordinaire, les Madrigal. C’est dans une maison magique au milieu des montagnes colombiennes, un merveilleux ', 'english', '02/13/2023', '02:00:20', 'https://lumiere-a.akamaihd.net/v1/images/image_85dfaa4f.jpeg?region=0%2C0%2C540%2C810', '03/04/2023', '04/22/2023', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `name_on_card` varchar(100) NOT NULL,
  `booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `shows_id` int(11) NOT NULL,
  `format` varchar(20) NOT NULL,
  `cinema` varchar(50) NOT NULL,
  `hall` varchar(50) NOT NULL,
  `time` varchar(200) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`shows_id`, `format`, `cinema`, `hall`, `time`, `movie_id`, `date`) VALUES
(35, '2D', 'MeanChey', 'hall01', '17:00pm', 18, '2023-02-24'),
(36, '2D', 'KMall', 'hall04', '17:00pm', 19, '2023-02-24'),
(37, '3D', 'MeanChey', 'hall01', '17:00pm', 18, '2023-03-04'),
(38, '2D', 'MeanChey', 'hall03', '17:00pm', 19, '2023-03-01'),
(39, '3D', 'MeanChey', 'hall04', '19:50pm', 18, '2023-02-25'),
(40, '2D', 'MeanChey', 'hall01', '17:00pm', 20, '2023-02-25'),
(41, '2D', 'Eden', 'hall01', '17:00pm', 21, '2023-03-09'),
(42, '3D', 'MeanChey', 'hall01', '17:00pm', 28, '2023-03-08'),
(43, '2D', 'KMall', 'hall01', '17:00pm', 28, '2023-03-08'),
(44, '2D', 'Eden', 'hall01', '17:00pm', 28, '2023-06-09'),
(45, '2D', 'MeanChey', 'hall01', '17:00pm', 27, '2023-03-11'),
(46, '2D', 'KMall', 'hall01', '17:00pm', 27, '2023-03-10'),
(47, '2D', 'Eden', 'hall01', '17:00pm', 27, '2023-03-08'),
(48, '2D', 'MeanChey', 'hall01', '17:00pm', 22, '2023-03-01'),
(49, '2D', 'KMall', 'hall04', '17:00pm', 24, '2023-03-02'),
(50, '2D', 'MeanChey', 'hall01', '17:00pm', 25, '2023-04-19'),
(51, '2D', 'Eden', 'hall01', '17:00pm', 26, '2023-03-10'),
(52, '2D', 'MeanChey', 'hall01', '17:00pm', 26, '2023-03-25'),
(53, '2D', 'Eden', 'hall01', '17:00pm', 26, '2023-05-12'),
(54, '2D', 'KMall', 'hall01', '17:00pm', 19, '2023-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `ticket_name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `ticket_name`, `price`) VALUES
(1, 'DM01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `user_type`) VALUES
(9, 'My', 'Admin', 'myadminpage$$44@gmail.com', 'myadminpage$$44', 'admin'),
(11, 'Srey', 'Pok', 'sreypokD@gmail.com', '$2y$10$cvV0JTAFadRrFGhTwsmaAeUpgGdHMUCazpB4qXQxoM9UykQ45NZ5C', 'user'),
(12, 'Phearom', 'Chea', 'phearomchea@gmail.com', '$2y$10$BapQ5UexXE60fMXcFlqLJuzRabyecFjkVnhdMrWmK/ltVo8t28pD6', 'user'),
(13, 'Pok', 'Zin', 'pokzin@gmail.com', '$2y$10$M5pz8yZpZwceSxUg0G0sdepAtd/rY6kBaEE1eeQfIsemCKHjLAVW2', 'user'),
(14, 'Phearom', 'Group6', 'phearom123@gmail.com', '$2y$10$imQBAw.CPDoyQnouNIa/2uEOV2OJkHg/TZRu1cbX1WcD4bAGWv2IO', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking` (`booking`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`shows_id`),
  ADD KEY `shows` (`movie_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `shows_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`booking`) REFERENCES `payments` (`payment_id`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
