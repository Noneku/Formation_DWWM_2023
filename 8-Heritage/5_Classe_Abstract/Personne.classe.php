<?php

abstract class Personne{
protected static int $count = 0;
protected int $id;
protected string $nom;
protected string $prenom;
protected string $mail;
protected string $telephone;
protected string $salaire;


public function __construct($nom,$prenom,$mail,$telephone,$salaire)
{
    $this->id = ++self::$count;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;

}


public function getId()
{
return $this->id;
}

public function setId($id)
{
$this->id = $id;

return $this;
}
 
public function getNom()
{
return $this->nom;
}


public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

 
public function getPrenom()
{
return $this->prenom;
}

 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}

public function getMail()
{
return $this->mail;
}


public function setMail($mail)
{
$this->mail = $mail;

return $this;
}

    public function getTelephone()
    {
        return $this->telephone;
    }


    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

public function getSalaire()
{
return $this->salaire;
}
 
public function setSalaire($salaire)
{
$this->salaire = $salaire;

return $this;
}


public function calculerSalaire(){}
}



















?>