<?php

class Developpeur extends Personne {
    private $specialite;
    
    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$specialite) {
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
      
    $this->specialite = $specialite;
    }
    
    public function calculerSalaire() {
        // Méthode de calcul du salaire pour le développeur  
        $salaire = $this->getsalaire();

      // Augmentation de 20% pour le développeur
      $augmentation = $this->salaire * 0.2;
      $this->salaire = $this->salaire + $augmentation;

      return $this->salaire; 
    }
    
    public function afficherInformations() {
        parent::afficherInformations();

        echo "Spécialité : " . $this->specialite . "\n";
    }
}
