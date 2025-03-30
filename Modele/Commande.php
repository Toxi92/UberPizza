<?php

class Commande {
    private int $idCommande;
    private string $contenueCommande;
    private string $heureLivraisonEstimee;
    private string $adresseLivraison;
    private string $villeLivraison;
    private string $cpLivraison;
    private string $dateCommande;

    public function __construct(int $idCommande, string $contenueCommande, string $heureLivraisonEstimee, string $adresseLivraison, string $villeLivraison, string $cpLivraison, string $dateCommande) {
        $this->idCommande = $idCommande;
        $this->contenueCommande = $contenueCommande;
        $this->heureLivraisonEstimee = $heureLivraisonEstimee;
        $this->adresseLivraison = $adresseLivraison;
        $this->villeLivraison = $villeLivraison;
        $this->cpLivraison = $cpLivraison;
        $this->dateCommande = $dateCommande;
    }
}