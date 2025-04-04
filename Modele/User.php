<?php

require_once "bd.auth.php";
class Utilisateur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $tel;
    private string $username;
    private string $password;
    private string $adresse;
    private string $ville;
    private string $cp;
    private string $ip;
    private string $moyenPaiement;
    private string $email;
    private bool $admin;

    public function __construct(){
        $this->id = 0;
        $this->nom = "";
        $this->prenom = "";
        $this->tel = "";
        $this->username = "";
        $this->password = "";
        $this->adresse = "";
        $this->ville = "";
        $this->cp = "";
        $this->ip = "";
        $this->moyenPaiement = "";
        $this->email = "";
        $this->admin = false;
    }

    public function login(int $id, string $nom, string $prenom, string $tel, string $username, string $password, string $adresse, string $ville, string $cp, string $moyenPaiement,string $email, bool $admin) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->username = $username;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->moyenPaiement = $moyenPaiement;
        $this->email = $email;
        $this->admin = $admin;
        $this->ip = file_get_contents("https://api64.ipify.org?format=text");
    }

    public function getId(){
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getVille(){
        return $this->ville;
    }

    public function getCp() {
        return $this->cp;
    }
    public function getIp(){
        return $this->ip;
    }

    public function getMoyenPaiement() {
        return $this->moyenPaiement;
    }

    public function isAdmin(){
        return (bool) $this->admin;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAdmin(bool $admin) {
        $this->admin = $admin;
    }


    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    public function setTel(string $tel) {
        $this->tel = $tel;
    }
    public function setUsername(string $username) {
        $this->username = $username;
    }
    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }
    public function setVille(string $ville) {
        $this->ville = $ville;
    }
    public function setCp(string $cp) {
        $this->cp = $cp;
    }
    public function setMoyenPaiment(string $moyenPaiement) {
        $this->moyenPaiement = $moyenPaiement;
    }

}