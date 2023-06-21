<?php

//Définir une classe Employé caractérisée par les attributs :
//Matricule,Nom, Prénom, DateNaissance, DateEmbauche, Salaire.


class Employe {
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function age() {
        $anneeNaissance = 1990;
        $anneeActuelle = date("Y");
        $age = $anneeActuelle - $anneeNaissance;
        
        return $age;
    }

    // public function age() {
    //     $dateNaissance = new DateTime($this->dateNaissance);
    //     $dateActuelle = new DateTime();
    //     $difference = $dateNaissance->diff($dateActuelle);
    //     return $difference->y;
    // }

    public function anciennete() :int{
        $anneeDembauche = 2012;
        $anneeActuelle = date("Y");
        $anciennete = $anneeActuelle - $anneeDembauche;
        
        return $anciennete;
        }
        

    // public function anciennete()
    // {
    //     $dateEmbauche = new DateTime($this->dateEmbauche);
    //     $aujourdHui = new DateTime();
    //     $difference = $dateEmbauche->diff($aujourdHui);
    //     return $difference->y;
    // }

    // public function augmentationDuSalaire()
    // {
    //     $anciennete = $this->anciennete();
    //     $nouveauSalaire = $this->salaire;
    
    //     if ($anciennete < 5) {
    //         $nouveauSalaire *= 0.02; // Augmentation de 2%
    //     } elseif ($anciennete < 10) {
    //         $nouveauSalaire *= 0.05; // Augmentation de 5%
    //     } else {
    //         $nouveauSalaire *= 0.1; // Augmentation de 10%
    //     }
    
    //     return $nouveauSalaire;
    // }

    public function augmentationDuSalaire()
    {
        $anciennete = $this->anciennete();
        $nouveauSalaire = $this->salaire;
        
switch ($anciennete) {
    case (($anciennete < 5)):
       $nouveauSalaire *= 0.02;
        break;
    case (($anciennete < 10)):
         $nouveauSalaire *= 0.05;
        break;
    default:
       $nouveauSalaire *= 0.1;
        break;
}
return $nouveauSalaire;

    }


   
}
















?>