<?php
// Créeation de la class Etudiant qui hérite de la class Personne
class Etudiant extends Personne{
    
    // Définition des attributs
    private string $cne;

    // Définition du constructeur
    public function __construct(int $id, string $nom, string $prenom, string $cne)
    {
        parent::__construct($id, $nom, $prenom);
        $this-> cne = $cne;
    }

    public function __toString()
    {
        return parent::__toString() .", et vois ma carte étudiante : " .$this->cne;
    }

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}



?>