--
-- Database: `CarManagementSystem`
--
CREATE DATABASE IF NOT EXISTS `CarManagementSystem`;

USE `CarManagementSystem`;

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `placa` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `marca` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `modelo` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cor` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ano` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem01` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem02` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem03` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem04` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imagem05` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `divida` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `financiamento` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quitacao` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `multa` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci, 
  `ipva` varchar (220)  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `licensiamento` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `outros` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nomeVendedorVenda` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `valorVenda` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dataEntradaVenda` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dataSaidaVenda` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nomeVendedorCompra` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `valorCompra` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dataEntradaCompra` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dataSaidaCompra` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,   
  PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





























