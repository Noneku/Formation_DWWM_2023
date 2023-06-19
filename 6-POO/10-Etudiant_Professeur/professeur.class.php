<?php

include_once "employe.class.php";


class Professeur extends Employe
{

    private string $specialite;
  
    

function __construct($specialite, $salaire, $id , $nom , $prenom){
    //construction du construct avec celui du parent, du parent direct
   parent::__construct($id , $nom , $prenom , $salaire);
   
   $this->specialite = $specialite;


    }


//toString avec des les deux généricité Employe et Personne
    function __toString()
    {
        return parent::__toString(parent::__toString())." ma spécialité est : ".$this->getSpecialite();
    }







    

    /**
     * Get the value of specialite
     */ 
    protected function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}

?>