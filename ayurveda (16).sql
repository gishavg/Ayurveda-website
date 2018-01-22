-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2014 at 04:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jayaayurveda`
--
CREATE DATABASE IF NOT EXISTS `jayaayurveda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jayaayurveda`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medicinebookingid` int(11) NOT NULL,
  `medicinename` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=626 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `medicinebookingid`, `medicinename`, `quantity`, `price`) VALUES
(553, 38, 'Krishnathulasi 100ml', '2', 0),
(554, 38, 'chyevanapraasam 200ml', '10', 0),
(555, 38, 'chyevanapraasam 200ml', '10', 0),
(556, 38, 'chyevanapraasam 200ml', '10', 0),
(557, 38, 'chyevanapraasam 200ml', '10', 0),
(558, 38, 'chyevanapraasam 200ml', '10', 0),
(559, 38, 'chyevanapraasam 200ml', '10', 0),
(560, 38, 'Krishnathulasi 100ml', '5', 0),
(561, 39, 'Krishnathulasi 100ml', '2', 0),
(562, 39, 'chyevanapraasam 200ml', '10', 0),
(563, 39, 'chyevanapraasam 200ml', '10', 0),
(564, 39, 'chyevanapraasam 200ml', '10', 0),
(565, 39, 'chyevanapraasam 200ml', '10', 0),
(566, 39, 'chyevanapraasam 200ml', '10', 0),
(567, 39, 'chyevanapraasam 200ml', '10', 0),
(568, 39, 'Krishnathulasi 100ml', '5', 0),
(569, 39, 'Krishnathulasi 100ml', '4', 0),
(570, 40, 'Krishnathulasi 100ml', '2', 0),
(571, 40, 'chyevanapraasam 200ml', '10', 0),
(572, 40, 'chyevanapraasam 200ml', '10', 0),
(573, 40, 'chyevanapraasam 200ml', '10', 0),
(574, 40, 'chyevanapraasam 200ml', '10', 0),
(575, 40, 'chyevanapraasam 200ml', '10', 0),
(576, 40, 'chyevanapraasam 200ml', '10', 0),
(577, 40, 'Krishnathulasi 100ml', '5', 0),
(578, 40, 'Krishnathulasi 100ml', '4', 0),
(579, 41, 'chyevanapraasam 200ml', '8', 0),
(580, 41, 'chyevanapraasam 200ml', '8', 0),
(581, 42, 'Krishnathulasi 100ml', '6', 0),
(582, 42, 'Krishnathulasi 100ml', '6', 0),
(583, 42, 'Krishnathulasi 100ml', '6', 0),
(584, 43, 'Krishnathulasi 100ml', '7', 0),
(585, 43, 'Krishnathulasi 100ml', '7', 0),
(586, 43, 'Krishnathulasi 100ml', '8', 0),
(587, 44, 'chyevanapraasam 200ml', '10', 0),
(588, 44, 'Krishnathulasi 100ml', '5', 0),
(589, 45, 'Krishnathulasi 100ml', '8', 0),
(590, 45, 'Krishnathulasi 100ml', '8', 0),
(591, 45, 'Krishnathulasi 100ml', '5', 0),
(592, 45, 'Krishnathulasi 100ml', '5', 0),
(593, 46, 'Krishnathulasi 100ml', '2', 0),
(594, 46, 'Krishnathulasi 100ml', '2', 0),
(595, 46, 'chyevanapraasam 200ml', '6', 0),
(596, 46, 'chyevanapraasam 200ml', '6', 0),
(597, 46, 'karutwa Panchajeerakakudam 300', '2', 0),
(598, 47, 'karutwa Panchajeerakakudam 300', '56', 0),
(599, 47, 'chyevanapraasam 200ml', '4', 0),
(600, 48, 'chyevanapraasam 200ml', '', 0),
(601, 48, 'Krishnathulasi 100ml', '', 0),
(602, 48, 'Krishnathulasi 100ml', '', 0),
(603, 48, 'Krishnathulasi 100ml', '', 0),
(604, 48, '', '', 0),
(605, 48, '', '', 0),
(606, 48, '', '', 0),
(607, 48, 'Krishnathulasi 100ml', '', 0),
(608, 48, '', '', 0),
(609, 49, 'chyevanapraasam 200ml', '4', 0),
(610, 49, 'Krishnathulasi 100ml', '4', 0),
(611, 49, 'Krishnathulasi 100ml', '4', 0),
(612, 49, 'Krishnathulasi 100ml', '', 0),
(613, 50, 'chyevanapraasam 200ml', '2', 0),
(614, 50, 'karutwa Panchajeerakakudam 300', '5', 0),
(615, 51, 'Krishnathulasi 100ml', '32', 0),
(616, 51, 'Krishnathulasi 100ml', '56', 0),
(617, 51, 'Krishnathulasi 100ml', '56', 0),
(618, 51, 'Krishnathulasi 100ml', '56', 0),
(619, 51, 'Krishnathulasi 100ml', '56', 0),
(620, 51, 'chyevanapraasam 200ml', '78', 0),
(621, 51, 'chyevanapraasam 200ml', '78', 0),
(622, 51, 'chyevanapraasam 200ml', '78', 0),
(623, 51, 'chyevanapraasam 200ml', '78', 0),
(624, 51, 'chyevanapraasam 200ml', '78', 0),
(625, 51, 'chyevanapraasam 200ml', '78', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctorallocation`
--

CREATE TABLE IF NOT EXISTS `doctorallocation` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalid` varchar(30) NOT NULL,
  `doctorusername` varchar(30) NOT NULL,
  `requesteddate` date NOT NULL,
  `session` varchar(2) NOT NULL,
  `allocationtime` varchar(20) NOT NULL,
  `patientid` int(11) NOT NULL,
  `diseasedescription` varchar(150) NOT NULL,
  `doctorremark` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctorallocation`
--

INSERT INTO `doctorallocation` (`bookingid`, `hospitalid`, `doctorusername`, `requesteddate`, `session`, `allocationtime`, `patientid`, `diseasedescription`, `doctorremark`, `status`) VALUES
(1, 'modern', 'junior', '2014-12-13', 'AM', '10.00 AM', 25, 'disease of head', 'very loose s', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `doctorregistration`
--

CREATE TABLE IF NOT EXISTS `doctorregistration` (
  `doctorid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalid` varchar(50) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `doctorage` int(11) NOT NULL,
  `doctorsex` varchar(10) NOT NULL,
  `doctoraddress` varchar(40) NOT NULL,
  `phoneno1` varchar(20) NOT NULL,
  `phoneno2` varchar(20) NOT NULL,
  `doctoremailid` varchar(20) NOT NULL,
  `doctorqualification` varchar(50) NOT NULL,
  `doctorspecialization` varchar(50) NOT NULL,
  `doctorusername` varchar(30) NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `doctorregistration`
--

INSERT INTO `doctorregistration` (`doctorid`, `hospitalid`, `doctorname`, `doctorage`, `doctorsex`, `doctoraddress`, `phoneno1`, `phoneno2`, `doctoremailid`, `doctorqualification`, `doctorspecialization`, `doctorusername`) VALUES
(1, 'modern', 'suresh krishna.p.m', 46, 'male', 'arakkal', '9867677676', '2804123', 'Sureshkrishnaps@gmai', 'MBBS,MD ', 'eye', 'junior'),
(111, '101', 'gayathri', 23, 'female', 'vennala', '123123', '123123', 'as@gmail.com', 'mbbs', 'eye', 'gayathri'),
(112, 'modern', 'shimil', 20, 'female', 'gjkflsd', '5856895', '55662222', 'fdhkjf@gmail.com', 'mbbs,md', 'eye', 'doctor4'),
(113, 'Amy', 'shimil', 24, 'female', 'veliyakath', '424234234', '5555352', 'su@gmail.com', 'mbbs,md', 'eye', 'doctor4'),
(114, 'Amy', 'surya', 20, 'female', 'fgdkjchjd', '6526256', '5666555', 'hfd@yahoo.com', 'mbbs', 'ear ', 'surya'),
(115, '0', 'dsds', 20, 'Male', 'sdsd', '5656', '65656', 'rere', 'rt', 'eye', 'ttt'),
(118, '0', 'rf', 45, 'female', 'qdsw', '232', '123123', 'sdff', 'mtech', 'ear ', 'qq'),
(122, '0', 'fgh', 23, 'female', 'dvg', '425', '453453', 'gxyhgx', 'mbbs', 'eye', 'qqq'),
(124, 'Amy', 'turvan', 25, '/', '', '789456123', '147852963', 'turvan@gmail.com', 'mbbs', '', 'yhg'),
(125, 'Amy', 'tarun', 24, 'Male', 'rae', '546356', '636', 'ghfcdhsj@dhjg', 'yht', 'ear ', 'yh'),
(126, 'modern', 'cxcxc', 56, 'Male', 'dffff', '454454', '5454545', 'fgfgfg', 'ggfgf', 'ear ', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE IF NOT EXISTS `doctorschedule` (
  `scheduleid` int(11) NOT NULL AUTO_INCREMENT,
  `doctorusername` varchar(50) NOT NULL,
  `opname` varchar(20) NOT NULL,
  `morning` varchar(20) DEFAULT NULL,
  `evening` varchar(20) DEFAULT NULL,
  `morningto` varchar(20) DEFAULT NULL,
  `eveningto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`scheduleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleid`, `doctorusername`, `opname`, `morning`, `evening`, `morningto`, `eveningto`) VALUES
