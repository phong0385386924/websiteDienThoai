-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 22, 2023 at 02:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_detail` int(11) NOT NULL,
  `code_ord` varchar(10) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soLuongMua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id_detail`, `code_ord`, `sanpham_id`, `soLuongMua`) VALUES
(85, '7432', 3, 1),
(86, '1179', 158, 1),
(87, '1179', 206, 2),
(88, '1179', 197, 1),
(89, '6760', 3, 5),
(90, '6760', 161, 3),
(91, '9961', 199, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia1`
--

CREATE TABLE `danhgia1` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc1`
--

CREATE TABLE `danhmuc1` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `iconDm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc1`
--

INSERT INTO `danhmuc1` (`id`, `tendanhmuc`, `iconDm`) VALUES
(1, 'Điện thoại', '<i class=\"fa-solid fa-mobile\"></i>'),
(2, 'Laptop', '<i class=\"fa-solid fa-laptop\"></i>'),
(3, 'Phụ kiện', '<i class=\"fa-solid fa-headphones-simple\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `id` int(11) NOT NULL,
  `tenhang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`id`, `tenhang`) VALUES
(1, 'nokia'),
(2, 'apple'),
(3, 'xiaomi'),
(4, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tenNguoiNhan` varchar(100) NOT NULL,
  `sdtNguoiNhan` varchar(11) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `ghiChu` varchar(200) NOT NULL,
  `ppThanhToan` varchar(100) NOT NULL,
  `ngayDat` text NOT NULL,
  `code_ord` varchar(10) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `userid`, `tenNguoiNhan`, `sdtNguoiNhan`, `diaChi`, `ghiChu`, `ppThanhToan`, `ngayDat`, `code_ord`, `trangThai`) VALUES
(64, 12, 'Lại Thị Hoa', '09353525325', 'Thanh Hóa', 'Giao nhanh ạ', 'Thanh toán khi nhận hàng', '2023-12-19 20:47:41', '7432', 1),
(65, 12, 'Ngô Thanh Thảo', '09353547458', 'TP.HCM', 'Đóng gói cẩn thận', 'Thanh toán khi nhận hàng', '2023-12-19 20:48:30', '1179', 0),
(66, 12, 'Phương', '093535123', 'Thanh Hóa', 'Đóng cẩn thận', 'Thanh toán khi nhận hàng', '2023-12-19 22:49:02', '6760', 1),
(67, 14, 'Thanh Thảo', '0935355473', 'TP.HCM', 'Giao nhanh', 'Ví Momo', '2023-12-19 22:50:25', '9961', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanph1`
--

CREATE TABLE `sanph1` (
  `sanPh_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `moTaSp` varchar(1000) NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanph1`
--

INSERT INTO `sanph1` (`sanPh_id`, `name`, `gia`, `img`, `soluong`, `moTaSp`, `iddanhmuc`, `id_hang`) VALUES
(3, 'Iphone 14 Plus 128gb', 33000000, 'iPhone-14 pl  128gb-thumb-trang-600x600.jpg', 993, '<figure class=\"table\"><table><tbody><tr><td>Dung lượng: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td><td>128Gb &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr><tr><td>Cao:</td><td>160,8 m</td></tr><tr><td>Rộng:&nbsp;</td><td>78,1 mm</td></tr><tr><td>Màn hình:&nbsp;</td><td>6,7 inch</td></tr><tr><td>Độ phân giải:&nbsp;</td><td>2778x1284 pixel</td></tr><tr><td>Camera:&nbsp;</td><td>Camera Chính 12MP: 26&nbsp;mm, khẩu độ ƒ/1.5, Focus&nbsp;Pixels 100%</td></tr><tr><td>Face ID:</td><td>Camera TrueDepth hỗ trợ nhận diện khuôn mặt</td></tr><tr><td>Chip:</td><td>Chip A15 Bionic</td></tr></tbody></table></figure><p>&nbsp;</p>', 1, 2),
(158, 'Xiaomi Redmi Note 12 ', 9000000, 'xiaomi-redmi-note12-8GB.webp', 1996, '<figure class=\"table\"><table><tbody><tr><td>Màn hình:</td><td>AMOLED6.67\"Full HD+</td></tr><tr><td>Hệ điều hành:</td><td>Adroid 13</td></tr><tr><td>Chip:</td><td>Snapdragon 685 8 nhân</td></tr><tr><td>Camera trước:</td><td>13 MP</td></tr><tr><td>Pin,sạc:</td><td>5000 mAh, 33 W</td></tr><tr><td>Dung lượng lưu trữ:</td><td>128 Gb</td></tr><tr><td>RAM:</td><td>8 Gb</td></tr></tbody></table></figure>', 1, 3),
(159, 'Xiaomi Redmi 12C', 6000000, 'xiaomi-redmi-12c-blue-thumb-600x600.webp', 34, '<figure class=\"table\"><table><tbody><tr><td>Trọng lượng:</td><td>192g</td></tr><tr><td>Công nghệ màn hình:</td><td>IPS LCD</td></tr><tr><td>Chipset:</td><td>MediaTek MT6769Z Helio G85 (12nm)</td></tr><tr><td>Lõi CPU:</td><td>8 nhân</td></tr><tr><td>Hệ điều hành:</td><td>Android 12, MIUI 13</td></tr><tr><td>Camera sau:</td><td>50MP, f/1.8, Góc rộng, 1/2.76\", Lấy nét tự động theo pha PDAF</td></tr></tbody></table></figure>', 1, 3),
(160, 'Xiaomi Redmi A1', 4000000, 'Xiaomi-Redmi-A1-thumb-xanh-duong-600x600.jpg', 34325, '<figure class=\"table\"><table><tbody><tr><td>Công nghệ:</td><td>Gsm / Hspa / Lte</td></tr><tr><td>Tần số 4G:</td><td>1, 3, 5, 7, 8, 20, 28, 38, 40, 41 - International</td></tr><tr><td>Kích thước:</td><td>6.52 Inches, 102.6 Cm2 (~81.0% Screen-To-Body Ratio)</td></tr><tr><td>Bộ xử lý đồ họa(GPU):</td><td>Powervr Ge8320</td></tr><tr><td>Video:</td><td>1080P@30Fps</td></tr><tr><td>Cảm biến:</td><td>Gia Tốc Kế (Accelerometer)</td></tr><tr><td>Hệ điều hành:</td><td>Android 12 (Go Edition), Miui 12</td></tr></tbody></table></figure>', 1, 3),
(161, 'Iphone 11', 20000000, 'ip11-64gb.webp', 1997, '', 1, 2),
(196, 'Macbook M1', 33000000, 'mac m1_pro.webp', 342, '', 2, 2),
(197, 'Tai nghe Airpod Max2', 3000000, 'taiNgheappleAirpodMax2.webp', 1996, '', 3, 2),
(198, 'Bút cảm ứng Apple', 1000000, 'but-cam-ung-apple-pencil-2.webp', 342, '', 3, 2),
(199, 'Cáp chuyển đổi', 500000, 'capChuyenapple.webp', 342, '', 3, 2),
(200, 'Tai nghe Airpods 2', 3200000, 'ap-airpods-2.webp', 122, '', 3, 2),
(201, 'Macbook Pro 13 M2', 33000000, 'apple macbook pro 13 m2.webp', 343, '', 2, 2),
(202, 'Macbook Pro 14', 33000000, 'mac-pro-14-inch-m22023.webp', 343, '', 2, 2),
(203, 'Macbook air m2 2022', 43000000, 'mac-airm2-2022.webp', 342, '', 2, 2),
(204, 'Macbook M1 Pro', 40000000, 'mac m1_pro.webp', 321123, '', 2, 2),
(206, 'Samsung Galaxy S22Ultra', 26000000, 'Galaxy-S22-Ultra-Green-600x600.jpg', 462, '', 1, 4),
(211, 'Kích wifi Xiaomi', 3000000, 'kichwfXiaomi.webp', 321, '', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `us_id` int(11) NOT NULL,
  `hoTen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `us_name` varchar(100) NOT NULL,
  `us_pass` varchar(50) NOT NULL,
  `typeuser` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`us_id`, `hoTen`, `email`, `us_name`, `us_pass`, `typeuser`) VALUES
(2, 'Admin', 'phong@gmail.com', 'admin', '1', 'admin'),
(12, 'Nguyễn Phong', 'phong20032004yt@gmail.com', 'phong', '1', 'user'),
(14, 'Thảo', 'phong20032004yt@gmail.com', 'thao', '1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `cart_fk1` (`sanpham_id`);

--
-- Indexes for table `danhgia1`
--
ALTER TABLE `danhgia1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dgia_fk1` (`id_user`),
  ADD KEY `dgia_fk2` (`id_sp`);

--
-- Indexes for table `danhmuc1`
--
ALTER TABLE `danhmuc1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `or1` (`userid`);

--
-- Indexes for table `sanph1`
--
ALTER TABLE `sanph1`
  ADD PRIMARY KEY (`sanPh_id`),
  ADD KEY `sanpham_fk1` (`id_hang`),
  ADD KEY `sanpham_fk2` (`iddanhmuc`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `danhgia1`
--
ALTER TABLE `danhgia1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `danhmuc1`
--
ALTER TABLE `danhmuc1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `sanph1`
--
ALTER TABLE `sanph1`
  MODIFY `sanPh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_fk1` FOREIGN KEY (`sanpham_id`) REFERENCES `sanph1` (`sanPh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `danhgia1`
--
ALTER TABLE `danhgia1`
  ADD CONSTRAINT `dgia_fk1` FOREIGN KEY (`id_user`) REFERENCES `users1` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dgia_fk2` FOREIGN KEY (`id_sp`) REFERENCES `sanph1` (`sanPh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `or1` FOREIGN KEY (`userid`) REFERENCES `users1` (`us_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanph1`
--
ALTER TABLE `sanph1`
  ADD CONSTRAINT `sanpham_fk1` FOREIGN KEY (`id_hang`) REFERENCES `hang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_fk2` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc1` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
