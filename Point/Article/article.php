<?php
class Article {

private int $reference; 
private string $designation;
private float $prixht;
public static $tauxtva; 
private static int $nbarticle;

public function __construct(int $reference, string $designation, float $prixht, float $tauxtva)
    {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixht = $prixht;
        $this->tauxtva = $tauxtva;
    }






public function calculerprixttc() {
$prixttc = $this->prixht + ($this->prixht * $this->tauxtva / 100);
return $prixttc;

}
// Méthode pour afficher 
public function afficherArticle() {
    echo "Désignation:" . $this->designation . "\n";
    echo "Prix HT:" . $this->prixht . "\n";
    echo "Taux TVA:" . $this->tauxtva . "%\n";
    echo "Prix TTC:" . $this->calculerprixttc() . "\n";
}


/**
 * Get the value of reference
 */ 
public function getReference()
{
return $this->reference;
}

/**
 * Set the value of reference
 *
 * @return  self
 */ 
public function setReference($reference)
{
$this->reference = $reference;

return $this;
}

/**
 * Get the value of designation
 */ 
public function getDesignation()
{
return $this->designation;
}

/**
 * Set the value of designation
 *
 * @return  self
 */ 
public function setDesignation($designation)
{
$this->designation = $designation;

return $this;
}

/**
 * Get the value of prixht
 */ 
public function getPrixht()
{
return $this->prixht;
}

/**
 * Set the value of prixht
 *
 * @return  self
 */ 
public function setPrixht($prixht)
{
$this->prixht = $prixht;

return $this;
}

/**
 * Get the value of tauxtva
 */ 
public function getTauxtva()
{
return $this->tauxtva;
}

/**
 * Set the value of tauxtva
 *
 * @return  self
 */ 
public function setTauxtva($tauxtva)
{
$this->tauxtva = $tauxtva;

return $this;
}

/**
 * Get the value of nbarticle
 */ 
public function getNbarticle()
{
return $this->nbarticle;
}

/**
 * Set the value of nbarticle
 *
 * @return  self
 */ 
public function setNbarticle($nbarticle)
{
$this->nbarticle = $nbarticle;

return $this;
}
}



?>