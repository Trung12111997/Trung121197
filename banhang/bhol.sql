-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 28, 2019 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bhol`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `mabanner` int(11) NOT NULL,
  `tenbanner` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhBN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoisua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkm`
--

CREATE TABLE `ctkm` (
  `maKM` int(11) NOT NULL,
  `tenKM` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhKM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlKM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitietCTKM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoisua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctkm`
--

INSERT INTO `ctkm` (`maKM`, `tenKM`, `hinhanhKM`, `urlKM`, `chitietCTKM`, `nguoitao`, `ngaytao`, `nguoisua`, `ngaysua`) VALUES
(1, '', 'public/images/cms_banner_1.jpg', '', '', '', '0000-00-00', '', '0000-00-00'),
(2, '', 'public/images/cms_banner_2.jpg', '', '', '', '0000-00-00', '', '0000-00-00'),
(3, '', 'public/images/cms_banner_3.jpg', '', '', '', '0000-00-00', '', '0000-00-00'),
(4, '', 'public/images/cms_banner_4.jpg', '', '', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmmn`
--

CREATE TABLE `dmmn` (
  `maDMMN` int(11) NOT NULL,
  `tenDMMN` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmmn`
--

INSERT INTO `dmmn` (`maDMMN`, `tenDMMN`) VALUES
(1, 'VEGETABLES'),
(2, 'FRUITS'),
(3, 'RICE & GRAINS'),
(4, 'POLENTA'),
(5, 'BRUNO PASTA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmsp`
--

CREATE TABLE `dmsp` (
  `maDMSP` int(11) NOT NULL,
  `tenDMSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmsp`
--

INSERT INTO `dmsp` (`maDMSP`, `tenDMSP`) VALUES
(1, 'VEGETABLES 1'),
(2, 'FRUITS 1'),
(3, 'RICE & GRAINS 1'),
(4, 'POLENTA 1'),
(5, 'BRUNO PASTA 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmtt`
--

CREATE TABLE `dmtt` (
  `maDMTT` int(11) NOT NULL,
  `tenDMTT` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmtt`
--

INSERT INTO `dmtt` (`maDMTT`, `tenDMTT`) VALUES
(1, 'OUR BLOG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mn`
--

CREATE TABLE `mn` (
  `maMN` int(11) NOT NULL,
  `tenMN` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkMN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maDMMN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `maslider` int(11) NOT NULL,
  `tenslider` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudeSL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhSL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitaoSL` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytaoSL` date NOT NULL,
  `nguoisuaSL` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysuaSL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`maslider`, `tenslider`, `tieudeSL`, `hinhanhSL`, `nguoitaoSL`, `ngaytaoSL`, `nguoisuaSL`, `ngaysuaSL`) VALUES
(1, '', '', 'public/images/main-banner1.jpg', '', '0000-00-00', '', '0000-00-00'),
(2, '', '', 'public/images/main-banner2.jpg', '', '0000-00-00', '', '0000-00-00'),
(3, '', '', 'public/images/main-banner3.jpg', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp`
--

CREATE TABLE `sp` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `motaSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaynhapSP` date NOT NULL,
  `hansdSP` date NOT NULL,
  `noisxSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giabanSP` float NOT NULL,
  `gianhapSP` float NOT NULL,
  `giakmSP` float NOT NULL,
  `nguoitao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoisua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysua` date NOT NULL,
  `urlSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maDMSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sp`
--

INSERT INTO `sp` (`maSP`, `tenSP`, `hinhanhSP`, `motaSP`, `noidungSP`, `ngaynhapSP`, `hansdSP`, `noisxSP`, `giabanSP`, `gianhapSP`, `giakmSP`, `nguoitao`, `ngaytao`, `nguoisua`, `ngaysua`, `urlSP`, `maDMSP`) VALUES
(2, 'SAMPLE LOREM IPSUM', 'public/images/18_1_4.jpg', '1111111111111111111', '111', '2019-07-09', '2019-07-09', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 1),
(3, 'BANANA CHIPS', 'public/images/9_1_4.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 1),
(4, 'CUCUMBER JUICE', 'public/images/16_2_2.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 1),
(5, 'ROSE FLOWER', 'public/images/15_2_3.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 1),
(8, 'GREEN BANANA CHIPS', 'public/images/20_1_.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 3),
(9, 'MADE IN ITALY', 'public/images/19_1_3.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 3),
(10, 'ORANGE FRUITS', 'public/images/14_24.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 3),
(11, 'TOMATO CHIPS', 'public/images/1_1_7.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 5),
(12, 'GREEN APPLE', 'public/images/12_25.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 5),
(13, 'KASHMIR APPLE', 'public/images/13_1_17.jpg', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieusp`
--

CREATE TABLE `thuonghieusp` (
  `maTHSP` int(11) NOT NULL,
  `tenTHSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhTHSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlTHSP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoisua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieusp`
--

INSERT INTO `thuonghieusp` (`maTHSP`, `tenTHSP`, `hinhanhTHSP`, `urlTHSP`, `nguoitao`, `ngaytao`, `nguoisua`, `ngaysua`) VALUES
(1, '', 'public/images/gl1.png', '', '', '0000-00-00', '', '0000-00-00'),
(2, '', 'public/images/gl2.png', '', '', '0000-00-00', '', '0000-00-00'),
(3, '', 'public/images/gl3.png', '', '', '0000-00-00', '', '0000-00-00'),
(4, '', 'public/images/gl6.png', '', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt`
--

CREATE TABLE `tt` (
  `maTT` int(11) NOT NULL,
  `tenTT` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlTT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydangTT` date NOT NULL,
  `tieudeTT` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motaTT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhTT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungTT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoitao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoisua` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysua` date NOT NULL,
  `maDMTT` int(11) NOT NULL,
  `binhluanTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tt`
--

INSERT INTO `tt` (`maTT`, `tenTT`, `urlTT`, `ngaydangTT`, `tieudeTT`, `motaTT`, `hinhanhTT`, `noidungTT`, `tacgia`, `nguoitao`, `ngaytao`, `nguoisua`, `ngaysua`, `maDMTT`, `binhluanTT`) VALUES
(3, 'THERE ARE MANY VARIATION OF PASSAGES OF LOREM', '', '2019-07-15', 'THERE ARE MANY VARIATION OF PASSAGES OF LOREM', 'Vestibulum ante ipsum primis urna risus suscipit leo Cras eget augue.', 'public/images/blog1.jpg', 'Vestibulum ante ipsum primis urna risus suscipit leo Cras eget augue.', '', '', '0000-00-00', '', '0000-00-00', 1, 0),
(4, 'THERE ARE MANY VARIATION OF PASSAGES OF LOREM', '', '2019-07-26', 'THERE ARE MANY VARIATION OF PASSAGES OF LOREM', 'Vestibulum ante ipsum primis urna risus suscipit leo Cras eget augue.', 'public/images/blog2.jpg', 'Vestibulum ante ipsum primis urna risus suscipit leo Cras eget augue.', '', '', '0000-00-00', '', '0000-00-00', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`mabanner`);

--
-- Chỉ mục cho bảng `ctkm`
--
ALTER TABLE `ctkm`
  ADD PRIMARY KEY (`maKM`);

--
-- Chỉ mục cho bảng `dmmn`
--
ALTER TABLE `dmmn`
  ADD PRIMARY KEY (`maDMMN`);

--
-- Chỉ mục cho bảng `dmsp`
--
ALTER TABLE `dmsp`
  ADD PRIMARY KEY (`maDMSP`);

--
-- Chỉ mục cho bảng `dmtt`
--
ALTER TABLE `dmtt`
  ADD PRIMARY KEY (`maDMTT`);

--
-- Chỉ mục cho bảng `mn`
--
ALTER TABLE `mn`
  ADD PRIMARY KEY (`maMN`),
  ADD KEY `maMN` (`maMN`),
  ADD KEY `maDMMN` (`maDMMN`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`maslider`);

--
-- Chỉ mục cho bảng `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maSP` (`maSP`),
  ADD KEY `maDMSP` (`maDMSP`);

--
-- Chỉ mục cho bảng `thuonghieusp`
--
ALTER TABLE `thuonghieusp`
  ADD PRIMARY KEY (`maTHSP`);

--
-- Chỉ mục cho bảng `tt`
--
ALTER TABLE `tt`
  ADD PRIMARY KEY (`maTT`),
  ADD KEY `maDMTT` (`maDMTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `mabanner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ctkm`
--
ALTER TABLE `ctkm`
  MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dmmn`
--
ALTER TABLE `dmmn`
  MODIFY `maDMMN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dmsp`
--
ALTER TABLE `dmsp`
  MODIFY `maDMSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dmtt`
--
ALTER TABLE `dmtt`
  MODIFY `maDMTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `mn`
--
ALTER TABLE `mn`
  MODIFY `maMN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `maslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sp`
--
ALTER TABLE `sp`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `thuonghieusp`
--
ALTER TABLE `thuonghieusp`
  MODIFY `maTHSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tt`
--
ALTER TABLE `tt`
  MODIFY `maTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `mn`
--
ALTER TABLE `mn`
  ADD CONSTRAINT `mn_ibfk_1` FOREIGN KEY (`maDMMN`) REFERENCES `dmmn` (`maDMMN`);

--
-- Các ràng buộc cho bảng `sp`
--
ALTER TABLE `sp`
  ADD CONSTRAINT `sp_ibfk_1` FOREIGN KEY (`maDMSP`) REFERENCES `dmsp` (`maDMSP`);

--
-- Các ràng buộc cho bảng `tt`
--
ALTER TABLE `tt`
  ADD CONSTRAINT `tt_ibfk_1` FOREIGN KEY (`maDMTT`) REFERENCES `dmtt` (`maDMTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
