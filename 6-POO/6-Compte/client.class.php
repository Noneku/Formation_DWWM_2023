<?php

class Client {


    private string $cin ;
    private string $Nom ;
    private string $Prenom;
    private string $Tel;

    function __construct($cin,$Nom,$Prenom,$Tel)
    {

        $this->cin =$cin ;
        $this->Nom = $Nom ;
        $this->Prenom = $Prenom ;
        $this->Tel = $Tel ;

        
    }

   

    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

        /**
         * Get the value of Nom
         */ 
        public function getNom()
        {
                return $this->Nom;
        }

        /**
         * Set the value of Nom
         *
         * @return  self
         */ 
        public function setNom($Nom)
        {
                $this->Nom = $Nom;

                return $this;
        }

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Tel
     */ 
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set the value of Tel
     *
     * @return  self
     */ 
    public function setTel($Tel)
    {
        $this->Tel = $Tel;

        return $this;
    }


    function AfficherClient () : void {

        echo " Donner le cin: " . $this->cin . "\n";
        echo " Donner le Nom: " . $this->Nom . "\n";
        echo "  Donner le Prenom: " . $this->Prenom . "\n";
        echo "Donner le Telephone  " . $this->Tel . "\n";

    }
}





?>