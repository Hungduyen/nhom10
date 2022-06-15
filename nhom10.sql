-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 15, 2022 lúc 05:33 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblkynang`
--

INSERT INTO `tblkynang` (`maKN`, `tenKN`, `IDHS`) VALUES
(1, 'Kỹ năng giao tiếp, kỹ năng làm việc nhóm, kỹ năng lãnh đạo, lập kế hoạch, quản lý sáng tạo', '1'),
(2, 'Kỹ năng làm việc nhóm; thân thiện, dễ làm việc với mọi người, quản lý giao tiếp', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllinhvuc`
--

DROP TABLE IF EXISTS `tbllinhvuc`;
CREATE TABLE IF NOT EXISTS `tbllinhvuc` (
  `maLinhVuc` int(10) NOT NULL AUTO_INCREMENT,
  `tenLinhVuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maLinhVuc`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbllinhvuc`
--

INSERT INTO `tbllinhvuc` (`maLinhVuc`, `tenLinhVuc`) VALUES
(1, 'Chứng khoán - Vàng'),
(2, 'Tài chính - Tiền tệ'),
(3, 'Bảo hiểm/ Tư vấn bảo hiểm'),
(4, 'Kế toán - Kiểm toán'),
(5, 'Ngân hàng/ Tài Chính'),
(6, 'Đầu tư'),
(7, 'Xây dựng'),
(8, 'Kiến trúc - Thiết kế nội thất'),
(9, 'Du lịch'),
(10, 'Khách sạn - Nhà hàng');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnguoiquanly`
--

INSERT INTO `tblnguoiquanly` (`maNQL`, `HoTen`, `taikhoan`, `MK`, `quyen`) VALUES
(1, 'Nguyễn quynh', 'quynhguyen12', '1235962', 3);

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnguoitimviec`
--

INSERT INTO `tblnguoitimviec` (`maNTV`, `HoTen`, `email`, `MatKhau`, `sdt`, `quyen`) VALUES
(1, 'Nguyễn Thanh Hưng', 'thanhnhanh1405@gmail.com', '1235962', '0337289239', 1),
(2, 'Nguyễn Trọng Hưng', 'minhhieu112@gmail.com', '1198642', '0375879023', 1),
(3, 'Nguyễn Thị Như Ý', 'ynhi135@gmail.com', '1132342', '0300879572', 1),
(4, 'Nguyễn Văn Quỳnh', 'camtu167@gmail.com', '1232342', '0300879567', 1);

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
  KEY `quyen` (`quyen`),
  KEY `fk_NhaTuyenDung_maLinhVuc` (`maLinhVuc`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnhatuyendung`
--

INSERT INTO `tblnhatuyendung` (`maNhaTuyenDung`, `email`, `matKhau`, `tenNguoiLienHe`, `soDienThoai`, `tenCongTy`, `maSoThue`, `diaChi`, `maLinhVuc`, `maPX`, `quyen`) VALUES
(1, 'nhatnuoc@gmail.com', '123456', 'Nguyễn Văn A', '0337281239', 'Công ty TNHH Nhất Nước', '0101403703', '12 Phước Mỹ 1', '1', 3323, 2),
(2, 'generali@gmail.com', '123456', 'Nguyễn Văn B', '0337285639', 'Công Ty Bảo Hiểm Nhân Thọ Generali', '0310879824', '390 Cách Mạng Tháng 8,', '3', 3359, 2),
(3, 'hong.ltt09@gmail.com', '123456', 'Nguyễn Văn C', '0337285699', 'Công Ty TNHH Tư Vấn Và Quản Lý Khách Sạn Tam Tam', '0310879814', '390 Phước Mỹ 2,', '10', 27154, 2),
(4, 'germton@gmail.com', '123456', 'Nguyễn Văn D', '0357285699', 'Công Ty TNHH Một Thành Viên Germton', '0314879814', 'KCN Đông Quế Sơn', '8', 27160, 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblquyen`
--

INSERT INTO `tblquyen` (`maQuyen`, `tenQuyen`) VALUES
(1, 'Người Tìm Việc'),
(2, 'Nhà Tuyển Dụng'),
(3, 'Người Quản Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthongtincongty`
--

DROP TABLE IF EXISTS `tblthongtincongty`;
CREATE TABLE IF NOT EXISTS `tblthongtincongty` (
  `maCongTy` int(10) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noiDungGioiThieu` text COLLATE utf8_unicode_ci NOT NULL,
  `maNhaTuyenDung` int(10) NOT NULL,
  PRIMARY KEY (`maCongTy`),
  KEY `fk_ThongTinCongTy_maNhaTuyenDung` (`maNhaTuyenDung`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblthongtincongty`
--

INSERT INTO `tblthongtincongty` (`maCongTy`, `logo`, `noiDungGioiThieu`, `maNhaTuyenDung`) VALUES
(1, 'anh1.png', 'Generali Việt Nam thuộc Tập đoàn Generali, được thành lập năm 1831 tại Trieste, \r\nItalia - một trong những Tập đoàn bảo hiểm lớn nhất thế giới có mặt tại 50 quốc gia tại thị trường Châu Âu, Châu Mỹ và Châu Á. \r\nSau 10 năm hoạt động, Generali Việt Nam đã nhanh chóng trở thành một trong những công ty bảo hiểm nhân thọ hàng đầu Việt Nam với mạng lưới hơn 70 Tổng Đại Lý (GenCasa) và trung tâm dịch vụ khách hàng trên toàn quốc, phục vụ hơn 400.000 khách hàng.', 1),
(2, 'anh1.png', 'Generali Việt Nam thuộc Tập đoàn Generali, được thành lập năm 1831 tại Trieste \r\nItalia - một trong những Tập đoàn bảo hiểm lớn nhất thế giới có mặt tại 50 quốc gia tại thị trường Châu Âu, Châu Mỹ và Châu Á. \r\nSau 10 năm hoạt động, Generali Việt Nam đã nhanh chóng trở thành một trong những công ty bảo hiểm nhân thọ hàng đầu Việt Nam với mạng lưới \r\nhơn 70 Tổng Đại Lý (GenCasa) và trung tâm dịch vụ khách hàng trên toàn quốc, phục vụ hơn 400.000 khách hàng.', 2),
(3, 'anh2.png', 'Công ty Tư vấn và Quản lý Khách sạn TAMTAM được ông Hồ Thanh Tâm, tốt nghiệp Thạc sỹ chuyên nghành quản\r\nlý khách sạn của Trường Đại Học Toulouse le Mirail của Cộng Hòa Pháp với 16 năm kinh nghiệm làm quản lý điều hành tại các khách\r\nsạn thuộc các tập đoàn khách sạn quốc tế và trong nước như Accor (Pháp), Victoria (Pháp), Genting (Malaysia), Best Western (Mỹ), Vinpearl (Nga)\r\ntại các khu du lịch nổi tiếng của Việt Nam như Sapa, Lào Cai, Nha Trang, Hội An, Hà Nội cùng đồng nghiệp là những người làm việc lâu năm trong nghành khách sạn sáng lập,\r\nnhằm cung cấp cho thị trường du lịch khách sạn ở Miền Bắc', 3),
(4, 'anh3.png', 'Công ty TNHH MTV công nghiệp Germton là công ty 100% vốn đầu tư Hồng Kông.\r\nNgành nghề kinh doanh: sản xuất sản phẩm quần áo trẻ em được xuất khẩu sang thị trường Mỹ, Canada và các nước châu Âu.', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthongtinungvien`
--

DROP TABLE IF EXISTS `tblthongtinungvien`;
CREATE TABLE IF NOT EXISTS `tblthongtinungvien` (
  `IDHS` int(10) NOT NULL AUTO_INCREMENT,
  `TenUV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblthongtinungvien`
--

INSERT INTO `tblthongtinungvien` (`IDHS`, `TenUV`, `NgaySinh`, `SDT`, `DiaChi`, `maPX`, `ViTri`, `Trinhdo`, `KinhNghiem`, `LinhVuc`, `MucLuong`, `Noilamviec`, `HinhThuc`, `MucTieu`, `kynang`, `maNTV`, `ngayDang`) VALUES
(1, 'Nguyễn Trọng Hưng', '2001-05-20', '0337289239', 'Đà Nẵng', 3367, 'Quản Lý', 'Đại Học', '3 Năm', 1, '10000000', 'HẢI CHÂU - ĐÀ NẴNG', 'Làm việc trực tiếp tại Cty', 'Phát triển bản thân', '1', 2, '2022-06-14'),
(2, 'Nguyễn Văn Quỳnh', '2001-05-20', '0337278539', 'Đà Nẵng', 3367, 'Quản Lý', 'Đại Học', '3 Năm', 2, '10000000', 'LIÊN CHIỂU - ĐÀ NẴNG', 'Làm việc trực tiếp tại Cty', 'Phát triển năng lực của bản thân, học hỏi kinh nghiệm mới', '1', 2, '2022-06-14');

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
DROP TABLE IF EXISTS `tblnhanvien`;
CREATE TABLE IF NOT EXISTS `tblnhanvien` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
  `hanNop` date NOT NULL,
  `maNhaTuyenDung` int(10) NOT NULL,
  `NgayDang` date NOT NULL,
  PRIMARY KEY (`maBaiDang`),
  KEY `fk_TinTuyenDung_maNhaTuyenDung` (`maNhaTuyenDung`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbltintuyendung`
--

INSERT INTO `tbltintuyendung` (`maBaiDang`, `chucVu`, `kinhNghiem`, `yeuCauBangCap`, `hinhThucLamViec`, `soLuongCan`, `doTuoi`, `moTaCongViec`, `yeuCauCongViec`, `quyenLoiDuocHuong`, `mucLuong`, `thongTinLienHe`, `hanNop`, `maNhaTuyenDung`, `NgayDang`) VALUES
(1, 'Quản lý', 'Từ 0 - 1 năm', 'Cao đẳng', 'Toàn thời gian', 5, 'từ 18 đến 25 tuổi', '– Đánh giá và xác định các cơ hội kinh doanh mới để thúc đẩy tỷ lệ tăng trưởng.Định hướng và đào tạo tuyển dụng tư vấn mới, xây dựng phát triển các đội nhóm.\r\nHuấn luyện, đào tạo, hỗ trợ thúc đẩy đảm bảo nhân sự kinh doanh đạt chỉ tiêu về chỉ số kinh doanh. \r\nLên kế hoạch và triển khai kinh doanh tuần, tháng, quý, năm cho toàn bộ ban nhóm kinh doanh để tìm kiếm, tư vấn và chốt khách hàng, đảm bảo doanh số đề ra.', '- Nam/ Nữ: Tuổi từ 25 - 45\r\n- Tinh thần cầu tiến và trách nhiệm cao, có kỹ năng giao tiếp tốt\r\n- Tốt nghiệp CĐ, ĐH: Ưu tiên ứng viên đã làm các ngành liên quan đến Bảo hiểm, Tài chính, Ngân hàng, Nhân sự, Bất động sản, Du lịch: kinh nghiệm quản lý 02 năm trở lên\r\n- Khả năng giao tiếp, kỹ năng thuyết trình, khả năng tổ chức sắp xếp công việc.\r\n- Tự chủ về mặt thời gian khi làm việc với đội nhóm riêng.\r\n- Không ngại khó khăn chấp nhận thử thách, hiểu biết về pháp luật kinh doanh\r\n- Ứng viên đang làm quản lý tại các Ngân hàng/ Bảo hiểm/ BH nhân thọ là lợi thế', '- Lương cứng 20 triệu\r\n- Tổng thu nhập từ 25 - 60 triệu/tháng với thu nhập bao gồm:\r\n+ Lương cứng 20 triệu. Thưởng tuyển dụng và thưởng đào tạo nhân viên mới\r\n+ Hoa hồng tháng + thưởng quý + thưởng năm, Thưởng nóng đạt memo hàng tuần\r\n+ Thưởng và các khoản trợ cấp khác khi đạt chỉ tiêu KPI đề ra.\r\n+ Được nghỉ 8 ngày trong tháng làm việc (Chiều thứ 7 + chủ nhật), du lịch hàng năm.\r\n+ Được tặng thẻ chăm sóc sức khỏe quốc tế, được đào tạo liên tục để phát triển', '20000000', ' Liên hệ công ty: Văn phòng Gencasa Đà nẵng 4\r\n- Địa chỉ: Số 390 Cách Mạng Tháng 8, quận Cẩm Lệ, Thành phố Đà Nẵng\r\n- Link đăng ký phỏng vấn: https://forms.gle/dR246NLLFFAWC2cD6\r\n- Điện thoại: 0935.274.278 – 0983.563.001 (TRẦN ĐỨC VINH)\r\n- Email: tdvinh1806@gmail.com (ghi rõ vị trí ứng tuyển)\r\n- Ưu tiên hồ sơ nộp sớm qua email!\r\nHồ sơ yêu cầu\r\n- Hộ khẩu và CMND hoặc CCCD: photo công chứng ( 6 tháng gần nhất)\r\n- Bằng cấp chứng chỉ nghiệp vụ có liên quan.\r\n- 2 ảnh thẻ 4×6.', '2022-05-22', 1, '2022-05-15'),
(2, 'Nhân Viên', 'Từ 2 - 5 năm', 'Cao đẳng', 'Toàn thời gian', 1, 'từ 18 đến 35 tuổi', '- Nhận mẫu từ khách hàng và sử dụng phần mềm Wilcome để tạo mẫu thêu\r\n- Chuyển hình mẫu thêu sang máy thêu\r\n- Kiểm tra mẫu thêu sau khi thêu xong', '- Có kinh nghiệm làm CSKH qua các phần mềm chuyên dụng ít nhất 6 tháng.\r\n- Khả năng ngoại ngữ tốt.\r\n- Khả năng tư vấn, xử lý tình huống và giao tiếp tư vấn khách hàng.\r\n- Có kiến thức về đồ dùng, sản phẩm nhà hàng, khách sạn là một lợi thế.', '- Lương thoả thuận, lương tháng 13 và được đánh giá tăng lương hàng năm\r\n- Được đóng đầy đủ tất cả các loại bảo hiểm\r\n- Đặc biệt là có bảo hiểm tai nạn', '9000000', '- Địa chỉ: KCN Đông Quế Sơn, T.T Hương An, Huyện Quế Sơn, Tỉnh Quảng Nam\r\n- Ứng viên gửi CV về địa chỉ: germtontuyendung@gmail.com\r\n- Chi tiết liên hệ Phòng Hành Chính Nhân Sự: 0935 153 895', '2022-05-22', 3, '2022-05-15'),
(3, 'Nhân Viên', 'Từ 5 - 8 năm', 'Trung học', 'Toàn thời gian', 1, 'từ 23 đến 40 tuổi', '- Hỗ trợ chủ quản bộ phận tìm hiểu nắm chắc các tình hình nhu cầu vật liệu liên quan\r\n- Theo dõi tiến độ cung ứng sản xuất in tay và mẫu\r\n- Chịu trách nhiệm sắp xếp, giám sát nhận trả các vật liệu in tay về kho\r\n- Các công việc được giao theo yêu cầu cấp trên', '- Có kinh nghiệm từ 5 năm trở lên ở vị trí tương đương\r\n- Biết pha màu\r\n- Có kỹ thuật in tay và in mẫu.', '- Lương thoả thuận, lương tháng 13 và được đánh giá tăng lương hàng năm\r\n- Được đóng đầy đủ tất cả các loại bảo hiểm\r\n- Đặc biệt là có bảo hiểm tai nạn', '8000000', '- Địa chỉ: KCN Đông Quế Sơn, T.T Hương An, Huyện Quế Sơn, Tỉnh Quảng Nam\r\n- Ứng viên gửi CV về địa chỉ: germtontuyendung@gmail.com\r\n- Chi tiết liên hệ Phòng Hành Chính Nhân Sự: 0935 153 895', '2022-05-22', 3, '2022-05-15'),
(4, 'Nhân Viên', 'Từ 2 - 5 năm', 'Cao đẳng', 'Toàn thời gian', 1, 'từ 18 đến 35 tuổi', '- Gọi điện tìm kiếm, chăm sóc và tư vấn dịch vụ từ nguồn khách hàng theo Data có sẵn của công ty.\r\n- Phát triển duy trì mối quan hệ khách hàng.\r\n- Tương tác với khách hàng qua điện thoại, zalo,…\r\n- Làm việc tại văn phòng không đi thị trường với sự hỗ trợ trực tiếp từ trưởng nhóm và các thành viên.', '- Yêu cầu độ tuổi: Nam/Nữ từ 20 – 28 tuổi.\r\n- Có laptop cá nhân.\r\n- Giọng nói dễ nghe, không nói ngọng nói lắp.', '- Lương chính thức: 10.000.000 (Lương có tăng theo bậc).\r\n- HOA HỒNG CAO (từ 10-25%)\r\n- Được đào tạo, hướng dẫn trong môi trường chuyên nghiệp trước khi làm việc.\r\n- Làm việc theo team, hoà đồng, năng động, vui vẻ.\r\n- Lộ trình thăng tiến rõ ràng\r\n- Tham gia teambuilding, du lịch cùng công ty 2-3 lần/năm', '20000000', '- Địa Chỉ làm việc: 27 Quách Xân, Cẩm Lệ, Đà Nẵng\r\n- Số điện thoại : 0368.536.164\r\n- Gửi CV qua mail: thetrinhsbay@gmail.com', '2022-05-22', 2, '2022-05-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
