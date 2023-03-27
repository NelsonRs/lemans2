/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `dblemans` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dblemans`;

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `brand`;
INSERT INTO `brand` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Coleman'),
	(3, 'Igloo'),
	(4, 'King Tony'),
	(5, 'Ashley'),
	(6, 'PorcelaMaxx'),
	(7, 'Pierini'),
	(8, 'Realce'),
	(9, 'Total'),
	(10, 'Philips');

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `collection`;
INSERT INTO `collection` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Tambo'),
	(3, 'Workhorse'),
	(4, 'Jarreau'),
	(5, 'Gleston'),
	(6, 'Maier'),
	(7, 'Calion'),
	(8, 'Darcy'),
	(9, 'Calicho'),
	(10, 'Kumasi'),
	(11, 'Accrington'),
	(12, 'Nason');

CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `color`;
INSERT INTO `color` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Canyon'),
	(3, 'Cocoa'),
	(4, 'Gray'),
	(5, 'Blue'),
	(6, 'Onyx'),
	(7, 'Smoke'),
	(8, 'Charcoal'),
	(9, 'Gunmetal'),
	(10, 'Brown'),
	(11, 'Cashmere'),
	(12, 'Turquoise'),
	(13, 'Granite'),
	(14, 'Earth'),
	(15, 'Hickory '),
	(16, 'Red');

CREATE TABLE IF NOT EXISTS `department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `department`;
INSERT INTO `department` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Homecenter'),
	(3, 'Hosehold Essentials\r\n'),
	(4, 'Mejoras para el hogar'),
	(5, 'Electronics\r\n'),
	(6, 'Patio & Jardin\r\n'),
	(7, 'Ropa, zapatos y accesorios'),
	(8, 'Juguetes'),
	(9, 'Beauty\r\n'),
	(10, 'Bebé'),
	(11, 'Office Supplies\r\n'),
	(12, 'Grocery\r\n'),
	(13, 'Automotriz'),
	(14, 'Industrial'),
	(15, 'Deportes y actividades al aire libre');

CREATE TABLE IF NOT EXISTS `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `material`;
INSERT INTO `material` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Metal'),
	(3, 'Madera'),
	(4, 'Plástico'),
	(5, 'Porcelanato'),
	(6, 'Revestimiento');

CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(20,0) DEFAULT NULL,
  `department_id` int DEFAULT '1',
  `type1_id` int DEFAULT '1',
  `type2_id` int NOT NULL DEFAULT '1',
  `type3_id` int DEFAULT '1',
  `brand_id` int DEFAULT '1',
  `material_id` int DEFAULT '1',
  `color_id` int DEFAULT '1',
  `collection_id` int DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_product_material` (`material_id`),
  KEY `FK_product_color` (`color_id`),
  KEY `FK_product_brand` (`brand_id`),
  KEY `FK_product_collection` (`collection_id`),
  KEY `FK_product_department` (`department_id`),
  KEY `FK_product_type1` (`type1_id`),
  KEY `FK_product_type2` (`type2_id`),
  KEY `FK_product_type3` (`type3_id`),
  CONSTRAINT `FK_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_collection` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_color` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_department` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_type1` FOREIGN KEY (`type1_id`) REFERENCES `type1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_type2` FOREIGN KEY (`type2_id`) REFERENCES `type2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_type3` FOREIGN KEY (`type3_id`) REFERENCES `type3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `product`;
