<?php

class Compte {
    
    private $numeroCompte;
    private $solde = 0;
    private $code;
    public Client $proprietaire;
    private static $nombreComptes = 0;

    public function __construct($cin, $nom, $prenom, $tel, $solde) {
        $this->proprietaire = new Client($cin, $nom, $prenom, $tel);
        $this->numeroCompte = self::$nombreComptes++;
        $this->solde = $solde;
        $this->code = $this->numeroCompte;
  

    }

    public function crediter($somme) {
        $this->solde += $somme;
    }

    public function debiter($somme) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        
        } else {
            echo "Solde insuffisant.\n";
        }

    }

    public function crediterCpt($somme, $compte) {
        $this->solde += $somme;
        $compte->debiter($somme);
    }

    public function debiterCpt($somme, $compte) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
            $compte->créditer($somme);
        } else {
            echo "Solde insuffisant.\n";
        }
    }

    public function afficherRésumé() {
        echo "**********************************************************************\n";
        echo "Numéro de compte : " . $this->numeroCompte . "\n";
        echo "Solde : " . $this->solde . "\n";
        echo "CIN : " .$this->proprietaire->getCin() ."\n";
        echo "NOM : " . $this->proprietaire->getNom() ."\n";
        echo "Prenom : " . $this->proprietaire->getPrenom() ."\n";
        echo "Tel :" .$this->proprietaire->getTel() ."\n";
    }


    public function getNuméroCompte() {
        return $this->numeroCompte;
    }
    
    public function getSolde() {
        return $this->solde;
    }
    
    public function getCode() {
        return $this->code;
    }
    
    public function getProprietaire() {
        return $this->proprietaire;
    }
}



?>