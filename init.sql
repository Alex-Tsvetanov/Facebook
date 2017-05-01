SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

USE `Facebook`;
DROP TABLE IF EXISTS `JobsQuiz`;
CREATE TABLE `JobsQuiz` (`Email` varchar(255) NOT NULL UNIQUE, `Name` TEXT, `Gender` TEXT, `Locale` TEXT, `Result` TEXT);
