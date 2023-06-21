<?php

class Etudiant extends Personne
{
    private string $cne;



    public function __construct(int $id, string $N, string $P, int $cne)
    {
        parent::__construct($id, $N, $P);
        $this->cne= $cne;


    }
    public function __toString()
    {
        return"Je suis ".parent::__toString()." mon CNE est : ".$this -> cne;
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