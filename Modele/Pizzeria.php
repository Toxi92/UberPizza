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

    public function getIdPizzeria(): int {
        return $this->idPizzeria;
    }

    public function getNomPizzeria(): string {
        return $this->nomPizzeria;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }

    public function getVille(): string {
        return $this->ville;
    }

    public function getCp(): string {
        return $this->cp;
    }

    public function getCheminPhoto(): string {
        return $this->cheminPhoto;
    }
}