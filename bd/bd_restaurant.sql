SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `bd_restaurant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_restaurant`;

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `nom_reserva` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_reserva` date DEFAULT NULL,
  `inici_reserva` time(6) NOT NULL,
  `data_alliberament_reserva` time(6) DEFAULT NULL,
  `num_taula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `tbl_reserva` (`id_reserva`, `nom_reserva`, `data_reserva`, `inici_reserva`, `data_alliberament_reserva`, `num_taula`) VALUES
(32, 'david', '2021-12-17', '17:00:00.000000', '19:00:00.000000', 0),
(33, 'hbgv', '2021-12-17', '14:00:00.000000', '16:00:00.000000', 0),
(46, 'lau', '2021-12-19', '23:00:00.000000', '01:00:00.000000', 0),
(47, 'Losmorancos', '2021-12-19', '21:00:00.000000', '23:00:00.000000', 0),
(50, 'david', '2021-12-24', '22:00:00.000000', '00:00:00.000000', 0);

CREATE TABLE `tbl_restaurant` (
  `id_rest` int(11) NOT NULL,
  `nom_rest` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_sales_rest` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tbl_restaurant` (`id_rest`, `nom_rest`, `num_sales_rest`) VALUES
(1, 'ivarda', 9);

CREATE TABLE `tbl_sala` (
  `id_sala` int(11) NOT NULL,
  `nom_sala` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tbl_sala` (`id_sala`, `nom_sala`, `img`, `id_rest`) VALUES
(1, 'Menjador Radiohead', '../img/sala1.jfif', 1),
(2, 'Menjador Queen', '../img/sala2.jpg', 1),
(6, 'Sala privada ABBA', '../img/sala3.jpeg', 1),
(7, 'Sala privada Green Day', '../img/sala4.jpg', 1),
(8, 'Sala privada Beatles', '../img/sala5.jfif', 1),
(9, 'Sala privada My Chemical Romance', '../img/sala6.jpg', 1),
(10, 'Terrassa ACDC', '../img/terraza1.jpg', 1),
(11, 'Terrassa Nirvana', '../img/terraza2.jpg', 1),
(12, 'Terrassa Guns n Roses', '../img/terraza3.jpg', 1);

CREATE TABLE `tbl_taula` (
  `num_taula` int(11) NOT NULL,
  `num_llocs_taula` int(2) DEFAULT NULL,
  `id_sala` int(11) DEFAULT NULL,
  `estat_taula` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tbl_taula` (`num_taula`, `num_llocs_taula`, `id_sala`, `estat_taula`) VALUES
(0, 2, 6, 0),
(1, 6, 6, 0),
(2, 10, 7, 0),
(3, 6, 8, 0),
(4, 4, 9, 0),
(5, 6, 1, 0),
(6, 6, 1, 0),
(7, 6, 1, 0),
(8, 6, 2, 0),
(9, 6, 2, 0),
(10, 6, 2, 0),
(11, 4, 10, 0),
(12, 4, 10, 0),
(13, 4, 11, 0),
(14, 4, 11, 0),
(15, 6, 12, 0),
(16, 2, 1, 0),
(17, 6, 12, 0),
(69, 7, 7, 0);

CREATE TABLE `tbl_usuari` (
  `id_usuari` int(11) NOT NULL,
  `nom_usuari` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cognom_usuari` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contra_usuari` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipus_usuari` enum('cambrer','manteniment') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tbl_usuari` (`id_usuari`, `nom_usuari`, `cognom_usuari`, `contra_usuari`, `tipus_usuari`) VALUES
(1, 'David', 'Ortega', '1fa3356b1eb65f144a367ff8560cb406', 'manteniment'),
(2, 'Profesor', 'daw2', '1fa3356b1eb65f144a367ff8560cb406', 'manteniment'),
(3, 'Cambrer', 'daw2', '8af3982673455323883c06fa59d2872a', 'cambrer');

ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_reserva_taula_idx` (`num_taula`);

ALTER TABLE `tbl_restaurant`
  ADD PRIMARY KEY (`id_rest`);


ALTER TABLE `tbl_sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD KEY `fk_sala_restaurant_idx` (`id_rest`);

ALTER TABLE `tbl_taula`
  ADD PRIMARY KEY (`num_taula`),
  ADD KEY `fk_taulsa_sala_idx` (`id_sala`);

ALTER TABLE `tbl_usuari`
  ADD PRIMARY KEY (`id_usuari`),
  ADD UNIQUE KEY `nom_usuari` (`nom_usuari`);

ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

ALTER TABLE `tbl_restaurant`
  MODIFY `id_rest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tbl_sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `tbl_usuari`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `fk_reserva_taula` FOREIGN KEY (`num_taula`) REFERENCES `tbl_taula` (`num_taula`);

ALTER TABLE `tbl_sala`
  ADD CONSTRAINT `fk_sala_restaurant` FOREIGN KEY (`id_rest`) REFERENCES `tbl_restaurant` (`id_rest`);

ALTER TABLE `tbl_taula`
  ADD CONSTRAINT `fk_taula_sala` FOREIGN KEY (`id_sala`) REFERENCES `tbl_sala` (`id_sala`);
COMMIT;
