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
    private bool $admin;

    public function login(int $id, string $nom, string $prenom, string $tel, string $username, string $password, string $adresse, string $ville, string $cp, string $moyenPaiement, bool $admin) {
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
        $this->admin = $admin;
        $this->ip = file_get_contents("https://api64.ipify.org?format=text");
    }

}