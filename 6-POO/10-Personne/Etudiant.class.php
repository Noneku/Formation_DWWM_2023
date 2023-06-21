<?php


Class Etudiant extends Personne 

{
    private string $cne;

    public function __construct ($id, $nom, $prenom, $cne) {

        Personne::__construct ($id, $nom, $prenom);
        
        $this->cne = $cne;

    }

    public function __toString () : string {
        return parent::__toString(). " Mon CNE est : " .$this->cne;
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