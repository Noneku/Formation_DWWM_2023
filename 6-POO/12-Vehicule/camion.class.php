<?php
class Camion extends Vehicule
{


    
    function démarrer(){
        echo "Je démarre le camion ". $this->getModele()."\n";
    }

    function avancer(){
        echo "VROOOM j'avance le camion ".$this->getModele()."\n";
    }
    
    function __toString()
    {
        return "C'est un camion".parent::__toString();
    }
 

}