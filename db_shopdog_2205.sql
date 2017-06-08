-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2017 lúc 04:30 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_shopdog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('khiem', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucsp`
--

CREATE TABLE `tbl_danhmucsp` (
  `ten` varchar(20) COLLATE utf8_bin NOT NULL,
  `gia` decimal(3,0) NOT NULL,
  `ngaynhap` date NOT NULL,
  `anh` varchar(20) COLLATE utf8_bin NOT NULL,
  `soluong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucsp`
--

INSERT INTO `tbl_danhmucsp` (`ten`, `gia`, `ngaynhap`, `anh`, `soluong`) VALUES
('Alaska Small', '3', '2016-12-30', 'alaska_nho_den.jpg', 20),
('Becgie Small', '4', '2017-01-01', 'becgie_nho.jpg', 10),
('Poodle Teacup', '8', '2017-01-01', 'poo_cup.jpg', 10),
('test', '3', '0000-00-00', 'non', 5),
('test2', '10', '2017-05-01', 'non', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucsp1`
--

CREATE TABLE `tbl_danhmucsp1` (
  `ID` tinyint(4) NOT NULL,
  `tensp` varchar(20) NOT NULL,
  `gia` decimal(3,1) NOT NULL,
  `ngaynhap` date NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `anh` char(20) NOT NULL,
  `trangthai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucsp1`
--

INSERT INTO `tbl_danhmucsp1` (`ID`, `tensp`, `gia`, `ngaynhap`, `soluong`, `anh`, `trangthai`) VALUES
(1, 'Alaska Big', '10.0', '2017-01-10', 20, 'alaska_dai.jpg', 1),
(2, 'Poodle Teacup', '8.0', '2017-05-16', 1, 'becgie_nho.jpg', 1),
(3, 'Dobeman Big', '12.0', '2017-05-16', 10, 'dobeman_den_to.jpg', 0),
(4, 'Dobemen Small', '3.0', '2017-05-16', 10, 'dobeman_nho.jpg', 1),
(6, 'Poodle Teacup', '8.0', '2017-05-17', 10, 'poo_cup.jpg', 1),
(7, 'Alaska Small', '3.0', '2017-05-18', 12, 'alaska_nho_den.jpg', 1),
(8, 'Poodle Tiny', '7.0', '2017-05-18', 13, 'poo_tiny_trang.jpg', 1),
(9, 'Poodle Standard', '15.0', '2017-05-18', 6, 'poo_stan_trang.jpg', 1),
(10, 'Pomeranian', '7.0', '2017-05-18', 11, 'phoc_soc_den.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `ID` mediumint(9) NOT NULL,
  `id_sp` varchar(20) COLLATE utf8_bin NOT NULL,
  `ngay_giaodich` date NOT NULL,
  `ten_khachhang` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sdt` int(4) NOT NULL,
  `email` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `gia` decimal(3,1) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`ID`, `id_sp`, `ngay_giaodich`, `ten_khachhang`, `sdt`, `email`, `trangthai`, `gia`, `soluong`) VALUES
(2, '6', '2017-02-28', 'Loan', 1233, 'loan@gmail.com', 0, '8.0', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `tbl_danhmucsp`
--
ALTER TABLE `tbl_danhmucsp`
  ADD PRIMARY KEY (`ten`);

--
-- Chỉ mục cho bảng `tbl_danhmucsp1`
--
ALTER TABLE `tbl_danhmucsp1`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucsp1`
--
ALTER TABLE `tbl_danhmucsp1`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
