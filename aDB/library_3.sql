-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2022 alle 16:56
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dataInz` date DEFAULT current_timestamp(),
  `dataFin` date DEFAULT (current_timestamp() + interval 4 day)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `booking`
--

INSERT INTO `booking` (`id`, `id_book`, `email`, `dataInz`, `dataFin`) VALUES
(1, 30, 'h.pickering90@gmail.com', '2022-04-28', '2022-04-30');

-- --------------------------------------------------------

--
-- Struttura della tabella `books`
--

CREATE TABLE `books` (
  `idbook` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `gnre` varchar(255) NOT NULL,
  `publishinghouse` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'available',
  `description` varchar(500) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `internal` varchar(10) DEFAULT NULL,
  `edition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `books`
--

INSERT INTO `books` (`idbook`, `title`, `author`, `gnre`, `publishinghouse`, `status`, `description`, `isbn`, `date`, `internal`, `edition`) VALUES
(23, 'Il Mattino', 'Ungaretti', 'Biografia e Autobiografia', 'Ungaretti', 'available', 'lololo', '1235', '2009-12-12', '1234', 'standard'),
(24, 'Guerra e pace', 'Lev Nikolaevic Tolstoj', 'Historical Novel', ' Einaudi', 'available', '«\'Guerra\' è il mondo storico, \'pace\' il mondo umano. Il mondo umano interessa ed attrae particolarmente Tolstoj soprattutto perché egli è convinto che ogni uomo - di ieri, di oggi, di domani - valga un altro uomo...» (Leone Ginzburg). La più autentica epo', '1234', '2019-08-06', '1235', 'standard'),
(25, 'Il processo', 'Franz Kafka', 'Historical Novel', 'Mondadori', 'available', 'Nessuno riuscirà mai a spiegare a Josef K. il motivo del processo che un\'autorità giudiziaria incalzante ed enigmatica gli ha intentato. Nemmeno prima del tragico epilogo, quando il protagonista verrà giustiziato. Pubblicato nel 1925, Il Processo è uno de', '1235', '0000-00-00', '1236', 'standard'),
(26, 'Moby Dick.', 'Herman Melville', 'Young Adult', 'Mondadori', 'available', 'Questo libro è come il mare, ogni onda diversa dalle altre. Alcune saranno divertenti. Esaltanti. E quando ne arriveranno di più tristi, o crudeli, avrete l\'amore di Ismaele a proteggervi come uno scudo. \"Moby Dick\" è pieno di frasi da leggere a voce alta, che poi ritornano alla memoria nei momenti più impensati e potrebbero restarvi addosso come conchiglie sulla roccia. E un libro che vi cambierà dentro, per sempre. Presentazione di Davide Morosinotto. Età di lettura: da 12 anni.', '1236', '2019-05-14', '1237', 'special'),
(27, 'Delitto e castigo', 'Fedor Michajlovic Dostoevskij', 'Romance', 'Einaudi', 'available', 'Raskol\'nikov è un giovane che è stato espulso dall\'università e che uccide una vecchia usuraia per un\'idea, per affermare la propria libertà e per dimostrare di essere superiore agli uomini comuni e alla loro morale. Una volta compiuto l\'omicidio, però, scopre di essere governato non dalla logica, ma dal caso, dalla malattia, dall\'irrazionale che affiora nei sogni e negli impulsi autodistruttivi. Si lancia cosi in allucinati vagabondaggi, percorrendo una Pietroburgo afosa e opprimente, una città', '1236', '2014-03-06', '1238', 'standard'),
(28, 'Delitto e castigo', 'Fedor Michajlovic Dostoevskij', 'Romance', 'Einaudi', 'available', 'Raskol\'nikov è un giovane che è stato espulso dall\'università e che uccide una vecchia usuraia per un\'idea, per affermare la propria libertà e per dimostrare di essere superiore agli uomini comuni e alla loro morale. Una volta compiuto l\'omicidio, però, scopre di essere governato non dalla logica, ma dal caso, dalla malattia, dall\'irrazionale che affiora nei sogni e negli impulsi autodistruttivi. Si lancia cosi in allucinati vagabondaggi, percorrendo una Pietroburgo afosa e opprimente, una città', '1236', '2014-03-06', '1239', 'standard'),
(29, 'Il Profumo', 'Patrick Suskind', 'Giallo', 'Tea', 'available', 'Nel diciottesimo secolo visse in Francia un uomo, tra le figure più geniali e scellerate di quell\'epoca non povera di geniali e scellerate figure. Si chiamava Jean-Baptiste Grenouille e se il suo nome, contrariamente al nome di altri mostri geniali quali de Sade, Saint-Just, Fouché, Bonaparte, oggi è caduto nell\'oblio, non è certo perché Grenouille stesse indietro a questi più noti figli delle tenebre per spavalderia, disprezzo degli altri e immoralità, bensì perché il suo genio e unica ambizion', '1236', '2017-05-25', '1240', 'standard'),
(30, 'Il guardiano degli innocenti', 'Andrzej Sapkowski', 'Fantasy', 'Tea', 'booking', 'Il guardiano degli innocenti è una raccolta di racconti dello scrittore polacco Andrzej Sapkowski. La prima edizione polacca è stata pubblicata nel 1993, quella inglese nel 2007 e quella italiana nel 2010.', '1236', '2017-05-25', '1241', 'standard'),
(31, 'Il guardiano degli innocenti', 'Andrzej Sapkowski', 'Fantasy', 'Tea', 'available', 'Il guardiano degli innocenti è una raccolta di racconti dello scrittore polacco Andrzej Sapkowski. La prima edizione polacca è stata pubblicata nel 1993, quella inglese nel 2007 e quella italiana nel 2010.', '1236', '2017-05-25', '1242', 'standard'),
(32, 'Il guardiano degli innocenti', 'Andrzej Sapkowski', 'Fantasy', 'Tea', 'available', 'Il guardiano degli innocenti è una raccolta di racconti dello scrittore polacco Andrzej Sapkowski. La prima edizione polacca è stata pubblicata nel 1993, quella inglese nel 2007 e quella italiana nel 2010.', '1236', '2017-05-25', '1243', 'standard'),
(33, 'Fahrenheit 451', ' Ray Bradbury', 'Fantascienza', 'Tea', 'available', 'Ambientato in un imprecisato futuro posteriore al 2022, vi si descrive una società distopica in cui leggere o possedere libri è considerato un reato, per contrastare il quale è stato istituito un apposito corpo di vigili del fuoco impegnato a bruciare ogni tipo di volume.', '1236', '1953-10-19', '1244', 'standard'),
(34, 'La casa senza ricordi', 'Donato Carrisi', 'Thriller', 'Mondadori', 'available', 'Un bambino senza memoria viene ritrovato in un bosco della Valle dell\'Inferno, quando tutti ormai avevano perso le speranze. Nico ha dodici anni e sembra stare bene: qualcuno l\'ha nutrito, l\'ha vestito, si è preso cura di lui. Ma è impossibile capire chi sia stato, perché Nico non parla. La sua coscienza è una casa buia e in apparenza inviolabile. L\'unico in grado di risvegliarlo è l\'addormentatore di bambini. ', '1236', '2021-01-01', '1245', 'Special');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `cf` varchar(16) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`email`, `pass`, `name`, `surname`, `birthdate`, `cf`, `admin`) VALUES
('h.pickering90@gmail.com', 'cisco12!0', 'Salvatore', 'Parmendola', '2022-03-09', NULL, 0),
('wor.ciko@gmail.com', 'susu12!0', 'Osvaldo', 'Remiz', '2022-03-17', NULL, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `withdrawn`
--

CREATE TABLE `withdrawn` (
  `id_Withdrawn` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `DataInz` date DEFAULT curdate(),
  `DataFin` date DEFAULT (curdate() + interval 1 month)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `email` (`email`);

--
-- Indici per le tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idbook`),
  ADD UNIQUE KEY `internal` (`internal`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `withdrawn`
--
ALTER TABLE `withdrawn`
  ADD PRIMARY KEY (`id_Withdrawn`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `books`
--
ALTER TABLE `books`
  MODIFY `idbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT per la tabella `withdrawn`
--
ALTER TABLE `withdrawn`
  MODIFY `id_Withdrawn` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`idbook`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Limiti per la tabella `withdrawn`
--
ALTER TABLE `withdrawn`
  ADD CONSTRAINT `withdrawn_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`idbook`),
  ADD CONSTRAINT `withdrawn_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
