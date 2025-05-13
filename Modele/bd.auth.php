<?php

include_once("bdd.php");
include_once("User.php");

class QueryUser{
    private $bdd;

    public function __construct(Database $bdd){
        $this->bdd = $bdd;
    }
    public function inscription($nom, $prenom, $tel,$username,$password, $adresse, $ville, $cp, $mp,$email){
        $req = $this->bdd->getConnexion()->prepare("INSERT INTO Utilisateurs (Nom, Prénom, Tel,Username , Password, Adresse, Ville, CP, IP , Moyen_Paiement , Admin,email) VALUES (:nom, :prenom, :tel,:username, :Password, :adresse, :ville, :cp,:IP, :mp, 0,:email)");
        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'tel' => $tel,
            'username' => $username,
            'Password' => password_hash($password,PASSWORD_DEFAULT),
            'adresse' => $adresse,
            'ville' => $ville,
            'cp' => $cp,
            'IP' => file_get_contents("https://api64.ipify.org?format=text"),
            'mp' => $mp,
            'email'=>$email
        ));
    }

    public function getUserById($id){
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Utilisateurs WHERE id = :id");
        $req->execute(array(
            'id' => $id
        ));
        $result = $req->fetch();
        return $result;
    }

    public function getUserByEmail($email){
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Utilisateurs WHERE email = :email");
        $req->execute(array(
            'email' => $email
        ));
        $result = $req->fetch();
        if(empty($result)){
            return false;
        }else{
            return $result;
        }
    }

    public function isMailUsed($email){
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Utilisateurs WHERE email = :email");
        $req->execute(array(
            'email' => $email
        ));
        $result = $req->fetch();
        if(empty($result)){
            return false;
        }else{
            return true;
        }
    }
    public function setAdmin($id){
        $req = $this->bdd->getConnexion()->prepare("UPDATE Utilisateurs SET Admin = 1 WHERE id = :id");
        $req->execute(array(
            'id' => $id
        ));
    }
    public function setUser($id){
        $req = $this->bdd->getConnexion()->prepare("UPDATE Utilisateurs SET Admin = 0 WHERE id = :id");
        $req->execute(array(
            'id' => $id
        ));
    }
    public function updateUserField($userId, $field, $value) {
        $allowedFields = ['Nom', 'Prénom', 'Tel', 'Adresse', 'Ville', 'CP', 'email', 'Moyen_Paiement'];
        if (in_array($field, $allowedFields)) {
            $sql = "UPDATE Utilisateurs SET $field = :value WHERE ID = :id";
            $stmt = $this->bdd->getConnexion()->prepare($sql);
            return $stmt->execute([
                'value' => $value,
                'id' => $userId
            ]);
        }
        return false;
    }

}

//$bdd = new Database('localhost','emolard_projet','emolard','kbbULD53-!');
$bdd = new Database();
$query = new QueryUser($bdd);
$user = new Utilisateur();
