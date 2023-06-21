<?php

class Profil
{
    private int $id;
    private string $code;
    private string $libelle;
    
    protected static int $cptId = 0;

    function __construct(string $code, string $libelle) {

    	$this->id = self::$cptId++;
    	$this->code = $code;
    	$this->libelle = $libelle;
    
    }

    /**
    * @return int
    */
    public function getId(): int {
    	return $this->id;
    }

    /**
    * @param int $id
    */
    public function setId(int $id): void {
    	$this->id = $id;
    }

    /**
    * @return string
    */
    public function getCode(): string {
    	return $this->code;
    }

    /**
    * @param string $code
    */
    public function setCode(string $code): void {
    	$this->code = $code;
    }

    /**
    * @return string
    */
    public function getLibelle(): string {
    	return $this->libelle;
    }

    /**
    * @param string $libelle
    */
    public function setLibelle(string $libelle): void {
    	$this->libelle = $libelle;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Id: {$this->id}, Code: {$this->code}, Libelle: {$this->libelle}";
    }
}