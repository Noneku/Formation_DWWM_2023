<?php


Class Employe extends Personne 

{
    protected float $salaire;

    public function __construct ($id, $nom, $prenom, $salaire) {

        Personne::__construct ($id, $nom, $prenom);

        $this->salaire = $salaire;
    }

    public function __toString () : string {
        return parent::__toString(). " Mon salaire est de : " .$this->salaire. " €.";
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