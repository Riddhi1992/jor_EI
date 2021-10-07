
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
(44, 'Riddhi', 'riddhipatel.csu@gmail.com', 'Hello', 'Find the attachment', '2021-09-23 16:08:27');
