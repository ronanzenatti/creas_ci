-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:10 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creas_ci`
--
CREATE DATABASE IF NOT EXISTS `creas_ci` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `creas_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `adolescentes`
--

CREATE TABLE `adolescentes` (
  `idadolescente` int(10) UNSIGNED NOT NULL,
  `responsavel` varchar(150) DEFAULT NULL,
  `pai` varchar(150) DEFAULT NULL,
  `pai_nasc` date DEFAULT NULL,
  `pai_natural` varchar(50) DEFAULT NULL,
  `mae` varchar(150) DEFAULT NULL,
  `mae_nasc` date DEFAULT NULL,
  `mae_natural` varchar(50) DEFAULT NULL,
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `idcargo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nome`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Acesso e gestão total do sistema', '2017-11-22 11:30:11', '2017-11-22 11:30:11', NULL),
(2, 'Assistente Social', '', '2017-11-22 11:30:21', '2017-11-22 11:30:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contatos`
--

CREATE TABLE `contatos` (
  `idcontato` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `tipo_cont` char(1) DEFAULT NULL,
  `contato` varchar(200) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE `documentos` (
  `iddocumento` int(10) UNSIGNED NOT NULL,
  `cert_nasc` int(11) DEFAULT NULL,
  `cert_livro` varchar(10) DEFAULT NULL,
  `cert_folhas` varchar(15) DEFAULT NULL,
  `cert_cartorio` varchar(150) DEFAULT NULL,
  `bairro_cartorio` varchar(50) DEFAULT NULL,
  `municipio_cartorio` varchar(50) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `RG_emissao` date DEFAULT NULL,
  `CTPS` int(11) DEFAULT NULL,
  `CTPS_serie` varchar(15) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `titulo_eleitor` varchar(20) DEFAULT NULL,
  `te_secao` int(11) DEFAULT NULL,
  `te_zona` int(11) DEFAULT NULL,
  `CAM` varchar(20) DEFAULT NULL,
  `CDI` varchar(20) DEFAULT NULL,
  `CR` varchar(20) DEFAULT NULL,
  `providenciar` varchar(255) DEFAULT NULL,
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`iddocumento`, `cert_nasc`, `cert_livro`, `cert_folhas`, `cert_cartorio`, `bairro_cartorio`, `municipio_cartorio`, `RG`, `RG_emissao`, `CTPS`, `CTPS_serie`, `CPF`, `titulo_eleitor`, `te_secao`, `te_zona`, `CAM`, `CDI`, `CR`, `providenciar`, `idpessoa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, '', '', '', '', '', '', NULL, 0, '', '', '', 0, 0, '', '', '', '', 1, '2017-12-28 17:28:30', '2017-12-28 17:28:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE `enderecos` (
  `idendereco` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `dt_mudanca` date DEFAULT NULL,
  `motivo` text,
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entidades`
--

CREATE TABLE `entidades` (
  `identidade` int(10) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefones` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `responsavel` varchar(200) NOT NULL,
  `resp_tel` varchar(16) NOT NULL,
  `resp_email` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entidades`
--

INSERT INTO `entidades` (`identidade`, `nome`, `cnpj`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefones`, `email`, `responsavel`, `resp_tel`, `resp_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ETEC de Ibitinga', '', '', '', '', '', 'SP', '', '', '', 'Patricia', '', '', '2017-12-28 17:27:44', '2017-12-28 17:27:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `nome_tratamento` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` char(1) DEFAULT NULL,
  `natural` varchar(50) DEFAULT NULL,
  `obs` text,
  `tipo_pessoa` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`idpessoa`, `nome`, `dt_nasc`, `nome_tratamento`, `sexo`, `estado_civil`, `natural`, `obs`, `tipo_pessoa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', NULL, '', 'O', '', NULL, '', 'F', '2017-12-28 17:26:57', '2017-12-28 17:28:27', NULL),
(2, 'Adolescente 1', NULL, '', 'M', '', '', '', 'A', '2017-12-28 17:38:58', '2017-12-28 17:38:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `situacao_habitacional`
--

CREATE TABLE `situacao_habitacional` (
  `idsh` int(10) UNSIGNED NOT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT 'Tipo de Domicilio',
  `situacao` char(1) DEFAULT NULL COMMENT 'Situação do Domicilio',
  `valor` decimal(12,2) DEFAULT NULL,
  `agua` char(1) DEFAULT NULL,
  `esgoto` char(1) DEFAULT NULL,
  `energia` char(1) DEFAULT NULL,
  `pavimento` char(1) DEFAULT NULL,
  `coleta_lixo` char(1) DEFAULT NULL,
  `qtde_comodos` tinyint(1) DEFAULT NULL,
  `espaco` smallint(5) UNSIGNED DEFAULT NULL,
  `qtde_pessoas` tinyint(1) DEFAULT NULL,
  `idendereco` int(10) UNSIGNED NOT NULL,
  `obs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trabalhos`
--

CREATE TABLE `trabalhos` (
  `idtrabalho` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `empresa` varchar(250) DEFAULT NULL,
  `dt_inicio` datetime DEFAULT NULL,
  `dt_recisao` datetime DEFAULT NULL,
  `obs` longtext,
  `motivo_recisao` longtext,
  `tipo` char(1) DEFAULT NULL COMMENT '(F)ormal / (I)nformal',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `idpessoa` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `identidade` int(10) UNSIGNED NOT NULL,
  `idpessoa` int(10) UNSIGNED NOT NULL,
  `idcargo` int(10) UNSIGNED NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(10) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `termo` tinyint(1) NOT NULL,
  `data_termo` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `ip_address`, `identidade`, `idpessoa`, `idcargo`, `salt`, `email`, `password`, `username`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `active`, `termo`, `data_termo`, `created_at`, `updated_at`) VALUES
(1, '::1', 1, 1, 1, NULL, 'admin@admin.com', '$2y$08$AV2psVee/aqZyk/rYF0Hve.XHHvqYtR0mw5lsB8NCX8SWJ3giEW7.', NULL, NULL, NULL, NULL, NULL, 1518106743, 1, 0, NULL, '2017-12-28 17:28:26', '2017-12-28 17:28:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD PRIMARY KEY (`idadolescente`),
  ADD KEY `fk_pessoas_atendidos_idx` (`idpessoa`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`idcontato`),
  ADD KEY `fk_pessoas_documentos_idx` (`idpessoa`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`iddocumento`),
  ADD KEY `fk_pessoa_documentos_idx` (`idpessoa`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_pessoa_idx` (`idpessoa`);

--
-- Indexes for table `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`identidade`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Indexes for table `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD PRIMARY KEY (`idsh`),
  ADD KEY `fk_endereco_idx` (`idendereco`);

--
-- Indexes for table `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD PRIMARY KEY (`idtrabalho`),
  ADD KEY `fk_pessoa_trabalhos_idx` (`idpessoa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_pessoa_ep_idx` (`idpessoa`),
  ADD KEY `fk_entidade_ep_idx` (`identidade`),
  ADD KEY `fk_cargo_usuario_idx` (`idcargo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adolescentes`
--
ALTER TABLE `adolescentes`
  MODIFY `idadolescente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idcargo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `idcontato` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `iddocumento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entidades`
--
ALTER TABLE `entidades`
  MODIFY `identidade` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idpessoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  MODIFY `idsh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trabalhos`
--
ALTER TABLE `trabalhos`
  MODIFY `idtrabalho` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adolescentes`
--
ALTER TABLE `adolescentes`
  ADD CONSTRAINT `fk_pessoas_atendidos` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_pessoas_documentos` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_pessoa_documentos` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_pessoa` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `situacao_habitacional`
--
ALTER TABLE `situacao_habitacional`
  ADD CONSTRAINT `fk_endereco` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trabalhos`
--
ALTER TABLE `trabalhos`
  ADD CONSTRAINT `fk_pessoa_trabalhos` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_cargo_usuario` FOREIGN KEY (`idcargo`) REFERENCES `cargos` (`idcargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entidade_usuario` FOREIGN KEY (`identidade`) REFERENCES `entidades` (`identidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_usuario` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`idpessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
