create database TTGTVL
go
use TTGTVL
go
---------bảng nguoi tim viec----

----bang tỉnh thanh
create table tblTinhThanh
(
	maTT varchar(10) not null primary key,
	tenTT nvarchar(255) not null
)
insert into tblTinhThanh
values ('DN43', N'Thành Phố Đà Nẵng')
------------------bang quan huyen---
------------------
create table tblQuanHuyen
(
	maQH varchar(10) not null primary key,
	tenQH nvarchar(255) not null,
	maTT varchar(10) not null foreign key (maTT) references tblTinhThanh(maTT)
		ON DELETE CASCADE
		ON UPDATE CASCADE
)
insert into tblQuanHuyen
values	('HCC1', N'Hải Châu','DN43'),
		('TKD1', N'Thanh Khê','DN43'),
		('LCF1', N'Liên Chiểu','DN43'),
		('STE1', N'Sơn Trà','DN43'),
		('CLG1', N'Cẩm Lệ','DN43'),
		('NHSH1', N'Ngũ Hành Sơn','DN43')
------bảng phường xã
go
create table tblPhuongXa
(
	maPX varchar(10) not null primary key,
	tenPX nvarchar(255) not null,
	maQH varchar(10) not null foreign key references tblQuanHuyen(maQH)
		ON DELETE CASCADE
		ON UPDATE CASCADE
)
insert into tblPhuongXa
values	('PBH', N'Phường Bình Hiên', 'HCC1'),
		('PBT', N'Phường Bình Thuận', 'HCC1'),
		('PHC1', N'Phường Hải Châu 1 ', 'HCC1'),
		('PHC2', N'Phường Hải Châu 2', 'HCC1'),
		('PHCB', N'Phường Hòa Cường Bắc', 'HCC1'),
		('PHCN', N'Phường Hòa Cường Nam', 'HCC1'),
		('PHTĐ', N'Phường Hòa Thuận Đông', 'HCC1'),
		('PHTT', N'Phường Hòa Thuận Tây', 'HCC1'),
		('PND', N'Phường Nam Dương', 'HCC1'),
		('PPN', N'Phường Phước Ninh', 'HCC1'),
		('PTT', N'Phường Thạch Thang', 'HCC1'),
		('PTB', N'Phường Thanh Bình', 'HCC1'),
		('PTP', N'Phường Thuận Phước', 'HCC1'),
		('PAK', N'Phường An Khê', 'TKD1'),
		('PCG', N'Phường Chính Gián', 'TKD1'),
		('PHK', N'Phường Hòa Khê', 'TKD1'),
		('PTTH', N'Phường Tam Thuận', 'TKD1'),
		('PTC', N'Phường Tân Chính', 'TKD1'),
		('PTG', N'Phường Thạc Gián', 'TKD1'),
		('PTKĐ', N'Phường Thanh Khê Đông', 'TKD1'),
		('PTKT', N'Phường Thanh Khê Tây', 'TKD1'),
		('PVT', N'Phường Vĩnh Trung', 'TKD1'),
		('PHHB', N'Phường Hòa Hiệp Bắc', 'LCF1'),
		('PHHN', N'Phường Hòa Hiệp Nam', 'LCF1'),
		('PHKB', N'Phường Hòa Khánh Bắc', 'LCF1'),
		('PHKN', N'Phường Hòa Khánh Nam', 'LCF1'),
		('PHM', N'Phường Hòa Minh', 'LCF1'),
		('PAHB', N'Phường An Hải Bắc', 'STE1'),
		('PAHĐ', N'Phường An Hải Đông', 'STE1'),
		('PAHT', N'Phường An Hải Tây', 'STE1'),
		('PMT', N'Phường Mân Thái', 'STE1'),
		('PNHĐ', N'Phường Nại Hiên Đông', 'STE1'),
		('PPM', N'Phường Phước Mỹ', 'STE1'),
		('PTQ', N'Phường Thọ Quang', 'STE1'),
		('PHA', N'Phường Hòa An', 'CLG1'),
		('PHP', N'Phường Hòa Phát', 'CLG1'),
		('PHTHĐ', N'Phường Hòa Thọ Đông', 'CLG1'),
		('PHTHT', N'Phường Hòa Thọ Tây', 'CLG1'),
		('PHX', N'Phường Hòa Xuân', 'CLG1'),
		('PKT', N'Phường Khuê Trung', 'CLG1'),
		('PHH', N'Phường Hòa Hải', 'NHSH1'),
		('PHQ', N'Phường Hòa Quý', 'NHSH1'),
		('PKM', N'Phường Khuê Mỹ', 'NHSH1'),
		('PMA', N'Phường Mỹ An', 'NHSH1');
