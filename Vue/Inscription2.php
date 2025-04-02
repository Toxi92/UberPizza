<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    
<meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/style1.css">
    
    <title>Inscription</title>

</head>

<header>
    <div class="DivAcceuil">
        <a class="BouttonAcceuil" href="./index.php"><p>Accueil</p></a>
    </div>
</header>

<body>
    <div class="DivConnexion">
        <form action="Inscription2.php" method="POST" id="formulaire_inscription2">
            <label for="text">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
            <label for="text">Prénom</label>
            <input type="text" id="Prenom" name="Prenom" required>
            <label for="text">Téléphone</label>
            <input type="text" id="Tel" name="Tel" required>
            <label for="text">Adresse</label>
            <input type="text" id="Adresse" name="Adresse" required>
            <label for="text">Ville</label>
            <input type="text" id="Ville" name="Ville" required>
            <label for="text">Code Postal</label>
            <input type="text" id="CP" name="CP" required>
            <label for="text">Moyen de paiement</label>
            <input type="text" id="MP" name="MP" required>
            <input type="hidden" id="username" name="username">
            <input type="hidden" id="email" name="email">
            <input type="hidden" id="password" name="password">
            <input type="submit" value="S'inscrire">
            <a class="BouttonInscription" href="./Connexion.php"><p>Vous avez déjà un compte ?</p></a>
            <script src="../Script/FillInscri2Hidden.js"></script>
            <?php
            require_once("../Controlleur/controlleur_inscription.php");
            ?>
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