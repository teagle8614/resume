-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:38:21
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
-- 資料表結構 `resume_portfolio`
--

CREATE TABLE `resume_portfolio` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `item` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '項目',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
  `link` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結',
  `imgId` tinyint(5) UNSIGNED NOT NULL COMMENT '圖片ID',
  `orderNum` tinyint(5) UNSIGNED NOT NULL COMMENT '排序',
  `sh` tinyint(1) UNSIGNED NOT NULL COMMENT '顯示(1或0) '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_portfolio`
--

INSERT INTO `resume_portfolio` (`id`, `item`, `content`, `link`, `imgId`, `orderNum`, `sh`) VALUES
(1, '小精靈', '主要使用技術: CSS', 'https://codepen.io/teg0452/pen/QWjEMZr', 1, 0, 1),
(2, '萬年曆', '主要使用技術: PHP、CSS', 'http://220.128.133.15/s1090204/hw/calendar/', 2, 0, 1),
(3, '統一發票', '主要使用技術: PHP、CSS', 'http://220.128.133.15/s1090204/hw/invoice/', 3, 0, 1),
(4, '數位時鐘', '主要使用技術: JavaScript、CSS', 'http://220.128.133.15/s1090204/hw/DigitalClock/', 5, 0, 1),
(5, '類比時鐘', '主要使用技術: JavaScript、CSS\r\n使用套件: particles.js、tilt.js', 'http://220.128.133.15/s1090204/hw/AnalogClock/', 6, 0, 1),
(6, '二選一小遊戲', '主要使用技術: JavaScript、jQuery、CSS\r\n使用套件:  sweetalert2.js、typed.js\r\n', 'http://220.128.133.15/s1090204/hw/storyGame/', 7, 0, 1),
(7, '冰品DM', '主要使用技術: PS\r\n', '', 9, 0, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_portfolio`
--
ALTER TABLE `resume_portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
