<?php

require_once ("./Vehicule.class.php");


class Voiture extends Vehicule 

{
    public function __construct ($annee, $prix) {
        Vehicule::__construct ($annee, $prix);
    }

    public function demarrer () : void {
        echo "\nJe suis une voiture et je démarre.";
    }

    public function accelerer () : void {
        echo "\nJe suis une voiture et j'accélère.\n";
    }
}



?>