-------linhvuc
go
create table tblLinhVuc
(
	maLinhVuc int IDENTITY(1,1),
	tenLinhVuc nvarchar(255) not null,
	primary key(maLinhVuc)
)
insert	into tblLinhVuc(tenLinhVuc)
values  (N'Chứng khoán - Vàng'),
		(N'Tài chính - Tiền tệ'),
		(N'Bảo hiểm/ Tư vấn bảo hiểm'),
		(N'Kế toán - Kiểm toán'),
		(N'Ngân hàng/ Tài Chính'),
		(N'Đầu tư'),
		(N'Xây dựng'),
		(N'Kiến trúc - Thiết kế nội thất'),
		(N'Du lịch'),
		(N'Khách sạn - Nhà hàng');
select * from tblLinhVuc
--drop TABLE tblLinhVuc
-------bang phân quyền------
create table tblQuyen
(
	maQuyen varchar(1) not null primary key,
	tenQuyen nvarchar(50) not null
)

insert into tblQuyen
values	('U',N'Người Tìm Việc'),
		('T',N'Nhà Tuyển Dụng'),
		('Q',N'Người Quản Lý');

create table tblNguoitimviec(
	maNTV varchar(10) not null primary key ,
	HoTen nvarchar(50),
	email varchar(50) not null check (email like '[A-Za-z]%@gmail.com'),
	MatKhau varchar(10),
	sdt varchar(10) not null unique check (sdt like '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' ),
	quyen varchar(1) not null foreign key (quyen) references tblQuyen(maQuyen)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
)
go
CREATE FUNCTION func_nextID (@lastma varchar(10), @prefix varchar(3), @size int)
	returns varchar(8)
	as
	BEGIN
		IF(@lastma = '')
			set @lastma = @prefix + REPLICATE(0,@size - LEN(@prefix))
		declare @numnext_ma int, @nextma varchar(10)
		set @lastma = LTRIM(RTRIM(@lastma))
		set @numnext_ma = replace(@lastma,@prefix,'') + 1
		set @size = @size - len(@prefix)
		set @nextma = @prefix + REPLICATE(0,@size - LEN(@prefix))
		set @nextma = @prefix + RIGHT(REPLICATE(0, @size) + CONVERT(VARCHAR(MAX), @numnext_ma),@size)
		return @nextma
	END

-----------------------------
go
CREATE  TRIGGER AUTO_INCREMENT_TRIGGER on tblNguoitimviec
for insert as 
begin
	DECLARE @lastmaNTV varchar(8)
	SET @lastmaNTV = (Select TOP 1 maNTV from tblNguoitimviec order by maNTV desc)
	Update tblNguoitimviec set maNTV = dbo.func_nextID(@lastmaNTV,'NTV',8) where maNTV = ''
end
go
insert into tblNguoitimviec
values ('',N'Nguyễn Thành Nhanh','thanhnhanh1405@gmail.com','1235962','0337289239','U');
insert into tblNguoitimviec
values ('',N'Nguyễn Minh Hiếu','minhhieu112@gmail.com','1198642','0375879023','U');
insert into tblNguoitimviec
values ('',N'Nguyễn Thị Ý Nhi','ynhi135@gmail.com','1132342','0300879572','U');	
insert into tblNguoitimviec
values ('',N'Nguyễn Thị Cẩm Tú','camtu167@gmail.com','1232342','0300879567','U');	

	--	(DBO.AUTO_IDNTV(),N'Nguyễn Thành Nhanh','camtu113@gmail.com','1325962','0338774338','U');
select *from tblNguoitimviec
--drop TABLE tblNguoitimviec
--DROP TRIGGER AUTO_INCREMENT_TRIGGER
--DROP Function func_nextID

--------ky nang----
go

