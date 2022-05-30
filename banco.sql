-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 30/05/2022 às 10:43
-- Versão do servidor: 8.0.28
-- Versão do PHP: 8.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadeiaCustodia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `casos`
--

CREATE TABLE `casos` (
  `id` bigint UNSIGNED NOT NULL,
  `nomeCaso` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etapa` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ponto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alvo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setor` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `casos`
--

INSERT INTO `casos` (`id`, `nomeCaso`, `titular`, `created_at`, `updated_at`, `status`, `etapa`, `ponto`, `endereco`, `alvo`, `setor`) VALUES
(1, 'Scketch', 'Dr. Jarbas', NULL, NULL, '0', '', '0', '0', '0', ''),
(5, 'Operação Valquíria', 'Dr. Frade', '2022-02-28 03:19:10', '2022-02-28 03:19:10', 'D', 'Deslacração', '01', '0', '0', ''),
(6, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Auto de B.A.', 'Operação de Campo', '01', 'Rua Levindo Torres, 42 - Bairro Horta ', 'Aristóteles Augustus', 'GAECO - BH'),
(9, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Auto de B.A.', 'Operação de Campo', '02', 'Rua Igarapoé, 118 - Bairro Almeida', 'Demétrios Damares', 'GAECO'),
(10, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Operação de Campo', '03', 'Alameda da Paixão, 1.290 - Pradaria', 'Carmesia Borges', 'GAECO - BH'),
(11, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Recebimento', 'Operação de Campo', '04', 'Rua Galdina, 2341 - Bairro Forjas', 'Carlos Damares', 'GAECO - BH'),
(12, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Recebimento', 'Operação de Campo', '05', 'Alameda 13, Bairro Bigornas', 'Carmesia Borges', 'GAECO - BH'),
(13, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Operação de Campo', '06', 'Rua Aritimetica, 123 - Bairro Vikings', 'Joeario Damares', 'GAECO - BH'),
(14, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Atividade de Campo', '14', 'Rua Levindo Torres, 42 - Bairro Horta Alvo', 'Moacir Nunes', 'GAECO - BH'),
(15, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '07', 'Rua Tollentino Braga 56, Bairro da Gaivotas ', 'Augustinho Kant', 'Central de Custódia'),
(16, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '08', 'Rua Marlieria Torres, 345 - Bairro Matinha ', 'João Descartes', 'Central de Custódia'),
(17, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '09', 'Rua Igarapé, 1118 - Bairro Alfaville', 'Imanuel Jeferson', 'Central de Custódia'),
(18, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '10', 'Alameda do Amor, 1.290 - Drogaria', 'Cipriano', 'Central de Custódia'),
(19, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '11', 'Rua Geometria, 123 - Bairro Normandia', 'Alexandre Magno', 'Central de Custódia'),
(20, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '12', 'Alameda do Amor, 1.290 - Drogaria', 'Augustos Nicodemos', 'Central de Custódia'),
(21, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '13', 'Rua Geometria, 123 - Bairro Normandia', 'Aurélio Colossus', 'Central de Custódia'),
(22, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '15', 'Rua Levando Prédios, 42 - Bairro Matinha Alvo', 'Edvanio Centra', 'Central de Custódia'),
(23, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '16', 'Rua Balbino fraga 56, Bairro da Gaivotas ', 'Augustinho Kant', 'Central de Custódia'),
(24, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Restituicao', 'Operação de Campo', '17', 'Av. dos Andradas, 915 - Centro, Belo Horizonte - MG, 30120-010', 'Caio Lopes', 'GAECO - BH'),
(25, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Restituicao', 'Operação de Campo', '18', 'R. Salinas, 1447 - Santa Tereza, Belo Horizonte - MG', 'Cirlene Ferreira', 'GAECO'),
(26, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Operação de Campo', '19', 'Alameda da Paixão, 1.290 - Pradaria', 'Bruna Daniele De Oliveira Silva', 'GAECO - BH'),
(27, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Apreensao', 'Operação de Campo', '20', 'Rua Pastor Muryllo Cassete, 25 - São Bernardo, Belo Horizonte - MG, 31741-405', 'Aquilis Jesus Maia', 'GAECO - BH'),
(28, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Apreensao', 'Operação de Campo', '21', 'BR 356, n.º 3.049. Bairro Belvedere', 'Alessandra Gama ', 'GAECO - BH'),
(29, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Operação de Campo', '22', 'Rua Emília Brochado, Betânia, Belo Horizonte - MG', 'IVANILDE GERALDA', 'GAECO - BH'),
(30, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Deslacracao', 'Atividade de Campo', '23', 'Rodovia Papa João Paulo II, 4001 Edifício Gerais - 2º', 'Moacir Nunes', 'GAECO - BH'),
(31, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '24', 'Rua Dona Bela, Betânia, Belo Horizonte - MG', 'ORTENCIA MARTINS', 'Central de Custódia'),
(32, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '25', 'Rua Minasgás, Betânia, Belo Horizonte - MG, 345 - Bairro Matinha ', 'João Descartes', 'Central de Custódia'),
(33, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Relatorio', 'Central de Custódia', '26', 'Rua Geraldo do Carmo, Betânia, Belo Horizonte - MG', 'KARINA CALAIS MAYRINK', 'Central de Custódia'),
(34, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '27', 'Rua Um (Prox R Pst Waldemar Terra), Betânia, Belo Horizonte - MG', 'Cipriano', 'Central de Custódia'),
(35, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Relatorio', 'Central de Custódia', '28', 'Rua Cáspio, Betânia, Belo Horizonte - MG', 'FERNANDA SILVA DE OLIVEIRA', 'Central de Custódia'),
(36, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '29', 'Avenida Teresa Cristina - de 6745 a 7601 - lado ímpar, Betânia, Belo Horizonte - MG', 'VANESSA DE OLIVEIRA ', 'Central de Custódia'),
(37, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Analise', 'Central de Custódia', '30', 'Beco Vitalina Alves, Betânia, Belo Horizonte - MG', 'ABRIELA DOS SANTOS DELLAVALI', 'Central de Custódia'),
(38, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Relatorio', 'Central de Custódia', '31', 'Avenida Maria Júlia de Lima, Betânia, Belo Horizonte - MG', 'HENRIQUE VIEGAS BICALHO', 'Central de Custódia'),
(39, 'Operação Sangria', 'Dr. Rocha', NULL, NULL, 'Relatorio', 'Central de Custódia', '32', 'Rua José Ferreira Campos, Betânia, Belo Horizonte - MG', 'LIDIANE MENEZES', 'Central de Custódia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_02_27_122251_create_casos_table', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casos`
--
ALTER TABLE `casos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
