-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 05:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zone` enum('Dhaka','Chattogram','Rajshahi','Khulna','Rangpur','Barishal','Sylhet','Mymensingh','Cumilla','Kushtia',' Nursing','Intermediate','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_02` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` enum('Islam','Hinduism','Buddhism','Christianity','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` enum('Unknown','A+','B+','O+','AB+','A-','B-','O-','AB-') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilities` enum('None','Speech','Vision','Hearing','Physical','Mental','Autistic','other_chronic_disease') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_living_status` enum('Alive','Died','Separated','Divorced') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Alive',
  `father_disability` enum('None','Speech','Vision','Hearing','Physical','Mental','Autistic','other_chronic_disease') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_living_status` enum('Alive','Died','Separated','Divorced') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Alive',
  `mother_disability` enum('None','Speech','Vision','Hearing','Physical','Mental','Autistic','other_chronic_disease') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `other_disability` int(11) NOT NULL DEFAULT 0,
  `guardian_number` int(11) NOT NULL,
  `thana_police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` int(11) NOT NULL,
  `monthly_expense` int(11) NOT NULL,
  `family_asset` int(11) NOT NULL,
  `family_monthly_income` int(11) NOT NULL,
  `hsc_year` int(11) NOT NULL,
  `hsc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `older_age` int(11) NOT NULL,
  `class1to8` int(11) NOT NULL,
  `class9to12_hifj` int(11) NOT NULL,
  `undergrad` int(11) NOT NULL,
  `justification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_processed` tinyint(1) NOT NULL DEFAULT 0,
  `total_mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `zone`, `zone_code`, `email`, `institute`, `department`, `applicant_name`, `primary_mobile`, `mobile_02`, `gender`, `religion`, `blood_group`, `nid`, `disabilities`, `father_name`, `father_living_status`, `father_disability`, `mother_name`, `mother_living_status`, `mother_disability`, `other_disability`, `guardian_number`, `thana_police_station`, `district`, `school`, `college`, `monthly_income`, `monthly_expense`, `family_asset`, `family_monthly_income`, `hsc_year`, `hsc_result`, `ssc_result`, `older_age`, `class1to8`, `class9to12_hifj`, `undergrad`, `justification`, `image`, `is_processed`, `total_mark`, `created_at`, `updated_at`) VALUES
(2, 'Sylhet', 'Syl-01', 'shahinalomgulta@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Fisheries ', 'SHAHIN ALOM', '01705334152', '01789748993', 'Male', 'Islam', 'B+', '6908534628', 'None', 'Golam Rabbani ', 'Alive', 'None', 'Nurunnahar Begum', 'Alive', 'None', 0, 1796067092, 'Tarash', 'Sirajganj', 'Gulta Bazar Bi-Lateral High School,Sirajganj ', 'Shahid AHM Kamaruzzaman Govt Degree College,Rajshahi ', 4000, 4500, 177400, 8200, 2020, '5', '4.78', 1, 0, 1, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sylhet', 'Syl-02', 'ashikhossenh2r@gmai.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Doctor of veterinary medicine', 'MD. ASHIK HOSEN', '01924536603', '', 'Male', 'Islam', 'B+', '1961390430', 'None', 'Md. Saroar Hosen ', 'Alive', 'None', 'Simu Begun', 'Alive', 'None', 0, 1682671897, 'Siddhirganj', 'Narayanganj', 'Siddhirganj Reboti Mohon Pilot High School', 'Siddhirganj Reboti Mohon Pilot School and College', 3500, 3500, 100000, 10000, 2020, '4.58', '4.56', 2, 0, 2, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sylhet', 'Syl-03', 'kumarponchom@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'None', 'PONCHOM CHANDRA BHOWMIK', '01762777694', '', 'Male', 'Hinduism', 'O+', '2.00194E+16', 'None', 'Sachin Chandra Bhowmik', 'Alive', 'None', 'Sanoka Rani', 'Alive', 'None', 0, 1753377417, 'Haripur', 'Thakurgaon', 'Birgor High School', 'Dinajpur govt. college', 5250, 5250, 45000, 6000, 2020, '4.89', '4.83', 1, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sylhet', 'Syl-04', 'karimmohon347@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'English ', 'MD. ABDUL KARIM ', '01752526572', '01794374170', 'Male', 'Islam', 'B+', '6464837886', 'None', 'MD. ABDUL MALEK  ', 'Alive', 'None', 'MOST. KOHINUR BEGUM ', 'Alive', 'None', 0, 1742866543, 'Gobindaganj ', 'Gaibandha', 'Birat B.L High School, Gaibandha   ', 'Shahargachi Adarsha Degree College, Gaibandha   ', 3000, 3000, 128000, 4000, 2019, '4.42', '4.27', 1, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sylhet', 'Syl-05', 'ah2324421@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'BUSINESS ADMINISTRATION', 'MD.  AL AMIN', '01641806765', '01521378569', 'Male', 'Islam', 'A+', '9580506666', 'None', 'MD: ALTAB HOSSAIN  ', 'Alive', 'None', 'MALEKA BEGUM', 'Alive', 'None', 0, 1738481951, 'PIRGANJ', 'Rangpur', 'KADIRABAD BL HIGH SCHOOL, RANGPUR', 'GOVERNMENT SHAH SULTAN COLLAGE, BOGURA', 3700, 3700, 160000, 6000, 2019, '4', '4.5', 0, 1, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sylhet', 'Syl-06', 'forhadulalamparvez@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'FORHADUL ALAM PARVEZ ', '01786526558', '01825229751', 'Male', 'Islam', 'AB+', '7360708650', 'None', 'MONJUR AHMED ', 'Alive', 'None', 'ROSHONARA BEGUM ', 'Alive', 'None', 0, 1738926296, 'Jaintapur ', 'Sylhet', 'Dhakadakshin Multilateral High School & College, Sylhet ', 'Jaintia Degree College, Sylhet ', 9000, 9000, 136000, 1000, 2020, '4.67', '4.61', 1, 2, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Sylhet', 'Syl-07', 'fahadkhan467751@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Pablic Administration', 'FAHAD KHAN ', '01783467751', '01851415100', 'Male', 'Islam', 'B+', '9580804434', 'None', 'Nurujjaman Khan', 'Alive', 'None', 'Samsun Nahar', 'Alive', 'None', 0, 1720007908, 'Shibpur', 'Narsingdi', 'Shibpur Pilot High School, Narsingdi', 'Dhaka College, Dhaka', 4000, 4000, 40000, 21000, 2019, '3.67', '4.68', 0, 1, 0, 1, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Sylhet', 'Syl-08', 'azimkhan7830@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Agriculture', 'MD. AZIM KHAN', '01774187773', '01650026768', 'Male', 'Islam', 'B+', '6015514760', 'Vision', 'Md. Muslim Uddin', 'Alive', 'Vision', 'Mst. Rumi khatun', 'Alive', 'Vision', 1, 1760633362, 'Sirajganj Sadar', 'Sirajganj', 'Harina Bagbati High School,Sirajganj', 'Islamia Govt. College,Sirajganj', 6000, 6000, 200000, 6000, 2020, '5', '5', 0, 2, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Sylhet', 'Syl-09', 'amirfrindzaplc@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'SOCIOLOGY ', 'MD AMIR HOSSEN ', '01567855254', '01993530516', 'Male', 'Islam', 'AB+', '6461487560', 'None', 'MD ARSHAD ALI', 'Alive', 'None', 'ROKSANA KHATUN', 'Alive', 'None', 0, 1736007396, 'Debhata', 'Satkhira', 'BOHERA A.T SECONDARY SCHOOL,SATKHIRA ', 'SHIMANTA ADARSHA COLLEGE ', 4300, 7800, 26, 13000, 2020, '4.5', '4.5', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Sylhet', 'Syl-10', 'imdad24du@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Political Studies ', 'ABDULLAH AL IMDAD', '01743196129', '01568289519', 'Male', 'Islam', 'B-', '6913946700', 'None', 'Abdur Rafique', 'Alive', 'None', 'Shopna Begum', 'Alive', 'None', 2, 1304754508, 'Mogolbazar', 'Sylhet', 'Jalalpur High School', 'Jalalpur Degree College', 3000, 3000, 800000, 9000, 2020, '4.11', '4', 0, 0, 0, 1, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Sylhet', 'Syl-11', 'habibehsan02@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Industrial And Production Engineering', 'MD. EHSAN HABIB ', '01612887085', '', 'Male', 'Islam', 'B+', '7815183707', 'None', 'Md. Khorshed Alam ', 'Alive', 'None', 'Mst. Rina Begum', 'Alive', 'None', 0, 1904793884, 'Panchbibi ', 'Jaipurhat', 'Dharanjee Kutubia High School,Joypurhat ', 'Bangabandhu College,Rajshahi ', 6700, 6, 2790000, 20, 2020, '4.42', '4.39', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Sylhet', 'Syl-12', 'muaz0252@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Mathematics ', 'SIDDIQUR RAHMAN SUNNY', '01723463263', '01830569308', 'Male', 'Islam', 'O+', '4212992160', 'None', 'Md.Sherajul Islam', 'Alive', 'None', 'Mst.Shanty Begum', 'Alive', 'None', 0, 1918306172, 'Phulpur', 'Mymensingh', 'Mymensingh Zilla School,Mymensingh ', 'Notre Dame College,Mymensingh ', 5000, 5000, 1100000, 22000, 2020, '4.67', '4.56', 0, 0, 0, 2, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Sylhet', 'Syl-13', 'riphkx6@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'PAD', 'MD.RIPON ISLAM', '01997380523', '', 'Male', 'Islam', 'O-', '3761879778', 'None', 'MD.Matiar Rahman', 'Alive', 'None', 'Mst.Minuara Begum ', 'Alive', 'None', 0, 1937308037, 'Panchbibi', 'Jaipurhat', 'Shahid Mukti Joddha Mantu Biddalya Sariakandi,Bogura ', 'Mohipur Hazi Mohsin Govt. College ', 4, 4950, 0, 24000, 2020, '4', '4.4', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Sylhet', 'Syl-14', 'nishataraami@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Social work', 'NISHAT ARA AMI', '01726768546', '01726768546', 'Female', 'Islam', 'A+', '6004910466', 'None', 'Ansar Ali', 'Alive', 'None', 'Momotaj Begum', 'Alive', 'None', 0, 1715358760, 'Balagonj', 'Sylhet', 'Shahjalal jamia islamia school & college, sylhet', 'Sylhet govt. womens college ', 6000, 6500, 170000, 54, 2020, '4.42', '4.56', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Sylhet', 'Syl-15', 'nazmul804050@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Department of political studies', 'SUJON SUTRADHAR', '01708690957', '', 'Male', 'Hinduism', 'O+', 'Not Available', 'None', 'Late Sunil Sutradhar', '', 'None', 'Kuki Rani Sutradhar', 'Alive', 'None', 0, 1731647124, 'Habiganj Sadar', 'Habiganj', 'Shahjalal High School, Habiganj', 'Brindaban Government College,  Habiganj', 3500, 3500, 150000, 9000, 2019, '3.75', '4.5', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Sylhet', 'Syl-16', 'kazisafayet9418@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Geography and environment ', 'KAZI MD.SAFAYET HOSSAIN', '01741439418', '', 'Male', 'Islam', 'B+', '2.00119E+16', 'None', 'Kazi md.kamal hossain', 'Alive', 'None', 'Sanu begum', 'Alive', 'None', 0, 1882248512, 'Laksam', 'Cumilla', 'Laksam pilot high school, laksam', 'Nawab fayzunnesa govt.College, laksam', 2000, 5000, 150000, 6000, 2020, '4.33', '4.27', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Sylhet', 'Syl-17', 'redoymia974@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'REDOY MIA', '01953235214', '', 'Male', 'Islam', 'B+', 'Not Available', 'None', 'Md.Abdul Kuddus', 'Alive', 'None', 'Parvin Akter', 'Alive', 'None', 0, 1960589014, 'Purbadhala police station  ', 'Netrakona', 'Bhugi Jawani High School, Netrakona', 'Govt. Netrakona College, Netrakona', 5000, 5000, 25000, 7000, 2020, '3.83', '4', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Sylhet', 'Syl-18', 'emranmia77902@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'EMRAN MIA', '01903044361', '01301076415', 'Male', 'Islam', 'O+', 'Not Available', 'None', 'Abdul Sattar', 'Alive', 'None', 'Romchan Begum ', 'Alive', 'None', 0, 1779025235, 'Nasirnagar police station ', 'Brahmanbaria', 'Gokarna Syed Waliullah High School, Brahmanbaria ', 'Nasirnagar Government College, Brahmanbaria ', 5000, 5000, 240000, 100000, 2019, '3.83', '3.86', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Sylhet', 'Syl-19', 'mdarmanhossenemon@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Depertment of Political studies ', 'MD ARMAN HOSSEN EMON', '01856894816', '01316743836', 'Male', 'Islam', 'O+', 'Not Available', 'Physical', 'Abdul Halim', 'Alive', 'Physical', 'Nur Begum', 'Alive', 'Physical', 4, 1736947067, 'Sadar', 'Lakshmipur', 'Tumchar Islamia Kamil Madrasah,Lakshmipur ', 'Tumchar Islamia Kamil Madrasah,Lakshmipur ', 3500, 7000, 150000, 10500, 2018, '5', '4.85', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Sylhet', 'Syl-20', 'Hedhayedsabbir@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Sociology ', 'HEDHAYED ALI ', '01734913464', '01609019668', 'Male', 'Islam', 'O+', 'Not Available', 'None', 'Late Jamal Uddin ', '', 'None', 'Late Mustafa Begum ', '', 'None', 0, 1821017005, 'Chakria ', 'Cox\'s Bazar', 'Shilkhali High School, Cox?s Bazar ', 'Gachbaria government College, Chittagong ', 5000, 5000, 0, 35000, 2019, '4.08', '3.86', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '', 'zone_code', 'email', 'institute', 'department', 'applicant_name', 'primary_mobile', 'mobile_02', '', '', '', 'nid', '', 'father_name', '', '', 'mother_name', '', '', 0, 0, 'thana_police_station', 'district', 'school', 'college', 0, 0, 0, 0, 0, 'hsc_result', 'ssc_result', 0, 0, 0, 0, 'justification', 'image ', 0, 'total_mark', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Sylhet', 'Syl-01', 'shahinalomgulta@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Fisheries ', 'ABC', '01705334152', '01789748993', 'Male', 'Islam', 'B+', '6908534628', 'None', 'Golam Rabbani ', 'Alive', 'None', 'Nurunnahar Begum', 'Alive', 'None', 0, 1796067092, 'Tarash', 'Sirajganj', 'Gulta Bazar Bi-Lateral High School,Sirajganj ', 'Shahid AHM Kamaruzzaman Govt Degree College,Rajshahi ', 4000, 4500, 177400, 8200, 2020, '5', '4.78', 1, 0, 1, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Sylhet', 'Syl-02', 'ashikhossenh2r@gmai.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Doctor of veterinary medicine', 'EFG', '01924536603', '', 'Male', 'Islam', 'B+', '1961390430', 'None', 'Md. Saroar Hosen ', 'Alive', 'None', 'Simu Begun', 'Alive', 'None', 0, 1682671897, 'Siddhirganj', 'Narayanganj', 'Siddhirganj Reboti Mohon Pilot High School', 'Siddhirganj Reboti Mohon Pilot School and College', 3500, 3500, 100000, 10000, 2020, '4.58', '4.56', 2, 0, 2, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Sylhet', 'Syl-03', 'kumarponchom@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'None', 'PONCHOM CHANDRA BHOWMIK', '01762777694', '', 'Male', 'Hinduism', 'O+', '2.00194E+16', 'None', 'Sachin Chandra Bhowmik', 'Alive', 'None', 'Sanoka Rani', 'Alive', 'None', 0, 1753377417, 'Haripur', 'Thakurgaon', 'Birgor High School', 'Dinajpur govt. college', 5250, 5250, 45000, 6000, 2020, '4.89', '4.83', 1, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Sylhet', 'Syl-04', 'karimmohon347@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'English ', 'MD. ABDUL KARIM ', '01752526572', '01794374170', 'Male', 'Islam', 'B+', '6464837886', 'None', 'MD. ABDUL MALEK  ', 'Alive', 'None', 'MOST. KOHINUR BEGUM ', 'Alive', 'None', 0, 1742866543, 'Gobindaganj ', 'Gaibandha', 'Birat B.L High School, Gaibandha   ', 'Shahargachi Adarsha Degree College, Gaibandha   ', 3000, 3000, 128000, 4000, 2019, '4.42', '4.27', 1, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Sylhet', 'Syl-05', 'ah2324421@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'BUSINESS ADMINISTRATION', 'MD.  AL AMIN', '01641806765', '01521378569', 'Male', 'Islam', 'A+', '9580506666', 'None', 'MD: ALTAB HOSSAIN  ', 'Alive', 'None', 'MALEKA BEGUM', 'Alive', 'None', 0, 1738481951, 'PIRGANJ', 'Rangpur', 'KADIRABAD BL HIGH SCHOOL, RANGPUR', 'GOVERNMENT SHAH SULTAN COLLAGE, BOGURA', 3700, 3700, 160000, 6000, 2019, '4', '4.5', 0, 1, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Sylhet', 'Syl-06', 'forhadulalamparvez@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'FORHADUL ALAM PARVEZ ', '01786526558', '01825229751', 'Male', 'Islam', 'AB+', '7360708650', 'None', 'MONJUR AHMED ', 'Alive', 'None', 'ROSHONARA BEGUM ', 'Alive', 'None', 0, 1738926296, 'Jaintapur ', 'Sylhet', 'Dhakadakshin Multilateral High School & College, Sylhet ', 'Jaintia Degree College, Sylhet ', 9000, 9000, 136000, 1000, 2020, '4.67', '4.61', 1, 2, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Sylhet', 'Syl-07', 'fahadkhan467751@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Pablic Administration', 'FAHAD KHAN ', '01783467751', '01851415100', 'Male', 'Islam', 'B+', '9580804434', 'None', 'Nurujjaman Khan', 'Alive', 'None', 'Samsun Nahar', 'Alive', 'None', 0, 1720007908, 'Shibpur', 'Narsingdi', 'Shibpur Pilot High School, Narsingdi', 'Dhaka College, Dhaka', 4000, 4000, 40000, 21000, 2019, '3.67', '4.68', 0, 1, 0, 1, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Sylhet', 'Syl-08', 'azimkhan7830@gmail.com', 'Sylhet Agricultural University (SyAU), Sylhet', 'Agriculture', 'MD. AZIM KHAN', '01774187773', '01650026768', 'Male', 'Islam', 'B+', '6015514760', 'Vision', 'Md. Muslim Uddin', 'Alive', 'Vision', 'Mst. Rumi khatun', 'Alive', 'Vision', 1, 1760633362, 'Sirajganj Sadar', 'Sirajganj', 'Harina Bagbati High School,Sirajganj', 'Islamia Govt. College,Sirajganj', 6000, 6000, 200000, 6000, 2020, '5', '5', 0, 2, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Sylhet', 'Syl-09', 'amirfrindzaplc@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'SOCIOLOGY ', 'MD AMIR HOSSEN ', '01567855254', '01993530516', 'Male', 'Islam', 'AB+', '6461487560', 'None', 'MD ARSHAD ALI', 'Alive', 'None', 'ROKSANA KHATUN', 'Alive', 'None', 0, 1736007396, 'Debhata', 'Satkhira', 'BOHERA A.T SECONDARY SCHOOL,SATKHIRA ', 'SHIMANTA ADARSHA COLLEGE ', 4300, 7800, 26, 13000, 2020, '4.5', '4.5', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Sylhet', 'Syl-10', 'imdad24du@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Political Studies ', 'ABDULLAH AL IMDAD', '01743196129', '01568289519', 'Male', 'Islam', 'B-', '6913946700', 'None', 'Abdur Rafique', 'Alive', 'None', 'Shopna Begum', 'Alive', 'None', 2, 1304754508, 'Mogolbazar', 'Sylhet', 'Jalalpur High School', 'Jalalpur Degree College', 3000, 3000, 800000, 9000, 2020, '4.11', '4', 0, 0, 0, 1, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Sylhet', 'Syl-11', 'habibehsan02@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Industrial And Production Engineering', 'MD. EHSAN HABIB ', '01612887085', '', 'Male', 'Islam', 'B+', '7815183707', 'None', 'Md. Khorshed Alam ', 'Alive', 'None', 'Mst. Rina Begum', 'Alive', 'None', 0, 1904793884, 'Panchbibi ', 'Jaipurhat', 'Dharanjee Kutubia High School,Joypurhat ', 'Bangabandhu College,Rajshahi ', 6700, 6, 2790000, 20, 2020, '4.42', '4.39', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Sylhet', 'Syl-12', 'muaz0252@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Mathematics ', 'SIDDIQUR RAHMAN SUNNY', '01723463263', '01830569308', 'Male', 'Islam', 'O+', '4212992160', 'None', 'Md.Sherajul Islam', 'Alive', 'None', 'Mst.Shanty Begum', 'Alive', 'None', 0, 1918306172, 'Phulpur', 'Mymensingh', 'Mymensingh Zilla School,Mymensingh ', 'Notre Dame College,Mymensingh ', 5000, 5000, 1100000, 22000, 2020, '4.67', '4.56', 0, 0, 0, 2, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Sylhet', 'Syl-13', 'riphkx6@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'PAD', 'MD.RIPON ISLAM', '01997380523', '', 'Male', 'Islam', 'O-', '3761879778', 'None', 'MD.Matiar Rahman', 'Alive', 'None', 'Mst.Minuara Begum ', 'Alive', 'None', 0, 1937308037, 'Panchbibi', 'Jaipurhat', 'Shahid Mukti Joddha Mantu Biddalya Sariakandi,Bogura ', 'Mohipur Hazi Mohsin Govt. College ', 4, 4950, 0, 24000, 2020, '4', '4.4', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Sylhet', 'Syl-14', 'nishataraami@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Social work', 'NISHAT ARA AMI', '01726768546', '01726768546', 'Female', 'Islam', 'A+', '6004910466', 'None', 'Ansar Ali', 'Alive', 'None', 'Momotaj Begum', 'Alive', 'None', 0, 1715358760, 'Balagonj', 'Sylhet', 'Shahjalal jamia islamia school & college, sylhet', 'Sylhet govt. womens college ', 6000, 6500, 170000, 54, 2020, '4.42', '4.56', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Sylhet', 'Syl-15', 'nazmul804050@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Department of political studies', 'SUJON SUTRADHAR', '01708690957', '', 'Male', 'Hinduism', 'O+', 'Not Available', 'None', 'Late Sunil Sutradhar', '', 'None', 'Kuki Rani Sutradhar', 'Alive', 'None', 0, 1731647124, 'Habiganj Sadar', 'Habiganj', 'Shahjalal High School, Habiganj', 'Brindaban Government College,  Habiganj', 3500, 3500, 150000, 9000, 2019, '3.75', '4.5', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Sylhet', 'Syl-16', 'kazisafayet9418@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Geography and environment ', 'KAZI MD.SAFAYET HOSSAIN', '01741439418', '', 'Male', 'Islam', 'B+', '2.00119E+16', 'None', 'Kazi md.kamal hossain', 'Alive', 'None', 'Sanu begum', 'Alive', 'None', 0, 1882248512, 'Laksam', 'Cumilla', 'Laksam pilot high school, laksam', 'Nawab fayzunnesa govt.College, laksam', 2000, 5000, 150000, 6000, 2020, '4.33', '4.27', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Sylhet', 'Syl-17', 'redoymia974@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'REDOY MIA', '01953235214', '', 'Male', 'Islam', 'B+', 'Not Available', 'None', 'Md.Abdul Kuddus', 'Alive', 'None', 'Parvin Akter', 'Alive', 'None', 0, 1960589014, 'Purbadhala police station  ', 'Netrakona', 'Bhugi Jawani High School, Netrakona', 'Govt. Netrakona College, Netrakona', 5000, 5000, 25000, 7000, 2020, '3.83', '4', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Sylhet', 'Syl-18', 'emranmia77902@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Anthropology ', 'EMRAN MIA', '01903044361', '01301076415', 'Male', 'Islam', 'O+', 'Not Available', 'None', 'Abdul Sattar', 'Alive', 'None', 'Romchan Begum ', 'Alive', 'None', 0, 1779025235, 'Nasirnagar police station ', 'Brahmanbaria', 'Gokarna Syed Waliullah High School, Brahmanbaria ', 'Nasirnagar Government College, Brahmanbaria ', 5000, 5000, 240000, 100000, 2019, '3.83', '3.86', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Sylhet', 'Syl-19', 'mdarmanhossenemon@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Depertment of Political studies ', 'MD ARMAN HOSSEN EMON', '01856894816', '01316743836', 'Male', 'Islam', 'O+', 'Not Available', 'Physical', 'Abdul Halim', 'Alive', 'Physical', 'Nur Begum', 'Alive', 'Physical', 4, 1736947067, 'Sadar', 'Lakshmipur', 'Tumchar Islamia Kamil Madrasah,Lakshmipur ', 'Tumchar Islamia Kamil Madrasah,Lakshmipur ', 3500, 7000, 150000, 10500, 2018, '5', '4.85', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Sylhet', 'Syl-20', 'Hedhayedsabbir@gmail.com', 'Shahjalal University of Science & Technology (SUST), Sylhet', 'Sociology ', 'HEDHAYED ALI ', '01734913464', '01609019668', 'Male', 'Islam', 'O+', 'Not Available', 'None', 'Late Jamal Uddin ', '', 'None', 'Late Mustafa Begum ', '', 'None', 0, 1821017005, 'Chakria ', 'Cox\'s Bazar', 'Shilkhali High School, Cox?s Bazar ', 'Gachbaria government College, Chittagong ', 5000, 5000, 0, 35000, 2019, '4.08', '3.86', 0, 0, 0, 0, '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_29_054716_create_applicants_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anowar', 'anowar@gmail.com', NULL, '$2y$10$QGF2.RVujeLsGw43.YUH.uApxGV/VKCZl6FaeM9l8XbJUMaGEqhJ.', NULL, '2022-05-29 03:48:24', '2022-05-29 03:48:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
