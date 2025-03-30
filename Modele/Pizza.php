<?php
class Pizza {
    private int $idPizza;
    private string $nomPizza;
    private float $prixUnitaire;
    private string $cheminPhoto;

    public function __construct(int $idPizza, string $nomPizza, float $prixUnitaire, string $cheminPhoto) {
        $this->idPizza = $idPizza;
        $this->nomPizza = $nomPizza;
        $this->prixUnitaire = $prixUnitaire;
        $this->cheminPhoto = $cheminPhoto;
    }
}