<?php

include_once("../Modele/bdd.pizza.php");
include_once("../Modele/User.php");
include_once("../Modele/bdd.pizza.php");
if(session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: ./index.php");
        exit();
    }else {
        $user = unserialize($_SESSION['user']); // Désérialiser l'objet utilisateur
        if ($user->isAdmin() == false) {
            header("Location: ./index.php");
            exit();
        }
    }

}

$pizzas = $QueryPizza->getAllPizzas();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = $_POST['nom'] ?? null;
    $prix = $_POST['prix'] ?? null;

    if ($nom && $prix) {
        
        $QueryPizza->ajoutPizza($nom,$prix);

        echo "Pizza ajoutée avec succès : $nom à $prix €";
    } else {
        http_response_code(400);
        echo "Erreur : données invalides.";
    }
}
?>