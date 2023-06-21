<?php


Class Professeur extends Employe 

{
    private string $specialite;

    public function __construct ($id, $nom, $prenom, $salaire, $specialite) {

        Employe::__construct ($id, $nom, $prenom, $salaire);

        $this->specialite = $specialite;
    }


    public function __toString () : string {
        return parent::__toString(). " Je suis spécialisé en " .$this->specialite;
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