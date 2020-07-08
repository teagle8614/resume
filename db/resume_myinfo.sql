-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:38:17
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
-- 資料表結構 `resume_myinfo`
--

CREATE TABLE `resume_myinfo` (
  `id` int(5) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `engName` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文姓名',
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電話',
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '信箱',
  `birth` date NOT NULL COMMENT '生日',
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '居住縣市',
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡介',
  `imgId` tinyint(5) UNSIGNED NOT NULL COMMENT '圖片ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_myinfo`
--

INSERT INTO `resume_myinfo` (`id`, `name`, `engName`, `phone`, `email`, `birth`, `city`, `info`, `imgId`) VALUES
(1, '何思逸', 'HE SIH-YI', '0983735333', 'sunnightperpetual@gmail.com', '1994-04-22', '新北市', '原先以為自己與程式設計無緣，但在大學第一次接觸到相關課程，讓我與程式有認識的契機。雖然初次面對時，確實因為無法理解而懊惱了許久，但是隨著接觸的越多，發現自己對於寫程式產生了興趣。在學校內所接觸到的程式並不算多，所以便自學較有興趣的HTML與CSS，也慢慢接觸到了更多前端程式語言，也因為前一份工作的緣故，讓我想接觸偏向後端的程式技術，所以參加了職訓課程。現在的我除了前端程式外，對後端程式也有一定的了解，目前可以用自己的手撰寫出一整個程式，讓我覺得很有成就感!\r\n目前在朝全端工程師的方向努力中。', 8);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_myinfo`
--
ALTER TABLE `resume_myinfo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_myinfo`
--
ALTER TABLE `resume_myinfo`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
