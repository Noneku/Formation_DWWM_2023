<?php

class Article 

{
    private int $reference;
    private string $designation;
    private int $prixHT;
    public static float $tauxTVA;
    public static int $cpt = 0;

    // Création du constructeur : 
    public function __construct ($reference, $designation, $prixHT) {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHT = $prixHT;
        self::$cpt++;
    }

    // Fonction qui permet de calculer le prix TTC :
    public function calculerPrixTTC() : float {
        $prixTTC = $this->prixHT + ($this->prixHT * self::$tauxTVA/100);
        return $prixTTC;
    }

    // Fonction qui affiche les caractéristiques de l'article :
    public function afficherArticle() : void {
        echo "Article " .self::$cpt. ": \n";
        echo "Référence de l'article : " .$this->reference. ".\n";
        echo "Designation de l'article : " .$this->designation. ".\n";
        echo "Prix HT : " .$this->prixHT. " €.\n";
        echo "Le prix TTC est de : " .$this->calculerPrixTTC(). " €.\n";
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
     * Get the value of prixHT
     */ 
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set the value of prixHT
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