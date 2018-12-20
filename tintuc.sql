-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 04:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cate`, `label`, `description`, `url`, `date_created`) VALUES
(78, 'Điện thoại', 'Điện thoại là một thiết bị thông minh', 'dien-thoai', '2018-07-11 14:42:04'),
(81, 'Công nghệ mới', '', 'cong-nghe-moi', '2018-07-11 14:43:17'),
(84, 'Bút bi', 'Đây là một trong những cây bút đang được học sinh sử dụng nhiều nhất tại Việt Nam. Bút có thiết kế tối giản, nhưng tinh tế và ấn tượng. Toàn bộ thân bút làm từ nhựa trong, phối hợp hoàn hảo với màu ruột bút bên trong.', 'but-bi-chat-luong', '2018-01-31 14:22:58'),
(85, 'Bạn ơi hãy đến quê hương', 'Bạn ơi, hãy đến thăm quê hương chúng tôi\r\nNgắm mặt biển xanh xa tít chân trời\r\nNghe sóng vỗ dạt dào biển cả\r\nVút phi lao gió thổi trên bờ\r\nBuồm vươn cánh vượt sóng ra ngoài khơi\r\nTrong nắng hồng bừng lên sáng ngời.', 'ban-oi-hay-den-que-huong', '0000-00-00 00:00:00'),
(87, 'Bút thiên long', NULL, 'but-thien-long', '0000-00-00 00:00:00'),
(88, '24 giờ', NULL, '24-gio', '0000-00-00 00:00:00'),
(89, 'Thế giới nhỏ', '', 'the-gioi-to', '0000-00-00 00:00:00'),
(96, 'Thế giới to', NULL, 'the-gioi-to-1151', '0000-00-00 00:00:00'),
(97, 'Sữa ông thọ', NULL, 'sua-ong-tho', '0000-00-00 00:00:00'),
(98, 'Sữa ông thọ 2', NULL, 'sua-ong-tho-2', '0000-00-00 00:00:00'),
(99, 'Sữa ông thọ 3', NULL, 'sua-ong-tho-3', '0000-00-00 00:00:00'),
(100, 'Sữa ông thọ 4', NULL, 'sua-ong-tho-4', '0000-00-00 00:00:00'),
(101, 'Thêm một lần đau', NULL, 'them-mot-lan-dau', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) UNSIGNED NOT NULL,
  `idstatus` int(1) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staticlink` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) UNSIGNED NOT NULL,
  `id_cate` int(11) NOT NULL,
  `datepost` datetime NOT NULL,
  `idtype` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `idstatus`, `title`, `staticlink`, `content`, `keywords`, `iduser`, `id_cate`, `datepost`, `idtype`) VALUES
(53, 2, 'Thảo Bim Bim hello 3', 'thao-bim-bim-hello-3', '\r\n<p>12312v&#39;&#39;&#39;&#39;...,,,,,,,&#39;,&#39;,&#39;,&#39;,&#39;,sddddddsfsdfdddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđ</p>\r\n', '', 1, 85, '2018-12-17 11:26:38', 6),
(58, 2, 'Bạn  hãy đến', 'ban-oi', '<p>Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi v</p>\n', '', 1, 78, '2018-12-17 11:16:39', 2),
(59, 2, 'Thế giới niềm đau', 'the-gioi-niem-dau', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\n', '', 1, 78, '2018-12-17 22:03:42', 2),
(60, 2, 'Thế giới niềm đau 2', 'the-gioi-niem-dau-2', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\n', '', 1, 78, '2018-12-17 22:04:47', 2),
(61, 2, 'Thế giới niềm đau', 'the-gioi-niem-dau-3', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\r\n', '', 1, 78, '2018-12-17 22:03:42', 2),
(62, 2, 'Thảo Bim Bim hello 3', 'thao-bim-bim-hello-3', '\r\n<p>12312v&#39;&#39;&#39;&#39;...,,,,,,,&#39;,&#39;,&#39;,&#39;,&#39;,sddddddsfsdfdddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđvsddddddddddddddddđ</p>\r\n', '', 1, 85, '2018-12-17 11:26:38', 6),
(63, 2, 'Bạn  hãy đến', 'ban-oi', '<p>Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi&nbsp;Bạn ơi v</p>\r\n', '', 1, 78, '2018-12-17 11:16:39', 2),
(64, 2, 'Thế giới niềm đau', 'the-gioi-niem-dau', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\r\n', '', 1, 78, '2018-12-17 22:03:42', 2),
(65, 2, 'Thế giới niềm đau 2', 'the-gioi-niem-dau-2', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\r\n', '', 1, 78, '2018-12-17 22:04:47', 2),
(66, 2, 'Thế giới niềm đau', 'the-gioi-niem-dau-3', '<p>Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;Thế giới niềm đau&nbsp;</p>\r\n', '', 1, 78, '2018-12-17 22:03:42', 2),
(67, 2, 'Bài viết thử thời gian', 'bai-viet-thu-thoi-gian', '<p>Nội dung bài viết</p>\n', '', 1, 78, '2018-12-20 00:40:17', 2),
(68, 2, 'Bài viết thử thời gian 2', 'bai-viet-thu-thoi-gian-2', '<p>Nội dung bài viết</p>\n', '', 1, 78, '2018-12-20 00:45:14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `poststatus`
--

CREATE TABLE `poststatus` (
  `idstatus` int(1) NOT NULL,
  `statusname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poststatus`
--

INSERT INTO `poststatus` (`idstatus`, `statusname`) VALUES
(1, 'Thùng rác'),
(2, 'Công khai'),
(3, 'Chờ xét duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `idtype` int(10) UNSIGNED NOT NULL,
  `typename` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`idtype`, `typename`) VALUES
(1, 'Normal'),
(2, 'Hot News'),
(3, 'List Menu1'),
(4, 'List Menu2'),
(5, 'List Menu3'),
(6, 'Siderbar Left');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) UNSIGNED NOT NULL,
  `idgroup` int(255) NOT NULL,
  `username` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `idgroup`, `username`, `password`, `email`, `fullname`) VALUES
(1, 1, 'admin', '9ae60b6f2bfead9fd4da6466d47351bd', 'thangdangblog@gmail.com', 'Đặng Quốc Thắng'),
(2, 3, 'thangdangblog', '9ae60b6f2bfead9fd4da6466d47351bd', 'thangdangblog', 'Đặng Quốc Thắng');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `idgroup` int(255) NOT NULL,
  `namegroup` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`idgroup`, `namegroup`) VALUES
(1, 'Quản trị viên'),
(2, 'Biên tập'),
(3, 'Khách');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `id_cate` (`id_cate`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idtype` (`idtype`),
  ADD KEY `post_ibfk_1` (`idstatus`);

--
-- Indexes for table `poststatus`
--
ALTER TABLE `poststatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idtype`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idgoup` (`idgroup`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`idgroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `poststatus`
--
ALTER TABLE `poststatus`
  MODIFY `idstatus` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `idtype` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `idgroup` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idstatus`) REFERENCES `poststatus` (`idstatus`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `postcate` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id_cate`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `postuser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `typepost` FOREIGN KEY (`idtype`) REFERENCES `types` (`idtype`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idgroup`) REFERENCES `usergroup` (`idgroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
