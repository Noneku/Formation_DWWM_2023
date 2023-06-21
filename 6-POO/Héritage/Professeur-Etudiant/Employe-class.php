<?php
// Création de la class Employé qui héritera de la class Personne
class Employe extends Personne{

    // Définition des attributs
    protected  $salaire;

    // Définition du constructeur
    public function __construct($id, $nom, $prenom, $salaire)
    {
        parent::__construct($id, $nom, $prenom);
        $this-> salaire = $salaire;
    }

    public function __toString()
    {
        return parent::__toString() .", et voici mon salaire : " .$this->salaire;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}



?>