<?php

class Filiere
{
    private int $id;
    private static $nbCpt = 0;
    private string $code;
    private string $libelle;
    private array $listeEtudiant;

    public function __construct($code, $libelle, $listeEtudiant)
    {

        $this->code = $code;
        $this->libelle = $libelle;
        self::$nbCpt++;
        $this->id = self::$nbCpt;
        $this->listeEtudiant = $listeEtudiant;
    }

    public function __toString()
    {
        return "La filière est: ".$this->getLibelle();
    }

    /**
     * Get the value of etudiant
     */ 

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of listeEtudiant
     */ 
    public function getListeEtudiant()
    {
        return $this->listeEtudiant;
    }

    /**
     * Set the value of listeEtudiant
     *
     * @return  self
     */ 
    public function setListeEtudiant($listeEtudiant)
    {
        $this->listeEtudiant = $listeEtudiant;

        return $this;
    }
}
