<?php
// Création de la class
class Personne{

    // Définition des attributs
    protected   $id;
    protected string $nom;
    protected string $prenom;

    // Définition du constructeur
    public function __construct( $id, string $nom, string $prenom)
    {
        $this-> id = $id;
        $this-> nom = $nom;
        $this-> prenom = $prenom;
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
    public function __toString():string
    {
        return "Bonjour mon numéro d'identifiant est le ".$this->id. ", mon nom de famille est " . $this->nom . ", Mon prénom est " . $this->prenom;
    }
}

?>