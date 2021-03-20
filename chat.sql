-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2020 às 01:02
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `estrelas` int(11) NOT NULL,
  `lugar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`id`, `link`, `estrelas`, `lugar`) VALUES
(1, 'https://www.hurb.com/br/hotels/sao-paulo/blue-tree-premium-verbo-divino-nacoes-unidas-OMN-1056', 3, 'HB Hotels Ninety'),
(2, 'https://www.hurb.com/br/hotels/sao-paulo/lugus-hotel-OMN-4969', 3, 'Lugus Hotel'),
(3, 'https://www.hurb.com/br/hotels/sao-paulo/hotel-paraiso-JNP-JP234061', 2, 'Hotel Paraíso'),
(4, 'https://www.hurb.com/br/hotels/sao-paulo/hotel-excelsior-JNP-JP053138', 4, 'Hotel Excelsior'),
(5, 'https://www.hurb.com/br/hotels/sao-paulo/hb-hotels-ninety-JNP-JP053354', 3, 'HB Hotels Ninety'),
(6, 'https://www.hurb.com/br/hotels/sao-paulo/grand-hyatt-sao-paulo-JNP-JP239573', 5, 'Grand Hyatt São Paulo'),
(7, 'https://www.hurb.com/br/hotels/sao-paulo/slim-sao-paulo-congonhas-by-slaviero-hoteis-OMN-2300', 3, 'Slim São Paulo Congonhas by Slaviero Hotéis'),
(8, 'https://www.hurb.com/br/hotels/sao-paulo/braston-voa-business-hotel-OMN-3096', 4, 'Braston Voa Business Hotel'),
(9, 'https://www.hurb.com/br/hotels/sao-paulo/hb-hotels-ninety-JNP-JP053354', 3, 'HB Hotels Ninety'),
(10, 'https://www.hurb.com/br/hotels/sao-paulo/hotel-transamerica-sao-paulo-JNP-JP190588', 5, 'Hotel Transamérica São Paulo'),
(11, 'https://www.hurb.com/br/hotels/sao-paulo/hotel-pullman-sao-paulo-ibirapuera-JNP-JP146474', 5, 'Hotel Pullman Sao Paulo Ibirapuera'),
(12, 'https://www.hurb.com/br/hotels/sao-paulo/intercontinental-sao-paulo-JNP-JP085326', 5, 'InterContinental Sao Paulo'),
(13, 'https://www.hurb.com/br/hotels/sao-paulo/sheraton-sao-paulo-wtc-hotel-JNP-JP052556', 5, 'Sheraton Sao Paulo WTC Hotel'),
(14, 'https://www.hurb.com/br/hotels/sao-paulo/heritage-comfort-inn-JNP-JP454619', 3, 'Heritage Comfort Inn'),
(15, 'https://www.hurb.com/br/hotels/sao-paulo/hotel-ibis-sao-paulo-congonhas-JNP-JP425781', 2, 'Hotel ibis Sao Paulo Congonhas'),
(16, 'https://www.hurb.com/br/hotels/sao-paulo/palacio-tangara-JNP-JP02090M', 5, 'Palácio Tangara');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `mensagem`) VALUES
(290, 'oi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `precos`
--

CREATE TABLE `precos` (
  `id` int(11) NOT NULL,
  `apartamento` varchar(535) DEFAULT NULL,
  `valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `precos`
--

INSERT INTO `precos` (`id`, `apartamento`, `valor`) VALUES
(1, 'Single', 167),
(2, 'Single Luxo', 182),
(3, 'Double', 238),
(4, 'Double Luxo', 258),
(5, 'Triplo Luxo', 294);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `resp` varchar(535) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `resp`) VALUES
(1, 'Olá, sou seu assistente, por favor escolha uma das opções:'),
(2, 'Desculpe não entendi'),
(3, 'Escolha uma das opções :'),
(4, 'Opção escolhida'),
(5, 'Olá sou seu assistente pessoal, por favor escolha uma das opções:'),
(6, '1.Consulta por algum hotel específico'),
(11, '2.Consulta por preço da diária ou por estrelas do hotel'),
(12, 'Opção 2 escolhida, você pode digitar apenas o valor que está disposto a pagar na diária ou quantas estrelas gostaria que seu hotel tenha, ou até mesmo os dois para fazermos uma busca ainda mais precisa (;'),
(13, 'Use apenas números inteiros, caso queria filtrar por preço e estrelas digite primeiro o valor depois o numero de estrelas separado por espaço'),
(14, 'Achei o hotel perfeito para voçê !'),
(15, 'Obrigado por utilizar nosso chat, precione qualquer tecla e enter para finalizar  °/');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `precos`
--
ALTER TABLE `precos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT de tabela `precos`
--
ALTER TABLE `precos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
