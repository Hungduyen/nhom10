-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 14, 2022 lúc 01:05 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gioithieuvieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblduyethosoungtuyen`
--

DROP TABLE IF EXISTS `tblduyethosoungtuyen`;
CREATE TABLE IF NOT EXISTS `tblduyethosoungtuyen` (
  `IDHS` int(10) NOT NULL AUTO_INCREMENT,
  `maNQL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayDuyet` datetime DEFAULT NULL,
  `ghiChu` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDHS`,`maNQL`),
  KEY `maNQL` (`maNQL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblduyettintuyendung`
--

DROP TABLE IF EXISTS `tblduyettintuyendung`;
CREATE TABLE IF NOT EXISTS `tblduyettintuyendung` (
  `maBaiDang` int(10) NOT NULL,
  `maNQL` int(10) NOT NULL,
  `trangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayDuyet` datetime NOT NULL,
  `ghiChu` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`maBaiDang`,`maNQL`),
  KEY `maNQL` (`maNQL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiaithuong`
--

DROP TABLE IF EXISTS `tblgiaithuong`;
CREATE TABLE IF NOT EXISTS `tblgiaithuong` (
  `maGT` int(10) NOT NULL AUTO_INCREMENT,
  `tenGT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDHS` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maGT`),
  KEY `IDHS` (`IDHS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhinhanh`
--

DROP TABLE IF EXISTS `tblhinhanh`;
CREATE TABLE IF NOT EXISTS `tblhinhanh` (
  `maHA` int(10) NOT NULL AUTO_INCREMENT,
  `tenHA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maCongTy` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDHS` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maHA`),
  KEY `maCongTy` (`maCongTy`),
  KEY `IDHS` (`IDHS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhocvanbangcap`
--

DROP TABLE IF EXISTS `tblhocvanbangcap`;
CREATE TABLE IF NOT EXISTS `tblhocvanbangcap` (
  `maHV` int(10) NOT NULL AUTO_INCREMENT,
  `trinhDo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `truong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoiGianBD` date NOT NULL,
  `thoiGianKT` date NOT NULL,
  `chuyenNganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thongtin` text COLLATE utf8_unicode_ci,
  `IDHS` int(10) DEFAULT NULL,
  PRIMARY KEY (`maHV`),
  KEY `IDHS` (`IDHS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkynang`
--

DROP TABLE IF EXISTS `tblkynang`;
CREATE TABLE IF NOT EXISTS `tblkynang` (
  `maKN` int(10) NOT NULL AUTO_INCREMENT,
  `tenKN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDHS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maKN`),
  KEY `IDHS` (`IDHS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllinhvuc`
--

DROP TABLE IF EXISTS `tbllinhvuc`;
CREATE TABLE IF NOT EXISTS `tbllinhvuc` (
  `maLinhVuc` int(10) NOT NULL AUTO_INCREMENT,
  `tenLinhVuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maLinhVuc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnguoiquanly`
--

DROP TABLE IF EXISTS `tblnguoiquanly`;
CREATE TABLE IF NOT EXISTS `tblnguoiquanly` (
  `maNQL` int(10) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  PRIMARY KEY (`maNQL`),
  KEY `quyen` (`quyen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnguoitimviec`
--

DROP TABLE IF EXISTS `tblnguoitimviec`;
CREATE TABLE IF NOT EXISTS `tblnguoitimviec` (
  `maNTV` int(10) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  PRIMARY KEY (`maNTV`),
  UNIQUE KEY `sdt` (`sdt`),
  KEY `FR_QUYEN` (`quyen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhatuyendung`
--

DROP TABLE IF EXISTS `tblnhatuyendung`;
CREATE TABLE IF NOT EXISTS `tblnhatuyendung` (
  `maNhaTuyenDung` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tenNguoiLienHe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soDienThoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tenCongTy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maSoThue` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maLinhVuc` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maPX` int(10) NOT NULL,
  `quyen` int(1) NOT NULL,
  PRIMARY KEY (`maNhaTuyenDung`),
  UNIQUE KEY `soDienThoai` (`soDienThoai`),
  KEY `maPX` (`maPX`),
  KEY `quyen` (`quyen`),
  KEY `fk_NhaTuyenDung_maLinhVuc` (`maLinhVuc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblphuongxa`
--

DROP TABLE IF EXISTS `tblphuongxa`;
CREATE TABLE IF NOT EXISTS `tblphuongxa` (
  `maPX` int(10) NOT NULL AUTO_INCREMENT,
  `tenPX` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maQH` int(10) NOT NULL,
  PRIMARY KEY (`maPX`),
  KEY `FK_QUANHUYEN` (`maQH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblquanhuyen`
--

DROP TABLE IF EXISTS `tblquanhuyen`;
CREATE TABLE IF NOT EXISTS `tblquanhuyen` (
  `maQH` int(10) NOT NULL AUTO_INCREMENT,
  `tenQH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maTT` int(10) NOT NULL,
  PRIMARY KEY (`maQH`),
  KEY `FK_MATT` (`maTT`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblquyen`
--

DROP TABLE IF EXISTS `tblquyen`;
CREATE TABLE IF NOT EXISTS `tblquyen` (
  `maQuyen` int(1) NOT NULL AUTO_INCREMENT,
  `tenQuyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maQuyen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthongtincongty`
--

DROP TABLE IF EXISTS `tblthongtincongty`;
CREATE TABLE IF NOT EXISTS `tblthongtincongty` (
  `maCongTy` int(10) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noiDungGioiThieu` text COLLATE utf8_unicode_ci NOT NULL,
  `maNhaTuyenDung` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maCongTy`),
  KEY `fk_ThongTinCongTy_maNhaTuyenDung` (`maNhaTuyenDung`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthongtinungvien`
--

DROP TABLE IF EXISTS `tblthongtinungvien`;
CREATE TABLE IF NOT EXISTS `tblthongtinungvien` (
  `IDHS` int(10) NOT NULL AUTO_INCREMENT,
  `TenUV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` datetime DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maPX` int(10) NOT NULL,
  `ViTri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Trinhdo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `KinhNghiem` text COLLATE utf8_unicode_ci NOT NULL,
  `LinhVuc` int(11) NOT NULL,
  `MucLuong` decimal(10,0) DEFAULT NULL,
  `Noilamviec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhThuc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MucTieu` text COLLATE utf8_unicode_ci,
  `kynang` text COLLATE utf8_unicode_ci,
  `maNTV` int(10) NOT NULL,
  `ngayDang` date NOT NULL,
  PRIMARY KEY (`IDHS`),
  UNIQUE KEY `SDT` (`SDT`),
  KEY `maPX` (`maPX`),
  KEY `LinhVuc` (`LinhVuc`),
  KEY `maNTV` (`maNTV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltinhthanh`
--

DROP TABLE IF EXISTS `tbltinhthanh`;
CREATE TABLE IF NOT EXISTS `tbltinhthanh` (
  `maTT` int(10) NOT NULL AUTO_INCREMENT,
  `tenTT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTT`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

-- Cấu trúc bảng cho bảng `tblnguoiquanly`
--

DROP TABLE IF EXISTS `tblnhanvien`;
CREATE TABLE IF NOT EXISTS `tblnhanvien` (
  `maNV` int(10) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maNV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltintuyendung`
--

DROP TABLE IF EXISTS `tbltintuyendung`;
CREATE TABLE IF NOT EXISTS `tbltintuyendung` (
  `maBaiDang` int(10) NOT NULL AUTO_INCREMENT,
  `chucVu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kinhNghiem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `yeuCauBangCap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhThucLamViec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soLuongCan` int(11) NOT NULL,
  `doTuoi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moTaCongViec` text COLLATE utf8_unicode_ci NOT NULL,
  `yeuCauCongViec` text COLLATE utf8_unicode_ci NOT NULL,
  `quyenLoiDuocHuong` text COLLATE utf8_unicode_ci NOT NULL,
  `mucLuong` decimal(10,0) NOT NULL,
  `thongTinLienHe` text COLLATE utf8_unicode_ci NOT NULL,
  `hanNop` datetime NOT NULL,
  `maNhaTuyenDung` int(10) NOT NULL,
  `NgayDang` date NOT NULL,
  PRIMARY KEY (`maBaiDang`),
  KEY `fk_TinTuyenDung_maNhaTuyenDung` (`maNhaTuyenDung`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
