<?php


class Employe extends Personne
{
    private float $salaire;

    public function __construct(int $id, string $N, string $P,float $s)
    {
        parent::__construct($id, $N, $P);
        $this->salaire = $s;
    }

    public function __toString()
    {
        return"Je suis ".parent::__toString()." mon salaire est : " .$this -> salaire." €" ;
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