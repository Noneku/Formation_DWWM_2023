<?php


class Professeur extends employe
{
    private string $specialite;

    public function __construct(int $id, string $N, string $P,float $s, string $sp)
    {
        parent::__construct($id, $N, $P, $s);
        $this->specialite = $sp;
    }

    public function __toString()
    {
        return parent::__toString()." Ma spécialité est : ".$this->specialite ;
    }



    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}