
-- --------------------------------------------------------

--
-- Table structure for table `option_Selection`
--

CREATE TABLE `option_Selection` (
  `id` int(11) NOT NULL,
  `purchase_lease` varchar(50) NOT NULL,
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option_Selection`
--

INSERT INTO `option_Selection` (`id`, `purchase_lease`, `question`) VALUES
(1, 'Purchase', 'Is the price firm?'),
(2, 'Purchase', 'How long has it been on the market?'),
(3, 'Purchase', 'What’s the school district?'),
(4, 'Purchase', 'Is there room for a pool?'),
(5, 'Purchase', 'How old is the HVAC?'),
(6, 'Purchase', 'Will it pass an FHA or VA financing? or owner financing'),
(7, 'Purchase', 'Will seller pay any of my closing costs?'),
(8, 'Purchase', 'How much will insurance be?'),
(9, 'Purchase', 'Is there an HOA? what does that include?'),
(10, 'Purchase', 'Are there many rental properties in the neighborhood?'),
(11, 'Purchase', 'How far from beach, shopping, interstate etc?'),
(12, 'Purchase', 'How much will my taxes be?'),
(13, 'Purchase', 'What are the neighbors like?'),
(14, 'Purchase', 'Can I park my boat or commercial vehicle?'),
(15, 'Purchase', 'Why are they selling?'),
(16, 'Purchase', 'Are there rental restrictions or AirBNB restrictions?'),
(17, 'Purchase', 'How much are HOA fees?'),
(18, 'Purchase', 'Is it in a flood zone?'),
(19, 'Purchase', 'Are there minorities or many kids in the neighborhood?'),
(20, 'Purchase', 'How many others in the neighborhood are for sale/sold and or what are the comps?'),
(21, 'Lease', 'How soon is it available?'),
(22, 'Lease', 'Are pets allowed?'),
(23, 'Lease', 'Is rent negotiable?'),
(24, 'Lease', 'What if I have bad credit?'),
(25, 'Lease', 'What’s included in rent?'),
(26, 'Lease', 'Is there a fenced yard?'),
(27, 'Lease', 'How is the school system?'),
(28, 'Lease', 'Can I have a commercial vehicle?'),
(29, 'Lease', 'How are the neighbors?'),
(30, 'Lease', 'What’s the Fpl bill run?'),
(31, 'Lease', 'Can I paint the inside?'),
(32, 'Lease', 'Is there a discount for senior citizen or a veteran?'),
(33, 'Lease', 'Is owner willing to lease with option to buy?'),
(34, 'Lease', 'Is it furnished?'),
(35, 'Lease', 'How close is the bus stop, shopping, interstate, beach, hospital?'),
(36, 'Lease', 'Can I have a home based business?'),
(37, 'Lease', 'Do I have to have rental insurance?'),
(38, 'Lease', 'Can we skip the background check?'),
(39, 'Lease', 'What if I get a job transfer?'),
(40, 'Lease', 'Is it a busy street and how many parking spaces, does it have a garage?');
