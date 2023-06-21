<?php

class Etudiant 
{
    private string $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    public static int $cpt = 0;




    public function __construct(string $N, string $P, int $dN)
    {
        $this->nom = $N;
        $this->prenom = $P;
        $this->dateNaissance = $dN;
        self::$cpt++;
        $this->id = self::$cpt;

    }
    public function __toString()
    {
        return"Je suis l'étudiant".$this->prenom." ".$this->nom."ma date de naissance est : ".$this->dateNaissance;
    }


   

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


}