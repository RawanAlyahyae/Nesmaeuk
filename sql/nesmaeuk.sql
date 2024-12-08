-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 11:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nesmaeuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Fullname`, `Email`, `Subject`, `Content`) VALUES
(1, 'احمد', 'ahmed@gmail.com', 'مشكلة ترجمة', 'لدي مشكلة في الموقع حيث لا يمكنني تسجيل الدخول، وتظهر لي رسالة خطأ كلما حاولت ذلك. كما أن بعض الصفحات لا تُحمّل بشكل صحيح، مما يعيق استخدامي للموقع. أحتاج إلى دعم فني عاجل لحل هذه المشكلة، حيث أنني أحتاج للوصول إلى المعلومات المهمة. أقدر مساعدتكم في أسرع وقت ممكن. شكرًا لكم!'),
(2, 'محمد ', 'mohmmed@gmail.com', 'مشكلة فنية فى الموقع', 'لدي مشكلة في الموقع، حيث أواجه صعوبة في الدخول أو تحميل الصفحات بشكل صحيح. تظهر لي رسائل خطأ متكررة، مما يؤثر على تجربتي بشكل كبير. أحتاج إلى دعم فني سريع لحل هذه المشكلة، حيث أنني أستخدم الموقع لأغراض مهمة. أرجو منكم المساعدة في أقرب وقت ممكن لتفادي أي تأخير إضافي. شكرًا لكم!'),
(3, 'ريمان', 'rem@gmail.com', 'مشكلة فى الموقع', 'أواجه مشكلة في الموقع، حيث لا يمكنني الوصول إلى حسابي. كلما حاولت تسجيل الدخول، تظهر لي رسالة تفيد بوجود خطأ. كما أن بعض الروابط لا تعمل، مما يجعل من الصعب التنقل داخل الموقع. أحتاج إلى دعم فني لحل هذه المشكلات سريعًا، لأنني أعتمد على الموقع لأغراض مهمة. شكرًا لتعاونكم!'),
(4, 'اسرار', 'aaa@yahoo.com', 'استفسار', 'لدي مشكلة في الموقع، حيث لا أستطيع الدخول إلى حسابي. تظهر لي رسالة خطأ عند محاولة تسجيل الدخول، مما يمنعني من الوصول إلى المحتوى المطلوب. كما أن بعض الصفحات تأخذ وقتًا طويلاً للتحميل. أحتاج إلى دعم فني سريع لحل هذه المشكلة، حيث أن استخدامي للموقع ضروري. أشكر لكم تعاونكم!'),
(5, 'احمد محمد', 'mo@gmail.com', 'طلب عاجل', 'أواجه مشكلة في الموقع، حيث لا أستطيع الدخول إلى حسابي. تظهر لي رسالة خطأ تمنعني من الوصول إلى المعلومات الضرورية. بالإضافة إلى ذلك، أواجه صعوبة في تحميل بعض الصفحات، مما يؤثر سلبًا على تجربتي. أحتاج إلى دعم فني لحل هذه المشكلات في أقرب وقت ممكن. شكرًا لتعاونكم!');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `ID` int(100) NOT NULL,
  `UserID` int(100) NOT NULL,
  `InterpreterID` int(100) NOT NULL,
  `InterpreterName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `InterpreterEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Language` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Rate` int(10) NOT NULL,
  `Imgpath` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`ID`, `UserID`, `InterpreterID`, `InterpreterName`, `UserName`, `UserEmail`, `InterpreterEmail`, `Language`, `City`, `Rate`, `Imgpath`) VALUES
(1, 8, 2, 'مرام', 'أحمد عبدالله محمد', 'W@gmail.com', 'maram@yahoo.com', 'العربية السعودية', 'أبها', 5, '../imgservice/female1.jpg'),
(2, 8, 3, 'ساره', 'أحمد عبدالله محمد', 'W@gmail.com', 'sara@gmail.com', 'العربية السعودية', 'جده', 4, '../imgservice/female2.jpg'),
(3, 8, 4, 'ريمان', 'أحمد عبدالله محمد', 'W@gmail.com', 'reman@yahoo.com', 'العربية السعودية', 'الباحة', 4, '../imgservice/female3.jpg'),
(4, 7, 1, 'عبدالله', 'ريمان سعد محمد ', 'reman@gmail.com', 'abdallah@gmail.com', 'العربية السعودية', 'الباحة', 5, '../imgservice/male1.jpg'),
(5, 7, 2, 'مرام', 'ريمان سعد محمد ', 'reman@gmail.com', 'maram@yahoo.com', 'العربية السعودية', 'أبها', 5, '../imgservice/female1.jpg'),
(6, 7, 3, 'ساره', 'ريمان سعد محمد ', 'reman@gmail.com', 'sara@gmail.com', 'العربية السعودية', 'جده', 4, '../imgservice/female2.jpg'),
(7, 7, 7, 'منال', 'ريمان سعد محمد ', 'reman@gmail.com', 'manal@gmail.com', 'العربية السعودية', 'الرياض', 5, '../imgservice/female3.jpg'),
(8, 8, 1, 'عبدالله', 'محمد حسن محمد', 'W@gmail.com', 'abdallah@gmail.com', 'العربية السعودية', 'الباحة', 5, '../imgservice/male1.jpg'),
(9, 8, 8, 'ياسر', 'محمد حسن محمد', 'W@gmail.com ', 'mahmoud@gmail.com', 'العربية السعودية', 'المدبنة', 4, '../imgservice/male4.jpg'),
(10, 8, 6, 'أحمد', 'محمد حسن محمد', 'W@gmail.com ', 'ahmed@gmail.com', 'العربية السعودية', 'نجران', 4, '../imgservice/male3.jpg'),
(11, 8, 7, 'منال', 'محمد حسن محمد', 'W@gmail.com ', 'manal@gmail.com', 'العربية السعودية', 'الرياض', 5, '../imgservice/female3.jpg'),
(12, 5, 1, 'عبدالله', 'محمد احمد محمد', 'user@gmail.com ', 'abdallah@gmail.com', 'العربية السعودية', 'الباحة', 5, '../imgservice/male1.jpg'),
(13, 5, 2, 'مرام', 'محمد احمد محمد', 'user@gmail.com ', 'maram@yahoo.com', 'العربية السعودية', 'أبها', 5, '../imgservice/female1.jpg'),
(14, 5, 8, 'ياسر', 'محمد احمد محمد', 'user@gmail.com ', 'mahmoud@gmail.com', 'العربية السعودية', 'المدبنة', 4, '../imgservice/male4.jpg'),
(15, 3, 1, 'عبدالله', 'امال محمد أحمد', 'ael@gmail.com ', 'abdallah@gmail.com', 'العربية السعودية', 'الباحة', 5, '../imgservice/male1.jpg'),
(16, 13, 1, 'عبد الله', ' محمد أحمد علي', 'amm@yahoo.com ', 'abdallah@gmail.com', 'العربية السعودية', 'الباحة', 5, '../imgservice/male1.jpg'),
(17, 13, 2, 'مرام', 'محمد أحمد علي', 'amm@yahoo.com ', 'maram@yahoo.com', 'العربية السعودية', 'أبها', 5, '../imgservice/female1.jpg'),
(18, 13, 3, 'ساره', 'محمد أحمد علي', 'amm@yahoo.com ', 'sara@gmail.com', 'العربية السعودية', 'جده', 4, '../imgservice/female2.jpg'),
(19, 10, 2, 'مرام', 'اسرار محمد احمد', 'aaa@gmail.com ', 'maram@yahoo.com', 'العربية السعودية', 'أبها', 5, '../imgservice/female1.jpg'),
(20, 10, 3, 'ساره', 'اسرار محمد احمد', 'aaa@gmail.com ', 'sara@gmail.com', 'العربية السعودية', 'جده', 4, '../imgservice/female2.jpg'),
(21, 10, 6, 'أحمد', 'اسرار محمد احمد', 'aaa@gmail.com ', 'ahmed@gmail.com', 'العربية السعودية', 'نجران', 4, '../imgservice/male3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `interpreters`
--

CREATE TABLE `interpreters` (
  `ID` int(100) NOT NULL,
  `InterpreterName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Language` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Rate` int(10) NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ID_No` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Usertype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Imgpath` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interpreters`
--

INSERT INTO `interpreters` (`ID`, `InterpreterName`, `City`, `Email`, `Password`, `Language`, `Rate`, `Description`, `ID_No`, `Usertype`, `Imgpath`) VALUES
(1, 'عبد الله', 'الباحة', 'abdallah@gmail.com', 'Aa@o111111111111', 'العربية السعودية', 5, 'مترجم متميز', '0000111111', 'interpreter', '../imgservice/male1.jpg'),
(2, 'مرام', 'أبها', 'maram@yahoo.com', 'Asd@123456789', 'العربية السعودية', 5, 'مترجم متميز', '0123222222', 'interpreter', '../imgservice/female1.jpg'),
(3, 'ساره', 'جده', 'sara@gmail.com', 'Sss*55555555555', 'العربية السعودية', 4, 'مترجم متميز', '0123333333', 'interpreter', '../imgservice/female2.jpg'),
(4, 'ريمان', 'الباحة', 'reman@yahoo.com', 'Rr**777777777777', 'العربية السعودية', 4, 'مترجم متميز', '0123444444', 'interpreter', '../imgservice/female3.jpg'),
(5, 'محمد', 'الرياض', 'mohamed@gmail.com', 'New@123456789', 'العربية السعودية', 3, 'مترجم متميز', '0123555555', 'interpreter', '../imgservice/male2.jpg'),
(6, 'أحمد', 'نجران', 'ahmed@gmail.com', 'Bb&111111111122', 'العربية السعودية', 4, 'مترجم متميز', '0123666666', 'interpreter', '../imgservice/male3.jpg'),
(7, 'منال', 'الرياض', 'manal@gmail.com', 'Mm@m77777777777', 'العربية السعودية', 5, 'مترجم متميز', '0000104444', 'interpreter', '../imgservice/female4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `ID` int(50) NOT NULL,
  `InterpreterID` int(50) NOT NULL,
  `UserID` int(50) NOT NULL,
  `InterpreterName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `InterpreterEmail` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `InterpreterID_No` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(200) NOT NULL,
  `InterpreterPath` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserPath` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`ID`, `InterpreterID`, `UserID`, `InterpreterName`, `UserName`, `InterpreterEmail`, `UserEmail`, `InterpreterID_No`, `Date`, `Time`, `InterpreterPath`, `UserPath`, `Status`, `Link`) VALUES
(1, 6, 10, 'أحمد', 'اسرار محمد احمد', 'ahmed@gmail.com', 'aaa@gmail.com', '0123666666', '0000-00-00', '00:00', '../imgservice/male3.jpg', '../imgservice/female5.jpg', 'قيد المعالجة', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6...'),
(2, 1, 11, 'عبدالله', 'محمد احمد محمد', 'abdallah@gmail.com', 'user@gmail.com', '0000111111', '2024-10-10', '19:30', '../imgservice/female1.jpg', '../imgservice/male5.jpg', 'طلب مقبول', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6ypQnmjcUfJWBNDdgWQ16NR.1'),
(4, 2, 10, 'مرام', 'اسرار محمد أحمد', 'maram@yahoo.com', 'aaa@gmail.com', '0123222222', '2024-10-01', '10:00', '../imgservice/female1.jpg', '../imgservice/female5.jpg', 'قيد المعالجة', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6...'),
(5, 1, 13, 'عبد الله', 'محمد أحمد علي', 'abdallah@gmail.com', 'amm@yahoo.com', '0000111111', '2024-11-11', '11:00', '../imgservice/male1.jpg', '../imgservice/male1.jpg', 'طلب مقبول', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6ypQnmjcUfJWBNDdgWQ16NR.1'),
(6, 2, 12, 'مرام', 'ريمان سعد محمد ', 'maram@yahoo.com', 'reman@gmail.com', '0123222222', '2024-11-11', '10:00', '../imgservice/female1.jpg', '../imgservice/female6.jpg', 'قيد المعالجة', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6...'),
(7, 1, 12, 'عبد الله', 'ريمان سعد محمد ', 'abdallah@gmail.com', 'reman@gmail.com', '0000111111', '2024-10-24', '17:50', '../imgservice/male1.jpg', '../imgservice/female6.jpg', 'طلب مرفوض', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6ypQnmjcUfJWBNDdgWQ16NR.1'),
(8, 4, 10, 'ريمان', 'اسرار محمد احمد', 'reman@yahoo.com', 'aaa@gmail.com', '0123444444', '2024-10-29', '11:00', '../imgservice/female3.jpg', '../imgservice/female5.jpg', 'قيد المعالجة', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6...'),
(9, 7, 10, 'منال', 'اسرار محمد احمد', 'manal@gmail.com', 'aaa@gmail.com', '0000104444', '2024-11-15', '05:05', '../imgservice/female4.jpg', '../imgservice/female5.jpg', 'طلب مقبول', 'https://us04web.zoom.us/j/73456244523?pwd=bZhoK6g6...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Usertype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Imgpath` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fullname`, `City`, `Email`, `Password`, `Usertype`, `Imgpath`) VALUES
(1, 'منال محمد عبد الله', 'الباحة', 'admin@gmail.com', 'Admin@123456', 'admin', '../imgservice/admin.jpg'),
(2, 'عبد الله', 'الباحة', 'abdallah@gmail.com', 'Aa@o111111111111', 'interpreter', '../imgservice/male1.jpg'),
(3, 'مرام', 'أبها', 'maram@yahoo.com', 'Asd@123456789', 'interpreter', '../imgservice/female1.jpg'),
(4, 'ساره', 'جده', 'sara@gmail.com', 'Sss*55555555555', 'interpreter', '../imgservice/female2.jpg'),
(5, 'ريمان', 'الباحة', 'reman@yahoo.com', 'Rr**777777777777', 'interpreter', '../imgservice/female3.jpg'),
(6, 'محمد', 'الرياض', 'mohamed@gmail.com', 'New@123456789', 'interpreter', '../imgservice/male2.jpg'),
(7, 'أحمد', 'نجران', 'ahmed@gmail.com', 'Bb&111111111122', 'interpreter', '../imgservice/male3.jpg'),
(8, 'منال', 'الرياض', 'manal@gmail.com', 'Mm@m77777777777', 'interpreter', '../imgservice/female4.jpg'),
(9, 'أحمد محمد ', 'جده', 'and@yahoo.com', 'Asd@123456789', 'user', '../imgservice/male4.jpg'),
(10, 'اسرار محمد احمد', 'الدمام', 'aya@gmail.com', 'Ss@s555555555555', 'user', '../imgservice/female5.jpg'),
(11, 'محمد احمد محمد', 'جده', 'user@gmail.com', 'New@12345678479', 'user', '../imgservice/male5.jpg'),
(12, 'ريمان سعد محمد ', 'أبها', 'reman@gmail.com', 'Rr*777777777777', 'user', '../imgservice/female6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `interpreters`
--
ALTER TABLE `interpreters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `interpreters`
--
ALTER TABLE `interpreters`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
