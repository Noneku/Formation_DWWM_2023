<?php

class Etudiant extends Personne
{
    protected string $cne;

    public function __construct($nom,$prenom,$cne)
    {

       parent::__construct($nom,$prenom);
       $this->cne = $cne;

    }

    public function __toString()
    {
        return parent::__toString()." \nCNE : ".$this->cne;
    }

}


?>