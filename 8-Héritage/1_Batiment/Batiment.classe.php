<?php

class Batiment {
    private string $adresse;
    private string $superficie;

    public function __construct($adresse, $superficie) {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
        return $this;
    }

    public function __toString() {
        return "J'habite le bâtiment à l'adresse: " . $this->getAdresse() . " avec une superficie de: " . $this->getSuperficie();
    }
}
?>
