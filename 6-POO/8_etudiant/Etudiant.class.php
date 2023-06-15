<?php

class Etudiant{

    private   int $id;
    private string $nom;
    private string $prenom;
    private string $datedeNaissance;
    private static int $count=0;

    //Constructeur de la class
    public function __construct($nom,$prenom,$datedeNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datedeNaissance = $datedeNaissance;
        $this->id = self::$count++;

    }

    //Transforme en chaine de caractères
    public function __toString()
    {
        return "Je suis ".$this->nom." ". $this->prenom." ma date de naissance est ".$this->datedeNaissance;
    }




    //Getter et Setter


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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