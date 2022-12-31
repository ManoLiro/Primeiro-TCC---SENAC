-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 21:11
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senatec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparelhos`
--

CREATE TABLE `aparelhos` (
  `cod_aparelho` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `Entrada_Aparelho` date DEFAULT NULL,
  `Tipo` varchar(30) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Avaria` varchar(300) DEFAULT NULL,
  `Qtde` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aparelhos`
--

INSERT INTO `aparelhos` (`cod_aparelho`, `cod_cliente`, `Entrada_Aparelho`, `Tipo`, `Modelo`, `Avaria`, `Qtde`) VALUES
(23, 6, '2021-11-03', 'Notebook', 'Asus one', 'Faltando 4 parafusos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `CPF` varchar(15) DEFAULT NULL,
  `Endereço` varchar(100) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `Nome`, `CPF`, `Endereço`, `Telefone`) VALUES
(6, 'Joao Francisco', '11111111111', 'Salvador/Ba', '222222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `cod_empresa` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `CNPJ` varchar(25) DEFAULT NULL,
  `Endereço` varchar(100) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`cod_empresa`, `Nome`, `CNPJ`, `Endereço`, `Email`) VALUES
(1, 'Senatec', '44444724000108', 'Salvador/Ba', 'senatec@tecnologia.com'),
(2, 'TechClick', '41941882000177', 'Salvador/Ba', 'murilo.cruzsantana@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_funcionarios` int(11) NOT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  `Função` varchar(100) DEFAULT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `CPF` varchar(15) DEFAULT NULL,
  `Endereço` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_funcionarios`, `cod_empresa`, `Função`, `Nome`, `CPF`, `Endereço`, `email`, `senha`) VALUES
(9, 1, 'Tecnica', 'Kailane Carvalho do Santos', '1234561234', 'Salvador/Ba', 'Kailane@tecnologia.com', 12345678),
(10, 1, 'Tecnico', 'Murilo Santana', '1234561231', 'Salvador/Ba', 'murilo@tecnologia.com', 12345678),
(11, 1, 'Tecnica', 'Anita', '018262547252', 'Salvador/Ba', 'Anita@tecnologia.com', 12345678);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_de_serviço`
--

CREATE TABLE `ordem_de_serviço` (
  `cod_serviço` int(11) NOT NULL,
  `cod_orçamento` int(11) DEFAULT NULL,
  `cod_aparelho` int(11) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `cod_funcionarios` int(11) DEFAULT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Data_saida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ordem_de_serviço`
--

INSERT INTO `ordem_de_serviço` (`cod_serviço`, `cod_orçamento`, `cod_aparelho`, `cod_cliente`, `cod_funcionarios`, `cod_empresa`, `Status`, `Data_saida`) VALUES
(6, 9, 23, 6, 9, 1, 'Finalizado/Entregue', '2021-11-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orçamentos`
--

CREATE TABLE `orçamentos` (
  `cod_orçamento` int(11) NOT NULL,
  `Defeito` varchar(200) DEFAULT NULL,
  `Solução` varchar(200) DEFAULT NULL,
  `valor` int(11) NOT NULL,
  `Data_orçamento` date DEFAULT NULL,
  `cod_aparelho` int(11) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orçamentos`
--

INSERT INTO `orçamentos` (`cod_orçamento`, `Defeito`, `Solução`, `valor`, `Data_orçamento`, `cod_aparelho`, `cod_cliente`, `cod_empresa`, `nome_cliente`, `status`) VALUES
(9, 'Lentidao', 'Limpeza', 120, '2021-11-03', 23, 6, 1, 'Joao Francisco', 'Concluido'),
(10, 'Lentidao', 'Limpeza', 100, '2021-11-03', 23, 6, 1, 'Joao Francisco', 'Pendente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD PRIMARY KEY (`cod_aparelho`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cod_empresa`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cod_funcionarios`),
  ADD KEY `cod_empresa` (`cod_empresa`);

--
-- Índices para tabela `ordem_de_serviço`
--
ALTER TABLE `ordem_de_serviço`
  ADD PRIMARY KEY (`cod_serviço`),
  ADD KEY `cod_aparelho` (`cod_aparelho`),
  ADD KEY `cod_orçamento` (`cod_orçamento`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_funcionarios` (`cod_funcionarios`),
  ADD KEY `cod_empresa` (`cod_empresa`);

--
-- Índices para tabela `orçamentos`
--
ALTER TABLE `orçamentos`
  ADD PRIMARY KEY (`cod_orçamento`),
  ADD KEY `cod_aparelho` (`cod_aparelho`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_empresa` (`cod_empresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  MODIFY `cod_aparelho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `cod_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `cod_funcionarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `ordem_de_serviço`
--
ALTER TABLE `ordem_de_serviço`
  MODIFY `cod_serviço` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `orçamentos`
--
ALTER TABLE `orçamentos`
  MODIFY `cod_orçamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD CONSTRAINT `aparelhos_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`cod_cliente`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`cod_empresa`) REFERENCES `empresas` (`cod_empresa`);

--
-- Limitadores para a tabela `ordem_de_serviço`
--
ALTER TABLE `ordem_de_serviço`
  ADD CONSTRAINT `ordem_de_serviço_ibfk_1` FOREIGN KEY (`cod_aparelho`) REFERENCES `aparelhos` (`cod_aparelho`),
  ADD CONSTRAINT `ordem_de_serviço_ibfk_2` FOREIGN KEY (`cod_orçamento`) REFERENCES `orçamentos` (`cod_orçamento`),
  ADD CONSTRAINT `ordem_de_serviço_ibfk_3` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`cod_cliente`),
  ADD CONSTRAINT `ordem_de_serviço_ibfk_4` FOREIGN KEY (`cod_funcionarios`) REFERENCES `funcionarios` (`cod_funcionarios`),
  ADD CONSTRAINT `ordem_de_serviço_ibfk_5` FOREIGN KEY (`cod_empresa`) REFERENCES `empresas` (`cod_empresa`);

--
-- Limitadores para a tabela `orçamentos`
--
ALTER TABLE `orçamentos`
  ADD CONSTRAINT `orçamentos_ibfk_1` FOREIGN KEY (`cod_aparelho`) REFERENCES `aparelhos` (`cod_aparelho`),
  ADD CONSTRAINT `orçamentos_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`cod_cliente`),
  ADD CONSTRAINT `orçamentos_ibfk_3` FOREIGN KEY (`cod_empresa`) REFERENCES `empresas` (`cod_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
