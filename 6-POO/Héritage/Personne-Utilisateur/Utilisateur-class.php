<?php
// Création d'une class Utilisateur qui hérite de la class Personne
class Utilisateur extends Personne {
    // Définition des attributs
    private string $login;
    private string $password;
    private string $service;

    // Création du constructeur
    public function __construct($id, $nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service)
    {
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this-> login = $login;
        $this-> password = $password;
        $this-> service = $service;   
    }
    
    public function calculerSalaire() {
        // Redéfinition du calcul du salaire
        if ($this->service === "Manager") {
            $this->salaire *= 1.1; // Augmentation de 10% pour les managers
        }elseif ($this->service === "Directeur général") {
            $this->salaire *= 1.4; // Augmentation de 40% pour les directeurs généraux
        }
        return $this->salaire;
    }
    
    public function affiche() {
        // Redéfinition de l'affichage des informations de l'utilisateur
        echo "\n";
        echo "ID : " . $this->id . "\n";
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "Service : " . $this->service . "\n";
        echo "Salaire : " . $this-> salaire. "\n" ;
        // Affichage des autres informations si nécessaire
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
}



?>