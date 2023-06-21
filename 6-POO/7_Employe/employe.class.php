<?php
// Déclaration de la class Employe 
class Employe

{
    // déclaration des attributs 
    private $Matricule;
    private $Nom;
    private $Prenom;
    private $DateNaissance;
    private $DateEmbauche;
    private $Salaire;

    // Constructeur pour prendre des paramètres de l'employe
    public function __construct($Matricule, $Nom, $Prenom, $DateNaissance, $DateEmbauche, $Salaire)
    {
        $this->Matricule = $Matricule;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->DateNaissance = $DateNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->Salaire = $Salaire;
    }
    // get pour venir récupérer les données 
    public function getMatricule()
    {

        return $this->Matricule;
    }

    public function setMatricule($Matricule)
    {
        $this->Matricule = $Matricule;
    }

    public function getNom()
    {

        return $this->Nom;
    }

    public function setNom($Nom)
    {

        $this->Nom = $Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function setPrenom($Prenom)
    {

        $this->Prenom = $Prenom;
    }

    public function getDateNaissance()
    {


        return $this->DateNaissance;
    }

    public function setDateNaissance($DateNaissance)
    {

        $this->DateNaissance = $DateNaissance;
    }

    public function getDateEmbauche()
    {
        return $this->DateEmbauche;
    }

    public function setDateEmbauche($DateEmbauche)
    {

        $this->DateEmbauche = $DateEmbauche;
    }

    public function getSalaire()
    {

        return $this->Salaire;
    }

    public function setSalaire($salaire)
    {
        $this->Salaire = $salaire;
    }

    // Chercher l'âge actuel de l'employe en faisant la soustraction avec l'année actuelle 
    public function age()
    {
        $this->DateNaissance = explode("/", $this->DateNaissance);
        $Date = date("d/m/Y");
        $Date = explode("/", $Date);
        return $Date[2] - $this->DateNaissance[2];
    }

    // Chercher le nombre d'année d'ancienneté en faisant la soustraction avec l'année actuelle 
    public function anciennete()
    {
        $date = date('d/m/Y');
        $date = explode("/", $date);
        $an = explode("/", $this->DateEmbauche);
        return $date[2] - $an[2];
    }

    // Fonction pour calculer la hausse du salaire de l'employe 
    public function augmentationDuSalaire()
    {
        $anciennete = $this->anciennete();
        $nouveauSalaire = $this->Salaire;

        if ($anciennete < 5) {

            $this->Salaire += $this->Salaire * 0.02;
        } elseif ($anciennete < 10) {

            $this->Salaire += $this->Salaire * 0.05;
        } else {

            $this->Salaire += $this->Salaire * 0.1;
        }
        return $nouveauSalaire;
    }

    // Affichage 
    public function afficherEmploye()
    {
        echo "Matricule : " . $this->Matricule . "\n";
        echo "Nom complet :" . $this->Nom . "\n";
        echo "Prénom : " . $this->Prenom . "\n";
        echo "Age : " . $this->age() . "\n";
        echo "Salaire : " . $this->Salaire . "\n";
        // Afficher date d'embauche de l'employe
        // echo "date d'embauche : " . $this->DateEmbauche . "\n"; 
        echo "ancienneté : " . $this->anciennete() . "ans" . "\n";
    }
}
