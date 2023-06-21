<?php

// Déclaration de ma classe utilisateur fille de personne 
class Utilisateur extends Personne {
    
    // Déclaration des variables 
    private string $login;
    private string $password;
    private string $service;

    // constructeur 
    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service) {
   
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
    $this->login = $login;
    $this->password = $password;
    $this->service = $service;
}

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }
   
    public function getPassword(): string
    {
        return $this->password;
    }
    
    public function setPassword(string $password): self
    {
        $this->passeword = $password;

        return $this;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }
public function calculerSalaire() {
        
    // Méthode de calcul du salaire pour les utilisateurs      
    $salaire = $this->getsalaire();

    if ($this->service === "Manager") {
      // Augmentation de 10% pour le Manager
      $salaire *= 0.1;
    } elseif ($this->service === "Directeur général") {
      // Augmentation de 40% pour le Directeur général
      $salaire *= 0.4;
    }

    return $salaire;
        }

    // Affichage
    public function affiche() {
    echo "ID: " . $this->getId() . "\n";
    echo "Nom:".$this->getNom()." ".$this->getPrenom() ."\n";
    echo "mail:".$this->getMail()."\n";
    echo "telephone:".$this->getTelephone()."\n";
    echo "Salaire  : " . $this->getSalaire() ."\n";
    echo "Login: " . $this->login ."\n";
    echo "password: " . $this->password ."\n";
    echo "Service: " . $this->service ."\n";
    echo "Augmentation calculé: " . $this->calculerSalaire() ."\n";
    }
   
    }
