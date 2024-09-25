-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3315
-- Generation Time: Jul 14, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciel_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `country`, `city`, `state`, `zip`, `Date`) VALUES
(1, 'sl', 'ss', 'as', 'as', '2024-07-09 23:05:59'),
(2, 'sl', 'ss', 'as', 'as', '2024-07-09 23:05:59'),
(3, 'Sri Lanka', 'Gampaha', '313/42,', '11000', '2024-07-09 23:05:59'),
(4, 'india', 'Delhi', '562A', '2244', '2024-07-09 23:05:59'),
(5, 'USA', 'texas', '725/A', '3421', '2024-07-09 23:05:59'),
(6, 'Japan', 'tokiyo', 'shindai', '545', '2024-07-09 23:05:59'),
(7, 'Italy', 'jordan', 'habby232/32', '332', '2024-07-09 23:05:59'),
(8, 'rth', 'hrh', 'rt', '545', '2024-07-09 23:05:59'),
(9, 'rth', 'hrh', 'rt', '545', '2024-07-09 23:05:59'),
(10, 'tyr', 'trt', 'tyry', '5', '2024-07-09 23:05:59'),
(11, 'china', 'shechang', '442/hsuki', '5532', '2024-07-09 23:05:59'),
(12, 'Volinia', 'cambo', '324', '233', '2024-07-09 23:05:59'),
(13, 'Volinia', 'cambo', '324', '233', '2024-07-09 23:05:59'),
(14, 'Volinia', 'cambo', '324', '233', '2024-07-09 23:05:59'),
(15, 'Volinia', 'cambo', '324', '233', '2024-07-09 23:05:59'),
(16, 'yfhjtyh', 'ergte', '435', '343', '2024-07-09 23:05:59'),
(17, 'yfhjtyh', 'ergte', '435', '343', '2024-07-09 23:05:59'),
(18, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(19, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(26, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(27, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(28, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(29, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(30, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(31, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(32, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(33, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(34, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(35, 'fv', 'vev', '3423', '4433', '2024-07-09 23:05:59'),
(36, '2', '2', '2', '2', '2024-07-09 23:05:59'),
(37, '2', '2', '2', '2', '2024-07-09 23:05:59'),
(38, '2', '2', '2', '2', '2024-07-09 23:05:59'),
(39, '2', '2', '2', '2543543', '2024-07-09 23:05:59'),
(40, '2', '2', '2', '2543543', '2024-07-09 23:05:59'),
(41, '2', '2', '2', '2543543', '2024-07-09 23:05:59'),
(42, '2', '2', '2', '2543543', '2024-07-09 23:05:59'),
(43, 'jaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaa', '2543543', '2024-07-09 23:05:59'),
(44, 'jaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaa', '2543543', '2024-07-09 23:05:59'),
(45, 'aa', 'dsfdsf', '33333333333', 'ww', '2024-07-09 23:05:59'),
(46, '433535', '435435', '45435', '0000000000', '2024-07-09 23:05:59'),
(47, '433535', '435435', '45435', '0000000000', '2024-07-09 23:05:59'),
(48, '433535', '435435', '45435', '0000000000', '2024-07-09 23:05:59'),
(49, '3', '3', '3', '3', '2024-07-09 23:05:59'),
(50, 'stiiii', 'gampaha', '332423/2', '3212', '2024-07-09 23:05:59'),
(51, 'stiiii', 'gampaha', '332423/2', '3212', '2024-07-09 23:05:59'),
(52, 'abcdef', 'colombo', '1212323', '23213', '2024-07-09 23:05:59'),
(53, 'subba', 'fdsf', '434r5', 'er', '2024-07-09 23:05:59'),
(54, 'subba', 'fdsf', '434r5', 'er', '2024-07-09 23:05:59'),
(55, 'sssdfhrtt', 'hrthr', 'trhr', '546', '2024-07-09 23:05:59'),
(56, '', '', '', '', '2024-07-09 23:05:59'),
(57, 'yt5yry', 'yrtyrty', 'rtyrt', '5355435', '2024-07-09 23:05:59'),
(58, '', '', '', '', '2024-07-09 23:05:59'),
(59, 'sl', 'colomnvo', 'ssss', '123456', '2024-07-09 23:05:59'),
(60, '6564', '6456', '6456', '6546', '2024-07-09 23:05:59'),
(61, 'aaa', 'aaa', 'aaa', '3443', '2024-07-09 23:05:59'),
(62, 'sss', 'ssss', 'ssss', '1234567', '2024-07-09 23:05:59'),
(63, 'fwff', 'efwf', 'wefwef', 'ewrfw', '2024-07-09 23:06:26'),
(64, 'fwfwf', 'fwfw', 'fwfw', 'efwfw', '2024-07-09 23:06:41'),
(65, 'fg', 'fefdrs', 'dfgdf', 'fgdfg', '2024-07-09 23:13:38'),
(66, 'fgddgdf', 'dfgdfg', 'gdfg', 'fgdg', '2024-07-09 23:13:47'),
(67, 'gdfgdf', 'dfgdfg', 'dfgdfg', 'fdgdf', '2024-07-09 23:13:56'),
(68, 'trg', 'grtg', 'grtg', 'rtgrgr', '2024-07-09 23:14:12'),
(69, 'sretet', 'rtert', 'rter', 'ertet', '2024-07-09 23:15:41'),
(70, 'rtghrtg', 'gergt', 'rgg', 'rgegeg', '2024-07-09 23:17:34'),
(71, 'dddd', 'sssss', '1dsed', '12345222', '2024-07-09 23:19:43'),
(72, 'erfwef', 'ffef', 'feffs', 'sfssf', '2024-07-09 23:21:57'),
(73, 'fgdg', 'fgdg', 'gdf', 'dfg', '2024-07-09 23:22:33'),
(74, '5456', '4564', '6564', '5464', '2024-07-11 22:40:03'),
(75, 'Sri Lanka', 'Kealniya', '111', '11600', '2024-07-12 19:00:45'),
(76, '111', '11', '11', '11', '2024-07-12 19:08:42'),
(77, 'Sri Lanka', 'Kealniya', '11', '11600', '2024-07-12 19:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_db`
--

CREATE TABLE `product_db` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hover` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_db`
--

INSERT INTO `product_db` (`id`, `product_name`, `brand`, `price`, `old_price`, `percentage`, `description`, `image`, `hover`, `tags`, `availability`) VALUES
(1, 'Levi\'s 501 Original Jeans', 'Levi\'s', 15000.00, 'Rs.20000.00', '25% Off', 'The timeless Levi\'s 501 Original Fit Jeans are known for their classic straight leg and iconic button fly. Made from durable denim, these jeans offer a comfortable fit that sits at the waist and are perfect for any casual occasion.', 'assets\\img\\Item1.png', 'assets\\img\\Item1-1.png', 'Jeans , Apparel , Levis , Classic', 'In Stock'),
(2, 'Nike Air Max 270', 'Nike', 45999.99, 'Rs.500000.00', '25% Off', 'Nike Air Max 270 running shoes feature the largest Max Air unit in the heel for a super-soft ride that feels as remarkable as it looks. With a sleek, form-fitting design and a variety of colorways, these shoes are ideal for running and casual wear.,', 'assets\\img\\Item2.png', 'assets\\img\\Item2-2.png', 'Shoes , Running , Nike , Athletic', 'In Stock'),
(3, 'Adidas Ultraboost 21', 'Adidas', 48000.00, 'Rs.60000.00', '20% Off', 'Experience the ultimate in comfort and performance with the Adidas Ultraboost 21 running shoes. Featuring responsive Boost cushioning and a supportive Primeknit upper, these shoes provide an energized run with a snug, sock-like fit.', 'assets\\img\\Item3.png', 'assets\\img\\Item3-3.png', 'Shoes , Running , Adidas , Athletic', 'In Stock'),
(4, 'The North Face Thermoball Jacket', 'The North Face', 59999.99, NULL, NULL, 'Stay warm without the bulk with The North Face Thermoball Eco Insulated Jacket. This lightweight, packable jacket uses synthetic insulation to provide warmth even when wet. Perfect for outdoor adventures or everyday wear.', 'assets\\img\\Item4.png', 'assets\\img\\Item4-4.png', 'Jacket , Apprel , Outerwear , Tnf', 'In Stock'),
(5, 'Ray-Ban Wayfarer Sunglasses', 'Ray-Ban', 39999.99, NULL, NULL, 'The Ray-Ban Original Wayfarer Classic Sunglasses are a true icon in eyewear. Known for their distinct shape and high-quality lenses, these sunglasses offer excellent clarity and 100% UV protection. A must-have accessory for any wardrobe.', 'assets\\img\\Item5.png', 'assets\\img\\Item5-5.png', 'Sunglasses , Accessories , Ray-Ban , Classics', 'In Stock'),
(6, 'Patagonia Better Sweater Fleece', 'Patagonia', 15000.00, NULL, NULL, 'The Patagonia Better Sweater Fleece Jacket combines the aesthetic of wool with the easy-care of polyester fleece. Featuring a soft interior and a sweater-knit face, this jacket is perfect for layering in cooler weather.', 'assets\\img\\Item6.png', 'assets\\img\\Item6-6.png', 'Jacket , Apparel , Patagonia , Fleece', 'In Stock'),
(7, 'Under Armour HeatGear T-Shirt', 'Under Armour', 9000.00, 'Rs.10000.00', '10% Off', 'Stay cool and comfortable during intense workouts with the Under Armour Men\'s HeatGear Compression Short-Sleeve T-Shirt. Made with moisture-wicking fabric and four-way stretch construction, this shirt provides superior mobility and a second-skin fit.', 'assets\\img\\Item7.png', 'assets\\img\\Item7-7.png', 'T-Shirt , Apparel , Under , Armour , Compression', 'In Stock'),
(8, 'New Balance 574 Classic Sneakers', 'New Balance', 39500.00, NULL, NULL, 'The New Balance 574 Classic Running Shoe is a perfect blend of retro style and modern comfort. Featuring a suede and mesh upper, ENCAP midsole technology, and durable rubber outsole, these sneakers are ideal for everyday wear.', 'assets\\img\\Item8.png', 'assets\\img\\Item8-8.png', 'Shoes , Running , New Balnce , Classic', 'In Stock'),
(9, 'Columbia PFG Tamiami Shirt', 'Columbia', 13500.00, NULL, NULL, 'The Columbia Men\'s PFG Tamiami II Long Sleeve Shirt is designed for performance and comfort during long fishing trips. Made from lightweight, breathable fabric with UPF 40 sun protection, this shirt keeps you cool and protected all day long.', 'assets\\img\\Item9.png', 'assets\\img\\Item9-9.png', 'Shirt , Apparel , Columbia , Fishing', 'In Stock'),
(10, 'Carhartt Acrylic Watch Hat', 'Carhartt', 4999.99, NULL, NULL, ',The Carhartt Men\'s Acrylic Watch Hat is a classic, durable beanie that provides warmth and comfort in cold weather. Made from stretchable rib-knit fabric, this hat features the iconic Carhartt logo and is perfect for any outdoor activity.', 'assets\\img\\Item10.png', 'assets\\img\\Item10-10.png', 'Hat , Accessories , Carhartt , Winter', 'In Stock'),
(11, 'Converse Chuck Taylor All Star', 'Converse', 16500.00, NULL, NULL, 'The Converse Chuck Taylor All Star Classic Sneakers are an iconic footwear choice known for their timeless style. With a canvas upper and durable rubber sole, these sneakers are versatile and perfect for casual wear.', 'assets\\img\\Item11.png', 'assets\\img\\Item11-11.png', 'Shoes , Casual , Canverse , Classic', 'In Stock'),
(12, 'Gucci GG Marmont Matelassé Mini Bag', 'Gucci', 285000.00, 'Rs.300000.00', '5% Off', 'The Gucci GG Marmont Matelassé Mini Bag is a luxurious accessory crafted from soft matelassé leather. Featuring the iconic GG logo, this compact bag offers a versatile style with a chain shoulder strap and an elegant design for any occasion.', 'assets\\img\\Item12.png', 'assets\\img\\Item12-12.png', 'Bag , Accessories , Gucci , Luxury', 'In Stock'),
(13, 'Under Armour Blitzing 3.0 Cap', 'Under Armour', 6500.00, NULL, NULL, 'The Under Armour Men\'s Blitzing 3.0 Cap is designed with performance in mind. Featuring a structured build, sweat-wicking fabric, and a comfortable stretch fit, this cap is perfect for sports and everyday wear.', 'assets\\img\\Item13.png', 'assets\\img\\Item13-13.png', 'Cap , Accessories , Under Armour , Sport', 'Out of Stock'),
(14, 'Puma Essential Logo T-Shirt', 'Puma', 4500.00, 'Rs.5000.00', '10% off', 'The Puma Men\'s Essential Logo T-Shirt offers a classic look with a comfortable fit. Made from soft cotton, this t-shirt features the iconic Puma logo and is perfect for casual wear or workouts.', 'assets\\img\\Item14.png', 'assets\\img\\Item14-14.png', 'T-Shirt , Apparel , Puma , Casual', 'In Stock'),
(15, 'Timberland 6-Inch Premium Waterproof Boots', 'Timberland', 59500.00, NULL, NULL, 'The Timberland Men\'s 6-Inch Premium Waterproof Boots are built to withstand the elements while providing comfort and durability. Featuring a waterproof leather upper, padded collar, and rugged rubber outsole, these boots are perfect for any outdoor advent', 'assets\\img\\Item15.png', 'assets\\img\\Item15-15.png', 'Shoes , Boots , Timberland , Waterproof', 'In Stock'),
(16, 'Champion Powerblend Hoodie', 'Champion', 16000.00, 'Rs.20000.00', '20%', 'The Champion Powerblend Hoodie offers a perfect blend of warmth and comfort. Made from a soft cotton-polyester blend, this hoodie features a relaxed fit, adjustable drawstring hood, and a front kangaroo pocket.', 'assets\\img\\Item16.png', 'assets\\img\\Item16-16.png', 'Hoodie , Apparel , Champion , Casual', 'In Stock'),
(17, 'Herschel Little America Backpack', 'Herschel', 29999.99, NULL, NULL, 'The Herschel Little America Backpack combines classic mountaineering style with modern functionality. Featuring a spacious main compartment, padded laptop sleeve, and adjustable drawstring closure, this backpack is perfect for daily use or travel.', 'assets\\img\\Item17.png', 'assets\\img\\Item17-17.png', 'Backpack , Accessories , Herschel , Travel', 'Out of Stock'),
(18, 'Dr. Martens 1460 Boots', 'Dr. Martens', 43650.00, 'Rs.45000.00', '3% Off', 'The Dr. Martens 1460 Boots are an iconic style with a durable leather upper and signature air-cushioned sole. These boots feature the classic yellow stitching and a heel-loop, offering both comfort and a timeless look.', 'assets\\img\\Item18.png', 'assets\\img\\Item18-18.png', 'Shoes , Boots , Dr Martens , Classic', 'In Stock'),
(19, 'Lululemon Align Yoga Pants', 'Lululemon', 28500.00, NULL, NULL, 'The Lululemon Align Yoga Pants are designed for ultimate comfort and flexibility. Made from buttery-soft Nulu fabric, these high-rise pants provide a weightless feel and a flattering fit, perfect for yoga or lounging.', 'assets\\img\\Item19.png', 'assets\\img\\Item19-19.png', 'Yoga Pants , Apparel , Lululemon , Activewear', 'In Stock'),
(20, 'North Face Borealis Backpack', 'The North Face', 40000.00, 'Rs.50000.00', '20% Off', 'The North Face Borealis Backpack is a versatile and durable bag suitable for both work and outdoor activities. It features a spacious main compartment, a padded laptop sleeve, and FlexVent suspension system for comfort and support.', 'assets\\img\\Item20.png', 'assets\\img\\Item20-20.png', 'Backpack , Accessories , Tnt , Outdoor', 'In Stock'),
(21, 'Oakley Holbrook Sunglasses', 'Oakley', 40500.00, NULL, NULL, 'RIZM Lens Technology designed to enhance color, contrast and detail so athletes can make the most of any activity. PRIZM SAPPHIRE POLARIZED EVERYDAY LENSES are designed for everyday, medium to bright light conditions to make the environment appear more vi', 'assets\\img\\Item21.png', 'assets\\img\\Item21-21.png', 'Sunglasses, Accessories, Oakley, Premium', 'Out of Stock'),
(22, 'Columbia Steens Mountain Fleece', 'Columbia', 22100.00, 'Rs.26000.00', '15% Off', 'The Columbia Steens Mountain Full Zip Fleece is a versatile and comfortable jacket perfect for layering in cold weather. Made from soft MTR filament fleece, it provides warmth without bulk, making it ideal for outdoor activities.', 'assets\\img\\Item22.png', 'assets\\img\\Item22-22.png', 'Jacket, Apparel, Columbia, Fleece', 'In Stock'),
(23, 'Tory Burch Miller Sandals', 'Tory Burch', 59500.00, NULL, NULL, 'The Tory Burch Miller Sandals are stylish and comfortable, featuring a cushioned footbed and a polished logo medallion. These sandals are perfect for adding a touch of elegance to any summer outfit.', 'assets\\img\\Item23.png', 'assets\\img\\Item23-23.png', 'Sandals, Shoes, Tory Burch, Summer', 'In Stock'),
(24, 'Reebok Classic Leather Sneakers', 'Reebok', 20900.00, 'Rs.22000.00', '5% Off', 'The Reebok Classic Leather Sneakers offer a timeless design with a soft leather upper and cushioned EVA midsole. These sneakers provide both comfort and style, making them a great addition to any casual wardrobe.', 'assets\\img\\Item24.png', 'assets\\img\\Item24-24.png', 'Shoes, Sneakers, Reebok, Classic', 'In Stock'),
(25, 'Fjallraven Kanken Backpack', 'Fjallraven', 24000.00, NULL, NULL, 'The Fjallraven Kanken Backpack is a stylish and durable bag designed for everyday use. Featuring a spacious main compartment, front zipper pocket, and adjustable shoulder straps, this backpack is perfect for school, work, or travel.', 'assets\\img\\Item25.png', 'assets\\img\\Item25-25.png', 'Backpack, Accessories, Fjallraven, Casual', 'In Stock'),
(26, 'New Era 59FIFTY Fitted Cap', 'New Era', 10500.00, NULL, NULL, 'The New Era 59FIFTY Fitted Cap is a classic baseball cap with a structured fit and flat visor. Featuring an embroidered team logo and official MLB on-field cap design, this cap is perfect for sports fans.', 'assets\\img\\Item26.png', 'assets\\img\\Item26-26.png', 'Cap, Accessories, New Era, Sports', 'In Stock'),
(27, 'Calvin Klein Modern Cotton Bralette', 'Calvin Klein', 10200.00, 'Rs.12000.00', '25% Off', 'The Calvin Klein Modern Cotton Bralette offers a comfortable and stylish fit with its soft cotton blend and elasticated underband. This bralette is perfect for everyday wear and provides light support.', 'assets\\img\\Item27.png', 'assets\\img\\Item27-27.png', 'Bralette, Apparel, Calvin Klein, Casual', 'In Stock'),
(28, 'UGG Classic Short II Boots', 'UGG', 51000.00, NULL, NULL, 'The UGG Classic Short II Boots are iconic for their soft sheepskin lining and durable suede upper. These boots offer plush comfort and warmth, making them perfect for cold weather.', 'assets\\img\\Item28.png', 'assets\\img\\Item28-28.png', 'Shoes, Boots, Ugg, Winter', 'In Stock'),
(29, 'Michael Kors Jet Set Travel Tote', 'Michael Kors', 89500.00, NULL, NULL, 'The Michael Kors Jet Set Travel Tote is a sophisticated and spacious bag crafted from Saffiano leather. Featuring multiple interior pockets and a secure top zip closure, this tote is perfect for both travel and daily use.', 'assets\\img\\Item29.png\r\n', 'assets\\img\\Item29-29.png', 'Bag, Accessories, Michael Kors, Travel', 'In Stock'),
(30, 'Vans Old Skool Sneakers', 'Vans', 18000.00, NULL, NULL, 'The Vans Old Skool Sneakers are a classic skate shoe with a durable canvas and suede upper. Featuring the iconic side stripe and a padded collar for extra support, these sneakers offer both style and comfort.', 'assets\\img\\Item30.png', 'assets\\img\\Item30-30.png', 'SHOES, SNEAKERS, VANS, CLASSIC', 'In Stock'),
(31, 'Dovie Satchel Bag', 'ALDO', 16000.00, NULL, NULL, 'Dovie is made with a synthetic material and comes with a magnetic snap and a removable adjustable crossbody strap.', 'assets\\img\\Item31.png', 'assets\\img\\Item31-31.png', 'Adjustable, Bag', 'In Stock'),
(32, 'Silva Heeled Boots', 'ALDO', 14000.00, NULL, NULL, 'Color Metallic Multi', 'assets\\img\\Item32.png', 'assets\\img\\Item32-32.png', 'Boots, Metallic', 'In Stock'),
(33, 'Cheese Knife Set', 'Boska', 18000.00, NULL, NULL, 'Suitable for all types of cheese. Stainless steel knife set and the dimensions are 194 x 191 x 25mm.', 'assets\\img\\Item33.png', 'assets\\img\\Item33-33.png', 'Knife', 'In Stock'),
(34, 'Pizza Cutter Wheel', 'BOSKA', 3500.00, NULL, NULL, 'Wood material. Suitable for Pizza/ Tapas/ All other meals.', 'assets\\img\\Item34.png', 'assets\\img\\Item34-34.png', 'Cutter Wheel, Utensil\r\n\r\n', 'In Stock'),
(35, 'Cali Bath Mat', 'Made Trade', 2500.00, NULL, NULL, 'Handcrafted in Colombia. Woven with a mix of 50% cotton and 50% acrylic fibers.', 'assets\\img\\Item35.png', 'assets\\img\\Item35-35.png', 'Bath Mat , Cotton', 'In Stock'),
(36, 'Cinnamon Roll Cocoshell Soy Wax Candle', 'Brown Living', 2390.00, NULL, NULL, 'Cocoshell candles are a delightful fusion of the comforting aroma of crispy cinnamon and natural elegance.', 'assets\\img\\Item36.png', 'assets\\img\\Item36-36.png', 'Candle', 'In Stock'),
(37, 'Trixie Rooster Plush Toy for Dogs', 'Pet Mart', 6250.00, NULL, NULL, 'Plush (polyester) with rustling foil', 'assets\\img\\Item37.png', 'assets\\img\\Item37-37.png', 'Pet Mart , Toy', 'In Stock'),
(38, 'Soft Harness With Leash', 'Pet Mart', 5300.00, NULL, NULL, 'Soft Harness XXL with Leash breathable mesh material with fully elasticated leash soft padding additional safeguard with snap fastener reflective elements continuously adjustable in chest and belly area.', 'assets\\img\\Item38.png', 'assets\\img\\Item38-38.png', 'Soft Harness', 'Out of Stock'),
(39, 'WYZE Cam V3', 'WYZE', 12500.00, NULL, NULL, 'Night Vision, Motion Sensor, Weather Resistant, Starlight Sensor,Two Way Audio.', 'assets\\img\\Item39.png', 'assets\\img\\Item39-39.png', 'Night Vision , Cam', 'In Stock'),
(40, 'WiiM Mini Airplay2', 'WiiM', 15999.99, NULL, NULL, 'Spotify Connect, Works with Alexa, Siri, AirPlay 2, TIDAL Connect, NAS, DLNA, Home Media Server.\r\nAuxiliary, USB Type C, Optical\r\nAudio Output Mode is Stereo.\r\n', 'assets\\img\\Item40.png', 'assets\\img\\Item40-40.png', NULL, 'In Stock'),
(41, 'Migraine Relief Cap', 'AllSett Health', 5500.00, NULL, NULL, 'Natural drug free relief for headaches and migraines that actually works! This migraine ice head wrap offers 360 degrees of coverage to completely envelop your head in an icy cocoon of coolness and compression.', 'assets\\img\\Item41.png', 'assets\\img\\Item41-41.png', 'Cap', 'In Stock'),
(42, 'Calm Essential Oil Roll on Blend', 'UpNature', 2500.00, NULL, NULL, 'HIGH QUALITY ESSENTIAL OILS FOR SKIN: Our Calm essential oil roll-on is a blend of Peppermint, Spanish Sage, Cardamom, Ginger, and Sweet Fennel essential oils, offering 100% pure, gentle, and effective non-GMO natural essential oil. Free from toxins and a', 'assets\\img\\Item42.png', 'assets\\img\\Item42-42.png', 'Oil', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `saved_cards`
--

CREATE TABLE `saved_cards` (
  `id` int(11) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `cardholder_name` varchar(100) NOT NULL,
  `expiry_month` int(11) NOT NULL,
  `expiry_year` int(11) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

CREATE TABLE `wishlist_items` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_db`
--
ALTER TABLE `product_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_cards`
--
ALTER TABLE `saved_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`email`);

--
-- Indexes for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_db`
--
ALTER TABLE `product_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `saved_cards`
--
ALTER TABLE `saved_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_db` (`id`);

--
-- Constraints for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD CONSTRAINT `product_foreignKey` FOREIGN KEY (`product_id`) REFERENCES `product_db` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
