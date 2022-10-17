-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 08:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `category_id`, `description`, `image`) VALUES
(1, 'Hyderabad', 8, '<p>Hyderabad is the capital of southern India&#39;s Telangana state. A major center for the technology industry, it&#39;s home to many upscale restaurants and shops. Its historic sites include Golconda Fort, a former diamond-trading center that was once the Qutb Shahi dynastic capital. The Charminar, a 16th-century mosque whose 4 arches support towering minarets, is an old city landmark near the long-standing Laad Bazaar.</p>\r\n', 'upload/about/6009-2022-10-15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Temples'),
(2, 'Hotels'),
(3, 'Schools'),
(4, 'Theatres'),
(5, 'Shopping'),
(6, 'Restaurents'),
(7, 'Church'),
(8, 'Places');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `pincode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`, `pincode`) VALUES
(1, 'Hyderabad', 'Telangana', '877999');

-- --------------------------------------------------------

--
-- Table structure for table `homebanners`
--

CREATE TABLE `homebanners` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homebanners`
--

INSERT INTO `homebanners` (`id`, `title`, `category_id`, `description`, `image`) VALUES
(1, 'Nature gives lots of Surprises', 6, '<p>cugcwcw</p>\r\n', 'upload/homebanner/8915-2022-10-14.jpg'),
(2, 'Every man Gives lots of jbbbwf', 4, '<p>clmsjcc</p>\r\n', 'upload/homebanner/9054-2022-10-14.jpg'),
(3, 'Hotels', 2, '<p>Hi Don&#39;t avoid your for any others</p>\r\n', 'upload/homebanner/3836-2022-10-14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homefeatured_posts`
--

CREATE TABLE `homefeatured_posts` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homefeatured_posts`
--

INSERT INTO `homefeatured_posts` (`id`, `title`, `category_id`, `description`, `image`) VALUES
(1, 'The blood of the martyrs is the seed of the church', 7, '<p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>\r\n', 'upload/homefeatured_post/5076-2022-10-14.jpg'),
(2, 'The first day of school is always a fashion show.', 3, '<p>A school is <strong>an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers</strong>.</p>\r\n', 'upload/homefeatured_post/9509-2022-10-14.jpg'),
(3, 'Watching movie stars under the stars.', 4, '<p>Theatre or theater is a collaborative form of performing art that uses live performers, usually actors or actresses, to present the experience of a real or imagined event before a live audience in a specific place, often a stage.</p>\r\n', 'upload/homefeatured_post/6569-2022-10-14.jpg'),
(4, 'Temple is a good place for meditating and travelling', 1, '<p>Temples <strong>typically have a main building and a larger precinct, which may contain many other buildings or may be a dome-shaped structure, much like an igloo</strong></p>\r\n', 'upload/homefeatured_post/7420-2022-10-15.jpg'),
(5, 'Magic found in buying something.', 5, '<p>A mall or shopping centre is <strong>a large building that is full of many smaller shops and stores</strong>.</p>\r\n', 'upload/homefeatured_post/3088-2022-10-15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homegallery`
--

CREATE TABLE `homegallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homegallery`
--

