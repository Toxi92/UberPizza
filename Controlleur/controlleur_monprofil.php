<?php

include_once("../Modele/User.php");
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ./index.php');
    exit;
}
$user = unserialize($_SESSION['user']);

?>