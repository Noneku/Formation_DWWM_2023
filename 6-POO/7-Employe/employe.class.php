<?php

class Employe {

    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $DateNaissance;
    private string $DateEmbauche;
    private float $Salaire;

    function __construct(int $matricule , string $nom ,string $prenom ,string $DateNaissance,string $DateEmbauche,float $Salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->DateNaissance = $DateNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->Salaire = $Salaire;
    }

   


    function Age():int
    {
        
        $DateNaisssance = new DateTime($this->DateNaissance);
        $aujourdhui= new DateTime(); //Creation d'une date par la class DateTime
        $age = $DateNaisssance->diff($aujourdhui)->y;
        return $age;
       
    }

    function anciennete(){



        $today= new DateTime(); //Creation d'une date par la class DateTime
        $DateEmbauche = new DateTime($this->DateEmbauche);
        $anciennete = $DateEmbauche->diff($today)->y;
        return $anciennete;

    }

    function augmentationDuSalaire() {

        if ( $this->DateEmbauche <5 ) {
           $salaire = $this->Salaire*0.20;
        }

        elseif ($this->DateEmbauche <10) {
            echo $salaire = $this->Salaire*0.5;
        }
        
    else {  $salaire = $this->Salaire * 0.10;
        echo $salaire;
    }

}

public function AfficherEmployé(){
    echo "Matricule : " . $this->matricule . "\n";
    echo "Nom complet :" . $this->nom . "\n";
    echo "Prénom : " . $this->prenom . "\n";
    echo "Age : " . $this->age() . "\n";
    echo "Salaire : " . $this->Salaire . "\n";
    // Afficher date d'embauche de l'employe
    // echo "date d'embauche : " . $this->DateEmbauche . "\n"; 
    echo "ancienneté : " . $this->anciennete() . "ans" . "\n";

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
     * Get the value of DateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    /**
     * Get the value of DateEmbauche
     */ 
    public function getDateEmbauche()
    {

        return $this->DateEmbauche;
    }

    /**
     * Set the value of DateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($DateEmbauche)
    {
        $this->DateEmbauche = $DateEmbauche;

        return $this;
    }

    /**
     * Get the value of Salaire
     */ 
    public function getSalaire()
    {

        return $this->Salaire;
    }

    /**
     * Set the value of Salaire
     *
     * @return  self
     */ 
    public function setSalaire($Salaire)
    {
        $this->Salaire = $Salaire;

        return $this;
    }



}
?>