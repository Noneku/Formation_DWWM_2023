<?php

// Définition de la classe compte
class compte{
    // Définition des attributs
    private client $client;
    private float $solde;
    private int $id;

    public static $nombreCpt = 0;

    // Fonction construct
    public function __construct($cni, $nom, $prenom, $tel, $solde, $id)
    {
        $this->client = new client ($cni, $nom, $prenom, $tel);
        $this->solde = $solde;
        $this->id = $id;
    }

    // Définition des méthodes d'accès aux différents attributs à l'aide des propriétés
    public function getClient(){
        return $this->client;
    }
    public function setClient($client){
        $this->client = $client;
        return $this->client;
    }

    public function getSolde(){
        return $this->solde;
    }
    public function setSolde($solde){
        $this->solde = $solde;
        return $this->solde;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this->id;
    }

    public function crediter($somme) {
        $this->solde += $somme;
        return $this->solde;
    }

    public function debiter($somme) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            echo "Solde insuffisant.\n";
        }
        return $this->solde;
    }

    public function crediterCpt($somme, $compteCible) {
        $this->solde += $somme;
        $compteCible->debiter($somme);
        return $this->solde;
    }
    

    public function debiterCpt($somme, $compteCible) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
            $compteCible->crediter($somme);
        } else {
            echo "Solde insuffisant.\n";
        }
        return $this->solde;
    }
    
    public static function getNombreCpt(){
        return self::$nombreCpt;
    } 
    public static function setNombreCpt(int $nombreCpt){
        self::$nombreCpt = $nombreCpt;
        $id = $nombreCpt;
        return self::$id;
    }

    public function afficherRésumé() {
        echo "**\n";
        echo "Numéro de compte : " . $this->id . "\n";
        echo "Solde : " . $this->solde . "\n";
        echo "CNI : " . $this->client->getCni() . "\n";
        echo "NOM : " . $this->client->getNom(). "\n";
        echo "PRENOM : " . $this->client->getPrenom(). "\n";
        echo "Numéro de téléphone : " . $this->client->getTel(). "\n";
    }
}
?>


