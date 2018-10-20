-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 04:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 1, 'Social', '2018-10-03 06:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `user_id`, `title`, `slug`, `body`, `image`, `created_at`) VALUES
(1, 1, 1, 'My First Ever Blog Post', 'My-First-Ever-Blog-Post', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias iure iusto vel perspiciatis accusamus non nobis ex quam cumque assumenda. Fugit nostrum repudiandae perspiciatis amet ut quo odit! Repellat beatae ex recusandae eligendi reprehenderit mollitia ullam corrupti est nisi velit necessitatibus maxime delectus labore architecto enim, ab ut autem quidem magni ipsum. Eum atque quidem laboriosam necessitatibus quasi, vero excepturi quos impedit corporis corrupti earum amet reiciendis at facilis adipisci. Asperiores, iure, quibusdam sed ducimus quis sint minus nulla doloremque esse saepe incidunt cum nostrum earum officia possimus labore voluptate quaerat. Dolorem maiores illum rem animi nemo labore amet voluptates!', 'noimage.png', '2018-10-03 06:10:08'),
(3, 1, 1, 'Another Post With Image', 'Another-Post-With-Image', 'Eum atque quidem laboriosam necessitatibus quasi, vero excepturi quos impedit corporis corrupti earum amet reiciendis at facilis adipisci. Asperiores, iure, quibusdam sed ducimus quis sint minus nulla doloremque esse saepe incidunt cum nostrum earum officia possimus labore voluptate quaerat. Dolorem maiores illum rem animi nemo labore amet voluptates!', 'IMG_1424.JPG', '2018-10-03 06:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Lhester John Monroyo', '5001', 'lhestermoon3011@gmail.com', 'lhestermoon3011', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-28 14:01:22'),
(2, 'Eren Jaeger', '854', 'erenjaeger@gmail.com', 'erenjaeger', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-28 14:03:52'),
(3, 'Levi Ackermann', '854', 'levi@email.com', 'leviackermann', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-28 14:14:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
