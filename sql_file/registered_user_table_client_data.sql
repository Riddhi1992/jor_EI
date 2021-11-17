
-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `id` int(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) NOT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `buy_lease` varchar(50) NOT NULL,
  `intro_video` varchar(255) DEFAULT NULL,
  `subtle` varchar(255) DEFAULT NULL,
  `generic` varchar(255) DEFAULT NULL,
  `ques1` varchar(255) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `topic_ques01` varchar(255) DEFAULT NULL,
  `date1` datetime DEFAULT NULL,
  `ques2` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `topic_ques02` varchar(250) DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  `ques3` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `topic_ques03` varchar(50) DEFAULT NULL,
  `date3` datetime DEFAULT NULL,
  `ques4` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `topic_ques04` varchar(50) DEFAULT NULL,
  `date4` datetime DEFAULT NULL,
  `ques5` varchar(255) DEFAULT NULL,
  `ans5` varchar(255) DEFAULT NULL,
  `topic_ques05` varchar(50) DEFAULT NULL,
  `date5` datetime DEFAULT NULL,
  `ques6` varchar(255) DEFAULT NULL,
  `ans6` varchar(255) DEFAULT NULL,
  `topic_ques06` varchar(50) DEFAULT NULL,
  `date6` datetime DEFAULT NULL,
  `ques7` varchar(255) DEFAULT NULL,
  `ans7` varchar(255) DEFAULT NULL,
  `topic_ques07` varchar(50) DEFAULT NULL,
  `date7` datetime DEFAULT NULL,
  `ques8` varchar(255) DEFAULT NULL,
  `ans8` varchar(255) DEFAULT NULL,
  `topic_ques08` varchar(50) DEFAULT NULL,
  `date8` datetime DEFAULT NULL,
  `ques9` varchar(255) DEFAULT NULL,
  `ans9` varchar(255) DEFAULT NULL,
  `topic_ques09` varchar(50) DEFAULT NULL,
  `date9` datetime DEFAULT NULL,
  `ques10` varchar(255) DEFAULT NULL,
  `ans10` varchar(255) DEFAULT NULL,
  `topic_ques10` varchar(50) DEFAULT NULL,
  `date10` datetime DEFAULT NULL,
  `ques11` varchar(255) DEFAULT NULL,
  `ans11` varchar(255) DEFAULT NULL,
  `topic_ques11` varchar(50) DEFAULT NULL,
  `date11` datetime DEFAULT NULL,
  `ques12` varchar(255) DEFAULT NULL,
  `ans12` varchar(255) DEFAULT NULL,
  `topic_ques12` varchar(50) DEFAULT NULL,
  `date12` datetime DEFAULT NULL,
  `ques13` varchar(255) DEFAULT NULL,
  `ans13` varchar(255) DEFAULT NULL,
  `topic_ques13` varchar(50) DEFAULT NULL,
  `date13` datetime DEFAULT NULL,
  `ques14` varchar(255) DEFAULT NULL,
  `ans14` varchar(255) DEFAULT NULL,
  `topic_ques14` varchar(50) DEFAULT NULL,
  `date14` datetime DEFAULT NULL,
  `ques15` varchar(255) DEFAULT NULL,
  `ans15` varchar(255) DEFAULT NULL,
  `topic_ques15` varchar(50) DEFAULT NULL,
  `date15` datetime DEFAULT NULL,
  `ques16` varchar(255) DEFAULT NULL,
  `ans16` varchar(255) DEFAULT NULL,
  `topic_ques16` varchar(50) DEFAULT NULL,
  `date16` datetime DEFAULT NULL,
  `ques17` varchar(255) DEFAULT NULL,
  `ans17` varchar(255) DEFAULT NULL,
  `topic_ques17` varchar(50) DEFAULT NULL,
  `date17` datetime DEFAULT NULL,
  `ques18` varchar(255) DEFAULT NULL,
  `ans18` varchar(255) DEFAULT NULL,
  `topic_ques18` varchar(50) DEFAULT NULL,
  `date18` datetime DEFAULT NULL,
  `ques19` varchar(255) DEFAULT NULL,
  `ans19` varchar(255) DEFAULT NULL,
  `topic_ques19` varchar(50) DEFAULT NULL,
  `date19` datetime DEFAULT NULL,
  `ques20` varchar(255) DEFAULT NULL,
  `ans20` varchar(255) DEFAULT NULL,
  `topic_ques20` varchar(50) DEFAULT NULL,
  `date20` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `visitor_counter` int(11) DEFAULT 0,
  `is_deleted` int(11) DEFAULT 0,
  `public_private` varchar(50) DEFAULT 'Public',
  `publish` varchar(250) DEFAULT 'Non-Publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`id`, `company_name`, `business_type`, `address`, `city`, `state`, `zipcode`, `property_type`, `startDate`, `endDate`, `description`, `image`, `buy_lease`, `intro_video`, `subtle`, `generic`, `ques1`, `ans1`, `topic_ques01`, `date1`, `ques2`, `ans2`, `topic_ques02`, `date2`, `ques3`, `ans3`, `topic_ques03`, `date3`, `ques4`, `ans4`, `topic_ques04`, `date4`, `ques5`, `ans5`, `topic_ques05`, `date5`, `ques6`, `ans6`, `topic_ques06`, `date6`, `ques7`, `ans7`, `topic_ques07`, `date7`, `ques8`, `ans8`, `topic_ques08`, `date8`, `ques9`, `ans9`, `topic_ques09`, `date9`, `ques10`, `ans10`, `topic_ques10`, `date10`, `ques11`, `ans11`, `topic_ques11`, `date11`, `ques12`, `ans12`, `topic_ques12`, `date12`, `ques13`, `ans13`, `topic_ques13`, `date13`, `ques14`, `ans14`, `topic_ques14`, `date14`, `ques15`, `ans15`, `topic_ques15`, `date15`, `ques16`, `ans16`, `topic_ques16`, `date16`, `ques17`, `ans17`, `topic_ques17`, `date17`, `ques18`, `ans18`, `topic_ques18`, `date18`, `ques19`, `ans19`, `topic_ques19`, `date19`, `ques20`, `ans20`, `topic_ques20`, `date20`, `status`, `date_inserted`, `visitor_counter`, `is_deleted`, `public_private`, `publish`) VALUES
