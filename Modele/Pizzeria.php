<?php
class Pizzeria {
    private int $idPizzeria;
    private string $nomPizzeria;
    private string $adresse;
    private string $ville;
    private string $cp;
    private string $cheminPhoto;

    public function __construct(int $idPizzeria, string $nomPizzeria, string $adresse, string $ville, string $cp, string $cheminPhoto) {
        $this->idPizzeria = $idPizzeria;
        $this->nomPizzeria = $nomPizzeria;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->cheminPhoto = $cheminPhoto;
    }
}