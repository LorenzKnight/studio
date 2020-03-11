-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 11 mars 2020 kl 22:52
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
(146, 103, 2, 1, 1, '2020-02-10', 162),
(147, 103, 3, 1, 1, '2020-02-10', 162),
(148, 103, 4, 1, 1, '2020-02-10', 162),
(149, 103, 5, 1, 1, '2020-02-10', 162),
(519, 45, 1, 1, 1, '2020-02-11', 163),
(520, 45, 2, 1, 1, '2020-02-13', 163),
(521, 45, 3, 1, 1, '2020-02-13', 163),
(535, 107, 1, 1, 1, '2020-02-18', 174),
(536, 107, 2, 1, 1, '2020-02-18', 174),
(537, 108, 1, 1, 1, '2020-02-18', 175),
(540, 68, 1, 1, 1, '2020-02-18', 185),
(541, 68, 2, 1, 1, '2020-02-18', 185),
(542, 68, 3, 1, 1, '2020-02-18', 185),
(612, 76, 1, 1, 1, '2020-03-03', 187),
(662, 113, 1, 1, 3, '2020-03-10', 195),
(663, 113, 2, 1, 3, '2020-03-10', 195),
(666, 113, 9, 2, 3, '2020-03-10', 195),
(669, 113, 3, 1, 3, '2020-03-10', 195),
(670, 113, 4, 1, 3, '2020-03-10', 195),
(707, 76, 2, 1, 3, '2020-03-11', 187),
(711, 76, 9, 2, 3, '2020-03-11', 187),
(712, 113, 1, 1, 3, '2020-03-11', 251),
(713, 113, 2, 1, 3, '2020-03-11', 251),
(714, 113, 3, 1, 3, '2020-03-11', 251),
(715, 113, 4, 1, 3, '2020-03-11', 251);

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `schedule`, `term`, `teacher`, `category`, `price`, `status`) VALUES
(1, 'Urban kiz 1', '(ons 18.30-19.30)', 3, 'Lessly & Marie', 1, '980', 1),
(2, 'Urban kiz 2', '(ons 19.30-20.30)', 3, 'Lessly & Marie', 1, '980', 1),
(3, 'Urban kiz 3', '(ons 20.30-21.30)', 3, 'Lessly & Marie', 1, '980', 1),
(4, 'Urban kiz 4', '(mån 20.30-21.30)', 3, 'Lorenz & Sofia', 1, '980', 1),
(5, 'Dominikansk bachata 1', '(mån 19.30-20.30)', 3, 'Lorenz & Sofia', 1, '980', 1),
(6, 'Dominikansk bachata 2', '(mån 19.30-20.30)', 3, 'Lorenz & Sofia', 1, '980', 1),
(7, 'Kubansk salsa 1', '(ons 18.30-19.30)', 3, 'Ali', 1, '980', 1),
(8, 'Kubansk salsa 2', '(ons 19.30-20.30)', 3, 'Ali', 1, '980', 1),
(9, 'Balett 1', '(mån 18.00-19.30)', 3, 'Aurica', 2, '1290', 1),
(10, 'Test course', '(mån 18.00-19.30)', 3, 'Test teacher', 2, '1290', 1);

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
(3, '2019-11-21', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2019-11-21', NULL, 1),
(4, '2019-11-23', NULL, 'The night.jpg\r\n', 'The Night', NULL, '2019-11-23', NULL, 1),
(5, '2019-11-28', NULL, 'Yandali Thursday spaicy.jpg', 'Spice Thursdays', NULL, '2019-11-28', NULL, 1);

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
(162, '2020-02-10', '2020', '2', '10', '13:50:51', 103, NULL, 1, '2020-01-13', '2020-03-20', 'Packet VIP PLUS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 2848),
(163, '2020-02-10', '2020', '2', '10', '18:50:45', 45, NULL, 1, '2020-01-13', '2020-03-20', 'Guld Packet', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 2269.5),
(174, '2020-02-18', '2020', '2', '18', '12:25:56', 107, 'Kvinna', 1, '2020-01-13', '2020-03-20', 'Silver Packet', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 1602),
(175, '2020-02-18', '2020', '2', '18', '12:50:45', 108, 'Kvinna', 1, '2020-01-13', '2020-03-20', 'Brons Packet', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 890),
(185, '2020-02-18', '2020', '2', '18', '14:32:30', 68, 'Kvinna', 1, '2020-01-13', '2020-03-20', 'Guld Packet', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 2269.5),
(187, '2020-03-03', '2020', '3', '03', '22:29:00', 76, 'Man', 3, '2020-01-13', '2020-03-20', '0', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 882),
(195, '2020-03-10', '2020', '3', '10', '14:28:13', 113, 'Kvinna', 3, '2020-03-30', '2020-06-01', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1764),
(251, '2020-03-11', '2020', '3', '11', '16:05:30', 113, 'Kvinna', 3, '2020-03-30', '2020-06-01', 'VIP-paket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2744);

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
(1, NULL, NULL, NULL, NULL, NULL, 'Kurser & Workshops', 'Varje termin kan du anmäla dig till kurser och workshops i flera olika dansstilar.   Hos oss hittar du allt från härliga nybörjarkurser till intensiva kurser för mer erfarna dansare.  \r\nAlla är välkomna och hos oss är både kvalité, glädje och gemenskap viktigt!', 'IMG_6231.jpg', 75, '1', 1, 1),
(2, NULL, NULL, NULL, NULL, NULL, 'Helgkurser & Bootcamps', 'Utvalda helger erbjuder vi helgkurser och bootcamps i olika dansstilar med både lokala och internationella lärare.   Lite mer intensiva tillfällen då man lär sig mycket och utvecklas under kort tid samtidigt som man lära känna många andra dansare.', 'IMG_6225.jpg', 115, '1', 2, 1),
(3, NULL, NULL, NULL, NULL, NULL, 'Socialdans', 'På torsdagar bjuder vi in till socialdans, kvällar då vi spelar skön musik och dansgolvet är öppet för både studenter och erfarna dansare.  Avslappnade kvällar med hög kvalité då fokus ligger på gemenskap och glädjen i dansen.  Både till för de som vill öva på nya danssteg och de som bara vill njuta av lite dans mitt i veckan.', 'IMG_6209.jpg', 75, '1', 3, 1),
(4, NULL, NULL, NULL, NULL, NULL, 'Fester & Events', 'Flera gånger varje månad bjuder vi in till fester och andra events. \r\nLite lyxigare tillfällen då vi ofta har DJ:s, dansare från flera olika städer och bjuder på både happenings och överraskningar!\r\n<br><br>\r\n  Alla våra fester är alkohol- och narkotikafria.', 'IMG_6187.jpg', 75, '1', 4, 1);

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
(1, 'YANDALI', 'Ånäsvägen 44-46 (hållplats Ejdergatan)', '416 68', 'Göteborg', 'info@yandali.se', NULL);

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
(107, '2020-02-18 12:25:48', '2020', '2', '18', '12:25:48', 'Carolina', 'Bustamante', 'carolina@gmail.com', 'newstudent246', '8501305699', '763199499', 'Siriusgatan 106', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Active', NULL, 5),
(108, '2020-02-18 12:50:25', '2020', '2', '18', '12:50:25', 'Rosario', 'Bustamante', 'rosario@gmail.com', 'newstudent246', '8501305611', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Active', NULL, 5),
(113, '2020-03-10 13:26:30', '2020', '3', '10', '13:26:30', 'Carola', 'De la Rosa', 'carola@gmail.com', 'newstudent246', '8501305620', '763199499', 'Siriusgatan 102', 41522, 'Göteborg', 'Kvinna', NULL, NULL, 'Active', NULL, 5);

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
(1, '2019-09-05', '1', 'Var Termin', 'Vecka 3', '2020-01-13', '2020-03-20', 0),
(3, '2020-02-26', NULL, 'Sommar Termin', 'Vecka 14', '2020-03-30', '2020-06-01', 1);

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
(1, 'Marie', 'Husby', 'mariehusby@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 707070707, 2, 1),
(2, 'Sofia', 'Franzen', 'sofia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 1, 1),
(3, 'Lessly', 'Awa', 'Lessly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1),
(5, 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 0, 1),
(6, 'Rebbeca', 'Hjärte', 'rebbeca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 3, 2),
(10, 'Shael', 'Knight', 'Shael@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 763199480, 2, 1);

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
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=716;

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
  MODIFY `id_insc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

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
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT för tabell `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT för tabell `term`
--
ALTER TABLE `term`
  MODIFY `id_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
