-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 23 aug 2019 kl 13:43
-- Serverversion: 5.7.25
-- PHP-version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `studio`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `banners`
--

INSERT INTO `banners` (`id_banner`, `foto`, `title`, `position`) VALUES
(1, 'pic1.jpg', 'Urban-Kiz', 1),
(2, 'pic2.jpg', 'Kizomba Elemental', 2),
(3, 'pic4.jpg', 'Bachata', 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `teacher` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `description`, `teacher`, `status`) VALUES
(1, 'Urban_kiz', 'safkklsdfj lkjasdfkl jsdlifj alösdjf öasldkjhf ölasjfajsdflasjdfljasfasfölgasflögkaslfgölasfgölafgsölkafsg', 'Lessly & Marie', 1),
(2, 'Dominican Bachata', 'asdfsda asdf asdf asfsdfsa asdf asdfasdfsfasdfsdf sadf sfasdf asdf asdfasdfasdfsdfsad sdfsadf', 'Lorenz & Sofia', 1),
(3, 'traditional Kizomba', 'adfa sdfasdf sadf asdfsadfsadfsadf asdf sdaf asdf asdfasdf asdf asdfasdf sdf asdfas', 'Lorenz & Sanna', 1),
(4, 'Lady styling ', 'asdf asdf asdf asdf asdfasdfasdf asdf asdf fasdfsadfasdf asdf dsf asdf asdfasdf', 'Sussana Lindden', 1),
(5, 'Bachata Sensual', 'asdfakjsdf khdsf aslkdfl jskdjf asdöf jasödfj asdfjk f kajsdf ljasldjfakl sdfkjsdf kljsdf öjasdjflkj sklfjsdf sdlfj laskdjf lkjasdf', 'Peter & Elin', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `package`
--

CREATE TABLE `package` (
  `id_package` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` double(8,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `package`
--

INSERT INTO `package` (`id_package`, `package_name`, `description`, `price`, `status`) VALUES
(1, 'Packet 1 (Bronze)', '1 Klass', 700.00, 1),
(2, 'Packet 2 (Silver)', '2 Klass', 1300.00, 1),
(3, 'Packet 3 (Gold)', '3 klass', 2100.00, 1),
(4, 'Packet 4 (Platinum)', '4 Klass', 3100.00, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `publications`
--

CREATE TABLE `publications` (
  `id_publications` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `foto` varchar(255) DEFAULT NULL,
  `settings` int(11) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `publications`
--

INSERT INTO `publications` (`id_publications`, `title`, `content`, `foto`, `settings`, `site`, `position`) VALUES
(1, 'Kiz Addicts The Weekend', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Line up Kiz Addicts the weekend.jpg', -360, '1', 1),
(2, 'YANDALI Thursday\'s Social', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', NULL, NULL, '1', 2),
(3, 'YANDALI Sunday\'s Practica', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', NULL, NULL, '1', 3),
(4, 'YANDALI is the new place for DAKALI', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '', NULL, '1', 4);

-- --------------------------------------------------------

--
-- Tabellstruktur `site_info`
--

CREATE TABLE `site_info` (
  `id_site` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `site_info`
--

INSERT INTO `site_info` (`id_site`, `name`, `adress`, `post`, `email`, `logo`) VALUES
(1, 'YANDALI', 'Gustaf Dalénsgatan 13', '417 05 Göteborg', 'info@yandali.com', NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `personal_number` varchar(255) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `course_1` int(11) DEFAULT NULL,
  `course_2` int(11) DEFAULT NULL,
  `course_3` int(11) DEFAULT NULL,
  `course_4` int(11) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `students`
--

INSERT INTO `students` (`id_student`, `date`, `year`, `month`, `day`, `time`, `name`, `surname`, `email`, `personal_number`, `telephone`, `sex`, `package`, `course_1`, `course_2`, `course_3`, `course_4`, `payment`, `status`) VALUES
(1, '2019-08-05 18:54:53', '2019', '8', '5', '18:54:53', 'Sofia', 'Franzen', 'sofiafranzen@gmail.com', '8501305620', 763199480, 2, '3', NULL, NULL, NULL, NULL, NULL, 1),
(2, '2019-08-20 09:29:52', '2019', '8', '20', '09:29:52', 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', '8501305620', 763199480, 1, NULL, 1, 2, 3, 4, 1, 1),
(3, '2019-08-20 09:36:38', '2019', '8', '20', '09:36:38', 'Joel', 'Knight', 'joellorenzo.k@gmail.com', '8409034157', 763199480, 1, NULL, 4, 3, 2, 1, 1, 1),
(4, '2019-08-20 09:38:36', '2019', '8', '20', '09:38:36', 'Shael', 'Knight', 'joellorenzo.k@gmail.com', '8409034157', 763199480, 1, '4', 4, 3, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
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
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `mail`, `password`, `telefon`, `rank`, `status`) VALUES
(1, 'Marie', 'Husby', 'mariehusby@gmail.com', '123456', 707070707, 2, 1),
(2, 'Sofia', NULL, 'sofia@gmail.com', NULL, 763199480, 2, 1),
(3, 'Lessly', NULL, 'Lessly@gmail.com', NULL, 763199480, 2, 1),
(4, 'Sussana', NULL, 'sussanna@gmail.com', NULL, 763199480, 2, 1),
(5, 'Lorenzo', NULL, 'joellorenzo.k@gmail.com', NULL, 763199480, 2, 1),
(6, 'Rebbeca', NULL, 'rebbeca@gmail.com', NULL, 763199480, 2, 1),
(8, 'Shael', 'Knight', 'Shael@gmail.com', '123456', 763199480, 2, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Index för tabell `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Index för tabell `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id_package`);

--
-- Index för tabell `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`);

--
-- Index för tabell `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id_site`);

--
-- Index för tabell `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `package`
--
ALTER TABLE `package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
