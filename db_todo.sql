-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 02 日 08:37
-- サーバのバージョン： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `user_id`, `cat_name`, `cat_description`) VALUES
(1, 0, 'fchgvjbknml', 'fgcghvj');

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `prof_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `tbl_profile`
--

INSERT INTO `tbl_profile` (`prof_id`, `user_id`, `firstname`, `lastname`, `email`, `birthday`) VALUES
(1, 1, 'kazuhiro', 'watanabe', 'abghdgsgdf@argbs', '0000-00-00'),
(2, 2, 'chard', '1234', 'richard@gmail.com', '0000-00-00'),
(3, 3, '', '', '', '0000-00-00'),
(4, 3, '', '', '', '0000-00-00'),
(5, 1, '', '', 'ab76rblog2_bl2c5@yahoo.co.jp', '0000-00-00'),
(6, 6, '', '', 'ab76rblog2_bl2c5@yahoo.co.jp', '0000-00-00'),
(7, 7, 'kazu', 'wata', 'ab76rblog2_bl2c5@yahoo.co.jp', '2017-10-11'),
(8, 3, '', '', '', '0000-00-00'),
(9, 3, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_name` varchar(20) NOT NULL,
  `task_description` varchar(500) NOT NULL,
  `task_date` date NOT NULL,
  `task_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`) VALUES
(1, 'kazu', ''),
(2, 'chard', ''),
(3, '', ''),
(4, '', ''),
(5, 'kazu', ''),
(6, 'ga', ''),
(7, 'ka', ''),
(8, '', ''),
(9, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
