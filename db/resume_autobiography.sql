-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 18:37:18
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
-- 資料表結構 `resume_autobiography`
--

CREATE TABLE `resume_autobiography` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `content` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
  `note` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '備註',
  `sh` tinyint(1) NOT NULL COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_autobiography`
--

INSERT INTO `resume_autobiography` (`id`, `content`, `note`, `sh`) VALUES
(1, '一、個人特質與興趣\r\n本身個性上較為文靜內斂，對自己的要求較高、責任感強、有耐心、細心，雖然與人之間的互動較不主動，但對他人有同理心也較有包容心，而在某些事情上則較有原則，在不觸及底線的狀況下算很好相處的人。從小就對藝術創作較感興趣，尤其是在繪圖的方面，雖然這部分還不算有很大的成就，但親手創造出作品的過程與成果，令人感到著迷且有所成就感，這大概就是它們如此吸引我的原因吧？\r\n\r\n二、求學歷程\r\n我畢業於銘傳大學資訊管理學系，所謂資訊管理就是包含「資訊」與「管理」兩大層面，在學期間發現自己對於資訊方面較有興趣，便讓自己多選修有關程式相關的課程。最初其實並不太能適應，畢竟大學才第一次接觸到程式設計，對程式這個領域感到未知與恐懼，但經過一段時間，發現自己漸漸的能得心應手，從一開始的發問者變成指導同學的教導者，而在接觸過更多程式課程後，發現我對程式方面是感到興趣的，或許是如同我喜歡繪圖一樣，撰寫程式有著「創造」的可能性。\r\n而會接觸到前端程式的契機，則是因為大三大四專題的緣故，學校的課程並沒有相關的課程，但是專研所選的主題需要HTML、CSS與jQuery Mobile等相關的技術，便和其他成員們開始自學起這些程式語言，也是因為這個機會讓我發現它們的樂趣所在，便在畢業後朝著這方面更加深入的研究，但能夠較熟練的撰寫前端語言，也是有幸在第一家公司中慢慢積累磨練而來的。\r\n\r\n三、工作經歷\r\n目前已有三年的程式相關工作經歷，主要工作內容為前端程式的撰寫，已有撰寫幾個網站的經驗，不管是網頁版、手機版甚至是RWD皆有經手過，後續則因公司的需求有稍微的接觸到了ajax與ajson的技術，但是了解的並不深入透徹。而在前份工作除了撰寫程式外，也許是因為人格特質的緣故，有再被派予管理資料以及人員指紋的建置的工作。\r\n\r\n四、未來展望\r\n由於前一份工作的緣故，讓我想接觸偏向後端的程式技術，加上覺得自己學的並不充足，便報名參加了泰山訓練場的PHP資料庫網頁設計的課程，期間確實讓我學到不少未真正接觸過的後端程式語言，在前端方面也有更深入的了解。雖然尚未完全的熟悉，但目前已經可以獨自撰寫出前後端具備的程式，不需要依靠他人協助處理資料的部分，這對我來說是很大的成長。因此希望未來能夠從事前端工程師，甚至是未接觸過的後端工程師的工作!', '自傳1', 1),
(2, 'testetestestestests', '測試', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_autobiography`
--
ALTER TABLE `resume_autobiography`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_autobiography`
--
ALTER TABLE `resume_autobiography`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
