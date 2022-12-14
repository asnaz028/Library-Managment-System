-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2021 at 03:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `b_id` varchar(255) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `copies` varchar(20) NOT NULL,
  `avl_cpy` int(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `b_id` (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `booksname`, `authorname`, `copies`, `avl_cpy`, `dept`, `file_name`, `path`) VALUES
('CS001', 'learning Python', 'Reema Thereja', '12', 9, 'cse', 'CS001.pdf', 'ebooks/CS001.pdf'),
('CS002', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS002.pdf', 'ebooks/CS002.pdf'),
('CS003', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS003.pdf', 'ebooks/CS003.pdf'),
('CS031', 'learning java', 'Test Author', '12', 12, 'cse', 'CS031.pdf', 'ebooks/CS031.pdf'),
('CS005', 'Test Book', 'Test Author2', '12', 12, 'cse', 'CS005.pdf', 'ebooks/CS005.pdf'),
('CS006', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS006.pdf', 'ebooks/CS006.pdf'),
('CS008', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS008.pdf', 'ebooks/CS008.pdf'),
('CS009', 'Book One', 'Reema Thereja', '12', 12, 'cse', 'CS009.pdf', 'ebooks/CS009.pdf'),
('CS010', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS010.pdf', 'ebooks/CS010.pdf'),
('CS011', 'Test Book', 'Test Author', '1', 1, 'cse', 'CS011.pdf', 'ebooks/CS011.pdf'),
('CS012', 'Test Book', 'Test Author', '1', 1, 'cse', 'CS012.pdf', 'ebooks/CS012.pdf'),
('CS013', 'Test Book', 'Test Author', '12', 12, 'cse', 'CS013.pdf', 'ebooks/CS013.pdf'),
('EE001', 'Test Book', 'Test Author', '12', 12, 'ee', 'EE001.pdf', 'ebooks/EE001.pdf'),
('ME001', 'Test Book', 'Test Author', '12', 12, 'me', 'ME001.pdf', 'ebooks/ME001.pdf'),
('TT001', 'Book One', 'Test Author', '12', 12, 'tt', 'TT001.pdf', 'ebooks/TT001.pdf'),
('CS055', 'Test Book', 'Test Author', '10', 10, 'cse', 'CS055.pdf', 'ebooks/CS055.pdf'),
('B001', 'Let Us c', 'YK', '10', 10, 'cse', 'B001.pdf', 'ebooks/B001.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

DROP TABLE IF EXISTS `student_book`;
CREATE TABLE IF NOT EXISTS `student_book` (
  `emailid` varchar(200) NOT NULL,
  `book_1_id` varchar(100) NOT NULL,
  `book_1` varchar(100) NOT NULL,
  `recive_date_1` varchar(100) NOT NULL,
  `submisson_date_1` varchar(100) NOT NULL,
  `book_2_id` varchar(100) DEFAULT NULL,
  `book_2` varchar(100) DEFAULT NULL,
  `recive_date_2` varchar(100) DEFAULT NULL,
  `submisson_date_2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`emailid`, `book_1_id`, `book_1`, `recive_date_1`, `submisson_date_1`, `book_2_id`, `book_2`, `recive_date_2`, `submisson_date_2`) VALUES
('b@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018', 'CS001', 'learning Python', '13-07-2018', '28-07-2018'),
('lopa@gmail.com', 'CS001', 'learning Python', '13-07-2018', '28-07-2018', 'CS031', 'learning java', '13-07-2018', '28-07-2018'),
('Asna@gmail.com', 'CS001', 'learning Python', '25-08-2021', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE IF NOT EXISTS `student_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `roll` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'student',
  `gender` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roll` (`roll`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `roll`, `type`, `gender`, `name`, `dept`, `year`, `emailid`, `password`) VALUES
(1, '001', 'admin', 'm', 'admin', 'blank', 'blank', 'admin001', 'admin123'),
(13, '10003', 'student', 'm', 'john', 'me', '2nd_year', 'john@gmail.com', 'john'),
(11, '10001', 'student', 'f', 'Fathi Saf', 'cse', '1st_year', 'safaisthikar@gmail.com', 'saf'),
(12, '10002', 'student', 'f', 'asna', 'tt', '2nd_year', 'Asna@gmail.com', 'asna');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
