-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tag_id` varchar(150) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_description` text DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `category_id`, `tag_id`, `blog_image`, `blog_description`, `blog_slug`, `blog_cdt`) VALUES
(2, 'Blog Sea', 2, '', '/storage/uploads/23/05/1685337921KZlXKDe7d2yBRowNHDgU.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quod obcaecati sint, aliquid excepturi dolores! Itaque, sequi doloribus corporis ea, expedita ipsa, iure eum saepe asperiores quos aperiam fugit ipsum.', 'blog-sea', '2023-05-24 13:44:16'),
(3, 'Blog Space', 2, '1', '/storage/uploads/23/05/1684915749UKxW7Y2bGepAKD4ZoUrn.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quod obcaecati sint, aliquid excepturi dolores! Itaque, sequi doloribus corporis ea, expedita ipsa, iure eum saepe asperiores quos aperiam fugit ipsum.', 'blog-space', '2023-05-24 14:09:09'),
(4, 'Blog Mobile', 2, '1', '/storage/uploads/23/05/1684915775kdC7sAovUV4rt1bMLEta.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quod obcaecati sint, aliquid excepturi dolores! Itaque, sequi doloribus corporis ea, expedita ipsa, iure eum saepe asperiores quos aperiam fugit ipsum.', 'blog-mobile', '2023-05-24 14:09:36'),
(5, 'Blog GYM', 2, '', '/storage/uploads/23/05/1684916118NO7qQci6mOl47mrIx5U8.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quod obcaecati sint, aliquid excepturi dolores! Itaque, sequi doloribus corporis ea, expedita ipsa, iure eum saepe asperiores quos aperiam fugit ipsum.', 'blog-gym', '2023-05-24 14:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(222) NOT NULL,
  `category_cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_cdt`) VALUES
(2, 'BTS', '2023-05-24 12:14:10'),
(3, 'fjngk', '2023-05-24 12:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(245) NOT NULL,
  `tag_cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag_name`, `tag_cdt`) VALUES
(1, 'SDS', '2023-05-24 14:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_name` varchar(255) DEFAULT NULL,
  `booking_email` varchar(255) DEFAULT NULL,
  `booking_phone` varchar(255) DEFAULT NULL,
  `booking_roomtype` int(11) DEFAULT NULL,
  `booking_checkin` varchar(255) DEFAULT NULL,
  `booking_checkout` varchar(255) DEFAULT NULL,
  `booking_adults` int(11) DEFAULT NULL,
  `booking_children` int(11) DEFAULT NULL,
  `booking_country` varchar(255) DEFAULT NULL,
  `booking_comments` text DEFAULT NULL,
  `cancle` int(11) NOT NULL DEFAULT 0,
  `cancle_date` date DEFAULT NULL,
  `booking_cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_name`, `booking_email`, `booking_phone`, `booking_roomtype`, `booking_checkin`, `booking_checkout`, `booking_adults`, `booking_children`, `booking_country`, `booking_comments`, `cancle`, `cancle_date`, `booking_cdt`) VALUES
