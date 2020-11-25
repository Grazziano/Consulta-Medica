CREATE DATABASE cadastro_medicos;
USE cadastro_medicos;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `data_horario` datetime NOT NULL,
  `horario_agendado` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `horario` (`id`, `id_medico`, `data_horario`, `horario_agendado`, `data_criacao`, `data_alteracao`) VALUES
(1, 1, '2020-12-01 08:30:00', 0, '2020-11-23 13:37:56', '2020-11-23 13:37:56'),
(2, 1, '2021-02-12 07:40:00', 0, '2020-11-23 13:38:31', '2020-11-23 13:38:31'),
(3, 2, '2020-11-30 10:00:00', 1, '2020-11-23 13:39:13', '2020-11-23 13:39:13'),
(4, 2, '2020-12-01 09:45:00', 0, '2020-11-23 13:40:18', '2020-11-23 13:40:18'),
(5, 1, '2020-11-29 06:30:00', 0, '2020-11-23 13:42:16', '2020-11-23 13:42:16'),
(6, 1, '2020-12-12 09:00:00', 1, '2020-11-23 13:42:29', '2020-11-23 13:42:29'),
(7, 2, '2020-12-28 14:35:00', 0, '2020-11-23 13:45:16', '2020-11-23 13:45:16'),
(8, 1, '2020-12-09 17:30:00', 0, '2020-11-23 13:45:39', '2020-11-23 13:45:39'),
(9, 2, '2020-12-09 21:00:00', 0, '2020-11-23 13:46:16', '2020-11-23 13:46:16'),
(10, 1, '2020-12-01 06:45:00', 1, '2020-11-23 13:52:52', '2020-11-23 13:52:52'),
(11, 1, '2020-12-10 18:45:00', 0, '2020-11-23 13:53:14', '2020-11-23 13:53:14'),
(12, 1, '2020-12-17 15:30:00', 1, '2020-11-23 13:54:17', '2020-11-23 13:54:17'),
(13, 2, '2020-11-29 07:50:00', 0, '2020-11-23 13:56:00', '2020-11-23 13:56:00'),
(14, 2, '2020-11-27 12:00:00', 1, '2020-11-24 18:50:03', '2020-11-24 18:50:03'),
(15, 2, '2021-01-30 14:00:00', 1, '2020-11-24 18:50:32', '2020-11-24 18:50:32'),
(16, 1, '2021-01-16 13:30:00', 0, '2020-11-24 21:45:09', '2020-11-24 21:45:09'),
(17, 1, '2021-01-25 14:40:00', 0, '2020-11-24 21:45:19', '2020-11-24 21:45:19'),
(18, 1, '2021-01-16 07:30:00', 0, '2020-11-24 21:45:31', '2020-11-24 21:45:31'),
(19, 2, '2021-11-30 14:00:00', 0, '2020-11-24 21:45:47', '2020-11-24 21:45:47'),
(20, 2, '2021-01-01 14:00:00', 0, '2020-11-24 21:45:57', '2020-11-24 21:45:57'),
(21, 2, '2021-01-13 13:00:00', 0, '2020-11-24 21:46:06', '2020-11-24 21:46:06');

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `medico` (`id`, `email`, `nome`, `senha`, `data_criacao`, `data_alteracao`) VALUES
(1, 'joao.augusto@mail.com', 'Dr. João Augusto de Alcântara', 'e10adc3949ba59abbe56e057f20f883e', '2020-11-23 13:09:24', '2020-11-23 13:09:24'),
(2, 'simone@mail.com', 'Dra. Simone Silva', 'e10adc3949ba59abbe56e057f20f883e', '2020-11-23 13:10:20', '2020-11-23 13:10:20');

ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
