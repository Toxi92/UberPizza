<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("../Controlleur/controlleur_ajout_pizza.php");
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
        <h1 class="AjoutPizzeriaTitre">Ajouter une Pizza</h1>
        <form action="../Controlleur/controlleur_ajout_pizza.php" method="POST" class="AjoutPizzeriaForm">
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizza-nom">Nom de la Pizza :</label>
                <input type="text" id="pizza-nom" name="nom" required>
            </div>
            <div class="AjoutPizzeriaFormGroup">
                <label for="pizza-prix">Prix Unitaire (€) :</label>
                <input type="number" id="pizza-prix" name="prix" required step="0.01" min="0" title="Veuillez entrer un prix valide">
            </div>
            <button type="submit" class="AjoutPizzeriaSubmitButton">Ajouter</button>
            <script src="../Script/AjoutPizza.js"></script>
        </form>
    </div>
</body>

</html>