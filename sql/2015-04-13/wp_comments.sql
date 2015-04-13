-- phpMyAdmin SQL Dump
-- version 3.3.10.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 10 日 16:57
-- 服务器版本: 5.5.41
-- PHP 版本: 5.4.39-1+deb.sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `uu164057`
--

-- --------------------------------------------------------

--
-- 表的结构 `wp_comments`
--

DROP TABLE IF EXISTS `wp_comments`;
CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(3, 26, 'bgylfmqqm', 'pwcbgie@outlook.com', 'http://www.g4k3k266n41cl2gym4zywn4e3f9181w4s.org/', '61.146.235.122', '2014-12-30 13:18:57', '2014-12-30 05:18:57', '| 天马行空\r\n<a href="http://www.g4k3k266n41cl2gym4zywn4e3f9181w4s.org/" rel="nofollow">abgylfmqqm</a>\r\n[url=http://www.g4k3k266n41cl2gym4zywn4e3f9181w4s.org/]ubgylfmqqm[/url]\r\nbgylfmqqm http://www.g4k3k266n41cl2gym4zywn4e3f9181w4s.org/', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(4, 26, 'hrdhpdvsq', 'bugvbhy@outlook.com', 'http://www.g721dv5h88dl737m71lvz657lik9w6ins.org/', '49.5.7.124', '2014-12-30 13:26:46', '2014-12-30 05:26:46', '| 天马行空\r\n<a href="http://www.g721dv5h88dl737m71lvz657lik9w6ins.org/" rel="nofollow">ahrdhpdvsq</a>\r\nhrdhpdvsq http://www.g721dv5h88dl737m71lvz657lik9w6ins.org/\r\n[url=http://www.g721dv5h88dl737m71lvz657lik9w6ins.org/]uhrdhpdvsq[/url]', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(5, 26, 'hczyjtfiog', 'ntupgcq@outlook.com', 'http://www.g86if0z71l5zl9ia0t2y2hqw3b5753n4s.org/', '114.95.176.243', '2014-12-30 13:27:02', '2014-12-30 05:27:02', '| 天马行空\r\nhczyjtfiog http://www.g86if0z71l5zl9ia0t2y2hqw3b5753n4s.org/\r\n<a href="http://www.g86if0z71l5zl9ia0t2y2hqw3b5753n4s.org/" rel="nofollow">ahczyjtfiog</a>\r\n[url=http://www.g86if0z71l5zl9ia0t2y2hqw3b5753n4s.org/]uhczyjtfiog[/url]', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(6, 26, 'lhglkrdbjv', 'bwhhnwk@outlook.com', 'http://www.gv678tw56572dzb0dz7r0k3p3869cgurs.org/', '113.108.150.211', '2014-12-30 15:33:34', '2014-12-30 07:33:34', '| 天马行空\r\n<a href="http://www.gv678tw56572dzb0dz7r0k3p3869cgurs.org/" rel="nofollow">alhglkrdbjv</a>\r\n[url=http://www.gv678tw56572dzb0dz7r0k3p3869cgurs.org/]ulhglkrdbjv[/url]\r\nlhglkrdbjv http://www.gv678tw56572dzb0dz7r0k3p3869cgurs.org/', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(7, 26, 'eoojsdco', 'nmthkzq@outlook.com', 'http://www.gci1048uhn06i522y557fktoo8b333ivs.org/', '106.56.163.122', '2014-12-30 15:46:22', '2014-12-30 07:46:22', '| 天马行空\r\neoojsdco http://www.gci1048uhn06i522y557fktoo8b333ivs.org/\r\n<a href="http://www.gci1048uhn06i522y557fktoo8b333ivs.org/" rel="nofollow">aeoojsdco</a>\r\n[url=http://www.gci1048uhn06i522y557fktoo8b333ivs.org/]ueoojsdco[/url]', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(8, 26, 'zkpjnwznr', 'etvsahj@outlook.com', 'http://www.glyi2tw2r74t7129rtzas29f0x5x5633s.org/', '1.189.252.83', '2015-01-16 14:43:59', '2015-01-16 06:43:59', '| 天马行空\r\nzkpjnwznr http://www.glyi2tw2r74t7129rtzas29f0x5x5633s.org/\r\n[url=http://www.glyi2tw2r74t7129rtzas29f0x5x5633s.org/]uzkpjnwznr[/url]\r\n<a href="http://www.glyi2tw2r74t7129rtzas29f0x5x5633s.org/" rel="nofollow">azkpjnwznr</a>', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(9, 26, 'ioqileqqv', 'jjkzvqr@outlook.com', 'http://www.g3099tgevk540v212ir37hns2zi0g1y1s.org/', '61.178.78.96', '2015-01-16 14:47:39', '2015-01-16 06:47:39', '| 天马行空\r\n[url=http://www.g3099tgevk540v212ir37hns2zi0g1y1s.org/]uioqileqqv[/url]\r\n<a href="http://www.g3099tgevk540v212ir37hns2zi0g1y1s.org/" rel="nofollow">aioqileqqv</a>\r\nioqileqqv http://www.g3099tgevk540v212ir37hns2zi0g1y1s.org/', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(11, 26, 'imxwkzzzgp', 'ldoeizn@outlook.com', 'http://www.g75byyqpgf1cg86v72m8z6234t4570yrs.org/', '123.81.249.231', '2015-01-29 11:00:49', '2015-01-29 03:00:49', '| 天马行空\r\n<a href="http://www.g75byyqpgf1cg86v72m8z6234t4570yrs.org/" rel="nofollow">aimxwkzzzgp</a>\r\n[url=http://www.g75byyqpgf1cg86v72m8z6234t4570yrs.org/]uimxwkzzzgp[/url]\r\nimxwkzzzgp http://www.g75byyqpgf1cg86v72m8z6234t4570yrs.org/', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(12, 26, 'immqwecvoo', 'whsrjgs@outlook.com', 'http://www.g77152z5x5gcp116yw99ymc71vm5cm3hs.org/', '124.131.239.66', '2015-02-09 16:23:09', '2015-02-09 08:23:09', '| 天马行空\r\n[url=http://www.g77152z5x5gcp116yw99ymc71vm5cm3hs.org/]uimmqwecvoo[/url]\r\nimmqwecvoo http://www.g77152z5x5gcp116yw99ymc71vm5cm3hs.org/\r\n<a href="http://www.g77152z5x5gcp116yw99ymc71vm5cm3hs.org/" rel="nofollow">aimmqwecvoo</a>', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(13, 26, 'wfhgdmpl', 'vmuncfa@outlook.com', 'http://www.g84pg03zq9ovcato270478i286i5hj4xs.org/', '121.42.151.35', '2015-02-28 15:16:57', '2015-02-28 07:16:57', '| 天马行空\r\n[url=http://www.g84pg03zq9ovcato270478i286i5hj4xs.org/]uwfhgdmpl[/url]\r\n<a href="http://www.g84pg03zq9ovcato270478i286i5hj4xs.org/" rel="nofollow">awfhgdmpl</a>\r\nwfhgdmpl http://www.g84pg03zq9ovcato270478i286i5hj4xs.org/', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(14, 26, 'erlbxeeze', 'mounyem@outlook.com', 'http://www.g97eh3m9oul9s439328bchqa9duu2516s.org/', '101.254.137.57', '2015-02-28 16:10:36', '2015-02-28 08:10:36', '| 天马行空\r\n<a href="http://www.g97eh3m9oul9s439328bchqa9duu2516s.org/" rel="nofollow">aerlbxeeze</a>\r\nerlbxeeze http://www.g97eh3m9oul9s439328bchqa9duu2516s.org/\r\n[url=http://www.g97eh3m9oul9s439328bchqa9duu2516s.org/]uerlbxeeze[/url]', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(15, 26, 'bcnmqsgi', 'foqswsb@outlook.com', 'http://www.grldw048fy5ixxj372i74u6099y9v4s7s.org/', '121.42.45.154', '2015-03-03 16:35:58', '2015-03-03 08:35:58', '| 天马行空\r\nbcnmqsgi http://www.grldw048fy5ixxj372i74u6099y9v4s7s.org/\r\n[url=http://www.grldw048fy5ixxj372i74u6099y9v4s7s.org/]ubcnmqsgi[/url]\r\n<a href="http://www.grldw048fy5ixxj372i74u6099y9v4s7s.org/" rel="nofollow">abcnmqsgi</a>', 0, 'spam', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(16, 26, 'vfczypvz', 'pzrckxx@outlook.com', 'http://www.g67b0gx3vx753s05h800dt9g20v4lxjes.org/', '153.222.99.223', '2015-03-26 12:24:23', '2015-03-26 04:24:23', '| 天马行空\r\n[url=http://www.g67b0gx3vx753s05h800dt9g20v4lxjes.org/]uvfczypvz[/url]\r\n<a href="http://www.g67b0gx3vx753s05h800dt9g20v4lxjes.org/" rel="nofollow">avfczypvz</a>\r\nvfczypvz http://www.g67b0gx3vx753s05h800dt9g20v4lxjes.org/', 0, 'trash', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)', '', 0, 0),
(17, 26, '&#12496;&#12540;&#12496;&#12522;&#12540;&#032;&#12496;&#12483;&#12464;', 'pospdkgu@gmail.com', 'http://ameblo.jp/mattlogary/entry-11976934082.html', '192.187.126.139', '2015-03-27 13:14:42', '2015-03-27 05:14:42', '| 天马行空', 0, 'trash', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727 ; .NET CLR 4.0.30319)', '', 0, 0),
(18, 26, '銉炪偆銈便儷銈炽兗銈?鏃ユ湰', 'zmbrjsfav@gmail.com', 'http://decorvis.com.br/produtos/marmores/cetit-73382.html', '23.244.42.163', '2015-03-29 09:37:28', '2015-03-29 01:37:28', 'コンディションランク表 N 新品 全く使用しておらず、タグ付きのものや箱モノであれば 未開封などの付属品が完備されているもの。\r\n銉炪偆銈便儷銈炽兗銈?鏃ユ湰 http://decorvis.com.br/produtos/marmores/cetit-73382.html', 0, 'trash', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', '', 0, 0),
(19, 26, '銈汇偆銈炽兗 銈偣銉堛儹銉?gps', 'zmbrjsfav@gmail.com', 'http://www.labnet.com.br/temp/header/%e3%82%bb%e3%82%a4%e3%82%b3%e3%83%bc-%e3%82%a2%e3%82%b9%e3%83%88%e3%83%ad%e3%83%b3-gps-1817.asp', '23.244.42.163', '2015-03-31 15:03:45', '2015-03-31 07:03:45', 'タイプ   アッパー全域にメッシュ地を使用する事で抜群の排水性と速乾性を発揮。\r\n銈汇偆銈炽兗 銈偣銉堛儹銉?gps http://www.labnet.com.br/temp/header/%e3%82%bb%e3%82%a4%e3%82%b3%e3%83%bc-%e3%82%a2%e3%82%b9%e3%83%88%e3%83%ad%e3%83%b3-gps-1817.asp', 0, 'trash', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)', '', 0, 0);
