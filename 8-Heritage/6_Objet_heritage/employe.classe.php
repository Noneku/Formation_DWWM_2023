<?php

abstract class Employe {

protected string $Matricule;
protected string $Nom;
protected string $Prenom;
protected string $Date_de_naissance;


public function __construct($Matricule,$Nom,$Prenom,$Date_de_naissance)
{
    $this->Matricule = $Matricule;
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    $this->Date_de_naissance = $Date_de_naissance;
}


public function getMatricule()
{
return $this->Matricule;
}
public function setMatricule($Matricule)
{
$this->Matricule = $Matricule;

return $this;
}
public function getNom()
{
return $this->Nom;
}
public function setNom($Nom)
{
$this->Nom = $Nom;

return $this;
}
public function getPrenom()
{
return $this->Prenom;
}
public function setPrenom($Prenom)
{
$this->Prenom = $Prenom;

return $this;
}
public function getDate_de_naissance()
{
return $this->Date_de_naissance;
}
public function setDate_de_naissance($Date_de_naissance)
{
$this->Date_de_naissance = $Date_de_naissance;

return $this;
}
public function __toString()
{
    return "Matricule : ".$this->getMatricule()." "."Nom : ". " " .$this->getNom(). " "."Prenom :"." ". $this->getPrenom(). " "."Date_de_naissance :". " " .$this->getDate_de_naissance();
}


abstract public function GetSalaire();

}




















?>