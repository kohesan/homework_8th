-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_homework_php2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(1, 'THE RHETORIC', 'https://www.amazon.co.jp/RHETORIC-%E4%BA%BA%E7%94%9F%E3%81%AE%E6%AD%A6%E5%99%A8%E3%81%A8%E3%81%97%E3%81%A6%E3%81%AE%E4%BC%9D%E3%81%88%E3%82%8B%E6%8A%80%E8%A1%93-Jay-Heinrichs/dp/4591156923/ref=asc_df_4591156923/?tag=jpgo-22&amp;linkCode=df0&amp;hvadid=295639570041&amp;hvpos=&amp;hvnetw=g&amp;hvrand=1034090082492377023&amp;hvpone=&amp;hvptwo=&amp;hvqmt=&amp;hvdev=c&amp;hvdvcmdl=&amp;hvlocint=&amp;hvlocphy=1028853&amp;hvtargid=pla-527065035541&amp;psc=1&amp;th=1&amp;psc=1', '伝える技術大切ですね!!!', '2021-02-20 22:48:42'),
(2, '成功することを決めた―商社マンがスープで広げた共感ビジネス (新潮文庫)', 'https://www.amazon.co.jp/%E6%88%90%E5%8A%9F%E3%81%99%E3%82%8B%E3%81%93%E3%81%A8%E3%82%92%E6%B1%BA%E3%82%81%E3%81%9F%E2%80%95%E5%95%86%E7%A4%BE%E3%83%9E%E3%83%B3%E3%81%8C%E3%82%B9%E3%83%BC%E3%83%97%E3%81%A7%E5%BA%83%E3%81%92%E3%81%9F%E5%85%B1%E6%84%9F%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9-%E6%96%B0%E6%BD%AE%E6%96%87%E5%BA%AB-%E9%81%A0%E5%B1%B1-%E6%AD%A3%E9%81%93/dp/4101348618/ref=sr_1_6?dchild=1&qid=1613802305&s=books&sr=1-6', '起業したくなりますね。', '2021-02-20 15:26:08'),
(3, 'リクルートのすごい構“創”力　アイデアを事業に仕上げる9メソッド', 'https://ebookjapan.yahoo.co.jp/books/409928/?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=general&amp;utm_content=dsa&amp;gclid=Cj0KCQiA4L2BBhCvARIsAO0SBdZdOQ0VNrbmP1ZrIHEK-_USmdaiLc2TtsRCBwUP6JwqEbJGgNJYmOIaAnySEALw_wcB', 'リクルートのすごさが分かります', '2021-02-20 16:09:05'),
(6, '坂の上の雲', 'https://www.amazon.co.jp/%E6%96%B0%E8%A3%85%E7%89%88-%E5%9D%82%E3%81%AE%E4%B8%8A%E3%81%AE%E9%9B%B2-%E6%96%87%E6%98%A5%E6%96%87%E5%BA%AB-%E5%8F%B8%E9%A6%AC-%E9%81%BC%E5%A4%AA%E9%83%8E/dp/4167105764', '地元の誇り。', '2021-02-20 16:04:23'),
(7, 'アフターデジタル', 'https://www.amazon.co.jp/%E3%82%A2%E3%83%95%E3%82%BF%E3%83%BC%E3%83%87%E3%82%B8%E3%82%BF%E3%83%AB-%E3%82%AA%E3%83%95%E3%83%A9%E3%82%A4%E3%83%B3%E3%81%AE%E3%81%AA%E3%81%84%E6%99%82%E4%BB%A3%E3%81%AB%E7%94%9F%E3%81%8D%E6%AE%8B%E3%82%8B-%E8%97%A4%E4%BA%95-%E4%BF%9D%E6%96%87-ebook/dp/B07PHYQ4HW/ref=sr_1_2?adgrpid=71142886531&dchild=1&gclid=Cj0KCQiA4L2BBhCvARIsAO0SBda_xX8z1a1Ue-bMJItLz_5rgklx4S7c0shslJu4fat0-EigKXiNhKwaAtXUEALw_wcB&hvadid=338577085874&hvdev=c&hvlocphy=1028853&hvnetw=g&hvqmt=e&hvrand=12416430555453485153&hvtargid=kwd-657196129631&hydadcr=15818_11177340&jp-ad-ap=0&keywords=%E3%82%A2%E3%83%95%E3%82%BF%E3%83%BC%E3%83%87%E3%82%B8%E3%82%BF%E3%83%AB&qid=1613805052&sr=8-2', 'DXに関わる人は読むべし', '2021-02-20 16:11:30');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
