-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 05:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaHD` int(50) NOT NULL,
  `MaSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` decimal(10,0) NOT NULL,
  `NamTaiBan` int(11) NOT NULL,
  KEY `MaHD` (`MaHD`),
  KEY `MaSach` (`MaSach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSach`, `Gia`, `SoLuong`, `ThanhTien`, `NamTaiBan`) VALUES
(2, 'S01', '49000', 1, '49000', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsach`
--

CREATE TABLE IF NOT EXISTS `chitietsach` (
  `MaSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NamTaiBan` int(11) NOT NULL,
  KEY `MaSach` (`MaSach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietsach`
--

INSERT INTO `chitietsach` (`MaSach`, `NamTaiBan`) VALUES
('S01', 2000),
('S01', 2004),
('S10', 2004),
('S10', 2005),
('S07', 1995),
('S07', 2007),
('S07', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` int(11) NOT NULL AUTO_INCREMENT,
  `MaKH` int(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `TinhTrangThanhToan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ThanhPho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Quan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phuong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `MaKH` (`MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `NgayTao`, `TongTien`, `TinhTrangThanhToan`, `MaNV`, `ThanhPho`, `Quan`, `Phuong`) VALUES
(1, 4, '2016-11-10', '380000', 'Đã thanh toán', 'NV03', 'TP.HCM', '5', '2'),
(2, 3, '2016-11-08', '230000', '', 'NV05', 'TP.HCM', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(11) NOT NULL AUTO_INCREMENT,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `SDT`, `Email`) VALUES
(1, 'Phạm Vy', 'D5, Bình thạnh, HCM', '832738246', 'Vy123@gmail.com'),
(2, 'Ngô An', '3/2, quận 10 - HCMC', '9335667980', 'Ngo090@gmail.com'),
(3, 'Huỳnh Bình', '30 Ba đình, quận 8', '167980233', 'Binh@gmail.com'),
(4, 'Nguyễn Xuân', '91 Trần bình trọng, quận 5, HCM', '16534890', 'anxu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loainhanvien`
--

CREATE TABLE IF NOT EXISTS `loainhanvien` (
  `MaLoaiNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiNV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loainhanvien`
--

INSERT INTO `loainhanvien` (`MaLoaiNV`, `TenLoaiNV`) VALUES
('N001', 'Admin'),
('N002', 'Nvbanhang');

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE IF NOT EXISTS `loaisach` (
  `MaLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`MaLoai`, `TenLoai`) VALUES
('AV', 'sachav'),
('SGK', 'sgk'),
('TDIEN', 'tudien'),
('TKHAO', 'thamkhao'),
('TR', 'Truyen');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgayBatDau` date NOT NULL,
  `Luong` decimal(10,0) NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNV`),
  KEY `MaLoaiNV` (`MaLoaiNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `NgayBatDau`, `Luong`, `DiaChi`, `SDT`, `MaLoaiNV`) VALUES
('NV01', ' Anxu', '2015-12-24', '0', '231 Nguyễn Trãi, Đức Linh, Bình Thuận', '98345671', 'N001'),
('NV03', 'Ngô Nga', '2016-01-01', '4500000', '32 Ba Đình, quận 8, HCMC', '836892010', 'N002'),
('NV05', 'Đỗ Ngọc ', '2016-10-04', '4500000', '3/2, Long An', '167890123', 'N002');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE IF NOT EXISTS `nhaxuatban` (
  `MaNXB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenNXB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNXB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `DiaChi`, `SDT`) VALUES
('A', 'NXB Kim Đồng', '12 Xuân Hương, Hà Nội', '04 30988283'),
('B', 'NXB Tri Thức', 'Nguyễn Du, quận 1, HCMC', '08 3458476'),
('C', 'NXB Trẻ', '43 Hai Bà Trưng, quận 1, HCMC', '08 790444');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE IF NOT EXISTS `phanquyen` (
  `MaPhanQuyen` int(11) NOT NULL AUTO_INCREMENT,
  `MaTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PhanQuyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaPhanQuyen`),
  KEY `MaTK` (`MaTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaPhanQuyen`, `MaTK`, `PhanQuyen`) VALUES
(1, 'TK02', 'Khách hàng'),
(2, 'TK03', 'Nhân viên'),
(3, 'TK04', 'Khách hàng'),
(4, 'TK05', 'Nhân viên'),
(5, 'TK06', 'Khách hàng'),
(6, 'TK07', 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE IF NOT EXISTS `sach` (
  `MaSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaNXB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaTacGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GiaBan` decimal(10,0) NOT NULL,
  `GiaNhap` decimal(10,0) NOT NULL,
  `NgayNhap` date NOT NULL,
  `NamSanXuat` int(11) NOT NULL,
  PRIMARY KEY (`MaSach`),
  KEY `MaNXB` (`MaNXB`),
  KEY `MaTacGia` (`MaTacGia`),
  KEY `MaLoai` (`MaLoai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `MaNXB`, `MaTacGia`, `MaLoai`, `TenSach`, `Image`, `GiaBan`, `GiaNhap`, `NgayNhap`, `NamSanXuat`) VALUES
('S01', 'C', 'TG01', 'TR', 'Tôi thấy hoa vàng trên cỏ xanh ', 'coxanh.jpg', '49000', '30000', '2016-09-20', 1999),
('S02', 'C', 'TG01', 'TR', 'Bảy bước tới mùa hè', '7buoc.jpg', '45000', '38000', '2016-07-19', 2000),
('S03', 'C', 'TG04', 'TR', 'Doremon- tập 6', 'tap6.jpg', '30000', '20000', '2016-07-06', 2002),
('S04', 'C', 'TG04', 'TR', 'Cây bút thần kỳ', 'doremon.jpg', '37000', '22000', '2016-08-22', 2001),
('S05', 'B', 'TG02', 'AV', 'Perfect', 'perfect.jpg', '120000', '89000', '2016-01-21', 2003),
('S06', 'B', 'TG02', 'TDIEN', 'Từ điển Anh - Việt', 'anhviet.jpg', '145000', '120000', '2016-03-02', 2005),
('S07', 'B', 'TG02', 'TDIEN', 'Từ điển Việt - Anh ', 'vietanh1.jpg', '179000', '150000', '2016-07-28', 2001),
('S08', 'B', 'TG02', 'TKHAO', 'Làm văn miêu tả', 'thamkhao.jpg', '205000', '180000', '2016-08-23', 2000),
('S09', 'A', 'TG03', 'SGK', 'SGK  lớp 3', 'sgk3.jpg', '145000', '120000', '2016-07-21', 2005),
('S10', 'A', 'TG03', 'SGK', 'SGK lớp 4', 'sgk4.jpg', '150000', '110000', '2016-06-21', 2003),
('S11', 'A', 'TG03', 'TKHAO', 'Bộ đề thi tiếng anh', 'tk.jpg', '230000', '200000', '2016-08-31', 1999),
('S12', 'B', 'TG02', 'AV', 'Harry Potter', 'av.jpg', '219000', '199000', '2016-08-23', 2004);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE IF NOT EXISTS `tacgia` (
  `MaTacGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenTacGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTacGia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTacGia`, `TenTacGia`, `DiaChi`, `SDT`) VALUES
('TG01', 'Nguyễn Nhật Ánh', '12 Lê Lợi, quận 6, HCMC', '167982309'),
('TG02', 'Jackson', '33 Hậu Giang, quận 8, HCMC', '933897600'),
('TG03', 'Đỗ Ngọc Thống', '90 Tây Hồ, Hà Nội', '1680092892'),
('TG04', 'Jufio', '45 Cao Lỗ, quận 12, HCMC', '947263281');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `MaTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` int(50) DEFAULT NULL,
  `MaNV` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTK`),
  KEY `MaKH` (`MaKH`),
  KEY `MANV` (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `MaKH`, `MaNV`, `TenDangNhap`, `MatKhau`) VALUES
('TK02', 2, NULL, 'VyVy', 'tk02'),
('TK03', NULL, 'NV03', 'Nga', 'tk03'),
('TK04', 4, NULL, 'An Ngo', 'tk04'),
('TK05', NULL, 'NV05', 'Ngoc', 'tk05'),
('TK06', 3, NULL, 'Binh', 'tk06'),
('TK07', 4, NULL, 'XuanNguyen', 'tk07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Constraints for table `chitietsach`
--
ALTER TABLE `chitietsach`
  ADD CONSTRAINT `chitietsach_ibfk_1` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaLoaiNV`) REFERENCES `loainhanvien` (`MaLoaiNV`);

--
-- Constraints for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`MaTacGia`) REFERENCES `tacgia` (`MaTacGia`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`),
  ADD CONSTRAINT `sach_ibfk_4` FOREIGN KEY (`MaTacGia`) REFERENCES `tacgia` (`MaTacGia`),
  ADD CONSTRAINT `sach_ibfk_5` FOREIGN KEY (`MaLoai`) REFERENCES `loaisach` (`MaLoai`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MaNV`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
