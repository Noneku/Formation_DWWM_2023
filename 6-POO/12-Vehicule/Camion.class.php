<?php
class Camion extends Vehicule
{



    public function __toString()
    {
        return "Un Camion Matricule : ".$this->getMatricule()."\nAnnée : ".$this->getAnnee()."\nPrix : ".$this->getPrix();
    }


    public function Demarrer()
    {
        echo "Je suis un Camion et je Démarre";
    }

    public function Accelerer()
    {
        echo "Je suis un Camion et j'accelère";
    }
}






?>