<?php

class Employé
{
    private int $matricule;
    public string $nom;
    public string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;



    

    function __construct($matricule, $nom , $prenom , $dateNaissance , $dateEmbauche , $salaire){

        $this->matricule = readline("Votre Matricule : ");
        $this->nom = readline("Votre Nom : ");
        $this->prenom = readline("Votre Prenom : ");
        $this->dateNaissance= readline("Votre date de naissance (jj-mm-aaaa) : ");
        $this->dateEmbauche = readline("Votre date d'embauche (jj-mm-aaaa) : ");
        $this->salaire = readline("Votre salaire : ");
     
    }





    public function calculateAge(){
        $today = new DateTime();
        $birthDateObj = new DateTime($this-> dateNaissance);
        $age = $birthDateObj->diff($today)->y;
        return "Il a ".$age." ans";
        
    }


    public function calculateAncienneté(){
        
        $today = new DateTime();
        $embaucheDateObj = new DateTime($this-> dateEmbauche);
        $ancienneté = $embaucheDateObj->diff($today)->y ;
        return "Il a ".$ancienneté." ans d'ancienneté \n";
    }



    function augmentationDuSalaire(){
        if($this->calculateAncienneté() < 5){
            return $this->salaire = $this->salaire + (($this->salaire * 2 ) / 100);
        }else if($this->calculateAncienneté() < 10){
            return $this->salaire = $this->salaire + (($this->salaire * 5 ) / 100);
        }else {
            return $this->salaire =  $this->salaire + (($this->salaire * 10 ) / 100);
        }
    }


    
    function afficherEmployé(){

        $nomMajuscule = strtoupper($this->nom);
        $prenomMaj = ucfirst(strtolower($this->prenom));
        echo "Matricule : $this->matricule \n"; 
        echo "Nom complet :".$nomMajuscule . " " . "$prenomMaj \n"; 
        
        echo  $this-> calculateAge(). "\n"; 
        echo  $this->calculateAncienneté()."\n"; 
        echo "Salaire : $this->salaire \n"; 
        
        echo"Après augmentation de salaire : \n";
        echo"***************************************\n";
       
        echo "Matricule : $this->matricule \n"; 
        echo "Nom complet :".$nomMajuscule . " " . "$prenomMaj \n"; 
        echo $this-> calculateAge(). "\n"; 
        echo $this->calculateAncienneté()."\n"; 
        echo "Nouveau salaire :".$this->augmentationDuSalaire()."\n";
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
    public function getSalaire(): float
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
     * Get the value of Matricule
     */ 
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * Set the value of Matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}

?>