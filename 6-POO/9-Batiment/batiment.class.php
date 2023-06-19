<?php
class Batiment {
    private string $adresse;
    private int $superficie;

    function __construct(string $adresse, int $superficie) {
    	$this->adresse = $adresse;
    	$this->superficie = $superficie;
    
    }

    /**
    * @return string
    */
    public function getAdresse(): string {
    	return $this->adresse;
    }

    /**
    * @param string $adresse
    */
    public function setAdresse(string $adresse): void {
    	$this->adresse = $adresse;
    }

    /**
    * @return int
    */
    public function getSuperficie(): int {
    	return $this->superficie;
    }

    /**
    * @param int $superficie
    */
    public function setSuperficie(int $superficie): void {
    	$this->superficie = $superficie;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Adresse: {$this->adresse}, Superficie: {$this->superficie}";
    }
}


?>