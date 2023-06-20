<?php


class Personne
{
    protected int $id;
    protected string $nom;
    protected string $prenom;

    protected static int $cptId = 0;

    function __construct(string $nom, string $prenom) {


    	self::$cptId++;
        $this->id = self::$cptId;
        $this->nom = $nom;
    	$this->prenom = $prenom;
    
    }

    /**
    * @return int
    */
    public function getId(): int {
    	return $this->id;
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
    public function __toString(): string {
    	return "Id: {$this->id}, Nom: {$this->nom}, Prenom: {$this->prenom}";
    }
}
