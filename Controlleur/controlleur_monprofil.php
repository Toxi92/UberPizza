<?php

include_once("../Modele/User.php");
include_once("../Modele/bd.auth.php");
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ./index.php');
    exit;
}
$user = unserialize($_SESSION['user']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);
    if ($input['state'] === "plus") {
        $user->setAdmin(true); // Activer le mode admin
        $query->setAdmin($user->getId());
        
    } else {
        $user->setAdmin(false); // Désactiver le mode admin
        $query->setUser($user->getId());
    }

    // Mettre à jour l'objet utilisateur dans la session
    $_SESSION['user'] = serialize($user);
}

?>