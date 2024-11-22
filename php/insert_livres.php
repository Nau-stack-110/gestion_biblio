<?php
include_once "./db.php";
if(isset($_POST["ok"])){
    $titre = htmlspecialchars($_POST["titre"]);
    $auteur = htmlspecialchars($_POST["auteur"]);
    $annéé = htmlspecialchars($_POST["annéé"]);
    $genre = htmlspecialchars($_POST["genre"]);

    $sql = $conn->prepare("INSERT INTO livres(titre, auteur, annéé, genre)
    VALUES (?,?,?,?)");
    $io = $sql->execute(array($titre, $auteur, $annéé, $genre));
    echo "Livres created successfully!";
}

?>