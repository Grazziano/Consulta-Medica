-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2020 às 21:49
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pegasus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `data_horario` datetime NOT NULL,
  `horario_agendado` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `email`, `nome`, `senha`, `data_criacao`, `data_alteracao`) VALUES
(1, 'teste@mail.com', 'Teste de Inserção', '123456', '2020-11-22 18:41:10', '2020-11-22 18:41:10'),
(2, 'teste2@mail.com', 'Teste', '123456', '2020-11-22 18:46:47', '2020-11-22 18:46:47');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
