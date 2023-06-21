<?php

class Utilisateur extends Personne
{
    private string $login;
    private string $password;
    private string $service;



    public function __construct(int $id, string $N, string $P, string $M, string $T, float $S, string $L, string $Pwd, string $Srv) 
    {
        parent::__construct($id, $N, $P, $M, $T, $S);
        $this->login= $L;
        $this->password= $Pwd;
        $this->service= $Srv;


    }
    public function __toString()
    {
        return "Je suis " . parent::__toString();
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