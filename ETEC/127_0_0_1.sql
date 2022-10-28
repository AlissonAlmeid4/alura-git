-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Out-2022 às 01:28
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_cibogiola`
--
CREATE DATABASE IF NOT EXISTS `bd_cibogiola` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_cibogiola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

DROP TABLE IF EXISTS `tb_funcionarios`;
CREATE TABLE IF NOT EXISTS `tb_funcionarios` (
  `cod_func` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_func`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`cod_func`, `nome`, `email`, `senha`, `funcao`) VALUES
(1, 'administrador', 'admin@etec.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `codProd` int NOT NULL AUTO_INCREMENT,
  `imagem` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nomePrato` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `subcategoria` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ingredientes` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `qtdeGramas` float NOT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tempoPreparo` float NOT NULL,
  `valorPrato` float NOT NULL,
  PRIMARY KEY (`codProd`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`codProd`, `imagem`, `nomePrato`, `tipo`, `subcategoria`, `ingredientes`, `qtdeGramas`, `descricao`, `tempoPreparo`, `valorPrato`) VALUES
(1, '', 'Bruschetta Tradicion', 1, 'Macarrão', 'macarrão, sal', 30, 'O macarrão pode não ter surgido na Itália, mas com certeza, os italianos que aperfeiçoaram essa deliciosa massa com molhos impecáveis. O mais famoso deles, inclusive aqui no Brasil, é o molho à bolonh', 30, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
