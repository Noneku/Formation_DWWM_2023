<?php

class Utilisateur extends Personne {
    private string $login;
    private string $password;
    private string $service;
    private Profil $profil;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $profil) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    // Getters et setters

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getService() {
        return $this->service;
    }

    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    public function getProfil() {
        return $this->profil;
    }

    // Méthodes spécifiques à Utilisateur

    public function calculerSalaire() {
        $salaire = $this->getSalaire();

        if ($this->service === "MN") {
            // Augmentation de 10% pour le Manager
            $salaire *= 1.1;
        } elseif ($this->service === "DG") {
            // Augmentation de 40% pour le Directeur général
            $salaire *= 1.4;
        }

        return $salaire;
    }

    public function affiche() {
        echo "ID: " . $this->getId() . PHP_EOL;
        echo "Nom: " . $this->getNom() . " " . $this->getPrenom() . PHP_EOL;
        echo "Mail: " . $this->getMail() . PHP_EOL;
        echo "Téléphone: " . $this->getTelephone() . PHP_EOL;
        echo "Salaire: " . $this->getSalaire() . PHP_EOL;
        echo "Login: " . $this->login . PHP_EOL;
        echo "Password: " . $this->password . PHP_EOL;
        echo "Service: " . $this->service . PHP_EOL;
        echo "Augmentation calculée: " . $this->calculerSalaire() . PHP_EOL;
        echo "Profil: " . $this->profil->getLibelle() . PHP_EOL;
    }
}

?>
