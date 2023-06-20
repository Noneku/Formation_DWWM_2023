<?php

declare(strict_types=1);

namespace null;

class Utilisateur
{
    private string $login;
    private string $password;
    private string $service;

    function __construct(string $login, string $password, string $service) {
    	$this->login = $login;
    	$this->password = $password;
    	$this->service = $service;
    
    }

    /**
    * @return string
    */
    public function getLogin(): string {
    	return $this->login;
    }

    /**
    * @param string $login
    */
    public function setLogin(string $login): void {
    	$this->login = $login;
    }

    /**
    * @return string
    */
    public function getPassword(): string {
    	return $this->password;
    }

    /**
    * @param string $password
    */
    public function setPassword(string $password): void {
    	$this->password = $password;
    }

    /**
    * @return string
    */
    public function getService(): string {
    	return $this->service;
    }

    /**
    * @param string $service
    */
    public function setService(string $service): void {
    	$this->service = $service;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Login: {$this->login}, Password: {$this->password}, Service: {$this->service}";
    }
}
