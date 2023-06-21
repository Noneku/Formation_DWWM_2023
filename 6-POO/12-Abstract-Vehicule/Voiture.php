<?php

require_once('Vehicule.php');


class Voiture extends Vehicule
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
