<?php

include_once("vehicule.php");

class Camion extends Vehicule {

     //  PAS BESOIN DE REMETTRE LE CONSTRUCT
    // public function __construct(string $matricule, int $annee, float $prix){

    //     parent::__construct($matricule, $annee, $prix);

    // }


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