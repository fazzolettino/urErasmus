-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 30, 2018 alle 14:24
-- Versione del server: 10.1.28-MariaDB
-- Versione PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urErasmus`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `KEYUTENTE` int(11) NOT NULL,
  `ID` varchar(32) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `PASS` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`KEYUTENTE`, `ID`, `EMAIL`, `PASS`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `annuncio`
--

CREATE TABLE `annuncio` (
  `KEYANNUNCIO` int(11) NOT NULL,
  `TITOLO` varchar(70) NOT NULL,
  `DESCRIZIONE` varchar(300) DEFAULT NULL,
  `CONTATTO` varchar(70) DEFAULT NULL,
  `DATADICARICAMENTO` date NOT NULL,
  `KEYUTENTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `annuncio`
--

INSERT INTO `annuncio` (`KEYANNUNCIO`, `TITOLO`, `DESCRIZIONE`, `CONTATTO`, `DATADICARICAMENTO`, `KEYUTENTE`) VALUES
(1, 'UniSa', 'Programmazione 1', 'professore@unisa.it', '2017-01-31', 1),
(2, 'UGR', 'Programacion avanzada', 'profesor@ugr.es', '2017-01-31', 3),
(3, 'University of Oxford', 'Computer science', 'professor@oxford.uk', '2017-01-31', 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `KEYCORSI` int(11) NOT NULL,
  `NOME` varchar(70) NOT NULL,
  `CATEGORIA` varchar(25) NOT NULL,
  `ANNOCORSO` varchar(25) DEFAULT NULL,
  `DATADICARICAMENTO` date NOT NULL,
  `KEYUTENTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`KEYCORSI`, `NOME`, `CATEGORIA`, `ANNOCORSO`, `DATADICARICAMENTO`, `KEYUTENTE`) VALUES
(1, 'Architettura degli elaboratori', 'Informatica', 'Primo anno, primo semestr', '2017-01-31', 1),
(2, 'Algoritmi & Strutture Dati', 'Informatica', 'Secondo anno, secondo sem', '2017-01-31', 1),
(3, 'Analisi Matematica', 'Matematica', 'Primo anno, secondo semes', '2017-01-31', 2),
(4, 'Analisi Matematica informatica', 'Informatica', 'Primo anno, secondo semes', '2017-01-31', 2),
(7, 'Chimica Organica', 'Chimica', 'Secondo anno, primo semes', '2017-01-31', 3),
(8, 'Chimica Inorganica', 'Chimica', 'Terzo anno, secondo semes', '2017-01-31', 3),
(9, 'Biologia Molecolare', 'Biologia', 'Terzo anno, primo semestr', '2017-01-31', 4),
(10, 'Ecologia Vegetale', 'Scienze Ambientali', 'Secondo anno, primo semes', '2017-01-31', 5),
(11, 'Ecologia Generale', 'Scienze Ambientali', 'Secondo anno, secondo sem', '2017-01-31', 5),
(12, 'Fisica Applicata', 'Fisica', 'Primo anno, secondo semes', '2017-01-31', 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `tag`
--

CREATE TABLE `tag` (
  `KEYTAG` int(11) NOT NULL,
  `NOMETAG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tag`
--

INSERT INTO `tag` (`KEYTAG`, `NOMETAG`) VALUES
(23, 'Autoecologia'),
(5, 'C'),
(24, 'Camere'),
(19, 'Cellule'),
(15, 'chimica'),
(18, 'connettivi'),
(20, 'Ecologia'),
(26, 'Fisciano'),
(27, 'Fisica'),
(7, 'Funzioni'),
(12, 'Gruppo'),
(10, 'Idrocarburi'),
(13, 'Idrogeno'),
(6, 'Integrali'),
(9, 'Isometria'),
(1, 'Java'),
(29, 'Lavoro'),
(4, 'MasterT'),
(28, 'Meccanica'),
(8, 'NumeriReali'),
(30, 'Offerta'),
(16, 'organica'),
(3, 'Pile'),
(14, 'Ripetizioni'),
(21, 'Scienza'),
(22, 'Sinecologia'),
(25, 'Singole'),
(2, 'SQL'),
(17, 'Tessuti'),
(11, 'V');

-- --------------------------------------------------------

--
-- Struttura della tabella `tagperannuncio`
--

CREATE TABLE `tagperannuncio` (
  `KEYTAG` int(11) NOT NULL,
  `KEYANNUNCIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tagperannuncio`
--

INSERT INTO `tagperannuncio` (`KEYTAG`, `KEYANNUNCIO`) VALUES
(5, 1),
(14, 2),
(15, 2),
(16, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 3),
(28, 3),
(29, 3),
(30, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `tagpercorsi`
--

CREATE TABLE `tagpercorsi` (
  `KEYTAG` int(11) NOT NULL,
  `KEYCORSI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tagpercorsi`
--

INSERT INTO `tagpercorsi` (`KEYTAG`, `KEYCORSI`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(6, 3),
(6, 4),
(7, 3),
(7, 4),
(8, 4),
(9, 7),
(10, 7),
(11, 8),
(12, 8),
(13, 8),
(17, 9),
(18, 9),
(19, 10),
(20, 11),
(21, 11),
(22, 12),
(23, 12),
(27, 14),
(28, 14);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `KEYUTENTE` int(11) NOT NULL,
  `ID` varchar(32) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `CITTA` varchar(70) DEFAULT NULL,
  `PASS` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`KEYUTENTE`, `ID`, `EMAIL`, `CITTA`, `PASS`) VALUES
(1, 'Rodrigo Calvo', 'rodrigo@gmail.com', 'Oviedo', 'rodrimepone'),
(2, 'Manuel', 'saradifelice@hotmail.com', 'Salerno', 'saradifelice'),
(3, 'Alessandro Guaion', 'v.noviello@gmail.com', 'Sala Consilina', 'vnoviello'),
(4, 'Martina Lombardi', 'Lombardim@live.it', 'Caserta', '123456'),
(5, 'Severino Ammirati', 's.ammirati@gmail.com', 'Striano', 'ammirati'),
(6, 'Giovanni Salvati', 'giosalvati@gmail.com', 'Napoli', 'salvati'),
(7, 'Giuseppe Bellino', 'gbellino@gmail.com', 'Terzigno', 'bellini'),
(8, 'Mirko_PROLOLGAMER', 'm.aliberti@gmail.com', 'Siano', 'aliberti'),
(9, 'Alex91msn', 'Alex@email.it', 'Pesciola', 'pasword');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`KEYUTENTE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`ID`);

