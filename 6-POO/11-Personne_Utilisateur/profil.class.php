<?php

class Profil
{
private int $id;


private string $code;
private string $libelle;


private static $nb = 0; 


public function __construct($code , $libelle )

{   //Injection de dépendance de la class Utilisateur dans le construct de Profil
    

    $this->code = $code;
    $this->libelle = $libelle;

    $this->id = self::$nb++;

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