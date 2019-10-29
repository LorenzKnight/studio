-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2019 at 08:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id_banner`, `foto`, `title`, `position`) VALUES
(1, 'pic1.jpg', 'Urban-Kiz', 1),
(2, 'pic2.jpg', 'Kizomba Elemental', 2),
(3, 'pic4.jpg', 'Bachata', 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `teacher` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `description`, `teacher`, `status`) VALUES
(1, 'Urban_kiz', 'safkklsdfj lkjasdfkl jsdlifj alösdjf öasldkjhf ölasjfajsdflasjdfljasfasfölgasflögkaslfgölasfgölafgsölkafsg', 'Lessly & Marie', 1),
(2, 'Dominican Bachata', 'asdfsda asdf asdf asfsdfsa asdf asdfasdfsfasdfsdf sadf sfasdf asdf asdfasdfasdfsdfsad sdfsadf', 'Lorenz & Sofia', 1),
(3, 'traditional Kizomba', 'adfa sdfasdf sadf asdfsadfsadfsadf asdf sdaf asdf asdfasdf asdf asdfasdf sdf asdfas', 'Lorenz & Sanna', 1),
(4, 'Lady styling ', 'asdf asdf asdf asdf asdfasdfasdf asdf asdf fasdfsadfasdf asdf dsf asdf asdfasdf', 'Sussana Lindden', 1),
(5, 'Bachata Sensual', 'asdfakjsdf khdsf aslkdfl jskdjf asdöf jasödfj asdfjk f kajsdf ljasldjfakl sdfkjsdf kljsdf öjasdjflkj sklfjsdf sdlfj laskdjf lkjasdf', 'Peter & Elin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id_insc` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `package` int(11) DEFAULT NULL,
  `course_1` int(11) DEFAULT NULL,
  `course_2` int(11) DEFAULT NULL,
  `course_3` int(11) DEFAULT NULL,
  `course_4` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscriptions`
--

INSERT INTO `inscriptions` (`id_insc`, `date`, `year`, `month`, `day`, `time`, `id_student`, `term`, `package`, `course_1`, `course_2`, `course_3`, `course_4`, `status`, `payment`) VALUES
(10, '2019-10-22', '2019', '10', '22', '22:03:19', 27, 1, 1, 1, NULL, NULL, NULL, 'Activ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id_package` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id_package`, `package_name`, `description`, `price`, `status`) VALUES
(1, 'Packet 1 (Brons)', '1 kurs + 1 practica', 10, 1),
(2, 'Packet 2 (Silver)', '2 kurser + 2 practica', 1600, 1),
(3, 'Packet 3 (Guld)', '3 kurser + 2 practica + torsdag social', 2100, 1),
(4, 'Packet 4 (VIP)', 'Upp till 6 kurser. ', 2900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `ptop` int(11) DEFAULT NULL,
  `pright` int(11) DEFAULT NULL,
  `pbottom` int(11) DEFAULT NULL,
  `pleft` int(11) DEFAULT NULL,
  `padre` int(11) DEFAULT NULL,
  `padre 2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id_page`, `name`, `level`, `foto`, `background`, `color`, `ptop`, `pright`, `pbottom`, `pleft`, `padre`, `padre 2`) VALUES
(1, 'vlog', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(2, 'om oss', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(3, 'tjänster', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(4, 'test', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(5, 'div top', 0, NULL, 'red', NULL, 10, NULL, NULL, NULL, 1, NULL),
(13, 'test 2', 0, NULL, 'green', NULL, 10, NULL, NULL, NULL, 1, NULL),
(14, 'test 3', 0, NULL, 'yellow', NULL, 10, NULL, NULL, NULL, 1, NULL),
(15, 'test 2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(17, 'test 5', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(18, 'testgatan 401', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(20, 'Rosario Bustamante', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(23, 'test 10', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL),
(24, 'dfgsfgsfg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL),
(27, NULL, 0, NULL, '#FFF', NULL, 30, NULL, NULL, NULL, 1, NULL),
(28, NULL, 0, NULL, '#AED6F1', NULL, 30, NULL, NULL, NULL, 1, NULL),
(29, NULL, 0, NULL, '#CA6F1E', NULL, 10, 10, 10, 10, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id_publications` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `foto` varchar(255) DEFAULT NULL,
  `settings` int(11) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id_publications`, `date`, `year`, `month`, `day`, `time`, `title`, `content`, `foto`, `settings`, `site`, `position`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Kiz Addicts The Weekend', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Line up Kiz Addicts the weekend.jpg', 360, '1', 1, 1),
(2, NULL, NULL, NULL, NULL, NULL, 'YANDALI Thursday\'s Social', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. ok ok ok', 'yadali promo flayer v36.jpg', 420, '1', 2, 1),
(3, NULL, NULL, NULL, NULL, NULL, 'YANDALI Sunday\'s Practica', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'yadali promo flayer v36.jpg', 420, '1', 3, 1),
(4, NULL, NULL, NULL, NULL, NULL, 'YANDALI is the new place for DAKALI', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Dakali Henriksberg Lorenz.jpg', 60, '1', 4, 1),
(6, '2019-09-13', '2019', '9', '13', '13:27:31', 'Prueva', 'Hos oss hittar du kurser i flera olika dansstilar och på olika nivåer som passar allt från nybörjare till erfarna dansare.\r\n\r\nHit kan du anmäla dig själv eller tillsammans med vänner och/eller en danspartner. \r\nVåra klasser är välkomnade och sociala och du kommer lära känna andra dansare under kursens gång.\r\n        \r\nVarje termin är uppdelad i två kurs-omgångar och varje kurs pågår i 9 veckor.\r\n        \r\nVårens kurser börjar vecka 4. Öppet hus v 3', 'senal-neon-geometrica_23-2147570378.jpg', 60, NULL, NULL, 1),
(7, '2019-09-16', '2019', '9', '16', '15:00:23', 'Prueva 2', 'Hos oss hittar du kurser i flera olika dansstilar och på olika nivåer som passar allt från nybörjare till erfarna dansare. Hit kan du anmäla dig själv eller tillsammans med vänner och/eller en danspartner. Våra klasser är välkomnade och sociala och du kommer lära känna andra dansare under kursens gång. Varje termin är uppdelad i två kurs-omgångar och varje kurs pågår i 9 veckor. Vårens kurser börjar vecka 4. Öppet hus v ', '1500881754.jpg', 420, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `via` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `hour` varchar(255) DEFAULT NULL,
  `sal` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `via`, `name`, `level`, `teacher`, `duration`, `day`, `hour`, `sal`, `status`) VALUES
(1, 5, 'UrbanKiz', 1, 'Lessly & Marie', 110, 1, '330', 1, 1),
(2, 5, 'UrbanKiz', 2, 'Lorenz & Sofia', 220, 1, '0', 2, 1),
(3, 5, 'Lady Styling', 4, 'Sussana Linden', 165, 2, '0', 1, 1),
(4, 5, 'Dom Bachata', 1, 'Lorenz & Sofia', 220, 3, '0', 1, 1),
(5, 5, 'Privatlektion', 1, '(Bokningbar)', 220, 4, '0', 1, 1),
(6, 5, 'Bachata Sensual', 6, 'Peter & Ellin', 110, 1, '220', 2, 1),
(8, 5, 'UrbanKiz', 5, 'Lessly & Marie', 165, 1, '165', 1, 1),
(9, 5, 'Lady Styling', 3, 'Ellin', 165, 1, '0', 1, 1),
(10, 5, 'Dom Bachata', 5, 'Lorenz & Sofia', 110, 2, '110', 2, 1),
(11, 5, 'Privatlektion', 7, '(Bokningbar)', 110, 5, '0', 1, 1),
(12, 5, 'men style', 1, 'Lessly', 110, 6, '330', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id_site` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id_site`, `name`, `adress`, `post`, `city`, `email`, `logo`) VALUES
(1, 'YANDALI', 'Ånäsvägen 44 (hållplats Ejdergatan)', '416 68', 'Göteborg', 'info@yandali.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_student` int(11) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `personal_number` varchar(255) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `agree` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `done` int(11) DEFAULT NULL,
  `via` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `date`, `year`, `month`, `day`, `time`, `name`, `surname`, `email`, `password`, `personal_number`, `telephone`, `adress`, `post`, `city`, `sex`, `agree`, `package`, `status`, `rank`, `done`, `via`) VALUES
