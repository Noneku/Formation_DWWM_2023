<?php
class Maison extends Batiment
{
    private int $nbpiece;

    public function __construct($nbpiece,$superficie,$adresse)
    {
        $this->nbpiece = $nbpiece;
        parent::__construct($adresse,$superficie);
    }



    public function __toString()
    {
        return parent::__toString()." et comporte ".$this->nbpiece." pièces";
    }

    /**
     * Get the value of nbpiece
     */ 
    public function getNbpiece()
    {
        return $this->nbpiece;
    }

    /**
     * Set the value of nbpiece
     *
     * @return  self
     */ 
    public function setNbpiece($nbpiece)
    {
        $this->nbpiece = $nbpiece;

        return $this;
    }
}