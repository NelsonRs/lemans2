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
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
	(9, 'Total');

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
	(10, 'Kumasi');

CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
	(12, 'Turquoise');

CREATE TABLE IF NOT EXISTS `department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `department`;
INSERT INTO `department` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Homecenter'),
	(3, 'Hosehold Essentials\r\n'),
	(4, 'Mejoras para el hogar'),
	(5, 'Electronics\r\n'),
	(6, 'Patio & Garden\r\n'),
	(7, 'Clothing, Shoes & Accessories\r\n'),
	(8, 'Toys\r\n'),
	(9, 'Beauty\r\n'),
	(10, 'Baby\r\n'),
	(11, 'Office Supplies\r\n'),
	(12, 'Grocery\r\n'),
	(13, 'Automotriz'),
	(14, 'Industrial');

CREATE TABLE IF NOT EXISTS `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

DELETE FROM `material`;
INSERT INTO `material` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Metal'),
	(3, 'Madera'),
	(4, 'Plástico'),
	(5, 'Porcelanato'),
	(6, 'Cerámica');

CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
	(11, '4522025', 'Rocker Recliner Maier', 7430, 2, 2, 3, 7, 5, 1, 8, 6),
	(12, '2070235', 'Loveseat Calion', 7276, 2, 2, 3, 7, 5, 1, 9, 7),
	(13, '7500466', 'LAF Sofa Darcy', 10, 2, 2, 3, 8, 5, 1, 10, 8),
	(14, '9120217', 'RAF Corner Chaise Calicho', 7242, 2, 2, 3, 7, 5, 1, 11, 9),
	(15, '9120235', 'Loveseat Calicho', 6548, 2, 2, 3, 7, 5, 1, 11, 9),
	(16, '9120238', 'Sofa Calicho', 7143, 2, 2, 3, 8, 5, 1, 11, 9),
	(17, '9120266', 'LAF Corner Chaise Calicho', 7242, 2, 2, 3, 7, 5, 1, 11, 9),
	(18, 'TB2006', 'Pistola de calor', 197, 14, 9, 11, 5, 9, 1, 12, 10),
	(19, 'TS42142107', 'Sierra Ingletadora', 1036, 14, 9, 11, 5, 9, 1, 12, 10),
	(20, 'TS1141856', 'Sierra Circular', 463, 14, 9, 11, 4, 9, 1, 12, 10),
	(21, 'TDLI1211', 'Taladro Inalambrico', 266, 14, 9, 10, 3, 9, 1, 12, 10),
	(22, 'TD614006', 'Mezclador', 903, 14, 9, 11, 5, 9, 1, 12, 10),
	(23, 'T6109136', 'Taladro de Impacto', 285, 14, 9, 11, 3, 9, 1, 12, 10),
	(24, 'TG1091156', 'Amoladora Angular', 215, 14, 9, 11, 2, 9, 1, 12, 10),
	(25, 'TGT11316', 'Hidrolavadora', 594, 14, 9, 11, 5, 9, 1, 12, 10),
	(26, 'TS2081006', 'Sierra Caladora', 341, 14, 9, 11, 4, 9, 1, 12, 10),
	(27, 'TTAC1406', 'Compresor de Aire Mini', 188, 14, 9, 11, 5, 9, 1, 12, 10);

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
	(9, 'Herramientas');

CREATE TABLE IF NOT EXISTS `type2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
	(12, 'Herramientas neumaticas');

CREATE TABLE IF NOT EXISTS `type3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

DELETE FROM `type3`;
INSERT INTO `type3` (`id`, `name`) VALUES
	(1, 'N/A'),
	(2, 'Amoladoras'),
	(3, 'Taladros y atornilladores'),
	(4, 'Sierras'),
	(5, 'Compresores de aire y accesorios'),
	(6, 'Recliners'),
	(7, 'Loveseats'),
	(8, 'Sofa');

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
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `pass` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `rol_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_rol` (`rol_id`),
  CONSTRAINT `FK_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `user`;
INSERT INTO `user` (`id`, `user`, `pass`, `rol_id`) VALUES
	(1, 'lemans', '$2y$10$LKRc8WKg.4UMGZYs3MkxbOfOu3ZlkbxW1k8j6rpHKZMyxr.XDgtQe', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
