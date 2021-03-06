-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26 فبراير 2020 الساعة 10:13
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Otto`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `triton` int(11) NOT NULL,
  `price` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cars`
--

INSERT INTO `cars` (`id`, `triton`, `price`, `email`, `status`) VALUES
(1, 556, '', 'a@a.a', 'Done');

-- --------------------------------------------------------

--
-- بنية الجدول `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `city`
--

INSERT INTO `city` (`id`, `city_name`, `path`) VALUES
(2, 'hail', ''),
(3, 'www', ''),
(4, 'Jedde', '');

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

CREATE TABLE `info` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `natl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `Gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`email`, `name`, `age`, `phone`, `natl`, `id`, `Gender`) VALUES
('ts@s.e', 'rr dd', '12', '123', 'zz', 111, 'male'),
('ty@t.t', 'mmm nn', '44', '123', '3s', 33, 'male');

-- --------------------------------------------------------

--
-- بنية الجدول `trip`
--

CREATE TABLE `trip` (
  `city_id` int(11) NOT NULL,
  `tripon` int(20) NOT NULL,
  `DeparturTime` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ArrivalTime` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `city_to` int(11) NOT NULL,
  `OperationsDays` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `trip`
--

INSERT INTO `trip` (`city_id`, `tripon`, `DeparturTime`, `ArrivalTime`, `city_to`, `OperationsDays`, `price`) VALUES
(2, 80, '66', '44', 4, 'Mon', '445'),
(2, 556, '', '12', 3, 'Sat', '44'),
(0, 998, '', '22', 3, 'Sat', '900');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`email`, `password`, `role`) VALUES
('a@a.a', '123', 1),
('r@r.r', '123', 2),
('ts@s.e', '123', 2),
('ty@t.t', '333', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tripon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
