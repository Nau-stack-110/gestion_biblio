<?php
include_once "./db.php";
if(isset($_POST["ok"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $date_inscrit = htmlspecialchars($_POST["date_inscrit"]);

    $sql = $conn->prepare("INSERT INTO abonnes(nom, prenom, adresse, date_inscrit)
    VALUES (?,?,?,?)");
    $io = $sql->execute(array($nom, $prenom, $adresse, $date_inscrit));
    echo "Abonnées created successfully!";
}

?>