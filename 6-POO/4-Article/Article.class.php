<?php

class Article
{

    //Déclaration des attributs de la class
    private int $Reference;
    private string $Designation;
    private float $PrixHT;
    public static $TauxTVA = 20;//declaré une variable static
    private static $nbArticle;


    //Constructeur de la class Article
    public function __construct($Reference,$Designation,$PrixHT)
    {
        $this->Reference = $Reference;
        $this->Designation = $Designation;
        $this->PrixHT = $PrixHT;
        self::$nbArticle++;
    }


    //Methode Calcul du PrixTTc
    public function CalculerPrixTTC(): float
    {

        return $this->PrixHT + ($this->PrixHT * self::$TauxTVA/100);//accéder a une variable static nomdeclass::$attribut(static)

    }
    
    //Methode Afficher les informations
    public function AfficherArticle() : void 
    {

        echo "Référence : ".$this->Reference."\n";
        echo "Désignation : ".$this->Designation."\n";
        echo "Prix HT : ".$this->PrixHT."\n";
        echo "Le Prix TTC : ".$this->CalculerPrixTTC()."\n";


    
    }










    /**
     * Get the value of Reference
     */ 
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Set the value of Reference
     *
     * @return  self
     */ 
    public function setReference($Reference)
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Get the value of Designation
     */ 
    public function getDesignation()
    {
        return $this->Designation;
    }

    /**
     * Set the value of Designation
     *
     * @return  self
     */ 
    public function setDesignation($Designation)
    {
        $this->Designation = $Designation;

        return $this;
    }

    /**
     * Get the value of PrixHT
     */ 
    public function getPrixHT()
    {
        return $this->PrixHT;
    }

    /**
     * Set the value of PrixHT
     *
     * @return  self
     */ 
    public function setPrixHT($PrixHT)
    {
        $this->PrixHT = $PrixHT;

        return $this;
    }

    /**
     * Get the value of TauxTVA
     */ 
    public function getTauxTVA()
    {
        return $this->TauxTVA;
    }

    /**
     * Set the value of TauxTVA
     *
     * @return  self
     */ 
    public function setTauxTVA($TauxTVA)
    {
        $this->TauxTVA = $TauxTVA;

        return $this;
    }
}