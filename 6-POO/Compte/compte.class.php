<?php
include 'client.class.php';

class Compte {

  private Client $client;
  private int $solde;
  private int $code;
//Attribut static initialise à 1 qui permettra d'attribuer les numero à chaque nouvelles objet créer
public static int $nombreComptes = 0;
  
  
public function __construct ($cin, $nom, $prenom, string $telephone, int $solde){
       $this-> client = new Client($cin, $nom, $prenom, $telephone);
       $this->solde = $solde;

       self::$nombreComptes++;
       $this->code = self::$nombreComptes;
}


    /* private static $nombreComptes = 0;
    private $numeroCompte;
    private $solde;
    private $proprietaire;

public function __construct ($proprietaire) {
    $this->numeroCompte = self::$nombreComptes + 1;
    $this->solde = 0;
    $this->proprietaire = $proprietaire;
    self::$nombreComptes++;*/



    /**
     * Get the value of numeroCompte
     */ 
   /* public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }


/**
   * Get the value of client
   */ 
  public function getClient()
  {
    return $this->client;
  }

  /**
   * Set the value of client
   *
   * @return  self
   */ 
  public function setClient($client)
  {
    $this->client = $client;

    return $this;
  }

  /**
   * Get the value of code
   */ 
  public function getCode()
  {
    return $this->code;
  }

  /**
   * Set the value of code
   *
   * @return  self
   */ 
  public function setCode($code)
  {
    $this->code = $code;

    return $this;
  }

    // Méthodes de gestion du compte
    public function crediter($somme): int {
        return $this->solde += $somme;
    }

public function creditercompte ($somme,$compte )  {
    $this -> solde += $somme;
    /*$somme -= $compte->solde;*/
    $compte->debiter($somme);
  
    }

    public function debiter($somme) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            echo "Solde insuffisant.";
        }
    }

    public function debiterCpt($somme, $compte) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
            $compte->crediter($somme);
        } else {
            echo "Solde insuffisant.";
        }

}
public function afficherResume() {
    
    echo "Solde : " . $this->solde . "<br>";
}


/*getter du nom, prenom etc client pour pourvoir l'afficher*/
public function nom()
{
    return $this->client->getNom();
}


public function Prenom()
{
    return $this->client->getPrenom();
}


public function CIN()
{
    return $this->client->getCIN();
}

public function Telephone()
{
    return $this->client->getTelephone();
}






}

?>