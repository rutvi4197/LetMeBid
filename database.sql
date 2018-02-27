-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 182.50.133.174
-- Generation Time: Feb 27, 2018 at 01:28 AM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `edufocus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidconfirm_tbl`
--

CREATE TABLE `bidconfirm_tbl` (
  `confirm_bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `confirm_bid_date` date NOT NULL,
  `fk_bid_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  PRIMARY KEY (`confirm_bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bidconfirm_tbl`
--

INSERT INTO `bidconfirm_tbl` VALUES(1, '2018-02-23', 5, 1);
INSERT INTO `bidconfirm_tbl` VALUES(2, '2017-04-20', 9, 2);
INSERT INTO `bidconfirm_tbl` VALUES(3, '2018-02-21', 12, 3);
INSERT INTO `bidconfirm_tbl` VALUES(4, '2017-03-23', 14, 4);
INSERT INTO `bidconfirm_tbl` VALUES(5, '2018-01-30', 15, 5);
INSERT INTO `bidconfirm_tbl` VALUES(6, '2018-01-17', 19, 6);
INSERT INTO `bidconfirm_tbl` VALUES(7, '2017-12-30', 20, 7);
INSERT INTO `bidconfirm_tbl` VALUES(8, '2017-12-14', 35, 8);
INSERT INTO `bidconfirm_tbl` VALUES(9, '2017-11-29', 26, 9);
INSERT INTO `bidconfirm_tbl` VALUES(13, '2018-02-24', 33, 27);
INSERT INTO `bidconfirm_tbl` VALUES(14, '2018-02-23', 34, 27);
INSERT INTO `bidconfirm_tbl` VALUES(15, '2018-02-24', 39, 31);
INSERT INTO `bidconfirm_tbl` VALUES(19, '2018-02-24', 46, 17);
INSERT INTO `bidconfirm_tbl` VALUES(20, '2018-02-24', 51, 10);
INSERT INTO `bidconfirm_tbl` VALUES(21, '2018-02-24', 49, 11);
INSERT INTO `bidconfirm_tbl` VALUES(22, '2018-02-24', 55, 12);

-- --------------------------------------------------------

--
-- Table structure for table `bid_tbl`
--

CREATE TABLE `bid_tbl` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `bid_price` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `bid_tbl`
--

INSERT INTO `bid_tbl` VALUES(5, 5250, 1, 2);
INSERT INTO `bid_tbl` VALUES(9, 320, 2, 3);
INSERT INTO `bid_tbl` VALUES(12, 1150, 3, 3);
INSERT INTO `bid_tbl` VALUES(14, 600, 4, 3);
INSERT INTO `bid_tbl` VALUES(15, 3050, 5, 4);
INSERT INTO `bid_tbl` VALUES(18, 1700, 6, 4);
INSERT INTO `bid_tbl` VALUES(20, 10050, 7, 1);
INSERT INTO `bid_tbl` VALUES(26, 40, 9, 3);
INSERT INTO `bid_tbl` VALUES(33, 105, 27, 3);
INSERT INTO `bid_tbl` VALUES(35, 5460, 8, 3);
INSERT INTO `bid_tbl` VALUES(39, 150, 31, 3);
INSERT INTO `bid_tbl` VALUES(46, 242, 17, 1);
INSERT INTO `bid_tbl` VALUES(49, 105, 11, 3);
INSERT INTO `bid_tbl` VALUES(51, 96, 10, 1);
INSERT INTO `bid_tbl` VALUES(55, 301, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` VALUES(1, 'Electronics');
INSERT INTO `category_tbl` VALUES(2, 'Home Appliances');
INSERT INTO `category_tbl` VALUES(3, 'Jewelry');
INSERT INTO `category_tbl` VALUES(4, 'Sports');
INSERT INTO `category_tbl` VALUES(5, 'Gift Cards');
INSERT INTO `category_tbl` VALUES(6, 'Garden');
INSERT INTO `category_tbl` VALUES(7, 'Fashion');
INSERT INTO `category_tbl` VALUES(8, 'Art');
INSERT INTO `category_tbl` VALUES(9, 'Memorabilia');

-- --------------------------------------------------------

--
-- Table structure for table `cattime_tbl`
--

CREATE TABLE `cattime_tbl` (
  `cattime_id` int(11) NOT NULL AUTO_INCREMENT,
  `cattime_day` varchar(3) NOT NULL,
  `cattime_starttime` varchar(20) NOT NULL,
  `cattime_endtime` varchar(20) NOT NULL,
  `fk_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`cattime_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cattime_tbl`
--

INSERT INTO `cattime_tbl` VALUES(1, 'Sat', '08:00:00', '13:00:00', 2);
INSERT INTO `cattime_tbl` VALUES(4, 'Sun', '14:00:00', '17:00:00', 4);
INSERT INTO `cattime_tbl` VALUES(5, 'Mon', '19:00:00', '22:00:00', 5);
INSERT INTO `cattime_tbl` VALUES(6, 'Tue', '19:00:00', '22:00:00', 6);
INSERT INTO `cattime_tbl` VALUES(7, 'Wed', '19:00:00', '22:00:00', 7);
INSERT INTO `cattime_tbl` VALUES(8, 'Thu', '19:00:00', '22:00:00', 8);
INSERT INTO `cattime_tbl` VALUES(9, 'Fri', '19:00:00', '22:00:00', 1);
INSERT INTO `cattime_tbl` VALUES(10, 'Mon', '12:00:00', '15:00:00', 9);
INSERT INTO `cattime_tbl` VALUES(11, 'Tue', '12:00:00', '15:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `pk_city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` char(20) NOT NULL,
  `fk_state_id` int(28) NOT NULL,
  PRIMARY KEY (`pk_city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` VALUES(1, 'Ahmedabad', 3);
INSERT INTO `city_tbl` VALUES(2, 'Surat', 3);
INSERT INTO `city_tbl` VALUES(3, 'Lucknow', 1);
INSERT INTO `city_tbl` VALUES(4, 'Kanpur', 1);
INSERT INTO `city_tbl` VALUES(5, 'Varanasi', 1);
INSERT INTO `city_tbl` VALUES(6, 'Meerut', 1);
INSERT INTO `city_tbl` VALUES(7, 'Agra', 1);
INSERT INTO `city_tbl` VALUES(8, 'Mumbai', 2);
INSERT INTO `city_tbl` VALUES(9, 'Puna', 2);
INSERT INTO `city_tbl` VALUES(10, 'Nasik', 2);
INSERT INTO `city_tbl` VALUES(11, 'Kalyan', 2);
INSERT INTO `city_tbl` VALUES(12, 'Aurngabad', 2);
INSERT INTO `city_tbl` VALUES(15, 'Vadodara', 3);
INSERT INTO `city_tbl` VALUES(16, 'Gandhinagar', 3);
INSERT INTO `city_tbl` VALUES(17, 'Rajkot', 3);
INSERT INTO `city_tbl` VALUES(18, 'Jaipur', 5);
INSERT INTO `city_tbl` VALUES(19, 'Jodhpur', 5);
INSERT INTO `city_tbl` VALUES(20, 'Pushkar', 5);
INSERT INTO `city_tbl` VALUES(21, 'Kota', 5);
INSERT INTO `city_tbl` VALUES(22, 'Ajmer', 5);
INSERT INTO `city_tbl` VALUES(23, 'Panji', 6);
INSERT INTO `city_tbl` VALUES(24, 'Margao', 6);
INSERT INTO `city_tbl` VALUES(25, 'Calangute', 6);
INSERT INTO `city_tbl` VALUES(26, 'Ponda', 6);
INSERT INTO `city_tbl` VALUES(27, 'Mapusa', 6);
INSERT INTO `city_tbl` VALUES(28, 'New Delhi', 7);
INSERT INTO `city_tbl` VALUES(29, 'Gurgaon', 7);
INSERT INTO `city_tbl` VALUES(30, 'Mehrauli', 7);
INSERT INTO `city_tbl` VALUES(31, 'Faridabad', 7);
INSERT INTO `city_tbl` VALUES(32, 'Ghaziabad', 7);
INSERT INTO `city_tbl` VALUES(33, 'Chandighar', 8);
INSERT INTO `city_tbl` VALUES(34, 'Ludhiana', 8);
INSERT INTO `city_tbl` VALUES(35, 'Kochi', 9);
INSERT INTO `city_tbl` VALUES(36, 'Thiruvanathpuram', 9);
INSERT INTO `city_tbl` VALUES(37, 'Thrissur', 9);
INSERT INTO `city_tbl` VALUES(38, 'Kannur', 9);
INSERT INTO `city_tbl` VALUES(39, 'Varkala', 9);
INSERT INTO `city_tbl` VALUES(40, 'Bengaluru', 10);
INSERT INTO `city_tbl` VALUES(41, 'Manglore', 10);
INSERT INTO `city_tbl` VALUES(42, 'Hubli', 10);
INSERT INTO `city_tbl` VALUES(43, 'Belguam', 10);
INSERT INTO `city_tbl` VALUES(44, 'gulbarga', 10);
INSERT INTO `city_tbl` VALUES(45, 'Bijapur', 10);
INSERT INTO `city_tbl` VALUES(46, 'Kolkatta', 11);
INSERT INTO `city_tbl` VALUES(47, 'Asansol', 11);
INSERT INTO `city_tbl` VALUES(48, 'Siliguri', 11);
INSERT INTO `city_tbl` VALUES(49, 'Durgapur', 11);
INSERT INTO `city_tbl` VALUES(50, 'Habra', 11);
INSERT INTO `city_tbl` VALUES(51, 'Gangtok', 12);
INSERT INTO `city_tbl` VALUES(52, 'Namchi', 12);
INSERT INTO `city_tbl` VALUES(53, 'Yuksom', 12);
INSERT INTO `city_tbl` VALUES(54, 'Pelling', 12);
INSERT INTO `city_tbl` VALUES(55, 'Mangan', 12);
INSERT INTO `city_tbl` VALUES(56, 'Imphal', 13);
INSERT INTO `city_tbl` VALUES(57, 'Bishnupur', 13);
INSERT INTO `city_tbl` VALUES(58, 'Kakching', 13);
INSERT INTO `city_tbl` VALUES(59, 'moirang', 13);
INSERT INTO `city_tbl` VALUES(60, 'Moreh', 13);
INSERT INTO `city_tbl` VALUES(61, 'Vijaywada', 14);
INSERT INTO `city_tbl` VALUES(62, 'Visakapattanam', 14);
INSERT INTO `city_tbl` VALUES(63, 'Tirupati', 14);
INSERT INTO `city_tbl` VALUES(64, 'Eluru', 14);
INSERT INTO `city_tbl` VALUES(65, 'Guntur', 14);
INSERT INTO `city_tbl` VALUES(66, 'Itanagar', 15);
INSERT INTO `city_tbl` VALUES(67, 'Bomdila', 15);
INSERT INTO `city_tbl` VALUES(68, 'Pasighat', 15);
INSERT INTO `city_tbl` VALUES(69, 'Zero', 15);
INSERT INTO `city_tbl` VALUES(70, 'Tawang', 15);
INSERT INTO `city_tbl` VALUES(71, 'Karnal', 16);
INSERT INTO `city_tbl` VALUES(72, 'Hisar', 16);
INSERT INTO `city_tbl` VALUES(73, 'Ambala', 16);
INSERT INTO `city_tbl` VALUES(74, 'Rohtak', 16);
INSERT INTO `city_tbl` VALUES(75, 'Sonpat', 16);
INSERT INTO `city_tbl` VALUES(76, 'Ranchi', 17);
INSERT INTO `city_tbl` VALUES(77, 'Jamshedpur', 17);
INSERT INTO `city_tbl` VALUES(78, 'Dhanbad', 17);
INSERT INTO `city_tbl` VALUES(79, 'Deoghar', 17);
INSERT INTO `city_tbl` VALUES(80, 'chas', 17);
INSERT INTO `city_tbl` VALUES(81, 'Bhubneshvar', 18);
INSERT INTO `city_tbl` VALUES(82, 'Rourkela', 18);
INSERT INTO `city_tbl` VALUES(83, 'Sambalpur', 18);
INSERT INTO `city_tbl` VALUES(84, 'Puri', 18);
INSERT INTO `city_tbl` VALUES(85, 'Baripada', 18);
INSERT INTO `city_tbl` VALUES(86, 'Aizawl', 19);
INSERT INTO `city_tbl` VALUES(87, 'Lunglei', 19);
INSERT INTO `city_tbl` VALUES(88, 'Kolasib', 19);
INSERT INTO `city_tbl` VALUES(89, 'Champhai', 19);
INSERT INTO `city_tbl` VALUES(90, 'Serchhip', 19);
INSERT INTO `city_tbl` VALUES(91, 'Raipur', 20);
INSERT INTO `city_tbl` VALUES(92, 'Bhilai', 20);
INSERT INTO `city_tbl` VALUES(93, 'Bilaspur', 20);
INSERT INTO `city_tbl` VALUES(94, 'Ambikapur', 20);
INSERT INTO `city_tbl` VALUES(95, 'Durg', 20);
INSERT INTO `city_tbl` VALUES(96, 'Dharmshala', 21);
INSERT INTO `city_tbl` VALUES(97, 'Shimla', 21);
INSERT INTO `city_tbl` VALUES(98, 'Mandi', 21);
INSERT INTO `city_tbl` VALUES(99, 'Manali', 21);
INSERT INTO `city_tbl` VALUES(100, 'Nahan', 21);
INSERT INTO `city_tbl` VALUES(101, 'Guwahati', 22);
INSERT INTO `city_tbl` VALUES(102, 'Tezpur', 22);
INSERT INTO `city_tbl` VALUES(103, 'Jorhat', 22);
INSERT INTO `city_tbl` VALUES(104, 'Haflong', 22);
INSERT INTO `city_tbl` VALUES(105, 'Dispur', 22);
INSERT INTO `city_tbl` VALUES(106, 'Shilong', 23);
INSERT INTO `city_tbl` VALUES(107, 'Cherapunji', 23);
INSERT INTO `city_tbl` VALUES(108, 'Tura', 23);
INSERT INTO `city_tbl` VALUES(109, 'Jowai', 23);
INSERT INTO `city_tbl` VALUES(110, 'Baghamara', 23);
INSERT INTO `city_tbl` VALUES(111, 'Patna', 24);
INSERT INTO `city_tbl` VALUES(112, 'Bihar sharif', 24);
INSERT INTO `city_tbl` VALUES(113, 'Gaya district', 24);
INSERT INTO `city_tbl` VALUES(114, 'Arrah', 24);
INSERT INTO `city_tbl` VALUES(115, 'Chhapara', 24);
INSERT INTO `city_tbl` VALUES(116, 'Srinagar', 26);
INSERT INTO `city_tbl` VALUES(117, 'Katra', 26);
INSERT INTO `city_tbl` VALUES(118, 'Pahalgam', 26);
INSERT INTO `city_tbl` VALUES(119, 'Gulmarg', 26);
INSERT INTO `city_tbl` VALUES(120, 'Udhampur', 26);
INSERT INTO `city_tbl` VALUES(121, 'Agartara', 27);
INSERT INTO `city_tbl` VALUES(122, 'Udaipur', 27);
INSERT INTO `city_tbl` VALUES(123, 'Dharamnagar', 27);
INSERT INTO `city_tbl` VALUES(124, 'Belonia', 27);
INSERT INTO `city_tbl` VALUES(125, 'Khowai', 27);
INSERT INTO `city_tbl` VALUES(126, 'Haridhwar', 28);
INSERT INTO `city_tbl` VALUES(127, 'Dehradun', 28);
INSERT INTO `city_tbl` VALUES(128, 'Rishikesh', 28);
INSERT INTO `city_tbl` VALUES(129, 'Mussoorie', 28);
INSERT INTO `city_tbl` VALUES(130, 'Rudrapur', 28);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(5000) NOT NULL,
  `product_min_bid_price` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_photo` varchar(50) NOT NULL,
  `product_date` date NOT NULL,
  `fk_cat_id` int(11) NOT NULL,
  `fk_subcat_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` VALUES(1, 'Samsung Dual Core 11.6" Chromebook Black', 'Samsung Dual Core 11.6" Chromebook Black\r\nIntel Celeron N3060 processor with 2GB memory, 16GB SSD\r\nSimple and secure Google Chrome OS\r\n11.6” HD Anti-Reflective Display with image enhancer\r\nWork or play for up to 11 hours on a single charge\r\nSpill-resistant keyboard protects against accidental damage\r\nIncludes: Adapter, Power Code, Paper Sheets - Quick Strart, Software Guide, Warranty Card\r\nFeatures\r\nScreen Size11.6 inches\r\n\r\nMax Screen Resolution1366 x 768 pixels\r\n\r\nProcessor1.6 GHz 8032\r\n\r\nRAM2 GB\r\n\r\nHard Drive16 GB Flash Memory Solid State\r\n\r\nCard DescriptionIntegrated\r\n\r\nNumber of USB 2.0 Ports1\r\n\r\nNumber of USB 3.0 Ports1\r\n\r\nAverage Battery Life (in hours)11 hours\r\n\r\nOther Technical Details\r\n\r\nBrand NameSamsung\r\n\r\nSeriesXE500C13\r\n\r\nItem model numberXE500C13-K05US\r\n\r\nHardware PlatformChrome\r\n\r\nOperating SystemChrome OS\r\n\r\nItem Weight2.5 pounds\r\n\r\nProduct Dimensions11.4 x 8 x 0.7 inches\r\n\r\nItem Dimensions L x W x H11.37 x 8.04 x 0.7 inches\r\n\r\nColorBlack\r\n\r\nProcessor BrandIntel\r\n\r\nProcessor Count2\r\n\r\nFlash Memory Size16.0\r\n\r\nOptical Drive TypeNone\r\n\r\nBatteries1 Lithium ion batteries required. (included)', 5000, 3, 'p1.jpg', '2018-02-15', 1, 1, 1);
INSERT INTO `product_tbl` VALUES(2, 'Ogio Renegade RSS Laptop and Tablet Backpack - Black', 'The Renegade RSS backpack has features that include an armor protected dedicated laptop compartment that fits most 17" laptops, iFoam integrated foam panels that keep your electronics and other valuables protected, a padded iPad/tablet/e-reader pocket, and a crush proof Tech Vault pocket with a customize-able divider. This backpack also has a HUB (Hybrid Unibody Backpanel) feature, a padded mouse/digital camera pocket, increased shoulder strap foam padding, fully adjustable ergonomic yoke-style shoulder straps, two zippered side utility pockets, soft touch neoprene grab handle, and an adjustable sternum strap.\r\n\r\nFeatures\r\nArmor protected dedicated laptop compartment with RSS fits most 17" laptops\r\nIntegrated foam panels keep your electronics and other valuables protected\r\nCrush proof Tech Vault pocket with soft tricot liner\r\nHUB (Hybrid Unibody Backpanel) for ultimate comfort', 200, 3, 'p2.jpg', '2017-04-06', 1, 31, 1);
INSERT INTO `product_tbl` VALUES(3, 'Kocaso MX780 7-Inch 8GB Quad-Core Tablet - Black', 'Everything will run nice and smooth on the MX780 thanks to the Android 4.4 KitKat operating system! Take advantage of the all new features and sleek design while enjoying your favorite apps, games, etc.!\r\n\r\nFeatures\r\nBuilt-in 8GB Nand Flash and MicroSD slot gives you the freedom to add more storage or transfer music and pictures.\r\nThe high resolution screen makes everything look crisp and lifelike. Text is razor sharp. Colors are vibrant. Photos and videos are rich with detail.\r\nThe Quad-Core is up to twice as fast as the previous-generation Dual-Core, and it delivers up to twice the graphics performance, without sacrificing battery life. Even the most advanced apps are smooth, responsive, and incredibly lifelike.\r\nIncludes dual-camera functionality with a front facing 0.3 MP and rear facing 2.0MP. You can share moments with your friends and family through live chat. Also the rear 2.0MP camera allows you to capture crisp images at any time.\r\n', 1000, 3, 'p3.jpg', '2018-02-19', 1, 2, 1);
INSERT INTO `product_tbl` VALUES(4, 'Proscan PLT8802-8GB 8-Inch 8GB Dual-Core Android 4.2 (Jelly Bean) Tablet', 'The cutting edge technology of Android™ 4.2 Jellybean is now available on a value tablet. This 8'''' capacitive touchscreen Internet tablet with dual core processor gives you a portable media solution for around the house or on the road. A 3D G sensor, Wi-Fi, front camera, and 8GB of storage (expandable up to 32GB) give this tablet a lot of value.\r\n\r\nFeatures\r\nProscan 8" Android Tablet, Capacitive Multi Touch Screen. 8 GB Memory - Expandable to 32 GB\r\nGoogle Play Certified - Google Play Store is Pre-Loaded on this Tablet. Operating System; Android 4.2 Jelly Bean\r\nSuper Fast Dual Core Processor - makes all games and tasks extra fast!\r\nConnect to any Wi-Fi Network\r\nIncludes Front Camera for selfies and Skype. High Resolution 800 x 600 Screen', 500, 3, 'p4.jpg', '2017-03-20', 1, 2, 1);
INSERT INTO `product_tbl` VALUES(5, 'Nikon COOLPIX B500 16MP 40x Optical Zoom Digital Camera w/ Built-in Wi-Fi - Black', 'Simply brilliant photos and videos\r\nThe COOLPIX B500 feels great in your hands, whether you''re zooming in with its super telephoto NIKKOR glass lens or recording 1080p Full HD video using the flip-up LCD. And it takes all the work out of shooting beautiful photos and videos with its 16 megapixel low-light sensor, Lens-Shift Vibration Reduction (VR), easy menus and controls, fun creative effects and outstanding automatic operation. Plus, the whole time you''re shooting, the COOLPIX B500 can be easily and seamlessly connected to a compatible smartphone through Bluetooth low energy (BLE) technology for instant photo sharing and remote camera control. Simply brilliant.', 3000, 3, 'p5.jpg', '2018-01-26', 1, 3, 2);
INSERT INTO `product_tbl` VALUES(6, 'Bell+Howell Fun - Flix Camcorder - Black', 'You''ll be saying lights, camera, action with the 20.0 Megapixel 1080p DV50HD Fun-Flix Camcorder (Black) from Bell+Howell. Enjoy over 9 scene modes, a 3 in. touchscreen, and features like face and smile detection to make your movie making a success. With optimum storage up to 32GB, built-in USB and HDMI ports, this camcorder will make sure you keep those moments you hold dear.\r\nFeatures\r\n20.0 Megapixel\r\n1080p Full Hd Video\r\n3.0" Touchscreen Display\r\n8x Digital Zoom\r\nAutomatic Face Detection\r\nAnti-shake Image Stabilization\r\nAutomatic Smile Capture\r\n9 Scene Modes\r\n', 1500, 3, 'p6.jpg', '2018-01-09', 1, 3, 1);
INSERT INTO `product_tbl` VALUES(7, 'u 80 cm (32 inch) HD Ready LED TV  (32D7545)', 'u 80 cm (32 inch) HD Ready LED TV  (32D7545)', 10000, 3, 'p7.jpg', '2017-12-29', 1, 4, 2);
INSERT INTO `product_tbl` VALUES(8, 'Vu 98 cm (39 inch) Full HD LED TV  (H40D321)', '7 + 7 W Speaker Output : For good-quality TV sound\r\n1920 x 1080 Full HD - Watch Blu-ray movies at their highest level of detail\r\n60 Hz : Standard refresh rate for blur-free picture quality\r\n2 x HDMI : For set top box and consoles\r\n2 x USB : Easily connect your digital camera, camcorder or USB device', 5000, 3, 'p8.jpg', '2017-12-08', 1, 4, 1);
INSERT INTO `product_tbl` VALUES(9, 'BergHOFF Straight Line Nut Cracker + 20 Bids', 'This wide-opening cracker is constructed of high-quality stainless steel. The hollow handles keep the cracker very lightweight.\r\n\r\nFeatures\r\nDishwasher safe: Yes\r\nLightweight\r\nCountry of origin: China\r\nCare instructions: Hand wash recommended', 20, 3, 'p9.jpg', '2017-11-21', 2, 9, 2);
INSERT INTO `product_tbl` VALUES(10, '3-Piece Multi-Function Corkscrew Bottle Opener Kit + 20 Bids', 'Behold, a compact kit every wine connoisseur needs. this three piece set includes a wine stopper, a bottle neck drip protector, and a multi-function tool that can be used as a corkscrew, bottle opener, and foil cutter. Whether you have a discerning palate capable of enjoying the finest bordeaux from France, or a hobbyist who enjoys a nice glass of wine every now and again, this kit was made for you.\r\n\r\nFeatures\r\nWine bottle opener, little knife\r\nExquisite workmanship, compact and practical\r\nIdeal for outdoor sports, gift, and daily use\r\nWhat''s In The Box\r\nIncluded Set: 1 x Wine Opener, 1 x Stopper, and 1 x Bottle Neck Drip Protector', 80, 1, 'p10.jpg', '2017-11-03', 2, 9, 2);
INSERT INTO `product_tbl` VALUES(11, 'Whitmor Rolling 3 Drawer Chest Cart - Black', 'Bring portable storage to your home or office with this multi-purpose cart. Built on a durable steel frame, it features three drawers that are perfect for storing papers, magazines, office items, crafting supplies or other essentials. Its black and steel design mixes well with a variety of home and office décor, and it has locking wheels for easy mobility.\r\n\r\nFeatures\r\nThree drawer cart.\r\nHeavy-duty wheels.\r\nFashionable metal grommets.\r\nNo-tool assembly.\r\nFor home, office or dorm room.\r\n', 100, 1, 'p11.jpg', '2017-10-31', 2, 10, 2);
INSERT INTO `product_tbl` VALUES(12, 'Southern Enterprises Dunston Bar Cabinet', 'Clear sweetly scented smoke from the atmosphere of London''s libraries of old and behold this handsome walnut bar cabinet. Faux quilted doors with oversized ornaments conceal bounteous glass shelf storage and a mirrored back wall, hinting at a dual style life. Additional storage lives in a large pull out drawer and sweeping, open shelf below the main cabinet. Place this traditional bar cabinet in your formal dining room, parlor, or study for an instant modicum of regal glamour. Note: It is recommended to use top of cabinet for light, decorative items only.\r\nFeatures\r\nNailheads, faux quilting, and 3D grooved doors inspire regal composition\r\nMirrored interior wall and glass shelf offer hint of glamour\r\nFeatures 6 bottle holders, 4 glassware racks, 1 adjustable shelf, 1 fixed shelf, and 1 open fixed shelf\r\nHolds approximately 4 glasses per rack\r\nAnti-tip hardware for stability\r\nTraditional style with transitional elements\r\nWalnut finish w/ antique bronze hardware\r\nOverall: 31.75" W x 15.75" D x 48.75" H', 250, 1, 'p12.jpg', '2017-10-26', 2, 10, 1);
INSERT INTO `product_tbl` VALUES(13, 'Hans Wegner, Pair of Teak Framed Twin Beds with Stands\r\n', 'Hans Wegner design, built by Getama circa 1955, a pair of twin beds with attached nightstands.  The beds with teak frames and woven headboards, the footboards with leather covers.  The attached nightstands with single drawer and black glass top, one marked internally "87" and the other "88."   Each section measures 33 1/2 inches wide, 78 1/2 inches long, and 29 1/2 inches in height.\r\nCONDITION\r\nVery good condition.', 650, 1, 'p13.jpg', '2017-10-12', 2, 11, 2);
INSERT INTO `product_tbl` VALUES(14, 'Four Piece Walnut Bedroom Set', 'Four Piece Walnut Bedroom Set - Full Size Bed Measures 86"H X 62.5"W - Matching Dresser with Mirror Measures 95"H X 54"W - Vanity/Dresser has Three White Marble Tops - (2) Matching White Marble Top Night Stands Measure 30"H X 18"W - Bed and Dresser are Carved with Bronze Busts Mounted at Top of Head Board and Mirror - 4" Trim Piece Missing on Dresser - Crown Molding Side Piece Missing on Dresser - Bed Side Rails Have Some Splits - Rails Measure 70" In Length - A Nice Set - Some Joints Need to Be Tightened\r\nCONDITION\r\nSome Trim Pieces Missing - See Detailed Description - Overall A Nice Set - Some Joints Need to Be Tightened', 500, 1, 'p14.jpg', '2017-10-05', 2, 11, 2);
INSERT INTO `product_tbl` VALUES(15, 'American Federal 4 Post Bed, 1820 Enlarged to King', 'A period  American Federal Mahogany 4 Poster Bed, c. 1820, professionally modified to king size. (RLEN2067  TC) accommodates a king sized mattress Provenance: From the South Kent Connecticut collection of a prominent artist\r\nCONDITION\r\nclean, almost new, was used for a large flat screen television stand.', 2000, 1, 'p15.jpg', '2017-09-29', 2, 13, 2);
INSERT INTO `product_tbl` VALUES(16, 'Custom upholstered and tufted king size bed, head,', 'Custom upholstered and tufted king size bed, head, foot, and side rails. ht. 46 1/2in.\r\n', 520, 1, 'p16.jpg', '2017-09-20', 2, 12, 2);
INSERT INTO `product_tbl` VALUES(17, 'Colonial Home Textiles 6-Piece 100% Cotton Towel Set - White', 'Colonial Home Textiles 6-Piece 100% Cotton Towel Set - White\r\nBath towels may be the hardest working members of your household. After all, we expect our towels and washcloths to keep us clean, dry us off, add to the look of our bathroom and occasionally wipe up after Fluffy tracks mud into the house.\r\n\r\nFeatures\r\n100% Egyptian Cotton loops\r\nBath Towels: 500 gsm\r\n(2) Bath Towels: 27" x 54"\r\n(2) Hand Towels: 16" x 28"\r\n(2) Wash Cloths: 12" x 12"', 150, 1, 'p17.jpg', '2017-09-07', 2, 14, 2);
INSERT INTO `product_tbl` VALUES(18, 'Lavish Home Corduroy/Sherpa Throw - Blue', 'The contemporary design of this Corduroy/Sherpa throw provides a distinctive, stylish look while providing comfort and warmth. 100 percent polyester makes for easy care and long lasting use at home or on the go.\r\nFeatures\r\n100% polyester\r\nImported\r\nMaterial: 100% polyester\r\nFace material: corduroy\r\nBack material: Sherpa fleece\r\nDimensions: 50" x 60"\r\nCare instructions: wash in cold water and tumble dry on low heat', 50, 1, 'p18.jpg', '2017-08-23', 2, 14, 1);
INSERT INTO `product_tbl` VALUES(19, 'Remedy Calf Compression Running Sleeve Socks - Small - Blue', 'If you are a runner, cyclist, golfer, nurse or simply on your feet all day, our calf compression sleeve is for you. It is a remarkable product that supports the calf, improves blood flow, reduces swelling, retains minimum moisture and dries quickly.\r\nFeatures\r\nNylon / Spandex Fabric\r\nMoisture Wicking\r\nFits Women Shoe Size 4 - 5 / Ankle Size 6.5 - 8.0 / Calf 10.5 - 14.5 Fits Men Shoe Size Up to 7 / Ankle Size 7.5 - 8.5 / Calf 11.0 - 15.0', 500, 1, 'p19.jpg', '2017-07-31', 2, 15, 1);
INSERT INTO `product_tbl` VALUES(20, 'Salter 914WHLKR Electronic Baby and Toddler Scale', 'The Salter is both an accurate baby scale and toddler scale. The Securely fitted weighing tray converts to the toddler scale by removing the tray- 1.2" LCD readout- 44 lb capacity in ½ ounce increments- "Hold" function keeps accurate weight even when baby moves.\r\n\r\nFeatures\r\nElectronic Infant & Toddler Bath Scale\r\nEasy-to-Read 1.2" LCD readout\r\nComfortable, securely fitted weighing tray to safely keep baby in place\r\nRemovable tray allows you to turn into a toddler scale\r\nHold function keeps accurate weight in display even when baby moves\r\nAuto zero and auto shutoff functions\r\nRequires 9V battery (Not Included)\r\nMaximum Capacity: 44 lbs', 1000, 1, 'p20.jpg', '2017-07-06', 2, 15, 2);
INSERT INTO `product_tbl` VALUES(21, 'Greek Earrings with Greek Maidens', 'A large matched pair of gold earrings, each a hollow-formed robed female supporting a hoop with hinged closure on her upraised hands, standing on a pyramidal cluster of spheres, after the antique. 15 grams total, 82mm (3 1/4"). Property of a Hampstead gentleman; from his family collection formed since the 1970s.[2]\r\nCONDITION\r\nFine condition.', 100, 1, 'p21.jpg', '2017-06-24', 3, 20, 1);
INSERT INTO `product_tbl` VALUES(22, 'Ladies14k White Gold&Diamond Drop Pierced Earrings', 'Earrings have six diamonds with .25 ct  diamond TW, 0.9 dwt .585 gold, Jewelry', 200, 0, 'p22.jpg', '2017-05-17', 3, 20, 2);
INSERT INTO `product_tbl` VALUES(23, 'Cartier Bracelet With Screwdriver - 18KT Yellow Gold', 'One Cartier bracelet with screwdriver including: 18KT Yellow gold, Bracelet with a total weight of 34.4 grams and Screwdriver with a total weight of 8.2 grams. Markings of "Cartier", "Love Bracelet", and "18KT" on the inside of the bracelet.\r\nCONDITION\r\nGood', 1500, 1, 'p23.jpg', '2017-05-01', 3, 18, 1);
INSERT INTO `product_tbl` VALUES(24, 'Silver Metal Cuff Bracelet W Natural Stones', 'Silver Metal Cuff Bracelet W Natural Stones.  Women’s cuff bracelet. Silver toned metal  bracelet with twisted and curled metal floral  and geometric details. With what appears to  be a center tigers eye natural stone with six  small natural stone/faux stone blue toned  details. Measures approx 3 in long by 2 in  wide. Vintage Jewelry, Estate Jewelry', 800, 0, 'p24.jpg', '2017-03-11', 3, 18, 2);
INSERT INTO `product_tbl` VALUES(25, 'Natural Stone W a Cut Glass Beaded Necklace', 'Natural Stone W a Cut Glass Beaded Necklace.  Brass toned metal necklace with natural stone  tigers eye hanging beads and multicolored  iridescent glass cut beads, also features  bronze toned metal woven chain details. statement jewelry, women’s jewelry. Measures  approx 9 in long, extends to 11 in long.', 2500, 1, 'p25.jpg', '2017-03-13', 3, 19, 1);
INSERT INTO `product_tbl` VALUES(26, 'Antique Southwest Turquoise Pawn Jewelry Necklace', 'Wonderful Craftsmanship Navajo or Zuni Tribe 11 inches. Southwest jewelry.', 5000, 0, 'p26.jpg', '2017-03-16', 3, 19, 2);
INSERT INTO `product_tbl` VALUES(27, 'XPEN Xpower Pen 3-in-1 Sylus w/Pen & Powerbank - Silver', 'The 3-in-1 pen is the ultimate accessory to carry around! Three uses, one sleek and simple product. It is multifunctional and will always come in handy on a day to day basis. It charges and syncs any smart phone or tablet with an integrated MFi Licensed Lightning connector cord on one end and an input charge port on the other. It also operates as a high-functioning stylus tip pen for a precise touch on your screen - smooth movement in any direction you choose. Lastly, this tool contains a smooth ballpoint pen - a writing utensil on the go. The 3IN1 Pen contains many uses while being delightfully compressed into a pen-shaped model. This unique product contains everything you need in one sophisticated design. It makes life that much simpler. Features 3-in-1 pen contains a pen, stylus and power bank Integrated Mfi licensed lightning connector cord USB port Micro USB port Micro USB to lightning adapter', 50, 3, 'p27.jpg', '2017-03-21', 1, 31, 2);
INSERT INTO `product_tbl` VALUES(28, 'Kocaso Generic USB Keyboard & Leather Case Cover for 7-Inch Tablet PC - Orange', 'This cover case not only protects your tablet when on the road but also provides a handy USB keyboard and hands free stand when you reach your destination. For optimum comfort, this case offers excellent viewing positions including a lower angle which is ideal for typing on the screen. The form-fitted design securely holds the tablet in place while the hard-sided exterior provides a sturdy, protective cover. Features KOCASO Generic USB Keyborad & Leather Case Cover for 7 Inch Tablet Micro USB output Durable PU leather construction protects your tablet Real laptop style keys With display stand for easy viewing Lightweight, compact, easy to carry', 100, 1, 'p28.jpg', '2017-03-28', 1, 31, 1);
INSERT INTO `product_tbl` VALUES(29, 'Nikon COOLPIX B500 16MP 40x Optical Zoom Digital Camera w/ Built-in Wi-Fi - Black', 'Get closer to what matters 40x optical zoom, 80x Dynamic Fine Zoom Few shots are too far away for the COOLPIX B500''s NIKKOR ED glass lens. 40x optical zoom gives you super telephoto power, then Dynamic Fine Zoom, an enhanced digital zoom, effectively doubles that reach for a whopping 80x zoom. Lens-Shift Vibration Reduction (VR) keeps your shots steady, crucial at such long distances, and a 16-megapixel backside illuminated CMOS sensor captures every detail.', 2000, 1, 'p29.jpg', '2017-03-01', 1, 3, 1);
INSERT INTO `product_tbl` VALUES(30, 'Escort iX Radar Detector - Escort iX Radar Detector', 'The Escort iX is an intelligent, high performing long range radar laser detector that possesses early warning and fast response on all radar bands. These radar bands include conventional and instant-on X-band, K-band, SuperWide Ka-band, and POP mode. Multiple high performance laser sensors provide maximum laser warning and off-axis protection. It also includes patented anti-falsing technology that uses the power of GPS and the exact frequency to learn and automatically reject unwanted fixed position false alarms. The updatable system automatically reduces false alerts from moving In-Vehicle Technology sources such as collision avoidance systems and adaptive cruise control. Finally, the ability to connect to the ESCORT Live app on your smartphone and use Bluetooth to sync your radar detector for crowd-sourced alerts and ticket prevention. Features The Escort iX has superior sensitivity on all conventional and instant-on radar bands plus maximum laser range and off-axis coverage. ESCORT’s standard DSP technology and multiple laser sensors provide earliest warning of speed-monitoring threats. The proprietary anti-falsing design uses the power of GPS to learn and automatically reject fixed position false alarms. It’s sophisticated system automatically reduces false alerts from moving In-Vehicle Technology sources such as collision avoidance systems. The patented GPS technology adjusts sensitivity to vehicle speed to provide alerts meaningful to your changing driving situation. Built-in Bluetooth allows you to connect to the ESCORT Live™ app for real-time, crowd-sourced speed trap information. You will have access to the largest, most up-to-date database of speed camera, red-light camera and speed trap locations and the ability to add your own “hot spots”. Update your ESCORT iX with new speed trap locations and software revisions using the USB port and our EscortRadar.com website. Intuitively displays type and strength of each threat along with your vehicle speed to help you make the best possible driving decisions. Simple and customizable voice alerts provide clear communications for alerts and menu options, allowing driver to focus on the road. Choose English or Spanish text and voice alerts. Revolutionary mount is the simplest and steadiest on the market, connecting to ESCORT iX with a mere touch and eliminating bouncing. Premium power cord features convenient USB charging port, power LED, alert LED and Mute button. Perfect for storing and carrying your ESCORT iX and all accessories. Includes simple steps for out-of-the box use plus instructions for custom settings and software updates.', 200, 1, 'p30.jpg', '2018-02-23', 1, 8, 1);
INSERT INTO `product_tbl` VALUES(31, 'Universal Car Vent Mount - White + 20 Bids', 'The Car Vent Mount provides a simple and safe way to view navigation in the car. This cradle securely attaches your smartphone to an air vent on your car''s dash for convenient viewing. No suction cup or adhesive is required. The Vent Mount can be rotated 360 degrees so you can position your smartphone in either portrait or landscape mode. The adjustable brackets expand to fit most smartphones and even works with a case on. Features Mount your smartphone to your car''s air vent Rotates 360 degrees for portrait and landscape view Low-profile mount works with most car vents Adjustable brackets for secure hold', 100, 1, 'p31.jpg', '0000-00-00', 1, 31, 2);
INSERT INTO `product_tbl` VALUES(32, 'Metal Aluminum Chrome Hard Case for Apple iPhone 5 + 20 Bids', 'Function meets form with this case for the iPhone 5. Made out of high quality poly carbonate, this case will protect your phone from scratches, dirt, abrasions, and general mayhem. Included in the set is a stylus pen, protective film, and microfiber cloth! This stylish case has it all, get your hands on this deal today!  Features Premium plastic + aluminum hard case is perfectly manufactured to fit and compliment the mold of your iPhone 5 Hard Case protect your Apple iPhone 5 from scratch, chips and dirt from accumulating Unique design allows easy access to all buttons, controls and ports without having to remove the skin Precisely cut openings to allow full access to all the functions of your phone Easy snap on/off installation', 100, 1, 'p32.jpg', '0000-00-00', 1, 31, 2);
INSERT INTO `product_tbl` VALUES(40, 'sp', '	aa', 1, 2, 'Screenshot (48).png', '2018-02-23', 1, 1, 3);
INSERT INTO `product_tbl` VALUES(42, 'Pair of early 20th C Carved and Painted Circus Leopards', 'Pair of early 20th century Carved and Painted Circus Leopards found in Penn. Found in Bucks Co. Pennsylvania. By unknown itinerant carver 5" by 1.75" by 3" 1910-30  Please note that this lot has a confidential reserve. When you leave a bid in advance of the auction, submit your maximum. The bidder who has submitted the highest bid wins the lot, provided the bid exceeds the reserve price.  Shipping: Domestic: Flat-rate of $25.00 to anywhere within the contiguous U.S. International: Foreign shipping rates are determined by destination. Location: This item ships from New York  Your purchase is protected: Photos, descriptions, and estimates were prepared with the utmost care by a fully certified expert and appraiser. All items in this sale are guaranteed authentic.   In the rare event that the item did not conform to the lot description in the sale, Jasper52 specialists are here to help. Buyers may return the item for a full refund provided you notify Jasper52 within 5 days of receiving the item. CONDITION good with some minor paint loss appropriate with age. Hairline crack on one. ', 200, 1, '60034271_1_x.jpg', '2018-02-24', 9, 38, 2);
INSERT INTO `product_tbl` VALUES(43, '(500-700) Mixed States Towns & Views Postcards', 'Nice mix of mostly early 20th c. to linen postcards in (4) binders and then loose in glassines with a good handful or real photos, many mixed states, small towns, views, greetings, old travel folder types and even a few travel brochures. Fun lot with plenty to pick out. Suggested bid $150', 250, 1, '59926122_1_x.jpg', '2018-02-23', 9, 37, 1);
INSERT INTO `product_tbl` VALUES(44, 'ERTE L/E BRONZE MOONLIGHT SCULPTURE 259/375', 'Romain De Tirtoff, Erte (Russian/French, 1892 - 1990); 1985 limited edition cold-painted and hand cast bronze sculpture titled "MOONLIGHT". Using the lost wax process, with hand applied patina and embellishments. The base is stamped "259/375, Fine Art Acquisitions, ©1985". From a prominent Boca Raton estate. Measures approx. 17-1/2"H x 12"W x 8"D. Third party shipping required. Local recommendations are available.', 5000, 1, '60044636_1_x.jpg', '2018-02-23', 8, 32, 2);
INSERT INTO `product_tbl` VALUES(45, '"Europa" Bronze Sculpture, Anton Grath', 'Bronze Sculpture of a Bull with a Nude Female on top. Sculpture Volume Bronze Anton Grath. Measuring 60 x 56 cm. CONDITION Excellent', 4000, 1, '59814561_1_x.jpg', '2018-02-23', 8, 32, 1);
INSERT INTO `product_tbl` VALUES(46, 'WALT DISNEY ORIGINAL PRODUCTION SKETCH', 'From "Pinocchio": Pinocchio with sequence notes,  in partial color (framed), USA, released on Feb.  23, 1940  Provenance: From The Collection of  Raymond Groll. CONDITION Not examined out of frame. Condition reports (given as opinion and not as guaranteed statements of fact) are added online throughout the auction process. The absence of a condition report does not imply that there are no condition issues with the lot. Please call (609) 397-9374 or e-mail info@ragoarts.com with any questions about this lot at least 24 hours prior to auction.', 500, 1, '59824280_1_x.jpg', '2018-02-23', 8, 33, 2);
INSERT INTO `product_tbl` VALUES(47, 'European Sandpaper Pencil Drawing', 'European School, Landscape with Man at Sluice Gate, Sandpaper Drawing with Graphite with Whiting, no signature noted, age indeterminate, label verso. (PARO2014  TC) 5.5" x 8.5" sight size, framed 10x13 CONDITION sky probably faded, losses to the windmill''s blades, slipped from its mat', 200, 1, '59852918_1_x.jpg', '2018-02-23', 8, 33, 1);
INSERT INTO `product_tbl` VALUES(48, 'Original Birger Sandzen Oil Painting on Canvas', 'Original Birger Sandzen 26" X 22" Oil Painting on Canvas Titled "Lake in The Rockies" - Very Thick Paint with High Ridges - This Painting Comes from The Kansas Family of Mrs. Ruth Raney Who Had Written to The Sandzen Museum in 1973 About Her Painting. A Copy of Her Letter is Available to The Buyer - Original Frame - Dated 1921 - Letter and Index Card is Courtesy of the Sandzen Museum - Video of Painting - https://youtu.be/dSn7aB-rhqg CONDITION This Painting Needs to Be Professionally Cleaned - The WCCFA In Denver Colorado Has Been Contacted regarding This Painting and Is Ready to Complete the Task - Because Of Time Constraints, We Have Elected to Let the Buyer Decide about the conservation of This Wonderful Piece of Art Work', 500, 1, '59448939_1_x.jpg', '2018-02-23', 8, 34, 1);
INSERT INTO `product_tbl` VALUES(49, 'Original Birger Sandzen Oil Painting on Canvas', 'Le Pho Oil on Canvas; Parrni-Les Fleurs', 300, 1, '59472265_1_x.jpg', '2018-02-23', 8, 34, 2);
INSERT INTO `product_tbl` VALUES(50, 'Manabu Mabe Oil on Canvas, Imagem', 'Manabu Mabe (Brazilian, Japanese 1924-1997). An oil on canvas abstract titled "Imagem". Signed lower right and on back of canvas. Dated 1968. With Catherine Viviano Gallery tag. 25 in x 30 in. CONDITION A few abrasions and dents to canvas.', 250, 1, '59792993_1_x.jpg', '2018-02-23', 8, 34, 2);
INSERT INTO `product_tbl` VALUES(51, '18th c. English Horse Portrait, O/C, Signed Dated', 'An Arabian Horse Portrait with a manor house beyond, English, 18th c., oil on canvas, signed and dated 177... lower right.  NOTE: Please see two other English equine paintings in this auction (RLEN2026  TC) 28x36, framed 33x41 Provenance: From the South Kent Connecticut collection of a prominent artist CONDITION relined, stretchers replaced, small losses', 100, 1, '59852867_1_x.jpg', '2018-02-23', 8, 34, 2);
INSERT INTO `product_tbl` VALUES(52, 'Lightweight Swivel Folding style Stereo Headphones - Black', 'The KOCASO headphones are designed to deliver superior sound quality from the studio to the streets. These on-ear KOCASO headphones feature densely cushioned ear pads that help reduce noise and provide extra comfort when in use. The headband adjusts for a custom fit. Users should experience no pressure or discomfort with these KOCASO headphones, as they are designed to allow users to enjoy their music for hours on end. The swivel ear cups make these over-the-head headphones easy to store and transport. They are made to be compatible with iPods, MP3 players and various other portable audio devices, as well as with stationary sound systems. Powerful drivers, high-energy neodymium magnets, and multi-layer dome diaphragms come together to give these over-the-head headphones an unparalleled sound quality. The KOCASO headphones are capable of reproducing a wide range of frequencies clearly and accurately, so users can pump up the volume without distortion. Features Deep Powerful Bass Output Diamond Bright Acoustic Sound Natural Noise Reduction Acoustic Design Stereo Dynamic Headphones Circumaural Leatherette Foam Padded Ear Pads Custom Head Fit Ear Cup Length Adjustment 90 degree Ear Cup Ration Adjustment Self-Adjusting Reversible Swivel Ear Cups', 250, 1, 'm1.jpg', '2018-02-23', 1, 5, 2);
INSERT INTO `product_tbl` VALUES(53, 'Bluetooth 3.0 Wireless Sports Edition Stereo Headphones - Black/Orange + 25 Bids', 'This iBasics Wireless Bluetooth 3.0 Light-Weight Stereo Headphones provides dynamite sound and supports a litany of amazing features. It has an ultra-light, water-resistant design for daily wear and protection against workout sweat. It can connect to 2 devices at the same time and features both echo cancelation and noise reduction!  Features Bluetooth version: 3.0 +EDR Dimensions: 6.5 x 5.5 x .5 inches Weight: 2 ounces Up to 10 hours play time Up to 10 hours talk time Up to 360 hours standby time Less than 2.5 hours changing time Long working time,only needs about 3 hours make it full charge,it can play up to 10 hours.', 150, 1, 'm2.jpg', '2018-02-23', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `pk_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` char(20) NOT NULL,
  PRIMARY KEY (`pk_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` VALUES(1, 'Uttar Pradesh');
INSERT INTO `state_tbl` VALUES(2, 'Maharashtra');
INSERT INTO `state_tbl` VALUES(3, ' Gujarat');
INSERT INTO `state_tbl` VALUES(4, 'Madhya Pradesh');
INSERT INTO `state_tbl` VALUES(5, 'Rajsthan');
INSERT INTO `state_tbl` VALUES(6, 'Goa');
INSERT INTO `state_tbl` VALUES(7, 'Delhi');
INSERT INTO `state_tbl` VALUES(8, 'Punjab');
INSERT INTO `state_tbl` VALUES(9, 'Kerala');
INSERT INTO `state_tbl` VALUES(10, 'Karnataka');
INSERT INTO `state_tbl` VALUES(11, 'Westbengal');
INSERT INTO `state_tbl` VALUES(12, 'Sikkim');
INSERT INTO `state_tbl` VALUES(13, 'Manipur');
INSERT INTO `state_tbl` VALUES(14, 'Andhra Pradesh');
INSERT INTO `state_tbl` VALUES(15, 'Arunachal Pradesh');
INSERT INTO `state_tbl` VALUES(16, 'Haryana');
INSERT INTO `state_tbl` VALUES(17, 'Jharkhand');
INSERT INTO `state_tbl` VALUES(18, 'Odisha');
INSERT INTO `state_tbl` VALUES(19, 'Mizoram');
INSERT INTO `state_tbl` VALUES(20, 'Chhattisgarh');
INSERT INTO `state_tbl` VALUES(21, 'Himachal Pradesh');
INSERT INTO `state_tbl` VALUES(22, 'Assam');
INSERT INTO `state_tbl` VALUES(23, 'Meghalaya');
INSERT INTO `state_tbl` VALUES(24, 'Bihar');
INSERT INTO `state_tbl` VALUES(26, 'Jammu & Kashmir');
INSERT INTO `state_tbl` VALUES(27, 'Tripura');
INSERT INTO `state_tbl` VALUES(28, 'Uttarakhand');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_tbl`
--

CREATE TABLE `subcategory_tbl` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(50) NOT NULL,
  `fk_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `subcategory_tbl`
--

INSERT INTO `subcategory_tbl` VALUES(1, 'Computers', 1);
INSERT INTO `subcategory_tbl` VALUES(2, 'Tablets', 1);
INSERT INTO `subcategory_tbl` VALUES(3, 'Camera', 1);
INSERT INTO `subcategory_tbl` VALUES(4, 'Tv', 1);
INSERT INTO `subcategory_tbl` VALUES(5, 'Portable_electronics', 1);
INSERT INTO `subcategory_tbl` VALUES(6, 'Video_games', 1);
INSERT INTO `subcategory_tbl` VALUES(7, 'Cell_phones', 1);
INSERT INTO `subcategory_tbl` VALUES(8, 'Car_electronics', 1);
INSERT INTO `subcategory_tbl` VALUES(9, 'Kitchen', 2);
INSERT INTO `subcategory_tbl` VALUES(10, 'Housewares ', 2);
INSERT INTO `subcategory_tbl` VALUES(11, 'Home_furnishings', 2);
INSERT INTO `subcategory_tbl` VALUES(12, 'Outdoor', 6);
INSERT INTO `subcategory_tbl` VALUES(13, 'Bedding', 2);
INSERT INTO `subcategory_tbl` VALUES(14, 'Bath', 2);
INSERT INTO `subcategory_tbl` VALUES(15, 'Health', 2);
INSERT INTO `subcategory_tbl` VALUES(16, 'Personal', 2);
INSERT INTO `subcategory_tbl` VALUES(17, 'Tools', 6);
INSERT INTO `subcategory_tbl` VALUES(18, 'Bangle', 3);
INSERT INTO `subcategory_tbl` VALUES(19, 'Set', 3);
INSERT INTO `subcategory_tbl` VALUES(20, 'Earring', 3);
INSERT INTO `subcategory_tbl` VALUES(21, 'Ring', 3);
INSERT INTO `subcategory_tbl` VALUES(22, 'Handbags', 7);
INSERT INTO `subcategory_tbl` VALUES(23, 'Wallet', 7);
INSERT INTO `subcategory_tbl` VALUES(24, 'Sunglasses', 7);
INSERT INTO `subcategory_tbl` VALUES(25, 'Apparel', 7);
INSERT INTO `subcategory_tbl` VALUES(26, 'Accessories', 7);
INSERT INTO `subcategory_tbl` VALUES(27, 'Watches', 7);
INSERT INTO `subcategory_tbl` VALUES(28, 'Games', 4);
INSERT INTO `subcategory_tbl` VALUES(29, 'Toys', 4);
INSERT INTO `subcategory_tbl` VALUES(30, 'Tools', 4);
INSERT INTO `subcategory_tbl` VALUES(31, 'Accessories', 1);
INSERT INTO `subcategory_tbl` VALUES(32, 'Sculptures', 8);
INSERT INTO `subcategory_tbl` VALUES(33, 'Drawings', 8);
INSERT INTO `subcategory_tbl` VALUES(34, 'Paintings ', 8);
INSERT INTO `subcategory_tbl` VALUES(35, 'Mixed Media & Collages', 8);
INSERT INTO `subcategory_tbl` VALUES(36, 'Photography', 8);
INSERT INTO `subcategory_tbl` VALUES(37, 'Carnival Collectibles', 9);
INSERT INTO `subcategory_tbl` VALUES(38, 'Circus Collectibles', 9);
INSERT INTO `subcategory_tbl` VALUES(39, 'Political_Memorabilia', 9);
INSERT INTO `subcategory_tbl` VALUES(40, 'Sport_Memorabilia', 9);

-- --------------------------------------------------------

--
-- Table structure for table `userpoint_tbl`
--

CREATE TABLE `userpoint_tbl` (
  `point_id` int(11) NOT NULL AUTO_INCREMENT,
  `point_amount` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userpoint_tbl`
--

INSERT INTO `userpoint_tbl` VALUES(1, 1200, 1);
INSERT INTO `userpoint_tbl` VALUES(3, 0, 7);
INSERT INTO `userpoint_tbl` VALUES(4, 378, 3);
INSERT INTO `userpoint_tbl` VALUES(5, 172, 2);
INSERT INTO `userpoint_tbl` VALUES(6, 1000, 4);
INSERT INTO `userpoint_tbl` VALUES(7, 0, 8);
INSERT INTO `userpoint_tbl` VALUES(8, 0, 9);
INSERT INTO `userpoint_tbl` VALUES(9, 0, 10);
INSERT INTO `userpoint_tbl` VALUES(10, 0, 11);
INSERT INTO `userpoint_tbl` VALUES(11, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email_id` varchar(40) NOT NULL,
  `user_first_name` varchar(30) NOT NULL,
  `user_last_name` varchar(25) NOT NULL,
  `user_contact_no` varchar(11) NOT NULL,
  `user_photo` varchar(80) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_aadhar_card_number` varchar(13) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_state_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email_id` (`user_email_id`),
  UNIQUE KEY `user_email_id_2` (`user_email_id`),
  UNIQUE KEY `user_aadhar_card_number` (`user_aadhar_card_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` VALUES(1, 'shahritu2111@gmail.com', 'Rutvi', 'shah', '852014520', 'ab.jpg', 'ritu@1212', 1, '1234567', 1, 3);
INSERT INTO `user_tbl` VALUES(2, 'riya.m.shah15@gmail.com', 'Riya', 'Shah', '2147483647', 'u2.jpg', '123456', 1, '12345678', 1, 3);
INSERT INTO `user_tbl` VALUES(3, 'priyanshsheth1997@gmail.com', 'Priyansh ', 'sheth', '8905106525', 'u3.jpg', 'sp@123456', 1, '123456789', 1, 3);
INSERT INTO `user_tbl` VALUES(4, 'darshandhandhukiya61@gmail.com', 'Darshan', 'dhandhukiya', '123456', '20180125_204144.jpg', 'dd@123', 1, '456789123', 1, 3);
INSERT INTO `user_tbl` VALUES(5, 'admin@gmail.com', 'Admin', 'Diamonds', '989852101', 'auction.jpg', 'admin@123', 2, '123456', 1, 3);
INSERT INTO `user_tbl` VALUES(8, 'hero@gmail.com', 'hero', 'hero', '1', '../userphoto/lab1.png', '111111', 1, '1230', 1, 3);
INSERT INTO `user_tbl` VALUES(9, 'd@gmail.com', 'd', 'd', '1', '../userphoto/Screenshot (48).png', '123456', 1, '123123', 1, 4);
INSERT INTO `user_tbl` VALUES(10, 'a@gmail.com', 'a', 'a', '1111111111', '../userphoto/Screenshot (1).png', '14141414', 3, '111111111165', 1, 6);
INSERT INTO `user_tbl` VALUES(11, 'dd@gmail.com', 'Darshan', 'Dhandhukiya', '9586734979', '../userphoto/20180125_204144.jpg', 'richa@123', 1, '4578965412', 1, 3);
INSERT INTO `user_tbl` VALUES(15, 's@gmail.com', 's', 's', '141414', '../userphoto/Screenshot (50).png', '141414', 0, '14141414', 1, 1);
