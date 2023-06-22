<?php

class Etudiant extends Personne {

    private string $cne;

    public function __construct(string $cne ,int $id, string $nom, string $prenom)
    {
        $this->cne = $cne;
        parent::__construct($id, $nom, $prenom);
    }

    public function __toString()
    {
        return parent::__toString() ."mon CNE est ".$this->cne;
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