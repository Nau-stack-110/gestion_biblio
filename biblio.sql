-- créer le database nommé biblio
CREATE DATABASE biblio;

CREATE TABLE IF NOT EXISTS
    `biblio`.`livres` (
        `code_livre` INT (11) NOT NULL AUTO_INCREMENT,
        `titre` VARCHAR(200) NOT NULL,
        `auteur` VARCHAR(100) NOT NULL,
        `annéé` DATE NOT NULL CHECK (annéé >= '2008-01-01'),
        `genre` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`code_livre`)
    ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS
    `biblio`.`abonnes` (
        `id_abonnes` INT (11) NOT NULL AUTO_INCREMENT,
        `nom` VARCHAR(40) NOT NULL,
        `prenom` VARCHAR(30) NOT NULL,
        `adresse` VARCHAR(70) NOT NULL,
        PRIMARY KEY (`id_abonnes`)
    ) ENGINE = InnoDB;

ALTER TABLE `abonnes` ADD `date_inscrit` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `adresse`;

CREATE TABLE IF NOT EXISTS
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


-- requete pour afficher le titre de la livre, nom de l'abonnée, date_emprunt et date_retour du livre
"""
SELECT l.titre, a.nom, e.date_retour_emprunt, e.date_emprunt from emprunts e
inner join livres l ON e.id_livres = l.code_livre
inner join abonnes a ON e.id_abonnes = a.id_abonnes
"""

