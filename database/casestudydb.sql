-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2020 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `casestudydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id_customer`, `name`, `phone`, `gmail`, `address`) VALUES
(1, 'Tien', '565656', 'tien@ctm.com', '28 nguyen tri phuong'),
(2, 'Ti', '212124', 'ti@ctm.com', '29 bui thi xuan'),
(3, 'Tung', '8765433', 'tung@ctm.com', '30 Le Loi'),
(4, 'Teo', '238745', 'teo@ctm.com', '31 Hung Vuong'),
(5, 'Tuan', '345475', 'tuan@ctm.com', '32 Ha Noi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliver`
--

CREATE TABLE `deliver` (
  `orderNumber` int(11) NOT NULL,
  `id_shiper` int(11) NOT NULL,
  `requiredDate` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `deliver`
--

INSERT INTO `deliver` (`orderNumber`, `id_shiper`, `requiredDate`, `status`) VALUES
(1, 6, '2020-02-18', 'shipped'),
(2, 2, '2020-02-21', 'shipped'),
(3, 7, '2020-02-19', 'shipped'),
(4, 3, '2020-02-20', 'shipped'),
(5, 1, '2020-02-19', 'shipped'),
(6, 9, '2020-02-18', 'shipped'),
(7, 4, '2020-02-19', 'shipped'),
(8, 10, '2020-02-21', 'shipped');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `orderNumber` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `productCode` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `priceEach` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`orderNumber`, `id_customer`, `productCode`, `date`, `quantity`, `priceEach`) VALUES
(1, 1, 11, '2020-02-17', 1, '5000'),
(2, 1, 2, '2020-02-20', 1, '999'),
(3, 2, 3, '2020-02-18', 1, '50'),
(4, 2, 4, '2020-02-19', 1, '50'),
(5, 4, 9, '2020-02-17', 1, '500'),
(6, 4, 1, '2020-02-17', 2, '10'),
(7, 5, 7, '2020-02-18', 2, '500'),
(8, 3, 12, '2020-02-20', 20, '20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id_customer` int(11) NOT NULL,
  `paymentDate` date NOT NULL,
  `amounts` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id_customer`, `paymentDate`, `amounts`) VALUES
(1, '2020-02-17', '5000.00'),
(1, '2020-02-20', '999.00'),
(2, '2020-02-18', '50.00'),
(2, '2020-02-19', '50.00'),
(4, '2020-02-17', '520.00'),
(5, '2020-02-18', '1000.00'),
(3, '2020-02-20', '400.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productCode` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantityInStock` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productCode`, `productName`, `width`, `height`, `material`, `description`, `price`, `quantityInStock`) VALUES
(1, 'Pikachu_Model', '10', 10, 'plastic', 'The most favorite pokemon', '10.00', 10000),
(2, 'Gengar_Model                                      ', '25', 25, 'gold', 'Ghost Pokemon', '999.00', 3),
(3, 'Groudon_Model', '30', 50, 'plastic', 'A lengend Pokemon', '50.00', 3000),
(4, 'Kyogre_Model', '50', 30, 'plastic', 'A Legendary Pokemon', '50.00', 3000),
(5, 'Hoopa_Model', '50', 50, 'plastic', NULL, '50.00', 100),
(6, 'Arceus_Model', '80', 50, 'silver', 'Lord of Pokemon', '999.00', 10),
(7, 'Dialga_Model', '60', 60, 'silver', '', '500.00', 100),
(8, 'Palkia_Model', '60', 60, '60', NULL, '500.00', 100),
(9, 'Giratina', '60', 60, 'silver', NULL, '500.00', 100),
(10, 'zoroark_Model', '30', 30, 'plastic', NULL, '111.00', 10),
(11, 'Darkrai_Model', '100', 100, 'gold', 'a unique pokemon', '5000.00', 3),
(12, 'Charmander_Model', '10', 10, 'plastic', NULL, '20.00', 3000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shiper`
--

CREATE TABLE `shiper` (
  `id_shiper` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `timework` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shiper`
--

INSERT INTO `shiper` (`id_shiper`, `name`, `age`, `phone`, `email`, `timework`) VALUES
(1, 'Sang', 20, '123456', 'sang@dz.com', '8h-12h'),
(2, 'Nguyen', 18, '122334', 'nguyen@dz.com', '9h-11h & 1h-3h'),
(3, 'Khoi', 23, '321232', 'khoi7@dz.com', '8h-12 & 1h-5h'),
(4, 'Tam', 24, '324353', 'tam@dz.com', '7h-13h'),
(5, 'Hoang', 27, '121212', 'hoang@dz.com', '13h-17h'),
(6, 'Hien', 23, '876543', 'hien@dz.com', '13h-17h'),
(7, 'Linh', 25, '765762', 'linh@xg.com', '8h-17h'),
(8, 'Thuat', 22, '121213', 'thuat@dz.com', '13h-17h'),
(9, 'Nam', 23, '747474', 'nam@pd.com', '9h-15h'),
(10, 'Phuong', 27, '343434', 'phuong@pro.com', '8h-17h');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `deliver`
--
ALTER TABLE `deliver`
  ADD KEY `id_shiper` (`id_shiper`),
  ADD KEY `orderNumber` (`orderNumber`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `productCode` (`productCode`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`);

--
-- Chỉ mục cho bảng `shiper`
--
ALTER TABLE `shiper`
  ADD PRIMARY KEY (`id_shiper`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `orderNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `shiper`
--
ALTER TABLE `shiper`
  MODIFY `id_shiper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `deliver`
--
ALTER TABLE `deliver`
  ADD CONSTRAINT `deliver_ibfk_1` FOREIGN KEY (`id_shiper`) REFERENCES `shiper` (`id_shiper`),
  ADD CONSTRAINT `deliver_ibfk_2` FOREIGN KEY (`orderNumber`) REFERENCES `order` (`orderNumber`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`productCode`) REFERENCES `products` (`productCode`);

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
