<?php
include_once "personne.class.php";

class Utilisateur extends Personne
{
    private string $login;
    private string $password;
    private string $service;
    private Profil $profil;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, Profil $profil)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    public function calculerSalaire(): float
    {
        if ($this->profil->getCode() == 2) {
            return  $this->salaire = $this->salaire + ($this->salaire * 0.1);
        } else if ($this->profil->getCode() == 5) {
            return $this->salaire = $this->salaire + ($this->salaire * 0.4);
        }
    }

    public function __toString(): string
    {
        return
            parent::__toString() .
            "service: " . $this->service . "\n" .
            "Code: " . $this->profil->getCode() . "\n" .
            "Libelle: " . $this->profil->getLibelle();
    }

    /**
     * Get the value of service
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */
    public function setService($service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of login
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login): self
    {
        $this->login = $login;

        return $this;
    }
}
