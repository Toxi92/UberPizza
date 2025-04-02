<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("../Modele/bd.auth.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($query->getUserByEmail($email)!=false && password_verify($password, $query->getUserByEmail($email)['Password'])) {
        $_SESSION['id'] = $query->getUserByEmail($email)['ID'];
        header('Location: ../Vue/index.php');
        exit;
    } elseif ($query->getUserByEmail($email)==false) {
        echo "<script>alert('L\'adresse e-mail n\'existe pas.');</script>";
    } else {
        echo "<script>alert('Identifiants incorrects.');</script>";
    }
}
?>