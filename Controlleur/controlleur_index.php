<?php

include_once("../Modele/bdd.pizzeria.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Récupérer toutes les pizzerias
$pizzerias = $QueryPizzeria->getAllPizzerias();
?>
