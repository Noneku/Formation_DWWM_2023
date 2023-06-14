<?php

class Filiere
{
    private int $id;
    private static $nbCpt = 0;
    private string $code;
    private string $libelle;

    public function __construct($code, $libelle)
    {

        $this->code = $code;
        $this->libelle = $libelle;
        self::$nbCpt++;
        $this->id = self::$nbCpt;
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
}
