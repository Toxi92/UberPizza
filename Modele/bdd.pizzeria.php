<?php



class QueryPizzeria{
    private $bdd;

    public function __construct(Database $bdd){
        $this->bdd = $bdd;
    }

    public function ajoutPizzeria($nom, $adresse, $ville, $cp){
            $req = $this->bdd->getConnexion()->prepare("INSERT INTO Pizzerias (Nom_Pizzeria, Adresse, Ville, CP,CheminPhoto) VALUES (:nom, :adresse, :ville, :cp, '../Images/iconepizzeria.png')");
            $req->execute(array(
                'nom' => $nom,
                'adresse' => $adresse,
                'ville' => $ville,
                'cp' => $cp
            ));
        }

    public function getAllPizzerias(){
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Pizzerias");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function supprimerPizzeria($id) {
        $req = $this->bdd->getConnexion()->prepare("DELETE FROM Pizzerias WHERE ID_Pizzeria = :id");
        $req->execute(['id' => $id]);
    }
    
    public function getPizzeriaById($id) {
        $req = $this->bdd->getConnexion()->prepare("SELECT * FROM Pizzerias WHERE ID_Pizzeria = :id");
        $req->execute(['id' => $id]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}

include_once("bd.auth.php");
//$bdd = new Database('localhost','emolard_projet','emolard','kbbULD53-!');
$bdd = new Database('mysql-molard.alwaysdata.net','molard_projet_pizza','molard','kbbULD53-!');
$QueryPizzeria = new QueryPizzeria($bdd);