INSERT INTO `homegallery` (`id`, `image`) VALUES
(1, 'upload/gallery/4349-2022-10-14.jpg'),
(2, 'upload/gallery/1260-2022-10-14.jpg'),
(3, 'upload/gallery/4161-2022-10-14.jpg'),
(4, 'upload/gallery/1620-2022-10-14.jpg'),
(5, 'upload/gallery/8354-2022-10-14.jpg'),
(6, 'upload/gallery/9738-2022-10-14.jpg'),
(7, 'upload/gallery/9800-2022-10-14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hometrending_posts`
--

CREATE TABLE `hometrending_posts` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hometrending_posts`
--

INSERT INTO `hometrending_posts` (`id`, `title`, `category_id`, `description`, `image`) VALUES
(1, 'Shree Jagannath Temple', 1, '<p>The temple is an architectural delight and is a destination to experience peace and tranquility.</p>\r\n', 'upload/hometrending_post/2135-2022-10-14.jpg'),
(2, 'Taj Krishna, Hyderabad', 2, '<p>Treat your eyes to a panoramic view of this beautiful city and the calm of the Hussain Sagar Lake.</p>\r\n', 'upload/hometrending_post/4846-2022-10-14.jpg'),
(3, 'Prasads Multiplex', 4, '<p>It&#39;s a great place for hanging out with friends or with the family member</p>\r\n', 'upload/hometrending_post/9456-2022-10-14.jpg'),
(4, 'The Forum Sujana Mall', 5, '<p>It was good mall,no dowt. So many international brands Shop.</p>\r\n', 'upload/hometrending_post/0983-2022-10-14.jpg'),
(5, 'Bawarchi', 6, '<p>Local cuisine, Indian, Asian, Vegetarian Friendly, Halal</p>\r\n', 'upload/hometrending_post/8920-2022-10-14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `searchgallery`
--

CREATE TABLE `searchgallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchgallery`
--

INSERT INTO `searchgallery` (`id`, `image`) VALUES
(1, 'upload/searchgallery/4051-2022-10-15.jpg'),
(2, 'upload/searchgallery/7561-2022-10-15.jpg'),
(3, 'upload/searchgallery/9973-2022-10-15.jpg'),
(4, 'upload/searchgallery/6586-2022-10-15.jpg'),
(5, 'upload/searchgallery/2668-2022-10-15.jpg'),
(6, 'upload/searchgallery/2113-2022-10-15.jpg'),
(7, 'upload/searchgallery/1845-2022-10-15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `searchpage_accordians`
--

CREATE TABLE `searchpage_accordians` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `area_name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchpage_accordians`
--

INSERT INTO `searchpage_accordians` (`id`, `city_id`, `category_id`, `description`, `area_name`, `image`) VALUES
(1, 1, 1, '<p>Hyderabad, the capital city of Telangana is a major IT hub. The city has always been famous for its rich history and delicious food. It is also home to some of the most mesmerizing temples like Ratnalayam Temple, Pedamma Temple, Sree Adinatha Jan Temple etc. Those who are in search of peace in the crowded and busy city must pay a visit to one of these best temples in Hyderabad.</p>\r\n', 'Birla Mandir, jubliee hills', 'upload/accordians/8663-2022-10-16.jpg'),
(2, 1, 1, '<p>Hello this is sample</p>\r\n', 'Peddamma thali temple jubliee hills', 'upload/accordians/3493-2022-10-16.jpg'),
(3, 1, 1, '<p>test</p>\r\n', 'Statue of Equality shamshabad', 'upload/accordians/3214-2022-10-16.jpg'),
(4, 1, 1, '<ul>\r\n	<li>Jagannath Temple. Built by the Odiya Community, Jagannath Temple is considered to be the most famous temple in the entire city of Hyderabad. ...</li>\r\n</ul>\r\n', 'Sanghi Temple ORR', 'upload/accordians/9883-2022-10-16.jpg'),
(5, 1, 4, '<p>Theatre or theater is a collaborative form of performing art that uses live performers, usually actors or actresses, to present the experience of a real or imagined event before a live audience in a specific place, often a stage.</p>\r\n', 'Imax Prasad Cinemas.', 'upload/accordians/9523-2022-10-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `searchpage_banners`
--

CREATE TABLE `searchpage_banners` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchpage_banners`
--

INSERT INTO `searchpage_banners` (`id`, `title`, `category_id`, `description`, `image`) VALUES
(1, 'UPCOMING EVENTS', 8, '<p> <strong>An event is something that happens</strong> , especially when it is unusual or important</p>\r\n', 'upload/searchbanner/4867-2022-10-15.jpg'),
(2, 'OnGOING EVENTS', 8, '<p>India Today gives information on all the major events in India, <strong>Current Events</strong>, ... Indian Events Calendar and <strong>upcoming events</strong> that are to be held in India</p>\r\n', 'upload/searchbanner/5432-2022-10-15.jpg'),
(3, 'Famous', 8, '<p>Famous <strong>people are people who are well known throughout the world for what they have done</strong>.</p>\r\n', 'upload/searchbanner/9898-2022-10-15.jpg'),
(4, 'Latest', 8, '<p>Check out the <strong>latest</strong> news from India and around the world. <strong>Latest</strong> India news on Bollywood, Politics, Business, Cricket, Technology and Travel.</p>\r\n', 'upload/searchbanner/9125-2022-10-15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homebanners`
--
ALTER TABLE `homebanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homefeatured_posts`
--
ALTER TABLE `homefeatured_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homegallery`
--
ALTER TABLE `homegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hometrending_posts`
--
ALTER TABLE `hometrending_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchgallery`
--
ALTER TABLE `searchgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchpage_accordians`
--
ALTER TABLE `searchpage_accordians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchpage_banners`
--
ALTER TABLE `searchpage_banners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homebanners`
--
ALTER TABLE `homebanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homefeatured_posts`
--
ALTER TABLE `homefeatured_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homegallery`
--
ALTER TABLE `homegallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hometrending_posts`
--
ALTER TABLE `hometrending_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `searchgallery`
--
ALTER TABLE `searchgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `searchpage_accordians`
--
ALTER TABLE `searchpage_accordians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `searchpage_banners`
--
ALTER TABLE `searchpage_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