(27, '2019-10-22 22:03:11', '2019', '10', '22', '22:03:11', 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'newstudent246', '8409034157', 763199480, 'Siriusgatan 102', 41522, 'Göteborg', 'Man', 'yes', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id_term` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) DEFAULT NULL,
  `start_year` varchar(255) DEFAULT NULL,
  `start_month` varchar(255) DEFAULT NULL,
  `start_day` varchar(255) DEFAULT NULL,
  `stop_year` varchar(255) DEFAULT NULL,
  `stop_month` varchar(255) DEFAULT NULL,
  `stop_day` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id_term`, `date`, `type`, `term_name`, `start_year`, `start_month`, `start_day`, `stop_year`, `stop_month`, `stop_day`, `status`) VALUES
(1, '2019-09-05', '1', 'Var Termin', '2020', '1', '2', '2020', '3', '30', 1),
(2, '2019-09-05', '1', 'Vinter Termin', '2019', '1', '2', '2019', '3', '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `mail`, `password`, `telefon`, `rank`, `status`) VALUES
(1, 'Marie', 'Husby', 'mariehusby@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 707070707, 2, 1),
(2, 'Sofia', 'Franzen', 'sofia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 1, 1),
(3, 'Lessly', 'Awa', 'Lessly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1),
(5, 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 0, 1),
(6, 'Rebbeca', 'Hjärte', 'rebbeca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 3, 2),
(8, 'Shael', 'Knight', 'shael@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id_insc`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_term`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_insc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
