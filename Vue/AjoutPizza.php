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

<a class="BouttonAcceuilProfil" href="./index.php"><p>Accueil</p></a>

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

    <div class="PizzaContainer">
    <h1 class="PizzaTitre">Liste des Pizzas</h1>
    <div class="PizzaListe">
        <?php foreach ($pizzas as $pizza): ?>
            <div class="PizzaItem">
                <img src="<?= htmlspecialchars($pizza['Chemin_Photo']) ?>" alt="Image de <?= htmlspecialchars($pizza['Nom_Pizza']) ?>" class="PizzaImage">
                <div class="PizzaDetails">
                    <h2 class="PizzaNom"><?= htmlspecialchars($pizza['Nom_Pizza']) ?></h2>
                    <p class="PizzaPrix"><?= htmlspecialchars($pizza['Prix_Unitaire']) ?> €</p>
                </div>
                <!-- Formulaire pour supprimer une pizza -->
                <form action="../Controlleur/controlleur_supprimer_pizza.php" method="POST" class="PizzaDeleteForm">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($pizza['ID_Pizza']) ?>">
                    <button type="submit" class="PizzaDeleteButton">Supprimer</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
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