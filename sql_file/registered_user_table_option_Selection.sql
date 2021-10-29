
-- --------------------------------------------------------

--
-- Table structure for table `option_Selection`
--

CREATE TABLE `option_Selection` (
  `id` int(11) NOT NULL,
  `purchase_lease` varchar(50) NOT NULL,
  `question` longtext NOT NULL,
  `keywords` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option_Selection`
--

INSERT INTO `option_Selection` (`id`, `purchase_lease`, `question`, `keywords`) VALUES
(1, 'Purchase', 'Is the price firm?', 'price'),
(2, 'Purchase', 'How long has it been on the market?', 'market'),
(3, 'Purchase', 'What is the school district?', 'school'),
(4, 'Purchase', 'Is there room for a pool?', 'pool'),
(5, 'Purchase', 'How old is the HVAC?', 'hvac'),
(6, 'Purchase', 'Will it pass an FHA or VA financing? or owner financing', 'financing'),
(7, 'Purchase', 'Will seller pay any of my closing costs?', 'closing'),
(8, 'Purchase', 'How much will insurance be?', 'insurance'),
(9, 'Purchase', 'Is there an HOA? what does that include?', 'hoa'),
(10, 'Purchase', 'Are there many rental properties in the neighborhood?', 'rental'),
(11, 'Purchase', 'How far from beach, shopping, interstate etc?', 'places'),
(12, 'Purchase', 'How much will my taxes be?', 'taxes'),
(13, 'Purchase', 'What are the neighbors like?', 'neighbors'),
(14, 'Purchase', 'Can I park my boat or commercial vehicle?', 'parking'),
(15, 'Purchase', 'Why are they selling?', 'selling'),
(16, 'Purchase', 'Are there rental restrictions or AirBNB restrictions?', 'restrictions'),
(17, 'Purchase', 'How much are HOA fees?', 'hoafees'),
(18, 'Purchase', 'Is it in a flood zone?', 'flood'),
(19, 'Purchase', 'Are there minorities or many kids in the neighborhood?', 'kids'),
(20, 'Purchase', 'How many others in the neighborhood are for sale/sold and or what are the comps?', 'comps'),
(21, 'Lease', 'How soon is it available?', 'available'),
(22, 'Lease', 'Are pets allowed?', 'pets'),
(23, 'Lease', 'Is rent negotiable?', 'negotiable'),
(24, 'Lease', 'What if I have bad credit?', 'credit'),
(25, 'Lease', 'What is included in rent?', 'included'),
(26, 'Lease', 'Is there a fenced yard?', 'fence'),
(27, 'Lease', 'How is the school system?', 'school'),
(28, 'Lease', 'Can I have a commercial vehicle?', 'vehicle'),
(29, 'Lease', 'How are the neighbors?', 'neighbors'),
(30, 'Lease', 'What is the Fpl bill run?', 'fpl'),
(31, 'Lease', 'Can I paint the inside?', 'paint'),
(32, 'Lease', 'Is there a discount for senior citizen or a veteran?', 'discount'),
(33, 'Lease', 'Is owner willing to lease with option to buy?', 'buy'),
(34, 'Lease', 'Is it furnished?', 'furnished'),
(35, 'Lease', 'How close is the bus stop, shopping, interstate, beach, hospital?', 'places'),
(36, 'Lease', 'Can I have a home based business?', 'business'),
(37, 'Lease', 'Do I have to have rental insurance?', 'insurance'),
(38, 'Lease', 'Can we skip the background check?', 'background'),
(39, 'Lease', 'What if I get a job transfer?', 'jobtransfer'),
(40, 'Lease', 'Is it a busy street and how many parking spaces, does it have a garage?', 'parking');
