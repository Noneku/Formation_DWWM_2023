<?php 

class Employe 

{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private DateTime $dateEmbauche;
    private float $salaire;

    public function __construct ($matricule, $nom, $prenom) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = DateTime::createFromFormat('d-m-y',readline ("Indiquez votre date de naissance (jj-mm-aaaa) : "));
        $this->dateEmbauche = DateTime::createFromFormat('d-m-Y', readline ("Indiquez votre date d'embauche (jj-mm-aaaa) : "));
    }

   

    // public function age () {
    //     $dateJour = DateTime::createFromFormat(time('d-m-Y'), $dateJour);
    //     $age =  date_diff($dateJour, $dateNaissance);
    //     return $age;
    // }

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

?>