-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb24.awardspace.net
-- Generation Time: Feb 21, 2020 at 08:45 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2893045_whlrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `sub_title`, `thumb`, `category`, `content`) VALUES
(1, 'Left Text', '', '', 'lefttext', '<div class="col-md-6 col-xs-10">\r\n<p><strong>White Hart Lane Recreation Ground</strong></p>\r\n<p>Facilities include tennis courts, football pitches, cricket fields with pavilions, two drinking fountains, as well as a fairly substantial boating pond in the south east corner, around which trees were planted and footpaths laid out. <span style="color: #fff000;">Park Owned By:</span> LB Haringey <span style="color: #fff000;">Site URL Owned By:</span> The Friends Of White Hart Lane Recreation Ground<br /><br /><!--Facts and Figure Wrap End--></p>\r\n<section class="fact_figure_bg">\r\n<div class="fact_figure_bg">\r\n<div class="gt_hdg_1 white_hdg">\r\n<h3>WHLRG History</h3>\r\n<hr class="page-splits" /></div>\r\n<div class="row">\r\n<div class="col-md-4 col-sm-6">\r\n<div class="gt_facts_wrap">\r\n<h2 class="counter">220</h2>\r\nTotal Projects</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6">\r\n<div class="gt_facts_wrap">\r\n<h2 class="counter">720</h2>\r\nTotal Events</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6">\r\n<div class="gt_facts_wrap">\r\n<h2 class="counter">1200</h2>\r\nTotal Meetings</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<p><!--Facts and Figure Wrap End--></p>\r\n<hr class="page-splits" />\r\n<div class="left" style="text-align: center; width: 100%;"><strong>Booking WHLRG Park:</strong> Whether its a very small community event or a major music festival we are here to help, especially if it benefits the local community.</div>\r\n</div>'),
(2, 'Volunteers Welcome', '', 'whitehartlanerecreationground_local_people.jpg', 'image', ''),
(3, 'Community Events', '', 'whitehartlanerecreationground_dj_music_tent.jpg', 'image', ''),
(4, 'Family Fun Days', '', 'whitehartlanerecreationground_bouncy_castle.jpg', 'image', ''),
(5, 'It has been a popular park with residents for over 100 years', '', 'whitehartlanerecreationground_garden_games.jpg', 'image', ''),
(6, 'Footer', '', '', 'footer', ' <div class="col-md-4">\r\n					<div class="footer-pane">\r\n						<h4>Contact Details</h4>\r\n						<div class="footer-details">\r\n							<p>White Hart Lane Recreation Ground</p>\r\n							<p><i class="fa fa-map-marker" aria-hidden="true"></i> 59 White Hart Ln, Wood Green, London N22 5SJ</p>\r\n							<p><i class="fa fa-phone" aria-hidden="true"><a class="phone-number" href="tel:02084895198">020 8489 5198</a></i>Â Â <i class="fa fa-mobile" aria-hidden="true"><a class="phone-number" href="tel:07984984861">07984 984 861</a></i>\r\n							<i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:info@whitehartlanerecreationground.com/">info@whitehartlanerecreationground.com</a></i>Â Â <i class="fa fa-chrome" aria-hidden="true"><a href="#your-link">www.whitehartlanerecreationground.com</a></i></p>\r\n						</div>\r\n					</div>\r\n				</div>\r\n				\r\n				<div class="col-md-4">\r\n					<div class="footer-pane">\r\n						<h4>Social Networks</h4>\r\n						<!-- Social Icons Container -->\r\n						<div class="social-icons-container">\r\n							<span class="fa-stack fa-lg">\r\n								<a href="https://www.facebook.com/WhiteHartLaneRecreationGround">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n							<span class="fa-stack fa-lg">\r\n								<a href="#your-link-here">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n							<span class="fa-stack fa-lg">\r\n								<a href="#your-link-here">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n							<span class="fa-stack fa-lg">\r\n								<a href="https://www.instagram.com/whitehartlanerecreationground">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n							<span class="fa-stack fa-lg">\r\n								<a href="#your-link-here">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n							<span class="fa-stack fa-lg">\r\n								<a href="https://www.youtube.com/channel/UCuMMBlsESPw3FYOaaftrAyw">\r\n									<i class="fa fa-circle fa-stack-2x"></i>\r\n									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>\r\n								</a>\r\n							</span>\r\n						</div> <!-- end of social icons container -->\r\n						<h4>Official Partners</h4>\r\n						<p>Haringey Council: <a>www.haringey.gov.uk</a> <br> London Parks & Gardens Trust: <a>www.londongardensonline.org.uk</a></p>\r\n					</div>\r\n				</div>   ');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(8, 'Ravindra', 'gehlotravindra@gmail.com'),
(9, 'Amy Christie ', 'a.h.christie@gmail.com'),
(10, 'yEpheCNVFbdR', 'speightgery4@gmail.com'),
(11, 'FqWEgJPYHZrk', 'myrtlewiggins10571@gmail.com'),
(12, 'WpEGCDdfvjmHS', 'johnsummers385@gmail.com'),
(13, 'QyBLtRAuze', 'johnsummers385@gmail.com'),
(14, 'Katie Tucker', 'katiegoulvent@gmail.com'),
(15, 'qwerty https://helloworld.com', 'noreply1@i4b.space'),
(16, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚ ÐœÐ¸Ñ€ https://helloworld.com', 'noreply2@i4b.space'),
(17, 'Ð¡Ð¼Ñ‹ÑÐ» Ð¶Ð¸Ð·Ð½Ð¸ Ð½Ðµ Ð² Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¶Ð´Ð°Ñ‚ÑŒ, ÐºÐ¾Ð³Ð´Ð° Ð·Ð°ÐºÐ¾Ð½Ñ‡Ð¸Ñ‚ÑÑ Ð³Ñ€Ð¾Ð·Ð°, Ð° Ð² Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑƒÑ‡Ð¸Ñ‚ÑŒÑÑ Ñ‚Ð°Ð½Ñ†ÐµÐ²Ð°Ñ‚ÑŒ Ð¿Ð¾Ð´ Ð´Ð¾Ð¶Ð´ÐµÐ¼ https://helloworld.com', 'noreply3@i4b.space'),
(18, 'David Slater', 'thespeakersclub@aol.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`id`, `title`, `sub_title`, `thumb`, `image`, `category`) VALUES
(5, 'Food Stalls', 'Hot Food, Chicken Meals and Cakes', 'CF081-69002-RO.jpg', '', 'activities'),
(6, 'Product Stalls', 'Beauty Items and Fragrances', 'whitehartlanerecreationground_product_stalls.jpg', '', 'activities'),
(10, 'Fun Play', 'Local Games For Children', 'whitehartlanerecreationground_local_kids.jpg', '', 'leisure'),
(11, 'Family Fun Days', 'Haringey Community Coaching', 'whitehartlanerecreationground_play_island.jpg', '', 'leisure'),
(12, 'Community Event Volunteers', 'Contact Us and Join Our Team', 'whitehartlanerecreationground_successful_delivery.jpg', '', 'leisure'),
(13, 'Local People', 'Enjoying a day in the Park', 'whitehartlanerecreationground_local_people_v2.jpg', '', 'people'),
(14, 'Little Frame Emergency', 'Event Support & Advice', 'whitehartlanerecreationground_little_frame_emergency.jpg', '', 'people'),
(15, 'Teaching Residents', 'Engaging Designed Activities', 'whitehartlanerecreationground_local_people_v3.jpg', '', 'people'),
(16, 'Community Discussion Groups', 'Come and join us every Tuesaday', 'Wordology Live.jpg', '', 'activities');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephoneno` int(11) NOT NULL,
  `mobileno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`id`, `firstname`, `lastname`, `age`, `dob`, `address`, `address2`, `gender`, `city`, `postcode`, `email`, `telephoneno`, `mobileno`) VALUES
(1, 'Test Run', 'One', 47, '2019-01-01', 'mand1', 'Mandore22', 'MAle1', 'Jodhpur1', '3420011', 'gehlotravindra@gmail.comf', 23423422, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) DEFAULT NULL,
  `datalink` varchar(255) NOT NULL,
  `datatag` varchar(255) NOT NULL,
  `repeat_month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `description`, `start`, `end`, `datalink`, `datatag`, `repeat_month`) VALUES
(6, 'Group Meeting', '		4pm-6pm Wood Green Library \r\n				', '2019-02-05', '2019-02-05', '', 'blue', ''),
(9, 'Meeting With Council', '10pm -12pm', '2019-02-02', '2019-02-02', 'https://www.haringey.gov.uk/', 'red', ''),
(10, 'Painting Events', 'Beauty Items and Fragrances', '2019-01-20', '2019-01-20', '', 'red', 'no'),
(11, 'Sports Events', 'Description', '2019-01-21', '2019-01-21', '', 'blue', ''),
(14, 'Group Meeting', 'Wood Green Library 4pm-5pm', '2019-02-12', '2019-02-12', 'https://www.haringey.gov.uk/libraries-sport-and-leisure/libraries/wood-green-central-library', 'blue', ''),
(16, 'Earnival EarnFest 2020', 'The ultimate summer festival in London, White Hart Lane Recreation Ground 25 July 2020.												', '2020-07-25', '2020-07-25', 'http://www.whitehartlanerecreationground.com/earnfest', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month_cover`
--

CREATE TABLE `tbl_month_cover` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_month_cover`
--

INSERT INTO `tbl_month_cover` (`id`, `month`, `sub_title`, `thumb`, `image`) VALUES
(1, 'January', 'Jaunary image', '3c3c3d.jpg', ''),
(2, 'February', 'Febarary', '3c3c3d.jpg', ''),
(3, 'March', 'march', '3c3c3d.jpg', ''),
(4, 'April', 'april', '3c3c3d.jpg', ''),
(5, 'May', 'may', '3c3c3d.jpg', ''),
(6, 'June', 'june', '3c3c3d.jpg', ''),
(7, 'July', 'july', '3c3c3d.jpg', ''),
(8, 'August', 'aguest', '3c3c3d.jpg', ''),
(9, 'September', 'september', '3c3c3d.jpg', ''),
(10, 'October', 'octomber', '3c3c3d.jpg', ''),
(11, 'November', 'november', '3c3c3d.jpg', ''),
(12, 'December', 'december', '3c3c3d.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pagetext`
--

CREATE TABLE `tbl_pagetext` (
  `id` int(11) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `pagetext` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pagetext`
--

INSERT INTO `tbl_pagetext` (`id`, `pagename`, `pagetext`) VALUES
(1, 'recruitment', '		 Help us develop <strong> White Hart Lane Recreation Ground </strong> into a vibrant community centre\r\nTo volunteer your skills simply fill in our application form to help us on this exciting project. 																		'),
(2, 'event_calendar', 'Your month-by-month guide to the best events and cultural happenings at  White Hart Lane Recreation Ground park over the year.									'),
(3, 'newsletter', 'Are you a writer poet or journalist WHLR are looking for contributors to our local news letter.\r\nTo keep updated with our community projects simply fill in the form below with your details.\r\n\r\nWhite Hart Lane Recreation Ground is looking for individuals and organisations who would like to get involved in the exciting project to develop our park please email us with your ideas and suggestions. 									'),
(4, 'photography', '									Browse photos uploaded by ravindra<strong> White Hart Lane Recreation Ground </strong> from amateur and professional photographers who are local residents within Haringey.									');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin', 'admin@site.com', 'user', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_month_cover`
--
ALTER TABLE `tbl_month_cover`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_pagetext`
--
ALTER TABLE `tbl_pagetext`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_month_cover`
--
ALTER TABLE `tbl_month_cover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_pagetext`
--
ALTER TABLE `tbl_pagetext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
