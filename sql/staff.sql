-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 02:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_id`, `firstname`, `lastname`, `role`, `email`, `password`, `status`) VALUES
(4, 'Sunshine', 'Casido', 'Manager', 'tierneysewali@gmail.com', '$2y$10$R.HOfl5M1weleE8Fe1LqMuzv2fkt0kXqo.NXBYOo6KPjStSe4wFoS', 'Active'),
(5, 'Lady Maxine', 'Dela Cruz', 'Manager', 'mc@gm.com', '$2y$10$MmTuxVeZ70.mN4uLNJabDO4cJIbpxLRekxJy7AX5IROfKbfJhHoMG', 'Active'),
(6, 'Christian', 'Ty', 'Staff', 'c@ty.com', '$2y$10$jcaw7yTtBYAZTfW70df.HOgNlsocFIZPXivLW9J9vHX1At8rVY8u6', 'Active'),
(8, 'Fred', 'Scone', 'Staff', 'f@s.com', '$2y$10$GEfyc5IJlbmeeRk6UDSpG.GjwlzBRupOnNdv/yaSDm8TXUJ0Xtq9O', 'Deactivated'),
(9, 'Shei', 'Om', 'Cashier', 's@c', '$2y$10$0E71s3s2s1OutYx2in0GuuIiUIOGyhavkm7uTkHlUKOS0glBOFuH6', 'Active'),
(10, 'Kat', 'Bahogbilat', 'Manager', 'k@bb', '$2y$10$WtCfG.uSNVuKEpiC9hJCyuB3KRMnzeolcAbCZytQSyue5DsiFT392', 'Active'),
(11, 'Felix', 'Xqc', 'Cashier', 'f@tw', '$2y$10$Fq98yDMvQLzc463TdJpajOtrBGBL069gIsnCTM4Sb6zKTBFp8wN2m', 'Active'),
(12, 'Janice', 'Chang', 'Manager', 'tierneysewali@gmail.com', '$2y$10$LJ.gW61pr85fPtHBFMCTNOoMn1y2JFWHH5Ci6IpvPGp98rvQW7dfS', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
