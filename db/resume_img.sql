-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-09 19:00:38
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
-- 資料表結構 `resume_img`
--

CREATE TABLE `resume_img` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片備註',
  `img` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖檔名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_img`
--

INSERT INTO `resume_img` (`id`, `name`, `img`) VALUES
(1, '小精靈', 'pacman.jpg'),
(2, '萬年曆', 'calendar.jpg'),
(3, '統一發票', 'invoice.jpg'),
(4, '大頭照', 'sky-5347490_1920.jpg'),
(5, '數位時鐘', 'DigitalClock.jpg'),
(6, '類比時鐘', 'AnalogClock.jpg'),
(7, '二選一小遊戲', 'storyGame.jpg'),
(8, 'logo', 'logo2.png'),
(9, '冰品DM', 'iceDM.jpg'),
(10, '年曆', 'calendarPS.jpg'),
(11, 'logo設計', 'logo_design.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_img`
--
ALTER TABLE `resume_img`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_img`
--
ALTER TABLE `resume_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
