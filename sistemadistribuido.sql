-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Out-2019 às 04:20
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadistribuido`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `endereco`, `numero`, `bairro`, `cidade`, `descricao`, `status`, `preco`, `imagem`) VALUES
(1, 'Rua Dr. Albuquerque de Barros', '530', 'Centro', 'Pelotas', 'Imóvel com dois quartos, cozinha, banheiro, sala e jardim', 'Venda', 10000, 'imagens/casa01.jpg'),
(2, 'Av. Bento Gonçalves', '1500', 'Centro', 'Pelotas', 'Imóvel com dois quartos, cozinha, banheiro, sala e jardim', 'Aluguel', 500, 'imagens/casa02.jpg'),
(3, 'Rua Dr. Albuquerque de Barros', '530', 'Centro', 'Pelotas', 'Imóvel com dois quartos, cozinha, banheiro, sala e jardim', 'Venda', 10000, 'imagens/casa01.jpg'),
(4, 'Av. Bento Gonçalves', '1500', 'Centro', 'Pelotas', 'Imóvel com dois quartos, cozinha, banheiro, sala e jardim', 'Aluguel', 5000, 'imagens/casa02.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `imagem_arquivo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`codigo`, `nome`, `telefone`, `status`, `email`, `endereco`, `numero`, `cep`, `imagem`, `imagem_arquivo`) VALUES
(1, 'Angelina Jolie', '59871215', 'Ativo', 'angelina@gmail.com', 'Rua XXX', '500', '96000000', '01.jpg', ''),
(2, 'Nathan Drake', '55566', 'Inativo', 'uncharted@mail.com', 'Rua YYY', '300', '96000000', '02.jpg', ''),
(3, 'Jill Valentine', '62655656', 'Ativo', 'resident@mail.com', 'Rua XXX', '530', '96000000', '04.jpg', ''),
(4, 'Leon S. Kennedy', '565455', 'Ativo', 'resident@mail.com', 'Rua fsgasfgafs', '530', '96000000', '03.jpg', ''),
(5, 'Claire Redfield', '5484845', 'Ativo', 'resident@mail.com', 'Rua XXX', '200', '96000000', '05.jpg', ''),
(6, 'Albert Wesker', '54544545', 'Inativo', 'resident@mail.com', 'Rua XXX', '250', '96000000', '00.jpg', ''),
(7, 'Antonio Banderas', '555555555', 'Inativo', 'antonio@mail.com', 'Av Bento Gonçalves', '1500', '96000000', '06.jpg', ''),
(8, 'Grazziano', '555555555', 'Ativo', 'grazzianofagundes@gmail.com', 'Rua Doutor Albuquerque Barros', '530', '96015340', 'kratos.pnh.jpg', ''),
(9, 'Lara Croft', '1212121212', 'Ativo', 'tombraider@mail.com', 'Rua Doutor Albuquerque Barros', '530', '96000000', 'lara.jpg', ''),
(10, 'Goku', '4545454545', 'Ativo', 'dbz@mail.com', 'Rua XXX', '780', '96000000', 'goku.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'grazzianofagundes@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `membros`
--
ALTER TABLE `membros`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
