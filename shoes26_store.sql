-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes26_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bl` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_ctdh` int(11) NOT NULL,
  `ma_dh` int(10) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(10) NOT NULL,
  `ma_tk` int(10) NOT NULL,
  `ngay_dat` date NOT NULL,
  `nguoi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nhan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `ma_gg` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `trang_thai_tt` tinyint(1) NOT NULL,
  `trang_thai_gh` tinyint(1) NOT NULL DEFAULT 0,
  `ghi_chu_kh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu_ad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `size` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_old` int(11) NOT NULL,
  `price_new` int(11) NOT NULL DEFAULT 0,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `iddm` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1,
  `special` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name`, `price_old`, `price_new`, `img`, `mota`, `iddm`, `luotxem`, `trang_thai`, `special`) VALUES
(101, 'Ralph Sampson', 4998, 0, 'puma-Ralph-Sampson.jpg', 'Kiểu dáng giày sneaker thể thao cổ thấp \r\nPhom ôm dáng chân, dễ dàng di chuyển\r\nPhần đệm lót trong thấm hút mồ hôi tốt\r\nĐế giữa có độ đàn hồi tốt, hỗ trợ mọi hoạt động\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện', 38, 16, 1, 0),
(103, 'Vans Classic Slip On ', 5559, 0, 'vans-classic-slipon.jpg', 'Họa tiết kẻ caro hay còn gọi là họa tiết kẻ caro là một trong những thương hiệu “độc quyền” của nhà Vans. Đây cũng là một trong những ấn tượng đáng nhớ nhất khi mọi người nhắc về giày Vans. Đôi giày này vẫn mang phiên bản Slip-on cổ điển nhưng chất liệu Canvas được phát huy và sử dụng một cách đặc biệt để tạo cảm giác thoải mái, mát mẻ cho đôi chân. Giày vải đế thấp đơn giản với rất ít dây buộc Logo thương hiệu VANS phía sau kết hợp với đế cao su siêu mềm đàn hồi.', 39, 12, 1, 0),
(104, 'ADIDAS HYPERTURF', 3199, 0, 'adidas-HYPERTURF.jpg', 'Dạo phố với phong cách mượn cảm hứng từ thiên nhiên hùng vĩ. Đôi Giày adidas Hyperturf mang đến cho bạn sự thoải mái khi khám phá những con phố mới hoặc dạo bước đến quán cà phê yêu thích. Các chất liệu vải ripstop, da nubuck, da lộn và vải lưới kết hợp tạo nên thân giày bền bỉ. Lớp đệm EVA siêu nhẹ kết hợp công nghệ Adiprene+ và FORMOTION để mang lại cảm giác nhẹ nhàng và nâng đỡ cho từng bước chân.', 37, 88, 1, 0),
(105, 'Puma RS-X', 2135, 0, 'puma-RS-X.jpg', 'Mẫu Sneaker Puma RSX là một trong những thiết kế huyền thoại của Puma. Đây là mẫu giày Chunky được đánh giá là xuất sắc nhất của hãng, thu hút được sự yêu thích của đông đảo giới trẻ. Đây thực sự là mẫu giày đã góp phần làm nên tên tuổi của Puma như hiện tại.', 38, 31, 1, 1),
(106, 'Jordan Series Mid', 4485, 0, 'Jordan-Series-Mid.jpg', 'Phần giữa của mô hình thời trang phía trước của Jordan Brand đã được lựa chọn cực kỳ kỹ lưỡng trong suốt cả năm, với ít hơn một số đề xuất được tung ra chỉ sau vài tháng bị loại bỏ kể từ cuối năm 2022. Tuy nhiên, thời tiết bắt đầu vào mùa thu mang đến thời điểm thích hợp cho Jordan Series Mid trở lại sau khi hợp tác với Maison Château Rouge vào tháng 6.', 36, 8, 1, 0),
(112, 'VANS VN0A5', 890, 0, 'vans-VN0A5KRDBZW.jpg', 'Vans VN0A5KRDBZW thuộc dòng Authentic Collage Black/White mới nhất trong bộ sưu tập của thương hiệu Vans', 39, 13, 1, 0),
(113, 'SuperStart', 2145, 0, 'superstart1.jpg', 'Suốt hơn 50 năm, đôi sneaker adidas Superstar luôn là lựa chọn hàng đầu của các huyền thoại thể thao và thời trang đường phố, kết nối các nhà kiến tạo đến từ mọi nền văn hóa. Mũi giày vỏ sò dễ dàng nhận diện ngay lập tức kết hợp với ba sọc viền răng cưa và các điểm nhấn adidas Originals. Luôn hợp mốt, giày có kiểu dáng kinh điển với chất liệu da cật tăng cường độ bền chắc và thoải mái.', 37, 20, 1, 0),
(114, 'LeBron 19', 4382, 1000, 'le19.webp', 'LeBron phát triển mạnh khi tiền đặt cược cao và áp lực tăng lên. LeBron 19 khai thác năng lượng đó bằng hệ thống đệm vừa khít và cập nhật. Ống lót bên trong vừa khít được kéo lại với nhau bằng một lớp phủ điêu khắc mà dây buộc xuyên qua để giúp ngăn bàn chân từ việc di chuyển bên trong giày. Các miếng đệm nhúng ở lưỡi gà và xung quanh cổ giày giúp giảm trọng lượng, giữ thẳng cổ chân và mang lại cho người chơi cảm giác an toàn cũng như sự tự tin để dốc hết sức khi trận đấu đang diễn ra.', 36, 18, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `ma_hh`, `img`) VALUES
(18, 112, 'vans-VN0A5KRDBZW.jpg'),
(19, 112, 'vn0a5krdbzw-2_571f2771e0194b809a026fb42de51a65_small.webp'),
(20, 112, 'vn0a5krdbzw-3_af2ca02fd433406daee58aaf95aea705_small.webp'),
(21, 112, 'vn0a5krdbzw-web1_47f2098e739b46f997e6ae565b592de0_small.webp'),
(22, 114, 'le19-2.webp'),
(23, 114, 'le19-3.webp'),
(24, 114, 'le19-4.webp'),
(25, 113, '31cf91f6e16c4f0aa11caad6009a4590_9366.webp'),
(26, 113, '3708ab90979a4ba59535aad6009a2fa8_9366.webp'),
(27, 113, 'ff2e419f1eda4ebab23faad6009a3a9e_9366.webp'),
(28, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(1).webp'),
(29, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(2).webp'),
(30, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(3).webp'),
(31, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers.webp'),
(32, 103, '2_2c4f03feec894860aa5127d5bb7fa579_master.webp'),
(33, 103, '3_2d4a9051fdcb4f92affb894c20e06161_master.webp'),
(34, 103, '4_fcfb1eae6e664a2987bc97790cad0307_master.webp'),
(35, 106, 'jordan-series-mid-mantra-orange-DA8026-081-2.webp'),
(36, 106, 'jordan-series-mid-mantra-orange-DA8026-081-3.webp'),
(37, 106, 'jordan-series-mid-mantra-orange-DA8026-081-5.webp'),
(38, 106, 'jordan-series-mid-mantra-orange-DA8026-081-6.webp'),
(39, 104, '5f277451d94e491ba73daecb00db6d3b_9366.webp'),
(40, 104, '6d776c9b4dc94b4aa649aecb00db829d_9366.webp'),
(41, 104, '9122b2eccdbc486a84f3aecb00db7826_9366.webp'),
(42, 104, 'fb30613c554849a5a6ecaecb00fccff0_9366.webp');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(36, 'NIKE'),
(37, 'ADIDAS'),
(38, 'PUMA'),
(39, 'VANS');

-- --------------------------------------------------------

--
-- Table structure for table `ma_giam_gia`
--

CREATE TABLE `ma_giam_gia` (
  `ma_gg` varchar(255) NOT NULL,
  `ngay_bd` date NOT NULL,
  `ngay_kt` date NOT NULL,
  `giatri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ma_giam_gia`
--

INSERT INTO `ma_giam_gia` (`ma_gg`, `ngay_bd`, `ngay_kt`, `giatri`) VALUES
('Z39599', '2022-12-07', '2022-12-08', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_tk` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `img`, `ho_ten`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(128, '', 'Admin', 'admin', '123', '', 'Thôn 1, Lộc Ngãi, Bảo Lâm, Lâm Đồng', '0383383053', 1),
(191, '', 'ce', 'ntd', '456', 'ng.tanduy261203@gmail.com', 'Thới An, Quận 12', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydang` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `name`, `img`, `mota`, `ngaydang`) VALUES
(26, 'Tết độc thân không đơn độc - Chương trình ưu đãi \"MUA 1 TẶNG 1\" cực hấp dẫn, xem ngay!', 'blog1.jpg', 'Tết độc thân không sợ đơn độc, AVASport tặng bạn cơn mưa ưu đãi \"MUA 1 TẶNG 1\" siêu hấp dẫn. Mua một sản phẩm bất kỳ bạn sẽ được tặng kèm theo một sản phẩm cực chất lượng. Xem ngay bài viết dưới đây để biết thêm thông tin chi tiết!', ' 02 Dec, 22'),
(28, '[24/12-30/1] Tuần lễ adidas siêu sale cực khủng lên đến 50%, nhanh tay chốt đơn!', 'blog3.jpg', 'Nhân dịp tuần lễ adidas, Z-MHON giảm giá nhiều mặt hàng như giày dép, quần áo, phụ kiện thể thao lên đến 50%, nhanh tay chốt đơn sản phẩm chính hãng cùng với mức giá siêu hời ngay nhé!', ' 02 Dec, 22'),
(29, '[9/12 - 25/12]Tuần lễ Puma - Siêu sale cực sốc lên đến 50%, mua ngày kẻo lỡ!', 'blog4.jpg', 'Z-MHON xin đem đến các bạn chương trình ưu đãi lên đến 50% từ thương hiệu Puma. Các mặt hàng thể thao Puma chính hãng và chất lượng tuyệt vời đang chờ bạn sở hữu, hãy thêm vào giỏ hàng ngay nào!', ' 02 Dec, 22'),
(30, 'Cách phơi giày trắng không bị ố vàng đơn giản, hiệu quả bất ngờ', 'blog5.jpg', 'Hiện tượng giày trắng bị ố vàng khi phơi rất thường xuyên xảy ra và gây ảnh hưởng đến tính thẩm mỹ của giày. Cùng Z-MHON xem ngay bài viết hướng dẫn cách phơi giày trắng không bị ố vàng nhé!', ' 02 Dec, 22'),
(31, '11 mẹo khử mùi hôi dép cao su cực đơn giản và hiệu quả', 'blog7.jpg', 'Dép, đặc biệt là dép cao su có mùi hăng nồng khi mới mua về, gây khó chịu khiến nhiều người phải tìm cách loại bỏ. Tuy nhiên, không phải ai cũng biết cách thực hiện hoặc làm không đúng cách mùi hôi vẫn còn bám lại. Nếu bạn vẫn còn băn khoăn, hãy tham khảo', ' 02 Dec, 22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bl_hh` (`idpro`),
  ADD KEY `fk_bl_tk` (`iduser`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_ctdh`),
  ADD KEY `fk_ctdh_dh` (`ma_dh`),
  ADD KEY `fk_ctdh_hh` (`ma_hh`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `fk_dh_tk` (`ma_tk`),
  ADD KEY `fk_dh_mgg` (`ma_gg`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_sanpham` (`ma_hh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hh_lh` (`iddm`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ha_hh` (`ma_hh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD PRIMARY KEY (`ma_gg`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1952;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_bl_hh` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bl_tk` FOREIGN KEY (`iduser`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ctdh_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_dh_mgg` FOREIGN KEY (`ma_gg`) REFERENCES `ma_giam_gia` (`ma_gg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dh_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_lh` FOREIGN KEY (`iddm`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_ha_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
