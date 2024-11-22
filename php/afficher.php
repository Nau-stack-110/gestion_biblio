<?php
include_once "./db.php";
$sql = $conn->query("SELECT emprunts.date_emprunt, emprunts.date_retour_emprunt, livres.titre, abonnes.nom FROM emprunts,livres, abonnes where emprunts.id_emprunt = livres.code_livre and emprunts.id_emprunt = abonnes.id_abonnes");
    
$sql->execute();


?>