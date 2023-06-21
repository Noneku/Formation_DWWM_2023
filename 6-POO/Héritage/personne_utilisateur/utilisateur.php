<?php

include("personne.php");

class Utilisateur extends Personne {

private string $login;
private string $password;
private string $service; 


public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service)
{

    parent::__construct($nom, $prenom, $mail, $telephone, $salaire);

    $this->login = $login;
    $this->password = $password;
    $this->service = $service; 

}


public function afficher() : void {

    echo parent::afficher();
    echo "Login: ".$this->getLogin().PHP_EOL;
    echo "MDP: ".$this->getPassword().PHP_EOL;
    echo "Service : ".$this->getService().PHP_EOL;

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