-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 09:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raha_darsafzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` char(10) NOT NULL,
  `Username` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Username`) VALUES
('221', 'alirezasad');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` char(10) NOT NULL,
  `Calender_name` varchar(20) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Event` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Username` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `file_id` char(10) NOT NULL,
  `student_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educational_assistant`
--

CREATE TABLE `educational_assistant` (
  `assistant_id` char(10) NOT NULL,
  `Username` char(10) NOT NULL,
  `admin_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_assistant`
--

INSERT INTO `educational_assistant` (`assistant_id`, `Username`, `admin_id`) VALUES
('331', 'hoseini', '221');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` char(10) NOT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `Username` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `salary`, `Username`) VALUES
('111', '9000000', 'hoseini'),
('112', '30000000', 'hasanbashi'),
('113', '200000', 'amirhosein'),
('114', '30000000', 'alirezasad');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exams_id` char(10) NOT NULL,
  `score` varchar(100) DEFAULT NULL,
  `Link` varchar(40) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Title` varchar(20) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  `Start_time` varchar(100) DEFAULT NULL,
  `Close_time` varchar(100) DEFAULT NULL,
  `N_alloweded_tries` varchar(100) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `TA_id` char(10) NOT NULL,
  `student_id` char(10) NOT NULL,
  `Lesson_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exams_id`, `score`, `Link`, `Description`, `File`, `Title`, `Time`, `Start_time`, `Close_time`, `N_alloweded_tries`, `professor_id`, `TA_id`, `student_id`, `Lesson_code`) VALUES
('991', '5', 'https://ec.hut.ac.ir/mod/quiz/view.php?i', 'این آزمون ار فصل اول می باشد', NULL, 'آزمون فصل 1', '5', '10:00', '10:04', '1', '441', '661', '552', '771');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `exercise_id` char(10) NOT NULL,
  `Title` varchar(20) DEFAULT NULL,
  `Delivery_date` varchar(100) DEFAULT NULL,
  `Link` varchar(40) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Upload_date` varchar(100) DEFAULT NULL,
  `Upload_time` varchar(100) DEFAULT NULL,
  `score` varchar(100) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `student_id` char(10) NOT NULL,
  `Lesson_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`exercise_id`, `Title`, `Delivery_date`, `Link`, `Description`, `File`, `Upload_date`, `Upload_time`, `score`, `professor_id`, `student_id`, `Lesson_code`) VALUES
('881', 'گام 0 پروژه عملی', '1400/10/05', 'https://ec.hut.ac.ir/mod/assign/view.php', 'یک فایل zip  با نام تیم به صورت انگلیسی شامل موارد ذیل ارسال شود :\r\n\r\nدر یک فایل متنی txt با نام video.txt لینک ویدیو آپلود شده در آپارات ارسال شود.\r\n\r\nنحوه نام گذاری ویدیو در آپارات : نام تیم - گام صفر - معرفی تیم\r\n\r\nفایل pdf از رزومه تیمی \r\n\r\nفایل خام رزومه تیمی نیز ارسال گردد.\r\n\r\nعدم رعایت اصول گفته شده منجر به کسر بخشی از نمره تحویل مطلوب می گردد.', NULL, 'جمعه، 9 مهر 1400', '11:20 صبح', '	87.00', '441', '552', '771');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `Lesson_code` char(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Dept` varchar(20) DEFAULT NULL,
  `Term` varchar(100) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `assistant_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`Lesson_code`, `Name`, `Dept`, `Term`, `professor_id`, `assistant_id`) VALUES
('771', 'system analysis', 'computer engineering', '4001', '441', '331');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` char(10) NOT NULL,
  `Link` varchar(40) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Sender` varbinary(25) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  `Username` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Notifications_id` char(10) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `TA_id` char(10) NOT NULL,
  `Lesson_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Notifications_id`, `Title`, `Date`, `Time`, `Link`, `Description`, `File`, `professor_id`, `TA_id`, `Lesson_code`) VALUES
('1111', '\r\nکلاس آنلاین رفع اشکال - دوشنبه ۶ دی‌ماه', 'پنج‌شنبه، 2 دی 1400', ' 11:37 صبح', NULL, '\r\nبا سلام\r\n\r\n\r\n\r\nکلاس آنلاین رفع اشکال روز دوشنبه ۶ دی‌ماه ساعت ۹ صبح در سامانه Adobe Connect برگزار می‌شود.\r\n\r\n\r\n\r\nبشیری\r\n\r\n', NULL, '441', '661', '771');

-- --------------------------------------------------------

--
-- Table structure for table `offline_class`
--

CREATE TABLE `offline_class` (
  `file_id` char(10) NOT NULL,
  `Link` varchar(40) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Upload_date` char(100) DEFAULT NULL,
  `Upload_time` varchar(100) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `Lesson_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offline_class`
