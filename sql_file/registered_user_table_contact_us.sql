
-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `emailSubject` varchar(255) NOT NULL,
  `emailBody` longtext NOT NULL,
  `date_sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `emailSubject`, `emailBody`, `date_sent`) VALUES
(1, 'Ridhs', 'ridhs@test.com', 'Hello', 'Testing Email...', '2021-08-27 14:30:35'),
(7, 'Riddhi', 'riddhi@drhologram.com', 'Hi', 'Need to add few questions...', '2021-08-27 15:06:07'),
(8, 'Riddhi', 'riddhi@drhologram.com', 'Hello', 'Testing email', '2021-08-27 15:08:20'),
(9, 'Ridhs', 'riddhipatel.csu@gmail.com', 'Hola', 'Testing...', '2021-08-27 15:09:41'),
(10, 'Ridhs', 'riddhipatel.csu@gmail.com', 'Hola', 'How are you?', '2021-08-27 15:11:10'),
(11, 'Ridhs', 'riddhipatel.csu@gmail.com', 'Hello', 'Testing email...', '2021-08-27 15:12:12'),
(12, 'Ridhs', 'riddhipatel.csu@gmail.com', 'Hello', 'I think I got it...', '2021-08-27 15:24:15'),
(39, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Find the attachment', '2021-09-09 12:25:09'),
(40, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Find the attachments...', '2021-09-09 12:44:16'),
(41, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Find the attachments...', '2021-09-09 12:47:22'),
(42, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hola', 'Please find the attached files...', '2021-09-09 12:48:29'),
(43, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Please find the attachments...', '2021-09-10 12:15:02'),
(44, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Find the attachment', '2021-09-23 16:08:27'),
(45, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Trial message', '2021-11-11 13:33:21'),
(46, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'Testing only', '2021-11-11 15:36:34'),
(47, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'Testing only', '2021-11-11 15:39:20'),
(48, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:39:44'),
(49, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:40:35'),
(50, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:40:59'),
(51, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:41:28'),
(52, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:43:06'),
(53, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:45:55'),
(54, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-11 15:47:38'),
(55, 'Ridhs', 'riddhi@drhologram.com', 'Hola', 'testing', '2021-11-12 12:21:52'),
(56, 'Ridhs', '', 'Hola', 'testing', '2021-11-12 15:17:25'),
(57, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email', 'Testing email, reply me back with the solution.', '2021-11-12 15:20:16'),
(58, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email', 'Testing email, please reply us back ASAP.', '2021-11-12 15:21:09'),
(59, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email - 2', 'Testing email, reply me back with the solution.', '2021-11-12 15:28:11'),
(60, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email - 3', 'Find the attached screenshot', '2021-11-12 15:29:39'),
(61, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email - 4', 'Find the attached video', '2021-11-12 15:31:42'),
(62, 'Dr. Hologram', 'riddhi@drhologram.com', 'Testing email - 5', 'Find the attached video', '2021-11-12 15:33:04');
