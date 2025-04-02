<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("../Controlleur/controlleur_monprofil.php");
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/style1.css">

<title>Profile</title>

</head>

<body>
    <div>
        <h1 class="Titre">Mon Profil</h1>
        <h2 class="TitreSection">Informations Personnelles</h2>
        <div class="DivProfil">
            <p>Nom : <?php echo $user->getNom(); ?></p>
            <p>Prénom : <?php echo $user->getPrenom(); ?></p>
            <p>Téléphone : <?php echo $user->getTel(); ?></p>
            <p>Adresse : <?php echo $user->getAdresse(); ?></p>
            <p>Ville : <?php echo $user->getVille(); ?></p>
            <p>Code Postal : <?php echo $user->getCp(); ?></p>
            <p>Email : <?php echo $user->getEmail(); ?></p>
            <p>IP : <?php echo $user->getIp(); ?></p>
            <p>Moyen de Paiement : <?php echo $user->getMoyenPaiement(); ?></p>
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