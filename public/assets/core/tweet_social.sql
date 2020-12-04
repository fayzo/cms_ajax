-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 07:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tweet_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_on` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `comment_on`, `comment_by`, `comment_at`) VALUES
(13, 'dfd', 74, 61, '2019-05-08 13:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(10) UNSIGNED NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `follow_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(10) UNSIGNED NOT NULL,
  `like_by` int(11) NOT NULL,
  `like_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `like_by`, `like_on`) VALUES
(2, 61, 88),
(11, 61, 74),
(25, 66, 85),
(26, 61, 143),
(27, 61, 182);

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `trend_id` int(10) UNSIGNED NOT NULL,
  `hashtag` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`trend_id`, `hashtag`, `created_on`) VALUES
(1, 'php', '0000-00-00 00:00:00'),
(2, 'ubuzima', '0000-00-00 00:00:00'),
(3, 'd', '2019-05-06 11:06:31'),
(4, 'reka', '2019-05-06 11:07:05'),
(5, 'reka', '2019-05-06 11:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `tweet_id` int(11) NOT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweetBy` int(11) NOT NULL,
  `retweet_id` int(11) NOT NULL,
  `retweet_by` int(11) NOT NULL,
  `tweet_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes_counts` int(11) NOT NULL,
  `retweet_counts` int(11) NOT NULL,
  `posted_on` datetime NOT NULL,
  `retweet_Msg` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`tweet_id`, `status`, `tweetBy`, `retweet_id`, `retweet_by`, `tweet_image`, `likes_counts`, `retweet_counts`, `posted_on`, `retweet_Msg`) VALUES
(178, '', 61, 0, 0, '2019_541.jpg=2019_872.jpg=2019_563.jpg', -2, 0, '2019-05-09 14:47:58', ''),
(184, 'amakuru', 61, 0, 0, '', -2, 0, '2019-05-09 16:47:40', ''),
(186, 'amakuru', 66, 0, 0, '', 0, 0, '2019-05-09 17:45:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `date_registry` date NOT NULL,
  `last_login` datetime NOT NULL,
  `counts_login` int(11) NOT NULL,
  `forgotUsernameCounts` int(11) NOT NULL,
  `forgotUsernameCountsTimesHeCreates` int(11) NOT NULL,
  `forgotUsernameCountsTimesHeCreatespassword` int(11) NOT NULL,
  `profile_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diploma` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbys` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `career`, `country`, `date_birth`, `date_registry`, `last_login`, `counts_login`, `forgotUsernameCounts`, `forgotUsernameCountsTimesHeCreates`, `forgotUsernameCountsTimesHeCreatespassword`, `profile_img`, `cover_img`, `background`, `language`, `color`, `education`, `diploma`, `skills`, `location`, `hobbys`) VALUES
(61, 'faysal', 'shema', 'fayzo', 'shemafaysal@gmail.com', 'fayzo', 'Male', 'engineering', 'RW', '2019-05-01', '2019-05-01', '2020-12-04 19:10:51', 58, 0, 10, 10, '513f.jpg', '5752.jpg', 'build2', 'rw', 'black', 'lycee', 'project', 'web', 'kigali', 'styuding'),
(64, 'faysal', 'shema', 'fayz', 'hemafaysal@gmail.com', 'fafa', 'Female', '', 'RW', '2019-05-02', '2019-05-02', '2019-05-02 01:07:00', 0, 0, 0, 0, '', '', '', '', 'black', '', '0', '0', '0', '0'),
(65, 'faysal', 'shema', 'fay', 'emafaysal@gmail.com', 'fafa', 'Male', '', 'RW', '2019-05-03', '2019-05-02', '2019-05-02 01:08:25', 0, 0, 0, 0, '', '', '', '', 'black', '', '0', '0', '0', '0'),
(66, 'muhre', 'karim', 'karim', 'karim@gmail.com', 'karim', 'Male', '', 'RW', '1994-08-03', '2019-05-05', '2019-05-09 17:44:56', 17, 0, 0, 0, '710head.jpg', '8902.jpg', 'chair', '', 'black', '', '', '', '', ''),
(67, 'musema', 'musema', 'musema', 'musemafaysal@gmail.com', 'musema', 'Male', '', 'RW', '2019-05-06', '2019-05-06', '2019-05-06 23:17:58', 0, 0, 0, 0, '', '', '', '', 'black', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`trend_id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `trend_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `tweet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
