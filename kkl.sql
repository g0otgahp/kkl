-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 11:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `billing_group` varchar(40) NOT NULL,
  `billing_code` varchar(50) NOT NULL,
  `shipment_code` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `billing_datepay` date NOT NULL,
  `billing_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `billing_date`, `billing_group`, `billing_code`, `shipment_code`, `customer_id`, `billing_datepay`, `billing_status`) VALUES
(8, '2017-04-24', '2017-04', '20170402', '', 1, '0000-00-00', 0),
(9, '2017-04-24', '2017-04', '20170402', '', 1, '0000-00-00', 0),
(10, '2017-04-24', '2017-04', '20170403', '', 1, '0000-00-00', 0),
(11, '2017-04-24', '2017-04', '20170404', '234234', 1, '2017-04-25', 3),
(12, '2017-04-24', '2017-04', '20170404', '2432434', 1, '2017-04-25', 3),
(13, '2017-04-24', '2017-04', '20170404', '224234', 1, '2017-04-25', 3),
(14, '2017-04-25', '2017-04', '20170407', '3523543', 1, '2017-04-25', 3),
(15, '2017-04-25', '2017-04', '20170407', '21ee23', 1, '2017-04-25', 3),
(16, '2017-04-28', '2017-04', '20170409', 'edfrgthy', 1, '2017-04-28', 3),
(17, '2017-04-28', '2017-04', '20170409', '3456', 1, '2017-04-28', 3),
(18, '2017-05-31', '2017-05', '20170501', '', 5, '0000-00-00', 0),
(19, '2017-05-31', '2017-05', '20170501', '', 5, '0000-00-00', 0),
(20, '2017-05-31', '2017-05', '20170503', 'KKL190517', 5, '2017-05-31', 3),
(21, '2017-05-31', '2017-05', '20170503', 'KKL210617', 5, '2017-05-31', 3),
(22, '2017-06-01', '2017-06', 'IN001-0660', 'KKL220617', 5, '2017-06-01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_type` int(11) NOT NULL,
  `car_category` int(11) NOT NULL,
  `car_label_upper` varchar(50) NOT NULL,
  `car_label_under` varchar(50) NOT NULL,
  `car_employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_type`, `car_category`, `car_label_upper`, `car_label_under`, `car_employee`) VALUES
(1, 2, 2, 'กส-2444', 'กส-2444', 4),
(2, 2, 1, 'กส-2450', 'กส-2451', 3),
(5, 1, 2, 'saddadsfsdf', 'xcsdsadasd', 3),
(7, 1, 1, 'aaaa', 'aaaa', 4);

-- --------------------------------------------------------

--
-- Table structure for table `car_category`
--

CREATE TABLE `car_category` (
  `car_category_id` int(11) NOT NULL,
  `car_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_category`
--

INSERT INTO `car_category` (`car_category_id`, `car_category_name`) VALUES
(1, 'รถภายใน'),
(2, 'รถร่วม');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `car_type_id` int(11) NOT NULL,
  `car_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`car_type_id`, `car_type_name`) VALUES
(1, 'สิบล้อพวง'),
(2, 'เทรลเลอร์คอก'),
(3, 'เทรลเลอร์พื้นเรียบ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_tel` varchar(15) NOT NULL,
  `customer_fax` varchar(15) NOT NULL,
  `customer_address1` text NOT NULL,
  `customer_address2` text NOT NULL,
  `customer_company` varchar(300) NOT NULL,
  `customer_tax` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_mail`, `customer_tel`, `customer_fax`, `customer_address1`, `customer_address2`, `customer_company`, `customer_tax`) VALUES
(1, 'ชัยวัฒน์ ชยพาณิชย์สกุล', 'ชัยวัฒน์ ชยพาณิชย์สกุล', '0845081615', '-', '989/121 พิมานคอนโดปาร์ค เฟส 2', '989/121 พิมานคอนโดปาร์ค เฟส 2', 'บจก. อิสระกรุ๊ป', '1480500136411'),
(4, 'ลูกค้าคนที่3', 'fdg@kk.com', '089774532', '-', 'ขอนแก่น', 'ขอนแก่น', 'บจก.BB', '12345678900'),
(5, 'ปลาวาฬ ใจดี', 'tuna_sang@hotmail.com', '0804805243', '04480808080', '30/8', '30/8', 'ปลาวาฬใจดี จำกัด', '84648654865');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `district_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `province_id`, `district_name`, `district_detail`) VALUES
(1, 1, 'aaaaaaaa', 'ิbbbbbb'),
(2, 2, 'aaaaaa', 'bbbb'),
(3, 1, 'sss', 'ffffff'),
(4, 1, 'hdyhdty', 'uyghuik'),
(5, 3, 'ในเมือง', 'ในเมือง');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_idcard` varchar(15) NOT NULL,
  `employee_tel` varchar(15) NOT NULL,
  `employee_birthday` date NOT NULL,
  `employee_address` text NOT NULL,
  `employee_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_idcard`, `employee_tel`, `employee_birthday`, `employee_address`, `employee_status`) VALUES
(3, 'สมชาย ประธาอุดม', '124758875646', '0845748572', '0000-00-00', '989/121', 0),
(4, 'ปลาวาฬ ใจดี', '1409901128441', '0804805243', '2017-02-19', 'หลัง 7-11', 0),
(5, 'สมชาย', '14099011111', '0801111125', '2017-05-01', '333/444', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_detail`) VALUES
(2, 'หลอด LED T8 ขนาด 18Watt', 'หลอด LED T8 ขนาด 18Watt11'),
(3, 'หลอดไฟ LED Bulb รุ่น Premium ขนาด 9W', NULL),
(4, 'นมผง 40c', 'นมผง 40c');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL,
  `province_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `province_detail`) VALUES
(1, 'ขอนแก่น', 'ขอนแก่น'),
(2, 'ชลบุรี', 'ชลบุรี'),
(3, 'ชัยภูมิ', 'ชัยภูมิ');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `routes_id` int(11) NOT NULL,
  `routes_customer` int(11) NOT NULL,
  `routes_start` int(11) NOT NULL,
  `routes_end` int(11) NOT NULL,
  `routes_product` int(11) NOT NULL,
  `routes_price` float NOT NULL,
  `routes_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`routes_id`, `routes_customer`, `routes_start`, `routes_end`, `routes_product`, `routes_price`, `routes_detail`) VALUES
