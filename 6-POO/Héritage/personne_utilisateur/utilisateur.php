<?php


include("personne.php");
include("profil.php");

// La classe utilisateur héritte de la classe Personne
class Utilisateur extends Personne
{

    private Profil $profil;
    private string $login;
    private string $password;
    private string $service;


    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, $code, $libelle)
    {

        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        
        // instanciation d'un profil dans la classe Utilisateur
        $this->profil = new Profil($code, $libelle);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }

    // Calcul du salaire avec augmentation 
    // Condition : si Manager alors augmentation de 10%, si directeur general alors augmentation de 40%, autre on retourne la valeur de départ soit le salaire classic
    // la fonction calculerSalaire est intégré dans la fonction afficher() 

    public function calculerSalaire(): float
    {
        if ($this->profil->getLibelle() == 'manager') {

            $montantAugmentation = $this->salaire * 0.10;
            return $this->salaire + $montantAugmentation;
        } elseif ($this->profil->getLibelle() == 'directeur general') {

            $montantAugmentation = $this->salaire * 0.40;
            return $this->salaire + $montantAugmentation;
        } else {

            return parent::calculerSalaire();
        }
    }

    // afficher les informations de l'utilisateur
    public function afficher(): void
    {

        echo parent::afficher();
        echo "Login: " . $this->getLogin() . PHP_EOL;
        echo "MDP: " . $this->getPassword() . PHP_EOL;
        echo "Service : " . $this->getService() . PHP_EOL;
        // Affiche les infos profil
        echo $this->profil->afficher() . PHP_EOL;
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
