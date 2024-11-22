CREATE DATABASE biblio;

CREATE TABLE
    `biblio`.`livres` (
        `code_livre` INT (11) NOT NULL AUTO_INCREMENT,
        `titre` VARCHAR(200) NOT NULL,
        `auteur` VARCHAR(100) NOT NULL,
        `annéé` DATE NOT NULL,
        `genre` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`code_livre`)
    ) ENGINE = InnoDB;

CREATE TABLE
    `biblio`.`abonnes` (
        `id_abonnes` INT (11) NOT NULL AUTO_INCREMENT,
        `nom` VARCHAR(40) NOT NULL,
        `prenom` VARCHAR(30) NOT NULL,
        `adresse` VARCHAR(70) NOT NULL,
        PRIMARY KEY (`id_abonnes`)
    ) ENGINE = InnoDB;

ALTER TABLE `abonnes` ADD `date_inscrit` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `adresse`;

CREATE TABLE
    `biblio`.`emprunts` (
        `id_emprunt` INT (11) NOT NULL AUTO_INCREMENT,
        `id_abonnes` INT (11) NOT NULL,
        `id_livres` INT (11) NOT NULL,
        `date_emprunt` DATE NOT NULL,
        `date_retour_emprunt` DATE NOT NULL,
        PRIMARY KEY (`id_emprunt`)
    ) ENGINE = InnoDB;

ALTER TABLE `emprunts` ADD FOREIGN KEY (`id_livres`) REFERENCES `emprunts` (`id_emprunt`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `emprunts` ADD FOREIGN KEY (`id_abonnes`) REFERENCES `emprunts` (`id_emprunt`) ON DELETE CASCADE ON UPDATE CASCADE;
