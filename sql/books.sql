-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 06:26 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Book_ID` varchar(12) NOT NULL,
  `Book_name` varchar(45) DEFAULT NULL,
  `ISBN` varchar(25) DEFAULT NULL,
  `Author` varchar(45) DEFAULT NULL,
  `No_pages` int(11) NOT NULL,
  `Description` varchar(4000) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`Book_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--
INSERT INTO `books` (`Book_ID`, `Book_name`, `ISBN`, `Author`, `No_pages`, `Description`, `image_name`,`price`) VALUES
('B_001', 'The Grey Wolf', 'ISBN: 978-87-7681-696-4', 'Louise Penny', 520, 'The Grey Wolf is a captivating book that explores the fascinating life and behavior of one of nature’s most intelligent predators. It delves into the world of grey wolves, highlighting their strength, teamwork, and survival instincts in the wild. The book sheds light on their role in maintaining ecological balance and their complex social structure, often led by an alpha. Through vivid descriptions and engaging storytelling, readers gain insight into the challenges wolves face, including human conflict and habitat loss. Whether for nature enthusiasts or animal lovers, The Grey Wolf offers a deeper appreciation for these majestic creatures.', 'book1.jpeg',7500),
('B_002', 'Hot Mess', 'ISBN: 978-87-403-0099-4', 'Jeff Kinney', 443, 'Hot Mess is a witty and relatable story about navigating life’s chaos and finding balance amidst the ups and downs. The book follows the protagonist as they juggle love, career, and personal growth, often with humorous and messy results. With sharp dialogue and heartfelt moments, it explores themes of self-discovery, resilience, and embracing imperfections. Perfect for fans of contemporary fiction, Hot Mess is a delightful read that celebrates the beauty of life’s imperfections.', 'book2.jpeg',4000),
('B_003', 'Revenge of the Tipping Point', 'ISBN: 978-87-7681-675-9', 'Malcolm Gladwell', 645, 'Revenge of the Tipping Point is a thought-provoking exploration of how small actions and decisions can lead to significant, often unexpected, consequences. The book delves into pivotal moments where change becomes inevitable, unraveling the forces driving social, environmental, and personal transformations. With compelling narratives and sharp analysis, it challenges readers to reconsider the power of collective impact and individual choices. Insightful and engaging, it’s a must-read for anyone curious about the dynamics of change and influence.', 'book3.jpeg',9000),
('B_004', 'The Wild Robot', 'ISBN: 978-87-403-0016-1','Peter Brown', 300, 'The Wild Robot by Peter Brown is a heartwarming tale of a robot named Roz who awakens on a remote island. Struggling to adapt to her wild surroundings, Roz learns to survive and connect with the islands animal inhabitants. Through her journey, she discovers the importance of kindness, friendship, and the natural world. Blending adventure with touching life lessons, this story is perfect for readers of all ages who enjoy tales of resilience and unlikely connections.', 'book4.jpeg',2000);

-- --------------------------------------------------------

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
