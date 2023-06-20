<?php


class Personne 
{

    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;


    private static $nb = 0; 
   


    function __construct($nom , $prenom , $mail , $telephone , $salaire)
    {
        
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> mail = $mail;
        $this-> telephone = $telephone;
        $this->salaire = $salaire;

        $this->id = self::$nb++;
    }



    public function calculerSalaire(){

        return $this->salaire;
            
        }

    public function affiche(): void{
            
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