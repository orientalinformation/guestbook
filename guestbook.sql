-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2019 at 08:46 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text,
  `start_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `start_date`, `update_date`, `author`) VALUES
(2, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 10:07:08', 'Janie Jones2'),
(3, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 10:08:19', 'Janie Jones'),
(4, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 10:11:57', 'oriental'),
(5, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 10:11:48', 'oriental'),
(6, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 13:32:44', 'oriental'),
(7, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', NULL, '2019-04-04 10:08:25', 'oriental 4'),
(12, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 10:00:00', '2019-04-04 10:09:32', 'toi la toi'),
(13, ' Nemo enim ipsam voluptatem quia ', '2019-04-04 10:11:02', NULL, 'suman'),
(14, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:10:45', NULL, 'TTTTTT'),
(15, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:10:57', NULL, 'TTTTT'),
(16, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:11:11', NULL, 'ttttt'),
(17, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:11:47', NULL, 'Orieny'),
(18, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:16:09', NULL, 'TTTT'),
(19, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut adit aut fugit, sed quia conseguuntur magi dolores eos qui.', '2019-04-04 11:17:28', NULL, 'ererer'),
(20, '2424', '2019-04-06 08:31:35', NULL, 'Test 3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$12$/p4uJI6bssZMDL0S2HOZ..lmq2FZ/ZJzGY1bJ2St1XHqrPzoX2Bf2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
