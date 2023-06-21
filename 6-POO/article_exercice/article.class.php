<?php

// La classe est le moule qui sert à fabriquer les objets

class Article {
    
    // Déclaration des attributs 
    private int $reference;
    private string $designation;
    private float $prixHT;
    // Attributs en public static qui est définie une seule fois
    public static $tauxTVA = 0.2;
    public static $nbArticle = 0;

    //  Pas besoin de déclarer l'attribut static dans le constructeur 
    public function __construct (int $reference, string $designation, float $prixHT){

        $this->reference = $reference; 
        $this->designation = $designation;
        $this->prixHT = $prixHT; 

        // Incrémentation de l'attribut static nbArticle
        self::$nbArticle++;
    
    }

    
    public function calculerPrixTTC(): float {

    // Pour déclarer un attrbut A L'INTERIEUR D'UNE CLASSE on utilise "self::$variable"
       return $this->prixHT + ($this->prixHT * self::$tauxTVA);
        
    }
    
    public function afficherArticle() : void {

        // Pour article va afficher l'incrémentation
        echo "Article :" . self::$nbArticle . "\n";
        echo "Référence :".$this->reference."\n";
        echo "Désignation :".$this->designation."\n";
        echo "prix HT :".$this->prixHT."\n";
        echo "Le prix TTC est :".$this->calculerPrixTTC();
    }


    /**
     * Get the value of Reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of Reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of Designation
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of Designation
     *
     * @return  self
     */ 
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of PrixHT
     */ 
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set the value of PrixHT
     *
     * @return  self
     */ 
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }


}


?>