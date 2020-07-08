-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:37:54
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
-- 資料表結構 `resume_link`
--

CREATE TABLE `resume_link` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `web` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '網頁',
  `link` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結',
  `icon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖示(FontAwesome)',
  `orderNum` tinyint(5) UNSIGNED NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL COMMENT '顯示(1或0) '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_link`
--

INSERT INTO `resume_link` (`id`, `web`, `link`, `icon`, `orderNum`, `sh`) VALUES
(1, '首頁', 'http://220.128.133.15/s1090204/', 'fas fa-home', 0, 1),
(2, 'GitHub', 'https://github.com/teagle8614', 'fab fa-github', 0, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_link`
--
ALTER TABLE `resume_link`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_link`
--
ALTER TABLE `resume_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
