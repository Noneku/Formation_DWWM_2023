<?php
require "../1_Point/Point/point.class.php";

class Cercle
{

    private Point $centre;
    private int $rayon;
    
    //constructeur de la classe cercle
    public function  __construct(int $abscisse,int $ordonne,int $rayon)
    {
        $this-> centre = new Point($abscisse,$ordonne);
        $this-> rayon = $rayon;
    }

    //calcul du périmetre du cercle
    public function getPerimetre(): float
    {
        return 2*$this->rayon*pi();
    }
    //calcul de l'air du cercle
    public function getSurface(): float
    {
        return pow($this->rayon,2)*pi();
    }

    //fonction appartenance du point au cercle
    public function appartient(Point $point):bool
    {

        $point=new Point($point->getAbcisse(),$point->getOrdonnee());
        $check=pow(($point->getAbcisse()-$this->centre-> getAbcisse()),2)+pow(($point->getOrdonnee()-$this->centre-> getOrdonnee()),2);

        if ($check<=$this->rayon) {

            return true;

        }else{

            return false;

    }

    }

    //affichage des resultats
    public function afficher(Point $point):string
    {
        if($this->appartient($point)){
            return "Cercle(".$this->centre-> getAbcisse().",". $this->centre-> getOrdonnee().",".$this-> rayon.")\nle perimetre est : ".$this->getPerimetre()."\nla surface est : ".$this->getSurface()."\nle point (".$point->getAbcisse().",".$point->getOrdonnee().")\nle point appartient au cercle";
        }else{
            return "Cercle(".$this->centre-> getAbcisse().",". $this->centre-> getOrdonnee().",".$this-> rayon.")\nle perimetre est : ".$this->getPerimetre()."\n la surface est : ".$this->getSurface()."\nle point (".$point->getAbcisse().",".$point->getOrdonnee().")\n le point n'appartient pas au cercle";
        }
        

    }
    

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }




    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }
}