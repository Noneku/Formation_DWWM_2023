<?php

class Compte {
    private static $nombreComptes = 0;

    private $numéroCompte;
    private $solde;
    private $code;
    private $propriétaire;

    public function __construct($propriétaire) {
        $this->numéroCompte = ++self::$nombreComptes;
        $this->solde = 0;
        $this->code = $this->generateCode();
        $this->propriétaire = $propriétaire;
    }

    public function getNuméroCompte() {
        return $this->numéroCompte;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getPropriétaire() {
        return $this->propriétaire;
    }

    public function crediter($somme) {
        $this->solde += $somme;
    }

    public function crediterCpt($somme, $compte) {
        $this->solde += $somme;
        $compte->debiter($somme);
    }

    public function debiter($somme) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            echo "Solde insuffisant.\n";
        }
    }

    public function debiterCpt($somme, $compte) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
            $compte->crediter($somme);
        } else {
            echo "Solde insuffisant.\n";
        }
    }

    public function afficherRésumé() {
        echo "Numéro de compte: {$this->numéroCompte}\n";
        echo "Code: {$this->code}\n";
        echo "Propriétaire: {$this->propriétaire->getNom()} {$this->propriétaire->getPrénom()}\n";
        echo "Solde: {$this->solde}\n";
        
    }

    public static function getNombreComptes() {
        return self::$nombreComptes;
    }

    private function generateCode() {
        
    }
}