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
	(1, 'Otro'),
	(2, 'Coleman'),
	(3, 'Igloo'),
	(4, 'King Tony'),
	(5, 'Ashley'),
	(6, 'PorcelaMaxx'),
	(7, 'Pierini'),
	(8, 'Realce'),
	(9, 'Total');

CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

DELETE FROM `category`;
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'Homecenter'),
	(2, 'Construcenter'),
	(3, 'Industrial'),
	(4, 'Otros');

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `collection`;
INSERT INTO `collection` (`id`, `name`) VALUES
	(1, 'Kumasi'),
	(2, 'Tambo'),
	(3, 'Workhorse'),
	(4, 'Jarreau'),
	(5, 'Gleston'),
	(6, 'Maier'),
	(7, 'Calion'),
	(8, 'Darcy'),
	(9, 'Calicho'),
	(10, 'Otro');

CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

DELETE FROM `color`;
INSERT INTO `color` (`id`, `name`) VALUES
	(1, 'Otro'),
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

CREATE TABLE IF NOT EXISTS `kind` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_kind_category` (`category_id`),
  CONSTRAINT `FK_kind_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

DELETE FROM `kind`;
INSERT INTO `kind` (`id`, `name`, `category_id`) VALUES
	(1, 'Linea Blanca', 1),
	(2, 'Decoracion', 1),
	(3, 'Muebles', 1),
	(4, 'Ropa', 1),
	(5, 'Cristaleria', 1),
	(6, 'Gimnasio', 1),
	(7, 'Jugueteria', 1),
	(8, 'Camping', 1),
	(9, 'Generadores', 3),
	(10, 'Dinamos', 3),
	(11, 'Herramientas', 3),
	(12, 'Respuestos', 3),
	(13, 'Motores', 3),
	(14, 'Rodalems', 3),
	(15, 'Limpieza', 3),
	(16, 'Iluminacion', 1),
	(17, 'Motobombas', 3),
	(18, 'Otro', 4);

CREATE TABLE IF NOT EXISTS `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

DELETE FROM `material`;
INSERT INTO `material` (`id`, `name`) VALUES
	(1, 'Otro'),
	(2, 'Metal'),
	(3, 'Madera'),
	(4, 'Plástico'),
	(5, 'Porcelanato'),
	(6, 'Cerámica');

CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cod` text,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `kind_id` int DEFAULT NULL,
  `brand_id` int DEFAULT NULL,
  `material_id` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `collection_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_kind` (`kind_id`),
  KEY `FK_product_material` (`material_id`),
  KEY `FK_product_color` (`color_id`),
  KEY `FK_product_brand` (`brand_id`),
  KEY `FK_product_collection` (`collection_id`),
  CONSTRAINT `FK_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_collection` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_color` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_kind` FOREIGN KEY (`kind_id`) REFERENCES `kind` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

DELETE FROM `product`;
INSERT INTO `product` (`id`, `cod`, `name`, `price`, `kind_id`, `brand_id`, `material_id`, `color_id`, `collection_id`) VALUES
	(1, '2780225', 'Recliner Tambo', 7640, 3, 5, 1, 2, 2),
	(2, '2780248', 'Left Arm Facing Reclining Loveseat Tambo', 13487, 3, 5, 1, 2, 2),
	(3, '2780249', 'Right Arm Facing Reclining Loveseat Tambo', 13299, 3, 5, 1, 2, 2),
	(4, '5840188', 'Reclining Sofa Workhorse', 12568, 3, 5, 1, 3, 3),
	(5, '1150271', 'Sofa Chaise Sleeper Jarreau', 9524, 3, 5, 1, 4, 4),
	(6, '1150371', 'Sofa Chaise Sleeper Jarreau', 10582, 3, 5, 1, 5, 4),
	(7, '1220635', 'Loveseat Gleston', 7987, 3, 5, 1, 6, 5),
	(8, '1220638', 'Sofa Gleston', 8820, 3, 5, 1, 6, 5),
	(9, '3222217', 'Right Arm Facing Corner Chaise Kumasi', 10649, 3, 5, 1, 7, 1),
	(10, '3222266', 'Left Arm Facing Corner Chaise Kumasi', 9507, 3, 5, 1, 7, 1),
	(11, '4522025', 'Rocker Recliner Maier', 7430, 3, 5, 1, 8, 6),
	(12, '2070235', 'Loveseat Calion', 7276, 3, 5, 1, 9, 7),
	(13, '7500466', 'Left Arm Facing Sofa Darcy', 0, 3, 5, 1, 10, 8),
	(14, '9120217', 'Right Arm Facing Corner Chaise Calicho', 7242, 3, 5, 1, 11, 9),
	(15, '9120235', 'Loveseat Calicho', 6548, 3, 5, 1, 11, 9),
	(16, '9120238', 'Sofa Calicho', 7143, 3, 5, 1, 11, 9),
	(17, '9120266', 'Left Arm Facing Corner Chaise Calicho', 7242, 3, 5, 1, 11, 9),
	(18, 'TB2006', 'Pistola de calor', 197, 11, 9, 1, 12, 10),
	(19, 'TS42142107', 'Sierra Ingletadora', 1036, 11, 9, 1, 12, 10),
	(20, 'TS1141856', 'Sierra Circular', 463, 11, 9, 1, 12, 10),
	(21, 'TDLI1211', 'Taladro Inalambrico', 266, 11, 9, 1, 12, 10),
	(22, 'TD614006', 'Mezclador', 903, 11, 9, 1, 12, 10),
	(23, 'T6109136', 'Taladro de Impacto', 285, 11, 9, 1, 12, 10),
	(24, 'TG1091156', 'Amoladora Angular', 215, 11, 9, 1, 12, 10),
	(25, 'TGT11316', 'Hidrolavadora', 594, 11, 9, 1, 12, 10),
	(26, 'TS2081006', 'Sierra Caladora', 341, 11, 9, 1, 12, 10),
	(27, 'TTAC1406', 'Compresor de Aire Mini', 188, 11, 9, 1, 12, 10);

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `rol`;
INSERT INTO `rol` (`id`, `name`) VALUES
	(1, 'admin');

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
