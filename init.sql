SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE `JobsQuiz` IF EXISTS;
CREATE TABLE `JobsQuiz` (`Email`, `Name`, `Gender`, `Locale`);
