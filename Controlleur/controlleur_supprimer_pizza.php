<?php

include_once("../Modele/bdd.pizza.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        $QueryPizza->supprimerPizza($id);
        header("Location: ../Vue/AjoutPizza.php"); // Redirige après suppression
        exit();
    } else {
        http_response_code(400);
        echo "Erreur : ID de la pizza manquant.";
    }
}
?>