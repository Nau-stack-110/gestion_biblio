<?php
require_once("./php/db.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href=""
    rel="stylesheet" />
  <title>Gestion Bibliothèque</title>
  <style>
    table{
      width: 100%;
    }
    td, tr{
     padding: 20px; 
    }
  </style>
</head>

<body>
<h2>Formulaire pour les livres </h2>
  <form action="./php/insert_livres.php" method="post">
    <label for="titre">titre</label>
    <input type="text" name="titre">
    <label for="auteur">auteur</label>
    <input type="text" name="auteur">
    <label for="annéé">annéé</label>
    <input type="date" name="annéé">
    <label for="genre">genre</label>
    <input type="text" name="genre">
    <button type="submit" name="ok"> envoyer</button>
    <br><br><br>
  </form>
  
  <h2>Formulaire pour les abonnées </h2>
  <form action="./php/insert_abonnes.php" method="post">
    <label for="nom">nom</label>
    <input type="text" name="nom">
    <label for="prenom">prenom</label>
    <input type="text" name="prenom">
    <label for="adresse">adresse</label>
    <input type="text" name="adresse">
    <label for="date_inscrit">date_inscrit</label>
    <input type="date" name="date_inscrit">
    <button type="submit" name="ok"> envoyer</button>
  </form>
  <br><br><br>

  <h2>Formulaire pour l'emprunt </h2>
  <form action="./php/insert_emprunt.php" method="post">
    <label for="id_livres">id_livres</label>
    <input type="number" name="id_livres">

    <label for="id_abonnes">id_abonnes</label>
    <input type="number" name="id_abonnes">

    <label for="date_emprunt">date_emprunt</label>
    <input type="date" name="date_emprunt">

    <label for="date_retour_emprunt">date_retour</label>
    <input type="date" name="date_retour_emprunt">

    <button type="submit" name="ok"> envoyer</button>
  </form>
  <br><br>

  <table border="1" align="center">
    <tr>
      <td>livres</td>
      <td>abonnées</td>
      <td>date_emprunt</td>
      <td>date_retour</td>
    </tr>
    <?php
    include_once "./php/afficher.php";
    while ($io = $sql->fetch()){ 
    ?>
          <tr>
            <td><?= $io['titre'] ?></td>
            <td><?= $io['nom'] ?></td>
            <td><?= $io['date_emprunt'] ?></td>
            <td><?= $io['date_retour_emprunt'] ?></td>
            </tr>
        <?php  
    }
    ?>
  </table>

</body>

</html>