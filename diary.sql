-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 07:06 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(3) NOT NULL,
  `filename` text NOT NULL,
  `fullpath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `post_image` blob NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `text`, `post_image`, `timestamp`) VALUES
(11, 'My last post', 'my-last-post', 'I would rather die than keep posting bad code.', '', '2019-02-01 12:32:24'),
(13, 'Monarch', 'monarch', 'Verified', '', '2019-02-01 13:02:35'),
(16, 'Ghoulish', 'ghoulish', 'It was the most ghoulish ghoul of oul time', '', '2019-02-05 07:31:37'),
(17, 'Ghoulish', 'ghoulish', 'It was the most ghoulish ghoul of oul time', '', '2019-02-05 07:32:02'),
(18, 'Freeman', 'freeman', 'Robert', '', '2019-02-05 07:45:51'),
(19, 'Freeman', 'freeman', 'Robert', '', '2019-02-05 07:47:05'),
(20, 'Green Man', 'green-man', 'The Martians have landed', '', '2019-02-05 07:51:58'),
(21, 'Break time', 'break-time', 'Is never enough', '', '2019-02-05 08:29:40'),
(24, 'The Pride is Coming', 'the-pride-is-coming', 'Lions and Lionesses roaming the Savannah', '', '2019-02-11 09:28:18'),
(29, 'Derivative', 'derivative', 'Do not derive any meaning from this post', '', '2019-02-11 09:55:44'),
(30, 'Free Bloopers', 'free-bloopers', 'If everything was free, then nothing would be valuable', '', '2019-02-11 09:57:12'),
(31, 'Diary of Jane', 'diary-of-jane', 'Free Jane First', '', '2019-02-11 10:02:56'),
(32, 'Green Days Ahead', 'green-days-ahead', 'Boulevard of delayed dreams', '', '2019-02-11 10:05:01'),
(33, 'Alma Mater to be decided', 'alma-mater-to-be-decided', 'After the successful signing of Juan Mata', '', '2019-02-11 10:05:52'),
(36, 'Terrific Tuesdays', 'terrific-tuesdays', 'Not so terrifying though', '', '2019-02-11 11:42:02'),
(37, 'Cherry Garden', 'cherry-garden', 'Alumni', '', '2019-02-11 11:44:10'),
(38, 'Hey Soul Sister', 'hey-soul-sister', 'Tonight!', '', '2019-02-11 11:50:53'),
(39, 'Feral cats in the neighbourhood', 'feral-cats-in-the-neighbourhood', 'These cats are everywhere', '', '2019-02-26 06:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'Mike Ndiba', 'mikendiba@gmail.com', '6636e1322531bd6a9bf66f3c3aabd8d6', 'Male', '0700112233', '2019-02-01 07:38:30', '2019-02-01 07:38:30', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
