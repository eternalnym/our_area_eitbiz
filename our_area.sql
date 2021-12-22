-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_area`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply_now`
--

CREATE TABLE `tbl_apply_now` (
  `id` int(11) NOT NULL,
  `residence_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `residence_association_details_form` int(11) NOT NULL DEFAULT 0,
  `created_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apply_now`
--

INSERT INTO `tbl_apply_now` (`id`, `residence_name`, `email`, `phone`, `residence_association_details_form`, `created_date`) VALUES
(1, 'xyx', 'abc@gmail.com', '1234567890', 0, '2021-12-20 08:02:58'),
(2, 'abc', 'ashu@gmail.com', '1234567890', 0, '2021-12-20 08:35:22'),
(3, 'dsjfbjb', 'abc@gmail.com', '764782364823', 0, '2021-12-20 09:13:46'),
(4, 'abc', 'ashu@gmail.com', '1234567890', 0, '2021-12-20 09:31:06'),
(5, '', '', '', 0, '2021-12-20 10:20:40'),
(6, '', '', '', 0, '2021-12-20 10:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `username`, `pswd`) VALUES
(1, '', ''),
(2, '', '$2y$10$fHMb/wxtgQH3D7yX58DaPOJLGrujD5Uu8LLnOicDv.qHEAXH9xmRG'),
(3, 'ashu', '$2y$10$zUoS1ALoFLH6sbE145K/..0v.ciffJPOrXz6/pvwXKWEhuXtC82tC'),
(4, 'jahid', '$2y$10$tZ6BlJhmX7uOyZVsRHIsQ.Rcyuc0rd04LeUi7Dhx5i5gAd1vVMjf2'),
(5, 'pqr', '$2y$10$0xz2LQ7Pqe8QYOFbTok4ZOcDhl/HpJH1ehL4xlfcH9uaprdGDacNK'),
(6, 'pqr', '$2y$10$.HekO/7ecmAlQvHq3GE.xuJ4RGEcfZHR3GAV5k1MuAZSzrDISCoIC'),
(7, 'ashu', '$2y$10$OzcfJ1/87PnAUEk/nop.9OLblbyeesZ6dpdvCbzajF6bQY1T9knEu'),
(8, 'kjfkjahsf', '$2y$10$Rxiy6V4EIBSZYYTz260R4Ob2do8Xq0.Dx506wYvMJ0UfVlDMIZN6i'),
(9, 'mnsbfab', '$2y$10$qmvDHdjzUrAzJoHancpuYO7XF146kKnICm4p2JiMIbHwN6FPHYtHi'),
(10, 'jkdbfkjabsj', '$2y$10$4MIK8z0.Ec7EP96yhSn5VuBGmOIoJgKQFpo7K/Kd71.LyyJuM3cRG'),
(11, 'ashu', '$2y$10$x3E4hgOmCacaoyDVFdxbq.SAjHI9kF84WY0Ego.hJ9/CBuHR4EAaG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apply_now`
--
ALTER TABLE `tbl_apply_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply_now`
--
ALTER TABLE `tbl_apply_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
