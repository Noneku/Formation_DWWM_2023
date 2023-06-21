<?php
class Employe {
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    // Définition des méthodes d'accès aux attributs
    public function getMatricule() {
        return $this->matricule;
    }
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }
    public function setDateEmbauche($dateEmbauche) {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getSalaire() {
        return $this->salaire;
    }
    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    // Constructeur pour initialiser les attributs
    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    // Méthode pour calculer l'âge de l'employé
    public function age() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $aujourdHui->diff($dateNaissance);
        return $difference->y;
    }

    // Méthode pour calculer l'ancienneté de l'employé
    public function anciennete() {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $dateActuelle = new DateTime();
        $difference = $dateEmbauche->diff($dateActuelle);
        return $difference->y; // Renvoie le nombre d'années d'ancienneté
    }
    

    // Méthode pour augmenter le salaire en fonction de l'ancienneté
    public function augmentationDuSalaire() {
        $anciennete = $this->anciennete();
        if ($anciennete < 5) {
            $this->salaire *= 1.02; // Augmentation de 2%
        } elseif ($anciennete < 10) {
            $this->salaire *= 1.05; // Augmentation de 5%
        } else {
            $this->salaire *= 1.1; // Augmentation de 10%
        }
    }

    // Méthode pour afficher les informations de l'employé
    public function afficherEmploye() {
        echo "Matricule: " . $this->matricule;
        echo PHP_EOL;
        echo "Nom complet: " . strtoupper($this->nom) . " " . ucfirst(strtolower($this->prenom));
        echo PHP_EOL;
        echo "Age: " . $this->age();
        echo PHP_EOL;
        echo "Ancienneté : " . $this->anciennete() . " ans";
        echo PHP_EOL;
        echo "Salaire: " . $this->salaire;
        echo PHP_EOL;
    }
}

echo "Avant augmentation du salaire: ";
$employe = new Employe("123456", "Azaaouaj", "Younes", "1996-09-14", "2023-06-14", 3000);
echo PHP_EOL;
// $employe->afficherEmploye();
echo PHP_EOL;
// Modifier l'année de l'ancienneté
$employe->setDateEmbauche("2010-01-01");
echo PHP_EOL;
$employe->afficherEmploye();
echo PHP_EOL;

$employe->augmentationDuSalaire();
echo PHP_EOL;
echo "Après augmentation du salaire: ";
echo PHP_EOL;
$employe->afficherEmploye();



?>