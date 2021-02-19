-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 12:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `nameproduct` varchar(25) NOT NULL,
  `titleproduct` varchar(225) NOT NULL,
  `images` text NOT NULL,
  `stock` text NOT NULL,
  `price` text NOT NULL,
  `weight` text NOT NULL,
  `wide` text NOT NULL,
  `long` text NOT NULL,
  `high` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `nameproduct`, `titleproduct`, `images`, `stock`, `price`, `weight`, `wide`, `long`, `high`) VALUES
(13, 'customer customer', '【COMELY】ดอกกุหลาบฟอยล์สีท', 'hghgghjgh', ' 6632c14d84c59a4d07a40008776e049b.jpeg ', '100 ', ' 129 ', ' 0.5', ' 0.2 ', ' 0.2 ', ' 0.2 '),
(14, 'customer customer', 'ขายของ ', 'ข้อมูลเฉพาะของ 【COMELY】ดอกกุหลาบฟอยล์สีทอง24K คริสตัลโรส ดอกกุหลาบLED โคมไฟLED ของขวัญวันวาเลนไทน์ วันคริสต์มาสวั วันแต่งงาน วันเกิด เทศกาล พร้อมกล่อง Crystal Rose แบรนด์comelySKU1991772434_TH-6389768574MaterialพลาสติกStyleMo', ' ลิควิด.png ', '100 ', ' 159 ', ' 0.5', ' 0.2 ', ' 0.2 ', ' 0.2 '),
(15, 'customer customer', 'ขายของ ', 'ข้อมูลเฉพาะของ 【COMELY】ดอกกุหลาบฟอยล์สีทอง24K คริสตัลโรส ดอกกุหลาบLED โคมไฟLED ของขวัญวันวาเลนไทน์ วันคริสต์มาสวั วันแต่งงาน วันเกิด เทศกาล พร้อมกล่อง Crystal Rose แบรนด์comelySKU1991772434_TH-6389768574MaterialพลาสติกStyleMo', ' ราคาพิเศษ (2).png ', '100 ', ' 129 ', ' 0.2', ' 0.2 ', ' 0.2 ', ' 0.2 '),
(16, 'customer customer', 'เสื้อเชิ้ตคอจีน ผ้า Oxfor', 'เสื้อเชิ้ต คอจีน ผ้า Oxford ทรง Slim  ?เสื้อเชิ้ตคอจีน คัตติ้งเนี๊ยบ ผ้า oxford ใส่ได้ทั้งชายและหญิง ใส่คู่กันยิ่งสวย ใส่ทำงานก็ได้ ใส่เที่ยวก็ดี  ????ตัดรอบ5 ทุ่ม?กดสั่งก่อน 5 ทุ่มส่งวันถัดไปจ้า ส่งของวัน จันทร์-ศุกร์ *สั่งซ', ' กระเป๋า.png ', '100 ', ' 159 ', ' 0.5', ' 0.2 ', ' 0.2 ', ' 0.2 '),
(17, 'customer customer', 'เสื้อเชิ้ตคอจีน ผ้า Oxfor', 'เสื้อเชิ้ต คอจีน ผ้า Oxford ทรง Slim  ?เสื้อเชิ้ตคอจีน คัตติ้งเนี๊ยบ ผ้า oxford ใส่ได้ทั้งชายและหญิง ใส่คู่กันยิ่งสวย ใส่ทำงานก็ได้ ใส่เที่ยวก็ดี  ????ตัดรอบ5 ทุ่ม?กดสั่งก่อน 5 ทุ่มส่งวันถัดไปจ้า ส่งของวัน จันทร์-ศุกร์ *สั่งซ', ' kisspng-stationery-office-supplies-stock-photography-schoo-liceo-embajadores-del-rey-nosotros-5d2e062f33fa05.0450499815632973272129.png ', '100 ', ' 39 ', ' 0.2', ' 0.2 ', ' 0.2 ', ' 0.2 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
