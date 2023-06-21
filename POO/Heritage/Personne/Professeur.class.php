<?php 
class Professeur extends Employe{
private string $specialite; 


public function __construct(string $specialite, $salaire,int $id, string $nom, string $prenom )
{
    parent::__construct($salaire,$id, $nom, $prenom);
    $this->specialite = $specialite;
}
public function __toString()
{
    return "Sa sprecialite : " . $this->specialite ;
}

}


?>