INSERT INTO `product` (`id`, `sku`, `name`, `price`, `department_id`, `type1_id`, `type2_id`, `type3_id`, `brand_id`, `material_id`, `color_id`, `collection_id`) VALUES
	(1, '2780225', 'Recliner Tambo', 7640, 2, 2, 3, 6, 5, 1, 2, 2),
	(2, '2780248', 'LAF Reclining Loveseat Tambo', 13487, 2, 2, 3, 7, 5, 1, 2, 2),
	(3, '2780249', 'RAF Reclining Loveseat Tambo', 13299, 2, 2, 3, 7, 5, 1, 2, 2),
	(4, '5840188', 'Reclining Sofa Workhorse', 12568, 2, 2, 3, 8, 5, 1, 3, 3),
	(5, '1150271', 'Sofa Chaise Sleeper Jarreau', 9524, 2, 2, 3, 8, 5, 1, 4, 4),
	(6, '1150371', 'Sofa Chaise Sleeper Jarreau', 10582, 2, 2, 3, 8, 5, 1, 5, 4),
	(7, '1220635', 'Loveseat Gleston', 7987, 2, 2, 3, 7, 5, 1, 6, 5),
	(8, '1220638', 'Sofa Gleston', 8820, 2, 2, 3, 8, 5, 1, 6, 5),
	(9, '3222217', 'RAF Corner Chaise Kumasi', 10649, 2, 2, 3, 7, 5, 1, 7, 1),
	(10, '3222266', 'LAF Corner Chaise Kumasi', 9507, 2, 2, 3, 7, 5, 1, 7, 1),
	(11, '4522025', 'Rocker Recliner Maier', 7430, 2, 2, 3, 6, 5, 1, 8, 6),
	(12, '2070235', 'Loveseat Calion', 7276, 2, 2, 3, 7, 5, 1, 9, 7),
	(13, '7500466', 'LAF Sofa Darcy', 10, 2, 2, 3, 8, 5, 1, 10, 8),
	(14, '9120217', 'RAF Corner Chaise Calicho', 7242, 2, 2, 3, 7, 5, 1, 11, 9),
	(15, '9120235', 'Loveseat Calicho', 6548, 2, 2, 3, 7, 5, 1, 11, 9),
	(16, '9120238', 'Sofa Calicho', 7143, 2, 2, 3, 8, 5, 1, 11, 9),
	(17, '9120266', 'LAF Corner Chaise Calicho', 7242, 2, 2, 3, 7, 5, 1, 11, 9),
	(18, 'TB2006', 'Pistola de calor', 197, 14, 9, 11, 5, 9, 1, 12, 1),
	(19, 'TS42142107', 'Sierra Ingletadora', 1036, 14, 9, 11, 5, 9, 1, 12, 1),
	(20, 'TS1141856', 'Sierra Circular', 463, 14, 9, 11, 4, 9, 1, 12, 1),
	(21, 'TDLI1211', 'Taladro Inalambrico', 266, 14, 9, 10, 3, 9, 1, 12, 1),
	(22, 'TD614006', 'Mezclador', 903, 14, 9, 11, 5, 9, 1, 12, 1),
	(23, 'T6109136', 'Taladro de Impacto', 285, 14, 9, 11, 3, 9, 1, 12, 1),
	(24, 'TG1091156', 'Amoladora Angular', 215, 14, 9, 11, 2, 9, 1, 12, 1),
	(25, 'TGT11316', 'Hidrolavadora', 594, 14, 9, 11, 5, 9, 1, 12, 1),
	(26, 'TS2081006', 'Sierra Caladora', 341, 14, 9, 11, 4, 9, 1, 12, 1),
	(27, 'TTAC1406', 'Compresor de Aire Mini', 188, 14, 9, 11, 5, 9, 1, 12, 1),
	(28, '7050925', 'Recliner Accrington', 11240, 2, 2, 3, 6, 5, 1, 13, 1),
	(29, '7050825', 'Recliner Accrington', 11240, 2, 2, 3, 6, 5, 1, 14, 1),
	(30, '1580425', 'Rocker Recliner Nason', 8973, 2, 2, 3, 6, 5, 1, 15, 1),
	(31, 'MG3731', 'Multigroom Series 3000', 395, 7, 6, 4, 1, 10, 1, 1, 1),
	(32, 'HDPLATA', 'HD Matte Plata', 94, 4, 10, 13, 1, 6, 5, 1, 1),
	(33, 'HDURBAN', 'HD Urban', 106, 4, 10, 13, 1, 6, 5, 1, 1),
	(34, 'MATTECOTTON', 'Matte Cotton', 94, 4, 10, 13, 1, 6, 5, 1, 1),
	(35, 'BRANCO', 'Branco Nature', 57, 4, 10, 1, 1, 6, 5, 1, 1),
	(36, 'HD 62038', 'HD 62038', 57, 4, 10, 13, 1, 6, 5, 1, 1),
	(37, 'HD 62025', 'HD 62025', 57, 4, 10, 1, 1, 6, 5, 1, 1),
	(38, 'HD MARROCOS', 'HD Marrocos', 57, 4, 10, 13, 1, 6, 5, 1, 1),
	(39, 'HD DARK', 'HD Dark', 105, 4, 10, 13, 1, 6, 5, 1, 1),
	(40, 'HD DANUBIO', 'HD Danubio', 105, 4, 10, 13, 1, 6, 5, 1, 1),
	(41, 'COTTON', 'COTTON', 95, 4, 10, 1, 1, 6, 5, 1, 1),
	(42, 'HD CALACATA', 'HD Calacata Marmo', 105, 4, 10, 13, 1, 6, 5, 1, 1),
	(43, 'HDVESUVIO', 'HD Vesúvio', 94, 4, 10, 13, 1, 6, 5, 1, 1),
	(44, 'HD ONYX', 'HD Onyx', 95, 4, 10, 13, 1, 6, 5, 1, 1),
	(45, 'HDBLOCK', 'HD Matte Block', 94, 4, 10, 13, 1, 6, 5, 1, 1),
	(46, 'HDTALC', 'HD Matte Talc', 94, 4, 10, 13, 1, 6, 5, 1, 1),
	(47, '400-P', 'Azul Cobalto', 90, 4, 10, 14, 1, 7, 6, 1, 1),
	(48, '13030', 'Quarter Cobalto', 106, 4, 10, 14, 1, 7, 6, 1, 1),
	(49, '410-P', 'Azul Piscina', 77, 4, 10, 14, 1, 1, 6, 1, 1),
	(50, '150105', 'Sevilha Renda', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(51, '150110', 'Sevilha Aco', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(52, '150117', 'Sevilha Carbono', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(53, '13070', 'Quarter Piscina', 78, 4, 10, 14, 1, 7, 6, 1, 1),
	(54, '150121', 'Sevilha Negro', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(55, '173010', 'Malaga Castaño', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(56, '150143', 'Malaga Bronze', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(57, '150137', 'Malaga Nacar', 87, 4, 10, 14, 1, 7, 6, 1, 1),
	(58, '180080', 'Noronha Liso', 99, 4, 10, 14, 1, 7, 6, 1, 1),
	(59, '61073LD', 'Amberwood', 80, 4, 10, 13, 1, 8, 5, 1, 1),
	(60, '61517-BR', 'Deck Eden', 75, 4, 10, 13, 1, 8, 5, 1, 1),
	(61, '61522-BR', 'Cement Grigio', 82, 4, 10, 13, 1, 8, 5, 1, 1),
	(62, '61076LD', 'Cement Dark', 80, 4, 10, 13, 1, 8, 5, 1, 1),
	(63, '610681LD', 'Concrete Grigio', 80, 4, 10, 13, 1, 8, 5, 1, 1),
	(64, '61067LD', 'Concrete Bege', 80, 4, 10, 13, 1, 8, 5, 1, 1),
	(65, '61028-BR', 'Patchwork Grigio', 75, 4, 10, 13, 1, 8, 5, 1, 1),
	(66, '611110LC', 'Bianco', 75, 4, 10, 13, 1, 8, 5, 1, 1),
	(67, '61051-BR', 'Vermont Decor', 81, 4, 10, 13, 1, 8, 5, 1, 1),
	(68, '61200LC', 'Bianco Brilho', 81, 4, 10, 13, 1, 8, 5, 1, 1),
	(69, '2000013750', 'Cooler Bolso', 194, 15, 11, 15, 9, 2, 1, 5, 1),
	(70, '5205A758G', 'Conservadora SQT', 145, 15, 11, 15, 9, 2, 1, 5, 1),
	(71, '5205A7536', 'Conservadora SQT', 145, 15, 11, 15, 9, 2, 1, 16, 1),
	(72, '3000005350', 'Cooler Xtrem', 464, 15, 11, 15, 9, 2, 1, 5, 1),
	(73, '2000018287', 'Hooligan', 755, 15, 11, 15, 1, 2, 1, 1, 1),
	(74, '2000019645', 'Sleeping Bag', 231, 15, 11, 15, 1, 2, 1, 1, 1),
	(75, '2000019647', 'Sleeping Bag', 231, 15, 11, 15, 1, 2, 1, 1, 1),
	(76, '3000001684', 'Chaleco Salvavida', 187, 15, 11, 15, 1, 2, 1, 1, 1),
	(77, '2000004410', 'Toldo', 1234, 15, 11, 15, 1, 2, 1, 1, 1),
	(78, '00025201', 'Igloo Ice Block', 63, 15, 11, 15, 1, 3, 1, 5, 1),
	(79, '00049007', 'Conservadora Igloo', 1943, 15, 11, 15, 1, 3, 1, 4, 1),
	(80, '20000007825', 'Tienda para acampar', 1917, 15, 11, 15, 1, 2, 1, 5, 1),
	(81, '2000016474', 'Camp Grill Deluxe', 115, 15, 11, 15, 1, 2, 1, 6, 1),
	(82, '9543MR', 'Set de llaves combinadas', 3607, 14, 9, 11, 1, 4, 1, 1, 1),
	(83, '1712MR', 'Juego de llaves doble boca', 577, 14, 9, 11, 1, 4, 1, 1, 1),
	(84, '92543MR', 'Set de herramientas', 846, 14, 9, 1, 1, 4, 1, 1, 1),
	(85, '9033CR', 'Estuche de herramientas', 2545, 14, 9, 1, 1, 4, 1, 1, 1),
	(86, '87402', 'Caja de herramientas', 696, 14, 9, 1, 1, 4, 1, 1, 1),
	(87, '876347BG', 'Carro con 7 gabinetes', 7083, 14, 9, 1, 1, 4, 1, 1, 1),
	(88, '2137-2', 'Scooter electrico', 6612, 8, 11, 1, 1, 1, 1, 16, 1);

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `rol`;
INSERT INTO `rol` (`id`, `name`) VALUES
	(1, 'admin');

CREATE TABLE IF NOT EXISTS `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `room`;
INSERT INTO `room` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Dining Room'),
	(3, 'Bedroom'),
	(4, 'Home'),
	(5, 'Children Furniture'),
	(6, 'Outdoor'),
	(7, 'Living Room');

CREATE TABLE IF NOT EXISTS `type1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `type1`;
INSERT INTO `type1` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Muebles'),
	(3, 'Cocina y comedor'),
	(4, 'Electrodomésticos'),
	(5, 'Electrodomésticos de cocina'),
	(6, 'Decoración'),
	(7, 'Ropa de cama'),
	(8, 'Baño'),
	(9, 'Herramientas'),
	(10, 'Azulejos'),
	(11, 'Deportes al aire libre');

CREATE TABLE IF NOT EXISTS `type2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `type2`;
INSERT INTO `type2` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Muebles de dormitorio'),
	(3, 'Muebles de sala de estar'),
	(4, 'Muebles de cocina y comedor'),
	(5, 'Muebles de oficina'),
	(6, 'Muebles para niños'),
	(7, 'Muebles de entrada y almacenamiento'),
	(8, 'Muebles de patio'),
	(9, 'Ollas y sartenes'),
	(10, 'Herramientas eléctricas'),
	(11, 'Herramientas manuales'),
	(12, 'Herramientas neumaticas'),
	(13, 'Porcelanato'),
	(14, 'Revestimiento'),
	(15, 'Camping');

CREATE TABLE IF NOT EXISTS `type3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

DELETE FROM `type3`;
INSERT INTO `type3` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Amoladoras'),
	(3, 'Taladros y atornilladores'),
	(4, 'Sierras'),
	(5, 'Compresores de aire y accesorios'),
	(6, 'Recliners'),
	(7, 'Loveseats'),
	(8, 'Sofa'),
	(9, 'Conservadora');

CREATE TABLE IF NOT EXISTS `type4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

DELETE FROM `type4`;

CREATE TABLE IF NOT EXISTS `type5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

DELETE FROM `type5`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `rol_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_rol` (`rol_id`),
  CONSTRAINT `FK_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `user`;
INSERT INTO `user` (`id`, `user`, `pass`, `rol_id`) VALUES
	(1, 'lemans', '$2y$10$LKRc8WKg.4UMGZYs3MkxbOfOu3ZlkbxW1k8j6rpHKZMyxr.XDgtQe', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
