-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 04:05 PM
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
-- Database: `laravel_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(10) UNSIGNED NOT NULL,
  `ProductName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Description`, `Quantity`, `CategoryName`, `ImageURL`, `deleted_at`) VALUES
(1, 'AMD Ryzen 9 7900X 12 Core AM5 CPU/Processor', '597.00', 'Welcome to the new era of performance. AMD Ryzen 7000 Series ushers in the speed of “Zen 4” for gamers and creators with pure power to tackle any game or workflow on the digital playground. The AMD Ryzen™ 9 7900X flagship CPU boasts 12 cores / 24 threads, support for DDR5 (5200Mhz) memory and incredible boosted clock speeds of up to 5.6GHz taking you to the boundaries of modern day performance. The world’s most advanced PC processor for gamers and creators extends AMD performance leadership to power your PC.', 100, 'CPU', 'Ryzen9.jpg', NULL),
(2, 'AMD Ryzen 7 7700X 8 Core AM5 CPU/Processor', '420.00', 'Welcome to the new era of performance. AMD Ryzen 7000 Series ushers in the speed of “Zen 4” for gamers and creators with pure power to tackle any game or workflow on the digital playground. The AMD Ryzen™ 7 7700X CPU boasts 8 cores / 16 threads, support for DDR5 (5200Mhz) memory and incredible boosted clock speeds of up to 5.4GHz taking you to the boundaries of modern day performance. The world’s most advanced PC processor for gamers and creators extends AMD performance leadership to power your PC.', 100, 'CPU', 'Ryzen7.webp', NULL),
(3, 'Intel 18 Core i9 10980XE Extreme Unlocked Cascade Lake-X CPU', '1120.00', 'The latest Intel Core i9 10980XE X Series processor is powered by 18 Cores and 36 Threads to address the simultaneous, compute-intensive demands of creators. The Intel Core X Series CPU’s allow flexible system configuration for specific creator usages, giving you access to 44 PCIe lanes, quad channel memory, plus support for Thunderbolt technology and high-speed SSD drives. The new X Series processors are fully unlocked and offer the power, and convenience of a full studio in your PC to help accelerate your creative work flow from start to finish.', 100, 'CPU', 'Inteli9.jpg', NULL),
(4, 'Intel 16 Core i7 13700KF Raptor Lake CPU/Processor', '430.00', 'Say hello to Raptor-Lake Intel\'s incredible 13th generation processors are hear to break the boundaries of modern day processing power. Now with up to 16 cores (8 Performance-cores and 8 Efficient-cores) and up to 24 threads, plus Performance-cores are capable of reaching 5.4 GHz with Intel® Thermal Velocity Boost to elevate performance. Intel® Turbo Boost Max Technology 3.07 further strengthens lightly threaded performance by identifying the best-performing Performance-cores. Meanwhile, additional E-cores enable an increase in Intel® Smart Cache (L3) for more efficient processing of larger data sets and better performance. The P-core and E-core L2 cache has also increased compared to the previous generation of Intel® processors, minimizing the amount of time spent swapping data between cache and memory to speed up your workflow.1 Unleash the power of next-level performance with the 13th Gen Intel® Core™ desktop processor advantage.', 100, 'CPU', 'Inteli7.webp', NULL),
(5, 'Zotac NVIDIA GeForce RTX 4090 24GB Trinity Ada Lovelace Graphics Card', '1840.00', 'Leveraging an all-new aerodynamic inspired design, the ZOTAC GAMING GeForce RTX 4090 Trinity utilises the world’s most advanced gaming GPU powered by the NVIDIA Ada Lovelace architecture. Using cutting-edge cooling technologies derived from the flagship model, the Trinity packs the punch to offer gamers the needed blistering FPS in the latest titles.', 100, 'GPU', 'zotacgpu.webp', NULL),
(6, 'Gigabyte AORUS NVIDIA GeForce RTX 4090 24GB Graphics Card', '1999.00', 'Meet the latest addition to the AORUS XTREME WATERFORCE series, the RTX 4090 XTREME WATERFORCE Boasts the incredible WATERFORCE closed loop cooling system with it\'s 360mm aluminium radiator, 3x 120mm high-performance fans, large copper baseplate and easy installation screams power, performance, exceptional cooling and reliability. Powered by the new ultra-efficient NVIDIA Ada Lovelace architecture, the 3rd generation of RTX, the GeForce RTX® 4090 Series graphics card is beyond fast, giving gamers and creators a quantum leap in performance, neural rendering, and many more leading platform capabilities. This massive advancement in GPU technology is the gateway to the most immersive gaming experiences, incredible AI features and the fastest content creation workflows. The RTX® 4090 pushes state-of-the-art graphics into the future.', 100, 'GPU', 'gigabyte.webp', NULL),
(7, 'ASRock AMD Radeon RX 6900 XT 16GB Phantom Gaming D OC Graphics Card', '959.00', 'The ASRock Radeon RX 6900 XT Phantom Gaming D 16G OC is here to bring you the incredible performance you deserve, featuring the all-new breakthrough RNDA2 architecture and 80 powerful enhanced compute units engineered to deliver powerhouse performance to all gamers. The Phantom Gaming D OC features Phantom Gaming 3X Cooling System with axial fans, reinforced metal frame and backplate with RGB with polychrome SYNC. The AMD Radeon™ RX 6900XT graphics card powers a new generation of competitive and 4K gaming with vivid visuals, and elevated experiences in every game and every frame with 128MB of all new AMD Infinity Cache, DirectX 12/PCIe 4.0 Support and 16GB of dedicated GDDR6 memory. Experience gaming with realistic lighting, shadows, and reflections along with rich detail thanks to DirectX® Raytracing (DXR), variable rate shading (VRS), and AMD FidelityFX features, optimised for AMD RDNA™ 2 architecture.', 100, 'GPU', 'RX6900.jpg', NULL),
(8, 'PowerColor AMD Radeon RX 6800 XT Red Devil 16GB Graphics Card', '699.00', 'The PowerColor Red Devil is here to bring you the incredible performance you deserve, featuring the all-new breakthrough RNDA2 architecture - engineered to deliver powerhouse performance to all gamers. The AMD Radeon™ RX 6800XT graphics card powers a new generation of competitive and 4K gaming with vivid visuals, and elevated experiences in every game and every frame with powerful new compute units, groundbreaking AMD Infinity Cache, DirectX 12/PCIe 4.0 Support and 16GB of dedicated GDDR6 memory. Experience gaming with realistic lighting, shadows, and reflections along with rich detail thanks to DirectX® Raytracing (DXR), variable rate shading (VRS), and AMD FidelityFX features, optimised for AMD RDNA™ 2 architecture.', 100, 'GPU', 'RX6800XT.jpg', NULL),
(9, 'Corsair Vengeance Black 32GB 5200MHz DDR5 Memory Kit', '154.00', 'CORSAIR VENGEANCE DDR5, optimized for Intel® motherboards, delivers the higher frequencies and greater capacities of DDR5 technology in a high-quality, compact module that suits your system. Tightly-screened high-frequency memory chips power your PC through faster processing, rendering, and buffering than ever, with onboard voltage regulation for easy, finely controlled overclocking. CORSAIR iCUE software enables real-time frequency monitoring, onboard voltage regulation, and Intel XMP 3.0 profile customization. A distinctive solid aluminum heatspreader keeps your memory cool, while ensuring wide compatibility with a huge range of motherboards and CPU coolers. With a limited lifetime warranty as your guarantee of reliability for years to come, VENGEANCE DDR5 continues a long-standing legacy of memory performance.', 100, 'RAM', 'ram1.webp', NULL),
(10, 'Corsair Vengeance RGB White 32GB 5200MHz DDR5 Memory Kit', '175.00', 'CORSAIR VENGEANCE RGB DDR5 memory delivers DDR5 performance, higher frequencies, and greater capacities optimized for motherboards while lighting up your PC with dynamic, individually addressable ten-zone RGB lighting. Tightly screened high-frequency memory chips enable faster processing, rendering, and buffering than ever, with onboard voltage regulation for easy, finely controlled overclocking. Take control with CORSAIR iCUE software and enable RGB lighting customization, real-time frequency monitoring, onboard voltage regulation, and Intel XMP 3.0 profile customization. A custom PCB provides superb signal quality for high performance and stability on the latest Intel DDR5 motherboards. For cutting-edge DDR5 performance with mesmerizing RGB lighting, VENGEANCE RGB DDR5 lights the way.', 100, 'RAM', 'ram2.webp', NULL),
(11, 'Corsair DOMINATOR Platinum RGB 64GB 5600MHz AMD EXPO DDR5 Memory Kit', '469.00', 'Push the limits of performance with CORSAIR DOMINATOR PLATINUM RGB DDR5 Memory optimised for AMD. DDR5 delivers higher frequencies and greater capacities than previous generation memory, helping your system power through complex tasks faster than ever before. With world-renowned design lit by 12 ultra-bright CAPELLIX RGB LEDs, DOMINATOR PLATINUM RGB DDR5 complements the styling and power of the most high-end systems. Hand-sorted, tightly screened memory chips and a custom PCB cooled by patented DHX cooling technology ensure consistently high performance.\r\nCORSAIR iCUE software enables RGB lighting customisation and synchronisation, real-time performance information, and onboard voltage regulation for easier, more controlled overclocking. Supporting Intel XMP 3.0 and backed by a limited lifetime warranty, DOMINATOR PLATINUM RGB DDR5 is in a class of its own.', 100, 'RAM', 'ram3.jpg', NULL),
(12, 'Corsair Vengeance RGB 64GB 5600MHz AMD EXPO DDR5 Memory Kit', '389.00', 'CORSAIR VENGEANCE RGB DDR5 memory delivers DDR5 performance, higher frequencies, and greater capacities optimised for AMD motherboards while lighting up your PC with dynamic, individually addressable ten-zone RGB lighting.', 100, 'RAM', 'ram4.jpg', NULL),
(13, 'ASUS AMD Ryzen ROG STRIX AM5 PCIe 5.0 ATX Motherboard', '449.00', 'The ROG Strix X670E-F Gaming WiFi is the stealthy alter ego of the Strix X670E-A. A substantial power buff relays its inner demon, giving exclusive ROG overclocking utilities even more headroom to unleash the potential of AMD Ryzen™ 7000 Series processors. And its black PCB and dark metallic heatsinks aesthetically match a wider variety of system hardware and build themes, while a dash of customizable colour on its shroud subtly announces an ROG presence in your AM5 build.', 100, 'Motherboards', 'motherboard1.jpg', NULL),
(14, 'ASUS ROG CROSSHAIR X670E HERO WiFi 6E AM5 PCIe 5.0 ATX Motherboard', '679.00', 'Unyielding power delivery and robust thermal management form the indelible tenets of its creed. Hyperspeed connectivity, comprehensive PCIE 5.0 and DDR5 support, and Polymo lighting add potent layers of build personalisation on top. And the finishing touches are added by exclusive utilities and overclocking controls that allow you to uniquely flex the performance of Ryzen 7000 Series processors. Define your AM5 build with the ROG Crosshair X670E Hero.', 100, 'Motherboards', 'motherboard2.webp', NULL),
(15, 'ASUS AMD Ryzen ROG STRIX X670E-A GAMING WIFI AM5 PCIe 5.0 ATX Motherboard', '419.00', 'Suit up for the next gen with the stylish ROG Strix X670E-A Gaming WiFi. Its black PCB and white accents neatly contrast silver-coloured heatsinks that emphasize premium power delivery for AMD Ryzen™ 7000 Series processors. Exclusive ROG overclocking utilities, full PCIe 5.0 capabilities, and DDR5 support are woven in alongside, adding uniquely tailored performance and AM5 essentials to your gaming build.', 100, 'Motherboards', 'motherboard3.webp', NULL),
(16, 'ASRock AMD Ryzen X670E Taichi Carrara AM5 PCIe 5.0 E-ATX Motherboard', '679.00', '20 Years of Innovation and Goes on! Taichi Carrara resembles the high strength as well as the aesthetic of Carrara marble, the key elements while developing this motherboard. Dr.MOS design features the latest SPS (Smart Power Stage) technology. It\'s optimized for monitoring current and temperature of each phase, thus delivering smoother and neater power to the CPU with enhanced performance and OC capability.', 100, 'Motherboards', 'motherboard4.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
