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

<header>
    <h1 class="Titre">Ajouter une Pizzeria</h1>
    <div class="DivAcceuil">
        <a class="BouttonAcceuil" href="./index.php"><p>Accueil</p></a>
    </div>
</header>

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
        <div class="AjoutPizzeriaFormGroup">
            <label for="pizzeria-pizzas">Sélectionnez des Pizzas :</label>
            <select id="pizzeria-pizzas" name="pizzas[]" multiple required>
                <?php foreach ($pizzas as $pizza): ?>
                    <option value="<?= htmlspecialchars($pizza['ID_Pizza']) ?>">
                        <?= htmlspecialchars($pizza['Nom_Pizza']) ?> - <?= htmlspecialchars($pizza['Prix_Unitaire']) ?> €
                    </option>
                <?php endforeach; ?>
            </select>
            <small>Maintenez la touche Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs pizzas.</small>
        </div>
        <button type="submit" class="AjoutPizzeriaSubmitButton">Ajouter</button>
    </form>
</div>
</body>

<footer>
    <div class="banderole_bas">
                <a class="ligne_banderole_bas" href="./mentions_legale.html"><p>Mentions Légales</p></a>
                <a class="ligne_banderole_bas" href="./get_partenaires_by_bdd.php"><p>Sites partenaires</p></a>
                <a class="ligne_banderole_bas" href="https://www.youtube.com/watch?v=G3e-cpL7ofc&pp=ygUGI3dlcHVp"><p>Arrêter d'être nul en HTML/CSS ( à regarder )</p></a>
                <a class="ligne_banderole_bas" href="/rien.html"><p>Plus trop d'idées</p></a>
            </div>
</footer>

</html>