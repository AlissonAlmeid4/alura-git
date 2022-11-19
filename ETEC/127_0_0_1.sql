-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Nov-2022 às 01:17
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
-- Estrutura da tabela `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subcategoria` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `subcategoria`) VALUES
(1, 'Bruschetta'),
(2, 'Macarrões'),
(3, 'Pizza'),
(4, 'Risoto'),
(6, 'teste1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionalidades`
--

DROP TABLE IF EXISTS `tb_funcionalidades`;
CREATE TABLE IF NOT EXISTS `tb_funcionalidades` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `link` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titulotexto1` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto1` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titulotexto2` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto2` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_funcionalidades`
--

INSERT INTO `tb_funcionalidades` (`cod`, `link`, `titulotexto1`, `texto1`, `titulotexto2`, `texto2`) VALUES
(1, 'https://www.youtube.com/embed/C_9klgP0-fA', 'Cibo & Giola é Sucesso Nacional', '\"Essa comida é muito boa, é espetacular, é sensacional\" foi o que eles dissera, não tem duvidas que nos dedicamos magistralmente, que nos diferenciamos pela nossa dedicação. Mas receber esse retorno de nossos clientes é algo fantástico, eu Alisson e toda nossa equipe(Chaves do 8, Madruga, Clotilde do 13 e dona Florinda) estamos muito alegres por essa vitória.\r\n', 'O Sucesso ainda não é o fim', 'Nossa comida é muito boa, é espetacular, é sensacional2\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

DROP TABLE IF EXISTS `tb_funcionarios`;
CREATE TABLE IF NOT EXISTS `tb_funcionarios` (
  `cod_func` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_func`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`cod_func`, `nome`, `sexo`, `data`, `celular`, `email`, `senha`, `funcao`) VALUES
(1, 'administrador', 'Masculino', '1999-01-20', '11992325271', 'admin@etec.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador'),
(9, 'João Psor', 'Masculino', '1977-06-05', '11999995555', 'joao@etec.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Atendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `codProd` int NOT NULL AUTO_INCREMENT,
  `imagem` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomePrato` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subcategoria` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tempoPreparo` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `valorPrato` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codProd`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`codProd`, `imagem`, `nomePrato`, `tipo`, `subcategoria`, `descricao`, `tempoPreparo`, `valorPrato`) VALUES
