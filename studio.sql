-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Värd: 10.209.2.58
-- Skapad: 20 dec 2019 kl 16:01
-- Serverversion: 5.5.52
-- PHP-version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `158575-studio`
--
CREATE DATABASE `158575-studio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `158575-studio`;

-- --------------------------------------------------------

--
-- Tabellstruktur `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `courses` (
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `teacher` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `description`, `teacher`, `status`) VALUES
(1, 'Urban kiz steg 1 (ons 18.30-19.30)', 'safkklsdfj lkjasdfkl jsdlifj alösdjf öasldkjhf ölasjfajsdflasjdfljasfasfölgasflögkaslfgölasfgölafgsölkafsg', 'Lessly & Marie', 1),
(2, 'Urban kiz steg 2 (ons 19.30-20.30)', 'asdfsda asdf asdf asfsdfsa asdf asdfasdfsfasdfsdf sadf sfasdf asdf asdfasdfasdfsdfsad sdfsadf', 'Lessly & Marie', 1),
(3, 'Urban kiz steg 3 (ons 20.30-21.30)', 'adfa sdfasdf sadf asdfsadfsadfsadf asdf sdaf asdf asdfasdf asdf asdfasdf sdf asdfas', 'Lessly & Marie', 1),
(4, 'Urban kiz steg 4 (mån 20.30-21.30)', 'asdf asdf asdf asdf asdfasdfasdf asdf asdf fasdfsadfasdf asdf dsf asdf asdfasdf', 'Lorenz & Sofia', 1),
(5, 'Balett steg 1 (mån 18.00-19.30)', 'asdfakjsdf khdsf aslkdfl jskdjf asdöf jasödfj asdfjk f kajsdf ljasldjfakl sdfkjsdf kljsdf öjasdjflkj sklfjsdf sdlfj laskdjf lkjasdf', 'Aurica Muntoiu', 1),
(6, 'Dominikansk bachata steg 1 (mån 19.30-20.30)', NULL, 'Lorenz & Sofia', 1),
(7, 'Kubansk salsa steg 1 (ons 18.30-19.30)', NULL, 'Ali', 1),
(8, 'Kubansk salsa steg 2 (ons 19.30-20.30)', NULL, 'Ali', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `event_date` date DEFAULT NULL,
  `link` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `events`
--

INSERT INTO `events` (`id_event`, `date`, `time`, `foto`, `name`, `description`, `event_date`, `link`, `status`) VALUES
(1, '2019-11-14', NULL, 'yandali premiere.jpg', 'Yandali The Premiere', NULL, '2019-11-28', 'https://www.facebook.com/watch/?v=688526378320554', 1),
(2, '2019-11-16', NULL, 'The night.jpg', 'The Night', NULL, '2019-11-16', NULL, 1),
(3, '2019-11-21', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2019-11-21', NULL, 1),
(4, '2019-11-23', NULL, 'The night.jpg\r\n', 'The Night', NULL, '2019-11-23', NULL, 1),
(5, '2019-11-28', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2019-11-28', NULL, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `inscriptions`
--

CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id_insc` int(11) NOT NULL AUTO_INCREMENT,
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
  `payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_insc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumpning av Data i tabell `inscriptions`
--

INSERT INTO `inscriptions` (`id_insc`, `date`, `year`, `month`, `day`, `time`, `id_student`, `term`, `package`, `course_1`, `course_2`, `course_3`, `course_4`, `status`, `payment`) VALUES
(15, '2019-12-12', '2019', '12', '12', '13:55:47', 40, 1, 1, 1, NULL, NULL, NULL, NULL, 1),
(16, '2019-12-13', '2019', '12', '13', '17:45:07', 41, 1, 5, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id_package` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_package`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumpning av Data i tabell `package`
--

INSERT INTO `package` (`id_package`, `package_name`, `description`, `price`, `status`) VALUES
(1, 'Paket 1 (Brons)', '1 kurs + 1 praktika', 980, 1),
(2, 'Paket 2 (Silver)', '2 kurser + 2 praktika', 1750, 1),
(3, 'Paket 3 (Guld)', '3 kurser + 2 praktika', 2350, 1),
(4, 'Paket 4 (VIP)', 'Upp till 6 kurser + social(Spicy Thursdays)', 3500, 1),
(5, 'Balett', '(Denna kurs bokas separat pga 90 min klass)', 1290, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
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
  `padre 2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumpning av Data i tabell `pages`
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
-- Tabellstruktur `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id_publications` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_publications`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumpning av Data i tabell `publications`
--

INSERT INTO `publications` (`id_publications`, `date`, `year`, `month`, `day`, `time`, `title`, `content`, `foto`, `settings`, `site`, `position`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Kurser & Workshops', 'Varje termin kan du anmäla dig till kurser och workshops i flera olika dansstilar.   Hos oss hittar du allt från härliga nybörjarkurser till intensiva kurser för mer erfarna dansare.  \r\nAlla är välkomna och hos oss är både kvalité, glädje och gemenskap viktigt!', 'IMG_6231.jpg', 75, '1', 1, 1),
(2, NULL, NULL, NULL, NULL, NULL, 'Helgkurser & Bootcamps', 'Utvalda helger erbjuder vi helgkurser och bootcamps i olika dansstilar med både lokala och internationella lärare.   Lite mer intensiva tillfällen då man lär sig mycket och utvecklas under kort tid samtidigt som man lära känna många andra dansare.', 'IMG_6225.jpg', 115, '1', 2, 1),
(3, NULL, NULL, NULL, NULL, NULL, 'Socialdans', 'På torsdagar bjuder vi in till socialdans, kvällar då vi spelar skön musik och dansgolvet är öppet för både studenter och erfarna dansare.  Avslappnade kvällar med hög kvalité då fokus ligger på gemenskap och glädjen i dansen.  Både till för de som vill öva på nya danssteg och de som bara vill njuta av lite dans mitt i veckan.', 'IMG_6209.jpg', 75, '1', 3, 1),
(4, NULL, NULL, NULL, NULL, NULL, 'Fester & Events', 'Flera gånger varje månad bjuder vi in till fester och andra events. \r\nLite lyxigare tillfällen då vi ofta har DJ:s, dansare från flera olika städer och bjuder på både happenings och överraskningar!\r\n<br><br>\r\n  Alla våra fester är alkohol- och narkotikafria.', 'IMG_6187.jpg', 75, '1', 4, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `via` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `hour` varchar(255) DEFAULT NULL,
  `sal` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_schedule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumpning av Data i tabell `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `via`, `name`, `level`, `teacher`, `duration`, `day`, `hour`, `sal`, `status`) VALUES
(13, 5, 'TBA', 6, '-', 110, 1, '165', 1, 1),
(15, 5, 'Dom Bachata', 1, 'Lorenz & Sofia', 110, 1, '275', 1, 1),
(16, 5, 'UrbanKiz', 4, 'Lorenz & Sofia', 110, 3, '385', 1, 1),
(17, 5, 'Balett', 1, 'Aurica Muntoiu', 165, 1, '110', 2, 1),
(18, 5, 'TBA', 6, '-', 110, 1, '275', 2, 1),
(19, 5, 'TBA', 6, '-', 110, 1, '385', 2, 1),
(20, 5, 'PRAKTIKA', 6, '-', 110, 1, '495', 1, 1),
(21, 5, 'PRAKTIKA', 6, '-', 110, 1, '495', 2, 1),
(22, 5, 'UrbanKiz', 1, 'Lessly & Marie', 110, 3, '165', 1, 1),
(23, 5, 'UrbanKiz', 2, 'Lessly & Marie', 110, 3, '275', 1, 1),
(24, 5, 'UrbanKiz', 3, 'Lessly & Marie', 110, 1, '385', 1, 1),
(25, 5, 'Kubansk Salsa', 1, 'Ali', 110, 3, '165', 2, 1),
(26, 5, 'Kubansk Salsa', 2, 'Ali', 110, 3, '275', 2, 1),
(27, 5, 'TBA', 5, '-', 110, 3, '385', 2, 1),
(28, 5, 'PRAKTIKA', 6, '-', 110, 3, '495', 1, 1),
(29, 5, 'PRAKTIKA', 6, '-', 110, 3, '495', 2, 1),
(30, 5, 'DROP IN', 5, '-', 110, 4, '165', 1, 1),
(31, 5, 'DROP IN', 5, '-', 110, 4, '165', 2, 1),
(32, 5, 'SOCIAL', 6, '-', 385, 4, '275', 1, 1),
(33, 5, 'SOCIAL', 6, '-', 385, 4, '275', 2, 1),
(34, 5, 'Privatlektioner', 7, '-', 110, 1, '54', 1, 1),
(35, 5, 'Privatlektioner', 7, '-', 110, 3, '54', 1, 1),
(36, 5, 'Privatlektioner', 7, '-', 110, 3, '54', 2, 1),
(37, 5, 'Privatlektioner', 7, '-', 110, 4, '54', 1, 1),
(38, 5, 'Privatlektioner', 7, '-', 110, 4, '54', 2, 1),
(39, 5, 'Privatlektioner', 7, '-', 110, 1, '0', 2, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `id_site` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_site`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `site_info`
--

INSERT INTO `site_info` (`id_site`, `name`, `adress`, `post`, `city`, `email`, `logo`) VALUES
(1, 'YANDALI', 'Ånäsvägen 44-46 (hållplats Ejdergatan)', '416 68', 'Göteborg', 'info@yandali.se', NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id_student` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `via` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_student`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumpning av Data i tabell `students`
--

INSERT INTO `students` (`id_student`, `date`, `year`, `month`, `day`, `time`, `name`, `surname`, `email`, `password`, `personal_number`, `telephone`, `adress`, `post`, `city`, `sex`, `agree`, `package`, `status`, `rank`, `done`, `via`) VALUES
(40, '2019-12-12 13:55:00', '2019', '12', '12', '13:55:00', 'Nicole', 'Hernandez Råsberg', 'nicole.rasberg@gmail.com', 'newstudent246', '9108194409', 760208190, 'Ånäsvägen 19B', 41668, 'Göteborg', 'Kvinna', 'yes', '1', 'Activ', NULL, NULL, NULL),
(41, '2019-12-13 17:44:55', '2019', '12', '13', '17:44:55', 'Tussa', 'Bygdén', 'tussabygden@gmail.com', 'newstudent246', '9001100909', 768149480, 'Briljantgatan 18', 42149, 'Västra Frölunda', 'Kvinna', 'yes', '5', 'Activ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `id_term` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) DEFAULT NULL,
  `start_year` varchar(255) DEFAULT NULL,
  `start_month` varchar(255) DEFAULT NULL,
  `start_day` varchar(255) DEFAULT NULL,
  `stop_year` varchar(255) DEFAULT NULL,
  `stop_month` varchar(255) DEFAULT NULL,
  `stop_day` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `term`
--

INSERT INTO `term` (`id_term`, `date`, `type`, `term_name`, `start_year`, `start_month`, `start_day`, `stop_year`, `stop_month`, `stop_day`, `status`) VALUES
(1, '2019-09-05', '1', 'Var Termin', '2020', '1', '2', '2020', '3', '30', 1),
(2, '2019-09-05', '1', 'Vinter Termin', '2019', '1', '2', '2019', '3', '30', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `mail`, `password`, `telefon`, `rank`, `status`) VALUES
(1, 'Marie', 'Husby', 'mariehusby@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 707070707, 2, 1),
(2, 'Sofia', 'Franzen', 'sofia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 1, 1),
(3, 'Lessly', 'Awa', 'Lessly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1),
(5, 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 0, 1),
(6, 'Rebbeca', 'Hjärte', 'rebbeca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 3, 2),
(8, 'Shael', 'Knight', 'shael@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