(29, NULL, 'shawonomar05@gmail.com', NULL, 5, '24/06/2023', '24/06/2023', 1, 0, NULL, NULL, 0, NULL, '2023-06-24 11:44:54'),
(35, NULL, 'shawonomar05@gmail.com', NULL, 3, '24/06/2023', '28/06/2023', 2, 0, NULL, NULL, 1, NULL, '2023-06-24 16:43:16'),
(36, 'asda220303', 'shawonomar05@gmail.com', '32423', 6, '12/07/2023', '14/07/2023', 1, 2, NULL, NULL, 1, '2023-07-24', '2023-07-04 14:10:50'),
(37, 'wer', 'shawonomar05@gmail.com', '02434234', 2, '2023-07-06', '2023-07-21', 3, 2, NULL, NULL, 0, NULL, '2023-07-06 15:16:42'),
(38, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 5, '25/07/2023', '10/08/2023', 4, 0, NULL, NULL, 0, NULL, '2023-07-24 12:29:09'),
(39, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 6, '24/07/2023', '28/07/2023', NULL, NULL, NULL, NULL, 0, NULL, '2023-07-24 12:52:03'),
(40, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 6, '25/07/2023', '28/07/2023', NULL, NULL, NULL, NULL, 0, NULL, '2023-07-24 13:01:17'),
(41, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 2, '27/07/2023', '28/07/2023', 4, NULL, NULL, NULL, 0, NULL, '2023-07-24 13:26:05'),
(42, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 3, '24/07/2023', '23/09/2023', 4, 4, NULL, NULL, 0, NULL, '2023-07-24 13:26:30'),
(43, 'Omar Faruk', 'shawonomar05@gmail.com', '01912345678', 2, '29/07/2023', '25/07/2023', 4, 3, NULL, NULL, 0, NULL, '2023-07-24 13:27:14'),
(44, 'test', 'shawonomar05@gmail.com', '01912345678', 5, '25/07/2023', '2023/08/05', 2, 1, NULL, NULL, 0, NULL, '2023-07-24 13:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `name`, `email`, `phone`, `subject`, `comment`, `cdt`) VALUES
(2, 'rg', 'email@gmail', NULL, NULL, 'dfg', '2023-06-04 17:20:28'),
(3, 'sdfs', 'Nordigate@gmail.com', '4534534', 'asd', 'vdf', '2023-06-11 12:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `image`, `description`, `cdt`) VALUES
(1, 'zsdfs', '/storage/uploads/23/06/1685861831lv96YttN8EHjzXBRB9G8.png', 'sfsf', '2023-05-21 13:37:36'),
(2, 'sf', '/storage/uploads/23/06/1685861711rfhADo8yGDGougPT1wxQ.png', 'sdf', '2023-06-04 12:55:12'),
(3, '90', '/storage/uploads/23/06/1687690662jURZ2wFBHMQqA0pXXFnB.jpg', 'Facility texertt', '2023-06-25 16:57:42'),
(4, 'uo', '/storage/uploads/23/06/16876906711cJBS3FzgoRwz6Ff6d3w.jpg', 'Facilituoy text', '2023-06-25 16:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `type`, `details`, `image`, `cdt`) VALUES
(1, 'Card', 3, 'Card View', '/storage/uploads/23/05/1685537919IzjOZQaZpiwJZJRudTuu.jpg', '2023-05-31 18:58:39'),
(2, 'esdf', 2, 'ef', '/storage/uploads/23/05/1685538130Z8jCMRbxNInW8yyDvCXT.jpg', '2023-05-31 19:02:10'),
(3, 'sdf', 4, 'sf', '/storage/uploads/23/05/1685538139US8dezN1AgIB273ATOC9.jpg', '2023-05-31 19:02:19'),
(4, 'sf', 3, 'sf', '/storage/uploads/23/05/1685538151pgPlCdfG2vNW4KWJQYmV.jpg', '2023-05-31 19:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`id`, `name`, `price`, `details`, `image`, `cdt`) VALUES
(3, 'asd', 120, 'qweqw', '/storage/uploads/23/06/1685944131wNPQ2R0er7pC6kLPeosh.jpg', '2023-06-05 11:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(1500) NOT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `details`, `image`, `cdt`) VALUES
(1, 'Place', 'dss', '/storage/uploads/23/05/16854618086ctVt2Et3WVR3deKTojB.jpg,/storage/uploads/23/05/1685461808APesYSQN5Od3M9pMVFBM.jpg,/storage/uploads/23/05/1685461808s7tjrtIdQUrk0fBoMk41.jpg', '2023-05-30 20:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `details1` text DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `sub_title`, `details`, `details1`, `gallery_image`) VALUES
(1, 'Restaurent', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', NULL, '/storage/uploads/23/05/1685449875Zfh69tvWhG2zslg5Ehng.jpg,/storage/uploads/23/05/1685449875FTNrn6HYAzCj0epDpKFi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` varchar(120) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `favorite` int(11) NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `is_available` int(11) DEFAULT 1,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `category_id`, `description`, `price`, `image`, `gallery_image`, `facility`, `favorite`, `status`, `is_available`, `cdt`) VALUES
(2, '101', 1, 'X czczdc', 80, '/storage/uploads/23/05/1684670664WRGivWPHp4pVG1UREF6n.jpg', '/storage/uploads/23/05/1684665220QuxxK0kgzPicCymv3BXI.svg,/storage/uploads/23/05/1684665220TnsqWzV42sbYaO3QnTSc.svg,/storage/uploads/23/05/1684665220MebZ2g4nfZw0nqD531YR.svg', '1,2,3,4', 1, 1, 0, '2023-05-21 16:33:40'),
(3, '202', 1, 'X czczdc', 50, '/storage/uploads/23/05/1684670680HjMmtAVnIplcdoKRU0ta.jpg', '/storage/uploads/23/05/1684665190umFDOcqUSnMWcW4Gx3fI.svg,/storage/uploads/23/05/16846651906A6z86IRCCdG4XfOx4GZ.svg,/storage/uploads/23/05/16846651907yf09aULlpO7kVHFQzVY.svg', '1,3', 0, 1, 0, '2023-05-21 16:54:53'),
(5, '201', 2, 'ad', 100, '/storage/uploads/23/05/1684670745l8e93oR838kC1XzNlNJC.jpg', '/storage/uploads/23/05/1684670745rQ2bbiRBnijxezmPumez.jpg,/storage/uploads/23/05/1684670745cO0KMo99TuUQdcCMAqFe.jpg,/storage/uploads/23/05/16846707459oxYyrOFcNrIrveKJg49.jpg', '1,1', 1, 0, 0, '2023-05-21 18:05:45'),
(6, '103', 1, 'as', 12, '/storage/uploads/23/06/1685873078hriIxNlL0Esbr34AGwFn.jpg', '/storage/uploads/23/06/1685872737A1KWRKI0yzNJCAKjpB43.jpg', '1,1', 1, 1, 0, '2023-06-04 15:58:57'),
(7, '102', 1, 'sdfssdfs', 33, '/storage/uploads/23/06/1685873088gwkdqkJxMUposQ6CSxSY.jpg', '/storage/uploads/23/06/1685872761vDZ4tI8EYKj6HJWg47Rb.jpg,/storage/uploads/23/06/1685872761kb2TXrjS1W78lssl5w0U.jpg', '1,2', 0, 1, 1, '2023-06-04 15:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `category_name`, `category_cdt`) VALUES
(1, 'Single Room', '2023-05-24 15:02:22'),
(2, 'Double Room', '2023-06-05 11:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `logo`, `cdt`) VALUES
(1, 'Food', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', '/storage/uploads/23/05/1684670849YHeK9LQ9XdDMPsEuXWR1.jpg', '/storage/uploads/23/06/16863980836YRifHJpWeG796wat9YP.png', '2023-05-21 17:30:08'),
(2, 'Conference Room', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', '/storage/uploads/23/05/1684670898igEQgQRENkYVvdyqEkvd.jpg', NULL, '2023-05-21 18:08:18'),
(3, 'Party Night', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', '/storage/uploads/23/05/1684670921f9VXEcBQB30bsJwYIxht.jpg', NULL, '2023-05-21 18:08:41'),
(4, 'Swimming Pool', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet', '/storage/uploads/23/05/1684671045gaJP0VuwRutqydSK6UaS.jpg', NULL, '2023-05-21 18:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo_light` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `logo_dark` varchar(255) DEFAULT NULL,
  `fav_logo` varchar(255) DEFAULT NULL,
  `about_image1` varchar(255) DEFAULT NULL,
  `about_image2` varchar(255) DEFAULT NULL,
  `about_details2` text DEFAULT NULL,
  `sub_image` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_details` text DEFAULT NULL,
  `location_image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `staffs` int(11) DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `home_room` text DEFAULT NULL,
  `home_service` text DEFAULT NULL,
  `home_gallery` text DEFAULT NULL,
  `home_location` text DEFAULT NULL,
  `home_review` text DEFAULT NULL,
  `resturrent_page` text DEFAULT NULL,
  `palce_page` text DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `fax` varchar(222) DEFAULT NULL,
  `web` varchar(2555) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `tw` varchar(255) DEFAULT NULL,
  `ing` varchar(255) DEFAULT NULL,
  `lin` varchar(255) DEFAULT NULL,
  `you` varchar(255) DEFAULT NULL,
  `go` varchar(255) DEFAULT NULL,
  `cy` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_light`, `site_title`, `logo_dark`, `fav_logo`, `about_image1`, `about_image2`, `about_details2`, `sub_image`, `about_title`, `about_details`, `location_image`, `address`, `staffs`, `footer_text`, `phone`, `email`, `home_room`, `home_service`, `home_gallery`, `home_location`, `home_review`, `resturrent_page`, `palce_page`, `language`, `fax`, `web`, `fb`, `tw`, `ing`, `lin`, `you`, `go`, `cy`) VALUES
(1, '/storage/uploads/23/05/16847358212X9YV6thwdCadJHBr3ui.png', 'ALVSJO STADSHOTELL', '/storage/uploads/23/05/1684735821BH2GkTVeTkGLowuSzCDd.png', '/storage/uploads/23/05/1684736226rcQTk9e4HJUMCO9PeuGw.png', '/storage/uploads/23/05/16846730771xqmIWxZ9tO2DyQcd5gK.jpg', '/storage/uploads/23/05/16854588953TBtuF0LeOX1Cmw2mISg.jpg,/storage/uploads/23/05/1685458895jC0jL2DxgYVjLraNOB1G.jpg,/storage/uploads/23/05/1685458895HAqYOirxtM2kfdsAmatf.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipitLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit', '/storage/uploads/23/05/1685536830vwkg4ptPqxJ9nanL9YtZ.jpg', 'ZAKYNTHOS - ZANTE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipitLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit', '/storage/uploads/23/05/1684673077Ah0MWnC1QtmIJTVZyKPP.jpg', 'Chittagong', 12, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit', '+88001912345678', 'info@alvsjostadshotell.se', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', 'swedish', 'csa', 'http://www.fb.com', 'http://www.fb.com', 'http://www.fb.com', 'http://www.fb.com', 'http://www.fb.com', 'http://www.fb.com', NULL, '2023');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `btn_text` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `btn_text`, `btn_link`, `serial_no`, `cdt`) VALUES
(1, 'LUXURY EXPERIENCE', 'Live Your Myth In Greece', '/storage/uploads/23/05/1684670381EIxIBvUwHMbw7O9ZsXCx.jpg', 'xdfv', 'https://www.espncricinfo.com', 3, '2023-05-20 15:29:44'),
(4, 'Most Expansive', 'The Hostel Zenet is Best', '/storage/uploads/23/05/1684670445ZebIQqoy4u9Tu7PNmD5a.jpg', 'sd', 'https://www.espncricinfo.com', 43, '2023-05-21 18:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `slider_box`
--

CREATE TABLE `slider_box` (
  `id` int(11) NOT NULL,
  `title` varchar(265) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `main_text` text DEFAULT NULL,
  `english` text DEFAULT NULL,
  `swedish` text DEFAULT NULL,
  `spanish` text DEFAULT NULL,
  `french` text DEFAULT NULL,
  `german` text DEFAULT NULL,
  `arabic` text DEFAULT NULL,
  `persian` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `main_text`, `english`, `swedish`, `spanish`, `french`, `german`, `arabic`, `persian`) VALUES
(1, 'ABOUT', 'ABOUT', 'OM ME', NULL, NULL, NULL, NULL, NULL),
(3, 'ZAKYNTHOS - ZANTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipitLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Rooms', 'Rooms', 'Mia', NULL, NULL, NULL, NULL, NULL),
(6, 'staffs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'restaurant', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'LUXURY EXPERIENCE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Live Your Myth In Greece', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'BOOK A ROOM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'CONTACT US', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Star Luxury Hotel', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Most Expansive', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'The Hostel Zenet is Best', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Your Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Your Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Room Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Please Select Room Type: Single Room, Double Room or Deluxe Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Single Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Double Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Arrival', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Check In from 11:00 am', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Departure', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Departure Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '+18 years', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Children', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Advanced Booking Form', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'OUR FAVORITE ROOMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'night', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'VIEW DETAILS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'OUR AWESOME SERVICES', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Food', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Conference Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Party Night', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Swimming Pool', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Card', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Card View', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'esdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'ef', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'sf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'View Full Gallery', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'WHAT PEOPLE SAY ABOUT US', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'LOCATION - CONTACT US', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Chittagong', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Your Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Your Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Send Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'SUBSCRIBE TO OUR NEWSLETTER', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Subscribe to our newsletter to receive exclusive offers and the latest news', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Welcome to', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'MENU', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'HOME', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'ABOUT US', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Place', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'BLOG', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'BOOK ONLINE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Latest News', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Blog Sea', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Blog Space', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Blog Mobile', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Blog GYM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Useful Links', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Gallery', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'All Rights Reserved', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Booking', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Phone Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Your Phone Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Country', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Select Your Country', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Arrival Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Check Out from 12:00 am', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Adults', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Your Comments', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'Special Offers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Phone', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Subject', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Send Your Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'per night', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'ROOM SERVICES', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'sfsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'zsdfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'SIMILAR ROOMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'Enter Your Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'Enter Your Phone Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'Select Room Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'BOOK A ROOM NOW', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'NEED HELP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'If you have any question please don\'t hesitate to contact us', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'Latest Posts', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'Enter Your Email Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'X czczdc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'More Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'as', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'sdfssdfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'Restaurent', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'OUR RESTAURANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'OUR MENU', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'qweqw', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Discover Place', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'Places', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'dss', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.\r\n\r\n\r\nImage\r\naed €3\r\n\r\nsf\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'Photo Gallery', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'Columns', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'ALL', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'Chech In', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'Check Out', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'Facility texertt', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'Facilituoy text', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'uo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'Mobile', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'ALVSJO STADSHOTELL', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'All Blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae quod obcaecati sint, aliquid excepturi dolores! Itaque, sequi doloribus corporis ea, expedita ipsa, iure eum saepe asperiores quos aperiam fugit ipsum.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'Read More', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'CATEGORIES', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'BTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'fjngk', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'Blog Post', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `cdt`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '01912345678', '2023-04-30 16:46:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_box`
--
ALTER TABLE `slider_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_box`
--
ALTER TABLE `slider_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translate`
--
ALTER TABLE `translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
