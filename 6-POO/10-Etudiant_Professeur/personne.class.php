<?php
//class général

class Personne
{
//delcaration
    protected int $id;
    protected string $nom;
    protected string $prenom;


//initalisation du construct
function __construct($id , $nom , $prenom){
    $this-> id = $id;
    $this-> nom = $nom;
    $this->prenom = $prenom;

    }

    //fonction to string de Personne
    function __toString()
    {
        return "Je suis ".$this->nom." ". $this->prenom;
    }


}

?>