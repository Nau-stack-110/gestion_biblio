<?php
include_once "./db.php";
if(isset($_POST["ok"])){
    $id_livres = htmlspecialchars($_POST["id_livres"]);
    $id_abonnes = htmlspecialchars($_POST["id_abonnes"]);
    $date_emprunt = htmlspecialchars($_POST["date_emprunt"]);
    $date_retour_emprunt = htmlspecialchars($_POST["date_retour_emprunt"]);

    $sql = $conn->prepare("INSERT INTO emprunts(id_livres, id_abonnes ,date_emprunt ,date_retour_emprunt )
    VALUES (?,?,?,?)");
    $io = $sql->execute(array($id_livres, $id_abonnes, $date_emprunt, $date_retour_emprunt));
    echo "Emprunts created successfully!";
}

?>