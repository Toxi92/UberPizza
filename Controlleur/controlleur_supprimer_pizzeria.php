<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("../Modele/bdd.pizzeria.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        $QueryPizzeria->supprimerPizzeria($id);
        header("Location: ../Vue/index.php"); // Redirige après suppression
        exit();
    } else {
        http_response_code(400);
        echo "Erreur : ID de la pizzeria manquant.";
    }
}
?>