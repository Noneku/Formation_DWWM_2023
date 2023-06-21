<?php

//  CLASSE MERE Client 

class Client {

private string $cin;
private string $nom;
private string $prenom;
private int $tel; 



public function __construct(string $cin, string $nom, string $prenom, int $tel)
{
    $this->cin = $cin;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->tel = $tel;

}

// Affichage des informations client
public function afficher() : void {

    echo "Propriétaire du compte :"."\n";
    echo "CIN : $this->cin "."\n";
    echo "NOM : $this->nom "."\n";
    echo "Prenom : $this->prenom "."\n";
    echo "Tel : $this->tel "."\n";
}


/**
 * Get the value of cni
 */ 
public function getCin()
{
return $this->cin;
}

/**
 * Set the value of cni
 *
 * @return  self
 */ 
public function setCin($cin)
{
$this->cin = $cin;

return $this;
}

/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

/**
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}

/**
 * Get the value of tel
 */ 
public function getTel()
{
return $this->tel;
}

/**
 * Set the value of tel
 *
 * @return  self
 */ 
public function setTel($tel)
{
$this->tel = $tel;

return $this;
}

}


?>