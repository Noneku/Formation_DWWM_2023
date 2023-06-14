

<?php

//Définir class Article
class Article {
    private string $référence;
    private string $désignation;
    private float $prixHT;
    private static float $tauxTVA = 20;
    private static $nombreArticles = 0;

//initialiser les attributs dans le constructeur
    public function __construct(string $référence, string $désignation, float $prixHT) {
        $this->référence = $référence;
        $this->désignation = $désignation;
        $this->prixHT = $prixHT;
        self::$nombreArticles++;
    }


    public function readLine() {
        return readline("Entrez une valeur : ");
    }



    public function getRéférence(): string {
        return $this->référence;
    }

    public function setRéférence(string $référence): void {
        $this->référence = $référence;
    }

    public function getDésignation(): string {
        return $this->désignation;
    }

    public function setDésignation(string $désignation): void {
        $this->désignation = $désignation;
    }

    public function getPrixHT(): float {
        return $this->prixHT;
    }

    public function setPrixHT(float $prixHT): void {
        $this->prixHT = $prixHT;
    }

    public static function getTauxTVA(): float {
        return self::$tauxTVA;
    }

    public static function setTauxTVA(float $tauxTVA): void {
        self::$tauxTVA = $tauxTVA;
    }

   

    public function calculerPrixTTC(): float {
        return $this->prixHT + ($this->prixHT * self::$tauxTVA / 100);
    }

    public function afficherArticle(): void {
        echo "Référence: " . $this->référence . "\n";
        echo "Désignation: " . $this->désignation . "\n";
        echo "Prix HT: " . $this->prixHT . "\n";
        echo "Taux TVA: " . self::$tauxTVA . "%\n";
        echo "Prix TTC: " . $this->calculerPrixTTC() . "\n";
        echo "Article " . self::$nbArticle . ": \n";
    }

    public static function getNombreArticles(): int {
        return self::$nombreArticles;
    }


    
    
}




?>