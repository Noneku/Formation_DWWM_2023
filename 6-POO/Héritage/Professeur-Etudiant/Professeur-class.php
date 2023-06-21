<?php

// Création d'une class Professeur qui héritera de la class Employe
class Professeur extends Employe{

    // Définition des attributs
    private string $specialite;

    // Définition du construct
    public function __construct($id, $nom, $prenom, $salaire, $specialite)
    {
        parent::__construct($salaire, $id, $nom, $prenom);
        $this-> specialite = $specialite;
    }

    public function __toString()
    {
        return parent::__toString() ." et ma spécialité est le " .$this->specialite;
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