<?php

class Manager extends Personne {

    private $service;
    
    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$service) {
    
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
        $this->service = $service;
    }
    
    public function calculerSalaire() {
       // Méthode de calcul du salaire pour le manager     
       $augmentation = $this->salaire * 0.35;
       $this->salaire = $this->salaire + $augmentation;

       return $this->salaire; 
    }
    
    public function afficherInformations() {
        parent::afficherInformations();
        echo "Service : " . $this->service . "\n";
    }
}
