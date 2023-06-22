<?php

class Filiere {
    private static $counter = 0;
    private int $id;
    private int $code;
    private int $libelle;
    

    public function __construct($code, $libelle) {
        self::$counter++;
        $this->id = self::$counter;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function __toString(): string{
        return "Filière : {$this->libelle}";
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
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}

?>