--

INSERT INTO `offline_class` (`file_id`, `Link`, `Description`, `Title`, `File`, `Upload_date`, `Upload_time`, `professor_id`, `Lesson_code`) VALUES
('1121', NULL, 'منبع درس - کتاب', 'منبع درس - کتاب', NULL, 'پنج‌شنبه، 2 دی 1400', ' 11:37 صبح', '441', '771');

-- --------------------------------------------------------

--
-- Table structure for table `online_class`
--

CREATE TABLE `online_class` (
  `class_id` char(10) NOT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Link` varchar(400) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `professor_id` char(10) NOT NULL,
  `TA_id` char(10) NOT NULL,
  `Lesson_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_class`
--

INSERT INTO `online_class` (`class_id`, `Description`, `Link`, `File`, `Time`, `Date`, `Title`, `professor_id`, `TA_id`, `Lesson_code`) VALUES
('1131', 'تحلیل و طراحی سیستمهای نرم افزاری_0', 'https://ec.hut.ac.ir/mod/adobeconnect/joinrecording.php?id=20989&recording=0&groupid=0&sesskey=Ajv7HrZn2E', NULL, '00:31:39', '	دوشنبه، 22 شهریور 1400 ', 'تحلیل و طراحی سیستمهای نرم افزاری_0', '441', '661', '771');

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `class_id` char(10) NOT NULL,
  `student_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_files`
--

CREATE TABLE `personal_files` (
  `Personal_files_id` char(10) NOT NULL,
  `Title` varchar(20) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `File` varbinary(25) DEFAULT NULL,
  `Username` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `professor_id` char(10) NOT NULL,
  `Dept` varchar(20) DEFAULT NULL,
  `Username` char(10) NOT NULL,
  `assistant_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`professor_id`, `Dept`, `Username`, `assistant_id`) VALUES
('441', 'computer engineering', 'hasanbashi', '331');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` char(10) NOT NULL,
  `Dept` varchar(20) DEFAULT NULL,
  `Username` char(10) NOT NULL,
  `assistant_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `Dept`, `Username`, `assistant_id`) VALUES
('551', 'computer engineering', 'amirhosein', '331'),
('552', 'computer engineering', 'rouzbeh', '331'),
('553', 'computer engineering', 'asgari', '331'),
('554', 'computer engineering', 'fatemeagha', '331'),
('555', 'computer engineering', 'haniezomor', '331'),
('556', 'computer engineering', 'iranpour', '331'),
('557', 'computer engineering', 'mohadesepa', '331'),
('558', 'computer engineering', 'parisaabkh', '331'),
('559', 'computer engineering', 'taheri', '331');

-- --------------------------------------------------------

--
-- Table structure for table `student_has_lesson`
--

