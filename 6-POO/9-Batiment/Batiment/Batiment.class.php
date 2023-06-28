<?php


Class Batiment
{
    protected $adresse;
    protected $superficie;

    public function __construct(string $adresse, float $superficie)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }
  // fonction qui transforme en chaine de caractere 
   public function __toString()
    {
        return "Le bâtiment ce trouve a l'adresse : " . $this->adresse . ", a une superficie de : " . $this->superficie . "mm²";
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return float
     */
    public function getSuperficie(): float
    {
        return $this->superficie;
    }

    /**
     * @param float $superficie
     */
    public function setSuperficie(float $superficie)
    {
        $this->superficie = $superficie;
    }
}