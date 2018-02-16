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
-- Struttura della tabella `annuncio`
--

CREATE TABLE annuncio (
  KEYANNUNCIO int(11) AUTO_INCREMENT NOT NULL,
  TITOLO varchar(70) NOT NULL,
  DESCRIZIONE varchar(300) DEFAULT NULL,
  CONTATTO varchar(70) DEFAULT NULL,
  DATADICARICAMENTO date NOT NULL,
  KEYUTENTE int(11) DEFAULT NULL,
  PRIMARY KEY (KEYANNUNCIO)
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

CREATE TABLE appunti (
  KEYCORSI int(11) AUTO_INCREMENT NOT NULL,
  NOME varchar(70) NOT NULL,
  CATEGORIA varchar(25) NOT NULL,
  ANNOCORSO varchar(25) DEFAULT NULL,
  DATADICARICAMENTO date NOT NULL,
  KEYUTENTE int(11) DEFAULT NULL,
  PRIMARY KEY (KEYCORSI)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `appunti` (`KEYCORSI`, `NOME`, `CATEGORIA`, `ANNOCORSO`, `DATADICARICAMENTO`, `KEYUTENTE`) VALUES
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



CREATE TABLE utente (
  KEYUTENTE int(11) AUTO_INCREMENT NOT NULL,
  ID varchar(32) DEFAULT NULL,
  EMAIL varchar(40) DEFAULT NULL,
  CITTA varchar(70) DEFAULT NULL,
  PASS varchar(16) DEFAULT NULL,
  PRIMARY KEY (KEYUTENTE)
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


 ENGINE=InnoDB DEFAULT CHARSET=latin1;
