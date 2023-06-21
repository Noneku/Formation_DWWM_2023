<?php
class Voiture extends Vehicule
{



    public function __toString()
    {
        return "une Voiture \nMatricule : ".$this->getMatricule()."\nAnnée : ".$this->getAnnee()."\nPrix : ".$this->getPrix();
    }

    public function Demarrer()
    {
        echo "Je suis une Voiture et je Démarre";
    }

    public function Accelerer()
    {
        echo "Je suis une voiture et j'accelère";
    }
}





?>