<?php

class Professeur extends Employe
{
    protected string $specialite;

    public function __construct($nom,$prenom,$salaire,$specialite)
    {

       parent::__construct($nom,$prenom,$salaire);
       $this->specialite = $specialite;

    }

    public function __toString()
    {
        return parent::__toString()." \nspecialité : ".$this->specialite;
    }

}


?>