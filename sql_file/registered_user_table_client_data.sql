
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
  `ques2` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ques3` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ques4` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `ques5` varchar(255) DEFAULT NULL,
  `ans5` varchar(255) DEFAULT NULL,
  `ques6` varchar(255) DEFAULT NULL,
  `ans6` varchar(255) DEFAULT NULL,
  `ques7` varchar(255) DEFAULT NULL,
  `ans7` varchar(255) DEFAULT NULL,
  `ques8` varchar(255) DEFAULT NULL,
  `ans8` varchar(255) DEFAULT NULL,
  `ques9` varchar(255) DEFAULT NULL,
  `ans9` varchar(255) DEFAULT NULL,
  `ques10` varchar(255) DEFAULT NULL,
  `ans10` varchar(255) DEFAULT NULL,
  `ques11` varchar(255) DEFAULT NULL,
  `ans11` varchar(255) DEFAULT NULL,
  `ques12` varchar(255) DEFAULT NULL,
  `ans12` varchar(255) DEFAULT NULL,
  `ques13` varchar(255) DEFAULT NULL,
  `ans13` varchar(255) DEFAULT NULL,
  `ques14` varchar(255) DEFAULT NULL,
  `ans14` varchar(255) DEFAULT NULL,
  `ques15` varchar(255) DEFAULT NULL,
  `ans15` varchar(255) DEFAULT NULL,
  `ques16` varchar(255) DEFAULT NULL,
  `ans16` varchar(255) DEFAULT NULL,
  `ques17` varchar(255) DEFAULT NULL,
  `ans17` varchar(255) DEFAULT NULL,
  `ques18` varchar(255) DEFAULT NULL,
  `ans18` varchar(255) DEFAULT NULL,
  `ques19` varchar(255) DEFAULT NULL,
  `ans19` varchar(255) DEFAULT NULL,
  `ques20` varchar(255) DEFAULT NULL,
  `ans20` varchar(255) DEFAULT NULL,
  `date_inserted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`id`, `company_name`, `business_type`, `topic`, `description`, `image`, `ques1`, `ans1`, `ques2`, `ans2`, `ques3`, `ans3`, `ques4`, `ans4`, `ques5`, `ans5`, `ques6`, `ans6`, `ques7`, `ans7`, `ques8`, `ans8`, `ques9`, `ans9`, `ques10`, `ans10`, `ques11`, `ans11`, `ques12`, `ans12`, `ques13`, `ans13`, `ques14`, `ans14`, `ques15`, `ans15`, `ques16`, `ans16`, `ques17`, `ans17`, `ques18`, `ans18`, `ques19`, `ans19`, `ques20`, `ans20`, `date_inserted`) VALUES
(1, 'ABC', 'Restaurant', 'Pizza', '', '', 'What?', 'Piano.tif', 'Where?', 'Top', 'When?', '4pm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-23 20:39:09'),
(27, 'ABC', 'Medical', 'Child', '', '', NULL, NULL, NULL, NULL, 'How??', 'Drum.tif', 'When??', 'Testing4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 12:48:23'),
(31, 'ABC', 'Res', 'Pasta', '', '', 'Where', 'Screen Shot 2021-08-29 at 4.23.15 PM.png', 'Where??', 'Hello', 'Which ', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 14:10:13'),
(33, 'ABC', 'Education', 'Primary', '', '', NULL, NULL, 'How?', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '2021-08-30 15:32:53'),
(42, 'ABC', 'Education', 'High School', 'Fullerton', 'Testing', 'How?', 'Piano.tif', 'How?', 'Guitar.tif', 'When', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'What', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', 'How?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Where', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'When', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.05.17 PM.png', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'How?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Where', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'When', 'Screen Shot 2021-08-29 at 5.10.38 PM.png', 'When', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', 'What', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'How?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', '2021-08-31 13:03:44'),
(43, 'ABC', 'Education', 'University', 'CSU', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Which Instrument you want to play?', 'Drum.tif', NULL, NULL, 'Which Instrument you want to play?', 'Piano.tif', NULL, NULL, 'Which Instrument you want to play?', 'Violin.tif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-31 15:17:45');