CREATE TABLE `student_has_lesson` (
  `Lesson_code` char(10) NOT NULL,
  `student_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_has_lesson`
--

INSERT INTO `student_has_lesson` (`Lesson_code`, `student_id`) VALUES
('1141', '551'),
('1142', '552'),
('1143', '553'),
('1144', '554'),
('1145', '555'),
('1146', '556'),
('1147', '557'),
('1148', '558'),
('1149', '559');

-- --------------------------------------------------------

--
-- Table structure for table `student_see_notifications`
--

CREATE TABLE `student_see_notifications` (
  `Notifications_id` char(10) CHARACTER SET utf8mb4 NOT NULL,
  `student_id` char(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `student_see_notifications`
--

INSERT INTO `student_see_notifications` (`Notifications_id`, `student_id`) VALUES
('1111', '552');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `TA_id` char(10) NOT NULL,
  `employee_id` char(10) NOT NULL,
  `student_id` char(10) NOT NULL,
  `professor_id` char(10) NOT NULL,
  `assistant_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`TA_id`, `employee_id`, `student_id`, `professor_id`, `assistant_id`) VALUES
('661', '113', '551', '441', '331');

-- --------------------------------------------------------

--
-- Table structure for table `ta_has_lesson`
--

CREATE TABLE `ta_has_lesson` (
  `Lesson_code` char(100) NOT NULL,
  `TA_id` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta_has_lesson`
--

INSERT INTO `ta_has_lesson` (`Lesson_code`, `TA_id`) VALUES
('771', '661');

-- --------------------------------------------------------

--
-- Table structure for table `ta_manages_exercises`
--

CREATE TABLE `ta_manages_exercises` (
  `exercise_id` char(100) NOT NULL,
  `TA_id` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta_manages_exercises`
--

INSERT INTO `ta_manages_exercises` (`exercise_id`, `TA_id`) VALUES
('881', '661');

-- --------------------------------------------------------

--
-- Table structure for table `ta_manages_files`
--

CREATE TABLE `ta_manages_files` (
  `file_id` char(100) NOT NULL,
  `TA_id` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` char(10) NOT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Sex` varchar(100) DEFAULT NULL,
  `Birth_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Fname`, `Lname`, `pass`, `Email`, `Sex`, `Birth_date`) VALUES
('alirezasad', 'علیرضا', 'صادقی', 'alirezasadeqi1234', 'alirezasadeqi@gmail.com', 'male', '1355/01/01'),
('amirhosein', 'امیرحسین', 'باباییان', 'amirhoseinbabaiean1234', 'amirhoseinbabaiean@gmail.com', 'male', '1355/01/01'),
('asgari', 'امیرحسین', 'عسگری', 'amirhoseinasgari1234', 'amirhoseinasgari@gmail.com', 'male', '1378/02/02'),
('fatemeagha', 'فاطمه', 'اقامیرزائی', 'fatemeagha1234', 'fatemeagha@gmail.com', 'female', '1355/01/01'),
('haniezomor', 'هانیه', 'زمردی', 'haniezomorodi1234', 'haniezomorodi@gmail.com', 'female', '1378/02/02'),
('hasanbashi', 'حسن', 'بشیری', 'hasan1234', 'hasanbashiri@gmail.com', 'male', '1355/01/01'),
('hoseini', 'حسینی', 'خانم', 'hoseini1234', 'hoseini@gmail.com', 'female', '1355/01/01'),
('iranpour', 'سیدپویا', 'ایرانپور', 'zahraalvandi1234', 'iranpour@gmail.com', 'male', '1378/02/02'),
('mohadesepa', 'محدثه', 'پرویزی', 'mohadeseparvizi1234', 'mohadeseparvizi@gmail.com', 'female', '1378/02/02'),
('parisaabkh', 'پریسا', 'اب خضر', 'parisaabkhezr1234', 'parisaabkhezr@gmail.com', 'female', '1355/01/01'),
('rouzbeh', 'روزبه', 'مرادیان', 'rouzbeh1234', 'rouzbeh@gmail.com', 'male', '1378/02/02'),
('taheri', 'امیرحسین', 'طاهری', 'amirhoseintaheri1234', 'amirhoseintaheri@gmail.com', 'male', '1378/02/02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`file_id`,`student_id`);

--
-- Indexes for table `educational_assistant`
--
ALTER TABLE `educational_assistant`
  ADD PRIMARY KEY (`assistant_id`),
  ADD KEY `Username` (`Username`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exams_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `TA_id` (`TA_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `Lesson_code` (`Lesson_code`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`exercise_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `Lesson_code` (`Lesson_code`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`Lesson_code`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `assistant_id` (`assistant_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Notifications_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `TA_id` (`TA_id`),
  ADD KEY `Lesson_code` (`Lesson_code`);

--
-- Indexes for table `offline_class`
--
ALTER TABLE `offline_class`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `Lesson_code` (`Lesson_code`);

--
-- Indexes for table `online_class`
--
ALTER TABLE `online_class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `TA_id` (`TA_id`),
  ADD KEY `Lesson_code` (`Lesson_code`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`class_id`,`student_id`);

--
-- Indexes for table `personal_files`
--
ALTER TABLE `personal_files`
  ADD PRIMARY KEY (`Personal_files_id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`professor_id`),
  ADD KEY `Username` (`Username`),
  ADD KEY `assistant_id` (`assistant_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `Username` (`Username`),
  ADD KEY `assistant_id` (`assistant_id`);

--
-- Indexes for table `student_has_lesson`
--
ALTER TABLE `student_has_lesson`
  ADD PRIMARY KEY (`Lesson_code`,`student_id`);

--
-- Indexes for table `student_see_notifications`
--
ALTER TABLE `student_see_notifications`
  ADD PRIMARY KEY (`Notifications_id`,`student_id`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`TA_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `assistant_id` (`assistant_id`);

--
-- Indexes for table `ta_has_lesson`
--
ALTER TABLE `ta_has_lesson`
  ADD PRIMARY KEY (`Lesson_code`,`TA_id`),
  ADD KEY `TA_id` (`TA_id`);

--
-- Indexes for table `ta_manages_exercises`
--
ALTER TABLE `ta_manages_exercises`
  ADD PRIMARY KEY (`exercise_id`,`TA_id`);

--
-- Indexes for table `ta_manages_files`
--
ALTER TABLE `ta_manages_files`
  ADD PRIMARY KEY (`file_id`,`TA_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `Calendar_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `educational_assistant`
--
ALTER TABLE `educational_assistant`
  ADD CONSTRAINT `Educational_Assistant_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`),
  ADD CONSTRAINT `Educational_Assistant_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `Exams_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Exams_ibfk_2` FOREIGN KEY (`TA_id`) REFERENCES `ta` (`TA_id`),
  ADD CONSTRAINT `Exams_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `Exams_ibfk_4` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`);

--
-- Constraints for table `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `Exercise_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Exercise_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `Exercise_ibfk_3` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `Lessons_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Lessons_ibfk_2` FOREIGN KEY (`assistant_id`) REFERENCES `educational_assistant` (`assistant_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `Messages_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `Notifications_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Notifications_ibfk_2` FOREIGN KEY (`TA_id`) REFERENCES `ta` (`TA_id`),
  ADD CONSTRAINT `Notifications_ibfk_3` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`);

--
-- Constraints for table `offline_class`
--
ALTER TABLE `offline_class`
  ADD CONSTRAINT `Offline_class_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Offline_class_ibfk_2` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`);

--
-- Constraints for table `online_class`
--
ALTER TABLE `online_class`
  ADD CONSTRAINT `Online_class_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `Online_class_ibfk_2` FOREIGN KEY (`TA_id`) REFERENCES `ta` (`TA_id`),
  ADD CONSTRAINT `Online_class_ibfk_3` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`);

--
-- Constraints for table `personal_files`
--
ALTER TABLE `personal_files`
  ADD CONSTRAINT `Personal_Files_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `Professor_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`),
  ADD CONSTRAINT `Professor_ibfk_2` FOREIGN KEY (`assistant_id`) REFERENCES `educational_assistant` (`assistant_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`assistant_id`) REFERENCES `educational_assistant` (`assistant_id`);

--
-- Constraints for table `student_has_lesson`
--
ALTER TABLE `student_has_lesson`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ta`
--
ALTER TABLE `ta`
  ADD CONSTRAINT `TA_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `TA_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `TA_ibfk_3` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`professor_id`),
  ADD CONSTRAINT `TA_ibfk_4` FOREIGN KEY (`assistant_id`) REFERENCES `educational_assistant` (`assistant_id`);

--
-- Constraints for table `ta_has_lesson`
--
ALTER TABLE `ta_has_lesson`
  ADD CONSTRAINT `Lesson_code` FOREIGN KEY (`Lesson_code`) REFERENCES `lessons` (`Lesson_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TA_id` FOREIGN KEY (`TA_id`) REFERENCES `ta` (`TA_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ta_manages_exercises`
--
ALTER TABLE `ta_manages_exercises`
  ADD CONSTRAINT `exercise_id` FOREIGN KEY (`exercise_id`) REFERENCES `exercise` (`exercise_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
