-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:38:37
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume_skill`
--

CREATE TABLE `resume_skill` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `skill` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能',
  `percent` int(3) UNSIGNED NOT NULL COMMENT '百分比',
  `parent` int(5) UNSIGNED NOT NULL COMMENT '父元素',
  `orderNum` tinyint(5) UNSIGNED NOT NULL COMMENT '排序',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '0:種類，1:項目',
  `sh` tinyint(1) UNSIGNED NOT NULL COMMENT '顯示(1或0)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_skill`
--

INSERT INTO `resume_skill` (`id`, `skill`, `percent`, `parent`, `orderNum`, `type`, `sh`) VALUES
(1, '程式技能', 0, 0, 0, 0, 1),
(2, '平面設計技能', 0, 0, 0, 0, 1),
(3, 'HTML', 85, 1, 0, 1, 1),
(4, 'CSS', 85, 1, 0, 1, 1),
(5, 'JAVASCRIPT', 70, 1, 0, 1, 1),
(6, 'JQUERY', 75, 1, 0, 1, 1),
(7, 'PHOTOSHOP', 70, 2, 0, 1, 1),
(8, 'ILLUSTRATOR', 70, 2, 0, 1, 1),
(9, 'PHP', 80, 1, 0, 1, 1),
(10, 'MYSQL', 70, 1, 0, 1, 1),
(11, 'AJAX', 60, 1, 0, 1, 1),
(12, 'SASS', 75, 1, 0, 1, 1),
(13, '網頁丙級證照', 100, 1, 0, 1, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_skill`
--
ALTER TABLE `resume_skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_skill`
--
ALTER TABLE `resume_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
