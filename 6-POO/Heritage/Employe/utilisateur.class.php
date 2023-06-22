<?php
class Utilisateur extends Personne {
private string $login;
private string $password;
private string $service;


public function __construct(string $login, string $password, string $service, $id, string $nom, string $prenom, string $mail, string $telephone, string $salaire )
{
      parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
    $this -> login = $login;
    $this -> password = $password;
    $this -> service = $service;
}

 public function __toString()
 {
     return "ID : " . $this->id  .  ", Nom : " .  $this->nom . ", Prénom : " .  $this->prenom . ", Email : " .  $this->mail . ", Téléphone : " .  $this->telephone . ", Salaire : " . $this->salaire  . ", le login : " . $this->login . ", le mot de passe : " . $this->password . ", le service : " . $this->service . " ;";
 }

/*calcule du salaire*/ 
public function calculerSalaire()  {
    if ($this->service === "Manager") {
         $this->salaire *= 1.1; // Augmentation de 10% pour les managers
    } elseif ($this->service === "Directeur général") {
         $this->salaire *= 1.4; // Augmentation de 40% pour les directeurs généraux
    } 
    
    return;



}




/**
 * Get the value of login
 */ 
public function getLogin()
{
return $this->login;
}

/**
 * Set the value of login
 *
 * @return  self
 */ 
public function setLogin($login)
{
$this->login = $login;

return $this;
}

/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}

/**
 * Get the value of service
 */ 
public function getService()
{
return $this->service;
}

/**
 * Set the value of service
 *
 * @return  self
 */ 
public function setService($service)
{
$this->service = $service;

return $this;
}


}
?>