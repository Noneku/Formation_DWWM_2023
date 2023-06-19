<?php

include_once "personne.class.php";
class Etudiant extends Personne
{

    private string $cne;
  

//initalisation du construct

function __construct($id , $nom , $prenom , $cne){
    
    //construction du construct avec celui du parent
   parent::__construct($id , $nom , $prenom);
   $this->cne = $cne;


    }
    //ToString avec le toString du parent (Personne)
    function __toString()
    {
        return parent::__toString()." mon CNE est : ".$this->getCne();
    }






    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}

?>