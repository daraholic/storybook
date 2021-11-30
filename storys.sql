-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021 年 11 月 30 日 15:04
-- 伺服器版本： 10.6.4-MariaDB
-- PHP 版本： 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `story`
--

-- --------------------------------------------------------

--
-- 資料表結構 `storys`
--

CREATE TABLE `storys` (
  `id` int(11) NOT NULL,
  `chinese` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `english` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `storys`
--

INSERT INTO `storys` (`id`, `chinese`, `english`) VALUES
(1, '從前從前，有一位可愛的小紅帽，媽媽派她去探望外婆。', 'Once upon a time, there was a cute little Red Riding Hood, and her mother sent her to visit her grandmother.'),
(2, '前往外婆家的路上，小紅帽在森林裡遇見了一名獵人，獵人稱讚她好可愛。', 'On the way to grandma\'s house, Little Red Riding Hood met a hunter in the forest. The hunter praised her for being cute.'),
(3, '獵人跟小紅帽說，森林有一隻大野狼，要小心大野狼會吃掉妳。', 'The hunter told Little Red Riding Hood that there is a big wild wolf in the forest. Be careful that wolf will eat you.'),
(4, '大野狼無意間來到小紅帽的外婆家，一口吃掉了外婆。', 'The big wild wolf came to Little Red Riding Hood\'s grandmother\'s house and ate her grandmother in one bite.'),
(5, '大野狼吃掉外婆之後，穿外婆的睡衣等小紅帽來。', 'After the big wild wolf eats grandma, he wears grandma\'s pajamas and waits for Little Red Riding Hood to come.'),
(6, '於是小紅帽就被大野狼一口吃掉了。', 'So Little Red Riding Hood was eaten by the big wild wolf in one bite.'),
(7, '獵人來到小紅帽外婆家，發現大野狼肚子鼓鼓的，正呼呼大睡。', 'The hunter came to Little Red Riding Hood\'s grandmother\'s house and found wolf with a bulging belly, and was asleep.'),
(8, '於是獵人就拿刀剪開了大野狼的肚子。', 'So the hunter took a knife and cut open the belly of the wolf.'),
(9, '神奇的事情發生了，大野狼肚子裡的小紅帽跟外婆被救出來了。', 'A magical thing happened, and the little Red Riding Hood and grandmother in the belly of the wolf were rescued.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `storys`
--
ALTER TABLE `storys`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `storys`
--
ALTER TABLE `storys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
