
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Kanishka Aggarwal', 'kanishkaaggarwal45@gmail.com', '01790-187189', 'Awesome'),

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `day` varchar(5) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(7) NOT NULL,
  `adults` varchar(5) NOT NULL,
  `rooms` varchar(5) NOT NULL,
  `message` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `day`, `month`, `year`, `adults`, `rooms`, `message`) VALUES
(1, 'Jatin Bagai', 'jatinbagainew@gmail.com', '01790-187189', '24', '11', '2021', '2', '1', 'Is the room available?'),

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image1` varchar(20) NOT NULL,
  `image2` varchar(20) NOT NULL,
  `image3` varchar(20) NOT NULL,
  `image4` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `description`, `size`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Deluxe Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '44', '10000', 'H1.jpg', 'H2.jpg', 'H3.jpg', 'H4.jpg'),
(2, 'Festive Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '43', '9000', 'H5.jpg', 'H6.jpg', 'H7.jpg', 'H8.jpg'),
(3, "Super Deluxe Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '46', '9000', 'H9.jpg', 'H10.jpg', 'H11.jpg', 'H12.jpg'),
(4, 'AC Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '42', '8000', 'H13.jpg', 'H14.jpg', 'H15.jpg', 'H16.jpg'),
(5, 'Presidential Suite', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '55', '15000', 'H17.jpg', 'H18.jpg', 'H19.jpg', 'H20.jpg'),
(6, 'Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '32', '4500', 'H21.jpg', 'H22.jpg', 'H23.jpg', 'H24.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
