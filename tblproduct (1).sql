-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 11:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `cat`, `des`) VALUES
(341, 'CREPE SILK SAREE', 'c1', 'images/c1.jpg', 500.00, '', ''),
(342, 'CREPE SILK SAREE', 'c2', 'images/c2.jpg', 1300.00, '', ''),
(343, 'CREPE SILK SAREE', 'c3', 'images/c3.jpg', 4000.00, '', ''),
(344, 'CREPE SILK SAREE', 'c4', 'images/c4.jpg', 500.00, '', ''),
(345, 'CREPE SILK SAREE', 'c5', 'images/c5.jpg', 900.00, '', ''),
(346, 'CREPE SILK SAREE', 'c6', 'images/c6.jpg', 1900.00, '', ''),
(347, 'CREPE SILK SAREE', 'c7', 'images/c7.jpg', 1500.00, '', ''),
(348, 'CREPE SILK SAREE', 'c8', 'images/c8.jpg', 8800.00, '', ''),
(349, 'CREPE SILK SAREE', 'c9', 'images/c9.jpg', 1500.00, '', ''),
(350, 'CREPE SILK SAREE', 'c10', 'images/c10.jpg', 1600.00, '', ''),
(351, 'CREPE SILK SAREE', 'c11', 'images/c11.jpg', 1500.00, '', ''),
(352, 'CREPE SILK SAREE', 'c12', 'images/c12.jpg', 2200.00, '', ''),
(353, 'CREPE SILK SAREE', 'c13', 'images/c13.jpg', 1500.00, '', ''),
(354, 'CREPE SILK SAREE', 'c14', 'images/c14.jpg', 6700.00, '', ''),
(355, 'CREPE SILK SAREE', 'c15', 'images/c15.jpg', 2100.00, '', ''),
(356, 'CREPE SILK SAREE', 'c16', 'images/c16.jpg', 2500.00, '', ''),
(357, 'KANJIVARAM SILK SAREE', 'k1', 'images/k1.jpg', 500.00, '', ''),
(358, 'KANJIVARAM SILK SAREE', 'k2', 'images/k2.jpg', 1300.00, '', ''),
(359, 'KANJIVARAM SILK SAREE', 'k3', 'images/k3.jpg', 4000.00, '', ''),
(360, 'KANJIVARAM SILK SAREE', 'k4', 'images/k4.jpg', 500.00, '', ''),
(361, 'KANJIVARAM SILK SAREE', 'k5', 'images/k5.jpg', 900.00, '', ''),
(362, 'KANJIVARAM SILK SAREE', 'k6', 'images/k6.jpg', 1900.00, '', ''),
(363, 'KANJIVARAM SILK SAREE', 'k7', 'images/k7.jpg', 1500.00, '', ''),
(364, 'KANJIVARAM SILK SAREE', 'k8', 'images/k8.jpg', 8800.00, '', ''),
(365, 'KANJIVARAM SILK SAREE', 'k9', 'images/k9.jpg', 1500.00, '', ''),
(366, 'KANJIVARAM SILK SAREE', 'k10', 'images/k10.jpg', 1600.00, '', ''),
(367, 'KANJIVARAM SILK SAREE', 'k11', 'images/k11.jpg', 1500.00, '', ''),
(368, 'KANJIVARAM SILK SAREE', 'k12', 'images/k12.jpg', 2200.00, '', ''),
(369, 'KANJIVARAM SILK SAREE', 'k13', 'images/k13.jpg', 1500.00, '', ''),
(370, 'KANJIVARAM SILK SAREE', 'k14', 'images/k14.jpg', 6700.00, '', ''),
(371, 'KANJIVARAM SILK SAREE', 'k15', 'images/k15.jpg', 2100.00, '', ''),
(372, 'KANJIVARAM SILK SAREE', 'k16', 'images/k16.jpg', 2500.00, '', ''),
(373, 'MICRO MINI BAG', 'mb1', 'images/mb1.jpg', 500.00, '', ''),
(374, 'MICRO MINI BAG', 'mb2', 'images/mb2.jpg', 1300.00, '', ''),
(375, 'MICRO MINI BAG', 'mb3', 'images/mb3.jpg', 4000.00, '', ''),
(376, 'MICRO MINI BAG', 'mb4', 'images/mb4.jpg', 500.00, '', ''),
(377, 'MICRO MINI BAG', 'mb5', 'images/mb5.jpg', 900.00, '', ''),
(378, 'MICRO MINI BAG', 'mb6', 'images/mb6.jpg', 1900.00, '', ''),
(379, 'MICRO MINI BAG', 'mb7', 'images/mb7.jpg', 1500.00, '', ''),
(380, 'MICRO MINI BAG', 'mb8', 'images/mb8.jpg', 8800.00, '', ''),
(381, 'MICRO MINI BAG', 'mb9', 'images/mb9.jpg', 1500.00, '', ''),
(382, 'MICRO MINI BAG', 'mb10', 'images/mb10.jpg', 1600.00, '', ''),
(383, 'MICRO MINI BAG', 'mb11', 'images/mb11.jpg', 1500.00, '', ''),
(384, 'MICRO MINI BAG', 'mb12', 'images/mb12.jpg', 2200.00, '', ''),
(385, 'MICRO MINI BAG', 'mb13', 'images/mb13.jpg', 1500.00, '', ''),
(386, 'MICRO MINI BAG', 'mb14', 'images/mb14.jpg', 6700.00, '', ''),
(387, 'MICRO MINI BAG', 'mb15', 'images/mb15.jpg', 2100.00, '', ''),
(388, 'MICRO MINI BAG', 'mb16', 'images/mb16.jpg', 2500.00, '', ''),
(389, 'PURE SOUTH INDIAN COTTON SAREE', 'p1', 'images/p1.jpg', 500.00, '', ''),
(390, 'PURE SOUTH INDIAN COTTON SAREE', 'p2', 'images/p2.jpg', 1300.00, '', ''),
(391, 'PURE SOUTH INDIAN COTTON SAREE', 'p3', 'images/p3.jpg', 4000.00, '', ''),
(392, 'PURE SOUTH INDIAN COTTON SAREE', 'p4', 'images/p4.jpg', 500.00, '', ''),
(393, 'PURE SOUTH INDIAN COTTON SAREE', 'p5', 'images/p5.jpg', 900.00, '', ''),
(394, 'PURE SOUTH INDIAN COTTON SAREE', 'p6', 'images/p6.jpg', 1900.00, '', ''),
(395, 'PURE SOUTH INDIAN COTTON SAREE', 'p7', 'images/p7.jpg', 1500.00, '', ''),
(396, 'PURE SOUTH INDIAN COTTON SAREE', 'p8', 'images/p8.jpg', 8800.00, '', ''),
(397, 'PURE SOUTH INDIAN COTTON SAREE', 'p9', 'images/p9.jpg', 1500.00, '', ''),
(398, 'PURE SOUTH INDIAN COTTON SAREE', 'p10', 'images/p10.jpg', 1600.00, '', ''),
(399, 'PURE SOUTH INDIAN COTTON SAREE', 'p11', 'images/p11.jpg', 1500.00, '', ''),
(400, 'PURE SOUTH INDIAN COTTON SAREE', 'p12', 'images/p12.jpg', 2200.00, '', ''),
(401, 'PURE SOUTH INDIAN COTTON SAREE', 'p13', 'images/p13.jpg', 1500.00, '', ''),
(402, 'PURE SOUTH INDIAN COTTON SAREE', 'p14', 'images/p14.jpg', 6700.00, '', ''),
(403, 'PURE SOUTH INDIAN COTTON SAREE', 'p15', 'images/p15.jpg', 2100.00, '', ''),
(404, 'PURE SOUTH INDIAN COTTON SAREE', 'p16', 'images/p16.jpg', 2500.00, '', ''),
(405, 'RAW SILK SAREE', 'r1', 'images/r1.jpg', 500.00, '', ''),
(406, 'RAW SILK SAREE', 'r2', 'images/r2.jpg', 1300.00, '', ''),
(407, 'RAW SILK SAREE', 'r3', 'images/r3.jpg', 4000.00, '', ''),
(408, 'RAW SILK SAREE', 'r4', 'images/r4.jpg', 500.00, '', ''),
(409, 'RAW SILK SAREE', 'r5', 'images/r5.jpg', 900.00, '', ''),
(410, 'RAW SILK SAREE', 'r6', 'images/r6.jpg', 1900.00, '', ''),
(411, 'RAW SILK SAREE', 'r7', 'images/r7.jpg', 1500.00, '', ''),
(412, 'RAW SILK SAREE', 'r8', 'images/r8.jpg', 8800.00, '', ''),
(413, 'RAW SILK SAREE', 'r9', 'images/r9.jpg', 1500.00, '', ''),
(414, 'RAW SILK SAREE', 'r10', 'images/r10.jpg', 1600.00, '', ''),
(415, 'RAW SILK SAREE', 'r11', 'images/r11.jpg', 1500.00, '', ''),
(416, 'RAW SILK SAREE', 'r12', 'images/r12.jpg', 2200.00, '', ''),
(417, 'RAW SILK SAREE', 'r13', 'images/r13.jpg', 1500.00, '', ''),
(418, 'RAW SILK SAREE', 'r14', 'images/r14.jpg', 6700.00, '', ''),
(419, 'RAW SILK SAREE', 'r15', 'images/r15.jpg', 2100.00, '', ''),
(420, 'RAW SILK SAREE', 'r16', 'images/r16.jpg', 2500.00, '', ''),
(421, 'SOFT SILK SAREE', 's1', 'images/s1.jpg', 500.00, '', ''),
(422, 'SOFT SILK SAREE', 's2', 'images/s2.jpg', 1300.00, '', ''),
(423, 'SOFT SILK SAREE', 's3', 'images/s3.jpg', 4000.00, '', ''),
(424, 'SOFT SILK SAREE', 's4', 'images/s4.jpg', 500.00, '', ''),
(425, 'SOFT SILK SAREE', 's5', 'images/s5.jpg', 900.00, '', ''),
(426, 'SOFT SILK SAREE', 's6', 'images/s6.jpg', 1900.00, '', ''),
(427, 'SOFT SILK SAREE', 's7', 'images/s7.jpg', 1500.00, '', ''),
(428, 'SOFT SILK SAREE', 's8', 'images/s8.jpg', 8800.00, '', ''),
(429, 'SOFT SILK SAREE', 's9', 'images/s9.jpg', 1500.00, '', ''),
(430, 'SOFT SILK SAREE', 's10', 'images/s10.jpg', 1600.00, '', ''),
(431, 'SOFT SILK SAREE', 's11', 'images/s11.jpg', 1500.00, '', ''),
(432, 'SOFT SILK SAREE', 's12', 'images/s12.jpg', 2200.00, '', ''),
(433, 'SOFT SILK SAREE', 's13', 'images/s13.jpg', 1500.00, '', ''),
(434, 'SOFT SILK SAREE', 's14', 'images/s14.jpg', 6700.00, '', ''),
(435, 'SOFT SILK SAREE', 's15', 'images/s15.jpg', 2100.00, '', ''),
(436, 'SOFT SILK SAREE', 's16', 'images/s16.jpg', 2500.00, '', ''),
(437, 'SOFT SILK SAREE', 'sb1', 'images/sb1.jpg', 500.00, '', ''),
(438, 'SOFT SILK SAREE', 'sb2', 'images/sb2.jpg', 1300.00, '', ''),
(439, 'SOFT SILK SAREE', 'sb3', 'images/sb3.jpg', 4000.00, '', ''),
(440, 'SOFT SILK SAREE', 'sb4', 'images/sb4.jpg', 500.00, '', ''),
(441, 'SOFT SILK SAREE', 'sb5', 'images/sb5.jpg', 900.00, '', ''),
(442, 'SOFT SILK SAREE', 'sb6', 'images/sb6.jpg', 1900.00, '', ''),
(443, 'SOFT SILK SAREE', 'sb7', 'images/sb7.jpg', 1500.00, '', ''),
(444, 'SOFT SILK SAREE', 'sb8', 'images/sb8.jpg', 8800.00, '', ''),
(445, 'SOFT SILK SAREE', 'sb9', 'images/sb9.jpg', 1500.00, '', ''),
(446, 'SOFT SILK SAREE', 'sb10', 'images/sb10.jpg', 1600.00, '', ''),
(447, 'SOFT SILK SAREE', 'sb11', 'images/sb11.jpg', 1500.00, '', ''),
(448, 'SOFT SILK SAREE', 'sb12', 'images/sb12.jpg', 2200.00, '', ''),
(449, 'SOFT SILK SAREE', 'sb13', 'images/sb13.jpg', 1500.00, '', ''),
(450, 'SOFT SILK SAREE', 'sb14', 'images/sb14.jpg', 6700.00, '', ''),
(451, 'SOFT SILK SAREE', 'sb15', 'images/sb15.jpg', 2100.00, '', ''),
(452, 'SOFT SILK SAREE', 'sb16', 'images/sb16.jpg', 2500.00, '', ''),
(453, 'SOFT SILK SAREE', 'stb1', 'images/stb1.jpg', 500.00, '', ''),
(454, 'SOFT SILK SAREE', 'stb2', 'images/stb2.jpg', 1300.00, '', ''),
(455, 'SOFT SILK SAREE', 'stb3', 'images/stb3.jpg', 4000.00, '', ''),
(456, 'SOFT SILK SAREE', 'stb4', 'images/stb4.jpg', 500.00, '', ''),
(457, 'SOFT SILK SAREE', 'stb5', 'images/stb5.jpg', 900.00, '', ''),
(458, 'SOFT SILK SAREE', 'stb6', 'images/stb6.jpg', 1900.00, '', ''),
(459, 'SOFT SILK SAREE', 'stb7', 'images/stb7.jpg', 1500.00, '', ''),
(460, 'SOFT SILK SAREE', 'stb8', 'images/stb8.jpg', 8800.00, '', ''),
(461, 'SOFT SILK SAREE', 'stb9', 'images/stb9.jpg', 1500.00, '', ''),
(462, 'SOFT SILK SAREE', 'stb10', 'images/stb10.jpg', 1600.00, '', ''),
(463, 'SOFT SILK SAREE', 'stb11', 'images/stb11.jpg', 1500.00, '', ''),
(464, 'SOFT SILK SAREE', 'stb12', 'images/stb12.jpg', 2200.00, '', ''),
(465, 'SOFT SILK SAREE', 'stb13', 'images/stb13.jpg', 1500.00, '', ''),
(466, 'SOFT SILK SAREE', 'stb14', 'images/stb14.jpg', 6700.00, '', ''),
(467, 'SOFT SILK SAREE', 'stb15', 'images/stb15.jpg', 2100.00, '', ''),
(468, 'SOFT SILK SAREE', 'stb16', 'images/stb16.jpg', 2500.00, '', ''),
(469, 'TOP HANDLE BAG', 'tb1', 'images/tb1.jpg', 500.00, '', ''),
(470, 'TOP HANDLE BAG', 'tb2', 'images/tb2.jpg', 1300.00, '', ''),
(471, 'TOP HANDLE BAG', 'tb3', 'images/tb3.jpg', 4000.00, '', ''),
(472, 'TOP HANDLE BAG', 'tb4', 'images/tb4.jpg', 500.00, '', ''),
(473, 'TOP HANDLE BAG', 'tb5', 'images/tb5.jpg', 900.00, '', ''),
(474, 'TOP HANDLE BAG', 'tb6', 'images/tb6.jpg', 1900.00, '', ''),
(475, 'TOP HANDLE BAG', 'tb7', 'images/tb7.jpg', 1500.00, '', ''),
(476, 'TOP HANDLE BAG', 'tb8', 'images/tb8.jpg', 8800.00, '', ''),
(477, 'TOP HANDLE BAG', 'tb9', 'images/tb9.jpg', 1500.00, '', ''),
(478, 'TOP HANDLE BAG', 'tb10', 'images/tb10.jpg', 1600.00, '', ''),
(479, 'TOP HANDLE BAG', 'tb11', 'images/tb11.jpg', 1500.00, '', ''),
(480, 'TOP HANDLE BAG', 'tb12', 'images/tb12.jpg', 2200.00, '', ''),
(481, 'TOP HANDLE BAG', 'tb13', 'images/tb13.jpg', 1500.00, '', ''),
(482, 'TOP HANDLE BAG', 'tb14', 'images/tb14.jpg', 6700.00, '', ''),
(483, 'TOP HANDLE BAG', 'tb15', 'images/tb15.jpg', 2100.00, '', ''),
(484, 'TOP HANDLE BAG', 'tb16', 'images/tb16.jpg', 2500.00, '', ''),
(486, 'BULK UNIFORM SAREE', 'b2', 'images/b2.jpg', 1300.00, '', ''),
(487, 'BULK UNIFORM SAREE', 'b3', 'images/b3.jpg', 4000.00, '', ''),
(488, 'BULK UNIFORM SAREE', 'b4', 'images/b4.jpg', 500.00, '', ''),
(489, 'BULK UNIFORM SAREE', 'b5', 'images/b5.jpg', 900.00, '', ''),
(490, 'BULK UNIFORM SAREE', 'b6', 'images/b6.jpg', 1900.00, '', ''),
(491, 'BULK UNIFORM SAREE', 'b7', 'images/b7.jpg', 1500.00, '', ''),
(492, 'BULK UNIFORM SAREE', 'b8', 'images/b8.jpg', 8800.00, '', ''),
(493, 'BULK UNIFORM SAREE', 'b9', 'images/b9.jpg', 1500.00, '', ''),
(494, 'BULK UNIFORM SAREE', 'b10', 'images/b10.jpg', 1600.00, '', ''),
(495, 'BULK UNIFORM SAREE', 'b11', 'images/b11.jpg', 1500.00, '', ''),
(496, 'BULK UNIFORM SAREE', 'b12', 'images/b12.jpg', 2200.00, '', ''),
(497, 'BULK UNIFORM SAREE', 'b13', 'images/b13.jpg', 1500.00, '', ''),
(498, 'BULK UNIFORM SAREE', 'b14', 'images/b14.jpg', 6700.00, '', ''),
(499, 'BULK UNIFORM SAREE', 'b15', 'images/b15.jpg', 2100.00, '', ''),
(500, 'BULK UNIFORM SAREE', 'b16', 'images/b16.jpg', 2500.00, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
