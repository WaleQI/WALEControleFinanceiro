-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.6.7-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para wl_finan
CREATE DATABASE IF NOT EXISTS `wl_finan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wl_finan`;

-- Copiando estrutura para tabela wl_finan.entradas
CREATE TABLE IF NOT EXISTS `entradas` (
  `ENTRADAID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_ID` varchar(36) NOT NULL,
  `PERFIL_ID` varchar(36) NOT NULL,
  `NOMEENTRADA` varchar(200) DEFAULT NULL,
  `VALORENTRADA` decimal(19,2) NOT NULL,
  `DATAENTRADA` datetime NOT NULL,
  `RESPENTRADA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ENTRADAID`),
  KEY `USUARIO_ID` (`USUARIO_ID`),
  KEY `PERFIL_ID` (`PERFIL_ID`),
  CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuario` (`USUARIOID`),
  CONSTRAINT `entradas_ibfk_2` FOREIGN KEY (`PERFIL_ID`) REFERENCES `perfil` (`PERFILID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela wl_finan.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `PERFILID` varchar(36) NOT NULL,
  `USUARIO_ID` varchar(36) NOT NULL,
  `TIPO_PERFILID` int(11) DEFAULT NULL,
  `NOME` varchar(100) NOT NULL,
  `SENHA` varchar(250) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`PERFILID`),
  KEY `USUARIO_ID` (`USUARIO_ID`),
  KEY `TIPO_PERFILID` (`TIPO_PERFILID`),
  CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuario` (`USUARIOID`),
  CONSTRAINT `perfil_ibfk_2` FOREIGN KEY (`TIPO_PERFILID`) REFERENCES `tipo_perfil` (`TIPOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela wl_finan.saidas
CREATE TABLE IF NOT EXISTS `saidas` (
  `SAIDAID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_ID` varchar(36) NOT NULL,
  `PERFIL_ID` varchar(36) NOT NULL,
  `NOMESAIDA` varchar(200) DEFAULT NULL,
  `VALORSAIDA` decimal(19,2) NOT NULL,
  `DATASAIDA` datetime NOT NULL,
  `RESPSAIDA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SAIDAID`),
  KEY `USUARIO_ID` (`USUARIO_ID`),
  KEY `PERFIL_ID` (`PERFIL_ID`),
  CONSTRAINT `saidas_ibfk_1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuario` (`USUARIOID`),
  CONSTRAINT `saidas_ibfk_2` FOREIGN KEY (`PERFIL_ID`) REFERENCES `perfil` (`PERFILID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela wl_finan.tipo_perfil
CREATE TABLE IF NOT EXISTS `tipo_perfil` (
  `TIPOID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMETIPO` varchar(100) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`TIPOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela wl_finan.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `USUARIOID` varchar(36) NOT NULL,
  `NOME` varchar(150) DEFAULT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `SENHA` varchar(500) NOT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`USUARIOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
