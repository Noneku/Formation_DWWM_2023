<?php

class Personne{

    protected int $id;
    protected string $nom;
    protected string $prenom;


    public function __construct($id,$nom,$prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function __toString()
    {
    return "je suis ".$this->getNom()." ".$this->getPrenom()." "."et mon id est :" .$this->getId();
    }

}
