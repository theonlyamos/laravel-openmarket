-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2019 at 12:16 PM
-- Server version: 10.1.37-MariaDB-3
-- PHP Version: 7.3.8-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openmarket`
--

-- --------------------------------------------------------

USE openmarket;
--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `createdAt`, `updatedAt`) VALUES
(1, 'drinkware', 'fa fa-cup', '2019-11-09 06:54:48', '2019-11-09 06:54:48'),
(2, 'office', 'fa fa-desktop', '2019-11-09 06:54:48', '2019-11-09 06:54:48'),
(3, 'accessories', 'fas fa-tshirt', '2019-11-09 06:54:48', '2019-11-09 06:54:48'),
(4, 'apparel', 'fa fa-tshirt', '2019-11-09 06:54:48', '2019-11-09 06:54:48'),
(5, 'bags', 'fa fa-shopping-bag', '2019-11-09 06:54:48', '2019-11-09 06:54:48'),
(6, 'shop by brand', 'fa fa-shop', '2019-11-09 06:54:48', '2019-11-09 06:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `keywords` text NOT NULL,
  `url` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Products table';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `features`, `price`, `keywords`, `url`, `category`, `subcategory`, `createdAt`, `updatedAt`) VALUES
('GGOEADHB085999', 'Android Trace Bottle Black', 'Stay hydrated throughout the day with this Android Trace Bottle. 17 oz.', '<p>17 oz. double wall thermal bottle</p>\n<p>Stainless steel</p>\n<p>Threaded stainless steel insulated lid</p>\n<p>Copper vacuum insulation</p>', '23.99', 'Android Black Force 17 oz Bottle, android bottles, android black bottle, android 17 oz bottle, android black force bottle, android 17 oz Android Black Force Bottle, Android Trace Bottle Black', 'Android+Black+Force+17oz+bottle', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEADHB086299', 'Android Trace Mug Black', 'Start your day off right with that perfect cup of coffee using this Android Trace Mug Black.', '<p>12 oz. stoneware</p>\n<p>Matte finish</p>', '9.99', 'Android Black C-Handle Mug, android mugs, black android mug, c handle mug, android c handle,Android Trace Mug Black,', 'Android+Trace+Mug+Black', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEADHB098899', 'Android 16 oz Tumbler Black', 'Insulated to keep contents hot or cold for hours, take that perfect cup of coffee with you on the go whether you like hot or iced coffee.', '<p>16 oz.</p> \n<p>Stainless steel</p>\n<p>Copper vacuum insulations</p>\n<p>Threaded 360 drink-thru lid</p>', '21.99', 'Android 16 oz Tumbler, Android 16 oz Tumbler Black, tumbler', 'Android+16oz+Tumbler+Black', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEADHQ098399', 'Android 25 oz Gear Cap Bottle White', 'Take your favorite hot or cold drink anywhere with this Android 25oz Gear Cap Bottle. The carrying handle lid makes it convenient to take with you to your next meeting or workout.', '<p>25 oz. Powder coated</p>\n<p>Stainless steel</p>\n<p>Copper vacuum insulation</p>\n<p>Threaded gear-shaped insulated lid</p>\n<p>Carrying handle</p>', '26.99', 'Android 25 oz Gear Cap Bottle, Android 25 oz Gear Cap Bottle White, bottle', 'Android+Gear+Cap+Bottle+White', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEAOCB092899', 'Android Small Trace Journal Black', 'This Android Small Trace Journal provides an escape and a chance to write down your latest inspirations!', '<p>Smooth Hardcover</p>\n<p>192 White, College Ruled Pages</p>\n<p>Elastic Band Closure</p>\n<p>Ribbon Marker</p>\n<p>Gusseted Back Pocket</p>\n<p>Size: Small, 4 x 6 inch</p>', '12.99', 'Android Small Trace Journal Black, android small journals, small trace journals, android small journals, android black journals, android small journals', 'Android+Small+Trace+Journal+Bl', 'office', 'notebooks & Journals', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGAAX0037', 'Google Sunglasses', 'Although these are no Google glasses, they will still make your day fun at the beach!', '<p>Made of Polycarbonate Material</p>\n<p>UV400 Lenses Provide 100% UVA And UVB Protection</p>\n<p>Come in the following colors: Red, Green, Blue</p>', '3.5', 'Malibu Sunglasses, sunglasses, apparel, fun, Malibu sunglasses, sunglass, sun, weather glasses, weather, Weather, Google, g, google, google malibu sunglasses, Google Malibu sunglasses', 'Malibu+Sunglasses', 'accessories', 'lifestyle', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGAMC088199', 'Google Cappy Bib Blue', 'Keep your little Googler stain free with this Google Cappy Bib.', '<p>Machine washable</p>\n<p>100% cotton</p>', '13.99', 'Google Cappy Bib Blue, Google bibs, blue bib, cappy bib, cappy blue bib, blue google bib', 'Google+Cappy+Bib+Blue', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGAPB087899', 'Google Snapback Black Cap', 'Stay shaded on those sunny days wearing this stylish Google snapback hat.', '<p>Snapback Closure</p>\n<p>One size fits most</p>', '19.99', 'Google Snapback Black Cap, google caps, google snapback, google black cap, snapback black caps, google cap, black cap, black hat, Google Hat', 'Google+Snapback+Black+Cap', 'apparel', 'headgear', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGAPL087999', 'Google Snapback Navy Cap', 'Stay shaded on those sunny days wearing this stylish Google snapback hat.', '<p>Snapback Closure</p>\n<p>One size fits most</p>', '19.99', 'Google Snapback navy Cap, google caps, google snapback, google navy cap, snapback navy caps, google cap, navy cap, navy hat, Google Hat', 'Google+Snapback+Navy+Cap', 'apparel', 'headgear', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGBRJ037399', 'Google Rucksack', 'Choose to carry your belongings and presentations to your next meeting with the Google Mistral Rucksack!', '<p>Size: 13.5 x 6.5 x 17.5</p>\n<p>Ergonomic padded shoulder straps</p>\n<p>Large main compartment with internal laptop compartment</p>\n<p>Easy Snap and Adjustable straps for main compartment access</p>', '79.99', 'Mistral Rucksack, Mistral backpack, Mistral Backpack, backpack, bags, bag, Backpack, backpacks, packs, office gear, Bag, Bags, Google Backpack, google backpack, g, google', 'Google+Rucksack', 'bags', 'bags', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHC087099', 'Google Thermal Bottle Blue', 'Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.', '<p>Double wall construction</p>\n<p>Stainless steel thermal bottle with copper vacuum insulation</p>\n<p>Threaded stainless steel lid</p>', '23.99', 'Google Thermal Bottle Blue, Google, google thermal bottle blue, Google Blue, Thermal Bottle Blue,', 'Google+Thermal+Bottle+Blue', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHC098799', 'Google 16 oz Tumbler Blue', 'A geometric inner liner gives this Google 16oz Tumbler a unique look to help you stand out in a crowd of bottles and tumbler.', '<p>16 oz. Double wall acrylic tumbler</p>\n<p>Clear outer wall</p>\n<p>Push-on dual-purpose swivel lid</p>\n<p>Matching soft straw</p>', '12.99', 'Google 16 oz Tumbler Blue, tumbler', 'Google+16oz+Tumbler+Blue', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHH087299', 'Google Thermal Bottle Green', 'Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.', '<p>Double wall construction</p>\n<p>Stainless steel thermal bottle with copper vacuum insulation</p>\n<p>Threaded stainless steel lid</p>', '23.99', 'Google Thermal Bottle Green, Google, google thermal bottle green, Google Green, Thermal Bottle Green,', 'Google+Thermal+Bottle+Green', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHJ087399', 'Google Rolltop Backpack Blue', 'This stylish Google rolltop backpack will help keep all of your favorite items organized and together while you\'re on the move.', '<p>Size: 12 inches wide x 18.5 inches height x 5.3 inches depth</p>\n<p>TPU Liner</p>\n<p>Internal Organizer for Pens, Phones and Other Small Items</p>\n<p>Large Main Compartment</p>\n<p>Flap Closure for Quick Access or Roll-Top for Expandable Volume and Weather Protection</p>', '149.99', 'Google Rolltop Backpack Blue, google backpack, google blue backpack, blue rolltop, Google rolltop, Blue Backpack, backpack, rolltop', 'Google+Rolltop+Backpack+Blue', 'bags', 'bags', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHQ093399', 'Google Thermal Bottle White', 'Insulated to keep contents hot or cold for hours, this Google bottle is a great year-round companion. 17 oz.', '<p>17 oz</p>\n<p>Double wall construction</p>\n<p>Stainless steel thermal bottle with copper vacuum insulation</p>\n<p>Threaded stainless steel lid</p>', '23.99', 'Google Thermal Bottle White , Google bottles, white bottle, thermal bottle white, thermal bottle with box, thermal bottle white with box, Google drinkware', 'Google+Thermal+Bottle+White+with+box', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHR086999', 'Google Thermal Bottle Red', 'Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.', '<p>Double wall construction</p>\n<p>Stainless steel thermal bottle with copper vacuum insulation</p>\n<p>Threaded stainless steel lid</p>', '23.99', 'Google Thermal Bottle Red, Google, google thermal bottle red, Google Red, Thermal Bottle Red,', 'Google+Thermal+Bottle+Red', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDHT087199', 'Google Thermal Bottle Yellow', 'Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.', '<p>Double wall construction</p>\n<p>Stainless steel thermal bottle with copper vacuum insulation</p>\n<p>Threaded stainless steel lid</p>', '23.99', 'Google Thermal Bottle Yellow, Google, google thermal bottle yellow, Google Yellow, Thermal Bottle Yellow,', 'Google+Thermal+Bottle+Yellow', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGDWQ087699', 'Google Hub Mug White', 'Enjoy a cup of coffee or tea with this Google stoneware mug.', '<p>16 oz. Stoneware</p>\n<p>Hand wash recommended</p>\n<p>Microwave safe</p>', '12.99', 'Google Hub Mug White, Google Mugs, hub mug white, Google White Mugs, mugs, white mug, hub white mug, Google White Hub Mug', 'Google+Hub+Mug+White', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGEBK094499', 'Google Bot', 'This Google Bot can hold multiple poses making it a fun toy for all. Fold the Google Bot back up into a perfect cube when you are done playing.', '<p>Made of wood</p>\n<p>2.5 x 2.5 inch cube</p>\n<p>6.75 inch tall</p>\n<p>Recommended for Ages 3+</p>', '9.99', 'Google Bot, google bot, bots, natural bots, wood bot, google wood bot', 'Google+Bot', 'accessories', 'accessories', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGFKA086699', 'Google Emoji Sticker Pack', 'Who doesn\'t use emojis? Decorate your space with your current mood!', '<p>Pack contains two sticker sheets</p>\n<p>Each Sheet has different emojis</p>\n<p><span>Decal dimensions should fit in a maximum sheet size of 12 3/4 x 17 1/2 inch.</span></p>', '4.99', 'Google Emoji Sticker Pack, Google sticker pack, emoji sticker pack, google emoji, stickers, pack of sticker, pack of emoji stickers', 'Google+Emoji+Sticker+Pack+2+sheet', 'accessories', 'accessories', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGFKQ020399', 'Google Laptop and Cell Phone Stickers', 'Show your Google support by posting these stickers on your belongings!', '<p>Google Stickers</p>\n<p>White Colored Sticker Sheet</p>\n<p>8.5 x 11 inch Sticker Sheet</p>', '2.99', 'Google Laptop and Cell Phone Stickers, stickers, Sticker, Google Stickers, Google Sticker, google stickers, cell phone stickers, cell phone, cell, phone, phones, Phone, Phone, Google cell phone, google cell phone, Google Cell phones, google cell phones, Google, google, Google, g, google cell phone accessories, accessory', 'Google+Laptop+and+Cell+Phone+Stickers', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGFSR022099', 'Google Mini Kick Ball', 'Kick this Google Mini Kick Ball around to take a break from the hustle and bustle. Fun for all ages!', '<p>Classic hacky sack type ball</p>\n<p>Google Logo printed on the front</p>\n<p>2 inch diameter</p>', '1.99', 'Kick Ball, Full Color Digital, Full color digital kick ball, kick ball, Kick Ball, Google Kick Ball, Google Kick Balls, kick balls, fitness, Fitness, Google kick ball, google, google kick ball, google Kick Ball, Google Kick Ball, Google Mini Kick Ball, mini kick, mini ball', 'Google+Kick+Ball', 'accessories', 'lifestyle', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGGOA017399', 'Maze Pen', 'Attending a meeting will never be the same! This fun-filled maze pen features two small metal balls that move through the maze.', '<p>Contains two metal balls that move through the maze</p>\n<p>Medium point black refill</p>', '0.99', 'Pen, Pens, pen, pens, Maze Pen, Maze Pens, pack of pens, pack of Maze Pens, pack of maze pens, writing utensil, writing utensils, ink pen, ink pens, Ink pen, Ink Pens, Pen writes in ink, fun pen, office, Office, offices, Offices, Google Maze Pens, Google maze pen, Google Maze Pens', 'Maze+Pen', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGHBL101999', 'Google Twill Sandwich Cap Navy', 'This Google Twill Sandwich Cap will not only keep the sun out of your eyes but will also keep you looking stylish.', '<p>Low profile</p>\n<p>Color sandwich bill</p>\n<p>Adjustable velcro closure</p>\n<p>One size fits most</p>', '12.99', 'Google Twill Sandwich Cap Navy, cap', 'Google+Twill+Sandwich+Cap+Navy', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGHPB071610', 'Google Twill Cap', 'Classic urban styling distinguishes this Google cap. Retains its shape, even when not being worn.', '<p>Heavy weight brushed twill</p>\n<p>Adjustable velcro closure</p>\n<p>One size fits all</p>', '10.99', 'Google Twill Cap, Google Cap, Google Twill Caps, Google Twill, google cap, google caps, google twill, google twill black cap, google black caps, google caps, black caps, Google Caps', 'Google+Twill+Cap', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGHPJ094299', 'Google Fold-over Beanie Grey', 'Keep you ears warm while enjoying a cold winter day with this Google Fold-over Beanie.', '<p>100% acrylic</p>\n<p>One size fits all</p>', '9.99', 'Google Fold-over Beanie Grey, gray beanie, grey beanie, Google Beanies, Fold over grey, Google Beanie Grey, Google headgear', 'Google+Fold+over+beanie+grey', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGHPJ094399', 'Google Pom Beanie Charcoal', 'Stay stylish and warm this winter season with this Google Pom Beanie.', '<p>Thick knit texture outside</p>\n<p>Soft plush inside</p>\n<p>Faux fur pom on top</p>', '19.99', 'Google Pom Beanie Charcoal, pom beanie, charcoal pom beanies, Google Beanies, Pom Beanies, charcoal Google pom, beanies, headgear', 'Google+Pom+Beanie+Charcoal', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAB086399', 'Google Tri Pen Black', 'Switch between blue ink, black ink, pencil or even write on your tablet using the stylus with this 5-in-1 Tri Pen.', '<p>Brass barrel pen</p>\n<p>Continuous twist technology</p>\n<p>Black ballpoint</p>\n<p>Blue ballpoint</p>\n<p>0.5mm mechanical pencil</p>\n<p>Touch stylus</p>\n<p>Eraser</p>', '15.99', 'Pixel Pen — Black, pens, pixel pen, black pixel pen, Black Pixel Pens,  Google Pixel Pen Black, Google Tri Pen Black, ', 'Pixel+Pen+Black', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAC089999', 'Google Light Pen Blue', 'Get yourself a great multitasking tool! Write a note, sign a tablet, and light up with this Google Light Pen!', '<p>Sliding-click ballpoint pen</p>\n<p>Stylus that works with touch screen devices</p>\n<p>Illuminated logo</p>', '2.99', 'Google Light Up Pen, Google pen, light up pen, google pens, google light ups, light up google pens, Google Light Pen Blue', 'Google+Light+Up+Pen+Blue', 'office', 'writing Instruments', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAH090199', 'Google Light Pen Green', 'Get yourself a great multitasking tool! Write a note, sign a tablet, and light up with this Google Light Pen!', '<p>Sliding-click ballpoint pen</p>\n<p>Stylus that works with touch screen devices</p>\n<p>Illuminated logo</p>', '2.99', 'Google Light Up Pen, Google pen, light up pen, google pens, google light ups, light up google pens, Google Light Pen Green', 'Google+Light+Up+Pen+Green', 'office', 'writing Instruments', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAJ086399', 'Google Tri Pen Silver', 'You multitask like a boss. Now your writing instrument can keep up. This 5-in-1 Tri Pen is a great multi functional pen.', '<p>Brass barrel pen</p>\n<p><span>Continuous</span> twist technology</p>\n<p>Black ballpoint</p>\n<p>Blue ballpoint</p>\n<p>0.5mm mechanical pencil</p>\n<p>Touch stylus</p>\n<p>Eraser</p>', '15.99', 'Pixel Pen — Silver, pen silver, silver pixel, silver pens, pixel, google pens, google pixel pens Google Pixel Pen Silver, Google Tri Pen Silver', 'Pixel+Pen+Silver', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAR013099', 'Google Stylus Pen w/ LED Light', 'Get yourself a great multitasking tool! Write a note, sign a tablet, and shine a light with this Google Stylus Pen w/LED Light!', '<p>Aluminum cap off ballpoint pen</p>\n<p>LED light</p>\n<p>Stylus that works with touch screen devices</p>\n<p>Three mercury-free AG3/LR41 batteries included</p>', '5.5', 'Ballpoint Pen/Stylus/LED Light, LED Light, Pen, pens, Pens, Google Ballpoint Pen/LED Light, ballpoint pen, Google Ballpoint Pen/Stylus/LED Light, stylus, Stylus, LED Light, LED lights, led, LED', 'Google+Stylus+Pen+w+LED+Light', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAR090099', 'Google Light Pen Red', 'Get yourself a great multitasking tool! Write a note, sign a tablet, and light up with this Google Light Pen!', '<p>Sliding-click ballpoint pen</p>\n<p>Stylus that works with touch screen devices</p>\n<p>Illuminated logo</p>', '2.99', 'Google Light Up Pen, Google pen, light up pen, google pens, google light ups, light up google pens, Google Light Pen Red', 'Google+Light+Up+Pen+Red', 'office', 'writing Instruments', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOAT090299', 'Google Light Pen Yellow', 'Get yourself a great multitasking tool! Write a note, sign a tablet, and light up with this Google Light Pen!', '<p>Sliding-click ballpoint pen</p>\n<p>Stylus that works with touch screen devices</p>\n<p>Illuminated logo</p>', '2.99', 'Google Light Up Pen, Google pen, light up pen, google pens, google light ups, light up google pens, Google Light Pen Yellow', 'Google+Light+Up+Pen+Yellow', 'office', 'writing Instruments', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOCJ093999', 'Google Large Standard Journal Grey', 'Use all 192 pages to store anything from meeting notes to that next big idea in this Google hard cover notebook.', '<p>Hard Cover</p>\n<p>Elastic Band Closure with Ribbon Page Marker</p>\n<p>192 White, College Ruled Pages</p>\n<p>Size: 5.5 x 8.5 inch</p>', '15.99', 'Google Large Standard Journal Grey, google journal, google large standard journal, google large grey journal, google grey journal Google Large Standard Journal Grey', 'Google+Large+Standard+Journal+Grey', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOCL087799', 'Google Large Standard Journal Navy', 'Use all 192 pages to store anything from meeting notes to that next big idea in this Google hard cover notebook.', '<p>Hard Cover</p>\n<p>Elastic Band Closure with Ribbon Page Marker</p>\n<p>192 White, College Ruled Pages</p>\n<p>Size: 5.5 x 8.5 inch</p>', '15.99', 'Google Large Standard Journal Navy, google journal, google large standard journal, google large navy journal, google navy journal', 'Google+Large+Standard+Journal+Navy', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOCL092999', 'Google Small Standard Journal Navy', 'This Google Small Standard Journal is perfect to keep on your desk for those great ideas that pop into your head.', '<p>Smooth Hardcover</p>\n<p>192 White, College Ruled Pages</p>\n<p>Elastic Band Closure</p>\n<p>Ribbon Marker</p>\n<p>Gusseted Back Pocket</p>\n<p>Size: Small, 4 x 6 inch</p>', '12.99', 'Google small standard Journal navy, small journal navy, google journals, google navy journals, google standard journal navy, standard navy journals', 'Google+Small+Standard+Journal+Navy', 'office', 'notebooks & Journals', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGOLC014299', 'Google Metallic Notebook Set', 'A stunning notebook set that will inspire all writers!', '<p>Spiral bound 70-page lined notebook with 2.0 mm thick solid metallic textured cover</p>\n<p>Elastic pen strap, includes color coordinating</p>\n<p>Economy Stylus with black ink and capacitive touch stylus</p>', '5.99', 'Blue Metallic Textured Spiral Notebook Set , Mercury Notebook Sets, notebook, notebooks, journal, journals, google mercury notebook set, mercury notebooks, office, office supplies', 'Google+Metallic+Notebook+Set', 'office', 'office', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGPJC019099', '7 inch Dog Frisbee', 'Take your furry friend to the park and play the day away with this 7 inch Dog Safe Flyer!', '<p>Dog-safe &amp; Child safe Flyer</p>\n<p>Molded from soft, durable polyethylene</p>\n<p>Made in the USA FDA Compliant</p>', '1.5', '7 inch Dog Safe Flyer, flyer, flyers, dog flyer, dog toys, dog, pet toy, google pet toy, Google pet toy, google pet toy, pet safe flyer, flyers', '7+inch+Dog+Safe+Flyer+bl', 'accessories', 'lifestyle', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0886', 'Google Protector Onesie Navy', 'This Google Protector Onesie moves with your baby with non-binding sleeves for full freedom of movement.', '<p>100% cotton</p>\n<p>Snaps at crotch</p>\n<p>Non-binding sleeves and neck</p>', '25.99', 'Google Protector Onesie Navy, protector with freedom, non-bin sheets, removable sticker sheets, protector onesie navy, google protector non-bin Sheets, Google Navy', 'Google+Protector+Onesie+Navy', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0887', 'Google Standard Onesie Grey', 'This Google onesie moves with your baby with non-binding sleeves for full freedom of movement.', '<p>100% cotton</p>\n<p>Snaps at crotch</p>\n<p>Non-binding sleeves and neck</p>', '25.99', 'Google Standard Onesie Grey, google grey onesie, google standard grey onesie, standard onesie grey, google onesie', 'Google+Standard+Onesie+Grey', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0888', 'Google Standard Onesie Green', 'This Google onesie moves with your baby with non-binding sleeves for full freedom of movement.', '<p>100% cotton</p>\n<p>Snaps at crotch</p>\n<p>Non-binding sleeves and neck</p>', '25.99', 'Google Standard Onesie Green, google green onesie, google standard green onesie, standard onesie green, google onesie', 'Google+Standard+Onesie+Green', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0889', 'Google Kids Tee Blue', 'Simple, stylish, and comfy — this Google kids t-shirt is 100% cotton for gentle comfort and ease of care.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Kids Tee Blue, google kids, google tee blue, blue tee, google blue tee, google kids tee, kids blue google tee', 'Google+Kids+Tee+Blue', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0890', 'Google Kids Tee Green', 'Simple, stylish, and comfy — this Google kids t-shirt is 100% cotton for gentle comfort and ease of care.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Kids Tee Green, google kids, google tee green, green tee, google green tee, google kids tee, kids green google tee', 'Google+Kids+Tee+Green', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0891', 'Google Kids Tee White', 'Simple, stylish, and comfy — this Google kids t-shirt is 100% cotton for gentle comfort and ease of care.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Kids Tee White, google kids, google tee white, white tee, google white tee, google kids tee, kids white google tee', 'Google+Kids+Tee+White', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0892', 'Google Trike Tee Black', 'This Google t-shirt is perfect for a kid to have fun and play in — 100% cotton comfort, short sleeves, and Google decoration!', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Trike Tee Black, google tee black, google trike tee, black trike tee, google tee, trike tee black, google tees', 'Google+Trike+Tee+Black', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0893', 'Google Flower Tee Purple', 'This Google t-shirt is everything a demanding kid could want — 100% cotton comfort, short sleeves, and Google decoration!', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Flower Tee Purple, Google Tee, Google Purple Tee, Flower Tee Purple, google flower tee', 'Google+Flower+Tee+Purple', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0894', 'Google Protector Tee Navy', 'This 100% cotton Google Protector is perfect for school, fun or lounging for kids.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'Google Protector Tee Navy, google fun, protector tee navy, protector fun, google protector fun, Google Navy', 'Google+Tee+Yellow', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0903', 'Google Tee White', '100% cotton jersey fabric sets this Google t-shirt above the crowd. Features the Google logo across the chest. Unisex sizing.', '<p>Unisex sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'Google Tee White, google white, google tees, tee white, white tees, Google Tee White', 'Google+Tee+White', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0904', 'Google Tee Red', '100% cotton jersey fabric sets this Google t-shirt above the crowd. Features the Google logo across the chest. Unisex Sizing.', '<p>Unisex Sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'Google Tee Red, google red, google tees, tee red, red tees, Google Tee Red', 'Google+Tee+Red', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0905', 'Google Tee Yellow', '100% cotton jersey fabric sets this Google t-shirt above the crowd. Features the Google logo across the chest. Unisex Sizing.', '<p>Unisex Sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'Google Tee Yellow, google yellow, google tees, tee yellow, yellow tees, Google Tee Yellow', 'Google+Tee+Yellow', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0906', 'Google Tee Green', '100% cotton jersey fabric sets this Google t-shirt above the crowd. Features the google logo across the chest. Unisex sizing.', '<p>Unisex Sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'Google Tee Green, google green, google tees, tee green, green tees, Google Tee Green', 'Google+Tee+Green', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0907', 'Google Tee Blue', '100% cotton jersey fabric sets this Google t-shirt above the crowd. Features the google logo across the chest. Unisex sizing.', '<p>Unisex Sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'Google Tee Blue, google blue, google tees, tee blue, blue tees, Google Tee Blue', 'Google+Tee+Blue', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0908', 'Google Bike Tee Navy', 'Go for a ride around campus or town with this comfortable Google Bike Tee. Unisex Sizing.', '<p>Unisex Sizing</p>\n<p>50% polyester. 25% cotton. 25% rayon.</p>\n<p>Short sleeve tri-blend crew neck tee</p>\n<p>3.8 oz.</p>', '21.99', 'Google Bike Tee Navy, Google Bike Navy, Google Bike Tee, Bike Tee Navy,', 'Google+Bike+Tee+Navy', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0909', 'Google Braille Tee Black', 'Made of soft tri-blend material, this Google Braille Tee is perfect for all of those sunny days. Unisex sizing.', '<p>Unisex sizing</p>\n<p>50% polyester. 25% cotton. 25% rayon.</p>\n<p>Short sleeve tri-blend crew neck tee</p>\n<p>3.8 oz.</p>', '21.99', 'Google Braille Tee Black, Google Braille Tee, Google Tee Black, Braille Tee Black Tee, Google Tee, Black Tee, Google Braille Tee', 'Google+Braille+Tee+Black', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0910', 'Google Women\'s Tee Grey', 'Stay comfortable and relaxed while coding in this Google Women\'s Tee made of soft tri-blend material.', '<p>50% polyester. 25% cotton. 25% rayon.</p>\n<p>Short sleeve tri-blend crew neck tee</p>\n<p>3.8 oz.</p>', '21.99', 'Google Tee Grey, and google tri, Grey T sheets, tee grey, google grey, Grey T Shirts, Google Grey Google Women\'s Tee Grey', 'Google+Womens+Grey+Tee+Grey', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0916', 'Android Matrix Tee White', 'The unique design and soft tri-blend material make for a perfect combination for this Android Matrix Tee. Unisex sizing.', '<p>Unisex Sizing</p>\n<p>50% polyester</p>\n<p>25% cotton</p>\n<p>25% rayon</p>\n<p>3.8 oz.</p>', '21.99', 'Android Matrix Tee White, android matrix, android tee white, android white tee, matrix tee white', 'Android+Matrix+Tee+White', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEGXXX0918', 'YouTube Tee Black', 'Keep it simple with the new logo wearing this YouTube tee. Unisex sizing.', '<p>Unisex Sizing</p>\n<p>100% cotton</p>\n<p>Short sleeve crew neck tee</p>\n<p>4.2 oz.</p>', '21.99', 'YouTube Tee Black, youtube black tee, black tee, youtube black, youtube tee, youtube tee black, tee black, black tees,', 'YouTube+Tee+Black', 'apparel', 'women\'s-T-Shirts', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWCKQ085457', 'Waze Pack of 9 Decal Set', 'Can\'t decide which Waze decal to get? We have made that decision easier for you! Now you can purchase a pack of nine Waze Mood Decals!', '<p>Pack of 9 includes:</p>\n<p>3 Waze Mood Happy decals</p>\n<p>3 Waze Mood Original decals</p>\n<p>3 Waze Mood Ninja decals</p>', '16.99', 'Waze Pack of 9 Decal Set, decals pack, packs of 9, Waze Packs, Waze Decals, waze, Waze', 'Waze+Pack+of+9+decal+set', 'accessories', 'accessories', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWFKA082999', 'Waze Baby on Board Window Decal', 'Get on board with the Waze wave and let everyone know you\'re carrying precious cargo with this new Waze inchBaby on Board inch decal.', '<p>Vinyl decal</p>\n<p>6 inch size inch</p>', '2.99', 'Waze Baby on Board Window Decal, Waze Decals, waze baby on board window decal, waze baby decals', 'Waze+Baby+on+Board+Window+Decal', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWFKA083099', 'Waze Mood Happy Window Decal', 'If you\'re happy and you know it, show it off with this Waze happy mood window decal.', '<p>Vinyl decal</p>\n<p>4 inch size inch</p>', '1.99', 'Waze Mood Happy Window Decal, Waze Decals, Waze Happy Window Decals, waze decal, waze decals', 'Waze+Mood+Happy+Window+Decal', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWFKA083199', 'Waze Mood Original Window Decal', 'You\'re an original. Let everyone know with this original Waze mood window decal.', '<p>Vinyl decal</p>\n<p>4 inch size inch</p>', '1.99', 'Waze Mood Original Window Decal, Waze Decals, Waze Decal, waze mood original window decal, waze mood original window decals', 'Waze+Mood+Original+Window+Decal', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWFKA083299', 'Waze Mood Ninja Window Decal', 'You\'re a master of stealth. So let everyone know! Get this Waze ninja mood window decal and advertise your commitment to the secret ninja ways!', '<p>Vinyl decal</p>\n<p>4 inch size inch</p>', '1.99', 'Waze Mood Ninja Window Decal, Waze Decals, Waze Decal, waze mood ninja window decal, waze mood ninja window decals', 'Waze+Mood+Ninja+Window+Decal', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWXXX0827', 'Waze Women\'s Short Sleeve Tee', 'Made of soft tri-blend jersey fabric, this great t-shirt will help you find your Waze. Made in USA.', '<p>Jersey knit</p>\n<p>37.5% cotton, 50% polyester, 12.5% rayon</p>\n<p>Made in the USA</p>', '18.99', 'Waze Women\'s Short Sleeve Tee, Waze Short Sleeve Tee, Waze Women\'s Tees, Waze Women\'s tee, waze ladies tees, waze ladies tee, waze short sleeve tees, waze short sleeve tee', 'Waze+Womens+Short+Sleeve+Tee', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWXXX0828', 'Waze Men\'s Short Sleeve Tee', 'Made of soft tri-blend jersey fabric, this great t-shirt will help you find your Waze. Made in USA.', '<p>Jersey knit</p>\n<p>37.5% cotton, 50% polyester, 12.5% rayon</p>\n<p>Made in the USA</p>', '18.99', 'Waze Men\'s Short Sleeve Tee, Waze Short Sleeve Tee, Waze Men\'s Tees, Waze Men\'s tee, waze mens tees, waze mens tee, waze short sleeve tees, waze short sleeve tee', 'Waze+Mens+Short+Sleeve+Tee', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWXXX0834', 'Waze Women\'s Typography Short Sleeve Tee', 'Made of soft tri-blend jersey fabric, this great t-shirt will help you find your Waze. Made in USA.', '<p>Jersey knit</p>\n<p>37.5% cotton, 50% polyester, 12.5% rayon</p>\n<p>Made in the USA</p>', '18.99', 'Waze Women\'s Typography Short Sleeve Tee, Waze Women\'s Tees, Waze Typography Tees, Waze Short Sleeve Tees, Waze Tees, Waze tee, waze women\'s typography short sleeve tee, waze short sleeve tees women\'s, women\'s waze tees,', 'Waze+Womens+Typography+Short+Sleeve+Tee', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEWXXX0835', 'Waze Men\'s Typography Short Sleeve Tee', 'Made of soft tri-blend jersey fabric, this great t-shirt will help you find your Waze. Made in USA.', '<p>Jersey knit</p>\n<p>37.5% cotton, 50% polyester, 12.5% rayon</p>\n<p>Made in the USA</p>', '18.99', 'Waze Men\'s Typography Short Sleeve Tee, Waze Men\'s Tees, Waze Typography Tees, Waze Short Sleeve Tees, Waze Tees, Waze tee, waze men\'s typography short sleeve tee, waze short sleeve tees men\'s, men\'s waze tees,', 'Waze+Mens+Typography+Short+Sleeve+Tee', 'shop by brand', 'waze', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYDHB086099', 'YouTube Transmission Bottle Black', 'Keep your favorite drink cold during those long workouts with this YouTube Transmission Bottle. 17 oz.', '<p>17 oz. double wall thermal bottle</p>\n<p>Stainless steel</p>\n<p>Threaded stainless steel insulated lid</p>\n<p>Copper vacuum insulation</p>', '23.99', 'Play Black Force 17oz Bottle, youtube 17 oz bottle, play back bottle, play back force bottle, 17 oz bottles, youtube black force YouTube Play Black Force Bottle YouTube Transmission Bottle Black', 'Play+Black+Force+17oz+bottle', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYDHB098499', 'YouTube 25 oz Gear Cap Bottle Black', 'Take your favorite hot or cold drink anywhere with this YouTube 25oz Gear Cap Bottle. The carrying handle lid makes it convenient to take with you to your next meeting or workout.', '<p>25 oz. Powder coated</p>\n<p>Stainless Steel</p>\n<p>Copper vacuum insulation</p>\n<p>Threaded gear-shaped insulated lid</p>\n<p>Carrying handle</p>', '26.99', 'YouTube 25 oz Gear Cap Bottle Black, bottle', 'YouTube+25oz+Gear+Cap+Bottle+Black', 'drinkware', 'drinkware', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYHBB102199', 'YouTube Twill Sandwich Cap Black', 'This YouTube Twill Sandwich Cap will not only keep the sun out of your eyes but will also keep you looking stylish.', '<p>Low profile</p>\n<p>Color sandwich bill</p>\n<p>Adjustable velcro closure</p>\n<p>One size fits most</p>', '12.99', 'YouTube Twill Sandwich Cap Black, cap', 'YouTube+Twill+Sandwich+Cap+Black', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYOCB092699', 'YouTube Transmission Journal Black', 'This YouTube Transmission Journal is a convenient tool to collect your thoughts and doodles throughout the day.', '<p>Smooth Hardcover</p>\n<p>192 White, College Ruled Pages</p>\n<p>Elastic Band Closure</p>\n<p>Ribbon Marker</p>\n<p>Gusseted Back Pocket</p>', '15.99', 'YouTube Transmission Journal Black, black youtube journal, transmission youtube journals, black youtube transmission journals, youtube journals,', 'YouTube+Transmission+Journal+Black', 'office', 'notebooks & Journals', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYXXX0895', 'YouTube Kids Tee White', 'This 100% cotton YouTube short sleeve t-shirt is perfect for kids to wear to school or while playing.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'YouTube Kids Tee White, YouTube Tee, YouTube Kids Tee, YouTube White Tee, Kids Tee White, White Kids Tee, YouTube Kids Tee White', 'YouTube+Kids+Tee+White', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYXXX0896', 'YouTube Kids Tee Black', 'This 100% cotton YouTube short sleeve t-shirt is perfect for kids to wear to school or while playing.', '<p>100% cotton</p>\n<p>Short sleeves</p>\n<p>Crew neck design</p>', '19.99', 'YouTube Kids Tee Black, YouTube Tee, YouTube Kids Tee, YouTube Black Tee, Kids Tee Black, Black Kids Tee, YouTube Kids Tee Black', 'YouTube+Kids+Tee+Black', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYXXX0897', 'YouTube Kids Onesie White', 'This 100% cotton YouTube Onesie for your baby will keep them comfortable with non-binding sleeves for full freedom of movement.', '<p>100% cotton</p>\n<p>Snaps at crotch</p>\n<p>Non-binding sleeves and neck</p>', '25.99', 'YouTube Kids Onesie White, YouTube Kids White, YouTube Onesie White, YouTube Onesie, kids onesie white, youtube', 'YouTube+Kids+Onesie+White', 'apparel', 'kid\'s', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYXXX0937', 'YouTube Wordmark Crew Grey', 'Kick back and relax in this comfortable YouTube sweatshirt. Unisex sizing.', '<p>Unisex sizing</p>\n<p>Raglan sleeves</p>\n<p>1x1 ribbed cuffs and waistband inch</p>', '51.99', 'YouTube Wordmark Crew Grey, YouTube, sweatshirt', 'YouTube+Wordmark+Crew+Grey', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39'),
('GGOEYXXX0938', 'YouTube Icon Pullover Black', 'This YouTube pullover hoodie will keep you warm while looking stylish with the tone on tone logo.', '<p>8oz. 52% Cotton. 48% Polyester. Fleece</p>\n<p>Kangaroo pocket</p>\n<p>Matching drawcords</p>\n<p>', '59.99', 'YouTube Icon Pullover Black, pullover, hoodie', 'YouTube+Icon+Pullover+Black', 'apparel', 'apparel', '2019-10-31 07:58:39', '2019-10-31 07:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`) VALUES
(12, 'First Samuel'),
(13, 'All Needs'),
(14, 'All Needs Prestige'),
(15, 'You 84'),
(16, 'Lucky Bazaar'),
(17, 'Carlos'),
(18, 'Graden Mart'),
(19, 'O and O'),
(20, 'Tumman'),
(21, 'Appliance World');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `icon`, `createdAt`, `updatedAt`) VALUES
(1, 'notebooks & Journals', 'fa fa-book', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(2, 'lifestyle', 'fas fa-tv', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(3, 'kid\'s', 'fa fa-baby', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(4, 'headgear', 'fa fa-gamepad', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(5, 'writing instruments', 'fa fa-pencil', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(6, 'women\'s-T-Shirts', 'fa fa-tshirt', '2019-11-09 07:00:27', '2019-11-09 07:00:27'),
(7, 'waze', 'fa fa-waze', '2019-11-09 07:00:27', '2019-11-09 07:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amos Amissah', 'theonlyamos@gmail.com', NULL, '$2y$10$W52TzCBQtOHIJiPiDKa5GuFF2VYPfeLFAmk2YjmRDfuhJXQ6WiQ5C', NULL, '2019-10-26 15:50:56', '2019-10-26 15:50:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
