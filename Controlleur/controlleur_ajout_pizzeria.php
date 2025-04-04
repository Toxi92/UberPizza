<?php

include("../Modele/User.php");
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
?>