<?php


class Etudiant {
    private static $nombreEtudiants = 0;
    private $Id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    
    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->Id = ++self::$nombreEtudiants;
    }
    
    public function __toString() {
        return "Je suis l'étudiant " . $this->prenom . " " . $this->nom . ", ma date de naissance est : " . $this->dateNaissance;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }
    
    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getId()
    {
        return $this->Id;
    }
}




?>