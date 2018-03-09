-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2018 lúc 09:55 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dtm_03dhcntt3_lms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieumuon`
--

CREATE TABLE `chitietphieumuon` (
  `machitiet` int(11) NOT NULL,
  `masach` int(11) NOT NULL,
  `maphieumuon` int(11) NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ngaytra` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietphieumuon`
--

INSERT INTO `chitietphieumuon` (`machitiet`, `masach`, `maphieumuon`, `tinhtrang`, `ngaytra`) VALUES
(1, 10, 1, 'đang mượn', '25/02/2018'),
(2, 13, 2, 'đang mượn', '25/02/2018'),
(3, 14, 2, 'đang mượn', '25/02/2018'),
(4, 12, 5, 'đang mượn', '25/02/2018'),
(5, 11, 5, 'đang mượn', '25/02/2018'),
(6, 17, 3, 'đã trả', '08/02/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madocgia` int(11) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ho` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nguoidung` varchar(100) CHARACTER SET utf8 NOT NULL,
  `trangthai` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madocgia`, `ten`, `ho`, `gioitinh`, `diachi`, `sdt`, `nguoidung`, `trangthai`) VALUES
(1, 'Thư', 'Võ', 'Nữ', '123 abc', '01234561111', 'Sinh Viên', 'Hoạt Động'),
(2, 'Hiền', 'Nguyễn', 'Nữ', '1111 Hồ Thị Kỉ', '012222444777', 'Sinh Viên', 'Hoạt Động'),
(3, 'Hằng', 'Nguyễn', 'Nữ', '56 Trần Văn Đang', '09055544475', 'Sinh Viên', 'Hoạt Động'),
(4, 'Yến', 'Nguyễn', 'Nữ', '33 Khánh Hội', '09065577845', 'Sinh Viên', 'Hoạt Động'),
(5, 'Tú', 'Đặng', 'Nam', '88 Trần Cao Văn', '09834455212', 'Sinh Viên', 'Hoạt Động'),
(6, 'Tín', 'Cao', 'Nam', '55 Lê Lợi', '0942751235', 'Sinh Viên', 'Hoạt Động'),
(7, 'Nguyên', 'Nguyễn', 'Nữ', '123 Lê Độ', '01247586624', 'Giảng Viên', 'Hoạt Động'),
(8, 'Sơn', 'Hồ', 'Nam', '44 Trần Quốc Thảo', '01243578845', 'Sinh Viên', 'Bị Chặn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ho` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`iduser`, `username`, `password`, `ten`, `ho`) VALUES
(1, 'user1', '123456', 'Thư', 'Võ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieumuon`
--

CREATE TABLE `phieumuon` (
  `maphieu` int(11) NOT NULL,
  `madocgia` int(11) NOT NULL,
  `ngaymuon` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ngaytra` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phieumuon`
--

INSERT INTO `phieumuon` (`maphieu`, `madocgia`, `ngaymuon`, `ngaytra`) VALUES
(1, 1, '02/02/2018', '25/02/2018'),
(2, 2, '02/02/2018', '25/02/2018'),
(3, 7, '02/02/2018', '25/02/2018'),
(4, 3, '02/02/2018', '25/02/2018'),
(5, 4, '02/02/2018', '25/02/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masach` int(11) NOT NULL,
  `tensach` varchar(100) CHARACTER SET utf8 NOT NULL,
  `maloai` int(50) NOT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nhaxuatban` varchar(100) CHARACTER SET utf8 NOT NULL,
  `namtaiban` int(11) NOT NULL,
  `ngaynhan` varchar(20) NOT NULL,
  `ngaythem` datetime NOT NULL,
  `tinhtrang` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `maloai`, `tacgia`, `nhaxuatban`, `namtaiban`, `ngaynhan`, `ngaythem`, `tinhtrang`) VALUES
(8, 'Đánh nhau với cối xay gió', 1, 'Trịnh Thị Thu', 'Nhà báo Tuổi Trẻ', 2002, '1/1/2018', '2018-03-01 00:00:00', 'Mới'),
(9, 'Địa Lý', 4, 'Biên Cương', 'Bộ giáo dục và đào tạo', 2010, '1/1/2018', '2018-03-01 00:00:00', 'Mới'),
(10, 'Khoa học Xã Hội', 5, 'Ngô Bảo Châu', 'Nhà xuất bản Kim Đồng', 2011, '1/1/2018', '2018-03-02 00:00:00', 'Mới'),
(11, 'Đắc Nhân Tâm', 6, 'Dale Carnegie', 'Nhà báo Tuổi Trẻ', 2010, '1/1/2018', '2018-03-03 00:00:00', 'Mới'),
(12, 'Quẳng gánh lo đi vui sống', 6, 'Dale Carnegie ', 'Nhà báo Tuổi Trẻ', 2016, '1/1/2018', '2018-03-01 00:00:00', 'Mới'),
(13, 'Lập Trình căn bản', 2, 'Ngô Bảo Châu', 'Nhà xuất bản trẻ', 2010, '1/1/2018', '2018-03-04 00:00:00', 'Mới'),
(14, 'Nhạc Lý', 3, 'ChiPu', 'Nhà xuất bản trẻ', 2017, '1/1/2018', '2018-03-01 00:00:00', 'Mới'),
(15, 'Tài Nguyên Thiên Nhiên', 1, 'Minh Việt', 'Nhà xuất bản nhân văn', 2011, '1/1/2018', '2018-03-02 00:00:00', 'Mới'),
(16, 'Chúa tể của những chiếc nhẫn', 4, 'Toni Jane', 'Nhà xuất bản Kim Đồng', 2008, '1/1/2018', '2018-03-03 00:00:00', 'Mới'),
(17, 'Cuộc chiến của những vì sao', 4, 'Mina Toh', 'Nhà xuất bản Kim Đồng', 2006, '1/1/2018', '2018-03-01 00:00:00', 'Mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`maloai`, `tenloai`) VALUES
(1, 'Văn học'),
(2, 'Xã hội'),
(3, 'Tự nhiên'),
(4, 'Giải trí'),
(5, 'Thể Thao'),
(6, 'Khoa học');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  ADD PRIMARY KEY (`machitiet`),
  ADD KEY `maphieumuon` (`maphieumuon`),
  ADD KEY `masach` (`masach`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madocgia`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`iduser`);

--
-- Chỉ mục cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  ADD PRIMARY KEY (`maphieu`),
  ADD KEY `madocgia` (`madocgia`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  MODIFY `machitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madocgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  MODIFY `maphieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `masach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  ADD CONSTRAINT `chitietphieumuon_ibfk_1` FOREIGN KEY (`maphieumuon`) REFERENCES `phieumuon` (`maphieu`),
  ADD CONSTRAINT `chitietphieumuon_ibfk_2` FOREIGN KEY (`masach`) REFERENCES `sach` (`masach`);

--
-- Các ràng buộc cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  ADD CONSTRAINT `phieumuon_ibfk_1` FOREIGN KEY (`madocgia`) REFERENCES `docgia` (`madocgia`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `theloai` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
