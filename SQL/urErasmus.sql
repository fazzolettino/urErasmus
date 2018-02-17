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
  ANNOCORSO varchar(100) DEFAULT NULL,
  DATADICARICAMENTO date NOT NULL,
  KEYUTENTE int(11) DEFAULT NULL,
  PRIMARY KEY (KEYCORSI)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `appunti` (`KEYCORSI`, `NOME`, `CATEGORIA`, `ANNOCORSO`, `DATADICARICAMENTO`, `KEYUTENTE`) VALUES
(1, 'PartyErasmus', 'Fun Events', 'Primo anno, primo semestre', '2018-02-22', 1),
(2, 'MartediUnisa', 'University Events', 'Secondo anno, secondo semestre', '2018-03-07', 1),
(3, 'BailaRaeggeton', 'Fun Events', 'Primo anno, secondo semestre', '2018-03-16', 2),
(4, 'CoverBandJovanotti', 'Informatica', 'Primo anno, secondo semestre', '2018-03-28', 2),
(7, 'UniBeat', 'Fun Events', 'Secondo anno, primo semestre', '2018-04-4', 3);

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
(2, 'Javier Pastore', 'jpastore@hotmail.com', 'Lisbona', 'jpastore'),
(3, 'Frank Lampard', 'flampard@gmail.com', 'Londra', 'flampard'),
(4, 'Miroslav Klose', 'mklose@live.de', 'Norimberga', 'miroklose'),
(5, 'Severino Ammirat', 's.ammirati@gmail.com', 'Striano', 'ammirati'),
(6, 'Giovanni Salvati', 'giosalvati@gmail.com', 'Napoli', 'salvati'),
(7, 'Giuseppe Bellino', 'gbellino@gmail.com', 'Terzigno', 'bellini'),
(8, 'Mirko_PROLOLGAMER', 'm.aliberti@gmail.com', 'Siano', 'aliberti'),
(9, 'Alex91msn', 'Alex@email.it', 'Pesciola', 'pasword');


 ENGINE=InnoDB DEFAULT CHARSET=latin1;
