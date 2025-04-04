<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("../Controlleur/controlleur_ajout_pizzeria.php");
  ?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../styles/style1.css">
    
    <title>Ajout Pizzeria</title>

</head>

<body>
    <div class="AjoutPizzeriaContainer">
        <h1 class="AjoutPizzeriaTitre">Ajouter une Pizzeria</h1>
        <form action="../Controlleur/controlleur_ajout_pizzeria.php" method="POST" class="AjoutPizzeriaForm">
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizzeria-nom">Nom de la Pizzeria :</label>
                <input type="text" id="pizzeria-nom" name="nom" required>
            </div>
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizzeria-adresse">Adresse :</label>
                <input type="text" id="pizzeria-adresse" name="adresse" required>
            </div>
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizzeria-ville">Ville :</label>
                <input type="text" id="pizzeria-ville" name="ville" required>
            </div>
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizzeria-cp">Code Postal :</label>
                <input type="text" id="pizzeria-cp" name="cp" required pattern="\d{5}" title="Veuillez entrer un code postal valide (5 chiffres)">
            </div>
            <button type="submit" class="AjoutPizzeriaSubmitButton">Ajouter</button>
        </form>
    </div>
</body>

</html>