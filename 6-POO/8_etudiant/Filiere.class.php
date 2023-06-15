<?php
class Filliere
{
    private int $id;
    private string $code;
    private string $nom;
    private array $liste;
    private static int $count=0;

    public function __construct($code,$nom,$liste)
    {   
        $this->code = $code;
        $this->nom = $nom;
        $this->liste = $liste;
        $this->id = self::$count++;
    }

    
    //Afficher la fillière ainsi que la liste des étudiants de cette dernière
    public function __toString()
     {
        $listeEtud=implode("\n",$this->liste);//créé une chaine de caractère a partir d'un tableau
        return "Fillière : ".$this->nom."\n".$listeEtud;
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of liste
     */ 
    public function getListe()
    {
        return $this->liste;
    }

    /**
     * Set the value of liste
     *
     * @return  self
     */ 
    public function setListe($liste)
    {
        $this->liste = $liste;

        return $this;
    }
}


?>