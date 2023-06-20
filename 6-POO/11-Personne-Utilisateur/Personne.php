<?php

declare(strict_types=1);

namespace null;

class Personne
{
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;


    function __construct(int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire) {
    	$this->id = $id;
    	$this->nom = $nom;
    	$this->prenom = $prenom;
    	$this->mail = $mail;
    	$this->telephone = $telephone;
    	$this->salaire = $salaire;
    
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
    public function getNom(): string {
    	return $this->nom;
    }

    /**
    * @param string $nom
    */
    public function setNom(string $nom): void {
    	$this->nom = $nom;
    }

    /**
    * @return string
    */
    public function getPrenom(): string {
    	return $this->prenom;
    }

    /**
    * @param string $prenom
    */
    public function setPrenom(string $prenom): void {
    	$this->prenom = $prenom;
    }

    /**
    * @return string
    */
    public function getMail(): string {
    	return $this->mail;
    }

    /**
    * @param string $mail
    */
    public function setMail(string $mail): void {
    	$this->mail = $mail;
    }

    /**
    * @return string
    */
    public function getTelephone(): string {
    	return $this->telephone;
    }

    /**
    * @param string $telephone
    */
    public function setTelephone(string $telephone): void {
    	$this->telephone = $telephone;
    }

    /**
    * @return float
    */
    public function getSalaire(): float {
    	return $this->salaire;
    }

    /**
    * @param float $salaire
    */
    public function setSalaire(float $salaire): void {
    	$this->salaire = $salaire;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Id: {$this->id}, Nom: {$this->nom}, Prenom: {$this->prenom}, Mail: {$this->mail}, Telephone: {$this->telephone}, Salaire: {$this->salaire}";
    }
}
