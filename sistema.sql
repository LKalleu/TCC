-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Jun-2019 às 06:24
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(5) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `descricao`) VALUES
(1, 'Objeto'),
(2, 'Líquido'),
(3, 'Comestível');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprados`
--

DROP TABLE IF EXISTS `comprados`;
CREATE TABLE IF NOT EXISTS `comprados` (
  `idComprados` int(5) NOT NULL AUTO_INCREMENT,
  `data` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `devedor` int(5) NOT NULL,
  `produtos` text COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idComprados`),
  KEY `devedor` (`devedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comprados`
--

INSERT INTO `comprados` (`idComprados`, `data`, `devedor`, `produtos`, `quantidade`) VALUES
(1, '02/06/2019', 3, '- Maçã\r\n- Torrada\r\n- Mortadela', '3'),
(2, '07/06/2019', 1, '-Macarrão', '1'),
(3, '07/06/2019', 1, '-Miojo', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `devedor`
--

DROP TABLE IF EXISTS `devedor`;
CREATE TABLE IF NOT EXISTS `devedor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `numeracao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `devedor`
--

INSERT INTO `devedor` (`id`, `nome`, `email`, `senha`, `contato`, `rua`, `bairro`, `numeracao`, `cep`, `status`) VALUES
(1, 'Lucas Kalleu', 'kalleu@gmail.com', 'a123', '(96) 9 9131-1547', 'Av.Almirante Barroso', 'Alvorada', '3003', '68906-535', 1),
(3, 'Ana Paula', 'ana@gmail.com', 'b321', '(96) 9 9129-1172', 'Av.Almirante Barroso', 'Alvorada', '2989', '68906-535', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idFornecedor` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `nome`, `email`, `contato`, `cpf`) VALUES
(1, 'João Henrique', 'henrique@gmail.com', '(96) 9 9999-2247', '555.555.555-55'),
(2, 'Pedro Carlos', 'pedro@gmail.com', '(96) 9 8888-8888', '888.888.888-88');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `idHistorico` int(5) NOT NULL AUTO_INCREMENT,
  `data` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `produto` text COLLATE utf8_unicode_ci NOT NULL,
  `fornecedor` int(5) NOT NULL,
  `quantidade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idHistorico`),
  KEY `fornecedor` (`fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`idHistorico`, `data`, `produto`, `fornecedor`, `quantidade`) VALUES
(1, '01/06/2019', '- Carne\r\n- Biscoito\r\n- Ovos\r\n- Leite em pó', 1, '40'),
(2, '28/05/2019', '- Batata\r\n- Água\r\n- Peixe\r\n- Shampoo\r\n- Condicionador\r\n- Energético', 2, '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idProduto` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` int(5) NOT NULL,
  `preco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nome`, `categoria`, `preco`, `marca`) VALUES
(1, 'Maçã', 3, '2,50', 'Sem Marca'),
(2, 'Coca-Cola ', 2, '7,25', 'Coca-Cola'),
(3, 'Nescau', 2, '12,45', 'Nestlé');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `idStatus` int(5) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`idStatus`, `descricao`) VALUES
(1, 'ativado'),
(2, 'desativado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idTipoUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `descricao`) VALUES
(1, 'administrador'),
(2, 'funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tipoUsuario` int(5) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `tipoUsuario` (`tipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `senha`, `tipoUsuario`) VALUES
(1, 'Lucas Kalleu', 'kalleu@gmail.com', 'a123', 1),
(2, 'Tristão Carlos', 'tristan@gmail.com', 'h321', 2),
(3, 'aaaaa', 'aaa@gmail.com', '321', 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comprados`
--
ALTER TABLE `comprados`
  ADD CONSTRAINT `comprados_ibfk_1` FOREIGN KEY (`devedor`) REFERENCES `devedor` (`id`);

--
-- Limitadores para a tabela `devedor`
--
ALTER TABLE `devedor`
  ADD CONSTRAINT `devedor_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`idStatus`);

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`fornecedor`) REFERENCES `fornecedor` (`idFornecedor`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
