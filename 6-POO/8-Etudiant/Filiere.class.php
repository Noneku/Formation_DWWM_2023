<?php

class Filiere {
    private static $idCount = 1;
    private $id;
    private $code;
    private $libelle;
    private $etudiants = [];

    public function __construct($code, $libelle) {
        $this->id = self::$idCount++;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function addEtudiant(Etudiant $etudiant) {
        $this->etudiants[] = $etudiant;
    }

    public function getEtudiants() {
        return $this->etudiants;
    }

    public function __toString() {
        return "Filière : " . $this->libelle;
    }
}