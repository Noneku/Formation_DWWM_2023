<?php
// Création d'une class Manager qui hérite de la class Personne
class Manager extends Personne {
    // Définition des atributs
    private string $service;

    // Création d'un constructeur
    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }

    
    public function afficher(): void {
        echo "Le salaire du manager " . $this->nom . " " . $this->prenom . " est : " . $this->salaire . " €, son service : " . $this->service . "\n";
    }

    public function calculerSalaire(): float {
        return $this->salaire * 1.35; // Augmentation de 35%
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}




?>