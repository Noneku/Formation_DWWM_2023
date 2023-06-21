<?php


class Point

{
    private float $abcisse;
    private float $ordonnee;
    private float $rayon;

    public function __construct(float $x, float $y, float $rayon)
    {
        $this->abcisse = $x;
        $this->ordonnee = $y;
        $this->rayon = $rayon;
    }


    public function afficher(): void
    {

        echo "CERCLE ($this->abcisse, $this->ordonnee, $this->rayon)";
    }


    public function getPerimetre(): float
    {
        // 2*PI*Rayon
        return 2 * pi() * $this->rayon;
    }

    public function getAire(): float
    {

        // PI*Rayon²
        return pi() * ($this->rayon * $this->rayon);
    }


    public function afficherPoint($a, $b): void {
        
        echo "POINT ($a, $b)";

    }

    public function distance($a, $b): float{

        // distance = √((x_p - x_c)^2 + (y_p - y_c)^2), puissance de 2
        // racine carré = sqrt() c'est à dire multiplier le meme chifre pour avoir le nombre. exemple 4² = 2*2 
        // puissance = pow() c'est multiplier un nombre par le nombre de puissance; exemple 5^5 = 5*5*5*5*5

        $distance = sqrt(pow(($a - $this->getAbcisse() ), 2) + pow(($b - $this->getOrdonnee()), 2));
        return $distance;
    }


    //  Condition IF 
    public function appartient($distance) : bool {

        if ($distance <= $this->rayon) {

            return true;

        } else {

            return false;
        }

    }


    /**
     * Get the value of abcisse
     */
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */
    public function getOrdonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */
    public function setOrdonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }


    /**
     * Get the value of rayon
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}
