-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 12:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nitrotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_benda`
--

CREATE TABLE `tb_benda` (
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(9) NOT NULL,
  `stok_barang` int(7) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `kategori_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(400) NOT NULL,
  `id_barang` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_benda`
--

INSERT INTO `tb_benda` (`nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `kategori_barang`, `deskripsi_barang`, `id_barang`) VALUES
('Logitech K380', 379000, 225, '60c89a8634296.jpg', 'Keyboard', 'Spesifikasi Teknikal\r\nJenis Koneksi Bluetooth Classic (3.0)\r\nJangkauan Wireless: 10 m (30 kaki)\r\nJangkauan wireless dapat bervariasi tergantung pada kondisi lingkungan dan pengaturan komputasi\r\nBaterai 2 x AAA\r\nDaya Tahan Baterai hingga 24 bulan\r\nLampu Indikator (LED) LED Baterai, 3 LED saluran Bluetooth\r\nTombol Khusus Hotkey (Home, Back, App-switch, Contextual Menu), Easy-Switch\r\nMenghubungkan/Da', 27),
('Armageddon Atom 7', 249000, 175, '60c89b1f5bf06.jpg', 'Headset', 'Spesifikasi Headphone:\r\n- Respon Frequensi : 20 Hz - 20 kHz\r\n- Impedansi : 32 Ω ± 5\r\n- Sensitivitas : 112 dB\r\n- Power Input : 55 mW (Max)\r\n- Panjang Kabel : 2.2 m\r\n\r\nSpesifikasi Mikrofon:\r\n- Sensitivitas : -42 ± 3 dB\r\n- Impedansi : 2.2 KΩ\r\n- Berat : Kurang Lebih 278 g', 34),
('ROG Spartha', 2099000, 175, '60c89eadc34bd.jpg', 'Mouse', 'Programmable 12-button design optimized for MMO gaming\r\nIncreased flexibility play in wired or wireless modes\r\nEasy-swap switchable socket design for customizable click resistance\r\nCustomizable RGB lighting effects across three areas\r\nSolidly-built magnesium alloy chassis\r\nBuilt-in flash memory to save your favorite profiles\r\nExclusive ROG Armoury interface for easy customization of buttons, perfo', 36),
('Razer HH Pro V2', 1009000, 50, '60c89e97e0221.jpg', 'Headset', 'Fatures \r\n- 10mm Extra-Large Dynamic Drivers for Stellar Audio Fidelity\r\n- All-New Body Design with Flat-Style Cables for Toughness on the Go\r\n- Enhanced Passive Noise Isolation with Bi-Flange Tips\r\n- In-line Microphone with 3 Quick Action Control Buttons for IOS and Android Devices', 42),
('DA Mycam Pro HD', 449000, 125, '60c8a23dd18d1.jpg', 'Webcam', 'Type : FULL HD 1080P Manualfocus Stream Webcam\r\nLens Size : 1/4&quot;\r\nMost effective pixels : 1280x720\r\nData Format : YUY2/MPJG\r\nPixel Size : 3.0μm*3.0μm\r\nDynamic Range : /\r\nLens FOV ： D=68.6°\r\nLens F/NO ： 2.4\r\nlens construction ： 5P\r\nLens TV ： &lt;1.5%\r\nFocusing : Fixed focus\r\nFrame Rate : 30Fps\r\nAuto Control : Saturation, Contrast, Acutance, White Balance, Exposure\r\nVoltage : DC 5V\r\nWorking Cur', 43),
('Armageddon SBR', 29000, 575, '60c8a3401cbce.jpg', 'Cooling Fan', 'Specification :\r\n- Red Light LED PC Cooling fan\r\n- Durable and silent fan with LED effects\r\n- Built-in 15 pcs LED\r\n- Red colors LED', 44),
('Lenovo TP X1 C Gen 9 ', 30999000, 50, '60c8a445bdea1.jpg', 'Laptop', 'Premier Support Intel® Core™ i7-1185G7 Processor (4C / 8T, 3.0 / 4.8GHz, 12MB) 16GB LPDDR4X 4266MHz 1TB PCIe® NVMe™ M.2 SSD Intel® Iris® Xe Graphics Windows 10 Pro 64 Bit 14&quot; FHD+ (1920x1200) IPS 400nits Anti-glare NO DVD / Backlit Keyboard / Fingerprint Reader / Wi-Fi 6 Intel AX201 11ax, 2x2 + BT5.2 High Definition (HD) Audio, Realtek ALC3306 codec / Stereo speakers, 2W x2 and 0.8W x2, Dolby', 45),
('DA Thor', 129000, 250, '60c8a72e99587.jpg', 'Mouse', 'Sensor Name Sun Plus 199\r\nSensor Type Optical\r\nDPI 1000 – 6400 DPI\r\nMax. Frame Rate 400 fps\r\nMax. Polling Rate 125 Hz\r\nMax. Tracking Speed 32 ips\r\nMax. Acceleration 12 g', 46),
('Dell Alienware M13 R3', 29999000, 25, '60c8a793d2407.jpg', 'Laptop', 'Processor 10th Generation Intel® Core™ i7-10750H (6-Core, 12MB Cache, up to 5.1GHz w/ Turbo Boost 2.0) Chipset HM 370 Video Card NVIDIA® GeForce RTX™ 2070 SUPER 8GB GDDR6 Memory 16GB DDR4 2666MHz Memory Capacity Two SODIMM slots Memory (min/max) 16GB Hard Drive 1TB PCIe M.2 SSD RAID0 LCD 15.6&quot; FHD 300Hz IPS non-Tobii &amp; non-GSYNC', 47),
('Rexus RGC R50', 1349000, 300, '60c8600bcc1da.jpg', 'Kursi', 'Rexus RGC-R50\r\n\r\n- Tempat duduk size L, pegangan tangan bisa diatur sesuai dengan tinggi rendah sandaran.\r\n- Terbuat dari material campuran PU Leather dan Jala.\r\n- Mampu menahan beban hingga 120 Kilog', 49),
('Sage SG-168', 1469000, 250, '60c8617a8feae.jpg', 'Kursi', 'Sage SG-168\r\n\r\n- Penyesuaian tinggi panel kontrol hidraulik untuk mengontrol ketinggian - rendah\r\nKursi terbuat dari bahan yang kuat\r\n- Disesuaikan hingga 145 derajat\r\n- Sandaran tangan dapat mengatur', 50),
('Armageddon Nebuka III', 1549000, 250, '60c862ba89728.jpg', 'Kursi', 'Armaggeddon Nebuka III\r\n\r\n- Premium PU Leather Natural Styling\r\n- Upholstery Armaggeddons Select Premium PU Leather with natural Togo leather grain texture\r\n- SUPPORT UP TO 200KG\r\nARM Rest UltraVersatile 4 Directional Movement', 51),
('SL Omega 2020 LOL', 6999000, 100, '60c86502d3ea8.jpg', 'Kursi', 'Nikmati rasa nyaman tanpa batas bersama The New Secretlab PRIME 2.0 Leather. Kenyamanan seperti ini, menjadikanmu selalu satu langkah di depan dalam sebuah permainan yang menegangkan. Kekalahanmu menjadi tidak berarti, kemenanganmu menjadi begitu spesial, saat kau berada diatas sebuah kursi yang dirancang untuk menjadi 4 kali lebih tangguh dari bahan kulit sintetis lainnya', 52),
('Rexus HX20', 369000, 400, '60c865cd48697.jpg', 'Headset', 'Spesifikasi\r\nDimensi: 190x230x110mm\r\nDaya keluaran rata-rata：100mW\r\nTegangan masuk: 5V\r\nDiameter driver: 50mm\r\nRentang frekuensi: 20 – 20.000Hz\r\nSensitivitas: 108dB\r\nImpedansi: 32Ω\r\nPanjang kabel: 2,1 meter\r\nTipe konektor: USB\r\n\r\nMikrofon:\r\nDiameter mic: 4 x 1,5mm\r\nRentang frekuensi: 50 – 10.000Hz\r\nSensitivitas: -48±3dB', 53),
('Logitech G431', 1449000, 150, '60c86680e9423.jpg', 'Headset', 'Spesifikasi Teknis\r\nHeadphone\r\nDriver: 50 mm\r\nRespons frekuensi: 20 Hz-20 KHz\r\nImpedansi: 39 Ohm (pasif), 5k Ohm (aktif)\r\nSensitivitas: 107 dB SPL/mW\r\n\r\nMikrofon (Boom)\r\nPola Pickup Mikrofon: Cardioid (Unidireksional)\r\nUkuran: 6 mm\r\nRespons frekuensi: 100 Hz–20 KHz', 54),
('Sades R12 Pro', 849000, 200, '60c86722aaf5a.jpg', 'Headset', 'Sensitivity : 115±3dB\r\nWith Microphone : Yes\r\nBrand Name : SADES\r\nResistance : 32Ω\r\nConnectors : USB\r\nSupport Apt-x : No\r\nWaterproof : No\r\nSupport Memory Card : No\r\nFunction : For Internet Bar,for Video Game,Common Headphone\r\nVolume Control : Yes\r\nPlug Type : USB\r\nModel Number : R12\r\nCommunication : Wired\r\nFrequency Response Range : 20-20000Hz\r\nActive Noise-Cancellation : No\r\nVocalism Principle : ', 55),
('Fantech IRIS HG19', 249000, 300, '60c867c2807da.jpg', 'Headset', 'Merk : Fantech\r\nType : HG19 Iris\r\nModel : RGB Headset Gaming\r\nBass : Super Bass ( Tested )\r\nPanjang Kabel : 2.2 meter\r\nSpeaker Sensitivitas : 95dB±3dB\r\nPersyaratan sistem\r\nSistem Operasi : PC, Mac PS4 (adaptor diperlukan)', 56),
('DA N21', 629000, 300, '60c868af412cc.jpg', 'PC Case', 'SPECIFICATION\r\nModel N21\r\nCase Type Middle Tower\r\nDimension (L x W x H) 427 x 185 x 460 mm\r\nWeight 4.7 kg\r\nPanel Front Side :\r\nTempered Glass\r\nRight Side :\r\nTempered Glass\r\nLeft Side :\r\nPlate\r\nColor Black\r\nMaterial Steel Plate + ABS\r\nBracket Slot 7\r\nDrive Bays SSD :\r\n2 x 2.5″\r\nHDD :\r\n2 x 3.5″\r\nMotherboards ATX, M-ATX, ITX\r\nI/O Ports USB 2.0, USB 3.0, Audio, Microphone\r\nFan Support Front :\r\n3 x 12 ', 57),
('SL X TS', 5999000, 50, '60c86a41d49d0.jpg', 'Kursi', 'Secretlab Full-Metal 4D Armrest (2020)\r\nDirancang secara ekslusif untuk memanjakan pergelangan tangan serta sikumu demi menunjang permainan maksimalmu. Bersama New Secretlab 4D armrest-updated yang mengedepankan kinerja logam terbaik, untuk mendapatkan ketahanan yang lebih lama dan kemudahan pemakaian hanya untuk Kamu. Kini kamu memiliki kebebasan untuk menyesuakannya dengan tanganmu, kiri, kanan,', 58),
('Logitech G913', 4359000, 150, '60c86ae2b4797.jpg', 'Keyboard', 'Features\r\n- Compact Tenkeyless Design\r\n- Lisghtspeed Wireless\r\n- Premium Material\r\n- Formative Function\r\n- Advanced Low Profile Mechanical Switches\r\n- Lightsync RGB\r\n- 3 On-board Profiles\r\n- Game Mode\r\n- Remarkable Battery Life\r\n- Connect to Multiple Devices\r\n- Dedicated Media Control', 59),
('ROG PG259QN', 13999000, 75, '60c86b5a23894.jpg', 'Monitor', 'Feature\r\n- 24.5-inch FHD (1920 x 1080) fast IPS gaming monitor with 360 Hz refresh rate designed for professional esports gamers\r\n- ASUS Fast IPS technology enables a 1 ms response time (GTG) for sharp gaming visuals with high frame rates.\r\n- NVIDIA® G-SYNC® processor provides smooth, tear-free gaming at refresh rates up to 360 Hz\r\n- A Smart Cooling design with a custom heatsink and unique interna', 60),
('Armageddon 850 VP', 1199000, 125, '60c86c3a9e757.jpg', 'Power Supply', 'Specification:\r\n*3 x PCI-E (6+2) + (6+2)\r\n*3 x SATA + SATA\r\n*2 x CPU 4 Pin + 4 Pin\r\n*1 x Motherboard 24 Pin\r\n*1 x HDD 4 Pin + 4 Pin\r\n*1 x 24 Pin Modular Cable\r\n*1 x Power Cod Cable', 61),
('Fantech GS202', 109000, 325, '60c86d77bff43.jpg', 'Speaker', 'SPECS\r\nClear, Deep, and Perfect Sound\r\n360° surround sound\r\nHi-res audio\r\n45mm driver unit\r\nLighting effects\r\nMagnet free material body\r\nMulti-platform compatibility (Laptop, Desktop, Cellphone)\r\nUSB&amp; 3.5mm plug\r\nDimensions: 100mm 80mm', 62),
('Fantech WGP12', 149000, 275, '60c86e248f2bf.jpg', 'Joystick', 'Spesifikasi\r\n1.8 Braided USB Wired Controller\r\nTombol : 17 Pcs\r\nVibration : Yes\r\nBerat : ±170gr\r\nSize : 154mm x 113mm x 58mm', 63),
('Armageddon HNS', 24000, 575, '60c86ea604125.jpg', 'Mousepad', 'Moderate surface friction.\r\nImproves mouse control with just the right amount of friction for sudden starts and stops\r\nPerfect for Office or Home Use\r\nMade of pure Natural rubbercloth\r\nVARIATION: -22180.3cm.', 64);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_benda`
--
ALTER TABLE `tb_benda`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_benda`
--
ALTER TABLE `tb_benda`
  MODIFY `id_barang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
