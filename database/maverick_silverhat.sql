-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2015 at 10:56 AM
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
  PRIMARY KEY (`score_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `game_scores`
--

INSERT INTO `game_scores` (`game_id`, `user_id`, `score_id`, `game_score`, `createdAt`, `updateAt`, `isgarbeg`) VALUES
(3, 39, 1, 57, '2015-08-13 07:50:07', '2015-08-13 07:50:07', 'no'),
(2, 39, 4, 2501, '2015-08-13 07:57:29', '2015-08-13 07:57:29', 'no'),
(2, 57, 12, 2936, '2015-08-15 15:34:57', '2015-08-15 15:34:57', 'no'),
(2, 24, 13, 8701, '2015-08-17 02:45:34', '2015-08-17 02:45:34', 'no'),
(1, 39, 40, 800, '2015-08-17 04:41:06', '2015-08-17 04:41:06', 'no'),
(4, 60, 42, 330, '2015-08-17 09:30:27', '2015-08-17 09:30:27', 'no'),
(2, 60, 43, 2913, '2015-08-17 09:45:32', '2015-08-17 09:45:32', 'no'),
(4, 61, 44, 570, '2015-08-17 09:45:54', '2015-08-17 09:45:54', 'no'),
(4, 23, 46, 780, '2015-08-18 06:47:49', '2015-08-18 06:47:49', 'no'),
(1, 65, 47, 800, '2015-08-19 06:30:52', '2015-08-19 06:30:52', 'no'),
(2, 72, 48, 3691, '2015-08-21 12:51:33', '2015-08-21 12:51:33', 'no'),
(4, 55, 50, 320, '2015-08-24 08:58:31', '2015-08-24 08:58:31', 'no'),
(3, 4, 60, 133, '2015-08-26 02:15:51', '2015-08-26 02:15:51', 'no'),
(1, 4, 61, 600, '2015-08-26 04:14:34', '2015-08-26 04:14:34', 'no'),
(1, 23, 62, 200, '2015-08-26 09:47:56', '2015-08-26 09:47:56', 'no'),
(1, 78, 63, 3200, '2015-08-28 00:11:47', '2015-08-28 00:11:47', 'no'),
(2, 55, 64, 6443, '2015-08-31 01:52:24', '2015-08-31 01:52:24', 'no'),
(3, 55, 65, 11, '2015-08-31 02:02:40', '2015-08-31 02:02:40', 'no'),
(2, 6, 66, 9739, '2015-08-31 12:45:21', '2015-08-31 12:45:21', 'no'),
(2, 80, 67, 6226, '2015-09-01 03:02:31', '2015-09-01 03:02:31', 'no'),
(3, 80, 68, 144, '2015-09-01 04:41:28', '2015-09-01 04:41:28', 'no'),
(2, 82, 69, 6926, '2015-09-01 14:39:28', '2015-09-01 14:39:28', 'no'),
(2, 89, 70, 3862, '2015-09-04 04:39:20', '2015-09-04 04:39:20', 'no'),
(1, 89, 71, 9000, '2015-09-04 05:59:41', '2015-09-04 05:59:41', 'no'),
(2, 92, 72, 17435, '2015-09-06 07:35:16', '2015-09-06 07:35:16', 'no'),
(2, 4, 78, 9606, '2015-09-08 07:54:18', '2015-09-08 07:54:18', 'no'),
(2, 71, 79, 766, '2015-09-08 08:00:51', '2015-09-08 08:00:51', 'no'),
(1, 34, 80, 6671, '2015-09-09 07:32:23', '2015-09-09 07:32:23', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `glogin_users`
--

DROP TABLE IF EXISTS `glogin_users`;
CREATE TABLE IF NOT EXISTS `glogin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=106 ;

--
-- Dumping data for table `glogin_users`
--

INSERT INTO `glogin_users` (`id`, `email`, `name`, `photo`, `registered`, `user_name`, `password`, `mobile_number`, `gender`, `updatedAt`, `activation`, `verificationcode`, `isActive`, `birth_date`, `address`, `Fuid`, `resitration_type`) VALUES
(4, 'azeem@hotmail.com', 'Azeem Akram', '10.jpg', '2015-07-26 19:00:00', 'azeembscs16', 'e10adc3949ba59abbe56e057f20f883e', '03332828275', 'male', '2015-08-17', '078b96eee4c0285aa88c4e25d1864e2d', 'npqrwxyzjkmn890aghjkkmnp0abcbcdf', 'no', '1996-05-17 00:00:00', 'Karachi', 0, ''),
(6, 'raheelaslam1234@gmail.com', 'Raheel Aslam ', 'small6.jpg', '0000-00-00 00:00:00', 'Maverick', 'cc584d2d5a3909ae602c3811b7c20cbd', '', 'male', '2015-08-31', '8bfc74a2412993bffede887d49c7a0df', 'wxyz1234yzabcd90ab6789mnpqjkmn', 'yes', '1985-10-01 00:00:00', 'Karachi', 0, ''),
(19, 'hasanmumel@gmail.com', 'Hasan', '', '0000-00-00 00:00:00', 'Hsn', '8a5e2fa8b30d9efe5e0f76796192ca6d', '', 'male', '2015-08-03', '440af66c8a22ff8926a54bc557c98c54', 'vwxybcdfmnpqabcddfghnpqrghjk0abc', 'yes', '1993-08-01 00:00:00', 'Karachi', 0, ''),
(23, 'amohsin@golive.com.pk', 'Aamir', '1538747_714874441869807_1508439261_n.jpg', '2015-08-02 22:07:07', 'ammo', 'e2fc714c4727ee9395f324cd2e7f331f', '03142200455', 'male', '2015-08-03', 'd53a9ff3b48078290f45d9bc0ad5755f', 'jkmnbcdfxyzghjkstvwhjkmjkmn6789', 'no', '1992-05-11 00:00:00', 'Karachi', 0, ''),
(24, 'm.aamirmohsin@yahoo.com', 'aamir', '1538747_714874441869807_1508439261_n.jpg', '2015-08-01 22:06:14', 'ammo3', 'e10adc3949ba59abbe56e057f20f883e', '03142200455', 'male', '2015-08-11', '82c02e5529669b4f5fa2586af30831da', '90abkmnp2345abcdqrstjkmnwxyz3456', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, ''),
(34, 'syed.ahmed1@khi.iba.edu.pk', 'Faraz Ahmed', '87.jpg', '0000-00-00 00:00:00', 'Arsinx', '1f36c45023f2273065c0dfa0a66d6f27', '+923333087782', 'male', '2015-08-04', 'f3636f409ec12d9c8a4afa7f50c061f8', 'rstv2345stvw3456fghj45674567mnpq', 'yes', '1993-01-01 00:00:00', 'Karachi', 0, ''),
(36, 'alsaadrajput@gmail.com', 'Saad', '', '0000-00-00 00:00:00', 'Saad', 'd150b0154b9e182445be15e16853cbf2', '03410269488', 'male', '2015-08-05', '808ef376334265e92832350125b8b82f', 'fghj123456786789fghj90ab12347890', 'yes', '1995-02-01 00:00:00', 'Karachi', 0, ''),
(39, 'maverickgame@gmail.com', 'Maverick Game', '14.jpg', '2015-08-05 23:07:06', 'maverickgames', 'e10adc3949ba59abbe56e057f20f883e', '', 'male', '2015-08-17', '', '', '', '0000-00-00 00:00:00', '', 0, ''),
(45, 'MZeeshan@golive.com.pk', 'zeeshan', '85.jpg', '0000-00-00 00:00:00', 'zeeshan91', 'e10adc3949ba59abbe56e057f20f883e', '123123123', '', '2015-08-07', 'e7e32468825a23dc417aeef38084484f', 'kmnpkmnpabcd4567pqrsvwxy1234bcdf', 'no', '1924-12-31 00:00:00', 'Karachi', 0, ''),
(55, 'shiraz@golive.com.pk', 'Shiraz', '54.jpg', '2015-08-12 20:30:09', 'Shiraz', '25f9e794323b453885f5181f1b624d0b', '03322136181', 'male', '2015-08-13', '6123aa8889f17ab132838a4f19dfaa82', 'pqrspqrstvwx0abcstvw2345yzvwxy', 'no', '1992-04-02 00:00:00', 'Karachi', 0, ''),
(56, 'hashamvs@gmail.com', 'hasham', '', '2015-08-13 02:08:17', 'hasham', '069699d5a0cdea3285fd6d15fbcadec3', '03213868546', 'male', '2015-08-13', '81a748f64c11d85aea0cd3b656123b07', '4567mnpqabcdfghj34563456vwxywxyz', 'yes', '1986-09-01 00:00:00', 'Karachi', 0, ''),
(57, 'abdulmuizz111@hotmail.com', 'Abdul Muizz', '', '2015-08-15 10:28:57', 'Muizz98', '0a8113941d35466c79218e83175665ef', '03333550685', 'male', '2015-08-15', '3c6d85aa814844b72c6f55d1c503d249', '90abtvwx5678890ahjkmabcd5678ghjk', 'no', '2000-06-30 00:00:00', 'Karachi', 0, ''),
(58, 'azeem.akram78@gmail.com', 'Azeem', '', '2015-08-16 19:42:46', 'azeembscs', 'e10adc3949ba59abbe56e057f20f883e', '033325826198', 'male', '2015-08-17', 'f72ec77678933bc73ff738749161e125', 'hjkmstvw23453456xyztvwxjkmnstvw', 'no', '1985-12-31 00:00:00', 'Karachi', 0, ''),
(59, 'azeem.akram78@hotmail.com', 'Azeem', '', '2015-08-16 19:51:42', 'azeembscs', 'e10adc3949ba59abbe56e057f20f883e', '03222586198', 'male', '2015-08-17', '998f1f5d6f7ec82e00305f9bc8b4121d', 'xyzcdfg90ab0abcyz6789tvwxwxyz', 'no', '1985-12-31 00:00:00', 'Karachi', 0, ''),
(60, 'rahil87@gmail.com', 'rahil ahmad khan', '45.jpg', '2015-08-17 04:22:08', 'rahilahmadkhan', '450d914acdb5cee103d16a3b3d4ea99f', '03332339492', 'male', '2015-08-17', 'bfb6492c3524dbb23fa314531309bb2b', 'rstvdfgh4567abcdbcdf1234zkmnp', 'no', '1985-04-01 00:00:00', 'Karachi', 0, ''),
(61, 'fahmeed.zaheer47@gmail.com', 'fahmeed', '', '2015-08-17 04:34:56', 'fahmeed123', '9eedd3d2dd0c5b0bdf39f5f321ffc4e2', '', 'male', '2015-08-17', 'baa08995730a693dffc99951fa24e31d', 'ghjktvwxqrst7890cdfgmnpqqrstcdfg', 'yes', '1990-12-31 00:00:00', 'Karachi', 0, ''),
(62, 'fhd_ahmed@hotmail.com', 'fahad', '', '2015-08-18 21:30:30', 'ahmed.fhd', '7bc6c31880aeda581aa34e218af25753', '03452896568', 'male', '2015-08-19', 'f43db69675472effa7dd9665317f968b', '5678cdfg3456qrstjkmnwxyzwxyz1234', 'no', '2005-12-31 00:00:00', 'Karachi', 0, ''),
(63, 'asim_najam021@yahoo.com', 'asim', '', '2015-08-18 21:37:46', 'asim', 'a1f3a7f1e391ea222dbc6d5778628f1b', '03452874081', 'male', '2015-08-19', 'a019c74e8314c419d49080c5bc8a1127', 'wxyzyzrstv890adfghnpqrcdfgrstv', 'yes', '1987-01-31 00:00:00', 'Karachi', 0, ''),
(64, 'jinab.sahib@gmail.com', 'jinab sahab', '', '2015-08-19 01:18:29', 'jinab', '3405e7a9e2b191de574578c697095df4', '0333-2134445', 'male', '2015-08-19', 'ac928dce84d7557bb1e4d991094d1a53', 'dfgh5678npqr890awxyz67893456xyz', 'no', '1988-06-01 00:00:00', 'Karachi', 0, ''),
(65, 'salman.alkhalid@gmail.com', 'Salman Mahmud', '', '2015-08-19 01:19:41', 'salu', 'c7463795f8569241b24723661fdd0f8f', '0333-2141618', 'male', '2015-08-19', 'a1e63d5bd19dc053d189ab59f54dd883', '4567xyzwxyz5678jkmn90abcdfgqrst', 'no', '1982-08-01 00:00:00', 'Karachi', 0, ''),
(69, 'sidra.javed2108@gmail.com', 'Sidra', '', '2015-08-20 23:05:40', 'Sidra', 'b1cf73a6869972c7b94e7945bf4e61f6', '03332431410', 'female', '2015-08-21', '9af1f8b05b6b47a97e319869c0431c6b', 'z78904567890atvwxkmnpmnpqstvw', 'yes', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(71, 'talibjaml75@gmail.com', 'talib', '61.jpg', '2015-08-21 01:34:30', 'talib', '202cb962ac59075b964b07152d234b70', '03462200265', 'Male', '2015-09-08', '67f1e2fa27c71871b5b2c6b9f9e6e8bb', 'qrst', 'no', '1990-06-29 00:00:00', 'karachi', 0, 'android_user'),
(72, 'hadi.gesdrive@gmail.com', 'Hadi Babul', '', '2015-08-21 07:44:19', 'hadibabul', '2f3d1021fb562dc871a3f9c4b1c87baa', '03472914799', 'male', '2015-08-21', '98f3c895be47419096b111cc5e9f7b78', '90ab', 'yes', '1992-10-01 00:00:00', 'Lahore', 0, 'web_user'),
(73, 'saghir_hassan@outlook.com', 'Saghir Hassan', '', '2015-08-21 08:24:22', 'Saghir', '8b0cb2ae37f9b476d7c06ce6e496f7d1', '03313788712', 'male', '2015-08-21', 'f51f50228e6e50b6c00027c15ee9335b', 'mnpq', 'no', '1993-12-31 00:00:00', 'Lahore', 0, 'web_user'),
(74, 'keith@hot.ee', 'Kate V', '', '2015-08-24 00:00:57', 'KateVo', 'c8f4d606ffe390f7e9f78764a05a5ed3', '123456789', 'female', '2015-08-24', '136aa28f6517efb63be8b73daa04050c', 'bcdf', 'no', '1996-07-31 00:00:00', 'xxxx', 0, 'web_user'),
(76, 'maxud.jafri87@gmail.com', 'Maxud', '', '2015-08-25 20:09:13', 'maxud.jafri87@gmail.com', '62680fb16dbe38e0e5d97ba89295913b', '03350250840', 'male', '2015-08-26', 'f0701c2a7f57edb1fd1b640e823c19a0', 'pqrs', 'yes', '1979-08-31 00:00:00', 'Karachi', 0, 'web_user'),
(77, 'raamlagg@gmail.com', 'ramla ', '', '2015-08-26 23:44:04', 'ramla', '515ff211278775b472dc073d67a3dc9a', '778809876', 'female', '2015-08-27', '3b62fea71dc61287bafec7117511f56b', 'jkmn', 'no', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(78, 'saher_najam@hotmail.com', 'Saher', '', '2015-08-27 19:01:35', 'sahernajam', '50814bb2d11972cb58f63e8ece6444cc', '03333529370', 'female', '2015-08-28', '513605028f422f82a755fd68847218dc', 'ghjk', 'yes', '1988-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(79, 'nadiyarashid725@gmail.com', 'Nadiya', '', '2015-08-27 19:17:24', 'nadiya', 'ecf954b21d0e019d79ad62426a56ffc4', '03312277745', 'female', '2015-08-28', 'bdf6d704e119de8d4df7c4cf25d624ff', 'ghjk', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(80, 'abdullahshah801@rocketmail.com', 'Shah', '13.jpg', '2015-08-31 02:48:41', 'Shah', 'e10adc3949ba59abbe56e057f20f883e', '21414214221', 'male', '2015-08-31', 'affc5d95fcad5ef66bf89f9318320d7d', '5678', 'yes', '1932-09-01 00:00:00', 'Karachi', 0, 'web_user'),
(81, 'salmanzahid.devp@yahoo.com', 'Salman', '', '2015-09-01 07:47:59', 'Salman', 'bf7e0efebbba0f7727d9aaa717cc4a89', '03452163419', 'male', '2015-09-01', '976e6e00eb5282a32df5bcbe7db7bdc0', 'npqr', 'yes', '1994-02-01 00:00:00', 'Karachi', 0, 'web_user'),
(82, 'fahimahmed.ku@gmail.com', 'fahim', '', '2015-09-01 09:27:57', 'feema', '25f9e794323b453885f5181f1b624d0b', '03353067890', 'male', '2015-09-01', '999f3ad876f87e9119c5d0a923e13ada', 'dfgh', 'no', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(83, 'umairiqbal86@hotmail.com', 'Umair', '', '2015-09-01 09:39:51', 'Umair', 'aafd4fb9adee64d2fce872647245e083', '03218212852', 'male', '2015-09-01', '7b2a950a95fed591238174a42d3079d0', '5678', 'no', '1986-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(84, 'tyu', '', '', '2015-09-02 01:09:00', 'ghj', '3d4044d65abdda407a92991f1300ec97', '566', 'Male', '2015-09-02', '7cf03cb842f7975c796f722fa5f7c850', '6789', 'no', '2015-08-02 00:00:00', 'tyu', 0, 'android_user'),
(85, '10beeaahsan@seecs.edu.pk', 'Ahmad Mujtaba Ahsan', '', '2015-09-02 21:55:43', 'AhmadMujtaba', '297a565ff9320c1e5b0d5679e76c97e1', '923345158525', 'male', '2015-09-03', '1cad51b5c381a9551721a3fa8acf102f', '4567', 'yes', '1992-04-01 00:00:00', 'Suwon, South Korea', 0, 'web_user'),
(86, 'mhayatq@gmail.com', 'Hayat Qureshi', '', '2015-09-03 00:05:56', 'hayatq', 'e9bc0e13a8a16cbb07b175d92a113126', '+923008970833', 'male', '2015-09-03', '19068902bb7946b43de52dddf4f84e41', 'abcd', 'yes', '1986-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(87, 'syedfaizan_1418@hotmail.com', 'faizan', '', '2015-09-03 05:47:30', 'faizan', 'e7f6edee630321a404ab22a0f516403d', '03473833806', 'male', '2015-09-03', '668b371e1aab75aa66bafd59cb195556', '6789', 'no', '1986-07-01 00:00:00', 'Karachi', 0, 'web_user'),
(88, 'immad.gt@gmail.com', 'Immad Uddin Khan', '', '2015-09-03 20:01:19', 'immaduddinkhan', 'ee5059a2c80571b8b48473f69b2e5256', '923323708986', 'male', '2015-09-04', '686f54df35028aac8cd0b56b4dc10712', 'pqrs', 'yes', '2015-09-01 00:00:00', 'Karachi', 0, 'web_user'),
(89, 'hasib_rnr@hotmail.com', 'haseeb ahmed', '', '2015-09-03 23:27:31', 'HASIB', 'bcd43839eb19384dddc5aaf0ec24d8a5', '03452114772', 'male', '2015-09-04', '1cd30ed7fb2b1a5335b14c341db0b0df', 'rstv', 'yes', '1990-05-21 00:00:00', 'Karachi', 0, 'web_user'),
(90, 'azizakberali@gmail.com', 'Aziz Valliani', '', '2015-09-04 01:57:07', 'aziz', '25d55ad283aa400af464c76d713c07ad', '+3343745425', 'male', '2015-09-04', 'c87e485d33d5a885e99a6c30941e9ca0', 'z', 'yes', '1987-08-01 00:00:00', 'Karachi', 0, 'web_user'),
(91, 'haris.khalil@adsells.biz', 'Haris Khalil', '', '2015-09-05 07:46:53', 'haris khalil', 'e36f1175ec4fc0b0b242d975b14f96d3', '03028488060', 'male', '2015-09-05', 'e6e11f169c8b9eb58ed5739bc0eb121d', '4567', 'yes', '1983-12-01 00:00:00', 'Lahore', 0, 'web_user'),
(92, 'raheelaslam@golive.com.pk', 'Raheel Aslam', '', '2015-09-06 02:22:05', 'Raheel', 'cc584d2d5a3909ae602c3811b7c20cbd', '03458505713', 'male', '2015-09-06', '1fb698ce0cd4207fa9bb08ece06c3821', 'tvwx', 'yes', '1985-10-01 00:00:00', 'Karachi', 0, 'web_user'),
(93, 'talhahsn@gmail.com', 'Talha Hassan', '', '2015-09-06 07:21:17', 'talhahsn', '4c9cf79b7b216d8562fe3776b2d96993', '+923433497937', 'male', '2015-09-06', 'b2f63385eee6bea848a2bec451bf16d5', 'ghjk', 'yes', '1994-11-30 00:00:00', 'Karachi', 0, 'web_user'),
(94, 'ewrw@adf.com', 'qerwe', '', '2015-09-07 04:01:20', 'werwr', '81dc9bdb52d04dc20036dbd8313ed055', '21312312312312313', 'male', '2015-09-07', '08715130e9968c5cf61e3119b94f852e', '90ab', 'no', '1999-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(95, 'naeemmaitla@ymail.com', 'Naeem', '', '2015-09-07 22:36:08', 'Naeem Maitla', '3e34861255f40f02a1a97493499df369', '03347434180', 'male', '2015-09-08', '803128d3f3497ffeeaa63f68e7cddbc8', 'abcd', 'yes', '1995-06-01 00:00:00', 'Lahore', 0, 'web_user'),
(96, 'iqraidreesch@gmail.com', 'Iqra idrees', '', '2015-09-08 00:16:16', 'iqra ch', '6608329c4cede1f03fe7f82ccc0edd35', '03238854430', 'female', '2015-09-08', 'f4ef18ea67e67e42c1aab13c12764ba0', 'dfgh', 'yes', '1997-01-01 00:00:00', 'Lahore', 0, 'web_user'),
(97, 'tariqali99.ta@gamil.com', 'Tariq ali', '', '2015-09-08 02:21:42', 'Tariq ali', '86bb7a11ed3d7e1697893ef4d4737257', '03084708615', 'male', '2015-09-08', '6777f76f71d52ea29b5034c084f95288', '2345', 'no', '1998-04-01 00:00:00', 'Lahore', 0, 'web_user'),
(99, 'abdulrehman741@yahoo.com', 'Abdul Rehman Amin', '', '2015-09-08 04:05:07', 'Potter32', '511bb14dba6202547a87224073ef7d97', '03324338815', 'male', '2015-09-08', '20223523575ad91ae2f9aec146e0b134', 'qrst', 'yes', '1992-08-01 00:00:00', 'Lahore', 0, 'web_user'),
(100, 'masoodahm3d@gmail.com', 'masood', '', '2015-09-08 05:20:14', 'mash', 'e807f1fcf82d132f9bb018ca6738a19f', '03323090468', 'male', '2015-09-08', '2abb6ba0e71bee1ee02c44b7489e69cb', 'jkmn', 'yes', '1924-12-31 00:00:00', 'Karachi', 0, 'web_user'),
(101, 'ahmad-furzaib@hotmail.com', 'Ahmad Furzaib', '', '2015-09-08 16:43:34', 'Ahmad ', '6950aac2d7932e1f1a4c3cf6ada1316e', '03236820007', 'male', '2015-09-08', 'a7d2516303e7960ccbf6932a80983e77', '90ab', 'no', '1993-03-01 00:00:00', 'Burewala', 0, 'web_user'),
(102, 'abubakarw92@gmail.com', 'Abu Bakar', '', '2015-09-09 06:51:24', 'maverickgamer', '86f86a00f99ee976c452e8ff1ac94914', '03324440444', 'male', '2015-09-09', 'fedc01581bd4c4112ef19666382677a9', '6789', 'no', '1995-08-01 00:00:00', 'Lahore', 0, 'web_user'),
(103, 'mashalmabood@gmail.com', 'Mashal Raheel', '', '2015-09-09 07:20:06', 'Mystique88', 'aed084e6936cff8642d57df1765daa8c', '03219260777', 'female', '2015-09-09', 'd43da615b1ecc1ceb1eabed145a9de5e', 'stvw', 'yes', '1988-12-01 00:00:00', 'Karachi', 0, 'web_user'),
(104, 'shirjeelchaudhry@hotmail.com', 'shirjeel', '', '2015-09-09 08:44:07', 'shirjeelchaudhry@hotmail.com', '06a2c2b3e9921dd2e7204db7cce0fc76', '03215753521', 'male', '2015-09-09', 'bd934ac7e77c7f8fb3e807647507690f', '3456', 'no', '1984-05-21 00:00:00', 'Warwick, UK', 0, 'web_user'),
(105, 'waji28@gmail.com', 'Wajid Ali Khan', '', '2015-09-09 18:12:41', 'waji28', '6d9b78441331078313793c274db92a68', '03212345886', 'male', '2015-09-09', '938a97b6d181da9beec87d1bf3fb5eba', 'jkmn', 'yes', '1984-04-01 00:00:00', 'Karachi', 0, 'web_user');

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
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `silverhat_games`
--

INSERT INTO `silverhat_games` (`game_id`, `game_name`, `game_home_image`, `game_background_image`, `game_description`, `game_price`, `game_point_ratio`, `game_file`, `isActive`, `createdAt`, `updatedAt`, `isFeatured`, `game_seo`, `game_seo_title`, `meta_tag_keywords`, `meta_tag_description`, `game_top_header`, `game_leaderboard_image`, `game_image`, `game_instrustion_image`) VALUES
(1, 'Do The Dive', 'dothedive.png', 'dothedive.jpg', 'Skydiving would be so much fun in a calm and nice weather. Imagine, its like flying in the sky and the moment you jump from the plane makes it even more exciting.\nDo the dive is a free online adventure game which takes you across the sky, taking risks and making decisions to determine your final score. Glide your way through the sky filled with dangerous Rocky Mountains with high towers & tall coniferous trees. Pick up diamonds as you go down to score the ultimate high score. Depleting level of oxygen reduces the chances of survival, so keep collecting the oxygen bottles as you go down. Oxygen is placed in locations designed to test your diving skills to the max. Oh! And don’t forget about the angry birds who bash into you causing sudden loss of oxygen. As you go down the sky, the level increases causing more obstacles to appear and making it harder for you to survive. \nYour challenge is to go down and make the highest score possible. Can you reach the ground before the oxygen runs out? Can you survive this extreme adventurous job? Find out by playing this online action game!\n', 3, 12, 'DoTheDive/dothedrive.php', 'yes', '2015-07-25 03:08:04', '2015-07-25 03:15:17', 'yes', 'do-the-dive', 'Do the Dive - Play Adventure Games Online | Maverick Game', 'do the dive, maverick game, adventure game, online games, action game, diving game, play adventure games, free action games', 'Do the Dive is a free action game online at Maverick Game. Play this adventure game by jumping from a plane- without a parachute!', 'dothedrive.png', 'banner-do-the-dive.jpg', 'dothedive.png', 'dothedive.png'),
(2, 'Furious Red', 'furiousred.png', 'furiousred.jpg', 'Either diving, racing or drifting, doesn’t matter what you call it but they are the adrenaline rushing deviations of outdoor sports and the online version is no less. They are the most played and wanted category in online gaming and especially for the teens who are enthusiasts and show a keen interest in cars. It’s not just the speed which gives you a pull towards racing games, it’s the fun and enjoyment that you derive from all the adventure and mission that you have.\nThe Furious Red is car racing game for boys which is all about when you’re getting late to be somewhere and you’re on a traffic congested road, so you put your foot down and go as fast as you can splitting the lanes and overtaking the cars. But the best part is that you have to do it driving an amazing GT-F1 supercar which is superfast and has an amazing hopping ability plus handles amazingly. All you have to do is avoid crash, collect points and reach you destination on time.\nI bet your car can handle it, but can you? Play this free online racing game and many other car racing games here!\n', 4, 16, 'FuriousRed/furiousred.php', 'yes', '2015-07-25 06:19:19', '2015-07-25 04:11:10', 'yes', 'furious-red', 'The Furious Red - Play Car Racing Games | Maverick Game ', 'furious red, racing games, car racing games, play racing games, online adventure games, action games, free online games', 'Move aside Speed Racer! The Furious Red is here! Play this crazy car racing game by driving a GT-F1 supercar and beat the traffic at Maverick Game!', 'furiousred.png', 'banner-furious-red.jpg', 'furiousred.png', 'furiousred.png'),
(3, 'Master cook', 'master-cook.png', 'master-cook.jpg', 'Girls love cooking as it provides you with the most delicious and amazing meals plus improves the skills every time you do it. Cooking Games are among the best online games which give you a similar experience- you have to do your best and try make the meal as deliciously as possible! This will entertain you and teach you everything you need to know about the kitchen. There''s no need for reservations because we''ve got a game waiting for you at our Restaurant Game. \nWe''ve got the game where you have to cook just like Mom used to cook! Master Cook is a online role playing game which is about you owning a perfect, new little restaurant, where you have to cook delicious noodles, mix them with the vegetables and serve them as the customer want it. You have a queue of customers waiting to be served. Serve as soon as possible and as similar to their wants to get a handsome tip and money for the meal.\nBe the greatest chef of all time by serving your customers food that satisfies them and grow your business by serving delicacies on time. So grab your spoon and spatula and start mixing, boiling, and sautéing with our game. You can play games online here!\n', 2, 10, 'MasterCook/mastercook.php', 'yes', '2015-07-27 05:08:08', '2015-07-27 05:08:08', 'yes', 'master-cook', 'Master Cook - Play RPG Games for Girls | Maverick Game', 'master cook, cooking game, maverick game, rpg game, role playing game, rpg game for girls, cooking game for girls', 'Cook with your heart in the cooking role playing game for girls. Master Cook lets you create the most sumptious dishes to serve in your very own restaurant!', 'mastercook.png', 'banner-master-cook.jpg', 'master-cook.png', 'mastercook.png'),
(4, 'Wordster', 'wordster.png', 'wordster.jpg', 'Wordster is a word builder game which are popular for helping kids recognize words. In searching for words, the kids read and memorize the words in a way that they enjoy and which helps them learn the words and their spelling. Wordster is a free online game. The technology for Wordster game is shared with a very vast dictionary of beginner and advanced words.\nIn this game you are given a forest theme. You get letters carved on pieces of stones from which you have to make words. You have a limited amount of time available so that you start thinking quickly and learn to think under stressed and difficult situations. To prevent the time from running out you have to be quick at making new words which gets you more leverage on time. You are also rewarded with a score based on the length of the word- the bigger the word, the bigger the score.\nWould you let this bee help you make your vocabulary better? In this mysterious forest pick up the stones with letters on it and make as many words as you can before the timer runs out. Play Wordster, an amazing kids game online here and learn new words the fun way.\n', 2, 14, 'Wordster/wordster.php', 'yes', '2015-07-29 00:00:00', '2015-07-27 00:00:00', 'yes', 'word-ster', 'Wordster - Play Educational Games Online | Maverick Game', 'wordster, maverick game, educational game, learning game, spelling game, spelling bee, games for kids, online games for kids', 'Wordster, an online educational game for kids in elementary school helps child spell like a pro! Now your kids Spelling Bee Competition means a sure win!', 'wordster.png', 'banner-wordster.jpg', 'wordster.png', 'wordster.png'),
(5, 'Dragon Draft', 'dragondraft.png', 'draon-draft.png', 'Did you know the draft game has a history that spans thousands of years? There has been many discoveries in the ancient cities of Sumer and Egypt about similar strategy games that were played by royalty and soldiers. In ancient China, Rome and Greece, soldiers and generals used to play the draft game in order to hone their martial skills and make battle plans.\r\nAlthough the traditional draft game has been here for thousands of years, the online version of this game came into being in 1950 when Arthur Samuel created the first board game playing program of any kind. The scientists at the University of Alberta, have more recently in 2007 developed Chinook, a computer program that has the ability to play checkers and is the first artificial intelligence program to win the world championship title in a competition against human.\r\nDragon Draft by Maverick Game is a multiplayer game that can be played with players from all over the world as well as against the game’s own artificial intelligence. The game provides a simultaneous analyses of all possible moves in a position as well as issue a warning on any wrong move. Click on your piece and then click on the square where you want to move your piece to make a movie. So what are you waiting for? Play this great new multiplayer game online at Dragon Draft!\r\n', 1, 8, 'DragonDraft/dragondraft.php', 'yes', '2015-09-04 00:00:00', '2015-09-04 00:00:00', 'yes', 'dragon-draft', 'Dragon Draft - Play Strategy Games Online | Maverick Game', 'checkers online, checkers game online, draft game online, dragon draft, multiplayer games, strategy games, multiplayer games online, strategy games for pc', 'Why play boring old checkers when you can play Dragon Draft online? Experience playing this online multiplayer game with players from around the globe!', '', 'leaderboard1.png', 'dragondraft.png', 'drag-droft.png');

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
  PRIMARY KEY (`game_coins_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_game_coins`
--

INSERT INTO `user_game_coins` (`user_id`, `game_coins_id`, `registration_coins`, `createdAt`, `heightest_score_coins`, `heightest_score_coins_date`, `utilize_coins`, `utilize_coins_date`, `total_coins`) VALUES
(92, 1, 50, '2015-09-08', 100, '2015-09-10', 0, '0000-00-00', 100),
(4, 2, 50, '2015-09-08', 100, '2015-09-08', 0, '0000-00-00', 150),
(95, 3, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(96, 4, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(97, 5, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(99, 6, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(100, 7, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(101, 8, 50, '2015-09-08', 0, '0000-00-00', 0, '0000-00-00', 50),
(34, 9, 50, '2015-09-09', 100, '2015-09-09', 4, '2015-09-09', 126),
(102, 10, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50),
(103, 11, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50),
(104, 12, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50),
(105, 13, 50, '2015-09-09', 0, '0000-00-00', 0, '0000-00-00', 50);

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
  PRIMARY KEY (`user_point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_points`
--

INSERT INTO `user_points` (`user_id`, `game_id`, `user_point_id`, `createdAt`, `updatedAt`, `total_points`, `utilize_points`, `utilize_points_date`, `over_all_points`) VALUES
(71, 2, 2, '2015-09-08', '2015-09-08', 47, 0, '0000-00-00', 0),
(4, 2, 3, '2015-09-09', '2015-09-09', 600, 0, '0000-00-00', 600),
(4, 1, 4, '2015-09-09', '2015-09-09', 50, 0, '0000-00-00', 50),
(34, 1, 5, '2015-09-09', '2015-09-09', 555, 0, '0000-00-00', 555),
(92, 2, 6, '2015-09-09', '2015-09-09', 1089, 0, '0000-00-00', 1089);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
