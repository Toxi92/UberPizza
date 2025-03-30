<?php
class Employe {
    private int $idPizzaiolo;
    private string $nom;
    private string $prenom;
    private string $dateEmbauche;
    private string $salaire;

    public function __construct(int $idPizzaiolo, string $nom, string $prenom, string $dateEmbauche, string $salaire) {
        $this->idPizzaiolo = $idPizzaiolo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }
}