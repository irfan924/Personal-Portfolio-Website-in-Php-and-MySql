-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 06:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(5) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_description` varchar(1000) NOT NULL,
  `blog_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_description`, `blog_link`) VALUES
(2, 'JavaScript Essentials: Understanding the Basics for Web Development', 'Unravel the mysteries of JavaScript, the language behind dynamic and interactive web pages. Learn about variables, functions, and DOM manipulation, and see how they come together to create engaging web applications.\r\n                        ', 'example.com'),
(3, 'Mastering Git and GitHub: A Comprehensive Guide', 'Git is an essential tool for version control, and GitHub is a platform widely used for collaborative coding. This blog breaks down the key concepts of Git, GitHub, and how they streamline the development process.\r\n                        ', 'example.com'),
(4, 'Data Structures Demystified: A Practical Approach', 'Explore the world of data structures and understand how they impact the efficiency of your code. From arrays to linked lists, this blog provides insights into choosing the right data structure for various scenarios.\r\n                        ', 'example.com'),
(5, 'Blog Test', 'Testing Blog\r\n                        ', 'example.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(5) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_number` varchar(17) NOT NULL,
  `client_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_number`, `client_email`) VALUES
(1, 'John Doe', '0300 1234567', 'john@example.com'),
(2, 'John Smith', '0301 1234567', 'smith@example.com'),
(3, 'Smith Klien', '0300 1234765', 'klien@example.com'),
(4, 'Amjad', '0301 7654321', 'amjad@example.com'),
(5, 'Irfan Abbas', '+92 304 7451194', 'irfanabbas00429@gmail.com'),
(6, 'Adnan', '0300 1243567', 'adn@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_message` varchar(500) NOT NULL,
  `contact_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_subject`, `contact_message`, `contact_email`) VALUES
(1, 'John', 'Meeting', 'are you free today at 9.pm. i want to met you and discuss about my next project that are made with php', 'john@gmail.com'),
(2, 'Irfan', 'Discussion', 'Hey! Irfan Abbas here and i want to discuss about my next project if you are interested then reply me ASAP.', 'irfan@gmail.com'),
(3, 'Test', 'Testing', 'Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `po_id` int(5) NOT NULL,
  `po_title` varchar(200) NOT NULL,
  `po_description` varchar(1000) NOT NULL,
  `po_client_name` tinytext NOT NULL,
  `po_client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`po_id`, `po_title`, `po_description`, `po_client_name`, `po_client_email`) VALUES
(1, 'Online Quiz System', 'Develop an interactive online quiz system with various categories and difficulty levels. HTML will be used for creating the quiz interface, CSS for styling, and PHP for backend functionalities such as managing quiz questions, user scores, and results.', 'John Smith', 'john@example.com'),
(2, 'Weather App', 'Build a weather application that retrieves weather data from an API and displays it to users. Utilize HTML for the user interface, CSS for styling, and PHP to handle API requests, process data, and present weather information to users.', 'Mark Henry', 'mark@example.com'),
(3, 'Crafting a Keyboard App in PHP: A Symphony of Code and User Interaction', '', 'Irfan Abbas', 'irfanabbas00429@gmail.com'),
(4, 'Keyboard App', '', 'john ibrahm', 'ibrahm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(5) NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `project_description` varchar(1000) NOT NULL,
  `project_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_title`, `project_description`, `project_link`) VALUES
(1, 'Personal Portfolio Website', 'Develop a personal portfolio website showcasing your skills, projects, and experience. Utilize HTML for structuring the content, CSS for styling the layout and appearance, and PHP to create a dynamic contact form that allows visitors to get in touch with you.', 'example.com'),
(2, 'Task Manager', 'Build a task management application that enables users to add, edit, and delete tasks. HTML will be used to design the user interface, CSS for styling the application, and PHP to handle backend logic such as task storage and retrieval.', 'example.com'),
(3, 'Blog Platform', 'Create a user-friendly blogging platform where individuals can write, edit, and delete blog posts. Utilize HTML and CSS for the frontend to design an appealing and responsive interface, and PHP for the backend to manage user authentication, blog posts, and interactions.', 'example.com'),
(4, 'Optimizing PHP Performance: Tips and Tricks for Faster Websites', 'In this blog post, readers will discover strategies to optimize the performance of PHP applications. Topics will include caching mechanisms, code optimization techniques, and leveraging tools like OpCode caching. The post will provide practical tips for developers to enhance the speed and efficiency of their PHP websites.\r\n                        ', 'example.com'),
(5, 'Web Dashboard', 'Create a Web Dashboard that contain ecommerce Store data which can be create,read,update and delete. \r\n                        ', 'example.com');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(5) NOT NULL,
  `skill_name` varchar(20) NOT NULL,
  `skill_proficiency` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `skill_proficiency`) VALUES
(1, 'HTML', 80),
(2, 'CSS', 70),
(3, 'JQuery', 70),
(4, 'Javascript', 60),
(5, 'PHP', 50),
(11, 'Next.js', 70),
(12, 'React Native', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pwd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pwd`) VALUES
(1, 'Admin', 'admin'),
(2, 'Irfan', 'irfan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `po_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
