<?php
class Filiere{


    private int $id;
    private string $code;
    private string $libelle ;
    private static $counter = 0;
    private  $tabEtudiants; 

 

    function __construct($code , $libelle , $tabEtudiants )

    {
        
        $this-> tabEtudiants = $tabEtudiants;
        $this->code = $code; 
        $this->libelle = $libelle ;
        $this-> id = self::$counter++; 

    }

function __toString()
{
    return "Filière : ".$this->libelle;
   
}



// function affecterEtudiant($filiere){

//     if($this->code == "IT"){
//         $filiere[0][] = $this-> etudiant; 
//         echo "saisie de code 1";
        
//     }

//     elseif($this->code == "Gen"){
//         $filiere[1][] = $this-> etudiant; 
//         echo "mauvaise saisie de code 2";
//     }
//     elseif($this->code == "Tech"){
//         $filiere[2][] = $this-> etudiant; 
//         echo "saisie de code 3";
//     } 
// }












    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of tabEtudiants
     */ 
    public function getTabEtudiants()
    {
        return $this->tabEtudiants;
    }

    /**
     * Set the value of tabEtudiants
     *
     * @return  self
     */ 
    public function setTabEtudiants($tabEtudiants)
    {
        $this->tabEtudiants = $tabEtudiants;

        return $this;
    }
}



?>