-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2014 at 11:05 AM
-- Server version: 5.5.34-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roddom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `hierarchy` varchar(4) NOT NULL,
  `label` text NOT NULL,
  `src` text NOT NULL,
  `group` int(11) NOT NULL,
  `nextgroup` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `hierarchy`, `label`, `src`, `group`, `nextgroup`) VALUES
(1, '1', 'Главная', '..', 1, 1),
(2, '2', 'Информация об организации', '../page.php?id=2', 1, 1),
(3, '3', 'Родильный дом', '#', 1, 2),
(4, '3.1', 'Приемное отделение', '../page.php?id=3.1', 2, 2),
(5, '3.2', 'Отделение патологии беременности', '../page.php?id=3.2', 2, 2),
(6, '3.3', 'Родовое отделение', '../page.php?id=3.3', 2, 2),
(7, '3.4', 'Послеродовое отделение', '../page.php?id=3.4', 2, 2),
(8, '3.5', 'Отделение анестезиологии-реанимации', '../page.php?id=3.5', 2, 2),
(9, '3.6', 'Отделение для новорожденных детей', '../page.php?id=3.6', 2, 1),
(10, '4', 'Женская консультация №1', '#', 1, 2),
(11, '4.1', 'Общая информация', '../page.php?id=4.1', 2, 2),
(12, '4.2', 'Оказываемые услуги', '../page.php?id=4.2', 2, 2),
(13, '4.3', 'Сотрудники', '../page.php?id=4.3', 2, 2),
(14, '4.4', 'Запись к врачу', '../page.php?id=4.4', 2, 1),
(15, '5', 'Информация пациентам', '../page.php?id=5', 1, 1),
(16, '6', 'Контакты', '../page.php?id=7', 1, 1),
(17, '7', 'Форум', '../forum/index.php', 1, 1),
(18, '8', 'Галерея', '../gallery/', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
