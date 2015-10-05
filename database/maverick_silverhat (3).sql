-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 10:06 AM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maverick_silverhat`
--
CREATE DATABASE IF NOT EXISTS `maverick_silverhat` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `maverick_silverhat`;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_forum_posts`
--

DROP TABLE IF EXISTS `discussion_forum_posts`;
CREATE TABLE IF NOT EXISTS `discussion_forum_posts` (
  `mom_sub_forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_message` text COLLATE utf8_unicode_ci NOT NULL,
  `post_tags` text COLLATE utf8_unicode_ci NOT NULL,
  `post_trackback` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `FK_forum_threads` (`user_id`),
  KEY `FK_forums_threads` (`mom_sub_forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_forum_replies`
--

DROP TABLE IF EXISTS `discussion_forum_replies`;
CREATE TABLE IF NOT EXISTS `discussion_forum_replies` (
  `threadd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thread_reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reply_message` text COLLATE utf8_unicode_ci NOT NULL,
  `reply_tags` text COLLATE utf8_unicode_ci NOT NULL,
  `reply_trackback` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `reply_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reply_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `discussion_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`thread_reply_id`),
  KEY `FK_forum_threads` (`user_id`),
  KEY `FK_forums_threads` (`threadd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `discussion_forum_replies`
--

INSERT INTO `discussion_forum_replies` (`threadd_id`, `user_id`, `thread_reply_id`, `reply_name`, `reply_message`, `reply_tags`, `reply_trackback`, `createdAt`, `updatedAt`, `isActive`, `reply_image`, `reply_type`, `discussion_forum_id`) VALUES
(1, 55, 1, 'nice game', 'nice game', '', '', '2015-08-31', '2015-08-31', 'no', '', 'quote', 2),
(2, 55, 2, 'PS4', 'PS4', '', '', '2015-08-31', '2015-08-31', 'no', '', 'quote', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discussion_forum_threads`
--

DROP TABLE IF EXISTS `discussion_forum_threads`;
CREATE TABLE IF NOT EXISTS `discussion_forum_threads` (
  `discussion_forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thread_message` text COLLATE utf8_unicode_ci NOT NULL,
  `thread_tags` text COLLATE utf8_unicode_ci NOT NULL,
  `thread_trackback` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `isStrict` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `thread_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thread_seo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`thread_id`),
  KEY `FK_forum_threads` (`user_id`),
  KEY `FK_forums_threads` (`discussion_forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `discussion_forum_threads`
--

INSERT INTO `discussion_forum_threads` (`discussion_forum_id`, `user_id`, `thread_id`, `thread_name`, `thread_message`, `thread_tags`, `thread_trackback`, `createdAt`, `updatedAt`, `isActive`, `isStrict`, `thread_image`, `thread_seo`) VALUES
(2, 39, 1, 'purgatory maze ', 'So i''m stuck on the very annoying lvl 27 of purgatory maze and cannot for the life of me figure out how to get skills off before getting stunned which is every 5 seconds. ', '', '', '2015-08-11', '2015-08-11', 'no', 'no', '', 'purgatory-maze'),
(1, 24, 2, 'Xbox Vs. PS4 Vs. PC Gaming', 'I have been saving money to buy a gaming console for myself but there is just too much confusion. Please tell me which console should I go for?  ', '', '', '2015-08-11', '2015-08-11', 'no', 'no', '', 'xbox-vs.-ps4-vs.-pc-gaming');

-- --------------------------------------------------------

--
-- Table structure for table `easypaisa_payment`
--

DROP TABLE IF EXISTS `easypaisa_payment`;
CREATE TABLE IF NOT EXISTS `easypaisa_payment` (
  `payment_id` int(22) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `game_discussion_forum`
--

DROP TABLE IF EXISTS `game_discussion_forum`;
CREATE TABLE IF NOT EXISTS `game_discussion_forum` (
  `discussion_forum_id` int(22) NOT NULL AUTO_INCREMENT,
  `discussion_forum_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `isStrict` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `discussion_forum_seo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `forum_description` text COLLATE utf8_unicode_ci NOT NULL,
  `discussion_simlies` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`discussion_forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `game_discussion_forum`
--

INSERT INTO `game_discussion_forum` (`discussion_forum_id`, `discussion_forum_title`, `isActive`, `isStrict`, `createdAt`, `updatedAt`, `discussion_forum_seo`, `forum_description`, `discussion_simlies`) VALUES
(1, 'Introduce Yourself', 'yes', 'yes', '2015-08-10', '2015-08-10', 'general-gaming', 'New to MaverickGame? Introduce yourself to the community', 'joystick.png'),
(2, 'Member Submissions', 'yes', 'yes', '2015-08-10', '2015-08-10', 'online-tournaments-competitions', 'Submit your fanart, game concepts, views and reviews', 'trophy.png');

-- --------------------------------------------------------

--
-- Table structure for table `game_scores`
--

DROP TABLE IF EXISTS `game_scores`;
CREATE TABLE IF NOT EXISTS `game_scores` (
  `game_id` int(22) NOT NULL,
  `user_id` int(22) NOT NULL,
  `score_id` int(22) NOT NULL AUTO_INCREMENT,
  `game_score` bigint(44) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updateAt` datetime NOT NULL,
  `isgarbeg` varchar(3) NOT NULL,
  PRIMARY KEY (`score_id`),
  KEY `FK_game_scores` (`user_id`),
  KEY `FK_game_scoresaa` (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `game_scores`
--

INSERT INTO `game_scores` (`game_id`, `user_id`, `score_id`, `game_score`, `createdAt`, `updateAt`, `isgarbeg`) VALUES
(2, 92, 8, 22405, '2015-09-30 08:44:56', '2015-09-30 08:44:56', 'no'),
(3, 114, 11, 67, '2015-10-01 01:26:04', '2015-10-01 01:26:04', 'no'),
(2, 89, 13, 8830, '2015-10-01 01:41:48', '2015-10-01 01:41:48', 'no'),
(2, 55, 14, 8714, '2015-10-01 01:42:43', '2015-10-01 01:42:43', 'no'),
(2, 114, 15, 6533, '2015-10-01 01:50:38', '2015-10-01 01:50:38', 'no'),
(1, 89, 16, 8400, '2015-10-01 01:51:44', '2015-10-01 01:51:44', 'no'),
(1, 55, 17, 10500, '2015-10-01 01:54:40', '2015-10-01 01:54:40', 'no'),
(3, 55, 18, 120, '2015-10-01 02:06:10', '2015-10-01 02:06:10', 'no'),
(1, 92, 26, 200400, '2015-10-01 04:28:26', '2015-10-01 04:28:26', 'no'),
(1, 34, 27, 64000, '2015-10-01 04:43:33', '2015-10-01 04:43:33', 'no'),
(1, 111, 31, 21000, '2015-10-01 10:27:45', '2015-10-01 10:27:45', 'no'),
(1, 136, 32, 4600, '2015-10-01 10:44:15', '2015-10-01 10:44:15', 'no'),
(1, 124, 34, 1000, '2015-10-01 10:50:11', '2015-10-01 10:50:11', 'no'),
(2, 111, 35, 16670, '2015-10-01 10:56:12', '2015-10-01 10:56:12', 'no'),
(4, 124, 36, 680, '2015-10-01 11:20:21', '2015-10-01 11:20:21', 'no'),
(1, 137, 37, 10500, '2015-10-02 02:04:54', '2015-10-02 02:04:54', 'no'),
(2, 137, 38, 3446, '2015-10-02 02:27:10', '2015-10-02 02:27:10', 'no'),
(1, 114, 41, 47600, '2015-10-02 04:09:09', '2015-10-02 04:09:09', 'no'),
(2, 34, 42, 14, '2015-10-02 04:13:55', '2015-10-02 04:13:55', 'yes'),
(1, 143, 43, 1200, '2015-10-02 04:15:15', '2015-10-02 04:15:15', 'no'),
(3, 89, 44, 80, '2015-10-02 05:53:31', '2015-10-02 05:53:31', 'no'),
(2, 145, 45, 90, '2015-10-02 06:01:32', '2015-10-02 06:01:32', 'no'),
(2, 34, 46, 7798, '2015-10-02 06:36:29', '2015-10-02 06:36:29', 'yes'),
(3, 56, 48, 29, '2015-10-02 07:17:23', '2015-10-02 07:17:23', 'no'),
(2, 56, 49, 0, '2015-10-02 07:27:27', '2015-10-02 07:27:27', 'no'),
(2, 34, 50, 6168, '2015-10-02 07:30:35', '2015-10-02 07:30:35', 'yes'),
(2, 34, 51, 1080, '2015-10-02 07:33:07', '2015-10-02 07:33:07', 'yes'),
(3, 79, 52, 4, '2015-10-02 07:55:06', '2015-10-02 07:55:06', 'no'),
(2, 34, 53, -3, '2015-10-02 08:02:23', '2015-10-02 08:02:23', 'yes'),
(2, 34, 54, -5, '2015-10-02 08:04:34', '2015-10-02 08:04:34', 'yes'),
(2, 34, 55, 12900, '2015-10-02 08:20:11', '2015-10-02 08:20:11', 'yes'),
(1, 56, 56, 4500, '2015-10-02 08:47:04', '2015-10-02 08:47:04', 'no'),
(4, 136, 57, 430, '2015-10-02 08:49:58', '2015-10-02 08:49:58', 'no'),
(2, 34, 58, -40, '2015-10-02 08:51:55', '2015-10-02 08:51:55', 'yes'),
(2, 34, 59, 5000, '2015-10-02 08:57:56', '2015-10-02 08:57:56', 'yes'),
(2, 34, 60, -40, '2015-10-02 09:01:36', '2015-10-02 09:01:36', 'yes'),
(2, 34, 61, -40, '2015-10-02 09:03:31', '2015-10-02 09:03:31', 'yes'),
(2, 34, 62, -5, '2015-10-02 09:05:54', '2015-10-02 09:05:54', 'yes'),
(2, 34, 63, -40, '2015-10-02 09:07:48', '2015-10-02 09:07:48', 'yes'),
(2, 34, 64, -40, '2015-10-02 09:10:33', '2015-10-02 09:10:33', 'yes'),
(2, 136, 65, 4697, '2015-10-02 09:10:52', '2015-10-02 09:10:52', 'no'),
(2, 34, 66, -40, '2015-10-02 09:13:25', '2015-10-02 09:13:25', 'yes'),
(2, 34, 67, -40, '2015-10-02 09:14:43', '2015-10-02 09:14:43', 'yes'),
(2, 34, 68, -37, '2015-10-02 09:21:21', '2015-10-02 09:21:21', 'yes'),
(2, 34, 69, 67, '2015-10-02 09:31:18', '2015-10-02 09:31:18', 'yes'),
(2, 34, 70, 1600, '2015-10-02 09:33:17', '2015-10-02 09:33:17', 'yes'),
(2, 34, 71, 3000, '2015-10-02 09:34:29', '2015-10-02 09:34:29', 'yes'),
(2, 34, 72, 135, '2015-10-02 09:35:45', '2015-10-02 09:35:45', 'yes'),
(2, 34, 73, 237, '2015-10-02 09:38:40', '2015-10-02 09:38:40', 'yes'),
(2, 34, 74, 210, '2015-10-02 09:42:22', '2015-10-02 09:42:22', 'yes'),
(4, 92, 75, 1470, '2015-10-02 09:57:32', '2015-10-02 09:57:32', 'no'),
(2, 34, 76, 2800, '2015-10-02 10:14:45', '2015-10-02 10:14:45', 'yes'),
(2, 34, 77, 400, '2015-10-02 10:17:39', '2015-10-02 10:17:39', 'yes'),
(2, 34, 78, 12600, '2015-10-02 10:22:49', '2015-10-02 10:22:49', 'yes'),
(2, 34, 79, 139, '2015-10-02 10:27:30', '2015-10-02 10:27:30', 'yes'),
(2, 34, 80, 5400, '2015-10-02 10:29:56', '2015-10-02 10:29:56', 'yes'),
(2, 34, 81, 221, '2015-10-02 10:30:46', '2015-10-02 10:30:46', 'yes'),
(2, 34, 82, 221, '2015-10-02 10:31:11', '2015-10-02 10:31:11', 'yes'),
(2, 34, 83, 8800, '2015-10-02 10:33:02', '2015-10-02 10:33:02', 'yes'),
(2, 34, 84, 12600, '2015-10-02 10:35:12', '2015-10-02 10:35:12', 'yes'),
(2, 34, 85, 19500, '2015-10-02 10:37:20', '2015-10-02 10:37:20', 'yes'),
(2, 34, 86, 5400, '2015-10-02 10:41:43', '2015-10-02 10:41:43', 'yes'),
(2, 34, 87, 11, '2015-10-02 10:42:28', '2015-10-02 10:42:28', 'yes'),
(2, 34, 88, 1000, '2015-10-02 10:42:30', '2015-10-02 10:42:30', 'yes'),
(2, 34, 89, 5700, '2015-10-02 10:43:55', '2015-10-02 10:43:55', 'yes'),
(2, 34, 90, 7800, '2015-10-02 10:45:15', '2015-10-02 10:45:15', 'yes'),
(2, 34, 91, 143, '2015-10-02 10:46:02', '2015-10-02 10:46:02', 'yes'),
(2, 34, 92, 12600, '2015-10-02 11:24:50', '2015-10-02 11:24:50', 'yes'),
(2, 34, 93, 10200, '2015-10-02 11:26:34', '2015-10-02 11:26:34', 'yes'),
(2, 34, 94, 12000, '2015-10-02 11:29:20', '2015-10-02 11:29:20', 'yes'),
(2, 124, 95, 0, '2015-10-02 11:35:19', '2015-10-02 11:35:19', 'no'),
(2, 34, 96, 15000, '2015-10-02 11:35:44', '2015-10-02 11:35:44', 'yes'),
(2, 34, 97, 200, '2015-10-02 12:07:17', '2015-10-02 12:07:17', 'yes'),
(2, 34, 98, 2100, '2015-10-02 12:09:15', '2015-10-02 12:09:15', 'yes'),
(2, 34, 99, 1600, '2015-10-02 12:12:35', '2015-10-02 12:12:35', 'yes'),
(2, 34, 100, 1200, '2015-10-02 12:23:03', '2015-10-02 12:23:03', 'yes'),
(2, 34, 101, 19200, '2015-10-02 13:49:27', '2015-10-02 13:49:27', 'yes'),
(2, 34, 102, 0, '2015-10-02 17:08:12', '2015-10-02 17:08:12', 'yes'),
(2, 34, 103, 0, '2015-10-02 17:41:19', '2015-10-02 17:41:19', 'yes'),
(2, 34, 104, 0, '2015-10-02 17:44:12', '2015-10-02 17:44:12', 'yes'),
(2, 34, 105, 2100, '2015-10-02 17:48:33', '2015-10-02 17:48:33', 'yes'),
(2, 34, 106, 0, '2015-10-02 17:51:30', '2015-10-02 17:51:30', 'yes'),
(2, 34, 107, 0, '2015-10-02 17:57:54', '2015-10-02 17:57:54', 'yes'),
(2, 34, 108, 54800, '2015-10-02 18:22:47', '2015-10-02 18:22:47', 'yes'),
(2, 34, 109, 1452, '2015-10-02 18:41:23', '2015-10-02 18:41:23', 'yes'),
(2, 34, 110, 14, '2015-10-02 19:53:42', '2015-10-02 19:53:42', 'yes'),
(4, 114, 111, 500, '2015-10-03 01:53:58', '2015-10-03 01:53:58', 'no'),
(1, 4, 112, 25200, '2015-10-03 03:49:17', '2015-10-03 03:49:17', 'no'),
(2, 4, 113, 17086, '2015-10-03 03:56:10', '2015-10-03 03:56:10', 'no'),
(2, 147, 114, 20197, '2015-10-03 07:15:04', '2015-10-03 07:15:04', 'no'),
(1, 147, 115, 13500, '2015-10-03 07:23:15', '2015-10-03 07:23:15', 'no'),
(4, 147, 116, 60, '2015-10-03 08:09:15', '2015-10-03 08:09:15', 'no'),
(2, 80, 117, 12114, '2015-10-03 10:35:46', '2015-10-03 10:35:46', 'no'),
(5, 92, 118, 0, '2015-10-03 13:43:58', '2015-10-03 13:43:58', 'no'),
(5, 125, 119, 500, '2015-10-03 13:43:58', '2015-10-03 13:43:58', 'no'),
(4, 125, 120, 240, '2015-10-03 13:53:11', '2015-10-03 13:53:11', 'no'),
(2, 34, 121, 400, '2015-10-04 09:03:53', '2015-10-04 09:03:53', 'yes'),
(2, 34, 122, -17, '2015-10-04 10:09:03', '2015-10-04 10:09:03', 'yes'),
(2, 34, 123, 12, '2015-10-04 10:18:40', '2015-10-04 10:18:40', 'yes'),
(2, 34, 124, 11, '2015-10-04 10:19:50', '2015-10-04 10:19:50', 'yes'),
(2, 34, 125, 60, '2015-10-04 10:24:07', '2015-10-04 10:24:07', 'yes'),
(2, 34, 126, 140, '2015-10-04 10:26:02', '2015-10-04 10:26:02', 'yes'),
(2, 34, 127, 130, '2015-10-04 10:27:52', '2015-10-04 10:27:52', 'yes'),
(2, 34, 128, 140, '2015-10-04 10:29:32', '2015-10-04 10:29:32', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `game_score_leaderboard`
--

DROP TABLE IF EXISTS `game_score_leaderboard`;
CREATE TABLE IF NOT EXISTS `game_score_leaderboard` (
  `user_id` int(22) NOT NULL,
  `leader_board_id` int(22) NOT NULL AUTO_INCREMENT,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `leader_board_score` int(22) NOT NULL,
  PRIMARY KEY (`leader_board_id`),
  KEY `FK_game_score_leaderboard` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `game_score_leaderboard`
--

INSERT INTO `game_score_leaderboard` (`user_id`, `leader_board_id`, `createdAt`, `updatedAt`, `leader_board_score`) VALUES
(92, 1, '2015-09-30', '2015-10-04', 910705),
(4, 2, '2015-09-30', '2015-10-04', 710053),
(114, 3, '2015-09-30', '2015-10-03', 348292),
(89, 4, '2015-10-01', '2015-10-02', 69708),
(55, 5, '2015-10-01', '2015-10-02', 78387),
(34, 6, '2015-10-01', '2015-10-04', 77300),
(124, 7, '2015-10-01', '2015-10-02', 11587),
(111, 8, '2015-10-01', '2015-10-03', 307384),
(136, 9, '2015-10-01', '2015-10-02', 22255),
(137, 10, '2015-10-02', '2015-10-02', 51172),
(143, 11, '2015-10-02', '2015-10-02', 1200),
(145, 12, '2015-10-02', '2015-10-02', 90),
(56, 13, '2015-10-02', '2015-10-02', 7929),
(79, 14, '2015-10-02', '2015-10-02', 4),
(147, 15, '2015-10-03', '2015-10-03', 66548),
(80, 16, '2015-10-03', '2015-10-03', 48909),
(125, 17, '2015-10-03', '2015-10-03', 870);

-- --------------------------------------------------------

--
-- Table structure for table `glogin_users`
--

DROP TABLE IF EXISTS `glogin_users`;
CREATE TABLE IF NOT EXISTS `glogin_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `updatedAt` date NOT NULL,
  `activation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `verificationcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` datetime NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `Fuid` bigint(20) NOT NULL,
  `resitration_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=150 ;

--
-- Dumping data for table `glogin_users`
--

INSERT INTO `glogin_users` (`id`, `email`, `name`, `photo`, `registered`, `user_name`, `password`, `mobile_number`, `gender`, `updatedAt`, `activation`, `verificationcode`, `isActive`, `birth_date`, `address`, `Fuid`, `resitration_type`) VALUES
(4, 'azeem@hotmail.com', 'Azeem Akram', '61.jpg', '2015-07-26 19:00:00', 'azeembscs16', 'e10adc3949ba59abbe56e057f20f883e', '03332828275', 'female', '2015-09-23', '078b96eee4c0285aa88c4e25d1864e2d', 'npqrwxyzjkmn890aghjkkmnp0abcbcdf', 'no', '1996-05-17 00:00:00', 'Karachi', 0, ''),
(6, 'raheelaslam1234@gmail.com', 'Raheel Aslam ', 'small6.jpg', '0000-00-00 00:00:00', 'Maverick', 'cc584d2d5a3909ae602c3811b7c20cbd', '', 'male', '2015-08-31', '8bfc74a2412993bffede887d49c7a0df', 'wxyz1234yzabcd90ab6789mnpqjkmn', 'yes', '1985-10-01 00:00:00', 'Karachi', 0, ''),
(19, 'hasanmumel@gmail.com', 'Hasan', 'male.jpg', '0000-00-00 00:00:00', 'Hsn', '8a5e2fa8b30d9efe5e0f76796192ca6d', '', 'male', '2015-08-03', '440af66c8a22ff8926a54bc557c98c54', 'vwxybcdfmnpqabcddfghnpqrghjk0abc', 'yes', '1993-08-01 00:00:00', 'Karachi', 0, ''),
(23, 'amohsin@golive.com.pk', 'Aamir', '1538747_714874441869807_1508439261_n.jpg', '2015-08-02 22:07:07', 'ammo', 'e2fc714c4727ee9395f324cd2e7f331f', '03142200455', 'male', '2015-08-03', 'd53a9ff3b48078290f45d9bc0ad5755f', 'jkmnbcdfxyzghjkstvwhjkmjkmn6789', 'no', '1992-05-11 00:00:00', 'Karachi', 0, ''),
(24, 'm.aamirmohsin@yahoo.com', 'aamir', '1538747_714874441869807_1508439261_n.jpg', '2015-08-01 22:06:14', 'ammo3', 'e10adc3949ba59abbe56e057f20f883e', '03142200455', 'male', '2015-08-11', '82c02e5529669b4f5fa2586af30831da', '90abkmnp2345abcdqrstjkmnwxyz3456', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, ''),
(34, 'syed.ahmed1@khi.iba.edu.pk', 'Faraz Ahmed', 'ME.jpg', '0000-00-00 00:00:00', 'Arsinx', '1f36c45023f2273065c0dfa0a66d6f27', '+923333087782', 'male', '2015-08-04', 'f3636f409ec12d9c8a4afa7f50c061f8', 'rstv2345stvw3456fghj45674567mnpq', 'yes', '1993-01-01 00:00:00', 'Karachi', 0, ''),
(36, 'alsaadrajput@gmail.com', 'Saad', 'male.jpg', '0000-00-00 00:00:00', 'Saad', '125d0d502244655321fd3c3daf0dc440', '03410269488', 'male', '2015-08-05', '808ef376334265e92832350125b8b82f', '90ab23456789jkmn7890stvwdfghqrst', 'yes', '1995-02-01 00:00:00', 'Karachi', 0, ''),
(39, 'maverickgame@gmail.com', 'Maverick Game', 'male.jpg', '2015-08-05 23:07:06', 'maverickgames', 'e10adc3949ba59abbe56e057f20f883e', '', 'male', '2015-08-17', '', '', '', '0000-00-00 00:00:00', '', 0, ''),
(45, 'MZeeshan@golive.com.pk', 'zeeshan', '85.jpg', '0000-00-00 00:00:00', 'zeeshan91', 'e10adc3949ba59abbe56e057f20f883e', '123123123', 'male', '2015-08-07', 'e7e32468825a23dc417aeef38084484f', 'kmnpkmnpabcd4567pqrsvwxy1234bcdf', 'no', '1924-12-31 00:00:00', 'Karachi', 0, ''),
(55, 'shiraz@golive.com.pk', 'Shiraz', '54.jpg', '2015-08-12 20:30:09', 'Shiraz', '25f9e794323b453885f5181f1b624d0b', '03322136181', 'male', '2015-08-13', '6123aa8889f17ab132838a4f19dfaa82', 'dfghpqrs7890bcdfghjkz56787890', 'no', '1992-04-02 00:00:00', 'Karachi', 0, ''),
(56, 'hashamvs@gmail.com', 'hasham', 'male.jpg', '2015-08-13 02:08:17', 'hasham', '069699d5a0cdea3285fd6d15fbcadec3', '03213868546', 'male', '2015-08-13', '81a748f64c11d85aea0cd3b656123b07', '4567mnpqabcdfghj34563456vwxywxyz', 'yes', '1986-09-01 00:00:00', 'Karachi', 0, ''),
(57, 'abdulmuizz111@hotmail.com', 'Abdul Muizz', 'male.jpg', '2015-08-15 10:28:57', 'Muizz98', '0a8113941d35466c79218e83175665ef', '03333550685', 'male', '2015-08-15', '3c6d85aa814844b72c6f55d1c503d249', '90abtvwx5678890ahjkmabcd5678ghjk', 'no', '2000-06-30 00:00:00', 'Karachi', 0, ''),
(58, 'azeem.akram78@gmail.com', 'Azeem', 'male.jpg', '2015-08-16 19:42:46', 'azeembscs', 'e10adc3949ba59abbe56e057f20f883e', '033325826198', 'male', '2015-08-17', 'f72ec77678933bc73ff738749161e125', 'hjkmstvw23453456xyztvwxjkmnstvw', 'no', '1985-12-31 00:00:00', 'Karachi', 0, ''),
(59, 'azeem.akram78@hotmail.com', 'Azeem', 'male.jpg', '2015-08-16 19:51:42', 'azeembscs', 'e10adc3949ba59abbe56e057f20f883e', '03222586198', 'male', '2015-08-17', '998f1f5d6f7ec82e00305f9bc8b4121d', 'xyzcdfg90ab0abcyz6789tvwxwxyz', 'no', '1985-12-31 00:00:00', 'Karachi', 0, ''),
(60, 'rahil87@gmail.com', 'rahil ahmad khan', '45.jpg', '2015-08-17 04:22:08', 'rahilahmadkhan', '450d914acdb5cee103d16a3b3d4ea99f', '03332339492', 'male', '2015-08-17', 'bfb6492c3524dbb23fa314531309bb2b', 'rstvdfgh4567abcdbcdf1234zkmnp', 'no', '1985-04-01 00:00:00', 'Karachi', 0, ''),
(61, 'fahmeed.zaheer47@gmail.com', 'fahmeed', 'male.jpg', '2015-08-17 04:34:56', 'fahmeed123', '9eedd3d2dd0c5b0bdf39f5f321ffc4e2', '', 'male', '2015-08-17', 'baa08995730a693dffc99951fa24e31d', 'ghjktvwxqrst7890cdfgmnpqqrstcdfg', 'yes', '1990-12-31 00:00:00', 'Karachi', 0, ''),
(62, 'fhd_ahmed@hotmail.com', 'fahad', 'male.jpg', '2015-08-18 21:30:30', 'ahmed.fhd', '7bc6c31880aeda581aa34e218af25753', '03452896568', 'male', '2015-08-19', 'f43db69675472effa7dd9665317f968b', '5678cdfg3456qrstjkmnwxyzwxyz1234', 'no', '2005-12-31 00:00:00', 'Karachi', 0, ''),
(63, 'asim_najam021@yahoo.com', 'asim', 'male.jpg', '2015-08-18 21:37:46', 'asim', 'a1f3a7f1e391ea222dbc6d5778628f1b', '03452874081', 'male', '2015-08-19', 'a019c74e8314c419d49080c5bc8a1127', 'wxyzyzrstv890adfghnpqrcdfgrstv', 'yes', '1987-01-31 00:00:00', 'Karachi', 0, ''),
(64, 'jinab.sahib@gmail.com', 'jinab sahab', 'male.jpg', '2015-08-19 01:18:29', 'jinab', '3405e7a9e2b191de574578c697095df4', '0333-2134445', 'male', '2015-08-19', 'ac928dce84d7557bb1e4d991094d1a53', 'dfgh5678npqr890awxyz67893456xyz', 'no', '1988-06-01 00:00:00', 'Karachi', 0, ''),
(65, 'salman.alkhalid@gmail.com', 'Salman Mahmud', 'male.jpg', '2015-08-19 01:19:41', 'salu', 'c7463795f8569241b24723661fdd0f8f', '0333-2141618', 'male', '2015-08-19', 'a1e63d5bd19dc053d189ab59f54dd883', '4567xyzwxyz5678jkmn90abcdfgqrst', 'no', '1982-08-01 00:00:00', 'Karachi', 0, ''),
(69, 'sidra.javed2108@gmail.com', 'Sidra', 'female.jpg', '2015-08-20 23:05:40', 'Sidra', 'b1cf73a6869972c7b94e7945bf4e61f6', '03332431410', 'female', '2015-08-21', '9af1f8b05b6b47a97e319869c0431c6b', 'z78904567890atvwxkmnpmnpqstvw', 'yes', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(71, 'talibjaml75@gmail.com', 'talib', '61.jpg', '2015-08-21 01:34:30', 'talib', '202cb962ac59075b964b07152d234b70', '03462200265', 'Male', '2015-09-08', '67f1e2fa27c71871b5b2c6b9f9e6e8bb', 'qrst', 'no', '1990-06-29 00:00:00', 'karachi', 0, 'android_user'),
(72, 'hadi.gesdrive@gmail.com', 'Hadi Babul', 'male.jpg', '2015-08-21 07:44:19', 'hadibabul', '2f3d1021fb562dc871a3f9c4b1c87baa', '03472914799', 'male', '2015-08-21', '98f3c895be47419096b111cc5e9f7b78', '90ab', 'yes', '1992-10-01 00:00:00', 'Lahore', 0, 'web_user'),
(73, 'saghir_hassan@outlook.com', 'Saghir Hassan', 'male.jpg', '2015-08-21 08:24:22', 'Saghir', '8b0cb2ae37f9b476d7c06ce6e496f7d1', '03313788712', 'male', '2015-08-21', 'f51f50228e6e50b6c00027c15ee9335b', 'mnpq', 'no', '1993-12-31 00:00:00', 'Lahore', 0, 'web_user'),
(74, 'keith@hot.ee', 'Kate V', 'female.jpg', '2015-08-24 00:00:57', 'KateVo', 'c8f4d606ffe390f7e9f78764a05a5ed3', '123456789', 'female', '2015-08-24', '136aa28f6517efb63be8b73daa04050c', 'bcdf', 'no', '1996-07-31 00:00:00', 'xxxx', 0, 'web_user'),
(76, 'maxud.jafri87@gmail.com', 'Maxud', 'male.jpg', '2015-08-25 20:09:13', 'maxud.jafri87', 'e10adc3949ba59abbe56e057f20f883e', '03350250840', 'male', '2015-08-26', 'f0701c2a7f57edb1fd1b640e823c19a0', 'pqrs', 'yes', '1979-08-31 00:00:00', 'Karachi', 0, 'web_user'),
(77, 'raamlagg@gmail.com', 'ramla ', 'female.jpg', '2015-08-26 23:44:04', 'ramla', '515ff211278775b472dc073d67a3dc9a', '778809876', 'female', '2015-08-27', '3b62fea71dc61287bafec7117511f56b', 'jkmn', 'no', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(78, 'saher_najam@hotmail.com', 'Saher', 'female.jpg', '2015-08-27 19:01:35', 'sahernajam', '50814bb2d11972cb58f63e8ece6444cc', '03333529370', 'female', '2015-08-28', '513605028f422f82a755fd68847218dc', 'ghjk', 'yes', '1988-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(79, 'nadiyarashid725@gmail.com', 'Nadiya', 'female.jpg', '2015-08-27 19:17:24', 'nadiya', 'ecf954b21d0e019d79ad62426a56ffc4', '03312277745', 'female', '2015-08-28', 'bdf6d704e119de8d4df7c4cf25d624ff', 'ghjk', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(80, 'abdullahshah801@rocketmail.com', 'Shah', '13.jpg', '2015-08-31 02:48:41', 'Shah', 'e10adc3949ba59abbe56e057f20f883e', '21414214221', 'male', '2015-08-31', 'affc5d95fcad5ef66bf89f9318320d7d', '5678', 'yes', '1932-09-01 00:00:00', 'Karachi', 0, 'web_user'),
(81, 'salmanzahid.devp@yahoo.com', 'Salman', 'male.jpg', '2015-09-01 07:47:59', 'Salman', 'adc494e378e5b0742573a41aa9984c0d', '03452163419', 'male', '2015-09-01', '976e6e00eb5282a32df5bcbe7db7bdc0', '4567ghjkwxyz4567jkmnvwxyvwxywxyz', 'yes', '1994-02-01 00:00:00', 'Karachi', 0, 'web_user'),
(82, 'fahimahmed.ku@gmail.com', 'fahim', 'male.jpg', '2015-09-01 09:27:57', 'feema', '25f9e794323b453885f5181f1b624d0b', '03353067890', 'male', '2015-09-01', '999f3ad876f87e9119c5d0a923e13ada', 'dfgh', 'no', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(83, 'umairiqbal86@hotmail.com', 'Umair', 'male.jpg', '2015-09-01 09:39:51', 'Umair', 'aafd4fb9adee64d2fce872647245e083', '03218212852', 'male', '2015-09-01', '7b2a950a95fed591238174a42d3079d0', '5678', 'no', '1986-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(84, 'tyu', '', 'male.jpg', '2015-09-02 01:09:00', 'ghj', '3d4044d65abdda407a92991f1300ec97', '566', 'male', '2015-09-02', '7cf03cb842f7975c796f722fa5f7c850', '6789', 'no', '2015-08-02 00:00:00', 'tyu', 0, 'android_user'),
(85, '10beeaahsan@seecs.edu.pk', 'Ahmad Mujtaba Ahsan', 'male.jpg', '2015-09-02 21:55:43', 'AhmadMujtaba', '297a565ff9320c1e5b0d5679e76c97e1', '923345158525', 'male', '2015-09-03', '1cad51b5c381a9551721a3fa8acf102f', '4567', 'yes', '1992-04-01 00:00:00', 'Suwon, South Korea', 0, 'web_user'),
(86, 'mhayatq@gmail.com', 'Hayat Qureshi', 'male.jpg', '2015-09-03 00:05:56', 'hayatq', 'e9bc0e13a8a16cbb07b175d92a113126', '+923008970833', 'male', '2015-09-03', '19068902bb7946b43de52dddf4f84e41', 'abcd', 'yes', '1986-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(87, 'syedfaizan_1418@hotmail.com', 'faizan', 'male.jpg', '2015-09-03 05:47:30', 'faizan', 'e7f6edee630321a404ab22a0f516403d', '03473833806', 'male', '2015-09-03', '668b371e1aab75aa66bafd59cb195556', '6789', 'no', '1986-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(88, 'immad.gt@gmail.com', 'Immad Uddin Khan', 'male.jpg', '2015-09-03 20:01:19', 'immaduddinkhan', 'ee5059a2c80571b8b48473f69b2e5256', '923323708986', 'male', '2015-09-04', '686f54df35028aac8cd0b56b4dc10712', 'pqrs', 'yes', '2015-09-01 00:00:00', 'Karachi', 0, 'web_user'),
(89, 'hasib_rnr@hotmail.com', 'haseeb ahmed', '44.jpg', '2015-09-03 23:27:31', 'Hasib', 'bcd43839eb19384dddc5aaf0ec24d8a5', '03452114772', 'male', '2015-09-18', '1cd30ed7fb2b1a5335b14c341db0b0df', 'rstv', 'yes', '1990-05-21 00:00:00', 'Karachi', 0, 'web_user'),
(90, 'azizakberali@gmail.com', 'Aziz Valliani', 'male.jpg', '2015-09-04 01:57:07', 'aziz', '25d55ad283aa400af464c76d713c07ad', '+3343745425', 'male', '2015-09-04', 'c87e485d33d5a885e99a6c30941e9ca0', 'z', 'yes', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(91, 'haris.khalil@adsells.biz', 'Haris Khalil', 'male.jpg', '2015-09-05 07:46:53', 'haris khalil', 'e36f1175ec4fc0b0b242d975b14f96d3', '03028488060', 'male', '2015-09-05', 'e6e11f169c8b9eb58ed5739bc0eb121d', '4567', 'yes', '1983-12-01 00:00:00', 'Lahore', 0, 'web_user'),
(92, 'raheelaslam@golive.com.pk', 'Raheel Aslam', 'small6.jpg', '2015-09-06 02:22:05', 'Raheel', 'e10adc3949ba59abbe56e057f20f883e', '03458505713', 'male', '2015-09-06', '1fb698ce0cd4207fa9bb08ece06c3821', 'tvwx', 'yes', '1985-10-01 00:00:00', 'Karachi', 0, 'web_user'),
(93, 'talhahsn@gmail.com', 'Talha Hassan', 'male.jpg', '2015-09-06 07:21:17', 'talhahsn', '4c9cf79b7b216d8562fe3776b2d96993', '+923433497937', 'male', '2015-09-06', 'b2f63385eee6bea848a2bec451bf16d5', 'ghjk', 'yes', '1994-11-30 00:00:00', 'Karachi', 0, 'web_user'),
(94, 'ewrw@adf.com', 'qerwe', 'male.jpg', '2015-09-07 04:01:20', 'werwr', '81dc9bdb52d04dc20036dbd8313ed055', '21312312312312313', 'male', '2015-09-07', '08715130e9968c5cf61e3119b94f852e', '90ab', 'no', '1999-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(95, 'naeemmaitla@ymail.com', 'Naeem', 'male.jpg', '2015-09-07 22:36:08', 'Naeem Maitla', '3e34861255f40f02a1a97493499df369', '03347434180', 'male', '2015-09-08', '803128d3f3497ffeeaa63f68e7cddbc8', 'abcd', 'yes', '1995-06-01 00:00:00', 'Lahore', 0, 'web_user'),
(96, 'iqraidreesch@gmail.com', 'Iqra idrees', 'female.jpg', '2015-09-08 00:16:16', 'iqra ch', '6608329c4cede1f03fe7f82ccc0edd35', '03238854430', 'female', '2015-09-08', 'f4ef18ea67e67e42c1aab13c12764ba0', 'dfgh', 'yes', '1997-01-01 00:00:00', 'Lahore', 0, 'web_user'),
(97, 'tariqali99.ta@gamil.com', 'Tariq ali', 'male.jpg', '2015-09-08 02:21:42', 'Tariq ali', '86bb7a11ed3d7e1697893ef4d4737257', '03084708615', 'male', '2015-09-08', '6777f76f71d52ea29b5034c084f95288', '2345', 'no', '1998-04-01 00:00:00', 'Lahore', 0, 'web_user'),
(99, 'abdulrehman741@yahoo.com', 'Abdul Rehman Amin', 'male.jpg', '2015-09-08 04:05:07', 'Potter32', '511bb14dba6202547a87224073ef7d97', '03324338815', 'male', '2015-09-08', '20223523575ad91ae2f9aec146e0b134', 'qrst', 'yes', '1992-08-01 00:00:00', 'Lahore', 0, 'web_user'),
(100, 'masoodahm3d@gmail.com', 'masood', 'male.jpg', '2015-09-08 05:20:14', 'mash', 'e807f1fcf82d132f9bb018ca6738a19f', '03323090468', 'male', '2015-09-08', '2abb6ba0e71bee1ee02c44b7489e69cb', 'jkmn', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(101, 'ahmad-furzaib@hotmail.com', 'Ahmad Furzaib', 'male.jpg', '2015-09-08 16:43:34', 'Ahmad ', '6950aac2d7932e1f1a4c3cf6ada1316e', '03236820007', 'male', '2015-09-08', 'a7d2516303e7960ccbf6932a80983e77', '90ab', 'no', '1993-03-01 00:00:00', 'Burewala', 0, 'web_user'),
(102, 'abubakarw92@gmail.com', 'Abu Bakar', 'male.jpg', '2015-09-09 06:51:24', 'maverickgamer', '86f86a00f99ee976c452e8ff1ac94914', '03324440444', 'male', '2015-09-09', 'fedc01581bd4c4112ef19666382677a9', '6789', 'no', '1995-08-01 00:00:00', 'Lahore', 0, 'web_user'),
(103, 'mashalmabood@gmail.com', 'Mashal Raheel', 'female.jpg', '2015-09-09 07:20:06', 'Mystique88', 'aed084e6936cff8642d57df1765daa8c', '03219260777', 'female', '2015-09-09', 'd43da615b1ecc1ceb1eabed145a9de5e', 'stvw', 'yes', '1988-12-01 00:00:00', 'Karachi', 0, 'web_user'),
(104, 'shirjeelchaudhry@hotmail.com', 'shirjeel', 'male.jpg', '2015-09-09 08:44:07', 'shirjeelchaudhry@hotmail.com', '06a2c2b3e9921dd2e7204db7cce0fc76', '03215753521', 'male', '2015-09-09', 'bd934ac7e77c7f8fb3e807647507690f', '3456', 'no', '1984-05-21 00:00:00', 'Warwick, UK', 0, 'web_user'),
(105, 'waji28@gmail.com', 'Wajid Ali Khan', 'male.jpg', '2015-09-09 18:12:41', 'waji28', '6d9b78441331078313793c274db92a68', '03212345886', 'male', '2015-09-09', '938a97b6d181da9beec87d1bf3fb5eba', 'jkmn', 'yes', '1984-04-01 00:00:00', 'Karachi', 0, 'web_user'),
(106, 'sajaddesi@gmail.com', 'Sajad Ali', 'male.jpg', '2015-09-10 03:06:22', 'sajaddesi', 'e10adc3949ba59abbe56e057f20f883e', '03332145657', 'male', '2015-09-10', 'e3d6bb872e42df8d37d973067d15fc61', 'z', 'no', '1989-02-01 00:00:00', 'Karachi', 0, 'web_user'),
(107, 'wasiqahmed_s@hotmail.com', 'wasiq Ahmed ', 'male.jpg', '2015-09-10 04:40:27', 'wasiq', '81431ce556f679160891d1714cae1353', '03333926152', 'male', '2015-09-10', '6c73652de248895e5c394668b91a7cdd', 'rstvghjkmnpqkmnpwxyznpqrabcdmnpq', 'yes', '1988-03-01 00:00:00', 'Karachi', 0, 'web_user'),
(108, 'htalib@gmail.com', 'hussain', 'male.jpg', '2015-09-10 18:22:21', 'htalib', '4082b2fb8fbcbc9394491083ec210824', '03018229546', 'male', '2015-09-10', '9576959d2dc903aa37fe9fb38d66762e', 'cdfg', 'yes', '1980-06-30 00:00:00', 'Karachi', 0, 'web_user'),
(109, 'faiz@faizullahjawad.com', 'faizullah', 'male.jpg', '2015-09-10 18:51:09', 'sfajawad', 'eef42036689167c73a43aa4304562b45', '03212673418', 'male', '2015-09-10', 'a036112fa7638eae59d8502a9c0102c6', 'pqrs', 'yes', '1976-05-30 00:00:00', 'Karachi', 0, 'web_user'),
(110, 'Imran_ansari66@yahoo.com', 'Imran', 'male.jpg', '2015-09-11 05:01:06', 'Immu', 'e10adc3949ba59abbe56e057f20f883e', '03002502074', 'male', '2015-09-11', '41f95583d6f0c37212c8aa8b9df810dc', 'wxyz', 'no', '1983-01-01 00:00:00', 'Karachi', 0, 'web_user'),
(111, 'gayoorabbass@hotmail.com', 'Gayoor Abbass', '78.jpg', '2015-06-11 05:37:17', 'therock', 'e10adc3949ba59abbe56e057f20f883e', '03003131256', 'male', '2015-06-11', '70f3c96df73f53d5ae7194520fb2a253', 'npqr', 'no', '2003-02-01 00:00:00', 'Karachi', 0, 'web_user'),
(112, 'samkhan123456789@hotmail.com', 'sam', 'male.jpg', '2015-09-12 21:54:45', 'khan', '708a8f9fdd3167c5e5f4fc17da4048c2', '03466566384', 'male', '2015-09-13', '780185230b6250650c9b52cb7784020a', 'kmnp', 'no', '1999-02-01 00:00:00', 'Lahore', 0, 'web_user'),
(113, 'hamzashahid357@gmail.com', 'Hamza Shahid', 'male.jpg', '2015-09-13 05:13:38', 'Hamza', 'ddcdfece28b11800d26b8d8e8584cd86', '03047170200', 'male', '2015-09-13', '005606e9c13b4286c206ef65d4b45dc5', 'stvw', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(114, 'habibullah1980@outlook.com', 'habibullah', '88.jpg', '2015-09-14 04:46:16', 'habib', '81dc9bdb52d04dc20036dbd8313ed055', '03333678170', 'male', '2015-09-23', '0c9a4635f17e254c2093fb5f570c9b11', 'bcdfqrst23455678yzpqrs890apqrs', 'yes', '1980-03-31 00:00:00', 'Karachi', 0, 'web_user'),
(115, 'saadsaeed@live.com', 'saad', 'male.jpg', '2015-09-17 02:58:16', 'saadsaeed', '9cc5dfdc5adcfbfa5b722a9b2244a017', '03232755574', 'male', '2015-09-17', '21730d9ce8b43f2fff613ab062ca4320', 'jkmn', 'yes', '1990-06-01 00:00:00', 'Karachi', 0, 'web_user'),
(116, 'faizanshah_89@yahoo.com', 'Faizan', 'male.jpg', '2015-09-17 07:57:48', 'Toonie', '69bf37876002e95382dcb7fd6cfb9c25', '03335580225', 'male', '2015-09-17', '364f1b0af6eb8c7889d9931f9437b5ce', 'ghjk', 'yes', '1990-11-30 00:00:00', 'Islamabad', 0, 'web_user'),
(117, 'Arturamar@gmail.com', 'Artur', 'male.jpg', '2015-09-17 11:44:03', 'Zavamaromagro', '40a9c47ca04635cd955876678d475fb2', '351919888022', 'male', '2015-09-17', 'c95678bd6393f65fbdad55f37e33f183', '7890', 'no', '1969-05-08 00:00:00', 'Kotri', 0, 'web_user'),
(118, 'mehrali131@yahoo.com', 'Mehr', 'female.jpg', '2015-09-17 19:45:02', 'mehrali', '7548fef5cc82d8b88d697da344c23ffe', '03218512209', 'female', '2015-09-18', '51fbd7b575a9b0107c2837e2743d2294', 'bcdf', 'no', '1990-06-01 00:00:00', 'Islamabad', 0, 'web_user'),
(119, 'ziaiqbal88@gmail.com', 'Zia Iqbal', 'male.jpg', '2015-09-17 22:00:49', 'zim', 'a73648aacaa5e8897a8128c0d1c40062', '03333238460', 'male', '2015-09-18', '9a1e5d1fe1bedd9e2bf8290a2219200c', 'fghj', 'yes', '1988-10-01 00:00:00', 'Karachi', 0, 'web_user'),
(120, 'zain.alinawaz786@gmail.com', 'zainalinawaz', 'male.jpg', '2015-09-17 22:20:15', 'zain', '58b7648d87c865d55de029c47937116c', '03131023575', 'male', '2015-09-18', '69e38ec2f9bf35b624276ad8a2489129', 'z', 'no', '1997-05-29 00:00:00', 'Karachi', 0, 'web_user'),
(121, 'basimmutaal@gmail.com', 'DONALD GEORGE BRADMAN', 'male.jpg', '2015-09-17 23:52:28', 'DONALD GEORGE BRADMAN', '25f9e794323b453885f5181f1b624d0b', '03334649496', 'male', '2015-09-18', '88894a420e109bfb5bb0e7581bc54220', 'jkmn', 'yes', '1985-05-10 00:00:00', 'Leiah', 0, 'web_user'),
(122, 'ali84908@gmail.com', 'Bilal', '88.jpg', '2015-09-18 01:44:31', 'Bilal Mehar', '0b226073c7f312bc16de0f0495c2c423', '03157976665', 'male', '2015-09-18', 'c6902445f55c7ef08f84084251d585ae', 'xyz', 'no', '1999-12-02 00:00:00', 'Gujrat', 0, 'web_user'),
(123, 'sabiha_saeed786@yahoo.com', 'Sabiha Saeed', 'female.jpg', '2015-09-18 04:09:38', 'Sabiha saeed', 'efd82d6cd0dd6390a24b62412c261c8a', '03004980335', 'female', '2015-09-18', 'cb25bd8c8455b76a639402a06ecdce1c', 'pqrs', 'no', '1969-12-31 00:00:00', 'Lahore', 0, 'web_user'),
(124, 'swhussain83@hotmail.com', 'Syed Wajahat Hussain', 'male.jpg', '2015-09-18 08:21:09', 'swhussain', '6fa916cda40fb6393fec7e911217b9ca', '03323000216', 'male', '2015-09-18', '0399a17874a5809a81ccf76a62962fe4', 'pqrs', 'yes', '1969-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(125, 'aliasheer83@gmail.com', 'Ali', 'male.jpg', '2015-09-18 11:47:24', 'aliasheer', 'e11e982365a40cc93b080e500ad6285a', '03362504860', 'male', '2015-09-18', 'e474a5269a9e73da459aa8fb10448d67', '5678', 'yes', '1991-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(126, 'mahi_mairaj@domain.com', 'Mahi ', 'female.jpg', '2015-09-19 00:41:24', 'blazing_pixie ', '86f84e6d88c4c1f21f8c52b36beb8516', '03430208251', 'female', '2015-09-19', '69b1ccce0559d0e8dff63a15d8dc9baf', 'rstv', 'no', '1969-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(127, 'nashit2061995@gmail.com', 'Nashit', 'male.jpg', '2015-09-19 04:16:44', 'Nashit Akhter', 'd3d04ef41e0b004f7fb84f497030e85c', '030002563264', 'male', '2015-09-19', '173324e6119add34e4bbbc27b3c7a0b1', 'z', 'yes', '1995-06-01 00:00:00', 'Karachi', 0, 'web_user'),
(128, 'Uzjawed@gmail.com', 'Rabia', 'female.jpg', '2015-09-20 01:09:39', 'Junaidjawed123', '4c8a4fc5ac905bafa85b8bbded87e2bf', '033235994691', 'female', '2015-09-20', 'ffb7225446f7ad6f48dbc0183b9df299', 'hjkm', 'no', '1995-10-01 00:00:00', 'Karachi', 0, 'web_user'),
(129, 'alonearain97@gmail.com', 'Talha Arain', '74.jpg', '2015-09-20 08:01:36', 'Talha.Arain', '215d757666d931f49a3a72bec5c8ae1b', '03056966882', 'male', '2015-09-20', '232e8c1eeec336088d48513455eb2d5f', '2345', 'yes', '1996-12-31 00:00:00', 'Bahawalpur', 0, 'web_user'),
(130, 'habibakhan0335@gmail.com', 'Habiba Khan', '66.jpg', '2015-09-22 01:11:51', 'HRK', '7728127b85e41cb48d8cfcfb73b3790b', '03330270670', 'female', '2015-09-23', 'b0c41d0c972a1bebe9f72ac2ecaf1b41', 'cdfg', 'yes', '1989-06-01 00:00:00', 'Karachi', 0, 'web_user'),
(131, 'scorpioangle39@yahoo.com', 'naveen', 'female.jpg', '2015-09-22 07:09:51', 'naveen', '4e075844d2e00e4c800c8c62716bed8c', '03322348722', 'female', '2015-09-22', '3dcb0db797da017f2abd3e7ff592ea06', 'z', 'no', '1969-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(132, 'nashit627@gmail.com', 'Nashit Shafiq', 'male.jpg', '2015-09-23 08:10:14', 'nashit627', '1013a983ce779fdd6f9d93c3141a8b4f', '03028100979', 'male', '2015-09-23', '04e66c86d17943c6252511b84e2e3f02', '4567', 'yes', '1969-12-31 00:00:00', 'Gujranwala', 0, 'web_user'),
(133, 'longtailproid@gmail.com', 'long tail', 'male.jpg', '2015-09-24 00:45:27', 'gamelover', 'e8646a55285f0394b904e81294443415', '00142009211', 'male', '2015-09-24', 'd15d8ba228a15e687755f58001f75d67', 'cdfg', 'yes', '1924-12-31 00:00:00', 'Game Zone', 0, 'web_user'),
(134, 'ahtisham91@live.com', 'Ahtisham ul haq Chughtai', 'male.jpg', '2015-09-25 00:25:58', 'Ahtisham', 'edc73ec4a0e1fc3c31eabafcdfef6a3e', '03003968968', 'male', '2015-09-25', '66eb6450fa903c91d1fa79b83d666b8a', '5678', 'yes', '1991-04-01 00:00:00', 'Karachi', 0, 'web_user'),
(135, 'sdtest@test.com', 'test', 'male.jpg', '2015-09-29 21:06:50', 'testtesttest', '1fb0e331c05a52d5eb847d6fc018320d', '3123213123123123', 'male', '2015-09-30', '4cc3cf2dc82b0ea62a801d7a250d1f03', 'xyz', 'no', '1928-02-29 00:00:00', 'Karachi', 0, 'web_user'),
(136, 'salman@golive.com.pk', 'Salman', 'male.jpg', '2015-09-30 21:36:26', 'Gmmr', 'adc494e378e5b0742573a41aa9984c0d', '03452163419', 'male', '2015-10-01', '899541057529120e002a7ff17c436e23', '7890hjkm12343456stvw5678hjkm6789', 'no', '1994-06-01 00:00:00', 'Karachi', 0, 'web_user'),
(137, 'habibuzzamankhan@hotmail.com', 'Habib Khan', 'male.jpg', '2015-10-01 02:14:13', 'habib khan', 'd5b475d68fc4491ef28509026f3aafba', '03458806486', 'male', '2015-10-01', 'ad636a470374a5aee36ee1819c35b3bf', '0abc', 'no', '1991-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(138, 'shafiquewaleed@ymail.com', 'Waleed Shafique', 'male.jpg', '2015-10-01 08:04:40', 'valeidshafik', '4c5101c29d1e13a9f9f0dbbd3a2e64c2', '03359172233', 'male', '2015-10-01', '32fba54c67c0fb46727cdb245bf3a304', 'mnpq', 'no', '1994-07-01 00:00:00', 'Mardan', 0, 'web_user'),
(139, 'umair819@gmail.com', 'Muhammad Umair', 'male.jpg', '2015-10-01 19:49:56', 'umair819', 'bdc5a97f2f10a0a163655302af61a5a9', '03136300093', 'male', '2015-10-02', '97fe18dc980290b18135dc7d7984728d', 'wxyz', 'no', '1987-02-01 00:00:00', 'Karachi', 0, 'web_user'),
(140, 'fawwaz.anwer@gmail.com', 'Fawwaz', 'male.jpg', '2015-10-01 21:39:44', 'Fawaji', '56b5be2d639444583d5a7652990b314f', '03142031966', 'male', '2015-10-02', '352c4e7855912bacae3f97665cb919ab', 'wxyz', 'no', '1989-06-30 00:00:00', 'Karachi', 0, 'web_user'),
(141, 'mahsan.khan2@gmail.com', 'Ahsan', 'male.jpg', '2015-10-01 21:40:49', 'akhan', '3d68b18bd9042ad3dc79643bde1ff351', '03453939678', 'male', '2015-10-02', 'a0535f5e09363d2ed8aba7c3c57967c9', 'z', 'no', '1992-05-28 00:00:00', 'Karachi', 0, 'web_user'),
(142, 'allen.kumail@gmail.com', 'kumail', 'male.jpg', '2015-10-01 21:42:40', 'allenabbas', '3658297716cc1d993d596a0141e96332', '03132044062', 'male', '2015-10-02', '97822341959c281ca071dc19fce28eb0', '5678', 'no', '1990-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(143, 'shahmeern@hotmail.com', 'shahmeer', 'male.jpg', '2015-10-01 23:10:37', 'shahmeern', '513314ddaf5594f544d3df7f82534e9d', '03458551876', 'male', '2015-10-02', 'ddc1ff0b4115c05272b90739ff46aebe', 'kmnp', 'no', '1985-09-01 00:00:00', 'Islamabad', 0, 'web_user'),
(144, 'hadibabul@outlook.com', 'hadi', 'male.jpg', '2015-10-01 23:22:40', 'babul', '2f3d1021fb562dc871a3f9c4b1c87baa', '03472914799', 'male', '2015-10-02', '2888431022f026aeaa5608bff0e3e8ba', 'wxyz', 'no', '1992-10-01 00:00:00', 'Karachi', 0, 'web_user'),
(145, 'ameenkhanupl@gmail.com', 'ameen', 'male.jpg', '2015-10-02 00:52:22', 'ameenkhan', 'e10adc3949ba59abbe56e057f20f883e', '03201921369', 'male', '2015-10-02', '38cf37e9a5f6133b675835f1af6ff9d4', 'ghjk', 'no', '1990-03-31 00:00:00', 'Karachi', 0, 'web_user'),
(146, 'Mubashirmuhammad63@gmai.com', 'Mubashir', 'male.jpg', '2015-10-02 09:38:30', 'Mubashir', 'a4e39e12c120f33898fa0b4c1d786ca0', '03242308939', 'male', '2015-10-02', 'c60859d1bd382b26fb795b150ef64ee7', '6789', 'no', '1969-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(147, 'farmanabbass@hotmail.com', 'Farman', 'male.jpg', '2015-10-03 02:08:19', 'gumble', 'e10adc3949ba59abbe56e057f20f883e', '03003232964', 'male', '2015-10-03', 'b253243d0c3ef495621098f27aa5f12b', 'vwxy', 'no', '2002-01-31 00:00:00', 'Karachi', 0, 'web_user'),
(148, 'soviets_clan@hotmail.com', 'iqbalahmed', 'male.jpg', '2015-10-03 18:19:39', 'iqbalahmed', '31a27971438225502e65ef91d6631e3d', '03350379050', 'male', '2015-10-03', '1f065f8ee01ae0cfbb13565eae20692d', '6789', 'no', '1993-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(149, 'umairaslam88@hotmail.com', 'umair aslam', 'male.jpg', '2015-10-03 23:36:27', 'umair09', 'bdd9f9d2e937f76af1f97961c57f69f0', '03218793304', 'male', '2015-10-04', 'fe9fddd92533c3090002240e8133a6fc', 'cdfg', 'no', '1988-11-30 00:00:00', 'dammam', 0, 'web_user');

-- --------------------------------------------------------

--
-- Table structure for table `maverick_admin`
--

DROP TABLE IF EXISTS `maverick_admin`;
CREATE TABLE IF NOT EXISTS `maverick_admin` (
  `user_id` int(22) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `secretequestion` varchar(100) NOT NULL,
  `secreteanswer` varchar(100) NOT NULL,
  `verificationcode` varchar(100) NOT NULL,
  `createdAt` date NOT NULL,
  `updateAt` date NOT NULL,
  `userRole` varchar(100) NOT NULL,
  `isactive` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `maverick_admin`
--

INSERT INTO `maverick_admin` (`user_id`, `email`, `password`, `fullname`, `secretequestion`, `secreteanswer`, `verificationcode`, `createdAt`, `updateAt`, `userRole`, `isactive`, `description`) VALUES
(1, 'admin@maverickgame.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'what is your birth place?', 'Ranipur', 'bcdf90ab7890npqr234578901234abcd', '2015-06-19', '2015-06-19', 'admin', 'Yes', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `maverick_game_card`
--

DROP TABLE IF EXISTS `maverick_game_card`;
CREATE TABLE IF NOT EXISTS `maverick_game_card` (
  `card_id` int(22) NOT NULL AUTO_INCREMENT,
  `card_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reference_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_coins` int(22) NOT NULL,
  `card_price` int(22) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `createdAt` date NOT NULL,
  `expiredAt` date NOT NULL,
  `cardactivatedAt` date NOT NULL,
  `isused` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`card_id`),
  UNIQUE KEY `card_number` (`card_number`,`reference_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maverick_game_card`
--

INSERT INTO `maverick_game_card` (`card_id`, `card_number`, `reference_number`, `number_of_coins`, `card_price`, `isActive`, `createdAt`, `expiredAt`, `cardactivatedAt`, `isused`) VALUES
(1, '256312882412', '25362514258963', 50, 250, 1, '2015-10-01', '2016-10-29', '2015-10-01', 'yes'),
(2, '178325258655', '42625163253589', 100, 500, 1, '2015-10-01', '2015-10-31', '2015-10-01', 'yes'),
(3, '832525861755', '62516325342589', 10, 50, 1, '2015-10-01', '2015-10-31', '2015-10-01', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `maverick_game_reward`
--

DROP TABLE IF EXISTS `maverick_game_reward`;
CREATE TABLE IF NOT EXISTS `maverick_game_reward` (
  `reward_id` int(11) NOT NULL AUTO_INCREMENT,
  `reward_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reward_points` int(22) NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `expiredAt` date NOT NULL,
  `reward_status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `reward_description` text COLLATE utf8_unicode_ci NOT NULL,
  `reward_seo_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reward_meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `reward_meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `game_seo_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reward_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reward_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `maverick_game_reward`
--

INSERT INTO `maverick_game_reward` (`reward_id`, `reward_name`, `reward_points`, `createdAt`, `updatedAt`, `expiredAt`, `reward_status`, `reward_description`, `reward_seo_name`, `reward_meta_keywords`, `reward_meta_description`, `game_seo_title`, `reward_image`) VALUES
(1, 'Songs DVD''s', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'sony-Laptop-i5-cover', '', '', 'Sony Laptop i5 cover', 'dvd-image.jpg'),
(2, 'Key chains', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'Sony-play-station-cover', '', '', 'Sony play stationcover', 'Itiha-Ganesha-Car-Hanging-Keychain-Showpiece-10-cm-62229555-e26ec85f-0a90-4198-8282-455d642470b1.jpg'),
(3, 'Free Calling time ', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'sony-Laptop-i3-cover', '', '', 'Sony Laptop i3 cover', 'pic-laptop.png'),
(4, 'Water bottles', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'sony-Laptop-i7-cover', '', '', 'Sony Laptop i7 cover', 'SipNmist.jpg'),
(5, 'Coaster sets', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'Lenovo-play-station-cover', '', '', 'Lenovo play station cover', '41PC48QR8EL._SL190_SY246_CR0,0,190,246_.jpg'),
(6, 'Mugs', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'Lenovo-Laptop-i5-cover', '', '', 'Lenovo Laptop i5 cover', 'offer31-450x450.jpg'),
(7, 'Photo frames', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'Lenovo-Laptop-i3-cover', '', '', 'Lenovo Laptop i3 cover', 'fancygoldframe.png'),
(8, 'Kids pencil box', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'HP-Laptop-i3-cover', '', '', 'HP Laptop i3 cover', 'magneticpencilbox._magnetic-dual-side-kids-pencil-box-children-school-cartoon-case.jpg'),
(9, 'Masks', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'HP-Laptop-i5-cover', '', '', 'HP Laptop i5 cover', 'msktcmdlf.jpg'),
(10, 'candles showpiece', 100, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'HP-Laptop-i7-cover', '', '', 'HP Laptop i7 cover', 'pic-laptop.png'),
(11, 'Pocket purse', 500, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', '51HSM4oYeML._SX342_.jpg', '', '', 'HP play station cover', '51HSM4oYeML._SX342_.jpg'),
(12, 'USB ', 500, '2015-09-16', '2015-09-16', '2015-09-16', 'yes', '', 'StorageReview-Kingston Secure-USB-3-ESET.jpg', '', '', 'Dell play station cover', 'StorageReview-Kingston Secure-USB-3-ESET.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maverick_packages`
--

DROP TABLE IF EXISTS `maverick_packages`;
CREATE TABLE IF NOT EXISTS `maverick_packages` (
  `package_id` int(22) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `package_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `expiredAt` date NOT NULL,
  `package_coins` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `package_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `package_description` text COLLATE utf8_unicode_ci NOT NULL,
  `package_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `maverick_packages`
--

INSERT INTO `maverick_packages` (`package_id`, `package_name`, `package_image`, `createdAt`, `updatedAt`, `expiredAt`, `package_coins`, `package_price`, `package_description`, `package_type`, `isActive`) VALUES
(1, 'Basic Package', 'rs-100.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '30', '10', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no'),
(2, 'Basic Package', 'rs-200.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '60', '20', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no'),
(3, 'Basic Package', 'rs-300.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '90', '30', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no'),
(4, 'Basic Package', 'rs-400.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '150', '50', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no'),
(5, 'Basic Package', 'rs-500.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '300', '100', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no'),
(6, 'Basic Package', 'rs-800.jpg', '2015-08-07', '2015-08-07', '2015-09-30', '1500', '500', 'It is a long established fact that a reader will be distracted by the be readable content.', 'monthly', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `momsubforum`
--

DROP TABLE IF EXISTS `momsubforum`;
CREATE TABLE IF NOT EXISTS `momsubforum` (
  `mom_forum_id` int(11) NOT NULL,
  `mom_sub_forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `mom_sub_forum_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `isStrict` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `momforum_seo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_forum_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_tag_keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_tag_description` text COLLATE utf8_unicode_ci NOT NULL,
  `subforum_simlies` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mom_sub_forum_id`),
  KEY `FK_momsubforum` (`mom_forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `points_score_leaderboard`
--

DROP TABLE IF EXISTS `points_score_leaderboard`;
CREATE TABLE IF NOT EXISTS `points_score_leaderboard` (
  `user_id` int(22) NOT NULL,
  `point_leader_id` int(22) NOT NULL AUTO_INCREMENT,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `total_points` int(22) NOT NULL,
  PRIMARY KEY (`point_leader_id`),
  KEY `FK_points_score_leaderboard` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `points_score_leaderboard`
--

INSERT INTO `points_score_leaderboard` (`user_id`, `point_leader_id`, `createdAt`, `updatedAt`, `total_points`) VALUES
(92, 1, '2015-09-30', '2015-10-04', 708),
(4, 2, '2015-09-30', '2015-10-04', 306),
(114, 3, '2015-09-30', '2015-10-03', 224),
(89, 4, '2015-10-01', '2015-10-02', 86),
(55, 5, '2015-10-01', '2015-10-02', 90),
(34, 6, '2015-10-01', '2015-10-04', 29),
(124, 7, '2015-10-01', '2015-10-02', 19),
(111, 8, '2015-10-01', '2015-10-03', 151),
(136, 9, '2015-10-01', '2015-10-02', 24),
(137, 10, '2015-10-02', '2015-10-02', 22),
(143, 11, '2015-10-02', '2015-10-02', 0),
(145, 12, '2015-10-02', '2015-10-02', 0),
(56, 13, '2015-10-02', '2015-10-02', 1),
(79, 14, '2015-10-02', '2015-10-02', 0),
(147, 15, '2015-10-03', '2015-10-03', 110),
(80, 16, '2015-10-03', '2015-10-03', 95),
(125, 17, '2015-10-03', '2015-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reward_redeem_point`
--

DROP TABLE IF EXISTS `reward_redeem_point`;
CREATE TABLE IF NOT EXISTS `reward_redeem_point` (
  `user_id` int(22) NOT NULL,
  `reward_id` int(22) NOT NULL,
  `reward_redeem_points_id` int(22) NOT NULL AUTO_INCREMENT,
  `utilize_points` int(22) NOT NULL,
  `utilize_points_date` date NOT NULL,
  PRIMARY KEY (`reward_redeem_points_id`),
  KEY `FK_reward_redeem_point` (`user_id`),
  KEY `FK_reward_redeem_points` (`reward_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reward_redeem_point`
--

INSERT INTO `reward_redeem_point` (`user_id`, `reward_id`, `reward_redeem_points_id`, `utilize_points`, `utilize_points_date`) VALUES
(4, 9, 1, 100, '2015-10-03'),
(4, 8, 2, 100, '2015-10-03'),
(92, 9, 3, 100, '2015-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `silverhat_games`
--

DROP TABLE IF EXISTS `silverhat_games`;
CREATE TABLE IF NOT EXISTS `silverhat_games` (
  `game_id` int(22) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(100) NOT NULL,
  `game_home_image` varchar(100) NOT NULL,
  `game_background_image` varchar(100) NOT NULL,
  `game_description` text NOT NULL,
  `game_price` int(22) NOT NULL,
  `game_point_ratio` int(22) NOT NULL,
  `game_file` varchar(100) NOT NULL,
  `isActive` varchar(3) NOT NULL DEFAULT 'no',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isFeatured` varchar(3) NOT NULL DEFAULT 'no',
  `game_seo` varchar(100) NOT NULL,
  `game_seo_title` varchar(100) NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `meta_tag_description` text NOT NULL,
  `game_top_header` varchar(100) NOT NULL,
  `game_leaderboard_image` varchar(100) NOT NULL,
  `game_image` varchar(100) NOT NULL,
  `game_instrustion_image` varchar(100) NOT NULL,
  `game_slider` varchar(100) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `silverhat_games`
--

INSERT INTO `silverhat_games` (`game_id`, `game_name`, `game_home_image`, `game_background_image`, `game_description`, `game_price`, `game_point_ratio`, `game_file`, `isActive`, `createdAt`, `updatedAt`, `isFeatured`, `game_seo`, `game_seo_title`, `meta_tag_keywords`, `meta_tag_description`, `game_top_header`, `game_leaderboard_image`, `game_image`, `game_instrustion_image`, `game_slider`) VALUES
(1, 'Do The Dive', 'dothedive.png', 'dothedive.jpg', 'Skydiving would be so much fun in a calm and nice weather. Imagine, its like flying in the sky and the moment you jump from the plane makes it even more exciting.\nDo the dive is a free online adventure game which takes you across the sky, taking risks and making decisions to determine your final score. Glide your way through the sky filled with dangerous Rocky Mountains with high towers & tall coniferous trees. Pick up diamonds as you go down to score the ultimate high score. Depleting level of oxygen reduces the chances of survival, so keep collecting the oxygen bottles as you go down. Oxygen is placed in locations designed to test your diving skills to the max. Oh! And don’t forget about the angry birds who bash into you causing sudden loss of oxygen. As you go down the sky, the level increases causing more obstacles to appear and making it harder for you to survive. \nYour challenge is to go down and make the highest score possible. Can you reach the ground before the oxygen runs out? Can you survive this extreme adventurous job? Find out by playing this online action game!\n', 1, 2500, 'DoTheDive/dothedrive.php', 'yes', '2015-07-25 03:08:04', '2015-07-25 03:15:17', 'yes', 'do-the-dive', 'Do the Dive - Play Stunt Games Online | Maverick Game', 'do the dive, maverick game, adventure game, stunt games, stunt games online, adventure games for girls, adventure games for boys, action game, diving game, play adventure games', 'Do the Dive is a adventure, stunt game featuring jumping from a plane- without a parachute! Play adventure games for girls and boys at Maverick Game.', 'dothedrive.png', 'banner-do-the-dive.jpg', 'dothedive.png', 'dothedive.png', 'dothedrive.jpg'),
(2, 'Furious Red', 'furiousred.png', 'furiousred.jpg', 'Either diving, racing or drifting, doesn’t matter what you call it but they are the adrenaline rushing deviations of outdoor sports and the online version is no less. They are the most played and wanted category in online gaming and especially for the teens who are enthusiasts and show a keen interest in cars. It’s not just the speed which gives you a pull towards racing games, it’s the fun and enjoyment that you derive from all the adventure and mission that you have.\nThe Furious Red is car racing game for boys which is all about when you’re getting late to be somewhere and you’re on a traffic congested road, so you put your foot down and go as fast as you can splitting the lanes and overtaking the cars. But the best part is that you have to do it driving an amazing GT-F1 supercar which is superfast and has an amazing hopping ability plus handles amazingly. All you have to do is avoid crash, collect points and reach you destination on time.\nI bet your car can handle it, but can you? Play this free online racing game and many other car racing games here!\n', 1, 500, 'FuriousRed/furiousred.php', 'yes', '2015-07-25 06:19:19', '2015-07-25 04:11:10', 'yes', 'furious-red', 'Furious Red - Car Racing Games for Boys | Maverick Game ', 'furious red, racing games, racer games, car racing games, online car racing games, car racing games online, free download car racing games, car racing games for boys, super car racing games', 'Who needs a Speed Racer game when you have Furious Red featuring a GT-F1 super car? Play crazy super car racing games for boys at Maverick Game!', 'furiousred.png', 'banner-furious-red.jpg', 'furiousred.png', 'furiousred.png', 'furiousred.jpg'),
(3, 'Master cook', 'master-cook.png', 'master-cook.jpg', 'Girls love cooking as it provides you with the most delicious and amazing meals plus improves the skills every time you do it. Cooking Games are among the best online games which give you a similar experience- you have to do your best and try make the meal as deliciously as possible! This will entertain you and teach you everything you need to know about the kitchen. There''s no need for reservations because we''ve got a game waiting for you at our Restaurant Game. \nWe''ve got the game where you have to cook just like Mom used to cook! Master Cook is a online role playing game which is about you owning a perfect, new little restaurant, where you have to cook delicious noodles, mix them with the vegetables and serve them as the customer want it. You have a queue of customers waiting to be served. Serve as soon as possible and as similar to their wants to get a handsome tip and money for the meal.\nBe the greatest chef of all time by serving your customers food that satisfies them and grow your business by serving delicacies on time. So grab your spoon and spatula and start mixing, boiling, and sautéing with our game. You can play games online here!\n', 1, 200, 'MasterCook/mastercook.php', 'yes', '2015-07-27 05:08:08', '2015-07-27 05:08:08', 'yes', 'master-cook', 'Master Cook - Play Cooking Games for Girls | Maverick Game', 'Master cook, maverick game, girls cooking games online, cooking games for girls, cooking games for girl, free online cooking games, games for girls, cooking games for kids', 'Master Cook lets you create the most sumptuous dishes to serve in your very own restaurant! Cook with your heart in cooking games for girls!', 'mastercook.png', 'banner-master-cook.jpg', 'master-cook.png', 'mastercook.png', 'mastercook.jpg'),
(4, 'Wordster', 'wordster.png', 'wordster.jpg', 'Wordster is a word builder game which are popular for helping kids recognize words. In searching for words, the kids read and memorize the words in a way that they enjoy and which helps them learn the words and their spelling. Wordster is a free online game. The technology for Wordster game is shared with a very vast dictionary of beginner and advanced words.\nIn this game you are given a forest theme. You get letters carved on pieces of stones from which you have to make words. You have a limited amount of time available so that you start thinking quickly and learn to think under stressed and difficult situations. To prevent the time from running out you have to be quick at making new words which gets you more leverage on time. You are also rewarded with a score based on the length of the word- the bigger the word, the bigger the score.\nWould you let this bee help you make your vocabulary better? In this mysterious forest pick up the stones with letters on it and make as many words as you can before the timer runs out. Play Wordster, an amazing kids game online here and learn new words the fun way.\n', 1, 400, 'Wordster/wordster.php', 'yes', '2015-07-29 00:00:00', '2015-07-27 00:00:00', 'yes', 'word-ster', 'Wordster - Play Word Puzzle Games Online | Maverick Game', 'wordster, maverick game, word puzzle games, spelling games, preschool games, kindergaten games', 'Wordster is one of the best spelling games for your little one. Play word puzzle games and other preschool games at Maverick Game!', 'wordster.png', 'banner-wordster.jpg', 'wordster.png', 'wordster.png', 'wordster.jpg'),
(5, 'Dragon Draft', 'dragondraft.png', 'draon-draft.png', 'Did you know the draft game has a history that spans thousands of years? There has been many discoveries in the ancient cities of Sumer and Egypt about similar strategy games that were played by royalty and soldiers. In ancient China, Rome and Greece, soldiers and generals used to play the draft game in order to hone their martial skills and make battle plans.\r\nAlthough the traditional draft game has been here for thousands of years, the online version of this game came into being in 1950 when Arthur Samuel created the first board game playing program of any kind. The scientists at the University of Alberta, have more recently in 2007 developed Chinook, a computer program that has the ability to play checkers and is the first artificial intelligence program to win the world championship title in a competition against human.\r\nDragon Draft by Maverick Game is a multiplayer game that can be played with players from all over the world as well as against the game’s own artificial intelligence. The game provides a simultaneous analyses of all possible moves in a position as well as issue a warning on any wrong move. Click on your piece and then click on the square where you want to move your piece to make a movie. So what are you waiting for? Play this great new multiplayer game online at Dragon Draft!\r\n', 1, 300, 'DragonDraft/dragondraft.php', 'yes', '2015-09-04 00:00:00', '2015-09-04 00:00:00', 'yes', 'dragon-draft', 'Dragon Draft - Play Draft and Checker Games Online | Maverick Game', 'dragon draft, mavericck game, online draft, online checkers, online draught, checkers online, checkers game online, strategy games for pc, online chess', 'Why play boring old checkers online when you can play Dragon Draft? Experience playing multiplayer, strategy games for pc with players from around the globe!', '', 'leaderboard1.png', 'dragondraft.png', 'drag-droft.png', 'dragondraft.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_game_coins`
--

DROP TABLE IF EXISTS `user_game_coins`;
CREATE TABLE IF NOT EXISTS `user_game_coins` (
  `user_id` int(22) NOT NULL,
  `game_coins_id` int(22) NOT NULL AUTO_INCREMENT,
  `registration_coins` int(22) NOT NULL,
  `createdAt` date NOT NULL,
  `heightest_score_coins` int(22) NOT NULL,
  `heightest_score_coins_date` date NOT NULL,
  `utilize_coins` int(22) NOT NULL,
  `utilize_coins_date` date NOT NULL,
  `total_coins` int(22) NOT NULL,
  `fortomo_coins` int(22) NOT NULL,
  PRIMARY KEY (`game_coins_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `user_game_coins`
--

INSERT INTO `user_game_coins` (`user_id`, `game_coins_id`, `registration_coins`, `createdAt`, `heightest_score_coins`, `heightest_score_coins_date`, `utilize_coins`, `utilize_coins_date`, `total_coins`, `fortomo_coins`) VALUES
(92, 1, 50, '2015-09-08', 100, '2015-10-04', 53, '2015-10-04', 100, 0),
(4, 2, 50, '2015-09-08', 100, '2015-09-08', 110, '2015-10-04', 124, 0),
(95, 3, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(96, 4, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(97, 5, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(99, 6, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(100, 7, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(101, 8, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(102, 10, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(103, 11, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(104, 12, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(105, 13, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(106, 14, 50, '2015-09-10', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(107, 15, 50, '2015-09-10', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(108, 16, 50, '2015-09-10', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(109, 17, 50, '2015-09-10', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(110, 18, 20, '2015-09-11', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(111, 19, 20, '2015-09-11', 50, '2015-09-13', 38, '2015-10-03', 32, 0),
(112, 20, 20, '2015-09-13', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(113, 21, 20, '2015-09-13', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(114, 22, 20, '2015-09-14', 0, '0000-00-00', 47, '2015-10-03', 76, 0),
(115, 23, 20, '2015-09-17', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(116, 24, 20, '2015-09-17', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(117, 25, 20, '2015-09-17', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(118, 26, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(119, 27, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(120, 28, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(121, 29, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(122, 30, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(123, 31, 20, '2015-09-18', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(124, 32, 20, '2015-09-18', 0, '0000-00-00', 4, '2015-10-02', 18, 0),
(125, 33, 20, '2015-09-18', 0, '0000-00-00', 4, '2015-10-03', 16, 0),
(126, 34, 20, '2015-09-19', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(127, 35, 20, '2015-09-19', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(128, 36, 20, '2015-09-20', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(129, 37, 20, '2015-09-20', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(130, 38, 20, '2015-09-22', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(131, 39, 20, '2015-09-22', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(132, 40, 20, '2015-09-23', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(133, 41, 20, '2015-09-24', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(134, 42, 20, '2015-09-25', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(135, 43, 20, '2015-09-30', 0, '0000-00-00', 0, '0000-00-00', 20, 0),
(89, 44, 20, '2015-09-30', 20, '2015-09-30', 25, '2015-10-02', 15, 0),
(55, 45, 5, '2015-09-08', 5, '2015-10-06', 28, '2015-10-02', 82, 0),
(136, 46, 50, '2015-10-01', 0, '0000-00-00', 6, '2015-10-02', 84, 0),
(137, 47, 50, '2015-10-01', 0, '0000-00-00', 25, '2015-10-02', 25, 0),
(138, 48, 50, '2015-10-01', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(139, 49, 5, '2015-10-02', 0, '0000-00-00', 0, '0000-00-00', 5, 0),
(140, 50, 5, '2015-10-02', 0, '0000-00-00', 2, '2015-10-02', 9, 0),
(141, 51, 5, '2015-10-02', 0, '0000-00-00', 4, '2015-10-02', 1, 0),
(142, 52, 5, '2015-10-02', 0, '0000-00-00', 5, '2015-10-02', 0, 0),
(143, 53, 50, '2015-10-02', 0, '0000-00-00', 1, '2015-10-02', 69, 0),
(144, 54, 50, '2015-10-02', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(145, 55, 50, '2015-10-02', 0, '0000-00-00', 5, '2015-10-02', 45, 0),
(79, 56, 0, '0000-00-00', 0, '0000-00-00', 2, '2015-10-02', 5, 0),
(56, 57, 0, '0000-00-00', 0, '0000-00-00', 5, '2015-10-02', 0, 0),
(80, 58, 10, '2015-10-02', 10, '2015-10-02', 9, '2015-10-03', 491, 0),
(34, 59, 0, '0000-00-00', 0, '0000-00-00', 92, '2015-10-04', 408, 0),
(146, 60, 50, '2015-10-02', 0, '0000-00-00', 0, '0000-00-00', 50, 0),
(147, 61, 50, '2015-10-03', 0, '0000-00-00', 9, '2015-10-03', 41, 0),
(148, 62, 5, '2015-10-03', 0, '0000-00-00', 0, '0000-00-00', 5, 0),
(149, 63, 5, '2015-10-04', 0, '0000-00-00', 0, '0000-00-00', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_game_score`
--

DROP TABLE IF EXISTS `user_game_score`;
CREATE TABLE IF NOT EXISTS `user_game_score` (
  `user_id` int(22) NOT NULL,
  `game_id` int(22) NOT NULL,
  `user_game_score_id` int(22) NOT NULL AUTO_INCREMENT,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `user_game_score` bigint(22) NOT NULL,
  PRIMARY KEY (`user_game_score_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=322 ;

--
-- Dumping data for table `user_game_score`
--

INSERT INTO `user_game_score` (`user_id`, `game_id`, `user_game_score_id`, `createdAt`, `updatedAt`, `user_game_score`) VALUES
(114, 4, 1, '2015-10-01', '2015-10-01', 4196),
(89, 2, 2, '2015-10-01', '2015-10-01', 6080),
(4, 2, 3, '2015-10-01', '2015-10-01', 1462),
(55, 2, 4, '2015-10-01', '2015-10-01', 6197),
(55, 2, 5, '2015-10-01', '2015-10-01', 5299),
(114, 2, 6, '2015-10-01', '2015-10-01', 4653),
(55, 2, 7, '2015-10-01', '2015-10-01', 5839),
(55, 3, 8, '2015-10-01', '2015-10-01', 107),
(4, 1, 9, '2015-10-01', '2015-10-01', 15000),
(4, 4, 10, '2015-10-01', '2015-10-01', 60),
(114, 1, 11, '2015-10-01', '2015-10-01', 14100),
(4, 1, 12, '2015-10-01', '2015-10-01', 2000),
(114, 1, 13, '2015-10-01', '2015-10-01', 26700),
(92, 1, 14, '2015-10-01', '2015-10-01', 2600),
(114, 1, 15, '2015-10-01', '2015-10-01', 11100),
(34, 1, 16, '2015-10-01', '2015-10-01', 11100),
(114, 1, 17, '2015-10-01', '2015-10-01', 9900),
(114, 2, 18, '2015-10-01', '2015-10-01', 4420),
(4, 1, 19, '2015-10-01', '2015-10-01', 5200),
(92, 1, 20, '2015-10-01', '2015-10-01', 12900),
(114, 1, 21, '2015-10-01', '2015-10-01', 5200),
(114, 1, 22, '2015-10-01', '2015-10-01', 5000),
(4, 1, 23, '2015-10-01', '2015-10-01', 300),
(92, 1, 24, '2015-10-01', '2015-10-01', 10200),
(114, 1, 25, '2015-10-01', '2015-10-01', 12000),
(4, 1, 26, '2015-10-01', '2015-10-01', 4600),
(92, 1, 27, '2015-10-01', '2015-10-01', 15300),
(114, 1, 28, '2015-10-01', '2015-10-01', 7000),
(4, 1, 29, '2015-10-01', '2015-10-01', 4200),
(4, 1, 30, '2015-10-01', '2015-10-01', 200),
(114, 1, 31, '2015-10-01', '2015-10-01', 11100),
(92, 1, 32, '2015-10-01', '2015-10-01', 29400),
(92, 1, 33, '2015-10-01', '2015-10-01', 34800),
(92, 1, 34, '2015-10-01', '2015-10-01', 23400),
(92, 1, 35, '2015-10-01', '2015-10-01', 23100),
(92, 1, 36, '2015-10-01', '2015-10-01', 25800),
(92, 1, 37, '2015-10-01', '2015-10-01', 68400),
(92, 1, 38, '2015-10-01', '2015-10-01', 17700),
(92, 1, 39, '2015-10-01', '2015-10-01', 9900),
(92, 1, 40, '2015-10-01', '2015-10-01', 75600),
(114, 1, 41, '2015-10-01', '2015-10-01', 5600),
(4, 1, 42, '2015-10-01', '2015-10-01', 500),
(4, 1, 43, '2015-10-01', '2015-10-01', 9000),
(114, 2, 44, '2015-10-01', '2015-10-01', 4727),
(114, 2, 45, '2015-10-01', '2015-10-01', 4822),
(114, 2, 46, '2015-10-01', '2015-10-01', 5160),
(124, 2, 47, '2015-10-01', '2015-10-01', 5687),
(55, 2, 48, '2015-10-01', '2015-10-01', 5358),
(4, 2, 49, '2015-10-01', '2015-10-01', 10033),
(111, 1, 50, '2015-10-01', '2015-10-01', 3600),
(111, 1, 51, '2015-10-01', '2015-10-01', 3600),
(111, 1, 52, '2015-10-01', '2015-10-01', 2400),
(111, 1, 53, '2015-10-01', '2015-10-01', 5200),
(111, 1, 54, '2015-10-01', '2015-10-01', 6800),
(111, 1, 55, '2015-10-01', '2015-10-01', 9000),
(111, 1, 56, '2015-10-01', '2015-10-01', 3600),
(136, 1, 57, '2015-10-01', '2015-10-01', 2200),
(111, 1, 58, '2015-10-01', '2015-10-01', 15300),
(136, 1, 59, '2015-10-01', '2015-10-01', 4600),
(136, 1, 60, '2015-10-01', '2015-10-01', 2400),
(111, 1, 61, '2015-10-01', '2015-10-01', 5000),
(124, 1, 62, '2015-10-01', '2015-10-01', 1000),
(124, 1, 63, '2015-10-01', '2015-10-01', 400),
(111, 2, 64, '2015-10-01', '2015-10-01', 16670),
(92, 1, 65, '2015-10-01', '2015-10-01', 36600),
(92, 1, 66, '2015-10-01', '2015-10-01', 18000),
(124, 4, 67, '2015-10-01', '2015-10-01', 420),
(111, 2, 68, '2015-10-01', '2015-10-01', 3368),
(92, 1, 69, '2015-10-01', '2015-10-01', 200400),
(111, 1, 70, '2015-10-01', '2015-10-01', 1000),
(111, 1, 71, '2015-10-01', '2015-10-01', 17400),
(111, 1, 72, '2015-10-01', '2015-10-01', 6200),
(111, 1, 73, '2015-10-01', '2015-10-01', 15600),
(111, 1, 74, '2015-10-01', '2015-10-01', 8400),
(111, 1, 75, '2015-10-01', '2015-10-01', 15300),
(111, 1, 76, '2015-10-01', '2015-10-01', 4800),
(111, 1, 77, '2015-10-01', '2015-10-01', 7200),
(111, 1, 78, '2015-10-01', '2015-10-01', 5200),
(92, 2, 79, '2015-10-01', '2015-10-01', 17274),
(111, 1, 80, '2015-10-01', '2015-10-01', 9400),
(111, 1, 81, '2015-10-01', '2015-10-01', 4000),
(111, 1, 82, '2015-10-01', '2015-10-01', 8400),
(111, 1, 83, '2015-10-01', '2015-10-01', 14700),
(111, 1, 84, '2015-10-01', '2015-10-01', 15600),
(111, 1, 85, '2015-10-01', '2015-10-01', 15000),
(111, 1, 86, '2015-10-01', '2015-10-01', 5800),
(111, 1, 87, '2015-10-01', '2015-10-01', 15000),
(111, 1, 88, '2015-10-01', '2015-10-01', 5400),
(111, 1, 89, '2015-10-01', '2015-10-01', 3800),
(4, 2, 90, '2015-10-02', '2015-10-02', 0),
(4, 2, 91, '2015-10-02', '2015-10-02', 12401),
(137, 1, 92, '2015-10-02', '2015-10-02', 600),
(137, 1, 93, '2015-10-02', '2015-10-02', 1400),
(137, 1, 94, '2015-10-02', '2015-10-02', 1200),
(137, 1, 95, '2015-10-02', '2015-10-02', 200),
(137, 1, 96, '2015-10-02', '2015-10-02', 6200),
(137, 1, 97, '2015-10-02', '2015-10-02', 10500),
(137, 1, 98, '2015-10-02', '2015-10-02', 1000),
(4, 1, 99, '2015-10-02', '2015-10-02', 19500),
(137, 1, 100, '2015-10-02', '2015-10-02', 1400),
(4, 1, 101, '2015-10-02', '2015-10-02', 17700),
(4, 1, 102, '2015-10-02', '2015-10-02', 10500),
(34, 1, 103, '2015-10-02', '2015-10-02', 64000),
(137, 2, 104, '2015-10-02', '2015-10-02', 2478),
(137, 2, 105, '2015-10-02', '2015-10-02', 1748),
(137, 2, 106, '2015-10-02', '2015-10-02', 3446),
(114, 1, 107, '2015-10-02', '2015-10-02', 7800),
(34, 1, 108, '2015-10-02', '2015-10-02', 1400),
(114, 1, 109, '2015-10-02', '2015-10-02', 5200),
(4, 1, 110, '2015-10-02', '2015-10-02', 10800),
(114, 1, 111, '2015-10-02', '2015-10-02', 6900),
(114, 1, 112, '2015-10-02', '2015-10-02', 14400),
(4, 1, 113, '2015-10-02', '2015-10-02', 2600),
(143, 1, 114, '2015-10-02', '2015-10-02', 1200),
(114, 1, 115, '2015-10-02', '2015-10-02', 25200),
(89, 1, 116, '2015-10-02', '2015-10-02', 2700),
(137, 1, 117, '2015-10-02', '2015-10-02', 3000),
(137, 1, 118, '2015-10-02', '2015-10-02', 0),
(89, 1, 119, '2015-10-02', '2015-10-02', 3800),
(137, 1, 120, '2015-10-02', '2015-10-02', 400),
(114, 2, 121, '2015-10-02', '2015-10-02', 6020),
(89, 1, 122, '2015-10-02', '2015-10-02', 2800),
(137, 1, 123, '2015-10-02', '2015-10-02', 3000),
(137, 1, 124, '2015-10-02', '2015-10-02', 800),
(137, 1, 125, '2015-10-02', '2015-10-02', 3800),
(137, 1, 126, '2015-10-02', '2015-10-02', 2000),
(137, 1, 127, '2015-10-02', '2015-10-02', 1400),
(137, 1, 128, '2015-10-02', '2015-10-02', 2000),
(55, 2, 129, '2015-10-02', '2015-10-02', 3992),
(89, 2, 130, '2015-10-02', '2015-10-02', 3876),
(92, 2, 131, '2015-10-02', '2015-10-02', 18723),
(34, 2, 132, '2015-10-02', '2015-10-02', 0),
(55, 1, 133, '2015-10-02', '2015-10-02', 600),
(89, 1, 134, '2015-10-02', '2015-10-02', 2100),
(55, 1, 135, '2015-10-02', '2015-10-02', 10500),
(55, 1, 136, '2015-10-02', '2015-10-02', 6600),
(89, 1, 137, '2015-10-02', '2015-10-02', 600),
(89, 1, 138, '2015-10-02', '2015-10-02', 4500),
(114, 1, 139, '2015-10-02', '2015-10-02', 47600),
(89, 2, 140, '2015-10-02', '2015-10-02', 3216),
(114, 2, 141, '2015-10-02', '2015-10-02', 3100),
(89, 3, 142, '2015-10-02', '2015-10-02', 8),
(89, 3, 143, '2015-10-02', '2015-10-02', -10),
(89, 3, 144, '2015-10-02', '2015-10-02', 0),
(89, 3, 145, '2015-10-02', '2015-10-02', 4),
(145, 2, 146, '2015-10-02', '2015-10-02', 0),
(145, 2, 147, '2015-10-02', '2015-10-02', 0),
(145, 2, 148, '2015-10-02', '2015-10-02', 0),
(145, 2, 149, '2015-10-02', '2015-10-02', 0),
(89, 3, 150, '2015-10-02', '2015-10-02', 35),
(145, 2, 151, '2015-10-02', '2015-10-02', 90),
(89, 3, 152, '2015-10-02', '2015-10-02', 5),
(89, 3, 153, '2015-10-02', '2015-10-02', -13),
(4, 1, 154, '2015-10-02', '2015-10-02', 15300),
(89, 3, 155, '2015-10-02', '2015-10-02', 4),
(4, 3, 156, '2015-10-02', '2015-10-02', 0),
(4, 3, 157, '2015-10-02', '2015-10-02', 6),
(55, 3, 158, '2015-10-02', '2015-10-02', 10),
(55, 3, 159, '2015-10-02', '2015-10-02', 90),
(55, 3, 160, '2015-10-02', '2015-10-02', 15),
(56, 3, 161, '2015-10-02', '2015-10-02', 29),
(89, 2, 162, '2015-10-02', '2015-10-02', 6151),
(56, 2, 163, '2015-10-02', '2015-10-02', 0),
(4, 2, 164, '2015-10-02', '2015-10-02', 0),
(114, 2, 165, '2015-10-02', '2015-10-02', 1682),
(89, 2, 166, '2015-10-02', '2015-10-02', 6024),
(114, 2, 167, '2015-10-02', '2015-10-02', 5503),
(114, 1, 168, '2015-10-02', '2015-10-02', 2600),
(4, 2, 169, '2015-10-02', '2015-10-02', 11914),
(114, 1, 170, '2015-10-02', '2015-10-02', 9900),
(89, 2, 171, '2015-10-02', '2015-10-02', 8830),
(79, 3, 172, '2015-10-02', '2015-10-02', 0),
(79, 3, 173, '2015-10-02', '2015-10-02', 4),
(55, 1, 174, '2015-10-02', '2015-10-02', 3800),
(55, 1, 175, '2015-10-02', '2015-10-02', 800),
(55, 1, 176, '2015-10-02', '2015-10-02', 1600),
(55, 3, 177, '2015-10-02', '2015-10-02', 120),
(55, 3, 178, '2015-10-02', '2015-10-02', -5),
(137, 1, 179, '2015-10-02', '2015-10-02', 1400),
(137, 1, 180, '2015-10-02', '2015-10-02', 1000),
(55, 1, 181, '2015-10-02', '2015-10-02', 2800),
(137, 1, 182, '2015-10-02', '2015-10-02', 2200),
(89, 2, 183, '2015-10-02', '2015-10-02', 7118),
(114, 2, 184, '2015-10-02', '2015-10-02', 3753),
(89, 3, 185, '2015-10-02', '2015-10-02', 80),
(56, 1, 186, '2015-10-02', '2015-10-02', 800),
(56, 1, 187, '2015-10-02', '2015-10-02', 800),
(56, 1, 188, '2015-10-02', '2015-10-02', 1800),
(136, 4, 189, '2015-10-02', '2015-10-02', 430),
(56, 1, 190, '2015-10-02', '2015-10-02', 4500),
(136, 4, 191, '2015-10-02', '2015-10-02', 290),
(136, 4, 192, '2015-10-02', '2015-10-02', 360),
(136, 4, 193, '2015-10-02', '2015-10-02', 420),
(136, 4, 194, '2015-10-02', '2015-10-02', 390),
(55, 2, 195, '2015-10-02', '2015-10-02', 0),
(55, 2, 196, '2015-10-02', '2015-10-02', 6100),
(136, 2, 197, '2015-10-02', '2015-10-02', 3121),
(55, 2, 198, '2015-10-02', '2015-10-02', 624),
(92, 2, 199, '2015-10-02', '2015-10-02', 18187),
(55, 1, 200, '2015-10-02', '2015-10-02', 8700),
(136, 2, 201, '2015-10-02', '2015-10-02', 4697),
(34, 2, 202, '2015-10-02', '2015-10-02', 0),
(55, 3, 203, '2015-10-02', '2015-10-02', 96),
(55, 3, 204, '2015-10-02', '2015-10-02', 17),
(4, 2, 205, '2015-10-02', '2015-10-02', 7839),
(55, 2, 206, '2015-10-02', '2015-10-02', 8714),
(4, 2, 207, '2015-10-02', '2015-10-02', 10866),
(4, 4, 208, '2015-10-02', '2015-10-02', 520),
(4, 4, 209, '2015-10-02', '2015-10-02', 480),
(4, 4, 210, '2015-10-02', '2015-10-02', 490),
(4, 4, 211, '2015-10-02', '2015-10-02', 510),
(92, 4, 212, '2015-10-02', '2015-10-02', 640),
(124, 4, 213, '2015-10-02', '2015-10-02', 500),
(124, 4, 214, '2015-10-02', '2015-10-02', 570),
(124, 4, 215, '2015-10-02', '2015-10-02', 530),
(4, 1, 216, '2015-10-02', '2015-10-02', 6600),
(124, 4, 217, '2015-10-02', '2015-10-02', 570),
(124, 4, 218, '2015-10-02', '2015-10-02', 580),
(4, 1, 219, '2015-10-02', '2015-10-02', 1800),
(4, 1, 220, '2015-10-02', '2015-10-02', 5000),
(4, 1, 221, '2015-10-02', '2015-10-02', 12900),
(4, 1, 222, '2015-10-02', '2015-10-02', 9000),
(124, 4, 223, '2015-10-02', '2015-10-02', 650),
(4, 1, 224, '2015-10-02', '2015-10-02', 16200),
(4, 1, 225, '2015-10-02', '2015-10-02', 3400),
(4, 1, 226, '2015-10-02', '2015-10-02', 12600),
(4, 1, 227, '2015-10-02', '2015-10-02', 5400),
(4, 1, 228, '2015-10-02', '2015-10-02', 7200),
(124, 4, 229, '2015-10-02', '2015-10-02', 680),
(124, 2, 230, '2015-10-02', '2015-10-02', 0),
(4, 2, 231, '2015-10-02', '2015-10-02', 0),
(4, 1, 232, '2015-10-02', '2015-10-02', 600),
(4, 1, 233, '2015-10-02', '2015-10-02', 6400),
(4, 1, 234, '2015-10-02', '2015-10-02', 5200),
(4, 1, 235, '2015-10-02', '2015-10-02', 2400),
(4, 1, 236, '2015-10-02', '2015-10-02', 4400),
(4, 1, 237, '2015-10-02', '2015-10-02', 11100),
(4, 1, 238, '2015-10-02', '2015-10-02', 10800),
(4, 1, 239, '2015-10-02', '2015-10-02', 3400),
(4, 1, 240, '2015-10-02', '2015-10-02', 15600),
(4, 1, 241, '2015-10-02', '2015-10-02', 18900),
(4, 2, 242, '2015-10-02', '2015-10-02', 0),
(4, 2, 243, '2015-10-02', '2015-10-02', 4971),
(92, 1, 244, '2015-10-02', '2015-10-02', 5400),
(136, 2, 245, '2015-10-02', '2015-10-02', 3347),
(92, 2, 246, '2015-10-02', '2015-10-02', 18381),
(92, 2, 247, '2015-10-02', '2015-10-02', 17179),
(114, 1, 248, '2015-10-03', '2015-10-03', 18300),
(114, 1, 249, '2015-10-03', '2015-10-03', 14100),
(114, 2, 250, '2015-10-03', '2015-10-03', 6064),
(114, 2, 251, '2015-10-03', '2015-10-03', 6533),
(114, 3, 252, '2015-10-03', '2015-10-03', 67),
(114, 4, 253, '2015-10-03', '2015-10-03', 220),
(114, 4, 254, '2015-10-03', '2015-10-03', 300),
(114, 4, 255, '2015-10-03', '2015-10-03', 500),
(114, 4, 256, '2015-10-03', '2015-10-03', 360),
(114, 4, 257, '2015-10-03', '2015-10-03', 370),
(114, 3, 258, '2015-10-03', '2015-10-03', 8),
(4, 1, 259, '2015-10-03', '2015-10-03', 24300),
(4, 2, 260, '2015-10-03', '2015-10-03', 7802),
(111, 1, 261, '2015-10-03', '2015-10-03', 4200),
(111, 1, 262, '2015-10-03', '2015-10-03', 21000),
(111, 1, 263, '2015-10-03', '2015-10-03', 5000),
(111, 1, 264, '2015-10-03', '2015-10-03', 14700),
(111, 1, 265, '2015-10-03', '2015-10-03', 2000),
(111, 2, 266, '2015-10-03', '2015-10-03', 7746),
(92, 2, 267, '2015-10-03', '2015-10-03', 19623),
(147, 2, 268, '2015-10-03', '2015-10-03', 17014),
(92, 2, 269, '2015-10-03', '2015-10-03', 20051),
(147, 1, 270, '2015-10-03', '2015-10-03', 13500),
(147, 4, 271, '2015-10-03', '2015-10-03', 0),
(92, 4, 272, '2015-10-03', '2015-10-03', 450),
(147, 4, 273, '2015-10-03', '2015-10-03', 0),
(147, 4, 274, '2015-10-03', '2015-10-03', 60),
(92, 4, 275, '2015-10-03', '2015-10-03', 970),
(92, 4, 276, '2015-10-03', '2015-10-03', 440),
(92, 4, 277, '2015-10-03', '2015-10-03', 1380),
(80, 2, 278, '2015-10-03', '2015-10-03', 0),
(80, 2, 279, '2015-10-03', '2015-10-03', 5583),
(80, 2, 280, '2015-10-03', '2015-10-03', 6448),
(80, 2, 281, '2015-10-03', '2015-10-03', 7520),
(80, 2, 282, '2015-10-03', '2015-10-03', 8317),
(80, 2, 283, '2015-10-03', '2015-10-03', 8927),
(80, 2, 284, '2015-10-03', '2015-10-03', 12114),
(92, 4, 285, '2015-10-03', '2015-10-03', 1470),
(92, 2, 286, '2015-10-03', '2015-10-03', 9376),
(147, 2, 287, '2015-10-03', '2015-10-03', 15777),
(147, 2, 288, '2015-10-03', '2015-10-03', 20197),
(4, 2, 289, '2015-10-03', '2015-10-03', 9173),
(4, 2, 290, '2015-10-03', '2015-10-03', 9762),
(4, 2, 291, '2015-10-03', '2015-10-03', 16719),
(4, 1, 292, '2015-10-03', '2015-10-03', 4200),
(4, 1, 293, '2015-10-03', '2015-10-03', 16200),
(4, 1, 294, '2015-10-03', '2015-10-03', 15900),
(4, 1, 295, '2015-10-03', '2015-10-03', 4400),
(4, 1, 296, '2015-10-03', '2015-10-03', 3400),
(4, 1, 297, '2015-10-03', '2015-10-03', 11100),
(92, 5, 298, '2015-10-03', '2015-10-03', 0),
(125, 5, 299, '2015-10-03', '2015-10-03', 500),
(4, 1, 300, '2015-10-03', '2015-10-03', 14100),
(4, 1, 301, '2015-10-03', '2015-10-03', 6600),
(4, 1, 302, '2015-10-03', '2015-10-03', 5000),
(4, 1, 303, '2015-10-03', '2015-10-03', 12000),
(4, 1, 304, '2015-10-03', '2015-10-03', 3800),
(125, 4, 305, '2015-10-03', '2015-10-03', 0),
(125, 4, 306, '2015-10-03', '2015-10-03', 130),
(4, 1, 307, '2015-10-03', '2015-10-03', 25200),
(4, 1, 308, '2015-10-03', '2015-10-03', 18600),
(125, 4, 309, '2015-10-03', '2015-10-03', 240),
(4, 1, 310, '2015-10-03', '2015-10-03', 14700),
(4, 1, 311, '2015-10-03', '2015-10-03', 4400),
(4, 1, 312, '2015-10-03', '2015-10-03', 13800),
(4, 1, 313, '2015-10-03', '2015-10-03', 16200),
(4, 1, 314, '2015-10-03', '2015-10-03', 18300),
(4, 1, 315, '2015-10-03', '2015-10-03', 4800),
(34, 1, 316, '2015-10-04', '2015-10-04', 600),
(34, 1, 317, '2015-10-04', '2015-10-04', 200),
(92, 1, 318, '2015-10-04', '2015-10-04', 15000),
(92, 4, 319, '2015-10-04', '2015-10-04', 1450),
(4, 2, 320, '2015-10-04', '2015-10-04', 17086),
(92, 2, 321, '2015-10-04', '2015-10-04', 10289);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `user_id` int(22) NOT NULL,
  `package_id` int(22) NOT NULL,
  `user_order_id` int(22) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `order_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`user_id`, `package_id`, `user_order_id`, `order_number`, `createdAt`, `updatedAt`, `order_status`) VALUES
(4, 5, 1, '1F7B27', '2015-09-28', '2015-09-28', 'no'),
(4, 5, 2, '27402C', '2015-09-29', '2015-09-29', 'no'),
(111, 1, 3, '7411C2', '2015-09-29', '2015-09-29', 'no'),
(114, 2, 4, '9464DB', '2015-09-29', '2015-09-29', 'no'),
(114, 1, 5, '79086E', '2015-09-29', '2015-09-29', 'no'),
(114, 3, 6, '845A7B', '2015-09-29', '2015-09-29', 'no'),
(114, 1, 7, '82BD58', '2015-09-29', '2015-09-29', 'no'),
(114, 1, 8, '3E515C', '2015-09-29', '2015-09-29', 'no'),
(92, 1, 9, 'B56BFF', '2015-10-01', '2015-10-01', 'no'),
(136, 1, 10, '257CE1', '2015-10-02', '2015-10-02', 'no'),
(136, 6, 11, 'A10E64', '2015-10-02', '2015-10-02', 'no'),
(34, 2, 12, '8D3B06', '2015-10-02', '2015-10-02', 'no'),
(34, 6, 13, '97C825', '2015-10-02', '2015-10-02', 'no'),
(92, 1, 14, 'ECA155', '2015-10-03', '2015-10-03', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_points`
--

DROP TABLE IF EXISTS `user_points`;
CREATE TABLE IF NOT EXISTS `user_points` (
  `user_id` int(22) NOT NULL,
  `game_id` int(22) NOT NULL,
  `user_point_id` int(22) NOT NULL AUTO_INCREMENT,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL,
  `total_points` int(22) NOT NULL,
  `utilize_points` int(22) NOT NULL,
  `utilize_points_date` date NOT NULL,
  `over_all_points` int(22) NOT NULL,
  PRIMARY KEY (`user_point_id`),
  KEY `FK_user_points` (`user_id`),
  KEY `FK_user_game_points` (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user_points`
--

INSERT INTO `user_points` (`user_id`, `game_id`, `user_point_id`, `createdAt`, `updatedAt`, `total_points`, `utilize_points`, `utilize_points_date`, `over_all_points`) VALUES
(92, 2, 1, '2015-09-30', '2015-10-04', 550, 0, '0000-00-00', 5002),
(4, 1, 2, '2015-09-30', '2015-10-03', 192, 0, '0000-00-00', 5078),
(4, 2, 3, '2015-09-30', '2015-10-04', 310, 0, '0000-00-00', 3048),
(114, 1, 4, '2015-09-30', '2015-10-03', 104, 0, '0000-00-00', 1107),
(114, 3, 5, '2015-10-01', '2015-10-03', 0, 0, '0000-00-00', 0),
(114, 4, 6, '2015-10-01', '2015-10-03', 11, 0, '0000-00-00', 63),
(89, 2, 7, '2015-10-01', '2015-10-02', 80, 0, '0000-00-00', 288),
(55, 2, 8, '2015-10-01', '2015-10-02', 80, 0, '0000-00-00', 415),
(114, 2, 9, '2015-10-01', '2015-10-03', 109, 0, '0000-00-00', 684),
(89, 1, 10, '2015-10-01', '2015-10-02', 8, 0, '0000-00-00', 45),
(55, 1, 11, '2015-10-01', '2015-10-02', 11, 0, '0000-00-00', 50),
(55, 3, 12, '2015-10-01', '2015-10-02', -1, 0, '0000-00-00', -3),
(4, 4, 13, '2015-10-01', '2015-10-02', 4, 0, '0000-00-00', 10),
(92, 1, 14, '2015-10-01', '2015-10-04', 244, 0, '0000-00-00', 1735),
(34, 1, 15, '2015-10-01', '2015-10-04', 29, 0, '0000-00-00', 120),
(124, 2, 16, '2015-10-01', '2015-10-02', 11, 0, '0000-00-00', 22),
(111, 1, 17, '2015-10-01', '2015-10-03', 97, 0, '0000-00-00', 1489),
(136, 1, 18, '2015-10-01', '2015-10-01', 1, 0, '0000-00-00', 2),
(124, 1, 19, '2015-10-01', '2015-10-01', 0, 0, '0000-00-00', 0),
(111, 2, 20, '2015-10-01', '2015-10-03', 54, 0, '0000-00-00', 126),
(124, 4, 21, '2015-10-01', '2015-10-02', 8, 0, '0000-00-00', 36),
(137, 1, 22, '2015-10-02', '2015-10-02', 9, 0, '0000-00-00', 120),
(137, 2, 23, '2015-10-02', '2015-10-02', 13, 0, '0000-00-00', 24),
(143, 1, 24, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(34, 2, 25, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(89, 3, 26, '2015-10-02', '2015-10-02', -2, 0, '0000-00-00', -11),
(145, 2, 27, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(4, 3, 28, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(56, 3, 29, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(56, 2, 30, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(79, 3, 31, '2015-10-02', '2015-10-02', 0, 0, '0000-00-00', 0),
(56, 1, 32, '2015-10-02', '2015-10-02', 1, 0, '0000-00-00', 1),
(136, 4, 33, '2015-10-02', '2015-10-02', 2, 0, '0000-00-00', 7),
(136, 2, 34, '2015-10-02', '2015-10-02', 21, 0, '0000-00-00', 42),
(92, 4, 35, '2015-10-02', '2015-10-04', 14, 0, '0000-00-00', 45),
(147, 2, 36, '2015-10-03', '2015-10-03', 105, 0, '0000-00-00', 204),
(147, 1, 37, '2015-10-03', '2015-10-03', 5, 0, '0000-00-00', 5),
(147, 4, 38, '2015-10-03', '2015-10-03', 0, 0, '0000-00-00', 0),
(80, 2, 39, '2015-10-03', '2015-10-03', 95, 0, '0000-00-00', 292),
(92, 5, 40, '2015-10-03', '2015-10-03', 0, 0, '0000-00-00', 0),
(125, 5, 41, '2015-10-03', '2015-10-03', 1, 0, '0000-00-00', 1),
(125, 4, 42, '2015-10-03', '2015-10-03', 0, 0, '0000-00-00', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `points_score_leaderboard`
--
ALTER TABLE `points_score_leaderboard`
  ADD CONSTRAINT `FK_points_score_leaderboard` FOREIGN KEY (`user_id`) REFERENCES `glogin_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reward_redeem_point`
--
ALTER TABLE `reward_redeem_point`
  ADD CONSTRAINT `FK_reward_redeem_point` FOREIGN KEY (`user_id`) REFERENCES `glogin_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_reward_redeem_points` FOREIGN KEY (`reward_id`) REFERENCES `maverick_game_reward` (`reward_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_points`
--
ALTER TABLE `user_points`
  ADD CONSTRAINT `FK_user_game_points` FOREIGN KEY (`game_id`) REFERENCES `silverhat_games` (`game_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_user_points` FOREIGN KEY (`user_id`) REFERENCES `glogin_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
