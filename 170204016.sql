-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `170204016`
--
CREATE DATABASE IF NOT EXISTS `170204016` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `170204016`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imglocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `title`, `description`, `imglocation`) VALUES
(1, 'We are AutoMobile Center', 'AutoMobile Center is building a better automotive buying experience for everyone, by offering the best apps and the largest selection of new and used cars in the United States. Whether you’re looking for a cheap car or truck, use our tools to analyze car ', 'images\\WMotorsLycanHyperSport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allpro`
--

CREATE TABLE `allpro` (
  `product_ID` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_cat_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpro`
--

INSERT INTO `allpro` (`product_ID`, `product_name`, `product_image`, `product_price`, `product_description`, `product_title`, `product_cat_id`) VALUES
(1, 'Dodge', 'images\\DodgeViper.jpg', '159,995', 'The menacing SRT Viper is a two-passenger, race-bred grand touring car powered by an 8.4-litre V10 engine that produces a prodigious 645 horsepower and 600 lb.-ft. of torque. The Tremec six-speed manual transmission is the lone offering, so if you don’t l', 'DODGE VIPER', 0),
(2, 'Lamborghini', 'images\\LamborghiniAventador.jpg', '517,770', 'If you need the ultimate Raging Bull, the new Lamborghini Aventador SVJ is the most capable car in their history. We already knew they achieved the fastest lap of the Nürburgring, and this is how they did it. Taking inspiration from the patented ALA syste', 'LAMBORGHINI AVENTADOR SVJ', 1),
(3, 'Lamborghini', 'images\\LamborghiniVeneno.jpg', '45,00,000', 'The convertible version of Lamborghini’s fierce-looking supercar is the most expensive — and exclusive — vehicle in Lambo’s arsenal. Only nine Veneno Roadsters were produced, beginning in 2014. Those lucky to get their hands on one of these exclusive cars', 'LAMBORGHINI VENENO', 1),
(4, 'Mclaren P1', 'images\\Mclaren.jpg', '13,50,000', 'The McLaren P1 is the epitome of hybrid insanity. Powered by a twin-turbocharged 3.8-litre V8 engine paired to an electric motor, the P1 pumps out a whopping 903 horsepower. After debuting as a concept at the 2012 Paris Motor Show, the first P1 hit the ro', 'MCLAREN P1', 2),
(5, 'Skoda Rapid Sport', 'images\\Skoda.jpg', '13,29,000', 'The Rapid has always been a steady performer for Skoda. While the big boys from the Czech automaker’s portfolio that is, the Octavia and the Superb always stole the limelight, it was the Rapid that steadily contributed volumes. With the demise of the Fabi', 'SKODA RAPID SPORT', 3),
(6, 'Lamborghini', 'images\\Lamborghini.jpg', '417,826', 'With wild-looking bodywork and dramatic performance, the 2020 Lamborghini Aventador is spectacular in every sense of the word. It\'s also the last of a dying breed, with hybrid technology expected to enhance future iterations of the V-12 supercar. Still, t', 'LAMBORGHINI AVENTADOR S', 1),
(7, 'Lamborghini', 'images\\LamborghiniTerzoMillennio.jpg', '25,00,000', 'the model is its first hybrid supercar and will feature an electric motor with the brand’s familiar 6.5-liter V12 engine at the rear axle. rumors indicate the model has a combined output of 838 horsepower (625 kilowatts) and is rumored to be priced at $2.', 'LAMBORGHINI TERZO MILLENNIO', 1),
(8, 'Mercedes', 'images\\MercedesBenz1.jpg', '5,60,000', 'The 2020 Mercedes-Benz S-Class is part of a generation that launched for the 2014 model year. Older models will likely be much less expensive than a new S-Class. Just be aware that this Mercedes has seen some significant changes over the years.', 'MERCEDES-BENZ S-CLASS COUPE', 4),
(9, 'Mercedes', 'images\\MercedesBenz2.jpg', '8,92,700', 'The Mercedes-AMG GT has been around since 2015, and there have been several noteworthy updates since then. The car initially debuted as the Mercedes-AMG GT S coupe, and it boasted a 503-horsepower engine. The GT S was followed in 2017 by a less expensive ', 'MERCEDES-BENZ AMG GT C ', 4),
(10, 'BMW', 'images\\bmw.jpg', '12,29,000', 'The BMW M3 GTR Strassenversion can trace its roots back to competition racing in the American Le Mans Series (ALMS), where the race car it is based on – of the same name, minus the ‘Strassenversion’ – competed in the GT class. \r\n\r\n', 'BMW M3 GTR', 5),
(11, 'Bugatti', 'images\\Bugatti1.jpg', '29,90,000', 'We don\'t really need to explain Bugatti to you, do we? The brand sells essentially one car, the Chiron. Okay, okay, you can count the Divo as a second car, we suppose, even though it\'s 100 percent based on the Chiron. These two follow-ups to the poster-ca', 'BUGATTI VEYRON', 6),
(12, 'Audi', 'images\\Audi.jpg', '2,08,100', 'The 2020 Audi R8 finishes in the top third of our luxury sports car rankings. Its naturally aspirated engines deliver exceptional power, and the interior lives up to Audi’s reputation for opulence and refinement. However, the R8 has fewer features than so', 'AUDI R8 HYBRID', 7),
(13, 'Toyota', 'images\\Jeep.jpg\r\n', '1,39,800', 'The Toyota FJ Cruiser is a large SUV small crossover SUV that arrived in Australia in 2011. Sold in Australia until 2017, the Toyota FJ Cruiser featured a 4.0-litre, 200kW/380Nm petrol V6 mated to a five-speed automatic transmission. The Cruiser’s design ', 'TOYOTA FJ CRUISER', 8);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `ID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `imglocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`ID`, `title`, `description`, `price`, `imglocation`) VALUES
(1, 'Lamborghini Aventador Coupè', 'Forget the idea of performance you are used to. The Aventador Coupé has been engineered to revolutionize this concept and establish a new benchmark in the segment of super sports cars and beyond. This car aims to bring the future forward. This is a true s', '100000000', 'images\\LamborghiniAventador.jpg'),
(2, 'Bugatti Veyron', 'The Bugatti Veyron EB 16.4 is a mid-engine sports car, designed and developed in Germany by the Volkswagen Group and manufactured in Molsheim, France, by French automobile manufacturer Bugatti. It was named after the racing driver Pierre Veyron.The origin', '500000', 'images\\BugattiVeyron.jpg'),
(3, 'Dodge Viper SRT', 'While 2017 marked the end for the fifth-generation Viper, an all-new model is set to debut in 2020. It should be worth the wait, with a naturally aspirated V-8 making an estimated 550 hp.The new Viper will be offered as a convertible first; a coupe should', '1000000', 'images\\DodgeViper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`, `image`) VALUES
(1, 'Niloy022', 'samiul3030@gmail.com', '01521515190', '123', '123', 'images/profile/ArrineraHussarya.jpg'),
(2, 'thepewpewpew', 'saloye1731@fft-mail.com', '0265413', '321', '321', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `message`) VALUES
(1, 'Niloy', 'samiul3030@gmail.com', '01521515190', 'First Test'),
(2, 'Limon', 'limon69@gmail.com', '01556852148', 'Second Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allpro`
--
ALTER TABLE `allpro`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allpro`
--
ALTER TABLE `allpro`
  MODIFY `product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
