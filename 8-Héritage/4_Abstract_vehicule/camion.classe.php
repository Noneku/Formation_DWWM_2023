<?php

class Camion extends Vehicule{


    private static int $count = 0;
    private string $matricule;
    private int $année;
    private float $prix;

    public function __construct($matricule,$année,$prix)
    {
        $this->matricule = ++self::$count;
        $this->année = $année;
        $this->prix = $prix;
    }

    public function getMatricule()
    {
    return $this->matricule;
    }
    
    
    public function setMatricule($matricule)
    {
    $this->matricule = $matricule;
    
    return $this;
    }
    
    
    public function getAnnée()
    {
    return $this->année;
    }
    
    
    public function setAnnée($année)
    {
    $this->année = $année;
    
    return $this;
    }
    
    public function getPrix()
    {
    return $this->prix;
    }
    
    
    public function setPrix($prix)
    {
    $this->prix = $prix;
    
    return $this;

    }
    public function Démarrer(){

        echo "je démarre";
    }

public function Accélérer(){
    echo "j'accélère";
}

    public function __toString()
{
    return "Matricule :". " ".$this->getMatricule() . " " ."et l'année du modèle est :". " ".$this->getAnnée(). " ". "avec un prix de:". " ".$this->getPrix(). " ". "euros";
}

    
}










?>