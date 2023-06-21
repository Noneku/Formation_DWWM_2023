<?php

class Utilisateur extends Personne{

private string $login;
private string $password;
private string $service;

public function __construct($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service)
{
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
    $this->login = $login;
    $this->password = $password;
    $this->service = $service;
    
}

public function getLogin()
{
return $this->login;
}


public function setLogin($login)
{
$this->login = $login;

return $this;
}


public function getPassword()
{
return $this->password;
}


public function setPassword($password)
{
$this->password = $password;

return $this;
}


public function getService()
{
return $this->service;
}


public function setService($service)
{
$this->service = $service;

return $this;
}

public function calculerSalaire() {
    $salaire = $this->getsalaire();

    if ($this->service === "Manager") {
      // Augmentation de 10% pour le Manager
      $salaire *= 0.02;
    } elseif ($this->service === "Directeur général") {
      // Augmentation de 40% pour le Directeur général
      $salaire *= 0.04;
    }

    return $salaire;
}


public function affiche() {
echo "ID :" . $this->getId();echo PHP_EOL;
echo "Nom:".$this->getNom()." ".$this->getPrenom();echo PHP_EOL;
echo "mail:".$this->getMail();echo PHP_EOL;
echo "telephone:".$this->getTelephone();echo PHP_EOL;
echo "Salaire  : " . $this->getSalaire() ;echo PHP_EOL;
echo "Login: " . $this->login;echo PHP_EOL;
echo "password: " . $this->password;echo  PHP_EOL;
echo "Service: " . $this->service;echo PHP_EOL;
echo "Augmentation calculé: " . $this->calculerSalaire();echo PHP_EOL;
}

}











?>