--drop table tblKynang
--select * from tblKynang
go	
--------thông tin ứng viên
create table tblThongtinungvien(
	IDHS int IDENTITY(1,1),
	TenUV nvarchar(50) not null,
	NgaySinh DATETIME
		CHECK (DATEDIFF(YEAR,'0:0',GETDATE()-ngaySinh)>=18),
	SDT varchar(10) not null unique check (sdt like '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' ),
	DiaChi nvarchar(50) not null,
	maPX varchar(10) not null foreign key (maPX) references tblPhuongXa(maPX),
	ViTri nvarchar(50) not null,
	Trinhdo nvarchar(10) not null,
	KinhNghiem ntext not null,
	LinhVuc int not null foreign key (LinhVuc) references tblLinhvuc(maLinhVuc),
	MucLuong money,
	Noilamviec nvarchar(50),
	HinhThuc nvarchar(50),
	MucTieu Ntext,
	kynang Ntext,
	maNTV varchar(10) not null foreign key (maNTV) references tblNguoitimviec(maNTV),
	ngayDang Date NOT NULL,
	primary key(IDHS)
)
GO
SET DATEFORMAT dmy;  
go
create trigger autongaydang1
on tblThongtinungvien
for insert 
as
begin
update tblThongtinungvien
set ngayDang = getdate()
where tblThongtinungvien.ngayDang in (SELECT DISTINCT Inserted.ngayDang FROM INSERTED)
end
go
SET DATEFORMAT dmy; 
go
insert into tblThongtinungvien(TenUV,NgaySinh,SDT,DiaChi,maPX,ViTri,Trinhdo,KinhNghiem,LinhVuc,MucLuong,Noilamviec,HinhThuc,MucTieu,kynang,ngayDang,maNTV)
values (N'Nguyễn Thành Nhanh','14/05/2001','0337289239',N'Đà Nẵng','PBT',N'Quản Lý',N'Đại Học',N'3 Năm','1', 
10000000,N'HẢI CHÂU - ĐÀ NẴNG',N'Làm việc trực tiếp tại Cty',N'Phát triển bản thân','1','','NTV00001');
insert into tblThongtinungvien(TenUV,NgaySinh,SDT,DiaChi,maPX,ViTri,Trinhdo,KinhNghiem,LinhVuc,MucLuong,Noilamviec,HinhThuc,MucTieu,kynang,ngayDang,maNTV)
values (N'Nguyễn Minh Hiếu','17/05/1995','0337278539',N'Đà Nẵng','PBT',N'Quản Lý',N'Đại Học',N'3 Năm','2',
10000000,N'LIÊN CHIỂU - ĐÀ NẴNG',N'Làm việc trực tiếp tại Cty',N'Phát triển năng lực của bản thân, học hỏi kinh nghiệm mới','1','','NTV00002');
go
select * from tblThongtinungvien
go
create table tblKynang(
	maKN int IDENTITY(1,1),
	tenKN nvarchar(255) not null,
	IDHS int foreign key (IDHS) references tblThongtinungvien(IDHS),
	primary key(maKN)
)
go
insert into tblKynang
values	(N'Kỹ năng giao tiếp, kỹ năng làm việc nhóm, kỹ năng lãnh đạo, lập kế hoạch, quản lý sáng tạo','1'),
		(N'Kỹ năng làm việc nhóm; thân thiện, dễ làm việc với mọi người, quản lý giao tiếp','2');
