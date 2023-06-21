<?php

class Developpeur extends Personne{

protected string $specialite;

public function __construct($nom,$prenom,$salaire,$mail,$telephone,$specialite)
{
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
    $this->specialite = $specialite;
}

public function getSpecialite()
{
return $this->specialite;
}

public function setSpecialite($specialite)
{
$this->specialite = $specialite;

return $this;
}

public function claculerSalire()
{
    $salaire = $this->getSalaire();

    if ($this->specialite === "PHP") {
        $salaire*= 0.01;
}
        return $salaire;
}
public function afficher(){

echo "ID :"." ".$this->getId()." "."le salaire du developpeur :"."".$this->getNom(). " ".$this->getPrenom()." ". "est :"." ".$this->getSalaire()." "."EUROS ". " "."et sa specialite est :".$this->getSpecialite();echo PHP_EOL;
echo "Mail:".$this->getMail();echo PHP_EOL;
echo "Telephone :"." ".$this->getTelephone();echo PHP_EOL;

}
}
















?>