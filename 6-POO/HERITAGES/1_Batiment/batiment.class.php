<?php
// Création de la classe batiment classe mère de maison 
class Batiment {
    protected string $adresse;
    protected $superficie;

    public function __construct(string $adresse,string $superficie) {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

    public function __toString() {
        return "Adresse: " . $this->adresse . ", Superficie: " . $this->superficie;
    }
}

?>