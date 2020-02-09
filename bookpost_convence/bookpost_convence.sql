-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2019 às 14:04
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bookpost_convence`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id_emp` int(11) NOT NULL,
  `user_insta` varchar(45) NOT NULL,
  `nome_empresa` varchar(45) NOT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `bio` varchar(400) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL,
  `foto_perfil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id_emp`, `user_insta`, `nome_empresa`, `apelido`, `bio`, `site`, `foto_perfil`) VALUES
(8, 'artsoldasobraloficial', 'Art Solda', 'Artsoldasobral', '[]Serralheria<br>\r\n[]Estruturas Metálicas<br>\r\n[]Móveis Planejados<br>\r\n[]Metarlugia em Geral<br>\r\nFale conoso[]', 'api.whatsapp.com/send?1=pt_BR&phone=5588999341483', 'artsolda_logo1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `idnotificacoes` int(11) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `data_notificacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `data_publicacao` varchar(45) DEFAULT NULL,
  `img_post` varchar(100) DEFAULT NULL,
  `post_details` varchar(800) NOT NULL,
  `post_text` varchar(200) NOT NULL,
  `post_coments` varchar(800) DEFAULT NULL,
  `link_briefing` varchar(100) NOT NULL,
  `status` enum('ok','nok','nsee') NOT NULL,
  `last_status_mod` varchar(45) DEFAULT NULL,
  `last_edit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_client`
--

CREATE TABLE `post_client` (
  `id_post_cliente` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `data_publicacao` varchar(45) NOT NULL,
  `img_post` varchar(100) DEFAULT NULL,
  `post_details` varchar(800) NOT NULL,
  `post_text` varchar(200) NOT NULL,
  `post_coments` varchar(800) DEFAULT NULL,
  `link_briefing` varchar(100) NOT NULL,
  `status` enum('ok','nok','nsee') NOT NULL,
  `last_status_mod` varchar(45) DEFAULT NULL,
  `last_edit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_has_social`
--

CREATE TABLE `post_has_social` (
  `nome` varchar(45) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_has_social_cliente`
--

CREATE TABLE `post_has_social_cliente` (
  `nome` varchar(45) NOT NULL,
  `id_post_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE `sistema` (
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome_user` varchar(45) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`usuario`, `senha`, `nome_user`, `foto`, `id_emp`, `permissao`) VALUES
('@bernardo', 'convence', 'Arthur Bernardo', 'arthur.png', 0, 2),
('admin', '123', 'Ítalo Barros', 'italobarros.png', 0, 0),
('atendimento', 'convence', 'Adaliane', 'ada.png', 0, 1),
('giselia', 'convence', 'Gisélia Silveira', 'gis.png', 0, 2),
('marcelo', 'convence', 'Marcelo Viana', NULL, 0, 1),
('maynardo', 'convence', 'Maynardo Neto', 'maynardo.png', 0, 2),
('renanciocm', 'convence', 'Renancio', 'renancio.png', 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `social`
--

CREATE TABLE `social` (
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `social`
--

INSERT INTO `social` (`nome`) VALUES
('facebook'),
('instagram'),
('youtube');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_emp`);

--
-- Índices para tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`idnotificacoes`),
  ADD KEY `user_noti_idx` (`usuario`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user_idx` (`id_emp`);

--
-- Índices para tabela `post_client`
--
ALTER TABLE `post_client`
  ADD PRIMARY KEY (`id_post_cliente`),
  ADD KEY `user_cli_idx` (`id_emp`);

--
-- Índices para tabela `post_has_social`
--
ALTER TABLE `post_has_social`
  ADD PRIMARY KEY (`nome`,`id_post`),
  ADD KEY `aux_post_social_idx` (`id_post`);

--
-- Índices para tabela `post_has_social_cliente`
--
ALTER TABLE `post_has_social_cliente`
  ADD PRIMARY KEY (`nome`,`id_post_cliente`);

--
-- Índices para tabela `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices para tabela `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD CONSTRAINT `user_noti` FOREIGN KEY (`usuario`) REFERENCES `sistema` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_emp`) REFERENCES `empresas` (`id_emp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `post_client`
--
ALTER TABLE `post_client`
  ADD CONSTRAINT `user_cli` FOREIGN KEY (`id_emp`) REFERENCES `empresas` (`id_emp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `post_has_social`
--
ALTER TABLE `post_has_social`
  ADD CONSTRAINT `aux_post_social` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aux_social` FOREIGN KEY (`nome`) REFERENCES `social` (`nome`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
