-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 فبراير 2023 الساعة 09:53
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `guideName` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'معلق'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `detail`, `type`, `city`, `price`, `img`, `guideName`, `date`, `state`) VALUES
(39, 'جولة تاريخية في متحف بريدة', 'يعرض جانب من تراث المنطقة ويحوي العديد من المقتنيات ويضم قاعات تاريخية وعلمية وثقافية وجناح لرجال العقيلات\r\n\r\n', '1- المدة ساعتين\r\n<br>\r\n2- إلغاء مجاني', 'متحف', 'القصيم', '50 ريال', '../img/متحف-بريدة.jpg', 'ali', '2023-02-26 20:00:00', 'مقبول'),
(40, 'متحف العقيلات', 'يقوم المتحف على جهود عبد اللطيف الوهيبي، الذي قام بتوثيق تاريخ العقيلات أحد أشهر الرحلات التجارية الحديثة والتي كانت تنطلق من منطقة القصيم ، حيث ضم المتحف أكثر من 10 آلاف وثيقة تاريخية تختص بالعقيلات وكذلك الأدوات وخريطة المسارات التجارية لهم.', '1- جولة خاصة \r\n<br>\r\n2- الغاء مجاني\r\n', 'متحف', 'القصيم', '30 ريال', '../img/Al-Aqilat-1.jpg', 'abdullah', '2023-02-28 20:00:00', 'مقبول'),
(43, 'القرية التراثية بعيون الجواء', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', '1- المدة: 4 ساعات\r\n<br>\r\n2- الغاء مجاني \r\n<br>\r\n3- احجز الآن وادفع لاحقاً', 'جولات نهارية', 'القصيم', '150 ريال', '../img/aljiwa-1.jpg', 'saleh', '2023-02-22 14:30:00', 'مقبول'),
(44, 'قرية الخبراء التراثية', 'جولة في بلدة الخبراء القديمة بنيت البلدة قبل أكثر من 200 عام من الطين الحر، ما جعلها قوية في وجه الزمن وعوامل التعرية، وتضم أكثر من 400 منزل. بُنيت بالشكل الدائري وهي تشبه بناء بغداد في العصر العباسي، حيث بقيت متماسكة، وتحيط القرية بسوق المجلس والمسجد بشكل دائري، وبهذا تكون أماكن البيع والشراء في منتصف البلدة', '1- المدة: 3 ساعات\r\n<br>\r\n2- الغاء مجاني \r\n<br>\r\n3- احجز الآن وادفع لاحقاً', 'جولات نهارية', 'القصيم', '80 ريال', '../img/alkhabra-1.jpg', 'abdullah', '2023-02-24 12:00:00', 'مقبول'),
(45, 'رحلة تخيم', 'رحلة تخييم في نفود القصيم عيش المغامرة ومتعة التخييم و التطعيس\r\n\r\n', '1- المدة : 8 ساعات\r\n<br>\r\n2- احجز الآن وادفع لاحقاً \r\n\r\n', 'جولات برية', 'القصيم', '800 ريال', '../img/N1.jpeg', 'عامر', '2023-02-22 21:06:17', 'مقبول'),
(46, 'حصاة النصلة', 'رحلة برية لرؤية حصاة النصلة أو حصاة عنترة هي صخرة تقع في شمال غرب بريدة وسط المملكة العربية السعودية،وتحتوي على النقوش الثمودية', '1- المدة : 8 ساعات\r\n<br>\r\n2- احجز الآن وادفع لاحقاً \r\n\r\n', 'جولات برية', 'القصيم', '600', '../img/R2.jpeg', 'عامر', '2023-02-20 21:12:40', 'مقبول'),
(47, 'جبل طميه', 'رحلة برية لرؤية جبل طميه الذي يقع شمال غرب منطقة القصيم', '1- المدة: 7 ساعات\r\n<br>\r\n2- الغاء مجاني\r\n<br>\r\n3- احجز الآن وادفع لاحقاً', 'جولات برية', 'القصيم', '550 ريال', '../img/جبل طميه.jpg', 'عامر', '2023-02-21 21:17:29', 'مقبول'),
(48, 'برج الشنانة بالرس', 'رحلة سياحية لبرج الشنانة بالرس لرية واحد من ابرز معالم منطقة القصيم', '1- المدة : 4 ساعات\r\n<br>\r\n2- احجز الآن وادفع لاحقا.', 'جولات نهارية', 'القصيم', '150 ريال', '../img/sh1.jpeg', 'عامر', '2023-02-25 21:20:59', 'مقبول'),
(49, 'متحف حمد بن ناصر للسيارات الكلاسيكية', 'جولة في متحف حمد بن ناصر للسيارات الكلاسيكية لروية السيارات الكلاسيكية ومعرفة تاريخها', '1- المدة: ساعتين\r\n<br>\r\n2- جولة خاصة \r\n<br>\r\n3- الغاء مجاني', 'متحف', 'القصيم', '150 ريال', '../img/متحف حمد.jpg', 'عامر', '2023-02-27 21:38:12', 'مقبول');

-- --------------------------------------------------------

--
-- بنية الجدول `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `guide`
--

INSERT INTO `guide` (`id`, `name`, `email`, `password_hash`, `date`) VALUES
(1, 'ali', 'aa@ss.com', '$2y$10$.sYEgIQAtYc55npSA7cU3ucuCUr77C9oStUXTRBNj/o4FdrDGNvc6', '2023-02-11 13:33:52'),
(6, 'Ahmed', 'asa@ss.com', '$2y$10$58Y1bSh36p8sDUI9KXLho.5RBEj9BD5nIIvDXKVdKIU5xgTKE5CyC', '2023-02-12 19:22:26'),
(8, 'abdullah', 'guide@guide.com', '$2y$10$GRZVNybm0lamkwOcpShE5O4w6cICIupln.k.3ij0RPphEdH0KHV9y', '2023-02-19 17:25:06'),
(9, 'عامر', 'amer@a.com', '$2y$10$lHTr/LKlMKF.fah4RfumhOb3oS7wlj2S1XV5tDMyiryEMlsz/2P6i', '2023-02-20 05:41:46'),
(10, 'admin', 'admin@a.com', '$2y$10$Tg6BlEVapVUqyO1xDSuqhe3l3okBcr6xyHtDIdn0Lx7fZEaC66Z1K', '2023-02-20 05:44:28'),
(11, 'saleh', 'saleh9@gmail.com', '$2y$10$sUoRRzzyT47mOV3oRBje2us1qUc40uaijmauI9m5eLQmpZY67nwti', '2023-02-20 08:27:43');

-- --------------------------------------------------------

--
-- بنية الجدول `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `guideName` varchar(50) NOT NULL,
  `eventDescription` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `reservationsTime` varchar(255) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reservations`
--

INSERT INTO `reservations` (`id`, `userName`, `eventName`, `guideName`, `eventDescription`, `img`, `price`, `reservationsTime`, `orderTime`) VALUES
(26, 'ali', 'جولة تاريخية في متحف بريدة', 'ali', 'يعرض جانب من تراث المنطقة ويحوي العديد من المقتنيات ويضم قاعات تاريخية وعلمية وثقافية وجناح لرجال العقيلات\r\n\r\n', '../img/متحف-بريدة.jpg', '50', '2023-02-26 20:00:00', '2023-02-18 11:19:03'),
(27, 'abdullah', 'متحف العقيلات', 'abdullah', 'يقوم المتحف على جهود عبد اللطيف الوهيبي، الذي قام بتوثيق تاريخ العقيلات أحد أشهر الرحلات التجارية الحديثة والتي كانت تنطلق من منطقة القصيم.، حيث ضم المتحف أكثر من 10 آلاف وثيقة تاريخية تختص بالعقيلات وكذلك الأدوات وخريطة المسارات التجارية لهم.', '../img/Al-Aqilat-1.jpg', '30', '2023-02-28 20:00:00', '2023-02-18 12:41:29'),
(28, 'محمد', 'متحف العقيلات', 'abdullah', 'يقوم المتحف على جهود عبد اللطيف الوهيبي، الذي قام بتوثيق تاريخ العقيلات أحد أشهر الرحلات التجارية الحديثة والتي كانت تنطلق من منطقة القصيم.، حيث ضم المتحف أكثر من 10 آلاف وثيقة تاريخية تختص بالعقيلات وكذلك الأدوات وخريطة المسارات التجارية لهم.', '../img/Al-Aqilat-1.jpg', '30', '2023-02-28 20:00:00', '2023-02-18 13:10:25'),
(30, 'عبدالله', 'جولة تاريخية في متحف بريدة', 'ali', 'يعرض جانب من تراث المنطقة ويحوي العديد من المقتنيات ويضم قاعات تاريخية وعلمية وثقافية وجناح لرجال العقيلات\r\n\r\n', '../img/متحف-بريدة.jpg', '50', '2023-02-26 20:00:00', '2023-02-18 13:42:30'),
(31, 'test', 'القرية التراثية بعيون الجواء', 'saleh', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', 'img/aljiwa-1.jpg', '150 ريال', '2023-02-22 14:30:00', '2023-02-18 20:02:40'),
(32, 'test', 'القرية التراثية بعيون الجواء', 'saleh', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', '../img/aljiwa-1.jpg', '150 ريال', '2023-02-22 14:30:00', '2023-02-18 20:05:02'),
(33, 'test', 'القرية التراثية بعيون الجواء', 'saleh', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', '../img/aljiwa-1.jpg', '150 ريال', '2023-02-22 14:30:00', '2023-02-18 20:05:28'),
(34, 'abdullah', 'القرية التراثية بعيون الجواء', 'saleh', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', '../img/aljiwa-1.jpg', '150 ريال', '2023-02-22 14:30:00', '2023-02-18 21:09:01'),
(35, 'saleh', 'قرية الخبراء التراثية', 'abdullah', 'جولة في بلدة الخبراء القديمة بنيت البلدة قبل أكثر من 200 عام من الطين الحر، ما جعلها قوية في وجه الزمن وعوامل التعرية، وتضم أكثر من 400 منزل. بُنيت بالشكل الدائري وهي تشبه بناء بغداد في العصر العباسي، حيث بقيت متماسكة، وتحيط القرية بسوق المجلس والمسجد بشكل دائري، وبهذا تكون أماكن البيع والشراء في منتصف البلدة', '../img/alkhabra-1.jpg', '80 ريال', '2023-02-24 12:00:00', '2023-02-19 17:27:12'),
(36, 'صالح', 'قرية الخبراء التراثية', 'abdullah', 'جولة في بلدة الخبراء القديمة بنيت البلدة قبل أكثر من 200 عام من الطين الحر، ما جعلها قوية في وجه الزمن وعوامل التعرية، وتضم أكثر من 400 منزل. بُنيت بالشكل الدائري وهي تشبه بناء بغداد في العصر العباسي، حيث بقيت متماسكة، وتحيط القرية بسوق المجلس والمسجد بشكل دائري، وبهذا تكون أماكن البيع والشراء في منتصف البلدة', '../img/alkhabra-1.jpg', '80 ريال', '2023-02-24 12:00:00', '2023-02-19 14:34:42'),
(37, 'صالح', 'قرية الخبراء التراثية', 'abdullah', 'جولة في بلدة الخبراء القديمة بنيت البلدة قبل أكثر من 200 عام من الطين الحر، ما جعلها قوية في وجه الزمن وعوامل التعرية، وتضم أكثر من 400 منزل. بُنيت بالشكل الدائري وهي تشبه بناء بغداد في العصر العباسي، حيث بقيت متماسكة، وتحيط القرية بسوق المجلس والمسجد بشكل دائري، وبهذا تكون أماكن البيع والشراء في منتصف البلدة', '../img/alkhabra-1.jpg', '80 ريال', '2023-02-24 12:00:00', '2023-02-19 14:34:54'),
(38, 'ali', 'متحف العقيلات', 'abdullah', 'يقوم المتحف على جهود عبد اللطيف الوهيبي، الذي قام بتوثيق تاريخ العقيلات أحد أشهر الرحلات التجارية الحديثة والتي كانت تنطلق من منطقة القصيم ، حيث ضم المتحف أكثر من 10 آلاف وثيقة تاريخية تختص بالعقيلات وكذلك الأدوات وخريطة المسارات التجارية لهم.', '../img/Al-Aqilat-1.jpg', '30 ريال', '2023-02-28 20:00:00', '2023-02-19 15:26:58'),
(39, 'ali', 'جولة تاريخية في متحف بريدة', 'ali', 'يعرض جانب من تراث المنطقة ويحوي العديد من المقتنيات ويضم قاعات تاريخية وعلمية وثقافية وجناح لرجال العقيلات\r\n\r\n', '../img/متحف-بريدة.jpg', '50 ريال', '2023-02-26 20:00:00', '2023-02-19 17:21:09'),
(40, 'ali', 'متحف حمد بن ناصر للسيارات الكلاسيكية', 'عامر', 'جولة في متحف حمد بن ناصر للسيارات الكلاسيكية لروية السيارات الكلاسيكية ومعرفة تاريخها', '../img/متحف حمد.jpg', '150 ريال', '2023-02-27 21:38:12', '2023-02-19 18:44:55'),
(41, 'M7md', 'رحلة تخيم', 'عامر', 'رحلة تخييم في نفود القصيم عيش المغامرة ومتعة التخييم و التطعيس\r\n\r\n', '../img/N1.jpeg', '800 ريال', '2023-02-22 21:06:17', '2023-02-20 05:38:14'),
(42, 'خالد', 'القرية التراثية بعيون الجواء', 'saleh', 'جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية حيث استوطنتها قبائل عربية عريقة، وما تزال هناك العديد من المعالم التراثية العمرانية التي تعود إلى تلك الحقب الزمنية القديمة.', '../img/aljiwa-1.jpg', '150 ريال', '2023-02-22 14:30:00', '2023-02-20 06:05:01'),
(43, 'ts', 'جبل طميه', 'عامر', 'رحلة برية لرؤية جبل طميه الذي يقع شمال غرب منطقة القصيم', '../img/جبل طميه.jpg', '550 ريال', '2023-02-21 21:17:29', '2023-02-20 08:37:28'),
(44, 'ts', 'جبل طميه', 'عامر', 'رحلة برية لرؤية جبل طميه الذي يقع شمال غرب منطقة القصيم', '../img/جبل طميه.jpg', '550 ريال', '2023-02-21 21:17:29', '2023-02-20 08:38:56');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'ali', 'aa@ss.com', '$2y$10$6z0GVHYqHpry14iabljoLOKtR2vQbEj4DDGhhOrNUgCkmYGsjKqR.'),
(2, 'ali', 'aa@sss.com', '$2y$10$uIsJA7UeuT9CsjuK4rAmS.yjwLySBdex2yYryQvfTGi9h/bYz4u/.'),
(4, 'abdullah', 'd@x.com', '$2y$10$hY1j7AYykhm5dc0hicBmTe9.28rh7/vbe8ELB8x9zb31UmkDlXZ..'),
(5, 'test', 'test@gmail.com', '$2y$10$wr9.CLjouHLdjOWrsclliOtPKAz8mBp7mYfg29dqQkcbQFuAaPKci'),
(6, 'amer', 'amer@a.com', '$2y$10$mhbqxee.JpdURXOs8glHNOIW3ezfJqe.s0FpIUQPO21mYm1hEm8Mu'),
(9, 'محمد', 'M@m.com', '$2y$10$jBt9Tw0HPdATllVLd3nEQ.GQZDzqt5ijFbhAwVPJpmSENPxgMWi5S'),
(10, 'عبدالله', 'S@s.com', '$2y$10$tliSImKrqVkWLfmheZdWEuNRz5vFkdrwqENXJeqCLtbCYZEXwHzwW'),
(13, 'test', 'test1@gmail.com', '$2y$10$u3Z/mPwHUHspSC5BWhhlP.LqEkXTAvhD6HGwQloUevF0P6DTrwGui'),
(27, 'ali', 'aa@ssss.com', '$2y$10$Hl6rsvhxTuehCdkf684ltuCTJv6GpWfBaJXBTCBYVuwcjJFkn6ntW'),
(30, 'صالح', 'aa111@ss.com', '$2y$10$A73k9kMpAq7OKH1n7pO8JOFiKRFGeChUdj1yg1gabBOCK3vDEPH.q'),
(31, 'M7md', 'M7@m.com', '$2y$10$hZfMCTyIDQmnrwzdtmDvJuIdNXiRRo/pWUgCL/6jjjbGoXclyF94K'),
(32, 'ali', 'SuadiGuides@gmail.com', '$2y$10$i43cjM3tqBjjwhZx4IMGOuL2F3MD0E7KSqX/KLSm91D/17NFnaChy'),
(34, 'خالد', 'k@g.com', '$2y$10$O0M.lYW/MQ/PtOJJGugG/e6s.iZOsqAl2zwfKqKmBTYDu7HQPMhZO'),
(35, 'ts', 'ts@ts.com', '$2y$10$T2JdkRUaZkuWPu7PWHnx2u9jkOhEsvPEKA6svzL/.l0I/GuW8nSzy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