(4, 'junior', 'Monday', '8', '4', '12', '8'),
(5, 'junior', 'Tuesday', '9', '', '11', ''),
(6, 'junior', 'Wednesday', '', '', '', ''),
(7, 'junior', 'Thursday', '8.00AM-11.00AM', '4.00PM-7.00PM', '', ''),
(8, 'junior', 'Friday', 'NA', '5.00PM-8.00PM', '', ''),
(9, 'junior', 'Saturday', '8.00AM-11.00AM', '1.00PM-4.00PM', '', ''),
(10, 'junior', 'Sunday', '', '', '', ''),
(11, 'gayathri', 'Monday', '8', '4', '12', '6'),
(12, 'gayathri', 'Tuesday', '', '', '', ''),
(13, 'gayathri', 'Wednesday', '', '4', '', '7'),
(14, 'gayathri', 'Thursday', '8', '4', '11', '7'),
(15, 'gayathri', 'Friday', '', '', '', ''),
(16, 'gayathri', 'Saturday', '', '', '', ''),
(17, 'gayathri', 'Sunday', '9', '3', '12', '8'),
(18, 'doctor4', 'Monday', '8.00AM-10.00AM', '1.00PM-3.00PM', '', ''),
(19, 'doctor4', 'Tuesday', '', '', '', ''),
(20, 'doctor4', 'Wednesday', '', '', '', ''),
(21, 'doctor4', 'Thursday', '8.00AM-10.00AM', '', '', ''),
(22, 'doctor4', 'Friday', '8.00AM-10.00AM', '1.00PM-4.00PM', '', ''),
(23, 'doctor4', 'Saturday', '', '', '', ''),
(24, 'doctor4', 'Sunday', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `facilites`
--

CREATE TABLE IF NOT EXISTS `facilites` (
  `facilityid` int(11) NOT NULL AUTO_INCREMENT,
  `facility` varchar(20) NOT NULL,
  `facilitydescription` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`facilityid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faqid` int(11) NOT NULL AUTO_INCREMENT,
  `faqquestion` varchar(100) NOT NULL,
  `faqreply` varchar(100) NOT NULL,
  PRIMARY KEY (`faqid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `faqquestion`, `faqreply`) VALUES
(1, 'asdsdsd', 'ddddddddddddddddddsssssssssss'),
(2, 'asdsdsd', 'ddddddddddddddddddsssssssssss'),
(3, 'asdsdsd', 'ddddddddddddddddddsssssssssss'),
(4, 'cxxxxx', 'cxxxxxxxxxx'),
(5, 'cxxxxx', 'cxxxxxxxxxx'),
(6, 'cxxxxx', 'cxxxxxxxxxx'),
(7, 'cxxxxx', 'cxxxxxxxxxx'),
(8, 'cxxxxx', 'cxxxxxxxxxx'),
(9, 'cxxxxx', 'cxxxxxxxxxx'),
(10, 'cxxxxx', 'cxxxxxxxxxx'),
(11, 'cxxxxx', 'cxxxxxxxxxx'),
(12, 'cxxxxx', 'cxxxxxxxxxx'),
(13, 'cxxxxx', 'cxxxxxxxxxx'),
(14, 'cxxxxx', 'cxxxxxxxxxx'),
(15, 'cxxxxx', 'cxxxxxxxxxx'),
(16, 'cxxxxx', 'cxxxxxxxxxx'),
(17, 'aaaaaaaaaaaaa', 'aaaaaaaaaaggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(10) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(20) NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `feedback`) VALUES
(1, 'ssssssssssaaaaaaaa'),
(2, 'fcfccf'),
(3, 'gjcgjcgj'),
(4, 'sdfgh'),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalregistration`
--

CREATE TABLE IF NOT EXISTS `hospitalregistration` (
  `hospitalid` int(10) NOT NULL AUTO_INCREMENT,
  `hospitalname` varchar(40) NOT NULL,
  `hospitaladdress` varchar(100) NOT NULL,
  `hospitallocation` varchar(30) NOT NULL,
  `phno1` varchar(11) NOT NULL,
  `phno2` varchar(11) NOT NULL,
  `hospitalemailid` varchar(30) NOT NULL,
  `hospitalwebsite` varchar(30) NOT NULL,
  `foodtype` varchar(20) NOT NULL,
  `environmentaldetails` varchar(100) NOT NULL,
  `hospitalpicture` varchar(200) NOT NULL,
  `responsibleperson` varchar(20) NOT NULL,
  `responsiblepersonid` int(10) NOT NULL,
  `responsiblepersonphno` varchar(10) NOT NULL,
  `responsiblepersonemailid` varchar(30) NOT NULL,
  `hospitalusername` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`hospitalid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hospitalregistration`
--

INSERT INTO `hospitalregistration` (`hospitalid`, `hospitalname`, `hospitaladdress`, `hospitallocation`, `phno1`, `phno2`, `hospitalemailid`, `hospitalwebsite`, `foodtype`, `environmentaldetails`, `hospitalpicture`, `responsibleperson`, `responsiblepersonid`, `responsiblepersonphno`, `responsiblepersonemailid`, `hospitalusername`, `status`) VALUES
(1, 'modern', 'kodungallur.p.o', 'kodungallur,chandappura', '2804532', '98776654433', 'modern@gmail.com', 'www.modern.com', 'vegetarian', 'good environment', 'pictures\\thumb3.jpg', 'jacob', 8, '34556979', 'asdfdf@gmail.com', 'modern', 'Accepted'),
(2, 'medicare', 'fffssd', 'dfdf', '434343', '434434', 'fdfffs', 'fdfdfd', 'fdfssf', 'ffsffsd', 'pictures\\auyrlogo2.jpg', 'yjhjhj', 7, '52242', 'fhghgh', 'medicare', 'Accepted'),
(6, 'Medical College Thrissur', 'M G Road Thrissur', 'M.G road', '33333333333', '55555555555', 'asdsa@gmail.com', 'www.medi.com', 'weg', 'aaaaaaaaaaaaaaaaa', 'ayurvedic images\\ayurvedic-resort-kerala.jpg', 'pppppppppppppp', 45, '2222222222', 'aaaaaaaaaaaaa', 'medical', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('modern', 'modern', 'hospital'),
('patient', 'patient', 'patient'),
('admin', 'admin', 'admin'),
('xszx', 'hospital', 'hospital'),
('xszx', 'hospital', 'hospital'),
('', '', 'hospital'),
('hcg', 'patient', 'patient'),
('shyma', 'patient', 'patient'),
('modernn', 'hospital', 'hospital'),
('govt hospital', 'govt', 'hospital'),
('doctor', 'doctor', 'doctor'),
('ggg', 'ggg', 'doctor'),
('aaa', 'aaa', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `medicinalplants`
--

CREATE TABLE IF NOT EXISTS `medicinalplants` (
  `plantid` int(11) NOT NULL AUTO_INCREMENT,
  `plantname` varchar(30) NOT NULL,
  `plantscientificname` varchar(50) NOT NULL,
  `plantdescription` varchar(150) NOT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`plantid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `medicinalplants`
--

INSERT INTO `medicinalplants` (`plantid`, `plantname`, `plantscientificname`, `plantdescription`, `picture`) VALUES
(15, 'thrithavu', 'mmmmmmmmm//', 'coughsirup', 'pictures/Balloon.bmp'),
(3, 'keezharnelli', 'wewrewterytry/', 'bad for health', 'pictures/WP_20140909_029.jpg'),
(5, 'Poovankurunnila', 'ddfgdf///', 'jij', ''),
(6, 'ggd', 'ddfgdf/', 'fffffffffffff', ''),
(7, 'ggd', 'ddfgdf//', 'fffffthyh', ''),
(14, 'vvvvvvvvg', 'gfgf', 'gfgf', 'pictures/WP_20140831_016.jpg'),
(9, 'xzx', 'cxc', 'cxc', 'pictures/WP_20140831_016.jpg'),
(10, 'xzx', 'cxc', 'cxc', 'pictures/WP_20140831_016.jpg'),
(11, 'aaaaaaaa', 'aaafvfbd/', 'ede', ''),
(12, 'Poovankurunnila', 'isoguyt', 'good for cough', 'pictures/WP_20140908_012.jpg'),
(13, 'bamboo', 'isothera', 'a good tree', 'pictures/WP_20140909_032.jpg'),
(16, 'thrithavu', 'asssssssvnfvufvejv', 'coughsirup', 'pictures/Balloon.bmp'),
(17, 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaagggg/', 'aaaaxxxxxxxxxx', 'pictures/Monkey 1.bmp'),
(18, 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaagggg/', 'aaaaxxxxxxxxxx', 'pictures/Monkey 1.bmp'),
(19, 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaagggg/', 'aaaaxxxxxxxxxx', 'pictures/Monkey 1.bmp'),
(20, 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaagggg/', 'aaaaxxxxxxxxxx', 'pictures/Monkey 1.bmp'),
(21, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicinebooking`
--

CREATE TABLE IF NOT EXISTS `medicinebooking` (
  `medicinebookingid` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `patientname` varchar(30) NOT NULL,
  `hospitalusername` varchar(30) NOT NULL,
  `typeofpayment` varchar(30) NOT NULL,
  `bookingdate` date NOT NULL,
  `deliverydate` date NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`medicinebookingid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `medicinebooking`
--

INSERT INTO `medicinebooking` (`medicinebookingid`, `patientid`, `patientname`, `hospitalusername`, `typeofpayment`, `bookingdate`, `deliverydate`, `status`) VALUES
(34, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', 'delivered'),
(35, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', 'delivered'),
(36, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', 'notdelivered'),
(37, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', 'ordered'),
(38, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', 'cancelled'),
(39, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(40, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(41, 0, '', '0', 'Cheque', '2014-12-09', '0000-00-00', ''),
(42, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(43, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(44, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(45, 0, '', '0', 'Cash', '2014-12-09', '0000-00-00', ''),
(46, 0, '', '', 'Cheque', '2014-12-09', '0000-00-00', ''),
(47, 0, '', '', 'Cash', '2014-12-09', '0000-00-00', ''),
(48, 0, '', '', 'Cash', '2014-12-10', '0000-00-00', ''),
(49, 0, '', '', 'Cash', '2014-12-13', '0000-00-00', ''),
(50, 0, '', '', 'Installment', '2014-12-13', '0000-00-00', ''),
(51, 0, '', '', 'Cheque', '2014-12-13', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `newstopic` varchar(50) NOT NULL,
  `newsnews` varchar(150) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newstopic`, `newsnews`) VALUES
(2, '', ''),
(7, '', ''),
(8, 'dddddddddddddddddddd', 'descritption'),
(9, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(10, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(11, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(12, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(13, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(14, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(15, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(24, 'zzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzz'),
(17, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(18, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(19, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(20, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(21, 'gfg', 'eeeeeeeeeeeeeeeegggggggggggggggggggg\r\nfddddddddd'),
(22, 'a boy hit b', 'y a car'),
(23, 'sas', 'ssssssssssssaaaaaaaaaaaassssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE IF NOT EXISTS `patientregistration` (
  `patientid` int(11) NOT NULL,
  `patientname` varchar(20) NOT NULL,
  `patientaddress` varchar(30) NOT NULL,
  `patientphoneno` varchar(20) NOT NULL,
  `patientage` int(10) NOT NULL,
  `patientsex` tinytext NOT NULL,
  `patientmaritalstatus` char(20) NOT NULL,
  `patientheight` int(10) NOT NULL,
  `patientweight` int(10) NOT NULL,
  `patientemailid` varchar(20) NOT NULL,
  `patientusername` varchar(10) NOT NULL,
  `patientstatus` varchar(20) NOT NULL,
  `treatmentdetails` varchar(150) NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`patientid`, `patientname`, `patientaddress`, `patientphoneno`, `patientage`, `patientsex`, `patientmaritalstatus`, `patientheight`, `patientweight`, `patientemailid`, `patientusername`, `patientstatus`, `treatmentdetails`) VALUES
(0, 'shyma', 'zdggfxh', '1324345', 11, 'female', 'gfhghg', 213, 23, 'zgfxhgc', 'shyma', '', 'fzdgfxhg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `doctername` varchar(20) NOT NULL,
  `query` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`queryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `medicineid` int(11) NOT NULL AUTO_INCREMENT,
  `medicinename` varchar(30) NOT NULL,
  `medicinedescription` varchar(40) NOT NULL,
  `stock` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `hospitalusername` varchar(20) NOT NULL,
  PRIMARY KEY (`medicineid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`medicineid`, `medicinename`, `medicinedescription`, `stock`, `quantity`, `price`, `hospitalusername`) VALUES
(1, 'Krishnathulasi 100ml', 'It is very useful for cough', 30, 0, 120, 'modern'),
(2, 'karutwa Panchajeerakakudam 300', 'for strong health', 10, 0, 200, 'medicare'),
(3, 'chyevanapraasam 200ml', 'for good health and beauty', 48, 0, 130, 'modern'),
(4, 'dhathri', 'for harefall.for pimples', 45, 100, 210, 'gowrysankar');

-- --------------------------------------------------------

--
-- Table structure for table `tempmedicinebooking`
--

CREATE TABLE IF NOT EXISTS `tempmedicinebooking` (
  `medicineid` int(11) NOT NULL,
  `medicinename` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `bookingdate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempmedicinebooking`
--

INSERT INTO `tempmedicinebooking` (`medicineid`, `medicinename`, `quantity`, `price`, `bookingdate`) VALUES
(3, 'chyevanapraasam 200ml', '5', 130, '2014-12-14'),
(1, 'Krishnathulasi 100ml', '3', 120, '2014-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE IF NOT EXISTS `treatments` (
  `treatmentid` int(11) NOT NULL AUTO_INCREMENT,
  `treatment` varchar(200) NOT NULL,
  `treatmentdescription` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`treatmentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatmentid`, `treatment`, `treatmentdescription`, `username`) VALUES
(1, 'nellikkathalam', 'good for mad', ''),
(2, 'kizhi', 'good for health', 'modern');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
