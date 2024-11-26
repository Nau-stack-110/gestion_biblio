<?php
include_once "./db.php";
// $sql = $conn->query(
//     "SELECT emprunts.date_emprunt, emprunts.date_retour_emprunt, livres.titre, abonnes.nom 
//     FROM emprunts, livres, abonnes where emprunts.id_emprunt = livres.code_livre and emprunts.id_emprunt = abonnes.id_abonnes");
    
$sql = $conn->query(
    "SELECT l.titre, a.nom, e.date_retour_emprunt, e.date_emprunt from emprunts e inner join livres l ON e.id_livres = l.code_livre inner join abonnes a ON e.id_abonnes = a.id_abonnes"
);
$sql->execute();

?>