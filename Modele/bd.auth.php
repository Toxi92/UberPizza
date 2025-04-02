<?php

include("bdd.php");
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


    public function login(){

    }
}

$bdd = new Database('localhost','emolard_projet','emolard','kbbULD53-!');
$query = new QueryUser($bdd);
$user = new Utilisateur();