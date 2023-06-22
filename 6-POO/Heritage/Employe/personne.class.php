<?php
require_once 'execute.php';
 class Personne {

protected  $id;
protected string $nom;
protected string $prenom;
protected string $mail;
protected string $telephone;
protected  $salaire;


public function __construct( $id, string $nom, string $prenom, string $mail, string $telephone, string $salaire)
{
    
   $this -> id = $id; 
   $this -> nom = $nom;
   $this -> prenom = $prenom;
   $this -> mail = $mail;
   $this -> telephone = $telephone;
   $this -> salaire = $salaire;
}

// public function __toString()
// {
//     return "Votre ID : " . $this->id . ", votre nom : " . $this->nom . ", votre prénom : " . $this->prenom . ", votre adresse e-mail : " . $this->mail . ", votre numéro de téléphone : " . $this->telephone . ", votre salaire : " . $this->salaire . " ;";

//  }


public function calculerSalaire(){

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

/**
 * Get the value of mail
 */ 
public function getMail()
{
return $this->mail;
}

/**
 * Set the value of mail
 *
 * @return  self
 */ 
public function setMail($mail)
{
$this->mail = $mail;

return $this;
}

/**
 * Get the value of telephone
 */ 
public function getTelephone()
{
return $this->telephone;
}

/**
 * Set the value of telephone
 *
 * @return  self
 */ 
public function setTelephone($telephone)
{
$this->telephone = $telephone;

return $this;
}

/**
 * Get the value of salaire
 */ 
public function getSalaire()
{
return $this->salaire;
}

/**
 * Set the value of salaire
 *
 * @return  self
 */ 
public function setSalaire($salaire)
{
$this->salaire = $salaire;

return $this;
}
}


?>