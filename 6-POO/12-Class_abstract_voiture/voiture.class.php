<?php
class Voiture extends Vehicule
{


    
    function démarrer(){
        echo "Je démarre la voiture ". $this->getModele()."\n";
    }

    function avancer(){
        echo "VROOOUM j'avance la voiture ".$this->getmodele()."\n";
    }


    function __toString()
    {
        return "C'est une voiture".parent::__toString();
    }

 

}