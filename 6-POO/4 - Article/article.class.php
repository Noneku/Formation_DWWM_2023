<?php

class Article
{
    private int $Reference;
    private string $Designation;
    private float $PrixHT;
    private static int $TauxTVA = 20;
    public static int $cpt = 0;

    public function __construct(int $Reference, string $Designation, float $PrixHT)
    {
        $this->Reference = $Reference;
        $this->Designation = $Designation;
        $this->PrixHT = $PrixHT;
        self::$cpt++;
    }

    function calculerPrixTTC(): float
    {
        return $this->PrixHT + ($this->PrixHT * self::$TauxTVA / 100);
    }

    function afficherArticle(): void
    {
        echo "Reference: " . $this->Reference . "\n";
        echo "Designation: " . $this->Designation . "\n";
        echo "Prix hors taxe: " . $this->PrixHT . "€" . "\n";
        echo "Prix TTC: " . $this->calculerPrixTTC() . "€" . "\n";;
    }
    
    public function getReference(): string
    {
        return $this->Reference;
    }

    public function setReference($Reference): Article
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getDesignation(): string
    {
        return $this->Designation;
    }

    public function setDesignation($Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }


    public function getPrixHT(): string
    {
        return $this->PrixHT;
    }

    public function setPrixHT($PrixHT): self
    {
        $this->PrixHT = $PrixHT;

        return $this;
    }

    public function getTauxTVA(): string
    {
        return self::$TauxTVA;
    }


    public function setTauxTVA($TauxTVA): self
    {
        self::$TauxTVA = $TauxTVA;

        return $this;
    }

}
