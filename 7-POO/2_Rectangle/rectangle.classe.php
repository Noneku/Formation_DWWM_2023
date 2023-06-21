<?php

class Rectangle{

private $Longueur;
private $Largeur;

function __construct(float $x, float $y)
{
    $this->Longueur = $x;
    $this->Largeur = $y;

}

public function Périmètre(){
$d = ( ($this->Longueur + $this->Largeur) * 2);
return "la norme du Périmètre (".$this->Longueur.","."$this->Largeur".") est : "."$d";

}



public function Aire(){
$F = ($this->Largeur * $this->Longueur);
return "\n"."la norme du Aire (".$this->Longueur.","."$this->Largeur".") est : "."$F";

}



public function getLongueur()
{
return $this->Longueur;
}


public function setLongueur($Longueur)
{
$this->Longueur = $Longueur;

return $this;
}


public function getLargeur()
{
return $this->Largeur;
}


public function setLargeur($Largeur)
{
$this->Largeur = $Largeur;

return $this;
}

public function EstCarre(): bool
{
if ($this->Longueur == $this->Largeur) {
        return true;
    } else {
        return false;
    }
}

public function afficherRectangle() :void{

    echo "Longueur: " . $this->Longueur . "\n";
    echo "largeur: " . $this->Largeur . "\n";
    echo "périmètre: " . $this->Périmètre() . "\n";
    echo "Aire: " . $this->Aire() . "\n";
    if($this->EstCarre()) {
        echo "est un carré". "\n";
    }else
        echo "n'est pas un carré". "\n";
    }
 


}






?>