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

    if (isset($input['field']) && isset($input['value'])) {
        $field = $input['field'];
        $value = $input['value'];

        // Mettre à jour la propriété correspondante de l'utilisateur
        switch ($field) {
            case 'Nom':
                $user->setNom($value);
                break;
            case 'Prénom':
                $user->setPrenom($value);
                break;
            case 'Tel':
                $user->setTel($value);
                break;
            case 'Adresse':
                $user->setAdresse($value);
                break;
            case 'Ville':
                $user->setVille($value);
                break;
            case 'cCP':
                $user->setCp($value);
                break;
            case 'email':
                $user->setEmail($value);
                break;
            case 'Moyen_Paiement':
                $user->setMoyenPaiement($value);
                break;
            default:
                http_response_code(400);
                echo json_encode(["success" => false, "message" => "Champ invalide."]);
                exit;
        }
        $query->updateUserField($user->getId(), $field, $value);
    }

    // Mettre à jour l'objet utilisateur dans la session
    $_SESSION['user'] = serialize($user);
}

?>