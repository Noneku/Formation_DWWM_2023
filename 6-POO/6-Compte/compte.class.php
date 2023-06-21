<?php
 
 

 class Compte{
     
     private float $solde;
     private int $code;
   

      // intitialisation de nombre de compte a zero 
      private static int $nbrCpt = 0;
      
      // recuperation de l'objet client de la classe client 
      private Client $proprietaire;
      

        public function __construct($cin,$Nom,$Prenom,$Tel,$solde ){
            $this->solde = $solde;
            $this->proprietaire = new Client($cin,$Nom,$Prenom,$Tel);
            self::$nbrCpt++;
            $this->code = self::$nbrCpt;
        }


function creditet($somme){

$this->solde += $somme;


}
      
              /**
               * Get the value of solde
               */ 
              public function getSolde():float
              {
                      return $this->solde;
              }
      
              /**
               * Get the value of code
               */ 
              public function getCode():float
              {
                      return $this->code;
              }


function crediterCpt ($somme){

$this->solde += $somme ;
}
    
function debiter($somme){

if ($somme<=$this->solde){
$this->solde -= $somme;
}

else 
echo "solde insuffisant";
}

function debiterCpt($somme,$compte){

    if ($somme <= $this ->solde){
        $this->solde -= $somme ;
        $compte->creditet($somme);
}
}

function afficherResume() :void 
{
        echo "Résumé du compte :\n";
        echo "numéro de compte : " . $this->code . "\n";
        echo "Solde : " . $this->solde . "\n";
        echo "Propriétaire : " . $this->proprietaire->getNom() . " " . $this->proprietaire->getPrenom() . "/n";
    }

public static function afficherNombreComptes():void{

    echo "nombre de compte cres : " .self:: $nbrCpt ."/n"; 

}



}



?>