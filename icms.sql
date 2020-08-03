-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 01:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icms`
--

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `CommitteeID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`CommitteeID`, `Name`, `Age`, `Gender`, `Contact`, `Username`, `Email`, `Password`) VALUES
(1, 'jiayi', 22, 'Female', 124568932, 'jyjy123', 'jyjy@gmail.com', '123456jy'),
(2, 'kiki', 25, 'Male', 12375896, 'kiki999', 'kiki@mail.com', 'kiki889'),
(3, 'kiki', 25, 'Male', 123456789, 'kiki999', 'kiki@mail.com', 'kiki8889'),
(4, 'kiki', 25, 'Male', 123456789, 'kiki999', 'kiki@mail.com', 'kiki8889'),
(5, 'kiki', 25, 'Male', 123456789, 'kiki999', 'kiki@mail.com', 'kiki8889'),
(6, 'Jia Soon Loo', 16, 'Male', 177409910, 'jiasoon', 'loojiasoon@gmail.com', '123'),
(7, 'jiayi', 21, 'Male', 177409910, 'jy', 'jy@gmail.com', '123'),
(8, 'ljy', 22, 'Female', 12345, 'eee', 'few@gnerwge', '12'),
(9, 'jijijii', 23, 'Male', 177409910, 'qwqww', '1wdfb@fegegege', '1'),
(10, 'Jia', 22, 'Male', 177409910, 'ggg', '3fefe@wfwfwf', '33'),
(11, 'Jia', 22, 'Male', 177409910, 'ggg', '3fefe@wfwfwf', '33'),
(12, 'Jia', 22, 'Male', 177409910, 'ggg', '3fefe@wfwfwf', '33'),
(13, 'Jia', 22, 'Male', 177409910, 'ggg', '3fefe@wfwfwf', '33'),
(14, 'Jia', 22, 'Male', 177409910, 'ggg', '3fefe@wfwfwf', '33'),
(15, 'jjjj', 33, 'Female', 12345, 'rrrrrrr', 'fheiuhho@iiio', '11');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `PaymentID` int(11) NOT NULL,
  `CreditCardNumber` int(20) NOT NULL,
  `ExpiryDate` varchar(30) NOT NULL,
  `CVV` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `ParticipantName` varchar(50) NOT NULL,
  `ParticipantID` int(11) NOT NULL,
  `ParticipantEmail` varchar(50) NOT NULL,
  `HpNo` int(12) NOT NULL,
  `EquipmentID` int(10) NOT NULL,
  `EquipmentType` varchar(15) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `DateToUse` date NOT NULL,
  `EquipmentStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`ParticipantName`, `ParticipantID`, `ParticipantEmail`, `HpNo`, `EquipmentID`, `EquipmentType`, `Quantity`, `DateToUse`, `EquipmentStatus`) VALUES
('michelle', 100, 'sxdsd@gmail.com', 123879563, 1, '002 Chair', 4, '2019-12-12', 'Reject'),
('tommy', 102, 'tommy@gmail.com', 123456789, 2, '001 Table', 1, '2019-12-19', 'Approve'),
('tommy', 102, 'tommy@gmail.com', 123456789, 3, '001 Table', 4, '2019-12-19', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `EvaluationID` int(100) NOT NULL,
  `Mark` int(11) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `ParticipantID` int(11) NOT NULL,
  `JuryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvaluationID`, `Mark`, `Remark`, `ParticipantID`, `JuryID`) VALUES
(7, 100, 'Perfect', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` int(10) NOT NULL,
  `Categories` varchar(50) NOT NULL,
  `EventLocation` varchar(50) NOT NULL,
  `EventTime` int(4) NOT NULL,
  `EventDate` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `Categories`, `EventLocation`, `EventTime`, `EventDate`) VALUES
(2, '', 'MidValley Megamall', 0, 9092020),
(456, 'Secondary School', 'Astaka', 0, 31082020),
(999, 'Primary School', 'SKTAM', 1600, 15072020);

-- --------------------------------------------------------

--
-- Table structure for table `jury`
--

