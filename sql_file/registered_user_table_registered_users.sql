
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
(10, 'Owner01', 'owner01', 'ABC', 'owner_01', 'riddhi@drhologram.com', 'ABCDE', 'Realtor', 'Owner', '2021-08-05', '', 1, NULL, NULL),
(13, 'Admin_02', 'Admin02', '', 'admin_02', 'admin@gmail.com', 'admin_02', '', 'Admin', '2021-08-06', 'b54cd52e5fbe6a525b94071270473c28', 1, NULL, NULL),
(20, 'owner02', 'owner', 'XYZ', 'Owner02', 'riddhipatel.csu@gmail.com', '123456', 'Restaurant', 'Owner', '2021-09-09', '1086edcd32c82c9cabd3d411a97524eb', 1, NULL, NULL),
(21, 'User03', 'user', '', 'user03', 'user@gmail.com', 'user03', '', 'User', '2021-09-17', 'e6cdec68477b81610859b1e501128b3f', 1, NULL, NULL),
(22, 'Admin_01', 'admin', '', 'admin_01', 'admin01@gmail.com', 'admin_01', '', 'Admin', '2021-09-17', '78adb5f12bacdb5fd94fb2d16049f142', 0, NULL, NULL),
(24, 'Owner4', 'Owner4', 'XYZ', 'owner_04', 'r.patel.241@westcliff.edu', '12345', '', 'Owner', '2021-11-10', 'cd397d3467c323cf13e9eb22fd4b30fa', 1, NULL, NULL),
(31, 'Owner06', 'Owner06', 'DrHolo', 'Owner06', 'owner06@gmail.com', 'owner06', 'Realtor', 'Owner', '2021-11-11', 'eeaae8077c3caea0a9a741a593f4fa27', 0, NULL, NULL),
(32, 'Owner7', 'Owner7', 'ABC', 'Owner7', 'owner7@gmail.com', 'owner7', 'Realtor', 'Owner', '2021-11-11', '512dd7a4e68caec571d6066494765059', 0, NULL, NULL),
(38, 'Owner08', 'Owner08', 'ABC', 'Owner08', 'Owner08@gmail.com', '1234', 'Realtor', 'Owner', '2021-11-11', '32f215185addcd2a0e9995c2718174be', 0, NULL, NULL),
(40, 'Nancy', 'Fowler', 'Newberry Realty', 'Nancy', 'nancy@gmail.com', 'Nancy', 'Realtor', 'Owner', '2021-11-11', '2491baf25f5d4fa078d0479ad93f471c', 0, NULL, NULL),
(41, 'def', 'def', 'DEF', 'def', 'def@gmail.com', 'def', 'Medical', 'Owner', '2021-11-11', 'c2803f785b03224561488e778f706f79', 0, NULL, NULL);
