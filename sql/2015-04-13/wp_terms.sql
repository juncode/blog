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
-- 表的结构 `wp_terms`
--

DROP TABLE IF EXISTS `wp_terms`;
CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `name` (`name`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'php学习积累', 'php', 0),
(2, '顶部菜单', '%e9%a1%b6%e9%83%a8%e8%8f%9c%e5%8d%95', 0),
(3, 'PHP编程', 'php%e7%bc%96%e7%a8%8b', 0),
(4, '导航菜单', '%e5%af%bc%e8%88%aa%e8%8f%9c%e5%8d%95', 0),
(5, 'Linux服务器', 'linux', 0),
(6, '数据库', 'dbms', 0),
(7, 'Postgres', 'pg', 0),
(8, 'Mongo', 'mongo', 0),
(9, 'Nginx学习', 'nginx', 0),
(10, 'GIT学习', 'git%e4%bd%bf%e7%94%a8%e8%ae%b0%e5%bd%95', 0),
(11, 'mysql', 'mysql', 0),
(12, 'mysql', 'mysql-dbms', 0),
(13, '主从配置', '%e4%b8%bb%e4%bb%8e%e9%85%8d%e7%bd%ae', 0),
(14, '性能研究', '%e6%80%a7%e8%83%bd%e7%a0%94%e7%a9%b6', 0),
(15, '安天WEB', '%e5%ae%89%e5%a4%a9web', 0),
(16, 'post-format-aside', 'post-format-aside', 0),
(17, 'mongodb', 'mongodb', 0),
(18, 'redis', 'redis', 0),
(19, 'redis计数实现', 'redis%e8%ae%a1%e6%95%b0%e5%ae%9e%e7%8e%b0', 0),
(20, '统计方法', '%e7%bb%9f%e8%ae%a1%e6%96%b9%e6%b3%95', 0),
(21, 'mysql操作', 'mysql%e6%93%8d%e4%bd%9c', 0),
(22, 'redis', 'redis', 0),
(23, 'javascript', 'javascript', 0),
(24, '日期处理', '%e6%97%a5%e6%9c%9f%e5%a4%84%e7%90%86', 0),
(25, 'js实战', 'js%e5%ae%9e%e6%88%98', 0),
(26, 'windows', 'windows', 0),
(27, '环境配置', '%e7%8e%af%e5%a2%83%e9%85%8d%e7%bd%ae', 0),
(28, '安装教程', '%e5%ae%89%e8%a3%85%e6%95%99%e7%a8%8b', 0),
(29, 'yum', 'yum', 0),
(30, 'yum基本介绍', 'yum%e5%9f%ba%e6%9c%ac%e4%bb%8b%e7%bb%8d', 0),
(31, 'CentOS', 'centos', 0),
(32, 'word转swf', 'word%e8%bd%acswf', 0),
(33, '登录方式', '%e7%99%bb%e5%bd%95%e6%96%b9%e5%bc%8f', 0),
(34, 'git gui 操作', 'git-gui-%e6%93%8d%e4%bd%9c', 0),
(35, 'Linux', 'linux', 0),
(36, '服务器管理', '%e6%9c%8d%e5%8a%a1%e5%99%a8%e7%ae%a1%e7%90%86', 0),
(37, 'Docker', 'docker', 0),
(38, '基础概念', '%e5%9f%ba%e7%a1%80%e6%a6%82%e5%bf%b5', 0),
(39, 'git', 'git', 0),
(40, '基本配置', '%e5%9f%ba%e6%9c%ac%e9%85%8d%e7%bd%ae', 0),
(41, 'Postgre', 'postgre', 0),
(42, 'sql数据库操作', 'sql%e6%95%b0%e6%8d%ae%e5%ba%93%e6%93%8d%e4%bd%9c', 0),
(43, '网络管理', '%e7%bd%91%e7%bb%9c%e9%85%8d%e7%bd%ae', 0),
(44, 'WEB架构', 'web%e6%9e%84%e6%9e%b6%e7%a0%94%e7%a9%b6', 0),
(45, '开源框架', 'framework', 0),
(46, '开源项目', 'open-source', 0),
(47, '我的app', 'git%e9%a1%b9%e7%9b%ae', 0),
(48, '工具类使用', '%e5%b7%a5%e5%85%b7%e7%b1%bb%e4%bd%bf%e7%94%a8', 0),
(49, 'rpm', 'rpm', 0);
