<?php

declare(strict_types=1);
namespace Camion;

use Vehicule;


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
