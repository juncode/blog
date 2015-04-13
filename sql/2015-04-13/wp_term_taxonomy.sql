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
-- 表的结构 `wp_term_taxonomy`
--

DROP TABLE IF EXISTS `wp_term_taxonomy`;
CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- 转存表中的数据 `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', 'php的知识，在这版块给大家分享和总结。', 0, 4),
(2, 2, 'nav_menu', '', 0, 5),
(3, 3, 'nav_menu', '', 0, 0),
(4, 4, 'nav_menu', '', 0, 14),
(5, 5, 'category', '关于Linux的学习知识，在这里给大家分享。', 0, 7),
(6, 6, 'category', '数据库大分类', 0, 3),
(7, 4, 'category', 'mysql的基础知识学习和分享篇', 6, 0),
(8, 7, 'category', 'postgres知识分享篇', 6, 1),
(9, 8, 'category', '非关系型数据库', 6, 2),
(10, 9, 'category', '', 5, 0),
(11, 10, 'category', '', 5, 2),
(13, 12, 'category', '', 6, 2),
(14, 11, 'post_tag', '', 0, 2),
(15, 13, 'post_tag', '', 0, 1),
(16, 14, 'post_tag', '', 0, 1),
(17, 15, 'link_category', '', 0, 3),
(18, 16, 'post_format', '', 0, 1),
(19, 17, 'post_tag', '', 0, 2),
(20, 18, 'category', '', 5, 1),
(21, 19, 'post_tag', '', 0, 1),
(22, 20, 'post_tag', '', 0, 1),
(23, 21, 'post_tag', '', 0, 1),
(24, 22, 'post_tag', '', 0, 1),
(25, 23, 'post_tag', '', 0, 1),
(26, 24, 'post_tag', '', 0, 1),
(27, 25, 'post_tag', '', 0, 1),
(28, 26, 'post_tag', '', 0, 2),
(29, 27, 'post_tag', '', 0, 1),
(30, 28, 'post_tag', '', 0, 1),
(31, 29, 'post_tag', '', 0, 1),
(32, 30, 'post_tag', '', 0, 1),
(33, 31, 'post_tag', '', 0, 3),
(34, 32, 'post_tag', '', 0, 1),
(35, 33, 'post_tag', '', 0, 1),
(36, 34, 'post_tag', '', 0, 1),
(37, 35, 'post_tag', '', 0, 2),
(38, 36, 'post_tag', '', 0, 1),
(39, 37, 'post_tag', '', 0, 1),
(40, 38, 'post_tag', '', 0, 1),
(41, 39, 'post_tag', '', 0, 1),
(42, 40, 'post_tag', '', 0, 1),
(43, 41, 'post_tag', '', 0, 1),
(44, 42, 'post_tag', '', 0, 1),
(45, 43, 'category', '', 0, 0),
(46, 44, 'category', '构架研究分析', 0, 0),
(47, 45, 'category', '对php一些著名框架的应用', 0, 0),
(48, 46, 'category', 'php著名开源项目的运用', 0, 0),
(49, 47, 'category', '托管在git上的一些个人项目', 0, 0),
(50, 48, 'category', '', 5, 1),
(51, 49, 'post_tag', '', 0, 1);
