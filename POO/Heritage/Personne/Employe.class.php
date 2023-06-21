<?php 
class Employe extends Personne {

 protected $salaire ; 

public function __construct($salaire,int $id, string $nom, string $prenom)
{
    parent::__construct($id, $nom, $prenom);
    $this->salaire = $salaire;
}

public function __toString()
{
    return "Son salaire : " . $this->salaire ;
}
}





?>