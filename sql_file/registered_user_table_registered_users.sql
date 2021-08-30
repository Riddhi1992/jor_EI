
-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re_password` varchar(100) NOT NULL,
  `business_type` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `created` date NOT NULL DEFAULT current_timestamp(),
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0,
  `status` int(50) NOT NULL DEFAULT 1,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `re_password`, `business_type`, `user_type`, `created`, `verification_code`, `is_verified`, `status`, `resettoken`, `resettokenexpire`) VALUES
(9, 'User', 'user02', '', 'user_01', 'patelriddhi01992@gmail.com', '$2y$10$VwHjYS01MBMGSpxV1xrlGeAZk7TMqXtYGPVv8NbIE8ZXUmWkHtevy', '$2y$10$ITA8/BJ2Suw.ccRCgu7/o.smUG/GMC37dFOXdBXP6RnkXveIka8PS', '', 'User', '2021-08-05', '434637e3599b91a06b2295c159130e73', 1, 1, NULL, NULL),
(10, 'Owner', 'owner', 'ABC', 'owner_01', 'riddhi@drhologram.com', '$2y$10$VKN0WSsKSPzh5vJtFFCjFOuvpXkg7WvK0jDqt24CHQPs82Zl5uUbG', '$2y$10$DetNy.J9kn7MdT337lN9qubEWtLAgfUdvhG8vIJMWDQvWJHmV.A1O', 'Restaurant', 'Owner', '2021-08-05', '56ec3523a87453781e01bf7dd0f75e2f', 1, 1, NULL, NULL),
(12, 'User2', 'user2', '', 'user_02', 'r.patel.241@westcliff.edu', 'user_02', 'user_02', '', 'User', '2021-08-05', '175479b9d8519cee9b72e94fa854582f', 0, 0, NULL, NULL),
(13, 'Admin_02', 'admin', '', 'admin_02', 'admin@gmail.com', 'admin_02', 'admin_02', '', 'Admin', '2021-08-06', 'b54cd52e5fbe6a525b94071270473c28', 0, 0, NULL, NULL),
(14, 'Admin_01', 'admin', '', 'admin_01', 'riddhipatel.csu@gmail.com', '$2y$10$dhE9.FMxf0RR3PirXCLUsuTT6YQa10sHOL2Az7V/qGxESizVV4clG', '$2y$10$gzdKu1SDd9zevpfLseowD.9rRBOhUBSELwNKmJB3jn6zWC5kSF6nS', '', 'Admin', '2021-08-23', 'fc72e06dd354284dd29e57d26f43e301', 1, 1, '7cf32269c5e420a31d6ca058b17ff3b0', '2021-08-25');
