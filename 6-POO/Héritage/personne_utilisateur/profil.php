<?php

class Profil {

    
    private string $code;
    private string $libelle;


    public function __construct(string $code, string $libelle)
    {
        $this->code = $code;
        $this->libelle = $libelle;
    }


    // affiche les informations des différents profils qui vont etre crées
    public function afficher(): void
    {
        // echo parent::afficher();
        echo "Code: " . $this->getCode() . PHP_EOL;
        echo "libelle: " . $this->getLibelle() . PHP_EOL;
    }




    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }


    /**
     * Get the value of ID
     */
    // public function getID()
    // {
    //     return $this->ID;
    // }

    // /**
    //  * Set the value of ID
    //  *
    //  * @return  self
    //  */
    // public function setID($ID)
    // {
    //     $this->ID = $ID;

    //     return $this;
    // }
}