--
-- Indici per le tabelle `annuncio`
--
ALTER TABLE `annuncio`
  ADD PRIMARY KEY (`KEYANNUNCIO`),
  ADD KEY `KEYUTENTE` (`KEYUTENTE`);

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`KEYCORSI`),
  ADD KEY `KEYUTENTE` (`KEYUTENTE`);

--
-- Indici per le tabelle `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`KEYTAG`),
  ADD UNIQUE KEY `NOMETAG` (`NOMETAG`);

--
-- Indici per le tabelle `tagperannuncio`
--
ALTER TABLE `tagperannuncio`
  ADD PRIMARY KEY (`KEYTAG`,`KEYANNUNCIO`),
  ADD KEY `KEYANNUNCIO` (`KEYANNUNCIO`);

--
-- Indici per le tabelle `tagpercorsi`
--
ALTER TABLE `tagpercorsi`
  ADD PRIMARY KEY (`KEYTAG`,`KEYCORSI`),
  ADD KEY `KEYCORSI` (`KEYCORSI`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`KEYUTENTE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
  MODIFY `KEYUTENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `annuncio`
--
ALTER TABLE `annuncio`
  MODIFY `KEYANNUNCIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `KEYCORSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `tag`
--
ALTER TABLE `tag`
  MODIFY `KEYTAG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `KEYUTENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `annuncio`
--
ALTER TABLE `annuncio`
  ADD CONSTRAINT `annuncio_ibfk_1` FOREIGN KEY (`KEYUTENTE`) REFERENCES `utente` (`KEYUTENTE`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limiti per la tabella `corsi`
--
ALTER TABLE `corsi`
  ADD CONSTRAINT `corsi_ibfk_1` FOREIGN KEY (`KEYUTENTE`) REFERENCES `utente` (`KEYUTENTE`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limiti per la tabella `tagperannuncio`
--
ALTER TABLE `tagperannuncio`
  ADD CONSTRAINT `tagperannuncio_ibfk_1` FOREIGN KEY (`KEYTAG`) REFERENCES `tag` (`KEYTAG`),
  ADD CONSTRAINT `tagperannuncio_ibfk_2` FOREIGN KEY (`KEYANNUNCIO`) REFERENCES `annuncio` (`KEYANNUNCIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
