-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 30, 2021 lúc 09:49 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vitinhtt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

DROP TABLE IF EXISTS `baiviet`;
CREATE TABLE IF NOT EXISTS `baiviet` (
  `mabv` int(10) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `madmbv` int(10) NOT NULL,
  `mand` int(10) NOT NULL,
  `ngaydang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mabv`),
  KEY `madmbv` (`madmbv`),
  KEY `mand` (`mand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

DROP TABLE IF EXISTS `chitietdh`;
CREATE TABLE IF NOT EXISTS `chitietdh` (
  `mactdh` int(10) NOT NULL AUTO_INCREMENT,
  `masp` int(10) NOT NULL,
  `madh` int(10) NOT NULL,
  `giaban` double NOT NULL,
  `soluong` int(10) NOT NULL,
  PRIMARY KEY (`mactdh`),
  KEY `masp` (`masp`),
  KEY `madh` (`madh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucbv`
--

DROP TABLE IF EXISTS `danhmucbv`;
CREATE TABLE IF NOT EXISTS `danhmucbv` (
  `madmbv` int(10) NOT NULL AUTO_INCREMENT,
  `cap` tinyint(1) NOT NULL,
  `ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `madmbvcha` int(10) DEFAULT NULL,
  PRIMARY KEY (`madmbv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

DROP TABLE IF EXISTS `danhmucsp`;
CREATE TABLE IF NOT EXISTS `danhmucsp` (
  `madmsp` int(10) NOT NULL AUTO_INCREMENT,
  `cap` tinyint(1) NOT NULL,
  `ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `madmspcha` int(10) DEFAULT NULL,
  PRIMARY KEY (`madmsp`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`madmsp`, `cap`, `ten`, `madmspcha`) VALUES
(1, 0, 'PC', NULL),
(2, 1, 'T&T', 1),
(3, 0, 'Laptop', NULL),
(4, 1, 'Acer', 3),
(5, 1, 'Asus', 3),
(6, 1, 'Dell', 3),
(7, 1, 'Msi', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` int(10) NOT NULL AUTO_INCREMENT,
  `ngaydat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(1) NOT NULL,
  `hinhthucthanhtoan` tinyint(1) NOT NULL,
  `tongtien` double NOT NULL,
  `mand` int(10) NOT NULL,
  `ghichu` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`madh`),
  KEY `mand` (`mand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `mand` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(1) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  PRIMARY KEY (`mand`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`mand`, `email`, `matkhau`, `hoten`, `sodienthoai`, `diachi`, `loai`, `trangthai`) VALUES
(2, 'toxinbe1809@gmail.com', '51eb9e951386f3af4fa57fc73881feeb', '', '', '', 0, 1),
(3, 'dsadsa@gmail.com', '51eb9e951386f3af4fa57fc73881feeb', 'Nguyễn Hoàng Tiến', '0706805780', '180 Cao Lỗ, Phường 4, Quận 8, TP.HCM', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(10) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `madmsp` int(10) NOT NULL,
  `baohanh` tinyint(2) NOT NULL,
  `soluong` int(10) NOT NULL,
  `dongia` double NOT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masp`),
  KEY `madmsp` (`madmsp`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `madmsp`, `baohanh`, `soluong`, `dongia`, `mota`, `hinh`) VALUES
(5, 'PC Gaming', 2, 12, 5, 10000000, 'PC Gaming dsadsadsa', 'pc-gaming.jpg'),
(6, 'PC Äá»“ Há»a', 2, 12, 7, 12000000, 'PC Äá»“ Há»a dsadsadsewqewqewqewq', 'pc-dohoa.jpg'),
(7, 'PC VÄƒn PhÃ²ng', 2, 6, 3, 7500000, 'PC VÄƒn PhÃ²ng cxzcxzcxz', 'pc-vanphong.jpg'),
(8, 'Laptop Láº­p TrÃ¬nh', 5, 24, 8, 12500000, 'Laptop Láº­p TrÃ¬nh jhgfdhgfshds', 'laptop-3.jpg'),
(9, 'Laptop Gaming', 7, 24, 4, 18500000, 'Laptop Gaming dsa321321ewqewq', 'laptop-5.jpg');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`madmbv`) REFERENCES `danhmucbv` (`madmbv`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`);

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madmsp`) REFERENCES `danhmucsp` (`madmsp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
