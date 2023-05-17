-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `request_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aasetreq`
--

CREATE TABLE `aasetreq` (
  `asset` varchar(10) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_code` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `man_name` varchar(20) NOT NULL,
  `man_email` varchar(20) NOT NULL,
  `upd` varchar(20) NOT NULL,
  `remarks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aasetreq`
--

INSERT INTO `aasetreq` (`asset`, `emp_name`, `emp_code`, `email`, `number`, `address`, `location`, `branch`, `man_name`, `man_email`, `upd`, `remarks`) VALUES
('laptop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'Laptop request sent to IT'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'West', 'Kanjurmarg', 'Pushkar', 'shirke.vighanesh@gma', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'Laptop request sent to IT'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-1', 'Delhi', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('desktop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'North-1', 'Delhi', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'Laptop request sent to IT'),
('laptop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Patna', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('desktop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'test'),
('desktop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'South', 'Banglore', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'South', 'Banglore', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'South', 'Banglore', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('desktop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent ', 'test'),
('desktop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'North-2', 'Panchkula', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, 'LBS road', 'North-1', 'Delhi', 'Pushkar', 'ithelpdesk@nitco.in', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, 'LBS road', 'North-1', 'Delhi', 'Pushkar', 'ithelpdesk@nitco.in', 'Laptop Request Sent', 'test'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Do\r\nOpp to Old MT Agrawal Hospital Mulu', 'West', 'Kanjurmarg', 'Pushkar', 'ithelpdesk@nitco.in', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Do\r\nOpp to Old MT Agrawal Hospital Mulu', 'West', 'Kanjurmarg', 'Pushkar', 'ithelpdesk@nitco.in', 'test', 'test'),
('laptop', 'Vighanesh', 100054, 'Shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'East', 'Bhubaneshwar', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('desktop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'North-2', 'Panchkula', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent', 'Laptop request sent to IT'),
('desktop', 'Vighanesh', 100054, 'shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('desktop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'Shirke.vighanesh@gma', 'Laptop Request Sent ', 'test'),
('desktop', 'Vighanesh', 100043, 'shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'South', 'Banglore', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'South', 'Banglore', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('desktop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'Shirke.vighanesh@gma', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('desktop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('desktop', 'Vighanesh', 100043, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'gepra5978@gmail.com', 'test', 'test'),
('laptop', 'Vighanesh', 100043, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Do\r\nOpp to Old MT Agrawal Hospital Mulu', 'East', 'Kolkatta', 'Pushkar', 'ithelpdesk@nitco.in', 'test', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100054, 'gepra5978@gmail.com', 2147483647, 'LBS road', 'East', 'Kolkatta', 'Pushkar', 'gepra5978@gmail.com', 'Laptop Request Sent ', 'test'),
('laptop', 'Vighanesh', 100043, 'Shirke.vighanesh@gma', 2147483647, 'Mulund checknaka(west) Thane 400604', 'South', 'Cochin', 'Pushkar', 'Shirke.vighanesh@gma', 'test', 'Laptop request sent to IT'),
('laptop', 'Vighanesh', 12234, 'vighaneshshirke@nitc', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'shirke.vighanesh@gma', 'test', 'test'),
('laptop', 'Vighanesh', 12234, 'vighaneshshirke@nitc', 2147483647, 'LBS road', 'West', 'Kanjurmarg', 'Pushkar', 'shirke.vighanesh@gma', 'test', 'test'),
('desktop', 'Vighanesh', 123456, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'South', 'Banglore', 'Pushkar', 'devendratambe@nitco.', 'test', 'test'),
('desktop', 'test', 123456, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'West', 'Kanjurmarg', 'Pushkar', 'devendratambe@nitco.', 'test', 'test'),
('laptop', 'Vighanesh', 12234, 'vighaneshshirke@nitc', 2147483647, 'Mulund checknaka(west) Thane 400604', 'East', 'Patna', 'Pushkar', 'devendratambe@nitco.', 'test', 'test'),
('desktop', 'Vighanesh', 123456, 'vighaneshshirke@nitc', 2147483647, '507 Kadampada CHS Building No 1  Doctor Rajendra Prasad Road\r\nOpp to Old MT Agrawal Hospital Mulund ', 'East', 'Bhubaneshwar', 'Pushkar', 'devendratambe@nitco.', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
