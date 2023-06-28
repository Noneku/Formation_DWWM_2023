<?php

include('Personne.class.php');
include('Profil.class.php');
class Utilisateur extends Personne
{
    private string $login;
    private string $password;
    private string $service;

    private Profil $profil;

    function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, string $code, string $libelle) {

    	$this->login = $login;
    	$this->password = $password;
    	$this->service = $service;

// constructeur de personne la classe parent

        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);

        $this->profil = new Profil($code, $libelle);


        echo "\n";
        $this->affiche() . "\n\n";
        $this->calculerSalaire();
        echo "\n";
    }

    public function calculerSalaire() : float {
            $oldSalaire = $this->salaire;
        
        //augmentation du salaire en fonction du poste

            if($this->profil->getLibelle() === "Manager"){

               $this->salaire *= 1.10;

                echo "\033[33mAttention cette personne posséde une augmentation de 10%\033[0m\n";
                echo "Avant augmentation : $oldSalaire €\n";
                echo "Salaire avec augmentation : $this->salaire €\n";

            } 
            if ($this->profil->getLibelle() === "Directeur general"){

                $this->salaire *= 1.40;

                echo "\033[33mAttention cette personne posséde une augmentation de 40%\033[0m \n";
                echo "Avant augmentation : $oldSalaire €\n";
                echo "Salaire avec augmentation : $this->salaire €\n";
            }

        return $this->salaire;
    }

    public function affiche() : void {
        echo parent::__toString() . "\n";
        echo $this->__toString() . "\n";
        echo "***************\n";

    }

    /**
    * @return string
    */
    public function getLogin(): string {
    	return $this->login;
    }

    /**
    * @param string $login
    */
    public function setLogin(string $login): void {
    	$this->login = $login;
    }

    /**
    * @return string
    */
    public function getPassword(): string {
    	return $this->password;
    }

    /**
    * @param string $password
    */
    public function setPassword(string $password): void {
    	$this->password = $password;
    }

    /**
    * @return string
    */
    public function getService(): string {
    	return $this->service;
    }

    /**
    * @param string $service
    */
    public function setService(string $service): void {
    	$this->service = $service;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Login: {$this->login}, Password: {$this->password}, Service: {$this->service}";
    }



    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }
}