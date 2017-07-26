-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 01:07 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tusoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `dep_soc`
--

CREATE TABLE `dep_soc` (
  `dep_id` int(5) NOT NULL,
  `dep_name` varchar(90) NOT NULL,
  `dep_email` varchar(40) NOT NULL,
  `dep_president` varchar(90) NOT NULL,
  `dep_gensec` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_soc`
--

INSERT INTO `dep_soc` (`dep_id`, `dep_name`, `dep_email`, `dep_president`, `dep_gensec`) VALUES
(1, 'Society of Mechanical and Industrial Engineers (SOMIE)', 'somie@thapar.edu', 'Daljeet Singh', 'Sanchit Sachdeva'),
(2, 'Indian Institute Of Chemical Engineers (IICHE)', 'iiche@thapar.edu', 'Dr V.K. Sangal', 'Mr. Harshvardhan Pant'),
(3, 'Materials and Physics Society (MAPS)', 'maps@thapar.edu', 'Dr D.P. Singh', 'Keerti Bector'),
(4, 'ROBOTICS Society', 'robotics@thapar.edu', 'Mr. R.K. Duvedi', 'Ravisha Aggarwal');

-- --------------------------------------------------------

--
-- Table structure for table `sc_soc`
--

CREATE TABLE `sc_soc` (
  `sc_id` int(3) NOT NULL,
  `sc_name` varchar(200) NOT NULL,
  `sc_president` varchar(30) NOT NULL,
  `sc_gensec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_soc`
--

INSERT INTO `sc_soc` (`sc_id`, `sc_name`, `sc_president`, `sc_gensec`) VALUES
(1, 'Indian Society of Technical Education (ISTE)', 'Dr. Rajesh Khanna', 'Rajat Sahore'),
(2, 'Institution of Engineering and Technology (IET)', 'Mrs. Manbir Kaur', 'Aakirti Singla'),
(3, 'Microsoft. Net Student Club', 'Dr. Vinay Arora', 'Gursimranjeet Singh'),
(4, 'Institute Of Electronics And Telecommunication Engineers (IETE)', 'Dr. Kulbir Singh', 'Lovish Saluja'),
(5, 'American Society of Heating Refrigeration and Air-Conditioning Engineers (ASHRAE)', 'Mr. Kundanlal', 'Yuvraj'),
(6, 'International Association of Students In Economics & Business Management (AIESEC)', 'Mr. Hitashi Lomash', 'Shubham Gupta'),
(7, 'OWASP Student Chapter', 'Dr.Maninder Singh', 'Chetan Gandotra'),
(8, 'TU Tostmasters Club', 'Dr. Rajeev Mehta', 'Taresh Garg');

-- --------------------------------------------------------

--
-- Table structure for table `uni_soc`
--

CREATE TABLE `uni_soc` (
  `uni_id` int(3) NOT NULL,
  `uni_name` varchar(200) NOT NULL,
  `uni_email` varchar(30) NOT NULL,
  `uni_president` varchar(100) NOT NULL,
  `uni_gensec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_soc`
--

INSERT INTO `uni_soc` (`uni_id`, `uni_name`, `uni_email`, `uni_president`, `uni_gensec`) VALUES
(1, 'GAMES AND SPORTS', 'sportssoc@thapar.edu', 'Dr. Rajesh Pathak', 'Mr. Lakhbir Singh'),
(2, 'LITERARY SOCIETY', 'litsoc@thapar.edu', 'Dr. Apoorva Bakshi', ''),
(3, 'MUSIC AND DRAMATIC SOCIETY (MUDRA)', 'mudra@thapar.edu', 'Dr. D.P. Singh', ''),
(4, 'FINE ARTS AND PHOTOGRAPHY SOCIETY (FAPS)', 'faps@thapar.edu', 'Dr. Ravi Kiran', ''),
(5, 'YOUTH WELFARE CLUB (YWC)', 'ywc@thapar.edu', 'Dr. Rajeev Kumar', ''),
(6, 'SOCIETY FOR PROMOTION OF INDIAN CLASSICAL MUSIC & CULTURE AMONGST YOUTH (SPIC MACAY)', 'spicmacay@thapar.edu', 'Dr. Rajesh Khanna', ''),
(7, 'CREATIVE COMPUTING SOCIETY (CCS)', 'ccs@thapar.edu', 'Dr. Inderveer Chana', ''),
(8, 'THAPAR MOVIE CLUB (TMC)', 'tmc@thapar.edu', 'Dr. Manmohan Chhibber', ''),
(9, 'PRATIGYA SOCIETY', 'pratigyasoc@thapar.edu', 'Dr. Anoop Verma', ''),
(10, 'YOUTH UNITED -THAPAR CHAPTER', 'yu@thapar.edu', 'Dr. Shweta Goyal', ''),
(11, 'THAPAR MODEL UNITED NATIONS (TUMUN)', 'tumun@thapar.edu', 'Mrs. Gurvinder Kaur', ''),
(12, 'INTERNATIONAL FORUM FOR LEADERSHIP AND SUSTAINABILITY (IFLS)', 'ifls@thapar.edu', 'Dr. Richa Babbar', ''),
(13, 'ADVENTURE CLUB', 'adventureclub@thapar.edu', 'Dr. Gagandeep Kaur', ''),
(14, 'FROSH WEEK', 'froshweek@thapar.edu', 'Dr M.D. Singh', ''),
(15, 'LINUX USER GROUP (LUGTU)', 'lugtu@thapar.edu', 'Dr. Maninder Singh', ''),
(16, 'VISUAL BULLETIN', 'visualbulletin@gmail.com', 'Mr. Tanuj Chopra', ''),
(17, 'ECONOMICS CLUB (ECON CLUB)', 'econclub@thapar.edu', 'Dr. Ravi Kiran', ''),
(18, 'PARYAVARAN WELFARE SOCIETY (PWS)', 'pws@thapar.edu', 'Dr N. Tejo Prakash', 'Mr. Rajneesh Kumar'),
(19, 'SPIRTUAL SCIENTISTS ALLIANCE (SSA)', 'ssa@thapar.edu', 'Dr. Maninder Singh', ''),
(20, 'ENACTUS', 'enactus@thapar.edu', 'Dr. Gagandeep Kaur', ''),
(21, 'ENTREPRENEURSHIP DEVELOPMENT CELL (EDC)', 'edc@thapar.edu', 'Dr M.D. Singh', ''),
(27, 'INSTITUTION OF ENGINEERING AND TECHNOLOGY (IET)', 'iet@thapar.edu', 'Dr. Manbir Kaur', ''),
(34, 'AICHE STUDENT CHAPTER', 'aiche@thapar.edu', 'Dr. Rajeev Mehta', ''),
(35, 'STUDENT ALUMNI INTERACTION CELL (SAIC)', 'saic@thapar.edu', 'Dr. Ravi Kiran', ''),
(36, 'THAPAR CODECHEF CHAPTER TU CODERS YU CODERS', 'cchef@thapar.edu', 'Mrs. Karamjit Kaur Cheema', ''),
(37, 'YATHARTH', 'yatharth@thapar.edu', 'Dr. Tapas Karmaker', ''),
(38, 'LEAD SOCIETY', 'lead@thapar.edu', 'Dr. Jainy Sachdeva', ''),
(39, 'SPORTS ADDICITON AND DISCIPLINE EDUCATIONG SOCIETY (SPADES)', 'spades@thapar.edu', 'Dr. Rajesh Pathak', 'Mr. Lakhbir Singh'),
(40, 'TEDx THAPAR UNIVERSITY', '', 'Dr. Maninder Singh', ''),
(41, 'CHEMICAL ASSOCIATION FOR RESEARCH AND EDUCATION (CARE)', '', 'Dr. Amjad Ali', ''),
(42, 'THAPAR SOCIETY OF CIVIL ENGINEERS (TSCE)', '', 'Mr. Tanuj Chopra', ''),
(43, 'STUDENTS CONSULTATIVE COMMITTEE (SCC)', '', 'Dean, Students Affairs', ''),
(44, 'NATIONAL SERVICE SCHEME (NSS)', 'nss@thapar.edu', 'Dr Vikas Sangal', ''),
(45, 'GENE SOCIETY', 'gene@thapar.edu', 'Dr. Vasundhara Reddy', ''),
(46, 'THAPAR MATHEMATICAL SOCIETY (TMS)', 'tms@thapar.edu', 'Dr. Meenakshi Rana', ''),
(47, 'KALAM STUDENT CHAPTER', 'tms@thapar.edu', 'Dr. Anupam Sharma', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dep_soc`
--
ALTER TABLE `dep_soc`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `uni_soc`
--
ALTER TABLE `uni_soc`
  ADD PRIMARY KEY (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dep_soc`
--
ALTER TABLE `dep_soc`
  MODIFY `dep_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
