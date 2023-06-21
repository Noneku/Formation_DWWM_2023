<?php 

class Personne {
protected int $id ;
protected string $nom;
protected string $prenom;

public function __construct(int $id, string $nom, string $prenom )
{
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
}

public function __toString()
{
    return "Son nom est : " . $this->nom . ", son prenom est : " . $this->prenom. "son id est : " . $this->id ;
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
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}
}

?>