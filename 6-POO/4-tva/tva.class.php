<?php

class Article {

    private int $Reference;
    private string $Designation;
    private float $prixHT;
    private static float $tauxTVA;

    function __construct(int $Reference, string $Designation)
{
    $this->Reference = $Reference;
    $this->Designation = $Designation;
    $this->prixHT = 0;
}

public function CalculerPrixTTC(): void{
    $prixTTC = $this->prixHT + ($this->prixHT * self::$tauxTVA/100);
    echo $prixTTC;
}

public function afficherArticle(): void{
    echo "Référence: " . $this->Reference . "\n";
        echo "Désignation: " . $this->Designation . "\n";
        echo "Prix HT: " . $this->prixHT . "\n";
        echo "Taux TVA: " . self::$tauxTVA . "\n";
        echo "Prix TTC: " . $this->calculerPrixTTC() . "\n";
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

    // public static function getTauxTVA(): float {
    //     return self::$tauxTVA;
    // }

    // public static function setTauxTVA(float $tauxTVA): void {
    //     self::$tauxTVA = $tauxTVA;
    // }
    


}



   

?>