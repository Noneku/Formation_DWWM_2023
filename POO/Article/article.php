<?php
class Article {

private float $reference; 
private string $designation;
private float $prixht;
public static float $tauxtva; 
public static int $nbarticle = 0;

public function __construct(float $reference, string $designation, float $prixht)
    {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixht = $prixht;

      // Incrémentation de l'attribut static nbArticle
      self::$nbArticle++;
    }

/**
     * Get the value of reference
     */ 
    public function getReference(): float
    {
        return $this->reference;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation(): string
    {
        return $this->designation;
    }

    /**
     * Get the value of prixHT
     */ 
    public function getPrixHT(): float
    {
        return $this->prixHT;
    }

    /**
     * Get the value of tauxTVA
     */ 
    public function getTauxTVA(): float
    {
        return self::$tauxTVA;
    }

    /**
     * Get the value of nbArticle
     */ 
    public function getNbArticle()
    {
        return $this->nbArticle;
    }
    
    
    public function calculerprixttc() : float {

        return  $this->prixht + ($this->prixht * self::$tauxtva / 100);
       
       }
       

    // Méthode pour afficher 
public function afficherArticle(): void {
    echo "Désignation:" . $this->designation . "\n";
    echo "Prix HT:" . $this->prixht . "\n";
    echo "Référence: " . $this->reference . "\n";
    echo "Prix TTC:" . $this->calculerprixttc() . "\n";
    echo "Article " . self::$nbArticle . ": \n";
}

}



?>