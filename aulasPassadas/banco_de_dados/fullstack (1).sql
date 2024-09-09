-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Set-2024 às 00:35
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28
DROP database if exists fullstack;
create database fullstack;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixaRegistradora`
--

CREATE TABLE `caixaRegistradora` (
  `id` int(11) NOT NULL,
  `nome` varchar(125) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `dataDeCriacao` datetime NOT NULL DEFAULT current_timestamp(),
  `deletado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `caixaRegistradora`
--

INSERT INTO `caixaRegistradora` (`id`, `nome`, `preco`, `dataDeCriacao`, `deletado`) VALUES
(3, 'Banana', 200.00, '2024-08-29 20:23:30', 0),
(4, 'Abacaxiiiiii', 80.00, '2024-08-29 20:23:30', 0),
(5, 'Uva', 10.00, '2024-08-29 20:23:30', 0),
(8, 'kiwi', 10.00, '2024-08-29 21:02:31', 0),
(9, 'carne', 10.00, '2024-08-29 21:02:39', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `logradouro` varchar(256) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `bairro` varchar(125) NOT NULL,
  `cidade` varchar(125) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `usuario_id`) VALUES
(1, 'Rua centro', '123', 'centro', 'Guarulhos', 'SP', '01234-567', 1),
(2, 'RUA DA FERNANDA', '123 A', 'Rural', 'Rio de Janeiro', 'RJ', '09123-123', 10),
(3, 'RUA DA FERNANDA', '123 A', 'Rural', 'Rio de Janeiro', 'RJ', '09123-123', 2),
(4, 'AVENIDA CENTRAL', '456 B', 'Centro', 'São Paulo', 'SP', '01010-001', 3),
(5, 'RUA DAS OLIVEIRAS', '789 C', 'Jardim', 'Belo Horizonte', 'MG', '30120-003', 4),
(6, 'RUA DA PAZ', '321 D', 'Avenida', 'Salvador', 'BA', '40000-000', 5),
(7, 'RUA DAS FLORES', '654 E', 'Flores', 'Fortaleza', 'CE', '60000-100', 6),
(8, 'AVENIDA PAULISTA', '987 F', 'Paulista', 'São Paulo', 'SP', '01310-000', 7),
(9, 'RUA DO SOL', '258 G', 'Solar', 'Recife', 'PE', '50000-200', 8),
(10, 'RUA DO MAR', '369 H', 'Praia', 'Natal', 'RN', '59000-300', 9),
(11, 'AVENIDA BRASIL', '741 I', 'Brasil', 'Brasília', 'DF', '70000-400', 10),
(12, 'RUA DAS ACÁCIAS', '852 J', 'Acácia', 'Curitiba', 'PR', '80000-500', 11),
(13, 'RUA DA SERRA', '963 K', 'Serra', 'Porto Alegre', 'RS', '90000-600', 12),
(14, 'RUA DO LAGO', '147 L', 'Lago', 'São Luís', 'MA', '65000-700', 13),
(15, 'AVENIDA FLORESTAL', '258 M', 'Florestal', 'Campo Grande', 'MS', '79000-800', 14),
(16, 'RUA DAS ÁRVORES', '369 N', 'Árvores', 'João Pessoa', 'PB', '58000-900', 15),
(17, 'RUA DO COMÉRCIO', '480 O', 'Comércio', 'Aracaju', 'SE', '49000-010', 16),
(18, 'AVENIDA DO TEATRO', '591 P', 'Teatro', 'Maceió', 'AL', '57000-020', 17),
(19, 'RUA DOS CANDEIA', '602 Q', 'Candeia', 'São Bernardo do Campo', 'SP', '09700-030', 18),
(20, 'RUA DOS JATOBÁS', '713 R', 'Jatobás', 'Diadema', 'SP', '09900-040', 19),
(21, 'AVENIDA NOVA', '824 S', 'Nova', 'Santo André', 'SP', '09000-050', 20),
(22, 'RUA DA UNIÃO', '935 T', 'União', 'Osasco', 'SP', '06200-060', 21),
(23, 'RUA DOS PINS', '146 U', 'Pins', 'Guarulhos', 'SP', '07000-070', 22),
(24, 'RUA DOS LÍRIOS', '257 V', 'Lírios', 'São Caetano do Sul', 'SP', '09500-080', 23),
(25, 'AVENIDA DA HARMONIA', '368 W', 'Harmonia', 'Vila Velha', 'ES', '29100-090', 24),
(26, 'RUA DAS PALMEIRAS', '479 X', 'Palmeiras', 'Cuiabá', 'MT', '78000-100', 25),
(27, 'RUA DO INGA', '580 Y', 'Inga', 'Manaus', 'AM', '69000-110', 26),
(28, 'RUA DA SERRA', '123 A', 'Serra', 'Porto Alegre', 'RS', '90000-111', 2),
(29, 'RUA DO COMÉRCIO', '456 B', 'Comércio', 'São Luís', 'MA', '65000-222', 3),
(30, 'RUA DAS OLIVEIRAS', '789 C', 'Oliveiras', 'Curitiba', 'PR', '80000-333', 4),
(31, 'AVENIDA CENTRAL', '321 D', 'Central', 'Salvador', 'BA', '40000-444', 5),
(32, 'RUA DO SOL', '654 E', 'Sol', 'Recife', 'PE', '50000-555', 6),
(33, 'AVENIDA PAULISTA', '987 F', 'Paulista', 'São Paulo', 'SP', '01310-666', 7),
(34, 'RUA DAS ACÁCIAS', '258 G', 'Acácias', 'João Pessoa', 'PB', '58000-777', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `nome` varchar(125) NOT NULL,
  `dataDeRegistro` date DEFAULT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `dataDeRegistro`, `idade`) VALUES
(1, 'Matheus', '2024-08-26', 28),
(5, 'Joao', '2024-08-25', 44),
(6, 'Ana Silva', '2024-08-01', 29),
(7, 'Carlos Souza', '2024-08-02', 34),
(8, 'Maria Oliveira', '2024-08-03', 22),
(9, 'João Pereira', '2024-08-04', 45),
(10, 'Fernanda Lima', '2024-08-05', 31),
(11, 'Ricardo Costa', '2024-08-06', 27),
(12, 'Juliana Santos', '2024-08-07', 38),
(13, 'Marcos Almeida', '2024-08-08', 42),
(14, 'Tatiane Rodrigues', '2024-08-09', 25),
(15, 'Lucas Martins', '2024-08-10', 33),
(16, 'Beatriz Campos', '2024-08-11', 30),
(17, 'Eduardo Ferreira', '2024-08-12', 40),
(18, 'Patrícia Gomes', '2024-08-13', 28),
(19, 'Vinícius Rocha', '2024-08-14', 36),
(20, 'Claudia Martins', '2024-08-15', 41),
(21, 'Felipe Cardoso', '2024-08-16', 26),
(22, 'Mariana Oliveira', '2024-08-17', 24),
(23, 'Gustavo Lima', '2024-08-18', 39),
(24, 'Jéssica Costa', '2024-08-19', 32),
(25, 'Renato Silva', '2024-08-20', 37),
(26, 'Sofia Andrade', '2024-08-21', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `senha` varchar(1024) NOT NULL,
  `status` enum('ativo','inativo') NOT NULL DEFAULT 'ativo',
  `palavraDeSeguranca` varchar(125) DEFAULT NULL,
  `ultimoLogin` datetime DEFAULT NULL,
  `criado_em` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixaRegistradora`
--
ALTER TABLE `caixaRegistradora`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixaRegistradora`
--
ALTER TABLE `caixaRegistradora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
