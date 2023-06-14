<?php
class Employe
{

    //Declaration des attributs
    private int $matricule;
    private string $nom;
    private string $prenom;
    private  $datedeNaissance;
    private string $dateEmbauche;
    private float $salaire=0;

    //constructeur de la class
    public function __construct($matricule,$nom,$prenom,$datedeNaissance,$dateEmbauche,$salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datedeNaissance=$datedeNaissance; 
        $this->dateEmbauche=$dateEmbauche;  
        $this->salaire = $salaire;
    }

    //Calcul l'age de l'employe
    public function Age()
    {
       
        $today=new DateTime(); 
        $dateNaisssance=new DateTime($this->datedeNaissance);
        $age = $dateNaisssance->diff($today)->y;
        return $age;
       
   }
    //Calcul l'anciennete de l'employe
    public function Anciennete()
    {
        $today=new DateTime(); 
        $dateEmbauche=new DateTime($this->dateEmbauche);
        $anciennete= $dateEmbauche->diff($today)->y;
       
        return $anciennete;
    }

    //calcul l'augmentation en fonction de l'anciennete
    public function Augmentation():int
    {

        if ($this->Anciennete()<5) {

           return $this->salaire+=($this->salaire*0.02);

        }elseif ($this->Anciennete()<10) {

            return $this->salaire+=($this->salaire*0.05);

        }else{

            return $this->salaire+=($this->salaire*0.10);

        }

    }
   //Afficher les information de l'employe
   public function Afficher():void
   {

       echo"************************\n";
       echo "Matricule : ".$this->matricule."\n";
       echo "Nom Complet : ".strtoupper($this->nom)." ".ucfirst($this->prenom)."\n";
       echo "Age : ".$this->Age()."\n";
       echo "Anciennete : ".$this->Anciennete()."\n";
       echo "Salaire : ".$this->salaire."\n";
       echo"\n";
       echo "Aprés application de l'augmentation\n\n";
       echo "Matricule : ".$this->matricule."\n";
       echo "Nom Complet : ".strtoupper($this->nom)." ".ucfirst($this->prenom)."\n";
       echo "Age : ".$this->Age()."\n";
       echo "Anciennete : ".$this->Anciennete()."\n";
       echo "Salaire : ".$this->Augmentation()."\n";
    

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
     * Get the value of datedeNaissance
     */ 
    public function getDatedeNaissance()
    {
        return $this->datedeNaissance;
    }

    /**
     * Set the value of datedeNaissance
     *
     * @return  self
     */ 
    public function setDatedeNaissance($datedeNaissance)
    {
        $this->datedeNaissance = $datedeNaissance;

        return $this;
    }
}





?>