<?php


class Personne 
{

    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;


    private static $nb; 


    function __construct($nom , $prenom , $mail , $telephone)
    {
        
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> mail = $mail;
        $this-> telephone = $telephone;

        $id = self::$nb++;
    }



    public function calculerSalaire(): float{
            
        }

    public function affiche(): void{
            
        }
       
    }









    /**
     * Get the value of nb
     */ 
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set the value of nb
     *
     * @return  self
     */ 
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }
}

?>