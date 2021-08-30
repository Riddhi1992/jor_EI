
-- --------------------------------------------------------

--
-- Table structure for table `owner_datas`
--

CREATE TABLE `owner_datas` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `video` varchar(250) NOT NULL,
  `date_inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_datas`
--

INSERT INTO `owner_datas` (`id`, `question`, `video`, `date_inserted`, `date_updated`) VALUES
(17, 'Which Instrument you want to play?', 'Guitar.tif', '2021-08-12 14:44:42', '2021-08-27 16:26:09'),
(18, 'Which Instrument you want to play?', 'Drum.tif', '2021-08-12 14:50:56', '0000-00-00 00:00:00'),
(19, 'Which Instrument you want to play?', 'Turntable.tif', '2021-08-12 15:17:22', '0000-00-00 00:00:00'),
(20, 'Which Instrument you want to play?', 'Medal.tif', '2021-08-12 15:29:47', '2021-08-27 16:26:45'),
(21, 'Which Instrument you want to play?', 'Gingerbread Man.tif', '2021-08-12 15:29:58', '0000-00-00 00:00:00'),
(22, 'Which Instrument you want to play?', 'Chalk.tif', '2021-08-12 15:30:23', '0000-00-00 00:00:00'),
(28, 'Which Instrument you want to play?', 'Red Rose.tif', '2021-08-13 10:45:27', '0000-00-00 00:00:00'),
(31, 'Which Instrument you want to play?', 'Sunflower.tif', '2021-08-13 10:47:02', '0000-00-00 00:00:00'),
(32, 'Which Instrument you want to play?', 'Red Rose.tif', '2021-08-16 12:53:57', '0000-00-00 00:00:00'),
(35, 'What is your name', 'Testing', '2021-08-23 14:03:18', '0000-00-00 00:00:00'),
(36, 'What is your name', 'Testing', '2021-08-23 14:03:41', '0000-00-00 00:00:00'),
(37, 'Which Instrument you want to play?', 'Nest.tif', '2021-08-23 14:04:34', '0000-00-00 00:00:00'),
(38, 'Which Instrument you want to play?', 'Zen.tif', '2021-08-23 14:04:45', '0000-00-00 00:00:00'),
(39, 'Which Instrument you want to play?', 'Dahlia.tif', '2021-08-23 20:32:05', '0000-00-00 00:00:00'),
(40, 'Which Instrument you want to play?', 'Ying-Yang.png', '2021-08-24 13:43:10', '0000-00-00 00:00:00'),
(42, 'Where', 'Earth.png', '2021-08-26 15:24:16', '0000-00-00 00:00:00'),
(43, 'What', 'Sandollar.tif', '2021-08-26 15:28:55', '0000-00-00 00:00:00'),
(44, 'What', 'Sandollar.tif', '2021-08-26 15:29:16', '0000-00-00 00:00:00'),
(45, 'Which cartoon you like?', 'Cactus.tif', '2021-08-26 15:51:54', '0000-00-00 00:00:00'),
(46, 'Where', 'Fortune Cookie.tif', '2021-08-29 17:04:32', '2021-08-29 17:04:32');