(1, 'imgs/720afa6a0d739552661f5f8d17a4f717.jpg', 'Bruschetta Tradicional', 'Salgado', 'Bruschetta', 'O macarrão pode não ter surgido na Itália, mas com certeza, os italianos que aperfeiçoaram essa deliciosa massa com molhos impecáveis. O mais famoso deles, inclusive aqui no Brasil, é o molho à bolonh', '30', '19.99'),
(3, 'imgs/f0f06b36d7390bed25e8a3e0ffe4e68c.jpg', 'Bruschetta de Brie', 'Salgado', 'Bruschetta', 'Pão, tomate, queijo parmesão e manjericão. Éé tudo o que você precisa para fazer essa deliciosa entrada que surgiu antes de Cristo, entre os trabalhadores rurais italianos. O prato foi a solução encontrada para aproveitar as sobras de pão do dia anterior, misturando com ingredientes simples. Dependendo da região da Itália, o pão usado é diferente. Na Puglia e na Campania, por exemplo, são feitas com um pão crocante chamado “frisella” . Já na Calábria, Sicília e Basilicata, a bruschetta é feita com um pão comprido de semolina e sementes de gergelim.', '30', '32.50'),
(4, 'imgs/dbcf983fa511d2b83e9676a867c90761.jpg', 'Bruschetta Mussarela', 'Salgado', 'Bruschetta', 'Pão, tomate, queijo parmesão e manjericão. Éé tudo o que você precisa para fazer essa deliciosa entrada que surgiu antes de Cristo, entre os trabalhadores rurais italianos. O prato foi a solução encontrada para aproveitar as sobras de pão do dia anterior, misturando com ingredientes simples. Dependendo da região da Itália, o pão usado é diferente. Na Puglia e na Campania, por exemplo, são feitas com um pão crocante chamado “frisella” . Já na Calábria, Sicília e Basilicata, a bruschetta é feita com um pão comprido de semolina e sementes de gergelim', '30', '51.30'),
(5, 'imgs/de8b580df5c363e85c8fce87c72dff9b.jpg', 'Macarrão Espaguete', 'Salgado', 'Macarraão', 'O macarrão pode não ter surgido na Itália, mas, os italianos que aperfeiçoaram essa deliciosa massa com molhos impecáveis. O mais famoso aqui no Brasil, é o molho à bolonhesa, que surgiu – como o nome já indica – na cidade de Bolonha. A receita original se caracteriza por um molho à base de carne, ao qual são adicionados cenouras, cebola, aipo e uma pequena quantidade de tomate. Em muitos países fora da Itália, o nome “molho à bolonhesa” é usado para se referir a um molho à base de tomate, que lembra menos o original, parecendo mais o “molho napolitano”, típico do sul da Itália.', '30', '19.99'),
(6, 'imgs/607ffd155eeb05af6138983891924257.jpg', 'Macarrão Mussarela', 'Salgado', 'Macarraão', 'O macarrão pode não ter surgido na Itália, mas, os italianos que aperfeiçoaram essa deliciosa massa com molhos impecáveis. O mais famoso aqui no Brasil, é o molho à bolonhesa, que surgiu – como o nome já indica – na cidade de Bolonha. A receita original se caracteriza por um molho à base de carne, ao qual são adicionados cenouras, cebola, aipo e uma pequena quantidade de tomate. Em muitos países fora da Itália, o nome “molho à bolonhesa” é usado para se referir a um molho à base de tomate, que lembra menos o original, parecendo mais o “molho napolitano”, típico do sul da Itália.', '30', '32.50'),
(7, 'imgs/8aefcf48185ff5d41f9c24fe158557f5.jpg', 'Macarrão Cachos', 'Salgado', 'Macarraão', 'O macarrão pode não ter surgido na Itália, mas, os italianos que aperfeiçoaram essa deliciosa massa com molhos impecáveis. O mais famoso aqui no Brasil, é o molho à bolonhesa, que surgiu – como o nome já indica – na cidade de Bolonha. A receita original se caracteriza por um molho à base de carne, ao qual são adicionados cenouras, cebola, aipo e uma pequena quantidade de tomate. Em muitos países fora da Itália, o nome “molho à bolonhesa” é usado para se referir a um molho à base de tomate, que lembra menos o original, parecendo mais o “molho napolitano”, típico do sul da Itália.', '30', '51.30'),
(8, 'imgs/4be44879783faef4086bac46b45d23d5.jpg', 'Pizza Mussarela', 'Salgado', 'Pizza', 'A origem da pizza é disputada por egípcios, hebreus e outros povos, mas uma coisa ninguém contesta: a versão italiana, especialmente a da cidade de Nápoles, é a mais perfeita! Foi nessa região que foram desenvolvidos os melhores sabores e técnicas de preparo. A pizza napolitana também é conhecida como margherita. Isso porque em 1889, quando a rainha da Itália Margherita de Savoia visitou a cidade, o pizzaiolo Raffaele Esposito criou uma pizza em homenagem a ela. Ele usou três ingredientes simples, mas que representavam as cores da bandeira da Itália: tomate, muçarela e manjericão.', '30', '19.99'),
(9, 'imgs/d67d1a261678ceb1f9aee3c0323b0838.jpg', 'Pizza Frango/Catupiry', 'Salgado', 'Pizza', 'A origem da pizza é disputada por egípcios, hebreus e outros povos, mas uma coisa ninguém contesta: a versão italiana, especialmente a da cidade de Nápoles, é a mais perfeita! Foi nessa região que foram desenvolvidos os melhores sabores e técnicas de preparo. A pizza napolitana também é conhecida como margherita. Isso porque em 1889, quando a rainha da Itália Margherita de Savoia visitou a cidade, o pizzaiolo Raffaele Esposito criou uma pizza em homenagem a ela. Ele usou três ingredientes simples, mas que representavam as cores da bandeira da Itália: tomate, muçarela e manjericão.', '30', '32.50'),
(10, 'imgs/dd3452cf8c406fbd131b2df0c13b33ae.jpg', 'Pizza Portuguesa', 'Salgado', 'Pizza', 'A origem da pizza é disputada por egípcios, hebreus e outros povos, mas uma coisa ninguém contesta: a versão italiana, especialmente a da cidade de Nápoles, é a mais perfeita! Foi nessa região que foram desenvolvidos os melhores sabores e técnicas de preparo. A pizza napolitana também é conhecida como margherita. Isso porque em 1889, quando a rainha da Itália Margherita de Savoia visitou a cidade, o pizzaiolo Raffaele Esposito criou uma pizza em homenagem a ela. Ele usou três ingredientes simples, mas que representavam as cores da bandeira da Itália: tomate, muçarela e manjericão.', '30', '51.30'),
(11, 'imgs/3e42c4b62046562ebcef954558c9168e.jpg', 'Risoto de Cupim', 'Salgado', 'Risoto', 'O risoto é um prato originário da região da Lombardia que surgiu no século XI. No sentido literal significa “pequeno arroz”. Com o passar do tempo a receita foi se popularizando em todo o país. Existem várias teorias sobre como o risoto foi criado, porém todas envolvem o artista Valerius de Flanders, mestre na fabricação de vidro e responsável pelos vitrais da catedral de Milão. Uma das hipóteses diz que o artista usava o açafrão para criar uma pigmentação amarelada na confecção dos vitrais e que, sem querer, deixou cair um pouco do pigmento em sua comida.', '30', '19.99'),
(12, 'imgs/cec106be2be4c14173feb33c63b2f9ce.jpg', 'Risoto Carne Bovina', 'Salgado', 'Risoto', 'O risoto é um prato originário da região da Lombardia que surgiu no século XI. No sentido literal significa “pequeno arroz”. Com o passar do tempo a receita foi se popularizando em todo o país. Existem várias teorias sobre como o risoto foi criado, porém todas envolvem o artista Valerius de Flanders, mestre na fabricação de vidro e responsável pelos vitrais da catedral de Milão. Uma das hipóteses diz que o artista usava o açafrão para criar uma pigmentação amarelada na confecção dos vitrais e que, sem querer, deixou cair um pouco do pigmento em sua comida.', '30', '32.50'),
(13, 'imgs/e2aabc8e4b0aba025ccfa8f71f300756.jpg', 'Risoto File Mignon', 'Salgado', 'risoto', 'O risoto é um prato originário da região da Lombardia que surgiu no século XI. No sentido literal significa “pequeno arroz”. Com o passar do tempo a receita foi se popularizando em todo o país. Existem várias teorias sobre como o risoto foi criado, porém todas envolvem o artista Valerius de Flanders, mestre na fabricação de vidro e responsável pelos vitrais da catedral de Milão. Uma das hipóteses diz que o artista usava o açafrão para criar uma pigmentação amarelada na confecção dos vitrais e que, sem querer, deixou cair um pouco do pigmento em sua comida.', '30', '51.30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
