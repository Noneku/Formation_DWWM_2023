<?php
include_once "utilisateur.class.php";
class Profil extends Utilisateur
    {
        protected int $id;
        private string $code;
        private string $libelle;

        private static int $nb = 0;
      
        public function __construct($code, $libelle) {
          $this->id = self::$nb++;
          $this->code = $code;
          $this->libelle = $libelle;
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
public function getNb(): int
{
    return self::$nb;
}

/**
 * Set the value of nb
 *
 * @return  self
 */ 
public function setNb(int $newNb): self
    {
        self::$nb = $newNb;

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