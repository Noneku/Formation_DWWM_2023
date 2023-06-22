<?php 

class Profil extends Utilisateur {
private string $code;
private string $libelle;


public function __construct( $id, string $nom, string $prenom, string $mail, string $telephone, string $salaire, string $login, string $password,  string $service, string $code, string $libelle )
{
    
    parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service); 
    $this -> code = $code;
    $this -> libelle = $libelle;

}
 public function __toString()
 {
    return "ID : " . $this->id  .  ", Nom : " .  $this->nom . ", Prénom : " .  $this->prenom . ", Email : " .  $this->mail . ", Téléphone : " .  $this->telephone . ", Salaire : " . $this->salaire . ", Login : " . parent::getLogin() . ", Password : ". parent::getPassword(). ", Service : ". parent::getService().  ", Code : " .  $this->code. ", Libellé : " .$this->libelle." ;";
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