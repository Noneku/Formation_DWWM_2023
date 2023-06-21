<?php


class Employe extends personne{

private float $salaire;

public function __construct($id,$nom,$prenom,$salaire)
{
    parent::__construct($id,$nom,$prenom);
    $this->salaire = $salaire;
}


public function getSalaire()
{
return $this->salaire;
}


public function setSalaire($salaire)
{
$this->salaire = $salaire;

return $this;
}
public function __toString()
{
    return parent::__toString(). "et mon salaire est :"." ".$this->getSalaire()." "."euro";
}

}













?>