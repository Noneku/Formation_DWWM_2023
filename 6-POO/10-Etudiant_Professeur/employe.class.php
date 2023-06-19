<?php



class Employe extends Personne
{

    protected float $salaire;
  

    //initalisation du construct
function __construct($id , $nom , $prenom , $salaire){

    //construction du construct avec celui du parent
   parent::__construct($id , $nom , $prenom);
   $this->salaire = $salaire;

    }


function __toString()
{
    return parent::__toString()." mon salaire est : ".$this-> salaire."€";
}

}

?>