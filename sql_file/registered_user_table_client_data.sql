
-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `id` int(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `ques1` varchar(255) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `date1` datetime DEFAULT NULL,
  `ques2` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  `ques3` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `date3` datetime DEFAULT NULL,
  `ques4` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `date4` datetime DEFAULT NULL,
  `ques5` varchar(255) DEFAULT NULL,
  `ans5` varchar(255) DEFAULT NULL,
  `date5` datetime DEFAULT NULL,
  `ques6` varchar(255) DEFAULT NULL,
  `ans6` varchar(255) DEFAULT NULL,
  `date6` datetime DEFAULT NULL,
  `ques7` varchar(255) DEFAULT NULL,
  `ans7` varchar(255) DEFAULT NULL,
  `date7` datetime DEFAULT NULL,
  `ques8` varchar(255) DEFAULT NULL,
  `ans8` varchar(255) DEFAULT NULL,
  `date8` datetime DEFAULT NULL,
  `ques9` varchar(255) DEFAULT NULL,
  `ans9` varchar(255) DEFAULT NULL,
  `date9` datetime DEFAULT NULL,
  `ques10` varchar(255) DEFAULT NULL,
  `ans10` varchar(255) DEFAULT NULL,
  `date10` datetime DEFAULT NULL,
  `ques11` varchar(255) DEFAULT NULL,
  `ans11` varchar(255) DEFAULT NULL,
  `date11` datetime DEFAULT NULL,
  `ques12` varchar(255) DEFAULT NULL,
  `ans12` varchar(255) DEFAULT NULL,
  `date12` datetime DEFAULT NULL,
  `ques13` varchar(255) DEFAULT NULL,
  `ans13` varchar(255) DEFAULT NULL,
  `date13` datetime DEFAULT NULL,
  `ques14` varchar(255) DEFAULT NULL,
  `ans14` varchar(255) DEFAULT NULL,
  `date14` datetime DEFAULT NULL,
  `ques15` varchar(255) DEFAULT NULL,
  `ans15` varchar(255) DEFAULT NULL,
  `date15` datetime DEFAULT NULL,
  `ques16` varchar(255) DEFAULT NULL,
  `ans16` varchar(255) DEFAULT NULL,
  `date16` datetime DEFAULT NULL,
  `ques17` varchar(255) DEFAULT NULL,
  `ans17` varchar(255) DEFAULT NULL,
  `date17` datetime DEFAULT NULL,
  `ques18` varchar(255) DEFAULT NULL,
  `ans18` varchar(255) DEFAULT NULL,
  `date18` datetime DEFAULT NULL,
  `ques19` varchar(255) DEFAULT NULL,
  `ans19` varchar(255) DEFAULT NULL,
  `date19` datetime DEFAULT NULL,
  `ques20` varchar(255) DEFAULT NULL,
  `ans20` varchar(255) DEFAULT NULL,
  `date20` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `visitor_counter` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`id`, `company_name`, `business_type`, `topic`, `description`, `image`, `ques1`, `ans1`, `date1`, `ques2`, `ans2`, `date2`, `ques3`, `ans3`, `date3`, `ques4`, `ans4`, `date4`, `ques5`, `ans5`, `date5`, `ques6`, `ans6`, `date6`, `ques7`, `ans7`, `date7`, `ques8`, `ans8`, `date8`, `ques9`, `ans9`, `date9`, `ques10`, `ans10`, `date10`, `ques11`, `ans11`, `date11`, `ques12`, `ans12`, `date12`, `ques13`, `ans13`, `date13`, `ques14`, `ans14`, `date14`, `ques15`, `ans15`, `date15`, `ques16`, `ans16`, `date16`, `ques17`, `ans17`, `date17`, `ques18`, `ans18`, `date18`, `ques19`, `ans19`, `date19`, `ques20`, `ans20`, `date20`, `status`, `date_inserted`, `visitor_counter`) VALUES
(1, 'ABC', 'Restaurant', 'Pizza', '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Where', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', '2021-09-08 11:47:50', 'Where?', 'Top', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', 1, '2021-08-23 20:39:09', 14),
(31, 'ABC', 'Res', 'Pasta', '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Where?', 'Lightning.tif', '2021-09-07 13:55:40', 'Where??', 'Hello', '0000-00-00 00:00:00', 'Which ', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', 1, '2021-08-30 14:10:13', 4),
(33, 'ABC', 'Education', 'Primary', '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Where', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', '2021-09-08 11:30:52', 'How?', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '0000-00-00 00:00:00', 1, '2021-08-30 15:32:53', 6),
(42, 'ABC', 'Education', 'High School', 'Fullerton', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'How?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', '2021-09-08 11:42:13', 'How?', 'Guitar.tif', '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '0000-00-00 00:00:00', 'Where', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.05.17 PM.png', '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', 'Where', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 5.10.38 PM.png', '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '0000-00-00 00:00:00', 1, '2021-08-31 13:03:44', 2),
(47, 'ABC', 'Restaurant', 'Greek Food', 'The best Greek food ever', 'NickTheGreek-14.JPEG', 'How?', 'NickTheGreek-14.JPEG', '2021-09-08 12:12:02', 'Where?', 'NickTheGreek-14.JPEG', '2021-09-08 12:12:43', 'When', 'NickTheGreek-14.JPEG', '2021-09-08 12:40:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-08 12:10:44', 21),
(50, 'XYZ', 'Education', 'Education', 'CSU', 'Earth.png', 'Which Instrument you want to play?', 'Lightning.tif', '2021-09-08 11:28:08', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', 0, '2021-09-07 12:34:46', 10);
