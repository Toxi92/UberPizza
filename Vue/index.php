<?php
include_once("../Modele/User.php");
include_once("../Controlleur/controlleur_index.php");
if(session_status() == PHP_SESSION_NONE) {
    session_start();

}  ?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/style1.css">

    <title>Acceuil</title>

</head>

<header>
    <h1 class="Titre">Bienvenue</h1>
    <?php

    if (isset($_SESSION['user'])) { ?>
        <div class="DivLogin">
                <a class="BouttonLogin" href="./Profil.php"><p>Mon Profil</p></a>
        </div>
    <?php } else { ?>
        <div class="DivLogin">
            <a class="BouttonLogin" href="./Connexion.php"><p>Se connecter / S'inscrire</p></a>
        </div> <?php
    }

    if (isset($_SESSION['user'])) { 
        $user = unserialize($_SESSION['user']); // Désérialiser l'objet utilisateur
        if ($user->isAdmin()==true) { ?>
            <div class="DivAdmin">
                <a class="BouttonAdmin" href="./AjoutPizzeria.php"><p>Ajouter Pizzeria</p></a>
                <a class="BouttonAdmin" href="./AjoutPizza.php"><p>Ajouter Pizza</p></a>
            </div>
            
    <?php
    }
}

?>

</header>

<body>

<div class="PizzeriaContainer">
    <h1 class="PizzeriaTitre">Pizzerias par lesquelles vous pouvez être livrés</h1>
        <div class="PizzeriaListe">
    <?php foreach ($pizzerias as $pizzeria): ?>
        <div class="PizzeriaItem">
        <a href="./PizzeriaDetails.php?id=<?= htmlspecialchars($pizzeria['ID_Pizzeria']) ?>">
                    <img src="<?= htmlspecialchars($pizzeria['CheminPhoto']) ?>" alt="Image de <?= htmlspecialchars($pizzeria['Nom_Pizzeria']) ?>" class="PizzeriaImage">
                </a>
            <div class="PizzeriaDetails">
                <h2 class="PizzeriaNom"><?= htmlspecialchars($pizzeria['Nom_Pizzeria']) ?></h2>
            </div>
            <?php if (isset($_SESSION['user'])){
                    if ($user->isAdmin()==True){ ?>
                        <!-- Formulaire pour supprimer une pizzeria -->
                    <form action="../Controlleur/controlleur_supprimer_pizzeria.php" method="POST" class="PizzeriaDeleteForm">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($pizzeria['ID_Pizzeria']) ?>">
                        <button type="submit" class="PizzeriaDeleteButton">❌</button>
                    </form>
            <?php }; ?>
            <?php }; ?>
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
