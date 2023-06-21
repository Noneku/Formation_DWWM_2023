<?php 


class Etudiant extends personne{

private string $cne;

public function __construct($id,$nom,$prenom,$cne)
{
    parent::__construct($id,$nom,$prenom);
    $this->cne = $cne;
}



public function getCne()
{
return $this->cne;
}


public function setCne($cne)
{
$this->cne = $cne;

return $this;
}

public function __toString()
{
    return parent::__toString()." "."et mon cne est :" . " ".$this->getCne();
}
}





















?>