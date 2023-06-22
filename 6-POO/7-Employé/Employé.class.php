<?php

class Employe {
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire) {
        $this->matricule = $matricule;
        $this->nom = strtoupper($nom);
        $this->prenom = ucfirst(strtolower($prenom));
        $this->dateNaissance = DateTime::createFromFormat('d/m/Y', $dateNaissance);
        $this->dateEmbauche = DateTime::createFromFormat('d/m/Y', $dateEmbauche);
        $this->salaire = $salaire;
    }

    // Calcul de l'âge en fonction de la date de naissance
    public function age() {
        $now = new DateTime();
        return $now->diff($this->dateNaissance)->y;
    }

    // Calcul du nombre d'ancienneté en fonction de la date d'embauche
    public function anciennete() {
        $now = new DateTime();
        return $now->diff($this->dateEmbauche)->y;
    }

    // Calcul de l'augmentation du salaire
    public function augmentationDuSalaire() {
        $anciennete = $this->anciennete();
        if ($anciennete < 5) {
            $this->salaire *= 1.02;
        } elseif ($anciennete < 10) {
            $this->salaire *= 1.05;
        } else {
            $this->salaire *= 1.1;
        }
    }

    // Affichage employé
    public function afficherEmploye() {
        echo "Matricule: " . $this->matricule . "\n";
        echo "Nom Complet: " . $this->nom . " " . $this->prenom . "\n";
        echo "Age: " . $this->age() . "\n";
        echo "Ancienneté: " . $this->anciennete() . "\n";
        echo "Salaire: " . $this->salaire . "\n";
    }
}