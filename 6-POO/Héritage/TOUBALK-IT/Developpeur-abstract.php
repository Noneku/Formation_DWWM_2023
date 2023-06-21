<?php

class Developpeur extends Personne {
    private string $specialite;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $specialite) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
    }

    public function afficher(): void {
        echo "Le salaire du développeur " . $this->nom . " " . $this->prenom . " est : " . $this->salaire . " €, sa spécialité : " . $this->specialite . "\n";
    }

    public function calculerSalaire(): float {
        return $this->salaire * 1.2; // Augmentation de 20%
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}




?>