<?php
include_once("../Modele/bdd.pizza.php");
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

    $pizzas = $QueryPizza->getAllPizzas();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'] ?? null;
        $adresse = $_POST['adresse'] ?? null;
        $ville = $_POST['ville'] ?? null;
        $cp = $_POST['cp'] ?? null;
        $pizzas = $_POST['pizzas'] ?? []; // Récupérer les IDs des pizzas sélectionnées
    
        if ($nom && $adresse && $ville && $cp && !empty($pizzas)) {
            // Ajoutez ici la logique pour insérer la pizzeria dans la base de données
            // Exemple : $QueryPizzeria->ajouterPizzeria($nom, $adresse, $ville, $cp, $pizzas);
            header("Location: ../Vue/index.php"); // Redirige vers la page d'accueil après l'ajout
            exit();
        } else {
            http_response_code(400);
            echo "Erreur : Veuillez remplir tous les champs.";
        }
    }
}
?>