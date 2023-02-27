
CREATE DATABASE IF NOT EXISTS `dblemans` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dblemans`;

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

DELETE FROM `brand`;
INSERT INTO `brand` (`id`, `name`) VALUES
	(1, 'Otro'),
	(2, 'Coleman'),
	(3, 'Igloo'),
	(4, 'King Tony');

CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

DELETE FROM `category`;
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'Homecenter'),
	(2, 'Construcenter'),
	(3, 'Industrial'),
	(4, 'Otros');

CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

DELETE FROM `color`;
INSERT INTO `color` (`id`, `name`) VALUES
	(1, 'Otro'),
	(2, 'Naranja'),
	(3, 'Azul'),
	(4, 'Rojo'),
	(5, 'Metal'),
	(6, 'Verde'),
	(7, 'Negro'),
	(8, 'Rosa'),
	(9, 'Blanco');

CREATE TABLE IF NOT EXISTS `kind` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `category_id` int DEFAULT '0',
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
	(18, 'Otros', 4);

CREATE TABLE IF NOT EXISTS `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DELETE FROM `material`;
INSERT INTO `material` (`id`, `name`) VALUES
	(1, 'Otro'),
	(2, 'Metal');

CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cod` text,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `image` text NOT NULL,
  `kind_id` int DEFAULT '0',
  `brand_id` int DEFAULT '0',
  `material_id` int DEFAULT '0',
  `color_id` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_product_kind` (`kind_id`),
  KEY `FK_product_material` (`material_id`),
  KEY `FK_product_color` (`color_id`),
  KEY `FK_product_brand` (`brand_id`),
  CONSTRAINT `FK_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_color` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_kind` FOREIGN KEY (`kind_id`) REFERENCES `kind` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

DELETE FROM `product`;
INSERT INTO `product` (`id`, `cod`, `name`, `price`, `image`, `kind_id`, `brand_id`, `material_id`, `color_id`) VALUES
	(1, '2000018287', 'Hooligan', 755, 'hooligan-coleman.png', 8, 2, 1, 2),
	(2, '3000005350', 'Conservadora Cooler XTREM', 464, 'conservadora-coleman.png', 18, 2, 1, 3),
	(3, '2000013750', 'Conservadora Cooler Bolso', 194, 'conservadora-coleman-bolso.png', 18, 2, 1, 3),
	(4, '5205A753G', 'Conservadora SQT', 145, 'conservadora-coleman-sqt.png', 18, 2, 1, 4),
	(5, '2000016474', 'Camp grill deluxe', 115, 'camp-grill-deluxe.png', 8, 2, 2, 5),
	(6, '2000019645', 'Sleeping bag pink', 231, 'sleeping-bag-coleman.png', 6, 2, 1, 8),
	(7, '5205A758G', 'Conservadora SQT', 145, 'conservadora-sqt.png', 18, 2, 1, 3),
	(8, '3000001684', 'Chaleco salvavida', 187, 'chaleco-coleman.png', 18, 2, 1, 3),
	(9, '2000019647', 'Sleeping bag blue', 292, 'sleeping-bag-blue.png', 6, 2, 1, 3),
	(10, '2000004410', 'Toldo', 1234, '2000004410.png', 8, 2, 1, 6),
	(11, '2000007825', 'Tienda para acampar', 1917, '2000007825.png', 8, 2, 1, 6),
	(12, '00049007', 'Conservadora igloo', 1943, 'conservadora-igloo.png', 18, 3, 1, 9),
	(13, '00025201', 'Igloo ice block', 63, 'ice-block-large.png', 18, 3, 1, 3),
	(14, '2000016485', 'Manta de emergencia', 17, '2000016485.png', 18, 3, 1, 5),
	(15, '1712MR', 'Juego de llaves doble boca', 577, 'set-llaves-combinadas.png', 11, 4, 2, 5),
	(16, '9033CR', 'Estuche herr. 1/2" 3/8" 1/4"', 2545, 'estuche-herr.png', 11, 4, 2, 5),
	(17, '87634-7B-G', 'Carro con 7 gabinetes', 7083, 'carro-7-gabinetes.png', 11, 4, 2, 5),
	(18, '87402', 'Caja de herramientas', 696, 'caja-herramientas-kt.png', 11, 4, 2, 4),
	(19, '92543MR', 'Set herramientas', 846, 'set-herramientas.jpg', 11, 4, 2, 7);

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `rol`;
INSERT INTO `rol` (`id`, `name`) VALUES
	(1, 'admin');

CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `rol_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_rol` (`rol_id`),
  CONSTRAINT `FK_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `user`;
INSERT INTO `user` (`id`, `user`, `pass`, `rol_id`) VALUES
	(1, 'lemans', '$2y$10$LKRc8WKg.4UMGZYs3MkxbOfOu3ZlkbxW1k8j6rpHKZMyxr.XDgtQe', 1);
