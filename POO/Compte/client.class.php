
<?php
class Client {
    private int $CIN;
    private string $Nom;
    private string $Prenom;
    private int $Telephone;

    public function __construct($CIN, $Nom, $Prenom, $Telephone) {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Telephone = $Telephone;
    }

    //methode d'accés
  /**
     * Get the value of CIN
     */ 
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @return  self
     */ 
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

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
     * Get the value of Telephone
     */ 
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * Set the value of Telephone
     *
     * @return  self
     */ 
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    // Méthode Afficher()

    public function Afficher() {
        echo "CIN : " . $this->CIN . "<br>";
        echo "Nom : " . $this->Nom . "<br>";
        echo "Prenom : " . $this->Prenom . "<br>";
        echo "Telephone : " . $this->Telephone . "<br>";
    }

   
}

?>