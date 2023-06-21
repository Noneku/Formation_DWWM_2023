<?php

require_once ("./Vehicule.class.php");

class Camion extends Vehicule 

{
    public function __construct ($annee, $prix) {
        Vehicule::__construct ($annee, $prix);
    }

    public function demarrer () {
        echo "\nJe suis un camion et je démarre.";
    }

    public function accelerer () {
        echo "\nJe suis un camion et j'accélère.\n";
    }
}


?>