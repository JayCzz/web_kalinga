-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2023 at 02:13 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Admin','Doctor','Nurse','Citizen') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `age` int NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4  NOT NULL,
  `adminNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `adminNumber` (`adminNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `type`, `firstName`, `lastName`, `birthday`, `age`, `sex`, `adminNumber`, `username`, `email`, `phoneNumber`, `password`, `image`) VALUES
(1, 8895796828849, 'Admin', 'Marife', 'Obama', '1976-01-05', 47, 'Female', 'AD-01004', 'marife05', 'marife@gmail.com', 9123456789, 'marife05', ''),
(2, 37902449718055365, 'Admin', 'Lebron', 'James', '1984-12-30', 38, 'Male', 'AD-01001', 'admin123', 'lebron.james@gmail.com', 9123456789, 'admin123', '2544.png'),
(3, 551841738, 'Admin', 'Jimmy', 'Butler', '1989-09-14', 33, 'Male', 'AD-01022', 'jimmy22', 'j.buckets@gmail.com', 9123456789, 'jimmy22', ''),
(4, 2405454626350408020, 'Admin', 'Jimmy', 'Butler', '1989-09-14', 33, 'Male', 'AD-01022', 'jimmy22', 'j.buckets@gmail.com', 9123456789, 'jimmy22', '');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `consultation_name` varchar(100) CHARACTER SET utf8mb4  NOT NULL,
  `adress` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `consultation` varchar(1000) NOT NULL,
  KEY `adress` (`adress`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `consultation` (`consultation`(250)),
  KEY `consultation_name` (`consultation_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
CREATE TABLE IF NOT EXISTS `consultations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `consultation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `address` (`address`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `consultation` (`consultation`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `address`, `date`, `familyNumber`, `cnumber`, `consultation`) VALUES
(1, 'Rozelle Macaraeg', 'Nangka, Marikina City', '0000-00-00', '', 0, ''),
(2, 'Rozelle Macaraeg', 'Nangka, Marikina City', '0000-00-00', '', 0, ''),
(3, 'Rozelle Macaraeg', 'Nangka, Marikina City', '2023-04-30', 'FN-01005', 7698546815, 'Heavy cough and fever'),
(4, 'LeBron James', 'Nangka, Marikina City', '2023-04-30', 'FN-01007', 7465830599584826, 'High fever'),
(5, 'Natsu Dragneel', 'Nangka, Marikina City', '2023-04-30', 'FN-01001', 1637790318133398323, 'LBM'),
(6, 'Lorena Santos', 'Nangka, Marikina City', '2023-05-03', 'FN-01002', 652946296, 'Flu'),
(7, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(8, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(9, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(10, 'Natsu Dragneel', 'Nangka, Marikina City', '2023-05-06', 'FN-01001', 1637790318133398323, 'Dry cough'),
(11, 'Lorena Santos', 'Nangka, Marikina City', '2023-05-07', 'FN-01002', 652946296, 'High Fever');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Doctor') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4  NOT NULL,
  `doctorNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `doctorNumber` (`doctorNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `user_id`, `type`, `firstName`, `lastName`, `birthday`, `age`, `sex`, `doctorNumber`, `username`, `email`, `phoneNumber`, `password`) VALUES
(1, 6898, 'Doctor', 'Grace', 'Chua', '1980-08-25', 42, 'Female', 'DN-01001', 'chua25', 'grace@gmail.com', 9798456123, 'chua25'),
(2, 507539, 'Doctor', 'Jomar', 'Dela Pena', '1998-01-03', 25, 'Male', 'DN-01002', 'doctor123', 'jom.delapena@gmail.com', 9123498765, 'doctor123');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `quantity`, `image`) VALUES
(1, 'Vitamin B', '10', 'med 01.png'),
(4, 'Bioflu', '50', 'med 01.png'),
(5, 'Lagundi Complex', '50', 'med 01.png'),
(6, 'Mefenamic Acid', '25', 'med 01.png'),
(7, 'Lozartan', '100', 'med 01.png'),
(8, 'Rozelle Macaraeg', 'FN-01005', '');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Nurse') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('m','f') NOT NULL,
  `nurseNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `nurseNumber` (`nurseNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `user_id`, `type`, `firstName`, `lastName`, `birthday`, `age`, `sex`, `nurseNumber`, `username`, `email`, `phoneNumber`, `password`) VALUES
(1, 589359300, 'Nurse', 'Lucy', 'Parker', '1992-09-08', 30, 'f', 'NN-01002', 'lparker08', 'parker0908@gmail.com', 9123789456, 'lparker08'),
(2, 62150284570216927, 'Nurse', 'Maria', 'Clara', '2000-01-01', 23, 'f', 'NN-01001', 'nurse123', 'm.clara@gmail.com', 9123654987, 'nurse123');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `prescription` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `address` (`address`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `prescription` (`prescription`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `name`, `address`, `date`, `familyNumber`, `cnumber`, `prescription`) VALUES
(1, 'James Carlos Yap', 'Nangka, Marikina City', '2023-05-03', 'FN-01007', 7042025769213999, '- Biogesic 3x a day\r\n- Bioflu 2x a day');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

DROP TABLE IF EXISTS `qr_code`;
CREATE TABLE IF NOT EXISTS `qr_code` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`id`, `name`, `image`) VALUES
(14, 'FN-01004', 'FN-01004.png'),
(15, 'FN-01005', 'FN-01005.png'),
(16, 'FN-01006', 'FN-01006.png'),
(11, 'FN-01001', 'FN-01001.png'),
(18, 'FN-01002', 'FN-01002.png'),
(13, 'FN-01003', 'FN-01003.png'),
(17, 'FN-01007', 'FN-01007.png');

-- --------------------------------------------------------

--
-- Table structure for table `queue_id_value`
--

DROP TABLE IF EXISTS `queue_id_value`;
CREATE TABLE IF NOT EXISTS `queue_id_value` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `queue_id_value`
--

INSERT INTO `queue_id_value` (`id`) VALUES
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `queue_list`
--

DROP TABLE IF EXISTS `queue_list`;
CREATE TABLE IF NOT EXISTS `queue_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `queue_id` varchar(255) NOT NULL,
  `qnumber` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Medical','Dental') NOT NULL,
  `status` enum('Active','Waiting','Done','No Show') CHARACTER SET utf8mb4  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `queue_list`
--

INSERT INTO `queue_list` (`id`, `queue_id`, `qnumber`, `name`, `type`, `status`) VALUES
(1, 'QUEUE 0001', 0, 'James Mendoza', 'Medical', 'No Show'),
(2, 'QUEUE 0002', 0, 'James Carlos Yap', 'Medical', 'Done'),
(3, 'QUEUE 0003', 0, 'Lebron James', 'Medical', 'Done'),
(4, 'QUEUE 0004', 0, 'Dwyane Wade', 'Medical', 'No Show'),
(5, 'QUEUE 0005', 0, 'Jimmy Butler', 'Medical', 'Active'),
(6, 'QUEUE 0006', 0, 'Rozelle Macaraeg', 'Medical', 'Done'),
(7, 'QUEUE 0007', 0, 'Armando Candelaria', 'Medical', 'Done'),
(8, 'QUEUE 0008', 0, 'Jayc Espina', 'Medical', 'Done'),
(9, 'QUEUE 0009', 0, 'Rozelle Macaraeg', 'Medical', 'Done'),
(10, 'QUEUE 0010', 0, 'Trevor Ariza', 'Medical', 'Done'),
(11, 'QUEUE 0011', 0, 'James Harden', 'Medical', 'Done'),
(12, 'QUEUE 0012', 1637790318133398323, 'Tyler Herro', 'Medical', 'Done'),
(13, 'QUEUE 0013', 62150284570216927, 'Lee Nara', 'Medical', 'Done'),
(14, 'QUEUE 0014', 62150284570216927, 'Jimmy Butler', 'Medical', 'Done'),
(15, 'QUEUE 0015', 62150284570216927, 'Jio Jalalon', 'Medical', 'Done'),
(16, 'QUEUE 0016', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(17, 'QUEUE 0017', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(18, 'QUEUE 0018', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(19, 'QUEUE 0019', 62150284570216927, 'Victor Oladipo', 'Medical', 'Done'),
(20, 'QUEUE 0020', 62150284570216927, 'Victor Oladipo', 'Medical', 'Done'),
(21, 'QUEUE 0021', 62150284570216927, 'Max Struss', 'Medical', 'Done'),
(22, 'QUEUE 0022', 62150284570216927, 'Cody Zeller', 'Medical', 'Done'),
(23, 'QUEUE 0023', 62150284570216927, 'Kevin Durant', 'Medical', 'Done'),
(24, 'QUEUE 0024', 62150284570216927, 'Kevin Durant', 'Medical', 'Done'),
(25, 'QUEUE 0025', 62150284570216927, 'Shaun Rafael', 'Medical', 'Done'),
(26, 'QUEUE 0026', 62150284570216927, 'Josh Hart', 'Medical', 'Done'),
(27, 'QUEUE 0027', 62150284570216927, 'Tristan Thompson', 'Medical', 'Done'),
(28, 'QUEUE 0028', 62150284570216927, 'James Carlos Yap', 'Medical', 'Done'),
(29, 'QUEUE 0029', 62150284570216927, 'Luka Doncic', 'Medical', 'Done'),
(30, 'QUEUE 0030', 1637790318133398323, 'Armando Candelaria', 'Medical', 'Done'),
(31, 'QUEUE 0031', 62150284570216927, 'Jimmy Butler', 'Medical', 'Done'),
(32, 'QUEUE 0032', 62150284570216927, 'Jason Kidd', 'Medical', 'Done'),
(33, 'QUEUE 0033', 62150284570216927, 'Duncan Robinson', 'Medical', 'Done'),
(34, 'QUEUE 0034', 37902449718055365, 'Nikola Jokic', 'Dental', 'Done'),
(35, 'QUEUE 0035', 37902449718055365, 'Julius Randle', 'Dental', 'No Show'),
(36, 'QUEUE 0036', 37902449718055365, 'Caleb Martin', 'Medical', 'Done'),
(37, 'QUEUE 0037', 37902449718055365, 'Maria Clara', 'Medical', 'Done'),
(38, 'Queue 0038', 37902449718055365, 'Anthony Davis', 'Dental', 'No Show'),
(39, 'Queue 0039', 37902449718055365, 'Gabe Vincent', 'Medical', 'Waiting'),
(40, 'Queue 0040', 37902449718055365, 'Kevin Love', 'Medical', 'Waiting'),
(41, 'Queue 0041', 37902449718055365, 'Nikola Jovic', 'Medical', 'Waiting'),
(42, 'Queue 0042', 37902449718055365, 'Devin Booker', 'Medical', 'Waiting'),
(43, 'Queue 0043', 37902449718055365, 'Pj Simon', 'Medical', 'Waiting'),
(44, 'Queue 0001', 37902449718055365, 'Jason Tatum', 'Medical', 'Done'),
(45, 'Queue 0002', 37902449718055365, 'Marcus Smart', 'Medical', 'Done'),
(46, 'Queue 0003', 37902449718055365, 'Adrian Wong', 'Medical', 'Done'),
(47, 'Queue 0004', 37902449718055365, 'Taylor Swift', 'Medical', 'Done'),
(48, 'Queue 0005', 37902449718055365, 'Evan Turner', 'Medical', 'No Show'),
(49, 'Queue 0006', 37902449718055365, 'Marc Pingris', 'Dental', 'Active'),
(50, 'Queue 0007', 37902449718055365, 'Trae Young', 'Dental', 'Waiting');

--
-- Triggers `queue_list`
--
DROP TRIGGER IF EXISTS `getID`;
DELIMITER $$
CREATE TRIGGER `getID` BEFORE INSERT ON `queue_list` FOR EACH ROW BEGIN
	INSERT INTO queue_id_value VALUES (NULL);
    SET NEW.queue_id = CONCAT("Queue " , LPAD(LAST_INSERT_ID(), 4,"0"));
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

DROP TABLE IF EXISTS `schedule_list`;
CREATE TABLE IF NOT EXISTS `schedule_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(7, 'Dental Cleaning', 'Clean your teeth', '2023-02-03 12:00:00', '2023-02-03 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Citizen') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4  NOT NULL,
  `familyNumber` varchar(8) CHARACTER SET utf8mb4  NOT NULL,
  `height` bigint NOT NULL,
  `weight` bigint NOT NULL,
  `bp` varchar(8) NOT NULL,
  `updated` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `familyNumber` (`familyNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`),
  KEY `height` (`height`),
  KEY `weight` (`weight`),
  KEY `bp` (`bp`),
  KEY `updated` (`updated`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `type`, `firstName`, `lastName`, `birthday`, `age`, `sex`, `familyNumber`, `height`, `weight`, `bp`, `updated`, `username`, `email`, `phoneNumber`, `password`) VALUES
(3, 1637790318133398323, 'Citizen', 'Natsu', 'Dragneel', '2000-07-27', 22, 'Male', 'FN-01001', 168, 79, '120/90', '2023-05-06', 'natsu27', 'natsu.dragneel.main0727@gmail.com', 9074403149, '789789'),
(4, 7580310745353323131, 'Citizen', 'Dwyane', 'Wade', '1982-02-16', 40, 'Male', 'FN-01002', 193, 100, '125/80', '2023-04-25', 'dwade03', 'd.wade03@gmail.com', 9123455678, 'dwade4ever'),
(5, 7265107912895991, 'Citizen', 'Armin', 'Candelaria', '2000-10-05', 22, 'Male', 'FN-01003', 0, 0, '', '0000-00-00', 'armin05', 'qavcandelaria@tip.edu.ph', 9452385340, 'arminpogi'),
(6, 76972479655037, 'Citizen', 'Jerry', 'Clarito', '1967-10-09', 55, 'Male', 'FN-01004', 0, 0, '', '0000-00-00', 'jerryclarito', 'bbclarito09@gmail.com', 9053902090, 'jerry1'),
(7, 7111055, 'Citizen', 'Concepcion', 'Clarito', '1967-10-09', 55, 'Female', 'FN-01004', 0, 0, '', '0000-00-00', 'conc', 'bbclarito09@gmail.com', 9123456789, '123123'),
(8, 69071362844102318, 'Citizen', 'James', 'Mendoza', '2000-07-09', 22, 'Male', 'FN-01005', 0, 0, '', '0000-00-00', 'james123', 'james.mendoza@gmail.com', 9987654321, 'james123'),
(9, 155011987532, 'Citizen', 'Jayc', 'Espina', '2000-01-01', 23, 'Male', 'FN-01006', 0, 0, '', '0000-00-00', 'jayc01', 'jayc.espina@gmail.com', 9456789123, '123456'),
(10, 9066614, 'Citizen', 'Juan', 'Dela Cruz', '2000-05-01', 22, 'Male', 'FN-01006', 0, 0, '', '0000-00-00', 'juan11', 'james.mendoza@gmail.com', 9452385340, '789789'),
(11, 7042025769213999, 'Citizen', 'James Carlos', 'Yap', '2000-07-18', 22, 'Male', 'FN-01007', 188, 94, '120/90', '2023-04-26', 'jcyap18', 'jcyap18@gmail.com', 9234561231, 'jcy1800'),
(12, 7465830599584826, 'Citizen', 'LeBron', 'James', '1984-12-30', 38, 'Male', 'FN-01007', 205, 100, '120/90', '2023-03-23', 'lbj23', 'lebron.james@gmail.com', 9452385340, 'lbj23'),
(13, 652946296, 'Citizen', 'Lorena', 'Santos', '1950-02-22', 72, 'Female', 'FN-01002', 155, 59, '125/90', '2023-04-26', 'lsantos', 'lorena@gmail.com', 9123456789, 'lsantos'),
(14, 7698546815, 'Citizen', 'Rozelle', 'Macaraeg', '2000-07-25', 22, 'Female', 'FN-01005', 0, 0, '', '0000-00-00', 'zellegearacam', 'roselle.macaraeg@gmail.com', 9458011141, 'haduken1234'),
(15, 849696174405, 'Citizen', 'Terence', 'Romeo', '2000-06-29', 22, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', '12345', 'tr7@gmail.com', 9123456789, '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
