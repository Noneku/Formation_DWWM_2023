<?php



//Définir une classe Client avec les attributs suivants : CIN, Nom, Prénom, Tél.

class Client{

    private string $CIN;
    private string $Nom;
    private string $Prénom;
    private int $Tél;
    
    //Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
    public function getCIN() : string
    {
    return $this->CIN;
    }
    
    
    public function getNom() : string
    {
    return $this->Nom;
    }
    
    
    public function getPrenom() : string
    {
    return $this->Prénom;
    }
    
    
    public function getTél() : int
    {
    return $this->Tél;
    }
    
    
    //Définir un constructeur permettant d’initialiser tous les attributs.
    
    public function __construct($CIN,$Nom,$Prénom,$Tél)
    {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prénom = $Prénom;
        $this->Tél = $Tél;
    }
    
    //Définir la méthode Afficher ( ) permettant d’afficher les informations du Client en cours.
    
    public function Afficher(){
    
   
        echo " Le CIN:".$this->CIN;echo PHP_EOL;
        echo " Le Nom:".$this->Nom;echo PHP_EOL;
        echo " Le Prénom:".$this->Prénom;echo PHP_EOL;
        echo " Le numéro de téléphone:".$this->Tél;echo PHP_EOL;
        echo "Détails du compte:";echo PHP_EOL;
        echo "****************************";echo PHP_EOL;
       
    
        }
    
    
    
    
}    











?>