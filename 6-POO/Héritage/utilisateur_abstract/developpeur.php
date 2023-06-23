<?php

include('personne.php');

// La classe Developpeur va hétiter de la classe Personne
class Developpeur extends Personne {

    private string $specialite;


public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, $specialite)

{

    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;
    $this->specialite = $specialite;

    self::$id++;

}

// fonction qui calcul le salaire avec augmentation 
public function calculerSalaire() {

$augmentation = $this->salaire * 0.20;
return $this->salaire + $augmentation;

}

// fonction qui affiche les informations du profil manager
public function afficher() : string {


return self::$id. " - "."Le salaire du developpeur $this->nom"." "."$this->prenom est : ". $this->calculerSalaire()." €, sa spécialité : ". $this->getSpecialite();

}



    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }


}





?>