-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:37:22
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
-- 資料表結構 `resume_experience`
--

CREATE TABLE `resume_experience` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `item` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '項目',
  `time` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '時間',
  `content` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
  `type` tinyint(1) NOT NULL COMMENT '1:工作經歷，0:學歷',
  `orderNum` tinyint(5) UNSIGNED NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL COMMENT '顯示(1或0) '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_experience`
--

INSERT INTO `resume_experience` (`id`, `item`, `time`, `content`, `type`, `orderNum`, `sh`) VALUES
(1, '銘傳大學資訊管理學系', '2012~2016', '', 0, 2, 1),
(2, '北分署泰山職訓場', '2020.03~2020.08', 'PHP資料庫網頁設計班', 0, 1, 1),
(3, '前端工程師', '2016~2019', '歡樂購股份有限公司\r\n1.前端程式撰寫\r\n2.資料管理\r\n3.人事指紋建置', 1, 0, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_experience`
--
ALTER TABLE `resume_experience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_experience`
--
ALTER TABLE `resume_experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
