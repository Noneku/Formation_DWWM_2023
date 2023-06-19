<?php

class Employe extends Personne
{
    protected float $salaire;

    public function __construct($nom,$prenom,$salaire)
    {

       parent::__construct($nom,$prenom);
       $this->salaire = $salaire;

    }

    public function __toString()
    {
        return parent::__toString()." \nsalaire : ".$this->salaire;
    }

}


?>