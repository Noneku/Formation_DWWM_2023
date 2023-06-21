<?php

class Professeur extends Employe{

    private string $specialite;

    public function __construct($id,$nom,$prenom,$salaire,$specialite)
    {
        parent::__construct($id,$nom,$prenom,$salaire);
        $this->specialite = $specialite;
    }

    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function __toString()
    {
    return "je suis :"." ".$this->getNom()." ".$this->getPrenom()." ". "mon salaire est :"." ".$this->getSalaire()." "."et ma specialité est :"." ".$this->getSpecialite();
    }
}



    