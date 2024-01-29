-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 05:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concesionario`
--

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` int(11) NOT NULL,
  `nombre_marcas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `nombre_marcas`) VALUES
(211111, 'Honda'),
(211122, 'Toyota'),
(211133, 'Ford'),
(211144, 'Hiunday');

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `id_factura` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_de_factura` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`id_factura`, `id_usuario`, `fecha_de_factura`, `id`, `cantidad`) VALUES
(1254, 1, '2021-12-12 16:07:51', 224, 5),
(2123, 1, '2021-12-12 16:09:15', 5, 5),
(12541, 1, '2021-12-12 16:11:26', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_marcas` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `id_marcas`, `name`, `image`, `price`, `stock`) VALUES
(1, 211111, 'Turismo Honda Fit año 2022', 'https://www.motoryracing.com/images/noticias/31000/31903/1.jpg', 320000.00, 10),
(2, 211111, 'Camioneta Honda CR-V 2022', 'http://www.placervial.com/2/images/wallpapers/g/cca290613a467da9eeff5909af4e39a6.jpg', 440588.00, 15),
(3, 211111, 'Type R Honda Civic año 2022', 'http://www.placervial.com/2/images/wallpapers/g/b00fbd053e41fb063a4abeb6974cd44d.jpg', 522499.00, 10),
(4, 211111, 'Sedan Honda Civic año 2022', 'https://i.blogs.es/f227a3/honda-civic-2022-boy-kit-mugen/1366_2000.jpeg', 600000.00, 10),
(5, 211111, 'Camioneta Honda RidGeline', 'http://www.placervial.com/2/images/wallpapers/g/9b7ebe089b70191db17a72a076f14e19.jpg', 700588.00, 10),
(6, 211111, 'Camioneta Honda HR-V 2022', 'http://www.placervial.com/2/archivos/website/69294ee21c47911faf6d509b2b13447b.jpg', 1000499.00, 15),
(7, 211144, 'Hyundai Elantra año 2022', 'https://www.motoryracing.com/images/noticias/34000/34290/1-f2.jpg', 320000.00, 12),
(8, 211144, 'Hyundai Tucson año 2022', 'https://siempreauto.com/wp-content/uploads/sites/9/2021/03/TUCSON-2022-PREVENTA-DESKTOP-3-1.jpg?quality=80&strip=all&w=960', 540588.00, 10),
(9, 211144, 'Hyundai Sonata año 2022', 'https://dealerimages.dealereprocess.com/image/upload/c_limit,f_auto,fl_lossy,w_auto/v1/svp/dep/20hyundaisonatalimitedsd8a/hyundai_20sonatalimitedsd8a_angularfront_phantomblack', 622499.00, 10),
(10, 211144, 'Hyundai Santa Fe año 2022', 'https://www.elcarrocolombiano.com/wp-content/uploads/2021/05/20210521-HYUNDAI-SANTAFE-NUEVA-GEBERACION-PORTADA.jpg', 400000.00, 15),
(11, 211144, 'Hyundai Nexo año 2022', 'https://s7d1.scene7.com/is/image/hyundai/2021-nexo-fe-0007:4-3?wid=1440&hei=1080&qlt=85,0', 400588.00, 10),
(12, 211144, 'Hyundai Kona año 2022', 'https://autocosmoscloudstorage.blob.core.windows.net/noticias/fotosbig/NPAZ_d413a188b8f844c798389918592762e8.jpg', 300499.00, 10),
(111, 211122, 'Toyota Corolla año 2022', 'https://i.ytimg.com/vi/P8_MnJpHuss/maxresdefault.jpg', 320000.00, 10),
(112, 211122, 'Toyota Hilux año 2022', 'https://cdn.motor1.com/images/mgl/kpvbx/s3/lanzamiento-toyota-hilux-2022.jpg', 540588.00, 10),
(113, 211122, 'Toyota RAV4 año 2022', 'https://img.autocosmos.com/noticias/fotos/extralarge/NAZ_a0b9f3d28ced44a2bf231d6efdf2fddb.jpg', 622499.00, 15),
(114, 211122, 'Toyota  Yaris 2022', 'https://www.elcarrocolombiano.com/wp-content/uploads/2020/12/20201230-TOYOTA-YARIS-2022-MEXICO-02.jpg', 400000.00, 20),
(115, 211122, 'Toyota Prius año 2022', 'https://siempreauto.com/wp-content/uploads/sites/9/2021/08/HERO-MY22_Toyota_Prius_Nightshade_002-scaled-1.jpg?quality=60&strip=all&w=1200', 300588.00, 10),
(116, 211122, 'Toyota Fortuner año 2022', 'https://www.elcarrocolombiano.com/wp-content/uploads/2021/05/Diseno-sin-titulo-2021-05-13T115121.793.jpg', 800499.00, 15),
(221, 211133, 'Ford F-150 año 2022', 'https://es.ford.com/cmslibs/content/dam/vdm_ford/live/en_us/ford/nameplate/f-150lightning/2022/collections/_360/atlas-blue-metallic/p702bevplt_22_atlasbluemetallic_1.jpg', 1320000.00, 20),
(222, 211133, 'Ford Fiesta año 2022', 'https://www.km77.com/images/medium/7/5/9/7/ford-fiesta-st-line-2022-frontal-lateral.357597.jpg', 340588.00, 10),
(223, 211133, 'Ford Focus año 2022', 'https://i.blogs.es/696a33/ford-focus-2022_2/450_1000.jpeg', 322499.00, 15),
(224, 211133, 'Ford Edge 2022', 'https://s.aolcdn.com/commerce/autodata/images/USD10FOS151A021001.jpg', 800000.00, 10),
(225, 211133, 'Ford Explore año 2022', 'https://img.autocosmos.com/noticias/fotosprinc/NAZ_11c6a504359c4419b6aa818f14246ada.jpg', 900588.00, 15),
(226, 211133, 'Ford Bronco año 2022', 'https://i.blogs.es/fb3656/ford-bronco-heritage-edition-2-/840_560.jpg', 700499.00, 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usurio` int(15) NOT NULL,
  `nombre_usurio` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(10) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usurio`, `nombre_usurio`, `usuario`, `password`, `direccion`, `telefono`, `tipo_usuario`) VALUES
(1, 'saint hernandez', 'saint', '12345', 'colonia eduardo castillo trujillo colon', 99969694, 'Admin'),
(201, 'Josue Ramos', 'Jramos', '12345', 'trujillo colon ', 77789451, 'Admin'),
(1525, 'Carlo Sanchez', 'Csanchez', '12345', 'trujillo colon ', 89451025, 'Usuario'),
(2121, 'anthony saint hernandez', 'anthony10', '1234567', 'trujillo colon Honduras', 2147483647, 'Usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marcas` (`id_marcas`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usurio`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usurio`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id_marcas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
