<?php
// Création d'une class PRofil qui hérite de la class Utilisateur
class Profil extends Utilisateur {
    // Définition des attributs
    
    private string $code;
    private string $libelle;

    // Création du constructeur
    public function __construct($id, $nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $code, $libelle)
    {   
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service);
        $this-> code = $code;
        $this-> libelle = $libelle;
        
    }



  
    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}





?>