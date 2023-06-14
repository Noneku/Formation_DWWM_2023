<?php

class Compte
{
    //Declaration
    private static $counter = 0;
    //Injection de la class Client dans Compte
    private Client $client; 

    private int $numéroCompte;
    private float $solde;


    public function __construct(int $solde ,string $CIN , string $nom , string $prenom , string $tel) {

        $this-> client =new Client($CIN , $nom , $prenom , $tel);//Composition avec Client, dépendance forte 

        $this->numéroCompte = self::$counter++; //compteur pour le nombre de compte

        $this->solde = $solde;
       
    }




function crediter(float $somme): void{
    $this->solde += $somme;
    echo "****************************************************\n";
    echo "Opération effectuée : compte créditer de $somme euros\n";

}





public function crediterCpt(float $somme, $compteADébiter): void {
  
        $compteADébiter->solde -= $somme;
        $this->solde += $somme;
        echo "****************************************************\n";
        echo "Opération effectuée crediterCpt .\n";
   
}



function debiter($somme): void{
    $this->solde -= $somme;
    echo "****************************************************\n";
    echo "Opération effectuée : compte débiter de $somme euros\n";
}




public function debiterCpt(float $somme, $compteACréditer): void {
  
        $compteACréditer->solde += $somme;
        $this->solde -= $somme;
        echo "****************************************************\n";
        echo "Opération effectuée débiterCpt.\n";
   
}


//Affichage des attributs class Compte et les attributs liés à la dépendance avec class Client
public function afficherResume() {
    echo "\nRésumé du compte :\n";
    echo "Numéro de compte : " . $this->numéroCompte . "\n";
    echo "Solde : " . $this->solde . "\n";
    echo "Informations du client :\n";
    echo "CIN : " . $this->client->getCIN() . "\n";
    echo "Nom : " . $this->client->getNom() . "\n";
    echo "Prénom : " . $this->client->getPrenom() . "\n";
    echo "Tél : " . $this->client->getTel() . "\n";
}



  public static function afficherNombreComptes() {
    echo "****************************************************\n";
        echo "Nombre de comptes créés : " . self::$counter . "\n";
}


    /**
     * Get the value of numéroCompte
     */ 
    public function getNuméroCompte(): int
    {
        return $this->numéroCompte;
    }

    /**
     * Set the value of numéroCompte
     *
     * @return  self
     */ 
    public function setNuméroCompte($numéroCompte)
    {
        $this->numéroCompte = $numéroCompte;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getclient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setclient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
}
?>