<?php
// Définition de la class
class Filiere{

    // Définition des attributs
    private int $id;
    private string $code;
    private string $libelle;
    private  $listeEtud;
    public static $nombreCpt = 0;

    // Constructeur d'initialisation
    public function __construct($code, $libelle, $listeEtud){
        
        
        $this->code = strtoupper($code);
        $this->libelle = strtoupper($libelle);
        $this->listeEtud = $listeEtud;
        self::$nombreCpt++;
        $this ->id = self::$nombreCpt;
    }


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
   

    /**
     * Get the value of listeEtud
     */ 
    public function getListeEtud()
    {
        return $this->listeEtud;
    }

    /**
     * Set the value of listeEtud
     *
     * @return  self
     */ 
    public function setListeEtud($listeEtud)
    {
        $this->listeEtud = $listeEtud;

        return $this;
    }

}







?>