(1, 1, 1, 2, 2, 2000, '-'),
(2, 1, 1, 2, 3, 6000, '-'),
(3, 5, 5, 5, 2, 3000, 'ขนส่งวันนี้');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `shipment_date_make` date NOT NULL,
  `shipment_date` date NOT NULL,
  `shipment_code` varchar(50) NOT NULL,
  `shipment_car` int(11) NOT NULL,
  `shipment_mile_start` float NOT NULL,
  `shipment_mile_end` float NOT NULL,
  `shipment_mile_all` float NOT NULL,
  `shipment_line_start` int(11) NOT NULL,
  `shipment_line_end` int(11) NOT NULL,
  `shipment_customer` int(11) NOT NULL,
  `shipment_product` int(11) NOT NULL,
  `shipment_weight` float NOT NULL,
  `shipment_pay` float NOT NULL DEFAULT '0',
  `routes` int(11) NOT NULL,
  `shipment_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `shipment_date_make`, `shipment_date`, `shipment_code`, `shipment_car`, `shipment_mile_start`, `shipment_mile_end`, `shipment_mile_all`, `shipment_line_start`, `shipment_line_end`, `shipment_customer`, `shipment_product`, `shipment_weight`, `shipment_pay`, `routes`, `shipment_status`) VALUES
(2, '0000-00-00', '2017-02-08', '3523543', 2, 324, 344, 3244, 2, 1, 1, 2, 23234, 3243, 1, 2),
(3, '0000-00-00', '2017-04-11', '234234', 2, 34234, 234234, 34, 1, 2, 1, 2, 244, 24234, 1, 2),
(4, '0000-00-00', '2017-04-20', '234345', 1, 1000, 2000, 1000, 1, 2, 1, 2, 234, 234344, 1, 2),
(5, '0000-00-00', '2017-04-20', '2432434', 2, 324234, 34234, 3443, 2, 1, 1, 2, 3432, 3243, 1, 2),
(6, '0000-00-00', '2017-04-27', '224234', 2, 234234, 234234, 234234, 2, 1, 1, 2, 324, 324243, 1, 1),
(10, '0000-00-00', '2017-04-29', 'edfrgthy', 5, 2345, 3456, 23456, 1, 2, 1, 3, 3432, 3456, 1, 1),
(11, '0000-00-00', '2017-04-30', '3456', 5, 43535, 43543, 0, 1, 2, 1, 3, 454, 4546, 1, 1),
(13, '2017-05-30', '2017-05-30', 'KKL235617', 1, 0, 0, 0, 0, 0, 1, 2, 0, 2000, 1, 1),
(14, '2017-05-31', '2017-05-31', 'KKL2017000851', 2, 0, 0, 0, 0, 0, 1, 3, 0, 6000, 1, 2),
(15, '2017-05-31', '2017-05-31', 'KKL170531120957', 1, 0, 0, 0, 0, 0, 1, 3, 0, 6000, 1, 1),
(16, '2017-05-31', '2017-05-24', 'KKL1617', 2, 0, 0, 0, 0, 0, 1, 2, 0, 2000, 1, 1),
(17, '2017-05-31', '2017-05-25', 'KKL173117', 1, 0, 0, 0, 0, 0, 1, 2, 0, 2000, 1, 2),
(18, '2017-05-31', '2017-05-20', 'KKL180517', 2, 0, 0, 0, 0, 0, 1, 3, 0, 6000, 1, 1),
(19, '2017-05-03', '2017-05-31', 'KKL190517', 1, 0, 0, 0, 0, 0, 5, 2, 0, 3000, 1, 2),
(20, '2017-05-31', '2017-06-01', 'KKL200517', 5, 0, 0, 0, 0, 0, 1, 2, 0, 2000, 1, 2),
(21, '2017-06-01', '2017-06-02', 'KKL210617', 7, 0, 0, 0, 0, 0, 5, 2, 0, 3000, 3, 2),
(22, '2017-06-01', '2017-06-01', 'KKL220617', 7, 0, 0, 0, 0, 0, 5, 2, 0, 3000, 3, 2),
(23, '2017-06-01', '2017-06-03', 'KKL230617', 7, 0, 0, 0, 0, 0, 1, 2, 0, 2000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_status`
--

CREATE TABLE `shipment_status` (
  `shipment_status_id` int(11) NOT NULL,
  `shipment_status_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipment_status`
--

INSERT INTO `shipment_status` (`shipment_status_id`, `shipment_status_value`) VALUES
(1, 'ยังไม่ขนส่งสินค้า'),
(2, 'ขนส่งสินค้าแล้ว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_category`
--
ALTER TABLE `car_category`
  ADD PRIMARY KEY (`car_category_id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`car_type_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`routes_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- Indexes for table `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD PRIMARY KEY (`shipment_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `car_category`
--
ALTER TABLE `car_category`
  MODIFY `car_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `car_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `routes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `shipment_status`
--
ALTER TABLE `shipment_status`
  MODIFY `shipment_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
