-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 10:06 PM
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
-- Database: `system_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop_details`
--

CREATE TABLE `laptop_details` (
  `assets` varchar(20) DEFAULT NULL,
  `emp_name` text NOT NULL,
  `emp_code` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `number` bigint(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `serial` varchar(40) NOT NULL,
  `processor` varchar(40) NOT NULL,
  `memory` varchar(40) NOT NULL,
  `storage` varchar(40) NOT NULL,
  `os` varchar(40) NOT NULL,
  `office` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop_details`
--

INSERT INTO `laptop_details` (`assets`, `emp_name`, `emp_code`, `email`, `number`, `state`, `branch`, `make`, `model`, `serial`, `processor`, `memory`, `storage`, `os`, `office`) VALUES
('Laptop', 'John Fernandes', 123, 'JohnFernandes@nitco.in', 9967590665, 'West', 'Kanjurmarg', 'Lenovo', '80WR', 'LR08WXVS', 'Intel i3-6006U', '2GB', '500GB', 'Windows10', 'MS Office 2013'),
('Laptop', 'Subrata Basu', 731, 'subratabasu@nitco.in', 7738388054, 'West', 'Kanjurmarg', 'Dell', 'MacBook Pro (16-inch, 2019)', 'C02FP8BEMD6M', 'Intel Core i7', '16GB', '500GB', 'Mac', 'MS Office 2021'),
('Laptop', 'Diviyang Chheda', 734, 'diviyangchheda@nitco.in', 7738388683, 'West', 'Kanjurmarg', 'Dell', 'Macbook Air(M1, 2020)', 'C02FD2YEQ6L5', 'Apple M1 chip', '16GB', '500GB', 'Mac', 'MS Office 2021'),
('Laptop', 'Sachin Patil', 760, 'sachinp@nitco.in', 7738371179, 'West', 'Kanjurmarg', 'Dell', 'Latitude 3480', 'BZC35L2', 'Intel i3-6006', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'suranjanchakraborty', 787, 'suranjanchakraborty@nitco.in', 8876509513, NULL, NULL, 'Lenovo', '81HQ(Lenovo V130-14IKB)', 'MP1EVAQH', 'Intel  i3-6006U', '4GB', '280GB', 'Windows10', 'MS Office 2021'),
(NULL, 'Dilip Singh Thakur', 809, ' dilipsinghthakur@nitco.in', 7030906540, NULL, NULL, 'HP', 'HP240 G4', '5CG60840F9', 'intel core I3- .2.00GHZ', '4GB', '500GB', 'Windows10', 'MS Office 2013'),
('Laptop', 'Ajey Karambelkar', 818, 'ajeykarambelkar@nitco.in', 7506956250, 'West', 'Kanjurmarg', 'Dell', 'X360', '8CG20622YT', 'Intel i5 1155', '16GB', '500GB', 'Windows11', 'MS Office 2021'),
(NULL, 'Pradeep Govindan', 819, 'pradeepgovindan@nitco.in', 8291541472, NULL, NULL, 'Dell', 'Latitude 3420', 'GW5G4B3', 'Intel Core i3- 1115G4 11th Generation ', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sudip Bhattacharyya', 836, 'sudipbhattacharyya@nitco.in', 8657558268, NULL, NULL, 'Lenovo', '82BF(E41-45)', 'MP20KEL6', 'AMD A6-9225 2.6Ghz', '4GB', '1TB', 'Windows7', 'MS Office 2007'),
(NULL, 'Manoj Kumar', 840, 'MANOJKUMARPAREEK@NITCO.IN', 8657562296, NULL, NULL, 'Dell', 'Latitude 3490', 'D7QX7T2', 'Intel i5-8250U', '12GB', '1TB', 'Windows11', 'MS Office 2007'),
(NULL, 'Sanjeev Sharma', 844, 'sanjeevsharma@nitco.in ', 8657535560, NULL, NULL, 'Dell', 'Latitude 3490', '83R9BV2', 'Intel Core i5-8250U Processor', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sunil Kumar', 845, 'sunilk@nitco.in', 8558824272, NULL, NULL, 'Dell', 'Latitude 3490', 'GGKZT2', 'Intel(R)Core(TM)i5-8250UCPU@1.60GHZ,1800', '8GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Himadri bandyopadhyay', 857, 'himadrib@nitco.in', 9648851166, NULL, NULL, 'HP', 'hp 245 G7 Notebook PC', '5cg9235553', 'AMD A6-9225 RADEON R4,5 COMPUTECORES 2C+', '4GB', '280GB', 'Windows10', 'MS Office 2021'),
(NULL, 'Vijay Chavan', 1040, 'vijaychavan@nitco.in', 9867560310, NULL, NULL, 'HP', '245 G5', '5CG6431FNM', 'AMD A6 7310', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Vijay More', 1066, 'vijaymore@nitco.in', 9987512208, NULL, NULL, 'HP', 'ProBook 650 G1', '5CG53774NF', 'Intel i5-4210M', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Deepak Kamble', 1083, 'DeepakKamble@nitco.in ', 8879651075, NULL, NULL, 'Lenovo', 'V310-14ISK', 'LR09S1QC', ' Intel Core i3-6006U', '4GB', '1TB', 'Windows7', 'MS Office 2010'),
(NULL, 'Manju Sukhija', 1084, 'manjusukhija@nitco.in', 7738615554, NULL, NULL, 'Dell', 'Latitude 3490', 'DRH0XS2', 'Intel core i5-8250U', '16GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'sanjay naik', 1093, 'sanjaynaik@gmail.com', 9867560301, NULL, NULL, 'HP', 'Elitebook 840 G1', 'CNU4435C1K0', 'intel core i5', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Naresh Punjabi', 1103, 'nareshpunjabi@nitco.in', 9004497682, NULL, NULL, 'Dell', 'Latitude 3410', '93G3Z93', 'Intel(R) Core(TM) i3-10110U', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ujwal Padtare', 1108, 'ujwalpadtare@nitco.in', 9004390018, NULL, NULL, 'HP', '245 G5', '5CG6431T5J', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ramesh Shirke', 1136, 'rameshshirke@nitcon.in', 8879677253, NULL, NULL, 'Lenovo', 'E40-80', 'MP13MDLY', 'Intel(R) Core(TM) i3-5005U', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Leslie Fernandes', 1165, 'Lesliefernandes@nitco.in ', 9324502799, NULL, NULL, 'HP', '245 G5', '5CG64358RR', 'AMD A6-7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Amol Deshmukh', 1204, 'amoldeshmukh@nitco.in ', 9867553868, NULL, NULL, 'HP', '245 G5', '5CG6432GNH', 'AMD A6-7310', '8GB', '500GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Heera Bisht', 1222, 'heerasinghbisht@nitco.in', 9739392652, NULL, NULL, 'Dell', 'Laitutde E5410', '8QQ17BS', 'Intel i3 M350', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Niromand Golwalla', 1282, 'niromandGolwalla@nitco.in ', 8879687326, NULL, NULL, 'Lenovo', 'V310-14ISK', 'LR09QQY4', 'Intel Pentium 4405U Processor', '4GB', '500GB', 'Windows7', 'MS Office 2010'),
(NULL, 'Joyce McNess', 1304, 'joyce@nitco.in', 9967005803, NULL, NULL, 'Dell', 'Latitude 3420', '9X5G4B3', 'Intel Core i3- 1115G4 11th Generation', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Subhas Pednekar', 1325, 'SubhashPednekar@nitco.in', 7738348888, NULL, NULL, 'Dell', 'Latitude 3410', '6W8R863', 'Intel i3-10110U', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Collins Barretto', 1349, 'collinsbarretto@nitco.in ', 9967036286, NULL, NULL, 'Dell', 'Latitude 3410', 'DV8R863', 'Intel Core i3- 10110U 10th Generation', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Sameer Waghmare', 1383, 'sameerwaghmare@nitco.in', 998750263, NULL, NULL, 'HP', ' EliteBook 820 G2', '5CG54303QW', 'Intel(R) Core(TM) i5-5300U', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ramesh Iyer', 1401, 'rameshiyer@nitco.in', 8411976211, NULL, NULL, 'HP', '245 G5', '5CG6432ND6', 'AMD A6 7310', '8GB', '500GB', 'Windows7', 'MS Office 2010'),
(NULL, 'Asha Kurdekar', 1422, 'ashakurdekar@nitco.in', 918657411270, NULL, NULL, 'Dell', ' Latitude 3490', '96P0XS2', 'Intel(R) Core(TM) i5-8250U ', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sunil Solkar', 1437, 'sunilsolkar@nitco.in', 77386, NULL, NULL, 'Dell', 'Vostro 1440', '5YGPJR1', 'Intel i3 M720', '8GB', '320GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Sachin Manukar', 1442, 'SachinManukar@nitco.in ', 9004390038, NULL, NULL, 'HP', ' EliteBook 840 G1', '5CG451425K', 'Intel(R) Core(TM) i5-4300U ', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Pradeep Brahmankar', 1450, 'pradeepbrahmankar@nitco.in', 9082356114, NULL, NULL, 'Dell', 'Latitude 3490', '8L568T2', 'Intel i5 8250', '8GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Subhash Suryawanshi', 1506, 'SubhashSuryawanshi@nitco.in ', 9167206953, NULL, NULL, 'HP', '245 G5', '5CG6366HKQ', 'AMD A6-7310 APU', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sachin Bhilare', 1511, 'SachinBhilare@nitco.in', 9867553894, NULL, NULL, 'Dell', 'Latitude 3410', '8MGF503', 'Intel i3 10110', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Nishant Bedekar', 1524, 'NishantBedekar@nitco.in ', 7738086858, NULL, NULL, 'Dell', 'Precision M4600', '4PZRKQ1', 'Intel Core i7-2720QM', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Pushkar Dandge', 1527, 'pushkardandge@nitco.in', 7738329100, NULL, NULL, 'HP', 'Pavilion x360', '8CG20622Ye', 'Intel i5 1155', '16GB', '500GB', 'Windows11', 'MS Office 2021'),
(NULL, 'Christopher Shelke', 1548, 'christophershelke@nitco.in', 9867751608, NULL, NULL, 'Toshiba', 'Satellite Pro B40-A', '1E096358Q', 'Intel core i3', '4GB', '500GB', 'Windows7', 'MS Office 2010'),
(NULL, 'Nikita Arolkar', 1550, 'nikitaarolkar@nitco.in', 7738362790, NULL, NULL, 'Lenovo', 'E40', 'MP13MF96', 'Intel i3 5005', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Shweta Borkar', 1613, 'shwetaborkar@nitco.in', 9987593528, NULL, NULL, 'Dell', 'Surface Laptop (1st Gen)', '026389784257', 'Intel core i5', '8GB', '280GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Reema Remy', 1622, 'reemaremy@nitco.in', 9920358520, NULL, NULL, 'HP', '14CR200TU', '5CG9528VMR', 'Intel i5 10120', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Anand Bhutkar', 1642, 'anandbhutkar@nitco.in', 8657494939, NULL, NULL, 'Dell', 'Latitude 3420', 'G3TKFG3', 'Intel i3 11010', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Jitendra Yevle', 1646, 'jitendrayevle@nitco.in', 9987066592, NULL, NULL, 'HP', '245 G5	', '5CG63702YR', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Yashashree Tawde', 1651, 'yashashreetawde@nitco.in', 9930823223, NULL, NULL, 'Apple', 'MACBOOK PRO M1 MAX', 'HCJWL90T3K', 'M1', '32GB', '1TB', 'Mac', 'MS Office 2021'),
(NULL, 'Geeta Khanna', 1653, 'geetakhanna@nitco.in', 9867633093, NULL, NULL, 'Lenovo', 'V310', 'LR0AYRTB', 'Intel i3 6006', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Niraj Assar', 1656, 'nirajassar@nitco.in', 77380, NULL, NULL, 'Lenovo', '81HQ', 'MP1EUAYQ', 'Intel(R) Core(TM) i3-6006U CPU @ 2.00GHz', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Swapnil Pawar', 1664, 'swapnilpawar@nitco.in', 7738020072, NULL, NULL, 'Dell', 'Latitude 3410', '299H463', '', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Veena Shetty', 1665, 'veenashetty@nitco.in', 8291066036, NULL, NULL, 'HP', '14s-cf0115TU', '5CG92373R4', 'Intel(R) Core(TM) i3-7100U CPU @ 2.40GHz', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Shivgamii Bankar', 1681, 'shivgamiibankar@nitco.in', 9029121906, NULL, NULL, 'Dell', 'Latitude 3410', '5T8R863', 'Intel i3 10110', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Vicky Bhardwaj', 1687, 'vickybhardwaj@nitco.in', 98676, NULL, NULL, 'HP', '14CR200TU', '5CG9528VP4', 'Intel i5 10120', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Divya Motwani', 1698, 'divyamotwani@nitco.in', 7045913683, NULL, NULL, 'HP', '240 G8', '5CG1367NT4', 'Intel i3 1005', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Sanchay Bhave', 1701, 'sanchaybhave@nitco.in', 7506396881, NULL, NULL, 'Apple', 'MacBookAir7,2', 'C1MSR4EZH3QD', 'Dual-Core Intel Core i5 3 MB', '8GB', '280GB', 'Mac', 'MS Office 2013'),
(NULL, 'Sameer Vichare', 1706, 'sameervichare@nitco.in', 7506659514, NULL, NULL, 'HP', 'EliteBook 820 G2', '5CG5520G58', 'Intel(R) Core(TM) i5-5300U ', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Nasreen Habib', 1708, 'nasreenhabib@nitco.in', 8879983022, NULL, NULL, 'HP', 'Elitebook 840 G1', 'CNU415CT12', 'intel i5 4300', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Chandan Sharma', 1710, 'chandansharma@nitco.in', 9867560351, NULL, NULL, 'Dell', 'Latitude 3410', '4GD3Z93', 'Intel(R) Core(TM) i3-10110U CPU @ 2.10GH', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Urmit Shah', 1712, 'urmitshah@nitco.in', 7777081090, NULL, NULL, 'HP', '240 G8', '5CG1367L24', 'Intel i3-1005', '8GB', '500GB', 'Windows11', 'MS Office 2013'),
(NULL, 'Senthil Rajan', 1713, 'senthilrajan@nitco.in', 0, NULL, NULL, 'Dell', 'Precision 3551', 'G7081J3', 'Intel(R) Core(TM) i5-10300H CPU @ 2.50GH', '32GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Prithvi Rajkumar Gunasekaran', 1714, 'prithivirajkumarg@nitco.in', 9940270332, NULL, NULL, 'HP', 'Pavillion X360', '8CG92629ZX', 'Intel i5 8625', '16GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Upender Kumar', 2147, 'upenderkumar@nitco.in', 8558824277, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG64341FY', 'AMD A6-7310 APU ', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Saurabh Kanti Ghosh', 2265, 'saurabhghosh@nitco.in', 8336907542, NULL, NULL, 'HP', 'HP245G5', '5CG6431P9F', 'AMD A6-7310 APU with AMD Radeon R4 Graph', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Prashant Kalbhawar', 2288, 'prashantkalbhawar@nitco.in', 9755558828, NULL, NULL, 'Lenovo', '808x', 'LROATW4X', 'Intel i3 6006U', '4GB', '1TB', 'Windows7', 'MS Office 2007'),
(NULL, 'Rabindra Nayak', 2334, 'rabindranayak@nitco.in', 7381052901, NULL, NULL, 'Lenovo', '80TD', 'R90QDZ2Q', 'AMD A6 9210', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'HARISH R', 2377, 'harishr@nitco.in', 8589995403, NULL, NULL, 'Lenovo', 'Lenovo E-40-80', 'MP1309RH', 'Intel(R) Core(TM) i3-5005U CPU @ 2.00GHz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'P SAMPATH', 2388, 'sampathp@nitco.in', 7829969104, NULL, NULL, 'HP', 'HP Elitebook 840 G1', 'CNU401B8Z5', 'Intel(R) Core(TM) i5-4300U CPU @ 1.90GHz', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Srajan Choudhary', 2522, 'SRAJANCHOUDHARY@NITCO.IN', 9179463373, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG9217PZQ', 'AMD A6-9225', '4GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Nilesh Oza', 2571, 'nileshoza@nitco.in', 8879687361, NULL, NULL, 'HP', '245 G5', '5CG64325L6', 'AMD A6 7310', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'D SRINIVASA RAO', 2615, 'srinivasarao@nitco.in', 9993578505, NULL, NULL, 'HP', 'HP 245 G5 ', '5CG6431GN6', 'AMD A6-7310 APU WITH AMD RADEON', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'shankar das', 2639, 'shankardas@nitco.in', 8876509514, NULL, NULL, 'Dell', 'HP 245 G5 NOTEBOOK PC', '5CG64316NW', '', '4GB', '500GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Shailender Gambhir', 2650, 'shailendergambhir@nitco.in', 8558824229, NULL, NULL, 'HP', ' SLIC-MPC', '5CG64339Z1', 'AMD A6', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'vipin bahoriya', 2654, 'vipinbahoriya@nitco.in', 8657562295, NULL, NULL, 'HP', 'HP 245 G5', '5CG64327VG', 'AMD A6-7310', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Mohiuddin Quazi', 2739, 'mohiuddinquazi@nitco.in', 7738388624, NULL, NULL, 'HP', '245 G5', '5CG6431716', 'AMD A-6 7130', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Ramesh Dahi', 2747, 'Rameshdahi@nitco.in', 8411976142, NULL, NULL, 'HP', 'HP Elitebook840 G1', '5CG5061YC9', 'intel(R) Core(TM) i5-43000U ', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sandip Bose', 2884, 'SANDIPBOSE@NITCO.IN', 8336907545, NULL, NULL, 'HP', '245 G5', '5CG6370GRD', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Umesh Ojha', 2960, 'umeshojha@nitco.in', 8336907546, NULL, NULL, 'Lenovo', '80SX', 'LR098YAG', 'Intel(R) Core(TM) i3-6006U CPU @ 2.00GHz', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Tulshidas Raskar ', 4022, 'tulshidasraskar@nitco.in', 8411976154, NULL, NULL, 'Dell', 'Vostro 3350	', '6FJNKP1', 'Intel(R) Core(TM) i3 -2310MCPU    @ 2.10', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ravindra H K', 4056, 'hkravindra@nitco.in', 8411976172, NULL, NULL, 'Lenovo', '80SX', 'LR089NKV', 'Intel Core I3', '4GB', '1TB', 'Windows7', 'MS Office 2007'),
(NULL, 'Rajendra Patil', 4242, 'rajendrapatil@nitco.in', 8411976210, NULL, NULL, 'Dell', 'Vostro 1450', '48DXKT1', 'core i3 370M 2.4Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, ' Kiran Pawar', 4299, 'kiranpawar@nitco.in', 8411976182, NULL, NULL, 'Dell', 'Latitude E5410', '8HG67BS', 'Intel i5-460M Processor (3M Cache, 2.53 ', '2GB', '320GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Mayur Ubale', 4321, 'mayurubale@nitco.in', 7039441150, NULL, NULL, 'Lenovo', '80HR', 'MP12B0SV', 'Intel(R) Core(TM) i3-5005U', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Murugan Ranganathan', 4550, 'rmurugan@nitco.in', 7738383370, NULL, NULL, 'HP', 'ProBook 440  G5', '5CD8215HGX', ' intel core I3', '4GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Shirish Patil', 4765, 'SHIRISHPATIL@NITCO.IN', 8411976200, NULL, NULL, 'Dell', 'HP 245 G7 Notebook PC', '5CG9211Y0W', 'AMD A6-9225', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Dipten Bandopadhyay DiptenB@nitco.in', 4957, ' DiptenB@nitco.in', 9987795286, NULL, NULL, 'HP', '245 G5', '5CG64322ZQ', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ashish Satish', 5076, 'ashishsatish@nitco.in', 7738040342, NULL, NULL, 'Dell', 'Latitude 3390', '5BXKZN2', 'Intel(R) Core(TM) i5-8250U CPU @ 1.60GHz', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Arvind Bhagat', 7025, 'arvindbhagat@nitco.in', 7280847991, NULL, NULL, 'HP', 'Elitebook 820 G2', '5CG5353NTX', 'Intel i5 5300', '8GB', '280GB', 'Windows10', 'MS Office 2010'),
(NULL, 'DHARMENDRA KUMAR THAKUR', 7062, 'DHRAMENDRATHAKUR@NITCO.IN', 9771420287, NULL, NULL, 'Lenovo', '80F6', 'MP10EXT6', 'INTEL(R) PENTIUN (R)CPU 3825U @', '4GB', '280GB', 'Windows7', 'MS Office 2007'),
(NULL, 'DHAVAL MEHTA', 7117, 'dhavalmehta@nitco.in', 9687623519, NULL, NULL, 'HP', '245 G5', '5CG636217Z', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'K PSudhir', 7257, 'kpsudhir@nitco.in', 7829969105, NULL, NULL, 'Lenovo', 'LR0AYRUR', '', '', '2GB', '280GB', 'Windows11', 'MS Office 2021'),
(NULL, 'Abdulmunaf Kadivar', 7325, 'abdulmunafkadivar@nitco.in', 9909930658, NULL, NULL, 'HP', '245 G5', '5CG6434LB6', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'NAYAN PARMAR', 7329, 'nayanparmar@nitco.in', 8657598772, NULL, NULL, 'Dell', 'Latitude E5410', '6QS1CQ1', 'Intel i5-460M Processor (3M Cache, 2.53 ', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Nikhil Ghodasara', 7330, 'nikhilghodasara@nitco.in', 8657598773, NULL, NULL, 'Dell', 'Vostro 1440', '6HM6KR1', 'Core i3 370M  2.4Ghz', '2GB', '280GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Hitendra Gauswami', 7331, 'Hitendragauswami@nitco.in', 8657491064, NULL, NULL, 'HP', '245 G5', '5CG64353HC', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Mukesh Ahirwar', 7334, 'mukeshahirwar@nitco.in', 9909988019, NULL, NULL, 'HP', '245 G5', '5CG6434TWG', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Jay Dave', 7335, 'Jaydave@nitco.in', 9909139215, NULL, NULL, 'HP', '245 G7', '5CG9226FHV', 'AMD A6-9225 Radeon R4 2.60GHz', '4GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Sumit Hatekar', 7341, 'SUMITHATEKAR@NITCO.IN', 9970099906, NULL, NULL, 'Lenovo', '81YA', 'PF2E8L7H', 'intel core I3- .2.20GHZ', '4GB', '280GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Balaji Waghmare', 7380, 'BALAJIWAGHMARE@NITCO.IN', 7066128578, NULL, NULL, 'HP', 'ELITEBOOK 840 G1', 'CNU425CDVF', 'Intel i5- 1.9GHZ', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Vishwajit Singh', 7423, 'vishwajitsingh@nitco.in', 9709302125, NULL, NULL, 'HP', 'HP ELITE BOOK 820 G2', '5CG5353R3X', 'INTEL(R) CORE(TM) I5-5300U CPU @ 2.30GHZ', '8GB', '500GB', 'Windows11', 'MS Office 2007'),
(NULL, 'Samrat Dutta', 7491, 'samratdutta@nitco.in', 9073965101, NULL, NULL, 'HP', 'HP 245GP', '5CG6431P6F', 'AMD A6-7310 APU WITH AMD REDEON R4 GRAPH', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Kunal Chafekar', 7548, 'kunalchafekar@nitco.in', 8291755231, NULL, NULL, 'Dell', 'Latitude 3420', '14TKFG3', 'Intel(R) Core(TM) i3-1115G4 ', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Navin Pandya', 7601, 'navinpandya@nitco.in', 9099960878, NULL, NULL, 'HP', '245 G5', '5CG6395WTC', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'ashrunisha shaikh', 7611, 'ashrunishashaikh@nitco.in ', 8291592543, NULL, NULL, 'Dell', 'Latitude 3410', '90L3Z93', 'Intel Core i3- 10110U 10th Generation', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Punam Rai', 7634, 'punamrai@nitco.in', 7506006079, NULL, NULL, 'HP', 'HP 245 G5 NOTEBOOK PC', '5CG6432XCC', 'AMD A6-7310 APU', '4GB', '280GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Soumya Sahoo', 7651, 'soumysahoo@nitco.in', 9437051247, NULL, NULL, 'Dell', 'Latitude 3410', '9BJ3Z93', 'intel i3 10110', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Tarun Agarwal', 7717, 'tarunagarwal@nitco.in', 8879511898, NULL, NULL, 'HP', '245 G5', '5CG6435D7D', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Mohd Umair', 7732, 'umairmohd@nitco.in', 9703012942, NULL, NULL, 'HP', 'HP 240 GB NOTEBOOK PC', '', '', '8GB', '280GB', 'Windows11', 'MS Office 2021'),
(NULL, 'Pavan Gudage', 7739, 'pavangudage@nitco.in', 7829969114, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG93926MN', 'AMD A6-9225 RADEON R4, 5 COMPUTE CORES 2', '4GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Resham Singh Banga', 7768, 'reshamsinghbanga@nitco.in', 8657414590, NULL, NULL, 'HP', '245 G5', '5CG6356664', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'RANJEET KUMAR SINGH', 7809, 'ranjeetksingh@nitco.in', 9771459615, NULL, NULL, 'HP', 'HP 245 G5 NOTEBOOK PC', '5CG6435M8N', 'AMD A6-7310 APU WITH AMD RADEON R4 GRAPH', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Anirban Ghosh', 7831, 'anirbanghosh@nitco.in', 9836792644, NULL, NULL, 'HP', '245 G7', 'PHDKP00WDBCA', 'AMD A6 9225', '4GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Anandkumar paija', 7839, 'anandkumarpaija@nitco.in', 8657924396, NULL, NULL, 'HP', 'EliteBook 820 G2	', '5CG5353PZW', 'Intel® Core™ i5-5300U CPU @2.3GHz', '8GB', '500GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Ajay Bansal', 7843, 'ajaybansal@nitco.in', 9988816477, NULL, NULL, 'Lenovo', '80HR', 'MP11WL4D', 'Intel Pentinum 3826U', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Kishor Nakti', 7848, 'kishornakti@nitco.in', 9137120480, NULL, NULL, 'Lenovo', '81HQ', 'MP1EU9ZE', 'Intel(R) Core(TM) i3-6006U CPU @ 2.00GHz', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Pradeep', 7853, 'pradeep@nitco.in', 8657598779, NULL, NULL, 'HP', '245 G5', '5CG64321S4', 'AMD A6-7310 APU,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Virender Kumar', 7866, 'virendrakumar@nitco.in', 9167249332, NULL, NULL, 'HP', '245 G5', '5CG637ONVD', ' AMD A6-7310', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Alpesh Parmar', 7868, 'alpeshparmar@nitco.in', 8657558343, NULL, NULL, 'HP', '245 G5', '5CG6395QTM', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Pradeep Pal', 7869, 'pradeeppal@nitco.in', 8657553056, NULL, NULL, 'HP', '245 G5', '5CG6366CZD', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Rakesh Mestry', 7871, 'rakeshmestry@nitco.in', 8657553058, NULL, NULL, 'Dell', 'Precision 3551', 'GTJ61J3', 'Intel(R) Core(TM) i5-10300H CPU @ 2.50GH', '32GB', '500GB', 'Windows11', 'MS Office 2010'),
(NULL, 'sourabh kumar', 7889, 'sourabhkumar@nitco.in', 8558824230, NULL, NULL, 'HP', 'hp 245 G5 NOTEBOOKPC', '5cg6370b66', 'amd a6-7310 apu with amd radeon r4 graph', '4GB', '280GB', 'Windows11', 'MS Office 2007'),
(NULL, 'Md. zakaullah ', 7895, 'MUHAMMADZAKAULLAH@nitco.in', 72900742151, NULL, NULL, 'Lenovo', '80SX', 'QTF1VV64400598', 'Intel(R) Core(TM) i3-6100U CPU @ 2.30GHz', '4GB', '1TB', 'Windows7', 'MS Office 2007'),
(NULL, 'Ajit Singh', 7900, 'ajitpratapsingh@nitco.in', 8657099825, NULL, NULL, 'Dell', 'Latitude 3490', '3YVQBV2', 'Intel i5 8250', '16GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Tariq Malwawalla', 7901, 'tariqm@nitco.in ', 8291856989, NULL, NULL, 'HP', '245 G7 ', '5CG9211Z1M', 'AMD A6-9225', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Surajit Pramanick', 7909, 'surajipramanick@nitco.in', 8657546865, NULL, NULL, 'Dell', 'Inspiron 3576', '7DGB1P2', 'Intel i5 8250', '16GB', '280GB', 'Windows11', 'MS Office 2021'),
(NULL, 'Abhishek Guha Roy', 7910, 'abhishekguharoy@nitco.in', 8657518987, NULL, NULL, 'Lenovo', '82BF (Lenovo E41-45)', 'MP1WCT6Q', 'AMD PRO A6 7350', '4GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Rohit Kumar', 7916, 'rohitkumar@nitco.in', 9987550789, NULL, NULL, 'HP', 'HP 245 G5', '5CG6370Q71', 'AMD A6 7310', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Shashibhushan Kumar', 7918, 'shashibhushankumar@nitco.in', 9987671789, NULL, NULL, 'HP', 'Elitebook 840 G1', 'CNU42899YN', 'Intel(R) Core(TM) i5-4300U', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'SNEHA VIJAYAN ', 7933, 'cochinsalescoord@nitco.in', 8657375648, NULL, NULL, 'HP', 'HPElitebook820', '5CG5353QWJ', 'Intel(R) Core(TM) i5-5300U CPU @ 2.30GHz', '8GB', '500GB', 'Windows10', 'MS Office 2021'),
(NULL, 'ANAND PRAKASH M', 7935, 'anandp@nitco.in', 8939995088, NULL, NULL, 'HP', 'HP ELITEBOOK 840 G1', 'CNU4159FHN', 'Intel(R) Core(TM) i5-4300U CPU @ 1.90GHz', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Om Prakasf Bind', 7936, 'omprakashbind@nitco.in', 8879675094, NULL, NULL, 'Dell', 'Latitude 3420', 'G5TKFG3', 'Intel i3 1115', '8GB', '1TB', 'Windows11', 'MS Office 2007'),
(NULL, 'CHANCHAL KUMAR', 7949, 'chanchalkumar@nitco.in ', 9352201608, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG9211XFF', 'AMD A6-9225 RADEON R4, 5 COMPUTE CORES 2', '4GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'RAVINDER SINGH', 7957, 'ravindersingh@nitco.in', 8657705443, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG6431G7F', 'AMD A6-7310 APU with AMD Radeon R4 Graph', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Alexander Mathai', 7968, 'ALEXANDERMATHAI@NITCO.IN', 8589032876, NULL, NULL, 'Lenovo', '82BF', 'MP20KH9L', 'AMD A6-9225', '4GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'SAMORASH MOHANTI', 7982, 'samorashmohanti@nitco.in', 8291856986, NULL, NULL, 'Lenovo', '80SX', 'LR0B3R8T', 'Intel(R) Core(TM) i3-6006U CPU @ 2.00GHz', '4GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Asok K', 8084, 'asokk@nitco.in', 9655666605, NULL, NULL, 'Lenovo', '82BF', '', 'AMD A6-9225 ', '4GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Hiteshbhai Barad', 8088, 'HITESHBARAD@NITCO.IN', 8657915028, NULL, NULL, 'HP', '245 G5 ', '5CG6370HYB', ' AMD A6-7310', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Biranchi Kumar Das', 8093, 'biranchidas@nitco.in', 7874000998, NULL, NULL, 'HP', '245 G5', '5CG64351NM', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Swapnil Raikar', 8107, 'swapnilraikar@nitco.in', 8657524348, NULL, NULL, 'Dell', 'Latitude 3490', 'DFZ7BV2', 'Intel Core i3-7020U', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'AMIT RANJAN', 8110, 'amitranjan@nitco.in', 9586995344, NULL, NULL, 'HP', '245 G5', '5CG6432FSM	', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Mithilesh Singh', 8116, 'mithileshsingh@nitco.in', 8828039990, NULL, NULL, 'HP', '245 G5', '5CG6433YQT', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2013'),
(NULL, 'Shiv Sagar Jaiswal', 8123, 'shivsagarjaiswal@gmail.com', 9321709986, NULL, NULL, 'HP', '245 G5', '5CG636020L', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Somsweta Das', 8149, 'SOMSWETADAS@NITCO.IN', 8291856992, NULL, NULL, 'Lenovo', 'E41', 'MP1WGFHZ', 'AMD PRO A6 7350', '4GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'ANUPAMA JOHNSON', 8155, 'anupamajohnson@nitco.in', 8657432765, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG9389QY5', 'AMD A6-9225 RADEON R4, 5 COMPUTE CORES 2', '4GB', '280GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Akash Jaiswal', 8160, 'akashjaiswal@nitco.in', 7045848227, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '', 'AMD A6-9225 Raedon R4', '4GB', '1TB', 'Windows7', 'MS Office 2010'),
(NULL, 'Saurabh Thakur', 8167, 'saurabhkumarthakur@nitco.in', 7738812347, NULL, NULL, 'Lenovo', '82bf', 'MP1WGHDB', 'AMD PRO A6-7350B R5,5 COMPUTE CORES 2C+3', '4GB', '280GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Karthick Ganesan', 8170, 'karthickg@nitco.in', 7208105888, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG6431G9M', 'AMD A6-7310 APU with AMD Radeon R4 Graph', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Soni Devi', 8180, 'SONIVERMA@NITCO.IN', 8657522105, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG6431GSL', 'AMD A6-7310 APU ,2.00Ghz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Ravindr Kubavat', 8181, 'RavindrKubavat@nitco.in', 9152997283, NULL, NULL, 'Apple', 'Macbook Pro Retian,15-inc Mid 2014', 'C02NR2GZG3QC', '2.2Ghz Quad-Core Intel Core i7(Intel iri', '16GB', '320GB', 'Mac', 'MS Office 2021'),
(NULL, 'Niroj Kumar Gupta', 8187, 'nirojgupta@nitco.in', 8169469039, NULL, NULL, 'HP', '650 G1 (PROBOOK)', '5CG60709XS	', 'Inetl core i5 4300M ,2.60gHZ', '8GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Risheekesan Arayambath', 8196, 'risheekesana@nitco.in', 8291207206, NULL, NULL, 'HP', ' HP 245 G7', '5CG9389N80', 'AMD A6-9225 RADEON R4', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Darshan Nimavat', 8198, 'darshannimavat@nitco.in ', 8160035532, NULL, NULL, 'Dell', 'Inspiron 5570', 'CHPHKR2', 'Intel(R) Croe(TM)i7-8550U CPU@1.80GHz', '16GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'KIRAN MADIWALAR', 8208, 'kiranmadiwalar@ntico.in', 8971661266, NULL, NULL, 'HP', 'HP PAVILION 14', '5CD137M0SF', '11th Gen Intel(R) Core(TM) i5-1135G7 @ 2', '16GB', '1TB', 'Windows11', 'MS Office 2021'),
(NULL, 'SUDHIR KUMAR', 8231, 'SUDHIRKUMAR@NITCO.IN', 7777030214, NULL, NULL, 'HP', 'HP ELITE BOOK 840 G1', 'CNU407B61W', 'INTEL(R) CORE(TM) I5-4300U CPU @ 1.90GHZ', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Subhajit ', 8240, 'SUBHAJITGHOSH@NITCO.IN', 8657438960, NULL, NULL, 'HP', 'Elitebook 840 G1', 'CNU435C1K0', 'Intel i5 4300', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'DHAIVAT VEGAD', 8246, 'dhaivatvegad@nitco.in ', 8355850392, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG6435GZY', 'AMD A6-7310 APU with AMD Radeon R4 Graph', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Shravan kanekar Intellect', 12345, 'abap@nitco.in', 9082105791, NULL, NULL, 'HP', '240 G8', '5CG1367LBX', 'Intel(R) Core(TM) i3-1005G1 CPU @ 1.20GH', '8GB', '500GB', 'Windows11', 'MS Office 2010'),
(NULL, 'Rohit Hankare', 50000, 'rohithamkare@nitco.in', 0, NULL, NULL, 'HP', '245 G7', '5CG9211X1W', 'AMD A6-9225', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Kumar Nikhil', 100003, 'kumarnikhil@nitco.in', 9771493346, NULL, NULL, 'HP', 'HP PRO BOOK 650 G1', '5CG5285QQR', 'INTEL(R) CORE(TM) I5-4300M CPU @ 2.60GHZ', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Tushar Zade', 100009, 'tusharzade@nitco.in', 9421202008, NULL, NULL, 'HP', 'Pavilion x360 Convertible', '8CG6021VWF', 'Intel i3-6100U', '12GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Amol Ghonge', 100016, 'amolghonge@nitco.in', 7039019296, NULL, NULL, 'Dell', 'Latitude 3420', '6BKVFG3', 'Intel(R) Core(TM) i3-1115G4 @ 3.00GHz   ', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'NITESH GHADIGAONKAR', 100021, 'niteshghadigaonkar@nitco.in', 7021885791, NULL, NULL, 'Lenovo', '80SX', 'LR089NPD', 'Intel core i3-6006U', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Pravin Shelke', 100022, 'pravinshelke@nitco.in', 8356860584, NULL, NULL, 'Dell', 'Latitude 3490', '2DMWWS2', 'Intel Core i5-8250U', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Vidyanand Gavade', 100023, 'vidyanandgavade@nitco.in', 8657566408, NULL, NULL, 'Dell', 'Latitude 3490', 'GTCC8T2', 'Intel i3 7020U', '12GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Vinay Helwande', 100030, 'vinayhelwande@nitco.in', 9321722359, NULL, NULL, 'Lenovo', '80SX', 'LR0ATW5V', 'Intel i3 6006U', '2GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Geeta karira', 100035, 'geetakarira@nitco.in', 9967647665, NULL, NULL, 'HP', '240 G8', '5CG1367TWS', 'Intel i3 1005', '8GB', '500GB', 'Windows11', 'MS Office 2013'),
(NULL, 'Jhanvi Rathod', 100040, 'jhanvirathod@nitco.in', 8879339335, NULL, NULL, 'HP', 'EliteBook 820 G2 ', '5CG5520G9M', 'Intel(R) Core(TM) i5-5300U', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Devendra Tambe', 100043, 'devendratambe@nitco.in', 8879687321, NULL, NULL, 'Dell', 'Vostro 3446', '306F532', 'Intel core i5-4210U', '4GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Rakesh Parmar', 100044, 'rakeshparmar@nitco.in', 2147483647, NULL, NULL, 'Dell', 'Latitude 3420', '1CKVFG3', 'intel i3 11th', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Azhar Ali', 100048, 'azharali@nitco.in', 7506143166, NULL, NULL, 'HP', 'Elitebook 820 G2', '5CG5353P09', 'Intel i5 5300', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
('Laptop', 'Vighanesh Shirke', 100054, 'vighaneshshirke@nitco.in', 9987375472, 'North-1', 'Delhi', 'Dell', 'Latitude 3410', 'STGF09YS', 'i3 10th', '12GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'NAYAN PATEL', 100060, 'nayanpatel@nitco.in', 9712974461, NULL, NULL, 'HP', 'HP 240 G4 Notebook PC', '5CG6083ZL7', 'Intel(R) Core(TM) i3-5005U CPU @ 2.00GHz', '4GB', '500GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Shrinivas Gajula', 100063, 'shrinivasgajula@nitco.in', 8591401450, NULL, NULL, 'Dell', 'Latitude 3410', '99KF503', 'Intel(R) Core(TM) i3-10110U CPU @ 2.10GH', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Sunil George', 100073, 'SUNILGEORGE@NITCO.IN', 8655859472, NULL, NULL, 'HP', 'Elitebook 820 G2', '5CG543015F', 'Intel i5 5300', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Pooja Nakhuva', 100076, 'secretarial@nitco.in', 8291654249, NULL, NULL, 'HP', '245 G5', '5CG636022H', 'AMD A6 -7310', '8GB', '500GB', 'Windows7', 'MS Office 2010'),
(NULL, 'Eesha Sengar', 100080, 'eeshasengar@nitco.in', 9987998796, NULL, NULL, 'Dell', 'Latitude 3420', '6V5G4B3', 'Intel Core i3- 1115G4 11th Generation', '8GB', '1TB', 'Windows10', 'MS Office 2013'),
(NULL, 'Rakesh Yadav', 100085, 'rakeshyadav@nitco.in', 8657414662, NULL, NULL, 'Dell', 'Latitude 3480', 'JBB35L2', 'Intel(R) Core(TM) i3-6006U CPU @ 2.00GHz', '16GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ravi Singh', 100088, 'ravishankarsingh@nitco.in', 7045257737, NULL, NULL, 'HP', '45 G5', '5CG6432XCJ', 'AMD A6-7310 ', '2GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Anjani Sharma', 100096, 'anjani@nitco.in ', 9321339199, NULL, NULL, 'HP', 'ENVY 13 x360', 'CND23903C4', 'Intel core i7-1250U', '16GB', '500GB', 'Windows11', 'MS Office 2021'),
(NULL, 'JAYA KRUSHNA ROUT', 100097, 'jayakrushnarout@nitco.in', 7738596538, NULL, NULL, 'Toshiba', ' Satellite C40-B', '7E134226S', 'Intel ® Core™ i3-4005U CPU @ 1.70GHz', '4GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Abhishek Shukla', 100098, 'abhishek@nitco.in', 8657880230, NULL, NULL, 'HP', '245 G5', '5CG64233N2', 'AMD A6 7310', '12GB', '500GB', 'Windows7', 'MS Office 2007'),
(NULL, 'Nishtha Jain', 100100, 'nishthajain@nitco.in ', 0, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG9356DQN', 'AMD A6-9225 RADEON R4,', '4GB', '1TB', 'Windows10', 'MS Office 2007'),
(NULL, 'Manoj Palambe', 100101, 'manojpalambe@nitco.in', 8097762008, NULL, NULL, 'HP', 'Elitebook 840 G1', '5CG51013BD', 'Intel i5 4310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Kinnari Bhadauria', 100113, 'kinnaribhadauria@nitco.in', 8657991452, NULL, NULL, 'HP', 'HP EliteBook 820 G2', '5CG5353P3S', 'Intel(R) Core(TM) i5-5300U CPU@2.30GHz, ', '8GB', '500GB', 'Windows11', 'MS Office 2013'),
(NULL, 'Zainulabidin Baig', 100114, 'ZAINBAIG@NITCO.IN', 9321965106, NULL, NULL, 'HP', 'Latitude 3490', '6GYKBV2', 'Intel Core i5-8250U ', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Shreejit Nair', 100116, 'SHREEJITNAIR@NITCO.IN', 9321965103, NULL, NULL, 'HP', '245 G5', '5CG6432Z5R', 'AMD A6-7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Sanjay Ranka', 100120, 'sanjayranka@nitco.in', 8591002918, NULL, NULL, 'Dell', 'Latitude 3410', '2Y1R863', 'Intel(R) Core(TM) i3-10110U', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Santosh Potti', 100122, 'santoshp@nitco.in ', 8657123056, NULL, NULL, 'Dell', 'Latitude 3410', 'BHPL463', 'Intel Core i3- 10110U ', '8GB', '1TB', 'Windows11', 'MS Office 2013'),
(NULL, 'Satyajit Wagh', 100126, 'satyajitwagh@nitco.in', 7738591770, NULL, NULL, 'HP', '245 G5', '5CG6431QKR', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Suhas P V', 100129, 'suhaspv@nitco.in', 9653370613, NULL, NULL, 'HP', 'HP 245 G5 Notebook PC', '5CG6366QPT', 'Processor	AMD A6-7310 APU with AMD Radeo', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'Ravindra Navalkar', 100132, 'ravindranawalkar@nitco.in', 9324506448, NULL, NULL, 'HP', '245 G5', '5CG6370695', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Gurvinder Singh Kainth', 100136, 'GurvindersinghKainth@nitco.in', 9619919289, NULL, NULL, 'HP', 'x360', '8CG206232D', 'Intel(R) Core(TM) i5-1155G7 ', '16GB', '500GB', 'Windows11', 'MS Office 2021'),
(NULL, 'BALWINDER SINGH', 100138, 'balwindersingh@nitco.in', 9643321569, NULL, NULL, 'HP', 'HP 245 G7 Notebook PC', '5CG0346KHR', 'AMD PRO A6-7350B R5, 5 COMPUTE CORES 2C+', '4GB', '1TB', 'Windows11', 'MS Office 2010'),
(NULL, 'Gunju Yadav', 100140, 'gunjuyadav@nitco.in', 9324506453, NULL, NULL, 'HP', '245 G5', '5CG6431Q7B', 'AMD A6 7310', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Arjun Prasad', 100145, 'arjunprasad@nitco.in', 8657476421, NULL, NULL, 'HP', '245 G5', '5CG6370PYR', 'AMD A6 7310', '4GB', '500GB', 'Windows10', 'MS Office 2007'),
(NULL, 'Prinjal Dey', 100147, 'prinjaldey@nitco.in', 8850290541, NULL, NULL, 'HP', 'Probook 650 G1', 'CNU4229L9Z', 'Intel i5 4002', '8GB', '500GB', 'Windows10', 'MS Office 2013'),
(NULL, 'Saumya Ranjan Swain', 100150, 'saumyaranjanswain@nitco.in', 8657416976, NULL, NULL, 'HP', 'HP 245 G7', '5CG9226DCV', 'AMD A6 9225', '8GB', '1TB', 'Windows10', 'MS Office 2010'),
(NULL, 'Shalaka Gawde', 100151, 'shalakagawde@nitco.in', 9653117754, NULL, NULL, 'HP', 'Elitebook 820 G2', '5CG6034HMK', 'Intel(R) Core(TM) i5-5300U CPU @ 2.30GHz', '8GB', '500GB', 'Windows10', 'MS Office 2010'),
(NULL, 'test', 123456, 'xyz@nitco.in', 9945232134, NULL, NULL, 'Dell', 'Latitude 3410', 'xyz3412', 'intel i3 11th', '2GB', '280GB', 'Windows11', 'MS Office 2021'),
('Laptop', 'test', 12345678, 'xyz@nitco.in', 9987375472, 'East', 'Kolkatta', 'Dell', 'Latitude 3410', 'XYZ1234', 'i3 10th', '2GB', '280GB', 'Windows11', 'MS Office 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop_details`
--
ALTER TABLE `laptop_details`
  ADD PRIMARY KEY (`emp_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
