<?php
class Utilisateur extends Personne
{  
    private Profil $user;
    private string $login;
    private string $password;
    private string $service;

//constructeur de la class
    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$libelle,$code,$login,$service)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
        $this->user = new Profil($libelle,$code);
        $this->login = $login;
        $this->salaire = $salaire;
        $this->service = $service;
    }


//afficher les informations
    public function Afficher()
    {
        echo "Login : ".$this->login."\nService : ".$this->service."\nnom : ".$this->nom."\nprenom : ".$this->prenom."\nEmail : ".$this->mail."\nTelephone : ".$this->telephone."\nSalaire : ".$this->salaire;
    }

    //calcul du salaire
    public function calculerSalaire(): float
    {

        if($this->user->getLibelle()=="Manager")
            {

                return $this->salaire*=1.10;

            }elseif ($this->user->getLibelle()=="Directeur") 
            {

                return $this->salaire*=1.40;

            }else

                return $this->salaire;

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
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

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