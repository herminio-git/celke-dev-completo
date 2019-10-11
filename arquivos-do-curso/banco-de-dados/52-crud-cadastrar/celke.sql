-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/09/2017 às 22:33
-- Versão do servidor: 5.7.14
-- Versão do PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-09-23 00:00:00', NULL),
(2, 'Financeiro', '2017-09-23 00:00:00', NULL),
(3, 'Cliente', '2017-09-23 00:00:00', NULL),
(4, 'Suporte', '2017-09-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacaos`
--

CREATE TABLE `situacaos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `situacaos`
--

INSERT INTO `situacaos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2017-09-23 00:00:00', NULL),
(2, 'Inativo', '2017-09-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `email` varchar(220) NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT '2',
  `niveis_acesso_id` int(11) NOT NULL,
  `qnt_acessos` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `situacao_id`, `niveis_acesso_id`, `qnt_acessos`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', 1, 1, 15, '2017-09-23 00:00:00', NULL),
(2, 'Kelly', 'kelly@celke.com.br', 1, 2, 20, '2017-09-23 00:00:00', NULL),
(3, 'Jessica', 'jessica@celke.com.br', 1, 3, 10, '2017-09-23 00:00:00', NULL),
(4, 'Ana', 'ana@celke.com.br', 2, 3, 15, '2017-09-23 00:00:00', NULL),
(5, 'Carlos', 'carlos@celke.com.br', 2, 3, 0, '2017-09-23 15:48:31', NULL),
(6, 'Cesar 1', 'cesar1@celke.com.br', 2, 3, 0, '2017-09-23 15:50:43', NULL),
(7, 'Cesar 2', 'cesar2@celke.com.br', 2, 3, 0, '2017-09-23 15:57:35', NULL),
(8, 'Cesar 4', 'cesar4@celke.com.br', 2, 3, 0, '2017-09-23 16:22:16', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `situacaos`
--
ALTER TABLE `situacaos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `situacao_id` (`situacao_id`),
  ADD KEY `niveis_acesso_id` (`niveis_acesso_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `situacaos`
--
ALTER TABLE `situacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacaos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
