<?php

// Création de la classe Utilisateur :

class Utilisateur extends Personne 

{
    private string $login;
    private string $password;
    private string $service;
    private Profil $profil;


    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $code, $libelle) {

        $this->profil = new Profil ($code, $libelle);

        Personne::__construct ($nom, $prenom, $mail, $telephone, $salaire);

        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }


    // Création de la fonction "calculerSalaire" afin de déterminer le nouveau salaire après augmentation pour les métiers Manager & Directeur général :
    public function calculerSalaire () : float {

        if ($this->profil->getLibelle() == "Manager") {
            $this->salaire = $this->salaire * 1.1;
        }

        if ($this->profil->getLibelle() == "Directeur général") {
            $this->salaire = $this->salaire * 1.4;
        }

        return $this->salaire;
    }


    // Création de la fonction toString qui permet d'afficher les attributs que j'ai choisi de chaque nouvel objet :
    public function __toString () : string {
            return "\nNom : " .$this->nom. "\nPrénom : " .$this->prenom. "\nE-mail : " .$this->mail. "\nTéléphone : " .$this->telephone. "\nSalaire : " .$this->salaire. " € \nLogin : " .$this->login. "\nService : " .$this->service. "\nMétier : " .$this->profil->getLibelle(). "\n";
        }


    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}



?>