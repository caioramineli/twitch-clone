-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 00:17
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `twitch`
--
CREATE DATABASE twitch;
USE twitch;
-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `nome_categoria` varchar(150) NOT NULL,
  `qtd_espectador` varchar(100) NOT NULL,
  `tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`nome_categoria`, `qtd_espectador`, `tag`) VALUES
('Call of Duty', '500 mil espectadores', 'Tiro'),
('clash Royale', '20 mil espectadores', 'Torre'),
('Fortnite', '150 mil espectadores', 'FPS'),
('Minecraft', '300 mil espectadores', 'Mineração'),
('Paladins', '150 mil espectadores', 'Battle Royale');

-- --------------------------------------------------------

--
-- Estrutura para tabela `streamer`
--

CREATE TABLE `streamer` (
  `nickname` varchar(100) NOT NULL,
  `nome_streamer` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone_streamer` varchar(20) NOT NULL,
  `email_streamer` varchar(150) NOT NULL,
  `senha_streamer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `streamer`
--

INSERT INTO `streamer` (`nickname`, `nome_streamer`, `cpf`, `telefone_streamer`, `email_streamer`, `senha_streamer`) VALUES
('CremosinhoBR', 'Luiz Cássio', '258.147.321-36', '(78) 9632-7840', 'gameporamor@gmail.com', 'amophp'),
('ForeignBR', 'Alan Alves', '147.258.369-11', '(18) 1234-5678', 'foreign@gmail.com', 'liveporamor'),
('Luizinho1227', 'Luiz Carlos', '111.111.111-11', '(99) 56894-7123', 'luiz@gmail.com', 'minecraft'),
('Marinau', 'Willian', '987.654.321-96', '(11) 7896-4521', 'marinau@gmail.com', 'agoravai'),
('Viniccius13', 'Vinicius Otávio', '114.478.742-22', '(78) 85214-9564', 'viniccius13@gmail.com', 'casaautomatica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario`, `telefone`, `email`, `senha`) VALUES
('Alana Lorenzo', '(22) 32654-7742', 'alana@gmail.com', 'alana789'),
('Josh MacCal', '(18) 99756-5523', 'josh@gmail.com', 'adminadmin'),
('Lucas Games', '(18) 99782-5220', 'lucasgames@gmail.com', 'gamesporamor'),
('Lucas Gomes', '(45) 98745-6633', 'lucas@gmail.com', 'lucas123'),
('LuizinhoGamer', '(11) 98315-6220', 'luizBR@gmail.com', 'mineporamor'),
('Maha Jace', '(18) 98115-2220', 'jace@gmail.com', 'jace123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `video`
--

CREATE TABLE `video` (
  `id` int(5) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `nickname_streamer` varchar(100) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `duracao` varchar(150) NOT NULL,
  `visualizacao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `video`
--

INSERT INTO `video` (`id`, `titulo`, `nickname_streamer`, `categoria`, `duracao`, `visualizacao`) VALUES
(10, 'Partida do dia', 'Marinau', 'Fortnite', '1:20:00', '200 mil visualizações'),
(11, 'pentakill', 'ForeignBR', 'Paladins', '0:50:20', '10 mil visualizações'),
(12, 'O início de tudo #1', 'CremosinhoBR', 'Minecraft', '0:50:20', '250 mil visualizações'),
(13, 'Arena #37', 'Luizinho1227', 'Fortnite', '1:20:00', '350 mil visualizações'),
(14, 'Melhor loadout 2.0', 'Viniccius13', 'Call of Duty', '0:30:10', '100 mil visualizações'),
(15, 'Casa Automática #39', 'Viniccius13', 'Minecraft', '00:40:00', '200 mil visualizações');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`nome_categoria`);

--
-- Índices de tabela `streamer`
--
ALTER TABLE `streamer`
  ADD PRIMARY KEY (`nickname`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices de tabela `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `video`
--
ALTER TABLE `video`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
