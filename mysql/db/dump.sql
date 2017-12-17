--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--
DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `first_name`, `last_name`, `password`, `status`) VALUES
(1, 'hoge', 'ichiro', 'suzuki', 'e6a33eee180b07e563d74fee8c2c66b8', 0),
(2, 'huga', 'jiro', 'yamada', '2e7dc6b8a1598f4f75c3eaa47958ee2f', 0),
(3, 'moge', 'saburo', 'sato', '1c3a8e03f448d211904161a6f5849b68', 1),
(4, 'muga', 'ichiko', 'takahashi', '62f0a68a4179c5cdd997189760cbcf18', 0),
(5, 'roge', 'shiro', 'watanabe', '61bd060b07bddfecccea56a82b850ecf', 1);
