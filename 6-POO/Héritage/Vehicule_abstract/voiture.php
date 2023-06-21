<?php

include("vehicule.php");

class Voiture extends Vehicule {



    public function demarrer(): void {
    
        echo "Vrooooouuummm";
    
    }
    
    public function accelerer(): void {
    
        echo "J'acceleereeeeee !";
    }
    
    
    public function __toString(){
    
    return parent::__toString();
    
    }



}

?>