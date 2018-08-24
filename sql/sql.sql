-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.34-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных fame_farm
CREATE DATABASE IF NOT EXISTS `fame_farm` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fame_farm`;

-- Дамп структуры для таблица fame_farm.fame
CREATE TABLE IF NOT EXISTS `fame` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fame` int(11) NOT NULL,
  `fame_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы fame_farm.fame: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `fame` DISABLE KEYS */;
INSERT INTO `fame` (`id`, `fame`, `fame_time`) VALUES
	(4, 100000, '2018-08-25 02:23:10'),
	(9, 0, '2018-08-25 02:31:09');
/*!40000 ALTER TABLE `fame` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
