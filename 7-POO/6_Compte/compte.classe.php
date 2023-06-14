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
////Créer Une classe Compte caractérisée par son solde et un code qui est incrémenté lors de sa création ainsi que son propriétaire qui représente un client.
class Compte{

    private static $code_incremente = 0;
    private $solde;
    private $code;
    private $proprietaire;
    private static $nombre_comptes = 0;

//Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe (le numéro de compte et le solde sont en lecture seule)
    public function getSolde()
    {
        return $this->solde;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    //Définir un constructeur permettant de créer un compte en indiquant son propriétaire.
    public function __construct($solde, $proprietaire) {
        $this->solde = $solde;
        $this->proprietaire = $proprietaire;
        self::$code_incremente++;
        $this->code = self::$code_incremente;
        self::$nombre_comptes++;
       
       
    }
public function afficher() {
        echo "Numéro de Compte:".$this->code = self::$code_incremente;
        echo PHP_EOL;
        echo "Solde de compte: " . $this->solde ;echo PHP_EOL;
        echo "Propriétaire du compte: ";echo PHP_EOL;
         $this->proprietaire->afficher();
        
    }
//Une méthode permettant de crediter() le compte, prenant une somme en paramètre.
    public function crediter($montant) {
        $this->solde += $montant;
    }
//Une méthode permettant de crediterCpt() le compte, prenant une somme et un compte en paramètres, créditant le compte et débitant le compte passé en paramètres.
    public function crediterCpt($montant, $compte) {
        $this->solde += $montant;
        $compte->debiter($montant);
    }
   
    
//Une méthode permettant de debiter() le compte, prenant une somme en paramètre
public function debiter($montant) {
    if ($montant <= $this->solde) {
        $this->solde -= $montant;
    } else {
        echo "Solde insuffisant ";
        echo PHP_EOL;
    }
}
    //Une méthode permettant de débiterCpt() le compte, prenant une somme et un compte bancaire en paramètres, débitant le compte et créditant le compte passé en paramètres

    public function debiterCpt($montant, $compte) {

       
        if ($montant <= $this->solde) {
             $this->solde -= $montant;
            $compte->crediter($montant);
        } else { 
            
            echo "Solde insuffisant ";
            echo PHP_EOL;
        }
    }

    public function afficherOperation() {
        echo "Code du compte: " . $this->code;
        echo PHP_EOL;
        echo "Solde de compte: " . $this->solde ;echo PHP_EOL;
        echo "Propriétaire du compte: ";echo PHP_EOL;
         $this->proprietaire->afficher();
        
    }


    public static function afficherNombreComptes() {
        echo "Nombre de comptes créés: " . self::$nombre_comptes; echo PHP_EOL;
    }
   










}


?>