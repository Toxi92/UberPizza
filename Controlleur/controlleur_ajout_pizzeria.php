<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("../Modele/bdd.pizzeria.php");

include_once("../Modele/User.php");
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
    include_once("../Modele/bdd.pizza.php");
    $pizzas = $QueryPizza->getAllPizzas();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'] ?? null;
        $adresse = $_POST['adresse'] ?? null;
        $ville = $_POST['ville'] ?? null;
        $cp = $_POST['cp'] ?? null;
    
        if ($nom && $adresse && $ville && $cp) {
            $QueryPizzeria->ajoutPizzeria($nom, $adresse, $ville, $cp);
            echo "Pizzeria ajoutée avec succès : $nom, $adresse, $ville, $cp";
            header("Location: ../Vue/index.php"); // Redirige vers la page d'accueil après l'ajout
            exit();
        } else {
            http_response_code(400);
            echo "Erreur : Veuillez remplir tous les champs.";
        }
    }
}
?>