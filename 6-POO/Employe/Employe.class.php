<?php

 class Employe {

    private int $Matricule ;
    private string $Nom;
    private string $Prenom;
    private string $DateNaissance;
    private string $DateEmbauche;
    private int $salaire;



public function __construct (int $Matricule, string $Nom, string $Prenom, string $DateNaissance, string $DateEmbauche, int $salaire){
    $this->Matricule = $Matricule; 
     $this->Nom = $Nom; 
     $this->Prenom = $Prenom;
     $this->DateNaissance = $DateNaissance;
     $this->DateEmbauche = $DateEmbauche;
    $this->salaire = $salaire;

}

public function age() {
    $dateAujourdhui = date('Y/m/d');
    $dateNaissance = date_create($this->DateNaissance);
    $diff = date_diff($dateNaissance, date_create($dateAujourdhui));
    return $diff->format('%Y');
}

public function anciennete() {
    $dateAujourdhui = date('Y/m/d');
    $dateEmbauche = date_create($this->DateEmbauche);
    $diff2 = date_diff($dateEmbauche, date_create($dateAujourdhui));
    return $diff2->format('%Y'); 
}



public function augmentationDuSalaire() {
    $Anciennete = $this->anciennete();
    if ($Anciennete <= 5) {
        return $this->salaire = $this->salaire * 1.02;
    } elseif ($Anciennete <= 10) {
        return $this->salaire = $this->salaire * 1.05;
    }
    else { 
        return $this->salaire = $this->salaire * 1.10;
}

}

//methode afficher employé
public function AfficherEmploye() {
    echo "Nom : " . $this->Nom . "<br>";
    echo "Age : " . $this->age() . "<br>";
    echo "Ancienneté : " . $this->anciennete() . " ans<br>";
    echo "Salaire : " . $this->salaire . " euros<br>";
}


    /**
     * Get the value of Matricule
     */ 
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * Set the value of Matricule
     *
     * @return  self
     */ 
    public function setMatricule($Matricule)
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    /**
     * Get the value of Nom
     */ 
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

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