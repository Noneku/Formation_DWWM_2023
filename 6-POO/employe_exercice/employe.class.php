<?php

class Employe
{

    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;


    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance, string $dateEmbauche, float $salaire)
    {

        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }


    // méthode age( ) qui retourne l’âge de l’employé

    public function age($dateNaissance): int
    {

        // Convertit un string en temps 
        $time = strtotime($dateNaissance);
        // Convertit le temps au format y-m-d
        $dateNaissance = date('y-m-d', $time);
        
        // fonction qui affiche la date du jour : date ('y-m-d')
        $dateJour = date('y-m-d');

        // constructeur
        $date_Naissance = date_create($dateNaissance);
        $date_Jour = date_create($dateJour);

        // fonction qui calcul la différence entre 2 dates 
        $age = DATE_DIFF($date_Naissance, $date_Jour);

        // affichage au format nombre d'année 
        $age = $age->format("%y");

        // Convertit le resultat string en int
        $age = intval($age);

        // Affichage du resultat 
        return $age;
    }

    // méthode anciennete() qui retourne le nombre d’années d’ancienneté de l’employé

    public function anciennete($dateEmbauche): int
    {

        $time = strtotime($dateEmbauche);
        $dateEmbauche = date('y-m-d', $time);

        $dateJour = date('y-m-d');

        $date_Embauche = date_create($dateEmbauche);
        $date_Jour = date_create($dateJour);

        $anciennete = DATE_DIFF($date_Embauche, $date_Jour);
        $anciennete = $anciennete->format("%y");
        $anciennete = intval($anciennete);
        return $anciennete;
    }

    // méthode augmentationDuSalaire() qui augmente le salaire de l’employé en prenant en considération l’ancienneté
    // Si Ancienneté < 5 ans, alors on ajoute 2%. - Si Ancienneté < 10 ans, alors on ajoute 5%. - Sinon, on ajoute 10%.

    public function augmentationDuSalaire($anciennete): float
    {

        if ($anciennete < 5) {

        
            $augmentation = $this->getSalaire() * 0.02;
            return $this->salaire = $augmentation += $this->getSalaire();

        } elseif ($anciennete < 10) {

            $augmentation = $this->getSalaire() * 0.05;
            return $this->salaire = $augmentation += $this->getSalaire();

        } else {

            $augmentation = $this->getSalaire() * 0.10;
            return $this->salaire = $augmentation += $this->getSalaire();
        }
    }


    // méthode AfficherEmployé() qui affiche les informations de l’employé
    // Le nom doit être affiché en majuscule. Pour le prénom, la première lettre doit être en majuscule, les autres en minuscule
    public function afficherEmploye(): void
    {

        echo "Matricule : " . $this->getMatricule() . "\n";
        echo "Nom : " . strtoupper($this->getNom()) . "\n";
        echo "Prenom : " . ucfirst($this->getPrenom()) . "\n";
        echo "Date de Naissance : " . $this->getDateNaissance() . "\n";
        echo "Date embauche : " . $this->getDateEmbauche() . "\n";
        echo "Salaire : " . $this->getSalaire() . "\n";
        
    }



    /**
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of salaire
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}