CREATE TABLE `jury` (
  `Jury_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `Category` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jury`
--

INSERT INTO `jury` (`Jury_ID`, `Name`, `Email`, `Gender`, `Category`) VALUES
(9, 'Taylor', 'tay@gmail.com', 'male', 'jury');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_Id` int(100) UNSIGNED NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_Id`, `Password`, `Username`, `Email`, `Category`) VALUES
(7, 'Chian016959', 'skchian', 'soonkaichian97@gmail.com', 'sa'),
(9, 'Waiying123', 'Wong Wai Ying', 'waiying97@gmail.com', 'jury'),
(10, 'Toommy123', 'tommy', 'hahaha@gmail.com', 'committee'),
(16, 'Jiayi00000', 'Jiayi', 'jiayi12@gmail.com', 'participant'),
(17, 'Billie123', 'Billie', 'billie122@gmail.com', 'participant'),
(18, 'Power1234', 'Powerpuff', 'power666@gmail.com', 'participant'),
(19, 'John11111', 'John', 'john111@gmail.com', 'participant'),
(30, 'Taylor123', 'Taylor', 'tay@gmail.com', 'jury');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `ParticipantID` int(100) UNSIGNED NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Categories` varchar(50) DEFAULT NULL,
  `GroupName` varchar(50) DEFAULT NULL,
  `InnovationProduct` varchar(50) DEFAULT NULL,
  `GroupMemberName1` varchar(50) DEFAULT NULL,
  `GroupMemberAge1` int(10) DEFAULT NULL,
  `GroupMemberGender1` varchar(10) DEFAULT NULL,
  `GroupMemberNumber1` varchar(10) DEFAULT NULL,
  `GroupMemberName2` varchar(50) DEFAULT NULL,
  `GroupMemberAge2` int(10) DEFAULT NULL,
  `GroupMemberGender2` varchar(10) DEFAULT NULL,
  `GroupMemberNumber2` varchar(10) DEFAULT NULL,
  `GroupMemberName3` varchar(50) DEFAULT NULL,
  `GroupMemberAge3` int(10) DEFAULT NULL,
  `GroupMemberGender3` varchar(10) DEFAULT NULL,
  `GroupMemberNumber3` varchar(10) DEFAULT NULL,
  `GroupMemberName4` varchar(50) DEFAULT NULL,
  `GroupMemberAge4` int(10) DEFAULT NULL,
  `GroupMemberGender4` varchar(10) DEFAULT NULL,
  `GroupMemberNumber4` varchar(10) DEFAULT NULL,
  `GroupMemberName5` varchar(50) DEFAULT NULL,
  `GroupMemberAge5` int(10) DEFAULT NULL,
  `GroupMemberGender5` varchar(10) DEFAULT NULL,
  `GroupMemberNumber5` varchar(10) DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `RegistrationStatus` int(11) NOT NULL,
  `PaymentStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`ParticipantID`, `Username`, `Categories`, `GroupName`, `InnovationProduct`, `GroupMemberName1`, `GroupMemberAge1`, `GroupMemberGender1`, `GroupMemberNumber1`, `GroupMemberName2`, `GroupMemberAge2`, `GroupMemberGender2`, `GroupMemberNumber2`, `GroupMemberName3`, `GroupMemberAge3`, `GroupMemberGender3`, `GroupMemberNumber3`, `GroupMemberName4`, `GroupMemberAge4`, `GroupMemberGender4`, `GroupMemberNumber4`, `GroupMemberName5`, `GroupMemberAge5`, `GroupMemberGender5`, `GroupMemberNumber5`, `Total`, `RegistrationStatus`, `PaymentStatus`) VALUES
(2, 'taylor', 'Secondary School', 'Nowifi', 'cleaning robot', 'SK', 23, 'male', '0166938669', 'JQ', 23, 'female', '0123456789', 'WY', 23, 'female', '0132456789', 'Taylor', 23, 'male', '0142356789', 'Nesh', 23, 'male', '0152346789', 100, 1, 1),
(12, 'John', 'Universities, Colleges and Polytechnics', 'johnnybravo', 'cleaning robot', 'j1', 22, 'male', '123', 'j2', 22, 'male', '123', 'j3', 22, 'male', '123', 'j4', 23, 'male', '123', 'j5', 23, 'male', '123', 100, 1, 1),
(13, 'Jiayi', 'Primary School', 'happypill', 'robot', 'a', 22, 'male', '123', 'x', 22, 'female', '123455', 's', 22, 'male', '123', 'e', 22, 'female', '123', 'q', 22, 'male', '123', 100, 1, 0),
(14, 'Powerpuff', 'Primary School', 'power', 'aaa', 'q', 22, 'male', '123', 't', 22, 'female', '123', 'e', 22, 'male', '123', 'w', 22, 'female', '0123456789', 'g', 22, 'male', '0123456789', 100, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `PaymentID` int(100) NOT NULL,
  `ParticipantID` varchar(500) NOT NULL,
  `EventInfo` varchar(50) NOT NULL,
  `ReferenceNumber` varchar(500) NOT NULL,
  `PaymentAmount` int(100) NOT NULL,
  `Status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`PaymentID`, `ParticipantID`, `EventInfo`, `ReferenceNumber`, `PaymentAmount`, `Status`) VALUES
(1, '2', 'Nowifi', '7T197627BP670422G', 100, 'Completed'),
(68, '10', 'Nowifi', '5EG13286AV399481V', 100, 'Completed'),
(70, '10', 'Ellish', '86V04531LE3912343', 100, 'Completed'),
(73, '11', 'power', '5XC73196RX9240501', 100, 'Completed'),
(75, '12', 'johnnybravo', '11M99179BA348435H', 100, 'Completed'),
(79, '9', 'powerpuffgirl', '0X750913HU0560428', 100, 'Completed'),
(80, '2', 'Nowifi', '6644668067062172X', 100, 'Completed'),
(81, '10', 'Ellish', '0MT65344C75466818', 100, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `system_administrator`
--

CREATE TABLE `system_administrator` (
  `UserId` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EvaluationID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `jury`
--
ALTER TABLE `jury`
  ADD PRIMARY KEY (`Jury_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`ParticipantID`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `system_administrator`
--
ALTER TABLE `system_administrator`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `EvaluationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `jury`
--
ALTER TABLE `jury`
  MODIFY `Jury_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `User_Id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `ParticipantID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `PaymentID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `system_administrator`
--
ALTER TABLE `system_administrator`
  MODIFY `UserId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
