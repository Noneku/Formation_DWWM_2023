<?php
require_once('Vehicule.php');
class Camion extends Vehicule
{
    public function demarrer()
    {
        echo "Je demarre";
    }

    public function accelerer()
    {
        echo "j'accelere";
    }

}
