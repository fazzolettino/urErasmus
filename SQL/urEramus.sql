-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Feb 02, 2017 alle 09:29
-- Versione del server: 10.1.19-MariaDB
-- Versione PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urErasmus`
--

-- -------------------------------------------------------- Ale -> 8=============D

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
(1, 'Ripetizioni Programmazione C', 'Dedico delle ore agli studenti in difficoltÃ  per il corso di programmazione in C', 'toremarone@gmail.com', '2017-01-31', 1),
(2, 'Ripetizioni chimica organica', 'Ripetizioni per chimica organica dal lunedÃ¬ al venerdÃ¬ dalle 18:30 per info contattatemi', 'v.noviello@gmail.com', '2017-01-31', 3),
(3, 'Lezioni di tutorato di Fisica Applicata', 'Offro lezioni di tutorato di Fisica Applicata a pagamento. Per info contattare il numero in basso.', '345 45 85 360', '2017-01-31', 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi` Keyutente= 
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
(1, 'Architettura degli elaboratori', 'Informatica', 'Primo anno, primo semestre', '2017-01-31', 1),
(2, 'Algoritmi & Strutture Dati', 'Informatica', 'Secondo anno, secondo semestre', '2017-01-31', 1),
(3, 'Analisi Matematica', 'Matematica', 'Primo anno, secondo semestre', '2017-01-31', 2),
(4, 'Analisi Matematica informatica', 'Informatica', 'Primo anno, secondo semestre', '2017-01-31', 2),
(7, 'Chimica Organica', 'Chimica', 'Secondo anno, primo semestre', '2017-01-31', 3),
(8, 'Chimica Inorganica', 'Chimica', 'Terzo anno, secondo semestre', '2017-01-31', 3),
(9, 'Biologia Molecolare', 'Biologia', 'Terzo anno, primo semestre', '2017-01-31', 4),
(10, 'Ecologia Vegetale', 'Scienze Ambientali', 'Secondo anno, primo semestre', '2017-01-31', 5),
(11, 'Ecologia Generale', 'Scienze Ambientali', 'Secondo anno, secondo semestre', '2017-01-31', 5),
(12, 'Fisica Applicata', 'Fisica', 'Primo anno, secondo semestre', '2017-01-31', 7);

-- --------------------------------------------------------
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
-- Struttura della tabella `tagperappunti`
--

CREATE TABLE `tagperappunti` (
  `KEYTAG` int(11) NOT NULL,
  `KEYAPPUNTI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tagperappunti`
--

INSERT INTO `tagperappunti` (`KEYTAG`, `KEYAPPUNTI`) VALUES
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
(2, 'Rodrigo Calvo', 'rodrigo@gmail.com', 'Oviedo', 'rodrimepone'),
(3, 'Manuel', 'saradifelice@hotmail.com', 'Salerno', 'saradifelice'),
(4, 'Alessandro Guaion', 'v.noviello@gmail.com', 'Sala Consilina', 'vnoviello'),
(5, 'Martina Lombardi', 'Lombardim@live.it', 'Caserta', '123456'),
(6, 'Severino Ammirati', 's.ammirati@gmail.com', 'Striano', 'ammirati'),
(7, 'Giovanni Salvati', 'giosalvati@gmail.com', 'Napoli', 'salvati'),
(8, 'Giuseppe Bellino', 'gbellino@gmail.com', 'Terzigno', 'bellini'),
(9, 'Mirko_PROLOLGAMER', 'm.aliberti@gmail.com', 'Siano', 'aliberti'),
(10, 'Alex91msn', 'Alex@email.it', 'Pesciola', 'pasword');

--
-- Struttura della tabella `admin`
--
CREATE TABLE admin (
`KEYUTENTE` int(11) NOT NULL,
`ID` varchar(32) DEFAULT NULL,
`EMAIL` varchar(40) DEFAULT NULL,
`PASS` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
–- Dump dei dati per la tabella `admin`
--
INSERT INTO `admin` (`KEYUTENTE`, `ID`, `EMAIL`, `PASS`) VALUES
(1, ‘admin’, ‘admin@admin.com’, ‘admin’);



--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `annuncio`
--
ALTER TABLE `annuncio`
  ADD PRIMARY KEY (`KEYANNUNCIO`),
  ADD KEY `KEYUTENTE` (`KEYUTENTE`);

--
-- Indici per le tabelle `appunti`
--
ALTER TABLE `appunti`
  ADD PRIMARY KEY (`KEYAPPUNTI`),
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
-- Indici per le tabelle `tagperappunti`
--
ALTER TABLE `tagperappunti`
  ADD PRIMARY KEY (`KEYTAG`,`KEYAPPUNTI`),
  ADD KEY `KEYAPPUNTI` (`KEYAPPUNTI`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`KEYUTENTE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`ID`);
  
  -- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`KEYUTENTE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `annuncio`
--
ALTER TABLE `annuncio`
  MODIFY `KEYANNUNCIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la tabella `appunti`
--
ALTER TABLE `corsi`
  MODIFY `KEYAPPUNTI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
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
-- Limiti per la tabella `appunti`
--
ALTER TABLE `corsi`
  ADD CONSTRAINT `appunti_ibfk_1` FOREIGN KEY (`KEYUTENTE`) REFERENCES `utente` (`KEYUTENTE`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limiti per la tabella `tagperannuncio`
--
ALTER TABLE `tagperannuncio`
  ADD CONSTRAINT `tagperannuncio_ibfk_1` FOREIGN KEY (`KEYTAG`) REFERENCES `tag` (`KEYTAG`),
  ADD CONSTRAINT `tagperannuncio_ibfk_2` FOREIGN KEY (`KEYANNUNCIO`) REFERENCES `annuncio` (`KEYANNUNCIO`);

--
-- Limiti per la tabella `tagperappunti`
--
ALTER TABLE `tagperappunti`
  ADD CONSTRAINT `tagperappunti_ibfk_1` FOREIGN KEY (`KEYTAG`) REFERENCES `tag` (`KEYTAG`),
  ADD CONSTRAINT `tagperappunti_ibfk_2` FOREIGN KEY (`KEYAPPUNTI`) REFERENCES `appunti` (`KEYAPPUNTI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

