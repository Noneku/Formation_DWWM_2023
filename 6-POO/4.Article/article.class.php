<?php
class Article
{
    private $Référence;
    private $Désignation;
    private $PrixHT;
    private $TauxTVA;


    public function __construct(string $Référence, string $Désignation, float $PrixHT, float $TauxTVA)
    {
        $this-> Référence = $Référence;
        $this->Désignation= $Désignation;
        $this->PrixHT= $PrixHT;


    }

    public function afficherArticle() : void{
        echo "Référence : " . $this->Référence . "\n";
        echo "Désignation : " . $this->Désignation . "\n";
        echo "Prix HT :  " . $this->PrixHT . "\n";
        echo "Le prix TTC est " . $this->CalculerPrixTTC(). "\n";

    }

    public function CalculerPrixTTC() : float{
        $prixTTC = ($this->PrixHT + ($this->PrixHT * $this->TauxTVA / 100));
        return $prixTTC;
        
    }
    // static public function TauxTVA($TauxTVA)
    // {
    //      return self::TauxTVA;
    // }

    public function Référence($Référence)
    {

        return $this -> Référence;
    }

    public function Désignation($Désignation)
    {

        return $this -> Désignation;
    }

    public function PrixHT($PrixHT)
    {
        return $this -> Référence;
    }

    public static function TauxTVA($PrixHT)
    {
        return self::$TauxTVA;
    }
}