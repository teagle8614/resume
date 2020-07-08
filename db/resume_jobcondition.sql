-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:37:51
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
-- 資料表結構 `resume_jobcondition`
--

CREATE TABLE `resume_jobcondition` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `item` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '項目',
  `content` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
  `orderNum` tinyint(5) UNSIGNED NOT NULL COMMENT '排序',
  `sh` tinyint(1) UNSIGNED NOT NULL COMMENT '顯示(1或0)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_jobcondition`
--

INSERT INTO `resume_jobcondition` (`id`, `item`, `content`, `orderNum`, `sh`) VALUES
(1, '期望職務', '前端/後端網頁設計人員', 0, 1),
(2, '期望工作地點', '雙北地區', 0, 1),
(3, '期望工作性質', '全職', 0, 1),
(4, '期望薪資', '面議', 0, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_jobcondition`
--
ALTER TABLE `resume_jobcondition`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_jobcondition`
--
ALTER TABLE `resume_jobcondition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
