<?php



class QueryPizza{
    private $bdd;

    public function __construct(Database $bdd){
        $this->bdd = $bdd;
    }

    public function ajoutPizza($nom, $prix){
            $req = $this->bdd->getConnexion()->prepare("INSERT INTO Pizzas (Nom_Pizza, Prix_Unitaire,Chemin_Photo) VALUES (:nom, :prix, '../Images/iconepizza.png')");
            $req->execute(array(
                'nom' => $nom,
                'prix' => $prix
            ));
        }

    public function getAllPizzas(){
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Pizzas");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function supprimerPizza($id) {
        $req = $this->bdd->getConnexion()->prepare("DELETE FROM Pizzas WHERE ID_Pizza = :id");
        $req->execute(['id' => $id]);
    }
}

include_once("bd.auth.php");
//$bdd = new Database('localhost','emolard_projet','emolard','kbbULD53-!');
$bdd = new Database();
$QueryPizza = new QueryPizza($bdd);