(1, 'ABC', 'Restaurant', NULL, NULL, NULL, NULL, 'Pizza', NULL, NULL, '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', '', NULL, NULL, NULL, 'Why?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '2021-09-08 11:47:50', 'Where?', 'Top', NULL, '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', NULL, '2021-09-21 15:34:28', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 1, '2021-08-23 20:39:09', 19, 0, 'Private', 'Non-Publish'),
(31, 'ABC', 'Res', NULL, NULL, NULL, NULL, 'Pasta', NULL, NULL, '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', '', NULL, NULL, NULL, 'Where?', 'Lightning.tif', NULL, '2021-09-07 13:55:40', 'Where??', 'Hello', NULL, '0000-00-00 00:00:00', 'Which ', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 1, '2021-08-30 14:10:13', 4, 0, 'Public', 'Non-Publish'),
(33, 'ABC', 'Education', NULL, NULL, NULL, NULL, 'Primary', NULL, NULL, '', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', '', NULL, NULL, NULL, 'Where', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', NULL, '2021-09-08 11:30:52', 'How?', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 1, '2021-08-30 15:32:53', 6, 0, 'Private', 'Non-Publish'),
(42, 'ABC', 'Education', NULL, NULL, NULL, NULL, 'High School', NULL, NULL, 'Fullerton', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', '', NULL, NULL, NULL, 'How?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '2021-09-08 11:42:13', 'How?', 'Guitar.tif', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', NULL, '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'Where', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.05.17 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 'Where', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 5.10.38 PM.png', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 0, '2021-08-31 13:03:44', 2, 0, 'Public', 'Non-Publish'),
(47, 'ABC', 'Restaurant', NULL, NULL, NULL, NULL, 'Greek Food', NULL, NULL, 'The best Greek food ever', 'NickTheGreek-14.JPEG', '', NULL, NULL, NULL, 'How?', 'NickTheGreek-14.JPEG', NULL, '2021-09-08 12:12:02', 'Where?', 'NickTheGreek-14.JPEG', NULL, '2021-09-08 12:12:43', 'When', 'NickTheGreek-14.JPEG', NULL, '2021-09-08 12:40:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-08 12:10:44', 22, 0, 'Public', 'Non-Publish'),
(50, 'XYZ', 'Education', NULL, NULL, NULL, NULL, 'Education', NULL, NULL, 'CSU', 'Earth.png', '', NULL, NULL, NULL, 'Which Instrument you want to play?', 'Lightning.tif', NULL, '2021-09-08 11:28:08', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 1, '2021-09-07 12:34:46', 10, 0, 'Public', 'Non-Publish'),
(51, 'ABC', 'Health', NULL, NULL, NULL, NULL, 'Health', NULL, NULL, 'UCI - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reprehenderit dolor tenetur iste nostrum enim dolores aliquam, placeat facere odit explicabo maiores totam mollitia provident quia velit deleniti cumque? Cum.', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', '', NULL, NULL, NULL, 'How?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '2021-09-08 11:42:13', 'Where?', 'Guitar.tif', NULL, '0000-00-00 00:00:00', 'When?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'What?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', NULL, '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'Where??', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'When??', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.05.17 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', 'Where', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 5.10.38 PM.png', NULL, '0000-00-00 00:00:00', 'When', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'Which cartoon you like?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', NULL, '0000-00-00 00:00:00', 'Which Instrument you want to play?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', NULL, '0000-00-00 00:00:00', 'How?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', NULL, '0000-00-00 00:00:00', 'What', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '0000-00-00 00:00:00', 0, '2021-08-31 13:03:44', 2, 0, 'Private', 'Non-Publish'),
(52, 'ABC', 'Medical', NULL, NULL, NULL, NULL, 'Gyn', NULL, NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam iusto voluptates sapiente quaerat sint omnis.', 'Screen Shot 2021-08-23 at 1.29.42 PM.png', '', NULL, NULL, NULL, 'Where?', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', NULL, '2021-09-23 13:06:34', 'When?', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', NULL, '2021-09-23 13:06:55', 'How?', 'Screen Shot 2021-08-29 at 4.23.15 PM.png', NULL, '2021-09-23 13:07:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-23 13:06:14', 0, 0, 'Private', 'Non-Publish'),
(53, 'ABC', 'Restaurant', NULL, NULL, NULL, NULL, 'Indian', NULL, NULL, 'Best Indian cuisine ', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', '', NULL, NULL, NULL, 'How?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', NULL, '2021-09-23 13:28:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-23 13:18:36', 0, 0, 'Public', 'Non-Publish'),
(54, 'ABC', 'Restaurant', NULL, NULL, NULL, NULL, 'Thai Food', NULL, NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam iusto voluptates sapiente quaerat sint omnis.', 'Earth.png', '', NULL, NULL, NULL, 'Where is the location?', 'Leaf.tif', NULL, '2021-09-23 13:34:01', 'How is the food?', 'Red Rose.tif', NULL, '2021-09-23 13:40:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-23 13:31:07', 0, 0, 'Public', 'Non-Publish'),
(55, 'ABC', 'Government', NULL, NULL, NULL, NULL, 'Water Treatment', NULL, NULL, 'Water treatment plant', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', '', NULL, NULL, NULL, 'How long has it been on the market?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Appartments - q1', '2021-10-01 15:44:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-23 16:13:06', 1, 0, 'Public', 'Non-Publish'),
(59, 'NTG', 'Restaurant', NULL, NULL, NULL, NULL, 'Thai', NULL, NULL, 'The best food', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', '', NULL, NULL, NULL, 'How long has it been on the market?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Appartments - q1', '2021-10-01 15:41:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-09-30 12:48:18', 0, 0, 'Public', 'Non-Publish'),
(64, 'ABC', 'Realtor', NULL, NULL, NULL, NULL, 'Housing', NULL, NULL, 'The best area to live', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', 'Purchase', NULL, NULL, NULL, 'What’s the school district?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Housing - q1', '2021-10-05 16:05:36', 'How many others in the neighborhood are for sale/sold and or what are the comps?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Housing - q2', '2021-10-05 14:29:53', 'Will it pass an FHA or VA financing? or owner financing', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', 'Housing - q3', '2021-10-05 15:03:36', 'Are there many rental properties in the neighborhood?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Housing - q4', '2021-10-06 11:37:10', 'Are there minorities or many kids in the neighborhood?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Housing - q5', '2021-10-06 11:37:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-01 15:52:43', 1, 0, 'Public', 'Non-Publish'),
(65, 'ABC', 'Realtor', NULL, NULL, NULL, NULL, 'Appartments', NULL, NULL, 'The best appartments to lease', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Lease', NULL, NULL, NULL, 'Are pets allowed?', '', 'Appartments - q1', '2021-10-04 11:25:29', 'Is rent negotiable?', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', 'Appartments - q2', '2021-10-04 11:31:15', 'Can I have a commercial vehicle?', 'Screen Shot 2021-08-29 at 5.03.45 PM.png', NULL, '2021-10-04 11:43:58', 'How soon is it available?', 'Screen Shot 2021-08-29 at 5.03.45 PM.png', NULL, '2021-10-04 11:54:52', 'Can we skip the background check?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Appartments - q5', '2021-10-04 12:36:39', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Appartments - q6', '2021-10-04 13:16:09', 'Is it a busy street and how many parking spaces, does it have a garage?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Appartments - q7', '2021-10-04 14:40:04', 'Is there a discount for senior citizen or a veteran?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Appartments - q8', '2021-10-04 14:46:08', 'How is the school system?', 'Screen Shot 2021-08-29 at 5.24.00 PM.png', 'Appartments - q9', '2021-10-04 14:57:59', 'Is owner willing to lease with option to buy?', '', 'Appartments - q10', '2021-10-04 15:05:33', 'Can I have a home based business?', 'Screen Shot 2021-08-29 at 5.04.45 PM.png', 'Appartments - q11', '2021-10-04 15:05:42', 'Do I have to have rental insurance?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Appartments - q12', '2021-10-04 15:06:11', 'What if I have bad credit?', '', 'Appartments - q13', '2021-10-04 15:26:54', 'What’s included in rent?', '', 'Appartments - q14', '2021-10-04 15:26:59', 'What’s the Fpl bill run?', '', 'Appartments - q15', '2021-10-04 15:27:04', 'How are the neighbors?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Appartments - q16', '2021-10-04 15:27:13', 'Is there a fenced yard?', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Appartments - q17', '2021-10-04 15:27:21', 'Is it furnished?', 'Screen Shot 2021-08-29 at 4.52.44 PM.png', 'Appartments - q18', '2021-10-04 15:27:30', 'Can I paint the inside?', 'Screen Shot 2021-08-29 at 5.03.45 PM.png', 'Appartments - q19', '2021-10-04 15:27:37', 'What if I get a job transfer?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Appartments - q20', '2021-10-04 15:27:46', 1, '2021-10-04 11:24:44', 2, 0, 'Private', 'Non-Publish'),
(66, 'ABC', 'Housing', NULL, NULL, NULL, NULL, 'Condo', NULL, NULL, 'The best area to live with the best school.', 'Screen Shot 2021-08-23 at 1.29.42 PM.png', 'Purchase', NULL, NULL, NULL, 'How long has it been on the market?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Condo - q1', '2021-10-07 13:18:45', 'Will it pass an FHA or VA financing? or owner financing', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Condo - q2', '2021-10-07 13:13:39', 'Are there many rental properties in the neighborhood?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Condo - q3', '2021-10-07 13:14:49', 'How old is the HVAC?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Condo - q4', '2021-10-07 13:15:50', 'Are there rental restrictions or AirBNB restrictions?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Condo - q5', '2021-10-07 13:16:02', 'How many others in the neighborhood are for sale/sold and or what are the comps?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Condo - q6', '2021-10-07 13:16:10', 'How far from beach, shopping, interstate etc?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Condo - q7', '2021-10-07 13:16:18', 'Are there minorities or many kids in the neighborhood?', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', 'Condo - q8', '2021-10-07 13:16:26', 'Is the price firm?', 'Screen Shot 2021-08-29 at 4.17.01 PM.png', 'Purchase - price', '2021-10-07 13:55:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-07 13:11:35', 0, 0, 'Public', 'Non-Publish'),
(67, 'ABC', 'Housing', NULL, NULL, NULL, NULL, 'Family home', NULL, NULL, 'The best area to live', 'Screen Shot 2021-08-23 at 1.29.42 PM.png', 'Lease', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-07 15:41:17', 0, 0, 'Public', 'Non-Publish'),
(68, 'ABC', 'Housing', NULL, NULL, NULL, NULL, 'Family home', NULL, NULL, 'The best area to live', 'Screen Shot 2021-08-23 at 1.29.42 PM.png', 'Lease', NULL, NULL, NULL, 'What if I have bad credit?', '', 'Family home - q1', '2021-10-07 15:46:33', 'Is it a busy street and how many parking spaces, does it have a garage?', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Family home - q2', '2021-10-07 15:46:52', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'Screen Shot 2021-08-29 at 5.03.07 PM.png', 'Family home - q3', '2021-10-07 15:47:13', 'Is there a discount for senior citizen or a veteran?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Family home - q4', '2021-10-07 15:47:22', 'Is owner willing to lease with option to buy?', 'Screen Shot 2021-08-29 at 4.44.56 PM.png', 'Family home - q5', '2021-10-07 15:47:34', 'Can we skip the background check?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Family home - q6', '2021-10-07 15:47:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-07 15:46:24', 0, 0, 'Public', 'Non-Publish'),
(69, 'ABC', 'Realtor', NULL, NULL, NULL, NULL, 'Townhomes', NULL, NULL, 'The best location', 'Screen Shot 2021-08-29 at 4.23.15 PM.png', 'Purchase', NULL, NULL, NULL, 'How long has it been on the market?', 'Screen Shot 2021-08-29 at 4.48.31 PM.png', 'Purchase - market', '2021-10-08 13:08:03', 'Will it pass an FHA or VA financing? or owner financing', 'Screen Shot 2021-08-29 at 4.34.27 PM.png', 'Purchase - financing', '2021-10-08 13:08:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-08 13:05:29', 0, 0, 'Public', 'Non-Publish'),
(70, 'ABC', 'Medical', NULL, NULL, NULL, NULL, 'High School', NULL, NULL, 'The best authentic Greek food in Town', 'Screen Shot 2021-08-29 at 4.23.15 PM.png', 'Purchase', NULL, NULL, NULL, 'Will it pass an FHA or VA financing? or owner financing', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Purchase - financing', '2021-10-08 14:27:09', 'Are there many rental properties in the neighborhood?', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Purchase - rental', '2021-10-08 14:28:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-08 14:15:37', 0, 0, 'Public', 'Non-Publish'),
(73, 'ABC', 'Realtor', '12345 ABC st. ABCDE, CA - 00000', NULL, NULL, NULL, 'Townhome', '2021-10-01', '2021-10-31', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam iusto voluptates sapiente quaerat sint omnis.', 'Screen Shot 2021-09-24 at 8.40.50 AM.png', 'Purchase', NULL, NULL, NULL, 'How long has it been on the market?', 'IMG_6565.mp4', 'Purchase - market', '2021-10-19 12:10:15', 'What is the school district?', 'Screen Shot 2021-09-27 at 11.13.47 AM.png', 'Purchase - school', '2021-10-19 12:12:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-19 12:09:32', 0, 0, 'Public', 'Non-Publish'),
(79, 'ABC', 'Realtor', '12 ABC st. ABCDE, CA - 12345', NULL, NULL, NULL, 'Condo', '2021-10-01', '2021-10-31', '', 'Screen Shot 2021-08-29 at 4.33.40 PM.png', 'Purchase', 'IMG_6565.mp4', NULL, NULL, NULL, NULL, 'Purchase - ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-10-26 15:21:19', 2, 0, 'Public', 'Non-Publish'),
(80, 'ABC', 'Realtor', '154 ABC st. ABCDE, CA - 12345', NULL, NULL, NULL, 'Appartment', '2021-10-01', '2021-10-31', '', 'Screen Shot 2021-08-29 at 4.32.13 PM.png', 'Lease', 'IMG_6565.mp4', 'IMG_6565.mp4', 'IMG_6565.mp4', 'Are pets allowed?', 'IMG_0806.mp4', 'Lease - pets', '2021-10-29 12:51:48', 'Is there a discount for senior citizen or a veteran?', 'IMG_0810.mp4', 'Lease - ', '2021-10-29 12:25:17', 'How soon is it available?', 'IMG_0811.mp4', 'Lease - ', '2021-10-29 12:25:40', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'IMG_0814.mp4', 'Lease - ', '2021-10-29 12:25:57', 'Is it a busy street and how many parking spaces, does it have a garage?', 'IMG_0816.mp4', 'Lease - ', '2021-10-29 12:26:37', 'Is rent negotiable?', 'IMG_0818.mp4', 'Lease - ', '2021-10-29 12:26:58', 'What if I have bad credit?', 'IMG_0820.mp4', 'Lease - ', '2021-10-29 12:27:12', 'Is there a fenced yard?', 'IMG_0822.mp4', 'Lease - ', '2021-10-29 12:27:28', 'How is the school system?', 'IMG_0825.mp4', 'Lease - ', '2021-10-29 12:27:42', 'Can I have a commercial vehicle?', 'IMG_0828.mp4', 'Lease - ', '2021-10-29 12:28:01', 'What is included in rent?', 'IMG_0830.mp4', 'Lease - ', '2021-10-29 12:28:19', 'Is owner willing to lease with option to buy?', 'IMG_0839.mp4', 'Lease - ', '2021-10-29 12:28:40', 'What is the Fpl bill run?', 'IMG_0843.MOV.mp4', 'Lease - ', '2021-10-29 12:29:05', 'How are the neighbors?', 'IMG_0844.MOV.mp4', 'Lease - ', '2021-10-29 12:29:21', 'Can I paint the inside?', 'IMG_0845.MOV.mp4', 'Lease - ', '2021-10-29 12:29:38', 'Can I have a home based business?', 'IMG_0849.MOV.mp4', 'Lease - ', '2021-10-29 12:29:54', 'Do I have to have rental insurance?', 'IMG_0806.mp4', 'Lease - ', '2021-10-29 12:30:25', 'Is it furnished?', 'IMG_0809.mp4', 'Lease - ', '2021-10-29 12:30:40', 'Can we skip the background check?', 'IMG_0810.mp4', 'Lease - ', '2021-10-29 12:30:58', 'What if I get a job transfer?', 'IMG_0816.mp4', 'Lease - ', '2021-10-29 12:31:11', 1, '2021-10-27 13:33:14', 3, 0, 'Public', 'Non-Publish'),
(83, 'XYZ', 'Restaurant', '54321 CBA st. ABCDE, CA - 54321', NULL, NULL, NULL, 'Family house', '2021-10-01', '2021-11-06', '', 'Screen Shot 2021-09-24 at 8.40.50 AM.png', 'Lease', 'IMG_6565.mp4', 'IMG_0806.mp4', 'IMG_0809.mp4', 'Are pets allowed?', 'IMG_0810.mp4', 'Lease - pets', '2021-10-29 13:07:47', 'How soon is it available?', 'IMG_0811.mp4', 'Lease - available', '2021-10-29 13:07:57', 'Is rent negotiable?', 'IMG_0814.mp4', 'Lease - negotiable', '2021-10-29 13:08:04', 'What if I have bad credit?', 'IMG_0816.mp4', 'Lease - credit', '2021-10-29 13:08:13', 'Is there a discount for senior citizen or a veteran?', 'IMG_0818.mp4', 'Lease - discount', '2021-10-29 13:08:22', 'Is owner willing to lease with option to buy?', 'IMG_0820.mp4', 'Lease - buy', '2021-10-29 13:08:29', 'Can I have a commercial vehicle?', 'IMG_0822.mp4', 'Lease - vehicle', '2021-10-29 13:08:43', 'What is included in rent?', 'IMG_0825.mp4', 'Lease - included', '2021-10-29 13:08:52', 'Is there a fenced yard?', 'IMG_0828.mp4', 'Lease - fence', '2021-10-29 13:09:00', 'How is the school system?', 'IMG_0830.mp4', 'Lease - school', '2021-10-29 13:09:11', 'How are the neighbors?', 'IMG_0839.mp4', 'Lease - neighbors', '2021-10-29 13:09:22', 'What is the Fpl bill run?', 'IMG_0843.MOV.mp4', 'Lease - fpl', '2021-10-29 13:09:36', 'Can I paint the inside?', 'IMG_0844.MOV.mp4', 'Lease - paint', '2021-10-29 13:09:48', 'Is it furnished?', 'IMG_0845.MOV.mp4', 'Lease - furnished', '2021-10-29 13:09:58', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'IMG_0849.MOV.mp4', 'Lease - places', '2021-10-29 13:10:06', 'Can I have a home based business?', 'Earth.png', 'Lease - business', '2021-10-29 13:10:17', 'Can we skip the background check?', 'Chalk.tif', 'Lease - background', '2021-10-29 13:10:26', 'Do I have to have rental insurance?', 'Cactus.tif', 'Lease - insurance', '2021-10-29 13:10:35', 'What if I get a job transfer?', 'Drum.tif', 'Lease - jobtransfer', '2021-10-29 13:10:45', 'Is it a busy street and how many parking spaces, does it have a garage?', 'Guitar.tif', 'Lease - parking', '2021-10-29 13:10:52', 1, '2021-10-29 13:05:45', 0, 0, 'Public', 'Non-Publish'),
(84, 'XYZ', 'Realtor', '123 ABC st. ABCDE, CA - 90000', NULL, NULL, NULL, 'Appartment', '2021-11-01', '2021-11-30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ipsa sed tempore qui, ea beatae asperiores! Labore atque, ullam id reprehenderit voluptatum nobis ex eligendi beatae minus adipisci veritatis deserunt.', 'Screen Shot 2021-08-29 at 4.07.52 PM.png', 'Lease', 'IMG_0806.mp4', 'IMG_0809.mp4', 'IMG_0810.mp4', 'Are pets allowed?', 'IMG_0811.mp4', 'Lease - pets', '2021-11-09 15:05:56', 'What if I have bad credit?', 'IMG_0814.mp4', 'Lease - credit', '2021-11-09 15:06:32', 'How soon is it available?', 'IMG_0816.mp4', 'Lease - available', '2021-11-09 15:06:43', 'Is rent negotiable?', 'IMG_0818.mp4', 'Lease - negotiable', '2021-11-09 15:06:55', 'Is there a discount for senior citizen or a veteran?', 'IMG_0820.mp4', 'Lease - discount', '2021-11-09 15:07:08', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'IMG_0822.mp4', 'Lease - places', '2021-11-09 15:12:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-11-09 15:05:15', 0, 0, 'Public', 'Non-Publish'),
(85, 'Newberry Realty', 'Realtor', '980 Breezemont Ct', 'Port Orange', 'FL', '32127', 'Single Family', '2021-11-01', '2022-12-31', '', '980house.png', 'Purchase', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-11-15 15:53:32', 0, 0, 'Public', 'Non-Publish');
