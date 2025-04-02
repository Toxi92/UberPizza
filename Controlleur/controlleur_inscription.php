<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("../Modele/bd.auth.php");
    // Récupérer les données envoyées par le JavaScript
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $tel = $_POST['Tel'];
    $adresse = $_POST['Adresse'];
    $ville = $_POST['Ville'];
    $cp = $_POST['CP'];
    $moyenPaiement = $_POST['MP'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($query->isMailUsed($email)) {
        echo "<script>alert('L\'adresse e-mail est déjà utilisée.');</script>";
        exit;
    }
    $query->inscription($nom,$prenom,$tel,$username,$password,$adresse,$ville,$cp,$moyenPaiement,$email);
    header('Location: ../Vue/Connexion.php');
    echo alert("Inscription réussie ! Vous pouvez maintenant vous connecter.");
};
?>
