-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 21 aug 2020 kl 19:26
-- Serverversion: 5.7.26
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `yandali`
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
-- Tabellstruktur `cart`
--

CREATE TABLE `cart` (
  `id_counter` int(11) NOT NULL,
  `id_student` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL,
  `course_category` int(11) DEFAULT NULL,
  `id_term` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `transaction_made` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `cart`
--

INSERT INTO `cart` (`id_counter`, `id_student`, `id_course`, `course_category`, `id_term`, `date`, `transaction_made`) VALUES
(734, 103, 1, 1, 3, '2020-03-22', 256),
(738, 103, 9, 2, 3, '2020-03-22', 256),
(739, 118, 1, 1, 3, '2020-03-22', 257),
(740, 118, 2, 1, 3, '2020-03-22', 257),
(741, 118, 9, 2, 3, '2020-03-22', 257),
(742, 113, 1, 1, 3, '2020-03-22', 258),
(743, 113, 2, 1, 3, '2020-03-22', 258),
(744, 113, 3, 1, 3, '2020-03-22', 258),
(745, 113, 7, 1, 3, '2020-03-22', 258),
(746, 119, 1, 1, 3, '2020-03-22', 259),
(747, 119, 2, 1, 3, '2020-03-22', 259),
(748, 120, 3, 1, 3, '2020-03-22', 260),
(750, 121, 6, 1, 3, '2020-03-22', 261),
(751, 121, 7, 1, 3, '2020-03-22', 261),
(752, 121, 8, 1, 3, '2020-03-22', 261),
(754, 121, 9, 2, 3, '2020-03-22', 261),
(755, 103, 2, 1, 3, '2020-03-23', 256),
(757, 122, 1, 1, 3, '2020-03-23', 262),
(758, 122, 7, 1, 3, '2020-03-23', 262),
(759, 122, 9, 2, 3, '2020-03-23', 262),
(767, 107, 1, 1, 3, '2020-03-23', 264),
(768, 107, 2, 1, 3, '2020-03-23', 264),
(769, 107, 3, 1, 3, '2020-03-23', 264),
(770, 107, 4, 1, 3, '2020-03-23', 264),
(773, 125, 2, 1, 3, '2020-03-23', 265),
(774, 125, 3, 1, 3, '2020-03-23', 265),
(777, 126, 1, 1, 3, '2020-03-23', 266),
(778, 126, 5, 1, 3, '2020-03-23', 266),
(779, 103, 1, 1, 4, '2020-08-20', 267),
(781, 103, 2, 1, 4, '2020-08-20', 267);

-- --------------------------------------------------------

--
-- Tabellstruktur `collaborators`
--

CREATE TABLE `collaborators` (
  `id_collaborators` int(11) NOT NULL,
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
-- Dumpning av Data i tabell `collaborators`
--

INSERT INTO `collaborators` (`id_collaborators`, `date`, `year`, `month`, `day`, `time`, `title`, `content`, `foto`, `settings`, `site`, `position`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Sofia', 'Varje termin kan du anmäla dig till kurser och workshops i flera olika dansstilar.   Hos oss hittar du allt från härliga nybörjarkurser till intensiva kurser för mer erfarna dansare.  \r\nAlla är välkomna och hos oss är både kvalité, glädje och gemenskap viktigt!\r\n', 'IMG_6225.jpg', 115, '1', 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `schedule` text,
  `term` int(11) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT '1',
  `price` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `user_rank` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `schedule`, `term`, `teacher`, `category`, `price`, `status`, `user_rank`, `id_user`) VALUES
(1, 'Urban kiz 1', '(ons 18.30-19.30)', 3, 'Lessly & Marie', 1, '980', 1, 2, 3),
(2, 'Urban kiz 2', '(ons 19.30-20.30)', 3, 'Lessly & Marie', 1, '980', 1, 3, 3),
(3, 'Urban kiz 3', '(ons 20.30-21.30)', 3, 'Lessly & Marie', 1, '980', 1, 1, 5),
(4, 'Urban kiz 4', '(mån 20.30-21.30)', 3, 'Lorenz & Sofia', 1, '980', 1, 1, 3),
(5, 'Dominikansk bachata 1', '(mån 19.30-20.30)', 3, 'Lorenz & Sofia', 1, '980', 1, 1, 5),
(6, 'Dominikansk bachata 2', '(mån 19.30-20.30)', 3, 'Lorenz & Sofia', 1, '980', 1, 1, 5),
(7, 'Kubansk salsa 1', '(ons 18.30-19.30)', 3, 'Ali', 1, '980', 1, 1, 5),
(8, 'Kubansk salsa 2', '(ons 19.30-20.30)', 3, 'Ali', 1, '980', 1, 1, 5),
(9, 'Balett 1', '(mån 18.00-19.30)', 3, 'Aurica', 2, '1290', 1, 1, 5),
(10, 'Test course', '(mån 18.00-19.30)', 3, 'Test teacher', 2, '1290', 1, 1, 5);

-- --------------------------------------------------------

--
-- Tabellstruktur `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `gift` varchar(255) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `quanti` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `discount`
--

INSERT INTO `discount` (`id_discount`, `code`, `gift`, `percent`, `quanti`, `start_date`, `stop_date`) VALUES
(1, 'SPRING2020', '1 Gratis privat Salsa lektion', NULL, 100, '2020-01-03', '2020-01-13');

-- --------------------------------------------------------

--
-- Tabellstruktur `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `event_date` date DEFAULT NULL,
  `link` text,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `events`
--

INSERT INTO `events` (`id_event`, `date`, `time`, `foto`, `name`, `description`, `event_date`, `link`, `status`) VALUES
(1, '2019-11-14', NULL, 'yandali premiere.jpg', 'Yandali The Premiere', NULL, '2019-11-28', 'https://www.facebook.com/watch/?v=688526378320554', 1),
(2, '2019-11-16', NULL, 'The night.jpg', 'The Night', NULL, '2019-11-16', NULL, 1),
(3, '2019-11-21', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2020-03-28', 'https://www.facebook.com/watch/?v=688526378320554', 1),
(4, '2019-11-23', NULL, 'The night.jpg\r\n', 'The Night', NULL, '2019-11-23', NULL, 1),
(5, '2019-11-28', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2019-11-24', NULL, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id_insc` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `term_start` date DEFAULT NULL,
  `term_stop` date DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `course_1` int(11) DEFAULT NULL,
  `course_2` int(11) DEFAULT NULL,
  `course_3` int(11) DEFAULT NULL,
  `course_4` int(11) DEFAULT NULL,
  `course_s1` int(11) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  `payment` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `inscriptions`
--

INSERT INTO `inscriptions` (`id_insc`, `date`, `year`, `month`, `day`, `time`, `id_student`, `sex`, `term`, `term_start`, `term_stop`, `package`, `course_1`, `course_2`, `course_3`, `course_4`, `course_s1`, `promocode`, `status`, `done`, `payment`, `total`) VALUES
(256, '2020-03-22', '2020', '3', '22', '10:53:16', 103, 'Man', 3, '2020-03-16', '2020-05-29', 'Guldpaket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 3054),
(257, '2020-03-22', '2020', '3', '22', '11:14:43', 118, 'Man', 3, '2020-03-16', '2020-05-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 3250),
(258, '2020-03-22', '2020', '3', '22', '11:17:15', 113, 'Kvinna', 3, '2020-03-16', '2020-05-29', 'VIP-paket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2744),
(259, '2020-03-22', '2020', '3', '22', '11:19:46', 119, 'Man', 3, '2020-03-16', '2020-05-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1960),
(260, '2020-03-22', '2020', '3', '22', '11:23:52', 120, 'Man', 3, '2020-03-16', '2020-05-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 980),
(261, '2020-03-22', '2020', '3', '22', '14:38:19', 121, 'Kvinna', 3, '2020-03-16', '2020-05-29', 'VIP-paket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 3642),
(262, '2020-03-23', '2020', '3', '23', '10:50:15', 122, 'Kvinna', 3, '2020-03-16', '2020-05-29', 'Guldpaket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 3054),
(264, '2020-03-23', '2020', '3', '23', '13:29:20', 107, 'Kvinna', 3, '2020-03-16', '2020-05-29', 'VIP-paket', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 2744),
(265, '2020-03-23', '2020', '3', '23', '14:23:37', 125, 'Man', 3, '2020-03-16', '2020-05-29', 'Silverpaket', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1764),
(266, '2020-03-23', '2020', '3', '23', '14:53:41', 126, 'Man', 3, '2020-03-16', '2020-05-29', 'Silverpaket', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1764),
(267, '2020-08-20', '2020', '8', '20', '13:37:17', 103, 'Man', 4, '2020-09-14', '2020-12-04', 'Silverpaket', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1764);

-- --------------------------------------------------------

--
-- Tabellstruktur `package`
--

CREATE TABLE `package` (
  `id_package` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Tabellstruktur `pack_discount`
--

CREATE TABLE `pack_discount` (
  `id_p_discount` int(11) NOT NULL,
  `package_conditions` text,
  `percent` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `pack_discount`
--

INSERT INTO `pack_discount` (`id_p_discount`, `package_conditions`, `percent`, `valor`) VALUES
(1, '10% rabbat för 2 kurser', 10, 2),
(2, '20% rabbat för 3 kurser', 20, 3),
(3, '30% rabbat för 4 kurser', 30, 4),
(4, '30% rabbat för 5 kurser', 30, 5),
(5, '30% rabbat för 6 kurser', 30, 6),
(6, '30% rabbat för 7 kurser', 30, 7),
(7, '30% rabbat för 8 kurser', 30, 8),
(8, '30% rabbat för 9 kurser', 30, 9);

-- --------------------------------------------------------

--
-- Tabellstruktur `pages`
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
  `padre2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `pages`
--

INSERT INTO `pages` (`id_page`, `name`, `level`, `foto`, `background`, `color`, `ptop`, `pright`, `pbottom`, `pleft`, `padre`, `padre2`) VALUES
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
-- Dumpning av Data i tabell `publications`
--

INSERT INTO `publications` (`id_publications`, `date`, `year`, `month`, `day`, `time`, `title`, `content`, `foto`, `settings`, `site`, `position`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Kurser & Workshops', 'Varje termin kan du anmäla dig till kurser och workshops i flera olika dansstilar.   Hos oss hittar du allt från härliga nybörjarkurser till intensiva kurser för mer erfarna dansare.  \r\nAlla är välkomna och hos oss är både kvalité, glädje och gemenskap viktigt!', 'courses.jpg', 700, '1', 1, 1),
(2, NULL, NULL, NULL, NULL, NULL, 'Helgkurser & Bootcamps', 'Utvalda helger erbjuder vi helgkurser och bootcamps i olika dansstilar med både lokala och internationella lärare.   Lite mer intensiva tillfällen då man lär sig mycket och utvecklas under kort tid samtidigt som man lära känna många andra dansare.', 'bootcamp.jpg', 400, '1', 2, 1),
(3, NULL, NULL, NULL, NULL, NULL, 'Socialdans', 'På torsdagar bjuder vi in till socialdans, kvällar då vi spelar skön musik och dansgolvet är öppet för både studenter och erfarna dansare.  Avslappnade kvällar med hög kvalité då fokus ligger på gemenskap och glädjen i dansen.  Både till för de som vill öva på nya danssteg och de som bara vill njuta av lite dans mitt i veckan.', 'socialdance.png', 300, '1', 3, 1),
(4, NULL, NULL, NULL, NULL, NULL, 'Fester & Events', 'Flera gånger varje månad bjuder vi in till fester och andra events. \r\nLite lyxigare tillfällen då vi ofta har DJ:s, dansare från flera olika städer och bjuder på både happenings och överraskningar!\r\n<br><br>\r\n  Alla våra fester är alkohol- och narkotikafria.', 'fest_event.jpg', 400, '1', 4, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `schedule`
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
-- Dumpning av Data i tabell `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `via`, `name`, `level`, `teacher`, `duration`, `day`, `hour`, `sal`, `status`) VALUES
(49, 5, 'UrbanKiz 1', 1, 'Lorenz & Sofia', 110, 1, '54', 1, 1),
(50, 5, 'UrbanKiz 2', 2, 'Lessly & Marie', 110, 3, '165', 2, 1),
(51, 5, 'UrbanKiz 3', 3, 'Lessly & Marie', 110, 4, '275', 1, 1),
(52, 5, 'Balett', 2, 'Aurica', 165, 5, '54', 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `site_info`
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
-- Dumpning av Data i tabell `site_info`
--

INSERT INTO `site_info` (`id_site`, `name`, `adress`, `post`, `city`, `email`, `logo`) VALUES
(1, 'LOOPS DANCE STUDIO', 'Ånäsvägen 44-46 (hållplats Ejdergatan)', '416 68', 'Göteborg', 'info@loopsdancestudio.se', NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `students`
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
  `telephone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `agree` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `via` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `students`
--

INSERT INTO `students` (`id_student`, `date`, `year`, `month`, `day`, `time`, `name`, `surname`, `email`, `password`, `personal_number`, `telephone`, `adress`, `post`, `city`, `sex`, `agree`, `package`, `status`, `rank`, `via`) VALUES
(40, '2019-12-12 13:55:00', '2019', '12', '12', '13:55:00', 'Nicole', 'Hernandez Råsberg', 'nicole.rasberg@gmail.com', 'newstudent246', '9108194409', '0760208190', 'Ånäsvägen 19B', 41668, 'Göteborg', 'Kvinna', 'yes', '1', 'Active', NULL, NULL),
(41, '2019-12-13 17:44:55', '2019', '12', '13', '17:44:55', 'Tussa', 'Bygdén', 'tussabygden@gmail.com', 'newstudent246', '9001100909', '0768149480', 'Briljantgatan 18', 42149, 'Västra Frölunda', 'Kvinna', 'yes', '5', 'Active', NULL, NULL),
(45, '2019-12-20 19:42:04', '2019', '12', '20', '19:42:04', 'Carlos', 'Corleones', 'carlos@gmail.com', 'newstudent246', '8501305611', '0763199455', 'Hörte 11', 41516, 'Oslo', 'Man', 'yes', '5', 'Active', NULL, NULL),
(46, '2019-12-30 21:24:58', '2019', '12', '30', '21:24:58', 'Ramon', 'Ramirez', 'ramon@gmail.com', 'newstudent246', '8501305611', '0763199411', 'Hörte 22', 41516, 'Oslo', 'Man', 'yes', '5', 'Active', NULL, NULL),
(47, '2019-12-31 00:52:00', '2019', '12', '30', '00:52:00', 'Sofia', 'Franzen', 'sofiafranzen@gmail.com', 'newstudent246', '8501305699', '0763199420', 'Hörte 12', 41516, 'Oslo', 'Kvinna', 'yes', '4', 'Active', NULL, NULL),
(51, '2020-01-03 18:49:50', '2020', '1', '3', '18:49:50', 'Ramon', 'Ramirez', 'ramon@gmail.com', 'newstudent246', '8501305611', '0763199411', 'Hörte 22', 41516, 'Oslo', 'Man', 'yes', '5', 'Active', NULL, NULL),
(52, '2020-01-08 17:27:08', '2020', '1', '8', '17:27:08', 'Rosario', 'Bustamante', 'rosario@gmail.com', 'newstudent246', '8501305699', '0763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, '3', 'Active', NULL, 5),
(66, '2020-01-08 19:04:21', '2020', '1', '8', '19:04:21', 'Carlos', 'Corleones', 'carlos@gmail.com', 'newstudent246', '8501305620', '0763199455', 'Hörte 11', 41516, 'Oslo', 'Man', NULL, '1', 'Active', NULL, 5),
(67, '2020-01-08 19:05:38', '2020', '1', '8', '19:05:38', 'Carlos', 'Corleones', 'carlos@gmail.com', 'newstudent246', '8501305620', '0763199455', 'Hörte 11', 41516, 'Oslo', 'Man', NULL, '1', 'Active', NULL, 5),
(68, '2020-01-08 19:05:46', '2020', '1', '8', '19:05:46', 'Marita', 'Jenssen', 'marita@gmail.com', 'newstudent246', '8501305611', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Kvinna', NULL, '1', 'Active', NULL, 5),
(69, '2020-01-10 11:30:30', '2020', '1', '10', '11:30:30', 'Jose', 'Lopez', 'Joselopez@gmail.com', 'newstudent246', '8501305699', '0763199499', 'Hörte 12', 41516, 'Oslo', 'Man', NULL, '1', 'Active', NULL, 5),
(70, '2020-01-10 11:57:08', '2020', '1', '10', '11:57:08', 'Fernando', 'Fonseca', 'Fernando@gmail.com', 'newstudent246', '8409034157', '0763199420', 'Hörte 11', 41516, 'Oslo', 'Man', NULL, '1', 'Active', NULL, 5),
(72, '2020-01-11 01:35:56', '2020', '1', '11', '01:35:56', 'Rangel', 'Fortunato', 'rangel@gmail.com', 'newstudent246', '8501305611', '0763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Man', NULL, '1', 'Active', NULL, 5),
(73, '2020-01-13 20:39:02', '2020', '1', '13', '20:39:02', 'Adrian', 'Hedström', 'adrian.hedstrom@hotmail.com', 'newstudent246', '8306281513', '0737662430', 'Lilla Tunnlandsgatan 3', 41477, 'Göteborg', 'Man', 'yes', '2', 'Active', NULL, 1000),
(76, '2020-01-16 13:00:27', '2020', '1', '16', '13:00:27', 'Bernardo', 'Benet', 'bernando@gmail.com', 'newstudent246', '8501305699', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Man', NULL, '1', 'Active', NULL, 5),
(77, '2020-01-16 13:02:50', '2020', '1', '16', '13:02:50', 'Santiago', 'Matias', 'Santiago@gmail.com', 'newstudent246', '8501305611', '0737662430', 'Lilla Tunnlandsgatan 3', 41477, 'Göteborg', 'Man', NULL, '1', 'Active', NULL, 5),
(78, '2020-01-16 13:12:51', '2020', '1', '16', '13:12:51', 'Vinsent', 'Carmona', 'vinsent@gmail.com', 'newstudent246', '8501305611', '0737662430', 'Lilla Tunnlandsgatan 3', 41477, 'Göteborg', 'Man', NULL, '1', 'Active', NULL, 5),
(79, '2020-01-16 13:16:57', '2020', '1', '16', '13:16:57', 'Jessica', 'Pereira', 'jessica@gmail.com', 'newstudent246', '8501305620', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Kvinna', NULL, '1', 'Active', NULL, 5),
(80, '2020-01-16 18:04:50', '2020', '1', '16', '18:04:50', 'Sarah', 'Sabine', 'Sarah@gmail.com', 'newstudent246', '8501305622', '0763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, '5', 'Active', NULL, 5),
(81, '2020-01-16 18:17:21', '2020', '1', '16', '18:17:21', 'Angela', 'Garcia', 'angela@gmail.com', 'newstudent246', '8501305699', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Kvinna', 'yes', '5', 'Active', NULL, 1000),
(83, '2020-01-17 16:54:08', '2020', '1', '17', '16:54:08', 'Angelina', 'Prado', 'angelina@gmail.com', 'newstudent246', '8501305611', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Kvinna', 'yes', '4', 'Active', NULL, 1000),
(84, '2020-01-18 12:33:55', '2020', '1', '18', '12:33:55', 'Marita ', 'Jessen', 'marita@gmail.com', 'newstudent246', '8501305611', '0763199411', 'Hörte 11', 41516, 'Oslo', 'Man', 'yes', '1', 'Active', NULL, 1000),
(85, '2020-01-20 00:09:21', '2020', '1', '19', '00:09:21', 'Ruben', 'Gonzalez', 'Ruben@gmail.com', 'newstudent246', '8409034100', '763199400', 'Hörte 19', 41516, 'Oslo', 'None', 'yes', '2', 'Active', NULL, 1000),
(96, '2020-01-31 18:51:15', '2020', '1', '31', '18:51:15', 'Carlos', 'Corleones', 'carlos2@gmail.com', 'newstudent246', '8501305699', '763199455', 'Hörte 11', 41516, 'Oslo', 'Man', 'yes', NULL, 'Active', NULL, 1000),
(98, '2020-01-31 19:04:10', '2020', '1', '31', '19:04:10', 'Sofia', 'Franzen', 'sofiafranzen2@gmail.com', 'newstudent246', '8409034158', '763199420', 'Hörte 11', 41516, 'Oslo', 'Kvinna', 'yes', NULL, 'Active', NULL, 1000),
(103, '2020-02-09 16:13:42', '2020', '2', '9', '16:13:42', 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'newstudent246', '8409034157', '763199480', 'Siriusgatan 102', 41522, 'Göteborg', 'Man', 'yes', NULL, 'Active', NULL, 1000),
(107, '2020-02-18 12:25:48', '2020', '2', '18', '12:25:48', 'Carolina', 'Bustamante', 'carolina@gmail.com', 'newstudent246', '8501305699', '763199499', 'Siriusgatan 106', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Inactive', NULL, 5),
(108, '2020-02-18 12:50:25', '2020', '2', '18', '12:50:25', 'Rosario', 'Bustamante', 'rosario@gmail.com', 'newstudent246', '8501305611', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Active', NULL, 5),
(113, '2020-03-10 13:26:30', '2020', '3', '10', '13:26:30', 'Carola', 'De la Rosa', 'carola@gmail.com', 'newstudent246', '8501305620', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Active', NULL, 5),
(117, '2020-03-13 17:29:55', '2020', '3', '13', '17:29:55', 'Gonzalo', 'Vidal', 'gonzalo@gmail.com', 'newstudent246', '8501305611', '737662430', 'Lilla Tunnlandsgatan 3', 41477, 'Göteborg', 'Man', NULL, NULL, ' Inactive ', NULL, 5),
(118, '2020-03-22 10:55:38', '2020', '3', '22', '10:55:38', 'Wellintong', 'Aquino', 'wellingtong@gmail.com', 'newstudent246', '8501305620', '763199411', 'Hörte 55', 41516, 'Oslo', 'Man', NULL, NULL, ' Active ', NULL, 5),
(119, '2020-03-22 11:19:42', '2020', '3', '22', '11:19:42', 'Richard', 'Melo', 'Richard@gmaIl.com', 'newstudent246', '8501305620', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Man', NULL, NULL, ' Active ', NULL, 5),
(120, '2020-03-22 11:23:47', '2020', '3', '22', '11:23:47', 'Johnny', 'German', 'johnny@gmail.com', 'newstudent246', '8409034158', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Man', NULL, NULL, ' Active ', NULL, 5),
(121, '2020-03-22 14:31:38', '2020', '3', '22', '14:31:38', 'Ylenia', 'Guzman', 'ylenia@gmail.com', 'newstudent246', '8409034158', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, ' Active ', NULL, 5),
(122, '2020-03-23 10:50:05', '2020', '3', '23', '10:50:05', 'Marlenis ', 'Guzman', 'marlenis@gmail.com', 'newstudent246', '8501305611', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, ' Active ', NULL, 5),
(125, '2020-03-23 14:23:05', '2020', '3', '23', '14:23:05', 'Raphael', 'Jimenez', 'rafa@gmail.com', 'newstudent246', '8409034157', '763199411', 'Hörte 11', 41516, 'Oslo', 'Man', 'yes', NULL, 'Inactive', NULL, 1000),
(126, '2020-03-23 14:52:06', '2020', '3', '23', '14:52:06', 'Jonathan', 'Reynoso', 'jonathan@gmail.com', 'newstudent246', '8501305629', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Man', 'yes', NULL, 'Active', NULL, 1000);

-- --------------------------------------------------------

--
-- Tabellstruktur `term`
--

CREATE TABLE `term` (
  `id_term` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) DEFAULT NULL,
  `start_week` varchar(255) DEFAULT NULL,
  `term_start` date DEFAULT NULL,
  `term_stop` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `term`
--

INSERT INTO `term` (`id_term`, `date`, `type`, `term_name`, `start_week`, `term_start`, `term_stop`, `status`) VALUES
(1, '2019-09-05', '1', 'Var Termin', 'Vecka 3', '2020-01-13', '2020-03-13', 0),
(3, '2020-03-19', NULL, 'Sommar Termin', 'Vecka 12', '2020-03-16', '2020-08-08', 0),
(4, '2020-08-20', NULL, 'Höst Termin', 'Vecka 38', '2020-09-14', '2020-12-04', 1);

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
  `telefon` varchar(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `mail`, `password`, `telefon`, `rank`, `status`) VALUES
(1, 'Marie', 'Husby', 'mariehusby@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0736696700', 3, 1),
(2, 'Sofia', 'Franzén', 'sofiaeleonorafranzen@gmail.com', '10ed1697617fe7758b4236d5b791286c', '0763199480', 1, 1),
(3, 'Lessly', 'Awa', 'ayimlessly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 3, 1),
(5, 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 0, 1),
(6, 'Rebbeca', 'Hjärte', 'rebbeca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 2, 2),
(10, 'Shael', 'Knight', 'shael@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 2, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Index för tabell `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_counter`);

--
-- Index för tabell `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`id_collaborators`);

--
-- Index för tabell `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Index för tabell `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Index för tabell `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Index för tabell `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id_insc`);

--
-- Index för tabell `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id_package`);

--
-- Index för tabell `pack_discount`
--
ALTER TABLE `pack_discount`
  ADD PRIMARY KEY (`id_p_discount`);

--
-- Index för tabell `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_page`);

--
-- Index för tabell `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`);

--
-- Index för tabell `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

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
-- Index för tabell `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_term`);

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
-- AUTO_INCREMENT för tabell `cart`
--
ALTER TABLE `cart`
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=782;

--
-- AUTO_INCREMENT för tabell `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `id_collaborators` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT för tabell `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_insc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT för tabell `package`
--
ALTER TABLE `package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `pack_discount`
--
ALTER TABLE `pack_discount`
  MODIFY `id_p_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT för tabell `pages`
--
ALTER TABLE `pages`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT för tabell `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT för tabell `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT för tabell `term`
--
ALTER TABLE `term`
  MODIFY `id_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
