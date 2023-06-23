<?php


class Personne {

// #protected
// -private
// +public

protected static int $id=1;
protected string $nom;
protected string $prenom;
protected string $mail;
protected string $telephone;
protected float $salaire;


public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
{

    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;

    self::$id;

}

// fonction calculer le salaire
public function calculerSalaire() : float {

// affcihe seulement le salaire au départ
return $this->salaire;

}


// affiche tous les informations Personne
public function afficher() : void {

    echo "ID: ".self::$id++.PHP_EOL;
    echo "NOM: ".$this->nom.PHP_EOL;
    echo "Prenom: ".$this->prenom.PHP_EOL;
    echo "Mail: ".$this->mail.PHP_EOL;
    echo "Tel: ".$this->telephone.PHP_EOL;
    echo "Salaire: ".$this->calculerSalaire().PHP_EOL;

}


}


?>