select * from tblThongtinungvien
GO
create table tblGiaiThuong(
	maGT int IDENTITY(1,1),
	tenGT nvarchar(255) not null,
	IDHS int foreign key (IDHS) references tblThongtinungvien(IDHS),
	primary key(maGT)
)
go
insert into tblGiaiThuong
values	(N'Giải nhất cuộc thi tin học năm 2020','1');
go
create table tblHocVanBangCap(
	maHV int IDENTITY(1,1),
	trinhDo nvarchar(255) not null,
	truong nvarchar(255) not null,
	khoa nvarchar(255) not null,
	thoiGianBD date not null,
	thoiGianKT date not null,
	chuyenNganh nvarchar(255) not null,
	Loai nvarchar(255) not null,
	thongtin ntext null,
	IDHS int foreign key (IDHS) references tblThongtinungvien(IDHS),
	primary key(maHV)
)
go
insert into tblHocVanBangCap(trinhDo,truong,khoa,thoiGianBD,thoiGianKT,chuyenNganh,Loai,thongtin,IDHS)
values	(N'Đại học',N'Sư phạm Kỹ thuật Đà Nẵng',N'Điện - điện tử',N'2018',N'2022',N'Công nghê thông tin',N'Giỏi','','1');
insert into tblHocVanBangCap(trinhDo,truong,khoa,thoiGianBD,thoiGianKT,chuyenNganh,Loai,thongtin,IDHS)
values	(N'Đại học',N'Sư phạm Kỹ thuật Đà Nẵng',N'Điện - điện tử',N'2018',N'2022',N'Công nghê thông tin',N'Giỏi','','2');
go
select
*
from tblThongtinungvien,tblHocVanBangCap,tblGiaiThuong,tblKynang
where tblThongtinungvien.IDHS = tblHocVanBangCap.IDHS and tblThongtinungvien.IDHS = tblKynang.IDHS
go
--tìm kiếm theo tên ứng viên
CREATE PROCEDURE TIMKIEMTENUNGVIEN
@TenUV nvarchar(50) as
BEGIN
select
*
from tblThongtinungvien as ttuv 
where ttuv.TenUV LIKE '%'+ @TenUV+'%'
end
--thực thi thủ tục
go
exec TIMKIEMTENUNGVIEN 'thành nhanh'
go
----thutuctimkimthongtintheolinhvuc-
CREATE PROCEDURE TIMKIEMUNGVIEN
@TenLV nvarchar(50) as
BEGIN
select
*
from tblLinhVuc, tblThongtinungvien as ttuv
where ttuv.LinhVuc = tblLinhVuc.maLinhVuc and tblLinhVuc.tenLinhVuc LIKE N'%'+@TenLV+'%'
end
--thực thi thủ tục
exec TIMKIEMUNGVIEN N'Chứng khoán'
go
CREATE TABLE tblNhaTuyenDung
(
	maNhaTuyenDung VARCHAR(10) NOT NULL PRIMARY KEY,
	email VARCHAR(50) NOT NULL
		CHECK (email LIKE '[a-z]%@%'),
	matKhau VARCHAR(20) NOT NULL,
	tenNguoiLienHe NVARCHAR(50) NOT NULL,
	soDienThoai VARCHAR(11) NOT NULL UNIQUE
		CHECK (soDienThoai LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' OR soDienThoai LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
	tenCongTy NVARCHAR(50) NOT NULL,
	maSoThue VARCHAR(10) NOT NULL,
	diaChi NVARCHAR(100) NOT NULL,
	maLinhVuc int NOT NULL,
	maPX varchar(10) not null foreign key (maPX) references tblPhuongXa(maPX),
	quyen varchar(1) not null foreign key (quyen) references tblQuyen(maQuyen)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
);
GO

ALTER TABLE tblNhaTuyenDung
	ADD CONSTRAINT fk_NhaTuyenDung_maLinhVuc
		FOREIGN KEY (maLinhVuc) 
		REFERENCES tblLinhVuc(maLinhVuc)
		ON DELETE CASCADE
		ON UPDATE CASCADE
GO
CREATE  TRIGGER AUTO_INCREMENT_TRIGGER_NTD on tblNhaTuyenDung
for insert as 
begin
	DECLARE @lastmaNTD varchar(8)
	SET @lastmaNTD = (Select TOP 1 maNhaTuyenDung from tblNhaTuyenDung order by maNhaTuyenDung desc)
	Update tblNhaTuyenDung set maNhaTuyenDung = dbo.func_nextID(@lastmaNTD,'NTD',8) where maNhaTuyenDung = ''
end
go
insert into tblNhaTuyenDung
values ('','nhatnuoc@gmail.com','123456',N'Nguyễn Văn A','0337281239',N'Công ty TNHH Nhất Nước','0101403703',N'12 Phước Mỹ 1','1','PPM','T');
insert into tblNhaTuyenDung
values ('','generali@gmail.com','123456',N'Nguyễn Văn B','0337285639',N'Công Ty Bảo Hiểm Nhân Thọ Generali','0310879824',N'390 Cách Mạng Tháng 8,','3','PHTĐ','T');
insert into tblNhaTuyenDung
values ('','hong.ltt09@gmail.com','123456',N'Nguyễn Văn C','0337285699',N'Công Ty TNHH Tư Vấn Và Quản Lý Khách Sạn Tam Tam','0310879814',N'390 Phước Mỹ 2,','10','PMT','T');
insert into tblNhaTuyenDung
values ('','germton@gmail.com','123456',N'Nguyễn Văn D','0357285699',N'Công Ty TNHH Một Thành Viên Germton','0314879814',N'KCN Đông Quế Sơn','8','PPM','T');
go
select * from tblNhaTuyenDung
CREATE TABLE tbltinTuyenDung
(
	maBaiDang int IDENTITY(1,1),
	chucVu NVARCHAR(50) NOT NULL,
	kinhNghiem NVARCHAR(50) NOT NULL,
	yeuCauBangCap NVARCHAR(50) NOT NULL,
	hinhThucLamViec NVARCHAR(50) NOT NULL,
	soLuongCan INT NOT NULL,
	doTuoi NVARCHAR(50) NOT NULL,
	moTaCongViec NText NOT NULL,
	yeuCauCongViec NText NOT NULL,
	quyenLoiDuocHuong NText NOT NULL,
	mucLuong MONEY NOT NULL,
	thongTinLienHe NText NOT NULL,
	hanNop DATETIME NOT NULL,
	maNhaTuyenDung VARCHAR(10) NOT NULL,
	NgayDang date NOT NULL,
	primary key(maBaiDang)
);
ALTER TABLE tbltinTuyenDung
	ADD CONSTRAINT fk_TinTuyenDung_maNhaTuyenDung
		FOREIGN KEY (maNhaTuyenDung) 
		REFERENCES tblNhaTuyenDung(maNhaTuyenDung)
		ON DELETE CASCADE
		ON UPDATE CASCADE
GO
go
SET DATEFORMAT dmy;  
go
create trigger autongaydang
on tbltinTuyenDung
for insert 
as
begin
update tbltinTuyenDung
set NgayDang = getdate()
where tbltinTuyenDung.NgayDang in (SELECT DISTINCT Inserted.NgayDang FROM INSERTED)
end

GO
insert into tbltinTuyenDung(chucVu,kinhNghiem,yeuCauBangCap,hinhThucLamViec,soLuongCan,doTuoi,moTaCongViec,yeuCauCongViec,quyenLoiDuocHuong,mucLuong,thongTinLienHe,hanNop,maNhaTuyenDung,NgayDang)
values (N'Quản lý',N'Từ 0 - 1 năm',N'Cao đẳng',N'Toàn thời gian',5,N'từ 18 đến 25 tuổi',
N'– Đánh giá và xác định các cơ hội kinh doanh mới để thúc đẩy tỷ lệ tăng trưởng.Định hướng và đào tạo tuyển dụng tư vấn mới, xây dựng phát triển các đội nhóm.
Huấn luyện, đào tạo, hỗ trợ thúc đẩy đảm bảo nhân sự kinh doanh đạt chỉ tiêu về chỉ số kinh doanh. 
Lên kế hoạch và triển khai kinh doanh tuần, tháng, quý, năm cho toàn bộ ban nhóm kinh doanh để tìm kiếm, tư vấn và chốt khách hàng, đảm bảo doanh số đề ra.',
N'- Nam/ Nữ: Tuổi từ 25 - 45
- Tinh thần cầu tiến và trách nhiệm cao, có kỹ năng giao tiếp tốt
- Tốt nghiệp CĐ, ĐH: Ưu tiên ứng viên đã làm các ngành liên quan đến Bảo hiểm, Tài chính, Ngân hàng, Nhân sự, Bất động sản, Du lịch: kinh nghiệm quản lý 02 năm trở lên
- Khả năng giao tiếp, kỹ năng thuyết trình, khả năng tổ chức sắp xếp công việc.
- Tự chủ về mặt thời gian khi làm việc với đội nhóm riêng.
- Không ngại khó khăn chấp nhận thử thách, hiểu biết về pháp luật kinh doanh
- Ứng viên đang làm quản lý tại các Ngân hàng/ Bảo hiểm/ BH nhân thọ là lợi thế',
N'- Lương cứng 20 triệu
- Tổng thu nhập từ 25 - 60 triệu/tháng với thu nhập bao gồm:
+ Lương cứng 20 triệu. Thưởng tuyển dụng và thưởng đào tạo nhân viên mới
+ Hoa hồng tháng + thưởng quý + thưởng năm, Thưởng nóng đạt memo hàng tuần
+ Thưởng và các khoản trợ cấp khác khi đạt chỉ tiêu KPI đề ra.
+ Được nghỉ 8 ngày trong tháng làm việc (Chiều thứ 7 + chủ nhật), du lịch hàng năm.
+ Được tặng thẻ chăm sóc sức khỏe quốc tế, được đào tạo liên tục để phát triển',20000000,N' Liên hệ công ty: Văn phòng Gencasa Đà nẵng 4
- Địa chỉ: Số 390 Cách Mạng Tháng 8, quận Cẩm Lệ, Thành phố Đà Nẵng
- Link đăng ký phỏng vấn: https://forms.gle/dR246NLLFFAWC2cD6
- Điện thoại: 0935.274.278 – 0983.563.001 (TRẦN ĐỨC VINH)
- Email: tdvinh1806@gmail.com (ghi rõ vị trí ứng tuyển)
- Ưu tiên hồ sơ nộp sớm qua email!
Hồ sơ yêu cầu
- Hộ khẩu và CMND hoặc CCCD: photo công chứng ( 6 tháng gần nhất)
- Bằng cấp chứng chỉ nghiệp vụ có liên quan.
- 2 ảnh thẻ 4×6.',23-01-2022,'NTD00002','');
insert into tbltinTuyenDung(chucVu,kinhNghiem,yeuCauBangCap,hinhThucLamViec,soLuongCan,doTuoi,moTaCongViec,yeuCauCongViec,quyenLoiDuocHuong,mucLuong,thongTinLienHe,hanNop,maNhaTuyenDung,NgayDang)
values (N'Nhân Viên',N'Từ 2 - 5 năm',N'Cao đẳng',N'Toàn thời gian',1,N'từ 18 đến 35 tuổi',
N'- Nhận mẫu từ khách hàng và sử dụng phần mềm Wilcome để tạo mẫu thêu
- Chuyển hình mẫu thêu sang máy thêu
- Kiểm tra mẫu thêu sau khi thêu xong',
N'- Có kinh nghiệm làm CSKH qua các phần mềm chuyên dụng ít nhất 6 tháng.
- Khả năng ngoại ngữ tốt.
- Khả năng tư vấn, xử lý tình huống và giao tiếp tư vấn khách hàng.
- Có kiến thức về đồ dùng, sản phẩm nhà hàng, khách sạn là một lợi thế.',
N'- Lương thoả thuận, lương tháng 13 và được đánh giá tăng lương hàng năm
- Được đóng đầy đủ tất cả các loại bảo hiểm
- Đặc biệt là có bảo hiểm tai nạn',9000000,
N'- Địa chỉ: KCN Đông Quế Sơn, T.T Hương An, Huyện Quế Sơn, Tỉnh Quảng Nam
- Ứng viên gửi CV về địa chỉ: germtontuyendung@gmail.com
- Chi tiết liên hệ Phòng Hành Chính Nhân Sự: 0935 153 895',26-01-2022,'NTD00004','');
insert into tbltinTuyenDung(chucVu,kinhNghiem,yeuCauBangCap,hinhThucLamViec,soLuongCan,doTuoi,moTaCongViec,yeuCauCongViec,quyenLoiDuocHuong,mucLuong,thongTinLienHe,hanNop,maNhaTuyenDung,NgayDang)
values (N'Nhân Viên',N'Từ 5 - 8 năm',N'Trung học',N'Toàn thời gian',1,N'từ 23 đến 40 tuổi',
N'- Hỗ trợ chủ quản bộ phận tìm hiểu nắm chắc các tình hình nhu cầu vật liệu liên quan
- Theo dõi tiến độ cung ứng sản xuất in tay và mẫu
- Chịu trách nhiệm sắp xếp, giám sát nhận trả các vật liệu in tay về kho
- Các công việc được giao theo yêu cầu cấp trên',
N'- Có kinh nghiệm từ 5 năm trở lên ở vị trí tương đương
- Biết pha màu
- Có kỹ thuật in tay và in mẫu.',
N'- Lương thoả thuận, lương tháng 13 và được đánh giá tăng lương hàng năm
- Được đóng đầy đủ tất cả các loại bảo hiểm
- Đặc biệt là có bảo hiểm tai nạn',8000000,
N'- Địa chỉ: KCN Đông Quế Sơn, T.T Hương An, Huyện Quế Sơn, Tỉnh Quảng Nam
- Ứng viên gửi CV về địa chỉ: germtontuyendung@gmail.com
- Chi tiết liên hệ Phòng Hành Chính Nhân Sự: 0935 153 895',26-01-2022,'NTD00004','');
insert into tbltinTuyenDung(chucVu,kinhNghiem,yeuCauBangCap,hinhThucLamViec,soLuongCan,doTuoi,moTaCongViec,yeuCauCongViec,quyenLoiDuocHuong,mucLuong,thongTinLienHe,hanNop,maNhaTuyenDung,NgayDang)
values (N'Nhân Viên',N'Từ 2 - 5 năm',N'Cao đẳng',N'Toàn thời gian',1,N'từ 18 đến 35 tuổi',
N'- Gọi điện tìm kiếm, chăm sóc và tư vấn dịch vụ từ nguồn khách hàng theo Data có sẵn của công ty.
- Phát triển duy trì mối quan hệ khách hàng.
- Tương tác với khách hàng qua điện thoại, zalo,…
- Làm việc tại văn phòng không đi thị trường với sự hỗ trợ trực tiếp từ trưởng nhóm và các thành viên.',
N'- Yêu cầu độ tuổi: Nam/Nữ từ 20 – 28 tuổi.
- Có laptop cá nhân.
- Giọng nói dễ nghe, không nói ngọng nói lắp.',
N'- Lương chính thức: 10.000.000 (Lương có tăng theo bậc).
- HOA HỒNG CAO (từ 10-25%)
- Được đào tạo, hướng dẫn trong môi trường chuyên nghiệp trước khi làm việc.
- Làm việc theo team, hoà đồng, năng động, vui vẻ.
- Lộ trình thăng tiến rõ ràng
- Tham gia teambuilding, du lịch cùng công ty 2-3 lần/năm',20000000,
N'- Địa Chỉ làm việc: 27 Quách Xân, Cẩm Lệ, Đà Nẵng
- Số điện thoại : 0368.536.164
- Gửi CV qua mail: thetrinhsbay@gmail.com',27-01-2022,'NTD00001','');
select * from tbltinTuyenDung
--drop table tbltinTuyenDung

--------proc thống kê tin tuyển dụng theo ngày
go
create proc tintheongay
as
begin
select day(NgayDang) as N'Ngày',COUNT(day(NgayDang)) as N'Số lượng tin tuyển dụng' 
from tbltinTuyenDung
group by day(NgayDang) 
order by count(day(NgayDang)) desc
end
------thực thi proc-------
execute tintheongay

--proc thống kê tin tuyển dụng theo năm--
go
create proc tintheonam
as
begin
select year(NgayDang) as N'Năm',COUNT(year(NgayDang)) as N'Số lượng tin tuyển dụng' 
from tbltinTuyenDung
group by year(NgayDang) 
order by count(year(NgayDang)) desc
end
-----thực thi proc----
execute tintheonam
select * from tbltinTuyenDung
go
--tìm kiếm theo bài đăng theo lĩnh vực
CREATE PROCEDURE TIMKIEMLINHVUC
@tenlv nvarchar(50) as
BEGIN
select
tblLinhVuc.tenLinhVuc,tblNhaTuyenDung.tenCongTy,tbltinTuyenDung.*
from tblLinhVuc, tblNhaTuyenDung, tbltinTuyenDung
where tblNhaTuyenDung.maLinhVuc = tblLinhVuc.maLinhVuc and tbltinTuyenDung.maNhaTuyenDung = tblNhaTuyenDung.maNhaTuyenDung and tblLinhVuc.tenLinhVuc LIKE N'%'+ @tenlv+'%'
end
--thực thi thủ tục
exec TIMKIEMLINHVUC N'Chứng khoán'
go
CREATE TABLE tblThongTinCongTy
(
	maCongTy int IDENTITY(1,1),
	logo VARCHAR(50) NOT NULL,
	noiDungGioiThieu NTEXT NOT NULL,
	maNhaTuyenDung VARCHAR(10) NOT NULL,
	primary key(maCongTy)
);


GO
ALTER TABLE tblthongTinCongTy
	ADD CONSTRAINT fk_ThongTinCongTy_maNhaTuyenDung
		FOREIGN KEY (maNhaTuyenDung) 
		REFERENCES tblNhaTuyenDung(maNhaTuyenDung)
		ON DELETE CASCADE
		ON UPDATE CASCADE
GO
insert into tblthongTinCongTy(logo,noiDungGioiThieu,maNhaTuyenDung)
values ('anh1.png',N'Generali Việt Nam thuộc Tập đoàn Generali, được thành lập năm 1831 tại Trieste, 
Italia - một trong những Tập đoàn bảo hiểm lớn nhất thế giới có mặt tại 50 quốc gia tại thị trường Châu Âu, Châu Mỹ và Châu Á. 
Sau 10 năm hoạt động, Generali Việt Nam đã nhanh chóng trở thành một trong những công ty bảo hiểm nhân thọ hàng đầu Việt Nam với mạng lưới 
hơn 70 Tổng Đại Lý (GenCasa) và trung tâm dịch vụ khách hàng trên toàn quốc, phục vụ hơn 400.000 khách hàng.','NTD00002');
insert into tblthongTinCongTy(logo,noiDungGioiThieu,maNhaTuyenDung)
values ('anh1.png',N'Generali Việt Nam thuộc Tập đoàn Generali, được thành lập năm 1831 tại Trieste, 
Italia - một trong những Tập đoàn bảo hiểm lớn nhất thế giới có mặt tại 50 quốc gia tại thị trường Châu Âu, Châu Mỹ và Châu Á. 
Sau 10 năm hoạt động, Generali Việt Nam đã nhanh chóng trở thành một trong những công ty bảo hiểm nhân thọ hàng đầu Việt Nam với mạng lưới 
hơn 70 Tổng Đại Lý (GenCasa) và trung tâm dịch vụ khách hàng trên toàn quốc, phục vụ hơn 400.000 khách hàng.','NTD00002');
insert into tblthongTinCongTy(logo,noiDungGioiThieu,maNhaTuyenDung)
values ('anh2.png',N'Công ty Tư vấn và Quản lý Khách sạn TAMTAM được ông Hồ Thanh Tâm, tốt nghiệp Thạc sỹ chuyên nghành quản
lý khách sạn của Trường Đại Học Toulouse le Mirail của Cộng Hòa Pháp với 16 năm kinh nghiệm làm quản lý điều hành tại các khách
sạn thuộc các tập đoàn khách sạn quốc tế và trong nước như Accor (Pháp), Victoria (Pháp), Genting (Malaysia), Best Western (Mỹ), Vinpearl (Nga)
tại các khu du lịch nổi tiếng của Việt Nam như Sapa, Lào Cai, Nha Trang, Hội An, Hà Nội cùng đồng nghiệp là những người làm việc lâu năm trong nghành khách sạn sáng lập,
nhằm cung cấp cho thị trường du lịch khách sạn ở Miền Bắc','NTD00003');
insert into tblthongTinCongTy(logo,noiDungGioiThieu,maNhaTuyenDung)
values ('anh3.png',N'Công ty TNHH MTV công nghiệp Germton là công ty 100% vốn đầu tư Hồng Kông.
Ngành nghề kinh doanh: sản xuất sản phẩm quần áo trẻ em được xuất khẩu sang thị trường Mỹ, Canada và các nước châu Âu.','NTD00004');
CREATE TABLE tblNguoiQuanLy
(
	maNQL VARCHAR(10) NOT NULL PRIMARY KEY,
	HoTen NVARCHAR(50) NOT NULL,
	taikhoan VARCHAR(50) NOT NULL,
	MK VARCHAR(50) NOT NULL,
	quyen varchar(1) not null foreign key (quyen) references tblQuyen(maQuyen)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
);
--drop table tblNguoiQuanLy
GO
CREATE TRIGGER AUTO_INCREMENT_TRIGGER_NQL on tblNguoiQuanLy
for insert as 
begin
	DECLARE @lastmaNQL varchar(8)
	SET @lastmaNQL = (Select TOP 1 maNQL from tblNguoiQuanLy order by maNQL desc)
	Update tblNguoiQuanLy set maNQL = dbo.func_nextID(@lastmaNQL,'NQL',8) where maNQL = ''
end
go
insert into tblNguoiQuanLy
values ('',N'Nguyễn Nhanh','thanhnhanh1405','1235962','Q');
select * from tblNguoiQuanLy
go
create table tblduyettintuyendung 
(
	maBaiDang int NOT NULL foreign key (maBaiDang) references tbltinTuyenDung(maBaiDang),
	maNQL VARCHAR(10) NOT NULL foreign key (maNQL) references tblNguoiQuanLy(maNQL),
	PRIMARY KEY(maBaiDang,maNQL),
	trangThai NVARCHAR(255) NOT NULL,
	ngayDuyet Datetime NOT NULL,
	ghiChu NText NULL	
)
GO
create trigger autodate
on tblduyettintuyendung
for insert 
as
begin
update tblduyettintuyendung
set ngayDuyet = getdate()
where tblduyettintuyendung.ngayDuyet in (SELECT DISTINCT Inserted.ngayDuyet FROM INSERTED)
end
go
insert into tblduyettintuyendung 
values ('1','NQL00001',N'Đã Duyệt','','');
insert into tblduyettintuyendung 
values ('2','NQL00001',N'Đã Duyệt','','');
insert into tblduyettintuyendung 
values ('3','NQL00001',N'Đã Duyệt','','');
--drop table tblduyethosoungtuyen
select * from tblduyettintuyendung
go
-----proc thông kê số lượng tin được duyệt----\
go
create proc tinduocduyet
as
begin
select count(maBaiDang) as 'Số lượng bài đã duyệt'
from tblduyettintuyendung
where trangThai=N'Đã Duyệt'
end
---------thực thi proc
select * from tblduyettintuyendung
execute tinduocduyet

go
create table tblduyethosoungtuyen 
(
	IDHS int NOT NULL foreign key (IDHS) references tblThongtinungvien(IDHS),
	maNQL VARCHAR(10) NOT NULL foreign key (maNQL) references tblNguoiQuanLy(maNQL),
	PRIMARY KEY(IDHS,maNQL),
	trangThai NVARCHAR(255) NOT NULL,
	ngayDuyet Datetime NULL,
	ghiChu Text NOT NULL	
)
go
create trigger autodate1
on tblduyethosoungtuyen
for insert 
as
begin
update tblduyethosoungtuyen
set ngayDuyet = GETDATE()
where tblduyethosoungtuyen.ngayDuyet in (SELECT DISTINCT Inserted.ngayDuyet FROM INSERTED)
end
go
insert into tblduyethosoungtuyen 
values ('1','NQL00001',N'Đã Duyệt','','');
insert into tblduyethosoungtuyen 
values ('2','NQL00001',N'Đã Duyệt','','');
go
--thongkehosodaduocduyettheolinhvuc
create proc thongKeHSUT(@id_linhvuc as int)
	as begin
		select * from tblduyethosoungtuyen, tblThongtinungvien, tblLinhVuc
			where tblduyethosoungtuyen.IDHS = tblThongtinungvien.IDHS and tblThongtinungvien.IDHS = tblLinhVuc.maLinhVuc
				and tblLinhVuc.maLinhVuc = @id_linhvuc order by tblduyethosoungtuyen.IDHS desc
		end;
go
exec thongKeHSUT 1;
go
--drop table tblduyethosoungtuyen
go
create proc hosoduocduyet
as
begin
select count(IDHS) as 'Số lượng hồ sơ đã duyệt'
from tblduyethosoungtuyen
where trangThai=N'Đã Duyệt'
end
---------thực thi proc
select * from tblduyethosoungtuyen 
execute hosoduocduyet
GO
create table tblHinhanh(
	maHA varchar(10) not null primary key,
	tenHA nvarchar(255) not null,
	maCongTy int null   foreign key (maCongTy) references tblThongTinCongTy(maCongTy),
	IDHS int null foreign key (IDHS) references tblThongtinungvien(IDHS)
)
create trigger trg_nnn_insert_update
on tblNguoitimviec
for insert, update

as
		declare @maNTV varchar(10)
		declare @sdt varchar(10), @email varchar(50), @HoTen nvarchar(50)
		declare @MatKhau varchar(10) = null
		

		set @maNTV = (select i.maNTV from inserted as i)
		set @sdt = (select i.sdt from inserted as i)
		set @email = (select i.email from inserted as i)
		set @HoTen = (select i.HoTen from inserted as i)
		set @MatKhau = (select i.MatKhau from inserted as i)

		
		--Kiếm tra số điện thoại duy nhất
		if((select COUNT(@maNTV) from tblNguoitimviec where @sdt = @sdt) > 1)
		begin
			print N'Số điện thoại này đã có!'
			Rollback
			Return
		end
		
		--Kiểm tra email duy nhất
		if((select COUNT(@maNTV) from tblNguoitimviec where email = @email) > 1)
		begin
			print N'Email này đã có!'
			Rollback
			Return
		end

		--Kiểm tra Họ tên không được null
		if(@HoTen is null)
		begin
			print N'HoTen không được null !'
			Rollback
			Return
		end

		--Kiểm tra Mật khẩu không được null
		if(@MatKhau is null)
		begin
			print N'matKhau không được null !'
			Rollback
			Return
		end



--------proc tìm kiếm tên công ty
insert into tblNguoitimviec
values ('',N'Nguyễn Thị Cẩm Tú','','1232342','0312389567','U');	
go
CREATE PROCEDURE timkiemcongty
@tenCongTy nvarchar(50) as
BEGIN
select
*
from tblNhaTuyenDung as ttuv 
where ttuv.tenCongTy LIKE '%'+@tenCongTy+'%'
end
---thưc thi
go
execute timkiemcongty N'Nhân'
select * from tblNhaTuyenDung