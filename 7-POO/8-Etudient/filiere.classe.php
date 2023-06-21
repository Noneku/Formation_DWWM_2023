<?php

include "etudiant.classe.php";

class Filiere
{
    private $etudiant;
    private static $Id;
    private $code;
    private $libelle;
    private static $nombreEtudiants = 0;

    public function __construct(Etudiant $etudiant, $code, $libelle)
    {
        $this->etudiant = $etudiant;
        self::$Id = ++self::$nombreEtudiants;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function __toString()
    {
        return $this->libelle . " " . "et Id est :" . self::$Id;
    }

    public function getEtudiant()
    {
        return $this->etudiant;
    }

    public function setEtudiant(Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;
        return $this;
    }

    public function getId()
    {
        return self::$Id;
    }

    public function setId($id)
    {
        self::$Id = $id;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }
}
