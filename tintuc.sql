-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 04:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cate`, `label`, `description`, `url`, `date_created`) VALUES
(102, 'Xã hội', '', 'xa-hoi', '0000-00-00 00:00:00'),
(103, 'Giáo dục', '', 'giao-duc', '0000-00-00 00:00:00'),
(104, 'Kinh tế', '', 'kinh-te', '0000-00-00 00:00:00'),
(105, 'Pháp luật', '', 'phap-luat', '0000-00-00 00:00:00'),
(106, 'Giải trí', '', 'giai-tri', '0000-00-00 00:00:00'),
(107, 'Thể thao', '', 'the-thao', '0000-00-00 00:00:00'),
(108, 'Công nghệ', '', 'cong-nghe', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) UNSIGNED NOT NULL,
  `idstatus` int(1) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staticlink` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) UNSIGNED NOT NULL,
  `id_cate` int(11) NOT NULL,
  `datepost` datetime NOT NULL,
  `idtype` int(10) UNSIGNED NOT NULL,
  `urlthumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `idstatus`, `title`, `staticlink`, `content`, `keywords`, `iduser`, `id_cate`, `datepost`, `idtype`, `urlthumb`) VALUES
(91, 2, 'Toàn cảnh chương trình giáo dục phổ thông mới từng cấp học', 'toan-canh-chuong-trinh-giao-duc-pho-thong-moi-tung-cap-hoc', '<p>Chương trình giáo dục phổ thông mới bao gồm&nbsp;Chương trình tổng thể&nbsp;và các&nbsp;Chương trình môn học, hoạt động giáo dục.&nbsp; Trong quá trình hoàn thiện, các chương trình môn học đã được thực nghiệm những điểm mới về nội dung, phương pháp và hình thức tổ chức giáo dục.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"1200\" src=\"/news/template/assets/images/images/chuong-trinh-gdpt-2019-600px.jpg\" width=\"164\" /></p>\n\n<p>Trước&nbsp;đó, vào chiều cùng ngày, buổi họp báo công bố chương trình diễn ra thu hút sự quan tâm&nbsp;đông&nbsp;đảo của báo giới.</p>\n', '', 1, 103, '2018-12-27 22:04:22', 1, ''),
(92, 2, 'Chương trình giáo dục phổ thông mới gồm những môn học nào?', 'chuong-trinh-giao-duc-pho-thong-moi-gom-nhung-mon-hoc-nao', '<p>Chiều nay (27/12), Bộ GD-ĐT chính thức công bố&nbsp;chương trình giáo dục phổ thông mới.&nbsp;</p>\n\n<p>Theo lãnh đạo Bộ GD-ĐT, chương trình giáo dục phổ thông&nbsp;(GDPT) mới đáp ứng nhiệm vụ nêu tại Nghị quyết số 29-NQ/TW là &quot;Xây dựng và chuẩn hóa nội dung giáo dục phổ thông theo hướng hiện đại, tinh gọn, bảo đảm chất lượng, tích hợp cao ở các lớp học dưới và phân hóa dần ở các lớp học trên; giảm số môn học bắt buộc; tăng môn học, chủ đề và hoạt động giáo dục tự chọn&quot;.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"472\" src=\"/news/template/assets/images/images/2003_1-1832064.jpg\" width=\"859\" /></p>\n\n<p><strong>Cấp Tiểu học:</strong></p>\n\n<p>Các môn học bắt buộc: Tiếng Việt, Toán, Ngoại ngữ 1, Giáo dục lối sống, Đạo đức, Tự nhiên và Xã hội, Lịch sử và Địa lý, Khoa học, Tin học và Công nghệ, Giáo dục thể chất, Nghệ thuật.</p>\n\n<p>Các môn học tự chọn: Tiếng dân tộc thiểu số và Ngoại ngữ 1 (đối với lớp 1 và 2).</p>\n\n<p>Môn học mới: Tin học và Công nghệ.</p>\n\n<p><strong>Cấp THCS:</strong></p>\n\n<p>Các môn học bắt buộc: Ngữ văn, Toán, Ngoại ngữ 1, Giáo dục công dân, Khoa học tự nhiên, Lịch sử và Địa lý, Công nghệ, Giáo dục thể chất, Nghệ thuật, Tin học (trở thành bắt buộc, khác với trước đây là tự chọn).</p>\n\n<p>Các môn học tự chọn: Tiếng dân tộc thiểu số, ngoại ngữ 2.</p>\n\n<p><strong>Cấp THPT:</strong></p>\n\n<p>Các môn học bắt buộc: Ngữ văn, Toán, ngoại ngữ 1, Giáo dục thể chất, Giáo dục quốc phòng và an ninh.</p>\n\n<p>Các môn học lựa chọn: theo nhóm Khoa học xã hội (gồm các môn: Giáo dục kinh tế và pháp luật, Lịch sử, Địa lý), nhóm Khoa học tự nhiên (gồm các môn: Vật lý, Hóa học, Sinh học), nhóm Công nghệ và nghệ thuật (gồm các môn: Công nghệ, Tin học, Nghệ thuật).</p>\n\n<p>Các môn học tự chọn: Tiếng dân tộc thiểu số, Ngoại ngữ 2.</p>\n\n<p>Ngoài 5 môn bắt buộc, học sinh THPT phải chọn tối thiểu 5 môn khác của nhóm môn được lựa chọn.</p>\n', '', 1, 103, '2018-12-27 22:26:09', 1, ''),
(93, 2, 'Bộ trưởng Phùng Xuân Nhạ giữ chức Hội đồng Giáo sư Nhà nước nhiệm kỳ mới', 'bo-truong-phung-xuan-nha-giu-chuc-hoi-dong-giao-su-nha-nuoc-nhiem-ky-moi', '<p>Ngày 24/12, Thủ tướng Nguyễn Xuân Phúc ký quyết định thành lập Hội đồng Giáo sư Nhà nước nhiệm kỳ 2018 - 2023.</p>\n\n<p>Theo đó, Bộ trưởng Bộ GD-ĐT Phùng Xuân Nhạ giữ chức Chủ tịch hội đồng.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"713\" src=\"/news/template/assets/images/images/botruong-nha-1025036.jpg\" width=\"1000\" /></p>\n\n<p>Ngoài ra, GS.TS Châu Văn Minh - Chủ tịch Viện Hàn lâm Khoa học và Công nghệ Việt Nam, được bổ nhiệm chức vụ Phó chủ tịch Hội đồng Giáo sư Nhà nước, phụ trách nhóm ngành Khoa học tự nhiên, Kỹ thuật và Công nghệ.</p>\n\n<p>GS.TS Nguyễn Quang Thuấn - Chủ tịch Viện Hàn lâm Khoa học Xã hội Việt Nam là Phó chủ tịch Hội đồng, phụ trách nhóm ngành khoa học xã hội và nhân văn, nghệ thuật, thể dục thể thao.</p>\n\n<p>Thủ tướng giao Bộ trưởng Phùng Xuân Nhạ, Chủ tịch Hội đồng, quyết định bổ nhiệm các ủy viên hội đồng và xem xét điều chỉnh, bổ sung thường xuyên hàng năm theo quy định.</p>\n\n<p>Hội đồng Giáo sư Nhà nước do Thủ tướng quyết định thành lập theo đề nghị của Bộ trưởng Giáo dục và Đào tạo. Hội đồng chịu trách nhiệm xét công nhận, bổ nhiệm hoặc hủy bỏ công nhận đạt tiêu chuẩn chức danh&nbsp;GS, PGS.</p>\n', '', 1, 103, '2018-12-27 22:32:32', 2, ''),
(94, 2, 'Tiêu chuẩn chức danh giáo sư, phó giáo sư mới ban hành', 'tieu-chuan-chuc-danh-giao-su-pho-giao-su-moi-ban-hanh', '<p>Thủ tướng vừa ban hành Quyết định số 37/2018/QĐ-TTg quy định tiêu chuẩn, thủ tục xét công nhận đạt tiêu chuẩn và bổ nhiệm chức danh giáo sư, phó giáo sư (GS, PGS); thủ tục xét hủy bỏ công nhận chức danh và miễn nhiệm chức danh GS, PGS.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"465\" src=\"/news/template/assets/images/images/giao-su-0900466.jpg\" width=\"800\" /></p>\n\n<p>Theo đó, ngoài 5 tiêu chuẩn chung gồm đạo đức nhà giáo; thời gian làm nhiệm vụ đào tạo; hoàn thành nhiệm vụ được giao và thực hiện đủ số giờ chuẩn giảng dạy theo quy định; sử dụng thành thạo ít nhất một ngoại ngữ phục vụ cho công tác chuyên môn và có khả năng giao tiếp bằng tiếng Anh: có đủ số điểm công trình khoa học quy đổi tối thiểu theo quy định ứng viên, GS có 9 tiêu chuẩn khác, PGS có thêm 8 tiêu chuẩn.</p>\n\n<p><strong>Tiêu chuẩn&nbsp;GS</strong></p>\n\n<p>Ứng viên GS ngoài đạt tiêu chuẩn chung, đã có thời gian được bổ nhiệm chức danh PGS đủ 3 năm trở lên, tính đến ngày hết hạn nộp hồ sơ đăng ký xét công nhận đạt tiêu chuẩn chức danh&nbsp;GS tại Hội đồng&nbsp;GS cơ sở.</p>\n\n<p>Trong trường hợp ứng viên đã được bổ nhiệm chức danh PGS nhưng chưa đủ 3 năm và không đủ số giờ chuẩn giảng dạy tại Khoản 3, Điều 4 theo Quyết định thì phải có ít nhất gấp hai lần điểm công trình khoa học quy đổi tối thiểu đóng góp từ các bài báo khoa học hoặc bằng độc quyền sáng chế; giải pháp khoa học.</p>\n', '', 1, 103, '2018-12-27 22:36:41', 3, ''),
(95, 2, 'Chân dung GS Sử học tài năng Phan Huy Lê', 'chan-dung-gs-su-hoc-tai-nang-phan-huy-le', '<p>Sau một tuần nhập viện cấp cứu vì bệnh tim, mặc dù được các bác sĩ cứu chữa tận tình nhưng GS. Phan Huy Lê không qua khỏi. Ông mất vào 13h36 hôm nay (23/6).</p>\n\n<p>Cùng với GS. Hà Văn Tấn, GS. Trần Quốc Vượng và GS. Đinh Xuân Lâm, GS Phan Huy Lê đã tạo nên &quot;tứ trụ&quot; của ngành sử học Việt Nam đương đại. Theo lời giải thích của cố GS. Trần Quốc Vượng thì khái niệm &quot;tứ trụ&quot; đó có lẽ hình thành vào cuối năm 1960, khi cả bốn ông đều nổi tiếng học giỏi.</p>\n\n<p>GS Phan Huy Lê sinh năm 1934 tại làng Thu Hoạch, xã Thạch Châu, huyện Thạch Hà (nay là huyện Lộc Hà), tỉnh Hà Tĩnh. Ông là hậu duệ đời thứ 14 của dòng họ Phan Huy vốn nổi danh về khoa bảng với những tên tuổi lớn như Phan Huy Cẩn, Phan Huy Ích, Phan Huy Thực, Phan Huy Vịnh, Phan Huy Chú&hellip;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"256\" src=\"/news/template/assets/images/images/gs-phan-huy-le-1530338.jpg\" width=\"469\" /></p>\n\n<p>Cụ thân sinh ra ông là Phan Huy Tùng, từng làm quan trong triều đình Huế. GS Phan Huy Lê được đánh giá là một trong những chuyên gia nghiên cứu lịch sử hàng đầu của Việt Nam. Thế nhưng, ít ai biết, ông đến với con đường sử học như một lẽ&hellip; bất đắc dĩ.</p>\n\n<p>&ldquo;Sau khi tốt nghiệp cấp 3, tôi cùng vài người bạn ra Thanh Hoá học đại học. Trên đường đi, do máy bay ném bom liên tục nên chúng tôi đến nhập học muộn 5 ngày. GS Trần Văn Giàu - hiệu trưởng nhà trường khi đó đã bắt cả nhóm vào học ban văn &ndash; sử, trong khi nguyện vọng của tôi là học lớp toán - lý. Tôi đã bị ép học sử một cách bất đắc dĩ, nhưng càng tìm hiểu, tôi càng thấy nó thú vị&rdquo; - ông kể lại.</p>\n\n<p>Sau khi tốt nghiệp đại học, ông được giữ lại làm trợ lý tập sự tại Khoa Lịch sử, Trường Đại học Tổng hợp Hà Nội (nay là Đại học Quốc gia Hà Nội), dưới sự dẫn dắt của GS Đào Duy Anh.</p>\n\n<p>Chỉ hai năm sau, ông được giao nhiệm vụ làm Chủ nhiệm bộ môn Lịch sử Việt Nam cổ - trung đại và liên tục giữ trọng trách này hàng chục năm liền. Ngoài việc giảng dạy trong nước, ông còn tham gia giảng dạy cho nhiều trường đại học trên thế giới như Đại học Paris (Pháp), Đại học Amsterdam (Hà Lan)...</p>\n', '', 1, 103, '2018-12-27 22:38:41', 2, ''),
(96, 2, 'Thu Thảo vượt Quang Hải ở giải VĐV tiêu biểu năm 2018', 'thu-thao-vuot-quang-hai-o-giai-vdv-tieu-bieu-nam-2018', '<p>VĐV người Ba Vì (Hà Nội)&nbsp;<a href=\"https://vnexpress.net/the-thao/thu-thao-doat-hc-vang-dien-kinh-dau-tien-cho-viet-nam-o-asiad-3799075.html\">đoạt HC vàng nhảy xa ở Asiad 2018</a>&nbsp;với thành tích 6,55 mét. Đây là HC vàng đầu tiên của điền kinh Việt Nam trong lịch sử Đại hội thể thao châu Á.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"301\" src=\"/news/template/assets/images/images/thu-tha-o-5942-1535375349-1545-7700-6790-1545910322.png\" width=\"499\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Với chức vô địch V-League và AFF Cup, Quang Hải được 622 điểm. Đội tuyển Việt Nam còn hai cầu thủ nằm trong top 10 VĐV tiêu biểu toàn quốc, đó là tiền đạo Nguyễn Anh Đức (thứ chín) và trung vệ Trần Đình Trọng (thứ mười).</p>\n\n<p>Vị trí thứ ba thuộc về kình ngư Nguyễn Huy Hoàng, với HC bạc Asiad ở nội dung 1.500 m tự do. VĐV người Quảng Bình được 462 điểm. Anh là người trẻ nhất trong top 10, khi mới 18 tuổi.</p>\n\n<p>Các vị trí từ thứ tư đến thứ tám lần lượt thuộc về Phạm Thị Thảo (rowing), Nguyễn Văn Trí (pencak silat), Lê Thanh Tùng (TDDC), Quách Thị Lan (điền kinh) và Trần Đình Nam (pencak silat).</p>\n\n<p>Ở hạng mục HLV, người thầy của Thu Thảo - ông Nguyễn Mạnh Hiếu - đứng đầu với 296 điểm. Theo sau là HLV Lê Văn Quang (rowing) và Nguyễn Văn Hùng (pencak silat).</p>\n\n<p>Kình ngư Võ Thanh Tùng được vinh danh ở hạng mục VĐV khuyết tật, với 385 điểm. Còn danh hiệu HLV tiêu biểu thuộc về ông Bùi Thanh Tâm (Cần Thơ).</p>\n\n<p>Danh hiệu&nbsp;VĐV và HLV tiêu biểu, VĐV và HLV&nbsp;thể thao người khuyết tật xuất sắc, dành cho người có quốc tịch Việt Nam, là những phần thưởng cao quý nhằm vinh danh các VĐV đạt thành tích xuất sắc và HLV có vận động viên thi đấu đạt thành tích cao trong năm.</p>\n\n<p>Giải do các nhà báo chuyên theo dõi thể thao trong nước bình chọn.&nbsp;Cuộc bầu chọn năm nay diễn ra đồng loạt ngày 27-12 tại Hà Nội, TP HCM và Đà Nẵng. Mỗi lá phiếu được bầu 10 VĐV có thành tích cao và HLV có VĐV đạt thành tích cao trong năm 2018, theo thang điểm từ 1 đến 10 (vị trí cao nhất được tính 10 điểm). Ban tổ chức chọn ra 10 gương mặt tiêu biểu dựa trên tổng điểm họ nhận được.&nbsp;&nbsp;</p>\n', '', 1, 107, '2018-12-27 22:41:38', 2, ''),
(97, 2, 'Thu Thảo không ăn nổi cơm trước khi giành HC vàng lịch sử cho điền kinh', 'thu-thao-khong-an-noi-com-truoc-khi-gianh-hc-vang-lich-su-cho-dien-kinh', '<p>&quot;Tôi đang rất vui sướng vì HC vàng này. Tôi muốn gửi lời cảm ơn đến bố mẹ, bạn bè và người thân. Hôm nay tôi không thực sự hài lòng với thành tích của bản thân. Nhưng ở đấu trường như thế này không dễ để giữ tâm trạng thoải mái. Hôm nay, tôi cảm thấy lo lắng và không ăn được cơm. Trước khi ra thi đấu, tôi còn bị tâm lý, nhưng đến khi thi, tôi chỉ biết cố gắng hết khả năng&quot;, Bùi Thị Thu Thảo chia sẻ.</p>\n\n<p>&quot;Hôm nay, tất cả VĐV thi nhảy xa đều có tâm trạng căng thẳng, nên không đạt thành tích tốt nhất&quot;, HLV Nguyễn Mạnh Hiếu nói. &quot;Vì thế, thành tích của Thu Thảo hôm nay có thể coi là xuất sắc&quot;.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" height=\"372\" src=\"/news/template/assets/images/images/tha-o-bo-4951-1535381002.jpg\" width=\"620\" /></p>\n\n<p>&nbsp;</p>\n', '', 1, 107, '2018-12-27 22:45:08', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `poststatus`
--

CREATE TABLE `poststatus` (
  `idstatus` int(1) NOT NULL,
  `statusname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poststatus`
--

INSERT INTO `poststatus` (`idstatus`, `statusname`) VALUES
(1, 'Thùng rác'),
(2, 'Công khai'),
(3, 'Chờ xét duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `idtype` int(10) UNSIGNED NOT NULL,
  `typename` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`idtype`, `typename`) VALUES
(1, 'Normal'),
(2, 'Hot News'),
(3, 'Tin Tức Nổi Bật'),
(4, 'List Menu2'),
(5, 'List Menu3'),
(6, 'Siderbar Left');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) UNSIGNED NOT NULL,
  `idgroup` int(255) NOT NULL,
  `username` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `idgroup`, `username`, `password`, `email`, `fullname`) VALUES
(1, 1, 'admin', '9ae60b6f2bfead9fd4da6466d47351bd', 'thangdangblog@gmail.com', 'Đặng Quốc Thắng'),
(2, 3, 'thangdangblog', '9ae60b6f2bfead9fd4da6466d47351bd', 'thangdangblog', 'Đặng Quốc Thắng');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `idgroup` int(255) NOT NULL,
  `namegroup` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`idgroup`, `namegroup`) VALUES
(1, 'Quản trị viên'),
(2, 'Biên tập'),
(3, 'Khách');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `id_cate` (`id_cate`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idtype` (`idtype`),
  ADD KEY `post_ibfk_1` (`idstatus`);

--
-- Indexes for table `poststatus`
--
ALTER TABLE `poststatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idtype`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idgoup` (`idgroup`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`idgroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `poststatus`
--
ALTER TABLE `poststatus`
  MODIFY `idstatus` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `idtype` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `idgroup` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idstatus`) REFERENCES `poststatus` (`idstatus`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `postcate` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id_cate`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `postuser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `typepost` FOREIGN KEY (`idtype`) REFERENCES `types` (`idtype`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idgroup`) REFERENCES `usergroup` (`idgroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
