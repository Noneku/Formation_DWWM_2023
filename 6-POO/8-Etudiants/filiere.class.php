<?php



class Filiere 

{
    private int $id;
    public string $code;
    public string $libelle;
    public static int $cpt = 0;
    private array $listeEtu;

    public function __construct ($code, $libelle, $listeEtu) {
        $this->code = $code;
        $this->libelle = $libelle;
        $this->listeEtu = $listeEtu;

        self::$cpt++;
        $this->id = self::$cpt;
    }


    public function __toString () : string {
        $etudiant = implode($this->id, $this->listeEtu);
        return "\nFilière : " .$this->libelle. "\n" .$etudiant;
    }


    // Code : " .$this->code. "\nLibellé : " .$this->libelle. "\n 


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
     * Get the value of listeEtu
     */ 
    public function getListeEtu()
    {
        return $this->listeEtu;
    }

    /**
     * Set the value of listeEtu
     *
     * @return  self
     */ 
    public function setListeEtu($listeEtu)
    {
        $this->listeEtu = $listeEtu;

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
}


?>