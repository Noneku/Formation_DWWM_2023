<?php

//class Abstract 

abstract class Personne
{

protected int $id;
protected string $nom;
protected string $prenom;
protected string $mail;
protected string $telephone;
protected float $salaire;
public static int $counter = 0;




public function __construct($nom , $prenom , $mail , $telephone , $salaire)
{
    $this->id = self::$counter++;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;
}



//Methode abstraite
abstract function calculerSalaire() : float;









/**
 * Get the value of salaire
 */ 
public function getSalaire()
{
return $this->salaire;
}

/**
 * Set the value of salaire
 *
 * @return  self
 */ 
public function setSalaire($salaire)
{
$this->salaire = $salaire;

return $this;
}
}

?>