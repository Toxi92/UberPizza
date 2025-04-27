<?php
include_once("../Modele/bdd.pizzeria.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Récupérer l'ID de la pizzeria depuis l'URL
$id = $_GET['id'] ?? null;

if ($id) {
    // Récupérer les informations de la pizzeria
    $pizzeria = $QueryPizzeria->getPizzeriaById($id);
    if (!$pizzeria) {
        echo "Pizzeria introuvable.";
        exit();
    }
} else {
    echo "ID de la pizzeria manquant.";
    exit();
}
?>