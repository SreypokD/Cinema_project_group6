-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `total_price`, `date`, `user_id`, `show_id`) VALUES
(1, 3.5, '2023-01-25 10:37:05', 1, 1),
(2, 2.5, '2023-01-25 15:29:55', 3, 1),
(3, 2.5, '2023-01-25 15:29:55', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(20) NOT NULL,
  `total_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`hall_id`, `hall_name`, `total_seat`) VALUES
(1, 'Smart 4', 50),
(2, 'Diamong Class', 100),
(3, 'Golden Class', 120);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `releast_date` date DEFAULT NULL,
  `duration` time NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `language`, `releast_date`, `duration`, `picture`) VALUES
(1, 'Avata:The way water', 'Quantumania (2D) Ch Sub English TBC/ 200 Minutes', 'English', '2023-01-16', '03:10:05', 'https://images.theconversation.com/files/500899/original/file-20221214-461-22jr1l.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop'),
(2, 'Best disney: Boss baby', 'Quantumania (2D) Ch Sub English TBC/ 200 Minutes', 'English', '2023-01-16', '03:10:05', 'https://ntvb.tmsimg.com/assets/p13107896_v_h8_ad.jpg?w=1280&h=720'),
(3, 'Best disney: Jurney slot', 'Watch full episodes Perfect World [Wanmei Shijie], download Perfect World [Wanmei Shijie] english subbed, Perfect World [Wanmei Shijie] eng sub, download Perfect World [Wanmei Shijie] eng sub, stream ', 'English', '2021-04-23', '03:45:16', 'http://www.cheatsheet.com/wp-content/uploads/2016/03/zootopia.jpeg'),
(4, 'Best disney: UP Ellie Carl', 'Watch full episodes Perfect World [Wanmei Shijie], download Perfect World [Wanmei Shijie] english subbed, Perfect World [Wanmei Shijie] eng sub, download Perfect World [Wanmei Shijie] eng sub, stream ', 'English', '2021-04-23', '03:45:16', 'https://www.storypick.com/wp-content/uploads/2015/08/up11.jpg'),
(5, 'The Death On the Nile', 'Kenneth Branagh stars as Hercule Poirot, who must investigate the murder of a young heiress while on vacation on the Nile', 'English', '2023-01-10', '03:45:10', 'https://miro.medium.com/max/1058/1*v2mct3LYveKUO_WrbTTC5w.jpeg'),
(6, 'Who Am I?', 'Pastor Joe leads a church in an active city where he reaches out to the poor and destitute in any way he can', 'English', '2022-12-16', '02:50:10', 'https://m.media-amazon.com/images/M/MV5BOWJlMjRhMzAtMTViZi00MTM5LWE0YmQtMDBjYTg2OTViZjUwXkEyXkFqcGdeQXVyMjY2NDc0OTQ@._V1_FMjpg_UX1000_.jpg'),
(7, 'Alita', '\r\nCast & crew\r\nUser reviews\r\nTrivia\r\nIMDbPro\r\n\r\nAlita: Battle Angel\r\n2019\r\nPG-13\r\n2h 2m\r\nIMDb RATING\r\nYOUR RATING\r\nPOPULARITY\r\nJennifer Connelly, Christoph Waltz, Mahershala Ali, Eiza González, Rosa S', 'English', '2019-01-10', '02:55:10', 'https://m.media-amazon.com/images/M/MV5BMTQzYWYwYjctY2JhZS00NTYzLTllM2UtZWY5ZTk0NmYwYzIyXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg'),
(8, 'I Am Groot', 'Marvel Studios’ “I Am Groot” is a collection of five original shorts starring Baby Groot, everyone’s favorite little tree, and features several new and unusual characters.', 'English', '2022-08-10', '02:50:10', 'https://lumiere-a.akamaihd.net/v1/images/p_disneyplusoriginals_iamgroot_firststeps_v2_636_b3b5c216.jpeg?region=0,0,540,810'),
(9, 'Bottle Through The Heaven', '(TV Series 2017)', 'Chinese', '2022-12-10', '03:45:10', 'https://m.media-amazon.com/images/M/MV5BZTRlMDNlNWItYTU3ZC00NjMyLWIyMjMtM2FiZDk0MjI1MmVhXkEyXkFqcGdeQXVyNTY4MjkyOTk@._V1_.jpg'),
(10, 'Thor Love And Thunder', 'Marvel Studios\'|Thor:Love and Thunder|Date\r\nMovies', 'English', '2022-12-16', '04:20:10', 'https://lumiere-a.akamaihd.net/v1/images/p_thorloveandthunder_639_593cb642.jpeg'),
(11, 'Elementaire', 'Dans la ville d’Element City, le feu, l’eau, la terre et l’air vivent dans la plus parfaite harmonie. C’est ici que résident Flam, une jeune femme intrépide et vive d’esprit, au caractère bien trempé,', 'English', '2022-12-10', '03:45:10', 'https://lumiere-a.akamaihd.net/v1/images/image_968ab1e0.jpeg?region=0,0,540,810'),
(12, 'Avalonia', 'Avalonia, The Strange Journey, the action-packed comedy-adventure from Walt Disney Animation Studios, takes us on a journey through three generations of the legendary Clade family as they try to unite', 'English', '2022-12-16', '02:20:10', 'https://lumiere-a.akamaihd.net/v1/images/image_539d613c.jpeg?region=0%2C0%2C540%2C810'),
(13, 'Ant-Man and the Wasp: Quantumania', 'Superhero duo Scott Lang (Paul Rudd) and Hope Van Dyne (Evangeline Lilly) return for new adventures of Ant-Man and the Wasp.', 'English', '2023-02-15', '00:00:00', 'https://lumiere-a.akamaihd.net/v1/images/image_b1c09a80.jpeg?region=0%2C0%2C540%2C810'),
(14, 'Captain Marvel', 'Captain Marvel, from Marvel Studios, is an adventure set in the 1990s, at an unprecedented time in the history of the Marvel Cinematic Universe, during which Carol Danvers becomes one of the most powe', 'English', '2019-03-15', '03:50:35', 'https://lumiere-a.akamaihd.net/v1/images/p_captainmarvel_19755_3a1675ee.jpeg?region=0%2C0%2C540%2C810'),
(15, 'The Indestructibles 2 ', 'In Incredibles 2, Hélène is asked to organize the return of the Supers while Bob leads a heroic daily life at home between Violette, Flèche, and the baby, Jack-Jack, whose powers are about to reveal t', 'English', '2018-07-04', '01:58:10', 'https://lumiere-a.akamaihd.net/v1/images/image_ac9e58c8.jpeg?region=0%2C0%2C540%2C810'),
(16, 'Toy Story 4', 'Woody always knew what his role was and that his priority was the well-being of his child, whether it was Andy or Bonnie. And when Bonnie\'s beloved new homemade toy, called Fork, thinks she\'s trash, W', 'English', '2019-06-26', '01:40:10', 'https://lumiere-a.akamaihd.net/v1/images/image_bf8739ba.jpeg?region=0%2C0%2C540%2C810'),
(17, 'Lu Ca', '644 / 5,000\r\nTranslation results\r\nTranslation result\r\nSet in a beautiful coastal town on the Italian Riviera, Disney and Pixar\'s feature film \"Luca\" tells the story of a young boy who experiences an u', 'English', '2020-06-26', '01:35:10', 'https://lumiere-a.akamaihd.net/v1/images/image_2ff75a5c.jpeg?region=0%2C0%2C540%2C810');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `booking_id`) VALUES
(1, 1),
(3, 1),
(2, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` varchar(20) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `booking_id`, `hall_id`) VALUES
('A7', 3, 3),
('A9', 2, 2),
('B9', 2, 2),
('D8', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'John', 'Wick', 'johnwick@gmail.com', 'johnwick12'),
(2, 'Daya', 'Thorn', 'daya@gmail.com', 'daya123'),
(3, 'Cheii', 'Pok', 'cheiipok168@gmail.com', 'pok123'),
(4, 'Phearom', 'Chea', 'phearom168@gmail.com', 'phearom123'),
(5, 'Ileanan', 'Vy', 'ileanan@gmail.com', 'ileanan123');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `format` varchar(20) DEFAULT NULL,
  `subtitle` varchar(20) DEFAULT NULL,
  `movie_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `start_date`, `end_date`, `format`, `subtitle`, `movie_id`, `hall_id`) VALUES
(1, '0000-00-00 00:00:00', '2023-04-16 00:00:00', '2D', 'English', 1, 1),
(2, '2023-01-22 00:00:00', '2023-05-22 00:00:00', '2D', 'English', 3, 1),
(3, '2023-02-25 00:00:00', '2023-05-25 00:00:00', '2D', 'English', 2, 2),
(4, '2023-02-01 00:00:00', '2023-03-02 00:00:00', '3D', 'English', 4, 2),
(5, '2023-02-01 00:00:00', '2023-03-02 00:00:00', '3D', 'English', 5, 1),
(6, '2023-02-01 06:00:00', '2023-03-02 05:00:00', '2D', 'English', 6, 3),
(7, '2023-02-05 09:00:00', '2023-03-02 10:00:00', '2D', 'English', 7, 1),
(8, '2023-02-10 06:09:00', '2023-03-20 10:00:00', '2D', 'English', 8, 1),
(9, '2023-02-08 09:00:00', '2023-03-01 10:00:00', 'Sreen X', 'English ', 9, 1),
(10, '2023-02-09 09:00:00', '2023-03-09 10:00:00', '3D', 'English ', 10, 2),
(11, '2023-02-10 06:09:00', '2023-03-20 10:00:00', '2D', 'English', 11, 1),
(12, '2023-02-08 09:00:00', '2023-03-01 10:00:00', 'Sreen X', 'English ', 12, 1),
(13, '2023-02-09 09:00:00', '2023-03-09 10:00:00', '3D', 'English ', 13, 2),
(14, '2023-02-06 09:00:00', '0000-00-00 00:00:00', '2D', 'English', 14, 2),
(15, '2023-02-07 09:00:00', '2023-03-01 10:00:00', '2D', 'English ', 15, 1),
(16, '2023-02-06 09:00:00', '0000-00-00 00:00:00', '2D', 'English', 16, 3),
(17, '2023-02-07 09:00:00', '2023-03-01 10:00:00', '2D', 'English ', 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `ticket_name` varchar(50) DEFAULT NULL,
  `price` float NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `ticket_name`, `price`, `show_id`) VALUES
(1, '#1', 2.5, 1),
(2, '#3', 3.5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Cheii', 'Pok', 'cheiipokD@gmail.com', 'cheiipokcute'),
(2, 'Phearom', 'Chea', 'phearom.chea@gmail.com', '1234'),
(3, 'Dyna', 'Hen', 'dyna@gmail.com', '2222'),
(4, 'Dariya', 'Thorn', 'dariya@gmail.com', '1122'),
(5, 'Sok', 'Noeurn', 'noeurn@gmail.com', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`hall_id`);

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
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `hall_id` (`hall_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `hall_id` (`hall_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`),
  ADD CONSTRAINT `seats_ibfk_2` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
