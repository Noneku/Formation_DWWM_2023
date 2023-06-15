<?php 

class Employe 

{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;


    public function __construct ($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

   

    public function age () : float {
        $dateJour = date ('d-m-Y');
        $age =  date_diff(date_create($this->dateNaissance), date_create($dateJour));
        return $age->format('%y');
    }


    public function anciennete () : float {
        $dateJour = date ('d-m-Y');
        $anciennete =  date_diff(date_create($this->dateEmbauche), date_create($dateJour));
        return $anciennete->format('%y');
    }


    public function augmentationDuSalaire () : void {

        $anciennete =  $this->anciennete();

        if ($anciennete < 5) {
            $this->salaire += $this->salaire * 0.02;
        } elseif ($anciennete < 10) {
            $this->salaire += $this->salaire * 0.05;
        } else {
            $this->salaire += $this->salaire * 0.1;
        }
    }


    public function afficherEmploye () : void {

        $dateJour = date ('d-m-Y');
        $age =  date_diff(date_create($this->dateNaissance), date_create($dateJour));

        $dateJour = date ('d-m-Y');
        $anciennete =  date_diff(date_create($this->dateEmbauche), date_create($dateJour));


        echo "Matricule : " .$this->matricule. "\n";
        echo "Nom complet : " .ucfirst($this->prenom). " " .strtoupper($this->nom). "\n";
        echo "Age : " .$age->format('%y'). " ans \n";
        echo "Ancienneté : " .$anciennete->format('%y'). " ans \n";
        echo "Salaire : " .$this->salaire. " € \n\n";
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

?>