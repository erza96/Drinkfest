-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 07:29 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drinkfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventi`
--

CREATE TABLE `eventi` (
  `data` char(10) NOT NULL DEFAULT '',
  `Kohezgjatja` char(20) DEFAULT NULL,
  `Sponzori` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventi`
--

INSERT INTO `eventi` (`data`, `Kohezgjatja`, `Sponzori`) VALUES
('1.1.2016', '4 dite', ''),
('1.2.2016', '6 dite', ''),
('11.08.2016', '2 dite', ''),
('14.02.2016', '3 dite', 'Mulliri i vjeter'),
('23.10.2020', '4 dite', 'Stone Castle'),
('30.12.2015', '4 dite', 'Stone Castle'),
('4.1.2016', '2 dite', '');

-- --------------------------------------------------------

--
-- Table structure for table `lokacioni`
--

CREATE TABLE `lokacioni` (
  `lid` int(11) NOT NULL DEFAULT '0',
  `Vendi` char(60) DEFAULT NULL,
  `Emri` char(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokacioni`
--

INSERT INTO `lokacioni` (`lid`, `Vendi`, `Emri`) VALUES
(10, 'Prizren', 'SHADERVAN'),
(11, 'Prishtine', 'SHESHI NENE TEREZA'),
(12, 'Gjakove', 'SHESHI NENE TEREZA'),
(13, 'Peje', 'SHESHI Adem JASHARI');

-- --------------------------------------------------------

--
-- Table structure for table `menaxheri`
--

CREATE TABLE `menaxheri` (
  `pid` int(11) NOT NULL,
  `LokacioniId` int(11) DEFAULT NULL,
  `Email` char(50) NOT NULL,
  `Fjalekalimi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menaxheri`
--

INSERT INTO `menaxheri` (`pid`, `LokacioniId`, `Email`, `Fjalekalimi`) VALUES
(100, 11, 'valon@gmail.com', 'kosova123'),
(101, 10, 'besa@gmail.com', 'kosova1234'),
(102, 12, 'erza@gmail.com', 'kosova123');

-- --------------------------------------------------------

--
-- Table structure for table `organizohet`
--

CREATE TABLE `organizohet` (
  `lid` int(11) NOT NULL DEFAULT '0',
  `pijaemri` char(30) NOT NULL DEFAULT '',
  `eventidata` char(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizohet`
--

INSERT INTO `organizohet` (`lid`, `pijaemri`, `eventidata`) VALUES
(10, 'Lasko', '14.02.2016'),
(13, 'Red Wine', '1.1.2016'),
(13, 'Red Wine', '1.2.2016');

-- --------------------------------------------------------

--
-- Table structure for table `pija`
--

CREATE TABLE `pija` (
  `Emri` char(30) NOT NULL,
  `Perberesit` char(150) DEFAULT NULL,
  `Sasia_ne_Litra` char(10) DEFAULT NULL,
  `Sasia_e_Alkoolit` char(10) DEFAULT NULL,
  `Sasia_e_Sheqerit` char(10) DEFAULT NULL,
  `Viti_i_Prodhimit` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pija`
--

INSERT INTO `pija` (`Emri`, `Perberesit`, `Sasia_ne_Litra`, `Sasia_e_Alkoolit`, `Sasia_e_Sheqerit`, `Viti_i_Prodhimit`) VALUES
('Caj i gjelber', 'mente, nane', '30 L', '0%', '3%', 2010),
('chardonnay', 'rrush i kuq', '13 L', '13', '12', 1788),
('Lasko', 'grur, elb', '13 L', '12 %', '10%', 1556),
('Red Wine', 'rrush i kuq', '15 L', '12 %', '8%', 1756);

-- --------------------------------------------------------

--
-- Table structure for table `pjesemarresi`
--

CREATE TABLE `pjesemarresi` (
  `Username` varchar(40) NOT NULL,
  `Emri` char(20) DEFAULT NULL,
  `Mbiemri` char(20) DEFAULT NULL,
  `Mosha` smallint(6) DEFAULT NULL,
  `Fjalekalimi` char(30) DEFAULT NULL,
  `Email` char(40) DEFAULT NULL,
  `EventiId` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pjesemarresi`
--

INSERT INTO `pjesemarresi` (`Username`, `Emri`, `Mbiemri`, `Mosha`, `Fjalekalimi`, `Email`, `EventiId`) VALUES
('besa123', 'bese', 'thaqi', 19, 'paNtyxY6dm6jk', 'email@gmail.com', NULL),
('filani123', 'Filani', 'Fisteku', 20, 'paAU4KFO33cgM', 'filan@gmail.com', '1.1.2016'),
('floriani', 'florian', 'thaqi', 19, 'paAU4KFO33cgM', 'flori@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `punetori`
--

CREATE TABLE `punetori` (
  `pid` int(11) NOT NULL DEFAULT '0',
  `Emri` char(20) DEFAULT NULL,
  `Mbiemri` char(20) DEFAULT NULL,
  `Datelindja` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punetori`
--

INSERT INTO `punetori` (`pid`, `Emri`, `Mbiemri`, `Datelindja`) VALUES
(100, 'Valon', 'Kito', '23.10.1995'),
(101, 'Besmire', 'Thaqi', '10.8.1996'),
(102, 'Erza', 'Hoti', '17.7.1996'),
(103, 'Filan', 'Fisteku', '1.1.1990');

-- --------------------------------------------------------

--
-- Table structure for table `punetoritel`
--

CREATE TABLE `punetoritel` (
  `id` int(11) NOT NULL,
  `Nr_Tel` char(20) NOT NULL,
  `PunetoriId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punetoritel`
--

INSERT INTO `punetoritel` (`id`, `Nr_Tel`, `PunetoriId`) VALUES
(1, '049621449', 100),
(2, '049111222', 101),
(3, '049999111', 102),
(4, '045000111', 103);

-- --------------------------------------------------------

--
-- Table structure for table `punon`
--

CREATE TABLE `punon` (
  `pid` int(11) NOT NULL DEFAULT '0',
  `lid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punon`
--

INSERT INTO `punon` (`pid`, `lid`) VALUES
(100, 11),
(101, 10),
(102, 12),
(103, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventi`
--
ALTER TABLE `eventi`
  ADD PRIMARY KEY (`data`);

--
-- Indexes for table `lokacioni`
--
ALTER TABLE `lokacioni`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `menaxheri`
--
ALTER TABLE `menaxheri`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `LokacioniId` (`LokacioniId`);

--
-- Indexes for table `organizohet`
--
ALTER TABLE `organizohet`
  ADD PRIMARY KEY (`lid`,`pijaemri`,`eventidata`),
  ADD UNIQUE KEY `eventidata` (`eventidata`),
  ADD KEY `pijaemri` (`pijaemri`);

--
-- Indexes for table `pija`
--
ALTER TABLE `pija`
  ADD PRIMARY KEY (`Emri`);

--
-- Indexes for table `pjesemarresi`
--
ALTER TABLE `pjesemarresi`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `EventiId` (`EventiId`);

--
-- Indexes for table `punetori`
--
ALTER TABLE `punetori`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `punetoritel`
--
ALTER TABLE `punetoritel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punon`
--
ALTER TABLE `punon`
  ADD PRIMARY KEY (`pid`,`lid`),
  ADD KEY `lid` (`lid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menaxheri`
--
ALTER TABLE `menaxheri`
  ADD CONSTRAINT `menaxheri_ibfk_1` FOREIGN KEY (`LokacioniId`) REFERENCES `lokacioni` (`lid`);

--
-- Constraints for table `organizohet`
--
ALTER TABLE `organizohet`
  ADD CONSTRAINT `organizohet_ibfk_1` FOREIGN KEY (`pijaemri`) REFERENCES `pija` (`Emri`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organizohet_ibfk_2` FOREIGN KEY (`lid`) REFERENCES `lokacioni` (`lid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organizohet_ibfk_3` FOREIGN KEY (`eventidata`) REFERENCES `eventi` (`data`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pjesemarresi`
--
ALTER TABLE `pjesemarresi`
  ADD CONSTRAINT `pjesemarresi_ibfk_2` FOREIGN KEY (`EventiId`) REFERENCES `eventi` (`data`);

--
-- Constraints for table `punon`
--
ALTER TABLE `punon`
  ADD CONSTRAINT `punon_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `punetori` (`pid`),
  ADD CONSTRAINT `punon_ibfk_2` FOREIGN KEY (`lid`) REFERENCES `lokacioni` (`lid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
