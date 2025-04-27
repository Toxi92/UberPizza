<?php
include_once("../Controlleur/controlleur_details_pizzeria.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style1.css">
    <title>Détails de la Pizzeria</title>
</head>

<header>
    <h1 class="Titre">Ajouter une Pizzeria</h1>
    <div class="DivAcceuil">
        <a class="BouttonAcceuil" href="./index.php"><p>Accueil</p></a>
    </div>
</header>

<body>
    <div class="PizzeriaDetailsContainer">
    <h1 class="PizzeriaTitre">
        <?= htmlspecialchars($pizzeria['Nom_Pizzeria']) ?>
        <button class="CommanderButton">Commander</button>
    </h1>
        <img src="<?= htmlspecialchars($pizzeria['CheminPhoto']) ?>" alt="Image de <?= htmlspecialchars($pizzeria['Nom_Pizzeria']) ?>" class="PizzeriaImageLarge">
        <p class="PizzeriaAdresse">Adresse : <?= htmlspecialchars($pizzeria['Adresse']) ?></p>
        <p class="PizzeriaVille">Ville : <?= htmlspecialchars($pizzeria['Ville']) ?></p>
        <p class="PizzeriaCodePostal">Code Postal : <?= htmlspecialchars($pizzeria['CP']) ?></p>
    </div>

    <div class="PizzaListContainer">
        <h2 class="PizzaListTitle">Liste des Pizzas Proposées</h2>
        <div class="PizzaList">
            <div class="PizzaItem">
                <p class="PizzaMessage">Le lien entre les pizzerias et les pizzas n'est pas encore fait.</p>
            </div>
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