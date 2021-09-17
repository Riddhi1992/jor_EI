
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
  `business_type` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `created` date NOT NULL DEFAULT current_timestamp(),
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `business_type`, `user_type`, `created`, `verification_code`, `is_verified`, `resettoken`, `resettokenexpire`) VALUES
(9, 'User01', 'User01', '', 'user_01', 'patelriddhi01992@gmail.com', '1234', '', 'User', '2021-08-05', '', 1, NULL, NULL),
(10, 'Owner01', 'owner01', 'ABC', 'owner_01', 'riddhi@drhologram.com', '12345', 'Restaurant', 'Owner', '2021-08-05', '', 1, NULL, NULL),
(12, 'User02', 'user02', '', 'user_02', 'r.patel.241@westcliff.edu', 'user_02', '', 'User', '2021-08-05', '175479b9d8519cee9b72e94fa854582f', 1, NULL, NULL),
(13, 'Admin_02', 'admin', '', 'admin_02', 'admin@gmail.com', 'admin_02', '', 'Admin', '2021-08-06', 'b54cd52e5fbe6a525b94071270473c28', 0, NULL, NULL),
(20, 'owner02', 'owner', 'XYZ', 'Owner02', 'riddhipatel.csu@gmail.com', '123456', 'Restaurant', 'Owner', '2021-09-09', '1086edcd32c82c9cabd3d411a97524eb', 1, NULL, NULL),
(21, 'User03', 'user', '', 'user03', 'user@gmail.com', 'user03', '', 'User', '2021-09-17', 'e6cdec68477b81610859b1e501128b3f', 0, NULL, NULL),
(22, 'Admin_01', 'admin', '', 'admin_01', 'admin01@gmail.com', 'admin_01', '', 'Admin', '2021-09-17', '78adb5f12bacdb5fd94fb2d16049f142', 0, NULL, NULL);
