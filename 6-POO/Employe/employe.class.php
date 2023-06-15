<?php

class Employe {

    private string $matricule;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private DateTime $dateEmbauche;
    private int $salaire;
    private array $information = [];

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire){

        $this->matricule = $matricule;
        $this->nom = strtoupper($nom);
        $this->prenom = ucfirst(strtolower($prenom));
        $this->dateNaissance = DateTime::createFromFormat('d/m/Y', $dateNaissance);
        $this->dateEmbauche = DateTime::createFromFormat('d/m/Y',$dateEmbauche);
        $this->salaire = $salaire;
    }

    public function age() : string {

        $dateBorn = $this->dateNaissance->format("Y");

        $currentDate = date("Y");

        return $currentDate - $dateBorn;
    }

    public function anciennete() : string {

        $dateHiring = $this->dateEmbauche->format("Y");

        $currentDate = date("Y");

        $seniority = $currentDate - $dateHiring;

        return $seniority;
    }

    public function augmentationDuSalaire($anciennete) : void {

        $oldSalaire = $this->getSalaire();

        $salaire = $this->getSalaire();

        if($anciennete > 10){
            $augmentation = $salaire + ($salaire * 10 / 100);
            $this->setSalaire($augmentation);

            array_push($this->information, "**Ce salarié posséde une augmentation de 10 % sur son salaire
             Salaire de base : $oldSalaire €");

        } elseif ($anciennete < 5) {

                $augmentation = $salaire + $salaire * 2 / 100;
                $this->setSalaire($augmentation);
                
                array_push($this->information, "**Ce salarié posséde une augmentation de 2 % sur son salaire
                 Salaire de base : $oldSalaire €");

            } else {

                $augmentation = $salaire + $salaire * 5 / 100;
                $this->setSalaire($augmentation);

                array_push($this->information, "**Ce salarié posséde une augmentation de 5 % sur son salaire
                 Salaire de base : $oldSalaire €");
        }

    }

    public function afficherEmploye() {

        print("\n
        Matricule : " . $this->getMatricule() . "\n
        Nom Complet : " . $this->getNom() . " " . $this->getPrenom() . "\n
        Age : " . $this->age() . "\n
        Ancienneté : " . $this->anciennete() . "\n
        Salaire : " . $this->getSalaire() . "€ \n
        ");

        foreach ($this->information as $key => $value) {
            print $value . "\n\n";
        }
    }

    
    /**
     * Get the value of matricule
     *
     * @return string
     */
    public function getMatricule(): string {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @param string $matricule
     *
     * @return self
     */
    public function setMatricule(string $matricule): self {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }


    /**
     * Get the value of dateEmbauche
     *
     * @return string
     */
    public function getDateEmbauche(): DateTime {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @param DateTime $dateEmbauche
     *
     * @return self
     */
    public function setDateEmbauche(DateTime $dateEmbauche): self {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }
    

    /**
     * Get the value of salaire
     *
     * @return int
     */
    public function getSalaire(): int {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @param int $salaire
     *
     * @return self
     */
    public function setSalaire(int $salaire): self {
        $this->salaire = $salaire;
        return $this;
    }

    /**
     * Get the value of dateNaissance
     *
     * @return DateTime
     */
    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }
    
    /**
     * Set the value of dateNaissance
     *
     * @param DateTime $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(DateTime $dateNaissance): self {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }
}


?>