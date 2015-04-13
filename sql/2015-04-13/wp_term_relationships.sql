-- phpMyAdmin SQL Dump
-- version 3.3.10.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 10 日 17:00
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
-- 表的结构 `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 17, 0),
(2, 17, 0),
(3, 17, 0),
(9, 4, 0),
(10, 4, 0),
(11, 4, 0),
(12, 4, 0),
(13, 4, 0),
(15, 4, 0),
(16, 2, 0),
(17, 2, 0),
(18, 2, 0),
(23, 11, 0),
(23, 41, 0),
(23, 42, 0),
(27, 4, 0),
(28, 2, 0),
(31, 1, 0),
(31, 39, 0),
(31, 40, 0),
(35, 13, 0),
(35, 14, 0),
(35, 15, 0),
(35, 16, 0),
(48, 2, 0),
(49, 4, 0),
(56, 1, 0),
(56, 28, 0),
(56, 29, 0),
(59, 1, 0),
(59, 5, 0),
(59, 37, 0),
(59, 38, 0),
(64, 1, 0),
(64, 25, 0),
(64, 26, 0),
(64, 27, 0),
(67, 5, 0),
(67, 11, 0),
(67, 28, 0),
(67, 36, 0),
(70, 5, 0),
(70, 33, 0),
(70, 35, 0),
(72, 5, 0),
(72, 33, 0),
(72, 34, 0),
(81, 5, 0),
(81, 18, 0),
(81, 31, 0),
(81, 32, 0),
(86, 4, 0),
(87, 9, 0),
(87, 19, 0),
(87, 30, 0),
(95, 6, 0),
(95, 9, 0),
(95, 19, 0),
(99, 6, 0),
(99, 13, 0),
(99, 14, 0),
(99, 22, 0),
(99, 23, 0),
(101, 20, 0),
(101, 21, 0),
(101, 24, 0),
(108, 6, 0),
(108, 8, 0),
(108, 43, 0),
(108, 44, 0),
(110, 4, 0),
(111, 4, 0),
(112, 4, 0),
(113, 4, 0),
(114, 4, 0),
(115, 5, 0),
(117, 5, 0),
(117, 33, 0),
(117, 37, 0),
(117, 50, 0),
(117, 51, 0),
(123, 1, 0),
(125, 1, 0);
