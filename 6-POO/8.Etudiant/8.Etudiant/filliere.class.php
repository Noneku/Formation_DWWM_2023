<?php


class filliere
{
    private string $id;
    private string $code;
    private string $libelle;
    private array $listEtud;
    public static int $cpt = 0;


    public function __construct(string $C, string $L, array $LE)
    {
        $this->code = $C;
        $this->libelle = $L;
        $this->listEtud = $LE;
        self::$cpt++;
        $this->id = self::$cpt;
    }

        // lier les étudiant à leur fillière
        public function __toString () : string {
            $etud = implode("\n", $this->listEtud);
            return "\nfillière : " .$this->libelle. "\n" .$etud;
        }

    /**
     * Get the value of id
     */ 
    public function getId($id)
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
     * Get the value of listEtudiant
     */ 
    public function getListEtudiant()
    {
        return $this->listEtud;
    }

    /**
     * Set the value of listEtudiant
     *
     * @return  self
     */ 
    public function setListEtudiant($listEtud)
    {
        $this->listEtud = $listEtud;

        return $this;
    }

    /**
     * Get the value of cpt
     */ 
    public function getCpt()
    {
        return $this->cpt;
    }

    /**
     * Set the value of cpt
     *
     * @return  self
     */ 
    public function setCpt($cpt)
    {
        $this->cpt = $cpt;

        return $this;
    }
}